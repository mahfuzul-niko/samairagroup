<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\agroBenefit;
use App\Models\agroIntroduction;
use App\Models\agroPartner;
use App\Models\agroProject;
use App\Models\Banner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Storage;

class AgroController extends Controller
{
    public function agro()
    {
        $partners = agroPartner::latest()->get();
        $projects = agroProject::latest()->get();
        $introduction = agroIntroduction::latest()->first();
        $benefit = agroBenefit::latest()->first();
        $banners = Banner::latest()->where('key', 'agro')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'agro')->get();
        $about = About::latest()->where('key', 'agro')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'agro')->get();
        $info = ContactInfo::latest()->where('key', 'agro')->first();
        return view('backend.agent.sisters.agro.agro', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'partners', 'introduction', 'benefit', 'projects'));
    }
    //partner
    public function storePartner(Request $request)
    {

        $partner = new agroPartner;
        $partner->title = $request->title;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partner', 'public');
        } else {
            $partner->image = null;
        }
        $partner->save();
        return redirect()->back()->with('success', 'Partner created successfully.');
    }

    public function deletePartner(agroPartner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }
        $partner->delete();

        return redirect()->back()->with('success', 'partner deleted successfully.');
    }
    //agroIntroduction

    public function storeIntroduction(Request $request)
    {
        $data = new agroIntroduction;

        if ($request->hasFile('image_1')) {
            $data->image_1 = $request->file('image_1')->store('agro_intros', 'public');
        }

        if ($request->hasFile('image_2')) {
            $data->image_2 = $request->file('image_2')->store('agro_intros', 'public');
        }

        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->discription = $request->discription;
        $data->url = $request->url;
        $data->save();

        return back()->with('success', 'Introduction added successfully.');
    }
    public function updateIntroduction(Request $request, AgroIntroduction $introduction)
    {
        if ($request->hasFile('image_1')) {
            $introduction->image_1 = $request->file('image_1')->store('agro_intros', 'public');
        }

        if ($request->hasFile('image_2')) {
            $introduction->image_2 = $request->file('image_2')->store('agro_intros', 'public');
        }

        $introduction->title = $request->title;
        $introduction->subtitle = $request->subtitle;
        $introduction->discription = $request->discription;
        $introduction->url = $request->url;
        $introduction->save();

        return back()->with('success', 'Introduction updated successfully.');
    }
    public function deleteIntroduction(AgroIntroduction $introduction)
    {
        $introduction->delete();
        return back()->with('success', 'Introduction deleted successfully.');
    }
    //benefit
    public function storeBenefit(Request $request)
    {
        $benefit = new agroBenefit;

        if ($request->hasFile('image')) {
            $benefit->image = $request->file('image')->store('agro_benefits', 'public');
        }

        $benefit->title = $request->title;
        $benefit->subtitle = $request->subtitle;
        $benefit->list_1_title = $request->list_1_title;
        $benefit->list_1_subtitle = $request->list_1_subtitle;
        $benefit->list_2_title = $request->list_2_title;
        $benefit->list_2_subtitle = $request->list_2_subtitle;
        $benefit->list_3_title = $request->list_3_title;
        $benefit->list_3_subtitle = $request->list_3_subtitle;
        $benefit->url = $request->url;
        $benefit->save();

        return back()->with('success', 'Benefit added successfully.');
    }
    public function updateBenefit(Request $request, agroBenefit $benefit)
    {
        if ($request->hasFile('image')) {
            $benefit->image = $request->file('image')->store('agro_benefits', 'public');
        }

        $benefit->title = $request->title;
        $benefit->subtitle = $request->subtitle;
        $benefit->list_1_title = $request->list_1_title;
        $benefit->list_1_subtitle = $request->list_1_subtitle;
        $benefit->list_2_title = $request->list_2_title;
        $benefit->list_2_subtitle = $request->list_2_subtitle;
        $benefit->list_3_title = $request->list_3_title;
        $benefit->list_3_subtitle = $request->list_3_subtitle;
        $benefit->url = $request->url;
        $benefit->save();

        return back()->with('success', 'Benefit updated successfully.');
    }
    public function deleteBenefit(agroBenefit $benefit)
    {
        $benefit->delete();
        return back()->with('success', 'Benefit deleted successfully.');
    }
    //project
    public function storeProject(Request $request)
    {
        $project = new agroProject;

        if ($request->hasFile('image')) {
            $project->image = $request->file('image')->store('project', 'public');
        }
        $project->title = $request->title;
        $project->save();
        return back()->with('success', 'Project created successfully.');
    }

    // Update an existing project using model binding
    public function updateProject(Request $request, agroProject $project)
    {

        if ($request->hasFile('image')) {
            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }

            $path = $request->file('image')->store('agro_projects', 'public');
            $project->image = $path;
        }

        $project->title = $request->title;
        $project->save();

        return back()->with('success', 'Project updated successfully.');
    }


    public function deleteProject(agroProject $project)
    {
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return back()->with('success', 'Project deleted successfully.');
    }

}
