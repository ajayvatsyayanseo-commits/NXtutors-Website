<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    protected $fillable = [
        'user_id',
        'plan_id',
        'plan_type',
        'start_date',
        'end_date',
        'status',
        'payment_status',
        'ai_credit_limit',
        'contact_limit',
        'lead_limit',
        'ai_credit_used',
        'contact_used',
        'lead_used',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function plan()
    {
        return $this->belongsTo(SubscriptionPlan::class, 'plan_id');
    }
}