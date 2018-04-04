<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryEditRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostEditRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    protected $requestArray;

    public function __construct()
    {
        $this->requestArray = ['title', 'slug', 'category', 'description', 'image', 'featured', 'published', 'start_publishing', 'finish_publishing', 'meta_title', 'meta_description', 'keywords', 'robots'];
    }

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostCreateRequest $request)
    {
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('featured') && $request->featured == 'on' ? $data['featured'] = 1 : $data['featured'] = 0;
        Post::create($data);
        return redirect('/admin/posts')->with('message', 'Post created successfully.');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostEditRequest $request, $id)
    {
        $post = Post::find($id);
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('featured') && $request->featured == 'on' ? $data['featured'] = 1 : $data['featured'] = 0;
        $post->update($data);
        return redirect('/admin/posts')->with('message', 'Post updated successfully.');
    }

    public function toggleStatus($id)
    {
        $post = Post::findOrFail($id);
        if ($post->published) {
            $post->published = 0;
            $publishen = 'unpublished';
        } else {
            $post->published = 1;
            $publishen = 'published';
        }
        $post->update();
        return back()->with('message', 'Post ' . $publishen . ' successfully.');
    }
    
    public function toggleFeatured($id)
    {
        $post = Post::findOrFail($id);
        if ($post->featured) {
            $post->featured = 0;
            $feature = 'unfeatured';
        } else {
            $post->featured = 1;
            $feature = 'featured';
        }
        $post->update();
        return back()->with('message', 'Post ' . $feature . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        Post::destroy($all);
        return back()->with('message', 'Posts deleted successfully.');
    }

    public function slug($title)
    {
        $slug = Str::slug($title);
        $slugCount = Post::where('slug', $slug)->get()->count();
        return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }
}
