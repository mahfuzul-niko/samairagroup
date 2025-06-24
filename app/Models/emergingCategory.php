<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emergingCategory extends Model
{
     protected $guarded = [];
    public function products()
    {
        return $this->hasMany(emergingProduct::class, 'category_id');
    }
}
