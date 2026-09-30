---
name: nxt-blog-publish
description: End-to-end pipeline to research, write, fact-check, audit, illustrate and publish blog posts or refreshes on nxtutors.com — house brief for writers, parallel writer agents, rule checks, text-free covers, a reversible publishing migration, tests, deploy and live verification. Use for any new NXTutors article, blog cluster (city or national), pillar post, or refresh of an existing post.
---

# Blog pipeline

Load `nxt-seo-rules`. Reference runs: `2026_09_28_190000_publish_parent_guides`, `2026_09_29_120000_publish_gurgaon_guide_cluster` (with refreshes and `_before` snapshots), `2026_09_30_120000_publish_gurgaon_guides_round2`.

## 1. Plan the batch
- One topic per post, informational intent (commercial intent belongs to subject/city pages; link to them, never compete).
- Slugs: lowercase, city word as a whole token (`...-gurgaon-...`), never containing `-near-you`, `best-home-tutors` or `coaching-at-home` (those mark noindexed locality posts, `App\Support\BlogTopics`). Zone guides end in `-tuition-guide`.
- Author: Ajay Vatsyayan (IB/IGCSE/ISC maths), Abhinandan Tiwary (Class 10 CBSE/ICSE maths), Aaditya Kashyap (CBSE/ICSE science), else "NXTutors Academic Team".
- Lengths per `nxt-seo-rules` §3 (pillars 4,000+; cluster 1,600–2,300; zone guides 1,100–1,600).

## 2. Write (parallel agents)
Give each `nxt-writer` agent 2–4 posts, the path to `house-brief.md` in this folder, the batch's slug list, and the author rules. Writers must verify exam facts on official sites and report facts with sources.

## 3. Check every post
- Run `nxt-content-audit` (vetoes, E-E-A-T, CITE). Fix or drop anything that fails.
- Mechanical: body word count; no absolute `nxtutors.com` links; tables wrapped in `nx-table-wrap`; no banned words (`guarantee`, `100%`, `India's first`, `verified tutors` counts); first-person claims only if true.

## 4. Covers
Edit the `COVERS` list in `covers.py` (slug, two bloom colours, a simple SVG from the shapes there) and run `python covers.py OUT_DIR` (Playwright + msedge). Text-free, 1200×630 JPEG; copy new ones to `public/storage/blog/`.

## 5. Publish migration
New migration in `database/migrations/seo/` inserting each slug (skip existing), `avatar = {slug}.jpg`, `date = today`; `down()` deletes only rows it created. For refreshes: snapshot the live body into `database/seo-content/blog/_before/{slug}.html` + `meta.json` first, update in place keeping image and date, and let `down()` restore the snapshot.

## 6. Test, ship, verify
- Add the slugs to `tests/Feature/BlogGurgaonClusterTest.php` (or a sibling test): files exist, rules hold, migration up/up/down.
- `php artisan test`, commit, push, wait for the deploy.
- Curl each post: 200, title, no noindex, author in schema; confirm it is in the right `sitemap-blog-{topic}.xml`; check the city hub guide rail lists the cluster (1-hour cache).
- Tell the user which URLs to "Request indexing" for.
