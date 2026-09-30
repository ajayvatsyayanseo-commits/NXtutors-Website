# NXTutors Gurgaon blog cluster — house brief (read fully before writing)

Site: https://www.nxtutors.com — a tutor-matching platform (home tutors in Gurugram and other cities, online tutors across India). Repo: `C:\Users\Ajay Vatsyayan\NXtutors-Website`. You write files only into `database/seo-content/blog/`. Do not touch any other file, do not run git, do not deploy.

## Output per article
- `database/seo-content/blog/{slug}.html` — the article BODY as an HTML fragment. Allowed tags: p, h2, h3, ul, ol, li, strong, em, a, table, thead, tbody, tr, th, td. No h1 (the title is the H1), no images, no inline styles, no classes, no scripts, no HTML comments.
- `database/seo-content/blog/{slug}.json` — exactly: `{"title": "...", "meta_title": "...", "meta_desc": "...", "author": "..."}`. title ≤ 70 chars, meta_title ≤ 60 chars (no "| NXTutors" suffix, the site adds branding), meta_desc 140–160 chars, plain text.
- Save files UTF-8, LF line endings. Use the Write tool (not bash heredocs).

Read these two published articles FIRST and match their style, rhythm and HTML exactly:
`database/seo-content/blog/home-tutor-vs-online-tutor.html` and `database/seo-content/blog/demo-class-checklist-for-parents.html`.

## Audience and voice
Parents in Gurgaon (and older students). Plain, warm, specific, practical. Indian/UK English spelling (organise, colour, programme). Short paragraphs. Use "Gurgaon" in titles (what people search) and say "Gurgaon (Gurugram)" once early in the body; after that either is fine. Open with 2 paragraphs that state the problem and what the guide covers — no fluff intros, no "In today's fast-paced world".

## Hard rules (a violation means the article is rejected)
1. **No invented facts.** No made-up statistics, survey numbers, success rates, student counts, tutor counts, testimonials, quotes, or named "example" families. Hypothetical examples are fine only when clearly general ("a Class 10 student who…").
2. **No school names.** Do not name any specific school. Speak generally ("the international schools along Golf Course Road", "CBSE schools in the newer sectors").
3. **No other people's names.** The only person you may name is the article's author when the author is a named tutor. Never name other tutors or staff.
4. **No "verified tutors" counts** and no claims that all tutors are verified. You may say "we check each tutor's identity before shortlisting" only as a process step, not as a number.
5. **No superlatives or ranking claims**: no "best", "top", "No. 1", "India's first", "guaranteed results", "100%".
6. **Exam and syllabus facts must be checked against official sources** (NTA/jeemain.nta.nic.in, jeeadv.ac.in, neet.nta.nic.in, cbseacademic.nic.in / cbse.gov.in, cisce.org, ibo.org, cambridgeinternational.org, qualifications.pearson.com). Use WebSearch/WebFetch. If you cannot confirm a detail (a date, a mark split, a pattern change), leave it out or phrase it as "check the current bulletin". Never state exam dates for sessions that have not been officially announced. Today is 29 Sep 2026.
7. **Fees:** the only fee facts you may state are NXTutors' own: "across NXTutors most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more." You may explain the factors that move a fee (class, board, subject, experience, travel, frequency, home vs online). Do not quote market-wide averages or competitor prices.
8. **NXTutors policies you may state:** you get two or three shortlisted tutors for a request; the first class is a free demo; switching tutor later is free; you see each shortlisted tutor's fee before the demo; home tutoring across Gurugram and online tutoring across India; NXTutors is based in Sector 66, Gurugram. Nothing else about the company.

