<?php

namespace App\Services\Enquiries;

use App\Models\EnquiryActivity;
use App\Models\EnquiryLead;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * The enquiry desk's read model: every family enquiry, whatever table it was
 * stored in, as one `enquiry_leads` row (EnquirySources says how each table
 * reads), plus the follow-up pipeline on it.
 *
 * Writes from the public forms go through record(), which never throws: a
 * failure here must never cost a family their form submission. Logs carry ids
 * and table names only, never a name, phone or email.
 */
final class EnquiryFeed
{
    public function __construct(private readonly EnquirySources $sources, private readonly EnquiryAlerts $alerts)
    {
    }

    public static function ready(): bool
    {
        return EnquirySources::exists('enquiry_leads') && EnquirySources::exists('enquiry_activities');
    }

    /**
     * A new enquiry was just stored: add it to the desk, flag duplicates and
     * send the "New enquiry" email. Never throws.
     *
     * @param array<string,mixed> $extra hub fields the source row cannot hold (board, utm, device …)
     */
    public function record(string $table, string|int $id, array $extra = [], bool $alert = true): ?EnquiryLead
    {
        try {
            if (! self::ready()) {
                return null;
            }
            $lead = $this->upsert($table, (string) $id, $extra, now());
            if ($lead === null) {
                return null;
            }
            if ($alert) {
                $this->alerts->newEnquiry($lead, $this->contactFor($lead)['name'] ?? null);
            }
            Cache::forget('enquiries.new_count');

            return $lead;
        } catch (\Throwable $e) {
            Log::warning('Enquiry desk: could not record enquiry', ['table' => $table, 'id' => (string) $id, 'error' => mb_substr($e->getMessage(), 0, 200)]);

            return null;
        }
    }

    /**
     * Backfill: add source rows the desk has not seen yet (old rows, or a path
     * that stores enquiries without calling record()). No emails.
     *
     * @return int rows added
     */
    public function sync(?int $limitPerTable = null): int
    {
        if (! self::ready()) {
            return 0;
        }
        $limit = $limitPerTable ?? (int) config('enquiries.sync_batch', 500);
        $added = 0;
        foreach (EnquirySources::TABLES as $table) {
            if (! EnquirySources::exists($table)) {
                continue;
            }
            try {
                $q = $this->sources->baseQuery($table)
                    ->whereNotIn('id', EnquiryLead::query()->where('source_table', $table)->select('source_id'))
                    ->orderBy('id');
                if ($limit > 0) {
                    $q->limit($limit);
                }
                foreach ($q->pluck('id') as $id) {
                    if ($this->upsert($table, (string) $id, [], null) !== null) {
                        $added++;
                    }
                }
            } catch (\Throwable $e) {
                Log::warning('Enquiry desk: sync failed for a table', ['table' => $table, 'error' => mb_substr($e->getMessage(), 0, 200)]);
            }
        }
        if ($added > 0) {
            Cache::forget('enquiries.new_count');
        }

        return $added;
    }

    /**
     * @param \DateTimeInterface|null $receivedNow when set, received_at is "now" (a live
     *                                             submission) rather than the row's own date
     */
    private function upsert(string $table, string $id, array $extra, ?\DateTimeInterface $receivedNow): ?EnquiryLead
    {
        $row = $this->sources->baseQuery($table)->where('id', $id)->first();
        if ($row === null) {
            return null;
        }
        $data = $this->sources->normalise($table, $row);
        foreach ($extra as $k => $v) {
            if ($v !== null && $v !== '') {
                $data[$k] = $v;
            }
        }
        if (isset($extra['board']) && is_string($extra['board'])) {
            $data['board'] = EnquiryNormaliser::board($extra['board']) ?? $data['board'] ?? null;
        }
        if ($receivedNow !== null) {
            $data['received_at'] = $receivedNow;
        }
        $data = $this->fit($data);

        $lead = EnquiryLead::query()->where('source_table', $table)->where('source_id', $id)->first();
        if ($lead !== null) {
            // Already listed (e.g. by a sync): refresh the request, keep the pipeline.
            unset($data['received_at']);
            $lead->fill($data)->save();

            return $lead;
        }

        $lead = EnquiryLead::create($data);
        $this->log($lead, 'created', null, $lead->source, null);
        $this->flagDuplicates($lead);

        return $lead;
    }

