<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class MedicaController extends Controller
{
    public function Medica()
    {
        $banners = Banner::latest()->where('key', 'medica')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'medica')->get();
        $about = About::latest()->where('key', 'medica')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'medica')->get();
        $info = ContactInfo::latest()->where('key', 'medica')->first();
        return view('backend.agent.sisters.medica.medica', compact('banners', 'about', 'contactbanners', 'info','aboutbanners'));
    }
}
