<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $fillable = ['name', 'whatsapp_number'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
