<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdCategory extends Model
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

    public function ad_items()
    {
        return $this->hasMany(AdItem::class, 'category');
    }
}
