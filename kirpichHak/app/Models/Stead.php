<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stead extends Model
{
    protected $fillable = ['appointment', 'square', 'facilities', 'distanceToCity', 'price', 'sold'];
    protected $casts = ['appointment' => 'string', 'facilities' => 'array', 'sold' => 'boolean'];
}
