<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'type_rating_id', 'comment'
    ];

    /**
     * Get the purchases for the service
     */
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }

    /**
     * Get the type rating for the rating
     */
    public function type_rating()
    {
        return $this->belongsTo('App\TypeRating');
    }
}
