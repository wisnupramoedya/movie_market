<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name', 'year', 'genre', 'rating', 'description', 'price'
    ];

    public function carts() {
        return $this->hasMany('App\Cart');
    }
}
