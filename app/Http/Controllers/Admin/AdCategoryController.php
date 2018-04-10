<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdCategoryRequest;
use App\Models\AdCategory;
use Illuminate\Http\Request;

class AdCategoryController extends Controller
{
    public function index()
    {
        $adCategories = AdCategory::latest()->paginate(30);
        return view('admin.ads_manager.categories.index', compact('adCategories'));
    }

    public function create()
    {
        return view('admin.ads_manager.categories.create');
    }

    public function store(AdCategoryRequest $request)
    {
        $data = $request->except(['files', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $category = AdCategory::create($data);
        $url = $request->save_close ? 'categories' : 'categories/' . $category->id . '/edit';
        return redirect('/admin/ads-manager/' . $url)->with('message', 'Ad category created successfully.');
    }

    public function edit(AdCategory $category)
    {
        return view('admin.ads_manager.categories.edit', compact('category'));
    }

    public function update(AdCategoryRequest $request, AdCategory $category)
    {
        $data = $request->except(['files', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $category->update($data);
        $url = $request->save_close ? 'categories' : 'categories/' . $category->id . '/edit';
        return redirect('/admin/ads-manager/' . $url)->with('message', 'Ad category updated successfully.');
    }

    public function toggleStatus($id)
    {
        $category = AdCategory::findOrFail($id);
        if ($category->published) {
            $category->published = 0;
            $publishen = 'unpublished';
        } else {
            $category->published = 1;
            $publishen = 'published';
        }
        $category->update();
        return back()->with('message', 'Ad category ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        AdCategory::destroy($all);
        return back()->with('message', 'Ad categories deleted successfully.');
    }
}