<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        // Fetch the single active record
        $about = AboutUs::where('status', 1)->first();
        $teams = Team::where('status', 1)->orderBy('id', 'asc')->get();

        return view('site.about_us', compact('about', 'teams'));
    }
}
