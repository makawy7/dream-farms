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
        $this->attributes['slug_ar'] = self::uniqueSlug($slug_ar);
    }
    public function setSlugEnAttribute($slug_en)
    {
        $this->attributes['slug_en'] = self::uniqueSlug($slug_en);
    }

    private static function uniqueSlug($slug, $counter = 1)
    {
        $newSlug = parent::where('slug', $slug)->exists() ? $slug . '-' . $counter : $slug;
        if (parent::where('slug', $newSlug)->exists()) {
            // if it still exists regenerate
            $counter += 1;
            return self::uniqueSlug($slug, $counter);
        } else {
            return $newSlug;
        }
    }
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
