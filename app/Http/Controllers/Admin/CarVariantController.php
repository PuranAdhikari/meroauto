<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarVariantCreateRequest;
use App\Http\Requests\CarVariantEditRequest;
use App\Models\CarVariant;
use App\Models\VariantColor;
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
        $variants = CarVariant::latest()->get();
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
        $data = $request->except(['files', 'color_name', 'color_code', 'color_image_1', 'color_image_2', 'color_image_3', 'color_image_4', 'color_image_5', 'color_image_6', 'color_image_7', 'color_image_8', 'color_image_9', 'color_image_10', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('used_car') && $request->used_car == 'on' ? $data['used_car'] = 1 : $data['used_car'] = 0;
        $variant = CarVariant::create($data);
        VariantColor::createColor($variant->id);
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
        $data = $request->except(['files', 'color_name', 'color_code', 'color_image_1', 'color_image_2', 'color_image_3', 'color_image_4', 'color_image_5', 'color_image_6', 'color_image_7', 'color_image_8', 'color_image_9', 'color_image_10', 'save', 'save_close']);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $request->has('used_car') && $request->used_car == 'on' ? $data['used_car'] = 1 : $data['used_car'] = 0;
        $carVariant->update($data);
        $carVariant->updateFeatures();
        VariantColor::updateColor($carVariant->id);
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
}
