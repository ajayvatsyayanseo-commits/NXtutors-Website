{{--
  Jammu page for JEE home tutors. The exam itself is on the national hub
  (/jee-home-tutor); this page is about JEE tuition in a Jammu week: the two
  banks of the Tawi, the five zones, JKBOSE / CBSE / CISCE students, the
  JKBOSE Class 11 board year, summer and winter timing, and Class 11, Class 12
  and repeat-year plans. Author: nxtutors (NXTutors Academic Team).
  Capitals phase 2 writer (subjects-b), 3 Oct 2026.

  Exam facts only as stated on the national page, which cites (fetched 1 Oct 2026):
  - NTA, JEE (Main) 2026 Information Bulletin (jeemain.nta.nic.in): Paper 1 CBT,
    3 hours, maths/physics/chemistry, 20 MCQ + 5 numerical each, 75 questions,
    300 marks, +4/-1 in both sections; two sessions (January and April 2026);
    13 languages; no age limit; Advanced eligibility by rank among Paper 1
    candidates.
  - JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in): two compulsory
    three-hour papers; English and Hindi; at most two attempts in consecutive years.
  JKBOSE facts from the board's site, jkbose.jk.gov.in, read 3 Oct 2026:
  - https://jkbose.jk.gov.in/ : examinations named for Class 10 (SSE), Class 11
    (Higher Secondary Part I) and Class 12 (Higher Secondary Part II); notices
    for summer-zone (SZ) and winter-zone (WZ) sessions of the Jammu Division.
  - https://jkbose.jk.gov.in/Syllabus-for-12th-class.html ->
    pdf/Syllabi Class 12th 2026 organised.pdf : syllabus for 2026-27 for
    Summer Zone areas of Jammu Division (2025-26 for Kashmir Division and
    Winter Zone areas); Physics and Chemistry compulsory in the science faculty;
    Physics, Chemistry, Biology 100 = 70 theory + 10 internal + 20 practical;
    Mathematics 80 theory + 20 internal; pass 33% General English, 36% other
    subjects. Class 12 Physics paper: A 10 x 1, B 9 x 2, C 9 x 3, D 3 x 5.
    Class 12 Mathematics paper: A 10 x 1, B 10 x 2, C 8 x 4, D 3 x 6.
  - https://jkbose.jk.gov.in/ModelTestPapers.html -> pdf/MTP Physics 12th.pdf :
    log tables may be used; scientific calculator not allowed.
  No schools, colleges, coaching institutes or people named. Local detail only
  from database/seo-content/areas/jammu-research.json (areas' about +
  zone_facts). Flyovers under construction are described without dates.
  Fee wording is the approved sentence. Area links render only for active
  Jammu areas.
--}}
@php
  $jjeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jjeA = function (string $slug, string $label) use ($jjeSlugs) {
      return in_array($slug, $jjeSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jjeGuideTitle">
  <h2 id="jjeGuideTitle">JEE home tutor in Jammu: an entrance plan that survives three board years</h2>

  <p class="nx-guide__lede">
    A Jammu student aiming at engineering carries a heavier school load than most JEE candidates in India. On the
    state board, Class 11 ends in a public examination of its own, so the two years that coaching treats as one long
    run-up are, for a JKBOSE student, two separate board years with an entrance exam layered over both. A home tutor
    has to make that load workable. This page covers what the tutor should take on, how to use Jammu's hot summer and
    short winter days, which side of the Tawi your tutor should come from, how JKBOSE, CBSE and ICSE students each
    close the gap to the NTA syllabus, and how plans differ in Class 11, Class 12 and a repeat year. The exam in full is
    on our national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jje-exams">The two exams</a> ·
    <a href="#jje-load">Board and entrance load</a> ·
    <a href="#jje-role">The tutor's role</a> ·
    <a href="#jje-year">Summer and winter</a> ·
    <a href="#jje-areas">Your side of the Tawi</a> ·
    <a href="#jje-boards">JKBOSE, CBSE, ICSE</a> ·
    <a href="#jje-mode">Home or online</a> ·
    <a href="#jje-stages">Stages</a> ·
    <a href="#jje-demo">Demo</a> ·
    <a href="#jje-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jje-exams">JEE Main and Advanced, as the official documents describe them</h2>
  <p>
    The NTA conducts JEE (Main). In its 2026 bulletin, Paper 1 was a three-hour computer-based test of 75 questions
    worth 300 marks: 25 questions each in physics, chemistry and mathematics, of which 20 were multiple-choice and 5
    asked for a numerical answer. A correct response earned four marks and a wrong one cost a mark, in both kinds of
    question. There were two sessions, in January and April, and a candidate's better score counted. Those ranked
    highest in Paper 1 qualified to sit JEE (Advanced), run by the IITs as two compulsory papers of three hours each,
    offered in English and Hindi. Details change every cycle, so confirm them on jeemain.nta.nic.in and jeeadv.ac.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-load">Why the board load is heavier for a Jammu JKBOSE student</h2>
  <p>
    The Jammu and Kashmir Board of School Education examines Class 10, Class 11 (Higher Secondary Part I) and Class 12
    (Higher Secondary Part II). For a student who also wants JEE, that means the Class 11 physics, chemistry and maths
    that form the base of the entrance syllabus are tested by the board in written papers at the end of that year, not
    just in school tests. The board's science faculty makes physics and chemistry compulsory and offers mathematics as
    one of the electives.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How JKBOSE marks the three JEE subjects in Class 12 (board syllabus document)</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Theory paper</th><th scope="col">Other marks</th><th scope="col">What it means for a JEE student</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics</td><td>70 marks, three hours</td><td>10 internal, 20 practical</td><td>Short written answers to word limits, plus a practical record that coaching never checks</td></tr>
      <tr><td>Chemistry</td><td>70 marks, three hours</td><td>10 internal, 20 practical</td><td>Reactions and equations written in full, not ticked as options</td></tr>
      <tr><td>Mathematics</td><td>80 marks, three hours</td><td>20 internal</td><td>Three six-mark long answers where every step is marked</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The board's Class 12 physics model paper also says log tables may be used but a scientific calculator may not.
    Students who do all their numericals on a phone during the week find that slow in the hall, so the tutor should set
    hand calculation as routine. Every subject other than General English needs 36% to pass under the board's scheme, a
    low bar, but marks well above it keep later options open.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-role">What should a JEE tutor in Jammu take responsibility for?</h2>
  <p>
    Tutoring that simply repeats a coaching lecture is the most common way an hour gets wasted. A Jammu tutor is useful
    when the job is defined at the start and written down:
  </p>
  <ul>
    <li><strong>One error log, kept by the tutor.</strong> Every wrong answer from coaching tests and school tests goes in it with the reason, and the same idea is tested again a fortnight later.</li>
    <li><strong>The subject that drags the rank.</strong> Many students have one subject well below the other two. Concentrated time there moves the total more than an even split.</li>
    <li><strong>The written board answer.</strong> Board papers mark steps, diagrams and units. A student fluent in objective questions still needs weekly practice in full answers, especially in Class 11 under JKBOSE.</li>
    <li><strong>Paper timing.</strong> Full three-hour papers sat at home, then reviewed question by question to separate careless errors from real gaps.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or home tutor for JEE</a>
    guide was written for another city, but its reasoning on how to divide the work between a batch and a tutor
    carries over to Jammu.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-year">Fitting JEE sessions into a Jammu summer and winter</h2>
  <p>
    The weather sets the most reliable slots. Afternoons in the hot months drain concentration, and winter evenings
    get dark early, which makes a tutor's ride home after a late session less appealing. A pattern many families can
    hold:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Slots that tend to work for Jammu JEE students</caption>
    <thead>
      <tr><th scope="col">Time of year</th><th scope="col">Home session</th><th scope="col">Online session</th></tr>
    </thead>
    <tbody>
      <tr><td>Hot months</td><td>Early morning or after sunset, with physics or maths problem-solving at the table</td><td>A short afternoon doubt slot instead of a trip in the heat</td></tr>
      <tr><td>Term time, rest of the year</td><td>Two weekday evenings outside the market rush near your chowk</td><td>One test review a week on a shared screen</td></tr>
      <tr><td>Short winter days</td><td>Move home sessions earlier, straight after school</td><td>Late-evening doubt clearing from home</td></tr>
      <tr><td>Before a board paper</td><td>Written answers and the practical file</td><td>Entrance practice paused or cut to one paper a week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    JKBOSE publishes separate date sheets for summer-zone and winter-zone sessions of the Jammu Division. Ask your
    child's school which session it follows, because that decides when the board papers fall against the two JEE Main
    sessions, and plan the switch from entrance practice to board writing backwards from the date your school confirms.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-areas">Which side of the Tawi should your tutor come from?</h2>
  <p>
    Jammu divides naturally along the river. The old city sits on the right bank to the north, and the newer colonies
    spread across the left bank. A tutor who lives on your bank is the one most likely to keep the same hour for two
    years.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Jammu localities and how a JEE tutor usually reaches them</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Getting there</th><th scope="col">Practical note</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $jjeA('kunjwani', 'Kunjwani') !!}</td><td>From the colonies off the highway, usually by two-wheeler</td><td>The Kunjwani to Satwari flyover is still being completed; until then, keep sessions outside highway peak hours</td></tr>
      <tr><td>{!! $jjeA('trikuta-nagar', 'Trikuta Nagar') !!}</td><td>Numbered sectors; tutors from nearby colonies or the station side</td><td>Give the sector number and a landmark with the first booking</td></tr>
      <tr><td>{!! $jjeA('old-city', 'Old City') !!}</td><td>Two-wheeler, then sometimes on foot through the lanes</td><td>Market evenings around Raghunath Bazar are crowded; agree a fixed hour with some margin</td></tr>
      <tr><td>{!! $jjeA('rehari-colony', 'Rehari Colony') !!}</td><td>From the old city, Bakshi Nagar or Janipur without crossing the river</td><td>Share the lane name near Rehari Chowk</td></tr>
      <tr><td>{!! $jjeA('janipur', 'Janipur') !!}</td><td>Two-wheeler is the practical choice on Janipur Road</td><td>An early-evening slot avoids the worst of the congestion</td></tr>
      <tr><td>{!! $jjeA('paloura', 'Paloura') !!}</td><td>Via Sarwal Road from Rehari Chungi, or the link from Akhnoor Road</td><td>Plotted lanes are hard to find; send a map pin before the demo</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages give more on each part of the city:
    <a href="{{ url('/city/jammu/zone/rail-head-new-city') }}">Rail Head and New City</a>,
    <a href="{{ url('/city/jammu/zone/trikuta-channi') }}">Trikuta and Channi</a>,
    <a href="{{ url('/city/jammu/zone/kunjwani-sainik-colony') }}">Kunjwani and Sainik Colony</a>,
    <a href="{{ url('/city/jammu/zone/old-city-sidhra') }}">Old City and Sidhra</a> and
    <a href="{{ url('/city/jammu/zone/janipur-akhnoor-road') }}">Janipur and Akhnoor Road</a>. Every locality is on the
    <a href="{{ url('/city/jammu') }}">Jammu home tutors</a> page, and the
    <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a> walks through the city zone by zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-boards">JKBOSE, CBSE or ICSE: closing the gap to the NTA syllabus</h2>
  <ul>
    <li><strong>JKBOSE.</strong> The board's syllabus prescribes the NCERT textbook for Class 12 chemistry, and its physics units run from electrostatics to electronic devices, the familiar sequence. The real gap is format: the board wants short written answers to word limits, while JEE wants speed on objective and numerical questions. A tutor should keep the two kinds of practice in separate sessions so neither crowds out the other.</li>
    <li><strong>CBSE.</strong> NCERT is the school book, so the syllabus overlap is the closest of the three. The risk is the opposite one: months of option-ticking, then a board paper that marks working line by line.</li>
    <li><strong>ICSE and ISC.</strong> Long answers in English and a wide syllabus. Match the school's chapter order against the NTA units early so the school year and the entrance plan do not drift months apart.</li>
    <li><strong>Language.</strong> Some Jammu students think through physics in Hindi and write in English. Settle the paper language from the current bulletin's list in Class 11, and ask for a tutor comfortable explaining terms in both.</li>
  </ul>
  <p>
    The board-side detail sits on our Jammu <a href="{{ url('/jkbose-tutor-jammu') }}">JKBOSE</a>,
    <a href="{{ url('/maths-home-tutor-jammu') }}">maths</a>, <a href="{{ url('/physics-home-tutor-jammu') }}">physics</a>
    and <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-mode">Home or online, subject by subject</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A split that suits many Jammu JEE students</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Usual format</th><th scope="col">Reason</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics</td><td>Home</td><td>The tutor needs to watch the free-body diagram and the setup, which is where most students stall</td></tr>
      <tr><td>Mathematics</td><td>Home for new topics, online for paper reviews</td><td>Long working on paper; reviewing a timed paper works well on a shared screen</td></tr>
      <tr><td>Chemistry</td><td>Online for organic and inorganic recall, home if physical chemistry numericals lag</td><td>Short, frequent checks fit a screen</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For Advanced-level problem solving, a specialist teaching online from another city can be a better choice than the
    nearest available tutor. Our <a href="{{ url('/online-tutor-jammu') }}">online tutors for Jammu</a> page and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison explain how to set that up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-stages">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The tutor's focus at each stage for a Jammu student</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Entrance focus</th><th scope="col">Board focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Mechanics, calculus basics, mole concept; error log from the first month</td><td>For JKBOSE students, a board paper at the end of the year: written answers and practicals cannot wait</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision, full papers before the January session</td><td>Board papers to length and time; practical file current; calculator-free numericals for JKBOSE physics</td></tr>
      <tr><td>Repeat year</td><td>Diagnose last year's papers; rebuild the weakest chapters; many timed papers</td><td>None, which frees daytime slots and widens the choice of tutor</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Before committing to a repeat year, read the eligibility rules in the current bulletin and brochure; in 2026 Main
    had no age limit and Advanced allowed two attempts in consecutive years. Topic plans:
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">chemistry</a>, plus the
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-demo">How to test a JEE tutor in the free demo</h2>
  <ol>
    <li>Bring three questions from the last coaching test that went wrong. Does the tutor find the exact step where your child went off course, then let your child finish?</li>
    <li>Ask how they would handle the Class 11 board paper for a JKBOSE student without losing entrance momentum.</li>
    <li>Ask them to explain how negative marking should change when a student guesses.</li>
    <li>Check that your child followed the explanation, in English, Hindi or a mix.</li>
    <li>Ask where they live and whether the same hour will hold in summer and winter.</li>
  </ol>
  <p>
    If the fit is wrong, we arrange another demo, and switching later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jje-fees">JEE tutor fees in Jammu and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, and you see it before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and our <a href="{{ url('/blog/home-tuition-fees-jammu') }}">home tuition fees in Jammu</a> guide cover the questions
    to ask about hours and sessions.
  </p>
  <p>
    Send the class, board, target exam, subjects, coaching days and your locality with a chowk or morh nearby. We send
    two or three matched tutors and you book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> first. For medical entrance, see
    <a href="{{ url('/neet-home-tutor-jammu') }}">NEET home tutors in Jammu</a>. Teachers can find requests on
    <a href="{{ url('/tuition-jobs/jammu') }}">Jammu tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
