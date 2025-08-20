<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\agroBenefit;
use App\Models\agroIntroduction;
use App\Models\agroPartner;
use App\Models\agroProject;
use App\Models\allMission;
use App\Models\aviationAirline;
use App\Models\aviationFrom;
use App\Models\aviationPartner;
use App\Models\aviationRequest;
use App\Models\aviationTo;
use App\Models\Award;
use App\Models\Banner;
use App\Models\Chairman;
use App\Models\concernContent;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Download;
use App\Models\emergingCategory;
use App\Models\emergingPartner;
use App\Models\emergingProduct;
use App\Models\emergingReview;
use App\Models\FeaturedCourse;
use App\Models\gallary;
use App\Models\goldPartner;
use App\Models\goldReview;
use App\Models\goldServices;
use App\Models\GroupAbout;
use App\Models\GroupBanner;
use App\Models\homeCount;
use App\Models\homeNews;
use App\Models\jobAbout;
use App\Models\jobPartner;
use App\Models\jobProject;
use App\Models\jobWork;
use App\Models\JpPartner;
use App\Models\JpReview;
use App\Models\medicaCategory;
use App\Models\medicaPartner;
use App\Models\medicaProduct;
use App\Models\medicaReview;
use App\Models\News;
use App\Models\Partner;
use App\Models\Privacy;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\raisaPartner;
use App\Models\raisaReview;
use App\Models\raisaServices;
use App\Models\Review;
use App\Models\SamairaGroup;
use App\Models\SkillAdvertise;
use App\Models\SkillBanner;
use App\Models\SkillCertified;
use App\Models\spsChoose;
use App\Models\spsReview;
use App\Models\spsService;
use App\Models\SuccessStorie;
use App\Models\VideoProperty;
use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function samairagroup()
     {
          $banners = GroupBanner::latest()->get();
          $concerns = SamairaGroup::orderBy('order')->get();
          $count = homeCount::latest()->first();
          $homenews = News::latest()->take(6)->get();
          return view('frontend.samairagroup.index', compact('banners', 'concerns', 'count', 'homenews'));
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
          $content = concernContent::latest()->where('key', 'ssdi')->first();
          return view('frontend.samairaskills.index', compact('certifieds', 'advertise', 'concerns', 'categories', 'courses', 'featured', 'reviews', 'banners', 'content'));
     }
     public function ssdiCourse(Course $course)
     {
          $content = concernContent::latest()->where('key', 'ssdi')->first();
          return view('frontend.samairaskills.single-course', compact('course', 'content'));
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
          $banners = Banner::latest()->where('key', 'language')->get();
          $content = concernContent::latest()->where('key', 'language')->first();
          return view('frontend.samairaskillsjapan.index', compact('certifieds', 'featured', 'courses', 'stories', 'banners', 'reviews', 'content'));
     }
     //jphomes
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
          $content = concernContent::latest()->where('key', 'jphomes')->first();
          return view('frontend.samairajoypurhomes.index', compact('banners', 'categories', 'properties', 'propertiesCount', 'creviews', 'oreviews', 'videos', 'partners', 'content'));
     }
     public function properties(PropertyCategory $category)
     {
          $content = concernContent::latest()->where('key', 'jphomes')->first();
          return view('frontend.samairajoypurhomes.properties', compact('category', 'content'));
     }
     public function jphomesSingleProperty(Property $property)
     {
          $category = $property->category_id;
          $properties = Property::where('category_id', $category)->latest()->take(6)->get();
          $comments = $property->comments()->where('mark', true)->latest()->take(10)->get();
          $content = concernContent::latest()->where('key', 'jphomes')->first();
          return view('frontend.samairajoypurhomes.single-property', compact('property', 'properties', 'comments', 'content'));
     }

     //medica
     public function samairamedica()
     {
          $partners = medicaPartner::latest()->get();
          $reviews = medicaReview::latest()->get();
          $categories = medicaCategory::latest()->get();
          $products = medicaProduct::latest()->where('best', true)->get();
          $totalItems = collect(session('cart'))->sum('quantity');
          $banners = Banner::latest()->where('key', 'medica')->get();
          $content = concernContent::latest()->where('key', 'medica')->first();
          return view('frontend.samairamedica.index', compact('banners', 'categories', 'partners', 'reviews', 'products', 'totalItems', 'content'));
     }
     public function medicaProduct(medicaProduct $product)
     {
          $totalItems = collect(session('cart'))->sum('quantity');
          $prods = medicaProduct::where('category_id', $product->category_id)->take(9)->get();
          $content = concernContent::latest()->where('key', 'medica')->first();
          return view('frontend.samairamedica.single-product', compact('product', 'prods', 'totalItems', 'content'));
     }
     public function medicaCheckout()
     {
          $cart = session()->get('cart', []);
          $grandTotal = 0;

          foreach ($cart as $id => $item) {
               $cart[$id]['subtotal'] = $item['price'] * $item['quantity'];
               $grandTotal += $cart[$id]['subtotal'];
          }

          $totalItems = collect($cart)->sum('quantity');
          $content = concernContent::latest()->where('key', 'medica')->first();

          return view('frontend.samairamedica.checkout', compact('cart', 'totalItems', 'grandTotal', 'content'));
     }
     //shop
     public function samairamedicaShop()
     {
          $totalItems = collect(session('cart'))->sum('quantity');
          $categories = medicaCategory::latest()->get();
          $content = concernContent::latest()->where('key', 'medica')->first();
          return view('frontend.samairamedica.shop', compact('categories', 'totalItems', 'content'));
     }


     //gold
     public function princessgold()
     {
          $partners = goldPartner::latest()->get();
          $services = goldServices::latest()->where('key', 'service')->take(4)->get();
          $why_we = goldServices::latest()->where('key', 'why_us')->take(6)->get();
          $reviews = goldReview::latest()->get();
          $banners = Banner::latest()->where('key', 'gold')->get();
          $content = concernContent::latest()->where('key', 'gold')->first();
          return view('frontend.princessgold.index', compact('banners', 'partners', 'services', 'why_we', 'reviews', 'content'));
     }
     //sps
     public function sps()
     {
          $banners = Banner::latest()->where('key', 'sps')->get();
          $content = concernContent::latest()->where('key', 'sps')->first();
          $services = spsService::latest()->get();
          $chooses = spsChoose::latest()->get();
          $reviews = spsReview::latest()->get();
          return view('frontend.spsfillingstation.index', compact('content', 'banners', 'services', 'chooses', 'reviews'));
     }

     //jp agro
     public function joypuragro()
     {
          $partners = agroPartner::latest()->get();
          $banners = Banner::latest()->where('key', 'agro')->get();
          $introduction = agroIntroduction::latest()->first();
          $projects = agroProject::latest()->take(4)->get();
          $benefit = agroBenefit::latest()->first();
          $content = concernContent::latest()->where('key', 'agro')->first();
          return view('frontend.joypuragro.index', compact('partners', 'banners', 'introduction', 'projects', 'benefit', 'content'));
     }
     //raisatrade
     public function raisatrade()
     {
          $banners = Banner::latest()->where('key', 'raisa')->get();
          $services = raisaServices::latest()->take(6)->get();
          $reviews = raisaReview::latest()->get();
          $partners = raisaPartner::latest()->get();
          $content = concernContent::latest()->where('key', 'raisa')->first();
          return view('frontend.raisatrade.index', compact('banners', 'services', 'reviews', 'partners', 'content'));
     }
     //job
     public function samairajobs()
     {
          $partners = jobPartner::latest()->get();
          $banners = Banner::latest()->where('key', 'job')->get();
          $jobAbout = jobAbout::latest()->first();
          $projects = jobProject::orderBy('order')->get();
          $works = jobWork::latest()->take(6)->get();
          $content = concernContent::latest()->where('key', 'job')->first();
          return view('frontend.samaira-jobs-bridge.index', compact('partners', 'banners', 'jobAbout', 'projects', 'works', 'content'));
     }
     public function jobApply(jobWork $work)
     {
          $content = concernContent::latest()->where('key', 'job')->first();
          return view('frontend.samaira-jobs-bridge.jobapplication', compact('work', 'content'));
     }

     //emerging
     public function emerging()
     {
          $partners = emergingPartner::latest()->get();
          $reviews = emergingReview::latest()->get();
          $categories = emergingCategory::latest()->get();
          $products = emergingProduct::latest()->where('best', true)->get();
          $totalItems = collect(session('cart'))->sum('quantity');
          $banners = Banner::latest()->where('key', 'emerging')->get();
          $content = concernContent::latest()->where('key', 'emerging')->first();
          return view('frontend.emerging.index', compact('banners', 'categories', 'partners', 'reviews', 'products', 'totalItems', 'content'));
     }
     public function emergingShop()
     {
          $totalItems = collect(session('cart'))->sum('quantity');
          $categories = emergingCategory::latest()->get();
          $content = concernContent::latest()->where('key', 'emerging')->first();
          return view('frontend.emerging.shop', compact('categories', 'totalItems', 'content'));
     }
     public function emergingProduct(emergingProduct $product)
     {
          $totalItems = collect(session('cart'))->sum('quantity');
          $prods = emergingProduct::where('category_id', $product->category_id)->take(9)->get();
          $content = concernContent::latest()->where('key', 'emerging')->first();
          return view('frontend.emerging.single-product', compact('product', 'prods', 'totalItems', 'content'));
     }
     public function emergingCheckout()
     {
          $cart = session()->get('cart', []);
          $grandTotal = 0;

          foreach ($cart as $id => $item) {
               $cart[$id]['subtotal'] = $item['price'] * $item['quantity'];
               $grandTotal += $cart[$id]['subtotal'];
          }

          $totalItems = collect($cart)->sum('quantity');
          $content = concernContent::latest()->where('key', 'emerging')->first();
          return view('frontend.emerging.checkout', compact('cart', 'totalItems', 'grandTotal', 'content'));
     }

     //aviation
     public function samairaaviation()
     {
          $banners = Banner::latest()->where('key', 'aviation')->get();
          $airlines = aviationAirline::latest()->get();
          $partners = aviationPartner::latest()->get();
          $froms = aviationFrom::all();
          $tos = aviationTo::all();
          $content = concernContent::latest()->where('key', 'aviation')->first();
          return view('frontend.samairaaviation.index', compact('banners', 'partners', 'airlines', 'froms', 'tos', 'content'));
     }
     public function samairaaviationcheckout()
     {
          $data = session('request');
          if (empty($data)) {
               return redirect()->back()->with('danger', 'Session expired or invalid request.');
          }
          return view('frontend.samairaaviation.checkout', compact('data'));
     }

     //Privacy
     public function samairagroupPrivacy()
     {
          $privacy = Privacy::pluck('value', 'key');

          return view('frontend.content.privacy', compact('privacy'));
     }


     //abouts
     public function samairagroupAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'samairagroup')->get();
          $about = About::latest()->where('key', 'samairagroup')->first();
          $content = concernContent::latest()->where('key', 'samairagroup')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content'));
     }
     public function samairaskillsAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'ssdi')->get();
          $about = About::latest()->where('key', 'ssdi')->first();
          $content = concernContent::latest()->where('key', 'ssdi')->first();
          $mission = allMission::latest()->where('key', 'ssdi')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function jphomesAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'jphomes')->get();
          $about = About::latest()->where('key', 'jphomes')->first();
          $content = concernContent::latest()->where('key', 'jphomes')->first();
          $mission = allMission::latest()->where('key', 'jphomes')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function samairaskillsJapanAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'language')->get();
          $about = About::latest()->where('key', 'language')->first();
          $content = concernContent::latest()->where('key', 'language')->first();
          $mission = allMission::latest()->where('key', 'language')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function samairamedicaAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'medica')->get();
          $about = About::latest()->where('key', 'medica')->first();
          $content = concernContent::latest()->where('key', 'medica')->first();
          $mission = allMission::latest()->where('key', 'medica')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function goldAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'gold')->get();
          $about = About::latest()->where('key', 'gold')->first();
          $content = concernContent::latest()->where('key', 'gold')->first();
          $mission = allMission::latest()->where('key', 'gold')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function spsAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'sps')->get();
          $about = About::latest()->where('key', 'sps')->first();
          $content = concernContent::latest()->where('key', 'sps')->first();
          $mission = allMission::latest()->where('key', 'sps')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function jobAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'job')->get();
          $about = About::latest()->where('key', 'job')->first();
          $content = concernContent::latest()->where('key', 'job')->first();
          $mission = allMission::latest()->where('key', 'job')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function agroAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'agro')->get();
          $about = About::latest()->where('key', 'agro')->first();
          $content = concernContent::latest()->where('key', 'agro')->first();
          $mission = allMission::latest()->where('key', 'agro')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function emergingAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'emerging')->get();
          $about = About::latest()->where('key', 'emerging')->first();
          $content = concernContent::latest()->where('key', 'emerging')->first();
          $mission = allMission::latest()->where('key', 'emerging')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function raisaAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'raisa')->get();
          $about = About::latest()->where('key', 'raisa')->first();
          $content = concernContent::latest()->where('key', 'raisa')->first();
          $mission = allMission::latest()->where('key', 'raisa')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }
     public function aviationAbout()
     {
          $concerns = SamairaGroup::orderBy('order')->get();
          $banners = AboutBanner::latest()->where('key', 'aviation')->get();
          $about = About::latest()->where('key', 'aviation')->first();
          $content = concernContent::latest()->where('key', 'aviation')->first();
          $mission = allMission::latest()->where('key', 'aviation')->first();
          return view('frontend.content.about', compact('banners', 'about', 'concerns', 'content', 'mission'));
     }

     //contacts
     public function samairaGroupContact()
     {
          $banners = ContactBanner::latest()->where('key', 'samairagroup')->get();
          $info = ContactInfo::latest()->where('key', 'samairagroup')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'samairagroup')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function ssdiContact()
     {
          $banners = ContactBanner::latest()->where('key', 'ssdi')->get();
          $info = ContactInfo::latest()->where('key', 'ssdi')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'ssdi')->first();

          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function samairaskillsJapanContact()
     {
          $banners = ContactBanner::latest()->where('key', 'language')->get();
          $info = ContactInfo::latest()->where('key', 'language')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'language')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function jphomesContact()
     {
          $banners = ContactBanner::latest()->where('key', 'jphomes')->get();
          $info = ContactInfo::latest()->where('key', 'jphomes')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'jphomes')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function samairamedicaContact()
     {
          $banners = ContactBanner::latest()->where('key', 'medica')->get();
          $info = ContactInfo::latest()->where('key', 'medica')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'medica')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function goldContact()
     {
          $banners = ContactBanner::latest()->where('key', 'gold')->get();
          $info = ContactInfo::latest()->where('key', 'gold')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'gold')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function spsContact()
     {
          $banners = ContactBanner::latest()->where('key', 'sps')->get();
          $info = ContactInfo::latest()->where('key', 'sps')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'sps')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function jobContact()
     {
          $banners = ContactBanner::latest()->where('key', 'job')->get();
          $info = ContactInfo::latest()->where('key', 'job')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'job')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function agroContact()
     {
          $banners = ContactBanner::latest()->where('key', 'agro')->get();
          $info = ContactInfo::latest()->where('key', 'agro')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'agro')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function emergingContact()
     {
          $banners = ContactBanner::latest()->where('key', 'emerging')->get();
          $info = ContactInfo::latest()->where('key', 'emerging')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'emerging')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function raisaContact()
     {
          $banners = ContactBanner::latest()->where('key', 'raisa')->get();
          $info = ContactInfo::latest()->where('key', 'raisa')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'raisa')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }
     public function aviationContact()
     {
          $banners = ContactBanner::latest()->where('key', 'aviation')->get();
          $info = ContactInfo::latest()->where('key', 'aviation')->first();
          $concerns = SamairaGroup::orderBy('order')->get();
          $content = concernContent::latest()->where('key', 'aviation')->first();
          return view('frontend.content.contact', compact('banners', 'info', 'concerns', 'content'));
     }

     //others 

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
          $awards = Award::latest()->take(9)->get();
          $banners = Banner::where('key', 'award_banner')->latest()->get();
          return view('frontend.content.awards-and-achievement', compact('awards', 'banners'));
     }
     public function chairman()
     {
          $banners = Banner::where('key', 'chairman_banner')->latest()->get();
          $chairman = Chairman::all()->pluck('value', 'key');
          return view('frontend.content.chairman-and-managing-diretor', compact('chairman', 'banners'));
     }
     public function news()
     {
          $banners = Banner::where('key', 'news_banner')->latest()->get();
          $newses = News::latest()->paginate(9);
          return view('frontend.content.news-and-events', compact('banners', 'newses'));
     }
     public function newssingle(News $news)
     {
          $newses = News::latest()->take(6);
          return view('frontend.content.news-and-events-single', compact('news', 'newses'));
     }
     public function carrer()
     {
          return view('frontend.content.carrer');
     }


     //soon
     public function comingsoon()
     {
          return view('frontend.content.coming-soon');
     }
     public function download()
     {
          $downloads = Download::latest()->get();
          return view('frontend.content.download', compact('downloads'));
     }
     public function gallery()
     {
          $gallaries = gallary::latest()->get();
          $banners = Banner::where('key', 'gallary_banner')->latest()->get();
          return view('frontend.content.gallery', compact('gallaries', 'banners'));
     }

}
