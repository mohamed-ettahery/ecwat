<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    // use NodeTrait;

    // protected $parentColumn = 'parent_id';
    // protected $leftColumn = 'lft';
    protected $fillable = ['name', 'slug', 'image', 'en_name', 'en_slug', 'parent_id'];
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function getRouteKeyName()
    {
        $request = request();
        $path = $request->path();
        if (Str::startsWith($path, 'en')) {
            return 'en_slug';
        } else {
            return 'slug';
        }
    }
    public function hasProducts()
    {
        if ($this->products()->exists()) {
            return true;
        }

        foreach ($this->children as $subcategory) {
            if ($subcategory->hasProducts()) {
                return true;
            }
        }

        return false;
        // return $this->hasMany(Product::class, 'category_id');
    }
    public function getChildIds()
    {
        $ids = [];

        foreach ($this->childs as $child) {
            $ids[] = $child->id;
            $ids = array_merge($ids, $child->getChildIds());
        }

        return $ids;
    }
}
