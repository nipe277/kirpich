<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestViewingStatus extends Model
{
    protected $fillable = ['name'];

    public function requestViewings()
    {
        return $this->hasMany(RequestViewing::class, 'request_viewing_status_id');
    }
}
