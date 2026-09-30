---
name: nxt-content-audit
description: Publish gate for any NXTutors page or post — E-E-A-T and CITE (AI-citation readiness) scoring with veto checks and a PUBLISH / PUBLISH WITH FIXES / NO PUBLISH verdict, plus the NXTutors hard-rule checks. Use before publishing new content, when refreshing an old post, or when the user asks "is this good", "audit this page", "E-E-A-T check", "will AI cite this".
---

# Content audit (publish gate)

Load `nxt-seo-rules`. Method adapted from SE Ranking's MIT-licensed `seo-content-audit` (github.com/seranking/seo-skills), rewritten for NXTutors and for use without paid SEO data.

## Inputs
A local draft (`database/seo-content/blog/{slug}.html` + `.json`, or a Blade content file) or a live URL, plus the target query.

## 1. Veto checks (any = NO PUBLISH)
1. Breaks an `nxt-seo-rules` §2 hard rule (invented fact, sample called verified, school named, unofficial exam fact, invented author anecdote, private data).
2. Factual claim about an exam, board, syllabus, fee or policy with no official source behind it.
3. Education content with no named author or "NXTutors Academic Team" credit.
4. No clear answer to the target query in the first 150 words.
5. Time-sensitive content (exam pattern, dates, fees) with no year/session stated.
6. Near-duplicate of a sibling page (similarity > 0.40, see `nxt-location-modules`).

## 2. E-E-A-T score (each item yes = 1, partial = 0.5)
- **Experience (5):** practical detail only a tutor would know; worked example or common-error list; specific to the city/board where claimed; realistic timelines; shows what a lesson/plan looks like.
- **Expertise (5):** correct terminology (command terms, papers, units); exam facts match official docs; covers edge cases (board switches, Standard vs Basic, SL vs HL); no oversimplification; author's specialism matches the topic.
- **Authoritativeness (5):** named author with profile (`config/nx_authors.php`); links to official sources; links to our pillar/hub pages; consistent with other NXTutors pages; schema author/publisher present.
- **Trust (5):** honest limits ("check the current bulletin"); fee statement exact; no superlatives; privacy respected; clear date/session.
Score = points / 20. Threshold 75%.

## 3. CITE score (AI search readiness; each 1 / 0.5 / 0)
- **Clear answer:** direct answer in first 2–3 sentences; question-form H2s; each FAQ answer self-contained (40–70 words); lists/tables that can be lifted.
- **Include facts:** at least one table or checklist; official figures with the year; comparison where the query implies one.
- **Timestamp:** year/session in title or intro for time-sensitive topics; nothing stale (old syllabus, old options).
- **Entity clarity:** full names on first use (Cambridge IGCSE 0580, CBSE Class 10, IB DP Maths AA HL); the city/area named precisely; organisation name consistent.
Score = points / 12. Threshold 70%.

## 4. Verdict
- **PUBLISH:** no veto, E-E-A-T ≥ 75%, CITE ≥ 70%.
- **PUBLISH WITH FIXES:** no veto, E-E-A-T 60–74% or CITE 55–69% → list the top 5 fixes and apply them.
- **NO PUBLISH:** any veto, or below those bands.

## 5. Also run (mechanical)
Word count vs floor (`nxt-seo-rules` §3); only allowed HTML tags; relative internal links all 200; title ≤ 70, meta_title ≤ 60, meta_desc 140–160; the regex bans in `tests/Feature/BlogGurgaonClusterTest.php`.

Output: a short verdict block in chat (scores, vetoes, top fixes). Do not write report files unless asked.
