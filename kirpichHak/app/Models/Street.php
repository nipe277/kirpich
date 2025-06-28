<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = ['name'];

    public function districts()
    {
        return $this->belongsToMany(District::class, 'district_street');
    }

    public function realties()
    {
        return $this->hasMany(Realty::class);
    }
}