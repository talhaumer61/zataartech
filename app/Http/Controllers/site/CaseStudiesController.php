<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaseStudiesController extends Controller
{
    public function index(){
        return view('site.case_studies');
    }

    public function detail($href = null){
        return view('site.case_studies', compact('href'));
    }
}
