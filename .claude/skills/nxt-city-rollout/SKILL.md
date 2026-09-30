---
name: nxt-city-rollout
description: Step-by-step playbook to launch or complete a city on nxtutors.com (zones, zone guides, city hub, tuition-jobs page, locality audit, society-to-sector mapping, blog cluster, sitemap and live verification). Use when the user says "do Delhi / Noida / NCR / Mumbai / next city", "roll out a city", "fix all pages for {city}", or plans state/metro/tier-2/tier-3 expansion. Gurugram (Sep 2026) is the reference implementation.
---

# City roll-out playbook

Load `nxt-seo-rules` first. Gurugram is the finished example: `config/zones.php['Gurugram']`, `config/zone_guides.php`, `resources/views/city/content/gurugram.blade.php`, `/tuition-jobs/gurugram`, `config/area_sectors.php`, 19 cluster posts.

## Order (do not skip: later steps depend on earlier ones)
1. **Baseline.** Live sitemap counts for the city (`/sitemap-areas-{city}.xml`), Search Console export filtered to the city (see `nxt-gsc-review`), current area pages, tutor supply (real tutors whose `register.city` maps to the city via `App\Support\Zones::cityOf`).
2. **Zones** (`config/zones.php`): 6–10 neighbourhood groupings by sector/locality name, as the city's families think of them. Approximate is fine; say so in the comment.
3. **Zone guide blocks** (`config/zone_guides.php`): per zone, 2 intro paragraphs + 3 tips, practical and verifiable (housing type, traffic timing, gated-entry routines, board mix in general terms). No school names, no invented facts. This is what makes every area page in the zone unique.
4. **Locality audit.** List every active area page; flag duplicates (301 via `config/area_redirects.php` + switch-off migration), misplaced ones (other city), and missing high-demand localities (from GSC queries and the zone list). Add missing ones by migration (pattern: `2026_09_30_110000_add_old_and_central_gurugram_area_pages.php`, empty pincode rather than guessed).
5. **Society mapping.** Research agent (`nxt-local-researcher`) maps society pages to sectors with a source each → `config/area_sectors.php['{city}']`. Accuracy over coverage.
6. **City hub content** `resources/views/city/content/{slug}.blade.php` (3,000–4,000 words): zones, boards, fees, how home tuition works there, area links via the `$ggA` helper pattern, getting started. Meta title/description by migration (only if unedited; down() restores).
7. **Tuition-jobs page** appears automatically once the city has zones; check `/tuition-jobs/{city}` renders and is in `sitemap-pages.xml`.
8. **City × subject / class pages** (`config/subject_pages.php` + `resources/views/subjects/content|faqs`): maths, science, physics, chemistry first; IB/IGCSE only where the city has international-school demand; class 10/12/primary/online as in Gurugram.
9. **Blog cluster** (`nxt-blog-publish`): fees, hiring safely, JEE, NEET, boards, one guide per zone group, moving to the city. City hub = pillar.
10. **Ship and verify** (`nxt-seo-rules` §6): tests, deploy, curl every new URL (200, title, robots, zone block), sitemap counts, then Search Console "Request indexing" for the hub + 3 top pages (user action).

## Speed
- One metro per 2–4 weeks with parallel agents (writers, researchers). Do not publish thousands of URLs at once; ramp city by city and read Search Console monthly before the next.
- Tier-3 cities: hub + tuition-jobs + zones only; area pages switch on as tutors register (cascade keeps them useful meanwhile).

## Definition of done (per city)
Zones + zone guides ✔ · no duplicate/misplaced areas ✔ · ≥80% society pages mapped ✔ · hub ≥3,000 words ✔ · tuition-jobs live ✔ · 4+ city×subject pages ✔ · ≥10 cluster posts ✔ · sitemap per city ✔ · all live checks pass ✔.
