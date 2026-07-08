<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
    'plan_name',
    'plan_type',
    'price',
    'duration_days',
    'currency',
    'description',
    'features_json',
    'is_active',
    'sort_order',
    ];

    protected $casts = [
        'features_json' => 'array',
        'is_active' => 'boolean',
    ];
}
