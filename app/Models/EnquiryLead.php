<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * One family enquiry, whatever form it came through, in one shape, with its
 * follow-up pipeline. Contact details live in the source row
 * (source_table + source_id); see App\Services\Enquiries\EnquiryFeed.
 */
class EnquiryLead extends Model
{
    protected $table = 'enquiry_leads';

    protected $guarded = ['id'];

    protected $casts = [
        'received_at' => 'datetime',
        'followed_up_at' => 'datetime',
        'next_follow_up_at' => 'datetime',
        'first_contacted_at' => 'datetime',
        'last_contacted_at' => 'datetime',
        'stage_changed_at' => 'datetime',
        'demo_at' => 'datetime',
        'alert_sent_at' => 'datetime',
        'possible_duplicate' => 'boolean',
    ];

    public const STAGES = [
        'new' => 'New',
        'contacted' => 'Contacted',
        'requirement_confirmed' => 'Requirement confirmed',
        'shortlisted' => 'Tutors shortlisted',
        'demo_scheduled' => 'Demo scheduled',
        'demo_done' => 'Demo done',
        'converted' => 'Converted (paid)',
        'lost' => 'Lost',
    ];

    public const LOST_REASONS = [
        'price' => 'Price',
        'no_tutor_nearby' => 'No tutor nearby',
        'not_responding' => 'Not responding',
        'chose_other' => 'Chose another option',
        'not_interested' => 'Not interested',
        'duplicate' => 'Duplicate',
        'spam' => 'Spam',
    ];

    public const PRIORITIES = ['hot' => 'Hot', 'warm' => 'Warm', 'cold' => 'Cold'];

    public const SOURCES = [
        'contact' => 'Contact page',
        'website_form' => 'Website enquiry form',
        'demo_form' => 'Demo form',
        'demo_class' => 'Demo class page',
        'ai' => 'NXT AI chat',
        'dashboard' => 'Parent dashboard',
    ];

    public const CLASS_BANDS = [
        'nursery_kg' => 'Nursery–KG',
        '1_5' => 'Class 1–5',
        '6_8' => 'Class 6–8',
        '9_10' => 'Class 9–10',
        '11_12' => 'Class 11–12',
        'college' => 'College',
        'adult' => 'Adult',
    ];

    public const EXAM_GOALS = [
        'jee' => 'JEE', 'neet' => 'NEET', 'cuet' => 'CUET', 'olympiad' => 'Olympiad',
        'sat' => 'SAT', 'boards' => 'Boards', 'none' => 'None',
    ];

    public const MODES = ['home' => 'Home', 'online' => 'Online', 'hybrid' => 'Hybrid'];

    public function activities(): HasMany
    {
        return $this->hasMany(EnquiryActivity::class, 'enquiry_lead_id')->orderByDesc('id');
    }

    public function stage(): string
    {
        return $this->followup_status ?: 'new';
    }

    public function stageLabel(): string
    {
        return self::STAGES[$this->stage()] ?? ucfirst(str_replace('_', ' ', $this->stage()));
    }

    public function sourceLabel(): string
    {
        return self::SOURCES[$this->source] ?? ucfirst(str_replace('_', ' ', (string) $this->source));
    }

    /** @return list<string> */
    public function subjectList(): array
    {
        return array_values(array_filter(explode(',', (string) $this->subjects)));
    }

    /** @return list<string> */
    public function tagList(): array
    {
        return array_values(array_filter(explode(',', (string) $this->tags)));
    }

    /** @return list<string> */
    public function shortlistedIds(): array
    {
        return array_values(array_filter(explode(',', (string) $this->shortlisted_tutor_ids)));
    }
}
