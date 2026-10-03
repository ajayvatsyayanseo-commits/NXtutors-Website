{{--
  Long-form guide for the "maths home tutor Agartala" subject page (authors in
  config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Page writer, capitals wave 2 (subjects), 3 Oct 2026.

  Local facts only from database/seo-content/areas/agartala-research.json
  (zone_facts and area "about" texts, each with sources).

  Tripura board facts only from tbse.tripura.gov.in (read 3 Oct 2026):
  - https://tbse.tripura.gov.in/about-us : TBSE set up in 1973 by the Tripura
    Board of Secondary Education Act, 1973; functioning from 1 January 1976.
  - https://tbse.tripura.gov.in/sites/default/files/MATHEMATICS_1.pdf : Class X
    Mathematics (Basic and Standard), syllabus 2024-25: 80 marks + 20 internal
    assessment; units Number Systems 6, Algebra 20, Coordinate Geometry 6,
    Geometry 15, Trigonometry 12, Mensuration 10, Statistics and Probability
    11; underlined portions not in Basic; Bengali version of the syllabus in
    the same file.
  - https://tbse.tripura.gov.in/sites/default/files/MATHEMATICS_3.pdf : Class
    XII Mathematics, syllabus 2024-25: 80 marks + 20 internal assessment;
    units include relations and functions, algebra (matrices), calculus.
  - https://tbse.tripura.gov.in/sites/default/files/TBSE_Notification_Syllabus_18_08_2026_20260818_0001.pdf :
    the 2025-26 syllabi for Classes IX-XII stay in force for 2026-27.
  - https://tbse.tripura.gov.in/sites/default/files/math_basic_to_std.pdf :
    form for a candidate who passed Math (Basic) in the Madhyamik examination
    to apply to appear in Math (Standard), through the head of the school.
  CBSE / ICSE / ISC / IB / JEE facts reuse the checked statements in
  database/seo-content/blog (cbse-class-10-maths-preparation,
  cbse-class-10-board-year-plan-gurgaon, cbse-class-12-maths-calculusalgebra,
  icse-isc-maths-gurgaon-guide, -ib-math-aaai-slhl,
  jee-preparation-gurgaon-coaching-or-home-tutor) as already stated on the
  Patna and Raipur maths pages; CBSE 2026-27 Basic/Standard withdrawal as on
  the Raipur CBSE page (cbseacademic.nic.in).
  No school, college, coaching institute, society or people's names (except
  the authors), no distances or travel times, only the allowed fee sentence.
  Area links render only when that Agartala area page exists and is active.
--}}
@php
  $agmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $agmA = function (string $slug, string $label) use ($agmSlugs) {
      return in_array($slug, $agmSlugs, true)
          ? '<a href="' . e(url('/city/agartala/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide agm-guide" aria-labelledby="agmGuideTitle">
  <h2 id="agmGuideTitle">Maths home tutor in Agartala: Madhyamik, CBSE or a senior paper, and a tutor who can reach your ward</h2>

  <p class="nx-guide__lede">
    Most maths questions an Agartala parent asks come down to two things: which board writes the paper, and which part
    of the city the tutor has to reach. A child preparing for the Tripura board's Madhyamik examination, a CBSE Class
    10 student choosing between Basic and Standard, and a Class 12 student balancing calculus with an entrance test all
    need different teaching. Tell NXTutors the class, the board and your locality, and we send two or three maths
    tutors who suit all three. Each tutor's fee is shown before you meet anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#agm-which">Which paper</a> ·
    <a href="#agm-tbse">TBSE Class X maths</a> ·
    <a href="#agm-level">Basic or Standard</a> ·
    <a href="#agm-cbse">CBSE Class 10</a> ·
    <a href="#agm-senior">Classes 11 and 12</a> ·
    <a href="#agm-other">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#agm-wards">Five localities</a> ·
    <a href="#agm-week">A working week</a> ·
    <a href="#agm-demo">The demo</a> ·
    <a href="#agm-fees">Fees</a> ·
    <a href="#agm-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="agm-which">Which body sets your child's maths paper?</h2>
  <p>
    Two authors stand behind the exam detail on this page. Ajay Vatsyayan writes the IB, IGCSE and ISC maths guidance;
    Abhinandan Tiwary writes the Class 10 CBSE and ICSE maths sections. Who marks the final paper decides the book,
    the layout of a solution and the practice that pays.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths courses an Agartala student may be on, who examines each, and the question to put to a tutor first</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Examined by</th><th scope="col">Final assessment in brief</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Madhyamik (Class X)</td><td>Tripura Board of Secondary Education (TBSE)</td><td>80-mark paper and 20 marks of internal assessment, at Basic or Standard level</td><td>Have you taught from the board's current syllabus, and at which level?</td></tr>
      <tr><td>Higher Secondary (+2 Stage), Class XII</td><td>TBSE</td><td>80-mark paper and 20 internal</td><td>How will you pace calculus across the year?</td></tr>
      <tr><td>CBSE Class 10</td><td>CBSE</td><td>80-mark board paper and 20 from school</td><td>Which level, Basic or Standard, suits my child?</td></tr>
      <tr><td>CBSE Class 12</td><td>CBSE</td><td>38 compulsory questions for 80, with 20 internal</td><td>How do you mark long answers?</td></tr>
      <tr><td>ICSE, ISC, IB or IGCSE</td><td>CISCE; IB; Cambridge</td><td>Different papers and coursework for each</td><td>Which of these have you taught recently?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Tripura board was set up by a state Act in 1973 and began work in January 1976. Its syllabus documents, model
    papers and notices are on <a href="https://tbse.tripura.gov.in/" rel="noopener">tbse.tripura.gov.in</a>; our
    <a href="{{ url('/tripura-board-tutor-agartala') }}">Tripura Board tutor page</a> covers the board across subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-tbse">How is TBSE Class X maths weighted?</h2>
  <p>
    The board's Class X mathematics syllabus sets an 80-mark written paper and 20 marks of internal assessment, and it
    spreads the 80 across seven units. The board has notified that the 2025-26 syllabi for Classes IX to XII remain in
    force for 2026-27, so check that the copy your tutor uses is the current one from the board's website.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Units in the TBSE Class X mathematics syllabus, their marks, and what a tutor should test early</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Test early</th></tr>
    </thead>
    <tbody>
      <tr><td>Algebra: polynomials, linear equations in two variables, quadratics, arithmetic progressions</td><td>20</td><td>Turning a word problem into an equation, and checking the discriminant before solving</td></tr>
      <tr><td>Geometry: similar triangles and tangents to a circle</td><td>15</td><td>The theorems marked for proof, written with a reason at each line</td></tr>
      <tr><td>Trigonometry, with heights and distances</td><td>12</td><td>Standard angle values and a neat figure before any ratio</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Mean, median and mode of grouped data without arithmetic slips</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Sectors, segments and combined solids, with units kept to the end</td></tr>
      <tr><td>Number systems; coordinate geometry</td><td>6 + 6</td><td>Irrationality proofs, the distance and section formulae</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Parents who know the CBSE paper will notice that the unit marks are the same. That helps when a child moves
    between boards, but it does not make the papers identical: question style, internal assessment and the documents a
    tutor should practise from all come from the board that sets the exam. The TBSE file also prints the syllabus in
    Bengali, which matters if your child writes maths in Bengali: ask the tutor to teach the terms in the language of
    the answer script.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-level">Basic or Standard maths on the Tripura board?</h2>
  <p>
    TBSE offers Class X maths at two levels. The Standard syllabus includes some portions that Basic leaves out (the
    board marks them in its syllabus document). A child who expects to take maths in Class XI should usually aim for
    Standard; a child who will drop maths after Class X may be better served by Basic and steady marks.
  </p>
  <p>
    The board also publishes a form that lets a student who has already passed Math (Basic) in the Madhyamik
    examination apply, through the head of the school, to appear in Math (Standard). That route exists, but it means
    another exam later. It is easier to settle the level in Class IX with the school and a tutor who has seen your
    child's work for a term.
  </p>
  <ul>
    <li><strong>Signs Standard is right:</strong> algebra is comfortable, proofs make sense, and science in Class XI is likely.</li>
    <li><strong>Signs Basic may be right:</strong> arithmetic is secure but abstract algebra is a struggle, and the plan after Class X does not need maths.</li>
    <li><strong>Either way:</strong> the tutor should work from the board's syllabus and model questions, not a guidebook written for another board.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-cbse">What changes for a CBSE Class 10 student in 2026-27?</h2>
  <p>
    CBSE sets an 80-mark Class 10 paper in five sections: twenty one-mark items (eighteen multiple-choice and two
    assertion–reason), five two-mark questions, six of three marks, four of five, and three case studies of four marks
    each. Calculators are not allowed and π is taken as 22/7 unless stated. The 2026-27 Class 10 batch is the last to
    choose between Basic and Standard; CBSE is withdrawing that split for later years.
  </p>
  <p>
    Since 2026, Class 10 students sit one compulsory board exam and may take an optional second exam to improve up to
    three subjects, maths among them. Treat the first as the exam that counts. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> takes the chapters
    one by one, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps the
    months, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page explains how we
    match for that year. For CBSE across subjects, see <a href="{{ url('/cbse-home-tutor-agartala') }}">CBSE home tutors
    in Agartala</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-senior">Classes 11 and 12: board calculus, entrance practice, or both?</h2>
  <p>
    The TBSE Class XII maths syllabus also runs to 80 marks with 20 internal, and it opens with relations and
    functions, matrices and a long calculus block: continuity and differentiability, then integrals. The CBSE Class 12
    paper asks 38 compulsory questions for 80 marks, with calculus alone worth 35. Either way, calculus deserves the
    biggest share of the week from the start of the session.
  </p>
  <p>
    Students aiming at engineering add JEE Main. Its 2026 Paper 1 had 75 questions for 300 marks, 25 of them in maths:
    20 multiple-choice and 5 with a numerical answer, each scored +4 if right and −1 if wrong. Confirm the next pattern
    on jeemain.nta.nic.in. A board paper rewards complete written steps; JEE rewards speed and accuracy under a clock.
    A good tutor splits the week so that neither crowds out the other:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sample split of senior maths sessions for an Agartala student also preparing for JEE Main</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">Aim</th><th scope="col">Ends with</th></tr>
    </thead>
    <tbody>
      <tr><td>First of the week</td><td>New board chapter, taught from the prescribed book</td><td>Two long answers written in full</td></tr>
      <tr><td>Second of the week</td><td>Timed entrance problems on the same chapter</td><td>A short review of every wrong answer</td></tr>
      <tr><td>Before school tests</td><td>Mixed board revision</td><td>A marked practice paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Further reading: the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra
    guide</a>, the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-other">ICSE, ISC, IB and IGCSE maths</h2>
  <dl>
    <dt><strong>ICSE Class 10</strong></dt>
    <dd>An 80-mark written paper plus 20 marks of internal work. The <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> explains how working is judged.</dd>
    <dt><strong>ISC Class 12</strong></dt>
    <dd>For the 2027 and 2028 exams, CISCE sets one 80-mark paper of seven compulsory units, with calculus worth 35, and two projects add 20 more. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both years.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Analysis and Approaches leans on algebra, functions, calculus and proof; Applications and Interpretation leans on modelling and statistics. The exploration carries 20% at both SL and HL. See the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a>.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>Core caps the grade at C; Extended runs from A* to G. Settle the tier with the school early.</dd>
  </dl>
  <p>
    Specialists in these courses are scarcer in Agartala than CBSE or TBSE maths teachers, so name the course in your
    first message. When no one nearby is free, an <a href="{{ url('/online-tutor-agartala') }}">online tutor</a> can
    take the specialist part.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-wards">Five Agartala localities: what to settle before the first visit</h2>
  <p>
    Agartala has no metro; tutors usually come by two-wheeler, auto or city bus. The municipal corporation groups the
    wards into North, Central, East and South zones, and a tutor living in your zone is usually the easiest to keep on
    a fixed weekly slot. All localities are listed on the <a href="{{ url('/city/agartala') }}">Agartala page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Agartala localities for maths home tuition: zone, homes and arrival, and one thing to arrange in advance</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Homes and arrival</th><th scope="col">Arrange in advance</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $agmA('kunjaban', 'Kunjaban') !!}</td><td>North</td><td>Houses on lanes and some flats on a green hillock north of the centre</td><td>A landmark on the hill road, and whether a gate call is needed</td></tr>
      <tr><td>{!! $agmA('krishnanagar', 'Krishnanagar') !!}</td><td>Central</td><td>Densely built streets of homes, shops and eateries in the middle of the city</td><td>A slot away from the Tuesday and Friday market and office closing time</td></tr>
      <tr><td>{!! $agmA('ramnagar', 'Ramnagar') !!}</td><td>Central</td><td>A planned grid split into numbered divisions</td><td>The division number and a landmark; the first visit rarely goes wrong after that</td></tr>
      <tr><td>{!! $agmA('dhaleswar', 'Dhaleswar') !!}</td><td>East</td><td>A settled residential area with several schools</td><td>A chowmuhani as the landmark; avoid school opening and closing hours</td></tr>
      <tr><td>{!! $agmA('badharghat', 'Badharghat') !!}</td><td>South</td><td>A large southern area that includes the city's main railway station</td><td>Some margin in the slot, as the station area is busy at train times</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides: <a href="{{ url('/city/agartala/zone/north-agartala') }}">North</a>,
    <a href="{{ url('/city/agartala/zone/central-agartala') }}">Central</a>,
    <a href="{{ url('/city/agartala/zone/east-agartala') }}">East</a> and
    <a href="{{ url('/city/agartala/zone/south-agartala') }}">South Agartala</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-week">What does a sound maths week look like?</h2>
  <p>
    Two sessions a week suit most students from Class 8 to Class 10; seniors with an entrance target often need three.
    Whatever the number, each week should contain the same four parts:
  </p>
  <ol>
    <li><strong>Recall without the book.</strong> A few short questions on last week's chapter, done before any new teaching.</li>
    <li><strong>The school chapter.</strong> Taught from the prescribed textbook, with the exercise questions your child got wrong at school.</li>
    <li><strong>One exam-style question, written in full.</strong> Marked the way the board marks, with a word on where marks were lost.</li>
    <li><strong>A short homework set.</strong> Small enough to finish, checked at the start of the next session.</li>
  </ol>
  <p>
    Before half-yearly and pre-board exams, the balance shifts towards timed mixed papers. In heavy monsoon rain, or on
    festival days when roads near temples, markets and the immersion ghat fill up, a pre-agreed online session keeps
    the week intact.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-demo">How to judge the free maths demo</h2>
  <p>
    Ask the tutor to teach whatever your child is doing at school this week. A prepared showpiece tells you little.
    Then watch for these signs:
  </p>
  <ul>
    <li><strong>Diagnosis first.</strong> The tutor asks questions to find what your child already knows before explaining.</li>
    <li><strong>Errors named by type.</strong> A slip in arithmetic, a misread question and a gap in the concept each need a different fix.</li>
    <li><strong>The right layout.</strong> Working is set out the way your board's examiner expects, in the language of the answer script.</li>
    <li><strong>A plan you can see.</strong> By the end you know what the next three sessions cover.</li>
  </ul>
  <p>
    If the fit is wrong, tell us and we set up a demo with the next tutor on your shortlist; switching later is free
    too. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more, and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online comparison</a> helps if you are undecided.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-fees">What does a maths home tutor in Agartala charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, and you see it before the demo. The class and board, the tutor's experience with that syllabus, the trip to
    your ward at your hour and the number of sessions a week all play a part. The
    <a href="{{ url('/blog/home-tuition-fees-agartala') }}">Agartala home tuition fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain what to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="agm-start">What to send us</h2>
  <p>
    Send the class, the board and level (TBSE Basic or Standard, CBSE, ICSE, ISC, IB or IGCSE), your locality with a
    landmark, the days and times that work, and a budget. We reply with two or three matched maths tutors and their
    fees, and you choose one for a <a href="{{ url('/demo-class') }}">free demo class</a>. If no suitable tutor can reach
    your part of Agartala at that hour, we suggest online or a mix. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> yourself. NXTutors works from Sector 66, Gurugram, and teaches online across India; the national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page shows how matching works elsewhere, and the
    <a href="{{ url('/blog/agartala-home-tuition-guide') }}">Agartala home tuition guide</a> covers the city as a whole.
  </p>
  <p>
    Maths teachers living in Agartala who want students near home can see open requests on
    <a href="{{ url('/tuition-jobs/agartala') }}">Agartala tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
