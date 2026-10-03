{{--
  Long-form guide for the "maths home tutor Shimla" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Page writer (capitals wave 2, subjects), 3 Oct 2026.
  Local facts come only from database/seo-content/areas/shimla-research.json
  (zone_facts and area "about" texts, each with sources).
  HP Board facts only from hpbose.org (read 3 Oct 2026):
  - https://www.hpbose.org/ : Himachal Pradesh Board of School Education,
    Dharamshala (Kangra); Matric and Plus Two examinations; menus for
    Syllabus, Model Papers, Step Wise Marking.
  - https://www.hpbose.org/Admin/Upload/Sy.Math.10.27.06.2024.pdf : Class 10
    maths, 14 chapters (Real Numbers to Probability); prescribed books Ganit
    and Mathematics published by the HP Board of School Education.
  - https://www.hpbose.org/Admin/Upload/9_2026_12_9_202610thMathsMQP2026-27.pdf :
    Model Test Paper, Class 10 Mathematics 2026-27: 3 hours, 80 marks,
    sections A to E (A multiple choice incl. figure-based, on the OMR sheet;
    B two-mark very short answers incl. an assertion-reason item; C three-mark
    short answers; D five-mark long answers; E two four-mark case studies);
    internal choice in some B and C questions and all of D; questions printed
    in English and Hindi.
  - https://www.hpbose.org/Admin/Upload/Syll.Math.12.17.05.2024.pdf : Plus Two
    maths units (relations and functions, algebra, calculus, vectors and
    three-dimensional geometry, linear programming, probability); books
    Mathematics Part-I and Part-II published by the board, Dharamshala.
  - https://www.hpbose.org/Admin/Upload/9_2026_12_Maths12thMQP2026-27.pdf :
    Plus Two maths model paper 2026-27: 3 hours, 80 marks, sections A to E
    (16 one-mark MCQs, assertion-reason, four- and five-mark answers, two
    case-based questions).
  - https://www.hpbose.org/SWMkg.aspx : step-wise marking files, session
    2024-25, Matric and Plus Two maths among them.
  CBSE / CISCE / IB / JEE facts reuse the checked statements in
  database/seo-content/blog: cbse-class-10-maths-preparation,
  cbse-class-10-board-year-plan-gurgaon, cbse-class-12-maths-calculusalgebra,
  icse-isc-maths-gurgaon-guide, -ib-math-aaai-slhl and
  jee-preparation-gurgaon-coaching-or-home-tutor.
  No school, college, coaching institute, society or people's names (except
  the page authors), no distances or travel times, only the allowed fee
  sentence. Weather is timing advice only.

  Area links render only when that Shimla area page exists and is active.
--}}
@php
  $shAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $shA = function (string $slug, string $label) use ($shAreaSlugs) {
      return in_array($slug, $shAreaSlugs, true)
          ? '<a href="' . e(url('/city/shimla/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide shmm-guide" aria-labelledby="shmmGuideTitle">
  <h2 id="shmmGuideTitle">Maths home tutor in Shimla: match the paper first, then the hillside</h2>

  <p class="nx-guide__lede">
    Two Shimla children in Class 10 may sit entirely different maths papers. One writes the Himachal Pradesh Board
    of School Education's Matric exam, part of it on an OMR sheet; another writes CBSE's board paper; a third is on
    ICSE, ISC or an international course, and each needs a different kind of tutor. The city adds its own test: homes sit on slopes reached by lanes and steps, the Mall Road is closed to cars, and
    rain or snow can stretch any trip. Tell NXTutors the course and your locality, and we suggest two or three maths
    tutors who suit both. You see every fee before meeting anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#shmm-course">Which course</a> ·
    <a href="#shmm-hp">HP Board maths</a> ·
    <a href="#shmm-cbse">CBSE Class 10</a> ·
    <a href="#shmm-senior">Classes 11 and 12</a> ·
    <a href="#shmm-hour">One good hour</a> ·
    <a href="#shmm-places">Six localities</a> ·
    <a href="#shmm-demo">The demo</a> ·
    <a href="#shmm-fees">Fees</a> ·
    <a href="#shmm-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="shmm-course">Which maths course is your child on, and what does that change?</h2>
  <p>
    Two people write the exam guidance on this page. Ajay Vatsyayan covers IB, IGCSE and ISC mathematics; Abhinandan
    Tiwary covers Class 10 maths for CBSE and ICSE. Before suggesting anyone, we ask which body sets your child's
    paper, because that decides the book on the desk, the way working must be laid out and which past papers are
    worth the time.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses a Shimla family may be choosing a tutor for, and the official material each one rests on</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Who examines it</th><th scope="col">Material worth using</th><th scope="col">A first question for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Matric (Class 10), state board</td><td>HP Board of School Education (HPBOSE)</td><td>The board's Ganit or Mathematics book, its 2026-27 model test paper and its step-wise marking files</td><td>Have you practised the OMR section with students?</td></tr>
      <tr><td>Plus Two (Class 12), state board</td><td>HPBOSE</td><td>Mathematics Part-I and Part-II from the board, plus its Plus Two model paper</td><td>How will you split the year between calculus and the rest?</td></tr>
      <tr><td>CBSE Class 10 and 12</td><td>CBSE</td><td>NCERT books, CBSE sample papers and marking schemes</td><td>Which recent sample paper will you start from?</td></tr>
      <tr><td>ICSE and ISC</td><td>CISCE</td><td>The school's chosen books and CISCE specimen papers</td><td>Do you teach the syllabus for my child's exam year?</td></tr>
      <tr><td>IB Diploma, Cambridge IGCSE</td><td>IB; Cambridge</td><td>Course guides and past papers through the school</td><td>Which course or tier did you teach most recently?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-hp">HP Board maths: what the board's own files tell a tutor</h2>
  <p>
    The Himachal Pradesh Board of School Education is based at Dharamshala and conducts the Matric and Plus Two
    examinations. Its website, hpbose.org, carries the syllabus, model question papers and a set of step-wise
    marking files, and a tutor for an HPBOSE student should be using all three.
  </p>
  <dl>
    <dt><strong>Matric syllabus and books</strong></dt>
    <dd>The Class 10 syllabus lists 14 chapters, from real numbers and polynomials through triangles, trigonometry and circles to statistics and probability. The prescribed books are Ganit and Mathematics, both published by the board, so a child can study in Hindi or English.</dd>
    <dt><strong>The 2026-27 Matric model test paper</strong></dt>
    <dd>Three hours, 80 marks, five sections. Section A is multiple choice, some of it built on figures, and is answered on an OMR sheet that comes with the answer book. Section B holds two-mark very short answers, including an assertion–reason item; C has three-mark short answers; D has five-mark long answers; and E closes with two four-mark case studies. Some questions in B and C, and all of D, carry an internal choice, and the questions are printed in English and Hindi.</dd>
    <dt><strong>Plus Two</strong></dt>
    <dd>Six units: relations and functions, algebra, calculus, vectors and three-dimensional geometry, linear programming and probability, taught from the board's Mathematics Part-I and Part-II. The 2026-27 model paper is again three hours and 80 marks across sections A to E, opening with 16 one-mark multiple-choice questions and including assertion–reason and case-based items.</dd>
    <dt><strong>Step-wise marking</strong></dt>
    <dd>The board publishes worked solutions with marks set against each step, for Matric and Plus Two maths among other subjects. They are the clearest guide to how much working an examiner wants to see.</dd>
  </dl>
  <p>
    In practice, a good HPBOSE maths tutor does three things. Shading answers on an OMR sheet becomes a timed habit,
    not a surprise in March. Long answers are checked against the step-wise files. Teaching follows the
    language your child writes in. The board revises its documents, so confirm the current
    version on hpbose.org; our <a href="{{ url('/himachal-board-tutor-shimla') }}">HP Board tutor in Shimla</a> page
    covers the other subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-cbse">CBSE Class 10 maths: where the 80 board marks sit</h2>
  <p>
    For 2026-27 the CBSE paper keeps last session's design, drawn from 14 NCERT chapters in seven units. Algebra
    carries 20 marks and geometry 15. Trigonometry is worth 12, statistics with probability 11 and mensuration 10, while real
    numbers and coordinate geometry take 6 each. The school assesses the other 20 marks.
  </p>
  <ul>
    <li><strong>Section A:</strong> 20 one-mark items, 18 multiple-choice and 2 assertion–reason.</li>
    <li><strong>Sections B, C and D:</strong> five two-mark answers, six of three marks and four of five marks.</li>
    <li><strong>Section E:</strong> three case studies worth four marks each.</li>
    <li><strong>Rules:</strong> no calculator, and π is 22/7 unless the question says otherwise.</li>
  </ul>
  <p>
    Standard and Basic share chapters but not depth: about 54% of Standard marks test remembering and understanding,
    against roughly 75% in Basic, so keep Standard if Class 11 maths is possible. From 2026, Class 10 students sit
    one compulsory main exam, and an optional second exam lets them try to improve up to three subjects, maths
    included; CBSE will announce the 2027 dates on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> and
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year plan</a> go chapter by chapter, and
    the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains our matching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-senior">Classes 11 and 12: board maths, entrance maths and the international courses</h2>
  <p>
    Senior maths usually serves one of three goals: a board result, an engineering entrance or an international
    diploma. Decide which comes first.
  </p>
  <ul>
    <li><strong>CBSE Class 12.</strong> 38 compulsory questions for 80 marks, with calculus alone worth 35. Calculus deserves the largest share of the week from the start of the session; the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra guide</a> lists the questions that keep returning.</li>
    <li><strong>JEE Main.</strong> In 2026 Paper 1 had 75 questions for 300 marks; maths gave 25 of them, 20 multiple-choice and 5 numerical, each +4 when right and −1 when wrong. NTA reissues the pattern each year on jeemain.nta.nic.in. See the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths guide</a> and the national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page.</li>
    <li><strong>ISC.</strong> From the 2027 exam CISCE sets a single 80-mark paper over seven units, with no choice between the former Sections B and C, so vectors, three-dimensional geometry, linear programming and probability are compulsory. Calculus is worth 35, and two projects add 20. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> has the detail.</li>
    <li><strong>IB and IGCSE.</strong> IB offers Analysis and Approaches or Applications and Interpretation, 150 teaching hours at SL and 240 at HL, with an exploration worth 20%. IGCSE Core caps the grade at C, while Extended runs from A* to G. Read the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">guide to IB maths AA and AI</a>.</li>
  </ul>
  <p>
    For HPBOSE Plus Two students heading for an entrance exam, the useful tutor keeps the board's step-wise layout
    for the school paper and adds timed objective sets for the entrance, rather than mixing the two styles in one
    answer. Fewer tutors teach ISC, IB or IGCSE than the two main boards, so name the course in your first message;
    an online specialist can cover course-specific work when nobody nearby is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-hour">What one good maths hour at home looks like</h2>
  <p>
    The number of sessions a week matters less than what each hour produces. A sound hour, at any level, tends to
    follow five steps:
  </p>
  <ol>
    <li><strong>Five quick questions</strong> from last week's work, done without notes, to see what stayed.</li>
    <li><strong>One error examined properly.</strong> The tutor picks a wrong answer from school homework and asks your child to find the faulty line before anything is explained.</li>
    <li><strong>The new idea, briefly,</strong> tied to the chapter your school is on this week.</li>
    <li><strong>A short timed set</strong> written in the board's own format: OMR-style choices for HPBOSE Section A, assertion–reason for CBSE, or a structured question for ISC.</li>
    <li><strong>One answer written in full</strong> and marked against an official scheme, so presentation is practised every week, not only before the exam.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-places">Six Shimla localities: what to sort out before the first maths class</h2>
  <p>
    Shimla's hills shape every tutor's journey: the last stretch is often on foot, parking is tight on narrow roads,
    and heavy rain or snow slows everything. These six localities show the range. Compare tutors area by area on our
    <a href="{{ url('/city/shimla') }}">Shimla page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Shimla localities across four parts of the city: homes, the tutor's last stretch, and one thing to agree</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Last stretch</th><th scope="col">Agree first</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $shA('lakkar-bazar', 'Lakkar Bazar') !!}</td><td>Older hillside buildings above and behind the market shops</td><td>Usually on foot; cars are not allowed on the Mall Road above it</td><td>An afternoon or early-evening slot before the market gets busy</td></tr>
      <tr><td>{!! $shA('sanjauli', 'Sanjauli') !!}</td><td>Apartment buildings and builder floors alongside houses and plots</td><td>A landmark near the Chowk; some buildings keep a visitor register</td><td>A time outside the office and school rush at the Chowk</td></tr>
      <tr><td>{!! $shA('dhalli', 'Dhalli') !!}</td><td>Flats in newer buildings beside older homes off the main road</td><td>Through the tunnel from Sanjauli; some buildings have a guard</td><td>Extra margin in the apple trading season, when trucks use the highway</td></tr>
      <tr><td>{!! $shA('kasumpti', 'Kasumpti') !!}</td><td>Older houses on the slopes and flats in apartment buildings</td><td>A door or a building gate; share the nearest bus stop</td><td>A slot away from office traffic towards Chhota Shimla</td></tr>
      <tr><td>{!! $shA('new-shimla', 'New Shimla') !!}</td><td>Apartment colonies, government housing, builder floors and houses in numbered sectors</td><td>Give sector, block and flat number; ask about the colony gate register</td><td>A regular time outside the office-hour peak on routes into the city</td></tr>
      <tr><td>{!! $shA('summer-hill', 'Summer Hill') !!}</td><td>Homes spread over a forested hillside, often reached by lanes and steps</td><td>A landmark near the railway station or main road, and how long the walk is</td><td>A later evening start, once student traffic on the hill thins</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages for <a href="{{ url('/city/shimla/zone/sanjauli-dhalli') }}">Sanjauli and Dhalli</a> and
    <a href="{{ url('/city/shimla/zone/chhota-shimla-kasumpti-new-shimla') }}">Chhota Shimla, Kasumpti and New Shimla</a>
    add more on timing and access, and the <a href="{{ url('/blog/shimla-home-tuition-guide') }}">Shimla home tuition
    guide</a> covers every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-weather">Snow days, rain and a screen as the backup</h2>
  <p>
    In winter, snow can make a hillside visit unwise for an evening or two; in the monsoon, heavy rain does the same.
    Agree at the start that on such days the lesson moves online at its usual time with the same tutor. Maths works
    on a screen as long as the tutor can watch the working: a second phone pointed at the notebook, or a shared
    whiteboard, is enough. The <a href="{{ url('/online-tutor-shimla') }}">online tutor for Shimla</a> page explains
    the set-up, and our article on <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a>
    weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-demo">At the free demo: four things that tell you the tutor fits</h2>
  <p>
    Ask the tutor to teach whatever chapter your child is doing at school this week, then watch for these signs:
  </p>
  <ol>
    <li><strong>Questions before teaching.</strong> The tutor checks what your child already knows instead of starting a prepared lecture.</li>
    <li><strong>Mistakes sorted by type.</strong> An arithmetic slip, a misread question and a missing idea each need a different fix, and a good tutor names which is which.</li>
    <li><strong>Working the examiner will credit.</strong> For HPBOSE that means the step-wise layout; for CBSE, the steps the marking scheme rewards.</li>
    <li><strong>A plan for the next fortnight.</strong> You should leave knowing what comes next and what homework is due.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange a demo with another tutor from your shortlist; changing tutor later
    is free too. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more
    questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-fees">What does a maths home tutor in Shimla charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates, and what moves them is the class and course, the tutor's experience with that paper, the journey to your
    part of the hill at the hour you want, and how many sessions you book. Every fee on your shortlist is visible
    before the demo; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-shimla') }}">Shimla home tuition fees</a> article explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmm-start">How to ask for maths tutors in Shimla</h2>
  <p>
    Send five things: the class; the course by name (HPBOSE Matric or Plus Two, CBSE Standard or Basic, ICSE, ISC, IB
    or IGCSE); your locality with a landmark and whether the last stretch is on foot; the days and times you can
    offer; and a budget. We come back with two or three matched maths tutors and their fees, and you pick one for a
    free demo. If no suitable tutor can reach you at that hour, we suggest an online or mixed plan. NXTutors is based
    in Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page describes how we work elsewhere, and you can
    <a href="{{ url('/tutors') }}">browse tutor profiles</a> or <a href="{{ url('/demo-class') }}">book a free demo
    class</a> directly. Science subjects are covered on the
    <a href="{{ url('/science-home-tutor-shimla') }}">science</a> and
    <a href="{{ url('/physics-home-tutor-shimla') }}">physics</a> pages for Shimla.
  </p>
  <p>
    Maths teachers who live in Shimla and would like students nearby can see open requests on the
    <a href="{{ url('/tuition-jobs/shimla') }}">Shimla tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
