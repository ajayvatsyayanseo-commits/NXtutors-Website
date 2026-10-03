{{--
  Long-form guide for the "Class 10 home tutor Mumbai" page (SSC, CBSE, ICSE
  and IGCSE board year), covering Mumbai, Thane and Navi Mumbai. Authors:
  Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and
  ICSE science). Role statements only. No schools named. Written SSC-first and
  kept distinct from class-10-home-tutor-gurgaon.

  Official sources:
  - Maharashtra State Board of Secondary and Higher Secondary Education, Pune
    (mahahsscboard.in/en, about page, checked 1 Oct 2026): autonomous body
    under Maharashtra Act No. 41 of 1965; conducts the SSC and HSC
    examinations through nine divisional boards, one of them Mumbai; a main
    and a supplementary examination each year. Paper pattern, subjects and
    dates are NOT stated; parents are sent to the board's site.
  - CBSE (as reused on the Gurgaon Class 10 page, from
    cbse-class-10-board-year-plan-gurgaon.html; sources cbseacademic.nic.in
    2026-27 curriculum and CBSE circulars on cbse.gov.in): 80 + 20, 33% pass,
    about half competency-focused questions, Maths Standard / Basic, two board
    exams from 2026 (compulsory main, optional second to improve up to three
    subjects), 2027 dates not announced.
  - CISCE ICSE Mathematics (icse-isc-maths-gurgaon-guide.html): one 3-hour
    80-mark paper + 20 internal (10 teacher, 10 external examiner); 2025 paper
    Section A 40 marks compulsory, four questions from Section B.
  - Cambridge IGCSE 0580 (2025-2027) Core C-G, Extended A*-E; March series in
    India; Edexcel 4MA1 Foundation 5-1, Higher 9-4
    (ib-igcse-tutoring-gurgaon-parents-guide.html).
  Local detail only from the Mumbai city hub view (junior college after SSC,
  June reopening of many State Board schools), database/seo-content/zones/mumbai.json
  and database/seo-content/areas/mumbai-research.json. Fee range is the
  approved sentence. FAQs: faqs/class-10-home-tutor-mumbai.php.

  Area links render only when that Mumbai area page exists and is active.
--}}
@php
  $tnMbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tnMbA = function (string $slug, string $label) use ($tnMbSlugs) {
      return in_array($slug, $tnMbSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="tnMbGuideTitle">
  <h2 id="tnMbGuideTitle">Class 10 home tutors in Mumbai: SSC first, then CBSE, ICSE and IGCSE</h2>

  <p class="nx-guide__lede">
    For State Board families in Mumbai, Class 10 means the SSC, the Maharashtra State Board exam whose result decides
    the next step into junior college and a stream. Others in the same building are heading for CBSE or ICSE board
    papers, or IGCSE at the end of Grade 10. The subjects overlap, the papers do not, and the tutor has to be matched to
    the exact one. In this guide, Abhinandan Tiwary, who writes on Class 10 CBSE and ICSE maths, and Aaditya Kashyap, who
    writes on CBSE and ICSE science, explain how the board year works on each route, where a tutor adds most, how to
    plan around Mumbai's two school calendars and long commutes, and what a strong Class 10 demo looks like.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tnmb-ssc">The SSC year</a> ·
    <a href="#tnmb-boards">CBSE, ICSE and IGCSE</a> ·
    <a href="#tnmb-subjects">Where a tutor helps</a> ·
    <a href="#tnmb-calendar">Planning the year</a> ·
    <a href="#tnmb-week">The weekly timetable</a> ·
    <a href="#tnmb-zones">Travel by zone</a> ·
    <a href="#tnmb-mode">Home or online</a> ·
    <a href="#tnmb-demo">The demo</a> ·
    <a href="#tnmb-fees">Fees</a> ·
    <a href="#tnmb-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tnmb-ssc">What does the SSC year involve?</h2>
  <p>
    The SSC is conducted by the Maharashtra State Board of Secondary and Higher Secondary Education, an autonomous
    body set up under a 1965 state act and based in Pune. It runs the SSC and HSC examinations through nine divisional
    boards, one of which is Mumbai, and holds a main examination and a supplementary examination each year. Schools
    teach in Marathi, English and other media, and the papers are written from the state's own textbooks.
  </p>
  <p>
    What this means for a tutor is practical rather than technical:
  </p>
  <ul>
    <li><strong>Teach from the board's books.</strong> Guides and question banks have their place, but the textbook is what the paper is written from, so every exercise in it should be done.</li>
    <li><strong>Work the board's past papers</strong> in the student's medium, and check the current pattern for each subject on mahahsscboard.in rather than relying on memory or a neighbour's notes.</li>
    <li><strong>Presentation counts.</strong> Neat, complete answers with every step shown are what a State Board tutor should insist on, and mark for, from the first week.</li>
    <li><strong>Think ahead to junior college.</strong> The SSC result shapes which stream and college follow, so the target needs to be set early, not after the preliminary exams.</li>
  </ul>
  <p>
    Our page on <a href="{{ url('/maharashtra-board-tutor-mumbai') }}">Maharashtra board tutors in Mumbai</a> covers
    the State Board across classes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-boards">How do CBSE, ICSE and IGCSE Class 10 compare?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 outside the State Board: the facts a tutor plans around</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Paper and internal marks</th><th scope="col">Key choices and dates</th><th scope="col">Main risk</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Main subjects: 80-mark board paper plus 20 internal; 33% is the pass mark per subject; about half the questions are competency-focused</td><td>Maths Standard or Basic; two board exams from 2026, a compulsory main exam and an optional second to improve up to three subjects; 2027 dates not yet announced</td><td>Case-based questions and timing</td></tr>
      <tr><td>ICSE</td><td>Maths: one 3-hour, 80-mark paper plus 20 internal marks, half from the teacher and half from an external examiner</td><td>In the 2025 maths paper, Section A (40 marks) was compulsory and four questions were chosen from Section B</td><td>Syllabus breadth and incomplete working</td></tr>
      <tr><td>Cambridge IGCSE maths (0580)</td><td>Fully examined; calculator and non-calculator papers</td><td>Core (grades C to G) or Extended (A* to E) for 2025–2027; in India, a March series alongside June and November</td><td>The wrong tier</td></tr>
      <tr><td>Edexcel International GCSE maths</td><td>Fully examined</td><td>Foundation (grades 5 to 1) or Higher (9 to 4)</td><td>The wrong tier</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For board-specific depth, see our <a href="{{ url('/cbse-home-tutor-mumbai') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-mumbai') }}">ICSE</a> and <a href="{{ url('/igcse-tutor-mumbai') }}">IGCSE</a>
    tutor pages for Mumbai, and the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-subjects">Which Class 10 subjects benefit most from a tutor?</h2>
  <p>
    On every board, maths and science are where a tutor usually earns the fee: both are cumulative, and both
    lose marks for missing steps. A quick rule for the other subjects:
  </p>
  <ul>
    <li><strong>Maths:</strong> worth a tutor if algebra or geometry from Class 9 is shaky, or if marks are lost in working rather than ideas. Our <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a> page lists tutors by board, and the <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation</a> guide sets out chapters.</li>
    <li><strong>Science:</strong> physics numericals, chemical equations and biology diagrams each trip up different students. See <a href="{{ url('/science-home-tutor-mumbai') }}">science home tutors in Mumbai</a> and our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>.</li>
    <li><strong>English:</strong> mostly answer formats and literature; a few targeted sessions often suffice.</li>
    <li><strong>Social science:</strong> a reading and map routine, not regular tuition, for most students.</li>
    <li><strong>Marathi, Hindi or another language:</strong> easy to neglect; a fixed weekly slot of self-study prevents last-minute panic.</li>
  </ul>
  <p>
    One tutor can cover maths and science if both are only slightly behind. If one is clearly weak, or the target is
    high, a specialist for that subject is the better spend.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-calendar">How should the Class 10 year be planned in Mumbai?</h2>
  <p>
    CBSE's session opens in April; many State Board schools reopen in June after the summer break; IGCSE follows the
    school's chosen exam series. The shape of a good year is the same whatever the start month:
  </p>
  <ol>
    <li><strong>The first two months:</strong> collect the syllabus and paper pattern for each subject, repair Class 9 gaps, and get a chapter or two ahead.</li>
    <li><strong>The monsoon months:</strong> chapter tests every week, a mistakes notebook, and an online fallback for days when trains stop.</li>
    <li><strong>Around Diwali:</strong> finish the syllabus, keep internal and practical work complete, and start single-subject timed papers.</li>
    <li><strong>The preliminary or pre-board season:</strong> full papers under exam conditions, checked against the marking scheme or model answers.</li>
    <li><strong>The final weeks:</strong> revision from the mistakes notebook and the official timetable, nothing new.</li>
  </ol>
  <p>
    A tutor who starts in the first two months has time to change habits. One who starts after the preliminary exams
    can still sharpen technique and timing, but cannot rebuild a weak foundation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-week">Building a Class 10 week around school, classes and the commute</h2>
  <p>
    Some Mumbai Class 10 students already attend a coaching class or a group tuition after school, and some travel a
    long way by train or van. Adding a home tutor on top can tip the week over. Before booking, write the week out
    hour by hour, including travel. Then:
  </p>
  <ul>
    <li>Keep at least an hour a day for self-study; that is where practice turns into marks.</li>
    <li>Put home or online tuition on days without coaching, so the student is not travelling twice.</li>
    <li>Ask the tutor to work on the same chapters as the class that week, in board-style written answers.</li>
    <li>Leave one evening free, and protect sleep from December onwards.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-zones">How tutors reach Class 10 students, zone by zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for Class 10 tuition in six zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route a tutor usually takes</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar &amp; Central</a></td><td>Dadar, the one station on both the Central and Western lines, or Line 3 in Dadar West</td><td>Avoid the moment office crowds pass through the station</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle &amp; Juhu</a></td><td>Train to Santacruz or Vile Parle and an auto, or D N Nagar metro for the north side</td><td>Weekday slots avoid weekend beach crowds</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali &amp; Dahisar</a></td><td>Line 7 to Poisar or Akurli for the east side</td><td>Highway junctions slow down in the evening</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon &amp; Malad</a></td><td>Western or Harbour line to Goregaon, or Line 2A along Link Road</td><td>Start a little after the rush on Link Road</td></tr>
      <tr><td>Bhandup &amp; Mulund</td><td>Central line to Mulund; the Mulund–Airoli Bridge for tutors driving from Navi Mumbai</td><td>Grid streets from the station are easy on foot</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a></td><td>Harbour or Trans-Harbour line to Panvel, then an auto</td><td>Old-town lanes are close; New Panvel uses sector numbers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-mode">Home or online for the board year?</h2>
  <p>
    Home tuition is the natural choice for maths and science working, where the tutor needs to see each line. Online
    widens the choice, which matters most for ICSE and IGCSE specialists who may live on another railway line, and it
    removes travel on heavy evenings. For maths online, the tutor must see the notebook live through a tablet, shared
    whiteboard or phone camera. A practical Mumbai pattern is a home session at the weekend and an online one midweek,
    switching fully online on monsoon days.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-demo">What to test in a Class 10 demo</h2>
  <p>
    The first class with the tutor you choose is a free demo. In a board year, test board knowledge directly:
  </p>
  <ol>
    <li><strong>Ask about the paper.</strong> For SSC, where the tutor gets the current pattern; for CBSE, the 20 internal marks and the second exam; for IGCSE, the tier.</li>
    <li><strong>Hand over a recent test.</strong> A good tutor reads it and names the mistakes that cost marks.</li>
    <li><strong>Watch the marking.</strong> Did they check each step or only the final answer?</li>
    <li><strong>Try an unfamiliar question</strong> from your child's book and see how the tutor teaches it, not just solves it.</li>
    <li><strong>Ask for a plan to the exam,</strong> with dates for full papers.</li>
  </ol>
  <p>
    If the fit is not right, the next tutor on the shortlist can come for their own demo; switching later is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-fees">What does a Class 10 home tutor cost in Mumbai?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For Class 10, the board, the number of subjects, the tutor's board-year experience, the journey at your slot and the
    number of sessions all move the fee. Tutors set their own, and you see each one before the demo. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnmb-where">Where we match Class 10 tutors in Mumbai, Thane and Navi Mumbai</h2>
  <p>
    {!! $tnMbA('dadar', 'Dadar') !!} is reachable from almost every suburb by train, which gives families there a wide
    choice of board-year tutors. In {!! $tnMbA('juhu', 'Juhu') !!}, with no station of its own, tutors finish the
    journey by auto from Santacruz, Vile Parle or Andheri. {!! $tnMbA('kandivali-east', 'Kandivali East') !!} is
    largely gated complexes, where the tutor's name should reach security before the first session, and in
    {!! $tnMbA('goregaon-west', 'Goregaon West') !!} many societies ask visitors to sign in at the gate.
  </p>
  <p>
    {!! $tnMbA('mulund', 'Mulund') !!}, the last suburb before Thane, is laid out on a grid from the station, so tutors
    on the Central line walk in easily. At the far end of the Harbour line,
    {!! $tnMbA('panvel', 'Panvel') !!} combines an old town of close lanes with the planned sectors of New Panvel.
  </p>
  <p>
    Before Class 10, see <a href="{{ url('/class-9-home-tutor-mumbai') }}">Class 9 tutors</a>; after it,
    <a href="{{ url('/class-11-home-tutor-mumbai') }}">Class 11 tutors in Mumbai</a> help with the junior college or
    senior secondary step. Tell us the board, subjects, medium, locality and nearest station; we shortlist two or three
    tutors with fees shown. <a href="{{ url('/demo-class') }}">Book a free demo</a>, browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> or see every locality on the page of
    <a href="{{ url('/city/mumbai') }}">home tutors in Mumbai</a>.
  </p>
  </section>

  </div>
</article>
