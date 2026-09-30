{{--
  Long-form guide for the "maths home tutor Jamshedpur" subject page (config
  key maths-home-tutor-tata; authors in config: Ajay Vatsyayan and Abhinandan
  Tiwary; role statements only, no anecdotes). Local facts come only from
  database/seo-content/areas/tata-research.json (zone_facts and area "about"
  texts). Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-10-maths-preparation (unit marks, sections, Standard/Basic split,
  no calculators, pi = 22/7), cbse-class-10-board-year-plan-gurgaon (two
  Class 10 exams), cbse-class-12-maths-calculusalgebra (38 questions,
  calculus 35), icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC single
  2027/2028 paper, seven units, project marking), -ib-math-aaai-slhl (AA/AI,
  hours, weights, exploration) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 pattern). The Jharkhand Academic Council is described in
  general terms only. No school, college, coaching institute, company,
  society or people's names, no distances or travel times, only the allowed
  fee sentence.

  Area links render only when that Jamshedpur area page exists and is active.
--}}
@php
  $jsAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jsA = function (string $slug, string $label) use ($jsAreaSlugs) {
      return in_array($slug, $jsAreaSlugs, true)
          ? '<a href="' . e(url('/city/tata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jsm-guide" aria-labelledby="jsmGuideTitle">
  <h2 id="jsmGuideTitle">Maths home tutor in Jamshedpur: a tutor who knows your child's paper and your side of the rivers</h2>

  <p class="nx-guide__lede">
    Jamshedpur sits where the Subarnarekha and the Kharkai meet, and the rivers shape how a tutor gets about: Mango
    and Dimna are across the Subarnarekha, Adityapur across the Kharkai, and bridges link each of them to the old
    centre at Sakchi and Bistupur. Families here also study maths for several different examiners, from the Jharkhand
    Academic Council and CBSE to CISCE, the IB and Cambridge. NXTutors looks at both the course and the route. Share
    your child's class, syllabus and locality, and we suggest two or three maths tutors who fit. You compare their fees
    before any meeting, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jsm-stage">By class</a> ·
    <a href="#jsm-bodies">Exam bodies</a> ·
    <a href="#jsm-jac">Jharkhand board</a> ·
    <a href="#jsm-ten">CBSE Class 10 paper</a> ·
    <a href="#jsm-senior">Class 12 beside JEE</a> ·
    <a href="#jsm-cisce">ISC, IB, IGCSE</a> ·
    <a href="#jsm-map">Five localities</a> ·
    <a href="#jsm-habits">Habits at home</a> ·
    <a href="#jsm-fees">Fees</a> ·
    <a href="#jsm-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jsm-stage">What should a maths tutor concentrate on at each stage?</h2>
  <p>
    The right tutor for a Class 6 child is rarely the right one for a JEE aspirant. Start from the stage:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths tuition in Jamshedpur by stage: the tutor's focus and a sign that the lessons are working</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Tutor's focus</th><th scope="col">Sign it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 5 to 8</td><td>Number sense, fractions, and the step from arithmetic to simple equations</td><td>Homework finished without a parent stepping in</td></tr>
      <tr><td>Classes 9 and 10</td><td>Algebra, geometry proofs and trigonometry, set out in the board's format</td><td>School test marks steady or rising across a term</td></tr>
      <tr><td>Classes 11 and 12</td><td>Functions and calculus, and in some homes JEE problem-solving as well</td><td>Long answers written in full, with no skipped steps</td></tr>
      <tr><td>IB or IGCSE</td><td>The chosen course and level, calculator technique, and for IB the exploration timeline</td><td>Past-paper scores recorded and improving</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-bodies">Which exam body sets your child's maths paper?</h2>
  <p>
    Two authors wrote the exam sections of this guide. Ajay Vatsyayan covers IB, IGCSE and ISC maths; Abhinandan
    Tiwary covers Class 10 maths for CBSE and ICSE. Their first step is always to confirm the examiner, because the
    textbook, the style of working and the useful practice all follow from it.
  </p>
  <dl>
    <dt><strong>Jharkhand Academic Council (JAC)</strong></dt>
    <dd>The state board, running the Class 10 and Class 12 examinations.</dd>
    <dt><strong>CBSE</strong></dt>
    <dd>NCERT books; Class 10 in Standard or Basic, and a Class 12 paper built heavily on calculus.</dd>
    <dt><strong>CISCE</strong></dt>
    <dd>ICSE in Class 10 and ISC in Class 12, with internal or project marks added to an 80-mark paper.</dd>
    <dt><strong>IB and Cambridge</strong></dt>
    <dd>The IB Diploma's two maths courses, and IGCSE at Core or Extended tier.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-jac">Finding a maths tutor for a Jharkhand board student</h2>
  <p>
    JAC conducts Jharkhand's Matric (Class 10) and Intermediate (Class 12) exams and publishes its own syllabus and
    marking rules, which change from time to time. We therefore leave the paper's details to the council's official
    website. For choosing a tutor, the questions are practical. Does the tutor explain in Hindi or English to match the
    way your child writes answers? Is homework drawn from the prescribed book and the council's model papers rather
    than a guide written for another board? And if Class 11 science is likely, will algebra and geometry be made
    genuinely secure in Classes 9 and 10?
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-ten">How is the CBSE Class 10 maths paper put together?</h2>
  <p>
    For 2026-27 the board paper is worth 80 and follows last session's design. By unit, algebra carries 20 marks,
    geometry 15, trigonometry 12, statistics and probability 11, mensuration 10, and real numbers and coordinate
    geometry 6 apiece. The layout shapes practice as much as the units do:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 maths 2026-27 by section: number of questions, marks each, and how a tutor should drill them</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks each</th><th scope="col">How to drill</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>20 (18 multiple-choice, 2 assertion–reason)</td><td>1</td><td>Short daily sets; read every option before choosing</td></tr>
      <tr><td>B</td><td>5</td><td>2</td><td>Two clean steps and a stated answer</td></tr>
      <tr><td>C</td><td>6</td><td>3</td><td>Proofs with a reason on each line</td></tr>
      <tr><td>D</td><td>4</td><td>5</td><td>Full working, units, and a check at the end</td></tr>
      <tr><td>E</td><td>3 case studies</td><td>4</td><td>Read the situation twice, then answer each part in turn</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    No calculator is allowed and π is 22/7 unless the question says otherwise. Standard and Basic share the chapters,
    but Basic leans far more on recall: around three-quarters of its marks test remembering and understanding, compared
    with around 54% in Standard. A child who might take maths in Class 11 should sit Standard.
  </p>
  <p>
    From 2026, every Class 10 student takes a compulsory main exam, and an optional second exam allows up to three
    subjects, maths among them, to be improved. The 2027 dates are still to come on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> works through the
    chapters, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps the
    months, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we
    match for that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-senior">Class 12 maths and JEE Main: one tutor, two different papers</h2>
  <p>
    When a student already attends JEE coaching, the home tutor's job is not a second lecture. It is to finish the
    coaching problems that stalled and to keep the board paper from being neglected. The two exams reward different
    habits:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 maths and the maths section of JEE Main 2026 compared, with the weekly habit each needs</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">CBSE Class 12</th><th scope="col">JEE Main 2026, Paper 1 maths</th></tr>
    </thead>
    <tbody>
      <tr><th scope="row">Size</th><td>38 compulsory questions for 80 marks</td><td>25 of the paper's 75 questions; the full paper is out of 300</td></tr>
      <tr><th scope="row">Format</th><td>Written answers with full working</td><td>20 multiple-choice, 5 numerical-answer</td></tr>
      <tr><th scope="row">Marking</th><td>Step marks for method</td><td>+4 for a correct answer, −1 for a wrong one</td></tr>
      <tr><th scope="row">Heaviest area</th><td>Calculus, 35 marks</td><td>Spread across the syllabus</td></tr>
      <tr><th scope="row">Weekly habit</th><td>One long answer written out completely</td><td>Timed mixed sets, then an error review</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    NTA publishes the JEE pattern afresh every year on jeemain.nta.nic.in. Read our
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">guide to Class 12 calculus and algebra</a>, the
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths plan by topic</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-cisce">ISC, IB and IGCSE maths: what families should know</h2>
  <p>
    <strong>ICSE Class 10</strong> has one 80-mark written paper and 20 marks of internal assessment; our
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> explains how working is judged.
    <strong>ISC Class 12</strong> changes for the 2027 and 2028 exams: CISCE sets one 80-mark paper of seven units with
    no choice between Sections B and C, so vectors, three-dimensional geometry, linear programming and probability are
    for everyone. Calculus is worth 35 marks, and two projects add 20, each scored out of 10 for format (1), content (4),
    findings (2) and viva (3). The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths
    guide</a> covers both years.
  </p>
  <p>
    <strong>IB Diploma</strong> maths comes as Analysis and Approaches, with a non-calculator paper and more proof, or
    Applications and Interpretation, with a graphic display calculator in every paper and more modelling. SL has 150
    teaching hours and two papers at 40% each; HL has 240 hours and papers weighted 30%, 30% and 20%. The exploration is
    the remaining 20% and must be the student's own work; see our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB
    maths AA or AI guide</a>. <strong>Cambridge IGCSE</strong> Core caps the grade at C, while Extended runs from A* to
    G, so the tier should be settled with the school before entries close. Thinking about a board change? Read
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching from CBSE to IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-map">What to arrange before the first class in five Jamshedpur localities</h2>
  <p>
    Compare tutors by locality on our <a href="{{ url('/city/tata') }}">Jamshedpur page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Jamshedpur localities: typical homes, how a tutor arrives, and one thing to settle first</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Typical homes</th><th scope="col">How a tutor arrives</th><th scope="col">Settle first</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $jsA('bistupur', 'Bistupur') !!}</td><td>Two- and three-bedroom flats, with older bungalows in quieter lanes</td><td>Gate register at buildings; parking is easier in the residential lanes than on shopping roads</td><td>A slot clear of the evening market rush</td></tr>
      <tr><td>{!! $jsA('kadma', 'Kadma') !!}</td><td>Older company quarters and privately built flats</td><td>Doorstep at quarters; newer buildings keep a visitor register. A bridge links Kadma to Adityapur</td><td>Timing around the busy hour near Kadma Market</td></tr>
      <tr><td>{!! $jsA('jugsalai', 'Jugsalai') !!}</td><td>Builder flats, often three-bedroom, and older homes in the market lanes</td><td>Tutors park just off the main lanes; Tatanagar station is right beside it</td><td>An early or later slot outside trading hours</td></tr>
      <tr><td>{!! $jsA('telco-colony', 'Telco Colony') !!}</td><td>Planned township quarters and private apartment buildings</td><td>Easy doorstep visits at quarters; sign-in at some buildings</td><td>A time after shift traffic has cleared the main roads</td></tr>
      <tr><td>{!! $jsA('mango', 'Mango') !!}</td><td>Apartment complexes, builder buildings and independent houses</td><td>Buses and autos run from Sakchi; the Mango bridge and nearby junctions are heavy at peak hours</td><td>A tutor who lives on the Mango side, if possible</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-habits">Three maths habits a home tutor should build</h2>
  <ol>
    <li><strong>An error log.</strong> Every wrong answer from homework or a test goes into one list with a note of its kind: arithmetic, misreading or concept. The list shows where time should go.</li>
    <li><strong>Working that an examiner can follow.</strong> One step per line, the reason for each geometry statement, and units kept to the end.</li>
    <li><strong>Mixed practice.</strong> Once a chapter is done, it keeps returning in small mixed sets, so it is still there at the board exam.</li>
  </ol>
  <p>
    You will see at the free demo whether a tutor works this way: ask them to teach the chapter your child is on now,
    and watch whether they question before explaining. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more. If the fit is
    wrong, another demo from your shortlist follows, and a later change of tutor is free. Undecided between home and
    online? See <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-fees">What will a maths home tutor in Jamshedpur cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The tutor decides the
    rate. The class and syllabus, the tutor's experience with it, whether the trip crosses a river at a busy hour, and
    how many sessions you book each week all affect it. Each shortlisted fee is shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsm-send">What to put in your request</h2>
  <p>
    Give us the class, the full syllabus name (JAC, CBSE Standard or Basic, ICSE, ISC, IB or IGCSE), your locality
    with a landmark, the days and times on offer, and a budget. We return two or three maths tutors with fees, and you
    pick one for a free demo. If no suitable tutor can reach your side of Jamshedpur at that hour, we suggest online or
    mixed lessons. NXTutors runs from Sector 66, Gurugram, and teaches online all over India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how we work in other cities.
  </p>
  <p>
    Maths teachers who live in Jamshedpur and want students nearby will find open requests on the
    <a href="{{ url('/tuition-jobs/tata') }}">Jamshedpur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
