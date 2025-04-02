<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    protected $fillable = [
        'day',
        'morningO',
        'morningC',
        'afternoonO',
        'afternoonC',
    ];
}
