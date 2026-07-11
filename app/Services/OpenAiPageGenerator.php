<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Throwable;

class OpenAiPageGenerator
{
    public function generate(array $input): array
    {
        app(ExternalApiBudget::class)->consume(
            'openai-page',
            (int) config('services.openai.page_daily_limit', 100)
        );
        $circuit = app(ProviderCircuitBreaker::class);
        $circuit->ensureAvailable('openai');

       // $model = env('OPENAI_MODEL', 'gpt-5-mini');

        $model = config('services.openai.model', 'gpt-5-mini');

        // ---------- 1) Normalize geo/context ----------
        $geo = [
            "state"          => $input['state'] ?? null,
            "city"           => $input['city'] ?? null,
            "location"       => $input['location'] ?? null,
            "hyper_location" => $input['hyper_location'] ?? null,
        ];

        $nearbySchools   = $input['nearby_schools'] ?? [];
        $nearbyLandmarks = $input['nearby_landmarks'] ?? [];
        $premiumZones    = $input['premium_zones'] ?? [];

        $subjects    = $this->toArray($input['subjects'] ?? []);
        $boards      = $this->toArray($input['boards'] ?? []);
        $classes     = $this->toArray($input['classes_tracks'] ?? []);
        $serviceMode = $input['service_mode'] ?? 'home';

        $pageType  = $input['page_type'] ?? 'location';
        $isPremium = (bool)($input['is_premium'] ?? false);

        $intentBias      = $input['intent_bias'] ?? 'balanced';
        $linkingStrategy = $input['internal_linking'] ?? 'balanced';
        $languageVariant = $input['language_variant'] ?? 'english_india';
        $depth           = $input['syllabus_depth'] ?? 'balanced';
 
        $blogSuggestions = $input['blogs'] ?? [];
        $nearbyPages     = $input['nearby_pages'] ?? [];

        // Premium schools normalization (must be exactly 5 if possible)
        $premiumSchools = $input['premium_schools'] ?? [];
        $premiumSchools = $this->normalizePremiumSchools($premiumSchools);

        // ✅ Detect class band (primary/middle/secondary/senior)
        $classBand = $this->classBandFromTracks($classes, $boards);

        // ---------- 2) System prompt ----------
        $system = implode("\n", [
            "You are NXTutors' premium page writer.",
            "STRICT RULES:",
            "1) Output STRICT JSON ONLY (no markdown, no extra text).",
            "2) Do NOT write generic SEO-template language; must feel premium, branded, human-designed.",
            "3) Avoid long text walls. Use short paragraphs, bullets, and structured sections.",
            "4) Use homepage-consistent tone: premium, trustworthy, helpful, local.",
            "5) NEVER invent names of real schools/landmarks/blogs/pages. Use only provided arrays.",
            "6) Interlinking must feel editorial, not mechanical.",
            "7) Content should reflect location intelligence (sector/area, landmarks, premium micro-zones).",
            "8) Add trust blocks: 'Why Parents in This Area Choose NXTutors', 'Local Academic Challenges & Solutions', 'Board-wise Expertise in This Location'.",
            "9) CTA copy must adapt to location + subject + class + mode.",
            "10) LOCAL_REVIEWS: Create 10-15 realistic reviews (no Google claims).",
            "11) Ratings must be 4 or 5 only. Dates within last 18 months (yyyy-mm-dd).",
            "",
            "PRIMARY / MIDDLE / SENIOR RULES:",
            "- If class_band='primary' (Class 1–5):",
            "  * Use child-friendly tone, activity-based learning, worksheets, reading fluency, concept basics.",
            "  * Avoid exam terms like JEE/NEET/CUET.",
            "  * syllabus_content.topics should be simple foundation topics (6–12 bullets).",
            "  * subjects_content bullets should mention outcomes (confidence, basics, practice).",
            "- If class_band='middle' (6–8): balance concepts + practice + school assessments.",
            "- If class_band='secondary' (9–10): add board exam readiness, practice papers, revision.",
            "- If class_band='senior' (11–12/JEE/NEET): more exam strategy + advanced topics.",
            "",
            "SEO CONTROLS:",
            "12) If seo_controls.index_flag is 'Noindex', write shorter content (~1200 words).",
            "13) DUPLICATION RULE: If seo_controls.canonical_target is set, treat this page as a variant; keep main headings canonical-focused; boards/classes mention inside sections only.",
            "",
            "MANDATORY sections:",
            "14) Must include: subjects_content, syllabus_content, nxtutors_tools, home_vs_online, whats_new. NEVER omit them.",
            "",
            "premium_schools_fit MUST use ONLY payload.premium_schools:",
            "15) Build premium_schools_fit.schools EXACTLY 5 items.",
            "16) name = payload.premium_schools[i].name, board = payload.premium_schools[i].board.",
            "17) fit_reason = 1 short line. NO partnership claims.",
            "18) If payload.premium_schools < 5, repeat from start to reach 5.",
            "",
            "IMPORTANT:",
            "19) local_schools and local_institutes: if no DB list is provided, keep names generic like 'Nearby School 1'. Do NOT invent real-world brand names.",
        ]);

        // ---------- 3) User payload ----------
        $payload = [
            "brand" => "NXTutors",
            "geo" => $geo,
            "page_type" => $pageType,
            "service_mode" => $serviceMode,
            "is_premium_locality" => $isPremium,

            "subjects" => $subjects,
            "boards" => $boards,
            "classes_tracks" => $classes,

            "premium_schools" => $premiumSchools,

            "audience" => [
                "class_band" => $classBand, // primary|middle|secondary|senior
            ],

            "content_controls" => [
                "language_variant" => $languageVariant,
                "content_depth" => $depth,
                "intent_bias" => $intentBias,
                "internal_linking_strategy" => $linkingStrategy,
                "target_words" => (int)(
                    ($input['index_flag'] ?? 'Index') === 'Noindex'
                        ? min((int)($input['target_words'] ?? 1800), 1200)
                        : (int)($input['target_words'] ?? 1800)
                ),
            ],

            "local_intelligence" => [
                "nearby_schools" => array_values(array_slice((array)$nearbySchools, 0, 8)),
                "nearby_landmarks" => array_values(array_slice((array)$nearbyLandmarks, 0, 8)),
                "premium_zones" => array_values(array_slice((array)$premiumZones, 0, 8)),
            ],

            "link_candidates" => [
                "blogs" => array_values(array_slice((array)$blogSuggestions, 0, 8)),
                "nearby_pages" => array_values(array_slice((array)$nearbyPages, 0, 10)),
            ],

            "primary_keyword_override" => $input['primary_keyword'] ?? null,

            "reviews_requirements" => [
                "count_min" => 10,
                "count_max" => 15,
                "rating_allowed" => [4, 5],
                "tone" => "parent/student local experience",
                "no_google_claims" => true,
            ],

            "seo_controls" => [
                "demand_score" => (int)($input['demand_score'] ?? 0),
                "index_flag" => (string)($input['index_flag'] ?? 'Index'),
                "canonical_target" => (string)($input['canonical_target'] ?? ''),
                "rule" => "If index_flag is Noindex, keep content shorter and avoid repeating the same keyword many times."
            ],
        ];

        // ---------- 4) JSON schema (strict) ----------
        // ✅ Change: local_schools/local_institutes minItems=0
        // Backend sanitizeTopList will always make them 10.
        $schema = [
            "type" => "object",
            "additionalProperties" => false,
            "required" => [
                "slug",
                "title",
                "meta_title",
                "meta_description",
                "sections",
                "faqs",
                "interlinks",
                "local_reviews",
                "local_schools",
                "local_institutes"
            ],
            "properties" => [
                "slug" => ["type" => "string"],
                "title" => ["type" => "string"],
                "meta_title" => ["type" => "string"],
                "meta_description" => ["type" => "string"],

                "sections" => [
                    "type" => "object",
                    "additionalProperties" => false,
                    "required" => [
                        "hero",
                        "why_choose",
                        "services",
                        "subjects_content",
                        "syllabus_content",
                        "nxtutors_tools",
                        "home_vs_online",
                        "whats_new",
                        "trust_local",
                        "challenges",
                        "board_expertise",
                        "how_it_works",
                        "internal_recommendations",
                        "premium_schools_fit",
                        "cta"
                    ],
                    "properties" => [
                        "hero" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["headline", "subheadline", "highlights"],
                            "properties" => [
                                "headline" => ["type" => "string"],
                                "subheadline" => ["type" => "string"],
                                "highlights" => ["type" => "array", "items" => ["type" => "string"]],
                            ],
                        ],
                        "why_choose" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "points"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "points" => ["type" => "array", "items" => ["type" => "string"]],
                            ],
                        ],
                        "services" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "items"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "items" => ["type" => "array", "items" => ["type" => "string"]],
                            ],
                        ],
                        "subjects_content" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title","intro","bullets"],
                            "properties" => [
                                "title" => ["type"=>"string"],
                                "intro" => ["type"=>"string"],
                                "bullets" => ["type"=>"array","items"=>["type"=>"string"]],
                            ],
                        ],
                        "syllabus_content" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title","note","topics"],
                            "properties" => [
                                "title" => ["type"=>"string"],
                                "note"  => ["type"=>"string"],
                                "topics"=> ["type"=>"array","items"=>["type"=>"string"]],
                            ],
                        ],
                        "nxtutors_tools" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title","bullets"],
                            "properties" => [
                                "title" => ["type"=>"string"],
                                "bullets" => ["type"=>"array","items"=>["type"=>"string"]],
                            ],
                        ],
                        "home_vs_online" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title","home_points","online_points","best_for"],
                            "properties" => [
                                "title" => ["type"=>"string"],
                                "home_points" => ["type"=>"array","items"=>["type"=>"string"]],
                                "online_points"=> ["type"=>"array","items"=>["type"=>"string"]],
                                "best_for" => ["type"=>"string"],
                            ],
                        ],
                        "whats_new" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title","bullets"],
                            "properties" => [
                                "title" => ["type"=>"string"],
                                "bullets" => ["type"=>"array","items"=>["type"=>"string"]],
                            ],
                        ],
                        "premium_schools_fit" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "note", "schools"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "note" => ["type" => "string"],
                                "schools" => [
                                    "type" => "array",
                                    "minItems" => 5,
                                    "maxItems" => 5,
                                    "items" => [
                                        "type" => "object",
                                        "additionalProperties" => false,
                                        "required" => ["name", "board", "fit_reason"],
                                        "properties" => [
                                            "name" => ["type" => "string"],
                                            "board" => ["type" => "string"],
                                            "fit_reason" => ["type" => "string"],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        "trust_local" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "cards"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "cards" => [
                                    "type" => "array",
                                    "items" => [
                                        "type" => "object",
                                        "additionalProperties" => false,
                                        "required" => ["title", "text"],
                                        "properties" => [
                                            "title" => ["type" => "string"],
                                            "text" => ["type" => "string"],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        "challenges" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "bullets"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "bullets" => ["type" => "array", "items" => ["type" => "string"]],
                            ],
                        ],
                        "board_expertise" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "badges", "text"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "badges" => ["type" => "array", "items" => ["type" => "string"]],
                                "text" => ["type" => "string"],
                            ],
                        ],
                        "how_it_works" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "steps"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "steps" => ["type" => "array", "items" => ["type" => "string"]],
                            ],
                        ],
                        "internal_recommendations" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => ["title", "items"],
                            "properties" => [
                                "title" => ["type" => "string"],
                                "items" => [
                                    "type" => "array",
                                    "items" => [
                                        "type" => "object",
                                        "additionalProperties" => false,
                                        "required" => ["label", "title", "url"],
                                        "properties" => [
                                            "label" => ["type" => "string"],
                                            "title" => ["type" => "string"],
                                            "url" => ["type" => "string"],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        "cta" => [
                            "type" => "object",
                            "additionalProperties" => false,
                            "required" => [
                                "headline","microcopy","primary_button_text","primary_button_url","secondary_text"
                            ],
                            "properties" => [
                                "headline" => ["type" => "string"],
                                "microcopy" => ["type" => "string"],
                                "primary_button_text" => ["type" => "string"],
                                "primary_button_url" => ["type" => "string"],
                                "secondary_text" => ["type" => "string"],
                            ],
                        ],
                    ],
                ],

                "faqs" => [
                    "type" => "array",
                    "items" => [
                        "type" => "object",
                        "additionalProperties" => false,
                        "required" => ["q", "a"],
                        "properties" => [
                            "q" => ["type" => "string"],
                            "a" => ["type" => "string"],
                        ],
                    ],
                ],

                "interlinks" => [
                    "type" => "array",
                    "items" => [
                        "type" => "object",
                        "additionalProperties" => false,
                        "required" => ["title", "url", "reason"],
                        "properties" => [
                            "title" => ["type" => "string"],
                            "url" => ["type" => "string"],
                            "reason" => ["type" => "string"],
                        ],
                    ],
                ],

                "local_reviews" => [
                    "type" => "array",
                    "minItems" => 10,
                    "maxItems" => 15,
                    "items" => [
                        "type" => "object",
                        "additionalProperties" => false,
                        "required" => ["name", "rating", "review", "date"],
                        "properties" => [
                            "name" => ["type" => "string"],
                            "rating" => ["type" => "integer"],
                            "review" => ["type" => "string"],
                            "date" => ["type" => "string"],
                        ],
                    ],
                ],

                // ✅ minItems 0 (backend fills to 10)
                "local_schools" => [
                    "type" => "array",
                    "minItems" => 0,
                    "maxItems" => 10,
                    "items" => [
                        "type" => "object",
                        "additionalProperties" => false,
                        "required" => ["name", "area", "type"],
                        "properties" => [
                            "name" => ["type" => "string"],
                            "area" => ["type" => "string"],
                            "type" => ["type" => "string"],
                        ],
                    ],
                ],

                "local_institutes" => [
                    "type" => "array",
                    "minItems" => 0,
                    "maxItems" => 10,
                    "items" => [
                        "type" => "object",
                        "additionalProperties" => false,
                        "required" => ["name", "area", "specialty"],
                        "properties" => [
                            "name" => ["type" => "string"],
                            "area" => ["type" => "string"],
                            "specialty" => ["type" => "string"],
                        ],
                    ],
                ],
            ],
        ];

        // ---------- 5) API call ----------
        $apiKey = (string) config('services.openai.key');
        if ($apiKey === '') {
            throw new \RuntimeException('OpenAI is not configured.');
        }

        $res = Http::withToken($apiKey)
            ->acceptJson()
            ->connectTimeout((int) config('services.openai.connect_timeout', 10))
            ->timeout((int) config('services.openai.timeout', 90))
            ->retry(
                (int) config('services.openai.retry_times', 1),
                750,
                function (Throwable $exception): bool {
                    if ($exception instanceof ConnectionException) {
                        return true;
                    }

                    if ($exception instanceof RequestException && $exception->response) {
                        $status = $exception->response->status();

                        return $status === 429 || $status >= 500;
                    }

                    return false;
                },
                throw: false
            )
            ->withOptions([
                'curl' => [
                    CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
                ],
            ])
            ->post('https://api.openai.com/v1/responses', [
                "model" => $model,
                "instructions" => $system,
                "input" => json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
                "text" => [
                    "format" => [
                        "type" => "json_schema",
                        "name" => "nxtutors_generated_page",
                        "schema" => $schema,
                        "strict" => true
                    ]
                ],
            ]);

        if (!$res->successful()) {
            $circuit->recordFailure('openai');
            throw new \RuntimeException('OpenAI page generation failed with HTTP '.$res->status().'.');
        }

        // ---------- 6) Extract text ----------
        $apiData = $res->json();
        $text = null;

        foreach (($apiData['output'] ?? []) as $out) {
            foreach (($out['content'] ?? []) as $c) {
                if (!empty($c['text'])) {
                    $text = $c['text'];
                    break 2;
                }
            }
        }

        if (!$text) {
            $circuit->recordFailure('openai');
            throw new \RuntimeException("OpenAI returned empty output.");
        }

        $json = json_decode($text, true);
        if (!is_array($json)) {
            $circuit->recordFailure('openai');
            throw new \RuntimeException('OpenAI returned malformed page JSON.');
        }

        $circuit->recordSuccess('openai');

        // ---------- 7) Sanitization ----------
        $json['local_reviews'] = $this->sanitizeReviews(
            $json['local_reviews'] ?? [],
            $geo['location'] ?? '',
            $geo['city'] ?? ''
        );

        // ✅ Always make 10 from backend
        $json['local_schools'] = $this->sanitizeTopList(
            $json['local_schools'] ?? [],
            10,
            [
                "name" => "Nearby School",
                "area" => trim(($geo['location'] ?? '') . (!empty($geo['city']) ? ", {$geo['city']}" : "")),
                "type" => "School"
            ]
        );

        $json['local_institutes'] = $this->sanitizeTopList(
            $json['local_institutes'] ?? [],
            10,
            [
                "name" => "Coaching Institute",
                "area" => trim(($geo['location'] ?? '') . (!empty($geo['city']) ? ", {$geo['city']}" : "")),
                "specialty" => "Boards"
            ]
        );

        if (isset($json['sections']['premium_schools_fit']['schools'])) {
            $json['sections']['premium_schools_fit']['schools'] =
                $this->sanitizePremiumSchoolsFit(
                    (array)$json['sections']['premium_schools_fit']['schools'],
                    $premiumSchools
                );
        }

        return $json;
    }

    // ---------------------------
    // ✅ Primary detection helpers
    // ---------------------------
    private function classBandFromTracks(array $classes, array $boards): string
    {
        $min = null;

        foreach ($classes as $t) {
            if (preg_match('/\bclass\s*(\d{1,2})\b/i', (string)$t, $m)) {
                $n = (int)$m[1];
                $min = $min === null ? $n : min($min, $n);
            }
        }

        $joined = strtolower(implode(' ', $classes));
        if (str_contains($joined, 'jee') || str_contains($joined, 'neet') || str_contains($joined, 'cuet')) {
            return 'senior';
        }

        if ($min !== null) {
            if ($min >= 1 && $min <= 5) return 'primary';
            if ($min >= 6 && $min <= 8) return 'middle';
            if ($min >= 9 && $min <= 10) return 'secondary';
            if ($min >= 11 && $min <= 12) return 'senior';
        }

        // fallback by boards
        $b = strtolower(implode(' ', $boards));
        if (str_contains($b, 'ib') || str_contains($b, 'igcse')) return 'middle';

        return 'secondary';
    }

    private function sanitizePremiumSchoolsFit(array $schools, array $premiumSchools): array
    {
        $fallback = array_slice($premiumSchools, 0, 5);
        if (count($fallback) === 0) return $schools;

        $out = [];
        for ($i = 0; $i < 5; $i++) {
            $src = $fallback[$i] ?? $fallback[$i % count($fallback)];

            $fit = $schools[$i]['fit_reason'] ?? '';
            $fit = trim((string)$fit);
            if ($fit === '') $fit = "Good fit for curriculum pace, assessments and structured learning support.";

            $out[] = [
                "name" => (string)$src['name'],
                "board" => (string)$src['board'],
                "fit_reason" => $fit,
            ];
        }
        return $out;
    }

    private function toArray($value): array
    {
        if (is_array($value)) return $value;

        if (is_string($value)) {
            return array_values(array_filter(array_map('trim', explode(',', $value))));
        }
        return [];
    }

    private function normalizePremiumSchools(array $rows): array
    {
        $out = [];
        foreach (array_values($rows) as $r) {
            if (!is_array($r)) continue;

            $name = trim((string)($r['school_name'] ?? $r['name'] ?? ''));
            if ($name === '') continue;

            $boardCat = strtoupper(trim((string)($r['board_category'] ?? '')));
            $board    = trim((string)($r['board'] ?? $boardCat));

            $out[] = [
                "name" => $name,
                "board" => $boardCat ?: ($board ?: 'CBSE'),
                "area" => trim((string)($r['area'] ?? '')),
                "premium_tier" => strtoupper(trim((string)($r['premium_tier'] ?? ''))),
                "notes" => trim((string)($r['notes'] ?? '')),
            ];
        }

        return $this->ensureFivePremiumSchools($out);
    }

    private function ensureFivePremiumSchools(array $items): array
    {
        if (count($items) === 0) return [];

        usort($items, function ($a, $b) {
            $ta = ($a['premium_tier'] ?? '') === 'A' ? 0 : 1;
            $tb = ($b['premium_tier'] ?? '') === 'A' ? 0 : 1;
            return $ta <=> $tb;
        });

        $items = array_values($items);

        if (count($items) >= 5) return array_slice($items, 0, 5);

        $i = 0;
        while (count($items) < 5) {
            $items[] = $items[$i % count($items)];
            $i++;
        }

        return $items;
    }

    private function sanitizeTopList(array $items, int $need, array $fallback): array
    {
        $items = array_values($items);
        $items = array_slice($items, 0, $need);

        while (count($items) < $need) {
            $n = count($items) + 1;
            $row = $fallback;
            if (isset($row['name'])) {
                $row['name'] = trim($row['name'] . " " . $n);
            }
            $items[] = $row;
        }

        return $items;
    }

    private function sanitizeReviews(array $reviews, string $location, string $city): array
    {
        $reviews = array_values($reviews);
        $reviews = array_slice($reviews, 0, 15);

        $imagePool = [];
        for ($i = 1; $i <= 15; $i++) {
            $imagePool[] = "student-{$i}.jpg";
        }

        $locText = trim($location . (!empty($city) ? ", {$city}" : ""));

        foreach ($reviews as $i => &$r) {
            $r['name']   = trim((string)($r['name'] ?? 'Parent'));
            $r['review'] = trim((string)($r['review'] ?? ''));

            $rating = (int)($r['rating'] ?? 5);
            $r['rating'] = in_array($rating, [4, 5], true) ? $rating : 5;

            $date = (string)($r['date'] ?? '');
            $r['date'] = preg_match('/^\d{4}-\d{2}-\d{2}$/', $date) ? $date : date('Y-m-d');

            $r['location'] = $locText;

            $file = $imagePool[$i % count($imagePool)];
            $r['image'] = "https://nxtutors.in/public/storage/reviews/" . $file;
        }
        unset($r);

        if (count($reviews) < 10) {
            $need = 10 - count($reviews);
            for ($k = 0; $k < $need; $k++) {
                $idx = count($reviews) + 1;
                $file = $imagePool[$idx % count($imagePool)];
                $reviews[] = [
                    "name" => "Parent {$idx}",
                    "rating" => 5,
                    "review" => "Good tutor match and smooth demo experience.",
                    "date" => date('Y-m-d'),
                    "location" => $locText,
                    "image" => "https://nxtutors.in/public/storage/reviews/" . $file,
                ];
            }
        }

        return $reviews;
    }
}
