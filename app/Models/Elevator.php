<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elevator extends Model
{
    use HasFactory;
    protected $table = 'elevators';
    public $timestamps = false;

    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
