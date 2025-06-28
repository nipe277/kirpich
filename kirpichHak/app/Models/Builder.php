<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{
    protected $fillable = ['inn', 'ogrn', 'status', 'review_id'];
    protected $casts = ['status' => 'string'];

    public function dialogs()
    {
        return $this->hasMany(Dialog::class);
    }
}