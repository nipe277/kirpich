<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DistrictCity extends Pivot
{
    protected $table = 'district_city';
    protected $fillable = ['city_id', 'district_id'];
}
