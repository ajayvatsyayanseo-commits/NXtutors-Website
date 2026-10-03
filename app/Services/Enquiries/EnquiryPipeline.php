<?php

namespace App\Services\Enquiries;

use App\Models\EnquiryLead;
use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Cache;

/**
 * Admin changes to an enquiry's follow-up: stage, priority, owner, dates,
 * tags, tutors, notes. Every change is one timeline row (who, when, from, to).
 */
final class EnquiryPipeline
{
    public function __construct(private readonly EnquiryFeed $feed)
    {
    }

    /**
     * @param array<string,mixed> $in validated input; only keys present are changed
     * @return int number of changes made
     */
    public function apply(EnquiryLead $lead, array $in, ?object $user): int
    {
        $changes = 0;
        $who = isset($user->name) ? mb_substr((string) $user->name, 0, 64) : null;

        if (array_key_exists('stage', $in) && $in['stage'] !== null && $in['stage'] !== '') {
            $to = $in['stage'] === 'new' ? null : (string) $in['stage'];
            if ($to !== $lead->followup_status) {
                $this->feed->log($lead, 'stage', $lead->stage(), $to ?? 'new', null, $user);
                $lead->followup_status = $to;
                $lead->stage_changed_at = now();
                if ($to !== null && $lead->first_contacted_at === null) {
                    $lead->first_contacted_at = now();
                }
                if ($to === 'contacted') {
                    $lead->last_contacted_at = now();
                }
                if ($to !== 'lost') {
                    $lead->lost_reason = null;
                }
                $changes++;
            }
        }
        if (array_key_exists('lost_reason', $in) && $lead->followup_status === 'lost') {
            $reason = $in['lost_reason'] ?: null;
            if ($reason !== $lead->lost_reason) {
                $this->feed->log($lead, 'lost_reason', $lead->lost_reason, $reason, null, $user);
                $lead->lost_reason = $reason;
                $changes++;
            }
        }
        if (array_key_exists('priority', $in)) {
            $p = $in['priority'] ?: null;
            if ($p !== $lead->priority) {
                $this->feed->log($lead, 'priority', $lead->priority, $p, null, $user);
                $lead->priority = $p;
                $changes++;
            }
        }
        if (array_key_exists('assigned_to', $in)) {
            $a = ($in['assigned_to'] === null || $in['assigned_to'] === '' || $in['assigned_to'] === 'none') ? null : (int) $in['assigned_to'];
            if ($a !== ($lead->assigned_to === null ? null : (int) $lead->assigned_to)) {
                $this->feed->log($lead, 'assign', $lead->assigned_to ? (string) $lead->assigned_to : null, $a ? (string) $a : null, null, $user);
                $lead->assigned_to = $a;
                $changes++;
            }
        }
        foreach (['next_follow_up_at' => 'follow_up', 'demo_at' => 'demo'] as $col => $type) {
            if (array_key_exists($col, $in)) {
                $at = $this->istToUtc($in[$col] ?? null);
                $old = $lead->{$col}?->format('Y-m-d H:i');
                if (($at?->format('Y-m-d H:i')) !== $old) {
                    $this->feed->log($lead, $type, $old, $at?->format('Y-m-d H:i'), null, $user);
                    $lead->{$col} = $at;
                    $changes++;
                }
            }
        }
        if (array_key_exists('tags', $in)) {
            $tags = $this->tags((string) ($in['tags'] ?? ''));
            if ($tags !== $lead->tags) {
                $this->feed->log($lead, 'tag', null, null, 'Tags: ' . ($tags ? trim($tags, ',') : 'none'), $user);
                $lead->tags = $tags;
                $changes++;
            }
        }
        if (array_key_exists('add_tag', $in) && trim((string) $in['add_tag']) !== '') {
            $tags = $this->tags(trim((string) $lead->tags, ',') . ',' . $in['add_tag']);
            if ($tags !== $lead->tags) {
                $this->feed->log($lead, 'tag', null, null, 'Tag added: ' . mb_substr(trim((string) $in['add_tag']), 0, 40), $user);
                $lead->tags = $tags;
                $changes++;
            }
        }
        if (array_key_exists('shortlisted_tutor_ids', $in)) {
            $ids = $this->ids((string) ($in['shortlisted_tutor_ids'] ?? ''));
            if ($ids !== $lead->shortlisted_tutor_ids) {
                $this->feed->log($lead, 'tutors', null, null, 'Shortlisted tutors: ' . ($ids ? trim($ids, ',') : 'none'), $user);
                $lead->shortlisted_tutor_ids = $ids;
                $changes++;
            }
        }
        if (array_key_exists('demo_tutor_id', $in)) {
            $d = $this->ids((string) ($in['demo_tutor_id'] ?? ''));
            $d = $d ? mb_substr(trim($d, ','), 0, 64) : null;
            if ($d !== $lead->demo_tutor_id) {
                $this->feed->log($lead, 'tutors', $lead->demo_tutor_id, $d, 'Demo tutor', $user);
                $lead->demo_tutor_id = $d;
                $changes++;
            }
        }
        if (array_key_exists('note', $in) && trim((string) $in['note']) !== '') {
            $note = mb_substr(trim((string) $in['note']), 0, 5000);
            $this->feed->log($lead, 'note', null, null, $note, $user);
            $lead->followup_note = $note;
            $changes++;
        }

        if ($changes > 0) {
            $lead->followed_up_by = $who;
            $lead->followed_up_at = now();
            $lead->save();
            Cache::forget('enquiries.new_count');
        }

        return $changes;
    }

    /** Mark as a duplicate of another enquiry (it leaves the open pipeline as Lost · Duplicate). */
    public function markDuplicate(EnquiryLead $lead, ?EnquiryLead $of, ?object $user): void
    {
        $lead->duplicate_of_id = $of?->id;
        $lead->possible_duplicate = true;
        $this->apply($lead, ['stage' => 'lost', 'lost_reason' => 'duplicate'], $user);
        $this->feed->log($lead, 'duplicate', null, $of ? '#' . $of->id : null, $of ? 'Merged as a duplicate of #' . $of->id : 'Marked as a duplicate', $user);
        $lead->save();
    }

    private function istToUtc(mixed $v): ?CarbonImmutable
    {
        if (! is_string($v) || trim($v) === '') {
            return null;
        }
        try {
            return CarbonImmutable::parse(trim($v), EnquiryQuery::tz())->utc();
        } catch (\Throwable $e) {
            return null;
        }
    }

    private function tags(string $s): ?string
    {
        $tags = [];
        foreach (explode(',', $s) as $t) {
            $t = mb_strtolower(trim(preg_replace('/[^\p{L}\p{N} _-]+/u', '', $t)));
            if ($t !== '' && mb_strlen($t) <= 30) {
                $tags[] = $t;
            }
        }
        $tags = array_values(array_unique($tags));

        return $tags ? mb_substr(',' . implode(',', $tags) . ',', 0, 250) : null;
    }

    private function ids(string $s): ?string
    {
        $ids = array_values(array_unique(array_filter(array_map(fn ($x) => preg_replace('/[^0-9A-Za-z_-]/', '', trim($x)), explode(',', $s)))));

        return $ids ? mb_substr(',' . implode(',', $ids) . ',', 0, 250) : null;
    }
}
