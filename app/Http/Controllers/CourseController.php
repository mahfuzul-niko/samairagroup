<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseModule;
use App\Models\Enroll;
use App\Models\FeaturedCourse;
use App\Models\Role;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Mail\CourseEnrolledMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


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
        $courses = Course::latest()->with('category')->get();
        $ssdiCourses = Course::latest()->where('course_for', 'ssdi')->with('category')->get();
        $lagCourses = Course::latest()->where('course_for', 'language')->with('category')->get();
        $bothCourses = Course::latest()->where('course_for', 'both')->with('category')->get();

        return view('backend.agent.sisters.skill.allcourse', compact('courses', 'ssdiCourses', 'lagCourses', 'bothCourses'));
    }
    public function courseSsdi()
    {
        $ssdiCourses = Course::latest()->where('course_for', 'ssdi')->with('category')->get();
        return view('backend.agent.sisters.skill.ssdicourse', compact('ssdiCourses'));
    }
    public function courseLanguage()
    {

        $lagCourses = Course::latest()->where('course_for', 'language')->with('category')->get();
        return view('backend.agent.sisters.skill.langcourse', compact('lagCourses'));
    }
    public function createSSDICourse(Request $request)
    {
        $categories = CourseCategory::latest()->get();
        $trainers = Trainer::latest()->get();

        return view('backend.agent.sisters.skill.ssdi-create-course', compact('categories', 'trainers'));
    }
    public function createLanguageCourse(Request $request)
    {
        
        $trainers = Trainer::latest()->get();

        return view('backend.agent.sisters.skill.language-create-course', compact( 'trainers'));
    }
    public function storeCourse(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'trainer_id' => 'required|exists:users,id',
            'price' => 'required',
        ]);

        $course = new Course;
        $course->title = $request->title;
        $course->category_id = $request->category_id;
        $course->trainer_id = $request->trainer_id;
        $course->course_for = $request->course_for;
        $course->course_type = $request->course_type;
        $course->course_code = $request->course_code;
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
    public function createSSDiEdit(Course $course, Request $request)
    {
        $categories = CourseCategory::latest()->get();
        $trainers = Trainer::latest()->get();
        return view('backend.agent.sisters.skill.ssdi-edit-course', compact('categories', 'trainers', 'course'));
    }
    public function createLanguageEdit (Course $course, Request $request)
    {
        
        $trainers = Trainer::latest()->get();
        return view('backend.agent.sisters.skill.language-edit-course', compact( 'trainers', 'course'));
    }
    public function updateCourse(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required',
        ]);

        $course->title = $request->title;
        $course->category_id = $request->category_id;
        $course->trainer_id = $request->trainer_id;
        $course->course_for = $request->course_for;
        $course->course_type = $request->course_type;
        $course->course_code = $request->course_code;
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

    public function courseSSDiView(Course $course)
    {

        return view('backend.agent.sisters.skill.ssdi-viewcourse', compact('course'));
    }
    public function courseLanguageView(Course $course)
    {

        return view('backend.agent.sisters.skill.language-viewcourse', compact('course'));
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

    //enroll
    public function storeCourseEnroll(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
        ]);
        $enroll = new Enroll;
        $enroll->course_id = $request->course_id;
        $enroll->name = $request->name;
        $enroll->email = $request->email;
        $enroll->phone = $request->number;
        $enroll->at = $request->at;
        $enroll->save();
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $user = new User;
            $user->name = $request->name;
            $user->username = Str::slug($request->name) . rand(10000, 99999);
            $user->role_id = Role::where('name', 'student')->first()->id;
            $user->email = $request->email;
            $user->phone = $request->number;
            $user->password = Hash::make($request->number);
            $user->save();
        }
        $course = Course::find($request->course_id);
        $course->users()->syncWithoutDetaching([$user->id]);
        Mail::to($enroll->email)->send(new CourseEnrolledMail($enroll, $course));
        return redirect(route('page.ssdi'))->with('success', 'Course Enroll Successfully')->with('info', 'Please check your email');
    }

    public function ssdiEnrollList()
    {
        $enrolls = Enroll::latest()->where('at', 'ssdi')->get();
        return view('backend.agent.sisters.skill.ssdi-enroll', compact('enrolls'));
    }
    public function updateMark(Request $request, Enroll $enroll)
    {
        $enroll->mark = $request->has('mark') ? 1 : 0;
        $enroll->save();
        $message = $enroll->mark ? 'Enrollment approved successfully.' : 'Enrollment approval removed.';
        return redirect()->back()->with('success', $message);
    }
    public function destroyEnroll(Enroll $enroll)
    {
        $enroll->delete();
        return redirect()->back()->with('success', 'Enroll deleted successfully.');
    }
    public function updateEnroll(Request $request, Enroll $enroll)
    {
        $enroll->name = $request->name;
        $enroll->email = $request->email;
        $enroll->phone = $request->phone;
        $enroll->save();
        return redirect()->back()->with('success', 'Enroll Updated successfully.');
    }

    ///trainer
    public function trainer()
    {
        $trainers = Trainer::latest()->get();
        return view('backend.agent.sisters.skill.tranier', compact('trainers'));
    }
    public function storeTrainer(Request $request)
    {
        $imagePath = $request->file('image')->store('trainers', 'public');

        // Save the trainer
        $trainer = new Trainer;
        $trainer->name = $request->name;
        $trainer->skills = $request->skills;
        $trainer->image = $imagePath;
        $trainer->email = $request->email;
        $trainer->phone = $request->phone;
        $trainer->save();
        return redirect()->back()->with('success', 'Trainer Added successfully.');
    }
    public function updateTrainer(Request $request, Trainer $trainer)
    {

        if ($request->hasFile('image')) {
            $trainer->image = $request->file('image')->store('trainers', 'public');
        }

        $trainer->name = $request->name;
        $trainer->skills = $request->skills;
        $trainer->email = $request->email;
        $trainer->phone = $request->phone;
        $trainer->save();

        return redirect()->back()->with('success', 'Trainer updated.');
    }
    public function destroyTrainer(Trainer $trainer)
    {
        // Optionally delete image file
        if ($trainer->image && Storage::disk('public')->exists($trainer->image)) {
            Storage::disk('public')->delete($trainer->image);
        }

        $trainer->delete();

        return redirect()->back()->with('success', 'Trainer deleted successfully.');
    }

    //featured course
    public function courseFeatured()
    {
        $courses = Course::latest()->get();
        $features = FeaturedCourse::latest()->get();
        return view('backend.agent.sisters.skill.featured', compact('courses', 'features'));
    }
    public function storeFeature(Request $request)
    {
        $course = Course::findOrFail($request->course_id);

        $feature = new FeaturedCourse;
        $feature->title = $request->title;
        $feature->for = $course->course_for;
        $feature->course_id = $request->course_id;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('feature/images', 'public');
            $feature->image = $imagePath;
        }
        $feature->save();
        return redirect()->back()->with('success', 'New Feature Added Successfully');
    }
    public function updateFeature(Request $request, FeaturedCourse $feature)
    {
        $course = Course::findOrFail($request->course_id);
        $feature->title = $request->title;
        $feature->course_id = $request->course_id;
        $feature->for = $course->course_for;
        if ($request->hasFile('image')) {

            if ($feature->image && Storage::disk('public')->exists($feature->image)) {
                Storage::disk('public')->delete($feature->image);
            }


            $imagePath = $request->file('image')->store('feature/images', 'public');
            $feature->image = $imagePath;
        }
        $feature->save();
        return redirect()->back()->with('success', 'New Feature Updated Successfully');
    }
    public function destroyFeature(FeaturedCourse $feature)
    {

        if ($feature->image && Storage::disk('public')->exists($feature->image)) {
            Storage::disk('public')->delete($feature->image);
        }

        $feature->delete();
        return redirect()->back()->with('success', 'Featured course deleted successfully.');
    }





}
