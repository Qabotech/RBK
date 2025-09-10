<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Bilder extends Model implements HasMedia
{
    use InteractsWithMedia;

    /**
     * Register the media conversions for the model.
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130)
            ->sharpen(10);

        $this->addMediaConversion('medium-size')
            ->width(600)
            ->height(600)
            ->sharpen(10);
    }

    /**
     * Register the media collections for the model.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('my_multi_collection')
            ->singleFile();  // If you want to allow single file only
    }
            /**
     * Define the relationship with the Laden model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function laden()
    {
        return $this->hasMany(Laden::class);
    }
}