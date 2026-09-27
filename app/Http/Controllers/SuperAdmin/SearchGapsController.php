<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * What parents search for and whether we could serve them (search_events):
 * the tutor gaps to recruit for, home-tutor gaps by area, and what is popular.
 */
class SearchGapsController extends Controller
{
    public function index()
    {
        $days = (int) request('days', 30);
        $days = in_array($days, [7, 30, 90], true) ? $days : 30;
        $since = now()->subDays($days);

        try {
            $base = fn () => DB::table('search_events')->where('created_at', '>=', $since);

            $gaps = $base()->where('kind', 'search')->where('results', 0)
                ->selectRaw('COALESCE(subject, q) as what, city, area, mode, COUNT(*) as n')
                ->groupBy('what', 'city', 'area', 'mode')->orderByDesc('n')->limit(50)->get();

            $homeGaps = $base()->where('kind', 'search')->where('mode', 'home')->where('results', '<', 3)
                ->whereNotNull('area')
                ->selectRaw('subject, area, city, COUNT(*) as n, MIN(results) as best')
                ->groupBy('subject', 'area', 'city')->orderByDesc('n')->limit(50)->get();

            $top = $base()->where('kind', 'search')->whereNotNull('subject')
                ->selectRaw('subject, city, COUNT(*) as n, ROUND(AVG(results), 1) as avg_results')
                ->groupBy('subject', 'city')->orderByDesc('n')->limit(30)->get();

            $picks = $base()->where('kind', 'pick')
                ->selectRaw('pick, COUNT(*) as n')->groupBy('pick')->orderByDesc('n')->limit(20)->get();

            $totals = [
                'searches' => $base()->where('kind', 'search')->count(),
                'zero' => $base()->where('kind', 'search')->where('results', 0)->count(),
                'picks' => $base()->where('kind', 'pick')->count(),
                'demos' => $base()->where('kind', 'demo')->count(),
            ];
        } catch (Throwable $e) {
            $gaps = $homeGaps = $top = $picks = collect();
            $totals = ['searches' => 0, 'zero' => 0, 'picks' => 0, 'demos' => 0];
        }

        return view('super.search.gaps', compact('days', 'gaps', 'homeGaps', 'top', 'picks', 'totals'));
    }
}
