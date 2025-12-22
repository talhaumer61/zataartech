<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TermsCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminTermsConditionsController extends Controller
{
    public function index($action = 'list', $href = null)
    {
        $term = null;

        if ($action === 'edit' && $href) {
            $term = TermsCondition::where('href', $href)->firstOrFail();
        }

        $terms = TermsCondition::latest()->get();

        return view('admin.terms_conditions', compact('action', 'terms', 'term'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'status'  => 'required|boolean',
        ]);

        TermsCondition::create([
            'title'   => $request->title,
            'content' => $request->content,
            'status'  => $request->status,
            'href'    => Str::random(12),
        ]);

        sessionMsg('Success', 'Terms & Conditions added successfully!', 'success');
        return redirect()->route('admin.terms');
    }

    public function update(Request $request, $id)
    {
        $term = TermsCondition::findOrFail($id);

        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'status'  => 'required|boolean',
        ]);

        $term->update([
            'title'   => $request->title,
            'content' => $request->content,
            'status'  => $request->status,
        ]);

        sessionMsg('Updated', 'Terms & Conditions updated successfully!', 'success');
        return redirect()->route('admin.terms');
    }

    public function destroy($id)
    {
        $term = TermsCondition::findOrFail($id);
        $term->delete();

        sessionMsg('Deleted', 'Terms & Conditions deleted successfully.', 'danger');
        return redirect()->route('admin.terms');
    }
}
