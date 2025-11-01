<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function index($action = 'list', $id = null)
    {
        $banner = null;

        if ($action === 'edit' && $id) {
            $banner = Banner::findOrFail($id);
        }

        // Get latest banner that is not soft deleted
        $bannerRecord = Banner::whereNull('deleted_at')->latest()->first();

        return view('admin.banner', compact('action', 'banner', 'bannerRecord'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'tag' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'desc' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'url' => 'nullable|string',
        ]);

        Banner::create($validated + ['status' => 1]);

        sessionMsg('Success', 'Banner added successfully!', 'success');
        return redirect()->route('admin.banner');
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $request->validate([
            'tag' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'desc' => 'nullable|string',
            'button_text' => 'nullable|string|max:500',
            'url' => 'nullable|string',
        ]);

        $banner->update($request->only([
            'tag', 'heading', 'desc', 'button_text', 'url'
        ]));

        sessionMsg('Updated', 'Banner updated successfully!', 'success');
        return redirect()->route('admin.banner');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        sessionMsg('Deleted', 'Banner deleted successfully.', 'danger');
        return redirect()->route('admin.banner');
    }
}
