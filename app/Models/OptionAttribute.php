<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionAttribute extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function option()
    {
        return $this->belongsTo(ProductOption::class, 'option_id');
    }
}
