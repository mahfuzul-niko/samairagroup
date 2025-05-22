<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentDashboard()
    {

        $courses = auth()->user()->courses()
            ->whereHas('enrolls', function ($query) {
                $query->where('mark', true);
            })->get();
        $scourses = Course::latest()->take(6)->get();
        return view('frontend.content.dashboard', compact('courses', 'scourses'));
    }
    public function studentLogin()
    {
        return view('frontend.content.login');
    }
    public function studentRegister()
    {
        return view('frontend.content.register');
    }

    public function storeReview(Request $request)
    {
        $review = new Review;
        $review->course_id = $request->course_id;
        $review->name = auth()->user()->name;
        $review->image = auth()->user()->image;
        $review->review = $request->review;
        $review->save();
        return redirect()->back()->with('success', 'Review Added successfully.');
    }
    public function studentProfile()
    {
        return view('frontend.content.student-profile');
    }
    public function certificate()
    {
         $certificates = auth()->user()->certificates;
        return view('frontend.content.certificate', compact('certificates'));
    }

}
