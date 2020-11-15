<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'movie_id', 'status'
    ];
    // Ditambah id kok error?
    public function movie() {
        return $this->belongsTo('App\Movie');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
