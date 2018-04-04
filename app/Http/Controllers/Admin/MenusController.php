<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenuCreateRequest;
use App\Http\Requests\MenuEditRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    protected $requestArray;

    public function __construct()
    {
        $this->requestArray = ['title', 'menu_type', 'description', 'published'];
    }

    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menus.create');
    }

    public function store(MenuCreateRequest $request)
    {
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        Menu::create($data);
        return redirect('/admin/menus')->with('message', 'Menu created successfully.');
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(MenuEditRequest $request, $id)
    {
        $menu = Menu::find($id);
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $menu->update($data);
        return redirect('/admin/menus')->with('message', 'Menu updated successfully.');
    }

    public function toggleStatus($id)
    {
        $menu = Menu::findOrFail($id);
        if ($menu->published) {
            $menu->published = 0;
            $publishen = 'unpublished';
        } else {
            $menu->published = 1;
            $publishen = 'published';
        }
        $menu->update();
        return back()->with('message', 'Menu ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        Menu::destroy($all);
        return back()->with('message', 'Menus deleted successfully.');
    }
}
