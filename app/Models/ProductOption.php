<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_option_attributes', 'option_id', 'product_id');
    }

    public function attributes()
    {
        return $this->hasMany(OptionAttribute::class, 'option_id');
    }
}
