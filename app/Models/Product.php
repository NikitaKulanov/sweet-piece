<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'title', 'price', 'weight', 'manufacturer_id', 'main_image_id', 'short_description', 'description', 'category_id', 'rating'
    ];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

    public function imageCard()
    {
        return $this->images()->where('main', 1)->first();
    }

    public function imagesForCarousel(): Collection
    {
        return $this->images()->where('main', 0)->get();
    }
}
