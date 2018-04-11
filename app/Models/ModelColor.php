<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelColor extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        $class = get_called_class();
        $class::observe(new RecordFingerPrintObserver());

        parent::boot();
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'model_id');
    }

    public static function createColor($id)
    {
        $request = request();
        foreach (array_filter($request->color_code) as $i => $code) {
            $image = 'color_image_' . $i;
            self::create([
                'model_id' => $id,
                'color_name' => $request->color_name[$i],
                'color_code' => $request->color_code[$i],
                'image' => $request->$image
            ]);
        }
    }

    public static function updateColor($id)
    {
        $model = CarModel::findOrFail($id);
        $model->colors()->delete();
        self::createColor($id);
    }
}
