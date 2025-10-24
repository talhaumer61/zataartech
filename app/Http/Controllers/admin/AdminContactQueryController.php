<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactQuery;
use Illuminate\Http\Request;

class AdminContactQueryController extends Controller
{
    public function index()
    {
        $queries = ContactQuery::latest()->get();
        return view('admin.contact_queries', compact('queries'));
    }

    public function destroy($id)
    {
        $query = ContactQuery::findOrFail($id);
        $query->delete();

        sessionMsg('success', 'Query deleted successfully.','success');
        return redirect()->back();
    }
}
