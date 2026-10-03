<?php

namespace App\Services\Enquiries;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Every table a family enquiry is stored in, and how one of its rows reads in
 * the enquiry desk's shape.
 *
 *   contact_enquiries        /contact form (HomeController::storeenquiry)
 *   student_enquiry_managment /enquiry_teacher form (StudentenquiryController) + student_enquiry_course
 *   demo_leads               the site-wide "Book a free demo" form (header modal, also on /demo-class),
 *                            and the NXT AI chat's confirmed demo booking (source_page = 'nxt-ai')
 *   nxt_leads                requirements posted from the dashboard (rows backfilled from the two
 *                            legacy tables carry legacy_*_id and are skipped: they are already listed)
 *
 * WhatsApp Refs (nxt_handoffs) hold no contact details: they are linked to the
 * demo-form enquiry that produced them, not listed on their own.
 */
final class EnquirySources
{
    public const TABLES = ['contact_enquiries', 'student_enquiry_managment', 'demo_leads', 'nxt_leads'];

    /** Column holding the person's name, per table. */
    public const NAME_COLUMN = [
        'contact_enquiries' => 'name',
        'student_enquiry_managment' => 'name',
        'demo_leads' => 'name',
        'nxt_leads' => 'contact_name',
    ];

    public static function exists(string $table): bool
    {
        try {
            return Schema::hasTable($table);
        } catch (\Throwable $e) {
            return false;
        }
    }

    /** Rows of a table that count as enquiries (nxt_leads: not legacy copies). */
    public function baseQuery(string $table)
    {
        $q = DB::table($table);
        if ($table === 'nxt_leads') {
            $q->whereNull('legacy_enquiry_id')->whereNull('legacy_demo_lead_id');
        }

        return $q;
    }

    /**
     * The hub fields for one source row (no name/phone/email except hashes).
     *
     * @return array<string,mixed>
     */
    public function normalise(string $table, object $row): array
    {
        return match ($table) {
            'contact_enquiries' => $this->contactForm($row),
            'student_enquiry_managment' => $this->websiteForm($row),
            'demo_leads' => $this->demoLead($row),
            'nxt_leads' => $this->dashboard($row),
            default => throw new \InvalidArgumentException('Unknown enquiry table'),
        } + [
            'source_table' => $table,
            'source_id' => (string) $row->id,
        ];
    }

    /**
     * Name, phone, email, message and every other raw field, for the admin only.
     *
     * @return array{name:?string, phone:?string, email:?string, message:?string, raw:array<string,mixed>}
     */
    public function contact(object $row, string $table): array
    {
        $raw = (array) $row;
        foreach (['eotp', 'otp', 'phone_hash', 'password'] as $secret) {
            unset($raw[$secret]);
        }

        return [
            'name' => $this->str($row->{self::NAME_COLUMN[$table]} ?? ($row->student_name ?? null)),
            'phone' => $this->str($row->phone ?? null),
            'email' => $this->str($row->email ?? null),
            'message' => $this->str($row->message ?? ($row->note ?? null)),
            'raw' => $raw,
        ];
    }

    /** @return array<string,mixed> */
    private function contactForm(object $row): array
    {
        $msg = (string) ($row->message ?? '');
        $fromText = self::fromText($msg);

        return $fromText + [
            'source' => 'contact',
            'received_at' => $row->created_at ?? now(),
            'page_url' => EnquiryNormaliser::cut($row->source_page ?? null, 250),
            'referrer' => EnquiryNormaliser::cut($row->referrer ?? null, 250),
            'utm' => EnquiryNormaliser::cut($row->utm ?? null, 250),
            'device' => EnquiryNormaliser::cut($row->device ?? null, 16),
            'phone_hash' => EnquiryNormaliser::phoneHash($row->phone ?? null),
            'email_hash' => EnquiryNormaliser::emailHash($row->email ?? null),
        ];
    }

    /** @return array<string,mixed> */
    private function websiteForm(object $row): array
    {
        $courses = $this->courseRows((int) $row->id);
        $class = $courses['class'] ?: ($row->for_class ?? null);
        $text = trim(implode(' ', [(string) ($row->message ?? ''), (string) $class, $courses['board'], implode(' ', $courses['subjects'])]));
        $place = EnquiryNormaliser::place($row->city ?? null, $row->district ?? null);
        $budget = $this->str($row->budget ?? null);

        $received = null;
        if (! empty($row->created_at)) {
            $received = $row->created_at;
        } elseif (! empty($row->date)) {
            $received = $row->date . ' 00:00:00';
        }

        return [
            'source' => 'website_form',
            'received_at' => $received ?? now(),
            'class_label' => EnquiryNormaliser::cut($class, 64),
            'class_band' => EnquiryNormaliser::classBand($class),
            'subjects' => EnquiryNormaliser::subjectField($courses['subjects'] ?: EnquiryNormaliser::subjects((string) ($row->message ?? ''))),
            'board' => EnquiryNormaliser::board($courses['board'] ?: $text),
            'exam_goal' => EnquiryNormaliser::examGoal($text),
            'city' => $place['city'],
            'zone' => $place['zone'],
            'area' => $place['area'] ?? EnquiryNormaliser::cut($row->pincode ?? null, 120),
            'mode' => EnquiryNormaliser::mode((string) ($row->message ?? '')),
            'tutor_gender' => EnquiryNormaliser::gender((string) ($row->message ?? '')),
            'budget' => $budget !== null ? EnquiryNormaliser::cut(is_numeric($budget) ? '₹' . $budget : $budget, 64) : null,
            'page_url' => url('/enquiry_teacher'),
            'phone_hash' => EnquiryNormaliser::phoneHash($row->phone ?? null),
            'email_hash' => EnquiryNormaliser::emailHash($row->email ?? null),
        ];
    }

