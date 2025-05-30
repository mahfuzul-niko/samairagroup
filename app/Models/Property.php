<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(PropertyCategory::class, 'category_id');
    }
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
    
    public function comments()
    {
        return $this->hasMany(PropertyComment::class);
    }
    public function orders()
    {
        return $this->hasMany(PropertyOrder::class);
    }
    
    
}
