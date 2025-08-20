<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\GroupAbout;
use App\Models\GroupBanner;
use App\Models\homeCount;
use App\Models\homeNews;
use App\Models\Partner;
use App\Models\SamairaGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Storage;
class SamairaGroupController extends Controller
{
    public function index()
    {
        $banners = GroupBanner::latest()->get();
        $concerns = SamairaGroup::orderBy('order')->get();
        // dd($concerns);
        $partners = Partner::latest()->get();

        $aboutbanners = AboutBanner::latest()->where('key', 'samairagroup')->get();
        $about = About::latest()->where('key', 'samairagroup')->first();

        $contactbanners = ContactBanner::latest()->where('key', 'samairagroup')->get();
        $info = ContactInfo::latest()->where('key', 'samairagroup')->first();
        $count = homeCount::latest()->first();
        $homenews = HomeNews::latest()->get();
        return view('backend.agent.sisters.group.index', compact('banners', 'concerns', 'partners', 'aboutbanners', 'about', 'contactbanners', 'info', 'count', 'homenews'));
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
            'order' => 'required|integer',
            'concern_image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'concern_text' => 'nullable|string',
            'concern_link' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['order', 'concern_text', 'concern_link']);

        if ($request->hasFile('concern_image')) {
            $data['concern_image'] = $request->file('concern_image')->store('concerns', 'public');
        }

        SamairaGroup::create($data);

        return back()->with('success', 'Concern added successfully');
    }


    public function updateConcern(Request $request, $id)
    {
        $request->validate([
            'order' => 'required|integer',
            'concern_image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'concern_text' => 'nullable|string',
            'concern_link' => 'nullable|string|max:255',
        ]);

        $concern = SamairaGroup::findOrFail($id);

        $data = $request->only(['order', 'concern_text', 'concern_link']);

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


    //partner
    public function storePartner(Request $request)
    {

        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('partners', 'public');
        }

        Partner::create($data);

        return redirect()->back()->with('success', 'Partner created successfully.');
    }

    public function updatePartner(Request $request, Partner $partner)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->hasFile('logo')) {

            if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
                Storage::disk('public')->delete($partner->logo);
            }
            $data['logo'] = $request->file('logo')->store('partners', 'public');
        }

        $partner->update($data);

        return redirect()->back()->with('success', 'Partner updated successfully.');
    }

    public function destroyPartner(Partner $partner)
    {

        if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return redirect()->back()->with('success', 'Partner deleted successfully.');
    }


    // Group About
    public function storeAbout(Request $request)
    {

        $validated = $request->validate([
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'old_image' => 'nullable|string',
            'about' => 'nullable',
            'link' => 'nullable|url',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('group_abouts', 'public');
        } else {
            $imagePath = $request->input('old_image') ?: null;
        }


        $groupAbout = GroupAbout::create([
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'],
            'image' => $imagePath,
            'about' => $validated['about'],
            'link' => $validated['link'],
        ]);
        if ($groupAbout->id >= 3) {
            $did = $groupAbout->id - 2;

            $groupAbout = GroupAbout::findOrFail($did);

            // Delete the image if it exists
            if ($groupAbout->image) {
                Storage::disk('public')->delete($groupAbout->image);
            }

            $groupAbout->delete();
        }

        return redirect()->back()->with('success', 'Group About created successfully.');
    }

    public function updateAbout(Request $request, $id)
    {
        $groupAbout = GroupAbout::findOrFail($id);

        $validated = $request->validate([
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'about' => 'nullable|string',
            'link' => 'nullable|url',
        ]);

        // Delete the old image if a new one is uploaded
        if ($request->hasFile('image')) {
            if ($groupAbout->image) {
                Storage::disk('public')->delete($groupAbout->image);
            }
            $imagePath = $request->file('image')->store('group_abouts', 'public');
        } else {
            $imagePath = $groupAbout->image; // Retain the old image if no new one is provided
        }

        $groupAbout->update([
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'],
            'image' => $imagePath,
            'about' => $validated['about'],
            'link' => $validated['link'],
        ]);

        return redirect()->back()->with('success', 'Group About updated successfully.');
    }

    public function destroyAbout($id)
    {
        $groupAbout = GroupAbout::findOrFail($id);
        // Delete the image if it exists
        if ($groupAbout->image) {
            Storage::disk('public')->delete($groupAbout->image);
        }
        $groupAbout->delete();
        return redirect()->back()->with('success', 'Group About deleted successfully.');
    }

    public function storeCount(Request $request)
    {
        $data = $request->only([
            'legacy',
            'countries',
            'units',
            'brands',
            'employees',
        ]);

        homeCount::updateOrCreate(
            ['id' => 1],
            $data
        );

        return back()->with('success', 'Home counts updated successfully!');
    }
    public function storeNews(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = Storage::put('home_news', $request->file('image'));
        }

        homeNews::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return back()->with('success', 'News created successfully!');
    }

    // Update existing news
    public function updateNews(Request $request, $id)
    {
        $news = HomeNews::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image) {
                Storage::delete($news->image);
            }

            $news->image = Storage::put('home_news', $request->file('image'));
        }

        $news->title = $request->title;
        $news->description = $request->description;
        $news->save();

        return back()->with('success', 'News updated successfully!');
    }

    // Delete news
    public function deleteNews($id)
    {
        $news = HomeNews::findOrFail($id);

        if ($news->image) {
            Storage::delete($news->image);
        }

        $news->delete();

        return back()->with('success', 'News deleted successfully!');
    }

}
