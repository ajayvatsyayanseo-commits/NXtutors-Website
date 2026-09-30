---
name: nxt-gsc-review
description: Monthly Google Search Console review for nxtutors.com from the Performance export (zip with Pages.csv/Queries.csv/Chart.csv) — traffic by page type, click-through fixes, striking-distance queries, decaying posts, generated-page keep list, per-sitemap indexing, and a ranked action list compared with the previous baseline. Use when the user shares or downloads a Search Console export, asks "how are we doing", or at each monthly checkpoint.
---

# Search Console review

Load `nxt-seo-rules`. The user downloads **Search Console → Performance → Export → Download CSV** (last 3 months, or 16 months) into `~/Downloads/nxtutors.com-Performance-on-Search-*.zip`.

## Baseline (23 Jul – 27 Sep 2026)
- Home: 71 clicks / 5,995 impressions, pos 6.0. Blog: 62 / 8,469. Generated `/p/`: 32 / 2,190 (343 pages seen). Area pages: 6 / 684.
- "home tuition in gurgaon" pos 22.5 · "best home tutors in gurgaon" 12.7 · "home tutor gurgaon" 20.4 · "maths home tutor in gurgaon" 31.
- "home tutor near me" 367 impr pos 1.6, 0 clicks (fixed titles 30 Sep) · "home tutor" 385 impr pos 1.9.
- IB Physics post pos 26 (2,334 impr) · IB Maths post pos 36 (942) — rewritten 29 Sep.

## Steps
1. Unzip to the scratchpad; read Pages.csv, Queries.csv, Chart.csv, Filters.csv (note the date range).
2. **By page type** (home, blog, `/p/`, area `/city/x/y`, city, subject, tutor, tuition-jobs): pages, clicks, impressions, CTR, position. Compare with the baseline.
3. **CTR fixes:** pages at position ≤ 5 with CTR < 2% → rewrite title/description (for `/p/` pages via `config/generated_pages.php 'seo'`; subject pages via `config/subject_pages.php`; home/city meta via migration).
4. **Striking distance:** queries at position 8–20 with ≥ 20 impressions → which page ranks, what to add (internal links from hub/cluster, a missing module, a better H2). For position 20–40 run `nxt-sxo-check`.
5. **Decay:** pages whose clicks fell ≥ 30% versus the previous export → refresh (facts, year, links).
6. **Generated pages:** any `/p/` page outside the keep list with ≥ 1 click or ≥ 10 impressions → add to `config/generated_pages.php` (with an `seo` entry).
7. **New demand:** queries with no matching page (a subject, locality or question) → candidate page or post, only if supply rules allow (`nxt-location-modules`).
8. **Indexing** (ask the user for Search Console → Sitemaps → each child sitemap's indexed count): flag any city/topic sitemap under 50% indexed.
9. **Report in chat:** 5-line summary vs baseline, then a ranked action list (impact × effort). Update the baseline section of this skill after the user agrees.

## Automation (optional, later)
SE Ranking's `seo-google` skill shows how to pull Search Console, URL Inspection, PageSpeed and GA4 via a Google Cloud service account (`google-api.json`). If the user sets that up (add the service account email as a restricted user in Search Console), replace step 1 with API pulls. Never ask for passwords.
