<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $fillable = [
        'plan_type',
        'plan_name',
        'price',
        'duration_days',
        'ai_credits',
        'contact_limit',
        'lead_limit',
        'features',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'features' => 'array',
        'status' => 'boolean',
        'duration_days' => 'integer',
        'ai_credits' => 'integer',
        'contact_limit' => 'integer',
        'lead_limit' => 'integer',
        'sort_order' => 'integer',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeStudent($query)
    {
        return $query->where('plan_type', 'student');
    }

    public function scopeTutor($query)
    {
        return $query->where('plan_type', 'tutor');
    }
}