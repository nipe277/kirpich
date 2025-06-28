<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['dialog_id', 'text', 'datetime', 'readed'];
    protected $casts = ['readed' => 'boolean', 'datetime' => 'datetime'];

    public function dialog()
    {
        return $this->belongsTo(Dialog::class);
    }
}
