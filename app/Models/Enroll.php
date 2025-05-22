<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $guarded = [];
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function certificate()
{
    return $this->hasOne(Certificate::class);
}
}
