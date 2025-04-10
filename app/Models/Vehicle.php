<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Vehicle extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'brand',
        'model',
        'description',
        'year',
        'mileage',
        'transmission',
        'puissance',
        'fuel',
        'type',
        'price',
        'picture',
        'color',
        'license_plate',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        // Conversion pour une miniature (admin)
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->sharpen(10); // Améliore la netteté

        // Conversion pour une image plus grande (index)
        $this->addMediaConversion('large')
            ->width(800)
            ->height(600)
            ->sharpen(10); // Améliore la netteté
    }
    
}




