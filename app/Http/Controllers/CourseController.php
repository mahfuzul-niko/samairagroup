<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseModule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /// category
    public function courseCategory()
    {
        $categories = CourseCategory::latest()->get();
        return view('backend.agent.sisters.skill.course-category', compact('categories'));
    }
    public function storeCategory(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $category = new CourseCategory;
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('success', 'Category created successfully.');
    }
    public function updateCategory(Request $request, CourseCategory $category)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('success', 'Category updated successfully.');
    }
    public function destroyCategory(CourseCategory $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
    //course

    public function course()
    {
        $courses = Course::latest()->with('category', 'user')->get();
        $ssdiCourses = Course::latest()->where('course_for', 'ssdi')->with('category', 'user')->get();
        $lagCourses = Course::latest()->where('course_for', 'language')->with('category', 'user')->get();
        $bothCourses = Course::latest()->where('course_for', 'both')->with('category', 'user')->get();

        return view('backend.agent.sisters.skill.allcourse', compact('courses', 'ssdiCourses', 'lagCourses', 'bothCourses'));
    }
    public function courseSsdi()
    {
        $ssdiCourses = Course::latest()->where('course_for', 'ssdi')->with('category', 'user')->get();
        return view('backend.agent.sisters.skill.ssdicourse', compact('ssdiCourses'));
    }
    public function courseLanguage()
    {

        $lagCourses = Course::latest()->where('course_for', 'language')->with('category', 'user')->get();

        return view('backend.agent.sisters.skill.langcourse', compact('lagCourses'));
    }
    public function createCourse(Request $request)
    {
        $categories = CourseCategory::latest()->get();
        $trainers = User::whereHas('role', function ($query) {
            $query->where('name', 'trainer');
        })->latest()->get();

        return view('backend.agent.sisters.skill.create-course', compact('categories', 'trainers'));
    }
    public function storeCourse(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:course_categories,id',
            'trainer_id' => 'required|exists:users,id',
            'price' => 'required',
        ]);

        $course = new Course;
        $course->title = $request->title;
        $course->category_id = $request->category_id;
        $course->user_id = $request->trainer_id;
        $course->course_for = $request->course_for;
        $course->slug = Str::slug($request->title);

        $course->subtitle = $request->subtitle;
        $course->start_date = $request->start_date;
        $course->registration_date = $request->registration_date;
        $course->deadline = $request->deadline;
        $course->duration = $request->duration;
        $course->batch = $request->batch;
        $course->price = $request->price;
        $course->total_lessons = $request->total_lessons;
        $course->status = $request->status;
        $course->class_schedule = $request->class_schedule;
        $course->description = $request->description;
        $keywords = $request->keywords
            ? array_map('trim', explode(',', $request->keywords))
            : null;

        $course->keywords = $keywords ? json_encode($keywords) : null;
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses/images', 'public');
            $course->image = $imagePath;
        }

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('courses/files', 'public');
            $course->file = $filePath;
        }
        $course->save();
        return redirect()->back()->with('success', 'Course created successfully.');
    }
    public function createEdit(Course $course, Request $request)
    {
        $categories = CourseCategory::latest()->get();
        $trainers = User::whereHas('role', function ($query) {
            $query->where('name', 'trainer');
        })->latest()->get();

        return view('backend.agent.sisters.skill.editcourse', compact('categories', 'trainers', 'course'));
    }
    public function updateCourse(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:course_categories,id',
            'trainer_id' => 'required|exists:users,id',
            'price' => 'required',
        ]);

        $course->title = $request->title;
        $course->category_id = $request->category_id;
        $course->user_id = $request->trainer_id;
        $course->course_for = $request->course_for;
        $course->slug = Str::slug($request->title);

        $course->subtitle = $request->subtitle;
        $course->start_date = $request->start_date;
        $course->registration_date = $request->registration_date;
        $course->deadline = $request->deadline;
        $course->duration = $request->duration;
        $course->batch = $request->batch;
        $course->price = $request->price;
        $course->total_lessons = $request->total_lessons;
        $course->status = $request->status;
        $course->class_schedule = $request->class_schedule;
        $course->description = $request->description;

        $keywords = $request->keywords
            ? array_map('trim', explode(',', $request->keywords))
            : null;
        $course->keywords = $keywords ? json_encode($keywords) : null;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses/images', 'public');
            $course->image = $imagePath;
        }

        // Handle file upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('courses/files', 'public');
            $course->file = $filePath;
        }

        $course->save();

        return redirect(route("agent.course.course"))->with('success', 'Course updated successfully.');

    }

    public function courseView(Course $course)
    {

        return view('backend.agent.sisters.skill.viewcourse', compact('course'));
    }

    public function destroyCourse(Course $course)
    {
        if ($course->image && Storage::exists($course->image)) {
            Storage::delete($course->image);
        }

        // Delete file if exists
        if ($course->file && Storage::exists($course->file)) {
            Storage::delete($course->file);
        }

        // Delete the course from the database
        $course->delete();

        return redirect(route("agent.course.course"))->with('success', 'Course deleted successfully.');
    }


    //module
    public function storeModule(Request $request)
    {
        $module = new CourseModule;
        $module->course_id = $request->course_id;
        $module->title = $request->title;
        $module->description = $request->description;
        $module->save();
        return redirect()->back()->with('success', 'Module Added Successfully');
    }

    public function destroyModule(CourseModule $module)
    {
        $module->delete();
        return redirect()->back()->with('success', 'Module deleted successfully.');
    }
}
