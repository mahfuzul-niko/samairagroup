<?php

namespace App\Http\Controllers;
use App\Models\aviationAirline;
use App\Models\aviationFrom;
use App\Models\aviationTo;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use Illuminate\Http\Request;
use Storage;

class AviationController extends Controller
{
    public function aviation()
    {
        $airlines = aviationAirline::latest()->get();

        $banners = Banner::latest()->where('key', 'aviation')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'aviation')->get();
        $about = About::latest()->where('key', 'aviation')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'aviation')->get();
        $info = ContactInfo::latest()->where('key', 'aviation')->first();
        return view('backend.agent.sisters.aviation.aviation', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'airlines'));
    }
    public function storeAirline(Request $request)
    {
        $airline = new aviationAirline;
        $airline->title = $request->title;
        if ($request->hasFile('image')) {
            $airline->image = $request->file('image')->store('airline', 'public');
        } else {
            $airline->image = null;
        }
        $airline->save();
        return redirect()->back()->with('success', 'Airline created successfully.');
    }

    public function deleteAirline(aviationAirline $airline)
    {

        if ($airline->image && Storage::disk('public')->exists($airline->image)) {
            Storage::disk('public')->delete($airline->image);
        }
        $airline->delete();

        return redirect()->back()->with('success', 'airline deleted successfully.');
    }
    //destination
    public function destination()
    {
        $froms = aviationFrom::all();
        $tos = aviationTo::all();
        return view('backend.agent.sisters.aviation.destination', compact('froms', 'tos'));
    }
    public function storeFrom(Request $request)
    {
        $from = new aviationFrom;
        $from->name = $request->name;
        $from->save();
        return redirect()->back()->with('success', 'Destination Created Successfully.');
    }
    public function updateFrom(Request $request, aviationFrom $from)
    {
        $from->name = $request->name;
        $from->save();
        return redirect()->back()->with('success', 'Destination Updated Successfully.');
    }
    public function deleteFrom(Request $request, aviationFrom $from)
    {
        $from->delete();
        return redirect()->back()->with('success', 'Destination Deleted Successfully.');
    }
    public function storeto(Request $request)
    {
        $to = new aviationTo;
        $to->name = $request->name;
        $to->save();
        return redirect()->back()->with('success', 'Destination Created Successfully.');
    }
    public function updateTo(Request $request, aviationTo $to)
    {
        $to->name = $request->name;
        $to->save();
        return redirect()->back()->with('success', 'Destination Updated Successfully.');
    }
    public function deleteTo(Request $request, aviationTo $to)
    {
        $to->delete();
        return redirect()->back()->with('success', 'Destination Deleted Successfully.');
    }

    

}
