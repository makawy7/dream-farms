<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function setSlugArAttribute($slug_ar)
    {
        $this->attributes['slug_ar'] = self::uniqueSlug($slug_ar, 'slug_ar');
    }
    public function setSlugEnAttribute($slug_en)
    {
        $this->attributes['slug_en'] = self::uniqueSlug($slug_en, 'slug_en');
    }

    private static function uniqueSlug($slug, $field, $counter = 1)
    {
        $newSlug = parent::where($field, $slug)->exists() ? $slug . '-' . $counter : $slug;
        if (parent::where($field, $newSlug)->exists()) {
            // if it still exists regenerate
            $counter += 1;
            return self::uniqueSlug($slug, $field, $counter);
        } else {
            return $newSlug;
        }
    }
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function options()
    {
        return $this->belongsToMany(ProductOption::class, 'product_option_attributes', 'product_id', 'option_id');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }
}
