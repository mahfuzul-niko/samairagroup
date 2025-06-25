<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emergingOrder extends Model
{
     protected $guarded = [];
    public function products()
    {
        return $this->belongsToMany(emergingProduct::class, 'emerging_order_product')
            ->withPivot(['quantity', 'price', 'size', 'weight'])
            ->withTimestamps();
    }
}
