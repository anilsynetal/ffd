<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = null)
    {
        $sliders = Slider::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->get();
        $services = Service::where('status', 1)->orderBy('id', 'desc')->get();
        $benefits = Benefit::where('status', 1)->orderBy('id', 'desc')->get();
        $core_features = Feature::where('status', 1)->where('is_core_feature', 1)->orderBy('id', 'desc')->get();
        $key_features = Feature::where('status', 1)->where('is_core_feature', 0)->orderBy('id', 'desc')->get();
        return view('website.home', compact('sliders', 'blogs', 'services', 'benefits', 'core_features', 'key_features'));
    }

    //Blog Details
    public function blog_details($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if (!$blog) {
            return redirect()->route('home')->with('error', 'Blog not found');
        }
        return view('website.blog-details', compact('blog'))->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
