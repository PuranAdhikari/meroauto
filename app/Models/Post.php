<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at', 'start_publishing', 'finish_publishing'];

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

    public function setStartPublishingAttribute($date)
    {
        $this->attributes['start_publishing'] = $date ? Carbon::createFromFormat('d/m/Y h:i a', $date)->toDateTimeString() : $date;
    }

    public function setFinishPublishingAttribute($date)
    {
        $this->attributes['finish_publishing'] = $date ? Carbon::createFromFormat('d/m/Y h:i a', $date)->toDateTimeString() : $date;
    }

    public function belongingCategory()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}