<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realty extends Model
{
    protected $fillable = [
        'title', 'description', 'roomCount', 'square', 'bathroomCount', 'type',
        'status', 'legalClear', 'region_id', 'district_id', 'street_id',
        'houseNumber', 'floorNumber', 'entrance', 'flatNumber', 'photo_id',
        'seller_id', 'bedroomCount', 'price', 'sold', 'finishing', 'finishingType'
    ];
    protected $casts = [
        'type' => 'string',
        'status' => 'array',
        'legalClear' => 'boolean',
        'sold' => 'boolean',
        'finishing' => 'boolean',
        'finishingType' => 'string'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorite_user', 'realty_id', 'user_id');
    }

    public function technicalObjects()
    {
        return $this->hasMany(TechnicalObject::class);
    }

    public function parametres()
    {
        return $this->belongsToMany(Parametre::class, 'realty_parametres', 'realty_id', 'parametre_id');
    }

    public function requestViewings()
    {
        return $this->hasMany(RequestViewing::class);
    }
}