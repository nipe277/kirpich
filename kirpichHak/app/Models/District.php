<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name'];

    public function cities()
    {
        return $this->belongsToMany(City::class, 'district_city');
    }

    public function streets()
    {
        return $this->belongsToMany(Street::class, 'district_street');
    }

    public function realties()
    {
        return $this->hasMany(Realty::class);
    }
}