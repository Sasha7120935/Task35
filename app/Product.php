<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany(\App\Category::class);
    }
    public function Orders()
    {
        return $this->belongsToMany(\App\Order::class);
    }
    public function galleryImages()
    {
        return $this->belongsToMany(\App\ProductImage::class);
    }
    public function setThumbnailAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['thumbnail'] = str_replace('public/storage/','',$value);
        }
    }
}
