<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emergingProduct extends Model
{
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(emergingCategory::class, 'category_id');
    }
    public function images()
    {
        return $this->hasMany(emergingImages::class, 'product_id');
    }
    public function orders()
    {
        return $this->belongsToMany(EmergingOrder::class, 'emerging_order_product')
            ->withPivot(['quantity', 'price', 'size', 'weight'])
            ->withTimestamps();
    }
}
