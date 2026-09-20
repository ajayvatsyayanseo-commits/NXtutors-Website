<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A tutor's reply to a lead, delivered through the platform rather than from their own number.
 */
class LeadReply extends NxtModel
{
    protected $table = 'nxt_lead_replies';

    protected $casts = [
        'ai_drafted' => 'boolean',
        'sent_at' => 'datetime',
    ];
}
