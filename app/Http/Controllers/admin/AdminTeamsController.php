<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminTeamsController extends Controller
{
    public function index($action = 'list', $href = null)
    {
        $team = null;

        if ($action === 'edit' && $href) {
            $team = Team::where('href', $href)->firstOrFail();
        }

        $teams = Team::latest()->get();

        return view('admin.teams', compact('action', 'teams', 'team'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'nullable|string|max:30',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'linkedin'    => 'nullable|url',
            'twitter'     => 'nullable|url',
            'facebook'    => 'nullable|url',
            'instagram'   => 'nullable|url',
            'bio'         => 'nullable|string',
            'status'      => 'required|boolean',
        ]);

        // Upload photo
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/team'), $photoName);
            $photoPath = 'uploads/team/' . $photoName;
        }

        Team::create([
            'status'      => $request->status,
            'name'        => $request->name,
            'href'        => Str::random(10),
            'designation' => $request->designation,
            'photo'       => $photoPath,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'linkedin'    => $request->linkedin,
            'twitter'     => $request->twitter,
            'facebook'    => $request->facebook,
            'instagram'   => $request->instagram,
            'bio'         => $request->bio,
        ]);

        sessionMsg('Success', 'Team member added successfully!', 'success');
        return redirect()->route('admin.teams');
    }

    public function update(Request $request, $id)
    {
        $teamMember = Team::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'email'       => 'nullable|email|max:255',
            'phone'       => 'nullable|string|max:30',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'linkedin'    => 'nullable|url',
            'twitter'     => 'nullable|url',
            'facebook'    => 'nullable|url',
            'instagram'   => 'nullable|url',
            'bio'         => 'nullable|string',
            'status'      => 'required|boolean',
        ]);

        $photoPath = $teamMember->photo;
        if ($request->hasFile('photo')) {
            if ($photoPath && file_exists(public_path($photoPath))) {
                unlink(public_path($photoPath));
            }
            $photoName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('uploads/team'), $photoName);
            $photoPath = 'uploads/team/' . $photoName;
        }

        $teamMember->update([
            'status'      => $request->status,
            'name'        => $request->name,
            'designation' => $request->designation,
            'photo'       => $photoPath,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'linkedin'    => $request->linkedin,
            'twitter'     => $request->twitter,
            'facebook'    => $request->facebook,
            'instagram'   => $request->instagram,
            'bio'         => $request->bio,
        ]);

        sessionMsg('Updated', 'Team member updated successfully!', 'success');
        return redirect()->route('admin.teams');
    }

    public function destroy($id)
    {
        $teamMember = Team::findOrFail($id);
        $teamMember->delete();

        sessionMsg('Deleted', 'Team member deleted successfully.', 'danger');
        return redirect()->route('admin.teams');
    }
}
