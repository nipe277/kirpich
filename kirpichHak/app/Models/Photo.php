<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path'];

    public function realty()
    {
        return $this->hasOne(Realty::class);
    }
}
