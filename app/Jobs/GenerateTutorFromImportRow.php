<?php

namespace App\Jobs;

use App\Models\TutorImportRow;
use App\Models\Register;
use App\Models\Teacher_review;
use App\Models\Teacher_courses;
use App\Services\OpenAiTeacherGenerator;
use App\Services\Queue\AtomicImportClaim;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\Middleware\WithoutOverlapping;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Throwable;

class GenerateTutorFromImportRow implements ShouldBeUnique, ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 600;

    public bool $failOnTimeout = true;

    public int $uniqueFor = 1800;

    public function __construct(public int $rowId) {}

    public function uniqueId(): string
    {
        return 'tutor-import-row:'.$this->rowId;
    }

    public function backoff(): array
    {
        return [60, 180, 300];
    }

    public function retryUntil(): \DateTimeInterface
    {
        return now()->addMinutes(30);
    }

    public function middleware(): array
    {
        return [
            (new WithoutOverlapping($this->uniqueId()))
                ->dontRelease()
                ->expireAfter($this->timeout + 60),
        ];
    }

    public function handle(OpenAiTeacherGenerator $gen, AtomicImportClaim $claimer): void
    {
        $row = TutorImportRow::find($this->rowId);

        if (! $row || $row->status === 'done' || $row->register_id) {
            return;
        }

        if (! $claimer->claim(TutorImportRow::class, $this->rowId)) {
            return;
        }

        $row->refresh();
        $p = (array)$row->payload;

        try {
            // 1) Build $data like your controller validates
            $data = $this->mapExcelPayloadToTeacherData($p);

            // ✅ Teaching_Mode normalize (Home & Online => Both)
$modeRaw = strtolower(trim((string)($p['Teaching_Mode'] ?? '')));
$teachingMode = 'Both';

if (str_contains($modeRaw, 'home') && str_contains($modeRaw, 'online')) {
    $teachingMode = 'Both';
} elseif (str_contains($modeRaw, 'home')) {
    $teachingMode = 'Home';
} elseif (str_contains($modeRaw, 'online')) {
    $teachingMode = 'Online';
}

// IMPORTANT: your generator uses class_type in prompt, so set it cleanly
$data['class_type'] = $teachingMode;


            // normalize arrays
            $data['subjects'] = array_values(array_filter($data['subjects']));
            $data['boards']   = array_values(array_filter($data['boards']));
            $data['main_subject'] = $data['subjects'][0] ?? ($data['main_subject'] ?? '');

            // 2) AI Generate (same)
            $ai = $gen->generate($data);

            // 3) Ensure avatar exists (same idea)
            if (empty($ai['avatar_path'])) {
                // If you have fallback avatar method in controller, you can remove this
                // For now: keep null, or set a static default
                $ai['avatar_path'] = null;
            }

            // 4) Insert DB transaction (same flow)
            $created = DB::transaction(function () use ($data, $ai, $p) {

                // numeric user_id (1000+)
                $last = Register::orderBy('id', 'desc')->lockForUpdate()->first();
                $userId = (!$last || empty($last->user_id)) ? 1000 : ((int)$last->user_id + 1);

                // OPTIONAL: override name from Excel if given
                // $excelName = trim((string)($p['Tutor_Name'] ?? ''));
                // if ($excelName !== '') {
                //     // keep gender/desc etc from AI, but name from Excel
                //     $ai['tutor']['name'] = $excelName;
                // }

                // Insert Register (same fields as your controller)
                // $reg = Register::create([
                //     'user_id' => (string)$userId,
                //     'name' => data_get($ai, 'tutor.name'),
                //     'gender' => data_get($ai, 'tutor.gender'),
                //     'avatar' => $ai['avatar_path'] ?? null,

                //     'date' => now()->format('Y-m-d'),
                //     'address' => $data['area'],
                //     'city' => $data['city'],
                //     'district' => $data['district'] ?? $data['city'],
                //     'state' => $data['state'],
                //     'pincode' => $data['pincode'],

                //     'status' => 't',
                //     'otp_status' => 't',
                //     'user_type' => 'teacher',
                //     'join_as' => 'teacher',
                //     'for_class' => $data['for_class'],

                //     'degree' => data_get($ai, 'tutor.degree'),
                //     'experience' => data_get($ai, 'tutor.experience'),
                //     'education' => data_get($ai, 'tutor.education'),
                //     'class_type' => $data['class_type'],
                //     'budget' => data_get($ai, 'tutor.budget'),

                //     'profile' => data_get($ai, 'tutor.profile'),
                //     'profile_desc' => data_get($ai, 'tutor.profile_desc'),
                // ]);

                $profile = $this->asString(data_get($ai, 'tutor.profile'));
$profileDesc = $this->asString(data_get($ai, 'tutor.profile_desc'));

$profile = $this->limit($profile, 250);   // register.profile is varchar(255)

$avatarPath = $ai['avatar_path'] ?? null;
$avatarName = $avatarPath ? basename(str_replace('\\','/',$avatarPath)) : null;


$reg = Register::create([
    'user_id' => (string)$userId,
    'name' => $this->limit($this->asString(data_get($ai, 'tutor.name')), 250),
    'gender' => $this->limit($this->asString(data_get($ai, 'tutor.gender')), 20),
    'avatar' => $avatarName,

    'date' => now()->format('Y-m-d'),
    'address' => $this->asString($data['area']),
    'city' => $this->asString($data['city']),
    'district' => $this->asString($data['district'] ?? $data['city']),
    'state' => $this->asString($data['state']),
    'pincode' => $this->asString($data['pincode']),

    'status' => 't',
    'otp_status' => 't',
    'user_type' => 'teacher',
    'join_as' => 'teacher',
    'for_class' => $this->asString($data['for_class']),

    'degree' => $this->limit($this->asString(data_get($ai, 'tutor.degree')), 250),
    'experience' => $this->limit($this->asString(data_get($ai, 'tutor.experience')), 250),
    'education' => $this->limit($this->asString(data_get($ai, 'tutor.education')), 250),
    'class_type' => $this->asString($data['class_type']),
    'budget' => $this->limit($this->asString(data_get($ai, 'tutor.budget')), 250),

    'profile' => mb_substr($profile, 0, 250),
    'profile_desc' => $profileDesc,
]);


                // Reviews insert (30)
                $reviewRows = [];
                foreach (array_slice(($ai['reviews'] ?? []), 0, 30) as $r) {
                    $reviewRows[] = [
                        'name' => $r['reviewer_name'] ?? 'Student',
                        'user_id' => (string)$userId,

                        'rating' => (string)($r['rating'] ?? 5),
                        'expertise' => $this->normalizeRating($r['expertise'] ?? 5),
                        'patience' => $this->normalizeRating($r['patience'] ?? 5),
                        'reliability' => $this->normalizeRating($r['reliability'] ?? 5),
                        'communication' => $this->normalizeRating($r['communication'] ?? 5),

                        'message' => $r['message'] ?? '',
                        'date' => now()->format('Y-m-d'),
                        'status' => 't',
                    ];
                }
                if (!empty($reviewRows)) {
                    Teacher_review::insert($reviewRows);
                }

                // Courses insert (subjects × boards)
                $courseRows = [];
                foreach ($data['subjects'] as $sub) {
                    foreach ($data['boards'] as $board) {
                        $courseRows[] = [
                            'user_id' => (string)$userId,
                            'subject' => $sub,
                            'board' => $board,
                            'for_class' => $data['for_class'],
                            'class_type' => $data['class_type'],
                            'mode' => 'Tutoring',
                            'status' => 't',
                            'date' => now()->format('Y-m-d'),
                        ];
                    }
                }
                if (!empty($courseRows)) {
                    Teacher_courses::insert($courseRows);
                }

                return [
                    'register_id' => $reg->id,
                    'user_id' => (string)$userId,
                ];
            });

            $row->update([
                'status' => 'done',
                'register_id' => $created['register_id'],
                'user_id' => $created['user_id'],
                'error' => null,
            ]);

        } catch (Throwable $e) {
            $message = $this->safeError($e);

            Log::warning('Tutor import row generation failed.', [
                'row_id' => $row->id,
                'exception' => $e::class,
                'message' => $message,
            ]);

            $this->markFailed($message);

            throw $e;
        }
    }

    public function failed(?Throwable $exception): void
    {
        $this->markFailed($exception ? $this->safeError($exception) : 'Tutor generation failed.');
    }

    private function markFailed(string $message): void
    {
        TutorImportRow::query()
            ->whereKey($this->rowId)
            ->where('status', 'processing')
            ->update([
                'status' => 'failed',
                'error' => $message,
                'updated_at' => now(),
            ]);
    }

    private function safeError(Throwable $exception): string
    {
        return Str::limit(
            preg_replace('/\s+/', ' ', $exception->getMessage()) ?: 'Tutor generation failed.',
            500
        );
    }

    /**
     * Excel payload -> same $data as controller expects
     * (No validation crash; safe defaults)
     */
    private function mapExcelPayloadToTeacherData(array $p): array
    {
        // Basic fields from Excel
        $pincode = trim((string)($p['Pincode'] ?? ''));
        $sector  = trim((string)($p['Sector'] ?? ''));
        $localAddress = trim((string)($p['Local_Address'] ?? ''));
        $landmark = trim((string)($p['Landmark'] ?? ''));



        // Area: prefer Sector, else Local_Address, else Landmark
        $area = $sector !== '' ? $sector : ($localAddress !== '' ? $localAddress : $landmark);

        // City/State: if Excel columns exist use them, else parse from Local_Address, else defaults
        $city  = trim((string)($p['City'] ?? ''));
        $state = trim((string)($p['State'] ?? ''));

        if ($city === '' || $state === '') {
            [$pcity, $pstate] = $this->guessCityStateFromAddress($localAddress);
            if ($city === '')  $city = $pcity;
            if ($state === '') $state = $pstate;
        }

        if ($city === '')  $city  = 'Gurugram';
        if ($state === '') $state = 'Haryana';

        $district = trim((string)($p['District'] ?? ''));
        if ($district === '') $district = $city;

        // Subject(s)
        $teachingSubjects = trim((string)($p['Teaching_Subjects'] ?? ''));
        $subjects = $this->splitList($teachingSubjects);
        if (empty($subjects)) $subjects = ['Subject'];

        // Boards: if Excel has "Boards" column else CBSE
        $boardsRaw = trim((string)($p['Boards'] ?? ''));
        $boards = $this->splitList($boardsRaw);
        if (empty($boards)) $boards = ['CBSE'];

        // for_class / class_type (Excel column optional)
        $forClass = trim((string)($p['For_Class'] ?? ''));
        if ($forClass === '') $forClass = 'Class 11-12';

        $classType = trim((string)($p['Class_Type'] ?? ''));
        if ($classType === '') $classType = 'academic';


        return [
            'pincode' => $pincode ?: '000000',
            'area' => $area ?: 'Local Area',
            'city' => $city,
            'district' => $district,
            'state' => $state,

            'for_class' => $forClass,
            'class_type' => $classType,

            'subjects' => $subjects,
            'boards' => $boards,



            'main_subject' => $subjects[0] ?? '',
        ];
    }

    private function splitList(string $s): array
    {
        $s = trim($s);
        if ($s === '') return [];
        // supports commas, pipes, slashes
        $parts = preg_split('/[,\|\/]+/', $s) ?: [];
        $parts = array_map(fn($x) => trim((string)$x), $parts);
        return array_values(array_filter($parts, fn($x) => $x !== ''));
    }

    private function guessCityStateFromAddress(string $addr): array
    {
        $addr = trim($addr);
        if ($addr === '') return ['', ''];

        // Example: "Near Huda Market, Sector 15, Gurugram, Haryana"
        $parts = array_values(array_filter(array_map('trim', explode(',', $addr))));
        $city = '';
        $state = '';

        if (count($parts) >= 2) {
            $state = $parts[count($parts) - 1] ?? '';
            $city  = $parts[count($parts) - 2] ?? '';
        }

        return [$city, $state];
    }

    /**
     * Same normalizeRating concept as your controller
     * (Ensure numeric 1..10, string output)
     */
    private function normalizeRating($v): string
    {
        $n = (float)$v;
        if ($n < 1) $n = 1;
        if ($n > 10) $n = 10;
        return (string)round($n, 1);
    }
//     private function asString($v): string
// {
//     if (is_array($v)) {
//         // if array of strings
//         return trim(implode(' ', array_map(fn($x) => is_scalar($x) ? (string)$x : json_encode($x), $v)));
//     }
//     if (is_object($v)) {
//         return trim(json_encode($v, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
//     }
//     return trim((string)$v);
// }

// private function limit(string $s, int $max): string
// {
//     $s = trim($s);
//     return mb_strlen($s) <= $max ? $s : (mb_substr($s, 0, $max - 3) . '...');
// }

private function asString($v): string
{
    if (is_array($v)) {
        return trim(implode(' ', array_map(function ($x) {
            if (is_scalar($x)) return (string)$x;
            return json_encode($x, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
        }, $v)));
    }

    if (is_object($v)) {
        return trim(json_encode($v, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
    }

    return trim((string)$v);
}

private function limit(string $s, int $max): string
{
    $s = trim($s);
    return mb_strlen($s) <= $max ? $s : (mb_substr($s, 0, $max - 3) . '...');
}


}
