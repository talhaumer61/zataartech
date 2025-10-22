<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminTestimonialsController extends Controller
{
    public function index($action = 'list', $id = null)
    {
        $testimonial = null;

        if ($action === 'edit' && $id) {
            $testimonial = Testimonial::findOrFail($id);
        }

        $testimonials = Testimonial::latest()->get();
        $services = Service::where('status', 1)->get();

        return view('admin.testimonials', compact('action', 'testimonials', 'testimonial', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'review'      => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'id_service'  => 'nullable|exists:services,id',
            'status'      => 'required|boolean',
        ]);

        // Upload photo
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/testimonials'), $photoName);
            $photoPath = 'uploads/testimonials/' . $photoName;
        }

        Testimonial::create([
            'client_name' => $request->client_name,
            'designation' => $request->designation,
            'photo'       => $photoPath,
            'review'      => $request->review,
            'id_service'  => $request->id_service,
            'status'      => $request->status,
        ]);

        sessionMsg('Success', 'Testimonial added successfully!', 'success');
        return redirect()->route('admin.testimonials');
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'client_name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'review'      => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'id_service'  => 'nullable|exists:services,id',
            'status'      => 'required|boolean',
        ]);

        $photoPath = $testimonial->photo;
        if ($request->hasFile('photo')) {
            if ($photoPath && file_exists(public_path($photoPath))) {
                unlink(public_path($photoPath));
            }
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/testimonials'), $photoName);
            $photoPath = 'uploads/testimonials/' . $photoName;
        }

        $testimonial->update([
            'client_name' => $request->client_name,
            'designation' => $request->designation,
            'photo'       => $photoPath,
            'review'      => $request->review,
            'id_service'  => $request->id_service,
            'status'      => $request->status,
        ]);

        sessionMsg('Updated', 'Testimonial updated successfully!', 'success');
        return redirect()->route('admin.testimonials');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        sessionMsg('Deleted', 'Testimonial deleted successfully.', 'danger');
        return redirect()->route('admin.testimonials');
    }
}
