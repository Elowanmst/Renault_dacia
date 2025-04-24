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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('vehicles')->singleFile();
    }

    
    public function registerMediaConversions(Media $media = null): void
    {

        // conversion pour une image plus grande (index)
        $this->addMediaConversion('large')
            ->width(400)
            ->height(200)
            ->sharpen(10)
            ->performOnCollections('vehicles'); // ← ← ← SUPER IMPORTANT

            // Conversion pour une miniature (admin)
         $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->sharpen(10) // Améliore la netteté
            ->performOnCollections('vehicles');

         $this->addMediaConversion('show')
            ->width(600)
            ->height(300)
            ->sharpen(10) // Améliore la netteté
            ->performOnCollections('vehicles');
    }

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, ',', ' ') . ' €';
    }

    public function getFormattedMileageAttribute()
    {
        return number_format($this->mileage, 0, ',', ' ') . ' km';
    }
    
}




