<?php

namespace App\Http\Controllers;

use App\Models\GeneratedPage;
use App\Models\Register;
use App\Models\Blog;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class GeneratedPageController extends Controller
{
    

public function show($slug)
{
    $page = GeneratedPage::query()
        ->where('slug', $slug)
        ->where('status', 'published')
        ->firstOrFail();

        $payload = is_array($page->payload) ? $page->payload : [];

        $indexFlag = (string) data_get($payload, 'index_flag', 'Index');
        $canonicalTarget = (string) data_get($payload, 'canonical_target', '');

        $isNoindex = ($indexFlag === 'Noindex');

        // canonical_target names a hub page like "/gurugram/sector-56/mathematics"
        // that this project never built a route for, so every one of these
        // pointed at a 404. Google honoured it: it dropped the page it was told
        // was a duplicate and reported the target as "Not found (404)". That is
        // thousands of pages surrendering themselves to a URL that does not exist.
        //
        // So only follow the target if the app can actually serve it, and point
        // at ourselves otherwise. Asking the router rather than hardcoding the
        // decision means that if the hub pages do get built later these
        // canonicals start pointing at them on their own, and can never again
        // name a 404.
        $canonicalUrl = url()->current();

        if ($canonicalTarget !== '') {
            try {
                app('router')->getRoutes()->match(
                    \Illuminate\Http\Request::create($canonicalTarget)
                );
                $canonicalUrl = url($canonicalTarget);
            } catch (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e) {
                // Phantom target: keep the self-referencing canonical set above.
            }
        }

    $country = trim($page->country ?: 'India');
    $state   = trim($page->state ?: '');
    $city    = trim($page->city ?: '');

    $location = trim((string) $page->location);        // "57" or "Sector 57"
    $hyper    = trim((string) $page->hyper_location);  // "Jalvau tower"

    // ✅ If location is only number -> Sector 57
    if ($location !== '' && preg_match('/^\d{1,3}$/', $location)) {
        $location = 'Sector ' . $location;
    }

    // ✅ Normalize "sec 57" / "sector-57"
    if ($location !== '') {
        $location = preg_replace('/\bsec(?:tor)?\s*[-]?\s*(\d{1,3})\b/i', 'Sector $1', $location);
        $location = preg_replace('/\s+/', ' ', $location);
        $location = trim($location);
    }

    // ✅ For map: LOCK to sector only (hyper remove)
    $mapParts = array_values(array_unique(array_filter([
        $location,
        $city,
        $state,
        $country,
    ], fn($v) => !empty(trim($v)))));

    $mapQuery = implode(', ', $mapParts);

    // ✅ iframe-compatible embed
    $mapEmbedUrl = "https://www.google.com/maps?q=" . urlencode($mapQuery) . "&output=embed&z=16";

    // ✅ Teachers / Blogs
    $teachers = Cache::remember(
        "genpage:{$page->id}:teachers:limit6:offset0",
        now()->addMinutes(20),
        fn () => $this->getTeachersForPage($page, 6, 0)
    );

    $blogs = Cache::remember(
        "genpage:{$page->id}:blogs:limit6:offset0",
        now()->addHours(6),
        fn () => $this->getBlogsForPage($page, 6, 0)
    );

    $relatedPages = Cache::remember(
    "genpage:{$page->id}:related:15",
    now()->addHours(6),
    function () use ($page) {

        $limit = 15;

        // 1) same city + same category + same service_mode (best relevance)
        $q = GeneratedPage::query()
            ->where('status', 'published')
            ->where('id', '!=', $page->id)
            ->where('city', $page->city)
            ->when(!empty($page->category), fn($qq) => $qq->where('category', $page->category))
            ->when(!empty($page->service_mode), fn($qq) => $qq->where('service_mode', $page->service_mode));

        // Prefer same location first
        $sameLocation = (clone $q)
            ->where('location', $page->location)
            ->latest()
            ->take(8)
            ->get(['id','slug','title','city','location','page_type']);

        $need = $limit - $sameLocation->count();

        // 2) fallback: same city (different locations)
        $sameCityMore = collect();
        if ($need > 0) {
            $sameCityMore = (clone $q)
                ->where('location', '!=', $page->location)
                ->latest()
                ->take($need)
                ->get(['id','slug','title','city','location','page_type']);
        }

        $merged = $sameLocation->concat($sameCityMore);

        // 3) final fallback: same state (if still less)
        $need2 = $limit - $merged->count();
        if ($need2 > 0) {
            $stateMore = GeneratedPage::query()
                ->where('status','published')
                ->where('id','!=',$page->id)
                ->where('state', $page->state)
                ->latest()
                ->take($need2)
                ->get(['id','slug','title','city','location','page_type']);

            $merged = $merged->concat($stateMore);
        }

        // unique by id + limit
        return $merged->unique('id')->take($limit)->values();
    }
);
  
   $metatitle = $page->meta_title;
            $metakey = '';
            $metadesc =  $page->meta_description;

    return view('pages.show', compact('page', 'teachers', 'blogs', 'mapQuery', 'mapEmbedUrl','metatitle','metakey','metadesc', 'hyper','relatedPages','isNoindex', 'canonicalUrl', 'indexFlag'));
}

    
    // ✅ Load More Teachers (returns HTML partial)
    public function teachers($slug)
    {
        $page = GeneratedPage::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $offset = (int) request()->get('offset', 0);

        $teachers = $this->getTeachersForPage($page, 6, $offset);

        return view('pages.partials.teacher-cards', [
            'teachers' => $teachers,
            'page' => $page, // ✅ FIX
        ]);
    }

    // ✅ Load More Blogs (returns HTML partial)
    public function blogs($slug)
    {
        $page = GeneratedPage::query()
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $offset = (int) request()->get('offset', 0);

        $blogs = $this->getBlogsForPage($page, 6, $offset);

        return view('pages.partials.blog-cards', [
            'blogs' => $blogs,
            'page'  => $page, // ✅ FIX
        ]);
    }

    private function getTeachersForPage($page, int $limit = 12, int $offset = 0)
    {
        $city  = trim((string) ($page->city ?? ''));
        $state = trim((string) ($page->state ?? ''));
        $location      = trim((string) ($page->location ?? ''));
        $hyperLocation = trim((string) ($page->hyper_location ?? ''));

        $ratingsSub = DB::table('teacher_review')
            ->selectRaw("
                teacher_review.user_id,
                COUNT(*) as reviews_count,
                AVG(teacher_review.rating) as rating_avg
            ")
            ->where('teacher_review.status', 't')
            ->groupBy('teacher_review.user_id');

        $base = Register::query()
            ->from('register')
            ->select([
                'register.user_id',
                'register.name',
                'register.avatar',
                'register.address',
                'register.city',
                'register.state',
                DB::raw('COALESCE(r.reviews_count, 0) as reviews_count'),
                DB::raw('COALESCE(r.rating_avg, 0) as rating_avg'),
            ])
            ->leftJoinSub($ratingsSub, 'r', function ($join) {
                $join->on(
                    DB::raw('register.user_id COLLATE utf8mb4_unicode_ci'),
                    '=',
                    DB::raw('r.user_id COLLATE utf8mb4_unicode_ci')
                );
            })
            ->where('register.join_as', 'teacher')
            ->where('register.status', 't')
            ->whereNotNull('register.user_id')
            ->with([
                'courses' => function ($q) {
                    $q->select(['id','user_id','pid','cid','cat_id','sub_id'])
                      ->with([
                          'board:id,cat_title',
                          'classCategory:id,cat_title',
                          'category:id,cat_title',
                      ]);
                }
            ]);

        // Mode 1: city + address match
        $q1 = (clone $base);
        if ($city !== '') $q1->where('register.city', $city);

        if ($location !== '' || $hyperLocation !== '') {
            $q1->where(function ($qq) use ($location, $hyperLocation) {
                if ($hyperLocation !== '') $qq->orWhere('register.address', 'like', "%{$hyperLocation}%");
                if ($location !== '')      $qq->orWhere('register.address', 'like', "%{$location}%");
            });
        }

        $res = $q1->orderByDesc('reviews_count')
            ->orderByDesc('rating_avg')
            ->offset($offset)->limit($limit)->get();

        if ($res->isNotEmpty()) return $res;

        // Mode 2: city fallback
        $q2 = (clone $base);
        if ($city !== '') $q2->where('register.city', $city);

        $res = $q2->orderByDesc('reviews_count')
            ->orderByDesc('rating_avg')
            ->offset($offset)->limit($limit)->get();

        if ($res->isNotEmpty()) return $res;

        // Mode 3: state fallback
        $q3 = (clone $base);
        if ($state !== '') $q3->where('register.state', $state);

        return $q3->orderByDesc('reviews_count')
            ->orderByDesc('rating_avg')
            ->offset($offset)->limit($limit)->get();
    }

    private function getBlogsForPage($page, int $limit = 6, int $offset = 0)
    {
        $city = trim((string) ($page->city ?? ''));
        $loc  = trim((string) ($page->location ?? ''));
        $kw   = trim((string) ($page->primary_keyword ?? ''));

        $mix = trim($kw.' '.$loc.' '.$city);

        $tokens = collect(preg_split('/\s+/', mb_strtolower($mix)))
            ->filter(fn ($t) => mb_strlen($t) >= 3)
            ->unique()
            ->take(10)
            ->values();

        $q = Blog::query()
            ->from('blog_managment')
            ->select(['id','title','slug','avatar','meta_desc'])
            ->where('status', 't');

        if ($tokens->count() > 0 || $city !== '' || $loc !== '') {
            $q->where(function ($qq) use ($city, $loc, $tokens) {
                if ($city !== '') $qq->orWhere('title', 'like', "%{$city}%");
                if ($loc  !== '') $qq->orWhere('title', 'like', "%{$loc}%");

                foreach ($tokens as $t) {
                    $qq->orWhere('title', 'like', "%{$t}%")
                       ->orWhere('meta_title', 'like', "%{$t}%")
                       ->orWhere('meta_desc', 'like', "%{$t}%");
                }
            });
        }

        $blogs = $q->orderByDesc('id')->offset($offset)->limit($limit)->get();

        if ($blogs->isEmpty() && $offset === 0) {
            $blogs = Blog::query()
                ->from('blog_managment')
                ->select(['id','title','slug','avatar','meta_desc'])
                ->where('status', 't')
                ->orderByDesc('id')
                ->limit($limit)
                ->get();
        }

        return $blogs;
    }
}
