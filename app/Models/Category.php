<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Auth;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $dates = ['deleted_at'];

    protected $cascadeDeletes = ['children_categories', 'posts'];

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

    public function parent_category()
    {
        return $this->belongsTo(Category::class, 'parent');
    }

    public function children_categories()
    {
        return $this->hasMany(Category::class, 'parent');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category');
    }

    public function isAnyStepChildOf($category)
    {
        $flag = 0;
        if (count($category->children_categories)) {
            $ids = [];
            foreach ($category->children_categories as $children_category) {
                $ids[] = $children_category->id;
                if ($this->isAnyStepChildOf($children_category))
                    $flag = 1;
            }
            if (in_array($this->id, $ids) || $flag == 1)
                return true;
        }
        return false;
    }
}
