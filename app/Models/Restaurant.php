<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'restaurant_id',
        'name', 
        'address', 
        'phone', 
        'opening_hour', 
        'closing_hour',
    ];

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
    
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'restaurant_menu');
    }
    
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
     
}