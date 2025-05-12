<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['name'];

    public function stocks()
    {
        return $this->hasMany(ProductStock::class);
    }
}