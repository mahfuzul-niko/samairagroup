<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medicaCategory extends Model
{
    protected $guarded = [];
    public function products()
    {
        return $this->hasMany(medicaProduct::class, 'category_id');
    }
}
