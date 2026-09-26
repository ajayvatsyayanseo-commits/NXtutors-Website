<?php

namespace App\Http\Controllers;

use App\Support\SubjectLinks;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Author pages (/authors, /authors/{slug}): who writes our guides, what they
 * specialise in, and every subject page and blog post they sign. Authors are
 * declared in config/nx_authors.php; photo, qualification and experience come
 * live from their tutor profile.
 */
class AuthorController extends Controller
{
    public function index()
    {
        $authors = collect(config('nx_authors', []))
            ->filter(fn ($a) => ! empty($a['slug']))
            ->map(fn ($a, $k) => SubjectLinks::withProfile($a + ['key' => $k]) + ['pages' => count(SubjectLinks::pagesBy($k))])
            // Named tutors first, the team last.
            ->sortBy(fn ($a) => empty($a['user_id']) ? 1 : 0)
            ->values();

        $metatitle = 'Our Authors – Tutors Who Write NXTutors Guides | NXTutors';
        $metadesc = 'Meet the NXTutors tutors who write and review our maths and science guides: their specialisms, boards and every page they sign.';
        $canonical = url('/authors');

        return view('authors.index', compact('authors', 'metatitle', 'metadesc', 'canonical'));
    }

    public function show(string $slug)
    {
        $author = SubjectLinks::authorBySlug($slug);
        abort_unless($author, 404);

        $author = SubjectLinks::withProfile($author);
        $pages = SubjectLinks::pagesBy($author['key']);
        $posts = $this->posts($author);

        $metatitle = $author['page_title'] ?? $author['name'] . ' – ' . str_replace(' · ', ' – ', $author['role']) . ' | NXTutors';
        $metadesc = \Illuminate\Support\Str::limit($author['bio'] ?? $author['role'], 155);
        $canonical = $author['author_url'];

        return view('authors.show', compact('author', 'pages', 'posts', 'metatitle', 'metadesc', 'canonical'));
    }

    /** Published blog posts whose "author" field is one of this author's spellings. */
    private function posts(array $author): Collection
    {
        $names = $author['names'] ?? [];
        if (! $names) {
            return collect();
        }

        return DB::table('blog_managment')
            ->where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')
            ->whereIn(DB::raw('LOWER(TRIM(author))'), $names)
            ->orderByDesc('id')->get(['title', 'slug'])
            ->map(fn ($b) => (object) ['title' => $b->title, 'slug' => trim($b->slug)]);
    }
}
