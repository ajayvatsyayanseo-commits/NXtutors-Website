<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\City;
use App\Support\AreaDemand;
use App\Support\CityHub;
use App\Support\Geo;
use App\Support\SubjectLinks;
use App\Support\TutorCascade;
use App\Support\ZonePages;
use App\Support\Zones;

/**
 * /city/{city}/zone/{zone}: home tutors in one zone of a city
 * (config/zones.php), e.g. /city/gurugram/zone/mg-road-cyber-city.
 *
 * Live only behind the ZonePages gate (written text in
 * database/seo-content/zones/{city}.json + at least three active area pages);
 * anything else is a 404, never a thin page.
 */
class ZonePageController extends Controller
{
    public function show(string $citySlug, string $zoneSlug)
    {
        $city = City::where('slug', $citySlug)->where('status', 't')->firstOrFail();

        $zone = Zones::fromSlug($city->slug, $zoneSlug);
        abort_if($zone === null, 404);

        $content = ZonePages::content($city->slug, $zone);
        $zoneAreas = Zones::areasIn($city->slug, $zone)
            ->map(fn ($a) => (object) ['name' => CityHub::cleanAreaName($a->name, $a->slug), 'slug' => $a->slug])->values();
        abort_if($content === null || $zoneAreas->count() < ZonePages::MIN_AREAS, 404);

        $cityName = $city->city_name;
        $cityKey = Zones::cityKey($city->slug);
        $seo = ZonePages::seo($city->slug, $cityName, $zone);
        $state = Geo::stateOf($city->slug);

        // Tips only: the guide's intro paragraphs already sit on every area page in the zone.
        $guide = config('zone_guides.' . $cityKey . '.' . $zone);
        $tips = array_values(array_filter((array) ($guide['tips'] ?? [])));
        $guidePost = null;
        if (! empty($guide['guide'])) {
            $guidePost = Blog::where('status', 't')->where('slug', $guide['guide'])->first(['title', 'slug']);
        }

        $tutorCards = TutorCascade::forZone($city->slug, $cityName, $zone);
        $realInZone = TutorCascade::realTutorsByZone($city->slug, $cityName)[$zone] ?? 0;
        $zoneDemand = AreaDemand::recentForZone($cityName, $zone);

        $siblings = ZonePages::live($city->slug)->reject(fn ($z) => $z->name === $zone)->values();
        $subjects = SubjectLinks::forCity($city->slug);

        $metatitle = $seo['title'];
        $metadesc = $seo['desc'];
        $metakey = '';

        return view('city.zone', compact('city', 'zone', 'content', 'zoneAreas', 'seo', 'state', 'tips',
            'guidePost', 'tutorCards', 'realInZone', 'zoneDemand', 'siblings', 'subjects', 'metatitle', 'metadesc', 'metakey'));
    }
}
