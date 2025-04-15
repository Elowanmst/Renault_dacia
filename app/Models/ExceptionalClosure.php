<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExceptionalClosure extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'reason',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
