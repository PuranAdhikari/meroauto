<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryEditRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    protected $requestArray;

    public function __construct()
    {
        $this->requestArray = ['name', 'slug', 'parent', 'description', 'image', 'published', 'meta_title', 'meta_description', 'keywords', 'robots'];
    }

    public function index()
    {
        $categories = Category::whereNull('parent')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        Category::create($data);
        return redirect('/admin/categories')->with('message', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryEditRequest $request, $id)
    {
        $category = Category::find($id);
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $category->update($data);
        return redirect('/admin/categories')->with('message', 'Category updated successfully.');
    }

    public function toggleStatus($id)
    {
        $category = Category::findOrFail($id);
        if ($category->published) {
            $category->published = 0;
            $publishen = 'unpublished';
        } else {
            $category->published = 1;
            $publishen = 'published';
        }
        $category->update();
        return back()->with('message', 'Category ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        Category::destroy($all);
        return back()->with('message', 'Categories deleted successfully.');
    }

    public function slug($title)
    {
        $slug = Str::slug($title);
        $slugCount = Category::where('slug', $slug)->get()->count();
        return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }
}
