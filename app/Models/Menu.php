<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'restaurant_id', 
        'name', 
        'description', 
        'price', 
        'category', 
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'menu');
    }
}

