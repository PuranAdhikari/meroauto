<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ManufacturerCreateRequest;
use App\Http\Requests\ManufacturerEditRequest;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ManufacturerController extends Controller
{
    protected $requestArray;

    public function __construct()
    {
        $this->requestArray = ['name', 'slug', 'description', 'published', 'address', 'phone', 'email', 'website', 'google_map_link', 'image'];
    }

    public function index()
    {
        $manufacturers = Manufacturer::latest()->get();
        return view('admin.manufacturers.index', compact('manufacturers'));
    }

    public function create()
    {
        return view('admin.manufacturers.create');
    }

    public function store(ManufacturerCreateRequest $request)
    {
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $manufacturer = Manufacturer::create($data);
        $url = $request->save_close ? 'manufacturers' : 'manufacturers/' . $manufacturer->id . '/edit';
        return redirect('/admin/' . $url)->with('message', 'Manufacturer created successfully.');
    }

    public function edit($id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('admin.manufacturers.edit', compact('manufacturer'));
    }

    public function update(ManufacturerEditRequest $request, $id)
    {
        $manufacturer = Manufacturer::find($id);
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $manufacturer->update($data);
        $url = $request->save_close ? 'manufacturers' : 'manufacturers/' . $manufacturer->id . '/edit';
        return redirect('/admin/' . $url)->with('message', 'Manufacturer updated successfully.');    }

    public function toggleStatus($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        if ($manufacturer->published) {
            $manufacturer->published = 0;
            $publishen = 'unpublished';
        } else {
            $manufacturer->published = 1;
            $publishen = 'published';
        }
        $manufacturer->update();
        return back()->with('message', 'Manufacturer ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        Manufacturer::destroy($all);
        return back()->with('message', 'Manufacturers deleted successfully.');
    }

    public function slug($name)
    {
        $slug = Str::slug($name);
        $slugCount = Manufacturer::where('slug', $slug)->get()->count();
        return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }
}
