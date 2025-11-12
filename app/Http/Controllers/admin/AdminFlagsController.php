<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flag;

class AdminFlagsController extends Controller
{
    public function index($action = 'list', $id = null)
    {
        $flag = null;

        if ($action === 'edit' && $id) {
            $flag = Flag::findOrFail($id);
        }

        $flags = Flag::latest()->get();

        return view('admin.flags', compact('action', 'flags', 'flag'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string|max:255',
            'flag_image'   => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'status'       => 'required|boolean',
        ]);

        $flagPath = null;
        if ($request->hasFile('flag_image')) {
            $fileName = time() . '_' . $request->file('flag_image')->getClientOriginalName();
            $request->file('flag_image')->move(upload_path('flags'), $fileName);
            $flagPath = 'uploads/flags/' . $fileName;
        }

        Flag::create([
            'country_name' => $request->country_name,
            'flag_image'   => $flagPath,
            'status'       => $request->status,
        ]);

        sessionMsg('Success', 'Flag added successfully!', 'success');
        return redirect()->route('admin.flags');
    }

    public function update(Request $request, $id)
    {
        $flag = Flag::findOrFail($id);

        $request->validate([
            'country_name' => 'required|string|max:255',
            'flag_image'   => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'status'       => 'required|boolean',
        ]);

        $flagPath = $flag->flag_image;
        if ($request->hasFile('flag_image')) {
            if ($flagPath && file_exists(public_path($flagPath))) {
                unlink(public_path($flagPath));
            }
            $fileName = time() . '_' . $request->file('flag_image')->getClientOriginalName();
            $request->file('flag_image')->move(upload_path('flags'), $fileName);
            $flagPath = 'uploads/flags/' . $fileName;
        }

        $flag->update([
            'country_name' => $request->country_name,
            'flag_image'   => $flagPath,
            'status'       => $request->status,
        ]);

        sessionMsg('Updated', 'Flag updated successfully!', 'success');
        return redirect()->route('admin.flags');
    }

    public function destroy($id)
    {
        $flag = Flag::findOrFail($id);
        if ($flag->flag_image && file_exists(public_path($flag->flag_image))) {
            unlink(public_path($flag->flag_image));
        }
        $flag->delete();

        sessionMsg('Deleted', 'Flag deleted successfully.', 'danger');
        return redirect()->route('admin.flags');
    }
}
