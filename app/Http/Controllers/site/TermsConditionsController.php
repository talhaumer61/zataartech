<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class TermsConditionsController extends Controller
{
    public function index(){
        $terms = TermsCondition::where('status', 1)
        ->latest()
        ->get();

        return view('site.terms_conditions', compact('terms'));
    }
}
