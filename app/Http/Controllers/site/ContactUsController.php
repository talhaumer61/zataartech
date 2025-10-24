<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\ContactQuery;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $contact = ContactInfo::where('status', 1)->first();
        return view('site.contact_us', compact('contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'number'   => 'nullable|string|max:30',
            'email'    => 'required|email|max:255',
            'subject'  => 'nullable|string|max:255',
            'message'  => 'required|string',
        ]);

        ContactQuery::create($request->all());

        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }
}
