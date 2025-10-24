<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\SuccessStory;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 1)->orderBy('id')->limit(3)->get();

        $stories = SuccessStory::where('status', true)
                ->inRandomOrder()
                ->take(3)
                ->get();

        $testimonials = Testimonial::where('status', 1)
        ->latest()
        ->take(10)
        ->get();

        return view('site.home', compact('services', 'stories', 'testimonials'));
    }
}
