<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Service extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'picture',
        'description',
        'id',
        'name'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('services')->singleFile(); // Collection pour une seule image par service
    }

    public function registerMediaConversions(Media $media = null): void
    {
    $this->addMediaConversion('grayscale-large')
        ->width(1200)
        ->height(800)           
        ->brightness(-25)       // Assombrit un peu pour plus de contraste avec le texte        
        ->sharpen(5)            // Reste un peu nette malgré le flou
        ->quality(80)
        ->performOnCollections('services'); // Ou 'vehicles', selon le cas

    $this->addMediaConversion('admin')
        ->width(150)
        ->height(150)
        ->sharpen(10)
        ->performOnCollections('services');
    }
}
