<?php

namespace App\Http\Controllers;

use App\Models\GroupBanner;
use App\Models\SamairaGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;
class SamairaGroupController extends Controller
{
    public function index()
    {
        $banners = GroupBanner::latest()->get();
        $concerns = SamairaGroup::latest()->get();
        // dd($concerns);
        return view('backend.agent.sisters.group.index', compact('banners', 'concerns'));
    }
    public function storeBanner(Request $request)
    {

        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'link' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        GroupBanner::create($data);

        return redirect()->back()->with('success', 'Banner created.');
    }
    public function updateBanner(Request $request, GroupBanner $group_banner)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'link' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {

            if ($group_banner->image && Storage::disk('public')->exists($group_banner->image)) {
                Storage::disk('public')->delete($group_banner->image);
            }


            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $group_banner->update($data);

        return redirect()->back()->with('success', 'Banner updated.');
    }

    public function destroyBanner(GroupBanner $group_banner)
    {
        $group_banner->delete();
        return redirect()->back()->with('success', 'Banner deleted.');
    }
    //concern
    public function storeConcern(Request $request)
    {
        $request->validate([
            'concern_image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'concern_title' => 'nullable|string|max:255',
            'concern_link' => 'nullable|string|max:255',
        ]);
    
        $data = $request->only(['concern_title', 'concern_link']);
    
        if ($request->hasFile('concern_image')) {
            $data['concern_image'] = $request->file('concern_image')->store('concerns', 'public');
        }
    
        SamairaGroup::create($data);
    
        return back()->with('success', 'Concern added successfully');
    }
    
    public function updateConcern(Request $request, $id)
    {
        $request->validate([
            'concern_image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'concern_title' => 'nullable|string|max:255',
            'concern_link' => 'nullable|string|max:255',
        ]);
    
        $concern = SamairaGroup::findOrFail($id);
    
        $data = $request->only(['concern_title', 'concern_link']);
    
        if ($request->hasFile('concern_image')) {
            if ($concern->concern_image && Storage::disk('public')->exists($concern->concern_image)) {
                Storage::disk('public')->delete($concern->concern_image);
            }
    
            $data['concern_image'] = $request->file('concern_image')->store('concerns', 'public');
        }
    
        $concern->update($data);
    
        return back()->with('success', 'Concern updated successfully');
    }
    
    public function destroyConcern($id)
    {
        $concern = SamairaGroup::findOrFail($id);
    
        if ($concern->concern_image && Storage::disk('public')->exists($concern->concern_image)) {
            Storage::disk('public')->delete($concern->concern_image);
        }
    
        $concern->delete();
    
        return back()->with('success', 'Concern deleted successfully');
    }

}
