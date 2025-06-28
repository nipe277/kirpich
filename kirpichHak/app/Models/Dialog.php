<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Dialog extends Model
{
    protected $fillable = ['user_id', 'builder_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function builder()
    {
        return $this->belongsTo(Builder::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}