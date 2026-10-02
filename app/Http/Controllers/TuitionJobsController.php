<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Support\AreaDemand;
use App\Support\CityHub;
use App\Support\Geo;
use App\Support\JobsContent;
use App\Support\JobsPage;
use App\Support\SubjectLinks;
use App\Support\TutorCascade;
use App\Support\ZonePages;
use App\Support\Zones;
use Illuminate\Support\Collection;

/**
 * Tutor-side pages ("home tuition jobs in Gurgaon"), the supply engine of
 * the site: /tuition-jobs (India), /tuition-jobs/state/{state},
 * /tuition-jobs/{city} and the national topic pages (/maths-tutor-jobs, …).
 * Tutors search for work, so these pages bring the tutors that switch on the
 * parent-side pages.
 *
 * Written text comes from database/seo-content/jobs/ (App\Support\JobsContent);
 * a city or state without a file keeps the template, a topic without one is a 404.
 *
 * Unlike directory sites, a page whose city has nothing real behind it (no
 * zones, no real tutor, fewer than three requests) is live for recruitment
 * links but noindex, so we never publish hundreds of name-swapped pages.
 *
 * No JobPosting markup anywhere: these are hubs, not single vacancies, and
 * tutor plans are paid (Google does not allow postings that charge applicants).
 */
class TuitionJobsController extends Controller
{
    /** A zone with fewer real tutors than this is shown as needing tutors. */
    private const NEEDED_BELOW = 3;

    /** The one fee sentence the site may use (nxt-seo-rules §1). */
    public const FEE_SENTENCE = 'Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.';

    public function india()
    {
        $states = $this->states();
        $online = TutorCascade::realOnlineTutors();
        $topics = $this->topicLinks();
        $hub = JobsContent::hub();
        $jobs = self::skeleton($hub, [], false, null) + ['intro' => $hub['intro'] ?? []];

        $faqs = $hub['faqs'] ?? [];
        $faqs = $faqs !== [] ? $faqs : [
            ['How do I find home tuition or online tutor jobs in India on NXTutors?', 'Apply on WhatsApp with your subjects, classes, city and the areas you can travel to; our team sets up your tutor account with you. After our team checks your identity document, you appear on the matching city, area and subject pages and in the two or three tutors we shortlist for each family request.'],
            ['Can I teach online from any city?', 'Yes. Choose online or both on your profile. Online requests can come from families anywhere in India; home requests come only from the areas you list, so you are never sent across a city you cannot reach.'],
            ['Can I teach only Classes 1 to 5, or only part time?', 'Yes. Your profile lists the classes, subjects and boards you teach and the hours you are free, and requests are matched on those, so you can keep to primary classes or a few evenings a week.'],
            ['Who sets the fee?', 'You do. Put your fee per class on your profile; families see it before the free demo class. ' . self::FEE_SENTENCE],
            ['What does it cost to join?', 'See the tutor plans on our pricing page before you sign up; what each plan includes is listed there.'],
            ['How are tutors chosen for a family?', 'We match by subject, board, class, area and availability and share two or three tutors, not a long list, so each request goes to a small number of well-matched tutors rather than to everyone.'],
        ];

        $metatitle = 'Home Tuition Jobs & Online Tutor Jobs in India | NXTutors';
        $metadesc = 'Home tuition jobs near you and online tutor jobs across India, Class 1 to 12: pick your state or city, see where tutors are needed and set your own fee.';
        $canonical = url('/tuition-jobs');
        $metarobots = null;
        $level = 'india';

        return view('pages.tuition-jobs', compact('level', 'states', 'online', 'topics', 'jobs', 'faqs', 'metatitle', 'metadesc', 'canonical', 'metarobots'));
    }