    /** @return array{class:string, board:string, subjects:list<string>} */
    private function courseRows(int $enquiryId): array
    {
        $out = ['class' => '', 'board' => '', 'subjects' => []];
        if (! self::exists('student_enquiry_course')) {
            return $out;
        }
        try {
            $rows = DB::table('student_enquiry_course')->where('enquiry_id', $enquiryId)->get();
            $classes = [];
            $boards = [];
            foreach ($rows as $c) {
                if (self::exists('category')) {
                    $titles = DB::table('category')->whereIn('id', array_filter([$c->pid ?? null, $c->cid ?? null]))->pluck('cat_title', 'id');
                    if (! empty($c->pid) && isset($titles[$c->pid])) {
                        $boards[] = (string) $titles[$c->pid];
                    }
                    if (! empty($c->cid) && isset($titles[$c->cid])) {
                        $classes[] = (string) $titles[$c->cid];
                    }
                }
                if (! empty($c->sub_id) && self::exists('product_managment')) {
                    $ids = array_filter(explode(',', (string) $c->sub_id));
                    foreach (DB::table('product_managment')->whereIn('id', $ids)->pluck('title') as $t) {
                        $out['subjects'] = array_merge($out['subjects'], EnquiryNormaliser::subjects((string) $t));
                    }
                }
            }
            $out['class'] = implode(', ', array_unique($classes));
            $out['board'] = implode(', ', array_unique($boards));
            $out['subjects'] = array_values(array_unique($out['subjects']));
        } catch (\Throwable $e) {
            // Odd legacy rows: the enquiry is still listed, without course details.
        }

        return $out;
    }

    /** @return array<string,mixed> */
    private function demoLead(object $row): array
    {
        $page = (string) ($row->source_page ?? '');
        $source = match (true) {
            $page === 'nxt-ai' => 'ai',
            str_contains($page, '/demo-class') => 'demo_class',
            default => 'demo_form',
        };
        $all = trim(implode(' ', [(string) ($row->service ?? ''), (string) ($row->subject ?? ''), (string) ($row->child_class ?? ''), (string) ($row->message ?? '')]));
        $place = EnquiryNormaliser::place($row->location ?? null);

        return [
            'source' => $source,
            'received_at' => $row->created_at ?? now(),
            'class_label' => EnquiryNormaliser::cut($row->child_class ?? null, 64),
            'class_band' => EnquiryNormaliser::classBand($row->child_class ?? null),
            'subjects' => EnquiryNormaliser::subjectField(EnquiryNormaliser::subjects($row->subject ?? null)),
            'board' => EnquiryNormaliser::board($all),
            'exam_goal' => EnquiryNormaliser::examGoal($all),
            'city' => $place['city'],
            'zone' => $place['zone'],
            'area' => $place['area'],
            'mode' => EnquiryNormaliser::mode($row->mode ?? null) ?? EnquiryNormaliser::mode((string) ($row->service ?? '')),
            'tutor_gender' => EnquiryNormaliser::gender((string) ($row->message ?? '')),
            'preferred_time' => EnquiryNormaliser::cut($row->preferred_time ?? null, 120),
            'page_url' => $source === 'ai' ? 'NXT AI chat' : EnquiryNormaliser::cleanUrl($page),
            'utm' => $source === 'ai' ? null : EnquiryNormaliser::utmFrom($page),
            'phone_hash' => EnquiryNormaliser::phoneHash($row->phone ?? null),
        ];
    }

