<?php

namespace App\Http\Controllers;

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
          $concerns = SamairaGroup::latest()->get();
          $partners = Partner::latest()->get();
          $about = GroupAbout::latestOrEmpty();


          return view('frontend.samairagroup.index', compact('banners', 'concerns', 'partners', 'about'));
     }
     public function samairaskills()
     {
          $certifieds = SkillCertified::latest()->get();
          $advertise = SkillAdvertise::latest()->first() ?? new SkillAdvertise();

          // dd($advertise);
          return view('frontend.samairaskills.index', compact('certifieds', 'advertise'));
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
     public function samairasinglecourse()
     {
          return view('frontend.samairaskills.single-course');
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
}