    /** Every string within its column. */
    private function fit(array $data): array
    {
        $max = ['source' => 32, 'source_table' => 40, 'source_id' => 64, 'class_label' => 64, 'class_band' => 16, 'subjects' => 250,
            'board' => 40, 'exam_goal' => 24, 'city' => 80, 'zone' => 80, 'area' => 120, 'mode' => 16, 'tutor_gender' => 8, 'budget' => 64,
            'preferred_time' => 120, 'start_by' => 64, 'page_url' => 250, 'referrer' => 250, 'utm' => 250, 'device' => 16, 'wa_ref' => 16];
        $allowed = array_merge(array_keys($max), ['received_at', 'phone_hash', 'email_hash']);
        $out = [];
        foreach ($data as $k => $v) {
            if (! in_array($k, $allowed, true)) {
                continue;
            }
            $out[$k] = (is_string($v) && isset($max[$k])) ? (trim($v) === '' ? null : mb_substr(trim($v), 0, $max[$k])) : $v;
        }

        return $out;
    }

    /** Same phone or email within the window: flag both sides. */
    public function flagDuplicates(EnquiryLead $lead): void
    {
        if ($lead->phone_hash === null && $lead->email_hash === null) {
            return;
        }
        $days = (int) config('enquiries.duplicate_window_days', 30);
        $at = CarbonImmutable::parse($lead->received_at ?? now());
        $ids = EnquiryLead::query()
            ->where('id', '!=', $lead->id)
            ->where(function ($q) use ($lead) {
                if ($lead->phone_hash) {
                    $q->orWhere('phone_hash', $lead->phone_hash);
                }
                if ($lead->email_hash) {
                    $q->orWhere('email_hash', $lead->email_hash);
                }
            })
            ->whereBetween('received_at', [$at->subDays($days), $at->addDays($days)])
            ->pluck('id');
        if ($ids->isNotEmpty()) {
            EnquiryLead::query()->whereIn('id', $ids->push($lead->id))->update(['possible_duplicate' => true]);
            $lead->possible_duplicate = true;
        }
    }

    /** Other enquiries with the same phone or email (any date). */
    public function duplicateGroup(EnquiryLead $lead): Collection
    {
        if ($lead->phone_hash === null && $lead->email_hash === null) {
            return collect();
        }

        return EnquiryLead::query()
            ->where('id', '!=', $lead->id)
            ->where(function ($q) use ($lead) {
                if ($lead->phone_hash) {
                    $q->orWhere('phone_hash', $lead->phone_hash);
                }
                if ($lead->email_hash) {
                    $q->orWhere('email_hash', $lead->email_hash);
                }
            })
            ->orderByDesc('received_at')->limit(20)->get();
    }

    /** The demo form's WhatsApp Ref, on the enquiry the same visitor just sent. */
    public function attachRef(string $table, string|int $id, string $code): void
    {
        try {
            if (self::ready()) {
                EnquiryLead::query()->where('source_table', $table)->where('source_id', (string) $id)
                    ->update(['wa_ref' => mb_substr($code, 0, 16)]);
            }
        } catch (\Throwable $e) {
            Log::warning('Enquiry desk: could not attach a WhatsApp Ref', ['table' => $table, 'id' => (string) $id]);
        }
    }

    // ------------------------------------------------------------ Contacts

    /** @return array{name:?string, phone:?string, email:?string, message:?string, raw:array<string,mixed>} */
    public function contactFor(EnquiryLead $lead): array
    {
        return $this->contactsFor(collect([$lead]))[$lead->id] ?? ['name' => null, 'phone' => null, 'email' => null, 'message' => null, 'raw' => []];
    }

