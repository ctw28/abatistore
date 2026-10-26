<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $casts = [
        'is_featured' => 'boolean',
        'is_habis' => 'boolean'
    ];

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'image',
        'is_featured',
        'is_habis',
        'link_shopee'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }
    public function tags()
    {
        return $this->belongsToMany(
            Tags::class,
            'product_tags',
            'product_id',
            'tag_id'
        );
    }
    protected static function booted()
    {
        static::saving(function ($product) {
            // Buat slug otomatis saat produk baru dibuat
            // atau ketika nama produk diubah.
            if (
                empty($product->slug) ||
                $product->isDirty('name')
            ) {
                $baseSlug = Str::slug($product->name) ?: 'produk';
                $slug = $baseSlug;
                $counter = 2;

                while (
                    static::where('slug', $slug)
                    ->when($product->exists, function ($query) use ($product) {
                        $query->where('id', '!=', $product->id);
                    })
                    ->exists()
                ) {
                    $slug = $baseSlug . '-' . $counter;
                    $counter++;
                }

                $product->slug = $slug;
            }
        });
    }
}