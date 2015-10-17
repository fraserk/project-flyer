<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    /**
     * Fillable fields for Flyer.
     *
     */
    protected $fillable = [
        'city',
        'zipcode',
        'country',
        'state',
        'price',
        'description'
    ];

    /**
     * A flyer has many photos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
