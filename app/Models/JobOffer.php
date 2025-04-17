<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    protected $fillable = [
        'title',
        'description', 
        'location', 
        'salary_description', // e.g., 50000
        'status', // e.g., open, closed
        'type', // e.g., full-time, part-time, contract
        'requirements', // e.g., education, experience
        'responsibilities', // e.g., tasks and duties
        'posted_at',
        'expires_at',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

}
