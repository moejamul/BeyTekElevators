<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $table = 'buildings';
    public $timestamps = false;

    public function elevator()
    {
        return $this->hasMany(Elevator::class);
    }

    public function managers()
    {
        return $this->belongsToMany(Manager::class);
    }
    
    
}
