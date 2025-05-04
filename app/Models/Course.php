<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function modules()
    {
        return $this->hasMany(CourseModule::class);
    }
    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $casts = [
        'start_date' => 'date',
        'registration_date' => 'date',
        'deadline' => 'date',
        'keywords' => 'array',
    ];

    
    
}
