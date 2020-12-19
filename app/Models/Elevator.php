<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elevator extends Model
{
    use HasFactory;
    //table name
    protected $table="elevators";
    //primary key
    public $primarykey='id';
    //remove timestamps
    public $timestamps = false;


     //Model Relationship with building
     public function building(){
        //An Elevator Belongs to One Building
        return $this->belongsto(Building::class);
        
    }
}
