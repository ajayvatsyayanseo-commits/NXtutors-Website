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
        $pages = GeneratedPage::query()
            ->where('status', 'published')
            ->latest()
            ->take(10)
            ->get();
            $teachers = $this->getHomeTeachers(6, 0);
            $blogs    = $this->getHomeBlogs(6, 0);
            $reviews  = $this->getHomeReviews(6);

            $category = Category::where('pid', 0)->where('status', 't')->take(10)->get(); 

            $banner = Banner::Where('status', 't')->take(5)->get(); 
            $page = Page::Where('status', 't')->where('slug', 'home')->first();
            $metatitle = $page->meta_title ?? null;
            $metakey = $page->meta_keywords ?? null;
            $metadesc = $page->meta_description ?? null;

        return view('home', compact('pages','teachers','category','blogs','banner','reviews','metatitle','metakey','metadesc'));
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

public function sitemap()
{
    $urls = [];

    $baseUrl = 'https://www.nxtutors.com';

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
];

    foreach ($staticUrls as $url) {
        $urls[] = [
            'loc' => $baseUrl . $url,
            'lastmod' => now()->toDateString(),
            'priority' => $url === '/' ? '1.0' : '0.8',
            'changefreq' => 'daily',
        ];
    }

    // Generated Pages
    GeneratedPage::where('status', 'published')->chunk(500, function ($pages) use (&$urls, $baseUrl) {
        foreach ($pages as $page) {
            $urls[] = [
                'loc' => $baseUrl . '/p/' . $page->slug,
                'lastmod' => optional($page->updated_at)->toDateString() ?? now()->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }
    });

    // Blogs
    Blog::where('status', 't')->chunk(500, function ($blogs) use (&$urls, $baseUrl) {
        foreach ($blogs as $blog) {
            $urls[] = [
                'loc' => $baseUrl . '/blog/' . $blog->slug,
                'lastmod' => optional($blog->updated_at)->toDateString() ?? now()->toDateString(),
                'priority' => '0.7',
                'changefreq' => 'weekly',
            ];
        }
    });

    // Cities
    City::where('status', 't')->chunk(500, function ($cities) use (&$urls, $baseUrl) {
        foreach ($cities as $city) {
            $urls[] = [
                'loc' => $baseUrl . '/city/' . $city->slug,
                'lastmod' => optional($city->updated_at)->toDateString() ?? now()->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }
    });

    Category::where('status', 't')
    ->whereNotNull('slug')
    ->chunk(500, function ($categories) use (&$urls, $baseUrl) {
        foreach ($categories as $cat) {
            $urls[] = [
                'loc' => $baseUrl . '/category/' . $cat->slug,
                'lastmod' => optional($cat->updated_at)->toDateString() ?? now()->toDateString(),
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
                'lastmod' => optional($course->updated_at)->toDateString() ?? now()->toDateString(),
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ];
        }
    });

    // Tutors
 Register::where('join_as', 'teacher')
    ->where('status', 't')
    ->chunk(500, function ($teachers) use (&$urls) {
        foreach ($teachers as $t) {
            if (!$t->user_id) {
                continue;
            }

            $encodedId = rtrim(
                strtr(base64_encode($t->user_id . '-nxt'), '+/', '-_'),
                '='
            );

            $profileUrl = route('tutor.newshow', [
                'city' => Str::slug($t->city ?: 'city'),
                'user_id' => $encodedId,
                'name' => Str::slug($t->name ?: 'tutor'),
            ]);

            $urls[] = [
                'loc' => $profileUrl,
                'lastmod' => optional($t->updated_at)->toDateString() ?? now()->toDateString(),
                'priority' => '0.7',
                'changefreq' => 'weekly',
            ];
        }
    });

    return response()
        ->view('sitemap', compact('urls'))
        ->header('Content-Type', 'application/xml');
}

    public function showCategory($slug1, $slug2 = null, $slug3 = null)
{
    $slugs = array_filter([$slug1, $slug2, $slug3]);
    $category = null;
    
    foreach ($slugs as $slug) {
        $category = Category::where('slug', $slug)
            ->when($category, function ($query) use ($category) {
                return $query->where('pid', $category->id);
            }, function ($query) {
                return $query->whereNull('pid')->orWhere('pid', 0);
            })
            ->first();

        if (!$category) {
            abort(404);
        }
    }

    $children = $category->childcatlist()->get();

    $metatitle = $category->meta_title ?? null; ;
    $metakey = '' ;
    $metadesc =$category->meta_desc ?? null; ;;

     $products = Product::where(function($query) use ($category) {
        $query->where('cat_id', $category->id)
              ->orWhere('pid', $category->id)
              ->orWhere('cid', $category->id);
    })->where('status', 't')->orderBy('id', 'desc')->get();

    return view('singlecat', compact('category', 'children' , 'products','metatitle','metakey','metadesc'));
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
        ->map(fn($x) => (int)$x)
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
        $exp     = (int)preg_replace('/\D+/', '', (string)($t->experience ?? '0'));
        $budget  = (int)preg_replace('/\D+/', '', (string)($t->budget ?? '0'));

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
            'img' => $t->avatar ? asset('storage/user/'.$t->avatar) : asset('frount/assets/images/tutor1.jpg'),
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
        $blog = Blog::query()
        ->where('slug', $slug)
        ->where('status', 't')
        ->firstOrFail();

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

    return view('blog.show', compact('blog','prev','next','related','canonical','metatitle','metakey','metadesc'));
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
    $limit  = (int) $request->get('limit', 6);
    $search = trim($request->get('search', ''));

    $teachers = $this->getHomeTeachers($limit, $offset, $search);

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

    $limit = 6;

    // 1) PINCODE wise
    if ($pincode !== '') {
        $teachers = $this->baseTeacherQuery()
            ->where('register.pincode', $pincode)
            ->limit($limit)
            ->get();

        if ($teachers->count()) {
            return view('home.partials.local-teacher-cards', compact('teachers'));
        }
    }

    // 2) CITY wise
    if ($city !== '') {
        $teachers = $this->baseTeacherQuery()
            ->where('register.city', $city)
            ->limit($limit)
            ->get();

        if ($teachers->count()) {
            return view('home.partials.local-teacher-cards', compact('teachers'));
        }
    }

    // 3) fallback (top teachers)
    $teachers = $this->getHomeTeachers($limit, 0);
    return view('home.partials.local-teacher-cards', compact('teachers'));
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

        public function singleteacherreview($id){
          $page = Page::Where('status', 't')->where('slug', 'privacy')->first();
          $teacher = Register::Where('user_id', $id)->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('teacherreview' , compact('page','metatitle','metakey','metadesc','teacher'));
    }
    public function singleteacherprofile($slug, $slug1,$id){
          $page = Page::Where('status', 't')->where('slug', 'privacy')->first();
          $userid = base64_decode($id);
          $teacher = Register::Where('user_id', $userid)->first();

          $totalcourse = Teacher_course::where('user_id', $userid)->count();
          $course = Teacher_course::where('user_id', $userid)->get();
          $metatitle = $teacher->profile ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $teacher->pro_desc ?? null;
          return view('teacherprofile' , compact('page','metatitle','metakey','metadesc','teacher','totalcourse','course',));
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
      
             $metatitle = $city->meta_title;
            $metakey = '';
            $metadesc = $city->meta_desc;

    return view('city.show', compact('city','areas','metatitle','metakey','metadesc'));
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

    $relatedAreas = City_area::where('city_id', $area->city_id)
    ->where('status', 't')
    ->where('id', '!=', $area->id)
    ->latest('id')
    ->limit(9)
    ->get();

     $areaTutors = Register::where('join_as', 'teacher')
        ->where('status', 't')
        ->when(!empty($area->pincode), function($q) use ($area){
            $q->where('pincode', $area->pincode);
        })
        ->orderByDesc('user_id')
        ->take(9)
        ->get();

    // ✅ fallback to CITY tutors if area empty
    $tutors = $areaTutors;
    $tutorScope = 'area';

    if ($areaTutors->count() == 0) {
        $tutors = Register::where('join_as', 'teacher')
            ->where('status', 't')
            ->where('city', $city->city_name)   // ✅ register.city match
            ->orderByDesc('user_id')
            ->take(9)
            ->get();

        $tutorScope = 'city';
    }

             $metatitle = $city->meta_title;
            $metakey = '';
            $metadesc = $city->meta_desc;

    return view('city.cityarea.single', compact('city', 'area','relatedAreas','tutors','tutorScope','metatitle','metakey','metadesc'));
}
   public function contactpage()
    {
          $page = Page::Where('status', 't')->where('slug', 'contact')->first();
          $metatitle = $page->meta_title ?? null;
          $metakey = $page->meta_keywords ?? null;
          $metadesc = $page->meta_description ?? null;
          return view('contact', compact('page','metatitle','metakey','metadesc'));
    } 


 private function getHomeTeachers(int $limit = 6, int $offset = 0, string $search = '')
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

    foreach ($femaleWords as $word) {
        if (str_contains($searchLower, $word)) {
            $genderFilter = 'female';
            break;
        }
    }

    if (!$genderFilter) {
        foreach ($maleWords as $word) {
            if (str_contains($searchLower, $word)) {
                $genderFilter = 'male';
                break;
            }
        }
    }

    // gender-related words remove from search string
    $removeWords = array_merge($femaleWords, $maleWords);
    $cleanSearch = $searchLower;

    foreach ($removeWords as $word) {
        $cleanSearch = str_ireplace($word, ' ', $cleanSearch);
    }

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

    return $query
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
        ->where('status', 't')
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
            ? asset('storage/user/'.$avatar)
            : asset('frount/assets/images/tutor1.jpg');
    }

    // ✅ Related tutors (same city)
    $relatedTutors = Register::query()
        ->from('register')
        ->select(['user_id','name','avatar','address','city'])
        ->where('join_as', 'teacher')
        ->where('status', 't')
        ->where('city', $tutor->city)
        ->where('user_id', '!=', $tutor->user_id)
        ->orderByDesc('id')
        ->limit(6)
        ->get();

    // ✅ Latest blogs (optional)
    $latestBlogs = Blog::query()
        ->from('blog_managment')
        ->select(['id','title','slug','avatar'])
        ->where('status', 't')
        ->orderByDesc('id')
        ->limit(6)
        ->get();

    // ✅ canonical
    $canonical = route('tutor.show', encrypt($tutor->user_id));

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
    $hourlyMin = $tutor->budget ? (int) $tutor->budget : null;
    $hourlyMax = $tutor->budget ? ((int) $tutor->budget + 300) : null;
      
      $metatitle =$tutor->profile ?? null;
      $metakey ='';
      $metadesc =$tutor->profile_desc ?? null;

    return view('tutor.show', compact(
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
        ->where('status', 't')
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
            ? asset('storage/user/'.$avatar)
            : asset('frount/assets/images/tutor1.jpg');
    }

    // ✅ Related tutors (same city)
    $relatedTutors = Register::query()
        ->from('register')
        ->select(['user_id','name','avatar','address','city'])
        ->where('join_as', 'teacher')
        ->where('status', 't')
        ->where('city', $tutor->city)
        ->where('user_id', '!=', $tutor->user_id)
        ->orderByDesc('id')
        ->limit(6)
        ->get();

    // ✅ Latest blogs (optional)
    $latestBlogs = Blog::query()
        ->from('blog_managment')
        ->select(['id','title','slug','avatar'])
        ->where('status', 't')
        ->orderByDesc('id')
        ->limit(6)
        ->get();

    // ✅ canonical
    $canonical = route('tutor.show', encrypt($tutor->user_id));

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
    $hourlyMin = $tutor->budget ? (int) $tutor->budget : null;
    $hourlyMax = $tutor->budget ? ((int) $tutor->budget + 300) : null;
      
      $metatitle =$tutor->profile ?? null;
      $metakey ='';
      $metadesc =$tutor->profile_desc ?? null;

    return view('tutor.show', compact(
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

    $teachers = $this->tutorsListQuery($request)
        ->limit($limit)
        ->get();
     
            $metatitle = '';
            $metakey = '';
            $metadesc = '';

    return view('tutor.index', compact('teachers','metatitle','metakey','metadesc'));
}

public function tutorsLoad(Request $request)
{
    $limit  = 8;
    $offset = (int) $request->get('offset', 0);

    $teachers = $this->tutorsListQuery($request)
        ->offset($offset)
        ->limit($limit)
        ->get();

    // ✅ Return only cards HTML (same as genpage)
    return view('tutor.partials.cards', compact('teachers'))->render();
}

private function tutorsListQuery(Request $request)
{
    $q = Register::query()
        ->where('join_as', 'teacher')          // ✅ change if your role value different
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

      $page = Page::Where('status', 't')->where('slug', 'blog')->first();
      $metatitle = $page->meta_title ?? null;
      $metakey = $page->meta_keywords ?? null;
      $metadesc = $page->meta_description ?? null;

    return view('blog.index', compact('blogs','metatitle','metakey','metadesc'));
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
