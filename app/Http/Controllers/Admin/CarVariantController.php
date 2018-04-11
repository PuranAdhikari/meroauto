<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarVariantCreateRequest;
use App\Http\Requests\CarVariantEditRequest;
use App\Models\CarVariant;
use App\Models\ModelColor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variants = CarVariant::latest()->paginate(30);
        return view('admin.car_variants.index', compact('variants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car_variants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarVariantCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarVariantCreateRequest $request)
    {
        $data = $request->except(['files', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('used_car') && $request->used_car == 'on' ? $data['used_car'] = 1 : $data['used_car'] = 0;
        $variant = CarVariant::create($data);
        $url = $request->save_close ? 'car-variants' : 'car-variants/' . $variant->id . '/edit';
        return redirect('/admin/' . $url)->with('message', 'Car variant created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarVariant $carVariant
     * @return \Illuminate\Http\Response
     */
    public function show(CarVariant $carVariant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarVariant $carVariant
     * @return \Illuminate\Http\Response
     */
    public function edit(CarVariant $carVariant)
    {
        $variant = $carVariant;
        $variant->images = json_encode(array_map('intval', json_decode($variant->images)));
        return view('admin.car_variants.edit', compact('variant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CarVariantEditRequest $request
     * @param  \App\Models\CarVariant $carVariant
     * @return \Illuminate\Http\Response
     */
    public function update(CarVariantEditRequest $request, CarVariant $carVariant)
    {
        $data = $request->except(['files', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('used_car') && $request->used_car == 'on' ? $data['used_car'] = 1 : $data['used_car'] = 0;
        $carVariant->update($data);
        $carVariant->updateFeatures();
        $url = $request->save_close ? 'car-variants' : 'car-variants/' . $carVariant->id . '/edit';
        return redirect('/admin/' . $url)->with('message', 'Car variant updated successfully.');
    }

    public function toggleStatus($id)
    {
        $variant = CarVariant::findOrFail($id);
        if ($variant->published) {
            $variant->published = 0;
            $publishen = 'unpublished';
        } else {
            $variant->published = 1;
            $publishen = 'published';
        }
        $variant->update();
        return back()->with('message', 'Car variant ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        CarVariant::destroy($all);
        return back()->with('message', 'Car variants deleted successfully.');
    }

    public function slug($name)
    {
        $slug = Str::slug($name);
        $slugCount = CarVariant::where('slug', $slug)->get()->count();
        return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }

    public function search(Request $request)
    {
        $variants = CarVariant::query();
        if ($request->name) {
            $variants->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if ($request->status != null) {
            $variants->where('published', $request->status);
        }
        if ($request->model) {
            $variants->where('car_model_id', $request->model);
        }
        $paginateItems = $request->items_per_page;
        $variants = $variants->latest()->paginate($paginateItems);
        $searching = true;
        return view('admin.car_variants.index', compact('variants', 'searching'));
    }
}