    public function state(string $state)
    {
        $group = $this->states()->firstWhere('slug', $state);
        abort_unless($group, 404);

        $content = JobsContent::state($state);
        $label = $group['name'];
        $faqs = $content['faqs'] ?? [];
        if ($faqs === []) {
            $faqs = [
                ['How do I get tuition jobs in ' . $label . '?', 'Apply on WhatsApp with your city and the areas you can travel to; our team sets up your profile with you. After our identity check you appear on the pages for your city and areas, and in shortlists for families near you. Online classes can come from anywhere in India.'],
                ['Which cities in ' . $label . ' does NXTutors cover?', 'The cities listed on this page have their own tutor pages for families. If your town is not listed, apply anyway: add your town and online teaching, and we open new cities where tutors and families are.'],
                ['Who sets the fee?', 'You do; families see it before the free demo class. ' . self::FEE_SENTENCE],
            ];
        }

        $metatitle = self::fitTitle([
            'Home Tuition Jobs in ' . $label . ' – Tutor Vacancies by City | NXTutors',
            'Home Tuition Jobs in ' . $label . ' – Cities & Towns | NXTutors',
            'Home Tuition Jobs in ' . $label . ' | NXTutors',
            'Home Tuition Jobs in ' . $label,
        ]);
        $metadesc = 'Home tuition and online tutor jobs in ' . $label . ': ' . ($content ? 'the state board, towns and cities' : 'cities') . ' where families need tutors, how joining works and the fee you set. Apply to NXTutors.';
        $canonical = url('/tuition-jobs/state/' . $state);
        $metarobots = $group['indexable'] ? null : 'noindex, follow';
        $level = 'state';
        $citySlugs = $group['cities']->pluck('slug')->all();
        $jobs = self::skeleton($content, $citySlugs, false, $label);
        if ($jobs['boards'] === [] && ! empty($content['board'])) {
            // No v2 board cards yet: the state board box becomes the one card.
            $b = $content['board'];
            $jobs['boards'] = JobsPage::boardCards([['key' => 'state', 'name' => $b['name'], 'site' => $b['site'], 'classes' => '', 'note' => $b['summary']]], $citySlugs);
        }
        $topics = $this->topicLinks();

        return view('pages.tuition-jobs', compact('level', 'group', 'label', 'content', 'jobs', 'topics', 'faqs', 'metatitle', 'metadesc', 'canonical', 'metarobots'));
    }

