<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminSuccessStoriesController extends Controller
{
    public function index($action = 'list', $href = null)
    {
        $story = null;

        if ($action === 'edit' && $href) {
            $story = SuccessStory::where('href', $href)->firstOrFail();
        }

        $stories = SuccessStory::latest()->get();
        $services = Service::where('status', 1)->get();

        return view('admin.success_stories', compact('action', 'stories', 'story', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'id_service'  => 'nullable|exists:services,id',
            'problem'     => 'nullable|string',
            'solution'    => 'nullable|string',
            'results'     => 'nullable|string',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'status'      => 'required|boolean',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/success_stories'), $photoName);
            $photoPath = 'uploads/success_stories/' . $photoName;
        }

        SuccessStory::create([
            'title'       => $request->title,
            'href'        => Str::slug($request->title),
            'id_service'  => $request->id_service,
            'photo'       => $photoPath,
            'problem'     => $request->problem,
            'solution'    => $request->solution,
            'results'     => $request->results,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        sessionMsg('Success', 'Success story added successfully!', 'success');
        return redirect()->route('admin.success-stories');
    }

    public function update(Request $request, $id)
    {
        $story = SuccessStory::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'id_service'  => 'nullable|exists:services,id',
            'problem'     => 'nullable|string',
            'solution'    => 'nullable|string',
            'results'     => 'nullable|string',
            'description' => 'nullable|string',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'status'      => 'required|boolean',
        ]);

        $photoPath = $story->photo;
        if ($request->hasFile('photo')) {
            if ($photoPath && file_exists(public_path($photoPath))) {
                unlink(public_path($photoPath));
            }
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/success_stories'), $photoName);
            $photoPath = 'uploads/success_stories/' . $photoName;
        }

        $story->update([
            'title'       => $request->title,
            'href'        => Str::slug($request->title),
            'id_service'  => $request->id_service,
            'photo'       => $photoPath,
            'problem'     => $request->problem,
            'solution'    => $request->solution,
            'results'     => $request->results,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        sessionMsg('Updated', 'Success story updated successfully!', 'success');
        return redirect()->route('admin.success-stories');
    }

    public function destroy($id)
    {
        $story = SuccessStory::findOrFail($id);

        // if ($story->photo && file_exists(public_path($story->photo))) {
        //     unlink(public_path($story->photo));
        // }

        $story->delete();

        sessionMsg('Deleted', 'Success story deleted successfully.', 'danger');
        return redirect()->route('admin.success-stories');
    }
}
