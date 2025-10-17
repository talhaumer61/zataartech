<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuccessStoriesController extends Controller
{
    public function index(){
        return view('site.success_stories');
    }

    public function detail($href = null){
        return view('site.success_stories', compact('href'));
    }
}
