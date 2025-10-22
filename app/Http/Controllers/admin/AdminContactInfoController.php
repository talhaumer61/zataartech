<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class AdminContactInfoController extends Controller
{
    public function index($action = 'list', $id = null)
    {
        $contactRecord = ContactInfo::first();
        $contact = null;

        if ($action === 'edit' && $id) {
            $contact = ContactInfo::findOrFail($id);
        }

        return view('admin.contact_info', compact('action', 'contactRecord', 'contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'phone1' => 'nullable|string|max:50',
            'phone2' => 'nullable|string|max:50',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'status' => 'required|boolean',
        ]);

        ContactInfo::create($request->all());

        sessionMsg('Success', 'Contact Info added successfully!', 'success');
        return redirect()->route('admin.contactinfo');
    }

    public function update(Request $request, $id)
    {
        $contact = ContactInfo::findOrFail($id);

        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'phone1' => 'nullable|string|max:50',
            'phone2' => 'nullable|string|max:50',
            'email1' => 'nullable|email|max:255',
            'email2' => 'nullable|email|max:255',
            'status' => 'required|boolean',
        ]);

        $contact->update($request->all());

        sessionMsg('Updated', 'Contact Info updated successfully!', 'success');
        return redirect()->route('admin.contactinfo');
    }

    public function destroy($id)
    {
        $contact = ContactInfo::findOrFail($id);
        $contact->delete();

        sessionMsg('Deleted', 'Contact Info deleted successfully.', 'danger');
        return redirect()->route('admin.contactinfo');
    }
}