    public function show(string $city)
    {
        $cityRow = City::where('status', 't')->where('slug', $city)->firstOrFail();
        $cityName = $cityRow->city_name;
        $aka = Geo::akaOf($city);
        $label = $aka && $city === 'gurugram' ? $aka : Geo::displayName($city, $cityName);
        $areas = CityHub::areaList($city);
        $zonesCfg = config('zones.' . Zones::cityKey($cityName), []);
        $content = JobsContent::city($city);

        $zones = collect();
        if ($zonesCfg) {
            $coverage = TutorCascade::realTutorsByZone($city, $cityName);
            // Every active area under its zone (not the first six): this page is
            // a crawl path to each area as well as a recruitment page.
            $byZone = $areas->unique('slug')->groupBy(fn ($a) => CityHub::zoneOfArea($city, $cityName, $a) ?? '');
            $zones = collect($zonesCfg)->keys()->map(fn ($z) => [
                'name' => $z,
                'needed' => ($coverage[$z] ?? 0) < self::NEEDED_BELOW,
                'url' => ZonePages::liveUrl($city, (string) $z),
                'note' => $content['zone_notes'][$z] ?? null,
                'areas' => collect($byZone[$z] ?? [])->sortBy(fn ($a) => $a->name, SORT_NATURAL | SORT_FLAG_CASE)->values(),
            ])->sortBy(fn ($z) => $z['needed'] ? 0 : 1)->values();
            if (! empty($byZone[''])) {
                $zones->push(['name' => 'Other areas of ' . $cityName, 'needed' => false, 'url' => null, 'note' => null,
                    'areas' => collect($byZone[''])->sortBy(fn ($a) => $a->name, SORT_NATURAL | SORT_FLAG_CASE)->values()]);
            }
        }

        $requests = AreaDemand::recentForCity($cityName);
        $realHere = TutorCascade::realTutorsInCity($city);
        $stateName = Geo::stateOf($city);
        $stateSlug = Geo::stateSlug($stateName);

        // The city's own board and subject pages, beside the written boards paragraph.
        $boardLinks = [];
        if ($content && $content['boards'] !== '') {
            $boardLinks = array_intersect_key(SubjectLinks::forCityGrouped($city), array_flip(['board', 'subject', 'exam']));
        }

        $faqs = $content['faqs'] ?? [];
        if ($faqs === []) {
            $faqs = [
                ['How do I get home tuition jobs in ' . $label . ' through NXTutors?', 'Apply on WhatsApp and list the areas of ' . $cityName . ' you can travel to. After our team checks your identity document, you appear on those area pages and in our shortlists, and families book a free demo class with you.'],
                ['How much can a home tutor earn in ' . $label . '?', 'You set your own fee per class, and families see it before the demo. ' . self::FEE_SENTENCE],
                ['Can I teach online as well as at home?', 'Yes. Choose home, online or both. Online classes can come from families anywhere in India; home requests come from the areas you list.'],
                ['What does it cost to join?', 'See the tutor plans on our pricing page before you sign up; what each plan includes is listed there.'],
            ];
            if ($zones->isNotEmpty()) {
                array_splice($faqs, 2, 0, [['Which areas of ' . $label . ' need tutors most?', 'The zones marked "tutors needed" on this page have the fewest tutors travelling to them. Adding one of those zones to your travel areas puts you in front of families who currently see mostly online tutors.']]);
            }
        }

        $metatitle = self::fitTitle([
            'Home Tuition Jobs in ' . $label . ' – Tutor Vacancies by Area | NXTutors',
            'Home Tuition Jobs in ' . $label . ' – Tutor Vacancies by Area',
            'Home Tuition Jobs in ' . $label . ' | NXTutors',
            'Home Tuition Jobs in ' . $label,
        ]);
        $metadesc = 'Home tuition jobs in ' . $label . ($label !== $cityName ? ' (' . $cityName . ')' : '') . ': where tutors are needed by zone, '
            . (! empty($requests) ? 'recent requests, ' : '') . 'fees you set, the ID check and how to join NXTutors.';
        $canonical = url('/tuition-jobs/' . $city);
        // Nothing real behind the page yet: keep it for recruitment links, out of the index.
        $metarobots = self::cityIndexable($city) ? null : 'noindex, follow';
        $level = 'city';
        $jobs = self::skeleton($content, [$city], false, $label);
        $topics = $this->topicLinks();
        // Subject and exam pages of the city, for the related links.
        $cityLinks = array_intersect_key(SubjectLinks::forCityGrouped($city), array_flip(['subject', 'exam']));

        return view('pages.tuition-jobs', compact('level', 'cityRow', 'cityName', 'label', 'zones', 'areas', 'requests', 'realHere', 'stateName', 'stateSlug', 'content', 'boardLinks', 'jobs', 'topics', 'cityLinks', 'faqs', 'metatitle', 'metadesc', 'canonical', 'metarobots'));
    }

    /** National topic page (/maths-tutor-jobs, /online-tutor-jobs, …): 404 until its text is written. */
    public function topic(string $topic)
    {
        $content = JobsContent::topic($topic);
        abort_unless($content, 404);

        $label = JobsContent::TOPIC_LABELS[$topic] ?? $content['h1'];
        $faqs = $content['faqs'];
        $topicCities = $this->topicCities();
        $parentKey = JobsContent::TOPIC_PARENT[$topic] ?? null;
        $parentLink = $parentKey && isset(SubjectLinks::live()[$parentKey])
            ? ['url' => url('/' . $parentKey), 'label' => SubjectLinks::anchor(SubjectLinks::live()[$parentKey])]
            : null;
        $topics = collect($this->topicLinks())->reject(fn ($t) => $t['slug'] === $topic)->values()->all();

        $metatitle = self::fitTitle([$content['title'], $content['h1']]);
        $metadesc = $content['description'] !== '' ? $content['description'] : $content['intro'][0];
        $canonical = url('/' . $topic);
        $metarobots = null;
        $level = 'topic';
        $jobs = self::skeleton($content, [], in_array($topic, JobsContent::PINK_TOPICS, true), null);

        return view('pages.tuition-jobs', compact('level', 'topic', 'label', 'content', 'jobs', 'topicCities', 'parentLink', 'topics', 'faqs', 'metatitle', 'metadesc', 'canonical', 'metarobots'));
    }

