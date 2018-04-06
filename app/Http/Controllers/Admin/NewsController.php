<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryEditRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsEditRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    protected $requestArray;

    public function __construct()
    {
        $this->requestArray = ['language', 'english_heading', 'nepali_heading', 'english_sub_heading', 'nepali_sub_heading', 'slug', 'category', 'english_content', 'nepali_content', 'image', 'featured', 'published', 'main_news', 'start_publishing', 'finish_publishing', 'meta_title', 'meta_description', 'keywords', 'robots'];
    }

    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(NewsCreateRequest $request)
    {
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('featured') && $request->featured == 'on' ? $data['featured'] = 1 : $data['featured'] = 0;
        $request->has('main_news') && $request->main_news == 'on' ? $data['main_news'] = 1 : $data['main_news'] = 0;
        News::create($data);
        return redirect('/admin/news')->with('message', 'News created successfully.');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(NewsEditRequest $request, $id)
    {
        $news = News::find($id);
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('featured') && $request->featured == 'on' ? $data['featured'] = 1 : $data['featured'] = 0;
        $request->has('main_news') && $request->main_news == 'on' ? $data['main_news'] = 1 : $data['main_news'] = 0;
        $news->update($data);
        return redirect('/admin/news')->with('message', 'News updated successfully.');
    }

    public function toggleStatus($id)
    {
        $news = News::findOrFail($id);
        if ($news->published) {
            $news->published = 0;
            $publishen = 'unpublished';
        } else {
            $news->published = 1;
            $publishen = 'published';
        }
        $news->update();
        return back()->with('message', 'News ' . $publishen . ' successfully.');
    }

    public function toggleFeatured($id)
    {
        $news = News::findOrFail($id);
        if ($news->featured) {
            $news->featured = 0;
            $feature = 'unfeatured';
        } else {
            $news->featured = 1;
            $feature = 'featured';
        }
        $news->update();
        return back()->with('message', 'News ' . $feature . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        News::destroy($all);
        return back()->with('message', 'News deleted successfully.');
    }

    public function slug($title)
    {
        $slug = Str::slug($title);
        $slugCount = News::where('slug', $slug)->get()->count();
        return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }
}
