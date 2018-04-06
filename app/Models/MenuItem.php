<?php

namespace App\Models;

use App\Observers\RecordFingerPrintObserver;
use Iatstuti\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItem extends Model
{
    use SoftDeletes, CascadeSoftDeletes;

    protected $dates = ['deleted_at'];

    protected $cascadeDeletes = ['children_items'];

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

    public function parent_item()
    {
        return $this->belongsTo(MenuItem::class, 'parent');
    }

    public function children_items()
    {
        return $this->hasMany(MenuItem::class, 'parent');
    }

    public function menu()
    {
        return $this->hasOne(Menu::class, 'menu');
    }

    public function isAnyStepChildOf($menu_item)
    {
        $flag = 0;
        if (count($menu_item->children_items)) {
            $ids = [];
            foreach ($menu_item->children_items as $children_item) {
                $ids[] = $children_item->id;
                if ($this->isAnyStepChildOf($children_item))
                    $flag = 1;
            }
            if (in_array($this->id, $ids) || $flag == 1)
                return true;
        }
        return false;
    }
}
