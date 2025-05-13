<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\FeaturedCourse;
use App\Models\GroupAbout;
use App\Models\GroupBanner;
use App\Models\Partner;
use App\Models\SamairaGroup;
use App\Models\SkillAdvertise;
use App\Models\SkillCertified;
use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function samairagroup()
     {
          $banners = GroupBanner::latest()->get();
          $concerns = SamairaGroup::get();


          return view('frontend.samairagroup.index', compact('banners', 'concerns', ));
     }


     public function samairaskills()
     {
          $certifieds = SkillCertified::latest()->get();
          $advertise = SkillAdvertise::latest()->first() ?? new SkillAdvertise();


          $categories = CourseCategory::latest()->get();
          $courses = Course::where('course_for', 'ssdi')->latest()->take(6)->get();
          $featured = FeaturedCourse::latest()->first();
          return view('frontend.samairaskills.index', compact('certifieds', 'advertise', 'categories', 'courses', 'featured'));
     }
     public function ssdiCourse(Course $course)
     {

          return view('frontend.samairaskills.single-course', compact('course'));
     }

     public function ssdiCourseEnroll(Course $course)
     {
          return view('frontend.samairaskills.enroll', compact('course'));
     }


     public function samairaskillsJapan()
     {
          return view('frontend.samairaskillsjapan.index');
     }
     public function samairatravels()
     {
          return view('frontend.samairatravels.index');
     }
     public function samairamptravels()
     {
          return view('frontend.samairamptravels.index');
     }

     public function samairacontact()
     {
          return view('frontend.samairaskills.contact');
     }
     public function samairajoypurhomes()
     {
          return view('frontend.samairajoypurhomes.index');
     }
     public function enrollpage()
     {
          return view('frontend.samairaskills.enroll');
     }
     public function aboutus()
     {
          return view('frontend.content.about');
     }
     public function contactus()
     {
          return view('frontend.content.contact');
     }


     //abouts
     public function samairagroupAbout()
     {
          $concerns = SamairaGroup::latest()->get();
          $banners = AboutBanner::latest()->where('key', 'samairagroup')->get();
          $about = About::latest()->where('key', 'samairagroup')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns'));
     }
     public function samairaskillsAbout()
     {
          $concerns = SamairaGroup::latest()->get();
          $banners = AboutBanner::latest()->where('key', 'ssdi')->get();
          $about = About::latest()->where('key', 'ssdi')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns'));
     }

     //contacts
     public function samairaGroupContact()
     {
          $banners = ContactBanner::latest()->where('key', 'samairagroup')->get();
          $info = ContactInfo::latest()->where('key', 'samairagroup')->first();
          $concerns = SamairaGroup::latest()->get();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns'));
     }
     public function ssdiContact()
     {
          $banners = ContactBanner::latest()->where('key', 'ssdi')->get();
          $info = ContactInfo::latest()->where('key', 'ssdi')->first();
          $concerns = SamairaGroup::latest()->get();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns'));
     }





     //soon
     public function comingsoon()
     {
          return view('frontend.content.coming-soon');
     }
}
