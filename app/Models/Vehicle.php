<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'picture',
        'brand',
        'model',
        'fuel',
        'description',
        'year',
        'mile',
        'price'
    ];
}
