<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VariantColor extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        $class = get_called_class();
        $class::observe(new RecordFingerPrintObserver());

        parent::boot();
    }

    public function variant()
    {
        return $this->belongsTo(CarVariant::class, 'variant_id');
    }

    public static function createColor($id)
    {
        $request = request();
        foreach (array_filter($request->color_code) as $i => $code) {
            $image = 'color_image_' . $i;
            self::create([
                'variant_id' => $id,
                'color_name' => $request->color_name[$i],
                'color_code' => $request->color_code[$i],
                'image' => $request->$image
            ]);
        }
    }

    public static function updateColor($id)
    {
        $variant = CarVariant::findOrFail($id);
        $variant->colors()->delete();
        self::createColor($id);
    }
}
