<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    
    //table name
    protected $table="managers";
    //primary key
    public $primarykey='id';
    //remove timestamps
    public $timestamps = false;

    //Model Relationship with buildings
    public function building(){
        //A manager can manage multiple buildings
        return $this->hasMany(Bulding::class);
        
    }
}
