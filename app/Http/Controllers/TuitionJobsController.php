<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Support\AreaDemand;
use App\Support\CityHub;
use App\Support\Geo;
use App\Support\TutorCascade;
use App\Support\Zones;
use Illuminate\Support\Collection;

/**
 * Tutor-side pages ("home tuition jobs in Gurgaon"), the supply engine of
 * the site: /tuition-jobs (India), /tuition-jobs/state/{state} and
 * /tuition-jobs/{city}. Tutors search for work, so these pages bring the
 * tutors that switch on the parent-side pages.
 *
 * Unlike directory sites, a page whose city has nothing real behind it (no
 * zones, no real tutor, fewer than three requests) is live for recruitment
 * links but noindex, so we never publish hundreds of name-swapped pages.
 */
class TuitionJobsController extends Controller
{
    /** A zone with fewer real tutors than this is shown as needing tutors. */
    private const NEEDED_BELOW = 3;

    public function india()
    {
        $states = $this->states();
        $online = TutorCascade::realOnlineTutors();

        $faqs = [
            ['How do I find home tuition or online tutor jobs in India on NXTutors?', 'Apply on WhatsApp with your subjects, classes, city and the areas you can travel to; our team sets up your tutor account with you. After our team checks your identity document, you appear on the matching city, area and subject pages and in the two or three tutors we shortlist for each family request.'],
            ['Can I teach online from any city?', 'Yes. Choose online or both on your profile. Online requests can come from families anywhere in India; home requests come only from the areas you list, so you are never sent across a city you cannot reach.'],
            ['Who sets the fee?', 'You do. Put your fee per class on your profile; families see it before the free demo class. Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour.'],
            ['What does it cost to join?', 'See the tutor plans on our pricing page before you sign up; what each plan includes is listed there.'],
            ['How are tutors chosen for a family?', 'We match by subject, board, class, area and availability and share two or three tutors, not a long list, so each request goes to a small number of well-matched tutors rather than to everyone.'],
        ];

        $metatitle = 'Home Tuition Jobs & Online Tutor Jobs in India | NXTutors';
        $metadesc = 'Home tuition and online tutor jobs across India: pick your state and city, see where families need tutors, set your own fee and join NXTutors.';
        $canonical = url('/tuition-jobs');
        $metarobots = null;
        $level = 'india';

        return view('pages.tuition-jobs', compact('level', 'states', 'online', 'faqs', 'metatitle', 'metadesc', 'canonical', 'metarobots'));
    }

    public function state(string $state)
    {
        $group = $this->states()->firstWhere('slug', $state);
        abort_unless($group, 404);

        $label = $group['name'];
        $faqs = [
            ['How do I get tuition jobs in ' . $label . '?', 'Apply on WhatsApp with your city and the areas you can travel to; our team sets up your profile with you. After our identity check you appear on the pages for your city and areas, and in shortlists for families near you. Online classes can come from anywhere in India.'],
            ['Which cities in ' . $label . ' does NXTutors cover?', 'The cities listed on this page have their own tutor pages for families. If your town is not listed, apply anyway: add your town and online teaching, and we open new cities where tutors and families are.'],
            ['Who sets the fee?', 'You do; families see it before the free demo class. Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour.'],
        ];

        $metatitle = 'Home Tuition Jobs in ' . $label . ' – Tutor Vacancies by City | NXTutors';
        $metadesc = 'Home tuition and online tutor jobs in ' . $label . ': cities where families need tutors, how joining works and fees you set. Apply to NXTutors.';
        $canonical = url('/tuition-jobs/state/' . $state);
        $metarobots = $group['indexable'] ? null : 'noindex, follow';
        $level = 'state';

        return view('pages.tuition-jobs', compact('level', 'group', 'label', 'faqs', 'metatitle', 'metadesc', 'canonical', 'metarobots'));
    }