    /**
     * The shared components' data (App\Support\JobsPage): storyboard panels
     * (null when switched off in config jobs_pages.storyboard), women-tutor
     * section, why-cards and board cards, from the page's JSON or the defaults.
     */
    public static function skeleton(?array $src, array $citySlugs, bool $pink, ?string $place): array
    {
        return [
            'story' => config('jobs_pages.storyboard', true) ? JobsPage::story($src['story'] ?? []) : null,
            'women' => JobsPage::women($src['women'] ?? null),
            'why' => JobsPage::why($src['why'] ?? []),
            'boards' => JobsPage::boardCards($src['board_cards'] ?? [], $citySlugs),
            'pink' => $pink,
            'place' => $place,
        ];
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
     * States with their active city pages, for the India and state pages and
     * the sitemap, plus states that have written text (jobs/states/{slug}.json)
     * but no city page yet: those list their towns, and are indexable on the
     * strength of that text.
     *
     * @return Collection<int, array{name: string, slug: string, cities: Collection, indexable: bool, written: bool}>
     */
    public function states(): Collection
    {
        $cities = City::where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')->orderBy('city_name')->get(['city_name', 'slug']);
        $written = JobsContent::writtenStates();

        $groups = collect(Geo::groupByState($cities->map(fn ($c) => (object) ['slug' => $c->slug, 'city_name' => $c->city_name])))
            ->map(function ($list, $state) use ($written) {
                $list = collect($list)->map(fn ($c) => (object) [
                    'slug' => $c->slug,
                    'name' => Geo::displayName($c->slug, $c->city_name),
                    'indexable' => self::cityIndexable($c->slug),
                ]);
                $slug = Geo::stateSlug($state);

                return ['name' => $state, 'slug' => $slug, 'cities' => $list,
                    'indexable' => $list->contains('indexable', true) || isset($written[$slug]), 'written' => isset($written[$slug])];
            })->values();

        foreach ($written as $slug => $name) {
            if (! $groups->contains('slug', $slug)) {
                $groups->push(['name' => $name, 'slug' => $slug, 'cities' => collect(), 'indexable' => true, 'written' => true]);
            }
        }

        return $groups->sort(fn ($a, $b) => ($a['name'] === Geo::OTHER_STATE) <=> ($b['name'] === Geo::OTHER_STATE) ?: strcmp($a['name'], $b['name']))->values();
    }

    /** Live topic pages: [['slug','url','label'], …]. */
    public function topicLinks(): array
    {
        return array_map(fn ($t) => ['slug' => $t, 'url' => url('/' . $t), 'label' => JobsContent::TOPIC_LABELS[$t] ?? $t], JobsContent::liveTopics());
    }

    /** Up to eight active, indexable city jobs pages for the topic pages. */
    private function topicCities(): array
    {
        $rows = City::where('status', 't')->whereIn('slug', JobsContent::TOP_CITIES)->get(['city_name', 'slug'])->keyBy('slug');
        $out = [];
        foreach (JobsContent::TOP_CITIES as $slug) {
            if (count($out) >= 8) {
                break;
            }
            if (isset($rows[$slug]) && self::cityIndexable($slug)) {
                $name = $slug === 'gurugram' ? 'Gurgaon' : Geo::displayName($slug, $rows[$slug]->city_name);
                $out[] = ['url' => url('/tuition-jobs/' . $slug), 'label' => 'Tuition jobs in ' . $name];
            }
        }

        return $out;
    }

    /** The first title that fits in 65 characters (the last one, cut, if none does). */
    public static function fitTitle(array $candidates): string
    {
        foreach ($candidates as $t) {
            if (mb_strlen($t) <= 65) {
                return $t;
            }
        }

        return rtrim(mb_substr((string) end($candidates), 0, 65));
    }
}
