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
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function enrolls()
    {
        return $this->hasMany(Enroll::class);
    }
    public function featuredcourses()
    {
        return $this->hasMany(FeaturedCourse::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    protected $casts = [
        'start_date' => 'date',
        'registration_date' => 'date',
        'deadline' => 'date',
        'keywords' => 'array',
    ];



}
