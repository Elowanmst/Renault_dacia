<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
        'status',
        'type',
        'requirements',
        'responsibilities',
        'posted_at',
        'expires_at',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

}
