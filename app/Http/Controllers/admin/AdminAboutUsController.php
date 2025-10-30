<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AdminAboutUsController extends Controller
{
    public function index($action = 'list', $id = null)
    {
        $about = null;

        if ($action === 'edit' && $id) {
            $about = AboutUs::findOrFail($id);
        }

        $aboutRecord = AboutUs::latest()->first();

        return view('admin.about_us', compact('action', 'about', 'aboutRecord'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'about_us' => 'nullable|string',
            'heading' => 'nullable|string',
            'mission' => 'nullable|string',
            'vision' => 'nullable|string',
            'detail' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $photoPath = null;
        if ($request->hasFile('ceo_photo')) {
            $photoName = time() . '_' . $request->file('ceo_photo')->getClientOriginalName();
            $request->file('ceo_photo')->move(upload_path('aboutus'), $photoName);
            $photoPath = 'uploads/aboutus/' . $photoName;
        }

        AboutUs::create([
            'status' => $request->status,
            'about_us' => $request->about_us,
            'heading' => $request->heading,
            'mission' => $request->mission,
            'vision' => $request->vision,
            'detail' => $request->detail
        ]);

        sessionMsg('Success', 'About Us added successfully!', 'success');
        return redirect()->route('admin.aboutus');
    }

    public function update(Request $request, $id)
    {
        $about = AboutUs::findOrFail($id);

        $request->validate([
            'about_us' => 'nullable|string',
            'mission' => 'nullable|string',
            'heading' => 'nullable|string',
            'vision' => 'nullable|string',
            'detail' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $photoPath = $about->ceo_photo;
        if ($request->hasFile('ceo_photo')) {
            if ($photoPath && file_exists(public_path($photoPath))) {
                unlink(public_path($photoPath));
            }
            $photoName = time() . '_' . $request->file('ceo_photo')->getClientOriginalName();
            $request->file('ceo_photo')->move(upload_path('aboutus'), $photoName);
            $photoPath = 'uploads/aboutus/' . $photoName;
        }

        $about->update([
            'status' => $request->status,
            'about_us' => $request->about_us,
            'heading' => $request->heading,
            'mission' => $request->mission,
            'vision' => $request->vision,
            'detail' => $request->detail
        ]);

        sessionMsg('Updated', 'About Us updated successfully!', 'success');
        return redirect()->route('admin.aboutus');
    }

    public function destroy($id)
    {
        $about = AboutUs::findOrFail($id);
        $about->delete();

        sessionMsg('Deleted', 'About Us record deleted successfully.', 'danger');
        return redirect()->route('admin.aboutus');
    }
}
