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
}
