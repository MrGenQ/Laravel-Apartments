<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location', 'floor', 'bedrooms', 'car_spaces', 'living_spaces', 'bathrooms', 'area', 'price', 'status', 'date_sell_from', 'date_sell_to'];
}
