<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * No civic complaints on the site (1 Oct 2026): traffic and rain appear only
 * as timing advice. Rewrites the complaint wording (waterlogging, potholes,
 * encroachment, construction dust, "residents complain", stray cattle,
 * civic issues) that earlier seo migrations copied into the live database
 * from database/seo-content (areas/*-research.json -> area_desc,
 * areas/*-faqs*.json -> FAQ question/answer, blog/*.html -> bdesc). The same
 * new text is in those source files.
 *
 * Each swap is a plain substring replace inside one row, matched by city slug
 * + area slug or by blog slug, so a row edited by hand since (no match) is
 * left alone. FAQ answers were stored through e(), so they are matched
 * escaped. All columns touched are TEXT. down() swaps the old text back.
 */
return new class extends Migration
{
    /** [city slug, area slug, old, new] in city_area_list_managment.area_desc */
    private const AREAS = [
        ['noida', 'sector-19', 'Residents mention internal traffic and some waterlogging during heavy rain, so it is worth agreeing a backup online session for monsoon evenings.', 'Internal roads get busy and travel can slow on heavy-rain evenings, so it is worth agreeing a backup online session for the monsoon.'],
        ['noida', 'sector-23', 'Residents mention traffic jams on the approach roads and waterlogging during the monsoon as the main everyday problems.</p>', 'The approach roads are busiest at peak hours, so timing matters more than distance here.</p>'],
        ['noida', 'sector-31', 'Residents mention patchy roads and drainage in places, so an online backup for rainy evenings is useful.', 'On heavy-rain evenings travel can slow, so an online backup is useful.'],
        ['noida', 'sector-36', 'carry most of the through traffic, and residents mention road noise and occasional congestion, so it helps', 'carry most of the through traffic and can get busy at peak hours, so it helps'],
        ['noida', 'sector-37', 'and residents also report congestion and waterlogging on some stretches in the monsoon.', 'and travel slows further on heavy-rain evenings, so allow extra time or move that lesson online.'],
        ['noida', 'sector-52', 'Residents do report peak-hour traffic jams and roads that suffer in the monsoon, so tutors who drive', 'Roads are busy at peak hours and slower on heavy-rain evenings, so tutors who drive'],
        ['noida', 'sector-55', 'Residents do mention jams and road encroachment at peak hours, so an early-evening slot', 'Roads are busy at peak hours, so an early-evening slot'],
        ['noida', 'sector-56', 'Residents report that traffic jams are common at peak hours and that some internal roads are in poor shape, which is worth keeping in mind when fixing a weekday slot.', 'Traffic is heavy at peak hours, so fix a weekday slot that starts before or after the rush.'],
        ['noida', 'sector-61', 'Residents do complain about heavy peak-hour traffic and tight parking, so', 'Peak-hour traffic is heavy and parking is tight, so'],
        ['noida', 'sector-115', 'Online classes are a good fallback during monsoon, when drainage problems are reported.', 'Online classes are a good fallback on heavy-rain days in the monsoon.'],
        ['noida', 'sector-119', 'close to the Greater Noida West border. Stray cattle on the roads are a commuting complaint that residents here and in nearby sectors raise.</p>', 'close to the Greater Noida West border.</p>'],
        ['noida', 'sector-120', 'with Sector 117 close by. Residents raise civic issues such as waste dumping and stray cattle, and property registration is still pending in some societies.</p>', 'with Sector 117 close by.</p>'],
        ['noida', 'sector-122', 'Residents mention waterlogging in the rains and narrow internal lanes that get congested at office hours, so a fixed after-school slot', 'Narrow internal lanes get busy at office hours and travel slows on heavy-rain evenings, so a fixed after-school slot'],
        ['noida', 'sector-137', 'Many families also choose online classes for weeks when traffic or monsoon waterlogging makes travel slow.', 'Many families also choose online classes for heavy-traffic or heavy-rain weeks, when travel is slow.'],
        ['greater-noida', 'sector-1', 'Residents mention water supply, drainage in the monsoon and traffic as recurring issues, and public transport is thin, so tutors mostly come by bike, car or e-rickshaw.', 'Public transport is thin, so tutors mostly come by bike, car or e-rickshaw, and on heavy-rain evenings an online class keeps the routine going.'],
        ['greater-noida', 'sector-10', 'Where construction is still going on, dust and patchy stretches of road are common, so a clear pin location helps.', 'Construction is still going on in parts of the sector, so a clear pin location helps.'],
        ['greater-noida', 'techzone-4', 'Peak-hour congestion around Ek Murti Chowk is common, internal roads are still patchy in places, and residents report dust from ongoing construction and waterlogging in the monsoon.', 'Ek Murti Chowk is busy at peak hours, so an early-evening slot is easier, and on heavy-rain evenings travel can slow, so agree an online fallback.'],
        ['greater-noida', 'gaur-city-2', 'Residents regularly complain about traffic and poor road surfaces around the township, especially near the chowks, so it is worth', 'Traffic builds near the chowks around the township in the evening, so it is worth'],
        ['greater-noida', 'pi-1', 'Residents mention traffic jams at Pari Chowk during peak hours and patchy street lighting on some roads, so many parents', 'Pari Chowk is busy at peak hours, so many parents'],
        ['greater-noida', 'sigma-1', 'The Surajpur–Kasna road is known for potholes and roadside encroachment by vendors and autos, which slows traffic at busy hours, so tutors', 'The Surajpur–Kasna road slows down at busy hours, so tutors'],
        ['greater-noida', 'eta-2', '<p>Residents mention ongoing construction dust and noise, roadside parking that squeezes traffic, limited shopping and a market that is some way off, so plan', '<p>Construction is still going on in parts of the sector, shops are limited and the market is some way off, so plan'],
        ['greater-noida', 'eta-2', 'and some residents feel the link from the station to their society is weak, so a tutor may prefer to ride in.', 'and the last stretch from the station to many societies needs an e-rickshaw, so a tutor may prefer to ride in.'],
        ['greater-noida', 'phi-3', 'Residents do note that some roads go quiet after dark and that park upkeep is patchy, so many families', 'Some roads go quiet after dark, so many families'],
    ];

    /** [city slug, area slug, old, new] in that area's FAQ question/answer */
    private const FAQS = [
        ['noida', 'sector-19', 'Residents of Sector 19 mention internal traffic and some waterlogging during heavy rain, so moving', 'Internal roads get busy and travel can slow on heavy-rain evenings, so moving'],
        ['noida', 'sector-23', 'Residents of Sector 23 mention waterlogging during the monsoon, so a planned online fallback', 'On heavy-rain days travel can slow, so a planned online fallback'],
        ['noida', 'sector-23', 'lessons can continue on screen until the roads clear.', 'lessons can continue on screen until travel is easier.'],
        ['noida', 'sector-31', 'Residents mention patchy roads and drainage in places, so an online backup for rainy evenings keeps lessons going.', 'On heavy-rain evenings travel can slow, so an online backup keeps lessons going.'],
        ['noida', 'sector-31', 'when roads in Sector 31 are difficult.', 'when travel to Sector 31 is slow.'],
        ['noida', 'sector-36', 'carry most of the through traffic, and residents mention road noise and occasional congestion.', 'carry most of the through traffic and can get busy at peak hours.'],
        ['noida', 'sector-37', 'What if monsoon waterlogging stops the tutor reaching Sector 37?', 'What if heavy rain slows the tutor\'s trip to Sector 37?'],
        ['noida', 'sector-37', 'Residents report congestion and waterlogging on some stretches in the monsoon, and online sessions', 'Travel slows on heavy-rain evenings, and online sessions'],
        ['noida', 'sector-52', 'Residents report peak-hour traffic jams and roads that suffer in the monsoon, so a tutor', 'Roads are busy at peak hours and slower on heavy-rain evenings, so a tutor'],
        ['noida', 'sector-55', 'Residents mention jams and road encroachment at peak hours, so starting', 'Roads are busy at peak hours, so starting'],
        ['noida', 'sector-56', 'Do traffic and road conditions in Sector 56 affect tuition timing?', 'Does peak-hour traffic in Sector 56 affect tuition timing?'],
        ['noida', 'sector-56', 'Residents report that traffic jams are common at peak hours and that some internal roads are in poor shape.', 'Traffic is heavy at peak hours.'],
        ['noida', 'sector-61', 'Residents complain about heavy peak-hour traffic and tight parking, so', 'Peak-hour traffic is heavy and parking is tight, so'],
        ['noida', 'sector-115', 'Can Sector 115 classes continue during monsoon drainage problems?', 'Can Sector 115 classes continue on heavy-rain days?'],
        ['noida', 'sector-115', 'Yes, online classes are a good fallback during monsoon, when drainage problems are reported in Sector 115.', 'Yes, online classes are a good fallback on heavy-rain days in the monsoon.'],
        ['noida', 'sector-119', 'Do stray cattle on the roads affect tutors coming to Sector 119?', 'How do tutors usually travel to Sector 119?'],
        ['noida', 'sector-119', 'They can slow a trip. Stray cattle on the roads are a commuting complaint residents here and in nearby sectors raise, and there is no metro station', 'Mostly by road. There is no metro station'],
        ['noida', 'sector-122', 'What if waterlogging stops a tutor reaching Sector 122?', 'What if heavy rain slows a tutor\'s trip to Sector 122?'],
        ['noida', 'sector-122', 'Residents mention waterlogging in the rains, so online classes', 'Travel can slow on heavy-rain days, so online classes'],
        ['noida', 'sector-137', 'What happens to home tuition in Sector 137 during monsoon waterlogging?', 'What happens to home tuition in Sector 137 on heavy-rain days?'],
        ['noida', 'sector-137', 'Many families choose online classes for weeks when traffic or monsoon waterlogging makes travel slow.', 'Many families choose online classes for heavy-traffic or heavy-rain weeks, when travel is slow.'],
        ['greater-noida', 'sector-37', 'Plan ahead, as residents mention frequent parking problems.', 'Plan ahead, as parking can be tight.'],
    ];

    /** [blog slug, old, new] in blog_managment.bdesc */
    private const BLOGS = [
        ['greater-noida-sectors-tuition-guide', 'residents mention parking problems, so a tutor on a two-wheeler arrives most easily.', 'parking can be tight, so a tutor on a two-wheeler arrives most easily.'],
        ['home-tuition-fees-greater-noida', 'whether a class moves online on a waterlogged evening at the same fee.', 'whether a class moves online on a heavy-rain evening at the same fee.'],
        ['home-tuition-fees-noida', '<p>Residents in several sectors, including parts of Old Noida and Sector 137 on the expressway, report waterlogging in the monsoon. Agreeing in advance that a class moves online on a flooded evening saves', '<p>On heavy-rain evenings in the monsoon, travel can slow in several sectors, including parts of Old Noida and Sector 137 on the expressway. Agreeing in advance that a class moves online on such an evening saves'],
        ['moving-to-noida-school-and-tutoring-guide', '<li><strong>Ask neighbours about the monsoon.</strong> Residents of several sectors, including parts of Old Noida and Sector 137, report waterlogging. It affects both the school run and tutor visits.</li>', '<li><strong>Plan for monsoon evenings.</strong> On heavy-rain days travel can slow in several sectors, including parts of Old Noida and Sector 137, for the school run and tutor visits alike, so agree an online fallback early.</li>'],
        ['noida-expressway-and-extension-tuition-guide', 'Residents of <a href="/city/noida/sector-137">Sector 137</a> report heavy peak-hour traffic and monsoon waterlogging, and residents of <a href="/city/noida/sector-168">Sector 168</a> also describe heavy traffic.', 'Around <a href="/city/noida/sector-137">Sector 137</a> and <a href="/city/noida/sector-168">Sector 168</a> traffic is heavy at peak hours and slower still on heavy-rain evenings, so an early-evening slot or an online fallback helps.'],
        ['noida-expressway-and-extension-tuition-guide', 'has been under construction there. Stray cattle blocking roads is a reported problem in <a href="/city/noida/sector-119">Sector 119</a> and nearby sectors. The nearest metro', 'has been under construction there, so allow extra time at peak hours. The nearest metro'],
        ['noida-expressway-and-extension-tuition-guide', 'move a home class online on flooded or gridlocked evenings instead of cancelling.', 'move a home class online on heavy-rain or heavy-traffic evenings instead of cancelling.'],
        ['noida-sector-62-and-70s-tuition-guide', '<li><strong>Sector 61 and Sector 55 internal roads:</strong> residents cite peak-hour traffic, parking problems and road encroachment.</li>', '<li><strong>Sector 61 and Sector 55 internal roads:</strong> busy at peak hours, with tight parking, so an early-evening slot is easier.</li>'],
        ['old-and-central-noida-tuition-guide', '<li><strong>Agree a backup.</strong> Residents in some sectors, including 19, 23 and 37, report monsoon waterlogging. Decide now that a flooded evening becomes an online class.</li>', '<li><strong>Agree a backup.</strong> On heavy-rain evenings travel can slow in some sectors, including 19, 23 and 37. Decide now that such an evening becomes an online class.</li>'],
    ];

    public function up(): void
    {
        $this->run(false);
    }

    public function down(): void
    {
        $this->run(true);
    }

    private function run(bool $reverse): void
    {
        $pick = fn (array $s) => $reverse ? [$s[1], $s[0]] : $s;

        if (Schema::hasTable('city_managment') && Schema::hasTable('city_area_list_managment')) {
            foreach ($this->ordered(self::AREAS, $reverse) as [$city, $area, $old, $new]) {
                [$from, $to] = $pick([$old, $new]);
                foreach ($this->areaIds($city, $area) as $id) {
                    $desc = (string) DB::table('city_area_list_managment')->where('id', $id)->value('area_desc');
                    if (str_contains($desc, $from)) {
                        DB::table('city_area_list_managment')->where('id', $id)->update(['area_desc' => str_replace($from, $to, $desc)]);
                    }
                }
            }

            if (Schema::hasTable('city_area_related_faqs_managment')) {
                foreach ($this->ordered(self::FAQS, $reverse) as [$city, $area, $old, $new]) {
                    [$from, $to] = $pick([$old, $new]);
                    foreach ($this->areaIds($city, $area) as $id) {
                        foreach (DB::table('city_area_related_faqs_managment')->where('area_id', $id)->get(['id', 'question', 'answer']) as $row) {
                            $q = str_replace($from, $to, (string) $row->question);
                            $a = str_replace(e($from), e($to), (string) $row->answer);
                            if ($q !== (string) $row->question || $a !== (string) $row->answer) {
                                DB::table('city_area_related_faqs_managment')->where('id', $row->id)->update(['question' => $q, 'answer' => $a]);
                            }
                        }
                    }
                }
            }
        }

        if (Schema::hasTable('blog_managment')) {
            foreach ($this->ordered(self::BLOGS, $reverse) as [$slug, $old, $new]) {
                [$from, $to] = $pick([$old, $new]);
                foreach (DB::table('blog_managment')->where('slug', $slug)->get(['id', 'bdesc']) as $row) {
                    $body = (string) $row->bdesc;
                    if (str_contains($body, $from)) {
                        DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => str_replace($from, $to, $body)]);
                    }
                }
            }
        }
    }

    private function ordered(array $swaps, bool $reverse): array
    {
        return $reverse ? array_reverse($swaps) : $swaps;
    }

    private function areaIds(string $city, string $area): array
    {
        $cityId = DB::table('city_managment')->where('slug', $city)->value('id');

        return $cityId
            ? DB::table('city_area_list_managment')->where('city_id', $cityId)->where('slug', $area)->pluck('id')->all()
            : [];
    }
};
