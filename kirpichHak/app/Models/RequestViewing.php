<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestViewing extends Model
{
    protected $fillable = ['realty_id', 'user_id', 'request_viewing_status_id'];

    public function realty()
    {
        return $this->belongsTo(Realty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(RequestViewingStatus::class, 'request_viewing_status_id');
    }
}