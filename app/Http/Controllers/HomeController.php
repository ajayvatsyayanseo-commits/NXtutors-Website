<?php

namespace App\Http\Controllers;

use App\Models\GeneratedPage;
use App\Models\Blog;
use App\Models\City;

use App\Models\Category;

use App\Models\Product;

use App\Models\Teacher_course;



use App\Models\Page;
use App\Models\Banner;
use App\Models\City_area;
use App\Models\City_area_course;
use App\Models\City_area_faqs;
use App\Models\Register;
use App\Models\Teacher_review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;



use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function pageIndex(Request $request)
    {
        $pages = GeneratedPage::where('status', 'published')
            ->latest()
            ->paginate(12);

        if ($request->ajax()) {
            return view('pages.partials.page-cards', compact('pages'))->render();
        }

        $metatitle = '';
        $metakey = '';
        $metadesc = '';

        return view('page', compact('pages', 'metatitle', 'metakey', 'metadesc'));
    }

    public function index()
    {
        $teachers = $this->getHomeTeachers(6, 0);
            $blogs    = $this->getHomeBlogs(6, 0);
            $reviews  = $this->getHomeReviews(6);

            $category = Category::where('pid', 0)->where('status', 't')->take(10)->get(); 

            // Everything we teach, for the strip above the footer. Parents
            // first, then subjects, in the order they were created — that puts
            // the boards and exams people search for ahead of the class-level
            // rows. Deduplicated by slug because the slug IS the URL: two
            // categories sharing one means one page, and listing it twice would
            // be two identical links to the same place.
            $courseStrip = Category::query()
                ->where('status', 't')
                ->whereNotNull('slug')
                ->where('slug', '!=', '')
                ->orderByRaw('CASE WHEN pid IS NULL OR pid = 0 THEN 0 ELSE 1 END')
                ->orderBy('id')
                ->get()
                ->unique('slug')
                ->take(24)
                ->values();

            $banner = Banner::Where('status', 't')->take(5)->get();
            $page = Page::Where('status', 't')->where('slug', 'home')->first();
            $metatitle = $page->meta_title ?? null;
            $metakey = $page->meta_keywords ?? null;
            $metadesc = $page->meta_description ?? null;

        return view('home', compact('teachers','category','courseStrip','blogs','banner','reviews','metatitle','metakey','metadesc'));
    }

   public function askNxtAi(Request $request)
{
    $request->validate([
        'message' => 'required|string|max:1000',
    ]);

    try {
        $endpoint = config('services.nxtutors.ai_function_url');

        if (! $endpoint) {
            return response()->json([
                'success' => false,
                'reply' => 'AI service is temporarily unavailable.',
            ], 503);
        }

        $response = Http::connectTimeout(5)->timeout(60)->retry(1, 250, throw: false)->post($endpoint, [
            'message' => $request->message,
            'source' => 'website',
            'page' => url()->previous(),
        ]);

        if (!$response->successful()) {
            return response()->json([
                'success' => false,
                'reply' => 'AI server error: '.$response->status(),
            ], 500);
        }

        $data = $response->json();

        return response()->json([
            'success' => true,
            'reply' => $data['reply']
                ?? $data['message']
                ?? $data['answer']
                ?? 'AI ne response diya, lekin reply field nahi mili.',
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'reply' => 'AI se connect nahi ho pa raha. Please try again.',
        ], 500);
    }
}

/**
 * Sitemap index (/sitemap.xml) and one sitemap per section
 * (/sitemap-{section}.xml), so Search Console reports indexing per section.
 */
public const SITEMAP_SECTIONS = ['pages', 'subjects', 'cities', 'areas', 'blog', 'local-pages', 'courses', 'tutors'];

