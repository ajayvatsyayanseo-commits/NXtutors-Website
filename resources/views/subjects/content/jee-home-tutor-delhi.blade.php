{{--
  Delhi page for JEE home tutors. The exam itself is covered on the national hub
  (/jee-home-tutor); this page is about fitting JEE tuition into a Delhi week:
  coaching days, metro-riding tutors, zone-by-zone travel, the CBSE/ISC/IB mix
  and plans by stage.

  Exam facts (recap only, reworded from the national page, which cites):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1 in both sections; two sessions (January and April 2026);
    13 languages; no age limit, Class XII passed in 2024 or 2025 or appearing in
    2026; maths settles ties first; Advanced eligibility for 2026 = first
    2,50,000 successful candidates in Paper 1.
  - NTA JEE (Main) 2026 syllabus: 14 maths, 20 physics, 20 chemistry units.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    3-hour papers, CBT, English and Hindi, at most two attempts in two
    consecutive years.
  Local detail only from database/seo-content/areas/delhi-zone-guides.json,
  delhi-research.json, config/zones.php ('Delhi') and the Delhi city hub view
  (CBSE for most students, ICSE/ISC sizeable, smaller IB/IGCSE group). No
  schools, coaching institutes, colleges, societies or people are named, and no
  claim is made about Delhi as a coaching centre. Area links render only for
  active Delhi areas. FAQs render from faqs/jee-home-tutor-delhi.php.
--}}
@php
  $jdlSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jdl = function (string $slug, string $label) use ($jdlSlugs) {
      return in_array($slug, $jdlSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jdlGuideTitle">
  <h2 id="jdlGuideTitle">JEE home tutor in Delhi: fitting maths, physics and chemistry around coaching and the metro</h2>

  <p class="nx-guide__lede">
    A Delhi JEE student's week is usually decided before a tutor is even called: school until the afternoon, coaching
    three or four evenings, and a commute that runs on metro lines rather than roads. The tutor who helps most is the
    one whose own travel fits that grid, whether that means riding the Blue Line to your colony on a free afternoon or
    teaching online at nine at night after a coaching test. This page sets out how Delhi families make that work: which
    slots hold up, how tutors reach each zone, when a subject is better taught in the room or on a screen, and how the
    plan shifts for CBSE, ISC and IB students across Class 11, Class 12 and a repeat year. For the full exam pattern,
    read our national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> guide.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jdl-recap">The exams, briefly</a> ·
    <a href="#jdl-week">Around coaching</a> ·
    <a href="#jdl-zones">Zones and travel</a> ·
    <a href="#jdl-mode">Home or online, by subject</a> ·
    <a href="#jdl-stages">Class 11, 12, repeat year</a> ·
    <a href="#jdl-demo">The demo</a> ·
    <a href="#jdl-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jdl-recap">JEE Main and JEE Advanced, briefly</h2>
  <p>
    The NTA's 2026 bulletin describes JEE (Main) Paper 1 as a three-hour computer-based test: 25 questions in each of
    mathematics, physics and chemistry (20 multiple-choice and 5 numerical-value), 300 marks, with a mark taken off for
    any wrong answer in either section. It ran in two sessions, January and April, and the better score counted. JEE
    (Advanced), set by the IITs for those who rank high enough in Main, is two compulsory three-hour papers, offered in
    English and Hindi, with at most two attempts in consecutive years. These rules are reissued every year, so check
    jeemain.nta.nic.in and jeeadv.ac.in before you plan around any of them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jdl-week">Where a tutor fits in a Delhi coaching week</h2>
  <p>
    The first decision is not which tutor but which slot. Write down the coaching days and timings, the school's
    finishing time and the journey between them, then look at what is left. In most Delhi homes three windows remain,
    and each suits a different kind of JEE work.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Tutor slots that tend to survive a Delhi coaching timetable</caption>
    <thead>
      <tr><th scope="col">Window</th><th scope="col">Best use</th><th scope="col">Delhi detail to plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>Free weekday, mid-to-late afternoon</td><td>The main teaching hour at home: one chapter rebuilt, then timed problems</td><td>Tutors coming by metro arrive before the office crowd; drivers avoid the Ring Road and Vikas Marg peak</td></tr>
      <tr><td>Coaching evening, after the student is home</td><td>A 30 to 45 minute online doubt session on that day's sheet</td><td>Nobody travels, so the evening rush on GT Road or the Outer Ring Road stops mattering</td></tr>
      <tr><td>Weekend morning</td><td>Test analysis, or a long physics or maths session at home</td><td>No office rush; near Karol Bagh's markets, which peak at weekends, an online review may be easier</td></tr>
      <tr><td>Weekday daytime (repeat year)</td><td>Full home sessions while roads and trains are lighter</td><td>Gives the widest choice of tutor, since many teach school-age students only after 4 pm</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Keep the tutor's slot identical each week. A tutor crossing from Dwarka to Mayur Vihar, or from Rohini to South
    Delhi, can plan around a fixed Tuesday; a slot that moves with every coaching reschedule is the one that gets
    cancelled. When coaching changes its timetable, change the online sessions first and leave the home session alone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jdl-zones">How JEE tutors reach each Delhi zone</h2>
  <p>
    Delhi is large enough that "a tutor near me" mostly means "a tutor on my metro line". The table summarises our zone
    research: how tutors usually arrive and what to do about slot timing. The <a href="{{ url('/city/delhi') }}">Delhi
    page</a> lists every colony we cover.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Travel and timing for JEE tuition across Delhi's zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">How tutors usually arrive</th><th scope="col">JEE timing advice</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a>, e.g. {!! $jdl('dwarka-sector-10', 'Sector 10') !!}</td><td>Blue Line to the sector's own station; society gates check a visitor list</td><td>Register the tutor as a regular visitor in week one so a 90-minute session is not cut at the gate</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a>, e.g. {!! $jdl('rohini-sector-7', 'Sector 7') !!}</td><td>Red, Yellow or Magenta Line, then a walk into the pocket</td><td>Give sector, pocket and block together; stay clear of the Outer Ring Road evening rush</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town and North Campus</a>, e.g. {!! $jdl('prashant-vihar', 'Prashant Vihar') !!}</td><td>Red or Yellow Line; the Magenta Line now serves the Outer Ring Road side</td><td>Afternoon slots beat evenings near Netaji Subhash Place and the campus roads</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden and Punjabi Bagh</a>, e.g. {!! $jdl('kirti-nagar', 'Kirti Nagar') !!}</td><td>Four lines cross the belt, so metro riders are easy to find</td><td>In Punjabi Bagh, choose a tutor from your side of the Ring Road</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar and Rajinder Nagar</a></td><td>Blue Line stations within walking distance; lanes too tight for parking</td><td>Weekday sessions run better than weekends, when the markets peak</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a></td><td>Magenta Line to Munirka or Vasant Vihar, then an auto; Vasant Kunj has no station</td><td>Agree the last leg in advance; online works well for an Advanced-level specialist</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a></td><td>Yellow Line backbone, Magenta at Hauz Khas</td><td>Cross the Outer Ring Road junctions outside office hours</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony and Lajpat Nagar</a></td><td>Violet, Pink or Magenta Line; evening parking near the markets is hard</td><td>A metro-riding tutor is the steadier choice for a fixed weekday slot</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park and Sarita Vihar</a>, e.g. {!! $jdl('sarita-vihar', 'Sarita Vihar') !!}</td><td>Violet and Magenta Lines meet at Kalkaji Mandir</td><td>Switch to morning or online sessions in festival weeks</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony, Jangpura and Nizamuddin</a></td><td>Violet Line, plus the Pink Line to Hazrat Nizamuddin from East Delhi</td><td>Mathura Road is heavy at the evening peak; prefer a tutor who comes by train</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj and IP Extension</a></td><td>Blue and Pink Lines; Phase 3 needs an auto from the nearest station</td><td>Start before the Noida Link Road peaks; pre-register at society gates</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar and Shahdara</a>, e.g. {!! $jdl('vivek-vihar', 'Vivek Vihar') !!}</td><td>Blue, Pink and Red Lines; mostly doorstep visits</td><td>Vikas Marg slows sharply at office hours, so book the session before the rush</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone-level advice for families is gathered in our <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a>,
    <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi</a>,
    <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a> tuition guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jdl-mode">Home or online: deciding subject by subject</h2>
  <p>
    Delhi families often ask for "home tuition" for all three subjects, then lose half the sessions to travel. A better
    question is which part of the work needs someone in the room.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A practical split for a Delhi JEE student</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">At home</th><th scope="col">Online</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Long calculus and coordinate-geometry sessions where the tutor watches every line of working</td><td>Timed sets reviewed the same night; quick fixes on a single step</td></tr>
      <tr><td>Physics</td><td>Rebuilding a concept (rotation, induction) with diagrams on paper</td><td>Coaching-sheet doubts while they are fresh; test review</td></tr>
      <tr><td>Chemistry</td><td>Physical chemistry numericals and organic mechanisms written out</td><td>Inorganic and organic recall checks of 30 minutes, two or three times a week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A common Delhi pattern is one home session a week in the weakest subject and two short online sessions for the
    rest. Since both JEE papers are taken on a computer, some online practice helps anyway. Our comparison of a
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor and an online tutor</a> covers the trade-offs in general.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jdl-stages">Class 11, Class 12 and a repeat year for CBSE, ISC and IB students</h2>
  <p>
    CBSE is the board most Delhi students sit, ISC has a sizeable following, and a smaller group takes IB or IGCSE.
    The NTA syllabus stays close to the NCERT books, so the distance between school and JEE differs by board, and the
    tutor's plan should reflect that.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What the tutor prioritises, by stage and board</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">CBSE student</th><th scope="col">ISC or IB student</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Depth and speed on NCERT chapters; an error log from the first month; vectors, kinematics, mole concept and basic calculus made secure</td><td>A unit-by-unit map of the NTA syllabus against the school course, so JEE practice does not run ahead of what has been taught</td></tr>
      <tr><td>Class 12</td><td>Class 11 revision protected every week; full papers before the January session; board-style answers before pre-boards</td><td>The same, plus fixing gaps from the map; IB families read the NTA bulletin's qualifying-examination list first</td></tr>
      <tr><td>Repeat year</td><td colspan="2">Diagnose last year's papers, rebuild the chapters that lost the most marks, then many full-length tests. The 2026 bulletin allowed Class XII pass-outs of the two previous years to sit Main; Advanced allows two attempts in consecutive years only</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the school side of the same subjects, see our Delhi <a href="{{ url('/maths-home-tutor-delhi') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a>
    tutor pages. Subject-level JEE depth is in our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a> topic guides and on the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jdl-demo">What to check in a Delhi JEE demo</h2>
  <ol>
    <li><strong>Bring three unsolved questions</strong> from this week's coaching sheet, not a topic the student already knows.</li>
    <li><strong>Watch who holds the pen.</strong> A strong tutor asks what was tried, then gives hints until the student finishes.</li>
    <li><strong>Ask about the numerical section.</strong> Since wrong numerical answers also lose a mark, the tutor should have a clear view on when to skip.</li>
    <li><strong>Ask how they will travel.</strong> Which line, which station, and what happens on days the trains are packed or the roads are blocked.</li>
    <li><strong>Ask for a month's plan in writing:</strong> chapters, session days around coaching, and how progress will be measured from test scores.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange the next demo; switching tutor later is free. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jdl-fees">JEE tutor fees in Delhi and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo. The <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi
    fees guide</a> and our <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain what moves the figure.
  </p>
  <p>
    Send us the class, board, target (Main, or Main and Advanced), the subjects, coaching days, your colony with its
    pocket or block, and the nearest metro station. We send two or three matched tutors and you book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Preparing for medical entrance instead? See
    <a href="{{ url('/neet-home-tutor-delhi') }}">NEET home tutors in Delhi</a>. Tutors can find Delhi requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
