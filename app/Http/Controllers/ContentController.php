<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function storeAboutBanner(Request $request)
    {
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner = new AboutBanner;

        $banner->key = $request->key;

        if (isset($data['image'])) {
            $banner->image = $data['image'];
        }

        $banner->save();

        return redirect()->back()->with('success', 'About banner saved successfully.');
    }
    public function deleteAboutBanner(AboutBanner $banner)
    {

        if ($banner->image && \Storage::disk('public')->exists($banner->image)) {
            \Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'About banner deleted successfully.');
    }
    public function storeAbout(Request $request)
    {
        $about = new About;
        $about->key = $request->key;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();
        return redirect()->back()->with('success', 'About saved successfully.');
    }
    public function updateAbout(Request $request, About $about)
    {
        $about->key = $request->key;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();

        return redirect()->back()->with('success', 'About updated successfully.');
    }
    public function deleteAbout(About $about)
    {
        $about->delete();
        return redirect()->back()->with('success', 'About deleted successfully.');
    }




}
