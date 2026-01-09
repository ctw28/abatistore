<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['sale_date', 'buyer_id', 'payment_method', 'total_paid'];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function items()
    {
        return $this->hasMany(SaleItem::class);
    }
}
