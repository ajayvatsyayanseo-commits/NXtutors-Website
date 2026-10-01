{{--
  Chandigarh tricity page for JEE home tutors. Byline: NXTutors Academic Team.
  The exam itself lives on the national hub (/jee-home-tutor); this page is about
  running JEE tuition across Chandigarh, Mohali, Panchkula and Zirakpur: no metro,
  the Margs and Housing Board Chowk, three administrations and their boards,
  home versus online by subject, and Class 11 / Class 12 / repeat-year plans.

  Exam facts reworded from the national page, which cites (fetched 1 Oct 2026):
  - NTA JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, each 20 MCQ + 5 numerical-value questions,
    75 questions, 300 marks, +4/-1 in both sections; two sessions (January and
    April 2026), better NTA score counts; no age limit; Class XII passed in 2024 or
    2025 or appearing in 2026; ties by maths, then physics, then chemistry.
  - NTA JEE (Main) 2026 syllabus: 14 maths, 20 physics, 20 chemistry units.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    3-hour papers; at most two attempts in two consecutive years.
  Local detail only from database/seo-content/areas/chandigarh-research.json,
  chandigarh-zone-guides.json, database/seo-content/zones/chandigarh.json and the
  city hub (PSEB on the Mohali side, BSEH in Panchkula). No coaching institutes,
  schools, colleges or people named. Area links render only for active areas.
  FAQs render from faqs/jee-home-tutor-chandigarh.php.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jcgGuideTitle">
  <h2 id="jcgGuideTitle">JEE home tutors across the Chandigarh tricity</h2>

  <p class="nx-guide__lede">
    A JEE aspirant in the tricity can live in one state, attend school under a board from another and travel to
    classes in a third jurisdiction, all within a few kilometres. There is no metro yet, so every tutor visit
    depends on the Margs, the highway through Zirakpur and Housing Board Chowk at the busy hours. This page is about
    making maths, physics and chemistry tuition work inside that week: which slots hold, how tutors cross between
    Chandigarh, Mohali and Panchkula, what Punjab and Haryana board students should check against the JEE syllabus,
    and how the plan shifts from Class 11 to a repeat year. For the exam in full, start with our national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> guide. Written by the NXTutors Academic Team.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jcg-exam">The exam, briefly</a> ·
    <a href="#jcg-week">Fitting round coaching</a> ·
    <a href="#jcg-zones">Four zones</a> ·
    <a href="#jcg-mode">Home or online by subject</a> ·
    <a href="#jcg-boards">PSEB, BSEH and the syllabus gap</a> ·
    <a href="#jcg-stages">Class 11, 12, repeat year</a> ·
    <a href="#jcg-demo">The demo</a> ·
    <a href="#jcg-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jcg-exam">What the tricity student is preparing for</h2>
  <p>
    The National Testing Agency's 2026 bulletin describes JEE (Main) Paper 1 as a single three-hour test taken on
    computer. Mathematics, physics and chemistry each carry 25 questions, twenty with four options and five where
    the answer is typed as a number, so the paper has 75 questions worth 300 marks. Every wrong response, in either
    section, loses one mark. There were two sessions in 2026, in January and April, and the better score is the one
    used. JEE (Advanced) is set by the IITs for those who clear Main: two compulsory papers of three hours each,
    and no more than two attempts across two consecutive years. Rules change, so read the current documents on
    jeemain.nta.nic.in and jeeadv.ac.in before fixing a plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcg-week">Where a tutor fits in a tricity JEE week</h2>
  <p>
    The usual Class 11 or 12 week here has three fixed blocks: school, any coaching the student attends for the
    entrance, and the journey between them. A tutor goes into whatever is left. Because the tricity has no metro
    running and the revived metro plan is still to be built, that journey is by car, scooter, city bus or auto, and
    the deciding question is which roads the tutor must use at your hour. Madhya Marg carries the Panchkula commute
    into Chandigarh, with Housing Board Chowk as its pinch point, and Dakshin Marg is steady through office hours.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Slots that tend to hold for tricity JEE students</caption>
    <thead>
      <tr><th scope="col">Slot</th><th scope="col">Use</th><th scope="col">Why it works in the tricity</th></tr>
    </thead>
    <tbody>
      <tr><td>Early evening on a day without coaching</td><td>The main maths or physics lesson at home, 90 minutes</td><td>Starts before the return rush on Madhya Marg and Dakshin Marg</td></tr>
      <tr><td>Late evening after a coaching day</td><td>A 40-minute online doubt slot</td><td>Nobody crosses Housing Board Chowk at the worst time</td></tr>
      <tr><td>Weekend morning</td><td>Test review or a long chemistry block</td><td>Quiet roads, so a tutor from Mohali or Zirakpur can still come</td></tr>
      <tr><td>Weekday daytime</td><td>A repeat-year student's teaching sessions</td><td>Off-peak travel opens the wider tricity pool</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Share the coaching timetable, if there is one, when you ask for tutors. Fix the tutor's slot
    around that first and keep it the same each week, because a tutor coming from the other side of the state
    line plans the evening around regular slots, and a moving slot is the first thing to collapse in the board months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcg-zones">JEE tuition in the tricity's four zones</h2>
  <p>
    Tutor supply and road access differ sharply from the first-phase sectors to Aerocity. The
    <a href="{{ url('/city/chandigarh') }}">Chandigarh page</a> lists every sector, phase and society we cover.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-1-30') }}">Sectors 1 to 30</a></h3>
  <p>
    Low-rise plotted homes where the tutor rings the bell, from {!! $cgA('sector-10', 'Sector 10') !!} by the Leisure
    Valley belt to {!! $cgA('sector-18', 'Sector 18') !!}. The Sector 17 bus terminal sits in the middle, so a tutor who
    does not drive can still reach the central sectors with a short auto ride. Postgraduate students near the Sector 14
    campus often teach close by, which suits regular Class 11 maths and physics work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-31-56-manimajra') }}">Sectors 31 to 56 and Manimajra</a></h3>
  <p>
    Denser housing-board blocks and houses, as in {!! $cgA('sector-36', 'Sector 36') !!} and
    {!! $cgA('sector-46', 'Sector 46') !!}. The Sector 43 bus terminal brings tutors in from Mohali and Zirakpur, and
    Sector 46 is close to the Zirakpur roads, so a specialist from across the border may be nearer in practice than one
    from the northern sectors.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3><a href="{{ url('/city/chandigarh/zone/mohali') }}">Mohali</a></h3>
  <p>
    The older phases, including {!! $cgA('mohali-phase-5', 'Phase 5') !!}, are mostly independent houses; Phase 7 touches
    Chandigarh’s Sector 52, so tutors from the southern sectors can cover them easily. Aerocity has fewer tutors living
    inside it so far, which makes a hybrid plan with an online specialist the realistic choice there.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3><a href="{{ url('/city/chandigarh/zone/panchkula-zirakpur') }}">Panchkula and Zirakpur</a></h3>
  <p>
    Plotted sectors such as Sector 8, the mix of houses and flats in {!! $cgA('panchkula-sector-21', 'Panchkula Sector 21') !!},
    and the gated societies of Sector 20 and most of Zirakpur. Peer Muchalla adjoins Sectors 20 and 21, so one tutor can serve both towns. Staying on your own
    side of Housing Board Chowk is the steadier choice for a twice-weekly routine.
  </p>
      </div>
    </div>
  <p>
    More local detail is in our <a href="{{ url('/blog/chandigarh-sectors-tuition-guide') }}">Chandigarh sectors
    guide</a> and the <a href="{{ url('/blog/mohali-and-panchkula-tuition-guide') }}">Mohali and Panchkula guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcg-mode">Home, online or both: subject by subject</h2>
  <p>
    The three JEE subjects do not need the same format, and the tricity's road pattern makes the choice matter more.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sensible split of home and online JEE sessions in the tricity</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Home</th><th scope="col">Online</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Calculus and coordinate geometry taught slowly, with the tutor reading every line of working</td><td>Timed problem sets and the review of a test, screen-shared</td></tr>
      <tr><td>Physics</td><td>Mechanics and electrodynamics, where watching how a student sets up a problem matters most</td><td>Doubt clearing after a coaching day, with a camera on the notebook</td></tr>
      <tr><td>Chemistry</td><td>Physical chemistry numericals</td><td>Inorganic and organic recall checks, short and frequent</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a family in Panchkula with a strong physics tutor in Mohali, one home visit on Saturday and an online evening
    slot mid-week often beats two weekday drives across Madhya Marg. In the first-phase sectors, where tutors live
    close, two shorter home sessions are easy to keep.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcg-boards">PSEB, BSEH, CBSE and the JEE syllabus gap</h2>
  <p>
    The tricity's board mix follows the state line. On the Mohali side, including Zirakpur, some families study under
    the Punjab School Education Board; in Panchkula, the Board of School Education Haryana is the state option; across
    all three towns many students are in CBSE or CISCE schools. JEE does not follow any of them. The NTA publishes its
    own unit list, 14 in mathematics and 20 each in physics and chemistry, spread over both senior years and close to
    the NCERT books.
  </p>
  <ul>
    <li><strong>State-board students.</strong> PSEB and BSEH set their own textbooks and papers. A tutor should lay the school textbook beside the NTA unit list in the first fortnight of Class 11, mark what the school covers late or lightly, and plan extra time for those units. Check each board's current syllabus on its own website.</li>
    <li><strong>CBSE students.</strong> The overlap is closest; the tutor's job is depth, speed and the numerical-answer questions.</li>
    <li><strong>ISC students.</strong> Chapter order differs from the NTA list, so JEE practice must track what school has reached.</li>
    <li><strong>Changing school across the line.</strong> A family that moves between Panchkula and Chandigarh may also change board; tell us, and we look for a tutor who knows both.</li>
  </ul>
  <p>
    For the school side of the same subjects, see our tricity <a href="{{ url('/maths-home-tutor-chandigarh') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-chandigarh') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-chandigarh') }}">chemistry</a> tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcg-stages">Class 11, Class 12 and a repeat year in the tricity</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a tricity JEE plan changes by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Priority</th><th scope="col">Tricity-specific point</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Every foundation chapter secure: vectors, kinematics, functions, mole concept</td><td>State-board students map the textbook against the NTA units in the first weeks</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision and timed papers before the January session</td><td>Keep the board's own past papers in the plan before pre-boards</td></tr>
      <tr><td>Repeat year</td><td>Diagnose last year's tests, rebuild the costly chapters, many full papers</td><td>Daytime home sessions avoid the Marg peaks entirely</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In Class 11, ask the tutor to keep an error log from the first month and to test fundamentals without notes. In
    Class 12, the risk is that Class 11 chapters fade while new ones arrive; a weekly mixed set protects them. A repeat
    year is open for Main under the 2026 bulletin, which has no age limit and accepts recent Class XII passes, but
    JEE (Advanced) allows only two attempts in consecutive years, so check the current brochure first.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcg-demo">What to check in a tricity JEE demo</h2>
  <ol>
    <li>Bring three problems the student could not finish from a recent sheet or test, and watch whether the tutor asks what was tried first.</li>
    <li>See who holds the pen. The student should do most of the solving, with hints.</li>
    <li>Ask for a quicker second method on one problem; JEE rewards speed.</li>
    <li>Ask how negative marking on numerical-answer questions should change when the student attempts them.</li>
    <li>For a PSEB or BSEH student, ask which NTA units the school textbook covers thinly.</li>
    <li>Ask how the tutor will reach you at the agreed hour, and what the online back-up is when the roads are blocked.</li>
  </ol>
  <p>
    You get two or three matched tutors, the first class with the one you choose is free, and switching later costs
    nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> yourself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcg-fees">JEE tutor fees in the tricity and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo. A tutor's home fee can differ from the online one,
    since crossing the tricity takes time. Our <a href="{{ url('/blog/home-tuition-fees-chandigarh') }}">tricity
    fees guide</a> and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain more.
  </p>
  <p>
    Send the class, board, target (Main, or Main and Advanced), the subjects, your sector or phase, and the coaching
    days. Then book a <a href="{{ url('/demo-class') }}">free demo class</a>. For medical entrance, see the
    <a href="{{ url('/neet-home-tutor-chandigarh') }}">NEET home tutor in Chandigarh</a> page. Teachers in the tricity
    can find open requests on <a href="{{ url('/tuition-jobs/chandigarh') }}">Chandigarh tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
