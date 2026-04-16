<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'name', 'price', 'duration',
        'features', 'is_featured', 'is_active', 'order',
    ];

    protected $casts = [
        'features'    => 'array',
        'is_featured' => 'boolean',
        'is_active'   => 'boolean',
    ];
}
