<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExceptionalEvent extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'description',
        'location',
    ];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