    /** @return array<string,mixed> */
    private function dashboard(object $row): array
    {
        $subjects = [];
        $decoded = is_string($row->subjects ?? null) ? json_decode($row->subjects, true) : null;
        if (is_array($decoded)) {
            foreach ($decoded as $s) {
                $subjects = array_merge($subjects, EnquiryNormaliser::subjects((string) $s));
            }
        }
        if ($subjects === []) {
            $subjects = EnquiryNormaliser::subjects($row->subject ?? null);
        }
        $slots = is_string($row->slots ?? null) ? json_decode($row->slots, true) : null;
        $budget = null;
        if (! empty($row->budget_min_paise) || ! empty($row->budget_max_paise)) {
            $min = (int) ($row->budget_min_paise ?? 0) / 100;
            $max = (int) ($row->budget_max_paise ?? 0) / 100;
            $budget = '₹' . number_format($min) . ($max > $min ? '–' . number_format($max) : '') . ' per class';
        }
        $place = EnquiryNormaliser::place($row->city ?? null, $row->locality ?? null);
        $text = trim(implode(' ', [(string) ($row->board ?? ''), (string) ($row->note ?? '')]));

        return [
            'source' => 'dashboard',
            'received_at' => $row->created_at ?? now(),
            'class_label' => EnquiryNormaliser::cut($row->class_level ?? null, 64),
            'class_band' => EnquiryNormaliser::classBand($row->class_level ?? null),
            'subjects' => EnquiryNormaliser::subjectField(array_values(array_unique($subjects))),
            'board' => EnquiryNormaliser::board($text),
            'exam_goal' => EnquiryNormaliser::examGoal($text),
            'city' => $place['city'],
            'zone' => $place['zone'],
            'area' => $place['area'],
            'mode' => in_array($row->mode ?? null, ['home', 'online', 'hybrid'], true) ? $row->mode : null,
            'budget' => $budget ? EnquiryNormaliser::cut($budget, 64) : null,
            'preferred_time' => is_array($slots) && $slots ? EnquiryNormaliser::cut(implode(', ', array_map(fn ($s) => str_replace('_', ' ', (string) $s), $slots)), 120) : null,
            'start_by' => EnquiryNormaliser::cut($row->start_by ?? null, 64),
            'page_url' => 'Parent dashboard',
            'phone_hash' => EnquiryNormaliser::phoneHash($row->phone ?? null),
        ];
    }

    /**
     * What a free-text message says about the request: "Class 10 CBSE Maths,
     * home tuition in Sector 56". Only explicit mentions count.
     *
     * @return array<string,mixed>
     */
    public static function fromText(string $msg): array
    {
        $m = mb_strtolower($msg);
        $class = null;
        if (preg_match('/\b(class|std|grade|standard)\s*\.?\s*(\d{1,2}|xii|xi|ix|x|viii|vii|vi|v|iv|iii|ii|i)\b/i', $msg, $cm)) {
            $class = 'Class ' . strtoupper($cm[2]);
        } elseif (preg_match('/\b(\d{1,2})(st|nd|rd|th)\b/', $m, $cm) && (int) $cm[1] >= 1 && (int) $cm[1] <= 12) {
            $class = 'Class ' . $cm[1];
        } elseif (preg_match('/nursery|\blkg\b|\bukg\b/', $m, $cm)) {
            $class = strtoupper($cm[0]);
        }

        $known = ['maths', 'math', 'mathematics', 'physics', 'chemistry', 'biology', 'science', 'english', 'hindi', 'sst', 'social science',
            'computer science', 'accountancy', 'accounts', 'economics', 'french', 'german', 'sanskrit', 'history', 'geography', 'business studies', 'coding'];
        $subjects = [];
        foreach ($known as $k) {
            if (preg_match('/\b' . preg_quote($k, '/') . '\b/', $m)) {
                $subjects[] = \App\NxtAi\Support\SubjectNormalizer::normalize($k);
            }
        }

        $city = null;
        $area = null;
        if (preg_match('/\bsector\s*-?\s*(\d{1,3}[a-d]?)\b/i', $msg, $sm)) {
            $area = 'Sector ' . strtoupper($sm[1]);
        }
        foreach (['gurugram', 'gurgaon', 'delhi', 'noida', 'faridabad', 'ghaziabad', 'mumbai', 'bengaluru', 'bangalore', 'pune', 'hyderabad', 'chennai', 'kolkata', 'jaipur', 'lucknow', 'chandigarh', 'ahmedabad'] as $c) {
            if (str_contains($m, $c)) {
                $city = $c;
                break;
            }
        }
        if ($city === null && $area !== null) {
            $city = 'Gurugram';
        }
        $place = $city !== null ? EnquiryNormaliser::place($city, $area) : ['city' => null, 'zone' => null, 'area' => $area];

        return [
            'class_label' => $class,
            'class_band' => EnquiryNormaliser::classBand($class),
            'subjects' => EnquiryNormaliser::subjectField(array_values(array_unique(array_filter($subjects)))),
            'board' => EnquiryNormaliser::board($msg),
            'exam_goal' => EnquiryNormaliser::examGoal($msg),
            'city' => $place['city'],
            'zone' => $place['zone'],
            'area' => $place['area'],
            'mode' => preg_match('/home tuition|home tutor|at home|online/i', $msg) ? EnquiryNormaliser::mode($msg) : null,
            'tutor_gender' => EnquiryNormaliser::gender($msg),
        ];
    }

    private function str(mixed $v): ?string
    {
        $v = trim((string) ($v ?? ''));

        return $v === '' ? null : $v;
    }
}
