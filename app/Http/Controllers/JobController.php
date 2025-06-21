<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\jobAbout;
use App\Models\jobPartner;
use App\Models\jobProject;
use Illuminate\Http\Request;
use Storage;

class JobController extends Controller
{
    public function job()
    {
        $partners = jobPartner::latest()->get();
        $jobAbout = jobAbout::latest()->first();
        $banners = Banner::latest()->where('key', 'job')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'job')->get();
        $about = About::latest()->where('key', 'job')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'job')->get();
        $info = ContactInfo::latest()->where('key', 'job')->first();
        return view('backend.agent.sisters.job.job', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'partners', 'jobAbout'));
    }
    public function storeAbout(Request $request)
    {


        $about = new jobAbout;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('job_about', 'public');
            $about->image = $path;
        }

        $about->title = $request->title;
        $about->discretion = $request->discretion;
        $about->save();

        return back()->with('success', 'About Stored Successfully');
    }
    public function updateAbout(Request $request, jobAbout $jobAbout)
    {
        if ($request->hasFile('image')) {

            if ($jobAbout->image && Storage::disk('public')->exists($jobAbout->image)) {
                Storage::disk('public')->delete($jobAbout->image);
            }


            $path = $request->file('image')->store('job_about', 'public');
            $jobAbout->image = $path;
        }

        $jobAbout->title = $request->title ?? $jobAbout->title;
        $jobAbout->discretion = $request->discretion ?? $jobAbout->discretion;
        $jobAbout->save();

        return back()->with('success', 'About Updated Successfully');
    }
    public function deleteAbout(jobAbout $jobAbout)
    {

        if ($jobAbout->image && Storage::disk('public')->exists($jobAbout->image)) {
            Storage::disk('public')->delete($jobAbout->image);
        }

        $jobAbout->delete();

        return back()->with('success', 'About Deleted Successfully');

    }
    //partner
    public function storePartner(Request $request)
    {

        $partner = new jobPartner;
        $partner->title = $request->title;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partner', 'public');
        } else {
            $partner->image = null;
        }
        $partner->save();
        return redirect()->back()->with('success', 'Partner created successfully.');
    }

    public function deletePartner(jobPartner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }
        $partner->delete();

        return redirect()->back()->with('success', 'partner deleted successfully.');
    }
//project
    public function jobProject()
    {
        $projects = jobProject::orderBy('order')->get();
        return view('backend.agent.sisters.job.projects', compact('projects'));
    }
    public function storeProject(Request $request)
    {
        $project = new jobProject;

        $project->order = $request->order;
        $project->title = $request->title;
        if ($request->hasFile('image')) {
            $project->image = $request->file('image')->store('project', 'public');
        } else {
            $project->image = null;
        }
        $project->save();
        return redirect()->back()->with('success', 'Project created successfully.');
    }
    public function updateProject(Request $request, jobProject $project)
    {
        $project->order = $request->order;
        $project->title = $request->title;

        if ($request->hasFile('image')) {

            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }

            $project->image = $request->file('image')->store('project', 'public');
        }

        $project->save();
        return redirect()->back()->with('success', 'Project updated successfully.');
    }

    public function deleteProject(jobProject $project)
    {
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();

        return redirect()->back()->with('success', 'Project deleted successfully.');
    }
    //work
    public function jobWork()
    {

        return view('backend.agent.sisters.job.works');
    }
}
