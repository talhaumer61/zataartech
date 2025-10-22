<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function index($action = 'list', $href = null)
    {
        $service = null;

        if ($action === 'edit' && $href) {
            $service = Service::where('href', $href)->firstOrFail();
        }

        $services = Service::latest()->get();

        return view('admin.services', compact('action', 'services', 'service'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'required|string|max:255',
            'href'           => 'nullable|string|max:255|unique:services,href',
            'overview'       => 'nullable|string',
            'whats_included' => 'nullable|string',
            'use_cases'      => 'nullable|string',
            'description'    => 'nullable|string',
            'photo'          => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'icon'          => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'status'         => 'required|boolean',
        ]);

        // Handle image upload
        $photoPath = null;
        $iconPath = null;
        if ($request->hasFile('photo')) {
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/services'), $photoName);
            $photoPath = 'uploads/services/' . $photoName;
        }
        
        if ($request->hasFile('icon')) {
            $photoName = time() . '_' . $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('uploads/services/icons'), $photoName);
            $iconPath = 'uploads/services/icons/' . $photoName;
        }

        // Save service
        Service::create([
            'title'          => $request->title,
            'href'           => Str::slug($request->title),
            'photo'          => $photoPath,
            'icon'           => $iconPath,
            'overview'       => $request->overview,
            'whats_included' => $request->whats_included,
            'use_cases'      => $request->use_cases,
            'description'    => $request->description,
            'status'         => $request->status,
        ]);

        sessionMsg('Success', 'Service added successfully!', 'success');
        return redirect()->route('admin.services', );
    }

    public function update(Request $request, $href)
    {
        $request->validate([
            'title'          => 'required|string|max:255',
            'href'           => 'nullable|string|max:255',
            'overview'       => 'nullable|string',
            'whats_included' => 'nullable|string',
            'use_cases'      => 'nullable|string',
            'description'    => 'nullable|string',
            'photo'          => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'icon'          => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'status'         => 'required|boolean',
        ]);

        $service = Service::findOrFail($href);

        // Handle photo update
        $photoPath = $service->photo;
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($photoPath && file_exists(public_path($photoPath))) {
                unlink(public_path($photoPath));
            }
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/services'), $photoName);
            $photoPath = 'uploads/services/' . $photoName;
        }
        
        $iconPath = $service->icon;
        if ($request->hasFile('icon')) {
            // Delete old photo if exists
            if ($iconPath && file_exists(public_path($iconPath))) {
                unlink(public_path($iconPath));
            }
            $photoName = time() . '_' . $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('uploads/services/icons'), $photoName);
            $iconPath = 'uploads/services/icons/' . $photoName;
        }

        // Update service
        $service->update([
            'title'          => $request->title,
            'href'           => Str::slug($request->title),
            'photo'          => $photoPath,
            'icon'           => $iconPath,
            'overview'       => $request->overview,
            'whats_included' => $request->whats_included,
            'use_cases'      => $request->use_cases,
            'description'    => $request->description,
            'status'         => $request->status,
        ]);

        sessionMsg('Updated', 'Service updated successfully!', 'success');
        return redirect()->route('admin.services');
    }

    
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete photo from storage if exists
        // if ($service->photo && file_exists(public_path($service->photo))) {
        //     unlink(public_path($service->photo));
        // }

        // Soft delete (model should use SoftDeletes)
        $service->delete();

        sessionMsg('Deleted', 'Service deleted successfully.', 'danger');
        return redirect()->route('admin.services');
    }

}
