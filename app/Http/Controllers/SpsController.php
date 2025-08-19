<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\concernContent;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\spsChoose;
use App\Models\spsReview;
use App\Models\spsService;
use Illuminate\Http\Request;
use Storage;

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
        return view('backend.agent.sisters.sps.sps', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'content'));
    }
    public function Service()
    {
        $services = spsService::latest()->get();
        return view('backend.agent.sisters.sps.service', compact('services'));
    }

    public function storeService(Request $request)
    {
        $service = new spsService;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->url = $request->url;
        if ($request->hasFile('icon')) {
            $service->icon = $request->file(key: 'icon')->store('sps', 'public');
        } else {
            $service->icon = null;
        }
        $service->save();
        return back()->with('success', 'New service created successfully');
    }
    public function updateService(Request $request, spsService $service)
    {
        $service->title = $request->title;
        $service->description = $request->description;
        $service->url = $request->url;

        if ($request->hasFile('icon')) {

            if ($service->icon && Storage::disk('public')->exists($service->icon)) {
                Storage::disk('public')->delete($service->icon);
            }

            $service->icon = $request->file('icon')->store('sps', 'public');
        }

        $service->save();

        return back()->with('success', 'Service updated successfully');
    }
    public function deleteService(spsService $service)
    {
        if ($service->icon && Storage::disk('public')->exists($service->icon)) {
            Storage::disk('public')->delete($service->icon);
        }

        $service->delete();

        return back()->with('success', 'Service deleted successfully');
    }




    //review
    public function Review()
    {
        $reviews = spsReview::latest()->get();
        return view('backend.agent.sisters.sps.review', compact('reviews'));
    }
    public function storeReview(Request $request)
    {

        $review = new spsReview;
        $review->name = $request->name;
        $review->subtitle = $request->subtitle;
        $review->description = $request->description;
        if ($request->hasFile('image')) {
            $review->image = $request->file(key: 'image')->store('reviews', 'public');
        } else {
            $review->image = null;
        }
        $review->save();
        return redirect()->back()->with('success', 'Review created successfully.');
    }
    public function updateReview(spsReview $review, Request $request)
    {
        $review->name = $request->name;
        $review->subtitle = $request->subtitle;
        $review->description = $request->description;
        if ($request->hasFile('image')) {
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }
            $review->image = $request->file('image')->store('reviews', 'public');
        }
        $review->save();
        return redirect()->back()->with('success', 'Review update successfully.');
    }
    public function deleteReview(spsReview $review)
    {
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
    //Choose 
    public function Choose()
    {
        $chooses = spsChoose::latest()->get();

        return view('backend.agent.sisters.sps.chooses', compact('chooses'));
    }
    public function storeChoose(Request $request)
    {
        $choose = new spsChoose;
        $choose->title = $request->title;
        $choose->description = $request->description;
        if ($request->hasFile('icon')) {
            $choose->icon = $request->file(key: 'icon')->store('sps', 'public');
        } else {
            $choose->icon = null;
        }
        $choose->save();
        return back()->with('success', 'New choose created successfully');
    }
    public function updateChoose(Request $request, spsChoose $choose)
    {

        $choose->title = $request->title;
        $choose->description = $request->description;
        if ($request->hasFile('icon')) {

            if ($choose->icon && Storage::disk('public')->exists($choose->icon)) {
                Storage::disk('public')->delete($choose->icon);
            }

            $choose->icon = $request->file('icon')->store('sps', 'public');
        }
        $choose->save();
        return back()->with('success', 'Update choose successfully');
    }
    public function deleteChoose(spsChoose $choose)
    {

        if ($choose->icon && Storage::disk('public')->exists($choose->icon)) {
            Storage::disk('public')->delete($choose->icon);
        }
        return back()->with('success', 'Delete choose successfully');
    }


}
