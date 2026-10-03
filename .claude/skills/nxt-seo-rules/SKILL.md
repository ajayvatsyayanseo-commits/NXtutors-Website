---
name: nxt-seo-rules
description: The standing SEO and content rules for nxtutors.com — site facts, claims we may and may not make, page types with length floors, indexing and tutor-cascade rules, URL and sitemap structure, and how work is shipped. Load before writing, auditing or building ANY NXTutors page, blog post, city/area page, title, schema or sitemap change. Other nxt-* skills assume it.
---

# NXTutors SEO rules

nxtutors.com is a tutor-matching platform (Laravel 12, repo `~/NXtutors-Website`, push to `main` auto-deploys to CloudPanel). It is independent of Ajay Vatsyayan Classes and Maths Bodhi: plan it on its own, never with cross-site caveats.

## 1. Facts we may state (and nothing else about the company)
- Parents get **two or three matched tutors** per request; the **first class is a free demo**; **switching tutor later is free**; the parent **sees each tutor's fee before the demo**.
- Home tutoring across Gurugram (and cities where tutors exist), online tutoring across India. Office: **Sector 66, Gurugram**.
- Fees, the only allowed sentence: "Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more."
- Tutors set their own fee. Tutor plans are **paid** (/pricing): never say joining is free.
- Tutor ID check (confirmed by Ajay, 1 Oct 2026; updated 3 Oct 2026): tutors who join confirm phone/email with a one-time code and upload a government photo ID that the team reviews; the **Verified** badge appears only after that review. While `TUTORS_PUBLISH_BEFORE_REVIEW` is on (hiring phase) a new profile is live before the review, so never write that a profile goes live only after the ID check. Say "tutors who join go through an ID check; the Verified badge appears only after our team has reviewed the ID" and link `/how-we-verify-tutors` (area/zone text: no word "verified", see `SeoText::BANNED`). It is **not** a police or background check. Never "every tutor on NXTutors is verified" (sample profiles exist), never promise response times ("same day").
- Claim: "AI-first tutoring, with real teachers". Never "India's first", "No. 1", "best", "guaranteed".

## 2. Hard content rules (a breach = do not publish)
1. No invented facts: no made-up statistics, counts, success rates, testimonials, quotes or named families.
2. **Never call sample profiles verified.** Counts that include samples say "tutor profiles", not "verified tutors". Real tutors: Ajay Vatsyayan, Abhinandan Tiwary, Aaditya Kashyap, Parul (see `config/nx_authors.php`, `register.is_sample`).
3. No school names; no people's names except the named author of that page.
4. Exam/syllabus facts only from official sources (NTA, jeeadv.ac.in, CBSE/cbseacademic, CISCE, IBO, Cambridge, Pearson, College Board, UCAS, HBCSE/MTAI, and the state boards' and CET cells' own sites, e.g. mahahsscboard.in for Maharashtra SSC/HSC and cetcell.mahacet.org for MHT-CET; kseab.karnataka.gov.in and pue.karnataka.gov.in / kea.kar.nic.in (KCET); bse.telangana.gov.in, tgbie.cgg.gov.in and the TG EAPCET site; dge.tn.gov.in; wbbse.wb.gov.in, wbchse.wb.gov.in and wbjeeb.nic.in (WBJEE); gseb.org (GSEB, GUJCET); rajeduboard.rajasthan.gov.in; upmsp.edu.in). No unannounced dates.
5. Named authors (Ajay, Abhinandan, Aaditya): never invent anecdotes, years or results for them.
6. Privacy: request data is shown only through `App\Support\AreaDemand` (month + class + board + subject, ≥3 requests, opt-outs in `config/tutors.php demand_exclude_ids`).

## 3. Page types and length floors
Length follows usefulness, not a single number. Floors (body words):

| Page type | Floor | Unique because |
|---|---|---|
| National pillar blog | 4,000 | expertise, exam facts, worked examples |
| City cluster blog / guide | 1,600 | city specifics + links to area pages |
| Zone guide blog | 1,100 | commute, housing, timing, board mix |
| City hub `/city/{city}` | 3,000 | zones, boards, fees, areas, tutors, FAQs |
| City × subject / class page | 1,600 | board/exam depth + local tutors |
| Area / sector page | 600 + data | zone block, cascade tutors, requests |
| Society page | 300 + data | zone via `config/area_sectors.php` |

Padding to reach a floor is a breach; add a real module instead (see `nxt-location-modules`).

## 4. Indexing, tutors and pages
- **Tutor cascade** on area pages (`App\Support\TutorCascade`): in the area → travels there → zone → city → state (online only) → India (online only). Each card labelled; real before sample. Pages are never empty.
- Locality uniqueness comes from **zone content** (`config/zone_guides.php`) written per city before its area pages are promoted.
- Generated `/p/` pages: only those in `config/generated_pages.php` are indexable; the rest noindex and out of the sitemap.
- Duplicate or misplaced area pages: 301 via `config/area_redirects.php` + switch-off migration.
- Housing-society pages get their zone from `config/area_sectors.php` (researched, with sources).
- Tutor supply: `/tuition-jobs/{city}` (cities with zones) and the "Teach in {area}" box.

## 5. URLs, titles, schema, sitemaps
- Titles ≤ 65 chars, "Home Tutor(s) in {place}, {City} – {what}"; "Gurgaon" in titles (what people type), "Gurugram" in body/H1 is fine.
- Meta descriptions 140–160 chars, include fee range or free demo where true.
- Schema: EducationalOrganization (home, `#organization`, sameAs Google Business Profile), Service per city, BreadcrumbList, FAQPage where FAQs are visible, Article with named author on posts.
- Sitemaps: `sitemap.xml` index → per-section files, **`sitemap-areas-{city}.xml` per city**, **`sitemap-blog-{topic}.xml` per topic**. Never a lastmod of "today" without a real change. Noindexed pages never in a sitemap.

## 6. How work ships
- **Column lengths (outage 30 Sep 2026, ~20 min):** tests run on SQLite, which ignores VARCHAR limits; production MySQL does not. A too-long string makes the migration fail mid-deploy, the post-migrate steps never run and the whole site returns 500. Keep inserted strings under the column limit: `city_managment.city_desc`, `meta_title`, `meta_desc` and most short text columns are VARCHAR(255); long text goes in TEXT columns (`area_desc`, `bdesc`, FAQ answers). If unsure, `mb_substr($x, 0, 250)`. After any failed deploy, check the live site at once and fix forward.
- Production DB changes only by migration (in `database/migrations/seo`, run by the deploy) **with a working down()**; never edit prod by hand; never ask for the CloudPanel password.
- Commit as `ajayvatsyayanseo-commits <ajayvatsyayanseo@gmail.com>`; tests (`php artisan test`) must pass; after deploy, verify live with curl (status, title, robots, key blocks).
- Blog bodies: `database/seo-content/blog/{slug}.html` + `.json`, covers `public/storage/blog/{slug}.jpg`, published by migration.
- CSS rules need the `body.page` prefix; colour roles in `nx-roles.css` (marigold = action, sky = links, indigo = AI, green = WhatsApp only).
