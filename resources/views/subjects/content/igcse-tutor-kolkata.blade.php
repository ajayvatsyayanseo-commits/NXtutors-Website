{{--
  Board page for "IGCSE tutor Kolkata" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC
  maths). No anecdotes, years or results are claimed for him. No schools,
  coaching institutes or people are named.

  Board facts only as the Gurgaon board hub (igcse-tutor-gurgaon) states
  them, which cites cambridgeinternational.org and qualifications.pearson.com
  (read 1 Oct 2026):
  - Cambridge IGCSE Mathematics 0580 (2025-2027): Core Papers 1 and 3,
    grades C-G; Extended Papers 2 and 4, grades A*-E; one non-calculator
    paper; June and November series, March also in India; about 130 guided
    learning hours per subject.
  - Cambridge IGCSE Physics 0625, Chemistry 0620, Biology 0610 (2026-2028):
    Core (C-G) or Extended (A*-G, Core plus Supplement); MCQ 40 questions,
    45 min, 30%; theory 80 marks, 1 h 15 min, 50%; practical test (Paper 5)
    or alternative to practical (Paper 6), 40 marks, 20%.
  - Cambridge Additional Mathematics 0606; Edexcel Further Pure 4PM1.
  - Pearson Edexcel International GCSE Mathematics A (4MA1): Foundation and
    Higher, grades 9-1, January and June; 4PH1/4CH1/4BI1 untiered, two
    written papers, no separate practical exam.
  IGCSE's presence in Kolkata only as the /city/kolkata hub states it ("a
  smaller group follow the IB or Cambridge IGCSE"; the hub notes IGCSE
  rewards command words, tier choice and past-paper practice). No shares, no
  school names, no claim about where IGCSE families live. Local travel detail
  only from kolkata-zone-guides.json and kolkata-research.json. Fee wording
  is the approved sentence. Area links render only for active Kolkata areas.
