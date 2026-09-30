---
name: nxt-sxo-check
description: Search-experience check — read the live Google results for a target query backwards to find what page TYPE wins (directory, guide, tutor profile, local pack, video), compare with our page, and decide rewrite / new page type / different target. Use when a page ranks poorly (positions 8–40) despite good content, before building a new page type, or when the user asks "why isn't this ranking".
---

# SXO check (does our page match what Google rewards?)

Load `nxt-seo-rules`. Method adapted from SE Ranking's MIT-licensed `seo-sxo`, for use with WebSearch/WebFetch instead of paid SERP data.

## Steps
1. **Target query + our URL.** Take them from the user or from Search Console (page at position 8–40 with impressions).
2. **Read the SERP.** WebSearch the query (add "Gurgaon"/city if local). For the top 10: page type (directory/listing, long guide, tutor profile, marketplace, local pack/map, video, forum), title pattern, visible freshness (year), whether a price/fee or "near me" angle is shown.
3. **Winning pattern.** The type that holds ≥ 5 of 10 is what Google believes the searcher wants. Note must-have elements shared by ≥ 3 winners (fee table, tutor list above the fold, FAQ, year in title, map).
4. **Four personas** score our page 1–5: a parent in a hurry (can I see tutors + fee in 10 s?), a careful parent (safety, plan, proof), a student (is it about my board/class?), a returning visitor (what changed?).
5. **Verdict:**
   - *Match type, fix elements* → list the missing must-have elements and add them.
   - *Wrong type* → propose the right page type (e.g. commercial page for a list query; guide for a "how to" query) and where it should live; do not force a guide to rank for a directory query.
   - *Local pack dominates* → the lever is the Google Business Profile and reviews, not the page (`nxt-authority`).
6. **Wireframe** (only for a new/rebuilt page): ordered list of sections with one line each.

Output in chat: winning type, must-haves, persona scores, verdict, next actions.
