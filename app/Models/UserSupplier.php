<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSupplier extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = [
        'name',
    ];

    public function getNameAttribute()
    {
        return $this->supplier_name;
    }
}
