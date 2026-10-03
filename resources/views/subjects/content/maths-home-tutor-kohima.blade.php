{{--
  Long-form guide for the "maths home tutor Kohima" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/kohima-research.json (zone_facts and area "about"
  texts, each with sources).

  Nagaland Board of School Education facts, all read 3 Oct 2026 on the board's
  own site:
  - https://nbsenl.edu.in/ : name; office at Upper Bayavü Hill, Kohima; HSLC and
    HSSLC examinations; HSSLC toppers lists by Arts, Science and Commerce
    stream; Question Bank and Question Paper sections; notification of
    29-09-2026 "Rules and Regulations for HSLC & HSSLC Exams 2027".
  - https://nbsenl.edu.in/curriculum-and-syllabus : blueprints of HSLC and
    HSSLC per year; phase-wise division of chapters for Class IX; question
    paper design for Class VIII; textbook lists.
  - https://nbsenl.edu.in/cms/document/50/syllabi (Blueprint of HSLC 2026,
    Mathematics, "common for both Mathematics A & B"): 37 questions, 80 marks;
    15 x 1 MCQ, 7 x 2, 12 x 3, 3 x 5; unit marks Algebra 20, Geometry 16,
    Trigonometry 12, Mensuration 12, Statistics & Probability 12, Coordinate
    Geometry 6; internal choice in some questions.
  - https://nbsenl.edu.in/cms/document/51/syllabi (Blueprint of HSSLC 2026,
    Mathematics): 31 questions, 80 marks; 10 x 1 MCQ, 9 x 2, 8 x 4, 4 x 5;
    13 chapters in six units; chapters 5-9 (continuity and differentiability,
    application of derivatives, integrals, application of integrals,
    differential equations) 7 + 8 + 8 + 5 + 7 = 35; three-dimensional geometry
    9; probability 7; linear programming 4. Fundamentals of Business
    Mathematics has its own HSSLC paper.
  - https://nbsenl.edu.in/cms/document/49/syllabi (secondary textbooks 2025):
    NCERT Mathematics for Classes IX and X with a Mathematics Lab Manual.
  - https://nbsenl.edu.in/cms/document/41/syllabi (higher secondary textbooks
    2025): NCERT Mathematics for Class XI and Class XII.
  - https://nbsenl.edu.in/calendars -> cms/document/15/calendars and
    14/calendars (academic calendar 2026): regular classes from January; HSLC
    and HSSLC examinations conducted in February 2026; Class XI admission and
    classes late May 2026.
  CBSE and entrance facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  sections), cbse-class-10-board-year-plan-gurgaon (two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35) and
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern).
  Purely practical and educational; weather only as timing advice. No school,
  college, coaching institute, hospital, society or people's names; no
  distances or travel times; only the allowed fee sentence.

  Area links render only when that Kohima area page exists and is active.
