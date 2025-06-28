<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['email', 'password', 'remember_token'];

    public function favorites()
    {
        return $this->belongsToMany(Realty::class, 'favorite_user', 'user_id', 'realty_id');
    }

    public function dialogs()
    {
        return $this->hasMany(Dialog::class);
    }

    public function requestViewings()
    {
        return $this->hasMany(RequestViewing::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function realties()
    {
        return $this->hasMany(Realty::class, 'seller_id');
    }
}