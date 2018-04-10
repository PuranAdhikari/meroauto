<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ManufacturerCreateRequest;
use App\Http\Requests\ManufacturerEditRequest;
use App\Models\ContactRequest;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ContactRequestController extends Controller
{

    public function index()
    {
        $requests = ContactRequest::latest()->paginate(30);
        return view('admin.contact_requests.index', compact('requests'));
    }

    public function create()
    {
        abort(404);
    }

    public function store()
    {
        abort(404);
    }

    public function edit($id)
    {
        abort(404);
    }

    public function update($id)
    {
        abort(404);
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        ContactRequest::destroy($all);
        return back()->with('message', 'Contact requests deleted successfully.');
    }
}
