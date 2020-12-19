<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    

    //table name
    protected $table="buildings";
    //primary key
    public $primarykey='id';
    //remove timestamps
    public $timestamps = false;

    //Model Relationship with elevator
    public function elevators(){
        //A building has Multiple Elevators
        return $this->hasMany(Elevator::class);
        
    }
    public function managers(){
        //A building has Multiple Elevators
        return $this->hasMany(Manager::class);
        
    }
}
