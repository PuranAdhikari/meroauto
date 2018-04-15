<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use App\User;

use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
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
        return $query->where('published', 1)
            ->where('start_publishing', '<=', Carbon::now());
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

    public function isEnglish()
    {
        return $this->language != 'Nepali' ? true : false;
    }

    public function isNepali()
    {
        return $this->language != 'English' ? true : false;
    }

    public function isEnglishAndNepali()
    {
        return $this->language == 'Both' ? true : false;
    }

    #To get Author Username with id
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

//    public static function removeFeatured()
//    {
//        return self::where('featured', 1)->update(['featured' => 0]);
//    }
}