    /**
     * Name, phone, email and message for a page of enquiries (one query per table).
     *
     * @param iterable<EnquiryLead> $leads
     * @return array<int, array{name:?string, phone:?string, email:?string, message:?string, raw:array<string,mixed>}>
     */
    public function contactsFor(iterable $leads): array
    {
        $byTable = [];
        foreach ($leads as $l) {
            $byTable[$l->source_table][$l->source_id] = $l->id;
        }
        $out = [];
        foreach ($byTable as $table => $map) {
            if (! in_array($table, EnquirySources::TABLES, true) || ! EnquirySources::exists($table)) {
                continue;
            }
            try {
                foreach (DB::table($table)->whereIn('id', array_keys($map))->get() as $row) {
                    if (isset($map[(string) $row->id])) {
                        $out[$map[(string) $row->id]] = $this->sources->contact($row, $table);
                    }
                }
            } catch (\Throwable $e) {
                // A table without the expected columns: the row shows without contact details.
            }
        }

        return $out;
    }

    /**
     * Restrict to enquiries whose name, phone or email matches. Phone and
     * email are matched in the source tables (and by hash), never stored here.
     */
    public function applySearch(Builder $q, string $term): void
    {
        $term = trim($term);
        if ($term === '') {
            return;
        }
        $digits = preg_replace('/\D/', '', $term);
        $pairs = [];
        foreach (EnquirySources::TABLES as $table) {
            if (! EnquirySources::exists($table)) {
                continue;
            }
            try {
                $s = $this->sources->baseQuery($table)->where(function ($w) use ($table, $term, $digits) {
                    $w->where(EnquirySources::NAME_COLUMN[$table], 'like', '%' . addcslashes($term, '%_') . '%');
                    if (strlen($digits) >= 4) {
                        $w->orWhere('phone', 'like', '%' . $digits . '%');
                    }
                    if (str_contains($term, '@') && $table !== 'demo_leads' && $table !== 'nxt_leads') {
                        $w->orWhere('email', 'like', '%' . addcslashes($term, '%_') . '%');
                    }
                })->limit(500)->pluck('id');
                foreach ($s as $id) {
                    $pairs[$table][] = (string) $id;
                }
            } catch (\Throwable $e) {
                // Skip a table that cannot be searched.
            }
        }
        $phoneHash = EnquiryNormaliser::phoneHash($term);
        $emailHash = EnquiryNormaliser::emailHash($term);

        $q->where(function ($w) use ($pairs, $phoneHash, $emailHash) {
            $w->whereRaw('1 = 0');
            foreach ($pairs as $table => $ids) {
                $w->orWhere(fn ($x) => $x->where('source_table', $table)->whereIn('source_id', $ids));
            }
            if ($phoneHash) {
                $w->orWhere('phone_hash', $phoneHash);
            }
            if ($emailHash) {
                $w->orWhere('email_hash', $emailHash);
            }
        });
    }

    // ------------------------------------------------------------ Counts

    /** "New enquiries: N" for the menu badge (cached a minute; 0 before the migration). */
    public static function newCount(): int
    {
        try {
            if (! self::ready()) {
                return 0;
            }

            return (int) Cache::remember('enquiries.new_count', 60, fn () => EnquiryLead::query()
                ->whereNull('followup_status')->whereNull('duplicate_of_id')->count());
        } catch (\Throwable $e) {
            return 0;
        }
    }

    // ------------------------------------------------------------ Timeline

    public function log(EnquiryLead $lead, string $type, ?string $from, ?string $to, ?string $body, ?object $user = null): void
    {
        EnquiryActivity::create([
            'enquiry_lead_id' => $lead->id,
            'type' => mb_substr($type, 0, 24),
            'from_value' => $from !== null ? mb_substr($from, 0, 64) : null,
            'to_value' => $to !== null ? mb_substr($to, 0, 64) : null,
            'body' => $body,
            'user_id' => $user->id ?? null,
            'user_name' => isset($user->name) ? mb_substr((string) $user->name, 0, 64) : null,
            'created_at' => now(),
        ]);
    }
}
