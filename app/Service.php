<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'user_id', 'title', 'description', 'price', 'picture'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
