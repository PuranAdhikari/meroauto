<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdItemRequest;
use App\Models\AdItem;
use Illuminate\Http\Request;

class AdItemController extends Controller
{
    public function index()
    {
        $adItems = AdItem::latest()->paginate(30);
        return view('admin.ads_manager.items.index', compact('adItems'));
    }

    public function create()
    {
        return view('admin.ads_manager.items.create');
    }

    public function store(AdItemRequest $request)
    {
        $data = $request->except(['files', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $item = AdItem::create($data);
        $url = $request->save_close ? 'items' : 'items/' . $item->id . '/edit';
        return redirect('/admin/ads-manager/' . $url)->with('message', 'Ad item created successfully.');
    }

    public function edit(AdItem $item)
    {
        return view('admin.ads_manager.items.edit', compact('item'));
    }

    public function update(AdItemRequest $request, AdItem $item)
    {
        $data = $request->except(['files', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $item->update($data);
        $url = $request->save_close ? 'items' : 'items/' . $item->id . '/edit';
        return redirect('/admin/ads-manager/' . $url)->with('message', 'Ad item updated successfully.');
    }

    public function toggleStatus($id)
    {
        $item = AdItem::findOrFail($id);
        if ($item->published) {
            $item->published = 0;
            $publishen = 'unpublished';
        } else {
            $item->published = 1;
            $publishen = 'published';
        }
        $item->update();
        return back()->with('message', 'Ad item ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        AdItem::destroy($all);
        return back()->with('message', 'Ad items deleted successfully.');
    }
}