--}}
@php
  $kigSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kigA = function (string $slug, string $label) use ($kigSlugs) {
      return in_array($slug, $kigSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kigGuideTitle">
  <h2 id="kigGuideTitle">IGCSE tutors in Kolkata: syllabus code, tier and exam series first</h2>

  <p class="nx-guide__lede">
    Ask a Kolkata tutor whether they teach "IGCSE" and most will say yes, because the maths and science overlap with
    ICSE and CBSE. The useful question is narrower: which awarding body, which syllabus code, which tier and which exam
    series. Those four details decide the papers your child writes and the grades within reach. This page explains how
    the Cambridge and Edexcel courses are built, where the marks are usually lost, which subjects families ask about,
    how tutors get to each part of the city, and what to check in the free demo. It is written by Ajay Vatsyayan, who
    teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kig-city">IGCSE in Kolkata</a> ·
    <a href="#kig-boards">Cambridge or Edexcel</a> ·
    <a href="#kig-tiers">Tiers and grades</a> ·
    <a href="#kig-sci">Science papers</a> ·
    <a href="#kig-years">Grades 9 and 10</a> ·
    <a href="#kig-session">A good session</a> ·
    <a href="#kig-mode">Home or online</a> ·
    <a href="#kig-subjects">Subjects and pages</a> ·
    <a href="#kig-reach">Tutors by area</a> ·
    <a href="#kig-demo">The demo</a> ·
    <a href="#kig-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kig-city">Where IGCSE sits among Kolkata's boards</h2>
  <p>
    On our <a href="{{ url('/city/kolkata') }}">Kolkata tutors page</a>, Cambridge IGCSE appears with the IB as the
    smaller group beside CISCE, CBSE and the West Bengal boards. We do not estimate its share or name schools. What it
    means in practice: plenty of Kolkata tutors know the content, fewer know the papers. IGCSE rewards command words,
    tier choice and steady past-paper work, and a tutor whose habits were formed on ICSE long answers or Madhyamik
    patterns may over-write, or under-practise the multiple-choice and practical papers. Be precise in your request, for
    example "Cambridge 0620 Extended, Grade 10, March series", and you will be matched faster.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-boards">Cambridge IGCSE or Edexcel International GCSE?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two awarding bodies compared on the points that change tutoring</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">Cambridge IGCSE</th><th scope="col">Pearson Edexcel International GCSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade scale</td><td>A* down to G (some 9–1 versions under other codes)</td><td>9 down to 1</td></tr>
      <tr><td>Maths entry levels</td><td>Core or Extended in 0580</td><td>Foundation or Higher in 4MA1</td></tr>
      <tr><td>Calculator in maths</td><td>One paper without, one with</td><td>Permitted on both papers</td></tr>
      <tr><td>Sciences</td><td>Tiered in 0625, 0620, 0610, with a practical paper</td><td>No tiers in 4PH1, 4CH1, 4BI1; practical skills assessed in the written papers</td></tr>
      <tr><td>When exams run</td><td>June and November, plus a March series in India</td><td>Maths A in January and June; confirm other subjects with the school</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The school picks the board, sometimes differently for different subjects. Ask the office for the codes on your
    child's entry before tuition starts. Cambridge designs each syllabus around roughly 130 guided learning hours, so
    a tutor is supporting a substantial course in every subject, not a quick revision. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel comparison</a> goes paper by
    paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-tiers">Why the tier decides the ceiling</h2>
  <p>
    In Cambridge 0580, a Core candidate writes Papers 1 and 3 and can reach grades C to G; an Extended candidate writes
    Papers 2 and 4 and can reach A* to E. Put simply, no performance on Core maths earns an A. In the Cambridge
    sciences, Extended means the Core content plus a Supplement, with A* to G available, against C to G on Core. In
    Edexcel maths, Foundation aims at grades 5 to 1 and Higher at 9 to 4.
  </p>
  <p>
    Schools usually settle the tier during Grade 10, using test results. So for a borderline student, the tutor's real
    job through Grade 9 and early Grade 10 is to make the higher tier an obvious choice: Supplement topics, harder
    algebra, and full Extended papers under time. A student already entered for Core or Foundation needs the opposite
    emphasis, collecting every reachable method mark and reading questions fully.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-sci">How Cambridge weights the science papers</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics, Chemistry and Biology: three papers per candidate</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">What it is</th><th scope="col">Share</th><th scope="col">Practice that works</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice (1 Core, 2 Extended)</td><td>40 questions, four options each, 45 minutes</td><td>30%</td><td>Full timed sets, then a reason for every wrong option</td></tr>
      <tr><td>Theory (3 Core, 4 Extended)</td><td>Structured and short answers, 80 marks, 1 hour 15 minutes</td><td>50%</td><td>Past questions checked against mark-scheme key words</td></tr>
      <tr><td>Practical test (5) or alternative to practical (6)</td><td>40 marks; the school chooses which</td><td>20%</td><td>Planning methods, results tables with units, graphs, judging reliability</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Edexcel's sciences work differently: two written papers, no tiers, no separate practical exam, and longer answers
    that reward clear explanation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-years">A sensible shape for Grades 9 and 10</h2>
  <p>
    Grade 9 feels easy to students arriving from ICSE or CBSE, because the topics look familiar. The marks go elsewhere:
    unfamiliar question styles, the non-calculator paper, and "explain" or "suggest" questions answered too briefly or
    too long. A tutor should stay one topic ahead of or behind the school, and start topic-wise past-paper questions
    early. Grade 10 has two halves. Before the mocks, finish content and build technique; after them, full timed
    papers marked with the official scheme, and every lost mark logged by cause. A March entry shortens the run-in
    compared with June, so confirm the series and plan back from it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-session">What should an IGCSE session contain?</h2>
  <p>
    An hour to ninety minutes is enough if it has a shape. Open with the error log: three or four mistakes from last
    week, redone without help. Then one topic, taught with examples written the way the actual papers phrase them,
    command words included. Close with two or three past-paper questions under time, marked together against the
    official scheme so your child sees exactly which line earned which mark. Homework should be short and named, not
    "do the chapter". After each session you should get a line or two on what was covered and what comes next. If the
    hour is mostly the tutor talking, or the same worksheet returns week after week, ask for a change.
  </p>
  <p>
    For the sciences, one session in four should be about the practical paper alone: designing a fair test, drawing
    a results table with units in the headings, plotting a graph to scale and commenting on reliability. These are
    skills, not facts, and they improve only with repetition.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-mode">Home or online for IGCSE in Kolkata?</h2>
  <p>
    For Grade 9 maths and the sciences, a tutor at the table who can watch the pencil is ideal, and in a city with a
    dense metro many specialists can reach you. Online makes sense for the scarcer combinations, such as Additional
    Maths, a first-language English course or the practical route in one science, where the person who knows that exact
    code lives on the other side of the Hooghly or in another city. It also keeps sessions running through the Puja
    weeks, when market crossings and heritage lanes fill.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-subjects">Which IGCSE subjects need a tutor, and where to look</h2>
  <ul>
    <li><strong>Maths, 0580 or 4MA1:</strong> <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutors</a> and <a href="{{ url('/maths-home-tutor-kolkata') }}">maths home tutors in Kolkata</a>. Additional Maths (Cambridge 0606) or Further Pure (Edexcel 4PM1) suits a student whose main maths is already secure.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-kolkata') }}">biology</a> tutors in Kolkata, or <a href="{{ url('/science-home-tutor-kolkata') }}">science tutors</a> for all three.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-kolkata') }}">English tutors in Kolkata</a>; give the code, since first-language and second-language English are separate courses.</li>
    <li><strong>After IGCSE:</strong> <a href="{{ url('/ib-tutor-kolkata') }}">IB tutors in Kolkata</a> for the Diploma, or <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE and ISC tutors</a> and <a href="{{ url('/cbse-home-tutor-kolkata') }}">CBSE tutors</a> if your child moves board for Class 11.</li>
  </ul>
  <p>
    Our <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE board hub</a> is the reference for how the qualification
    works, and the <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">board-switching guide</a> covers
    the gaps to close when moving to CBSE or ISC: fast hand calculation, radian trigonometry and textbook-style
    working.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-reach">How tutors reach you across Kolkata and Howrah</h2>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>:</strong> houses open onto the street, usually without a gate register; tell the tutor which bell to ring in {!! $kigA('salt-lake-sector-3', 'Sector 3') !!}.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town</a>:</strong> in {!! $kigA('new-town-action-area-3', 'Action Area 3') !!}, give the security desk the tutor's name, tower and flat before the first class, and avoid office peaks at the Chinar Park crossing.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Baguiati</a>:</strong> addresses in {!! $kigA('baguiati', 'Baguiati') !!} spread over several sub-localities, so share an exact landmark off VIP Road and leave a margin for airport traffic.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Dhakuria</a>:</strong> {!! $kigA('dhakuria', 'Dhakuria') !!} has a station on the Sealdah South lines, which helps a tutor coming from further south.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Santoshpur</a>:</strong> in {!! $kigA('santoshpur', 'Santoshpur') !!}, a para name and landmark help on a first visit; book away from the bypass evening rush.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>:</strong> in {!! $kigA('santragachi', 'Santragachi') !!}'s gated complexes, share tower, flat and gate rules, and allow extra time on the Kona Expressway at office hours.</li>
  </ul>
  <p>
    Where the right specialist for a particular code lives far off, a weekend home session plus a weekday online one
    with the same tutor keeps the plan workable; online maths and science need the tutor to see written working live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-demo">Checks for the IGCSE demo</h2>
  <ol>
    <li><strong>Code and tier, cold.</strong> Say "0625 Extended" or "4MA1 Higher" and see whether the paper structure comes without a search.</li>
    <li><strong>Live marking.</strong> Ask them to mark one of your child's past-paper answers against the published scheme.</li>
    <li><strong>Calculator habits.</strong> Hand methods for the Cambridge non-calculator paper; for Edexcel, algebra no calculator can do.</li>
    <li><strong>Paper 5 or Paper 6.</strong> They should ask which practical route the school uses.</li>
    <li><strong>The run-in.</strong> A rough plan back from your child's series, March, June or November.</li>
  </ol>
  <p>
    Your shortlist has two or three tutors with fees shown before the demo; if the first is not right, the next demo
    is arranged, and a later switch is free. Tutors who join pass an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kig-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Subject, tier, how close
    the series is and the tutor's travel shape the figure; see the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">tuition fees in Kolkata</a>.
  </p>
  <p>
    Send the board, code, tier, grade, neighbourhood and free slots, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>; teachers
    of IGCSE subjects can find <a href="{{ url('/tuition-jobs/kolkata') }}">tuition jobs in Kolkata</a>.
  </p>
  </section>

  </div>
</article>
