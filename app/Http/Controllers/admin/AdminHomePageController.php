<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminHomePageController extends Controller
{
    /**
     * Display, add, or edit Home Page content.
     */
    public function index($action = 'list', $id = null)
    {
        $homePage = null;

        if ($action === 'edit' && $id) {
            $homePage = HomePage::findOrFail($id);
        }

        // Get latest (active) home page record
        $homePageRecord = HomePage::whereNull('deleted_at')->latest()->first();

        return view('admin.homepage', compact('action', 'homePage', 'homePageRecord'));
    }

    /**
     * Store new home page content.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'services_tag' => 'nullable|string|max:255',
            'services_heading' => 'nullable|string|max:255',
            'services_desc' => 'nullable|string',

            'section1_tag' => 'nullable|string|max:255',
            'section1_heading' => 'nullable|string|max:255',
            'section1_desc' => 'nullable|string',
            'section1_btn_text' => 'nullable|string|max:255',
            'section1_url' => 'nullable|string',

            'section1_image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'section1_image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'section2_tag' => 'nullable|string|max:255',
            'section2_heading' => 'nullable|string|max:255',
            'section2_desc' => 'nullable|string',
            'section2_btn_text' => 'nullable|string|max:255',
            'section2_url' => 'nullable|string',

            'section2_image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'section2_image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'success_stories_tag' => 'nullable|string|max:255',
            'success_stories_heading' => 'nullable|string|max:255',
            'success_stories_desc' => 'nullable|string',

            'reviews_tag' => 'nullable|string|max:255',
            'reviews_heading' => 'nullable|string|max:255',
            'reviews_desc' => 'nullable|string',

            'footer_text' => 'nullable|string',
        ]);

        // Handle image uploads using helper
        foreach (['section1_image1', 'section1_image2', 'section2_image1', 'section2_image2'] as $imgField) {
            if ($request->hasFile($imgField)) {
                $photoName = time() . '_' . $request->file($imgField)->getClientOriginalName();
                $request->file($imgField)->move(upload_path('homepage'), $photoName);
                $validated[$imgField] = 'uploads/homepage/' . $photoName;
            }
        }

        HomePage::create($validated + ['status' => 1]);

        sessionMsg('success', 'Home Page content added successfully!', 'success');
        return redirect()->route('admin.homepage');
    }

    /**
     * Update existing home page content.
     */
    public function update(Request $request, $id)
    {
        $homePage = HomePage::findOrFail($id);

        $validated = $request->validate([
            'services_tag' => 'nullable|string|max:255',
            'services_heading' => 'nullable|string|max:255',
            'services_desc' => 'nullable|string',

            'section1_tag' => 'nullable|string|max:255',
            'section1_heading' => 'nullable|string|max:255',
            'section1_desc' => 'nullable|string',
            'section1_btn_text' => 'nullable|string|max:255',
            'section1_url' => 'nullable|string',

            'section1_image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'section1_image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'section2_tag' => 'nullable|string|max:255',
            'section2_heading' => 'nullable|string|max:255',
            'section2_desc' => 'nullable|string',
            'section2_btn_text' => 'nullable|string|max:255',
            'section2_url' => 'nullable|string',

            'section2_image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'section2_image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'success_stories_tag' => 'nullable|string|max:255',
            'success_stories_heading' => 'nullable|string|max:255',
            'success_stories_desc' => 'nullable|string',

            'reviews_tag' => 'nullable|string|max:255',
            'reviews_heading' => 'nullable|string|max:255',
            'reviews_desc' => 'nullable|string',

            'footer_text' => 'nullable|string',
        ]);

        // Handle image updates (replace old ones if new uploaded)
        foreach (['section1_image1', 'section1_image2', 'section2_image1', 'section2_image2'] as $imgField) {
            if ($request->hasFile($imgField)) {
                // Delete old image if exists
                if ($homePage->$imgField && File::exists(upload_path($homePage->$imgField))) {
                    File::delete(upload_path($homePage->$imgField));
                }

                $photoName = time() . '_' . $request->file($imgField)->getClientOriginalName();
                $request->file($imgField)->move(upload_path('homepage'), $photoName);
                $validated[$imgField] = 'uploads/homepage/' . $photoName;
            }
        }

        $homePage->update($validated);

        sessionMsg('success', 'Home Page content updated successfully!', 'success');
        return redirect()->route('admin.homepage');
    }

    /**
     * Soft delete the home page content.
     */
    public function destroy($id)
    {
        $homePage = HomePage::findOrFail($id);
        $homePage->delete();

        sessionMsg('error', 'Home Page content deleted successfully!', 'warning');
        return redirect()->route('admin.homepage');
    }
}
