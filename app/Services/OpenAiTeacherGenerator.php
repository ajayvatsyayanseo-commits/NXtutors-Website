<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\Register;


class OpenAiTeacherGenerator
{
    public function generate(array $data): array
    {
        $tutor = $this->generateTutorJson($data);

        // ✅ reviews (robust)
        $reviews = $this->generateReviewsJson($data, $tutor);

        // ✅ avatar (gender-based)
        $avatarPath = $this->generateTutorAvatar($tutor['gender'] ?? null);

        return [
            'tutor'       => $tutor,
            'reviews'     => $reviews,
            'avatar_path' => $avatarPath, // ✅ store this in DB
        ];
    }

     

private function generateTutorJson(array $data): array
{
    $subjects = isset($data['subjects']) ? implode(', ', (array)$data['subjects']) : '';
    $boards   = isset($data['boards']) ? implode(', ', (array)$data['boards']) : '';

    $usedNames = Register::whereNotNull('name')
        ->where('name', '!=', '')
        ->pluck('name')
        ->map(fn($n) => trim((string)$n))
        ->filter()
        ->unique()
        ->values()
        ->take(200)
        ->toArray();

    $avoidNames = implode(', ', $usedNames);

    // ✅ try 3 times for unique name
    for ($attempt = 1; $attempt <= 3; $attempt++) {

        $seed = Str::random(6); // ✅ makes output vary

        $prompt = "Generate an Indian tutor profile in STRICT JSON only.

Inputs:
pincode: {$data['pincode']}
area: {$data['area']}
city: {$data['city']}
state: {$data['state']}
for_class: {$data['for_class']}
class_type: {$data['class_type']}
subjects: {$subjects}
boards: {$boards}
main_subject: {$data['main_subject']}

Rules:
- gender: randomly choose 'male' or 'female' (70/30)
- name must match gender and be realistic Indian name
- IMPORTANT: name must be UNIQUE and must NOT be any of these already-used names:
{$avoidNames}
- If name matches avoid list, generate a different name.
- Qualification matches main subject
- Experience 3-15 years (like '8 Years')
- Budget like '₹600 / hour'
- profile: 1 line SEO title
- profile_desc: 150-220 words SEO + local (mention {$data['area']}, {$data['city']})
- Use this randomness seed: {$seed}

Return JSON keys exactly:
gender, name, degree, education, experience, budget, profile, profile_desc
Return ONLY JSON.";

         $json = $this->chat($prompt, 2600, true);
        $decoded = $this->safeJsonDecode($json);

        // if (!is_array($decoded)) {
        //     continue;
        // }
        if (!is_array($decoded)) continue;

        // ✅ sanitize everything to scalar strings (avoid array->string SQL error)
        $decoded = $this->sanitizeTutorDecoded($decoded);

        $required = ['gender','name','degree','education','experience','budget','profile','profile_desc'];
        foreach ($required as $k) {
            if (!array_key_exists($k, $decoded) || $decoded[$k] === null || $decoded[$k] === '') {
                continue 2; // retry
            }
        }

        $g = strtolower(trim((string)$decoded['gender']));
        $decoded['gender'] = in_array($g, ['male','female'], true) ? $g : 'male';

        $name = trim((string)$decoded['name']);

        // ✅ final uniqueness check
        if ($name === '' || in_array($name, $usedNames, true)) {
            continue; // retry
        }

        return $decoded;
    }

    // if still not unique after retries
    throw new \Exception("Tutor JSON could not generate unique name after retries.");
}


