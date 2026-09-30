---
name: nxt-location-modules
description: How to make location pages (area, society, city×subject, city×class) long AND unique on nxtutors.com by composing real content modules instead of templated padding, plus a uniqueness check between sibling pages. Use when building or enriching area/locality/society/city-subject pages, when the user asks for "3–4k word pages", "avoid duplicate pages", "programmatic pages", or compares with sites like IB Gram.
---

# Location pages from real modules

Load `nxt-seo-rules` first. Lesson from Sep 2026: ~3,100 templated `/p/` pages (59% alike, few tutors) earned 30 clicks and were pruned. Competitor pages that work (e.g. IB Gram, ~5,000 words, **16% alike** between two sibling pages) stack many *specific* modules. Length must come from modules that are true for that page.

## Module library (each module is data- or fact-driven)
| Module | Source | Unique per |
|---|---|---|
| At-a-glance table: board, subject/level, area, "also covering" neighbours, modes, exam sessions | page config + `CityHub::zoneOfArea` + neighbours | area × subject |
| Tutor cascade with reason labels | `TutorCascade::forArea` | area (live) |
| Zone block (intro + tips + guide link) | `config/zone_guides.php` | zone |
| Nearby areas (12 either side, same zone) | `CityHub::areaList` | area |
| Recent requests (anonymised) | `AreaDemand::recentFor` | area/zone (live) |
| Board module: how this board examines this subject, what a tutor works on | verified facts reused from `database/seo-content/blog/*` | board × subject |
| Class-stage module: what changes in this class/year | verified facts | class band |
| Subject module: common errors, topic priorities, study plan | expert content (author) | subject |
| Commute & timing module | zone guide + city traffic notes | zone |
| Fees module | the one allowed fee sentence + factors | constant (keep short) |
| FAQ (6–11, 40–70 words each, answer first) | per module | area × subject |
| Guides for this page (cluster posts) | `CityHub::guides`, `SubjectPageController::guides` | city/subject |

A page = the modules that are TRUE for it. Never include a module with placeholder text; drop it instead.

## Rules
- Only create area × subject pages where there is demand (GSC impressions or requests) **and** supply (≥1 real tutor living in/travelling to the area for that subject, or online tutors for it). Otherwise the area page + city×subject page already cover it.
- Constant modules (fees, how NXTutors works) must stay short; the variable modules carry the length.
- **Content** similarity (site chrome excluded) to any sibling page must be **≤ 0.40** across zones and **≤ 0.50** between neighbours in the same zone (they legitimately share tutors and zone tips). Above that, add a variable module or merge the pages.
- Titles/H1s: "{Subject} {Level} Tutor in {Area}, {City}"; never "best".

## Uniqueness check
Run `python .claude/skills/nxt-location-modules/similarity.py URL1 URL2 [URL3 ...]` (live or local preview URLs). It prints a **content** ratio (chrome removed: header, nav, footer, pop-up forms, Ask NXT AI panel, sitewide link rails) and a full-page ratio for reference. Judge by the content ratio.

Baseline (30 Sep 2026, Gurugram): different zones 0.35–0.45; same-zone neighbours 0.55; new pages without "About" text worst.
