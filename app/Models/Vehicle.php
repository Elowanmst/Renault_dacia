<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Image\Enums\CropPosition;




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
        'color',
        'license_plate',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('vehicles');
    }

    
    public function registerMediaConversions(Media $media = null): void
    {

        // conversion pour une image plus grande (index)
        $this->addMediaConversion('large')
            ->width(470)
            ->height(300)
            ->crop(470, 300, CropPosition::Center)
            ->sharpen(10)
            ->performOnCollections('vehicles'); // ← ← ← SUPER IMPORTANT

            $this->addMediaConversion('admin-show')
            ->width(370)
            ->height(170)
            ->crop(400, 270, CropPosition::Center)
            ->sharpen(10)
            ->performOnCollections('vehicles'); // ← ← ← SUPER IMPORTANT

            // Conversion pour une miniature (admin)
         $this->addMediaConversion('thumb')
            ->width(300)
            ->height(150)
            ->sharpen(10) // Améliore la netteté
            ->performOnCollections('vehicles');

        //  $this->addMediaConversion('show')
        //     ->width(600)
        //     ->height(300)
        //     ->sharpen(10) // Améliore la netteté
        //     ->performOnCollections('vehicles');

        $this->addMediaConversion('carousel')
            ->width(800)
            ->height(450)
            ->crop(800, 450, CropPosition::Center)
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