    /**
     * ✅ Reviews JSON (30 total; safer 10+10+10)
     * IMPORTANT: We return { "reviews": [...] } as JSON object.
     */
    private function generateReviewsJson(array $data, array $tutor): array
    {
        $all = [];

        $boards = isset($data['boards']) ? implode(', ', (array)$data['boards']) : '';
        $subject = $data['main_subject'] ?? 'subject';
        $area = $data['area'] ?? '';
        $city = $data['city'] ?? '';
        $state = $data['state'] ?? '';
        $forClass = $data['for_class'] ?? '';
        $experience = $tutor['experience'] ?? '5 Years';
        $tutorName = $tutor['name'] ?? 'Tutor';

        foreach ([10, 10, 10] as $count) {

            $prompt = "Generate {$count} unique SEO reviews.
Return STRICT JSON in this exact shape:
{ \"reviews\": [ ... ] }

Tutor:
name: {$tutorName}
subject: {$subject}
area: {$area}
city: {$city}
state: {$state}
boards: {$boards}
for_class: {$forClass}
experience: {$experience}

Rules:
- Each review 35-55 words (short)
- Natural Indian English (parents + students mix)
- Include keywords naturally: 'home tutor in {$area}', '{$subject} tutor in {$city}', 'CBSE tutor'
- No repetition
Each review object keys exactly:
reviewer_name, rating, expertise, patience, reliability, communication, message
Return ONLY JSON.";

            // ✅ JSON enforce + bigger tokens
            $json = $this->chat($prompt, 3500, true);
            $decoded = $this->safeJsonDecode($json);

            $reviews = is_array($decoded) ? ($decoded['reviews'] ?? null) : null;

            if (!is_array($reviews) || count($reviews) < 5) {
                throw new \Exception("Reviews JSON invalid from AI. Raw: " . mb_substr($json, 0, 300));
            }

            foreach ($reviews as $r) {
                if (!is_array($r)) continue;

                // ✅ sanitize + defaults
                $r['reviewer_name']  = (string)($r['reviewer_name'] ?? 'Student');
                $r['rating']         = (float)($r['rating'] ?? 5);
                $r['expertise']      = (float)($r['expertise'] ?? 9);
                $r['patience']       = (float)($r['patience'] ?? 9);
                $r['reliability']    = (float)($r['reliability'] ?? 9);
                $r['communication']  = (float)($r['communication'] ?? 9);
                $r['message']        = (string)($r['message'] ?? '');

                $all[] = $r;
            }
        }

        return array_slice($all, 0, 30);
    }

    /**
     * ✅ Chat call
     * $forceJsonObject=true => response_format json_object
     */
    private function chat(string $prompt, int $maxTokens = 2200, bool $forceJsonObject = false): string
    { 
       // $apiKey = env('OPENAI_API_KEY');

        $apiKey = config('services.openai.key');
        if (!$apiKey) {
            throw new \Exception("OPENAI_API_KEY missing in .env");
        }

        $payload = [
           //'model' => env('OPENAI_TEXT_MODEL', 'gpt-4o-mini'),
            'model' => config('services.openai.text_model', 'gpt-4o-mini'),
            'messages' => [
                ['role' => 'system', 'content' => 'Return STRICT JSON only. No markdown. No extra text.'],
                ['role' => 'user', 'content' => $prompt],
            ],
            'temperature' => 0.9,
            'max_tokens' => $maxTokens,
        ];

        // ✅ This helps a LOT against invalid JSON
        if ($forceJsonObject) {
            $payload['response_format'] = ['type' => 'json_object'];
        }

        $res = Http::withToken($apiKey)
            ->connectTimeout(30)
            ->timeout(180)
            ->retry(2, 1500)
            ->post('https://api.openai.com/v1/chat/completions', $payload);

        if (!$res->ok()) {
            throw new \Exception("OpenAI chat failed: " . $res->status() . " " . $res->body());
        }

        return (string) data_get($res->json(), 'choices.0.message.content', '');
    }

    /**
     * ✅ Avatar (gender based)
     * Returns: tutors/uuid.png (relative path for DB)
     */
    private function generateTutorAvatar(?string $gender = null): ?string
    {
        try {
           // $apiKey = env('OPENAI_API_KEY');
            $apiKey = config('services.openai.key');
            if (!$apiKey) return null;

            $gender = strtolower(trim((string)$gender));
            if (!in_array($gender, ['male','female'], true)) $gender = 'male';

            $prompt = $gender === 'female'
                ? "Realistic professional portrait photo of an Indian female teacher, age 26-40, formal attire, friendly smile, plain light background, passport style, high quality."
                : "Realistic professional portrait photo of an Indian male teacher, age 28-40, formal shirt, friendly smile, plain light background, passport style, high quality.";

            $res = Http::withToken($apiKey)
                ->connectTimeout(30)
                ->timeout(180)
                ->retry(1, 1200)
                ->post('https://api.openai.com/v1/images/generations', [
                    //'model' => env('OPENAI_IMAGE_MODEL', 'gpt-image-1.5'),
                    'model' => config('services.openai.image_model', 'gpt-image-1.5'),
                    'prompt' => $prompt,
                    'size'  => '1024x1024',
                    'n'     => 1,
                    'output_format' => 'png',
                    'quality' => 'medium',
                ]);

            if (!$res->ok()) {
                Log::error("OpenAI image failed", ['status' => $res->status(), 'body' => $res->body()]);
                return null;
            }

            $b64 = data_get($res->json(), 'data.0.b64_json');
            if (!$b64) {
                Log::error("OpenAI image missing b64_json", ['json' => $res->json()]);
                return null;
            }

            $binary = base64_decode($b64, true);
            if ($binary === false) {
                Log::error("base64_decode failed");
                return null;
            }
            $dir = public_path('storage/user');
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0755, true) && !is_dir($dir)) {
                Log::error("Failed to create directory", ['dir' => $dir]);
                return null;
            }
        }

            //$fileName = 'tutors' . Str::uuid()->toString() . '.png';
            $fileName = 'avatar_' . time() . '_' . Str::random(6) . '.png';

            //$ok = Storage::disk('public')->put($fileName, $binary);

            $ok = file_put_contents($dir . DIRECTORY_SEPARATOR . $fileName, $binary);
            if (!$ok) {
                Log::error("Storage put failed", ['file' => $fileName]);
                return null;
            }

            return $fileName; // ✅ DB me save this
        } catch (\Throwable $e) {
            Log::error("generateTutorAvatar exception", ['msg' => $e->getMessage()]);
            return null;
        }
    }

    /**
     * ✅ JSON safe decode
     */
    private function safeJsonDecode(string $text)
    {
        $text = trim((string)$text);

        $data = json_decode($text, true);
        if (json_last_error() === JSON_ERROR_NONE) return $data;

        if (preg_match('/(\{[\s\S]*\}|\[[\s\S]*\])/', $text, $m)) {
            $data = json_decode($m[1], true);
            if (json_last_error() === JSON_ERROR_NONE) return $data;
        }

        return null;
    }
    private function sanitizeTutorDecoded(array $decoded): array
{
    $keys = ['gender','name','degree','education','experience','budget','profile','profile_desc'];

    foreach ($keys as $k) {
        $v = $decoded[$k] ?? '';

        // array/object to string
        if (is_array($v)) {
            $v = implode(' ', array_map(fn($x) => is_scalar($x) ? (string)$x : json_encode($x), $v));
        } elseif (is_object($v)) {
            $v = json_encode($v, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
        }

        $decoded[$k] = trim((string)$v);
    }

    return $decoded;
}

}
