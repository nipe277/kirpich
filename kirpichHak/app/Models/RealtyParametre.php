<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RealtyParametre extends Pivot
{
    protected $table = 'realty_parametres';
    protected $fillable = ['realty_id', 'parametre_id'];
}