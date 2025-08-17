<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\concernContent;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class SpsController extends Controller
{
     public function sps()
    {
        
       
        $banners = Banner::latest()->where('key', 'sps')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'sps')->get();
        $about = About::latest()->where('key', 'sps')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'sps')->get();
        $info = ContactInfo::latest()->where('key', 'sps')->first();
        $content = concernContent::latest()->where('key', 'sps')->first();
        return view('backend.agent.sisters.sps.sps', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners','content'));
    }
}
