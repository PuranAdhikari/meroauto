<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeaturedPhoto;
use Illuminate\Http\Request;

class FeaturedPhotoController extends Controller
{
    public function index()
    {
        $photos = FeaturedPhoto::latest()->paginate(30);
        return view('admin.featured_photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.featured_photos.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        FeaturedPhoto::create($data);
        return redirect('/admin/featured-photos')->with('message', 'Featured photo created successfully.');
    }

    public function edit(FeaturedPhoto $featuredPhoto)
    {
        return view('admin.featured_photos.edit', compact('featuredPhoto'));
    }

    public function update(Request $request, FeaturedPhoto $featuredPhoto)
    {
        $data = $request->all();
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $featuredPhoto->update($data);
        return redirect('/admin/featured-photos')->with('message', 'Featured photo updated successfully.');
    }

    public function toggleStatus($id)
    {
        $photo = FeaturedPhoto::findOrFail($id);
        if ($photo->published) {
            $photo->published = 0;
            $publishen = 'unpublished';
        } else {
            $photo->published = 1;
            $publishen = 'published';
        }
        $photo->update();
        return back()->with('message', 'Featured photo ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        FeaturedPhoto::destroy($all);
        return back()->with('message', 'Featured photos deleted successfully.');
    }
}
