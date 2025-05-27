<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\JpPartner;
use App\Models\JpReview;
use App\Models\Property;
use App\Models\PropertyAgent;
use App\Models\PropertyCategory;
use App\Models\PropertyComment;
use App\Models\PropertyImage;
use App\Models\PropertyOrder;
use App\Models\VideoProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Storage;
class PropertyController extends Controller
{
    public function Property()
    {

        $banners = Banner::latest()->where('key', 'jphomes')->get();
        $reviews = JpReview::latest()->get();
        $partners = JpPartner::latest()->get();

        $about = About::latest()->where('key', 'jphomes')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'jphomes')->get();
        $info = ContactInfo::latest()->where('key', 'jphomes')->first();
        return view('backend.agent.sisters.property.jphomes', compact('banners', 'reviews', 'partners', 'about', 'info', 'contactbanners'));
    }

    //category
    public function category()
    {
        $categories = PropertyCategory::latest()->get();
        return view('backend.agent.sisters.property.category', compact('categories'));
    }
    public function storePropertyCategory(Request $request)
    {
        $category = new PropertyCategory;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            $category->image = $request->file('image')->store('categories', 'public');
        } else {
            $category->image = null;
        }
        $category->save();
        return redirect()->back()->with('success', 'Property category created successfully.');
    }
    public function updatePropertyCategory(Request $request, PropertyCategory $category)
    {
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        if ($request->hasFile('image')) {
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
            $category->image = $request->file('image')->store('properties', 'public');
        }
        $category->save();
        return redirect()->back()->with('success', 'Property category updated successfully.');
    }
    public function deletePropertyCategory(PropertyCategory $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Property category deleted successfully.');
    }
    public function storeProperty(Request $request)
    {
        $property = new Property;
        $property->title = $request->title;
        $property->slug = Str::slug($request->title);
        $property->category_id = $request->category_id;
        $property->price = $request->price;
        $property->address = $request->address;
        $property->bath = $request->bath;
        $property->bed = $request->bed;
        $property->area = $request->area;
        $property->start_date = $request->start_date;
        $property->end_date = $request->end_date;
        $property->whats_app = $request->whats_app;

        if ($request->hasFile('image')) {
            $property->image = $request->file('image')->store('properties', 'public');
        } else {
            $property->image = null;
        }
        $property->description = $request->description;
        $property->save();
        return redirect(route('agent.jphomes.properties'))->with('success', 'Property created successfully.');
    }
    //property
    public function properties()
    {
        $properties = Property::latest()->paginate(20);
        return view('backend.agent.sisters.property.properties', compact('properties'));
    }
    public function createProperty()
    {
        $categories = PropertyCategory::latest()->get();
        return view('backend.agent.sisters.property.create', compact('categories'));
    }
    public function editProperty(Property $property)
    {
        $categories = PropertyCategory::latest()->get();
        return view('backend.agent.sisters.property.edit', compact('property', 'categories'));
    }
    public function updateProperty(Request $request, Property $property)
    {
        $property->title = $request->title;
        $property->slug = Str::slug($request->title);
        $property->category_id = $request->category_id;
        $property->price = $request->price;
        $property->address = $request->address;
        $property->bath = $request->bath;
        $property->bed = $request->bed;
        $property->area = $request->area;
        $property->start_date = $request->start_date;
        $property->end_date = $request->end_date;
        $property->whats_app = $request->whats_app;
        if ($request->hasFile('image')) {
            if ($property->image && Storage::disk('public')->exists($property->image)) {
                Storage::disk('public')->delete($property->image);
            }
            $property->image = $request->file('image')->store('properties', 'public');
        }
        $property->description = $request->description;
        $property->save();
        return redirect(route('agent.jphomes.properties'))->with('success', 'Property updated successfully.');
    }
    public function deleteProperty(Property $property)
    {
        if ($property->image && Storage::disk('public')->exists($property->image)) {
            Storage::disk('public')->delete($property->image);
        }
        $property->delete();
        return redirect()->back()->with('success', 'Property deleted successfully.');
    }
    //reviews
    public function storeReview(Request $request)
    {
        $review = new JpReview;
        $review->type = $request->type;
        $review->name = $request->name;
        $review->review = $request->review;

        if ($request->hasFile('image')) {
            $review->image = $request->file('image')->store('reviews', 'public');
        } else {
            $review->image = null;
        }

        $review->save();
        return redirect()->back()->with('success', 'Review created successfully.');
    }
    public function deleteReview(JpReview $review)
    {
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }

    public function createVideoProperty()
    {
        $videoProperties = VideoProperty::latest()->paginate(20);
        return view('backend.agent.sisters.property.create-video', compact('videoProperties'));
    }
    public function storeVideoProperty(Request $request)
    {
        $videoProperty = new VideoProperty;
        $videoProperty->title = $request->title;
        $videoProperty->url = $request->url;
        $videoProperty->video_url = $request->video_url;

        if ($request->hasFile('image')) {
            $videoProperty->image = $request->file('image')->store('video_properties', 'public');
        } else {
            $videoProperty->image = null;
        }

        $videoProperty->save();
        return redirect()->back()->with('success', 'Video property created successfully.');
    }
    public function updateVideoProperty(Request $request, VideoProperty $videoProperty)
    {
        $videoProperty->title = $request->title;
        $videoProperty->url = $request->url;
        $videoProperty->video_url = $request->video_url;

        if ($request->hasFile('image')) {
            if ($videoProperty->image && Storage::disk('public')->exists($videoProperty->image)) {
                Storage::disk('public')->delete($videoProperty->image);
            }
            $videoProperty->image = $request->file('image')->store('video_properties', 'public');
        }

        $videoProperty->save();
        return redirect()->back()->with('success', 'Video property updated successfully.');
    }
    public function deleteVideoProperty(VideoProperty $videoProperty)
    {
        if ($videoProperty->image && Storage::disk('public')->exists($videoProperty->image)) {
            Storage::disk('public')->delete($videoProperty->image);
        }
        $videoProperty->delete();
        return redirect()->back()->with('success', 'Video property deleted successfully.');
    }
    public function storePartner(Request $request)
    {


        $partner = new JpPartner();
        $partner->name = $request->name;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partners', 'public');
        }
        $partner->save();

        return redirect()->back()->with('success', 'Partner added successfully.');
    }
    public function deletePartner(JpPartner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }
        $partner->delete();

        return redirect()->back()->with('success', 'Partner deleted successfully.');
    }

    public function storeAgent(Request $request)
    {
        // dd($request->all());
        $agent = new PropertyAgent;
        $agent->name = $request->name;
        $agent->number = $request->phone;
        $agent->email = $request->email;
        $agent->address = $request->address;
        if ($request->hasFile('nid')) {
            $agent->nid = $request->file('nid')->store('agents/nid', 'public');
        }
        if ($request->hasFile('resume')) {
            $agent->resume = $request->file('resume')->store('agents/resume', 'public');
        }
        $agent->save();
        return redirect()->back()->with('success', 'Agent request sent successfully.');
    }

    public function agentRequests()
    {
        $requests = PropertyAgent::latest()->paginate(20);
        return view('backend.agent.sisters.property.agent-requests', compact('requests'));
    }
    public function updateMark(Request $request, PropertyAgent $agent)
    {
        $agent->mark = $request->has('mark') ? 1 : 0;
        $agent->save();
        $message = $agent->mark ? 'Request approved successfully.' : 'Request approval removed.';
        return redirect()->back()->with('success', $message);
    }

    //multiple images
    public function storeImages(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',

        ]);

        if ($request->hasFile('multi_images')) {
            foreach ($request->file('multi_images') as $image) {
                $path = $image->store('property_images', 'public');

                PropertyImage::create([
                    'property_id' => $request->property_id,
                    'image' => $path,
                ]);
            }
        }

        return back()->with('success', 'Images uploaded successfully.');
    }
    public function deleteImage($id)
    {
        $image = PropertyImage::findOrFail($id);

        // Delete the file from storage
        Storage::disk('public')->delete($image->image);

        // Delete the database record
        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }

    //comments
    public function storeComment(Request $request)
    {
        $comment = new PropertyComment;
        $comment->property_id = $request->property_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back()->with('success', 'Comment added successfully.');
    }
    public function deleteComment(PropertyComment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
    public function updateCommentMark(Request $request, PropertyComment $comment)
    {
        $comment->mark = $request->has('mark') ? 1 : 0;
        $comment->save();
        $message = $comment->mark ? 'Comment approved successfully.' : 'Comment approval removed.';
        return redirect()->back()->with('success', $message);
    }

    public function comments()
    {
        $comments = PropertyComment::latest()->paginate(20);
        return view('backend.agent.sisters.property.comments', compact('comments'));
    }

    //order property
    public function storeOrder(Request $request)
    {
        $order = new PropertyOrder;
        $order->property_id = $request->property_id;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->comment = $request->comment;
        $order->mark = $request->has('mark') ? 1 : 0;
        $order->save();
        return redirect()->back()->with('success', 'Order placed successfully.');
    }
    public function orders()
    {
        $orders = PropertyOrder::latest()->paginate(20);
        return view('backend.agent.sisters.property.orders', compact('orders'));
    }
    public function deleteOrder(PropertyOrder $order)
    {
        $order->delete();
        return redirect()->back()->with('success', 'Order deleted successfully.');
    }
    public function updateOrderMark(Request $request, PropertyOrder $order)
    {
        $order->mark = $request->has('mark') ? 1 : 0;
        $order->save();
        $message = $order->mark ? 'Order approved successfully.' : 'Order approval removed.';
        return redirect()->back()->with('success', $message);
    }


}
