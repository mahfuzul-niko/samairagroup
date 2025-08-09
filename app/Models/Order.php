<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function products()
    {
        return $this->belongsToMany(medicaProduct::class, 'order_product')
            ->withPivot(['quantity', 'price', 'size', 'weight','delivery'])
            ->withTimestamps();
    }


}
