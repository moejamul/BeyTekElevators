<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'managers';
    public $timestamps = false;
  

    public function buildings()
    {
        return $this->belongsToMany(Building::class);
    }
}
