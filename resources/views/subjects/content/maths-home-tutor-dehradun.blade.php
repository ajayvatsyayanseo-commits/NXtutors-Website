{{--
  Long-form guide for the "maths home tutor Dehradun" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Local facts come only from
  database/seo-content/areas/dehradun-research.json (zone_facts and area
  "about" texts, each with sources). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation (unit marks,
  section layout, Standard/Basic skill split, no calculators, pi = 22/7),
  cbse-class-10-board-year-plan-gurgaon (80 + 20, two Class 10 exams),
  cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single 2027/2028 paper,
  seven units, project marking), -ib-math-aaai-slhl (AA/AI, teaching hours,
  paper weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern).
  Uttarakhand Board of School Education: name, office at Ramnagar (Nainital),
  High School and Intermediate examinations, and the syllabus / question bank /
  model answer pages, all from https://ubse.uk.gov.in/ (fetched 3 Oct 2026).
  No exam pattern is given for UBSE. No school, college, coaching institute,
  society or people's names, no distances or travel times, only the allowed
  fee sentence. The proposed Metro Neo is described as planned only.

  Area links render only when that Dehradun area page exists and is active.
--}}
@php
  $ddAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ddA = function (string $slug, string $label) use ($ddAreaSlugs) {
      return in_array($slug, $ddAreaSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ddm-guide" aria-labelledby="ddmGuideTitle">
  <h2 id="ddmGuideTitle">Maths home tutor in Dehradun: name the examiner, then the part of the valley you live in</h2>

  <p class="nx-guide__lede">
    In Dehradun, two children in the same class can be preparing for maths papers set by four different bodies: the
    Uttarakhand board, CBSE, CISCE for ICSE and ISC, or the IB and Cambridge for an international course. Each one
    marks working in its own way, so a tutor who is ideal for one may be a poor fit for the next. Geography adds a
    second filter. The city spreads up the valley from the Clock Tower towards Rajpur and Malsi, out along
    Sahastradhara Road and down towards Haridwar Road, and a tutor's route across it decides whether an evening slot
    survives the term. Tell NXTutors the syllabus and your locality, and we send two or three maths tutors who suit
    both. Every fee is on screen before you meet anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ddm-papers">Which paper</a> ·
    <a href="#ddm-ubse">Uttarakhand board</a> ·
    <a href="#ddm-cbse10">CBSE Class 10 marks</a> ·
    <a href="#ddm-xii">Class 12 and JEE</a> ·
    <a href="#ddm-intl">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#ddm-week">A sample week</a> ·
    <a href="#ddm-local">Six localities</a> ·
    <a href="#ddm-demo">The demo</a> ·
    <a href="#ddm-fees">Fees</a> ·
    <a href="#ddm-ask">Asking for tutors</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ddm-papers">Which body writes your child's maths paper, and what should you ask a tutor first?</h2>
  <p>
    The exam guidance on this page has two authors. Ajay Vatsyayan writes on IB, IGCSE and ISC mathematics, and
    Abhinandan Tiwary writes on Class 10 maths for CBSE and ICSE. Our first question to any family is the name of the
    examining body, because it fixes the textbook, the layout of a good answer and the practice that turns into marks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses Dehradun families ask us about: who sets the paper, how it is assessed, and a first question for the tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Set by</th><th scope="col">Shape of the assessment</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>High School (Class 10) and Intermediate (Class 12) on the state board</td><td>Uttarakhand Board of School Education (UBSE)</td><td>Decided by the board; read the current syllabus on ubse.uk.gov.in</td><td>Will you practise from the board's own question bank and model answers?</td></tr>
      <tr><td>CBSE Class 10, Standard or Basic</td><td>CBSE</td><td>Board paper of 80 marks; the school assesses the other 20</td><td>Which level do you think my child should take?</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>80 marks over 38 compulsory questions, plus 20 internal</td><td>When in the year will calculus be finished?</td></tr>
      <tr><td>ICSE Class 10 and ISC Class 12</td><td>CISCE</td><td>An 80-mark written paper with 20 marks of internal or project work</td><td>Do you teach the syllabus for my child's exam year?</td></tr>
      <tr><td>IB Diploma; Cambridge IGCSE</td><td>IB; Cambridge</td><td>IB: timed papers and an exploration. IGCSE: Core or Extended tier</td><td>Which course and tier have you taught most recently?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-ubse">What should you expect from a tutor for Uttarakhand board maths?</h2>
  <p>
    The Uttarakhand Board of School Education has its office at Ramnagar in Nainital district and conducts the
    state's High School and Intermediate examinations. Its website carries the syllabus for both levels, along with
    question banks and model answer sheets. Because the board decides and updates its own scheme, this page does not
    describe a UBSE maths paper; check the current version on the board's site before a year plan is written.
  </p>
  <p>
    What a parent can judge is the fit of the tutor. Four checks cover most of it:
  </p>
  <ul>
    <li><strong>The textbook the school issued.</strong> Exercises should start from that book, not from a guide written for another board.</li>
    <li><strong>The board's own material.</strong> Question banks and model answers from the UBSE site show how the board expects working to be laid out.</li>
    <li><strong>The language of the answer sheet.</strong> If your child writes maths in Hindi, the tutor should explain and mark in Hindi with the textbook's terms.</li>
    <li><strong>The plan after Class 10.</strong> A student heading for science in Class 11 needs algebra and geometry made secure now, not only enough to pass.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-cbse10">How are the 80 board marks spread in CBSE Class 10 maths this session?</h2>
  <p>
    In 2026-27, the CBSE board paper draws on 14 NCERT chapters in seven units, and the design matches the previous
    session. Arranged by marks, the units tell a tutor where the hours should go:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths, 2026-27: unit weights and a habit a Dehradun tutor should build in each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra (polynomials, linear pairs, quadratics, APs)</td><td>20</td><td>Write the unknown in words before forming any equation</td></tr>
      <tr><td>Geometry (triangles, circles)</td><td>15</td><td>Give a reason beside every statement in a proof</td></tr>
      <tr><td>Trigonometry, with heights and distances</td><td>12</td><td>Draw and label the figure before picking a ratio</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Total each column of a grouped table before using it</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Carry units through when solids are joined or cut</td></tr>
      <tr><td>Real numbers; coordinate geometry</td><td>6 each</td><td>Treat short questions as marks to bank, not to hurry</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Five sections make up the paper. Section A has 20 one-mark items (18 multiple-choice, 2 assertion–reason); B has
    five two-mark questions; C six of three marks; D four of five marks; and E three case-study questions of four marks.
    Calculators are not allowed, and π is taken as 22/7 unless a question says otherwise. Standard and Basic cover the
    same chapters at different depth: about 54% of Standard marks test remembering and understanding, compared with
    about 75% in Basic. If Class 11 maths is a real option, Standard keeps that door open; confirm the school's last
    date for choosing.
  </p>
  <p>
    From 2026, every Class 10 student sits one compulsory main exam, and a second, optional exam lets a student try to
    improve up to three subjects, maths included. The 2027 dates have not been announced; cbse.gov.in will carry them.
    For chapter-level help, see the <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths
    preparation guide</a> and the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">month-by-month
    board-year plan</a>; the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains
    how we match for the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-xii">Class 12 maths with a JEE target: how does a home tutor earn a place in the week?</h2>
  <p>
    Many Dehradun students in Classes 11 and 12 already attend a coaching batch; Karanpur, with colleges close by, is
    known across the city as a student neighbourhood. A home tutor who repeats the batch lecture adds little. The
    useful role is narrower: take the problems your child could not finish from the coaching sheet, and protect time
    for the school board paper, which the batch tends to crowd out.
  </p>
  <p>
    The two papers ask for different skills. CBSE Class 12 maths sets 38 compulsory questions for 80 marks, and
    calculus alone carries 35, so it deserves the largest share of the week from the start of the session. JEE Main 2026
    Paper 1 had 75 questions for 300 marks; maths contributed 25 of them, 20 multiple-choice and 5 with a numerical
    answer, each worth +4 when correct and −1 when wrong. Check jeemain.nta.nic.in for the next pattern. A steady week
    pairs one session on coaching problems with one on the board paper that ends with a long answer written in full.
    Useful reading: the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra
    guide</a>, the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths guide</a> and our
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page. Students aiming mainly at JEE can
    also read the <a href="{{ url('/jee-home-tutor-dehradun') }}">JEE home tutor in Dehradun</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-intl">ICSE, ISC, IB and IGCSE: what is different about each?</h2>
  <dl>
    <dt><strong>ICSE Class 10</strong></dt>
    <dd>A single written paper for 80 marks, with internal assessment adding 20. Our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> shows how the examiner reads working.</dd>
    <dt><strong>ISC Class 12</strong></dt>
    <dd>For the 2027 and 2028 examinations, CISCE has one 80-mark paper over seven units, and the earlier choice between Sections B and C is gone, so every candidate studies vectors, three-dimensional geometry, linear programming and probability. Calculus is worth 35 marks. Two projects contribute 20, each marked out of 10: 1 for format, 4 for content, 2 for findings and 3 for the viva. Both years are covered in the <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a>.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Analysis and Approaches leans on algebra, functions, calculus and proof and includes a paper without a calculator; Applications and Interpretation leans on modelling and statistics and allows a graphic display calculator throughout. Teaching hours are 150 at SL and 240 at HL. At SL two papers carry 40% each; at HL two carry 30% and a third 20%; at both levels the exploration is the final 20% and must be the student's own work. See the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to IB maths AA and AI</a>.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>The Core tier caps the grade at C, while Extended runs from A* to G. Agree the tier with the school well before entries close. If a change of board is under discussion, read about <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving from CBSE to IB or IGCSE</a>.</dd>
  </dl>
  <p>
    Fewer tutors teach these four courses than CBSE, so name the course in your first message. When nobody nearby is
    free, an online specialist can take the course-specific work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-week">What does a sensible maths week look like at each stage?</h2>
  <p>
    The number of sessions matters less than what each one is for. These are starting points to adjust at the demo,
    not fixed rules:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A starting shape for weekly maths tuition by stage, and what each session should produce</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Sessions a week</th><th scope="col">What the sessions produce</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 5 to 8</td><td>Two</td><td>Times tables and fractions made automatic; word problems read aloud and turned into number sentences</td></tr>
      <tr><td>Class 9</td><td>Two</td><td>Algebra and geometry foundations that Class 10 builds on; one short test every fortnight</td></tr>
      <tr><td>Class 10 board year</td><td>Two or three</td><td>Chapter work until the school's pre-boards, then timed sections marked the examiner's way</td></tr>
      <tr><td>Class 11 and 12 with coaching</td><td>One or two</td><td>Unfinished coaching problems cleared; one full board answer written and checked</td></tr>
      <tr><td>IB, IGCSE or ISC</td><td>One or two</td><td>Course-specific practice, plus guidance on the exploration or projects without writing them</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-local">Six Dehradun localities: what to arrange before the first maths class</h2>
  <p>
    Most Dehradun tutors travel by two-wheeler, car or auto. The Metro Neo has been proposed, with a planned
    interchange at the Clock Tower, but it is not yet under construction, so road timing is what matters. Compare
    tutors by locality on our <a href="{{ url('/city/dehradun') }}">Dehradun page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Dehradun localities across three parts of the city: typical homes, how the tutor gets in, and one thing to agree first</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Typical homes</th><th scope="col">Getting in</th><th scope="col">Agree first</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ddA('rajpur-road', 'Rajpur Road') !!}</td><td>Old bungalows and independent houses behind a busy shopping frontage; flats and builder floors further up</td><td>Doorstep arrival at houses; some apartment guards note the tutor's name</td><td>A fixed early-evening slot before the shopping crowd builds on the lower stretch</td></tr>
      <tr><td>{!! $ddA('karanpur', 'Karanpur') !!}</td><td>Builder floors and small apartment buildings mixed with shops</td><td>Easier by two-wheeler than by car in the lanes</td><td>A shop name or lane number as the landmark; a start a little after afternoon college traffic</td></tr>
      <tr><td>{!! $ddA('dalanwala', 'Dalanwala') !!}</td><td>Spacious independent houses on quiet green lanes</td><td>Straight to the door, with room to park outside</td><td>An online session for heavy-rain days in the monsoon</td></tr>
      <tr><td>{!! $ddA('sahastradhara-road', 'Sahastradhara Road') !!}</td><td>Apartment complexes, with builder floors, houses and villas</td><td>Society gate first; give the guard the tutor's name and flat number</td><td>A slot clear of the office-closing rush on the lower stretch</td></tr>
      <tr><td>{!! $ddA('kishanpur', 'Kishanpur') !!}</td><td>Mostly apartments in newer complexes and smaller buildings</td><td>Visitors sign in; check where a two-wheeler can stand</td><td>An earlier start in winter, when evenings turn cold</td></tr>
      <tr><td>{!! $ddA('race-course', 'Race Course') !!}</td><td>Individual plots and independent homes, some two- and three-bedroom flats</td><td>Usually at the door, with parking nearby</td><td>A weekday time away from office hours at the Haridwar Road junctions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Families on the western and southern sides of the city can read the zone guides for
    <a href="{{ url('/city/dehradun/zone/vasant-vihar-chakrata-road') }}">Vasant Vihar and Chakrata Road</a> and
    <a href="{{ url('/city/dehradun/zone/saharanpur-road-clement-town') }}">Saharanpur Road and Clement Town</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-demo">During the free demo, what tells you the tutor is right?</h2>
  <p>
    Ask for the chapter your child is doing at school this week, not a polished sample lesson, and watch for four
    signs:
  </p>
  <ol>
    <li><strong>Finding out before explaining.</strong> The tutor checks what your child can already do before teaching anything.</li>
    <li><strong>Naming the type of error.</strong> A slip in arithmetic, a misread question and a missing concept each need a different fix.</li>
    <li><strong>Working laid out for the right examiner.</strong> Steps should look the way your child's board expects to see them.</li>
    <li><strong>A clear next fortnight.</strong> You should leave knowing what the next few sessions cover and what homework is due.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we set up a demo with another tutor from your shortlist; changing tutor later is
    also free. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> lists more
    questions. For the choice between a visit and a screen, the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article sets out the trade-offs;
    in Dehradun, many families keep a tutor at home and move a lesson online on a stormy monsoon evening.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-fees">What does a maths home tutor in Dehradun charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors decide their own
    rates. The figure depends on the course and class, how long the tutor has taught that syllabus, the trip to your
    locality at the hour you want, and how many sessions you book. Each shortlisted fee is visible before the demo,
    and our <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-dehradun') }}">Dehradun home tuition fees</a> article explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddm-ask">How do you ask us for maths tutors in Dehradun?</h2>
  <p>
    Send five details: the class; the course by its full name (UBSE, CBSE Standard or Basic, ICSE, ISC, IB or IGCSE);
    your locality with a landmark; the days and times you can offer; and a budget. We come back with two or three
    matched maths tutors and their fees, and you choose one for a free demo. If no suitable tutor can reach your part
    of the valley at that hour, we suggest an online or mixed plan. NXTutors is based in Sector 66, Gurugram, and
    teaches online across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page
    describes how we work elsewhere, and <a href="{{ url('/tutors') }}">browse tutor profiles</a> to see who teaches
    what.
  </p>
  <p>
    Maths teachers living in Dehradun who would like students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
