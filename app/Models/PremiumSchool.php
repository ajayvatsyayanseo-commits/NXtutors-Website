<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumSchool extends Model
{
    protected $table = 'premium_schools';

    protected $fillable = [
        'city',
        'area',
        'school_name',
        'board',
        'board_category',
        'premium_tier',
        'notes',
    ];

    protected $casts = [
        'city'           => 'string',
        'area'           => 'string',
        'school_name'    => 'string',
        'board'          => 'string',
        'board_category' => 'string',
        'premium_tier'   => 'string',
        'notes'          => 'string',
    ];

    /**
     * Scope: Filter by city
     */
    public function scopeCity($query, string $city)
    {
        return $query->where('city', $city);
    }

    /**
     * Scope: Filter by board category (IB / IGCSE / CBSE / ICSE)
     */
    public function scopeBoard($query, array $boards)
    {
        return $query->whereIn('board_category', $boards);
    }

    /**
     * Scope: Only premium tier A schools
     */
    public function scopePremium($query)
    {
        return $query->where('premium_tier', 'A');
    }

    /**
     * Helper: formatted label for UI / AI
     */
    public function displayLabel(): string
    {
        return "{$this->school_name} ({$this->board_category})";
    }
}
