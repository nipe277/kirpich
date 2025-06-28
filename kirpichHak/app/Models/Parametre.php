<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = ['name'];

    public function realties()
    {
        return $this->belongsToMany(Realty::class, 'realty_parametres', 'parametre_id', 'realty_id');
    }
}