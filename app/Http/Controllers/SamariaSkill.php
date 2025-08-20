<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\allMission;
use App\Models\concernContent;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\CourseCategory;
use App\Models\SkillAdvertise;
use App\Models\SkillBanner;
use App\Models\SkillCertified;
use Illuminate\Http\Request;
use Storage;

class SamariaSkill extends Controller
{
    public function samairaSkill()
    {
        $certifieds = SkillCertified::latest()->get();
        $advertise = SkillAdvertise::latest()->first() ?? new SkillAdvertise();
        $aboutbanners = AboutBanner::latest()->where('key', 'ssdi')->get();
        $about = About::latest()->where('key', 'ssdi')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'ssdi')->get();
        $info = ContactInfo::latest()->where('key', 'ssdi')->first();
        $banners = SkillBanner::latest()->where('key', 'ssdi')->get();
        $content = concernContent::latest()->where('key', 'ssdi')->first();
        $mission = allMission::latest()->where('key', 'ssdi')->first();
        

        return view('backend.agent.sisters.skill.skill', compact('certifieds', 'advertise', 'aboutbanners', 'about', 'contactbanners', 'info', 'banners', 'content','mission'));
    }

    //skills

    public function storeCertified(Request $request)
    {

        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('certified', 'public');
        }

        SkillCertified::create($data);

        return redirect()->back()->with('success', 'Certified created successfully.');
    }

    public function updateCertified(Request $request, SkillCertified $certified)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->hasFile('logo')) {

            if ($certified->logo && Storage::disk('public')->exists($certified->logo)) {
                Storage::disk('public')->delete($certified->logo);
            }
            $data['logo'] = $request->file('logo')->store('certified', 'public');
        }

        $certified->update($data);

        return redirect()->back()->with('success', 'Certified updated successfully.');
    }

    public function destroyCertified(SkillCertified $certified)
    {

        if ($certified->logo && Storage::disk('public')->exists($certified->logo)) {
            Storage::disk('public')->delete($certified->logo);
        }

        $certified->delete();

        return redirect()->back()->with('success', 'Certified deleted successfully.');
    }
    public function storeAdvertise(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable|exists:skill_advertises,id',
            'image' => 'nullable|image',
            'description' => 'nullable|max:255',
            'link' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
        ]);

        // Fetch existing record by id
        $existing = isset($data['id'])
            ? SkillAdvertise::find($data['id'])
            : null;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('advertise', 'public');
        } else {
            $data['image'] = $existing->image ?? null;
        }

        SkillAdvertise::updateOrCreate(
            ['id' => $data['id'] ?? null],
            [
                'image' => $data['image'],
                'description' => $data['description'],
                'link' => $data['link'],
                'price' => $data['price'],
            ]
        );
        return redirect()->back()->with('success', 'Advertisement saved successfully.');
    }


    public function storeBanner(Request $request)
    {
        $banner = new SkillBanner;
        $banner->key = $request->key;
        $banner->title = $request->title;
        $banner->subtitle = $request->subtitle;
        $banner->url = $request->url;
        if ($request->hasFile('image')) {
            $banner->image = $request->file('image')->store('review', 'public');
        }
        $banner->save();
        return redirect()->back()->with('success', 'Banner saved successfully.');

    }
    public function updateBanner(Request $request, SkillBanner $banner)
    {
        $banner->key = $request->key;
        $banner->title = $request->title;
        $banner->subtitle = $request->subtitle;
        $banner->url = $request->url;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            // Store new image
            $banner->image = $request->file('image')->store('review', 'public');
        }

        $banner->save();

        return redirect()->back()->with('success', 'Banner updated successfully.');
    }
    public function deleteBanner(SkillBanner $banner)
    {
        // Delete image if exists
        if ($banner->image && Storage::disk('public')->exists($banner->image)) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully.');
    }









}
