<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutBanner;
use App\Models\Banner;
use App\Models\ContactBanner;
use App\Models\ContactInfo;
use App\Models\medicaCategory;
use App\Models\medicaPartner;
use App\Models\medicaProduct;
use App\Models\medicaReview;
use App\Models\Review;
use Illuminate\Http\Request;
use Storage;

class MedicaController extends Controller
{
    public function Medica()
    {
        $partners = medicaPartner::latest()->get();

        $banners = Banner::latest()->where('key', 'medica')->get();
        $aboutbanners = AboutBanner::latest()->where('key', 'medica')->get();
        $about = About::latest()->where('key', 'medica')->first();
        $contactbanners = ContactBanner::latest()->where('key', 'medica')->get();
        $info = ContactInfo::latest()->where('key', 'medica')->first();
        return view('backend.agent.sisters.medica.medica', compact('banners', 'about', 'contactbanners', 'info', 'aboutbanners', 'partners'));
    }

    public function categories()
    {
        $categories = medicaCategory::latest()->get();
        return view('backend.agent.sisters.medica.categories', compact('categories'));

    }
    public function storeCategory(Request $request)
    {
        $category = new medicaCategory;
        $category->icon = $request->icon;
        $category->title = $request->title;
        $category->save();
        return back()->with('success', 'Category created successfully.');
    }
    public function updateCategory(medicaCategory $category, Request $request)
    {
        $category->icon = $request->icon;
        $category->title = $request->title;
        $category->save();
        return back()->with('success', 'Category updated successfully.');
    }
    public function deleteCategory(medicaCategory $category)
    {
        $category->delete();
        return back()->with('success', 'Updated deleted successfully.');
    }

    //reviews
    public function reviews(medicaReview $reviews)
    {
        $reviews = medicaReview::latest()->get();
        return view('backend.agent.sisters.medica.review', compact('reviews'));
    }
    public function storeReview(Request $request)
    {
        $review = new medicaReview;
        $review->name = $request->name;
        $review->subtitle = $request->subtitle;
        $review->description = $request->description;
        if ($request->hasFile('image')) {
            $review->image = $request->file('image')->store('reviews', 'public');
        } else {
            $review->image = null;
        }
        $review->save();
        return redirect()->back()->with('success', 'Review created successfully.');
    }
    public function updateReview(medicaReview $review, Request $request)
    {

        $review->name = $request->name;
        $review->subtitle = $request->subtitle;
        $review->description = $request->description;
        if ($request->hasFile('image')) {
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }
            $review->image = $request->file('image')->store('reviews', 'public');
        }
        $review->save();
        return redirect()->back()->with('success', 'Review update successfully.');
    }
    public function deleteReview(medicaReview $review)
    {
        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
    //partner
    public function storePartner(Request $request)
    {

        $partner = new medicaPartner;
        $partner->title = $request->title;
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partner', 'public');
        } else {
            $partner->image = null;
        }
        $partner->save();
        return redirect()->back()->with('success', 'Partner created successfully.');
    }

    public function deletePartner(medicaPartner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }

        $partner->delete();

        return redirect()->back()->with('success', 'partner deleted successfully.');
    }

    //product 
    public function products()
    {
        $products = medicaProduct::latest()->paginate(20);
        return view('backend.agent.sisters.medica.products', compact('products'));
    }
    public function productCreate()
    {
        $categories = medicaCategory::latest()->get();
        return view('backend.agent.sisters.medica.create', compact('categories'));
    }
    public function productEdit()
    {
        $products = medicaProduct::latest()->get();
        return view('backend.agent.sisters.medica.edit', compact('products'));
    }

    public function storeProduct(Request $request)
    {


        $product = new medicaProduct;
        $imagePath = $request->file('image')->store('products', 'public');
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->descount_price = $request->descount_price;
        $product->weight = $request->weight ? json_encode($request->weight) : null;
        $product->size = $request->size ? json_encode($request->size) : null;
        $product->description = $request->description;
        $product->image = $imagePath;
        $product->save();

        return redirect()->back()->with('success', 'Product Created successfully.');
    }
    public function updateProduct(Request $request, medicaProduct $product)
    {

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->descount_price = $request->descount_price;
        $product->weight = $request->weight ? json_encode($request->weight) : null;
        $product->size = $request->size ? json_encode($request->size) : null;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('success', 'Product Updated successfully.');
    }
    public function deleteProduct(medicaProduct $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }


}
