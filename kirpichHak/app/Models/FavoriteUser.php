<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FavoriteUser extends Pivot
{
    protected $table = 'favorite_user';
    protected $fillable = ['realty_id', 'user_id'];
}