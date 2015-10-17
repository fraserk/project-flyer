<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * Fillable fields for Photo.
     *
     */
    protected $fillable = [
        'photo',
        'flyer_id'
    ];

    /**
     * A photo belongs to one flyer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }
}
