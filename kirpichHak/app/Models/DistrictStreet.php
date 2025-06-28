<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DistrictStreet extends Pivot
{
    protected $table = 'district_street';
    protected $fillable = ['street_id', 'district_id'];
}