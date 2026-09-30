<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Support\AreaDemand;
use App\Support\CityHub;
use App\Support\Geo;
use App\Support\TutorCascade;
use App\Support\Zones;

/**
 * /tuition-jobs/{city}: the tutor-side page for a city ("home tuition jobs
 * in Gurgaon"). Tutors search for work, so this page is how a city gets
 * tutors before its area pages have any: which zones need tutors (from real
 * tutor coverage), recent anonymised requests, the fee rule and how joining
 * works. Only for cities with zones set up (config/zones.php).
 */
class TuitionJobsController extends Controller
{
    /** A zone with fewer real tutors than this is shown as needing tutors. */
    private const NEEDED_BELOW = 3;

    public function show(string $city)
    {
        $cityRow = City::where('status', 't')->where('slug', $city)->firstOrFail();
        $cityName = $cityRow->city_name;
        $zonesCfg = config('zones.' . Zones::cityKey($cityName), []);
        abort_if($zonesCfg === [], 404);

        $aka = Geo::akaOf($city);
        $label = $aka ? $aka : $cityName;
        $coverage = TutorCascade::realTutorsByZone($city, $cityName);
        $areas = CityHub::areaList($city);

        // Each zone with a few of its area pages, those needing tutors first.
        $zones = collect($zonesCfg)->keys()->map(fn ($z) => [
            'name' => $z,
            'needed' => ($coverage[$z] ?? 0) < self::NEEDED_BELOW,
            'guide' => config('zone_guides.' . Zones::cityKey($cityName) . '.' . $z . '.guide'),
            'areas' => $areas->filter(fn ($a) => CityHub::zoneOfArea($city, $cityName, $a) === $z)
                ->sortBy(fn ($a) => $a->name, SORT_NATURAL | SORT_FLAG_CASE)->take(6)->values(),
        ])->sortBy(fn ($z) => $z['needed'] ? 0 : 1)->values();

        $requests = AreaDemand::recentForCity($cityName);

        $faqs = [
            ['How do I get home tuition jobs in ' . $label . ' through NXTutors?', 'Apply on WhatsApp or create your tutor account, and list the areas of ' . $cityName . ' you can travel to. After our team checks your identity document, you appear on those area pages and in our shortlists, and families book a free demo class with you.'],
            ['How much can a home tutor earn in ' . $label . '?', 'You set your own fee per class, and families see it before the demo. Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB, IGCSE, JEE and NEET sit toward the upper end.'],
            ['Which areas of ' . $label . ' need tutors most?', 'The zones marked "tutors needed" on this page have the fewest tutors travelling to them. Adding one of those zones to your travel areas puts you in front of families who currently see mostly online tutors.'],
            ['Can I teach online as well as at home?', 'Yes. Choose home, online or both. Online classes can come from families anywhere in India; home requests come from the areas you list.'],
            ['What does it cost to join?', 'See the tutor plans on our pricing page before you sign up; what each plan includes is listed there.'],
        ];

        $metatitle = 'Home Tuition Jobs in ' . $label . ' – Tutor Vacancies by Area | NXTutors';
        $metadesc = 'Home tuition jobs in ' . $label . ' (' . $cityName . '): areas where families need tutors now, recent requests, fees you set, and how to join NXTutors.';
        $canonical = url('/tuition-jobs/' . $city);

        return view('pages.tuition-jobs', compact('cityRow', 'cityName', 'label', 'zones', 'requests', 'faqs', 'metatitle', 'metadesc', 'canonical'));
    }
}
