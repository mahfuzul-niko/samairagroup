<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentDashboard()
    {
        $courses = auth()->user()->courses()
            ->whereHas('enrolls', function ($query) {
                $query->where('mark', true);
            })->get();
        // dd($courses);
         $scourses = Course::where('course_for', 'ssdi')->latest()->take(6)->get();
        return view('frontend.content.dashboard',compact('courses','scourses'));
    }
    public function studentLogin()
    {
        return view('frontend.content.login');
    }
    public function studentRegister()
    {
        return view('frontend.content.register');
    }

}
