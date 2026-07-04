<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $fillable = [
        'group',
        'name',
        'color'
    ];
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'product_tags',
            'tag_id',
            'product_id'
        );
    }
    public function productTags()
    {
        return $this->hasMany(ProductTags::class);
    }
}