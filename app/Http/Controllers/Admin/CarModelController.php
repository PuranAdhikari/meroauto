<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarModelCreateRequest;
use App\Http\Requests\CarModelEditRequest;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarModelController extends Controller
{
    protected $requestArray;

    public function __construct()
    {
        $this->requestArray = ['name', 'slug', 'manufacturer_id', 'model_year', 'body_type', 'description', 'published'];
    }

    public function index()
    {
        $models = CarModel::latest()->paginate(30);
        return view('admin.car-models.index', compact('models'));
    }

    public function create()
    {
        return view('admin.car-models.create');
    }

    public function store(CarModelCreateRequest $request)
    {
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $model = CarModel::create($data);
        $url = $request->save_close ? 'car-models' : 'car-models/' . $model->id . '/edit';
        return redirect('/admin/' . $url)->with('message', 'Car model created successfully.');
    }

    public function edit($id)
    {
        $model = CarModel::find($id);
        return view('admin.car-models.edit', compact('model'));
    }

    public function update(CarModelEditRequest $request, $id)
    {
        $model = CarModel::find($id);
        $data = $request->only($this->requestArray);
        $request->has('published') && $request->published == 'on' ? $data['published'] = 1 : $data['published'] = 0;
        $model->update($data);
        $url = $request->save_close ? 'car-models' : 'car-models/' . $model->id . '/edit';
        return redirect('/admin/' . $url)->with('message', 'Car model updated successfully.');
    }

    public function toggleStatus($id)
    {
        $model = CarModel::findOrFail($id);
        if ($model->published) {
            $model->published = 0;
            $publishen = 'unpublished';
        } else {
            $model->published = 1;
            $publishen = 'published';
        }
        $model->update();
        return back()->with('message', 'Car model ' . $publishen . ' successfully.');
    }

    public function bulkDelete(Request $request)
    {
        $selected = $request->only('select');
        $all = array_keys($selected['select']);
        CarModel::destroy($all);
        return back()->with('message', 'Car models deleted successfully.');
    }

    public function slug($name)
    {
        $slug = Str::slug($name);
        $slugCount = CarModel::where('slug', $slug)->get()->count();
        return ($slugCount > 0) ? "{$slug}-{$slugCount}" : $slug;
    }


    public function search(Request $request)
    {
        $models = CarModel::query();
        if ($request->name) {
            $models->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if ($request->status != null) {
            $models->where('published', $request->status);
        }
        if ($request->manufacturer) {
            $models->where('manufacturer_id', $request->manufacturer);
        }
        $paginateItems = $request->items_per_page;
        $models = $models->latest()->paginate($paginateItems);
        $searching = true;
        return view('admin.car-models.index', compact('models', 'searching'));
    }
}