--}}
@php
  $kmmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kmmA = function (string $slug, string $label) use ($kmmSlugs) {
      return in_array($slug, $kmmSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kmm-guide" aria-labelledby="kmmGuideTitle">
  <h2 id="kmmGuideTitle">Maths home tutor in Kohima: the right blueprint, a February deadline and a tutor who can find the house on the hill</h2>

  <p class="nx-guide__lede">
    Two Class 10 students in Kohima can open the same NCERT maths book and still be preparing for different papers.
    One sits the HSLC examination of the Nagaland Board of School Education, whose question paper follows a blueprint
    the board publishes each year; the other sits the CBSE board. The chapters overlap almost entirely, yet the mix of
    one-mark, three-mark and five-mark questions does not, and neither does the calendar: the state board's
    school year starts in January and its examinations are held in February. Add a city built across hill slopes, where a
    first visit depends on a good landmark, and the choice of tutor becomes practical as well as academic. Tell
    NXTutors the board, the class and your ward, and we suggest two or three maths tutors who fit all three. Every fee
    is visible before you meet anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kmm-who">Who writes this</a> ·
    <a href="#kmm-hslc">HSLC maths</a> ·
    <a href="#kmm-compare">HSLC and CBSE side by side</a> ·
    <a href="#kmm-hsslc">HSSLC maths</a> ·
    <a href="#kmm-jee">Class 12 and JEE</a> ·
    <a href="#kmm-year">The February year</a> ·
    <a href="#kmm-wards">Five wards</a> ·
    <a href="#kmm-demo">The demo</a> ·
    <a href="#kmm-fees">Fees</a> ·
    <a href="#kmm-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kmm-who">Who stands behind the exam advice, and what do we ask first?</h2>
  <p>
    The maths guidance here carries two bylines: Ajay Vatsyayan for IB, IGCSE and ISC mathematics, and Abhinandan
    Tiwary for Class 10 CBSE and ICSE maths. Board details for Nagaland come from the board's own
    website, nbsenl.edu.in, and nothing here replaces the current document posted there.
  </p>
  <p>
    Our first question is always the same: which body will set your child's paper? In Kohima the answer is usually
    NBSE (HSLC at Class 10, HSSLC at Class 12) or CBSE; ICSE, ISC and international courses are the other
    possibilities. The answer decides the practice material, the order of chapters and, above all, the timing
    of the board year. A tutor who has prepared students for the HSLC paper plans a January-to-February year; one who
    has only taught CBSE may be used to a different calendar.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-hslc">How is the NBSE HSLC maths paper built?</h2>
  <p>
    The board's textbook list for Classes 9 and 10 names NCERT Mathematics, together with a mathematics lab manual. So
    the book is familiar; what is particular to Nagaland is the blueprint. For the 2026 HSLC examination the board
    posted a single blueprint that it describes as common to both Mathematics A and Mathematics B. It sets 37
    questions for 80 marks, and the marks per unit look like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>NBSE HSLC 2026 mathematics blueprint: marks per unit and the first thing a Kohima tutor should check</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Check in the first fortnight</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra (polynomials, linear equations in two variables, quadratics, arithmetic progressions)</td><td>20</td><td>Can your child set up the equation from a worded problem without a hint?</td></tr>
      <tr><td>Geometry (triangles, circles)</td><td>16</td><td>Is a reason written beside every statement of a proof?</td></tr>
      <tr><td>Trigonometry and its applications</td><td>12</td><td>Is a labelled figure drawn before any ratio is chosen?</td></tr>
      <tr><td>Mensuration (areas related to circles, surface areas and volumes)</td><td>12</td><td>Are units carried through when two solids are combined?</td></tr>
      <tr><td>Statistics and probability</td><td>12</td><td>Are class marks and cumulative columns built without slips?</td></tr>
      <tr><td>Coordinate geometry</td><td>6</td><td>Is the formula written down before values are substituted?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By type, the paper holds 15 multiple-choice questions of one mark, seven two-mark questions, twelve three-mark
    questions and three five-mark long answers, with internal choice in some of them. Twelve three-mark answers add up
    to 36 marks, close to half the paper, which tells a tutor where weekly practice should sit: medium-length answers
    set out in full, neither rushed like a one-liner nor padded like a long answer. Geometry carrying 16 marks is the
    other signal. Proof-writing is a habit, and it takes months, not a revision week, to build.
  </p>
  <p>
    The board's site also carries a question bank and past papers; a tutor should bring them in by mid-Class 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-compare">HSLC or CBSE in Class 10: what actually changes for the tutor?</h2>
  <p>
    Families sometimes move between the two boards, and some tutors in Kohima teach both. The textbook overlap is
    large, so the useful comparison is the paper itself. CBSE's 2026-27 Class 10 paper is also out of 80, with 20 more
    marks awarded by the school.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 maths in Kohima: the NBSE HSLC 2026 blueprint beside CBSE 2026-27</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">NBSE HSLC</th><th scope="col">CBSE Class 10</th></tr>
    </thead>
    <tbody>
      <tr><td>Questions</td><td>37</td><td>38, in five sections A to E</td></tr>
      <tr><td>Largest unit</td><td>Algebra, 20</td><td>Algebra, 20</td></tr>
      <tr><td>Geometry</td><td>16</td><td>15</td></tr>
      <tr><td>Statistics and probability</td><td>12</td><td>11</td></tr>
      <tr><td>Longest answers</td><td>Three five-mark questions</td><td>Four five-mark questions, plus three four-mark case studies</td></tr>
      <tr><td>Where to look</td><td>The yearly blueprint on nbsenl.edu.in</td><td>Sample papers on cbseacademic.nic.in</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE also gives Class 10 students a compulsory main examination and an optional second sitting to improve up to
    three subjects, maths among them, and it takes π as 22/7 unless told otherwise, with calculators kept out of the
    hall. The practical lesson for a student switching boards is small but real: the same chapter is examined in
    differently sized pieces, so practice papers must come from the board the child will actually sit. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> walks through the
    CBSE chapters, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> sets out
    CBSE's months, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how
    we match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-hsslc">What does HSSLC maths in Class 12 ask for?</h2>
  <p>
    At the higher secondary stage the board lists NCERT Mathematics for Class 11 and Class 12. Its 2026 HSSLC blueprint
    sets 31 questions for 80 marks: ten one-mark multiple-choice items, nine two-mark questions, eight four-mark
    questions and four five-mark long answers, spread over thirteen chapters in six units.
  </p>
  <ul>
    <li><strong>Calculus decides the paper.</strong> The five chapters from continuity and differentiability to differential equations carry 35 of the 80 marks between them.</li>
    <li><strong>Three-dimensional geometry is next.</strong> It carries 9 marks, including a five-mark question, so vectors cannot be left as an afterthought.</li>
    <li><strong>Small chapters still count.</strong> Probability carries 7 and linear programming 4; both reward a neat, complete layout more than cleverness.</li>
    <li><strong>The four-mark question is the workhorse.</strong> Eight of them make 32 marks, so a student must be able to finish a medium-length calculus or matrix problem cleanly against the clock.</li>
  </ul>
  <p>
    Commerce students should confirm whether they are registered for Mathematics or for Fundamentals of Business
    Mathematics, which has its own HSSLC paper; the right tutor depends on which.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-jee">Class 12 maths and JEE: how should the two be balanced?</h2>
  <p>
    Some Kohima science students aim at JEE alongside the board. The two papers want different strengths. CBSE's Class 12
    paper also totals 80 marks across 38 compulsory questions, with calculus again worth 35, so whichever board a
    student sits, those chapters decide the result. JEE Main 2026, by contrast, set 75 questions for 300 marks in Paper 1, with maths taking 25:
    twenty multiple choice and five with a numerical answer, scored at +4 for a correct response and −1 for a wrong
    one. The pattern for any later year is the one NTA posts on jeemain.nta.nic.in.
  </p>
  <p>
    A home tutor helps most by keeping the two kinds of work apart. Board answers are written in full, every step
    shown. Entrance practice is timed and objective, followed by a short review of each wrong answer. Because the
    HSSLC examination comes early in the calendar year, a Kohima student usually has the board paper behind them
    before the entrance season begins, which makes a clean switch possible. Our
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-year">How should maths tuition follow Nagaland's school year?</h2>
  <p>
    The board's academic calendar for 2026 had regular classes starting in January and the HSLC and HSSLC examinations
    held in February. In late September 2026 the board posted its rules and regulations for the 2027 examinations, and
    the dates themselves belong to the board's routine page. For maths, that calendar means the board year is short
    and the revision months fall at the end of the calendar year.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A maths tuition rhythm for an NBSE Class 10 or Class 12 student in Kohima</caption>
    <thead>
      <tr><th scope="col">Months</th><th scope="col">Sessions</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>January to May</td><td>Two home visits a week after school</td><td>Keeps pace with the class and fixes errors from school tests; proofs and word problems started early</td></tr>
      <tr><td>June to September</td><td>Same visits, with an online slot kept ready for the wettest evenings</td><td>Finishes the syllabus and begins timed blueprint-style sections</td></tr>
      <tr><td>October to December</td><td>Two or three sessions a week</td><td>Full papers to the blueprint, the board's question bank, and a list of weak chapters worked through one by one</td></tr>
      <tr><td>Weeks before the examination</td><td>Short, frequent sessions</td><td>Past papers under time and a final check of formulae and layout</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE families run on CBSE's own calendar, with dates on cbse.gov.in, so a tutor who teaches both boards should
    keep separate plans. The same tutor can move a session online on a heavy-rain evening, so nobody has to restart with
    a stranger. The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article
    compares the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-wards">What should a maths tutor know about your ward?</h2>
  <p>
    Kohima is built across hill slopes, and buses and taxis are the usual way around. Many homes sit above or below
    the road, so a clear address, the level of the house and a sensible hour matter more to a steady routine than
    anything else. Five wards from four parts of the city show what to share; the
    <a href="{{ url('/city/kohima') }}">Kohima page</a> lists every area we cover.
  </p>
  <dl>
    <dt><strong>North Kohima</strong></dt>
    <dd>{!! $kmmA('kohima-village', 'Kohima Village') !!}: the original settlement, also called Kewhira or Bara Basti, on the high ground in the north-east. Homes are spread across the slope, so tell the tutor the nearest point a taxi can reach and a landmark from there.</dd>
    <dd>{!! $kmmA('naga-bazaar', 'Naga Bazaar') !!}: divided into Upper and Lower Naga Bazaar, between the northern wards and the town centre. Say which part you live in; a tutor from Daklane or New Market next door is often the easiest match.</dd>
    <dt><strong>Main Town</strong></dt>
    <dd>{!! $kmmA('midland', 'Midland') !!}: three neighbourhoods, Upper, Middle and Lower Midland, just south of New Market. Name your part, and keep weekday sessions clear of the hours when offices open and close.</dd>
    <dt><strong>Chandmari side</strong></dt>
    <dd>{!! $kmmA('upper-chandmari', 'Upper Chandmari') !!}: a ward of its own, separate from Lower Chandmari, which is why directions get mixed up. Say "Upper" clearly; tutors from Lower Chandmari, PR Hill or Midland are natural matches.</dd>
    <dt><strong>The southern end</strong></dt>
    <dd>{!! $kmmA('lerie', 'Lerie') !!}: grouped in the ward list with New Ministers' Hill and New Reserve. A tutor from Agri Farm, PR Hill or the Chandmari wards is the practical choice; one crossing from the north may prefer a later evening or a weekend slot.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-demo">How can you judge a maths tutor in one free demo?</h2>
  <p>
    Keep a recently marked school test on the table and ask that the free lesson cover whatever chapter the class
    reached this week. Four signs tell you most of what you need:
  </p>
  <ol>
    <li><strong>Looking before teaching.</strong> The marked test is read, or a short problem set, before any new explanation starts.</li>
    <li><strong>Precise reasons for lost marks.</strong> Each one is put down to arithmetic, careless reading or a concept that never settled.</li>
    <li><strong>The right blueprint.</strong> The tutor can tell you how many three-mark or four-mark questions your child's paper holds, and practises to that shape.</li>
    <li><strong>Something to do before the next visit.</strong> Homework is set, and you know when it will be marked.</li>
  </ol>
  <p>
    Not convinced? Another tutor from the same shortlist can give the next demo, and a switch later in the year costs
    nothing. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>
    has more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-fees">What does a maths home tutor in Kohima charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a personal
    fee, shaped by the class and board, the tutor's years with that paper, the trip up or down to your ward, and the
    number of weekly sessions. Every fee on your shortlist is visible before the demo, the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains how tutors set rates, and our
    <a href="{{ url('/blog/home-tuition-fees-kohima') }}">home tuition fees in Kohima</a> guide lists the questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmm-next">What should you send us for a maths shortlist?</h2>
  <p>
    Send the class; the board, and for HSLC whether your child takes Mathematics A or Mathematics B; the ward, a
    landmark and whether the house is above or below the road; the free afternoons; and the fee range you have in
    mind. Two or three maths tutors come back with their fees attached, and one of them gives the free demo. Every tutor
    who joins goes through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is
    published. Where nobody suitable can come to your ward at that time, part or all of the plan can move online.
    Our office is in Sector 66, Gurugram; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a>
    page explains the wider service, the <a href="{{ url('/blog/kohima-home-tuition-guide') }}">Kohima home tuition
    guide</a> walks through each zone, and <a href="{{ url('/tutors') }}">tutor profiles</a> can be browsed any time.
  </p>
  <p>
    Are you a maths teacher in Kohima? Requests from families near you appear on
    <a href="{{ url('/tuition-jobs/kohima') }}">Kohima tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
