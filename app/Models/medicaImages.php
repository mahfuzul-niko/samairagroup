<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medicaImages extends Model
{
    protected $guarded = [];
    public function products()
    {
        return $this->belongsTo(medicaProduct::class, 'product_id');
    }
}
