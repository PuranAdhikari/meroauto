<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacturer extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public static function boot()
    {
        $class = get_called_class();
        $class::observe(new RecordFingerPrintObserver());

        parent::boot();
    }

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public static function selectList()
    {
        return self::published()->pluck('name', 'id');
    }

    public function car_models()
    {
        return $this->hasMany(CarModel::class);
    }
}