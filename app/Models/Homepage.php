<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Homepage extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('background')->singleFile(); 

    }


    public function registerMediaConversions(Media $media = null): void
    {

        // conversion pour une image plus grande (index)
        $this->addMediaConversion('homepage-background')
            ->width(1920)
            ->height(1080)
            ->sharpen(10)
            ->performOnCollections('background'); // ← ← ← SUPER IMPORTANT
    }
}
