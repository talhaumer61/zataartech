<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\HomePage;
use App\Models\Service;
use App\Models\SuccessStory;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // ✅ Fetch active banner (latest one)
        $banner = Banner::where('status', 1)
            ->latest()
            ->first();

        // ✅ Fetch active home page content
        $home = HomePage::where('status', 1)
            ->latest()
            ->first();

        // ✅ Fetch services (limit 3)
        $services = Service::where('status', 1)
            ->orderBy('id')
            ->limit(3)
            ->get();

        // ✅ Fetch random 3 success stories
        $stories = SuccessStory::where('status', true)
            ->inRandomOrder()
            ->take(3)
            ->get();

        // ✅ Fetch latest 10 testimonials
        $testimonials = Testimonial::where('status', 1)
            ->latest()
            ->take(10)
            ->get();

        // ✅ Pass all to the homepage view
        return view('site.home', compact('banner', 'home', 'services', 'stories', 'testimonials'));
    }

}
