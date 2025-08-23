<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\allMission;
use App\Models\Banner;
use App\Models\concernContent;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\jobAbout;
use App\Models\jobApply;
use App\Models\jobCompleted;
use App\Models\jobPartner;
use App\Models\jobProject;
use App\Models\jobWork;
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
        $content = concernContent::latest()->where('key', 'job')->first();
        $mission = allMission::latest()->where('key', 'job')->first();
        return view('backend.agent.sisters.job.job', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'partners', 'jobAbout', 'content', 'mission'));
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
        $projects = jobCompleted::latest()->get();
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
    public function jobWorks()
    {
        $works = jobWork::latest()->get();
        return view('backend.agent.sisters.job.work-list', compact('works'));
    }
    public function storeWork(Request $request)
    {
        $work = new jobWork;

        $work->title = $request->title;
        $work->subtitle = $request->subtitle;
        $work->salary = $request->salary;
        $work->deadline = $request->deadline;
        $work->discription = $request->discription;
        if ($request->hasFile('logo')) {
            $work->logo = $request->file('logo')->store('work', 'public');
        } else {
            $work->logo = null;
        }

        $work->save();
        return redirect()->back()->with('success', 'work created successfully.');
    }

    public function editWork(jobWork $work)
    {
        return view('backend.agent.sisters.job.edit-work', compact('work'));
    }
    public function updateWork(Request $request, jobWork $work)
    {
        $work->title = $request->title;
        $work->subtitle = $request->subtitle;
        $work->salary = $request->salary;
        $work->deadline = $request->deadline;
        $work->discription = $request->discription;

        if ($request->hasFile('logo')) {

            if ($work->logo && Storage::disk('public')->exists($work->logo)) {
                Storage::disk('public')->delete($work->logo);
            }

            $work->logo = $request->file('logo')->store('work', 'public');
        }

        $work->save();
        return redirect()->back()->with('success', 'work updated successfully.');
    }
    public function deleteWork(jobWork $work)
    {
        if ($work->logo && Storage::disk('public')->exists($work->logo)) {
            Storage::disk('public')->delete($work->logo);
        }
        $work->delete();
        return redirect()->back()->with('success', 'work deleted successfully.');
    }

    //apply
    public function storeApply(Request $request)
    {
        $apply = new jobApply;
        $apply->job_work_id = $request->job_work_id;
        $apply->name = $request->name;
        $apply->number = $request->number;
        $apply->email = $request->email;
        $apply->email = $request->email;

        if ($request->hasFile('file')) {
            $apply->file = $request->file('file')->store('apply', 'public');
        } else {
            $apply->file = null;
        }

        $apply->save();
        return redirect()->back()->with('success', 'Applied successfully.');
    }

    public function applies()
    {
        $applies = jobApply::latest()->get();
        return view('backend.agent.sisters.job.applies', compact('applies'));
    }

    public function deleteApply(jobApply $apply)
    {
        if ($apply->file && Storage::disk('public')->exists($apply->file)) {
            Storage::disk('public')->delete($apply->file);
        }
        $apply->delete();
        return redirect()->back()->with('success', 'apply deleted successfully.');
    }
    public function updateMark(Request $request, jobApply $apply)
    {
        $apply->mark = $request->has('mark') ? 1 : 0;
        $apply->save();
        $message = $apply->mark ? 'apply approved successfully.' : 'apply approval removed.';
        return redirect()->back()->with('success', $message);
    }
    public function storeCompleted(Request $request)
    {
        
        $validated = $request->validate([
            'image' => 'nullable',
            'title' => 'required|string|max:255',
            'info' => 'array',
        ]);

        // handle image upload if exists
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('job_completeds', 'public');
        }

        $job = jobCompleted::create([
            'image' => $imagePath,
            'title' => $validated['title'],
            'info' => json_encode($validated['info']),
        ]);

        return redirect()->back()->with('success', 'New Completed project created successfully.');
    }

    // Update
    public function updateCompleted(Request $request, JobCompleted $jobCompleted)
    {
        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'sometimes|string|max:255',
            'info' => 'sometimes|array',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('job_completeds', 'public');
            $jobCompleted->image = $imagePath;
        }

        if (isset($validated['title'])) {
            $jobCompleted->title = $validated['title'];
        }

        if (isset($validated['info'])) {
            $jobCompleted->info = json_encode($validated['info']);
        }

        $jobCompleted->save();

        return redirect()->back()->with('success', 'Completed Project updated successfully.');
    }

    // Delete
    public function deleteCompleted(JobCompleted $jobCompleted)
    {
        $jobCompleted->delete();
        return redirect()->back()->with('success', 'Completed project deleted successfully.');
    }
}