public function sitemap()
{
    $baseUrl = 'https://www.nxtutors.com';

    // Area pages get one sitemap per city and blog posts one per topic, so
    // Search Console reports indexing city by city and topic by topic, and
    // no single file grows past the 50,000-URL limit as cities are added.
    // The combined sitemap-areas.xml and sitemap-blog.xml still answer, but
    // are no longer listed.
    $sections = array_values(array_diff(self::SITEMAP_SECTIONS, ['areas', 'blog']));
    $maps = array_map(fn ($s) => $baseUrl . '/sitemap-' . $s . '.xml', $sections);

    $citySlugs = City::where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')
        ->whereIn('id', City_area::where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')->select('city_id'))
        ->orderBy('slug')->pluck('slug');
    foreach ($citySlugs as $slug) {
        $maps[] = $baseUrl . '/sitemap-areas-' . $slug . '.xml';
    }

    $topics = collect($this->blogSitemapUrls(null, $baseUrl, true))->unique()->sort()->values();
    foreach ($topics as $topic) {
        $maps[] = $baseUrl . '/sitemap-blog-' . $topic . '.xml';
    }

    return response()
        ->view('sitemap-index', ['sitemaps' => $maps])
        ->header('Content-Type', 'application/xml');
}

/** Area pages of one city: /sitemap-areas-{city}.xml. */
public function sitemapAreas(string $city)
{
    $cityRow = City::where('status', 't')->where('slug', $city)->first();
    abort_unless($cityRow, 404);

    $urls = $this->areaSitemapUrls($cityRow->id, 'https://www.nxtutors.com');
    abort_if($urls === [], 404);

    return response()->view('sitemap', compact('urls'))->header('Content-Type', 'application/xml');
}

/** Blog posts of one topic (App\Support\BlogTopics): /sitemap-blog-{topic}.xml. */
public function sitemapBlog(string $topic)
{
    abort_unless(isset(\App\Support\BlogTopics::TOPICS[$topic]) && $topic !== 'city', 404);

    $urls = $this->blogSitemapUrls($topic, 'https://www.nxtutors.com');
    abort_if($urls === [], 404);

    return response()->view('sitemap', compact('urls'))->header('Content-Type', 'application/xml');
}

/** @return list<array{loc: string, lastmod: ?string, priority: string, changefreq: string}> */
private function areaSitemapUrls(?int $cityId, string $baseUrl): array
{
    $urls = [];
    // The area table has no timestamps, so no lastmod rather than a made-up one.
    City_area::where('status', 't')
        ->whereNotNull('slug')->where('slug', '!=', '')
        ->when($cityId !== null, fn ($q) => $q->where('city_id', $cityId))
        ->whereHas('city', fn ($q) => $q->where('status', 't'))
        ->with('city:id,slug')
        ->orderBy('id')
        ->chunk(500, function ($areas) use (&$urls, $baseUrl) {
            foreach ($areas as $area) {
                if (empty($area->city?->slug)) {
                    continue;
                }
                $urls[] = [
                    'loc' => $baseUrl . '/city/' . $area->city->slug . '/' . $area->slug,
                    'lastmod' => null,
                    'priority' => '0.7',
                    'changefreq' => 'monthly',
                ];
            }
        });

    return $urls;
}

/**
 * Indexable blog posts (never the noindexed locality posts), optionally of
 * one topic. With $topicsOnly, returns the topic of each post instead.
 */
private function blogSitemapUrls(?string $topic, string $baseUrl, bool $topicsOnly = false): array
{
    $out = [];
    Blog::where('status', 't')->chunk(500, function ($blogs) use (&$out, $topic, $baseUrl, $topicsOnly) {
        foreach ($blogs as $blog) {
            $slug = trim((string) $blog->slug);
            $t = \App\Support\BlogTopics::of($slug);
            if ($slug === '' || $t === 'city' || ($topic !== null && $t !== $topic)) {
                continue;
            }
            if ($topicsOnly) {
                $out[] = $t;
                continue;
            }
            // The real edit date where the table has one, else the publish
            // date; never "today", which teaches Google to ignore lastmod.
            $date = $blog->updated_at ?? null;
            $lastmod = $date ? \Illuminate\Support\Carbon::parse($date)->toDateString()
                : (preg_match('/^\d{4}-\d{2}-\d{2}/', (string) ($blog->date ?? ''), $m) ? $m[0] : null);
            $out[] = [
                'loc' => $baseUrl . '/blog/' . $slug,
                'lastmod' => $lastmod,
                'priority' => '0.7',
                'changefreq' => 'weekly',
            ];
        }
    });

    return $out;
}
public function sitemapSection(string $section)
{
    abort_unless(in_array($section, self::SITEMAP_SECTIONS, true), 404);

    $urls = [];
    $baseUrl = 'https://www.nxtutors.com';

    switch ($section) {
    case 'pages':
    // Static URLs
    $staticUrls = [
    '/',
    '/city',
    '/course',
    '/blog',
    '/contact',
    '/demo-class',
    '/pricing',
    '/pricing-guide',
    '/faqs',
    '/terms-conditions',
    '/privacy-policy',
    '/tutors',
    '/become-a-tutor',
];
    // Tutor-side city pages, for cities with zones set up (TuitionJobsController).
    foreach (array_keys(config('zones', [])) as $zoneCity) {
        if ($zSlug = \App\Support\Geo::slugFor($zoneCity)) {
            $staticUrls[] = '/tuition-jobs/' . $zSlug;
        }
    }

    foreach ($staticUrls as $url) {
        $urls[] = [
            'loc' => $baseUrl . $url,
            'lastmod' => null, // no edit date for static pages: never claim "today"
            'priority' => $url === '/' ? '1.0' : '0.8',
            'changefreq' => 'daily',
        ];
    }

    // Author pages (/authors, /authors/{slug}).
    $urls[] = ['loc' => $baseUrl . '/authors', 'lastmod' => null, 'priority' => '0.5', 'changefreq' => 'monthly'];
    foreach (config('nx_authors', []) as $author) {
        if (! empty($author['slug'])) {
            $urls[] = ['loc' => $baseUrl . '/authors/' . $author['slug'], 'lastmod' => null, 'priority' => '0.6', 'changefreq' => 'weekly'];
        }
    }

        break;

    case 'subjects':
    // Subject pages (/maths-home-tutor, …) — only those whose guide exists.
    foreach (array_keys(\App\Support\SubjectLinks::live()) as $subjectKey) {
        $urls[] = [
            'loc' => $baseUrl . '/' . $subjectKey,
            'lastmod' => null,
            'priority' => str_contains($subjectKey, '/') ? '0.8' : '0.9',
            'changefreq' => 'weekly',
        ];
    }

        break;

    case 'cities':
    // Cities
    City::where('status', 't')->chunk(500, function ($cities) use (&$urls, $baseUrl) {
        foreach ($cities as $city) {
            $urls[] = [
                'loc' => $baseUrl . '/city/' . $city->slug,
                'lastmod' => optional($city->updated_at)->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }
    });

        break;

    case 'areas':
        $urls = $this->areaSitemapUrls(null, $baseUrl);
        break;


    case 'blog':
        $urls = $this->blogSitemapUrls(null, $baseUrl);
        break;


    case 'local-pages':
    // Generated Pages
    //
    // A sitemap is a list of pages asking to be indexed, so a page carrying
    // noindex must never appear in one: Search Console counts every one of
    // them as an "Excluded by 'noindex' tag" error against the sitemap.
    // index_flag is the same payload key pages/show.blade.php reads when it
    // decides whether to emit the noindex meta tag.
    GeneratedPage::where('status', 'published')->chunk(500, function ($pages) use (&$urls, $baseUrl) {
        foreach ($pages as $page) {
            // Same rule as the page's robots tag (config/generated_pages.php).
            if (! \App\Support\GeneratedPageIndex::indexable($page)) {
                continue;
            }

            $urls[] = [
                'loc' => $baseUrl . '/p/' . $page->slug,
                'lastmod' => optional($page->updated_at)->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }
    });

        break;

    case 'courses':
    // Only categories with at least one live course, each URL once, and
    // never a duplicate spelling ("class--x"); see showCategory().
    $withCourses = Product::where('status', 't')->get(['cat_id', 'pid', 'cid'])
        ->flatMap(fn ($p) => [$p->cat_id, $p->pid, $p->cid])->filter()->unique()->all();
    $seenCats = [];
    Category::where('status', 't')
    ->whereNotNull('slug')
    ->chunk(500, function ($categories) use (&$urls, &$seenCats, $baseUrl, $withCourses) {
        foreach ($categories as $cat) {
            if (! in_array($cat->id, $withCourses) || str_contains($cat->slug, '--') || isset($seenCats[$cat->slug])) {
                continue;
            }
            $seenCats[$cat->slug] = true;
            $urls[] = [
                'loc' => $baseUrl . '/category/' . $cat->slug,
                'lastmod' => optional($cat->updated_at)->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }
    });

// Courses
Product::where('status', 't')
    ->whereNotNull('slug')
    ->chunk(500, function ($courses) use (&$urls, $baseUrl) {
        foreach ($courses as $course) {
            $urls[] = [
                'loc' => $baseUrl . '/course/' . $course->slug,
                'lastmod' => optional($course->updated_at)->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }
    });

        break;

    case 'tutors':
    // Tutors
 Register::where('join_as', 'teacher')
    ->listable()
    ->chunk(500, function ($teachers) use (&$urls) {
        foreach ($teachers as $t) {
            if (!$t->user_id) {
                continue;
            }

            // Register::profileUrl() is the single source of truth for this
            // URL, shared with the canonical tag so the two cannot disagree.
            // It returns null for a tutor with no city, which used to be
            // written out as the literal "/tutor/city/..." and served a 500.
            $profileUrl = $t->profileUrl();

            // Sample (model) profiles stay out of Google (config/tutors.php).
            if (! $profileUrl || ! empty($t->is_sample)) {
                continue;
            }

            $urls[] = [
                'loc' => $profileUrl,
                'lastmod' => optional($t->updated_at)->toDateString(),
                'priority' => '0.7',
                'changefreq' => 'weekly',
            ];
        }
    });

        break;
    }

    return response()
        ->view('sitemap', compact('urls'))
        ->header('Content-Type', 'application/xml');
}

    public function showCategory($slug1, $slug2 = null, $slug3 = null)
{
    // "class--x" and "class---xi" are duplicate spellings of "class-x" left
    // by the admin; one URL per class, so they 301 to the clean slug.
    $clean = array_map(fn ($s) => $s === null ? null : preg_replace('/-{2,}/', '-', $s), [$slug1, $slug2, $slug3]);
    if ($clean !== [$slug1, $slug2, $slug3] && Category::where('slug', $clean[0])->exists()) {
        return redirect()->to(url('/category/' . implode('/', array_filter($clean))), 301);
    }

    $slugs = array_filter([$slug1, $slug2, $slug3]);
    $category = null;
    
    foreach ($slugs as $slug) {
        // The `orWhere` here used to sit outside a nested closure, so the SQL
        // read `(slug = ? AND pid IS NULL) OR pid = 0` — the slug stopped
        // applying the moment the OR was reached and every single-segment
        // /category/* URL returned the first top-level category. All 74
        // category URLs in the sitemap served identical content.
        $category = Category::where('slug', $slug)
            ->when($category, function ($query) use ($category) {
                // A deeper segment must be a child of the segment before it.
                return $query->where('pid', $category->id);
            }, function ($query) {
                // The first segment may name a top-level category or a child
                // one: the sitemap lists every category as /category/{slug}.
                // Where a slug is used at both levels, top-level wins.
                return $query->orderByRaw('CASE WHEN pid IS NULL OR pid = 0 THEN 0 ELSE 1 END');
            })
            ->first();

        if (!$category) {
            abort(404);
        }
    }

    $children = $category->childcatlist()->get();

    $metakey = '';

     $products = Product::where(function($query) use ($category) {
        $query->where('cat_id', $category->id)
              ->orWhere('pid', $category->id)
              ->orWhere('cid', $category->id);
    })->where('status', 't')->orderBy('id', 'desc')->get();

    // Admin meta first; otherwise a real title instead of the bare site name.
    $catName = html_entity_decode(trim(rtrim((string) $category->cat_title, ':')), ENT_QUOTES);
    $metatitle = trim((string) $category->meta_title) ?: $catName . ' Tutors – Home & Online | NXTutors';
    $metadesc = trim((string) $category->meta_desc) ?: 'Verified ' . $catName . ' tutors on NXTutors, at home or online across India. See courses, compare tutors and book a free demo class.';
    // A category with no courses is an empty page: keep it out of the index
    // (and out of the sitemap) until it has something to show.
    $metarobots = $products->isEmpty() ? 'noindex, follow' : null;

    return view('singlecat', compact('category', 'children' , 'products','metatitle','metakey','metadesc','metarobots'));
}

/**
 * The tags families picked most often across a tutor's published reviews,
 * as [label => count], most frequent first.
 */
private function topReviewTags(string $tutorUserId, int $limit = 6): array
{
    $counts = [];
    Teacher_review::where('user_id', $tutorUserId)
        ->where('status', 't')
        ->whereNotNull('tags')
        ->get(['tags'])
        ->each(function (Teacher_review $r) use (&$counts): void {
            foreach ($r->tagLabels() as $label) {
                $counts[$label] = ($counts[$label] ?? 0) + 1;
            }
        });
    arsort($counts);

    return array_slice($counts, 0, $limit, true);
}

private function getHomeReviews(int $limit = 12)
{
    return DB::table('teacher_review as tr')
        ->join('register as teacher', function($j){
            $j->on(
                DB::raw('teacher.user_id COLLATE utf8mb4_unicode_ci'),
                '=',
                DB::raw('tr.user_id COLLATE utf8mb4_unicode_ci')
            );
        })
        ->where('tr.status', 't')
        ->tap(fn ($q) => Register::applyPublicVisibility($q, 'teacher'))
        ->select([
            'tr.id',
            'tr.user_id as teacher_user_id',
            'tr.rating',
            'tr.message as review_text',
            'tr.name as parent_name',
            'teacher.name as teacher_name',
        ])
        ->orderByDesc('tr.rating')
        ->orderByDesc('tr.id')
        ->limit($limit)
        ->get();
}

public function compareAi(Request $request)
{
    $ids = collect(explode(',', (string)$request->ids))
        ->filter()
        // Ids are strings: "1997" and "NXT-2026-W7PBUU" alike. An (int) cast
        // turned the second kind into 0, so those tutors vanished from Compare.
        ->map(fn($x) => trim((string) $x))
        ->filter(fn($x) => preg_match('/^[0-9A-Za-z_-]{1,64}$/', $x) === 1)
        ->unique()
        ->take(6)
        ->values();

    if ($ids->isEmpty()) {
        return response()->json(['ok'=>false,'message'=>'No tutors selected'], 422);
    }

    // Student preference (optional) – aap query params se bhej sakte ho
    $pref = [
        'board'   => trim((string)$request->board),
        'class'   => trim((string)$request->class),
        'subject' => trim((string)$request->subject),
        'city'    => trim((string)$request->city),
        'pincode' => trim((string)$request->pincode),
        'budget'  => (int)$request->budget,
    ];

    $tutors = Register::query()
        ->whereIn('user_id', $ids)
        ->with(['courses.board','courses.category'])
        ->get()
        ->keyBy('user_id');

    $out = [];

    foreach ($ids as $id) {
        $t = $tutors->get($id);
        if (!$t) continue;

        $rating  = (float)($t->rating_avg ?? 0);
        $reviews = (int)($t->reviews_count ?? 0);
        // "14+ years" is 14 and "3000-5000 per hour" starts at 3000; stripping
        // non-digits read them as 14 and 30005000.
        $feeParser = app(\App\NxtAi\Support\PublicTutorFieldMapper::class);
        $exp     = (int) ($feeParser->parseExperience((string)($t->experience ?? '')) ?? 0);
        $budget  = (int) ($feeParser->parseFee((string)($t->budget ?? ''))['min'] ?? 0);

        // ---- Compatibility components (0-100 each, weighted) ----
        $subjectFit = 70; // default
        $boardFit   = 70; // default

        // Try infer board/subject from first course
        $course = $t->courses?->first();
        $tBoard = strtolower((string)($course?->board?->cat_title ?? ''));
        $tSub   = strtolower((string)($course?->category?->cat_title ?? ''));

        if ($pref['board']) {
            $boardFit = (str_contains($tBoard, strtolower($pref['board']))) ? 100 : 60;
        }
        if ($pref['subject']) {
            $subjectFit = (str_contains($tSub, strtolower($pref['subject']))) ? 100 : 60;
        }

        // Experience (cap)
        $expScore = min(100, max(40, $exp * 12)); // 8 yrs -> 96

        // Reviews quality (rating + reviews)
        $ratingScore = min(100, ($rating / 5) * 100);
        $reviewVol   = min(100, $reviews * 3); // 30 reviews -> 90
        $reviewScore = (0.7 * $ratingScore) + (0.3 * $reviewVol);

        // Location fit (simple)
        $locScore = 70;
        if ($pref['city'] && $t->city) {
            $locScore = (strtolower($pref['city']) === strtolower((string)$t->city)) ? 100 : 60;
        }
        if ($pref['pincode'] && $t->pincode) {
            $locScore = ((string)$pref['pincode'] === (string)$t->pincode) ? 100 : $locScore;
        }

        // Budget fit
        $budgetScore = 70;
        if ($pref['budget'] > 0 && $budget > 0) {
            $diff = abs($pref['budget'] - $budget);
            if ($diff <= 200) $budgetScore = 100;
            elseif ($diff <= 500) $budgetScore = 85;
            elseif ($diff <= 900) $budgetScore = 70;
            else $budgetScore = 55;
        }

        // Availability (placeholder until you have availability table)
        $availScore = 70;

        // Weights sum = 100
        $score =
            0.22*$subjectFit +
            0.18*$boardFit +
            0.18*$expScore +
            0.18*$reviewScore +
            0.14*$locScore +
            0.10*$budgetScore;

        $score = (int)round($score);

        // Reasons
        $pros = [];
        $watch = [];

        if ($score >= 85) $pros[] = "High overall compatibility for your requirement";
        if ($subjectFit >= 90) $pros[] = "Strong subject relevance";
        if ($boardFit >= 90) $pros[] = "Board alignment looks good";
        if ($expScore >= 85) $pros[] = "Solid experience for this level";
        if ($reviewScore >= 80) $pros[] = "Good parent feedback signals";
        if ($budgetScore < 65) $watch[] = "Budget may be higher than preference";
        if ($locScore < 70) $watch[] = "Location feasibility may be limited";

        if (!$pros) $pros[] = "Decent fit — recommend demo to confirm teaching clarity";
        if (!$watch) $watch[] = "No major risks detected (demo recommended)";

        $out[] = [
            'id' => $t->user_id,
            'name' => $t->name,
            'img' => $t->avatar ? \App\Support\TutorPhoto::url($t->avatar) : asset('frount/assets/images/tutor1.jpg'),
            'rating' => number_format($rating, 1),
            'reviews' => $reviews,
            'score' => $score,
            'breakdown' => [
                'Subject Fit' => (int)$subjectFit,
                'Board Fit' => (int)$boardFit,
                'Experience' => (int)$expScore,
                'Review Quality' => (int)round($reviewScore),
                'Location' => (int)$locScore,
                'Budget' => (int)$budgetScore,
            ],
            'pros' => array_slice($pros, 0, 3),
            'watch' => array_slice($watch, 0, 2),
            'best_for' => ($score >= 85) ? "Board + Consistent improvement" : (($score >= 70) ? "Foundation strengthening" : "Trial-based evaluation"),
        ];
    }

    // Sort by score desc
    usort($out, fn($a,$b)=> $b['score'] <=> $a['score']);

    return response()->json([
        'ok' => true,
        'recommendation' => $out[0] ?? null,
        'tutors' => $out
    ]);
}
public function compareDefaults(Request $request)
{
    $pincode = trim((string) $request->get('pincode', ''));
    $city    = trim((string) $request->get('city', ''));

    $limit = 5;

    if ($pincode !== '') {
        $teachers = $this->baseTeacherQuery()->where('register.pincode', $pincode)->limit($limit)->get();
        if ($teachers->count()) return view('home.partials.compare-default-cards', compact('teachers'));
    }

    if ($city !== '') {
        $teachers = $this->baseTeacherQuery()->where('register.city', $city)->limit($limit)->get();
        if ($teachers->count()) return view('home.partials.compare-default-cards', compact('teachers'));
    }

    $teachers = $this->getHomeTeachers($limit, 0);
    return view('home.partials.compare-default-cards', compact('teachers'));
}

    public function coursepage(){

      $course = Product::Where('status', 't')->orderBy('id', 'DESC')->get(); 
      $page = Page::Where('status', 't')->where('slug', 'course')->first();
      $metatitle = $page->meta_title ?? null;
      $metakey = $page->meta_keywords ?? null;
      $metadesc = $page->meta_description ?? null;
      return view('course', compact('course','metatitle','metakey','metadesc'));
    }
    
    public function showsingleblog($slug)
    {
        // A few slugs were saved with a trailing tab or space, so their clean
        // URL 404'd and only ".../slug%09" worked. Match either form, and send
        // the stray form to the clean one.
        $clean = trim((string) $slug);

        $blog = Blog::query()
        ->where('status', 't')
        ->where(fn ($q) => $q->whereIn('slug', [$clean, $clean . "	", $clean . ' ', $slug]))
        ->firstOrFail();

        if ($slug !== $clean) {
            return redirect()->route('blog.show', $clean, 301);
        }

    // ✅ Prev / Next (by id)
    $prev = Blog::query()
        ->where('status', 't')
        ->where('id', '<', $blog->id)
        ->orderByDesc('id')
        ->select(['id','title','slug','avatar'])
        ->first();

    $next = Blog::query()
        ->where('status', 't')
        ->where('id', '>', $blog->id)
        ->orderBy('id')
        ->select(['id','title','slug','avatar'])
        ->first();

    // ✅ Related Blogs (meta_key tokens OR title tokens)
    $metaKey = trim((string) ($blog->meta_key ?? ''));
    $title   = trim((string) ($blog->title ?? ''));

    $tokens = collect(preg_split('/[,|\s]+/', Str::lower($metaKey ?: $title)))
        ->map(fn($t) => trim($t))
        ->filter(fn($t) => Str::length($t) >= 3)
        ->unique()
        ->take(10)
        ->values();

    $relatedQ = Blog::query()
        ->where('status', 't')
        ->where('id', '!=', $blog->id)
        ->select(['id','title','slug','avatar'])
        // Not the noindexed locality posts (BlogTopics "city"): related links
        // should lead to guides Google can index, such as the city clusters.
        ->where('slug', 'not like', '%-near-you%')
        ->where('slug', 'not like', '%best-home-tutors%')
        ->where('slug', 'not like', '%coaching-at-home%')
        ->orderByDesc('id');

    if ($tokens->count()) {
        $relatedQ->where(function ($qq) use ($tokens) {
            foreach ($tokens as $t) {
                $qq->orWhere('title', 'like', "%{$t}%")
                   ->orWhere('meta_title', 'like', "%{$t}%")
                   ->orWhere('meta_desc', 'like', "%{$t}%")
                   ->orWhere('meta_key', 'like', "%{$t}%");
            }
        });
    }

    $related = $relatedQ->limit(6)->get();

    // ✅ Fallback: if related empty, show latest 6
    if ($related->isEmpty()) {
        $related = Blog::query()
            ->where('status', 't')
            ->where('id', '!=', $blog->id)
            ->orderByDesc('id')
            ->limit(6)
            ->select(['id','title','slug','avatar'])
            ->get();
    }

    // ✅ Canonical
    $canonical = url('/blog/' . $blog->slug);
      
      $metatitle = $blog->meta_title ?? null;
      $metakey = $blog->meta_key ?? null;
      $metadesc = $blog->meta_desc ?? null;

    $pageTeachers = $this->getHomeTeachers(4, 0);

    // Locality posts are near-duplicates of each other (the same guide with a
    // sector name swapped in). Kept for visitors and internal links, out of
    // Google's index so they do not dilute the real guides.
    $metarobots = \App\Support\BlogTopics::of(trim((string) $blog->slug)) === 'city' ? 'noindex, follow' : null;

    return view('blog.show', compact('blog','prev','next','related','canonical','metatitle','metakey','metadesc','pageTeachers','metarobots'));
    }

    //  public function teachers(Request $request)
    // {
    //     $offset = (int) $request->get('offset', 0);
    //     $teachers = $this->getHomeTeachers(6, $offset);

    //     return view('home.partials.teacher-cards', compact('teachers'));
    // }

    public function teachers(Request $request)
{
    $offset = (int) $request->get('offset', 0);
    $limit  = (int) $request->get('limit', 8); // fills 4-up and 2-up grids with no orphan row
    $search = trim($request->get('search', ''));
    $place  = trim($request->get('place', ''));

    // A search we understand (subject, board, class, place…) goes through the
    // same ranked search as NXT AI and the subject pages. Anything else, such
    // as a tutor's name, keeps the plain text search below.
    $q = \App\Support\SearchQuery::parse($search, $place);
    // The mode switch (Home / Online / Either) beats a mode word in the text.
    $mode = in_array($request->get('mode'), ['home', 'online'], true) ? $request->get('mode') : $q['mode'];
    if ($q['known'] || (($q['city'] || $q['board'] || $q['class']) && $q['rest'] === '')) {
        $limit = max(1, min($limit, 12));
        $service = app(\App\NxtAi\Services\TutorSearchService::class);
        $criteria = fn (?string $m, int $n) => new \App\NxtAi\DTO\TutorSearchCriteria(
            city: $q['city'],
            area: $q['area'],
            pincode: $q['pincode'],
            subject: $q['subject'],
            classLevel: $q['class'],
            board: $q['board'],
            teachingMode: $m,
            gender: $q['gender'],
            limit: $n,
        );
        $result = $service->search($criteria($mode, min($offset + $limit, 60)));
        $cards = array_slice($result['cards'] ?? [], $offset, $limit);
        $exact = ($result['relaxed'] ?? null) ? 0 : (int) ($result['matched'] ?? 0);
        // What the bar counts: verified (real) tutors only, never samples.
        // Home counts only real tutors in the city itself, not those the
        // cascade brought in from the state or online.
        $exactReal = ($result['relaxed'] ?? null) ? 0 : (int) ($mode === 'online' ? ($result['real'] ?? 0) : ($result['real_local'] ?? 0));

        // Home and online answer different questions, so the first page says
        // how many of each match, and offers online honestly when home tutors
        // nearby are few (never padding the list with tutors who cannot travel).
        $counts = null;
        if ($offset === 0 && $q['subject'] && $q['city']) {
            $other = $mode === 'online' ? 'home' : 'online';
            $otherResult = $service->search($criteria($other, 1));
            $otherReal = ($otherResult['relaxed'] ?? null) ? 0 : (int) ($other === 'online' ? ($otherResult['real'] ?? 0) : ($otherResult['real_local'] ?? 0));
            $counts = [
                'home' => $mode === 'online' ? $otherReal : $exactReal,
                'online' => $mode === 'online' ? $exactReal : $otherReal,
                'widened' => $result['widened'] ?? null,
                'mode' => $mode ?: 'either',
                // The home count is city-wide (ranked by nearness), so it names the city.
                'area' => $q['city'],
            ];
        }

        if ($offset === 0) {
            \App\Support\SearchEvents::record('search', [
                'sid' => $request->get('sid'), 'q' => $search . ($place !== '' ? ' | ' . $place : ''),
                'subject' => $q['subject'], 'city' => $q['city'], 'area' => $q['area'], 'mode' => $mode,
                'results' => $exact,
            ]);
        }
        if (! $cards) {
            return response('');
        }

        return view('home.partials.search-cards', [
            'cards' => $cards,
            // Said once, above the first page of results, when the subject had
            // to be dropped to find anyone.
            'relaxed' => $offset === 0 && ($result['relaxed'] ?? null) === 'subject' ? $q['subject'] : null,
            'counts' => $counts,
        ]);
    }

    $teachers = $this->getHomeTeachers($limit, $offset, $search, $place);
    if ($offset === 0 && ($search !== '' || $place !== '')) {
        \App\Support\SearchEvents::record('search', [
            'sid' => $request->get('sid'), 'q' => $search . ($place !== '' ? ' | ' . $place : ''),
            'results' => $teachers->count(),
        ]);
    }

    return view('home.partials.teacher-cards', compact('teachers'));
}

 public function singlecoursepage($slug){
      $rows = Product::Where('status', 't')->where('slug', $slug)->first(); 
      $metatitle = $rows->meta_title ?? null;
      $metakey = $rows->meta_key ?? null;
      $metadesc = $rows->meta_desc ?? null;

      $totalteacher = Teacher_course::where('cat_id', $rows->cat_id)->count();

      $subteacher = Teacher_course::where('cat_id', $rows->cat_id)->get();

      if($rows->pid=='' && $rows->cid==''){
      

      $product = Product::Where('status', 't')->Where('id','!=', $rows->id)->where('cat_id', $rows->cat_id)->orderBy('id', 'DESC')->get(); 
      $productcount = Product::Where('status', 't')->Where('id','!=', $rows->id)->where('cat_id', $rows->cat_id)->orderBy('id', 'DESC')->count(); 

       }
       else if($rows->pid!='' && $rows->cid=='')
       {
        
        $product = Product::Where('status', 't')->Where('id','!=', $rows->id)->where('pid',$rows->pid)->orderBy('id', 'DESC')->get(); 
        $productcount = Product::Where('status', 't')->Where('id','!=', $rows->id)->where('pid',$rows->pid)->orderBy('id', 'DESC')->count();  
       }
       else if($rows->pid!='' && $rows->cid!='')
       {
      
        $product = Product::Where('status', 't')->Where('id','!=', $rows->id)->where('cid',$rows->cid)->orderBy('id', 'DESC')->get();
        $productcount = Product::Where('status', 't')->Where('id','!=', $rows->id)->where('cid',$rows->cid)->orderBy('id', 'DESC')->count();
       }

     return view('singlecourse', compact('rows','product' , 'productcount', 'totalteacher', 'subteacher','metatitle','metakey','metadesc'));

    }

    public function localTutors(Request $request)
{
    $pincode = trim((string) $request->get('pincode', ''));
    $city    = trim((string) $request->get('city', ''));

    // Four fills the two-up phone grid exactly.
    $limit = 4;

    // Nearest first, then widen. Each step only tops up what the one before it
    // could not fill: a thin pincode used to return its two or three tutors and
    // return straight away, leaving the row half empty even when the same city
    // had plenty more to offer. A tutor already picked is never repeated.
    $steps = [];

    if ($pincode !== '') {
        $steps[] = fn () => $this->baseTeacherQuery()
            ->where('register.pincode', $pincode)
            ->limit($limit)
            ->get();
    }

    if ($city !== '') {
        $steps[] = fn () => $this->baseTeacherQuery()
            ->where('register.city', $city)
            ->limit($limit)
            ->get();
    }

    $steps[] = fn () => $this->getHomeTeachers($limit, 0);

    $teachers = collect();

    foreach ($steps as $step) {
        if ($teachers->count() >= $limit) {
            break;
        }

        $teachers = $teachers->concat($step())->unique('user_id')->values();
    }

    $teachers = $teachers->take($limit);

    return view('home.partials.local-teacher-cards', compact('teachers'));
}

/**
 * Tutors for the "Suggested tutors" cards on a city, area or guide page, in
 * the same shape as the home page's cards (ratings, courses): same pincode
 * first, then the rest of the city, then the home page's picks if the city
 * has none yet.
 */
private function pageTeachers(?string $citySlug, ?string $pincode = null, int $limit = 4)
{
    $picked = collect();
    $names = $citySlug ? \App\Support\CityHub::rawNames('register', $citySlug) : [];

    if ($names && $pincode) {
        $picked = $this->baseTeacherQuery()->whereIn('register.city', $names)
            ->where('register.pincode', $pincode)->limit($limit)->get();
    }
    if ($names && $picked->count() < $limit) {
        $picked = $picked->concat($this->baseTeacherQuery()->whereIn('register.city', $names)
            ->whereNotIn('register.user_id', $picked->pluck('user_id')->all() ?: ['-'])
            ->limit($limit - $picked->count())->get());
    }

    return $picked->count() ? $picked->values() : $this->getHomeTeachers($limit, 0);
}

private function baseTeacherQuery()
{
    $ratingsSub = DB::table('teacher_review')
        ->selectRaw("
            teacher_review.user_id,
            COUNT(*) as reviews_count,
            AVG(teacher_review.rating) as rating_avg
        ")
        ->where('teacher_review.status', 't')
        ->groupBy('teacher_review.user_id');

    return Register::query()
        ->from('register')
                   ->select([
              'register.user_id',
              'register.name',
              'register.avatar',
              'register.address',
              'register.city',
              'register.pincode',
              'register.experience',
              'register.education',
              'register.budget',
              DB::raw('COALESCE(r.reviews_count, 0) as reviews_count'),
              DB::raw('COALESCE(r.rating_avg, 0) as rating_avg'),
            ])
        ->when(Register::hasSampleColumn(), fn ($q) => $q->addSelect('register.is_sample'))
        ->leftJoinSub($ratingsSub, 'r', function ($join) {
            $join->on(
                DB::raw('register.user_id COLLATE utf8mb4_unicode_ci'),
                '=',
                DB::raw('r.user_id COLLATE utf8mb4_unicode_ci')
            );
        })
        ->where('register.join_as', 'teacher')
        ->listable('register')
        ->whereNotNull('register.user_id')
        ->with([
            'courses' => function ($q) {
                $q->select(['id','user_id','pid','cid','cat_id','sub_id'])
                  ->with(['board:id,cat_title','classCategory:id,cat_title','category:id,cat_title']);
            }
        ])
        ->orderByDesc('reviews_count')
        ->orderByDesc('rating_avg');
}

    // ✅ Load more blogs (returns partial HTML)
    public function blogs(Request $request)
    {
        $offset = (int) $request->get('offset', 0);
        $blogs = $this->getHomeBlogs(5, $offset);

		

        return view('home.partials.blog-cards', compact('blogs'));
    }


    public function forgetpage(){

      $page = Page::Where('status', 't')->where('slug', 'forget')->first();
      $metatitle = $page->meta_title ?? null;
      $metakey = $page->meta_keywords ?? null;
      $metadesc = $page->meta_description ?? null;
      return view('forget-password', compact('metatitle','metakey','metadesc'));
    }

     public function loginpage(){

      $page = Page::Where('status', 't')->where('slug', 'login')->first();
      $metatitle = $page->meta_title ?? null;
      $metakey = $page->meta_keywords ?? null;
      $metadesc = $page->meta_description ?? null;
      return view('login', compact('metatitle','metakey','metadesc'));
    }

    public function singleteacherprofile($slug, $slug1,$id){
          // Old profile URLs (/gurugram/teacher/name/MjAyMw==) rendered a second,
          // self-canonical copy of each profile with a bio for a title, competing
          // with /tutor/{city}/{id}/{name}. Send them to the one profile page.
          $teacher = Register::where('user_id', base64_decode($id, true) ?: '')->first();
          $to = $teacher?->profileUrl();
          abort_unless($to, 404);

          return redirect()->to($to, 301);
    }


    public function cityIndex(){
        $city = City::Where('status', 't')->get();
      
       $metatitle = '';
            $metakey = '';
            $metadesc ='';


         return view('city.index', compact('city', 'metatitle','metakey','metadesc')); 
    }

    public function cityShow($slug)
{
    $city = City::where('slug', $slug)->where('status','t')->firstOrFail();

    $areas = City_area::where('status','t')
        ->where('city_id', $city->id)
        ->orderBy('name')
        ->take(9)
        ->get();

    // Every area as a plain link. The cards above stop at nine and fetch the
    // rest by AJAX, which Google does not click, so this list is the only
    // crawlable path from the city hub to most of its area pages.
    $allAreas = City_area::where('status','t')
        ->where('city_id', $city->id)
        ->whereNotNull('slug')
        ->where('slug', '!=', '')
        ->orderBy('name')
        ->get(['id', 'name', 'main_title', 'slug']);

             $metatitle = $city->meta_title;
            $metakey = '';
            $metadesc = $city->meta_desc;

    // Link blocks: tutors, the city's own generated pages by board / exam,
    // neighbouring city pages and guides. See App\Support\CityHub.
    $hubPages   = \App\Support\CityHub::pages($city->slug);
    $hubTracks  = \App\Support\CityHub::byTrack($hubPages);
    $hubTutors  = $this->pageTeachers($city->slug, null, 4);
    $hubCounts  = \App\Support\Geo::counts()[$city->slug] ?? ['tutors' => 0, 'areas' => 0, 'pages' => 0];
    $hubState   = \App\Support\Geo::stateOf($city->slug);
    $hubNearby  = City::where('status', 't')->whereIn('slug', \App\Support\Geo::neighbours($city->slug))->orderBy('city_name')->get(['city_name', 'slug']);
    $hubOthers  = City::where('status', 't')->where('slug', '!=', $city->slug)->whereNotIn('slug', $hubNearby->pluck('slug'))->orderBy('city_name')->get(['city_name', 'slug']);
    $hubGuides  = \App\Support\CityHub::guides($allAreas->pluck('slug')->map(fn ($s) => trim($s, '-'))->all(), 6,
        array_values(array_filter([$city->slug, strtolower((string) \App\Support\Geo::akaOf($city->slug))])));

    return view('city.show', compact('city','areas','allAreas','metatitle','metakey','metadesc',
        'hubPages','hubTracks','hubTutors','hubCounts','hubState','hubNearby','hubOthers','hubGuides'));
}


public function cityAreasLoad(Request $request, $slug)
{
    $city = City::where('slug', $slug)->where('status','t')->firstOrFail();

    $offset = (int) $request->get('offset', 0);
    $q = trim($request->get('q', ''));

    $query = City_area::where('status','t')
        ->where('city_id', $city->id);

    if($q){
        $query->where('main_title', 'like', "%{$q}%");
    }

    $areas = $query->orderBy('name')
        ->skip($offset)
        ->take(9)
        ->get();

    // AJAX request => only cards HTML
    return view('city.partials.area-cards', compact('areas','city'));
}


public function cityAreaShow($citySlug, $areaSlug)
{
    // Duplicate or misplaced area pages go to the right one (config/area_redirects.php).
    if ($to = config('area_redirects.' . $citySlug . '.' . $areaSlug)) {
        return redirect()->to(str_starts_with($to, '/') ? url($to) : url('/city/' . $citySlug . '/' . $to), 301);
    }

    $city = City::where('slug', $citySlug)
        ->where('status', 't')
        ->firstOrFail();

    $area = City_area::with([
            'faqs',
            'review' => function ($q) {
                $q->where('review_status', 't');
            }
        ])
        ->where('slug', $areaSlug)
        ->where('city_id', $city->id)
        ->where('status', 't')
        ->firstOrFail();

    // Nearby areas: same pincode first, then the areas either side of this
    // one alphabetically (societies in one sector tend to sort together),
    // instead of the nine most recently added anywhere in the city.
    $siblings = City_area::where('city_id', $area->city_id)
        ->where('status', 't')
        ->where('id', '!=', $area->id)
        ->whereNotNull('slug')->where('slug', '!=', '')
        ->orderBy('name')
        ->get();

    $samePin = !empty($area->pincode)
        ? $siblings->where('pincode', $area->pincode)
        : collect();

    $pos = $siblings->search(fn ($a) => strcmp((string) $a->name, (string) $area->name) > 0);
    $pos = $pos === false ? $siblings->count() : $pos;
    $around = $siblings->slice(max(0, $pos - 6), 12);

    $relatedAreas = $samePin->concat($around)->unique('id')->take(12)->values();

    // Link blocks for this area: its own generated subject / board pages and
    // its local guide posts. See App\Support\CityHub.
    $areaPages  = \App\Support\CityHub::pagesForArea(\App\Support\CityHub::pages($city->slug), $area);
    $areaGuides = \App\Support\CityHub::guides([trim((string) $area->slug, '-')], 3);
    $areaState  = \App\Support\Geo::stateOf($city->slug);
    // Clean title, H1 and description from the area's name; see CityHub::areaSeo.
    $areaSeo    = \App\Support\CityHub::areaSeo($area, $city->slug, $city->city_name);

    // Tutors nearest first: in the area, travelling here, nearby in the
    // zone, elsewhere in the city, then online tutors from the state and the
    // rest of India, each card labelled with why it is shown, so no page is
    // ever empty (App\Support\TutorCascade).
    $areaName = $areaSeo['name'] ?? (string) $area->name;
    $tutorCards = \App\Support\TutorCascade::forArea($city->slug, $city->city_name, $areaName,
        \App\Support\CityHub::zoneOfArea($city->slug, $city->city_name, $area), (string) ($area->pincode ?? ''));
    $tutors = $tutorCards->pluck('tutor');
    $tutorScope = $tutorCards->contains(fn ($c) => $c['tier'] <= 3) ? 'area' : 'city';

    // The zone block: how home tuition works in this part of the city, its
    // guide, and other areas in the same zone (config/zone_guides.php).
    $zoneName  = \App\Support\CityHub::zoneOfArea($city->slug, $city->city_name, $area);
    $zoneGuide = $zoneName ? config('zone_guides.' . \App\Support\Zones::cityKey($city->city_name) . '.' . $zoneName) : null;
    $zoneAreas = collect();
    if ($zoneGuide) {
        $zoneAreas = \App\Support\CityHub::areaList($city->slug)
            ->filter(fn ($a) => $a->slug !== $area->slug && \App\Support\CityHub::zoneOfArea($city->slug, $city->city_name, $a) === $zoneName)
            ->sortBy(fn ($a) => $a->name, SORT_NATURAL | SORT_FLAG_CASE)->values();
        // The twelve either side of this area, so each page links a different
        // set of neighbours instead of every page the same first twelve.
        $zPos = $zoneAreas->search(fn ($a) => strnatcasecmp($a->name, (string) $area->name) > 0);
        $zPos = $zPos === false ? $zoneAreas->count() : $zPos;
        $zoneAreas = $zoneAreas->slice(max(0, min($zPos - 6, $zoneAreas->count() - 12)), 12)->values();
        $zoneGuide['live'] = ! empty($zoneGuide['guide']) && Blog::where('status', 't')->where('slug', $zoneGuide['guide'])->exists();
    }

    // Anonymised recent requests near this area (App\Support\AreaDemand).
    $areaDemand = \App\Support\AreaDemand::recentFor($city->city_name, $areaName, $zoneName);

    // "{Area} at a glance": facts true for this area only, so neighbouring
    // pages differ in substance (see .claude/skills/nxt-location-modules).
    $neighbours = ($zoneAreas->isNotEmpty() ? $zoneAreas : $relatedAreas)
        ->map(fn ($a) => (object) ['name' => \App\Support\CityHub::cleanAreaName($a->name, $a->slug), 'slug' => $a->slug])->values();
    $glance = [
        'zone' => $zoneName,
        'neighbours' => $neighbours->take(4),
        'pincode' => trim((string) ($area->pincode ?? '')),
        'counts' => \App\Support\TutorCascade::realCountsFor($city->slug, $city->city_name, $areaName,
            $zoneName, (string) ($area->pincode ?? '')),
        'asked' => collect($areaDemand['rows'] ?? [])->pluck('what')->take(3)->all(),
        'sector' => config('area_sectors.' . $city->slug . '.' . trim((string) $area->slug, ' ')),
    ];

    // Guides: the zone's guide first, then two of the city's own guides picked
    // by area, so neighbouring pages do not all list the same three.
    $cityWords = array_values(array_filter([$city->slug, strtolower((string) \App\Support\Geo::akaOf($city->slug))]));
    $cluster = \App\Support\CityHub::guides([], 0, $cityWords)
        ->reject(fn ($g) => str_contains($g->slug, 'tuition-guide'))->values();
    $picked = collect();
    if ($zoneGuide && ! empty($zoneGuide['live'])) {
        $zg = \App\Support\CityHub::guides([], 0, $cityWords)->firstWhere('slug', $zoneGuide['guide']);
        if ($zg) {
            $picked->push($zg);
        }
    }
    if ($cluster->isNotEmpty()) {
        $start = crc32((string) $area->slug) % $cluster->count();
        for ($i = 0; $i < min(2, $cluster->count()); $i++) {
            $picked->push($cluster[($start + $i * 5) % $cluster->count()]);
        }
    }
    $areaGuides = $picked->isNotEmpty() ? $picked->unique('slug')->values() : $areaGuides;

             $metatitle = $city->meta_title;
            $metakey = '';
            $metadesc = $city->meta_desc;

    return view('city.cityarea.single', compact('city', 'area','relatedAreas','tutors','tutorScope','metatitle','metakey','metadesc','areaPages','areaGuides','areaState','areaSeo','zoneName','zoneGuide','zoneAreas','areaDemand','tutorCards','glance','neighbours'));
}
   public function contactpage()
    {
          $page = Page::Where('status', 't')->where('slug', 'contact')->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('contact', compact('page','metatitle','metakey','metadesc'));
    } 


 private function getHomeTeachers(int $limit = 6, int $offset = 0, string $search = '', string $place = '')
{
    $ratingsSub = DB::table('teacher_review')
        ->selectRaw("
            teacher_review.user_id,
            COUNT(*) as reviews_count,
            AVG(teacher_review.rating) as rating_avg
        ")
        ->where('teacher_review.status', 't')
        ->groupBy('teacher_review.user_id');

    $genderFilter = null;
    $search = trim($search);
    $searchLower = strtolower($search);

    $femaleWords = ['female', 'lady', 'woman', 'girl', 'maam', 'mam', 'madam'];
    $maleWords   = ['male', 'sir', 'man', 'boy'];

    // Whole words only: "german" is not a request for a male tutor, and
    // "female" must not also read as "male".
    $wordRx = fn (array $words) => '/\b(?:' . implode('|', array_map(fn ($w) => preg_quote($w, '/'), $words)) . ')\b/i';
    if (preg_match($wordRx($femaleWords), $searchLower)) {
        $genderFilter = 'female';
    } elseif (preg_match($wordRx($maleWords), $searchLower)) {
        $genderFilter = 'male';
    }

    // gender-related words remove from search string
    $cleanSearch = preg_replace($wordRx(array_merge($femaleWords, $maleWords)), ' ', $searchLower);

    $cleanSearch = preg_replace('/\s+/', ' ', $cleanSearch);
    $cleanSearch = trim($cleanSearch);

    $terms = !empty($cleanSearch) ? preg_split('/\s+/', $cleanSearch) : [];

    // -----------------------------------
    // Main query
    // -----------------------------------
    $query = Register::query()
        ->from('register')
        ->select([
            'register.user_id',
            'register.name',
            'register.avatar',
            'register.address',
            'register.city',
            'register.pincode',
            'register.experience',
            'register.education',
            'register.budget',
            'register.gender',
            'register.profile',
            'register.profile_desc',
            'register.pro_desc',
            DB::raw('COALESCE(r.reviews_count, 0) as reviews_count'),
            DB::raw('COALESCE(r.rating_avg, 0) as rating_avg'),
        ])
        ->when(Register::hasSampleColumn(), fn ($q) => $q->addSelect('register.is_sample'))
        ->leftJoinSub($ratingsSub, 'r', function ($join) {
            $join->on(
                DB::raw('register.user_id COLLATE utf8mb4_unicode_ci'),
                '=',
                DB::raw('r.user_id COLLATE utf8mb4_unicode_ci')
            );
        })
        ->where('register.join_as', 'teacher')
        ->listable('register')
        ->whereNotNull('register.user_id')
        ->with([
            'courses' => function ($q) {
                $q->select(['id', 'user_id', 'pid', 'cid', 'cat_id', 'sub_id'])
                  ->with([
                      'board:id,cat_title',
                      'classCategory:id,cat_title',
                      'category:id,cat_title',
                  ]);
            },
            'coursess'
        ]);

    // -----------------------------------
    // Gender filter
    // -----------------------------------
    if (!empty($genderFilter)) {
        $query->whereRaw('LOWER(register.gender) = ?', [strtolower($genderFilter)]);
    }

    // -----------------------------------
    // Search filter
    // -----------------------------------
    if (!empty($cleanSearch)) {
        $query->where(function ($mainQ) use ($cleanSearch, $terms) {

            // -------------------------
            // 1. register table search
            // -------------------------
            $mainQ->where(function ($q) use ($cleanSearch, $terms) {
                $q->where('register.name', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.address', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.city', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.pincode', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.education', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.experience', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.profile', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.profile_desc', 'like', "%{$cleanSearch}%")
                  ->orWhere('register.pro_desc', 'like', "%{$cleanSearch}%");

                foreach ($terms as $term) {
                    $q->orWhere('register.name', 'like', "%{$term}%")
                      ->orWhere('register.address', 'like', "%{$term}%")
                      ->orWhere('register.city', 'like', "%{$term}%")
                      ->orWhere('register.pincode', 'like', "%{$term}%")
                      ->orWhere('register.education', 'like', "%{$term}%")
                      ->orWhere('register.experience', 'like', "%{$term}%")
                      ->orWhere('register.profile', 'like', "%{$term}%")
                      ->orWhere('register.profile_desc', 'like', "%{$term}%")
                      ->orWhere('register.pro_desc', 'like', "%{$term}%");
                }
            });

            // ------------------------------------
            // 2. first table search: courses
            // ------------------------------------
            $mainQ->orWhereHas('courses', function ($cq) use ($cleanSearch, $terms) {
                $cq->where(function ($inner) use ($cleanSearch, $terms) {

                    $inner->whereHas('board', function ($bq) use ($cleanSearch, $terms) {
                        $bq->where('cat_title', 'like', "%{$cleanSearch}%");
                        foreach ($terms as $term) {
                            $bq->orWhere('cat_title', 'like', "%{$term}%");
                        }
                    })
                    ->orWhereHas('classCategory', function ($clq) use ($cleanSearch, $terms) {
                        $clq->where('cat_title', 'like', "%{$cleanSearch}%");
                        foreach ($terms as $term) {
                            $clq->orWhere('cat_title', 'like', "%{$term}%");
                        }
                    })
                    ->orWhereHas('category', function ($catq) use ($cleanSearch, $terms) {
                        $catq->where('cat_title', 'like', "%{$cleanSearch}%");
                        foreach ($terms as $term) {
                            $catq->orWhere('cat_title', 'like', "%{$term}%");
                        }
                    });
                });
            });

            // ------------------------------------
            // 3. second table search: coursess
            // ------------------------------------
            $mainQ->orWhereHas('coursess', function ($sq) use ($cleanSearch, $terms) {
                $sq->where(function ($q) use ($cleanSearch, $terms) {
                    $q->where('subject', 'like', "%{$cleanSearch}%")
                      ->orWhere('board', 'like', "%{$cleanSearch}%")
                      ->orWhere('for_class', 'like', "%{$cleanSearch}%")
                      ->orWhere('class_type', 'like', "%{$cleanSearch}%")
                      ->orWhere('mode', 'like', "%{$cleanSearch}%");

                    foreach ($terms as $term) {
                        $q->orWhere('subject', 'like', "%{$term}%")
                          ->orWhere('board', 'like', "%{$term}%")
                          ->orWhere('for_class', 'like', "%{$term}%")
                          ->orWhere('class_type', 'like', "%{$term}%")
                          ->orWhere('mode', 'like', "%{$term}%");
                    }
                });
            });
        });
    }

    // -----------------------------------
    // Place filter (AND) — the hero's "Sector or city" field. Subject terms
    // are OR-matched above; the place must actually narrow the result, or
    // "maths gurgaon" returns maths tutors from every city.
    // -----------------------------------
    $place = trim($place);
    if ($place !== '') {
        $placeTerms = preg_split('/\s+/', $place);
        $query->where(function ($pq) use ($place, $placeTerms) {
            $pq->where('register.address', 'like', "%{$place}%")
               ->orWhere('register.city', 'like', "%{$place}%")
               ->orWhere('register.pincode', 'like', "%{$place}%");
            foreach ($placeTerms as $term) {
                $pq->orWhere('register.address', 'like', "%{$term}%")
                   ->orWhere('register.city', 'like', "%{$term}%")
                   ->orWhere('register.pincode', 'like', "%{$term}%");
            }
        });
    }

    return $query
        ->realFirst('register')
        ->orderByDesc('reviews_count')
        ->orderByDesc('rating_avg')
        ->offset($offset)
        ->limit($limit)
        ->get();
}
    // ==========================
    // Blogs query (Latest)
    // ==========================
    private function getHomeBlogs(int $limit = 6, int $offset = 0)
    {
        return Blog::query()
            ->from('blog_managment')
            ->select(['id','title','slug','avatar','meta_desc','date'])
            ->where('status', 't')
            ->orderByDesc('id')
            ->offset($offset)
            ->limit($limit)
            ->get();
    }

 
    public function showsingletutor($user_id)
{
    // ✅ Decrypt safely
    try {
        $decodedUserId = decrypt($user_id);
    } catch (\Throwable $e) {
        abort(404);
    }



    // ✅ Tutor fetch (Register table)
    $tutor = Register::query()
        ->from('register')
        ->where('user_id', $decodedUserId)
        ->where('join_as', 'teacher')
        ->publiclyVisible()
        ->with([
            'courses' => function ($q) {
                $q->select(['id','user_id','pid','cid','cat_id','sub_id'])
                  ->with([
                      'board:id,cat_title',
                      'classCategory:id,cat_title',
                      'category:id,cat_title',
                  ]);
            },
            'coursess' => function ($q) {
                $q->select(['id','user_id','subject','board','for_class','class_type','mode','status','date']);
            },
        ])
        ->firstOrFail();

    // A tutor with no city has no valid public URL — profileUrl() returns null
    // for exactly this case. Rendering anyway is what produced the 500s behind
    // every "/tutor/city/..." URL, "city" being the literal fallback string the
    // sitemap used to write out. Serve the honest answer instead: there is no
    // page here until the record has a city.
    if (! $tutor->profileUrl()) {
        abort(404);
    }

    // ✅ Use effective courses everywhere (fallback ready)
    $effective = $tutor->effective_courses;

    // ✅ Simple “chip” build from first effective course
    $chip = 'Verified Tutor';
    if ($effective && $effective->count()) {
        $c = $effective->first();
        $parts = [];

        // Teacher_course_managment model has relations
        if ($c instanceof \App\Models\Teacher_course) {
            if (!empty($c->board?->cat_title))    $parts[] = $c->board->cat_title;
            if (!empty($c->category?->cat_title)) $parts[] = $c->category->cat_title;
        }
        // Teacher_courses model has strings
        else {
            if (!empty($c->board))   $parts[] = $c->board;
            if (!empty($c->subject)) $parts[] = $c->subject;
        }

        if (count($parts)) $chip = implode(' + ', array_slice($parts, 0, 2));
    }

    // ✅ Avatar resolve
    $avatar = $tutor->avatar ?? '';
    if ($avatar && str_starts_with($avatar, 'http')) {
        $img = $avatar;
    } else {
        $img = $avatar
            ? \App\Support\TutorPhoto::url($avatar)
            : asset('frount/assets/images/tutor1.jpg');
    }

    // ✅ Related tutors (same city)
    // Same shape the home cards use: ratings joined, courses eager-loaded,
    // so the shared tutor-card partial can render these too.
    $relatedRatings = DB::table('teacher_review')
        ->selectRaw('teacher_review.user_id, COUNT(*) as reviews_count, AVG(teacher_review.rating) as rating_avg')
        ->where('teacher_review.status', 't')
        ->groupBy('teacher_review.user_id');

    $relatedTutors = Register::query()
        ->from('register')
        ->select([
            'register.user_id','register.name','register.avatar',
            'register.address','register.city',
            DB::raw('COALESCE(rr.reviews_count, 0) as reviews_count'),
            DB::raw('COALESCE(rr.rating_avg, 0) as rating_avg'),
        ])
        ->leftJoinSub($relatedRatings, 'rr', function ($join) {
            $join->on(
                DB::raw('register.user_id COLLATE utf8mb4_unicode_ci'),
                '=',
                DB::raw('rr.user_id COLLATE utf8mb4_unicode_ci')
            );
        })
        ->with(['courses' => function ($q) {
            $q->select(['id','user_id','pid','cid','cat_id','sub_id'])
              ->with(['board:id,cat_title','classCategory:id,cat_title','category:id,cat_title']);
        }])
        ->where('register.join_as', 'teacher')
        ->listable('register')
        ->where('register.city', $tutor->city)
        ->where('register.user_id', '!=', $tutor->user_id)
        ->orderByDesc('rr.reviews_count')
        ->orderByDesc('register.id')
        // Four, to fill the .suggested-grid row exactly — the same grid and the
        // same count the home page rows use. Three left an empty fourth slot.
        ->limit(4)
        ->get();

    // ✅ Latest blogs (optional)
    $latestBlogs = Blog::query()
        ->from('blog_managment')
        ->select(['id','title','slug','avatar'])
        ->where('status', 't')
        ->orderByDesc('id')
        ->limit(6)
        ->get();

    // ✅ canonical — must be stable and self-referencing.
    // encrypt() was used here: its random IV produced a different URL on
    // every render, so no tutor page ever pointed at itself.
    $canonical = $tutor->profileUrl() ?? url()->current();

    // ✅ Reviews (for bottom sheet / horizontal cards)
    $reviews = $tutor->reviews()
        ->where('status', 't')
        ->orderByDesc('id')
        ->limit(10)
        ->get();

    $reviewsQ = $tutor->reviews()->where('status', 't');

    $reviewCount = (int) $reviewsQ->count();
    $avgRating   = (float) $reviewsQ->avg('rating');
    $avgRating   = $avgRating ? round($avgRating, 1) : null;

    // Category ratings
    $ratingCards = [
        'Expertise'      => (float) $reviewsQ->avg('expertise'),
        'Patience'       => (float) $reviewsQ->avg('patience'),
        'Reliability'    => (float) $reviewsQ->avg('reliability'),
        'Communication'  => (float) $reviewsQ->avg('communication'),
    ];

    foreach ($ratingCards as $k => $v) {
        $ratingCards[$k] = $v ? round($v, 1) : null;
    }

    $topTags = $this->topReviewTags((string) $tutor->user_id);


    $subjectsOffered = [];
    if ($effective && $effective->count()) {
        foreach ($effective as $c) {

            // teacher_courses table
            if ($c instanceof \App\Models\Teacher_courses) {
                if (!empty($c->subject)) $subjectsOffered[] = $c->subject;
                continue;
            }

            // teacher_course_managment table
            if (!empty($c->subjects) && $c->subjects->count()) {
                foreach ($c->subjects as $s) {
                    if (!empty($s->title)) $subjectsOffered[] = $s->title;
                }
            }

            if (!empty($c->category?->cat_title)) $subjectsOffered[] = $c->category->cat_title;
        }
    }

    $subjectsOffered = array_values(array_unique(array_filter($subjectsOffered)));
    $subjectsOffered = array_slice($subjectsOffered, 0, 8);

    // ✅ Hourly rate / budget
    // An hourly range only when the tutor stated one ("3000-5000 per hour").
    // This used to print budget and budget+300 as an invented range.
    $fee = (new \App\NxtAi\Support\PublicTutorFieldMapper)->parseFee((string) ($tutor->budget ?? ''));
    $hourlyMin = ! empty($fee['per_hour']) ? $fee['min'] : null;
    $hourlyMax = ! empty($fee['per_hour']) && $fee['max'] !== $fee['min'] ? $fee['max'] : null;
      
      $metatitle =$tutor->profile ?? null;
      $metakey ='';
      $metadesc =$tutor->profile_desc ?? null;

    // A profile carrying another tutor's bio stays reachable but is kept out of
    // the index until the tutor writes their own (App\Support\CopiedBios).
    $metarobots = (\App\Support\CopiedBios::has((string) $tutor->user_id) || ! empty($tutor->is_sample)) ? 'noindex, follow' : null;
    return view('tutor.show', compact('metarobots', 
        'tutor',
        'img',
        'chip',
        'relatedTutors',
        'latestBlogs',
        'canonical',
        'reviews',
        'ratingCards',
        'avgRating',
        'reviewCount',
        'topTags',
        'subjectsOffered',
        'hourlyMin',
        'hourlyMax',
      	'metatitle',
      	'metadesc',
        'metakey'
    ));
}

  
  
   public function showsingletutornew($city, $user_id, $name)
{
    // ✅ Decrypt safely
    $base64 = strtr($user_id, '-_', '+/');
$base64 .= str_repeat('=', (4 - strlen($base64) % 4) % 4);

$decoded = base64_decode($base64, true);

if (!$decoded || !str_ends_with($decoded, '-nxt')) {
    abort(404);
}

$realUserId = str_replace('-nxt', '', $decoded);

    // ✅ Tutor fetch (Register table)
    $tutor = Register::query()
        ->from('register')
        ->where('user_id', $realUserId)
        ->where('join_as', 'teacher')
        ->publiclyVisible()
        ->with([
            'courses' => function ($q) {
                $q->select(['id','user_id','pid','cid','cat_id','sub_id'])
                  ->with([
                      'board:id,cat_title',
                      'classCategory:id,cat_title',
                      'category:id,cat_title',
                  ]);
            },
            'coursess' => function ($q) {
                $q->select(['id','user_id','subject','board','for_class','class_type','mode','status','date']);
            },
        ])
        ->firstOrFail();

    // A tutor with no city has no valid public URL — profileUrl() returns null
    // for exactly this case. Rendering anyway is what produced the 500s behind
    // every "/tutor/city/..." URL, "city" being the literal fallback string the
    // sitemap used to write out. Serve the honest answer instead: there is no
    // page here until the record has a city.
    if (! $tutor->profileUrl()) {
        abort(404);
    }

    // One URL per tutor: a stale city or name slug (an old link, or a name
    // corrected since) 301s to the canonical profile URL.
    $canonicalPath = parse_url($tutor->profileUrl(), PHP_URL_PATH);
    if ($canonicalPath && '/' . ltrim(request()->path(), '/') !== $canonicalPath) {
        return redirect()->to($tutor->profileUrl(), 301);
    }

    // ✅ Use effective courses everywhere (fallback ready)
    $effective = $tutor->effective_courses;

    // ✅ Simple “chip” build from first effective course
    $chip = 'Verified Tutor';
    if ($effective && $effective->count()) {
        $c = $effective->first();
        $parts = [];

        // Teacher_course_managment model has relations
        if ($c instanceof \App\Models\Teacher_course) {
            if (!empty($c->board?->cat_title))    $parts[] = $c->board->cat_title;
            if (!empty($c->category?->cat_title)) $parts[] = $c->category->cat_title;
        }
        // Teacher_courses model has strings
        else {
            if (!empty($c->board))   $parts[] = $c->board;
            if (!empty($c->subject)) $parts[] = $c->subject;
        }

        if (count($parts)) $chip = implode(' + ', array_slice($parts, 0, 2));
    }

    // ✅ Avatar resolve
    $avatar = $tutor->avatar ?? '';
    if ($avatar && str_starts_with($avatar, 'http')) {
        $img = $avatar;
    } else {
        $img = $avatar
            ? \App\Support\TutorPhoto::url($avatar)
            : asset('frount/assets/images/tutor1.jpg');
    }

    // ✅ Related tutors (same city)
    // Same shape the home cards use: ratings joined, courses eager-loaded,
    // so the shared tutor-card partial can render these too.
    $relatedRatings = DB::table('teacher_review')
        ->selectRaw('teacher_review.user_id, COUNT(*) as reviews_count, AVG(teacher_review.rating) as rating_avg')
        ->where('teacher_review.status', 't')
        ->groupBy('teacher_review.user_id');

    $relatedTutors = Register::query()
        ->from('register')
        ->select([
            'register.user_id','register.name','register.avatar',
            'register.address','register.city',
            DB::raw('COALESCE(rr.reviews_count, 0) as reviews_count'),
            DB::raw('COALESCE(rr.rating_avg, 0) as rating_avg'),
        ])
        ->leftJoinSub($relatedRatings, 'rr', function ($join) {
            $join->on(
                DB::raw('register.user_id COLLATE utf8mb4_unicode_ci'),
                '=',
                DB::raw('rr.user_id COLLATE utf8mb4_unicode_ci')
            );
        })
        ->with(['courses' => function ($q) {
            $q->select(['id','user_id','pid','cid','cat_id','sub_id'])
              ->with(['board:id,cat_title','classCategory:id,cat_title','category:id,cat_title']);
        }])
        ->where('register.join_as', 'teacher')
        ->listable('register')
        ->where('register.city', $tutor->city)
        ->where('register.user_id', '!=', $tutor->user_id)
        ->orderByDesc('rr.reviews_count')
        ->orderByDesc('register.id')
        // Four, to fill the .suggested-grid row exactly — the same grid and the
        // same count the home page rows use. Three left an empty fourth slot.
        ->limit(4)
        ->get();

    // ✅ Latest blogs (optional)
    $latestBlogs = Blog::query()
        ->from('blog_managment')
        ->select(['id','title','slug','avatar'])
        ->where('status', 't')
        ->orderByDesc('id')
        ->limit(6)
        ->get();

    // ✅ canonical — must be stable and self-referencing.
    // encrypt() was used here: its random IV produced a different URL on
    // every render, so no tutor page ever pointed at itself.
    $canonical = $tutor->profileUrl() ?? url()->current();

    // ✅ Reviews (for bottom sheet / horizontal cards)
    $reviews = $tutor->reviews()
        ->where('status', 't')
        ->orderByDesc('id')
        ->limit(10)
        ->get();

    $reviewsQ = $tutor->reviews()->where('status', 't');

    $reviewCount = (int) $reviewsQ->count();
    $avgRating   = (float) $reviewsQ->avg('rating');
    $avgRating   = $avgRating ? round($avgRating, 1) : null;

    // Category ratings
    $ratingCards = [
        'Expertise'      => (float) $reviewsQ->avg('expertise'),
        'Patience'       => (float) $reviewsQ->avg('patience'),
        'Reliability'    => (float) $reviewsQ->avg('reliability'),
        'Communication'  => (float) $reviewsQ->avg('communication'),
    ];

    foreach ($ratingCards as $k => $v) {
        $ratingCards[$k] = $v ? round($v, 1) : null;
    }

    $topTags = $this->topReviewTags((string) $tutor->user_id);

    // ✅ Subjects offered from effective courses
    $subjectsOffered = [];
    if ($effective && $effective->count()) {
        foreach ($effective as $c) {

            // teacher_courses table
            if ($c instanceof \App\Models\Teacher_courses) {
                if (!empty($c->subject)) $subjectsOffered[] = $c->subject;
                continue;
            }

            // teacher_course_managment table
            if (!empty($c->subjects) && $c->subjects->count()) {
                foreach ($c->subjects as $s) {
                    if (!empty($s->title)) $subjectsOffered[] = $s->title;
                }
            }

            if (!empty($c->category?->cat_title)) $subjectsOffered[] = $c->category->cat_title;
        }
    }

    $subjectsOffered = array_values(array_unique(array_filter($subjectsOffered)));
    $subjectsOffered = array_slice($subjectsOffered, 0, 8);

    // ✅ Hourly rate / budget
    // An hourly range only when the tutor stated one ("3000-5000 per hour").
    // This used to print budget and budget+300 as an invented range.
    $fee = (new \App\NxtAi\Support\PublicTutorFieldMapper)->parseFee((string) ($tutor->budget ?? ''));
    $hourlyMin = ! empty($fee['per_hour']) ? $fee['min'] : null;
    $hourlyMax = ! empty($fee['per_hour']) && $fee['max'] !== $fee['min'] ? $fee['max'] : null;
      
      $metatitle =$tutor->profile ?? null;
      $metakey ='';
      $metadesc =$tutor->profile_desc ?? null;

    // A profile carrying another tutor's bio stays reachable but is kept out of
    // the index until the tutor writes their own (App\Support\CopiedBios).
    $metarobots = (\App\Support\CopiedBios::has((string) $tutor->user_id) || ! empty($tutor->is_sample)) ? 'noindex, follow' : null;
    return view('tutor.show', compact('metarobots', 
        'tutor',
        'img',
        'chip',
        'relatedTutors',
        'latestBlogs',
        'canonical',
        'reviews',
        'ratingCards',
        'avgRating',
        'reviewCount',
        'topTags',
        'subjectsOffered',
        'hourlyMin',
        'hourlyMax',
      	'metatitle',
      	'metadesc',
        'metakey'
    ));
}


   public function tutorsIndex(Request $request)
{
    $limit = 8;

    // Structured filters ("More filters") use the same ranked search as the
    // home page and NXT AI; a plain name/area search keeps the old list.
    $filtered = $this->filteredTutorCards($request, 0, 9);

    $teachers = $filtered === null
        ? $this->tutorsListQuery($request)->limit($limit)->get()
        : collect();

            $metatitle = '';
            $metakey = '';
            $metadesc = '';

    return view('tutor.index', compact('teachers','metatitle','metakey','metadesc','filtered'));
}

public function tutorsLoad(Request $request)
{
    $limit  = 8;
    $offset = (int) $request->get('offset', 0);

    $filtered = $this->filteredTutorCards($request, $offset, 6);
    if ($filtered !== null) {
        return $filtered ? view('subjects.partials.tutor-cards', ['cards' => $filtered])->render() : '';
    }

    $teachers = $this->tutorsListQuery($request)
        ->offset($offset)
        ->limit($limit)
        ->get();

    // ✅ Return only cards HTML (same as genpage)
    return view('tutor.partials.cards', compact('teachers'))->render();
}

/**
 * Find Tutors with structured filters: subject, board, class, mode, gender,
 * budget, experience, rating, city and area. Null when none is set, so the
 * plain listing is used.
 *
 * @return array<int,array<string,mixed>>|null tutor cards for this page
 */
private function filteredTutorCards(Request $request, int $offset, int $limit): ?array
{
    $keys = ['subject', 'board', 'class', 'mode', 'gender', 'max_fee', 'min_exp', 'min_rating', 'city', 'area'];
    if (! collect($keys)->contains(fn ($k) => trim((string) $request->get($k, '')) !== '')) {
        return null;
    }

    $text = fn ($k, $max = 60) => ($v = trim(mb_substr(strip_tags((string) $request->get($k, '')), 0, $max))) === '' ? null : $v;
    $subject = $text('subject');
    if ($subject) {
        $parsed = \App\Support\SearchQuery::parse($subject);
        $subject = $parsed['subject'] ?? $subject;
    }
    $city = $text('city');
    if ($city) {
        $city = \App\Support\Zones::cityOf($city) ?? $city;
    }

    $result = app(\App\NxtAi\Services\TutorSearchService::class)->search(new \App\NxtAi\DTO\TutorSearchCriteria(
        city: $city,
        area: $text('area', 100),
        subject: $subject,
        classLevel: $text('class') ? \App\NxtAi\Support\ClassNormalizer::normalize($text('class')) : null,
        board: in_array($request->get('board'), ['CBSE', 'ICSE', 'ISC', 'IB', 'IGCSE', 'State Board'], true) ? $request->get('board') : null,
        teachingMode: in_array($request->get('mode'), ['home', 'online'], true) ? $request->get('mode') : null,
        gender: in_array($request->get('gender'), ['male', 'female'], true) ? $request->get('gender') : null,
        minExperience: $request->filled('min_exp') ? max(0, min(40, (int) $request->get('min_exp'))) : null,
        maxFee: $request->filled('max_fee') ? max(100, min(20000, (int) $request->get('max_fee'))) : null,
        minRating: $request->filled('min_rating') ? max(0, min(5, (float) $request->get('min_rating'))) : null,
        limit: min($offset + $limit, 60),
    ));

    if ($offset === 0) {
        \App\Support\SearchEvents::record('search', [
            'q' => 'filters: ' . http_build_query($request->only($keys)),
            'subject' => $subject, 'city' => $city, 'area' => $text('area', 100), 'mode' => $request->get('mode'),
            'results' => ($result['relaxed'] ?? null) ? 0 : (int) ($result['matched'] ?? 0),
        ]);
    }

    // Filters are exact: a relaxed (subject dropped) result is no result here.
    return ($result['relaxed'] ?? null) ? [] : array_slice($result['cards'] ?? [], $offset, $limit);
}

private function tutorsListQuery(Request $request)
{
    $q = Register::query()
        ->where('join_as', 'teacher')          // ✅ change if your role value different
        ->listable()
        ->orderByDesc('id')
        ->with(['courses.board','courses.category']); // optional if you have relations

    if ($request->filled('q')) {
        $search = $request->q;
        $q->where(function($qq) use ($search){
            $qq->where('name','like',"%$search%")
               ->orWhere('address','like',"%$search%")
               ->orWhere('city','like',"%$search%");
        });
    }

    if ($request->filled('city')) {
        $q->where('city', $request->city);
    }

    if ($request->filled('subject')) {
        $subject = $request->subject;
        $q->whereHas('courses', function($qq) use ($subject){
            $qq->whereHas('category', fn($c)=>$c->where('cat_title', $subject));
        });
    }

    if ($request->get('sort') === 'rating') {
        $q->orderByDesc('rating_avg');
    }

    return $q;
}

public function blogIndex(Request $request)
{
    $limit = 9;

    $blogs = $this->blogListQuery($request)->limit($limit)->get();

    // "Start here": the parent guides written to be read first, in this order.
    // Missing ones are simply skipped.
    $featuredSlugs = ['demo-class-checklist-for-parents', 'home-tutor-vs-online-tutor', 'how-nxtutors-uses-ai', 'tutortwin-whatsapp-homework-help-guide'];
    $featured = $request->filled('q') ? collect() : Blog::query()->where('status', 't')->whereIn('slug', $featuredSlugs)->get()
        ->sortBy(fn ($b) => array_search(trim((string) $b->slug), $featuredSlugs, true))->values();

      $page = Page::Where('status', 't')->where('slug', 'blog')->first();
      $metatitle = $page->meta_title ?? null;
      $metakey = $page->meta_keywords ?? null;
      $metadesc = $page->meta_description ?? null;

    return view('blog.index', compact('blogs','featured','metatitle','metakey','metadesc'));
}

public function democlassIndex(){
          $page = Page::Where('status', 't')->where('slug', 'demo-class')->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('demo-class' , compact('page','metatitle','metakey','metadesc'));
    }

public function pricingguideIndex(){
          $page = Page::Where('status', 't')->where('slug', 'pricing-guide')->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('pricing-guide' , compact('page','metatitle','metakey','metadesc'));
    }

public function faqsIndex(){
          $page = Page::Where('status', 't')->where('slug', 'faqs')->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('faqs' , compact('page','metatitle','metakey','metadesc'));
    }

public function termsconditionsIndex(){
          $page = Page::Where('status', 't')->where('slug', 'terms-conditions')->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('terms-conditions' , compact('page','metatitle','metakey','metadesc'));
    }

public function privacypolicyIndex(){
          $page = Page::Where('status', 't')->where('slug', 'privacy-policy')->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('privacy-policy' , compact('page','metatitle','metakey','metadesc'));
    }

public function blogLoad(Request $request)
{
    $limit  = 6;
    $offset = (int) $request->get('offset', 0);

    $blogs = $this->blogListQuery($request)->offset($offset)->limit($limit)->get();

    // ✅ return ONLY cards html
    return view('blog.partials.cards', compact('blogs'))->render();
}

private function blogListQuery(Request $request)
{
    $q = Blog::query()->where('status', 't')->orderByDesc('id');

    // The ~80 near-identical locality posts ("... in South City II: Best Home
    // Tutors Near You") buried the national guides; they have their own
    // section and area pages. A search still finds them.
    if (! $request->filled('q') && ! $request->boolean('local')) {
        $q->where('slug', 'not like', '%-near-you%')
          ->where('slug', 'not like', '%best-home-tutors%')
          ->where('slug', 'not like', '%coaching-at-home%');
    }

    if ($request->filled('q')) {
        $search = $request->q;
        $q->where(function($qq) use ($search){
            $qq->where('title','like',"%$search%")
               ->orWhere('short_desc','like',"%$search%")
               ->orWhere('bdesc','like',"%$search%");
        });
    }

    if ($request->filled('category')) {
        // ✅ agar category relation nahi hai, is block ko hata do
        $q->whereHas('category', fn($c)=>$c->where('slug', $request->category));
    }

    return $q;
}

}
