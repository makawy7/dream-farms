<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmAddress extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function phone()
    {
        return $this->hasOne(FarmPhone::class, 'address_id', 'id');
    }
}
