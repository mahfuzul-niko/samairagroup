<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedCourse extends Model
{
    protected $guarded = [];
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
