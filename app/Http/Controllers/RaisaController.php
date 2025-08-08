<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\concernContent;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\raisaPartner;
use App\Models\raisaReview;
use App\Models\raisaServices;
use Illuminate\Http\Request;
use Storage;

class RaisaController extends Controller
{
    public function raisa()
    {
        $reviews = raisaReview::latest()->get();
        $partners = raisaPartner::latest()->get();
        $services = raisaServices::latest()->take(6)->get();
        $banners = Banner::latest()->where('key', 'raisa')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'raisa')->get();
        $about = About::latest()->where('key', 'raisa')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'raisa')->get();
        $info = ContactInfo::latest()->where('key', 'raisa')->first();
        $content = concernContent::latest()->where('key', 'raisa')->first();
        return view('backend.agent.sisters.raisa.raisa', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'reviews', 'partners','services','content'));
    }
    //review
    public function storeReview(Request $request)
    {

        $review = new raisaReview;
        $review->name = $request->name;
        $review->review = $request->review;
        if ($request->hasFile('image')) {
            $review->image = $request->file(key: 'image')->store('reviews', 'public');
        } else {
            $review->image = null;
        }
        $review->save();
        return redirect()->back()->with('success', 'Review created successfully.');
    }
    public function updateReview(raisaReview $review, Request $request)
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
    public function deleteReview(raisaReview $review)
    {
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
    //partner
    public function storePartner(Request $request)
    {

        $partner = new raisaPartner;
        $partner->title = $request->title;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partner', 'public');
        } else {
            $partner->image = null;
        }
        $partner->save();
        return redirect()->back()->with('success', 'Partner created successfully.');
    }

    public function deletePartner(raisaPartner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }
        $partner->delete();

        return redirect()->back()->with('success', 'partner deleted successfully.');
    }
    //service
    public function storeService(Request $request)
    {

        $service = new raisaServices;
        $service->title = $request->title;
        $service->discretion = $request->discretion;
        if ($request->hasFile('image')) {
            $service->image = $request->file('image')->store('raisa', 'public');
        } else {
            $service->image = null;
        }
        $service->save();
        return redirect()->back()->with('success', 'Service created successfully.');
    }
    public function updateService(Request $request, raisaServices $service)
    {


        $service->title = $request->title;
        $service->discretion = $request->discretion;
        if ($request->hasFile('image')) {
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $service->image = $request->file('image')->store('raisa', 'public');
        }
        $service->save();
        return redirect()->back()->with('success', 'Service updated successfully.');
    }
    public function deleteService(raisaServices $service)
    {
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }

}
