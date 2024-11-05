<?php

// app/Models/Reservation.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'name',
        'email',
        'phone',
        'date',
        'time',
        'people',
        'pesan',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function table()
    {
        return $this->belongsTo(Table::class);
    }
    
}