    public function show(string $city)
    {
        $cityRow = City::where('status', 't')->where('slug', $city)->firstOrFail();
        $cityName = $cityRow->city_name;
        $aka = Geo::akaOf($city);
        $label = $aka && $city === 'gurugram' ? $aka : Geo::displayName($city, $cityName);
        $areas = CityHub::areaList($city);
        $zonesCfg = config('zones.' . Zones::cityKey($cityName), []);

        $zones = collect();
        if ($zonesCfg) {
            $coverage = TutorCascade::realTutorsByZone($city, $cityName);
            // Every active area under its zone (not the first six): this page is
            // a crawl path to each area as well as a recruitment page.
            $byZone = $areas->unique('slug')->groupBy(fn ($a) => CityHub::zoneOfArea($city, $cityName, $a) ?? '');
            $zones = collect($zonesCfg)->keys()->map(fn ($z) => [
                'name' => $z,
                'needed' => ($coverage[$z] ?? 0) < self::NEEDED_BELOW,
                'areas' => collect($byZone[$z] ?? [])->sortBy(fn ($a) => $a->name, SORT_NATURAL | SORT_FLAG_CASE)->values(),
            ])->sortBy(fn ($z) => $z['needed'] ? 0 : 1)->values();
            if (! empty($byZone[''])) {
                $zones->push(['name' => 'Other areas of ' . $cityName, 'needed' => false,
                    'areas' => collect($byZone[''])->sortBy(fn ($a) => $a->name, SORT_NATURAL | SORT_FLAG_CASE)->values()]);
            }
        }

        $requests = AreaDemand::recentForCity($cityName);
        $realHere = TutorCascade::realTutorsInCity($city);
        $stateName = Geo::stateOf($city);
        $stateSlug = Geo::stateSlug($stateName);

        $faqs = [
            ['How do I get home tuition jobs in ' . $label . ' through NXTutors?', 'Apply on WhatsApp and list the areas of ' . $cityName . ' you can travel to. After our team checks your identity document, you appear on those area pages and in our shortlists, and families book a free demo class with you.'],
            ['How much can a home tutor earn in ' . $label . '?', 'You set your own fee per class, and families see it before the demo. Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB, IGCSE, JEE and NEET sit toward the upper end.'],
            ['Can I teach online as well as at home?', 'Yes. Choose home, online or both. Online classes can come from families anywhere in India; home requests come from the areas you list.'],
            ['What does it cost to join?', 'See the tutor plans on our pricing page before you sign up; what each plan includes is listed there.'],
        ];
        if ($zones->isNotEmpty()) {
            array_splice($faqs, 2, 0, [['Which areas of ' . $label . ' need tutors most?', 'The zones marked "tutors needed" on this page have the fewest tutors travelling to them. Adding one of those zones to your travel areas puts you in front of families who currently see mostly online tutors.']]);
        }

        $metatitle = 'Home Tuition Jobs in ' . $label . ' – Tutor Vacancies by Area | NXTutors';
        $metadesc = 'Home tuition jobs in ' . $label . ($label !== $cityName ? ' (' . $cityName . ')' : '') . ': where families need tutors now, recent requests, fees you set, and how to join NXTutors.';
        $canonical = url('/tuition-jobs/' . $city);
        // Nothing real behind the page yet: keep it for recruitment links, out of the index.
        $metarobots = self::cityIndexable($city) ? null : 'noindex, follow';
        $level = 'city';

        return view('pages.tuition-jobs', compact('level', 'cityRow', 'cityName', 'label', 'zones', 'areas', 'requests', 'realHere', 'stateName', 'stateSlug', 'faqs', 'metatitle', 'metadesc', 'canonical', 'metarobots'));
    }

    /** Zones, a real tutor, or three or more recent requests. Also used by the sitemap. */
    public static function cityIndexable(string $citySlug): bool
    {
        $city = City::where('status', 't')->where('slug', $citySlug)->first();
        if (! $city) {
            return false;
        }

        return config('zones.' . Zones::cityKey($city->city_name), []) !== []
            || TutorCascade::realTutorsInCity($citySlug) > 0
            || AreaDemand::recentForCity($city->city_name) !== null;
    }

    /**
     * States with their active city pages, for the India and state pages.
     *
     * @return Collection<int, array{name: string, slug: string, cities: Collection, indexable: bool}>
     */
    public function states(): Collection
    {
        $cities = City::where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')->orderBy('city_name')->get(['city_name', 'slug']);

        return collect(Geo::groupByState($cities->map(fn ($c) => (object) ['slug' => $c->slug, 'city_name' => $c->city_name])))
            ->map(function ($list, $state) {
                $list = collect($list)->map(fn ($c) => (object) [
                    'slug' => $c->slug,
                    'name' => Geo::displayName($c->slug, $c->city_name),
                    'indexable' => self::cityIndexable($c->slug),
                ]);

                return ['name' => $state, 'slug' => Geo::stateSlug($state), 'cities' => $list, 'indexable' => $list->contains('indexable', true)];
            })->values();
    }
}
