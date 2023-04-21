<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariantAttributes extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $incrementing = false;
    public $timestamps = false;

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class, 'variant_id');
    }

    public function attribute()
    {
        return $this->belongsTo(OptionAttribute::class, 'attribute_id');
    }
}
