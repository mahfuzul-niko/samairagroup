<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOrder extends Model
{

    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