## Links (internal links are the point of a cluster)
Link naturally, 5–10 internal links per article (zone guides may carry more area links), descriptive anchor text (never "click here"). Use RELATIVE URLs (`/blog/...`). Before using ANY link, confirm it returns 200: `curl -s -o /dev/null -w "%{http_code}" https://www.nxtutors.com/PATH`. For the current list of live pages and posts, fetch `https://www.nxtutors.com/sitemap.xml` and its child sitemaps. The lists below are the Gurugram set as of 30 Sep 2026; use the equivalent pages for other cities.
- City hub (the pillar): `/city/gurugram` — every article links to it once.
- Gurgaon subject pages (commercial pages — link to them, never compete with them): `/maths-home-tutor-gurgaon`, `/science-home-tutor-gurgaon`, `/physics-home-tutor-gurgaon`, `/chemistry-home-tutor-gurgaon`, `/ib-maths-tutor-gurgaon`, `/igcse-maths-tutor-gurgaon`, `/icse-maths-tutor-gurgaon`, `/igcse-physics-tutor-gurgaon`, `/ib-physics-tutor-gurgaon`, `/ib-igcse-chemistry-tutor-gurgaon`.
- Area pages: `/city/{city}/{slug}` — use only slugs listed in `https://www.nxtutors.com/sitemap-areas-{city}.xml`, exactly as written.
- Gurgaon class/format pages: `/primary-home-tutor-gurgaon`, `/class-10-home-tutor-gurgaon`, `/class-12-home-tutor-gurgaon`, `/online-tutor-gurgaon`; tutor side: `/tuition-jobs/gurugram`.
- Other blog posts (live): `/blog/demo-class-checklist-for-parents`, `/blog/home-tutor-vs-online-tutor`, `/blog/how-nxtutors-uses-ai`, `/blog/cbse-class-10-maths-preparation`, `/blog/cbse-class-10-science-notes`, `/blog/cbse-class-12-physics-strategies`, `/blog/cbse-class-12-maths-calculusalgebra`, `/blog/cbse-class-12-chemistry-organicinorganic`, `/blog/icse-class-10-maths-boards`, `/blog/isc-class-12-physics-tips`, `/blog/igcse-coreextended-maths`, `/blog/-ib-math-aaai-slhl`, `/blog/-ib-physics-slhl-iaee`, `/blog/jee-maths-topicwise-prep`, `/blog/jee-physics-topicwise-prep`, `/blog/jee-chemistry-physicalorganicinorganic`, `/blog/-neet-biology-ncertfirst`, `/blog/-neet-physics-highyield`, `/blog/-neet-chemistry-important-chapters-`, `/blog/online-vs-offline-tutoring`, `/pricing-guide`.
- Gurgaon cluster posts (live): fees, hiring checklist, JEE, NEET, IB/IGCSE, ICSE/ISC maths, CBSE Class 10 plan, five zone guides, moving to Gurgaon, switching to IB/IGCSE, Cambridge vs Edexcel, Class 11 stream, study abroad, olympiads, commute routine (see `sitemap-blog-*.xml` for slugs).
- Posts written in the same batch: the task lists them; link to them even though they 404 until the batch goes live.

## Gurgaon zones (use these groupings; they match the site's matching logic)
- Golf Course Road: Sectors 27, 28, 42, 43, 52–54; DLF Phases 1–5, Sushant Lok 1, Ardee City.
- MG Road & Cyber City: Sectors 24–26, 29; Udyog Vihar, Sikanderpur, Nathupur.
- Central Gurugram: Sectors 30–32, 38–41, 44–46; South City 1, Sushant Lok 2 and 3.
- Golf Course Extension Road: Sectors 55–66.
- Sohna Road: Sectors 47–51, 67–72; South City 2, Nirvana Country, Malibu Towne, Vatika City.
- Southern Peripheral Road (SPR): Sectors 73–80.
- New Gurugram: Sectors 81–95.
- Dwarka Expressway: Sectors 36–37, 99–115.
- Old Gurugram: Sectors 1–23; Palam Vihar.
Local colour must be general and safe: traffic at school-run and office hours, gated societies and guard/visitor-entry routines, long commutes on the expressways, the April session start in most schools, high-rise societies vs independent floors. Do not invent specific facts (metro stations, distances, new openings) unless you verify them.

## Structure every article has
- The intro (2 paras), then H2 sections. Include at least one table or checklist where it genuinely helps.
- A section near the end: `<h2>How NXTutors can help</h2>` — one or two short paragraphs, factual (policies above), linking the relevant subject page and the city hub. No hard sell.
- Final section: `<h2>Frequently asked questions</h2>` followed by 4–5 `<h3>question?</h3><p>answer</p>` pairs answering real parent questions.

## Your report back (final message)
For each file: path, word count (body text), the list of internal links used, and every exam/syllabus fact you stated with the official source URL you checked it against. Also list anything you were unsure of and left out.


# Formatting

- Tables: write `<div class="nx-table-wrap"><table class="nx-table">…</table></div>` (the only div/classes allowed).
- The rule "no classes, no divs" above applies to everything except this table wrapper.

## Extra for search results (legitimate, do all)
- Answer the main question in the first 2–3 sentences of the intro (featured-snippet style), then expand.
- Use question-form H2/H3s where natural ("How much…", "When should…").
- At least one list or table that could be lifted as a snippet.
- FAQs answer in 40–60 words each, self-contained.
