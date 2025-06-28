<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalObject extends Model
{
    protected $fillable = ['type', 'square', 'accessType', 'additional', 'price', 'realty_id'];
    protected $casts = ['type' => 'string', 'accessType' => 'string', 'additional' => 'array'];

    public function realty()
    {
        return $this->belongsTo(Realty::class);
    }
}