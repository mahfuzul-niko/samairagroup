<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\SuccessStorie;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function language()
    {
        $stories = SuccessStorie::latest()->get();
        $about = About::latest()->where('key', 'language')->first();

        $contactbanners = ContactBanner::latest()->where('key', 'language')->get();
        $info = ContactInfo::latest()->where('key', 'language')->first();
        return view('backend.agent.sisters.japan.language', compact('stories','about','info','contactbanners'));
    }
    public function storeStory(Request $request)
    {
        $story = new SuccessStorie;
        $story->title = $request->title;
        $story->url = $request->url;
        $story->student_of = $request->student_of;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('story/images', 'public');
            $story->image = $imagePath;
        }
        $story->save();
        return redirect()->back()->with('success', 'New story Added Successfully');
    }
    public function updateStory(Request $request, SuccessStorie $story)
    {

        $story->title = $request->title;
        $story->url = $request->url;
        $story->student_of = $request->student_of;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($story->image && \Storage::disk('public')->exists($story->image)) {
                \Storage::disk('public')->delete($story->image);
            }
            $imagePath = $request->file('image')->store('story/images', 'public');
            $story->image = $imagePath;
        }

        $story->save();
        return redirect()->back()->with('success', 'Storie Updated Successfully');
    }

    public function deleteStory(SuccessStorie $story)
    {


        // Delete image from storage if exists
        if ($story->image && \Storage::disk('public')->exists($story->image)) {
            \Storage::disk('public')->delete($story->image);
        }

        $story->delete();
        return redirect()->back()->with('success', 'Storie Deleted Successfully');
    }

}
