<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\FeaturedCourse;
use App\Models\GroupAbout;
use App\Models\GroupBanner;
use App\Models\JpPartner;
use App\Models\JpReview;
use App\Models\Partner;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\Review;
use App\Models\SamairaGroup;
use App\Models\SkillAdvertise;
use App\Models\SkillBanner;
use App\Models\SkillCertified;
use App\Models\SuccessStorie;
use App\Models\VideoProperty;
use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function samairagroup()
     {
          $banners = GroupBanner::latest()->get();
          $concerns = SamairaGroup::orderBy('order')->get();
          return view('frontend.samairagroup.index', compact('banners', 'concerns', ));
     }


     public function samairaskills()
     {
          $certifieds = SkillCertified::latest()->get();
          $advertise = SkillAdvertise::latest()->first() ?? new SkillAdvertise();

          $concerns = SamairaGroup::orderBy('order')->get();
          $categories = CourseCategory::with([
               'courses' => function ($query) {
                    $query->where('course_for', 'ssdi');
               }
          ])->whereHas('courses', function ($query) {
               $query->where('course_for', 'ssdi');
          })->latest()->get();
          $courses = Course::where('course_for', 'ssdi')->latest()->take(6)->get();
          $featured = FeaturedCourse::latest()->where('for', 'ssdi')->first();
          $reviews = Review::where('mark', true)->latest()->take(9)->get();
          $banners = SkillBanner::latest()->where('key', 'ssdi')->get();
          return view('frontend.samairaskills.index', compact('certifieds', 'advertise', 'concerns', 'categories', 'courses', 'featured', 'reviews', 'banners'));
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


          $featured = FeaturedCourse::latest()->where('for', 'language')->first();
          $certifieds = SkillCertified::latest()->get();
          $reviews = Review::latest()->get();
          $courses = Course::where('course_for', 'language')->latest()->take(6)->get();
          $stories = SuccessStorie::latest()->take(6)->get();
          $banners = ContactBanner::latest()->where('key', 'language')->get();
          return view('frontend.samairaskillsjapan.index', compact('certifieds', 'featured', 'courses', 'stories', 'banners', 'reviews'));
     }

     public function jphomes()
     {
          $banners = Banner::latest()->where('key', 'jphomes')->get();
          $categories = PropertyCategory::latest()->get();
          $properties = Property::latest()->take(6)->get();
          $propertiesCount = Property::count();
          $creviews = JpReview::latest()->where('type', 'customer')->get();
          $oreviews = JpReview::latest()->where('type', 'owner')->get();
          $videos = VideoProperty::latest()->take(6)->get();
          $partners = JpPartner::latest()->get();
          return view('frontend.samairajoypurhomes.index', compact('banners', 'categories','properties','propertiesCount', 'creviews','oreviews', 'videos','partners'));
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
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'samairagroup')->get();
          $about = About::latest()->where('key', 'samairagroup')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns'));
     }
     public function samairaskillsAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'ssdi')->get();
          $about = About::latest()->where('key', 'ssdi')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns'));
     }
     public function samairaskillsJapanAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'language')->get();
          $about = About::latest()->where('key', 'language')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns'));
     }

     //contacts
     public function samairaGroupContact()
     {
          $banners = ContactBanner::latest()->where('key', 'samairagroup')->get();
          $info = ContactInfo::latest()->where('key', 'samairagroup')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns'));
     }
     public function ssdiContact()
     {
          $banners = ContactBanner::latest()->where('key', 'ssdi')->get();
          $info = ContactInfo::latest()->where('key', 'ssdi')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns'));
     }
     public function samairaskillsJapanContact()
     {
          $banners = ContactBanner::latest()->where('key', 'language')->get();
          $info = ContactInfo::latest()->where('key', 'language')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns'));
     }

     public function newregister()
     {
          return view('frontend.content.register');
     }
     public function newlogin()
     {
          return view('frontend.content.login');
     }
     public function newdashboard()
     {
          return view('frontend.content.dashboard');
     }
     public function awards()
     {
          return view('frontend.content.awards-and-achievement');
     }
     public function chairman()
     {
          return view('frontend.content.chairman-and-managing-diretor');
     }
     public function news()
     {
          return view('frontend.content.news-and-events');
     }
     public function newssingle()
     {
          return view('frontend.content.news-and-events-single');
     }
     public function carrer()
     {
          return view('frontend.content.carrer');
     }
     public function jphomesSingleProperty()
     {
          return view('frontend.samairajoypurhomes.single-property');
     }



     //soon
     public function comingsoon()
     {
          return view('frontend.content.coming-soon');
     }
    
}
