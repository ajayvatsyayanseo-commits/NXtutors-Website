<?php

namespace App\Http\Controllers;

use App\Support\Geo;
use App\Support\LearningAreas;
use App\Support\SearchEvents;
use App\Support\SubjectLinks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Predictive search, built to cost nothing per keystroke: the browser fetches
 * one small dictionary (/search/suggest.json, cached for hours) and completes
 * phrases itself (public/frount/assets/js/nx-suggest.js). The only requests
 * after that are the search itself and a note of which suggestion was picked.
 */
class SearchSuggestController extends Controller
{
    public const CACHE_KEY = 'search.suggest.v2';

    public function index()
    {
        $data = Cache::remember(self::CACHE_KEY, 21600, fn () => $this->build());

        return response()->json($data)
            ->header('Cache-Control', 'public, max-age=21600');
    }

    /** A suggestion the parent picked (or a demo request after searching). */
    public function event(Request $request)
    {
        $kind = in_array($request->input('k'), ['pick', 'demo'], true) ? $request->input('k') : null;
        if ($kind) {
            SearchEvents::record($kind, [
                'sid' => $request->input('sid'),
                'q' => $request->input('q'),
                'pick' => $request->input('pick'),
                'city' => $request->input('city'),
            ]);
        }

        return response()->noContent();
    }

    private function build(): array
    {
        $items = [];
        foreach (LearningAreas::areas() as $area => $a) {
            foreach ($a['items'] as $i) {
                $items[] = array_filter([
                    'l' => $i['label'],
                    's' => $i['search'],
                    'u' => $i['url'],
                    'a' => $i['aka'] ?? null,
                    'n' => (int) ($i['tutors'] ?? 0),
                    'g' => $area,
                    'r' => ! empty($i['on_request']) ? 1 : null, // offered as a demo request
                ], fn ($v) => $v !== null && $v !== []);
            }
        }

        // Subject pages, so "ib ma…" can go straight to the IB Maths page.
        $pages = collect(SubjectLinks::live())->map(fn ($p, $k) => array_filter([
            'l' => $p['h1'],
            'u' => url('/' . $k),
            'c' => $p['city'] ?? null,
        ]))->values()->all();

        // Cities and area pages, for "… in Sector 56" and "home tutors in DLF Phase 4".
        $places = [];
        try {
            $cities = DB::table('city_managment')->where('status', 't')->whereNotNull('slug')->get(['id', 'city_name', 'slug'])->keyBy('id');
            foreach ($cities as $c) {
                $places[] = array_filter(['l' => Geo::displayName($c->slug, $c->city_name), 'u' => url('/city/' . $c->slug), 'a' => Geo::CITIES[$c->slug]['aliases'] ?? null]);
            }
            DB::table('city_area_list_managment')->where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')
                ->get(['city_id', 'name', 'slug'])
                ->each(function ($a) use (&$places, $cities) {
                    $c = $cities[$a->city_id] ?? null;
                    if ($c && trim((string) $a->name) !== '') {
                        $places[] = ['l' => trim($a->name), 'u' => url('/city/' . $c->slug . '/' . $a->slug), 'c' => Geo::displayName($c->slug, $c->city_name)];
                    }
                });
        } catch (Throwable $e) {
            // No places: suggestions still work for subjects.
        }

        // What parents actually pick and search, last 90 days: a small boost.
        $pop = [];
        try {
            $pop = DB::table('search_events')
                ->whereIn('kind', ['search', 'pick'])
                ->where('created_at', '>=', now()->subDays(90))
                ->selectRaw('LOWER(COALESCE(pick, q)) as t, COUNT(*) as n')
                ->groupBy('t')->orderByDesc('n')->limit(300)
                ->pluck('n', 't')->all();
        } catch (Throwable $e) {
        }

        return [
            'v' => substr(md5(json_encode([$items, $pages, count($places)])), 0, 8),
            'items' => $items,
            'pages' => $pages,
            'places' => $places,
            'pop' => $pop,
        ];
    }
}
