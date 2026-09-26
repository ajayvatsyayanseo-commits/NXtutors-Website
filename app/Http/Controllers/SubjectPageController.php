<?php

namespace App\Http\Controllers;

use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Services\TutorSearchService;
use App\Support\BlogTopics;
use App\Support\CityHub;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Subject pages (/maths-home-tutor, /maths-home-tutor/class-10,
 * /maths-home-tutor-gurgaon, …). Pages are declared in
 * config/subject_pages.php; their guides and FAQs are Blade and PHP files
 * under resources/views/subjects. See routes/web.php for how they are routed.
 */
class SubjectPageController extends Controller
{
    public function show(string $key)
    {
        $pages = config('subject_pages', []);
        $page = $pages[$key] ?? null;
        abort_unless($page && view()->exists('subjects.content.' . $page['view']), 404);

        $page['key'] = $key;
        $page['url'] = url('/' . $key);

        $faqFile = resource_path('views/subjects/faqs/' . $page['view'] . '.php');
        // FAQ files may use ['question', 'answer'] pairs or keyed entries.
        $faqs = collect(is_file($faqFile) ? (array) require $faqFile : [])
            ->map(fn ($f) => [
                trim((string) ($f[0] ?? $f['question'] ?? $f['q'] ?? '')),
                trim((string) ($f[1] ?? $f['answer'] ?? $f['a'] ?? '')),
            ])
            ->filter(fn ($f) => $f[0] !== '' && $f[1] !== '')
            ->values()->all();

        $tutors = $this->tutors($page);
        $authors = $this->authors($page['authors'] ?? []);
        $related = $this->related($key, $page, $pages);
        $guides = $this->guides($page);

        $allAreas = ! empty($page['city_slug'])
            ? CityHub::areaList($page['city_slug'])
            : collect();

        $metatitle = $page['title'];
        $metadesc = $page['description'];
        $canonical = $page['url'];

        return view('subjects.show', compact('page', 'pages', 'faqs', 'tutors', 'authors', 'related', 'guides', 'allAreas', 'metatitle', 'metadesc', 'canonical'));
    }

    /**
     * Tutor cards from the same search the chat uses: subject (and class,
     * city) filtered, ranked by fit and reviews. Cached briefly; a search
     * failure shows no cards rather than breaking the page.
     */
    private function tutors(array $page): array
    {
        $key = 'subject.tutors.v1.' . md5(json_encode([$page['subject'] ?? null, $page['class'] ?? null, $page['city'] ?? null]));

        try {
            return Cache::remember($key, 900, function () use ($page) {
                $result = app(TutorSearchService::class)->search(new TutorSearchCriteria(
                    city: $page['city'] ?? null,
                    subject: $page['subject'] ?? null,
                    classLevel: $page['class'] ?? null,
                    limit: 8,
                ));

                return ['cards' => $result['cards'] ?? [], 'matched' => (int) ($result['matched'] ?? 0), 'relaxed' => $result['relaxed'] ?? null];
            });
        } catch (Throwable $e) {
            Log::warning('Subject page tutor search failed', ['page' => $page['key'] ?? null, 'error' => $e->getMessage()]);

            return ['cards' => [], 'matched' => 0, 'relaxed' => null];
        }
    }

    /**
     * Authors with their live profile: photo, qualification, experience,
     * profile link. The specialism comes from config/nx_authors.php.
     */
    private function authors(array $keys): Collection
    {
        $all = config('nx_authors', []);

        return collect($keys)->map(function ($k) use ($all) {
            $a = $all[$k] ?? null;
            if (! $a) {
                return null;
            }

            $a = \App\Support\SubjectLinks::withProfile($a);
            $a['key'] = $k;

            return $a;
        })->filter()->values();
    }

    /** Breadcrumb parent, sibling and child pages, and cities with this subject. */
    private function related(string $key, array $page, array $pages): array
    {
        $root = $page['parent'] ?? $key;
        $family = collect($pages)
            ->filter(fn ($p, $k) => $k !== $key && ($k === $root || ($p['parent'] ?? null) === $root) && view()->exists('subjects.content.' . $p['view']))
            ->map(fn ($p, $k) => ['url' => url('/' . $k), 'label' => $p['h1']]);

        $otherSubjects = collect($pages)
            ->filter(fn ($p, $k) => empty($p['parent']) && ($p['subject'] ?? null) !== ($page['subject'] ?? null) && view()->exists('subjects.content.' . $p['view']))
            ->map(fn ($p, $k) => ['url' => url('/' . $k), 'label' => $p['h1']]);

        return ['family' => $family->values()->all(), 'subjects' => $otherSubjects->values()->all()];
    }

    /** Guides for this subject, newest first. */
    private function guides(array $page): Collection
    {
        $pattern = [
            'Mathematics' => '/math/',
            'Science' => '/science|neet|biology|chemistry|physics/',
            'Physics' => '/physics/',
            'Chemistry' => '/chemistry/',
        ][$page['subject'] ?? ''] ?? null;

        if (! $pattern) {
            return collect();
        }

        return DB::table('blog_managment')
            ->where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')
            ->orderByDesc('id')->get(['title', 'slug'])
            ->map(fn ($b) => (object) ['title' => $b->title, 'slug' => trim($b->slug)])
            ->filter(fn ($b) => preg_match($pattern, $b->slug) && BlogTopics::of($b->slug) !== 'city')
            // This page's class first, then board guides, study-abroad last.
            ->sortBy(fn ($b) => match (true) {
                ! empty($page['class']) && str_contains($b->slug, 'class-' . preg_replace('/\D/', '', $page['class'])) => 0,
                BlogTopics::of($b->slug) === 'boards' => 1,
                BlogTopics::of($b->slug) === 'abroad' => 3,
                default => 2,
            })
            ->take(8)->values();
    }
}
