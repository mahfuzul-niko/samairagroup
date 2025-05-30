<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    protected $guarded = [];

    /**
     * Get the properties associated with the category.
     */
    public function properties()
    {
        return $this->hasMany(Property::class, 'category_id');
    }
}
