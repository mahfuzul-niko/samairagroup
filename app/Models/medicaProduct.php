<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medicaProduct extends Model
{
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(medicaCategory::class, 'category_id');
    }
    public function images()
    {
        return $this->hasMany(medicaImages::class, 'product_id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')
            ->withPivot(['quantity', 'price', 'size', 'weight'])
            ->withTimestamps();
    }


}
