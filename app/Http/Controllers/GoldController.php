<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\allMission;
use App\Models\Banner;
use App\Models\concernContent;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\goldPartner;
use App\Models\goldReview;
use App\Models\goldServices;
use Illuminate\Http\Request;
use Storage;

class GoldController extends Controller
{
    public function gold()
    {
        $partners = goldPartner::latest()->get();
        $services = goldServices::latest()->where('key', 'service')->get();
        $why_we = goldServices::latest()->where('key', 'why_us')->get();
        $reviews = goldReview::latest()->get();

        $banners = Banner::latest()->where('key', 'gold')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'gold')->get();
        $about = About::latest()->where('key', 'gold')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'gold')->get();
        $info = ContactInfo::latest()->where('key', 'gold')->first();
        $content = concernContent::latest()->where('key', 'gold')->first();
        $mission = allMission::latest()->where('key', 'gold')->first();
        return view('backend.agent.sisters.gold.gold', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'partners', 'services', 'why_we', 'reviews','content','mission'));
    }
    public function storePartner(Request $request)
    {

        $partner = new goldPartner;
        $partner->title = $request->title;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partner', 'public');
        } else {
            $partner->image = null;
        }
        $partner->save();
        return redirect()->back()->with('success', 'Partner created successfully.');
    }

    public function deletePartner(goldPartner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }
        $partner->delete();

        return redirect()->back()->with('success', 'partner deleted successfully.');
    }
    //servises
    public function storeService(Request $request)
    {

        $service = new goldServices;
        $service->key = $request->key;
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->discretion = $request->discretion;
        $service->save();
        return redirect()->back()->with('success', 'Service created successfully.');
    }
    public function updateService(Request $request, goldServices $service)
    {


        $service->key = $request->key;
        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->discretion = $request->discretion;
        $service->save();
        return redirect()->back()->with('success', 'Service updated successfully.');
    }
    public function deleteService(goldServices $service)
    {
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }

    //review
    public function storeReview(Request $request)
    {
       
        $review = new goldReview;
        $review->name = $request->name;
        $review->review = $request->review;
        if ($request->hasFile('image')) {
            $review->image = $request->file('image')->store('reviews', 'public');
        } else {
            $review->image = null;
        }
        $review->save();
        return redirect()->back()->with('success', 'Review created successfully.');
    }
    public function updateReview(goldReview $review, Request $request)
    {

        $review->name = $request->name;
        $review->review = $request->review;
        if ($request->hasFile('image')) {
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }
            $review->image = $request->file('image')->store('reviews', 'public');
        }
        $review->save();
        return redirect()->back()->with('success', 'Review update successfully.');
    }
    public function deleteReview(goldReview $review)
    {
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
