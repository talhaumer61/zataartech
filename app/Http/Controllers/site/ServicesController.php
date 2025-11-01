<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index($href = null)
    {
        return view('site.services', compact('href'));
    }

    public function detail($href = null)
    {
        // Fetch the main service by href (slug) and status = 1
        $service = Service::where('href', $href)
            ->where('status', 1)
            ->first();

        // If service not found → 404
        if (!$service) {
            abort(404);
        }

        // Fetch other active services (except the current one)
        $otherServices = Service::where('href', '!=', $href)
            ->where('status', 1)
            ->limit(5)
            ->get();
        
            // Get any testimonial linked to the same service
        $testimonial = Testimonial::where('id_service', $service->id)
                    ->where('status', 1)
                    ->first();

        // Return view
        return view('site.services', compact('href', 'service', 'otherServices', 'testimonial'));
    }

}
