<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emergingImages extends Model
{
    protected $guarded = [];
    public function products()
    {
        return $this->belongsTo(emergingProduct::class, 'product_id');
    }
}
