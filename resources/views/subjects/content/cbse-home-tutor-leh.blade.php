{{--
  Board page for "CBSE home tutor Leh" (state/UT capitals wave 2, compact depth,
  subjects writer, 3 Oct 2026). Authors: Abhinandan Tiwary (role: Class 10 CBSE
  and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE science). Role
  statements only; no anecdotes, years or results. No schools, coaching
  institutes, campuses or people are named.

  Board position ONLY from the "board_facts" block of
  database/seo-content/areas/leh-research.json:
  - CBSE's SARAS affiliation list
    (https://saras.cbse.gov.in/saras/AffiliatedList/ListOfSchdirReport) has a
    separate state entry for Ladakh and lists affiliated schools in Leh and
    Kargil districts, including government high and higher secondary schools in
    Leh town, Housing Colony, Stok, Phyang, Thiksey and Chuchot, alongside
    private schools. Affiliation is at secondary and senior secondary level; the
    pattern for primary and middle classes is not stated on the pages read.
  - CBSE's regional office at Mohali has jurisdiction over Chandigarh, Punjab,
    Jammu & Kashmir and the UT of Ladakh (https://www.cbse.gov.in/cbsenew/ro.html).
  
  Deliberately NOT stated: any other board for Ladakh, any switch year, any
  count of schools.

  CBSE exam facts only as the existing CBSE city pages state them (citing
  cbseacademic.nic.in / cbse.gov.in, read 1 Oct 2026): Curriculum 2026-27
  Secondary (80 + 20 in major subjects, 33% pass, about half competency
  questions, Class IX common paper + optional Advanced paper of 25 marks and one
  hour, outside the aggregate, 50%+ recorded; Basic/Standard ending after the
  2026-27 Class X batch; third language assessed internally); two Class X exams
  (first compulsory, improve up to three of science, maths, social science,
  languages); Curriculum 2026-27 Senior Secondary (Physics 042, Chemistry 043,
  Biology 044 at 70 + 30; Mathematics 041 or Applied Mathematics 241, one only,
  80 + 20; Accountancy 055, Economics 030, Business Studies 054 at 80 + 20).

  Local facts only from leh-research.json. Strictly practical: no politics,
  security or tourism; landmarks only to find a home; winter only as timing
  advice. Only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $lhkSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lhkA = function (string $slug, string $label) use ($lhkSlugs) {
      return in_array($slug, $lhkSlugs, true)
          ? '<a href="' . e(url('/city/leh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide lhk-guide" aria-labelledby="lhkGuideTitle">
  <h2 id="lhkGuideTitle">CBSE home tutors in Leh: one board, every class, and a timetable built around winter</h2>

  <p class="nx-guide__lede">
    For most Leh families the board question is settled before tuition begins. CBSE's own affiliation list has
    Ladakh as a separate entry, and the government high and higher secondary schools across Leh district appear on
    it alongside private schools. What families still need to settle is everything else: which subjects need help,
    how the 2026-27 rules change Classes 9 and 10, how marks are earned in Classes 11 and 12, and how a weekly lesson
    survives the long winter break in a town spread along the Indus. This page covers each of those. It is written
    around our authors' roles: Class 10 CBSE and ICSE maths, and CBSE and ICSE science. We suggest two or three
    matched tutors, show each fee before the demo, and the first class is free.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lhk-board">CBSE in Leh</a> ·
    <a href="#lhk-classes">Class by class</a> ·
    <a href="#lhk-rules">Classes 9 and 10</a> ·
    <a href="#lhk-senior">Classes 11 and 12</a> ·
    <a href="#lhk-subjects">Subject tutors</a> ·
    <a href="#lhk-year">The Leh school year</a> ·
    <a href="#lhk-areas">Six localities</a> ·
    <a href="#lhk-demo">The demo</a> ·
    <a href="#lhk-fees">Fees and start</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lhk-board">What do the official sources say about CBSE in Leh?</h2>
  <p>
    Two official CBSE pages give the picture, and we keep to what they say:
  </p>
  <ul>
    <li><strong>CBSE's affiliation list (SARAS)</strong> carries Ladakh as its own entry, with affiliated schools in Leh and Kargil districts. Government high and higher secondary schools in Leh town, Housing Colony, Stok, Phyang, Thiksey and Chuchot are on it, alongside private schools.</li>
    <li><strong>CBSE's regional offices page</strong> places the UT of Ladakh under the regional office at Mohali, which also covers Chandigarh, Punjab and Jammu &amp; Kashmir.</li>
    
  </ul>
  <p>
    CBSE affiliation is granted at the secondary and senior secondary stages, so the lists say nothing about the
    books and tests used in the primary and middle classes. For a child below Class 9, ask the school which
    textbooks it follows before briefing a tutor. For anything about exam dates or rules, cbse.gov.in is the source
    to trust.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-classes">What should a CBSE tutor focus on at each stage?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE tuition in Leh from Class 6 to Class 12: who assesses the year and where a tutor's effort should go</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Assessed by</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>Your child's school</td><td>Number work and first algebra in maths; in science, explaining a chapter in the child's own words; neat written working</td></tr>
      <tr><td>9</td><td>Your child's school, on 80 + 20</td><td>A sudden jump in content; short tests after every chapter; deciding whether an Advanced paper makes sense</td></tr>
      <tr><td>10</td><td>CBSE for 80, the school for 20</td><td>Questions that apply ideas, tidy layout, and official sample papers checked with the marking scheme</td></tr>
      <tr><td>11</td><td>Your child's school</td><td>Physics, chemistry and maths get much harder; the year that decides how Class 12 goes</td></tr>
      <tr><td>12</td><td>CBSE theory, with practical or internal marks</td><td>Revising the whole course while JEE or NEET pulls at the same hours</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Class 10 pass mark is 33% per subject. Trouble that looks new in Class 9 normally traces back to fractions or algebra that never quite settled, which is why tuition in Classes 6 to 8 is most useful as repair, not as getting ahead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-rules">What is new for Classes 9 and 10 in 2026-27?</h2>
  <dl>
    <dt><strong>A common Class 9 paper, with an optional Advanced paper</strong></dt>
    <dd>In maths and in science, all of Class 9 writes one shared 80-mark paper. Each subject also offers an optional hour-long Advanced paper of 25 marks, made only of higher-order questions; it does not count in the total, though 50% or above is printed on the marksheet. Leave it unless the main paper already feels easy.</dd>
    <dt><strong>Basic and Standard maths ending</strong></dt>
    <dd>Maths at two levels finishes with the Class 10 batch of 2026-27.</dd>
    <dt><strong>Two Class 10 board exams</strong></dt>
    <dd>Everyone takes the first. Students who clear it can return for the second to lift as many as three subjects from science, maths, social science and languages. Prepare as if only the first existed.</dd>
    <dt><strong>Competency questions</strong></dt>
    <dd>Close to half of every paper is built on a case, a source or a data set, so these need a slot in every week of the year.</dd>
    <dt><strong>The third language</strong></dt>
    <dd>Marked in school with no board paper, yet still deserving steady attention.</dd>
  </dl>
  <p>
    The <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation plan</a>, the
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> follow the NCERT
    chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-senior">How are marks split in Classes 11 and 12?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE senior secondary, 2026-27: theory and practical or internal marks in common subjects</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Theory</th><th scope="col">Practical or internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics (042), Chemistry (043), Biology (044)</td><td>70</td><td>30, practical</td></tr>
      <tr><td>Mathematics (041) or Applied Mathematics (241), one of the two</td><td>80</td><td>20, internal</td></tr>
      <tr><td>Accountancy (055), Economics (030), Business Studies (054)</td><td>80</td><td>20, internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Practical work carries 30 marks in every science, so the record and the viva deserve the same care from a tutor as the theory. Students also preparing for JEE or NEET tend to let board subjects slide; the national
    <a href="{{ url('/jee-home-tutor') }}">JEE</a> and <a href="{{ url('/neet-home-tutor') }}">NEET</a> home tutor
    pages explain how to keep both moving, and the
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a stream</a> helps at the end of Class 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-subjects">Which subject tutor do you need?</h2>
  <p>
    Many families start with one subject and add another later. Each Leh subject page goes deeper:
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-leh') }}">Maths</a>: Classes 6 to 12, the Class 10 unit weights, Class 12 calculus and JEE.</li>
    <li><a href="{{ url('/science-home-tutor-leh') }}">Science</a>: Classes 6 to 10, one tutor for all three sciences until the board year.</li>
    <li><a href="{{ url('/physics-home-tutor-leh') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-leh') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-leh') }}">biology</a>: Classes 11 and 12, practical marks, JEE and NEET.</li>
    <li><a href="{{ url('/english-home-tutor-leh') }}">English</a>: reading, writing, literature answers and spoken confidence.</li>
  </ul>
  <p>
    From Class 9, two subjects often share one tutor, such as maths with physics, or chemistry with biology. Say so
    in your request and we look for a tutor who can teach both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-year">How does tuition fit the Leh school year?</h2>
  <p>
    Leh's winter is long and cold, from late November into early March, and the school year includes a long winter
    break. A CBSE plan holds up better when the year is split into three parts:
  </p>
  <ol>
    <li><strong>Term time.</strong> Regular home visits that follow the school chapter. In the busy summer months, early-morning or late-evening slots are easier to keep in the town centre.</li>
    <li><strong>Early winter.</strong> Shorter visits at midday, when it is warmest, while the syllabus is finished.</li>
    <li><strong>The winter break.</strong> Online lessons with the same tutor for revision and sample papers, or a mix of online and an occasional visit.</li>
  </ol>
  <p>
    Under Class 9, a tutor sitting beside the child nearly always wins, since young students need someone watching each line they write. From Class 9, English, social science and revision checks work well online, and maths and science can
    too if written work is shared by photo. The <a href="{{ url('/online-tutor-leh') }}">online tutors for Leh</a>
    page explains how.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-areas">How do CBSE tutors reach six Leh localities?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Leh localities across three zones: how a tutor arrives and the slot that tends to work</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Arrival and timing</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $lhkA('main-bazaar-old-town', 'Main Bazaar & Old Town') !!}</td><td>Leh Town Centre</td><td>Old-town lanes are narrow, so the tutor walks the last part; share a lane landmark. Early or late slots in summer.</td></tr>
      <tr><td>{!! $lhkA('housing-colony', 'Housing Colony') !!}</td><td>Leh Town Centre</td><td>The main market or community hall makes a clear meeting point; a tutor already teaching near the bazaar may add it on the same evening.</td></tr>
      <tr><td>{!! $lhkA('saboo', 'Saboo') !!}</td><td>Choglamsar, Spituk &amp; West</td><td>On one of the two circular roads to Choglamsar; give the cluster name and agree parking.</td></tr>
      <tr><td>{!! $lhkA('phyang', 'Phyang') !!}</td><td>Choglamsar, Spituk &amp; West</td><td>Eight clusters along a valley; name yours. Weekend or late-afternoon slots for tutors from Leh or Spituk.</td></tr>
      <tr><td>{!! $lhkA('chuchot', 'Chuchot') !!}</td><td>Indus Valley South &amp; East</td><td>Three villages; say which. A bridge links Chuchot Yokma with Choglamsar, so tutors there can cross directly.</td></tr>
      <tr><td>{!! $lhkA('thiksey', 'Thiksey') !!}</td><td>Indus Valley South &amp; East</td><td>Houses spread around the block and tehsil offices; weekend slots suit tutors from the town.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages for <a href="{{ url('/city/leh/zone/leh-town-centre') }}">Leh Town Centre</a>,
    <a href="{{ url('/city/leh/zone/choglamsar-spituk-west') }}">Choglamsar, Spituk and the west</a> and
    <a href="{{ url('/city/leh/zone/indus-valley-south-east') }}">the Indus valley south and east</a> list every
    locality, as does the <a href="{{ url('/city/leh') }}">Leh home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-demo">Five questions to ask a CBSE tutor at the demo</h2>
  <ol>
    <li>Have you taught CBSE Class 9 or 10 under the 2026-27 rules?</li>
    <li>Show me where the step marks fall in an answer from this chapter.</li>
    <li>What is your routine for case-based and data questions?</li>
    <li>When will you look at the practical record or project?</li>
    <li>What will we do in the winter break: online lessons, fewer visits, or both?</li>
  </ol>
  <p>
    Unconvincing answers are a reason to ask for the next demo, and a later change of tutor is free as well. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more checks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lhk-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own fee and you see it before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-leh') }}">home tuition fees in Leh</a> explain what moves it.
  </p>
  <p>
    Tell us the class, the subjects, when school ends and a landmark near home. Our reply names two or three matched tutors, and lesson one is a <a href="{{ url('/demo-class') }}">free demo</a>. Every tutor who joins passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Meanwhile you can <a href="{{ url('/tutors') }}">look through tutor profiles</a> or read the <a href="{{ url('/blog/leh-home-tuition-guide') }}">Leh home tuition guide</a>. CBSE
    teachers living in and around Leh can look at <a href="{{ url('/tuition-jobs/leh') }}">Leh tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
