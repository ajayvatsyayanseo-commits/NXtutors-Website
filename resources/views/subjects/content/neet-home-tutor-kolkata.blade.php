{{--
  Kolkata page for NEET home tutors. The exam, the NMC syllabus and the
  NCERT-first method are covered on the national hub (/neet-home-tutor); this
  page is about running NEET tuition in Kolkata: short biology checks and longer
  physics sessions, the Metro and the zones, ISC / CBSE / Higher Secondary
  students, paper mocks at home, and Class 11, Class 12 and repeat-year plans.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, NEET (UG) 2026 Information Bulletin (neet.nta.nic.in): 180 compulsory
    MCQs in 180 minutes (physics 45, chemistry 45, biology 90), 720 marks, +4/-1;
    pen and paper, single day, single shift; English, Hindi bilingual, or English
    plus a regional language (13 in all); minimum age 17 by 31 December, no upper
    limit; ties by biology, then chemistry, then physics, then ratio of incorrect
    to correct answers.
  - NMC syllabus for NEET (UG) 2026: biology in 10 units, the first five from the
    Class 11 NCERT book and the last five from Class 12.
  West Bengal boards described generally only, as on the Kolkata city hub. Local
  detail only from database/seo-content/areas/kolkata-research.json,
  kolkata-zone-guides.json, zones/kolkata.json and /city/kolkata. No schools,
  colleges, hospitals, coaching institutes or people named. Area links render
  only for active Kolkata areas.
--}}
@php
  $kneSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kneA = function (string $slug, string $label) use ($kneSlugs) {
      return in_array($slug, $kneSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kneGuideTitle">
  <h2 id="kneGuideTitle">NEET home tutor in Kolkata: biology checked every week, physics taught properly, mocks on paper</h2>

  <p class="nx-guide__lede">
    NEET preparation in Kolkata often sits on top of a heavy school course. An ISC student is writing long biology
    answers for CISCE, a Higher Secondary student is following the West Bengal council's textbooks, and both are taking
    a coaching batch that runs on objective questions. The tutor's job is to join those pieces without adding a fourth
    timetable. This page explains how Kolkata families usually set that up: which sessions to hold online and which at
    home, how the Metro and the zones affect the choice of tutor, how to run a pen-and-paper mock in a flat or a family
    house, and what changes across Class 11, Class 12 and a repeat year. The exam itself is covered on the national
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kne-recap">NEET in brief</a> ·
    <a href="#kne-format">Session formats</a> ·
    <a href="#kne-coaching">Around coaching and Puja</a> ·
    <a href="#kne-where">Six neighbourhoods</a> ·
    <a href="#kne-boards">ISC, CBSE, Higher Secondary</a> ·
    <a href="#kne-stages">Class 11, 12, repeat year</a> ·
    <a href="#kne-mocks">Mocks at home</a> ·
    <a href="#kne-demo">The demo</a> ·
    <a href="#kne-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kne-recap">NEET (UG) in one paragraph</h2>
  <p>
    The NTA's 2026 bulletin set NEET (UG) as a single sitting on paper: 180 compulsory multiple-choice questions in 180
    minutes, with 45 in physics, 45 in chemistry and 90 in biology across botany and zoology, for 720 marks. A correct
    answer earns four marks and a wrong one costs a mark. Tied scores go to biology first, then chemistry, then physics.
    The syllabus is notified by the National Medical Commission, and its ten biology units follow the two NCERT books,
    five from each year. Booklets come in English, a bilingual Hindi version, or English with one of the listed regional
    languages. Confirm every detail, including the language list, in the current bulletin on neet.nta.nic.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-format">Short biology checks, long physics sessions: which belongs where?</h2>
  <p>
    Booking "a NEET tutor twice a week at home" treats three subjects as one. They need different formats, and in a
    city where a home visit can mean a Metro ride plus an auto, the format decides the cost.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Matching the NEET subject to the session format in Kolkata</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Format</th><th scope="col">What happens in it</th></tr>
    </thead>
    <tbody>
      <tr><td>Biology</td><td>Online, 30 to 45 minutes, two or three times a week</td><td>Closed-book recall of the week's NCERT chapters, diagrams labelled from memory, line-level questions</td></tr>
      <tr><td>Physics</td><td>At home, about 90 minutes, once or twice a week</td><td>Concepts rebuilt, numericals worked on paper with the tutor watching each step</td></tr>
      <tr><td>Chemistry</td><td>Split: physical numericals at home, inorganic recall online</td><td>Mole concept and equilibrium problems in person; reaction and property recall on screen</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Physics is where many NEET students lose most marks, so it usually earns the home visit. Our
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> page shows how one of those sessions runs, and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield physics chapters</a> post helps set priorities.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-coaching">Fitting the tutor around coaching, college crowds and the Puja weeks</h2>
  <p>
    Most Kolkata NEET students in Classes 11 and 12 attend a coaching batch on several evenings. The tutor should take the
    gaps the batch leaves, not compete with it.
  </p>
  <ul>
    <li><strong>After a coaching evening:</strong> a short online biology check on that day's chapter, while it is fresh.</li>
    <li><strong>On a free weekday afternoon:</strong> the physics session at home, ahead of the evening peak on the bypass, VIP Road or Diamond Harbour Road.</li>
    <li><strong>Saturday or Sunday morning:</strong> a full paper mock at home, with the review the same day or the next.</li>
    <li><strong>The autumn festive weeks:</strong> crowds fill the old northern lanes and the big crossings. Move the physics session online or earlier in the day, and keep the biology checks going, since recall slips fastest in a break.</li>
  </ul>
  <p>
    Our guide to <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching or a home
    tutor</a> was written for another city, but its division of jobs (coaching sets the pace, the tutor clears what is
    stuck and reviews mocks) holds in Kolkata too.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>An illustrative Class 12 week: ISC school, coaching on Monday, Wednesday and Friday</caption>
    <thead>
      <tr><th scope="col">Day</th><th scope="col">Tutor time</th></tr>
    </thead>
    <tbody>
      <tr><td>Monday</td><td>After coaching, 30 minutes online: recall check on the biology chapter taught that evening</td></tr>
      <tr><td>Tuesday</td><td>After school, 90 minutes at home: physics doubts from the coaching sheet, one concept rebuilt, timed questions</td></tr>
      <tr><td>Thursday</td><td>40 minutes online: inorganic chemistry recall and diagram labelling</td></tr>
      <tr><td>Saturday</td><td>Full paper mock at home, under exam timing</td></tr>
      <tr><td>Sunday</td><td>Mock review online with the tutor; ISC written answers practised in the weeks before school exams</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-where">How do tutors reach six Kolkata neighbourhoods for NEET physics?</h2>
  <p>
    Because biology can run online, the home visit is mostly about physics, and that is where travel matters. Six
    neighbourhoods across six zones show how differently it plays out.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Kolkata neighbourhoods: the way in and the practical advice</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Way in for the tutor</th><th scope="col">Advice for the family</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kneA('lake-gardens', 'Lake Gardens') !!}</td><td>Rabindra Sarobar on the Blue Line, or Lake Gardens on the suburban line</td><td>Many tutors can come; compare two demos before choosing</td></tr>
      <tr><td>{!! $kneA('garia', 'Garia') !!}</td><td>Kavi Nazrul or Garia Bazar on the Blue Line; Garia station on the Sealdah South lines</td><td>A tutor on the Metro keeps time better than one driving the evening main road</td></tr>
      <tr><td>{!! $kneA('patuli', 'Patuli') !!}</td><td>The Orange Line along the bypass, then a short ride</td><td>Give block and plot number; avoid the bypass junctions at the evening rush</td></tr>
      <tr><td>{!! $kneA('lake-town', 'Lake Town') !!}</td><td>By road off VIP Road or Jessore Road, or via Dum Dum's rail and Metro links</td><td>Leave a margin around airport-road traffic when fixing the time</td></tr>
      <tr><td>{!! $kneA('shyambazar', 'Shyambazar') !!}</td><td>Blue Line to Shyambazar, then on foot into the lanes</td><td>Mid-afternoon or later evening avoids the five-point crossing at its worst</td></tr>
      <tr><td>{!! $kneA('santragachi', 'Santragachi') !!}, Howrah</td><td>A tutor already on the Howrah side, or by road on the Kona Expressway</td><td>Share tower, flat and gate rules before the demo; online biology fills the week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides with timing and housing notes: <a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge,
    Gariahat and Alipore</a>, <a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>,
    <a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and EM Bypass South</a>,
    <a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum and Baguiati</a>,
    <a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a>, <a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>,
    <a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala and New Alipore</a>,
    <a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a> and
    <a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>. All localities are on the
    <a href="{{ url('/city/kolkata') }}">Kolkata page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-boards">ISC, CBSE or Higher Secondary: one revision plan for school and NEET</h2>
  <p>
    The NMC syllabus is built on NCERT content. How much extra work that means depends on the school course.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What the board mix means for a Kolkata NEET student</caption>
    <thead>
      <tr><th scope="col">School course</th><th scope="col">Where it helps</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>ISC (CISCE)</td><td>Detailed biology, careful diagrams and precise terms</td><td>NCERT line-by-line reading on top of the school text, and fast objective practice</td></tr>
      <tr><td>CBSE</td><td>The NCERT books are the school books</td><td>Closed-book recall and timed MCQs; written board answers before pre-boards</td></tr>
      <tr><td>Higher Secondary (WBCHSE)</td><td>Strong written practice in the council's own style</td><td>A chapter-by-chapter map against the NMC units, using the council's latest notices for the school side</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If your child has studied science in Bengali, decide early whether to take the paper in English or a regional
    option, check the current bulletin's list, and ask for a tutor who can teach biology's vocabulary in both. Our
    <a href="{{ url('/biology-home-tutor-kolkata') }}">biology</a>, <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a>
    and <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a> pages for Kolkata cover each board in depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-stages">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Class 11</h3>
  <p>
    Half of the biology units come from the Class 11 book, so this is the year to build a recall habit. Start the weekly
    online check in the first month, and in physics make mechanics secure before the monsoon and Puja breaks interrupt
    the routine. An April start, when CBSE and CISCE sessions open, gives the longest run.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Class 12</h3>
  <p>
    New chapters, Class 11 revision and the board arrive together. Schedule biology revision passes across the year, not
    in the final weeks, and keep physics timed. ISC and Higher Secondary students need a few weeks of written,
    diagram-heavy answers before pre-boards; plan them in from the start.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A repeat year</h3>
  <p>
    The 2026 bulletin set a minimum age of 17 and no upper limit; check the current one. Start with last year's mocks:
    which subject lost the most, and was it knowledge, speed or guessing? Daytime home sessions at off-peak hours make a
    wider set of physics tutors willing to travel.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-mocks">Running a pen-and-paper mock at home</h2>
  <p>
    The 2026 exam was on paper, so mocks should be too: printed paper, a separate answer sheet, three hours, no phone. In
    a Kolkata flat or a family house that means agreeing a quiet morning with the household, ideally the same weekend slot
    each time. The tutor then reviews three numbers per subject: wrong answers, questions left blank, and time spent.
    Those show whether the next month should go on content, speed or the discipline to leave a doubtful question.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-demo">Checklist for the NEET demo</h2>
  <ul>
    <li>For biology, ask the tutor to test your child on a chapter just read. Gaps should surface within minutes.</li>
    <li>For physics, bring two or three stuck coaching questions and watch whether the tutor guides or simply solves.</li>
    <li>Ask how they use NCERT: line-level questions and diagram checks, not "read it again".</li>
    <li>Ask how they handle the school course, whether ISC, CBSE or Higher Secondary.</li>
    <li>Ask which route and slot they can keep every week, including the festive weeks.</li>
  </ul>
  <p>
    If the fit is wrong, we arrange the next demo; switching is free. See our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> for more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kne-fees">NEET tutor fees in Kolkata and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee and you see each before the demo. One home physics tutor plus short online biology checks
    usually costs less each month than three full subject tutors. The <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    has more.
  </p>
  <p>
    Send the class, board, the NEET subjects that need help, coaching days, your neighbourhood and landmark, and home or
    online. We send two or three matched tutors and you book a <a href="{{ url('/demo-class') }}">free demo class</a>.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Our
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first biology guide</a> and
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important chemistry chapters</a> are good to share
    with a tutor. For engineering, see the <a href="{{ url('/jee-home-tutor-kolkata') }}">JEE home tutor in Kolkata</a>
    page; teachers can find requests on <a href="{{ url('/tuition-jobs/kolkata') }}">Kolkata tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
