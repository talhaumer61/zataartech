<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use App\Models\Testimonial;

class SuccessStoriesController extends Controller
{
    public function index()
    {
        $stories = SuccessStory::with('service')
            ->where('status', 1)
            ->latest()
            ->paginate(6); // paginate 6 per page

        return view('site.success_stories', compact('stories'));
    }

    public function detail($href = null)
    {
        $story = SuccessStory::with('service')
            ->where('href', $href)
            ->where('status', 1)
            ->firstOrFail();
        // Get any testimonial linked to the same service
        $testimonial = Testimonial::where('id_service', $story->id_service)
                    ->where('status', 1)
                    ->first();

        return view('site.success_stories', compact('story', 'href', 'testimonial'));
    }
}
