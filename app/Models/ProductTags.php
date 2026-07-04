<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTags extends Model
{
    //
    protected $fillable = [
        'product_id',
        'tag_id',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    public function tags()
    {
        return $this->belongsTo(Tags::class);
    }
}