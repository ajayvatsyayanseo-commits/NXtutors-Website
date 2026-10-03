{{--
  Long-form guide for the "maths home tutor Puducherry" subject page (authors
  in config: Ajay Vatsyayan and Abhinandan Tiwary; role statements only, no
  anecdotes). Covers Puducherry town only.

  Local facts come only from database/seo-content/areas/puducherry-research.json
  (area "about" texts and zone_facts, each with sources). Board picture only
  from its top-level board_facts:
  - https://schooledn.py.gov.in/CBSE/cbsetrg.html (Directorate of School
    Education orientation, April-May 2024, "smooth swap from State Syllabus to
    CBSE Syllabus")
  - https://schooledn.py.gov.in/Exams/sslcResult.html (SSLC / +2 up to 2024,
    CBSE 10 / CBSE 12 from 2025)
  - https://schooledn.py.gov.in/Exams/Results%202026/12th%20STATE%20BOARD%20RESULT-2026%20Eng%20%26%20Tamil.pdf
    (separate state-board SSLC and +2 analyses for private schools, 2026)
  The state board is described in general terms only (no pattern, not named).

  Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-10-maths-preparation (unit marks, five sections, Standard/Basic
  skill split, no calculator, pi = 22/7), cbse-class-10-board-year-plan-gurgaon
  (80 + 20, compulsory main exam plus optional second exam for up to three
  subjects), cbse-class-12-maths-calculusalgebra (38 questions, calculus 35),
  icse-isc-maths-gurgaon-guide (ICSE 80 + 20; ISC 2027/2028 single paper,
  seven units, projects 20), -ib-math-aaai-slhl (AA/AI, hours, weights,
  exploration) and jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main
  2026 pattern). Official homes: cbseacademic.nic.in, cisce.org, ibo.org,
  cambridgeinternational.org, jeemain.nta.nic.in.

  No school, college, university, coaching institute, society or people's
  names, no distances or travel times, only the allowed fee sentence. Area
  links render only when that Puducherry area page exists and is active.
--}}
@php
  $pdmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pdmA = function (string $slug, string $label) use ($pdmSlugs) {
      return in_array($slug, $pdmSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pdm-guide" aria-labelledby="pdmGuideTitle">
  <h2 id="pdmGuideTitle">Maths home tutor in Puducherry: a teacher for the syllabus your child is on this year</h2>

  <p class="nx-guide__lede">
    Maths tuition in Puducherry (Pondicherry to many families) starts with a question that has changed recently:
    which book is your child actually working from? Government schools have moved from the state syllabus to CBSE,
    some private schools still prepare students for the state-board SSLC and +2 papers, and a smaller group of
    children sit ICSE, ISC, IB or Cambridge IGCSE. A teacher who is excellent on one of these can be a poor fit for
    another. Tell NXTutors the class, the syllabus and your part of town, and we put forward two or three maths tutors
    who suit all three. Their fees are on the shortlist before you meet anyone, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pdm-which">Which syllabus</a> ·
    <a href="#pdm-switch">New to CBSE</a> ·
    <a href="#pdm-ladder">Class by class</a> ·
    <a href="#pdm-ten">CBSE Class 10</a> ·
    <a href="#pdm-twelve">Class 12 and JEE</a> ·
    <a href="#pdm-other">ICSE, ISC, IB, IGCSE</a> ·
    <a href="#pdm-town">Six parts of town</a> ·
    <a href="#pdm-demo">The demo</a> ·
    <a href="#pdm-fees">Fees</a> ·
    <a href="#pdm-ask">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pdm-which">Which maths syllabus is your child on in Puducherry right now?</h2>
  <p>
    Two people share the writing on this page. Ajay Vatsyayan covers IB, IGCSE and ISC maths, and Abhinandan Tiwary
    covers Class 10 maths for CBSE and ICSE. Both start in the same place: the body that sets the final paper, because
    it decides the textbook, how working is laid out and which practice earns marks.
  </p>
  <p>
    Puducherry has no school board of its own. In April and May 2024 the Directorate of School Education ran
    orientation sessions for heads of schools, inspecting officers and teachers on a smooth swap from the state
    syllabus to the CBSE syllabus. Its result pages show the change: Class 10 results appear as SSLC up to 2024 and as
    CBSE 10 from 2025, and Class 12 results as +2 up to 2024 and CBSE 12 from 2025. From 2026 the Directorate also
    publishes separate state-board SSLC and +2 analyses for private schools in the Puducherry and Karaikal regions,
    so the state syllabus has not disappeared.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths syllabuses met by Puducherry families, who sets each final paper, and the question to put to a tutor</caption>
    <thead>
      <tr><th scope="col">Syllabus</th><th scope="col">Who sets the paper</th><th scope="col">Shape of the final assessment</th><th scope="col">Question for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE, Classes 10 and 12 (now in government schools)</td><td>CBSE</td><td>80 marks on the board paper, 20 assessed by the school</td><td>Have you taught from the current NCERT books and sample papers?</td></tr>
      <tr><td>State-board SSLC and +2 (some private schools)</td><td>The state board whose syllabus the school follows</td><td>Take the current scheme from the school and the board's own notices</td><td>Will you teach from my child's prescribed textbook and that board's past papers?</td></tr>
      <tr><td>ICSE Class 10 and ISC Class 12</td><td>CISCE</td><td>An 80-mark paper with 20 more from internal or project work</td><td>Which exam year's syllabus are you working from?</td></tr>
      <tr><td>IB Diploma; Cambridge IGCSE</td><td>IB; Cambridge</td><td>IB: timed papers plus an exploration. IGCSE: Core or Extended</td><td>Which course or tier have you prepared students for lately?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-switch">My child started on the state syllabus and now sits CBSE. What should a maths tutor fix first?</h2>
  <p>
    A student who changed books part-way through school usually knows plenty of maths but meets it in an unfamiliar
    form. A tutor who has taught CBSE for a few years can close that gap quickly if the order of work is sensible:
  </p>
  <ol>
    <li><strong>The NCERT chapter order.</strong> Topics are grouped and sequenced differently, so the tutor maps what was already learned against the NCERT contents and marks the chapters that are genuinely new.</li>
    <li><strong>Question types the old papers rarely used.</strong> CBSE Class 10 includes assertion–reason items and case-study questions built on a short real-life passage. Both need a few weeks of practice before they feel routine.</li>
    <li><strong>Reasons beside each step.</strong> In geometry especially, a statement written without its reason loses marks. This habit is worth building from the first month.</li>
    <li><strong>Mental arithmetic without a calculator.</strong> The Class 10 paper allows none, so long multiplication, fractions and surds must be quick and clean.</li>
  </ol>
  <p>
    Ask the tutor at the demo to look at one marked school test and say which of these four is costing the most. The
    <a href="{{ url('/cbse-home-tutor-puducherry') }}">CBSE home tutor in Puducherry</a> page covers the switch across
    all subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-ladder">What should maths tuition aim at in each class?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Maths tuition from Class 5 to Class 12 in Puducherry: the main aim each year and a sign that it is working</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Main aim of tuition</th><th scope="col">Sign that it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>5 to 7</td><td>Fluent number work: fractions, decimals, ratio and the language of word problems</td><td>Homework finished without asking which operation to use</td></tr>
      <tr><td>8</td><td>First real algebra: expressions, simple equations and their rules</td><td>Each line of working follows from the line above</td></tr>
      <tr><td>9</td><td>Proof in geometry and the start of coordinate work; the step up is steep</td><td>Proofs written with a reason beside every statement</td></tr>
      <tr><td>10</td><td>Board preparation, unit by unit, with timed sections</td><td>Full papers finished in time with working shown</td></tr>
      <tr><td>11</td><td>Functions, trigonometry and limits, laid down carefully for Class 12</td><td>School tests no longer dip after each new chapter</td></tr>
      <tr><td>12</td><td>Calculus first, then the remaining units, alongside any entrance work</td><td>Long calculus answers written out in full and marked</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The class pages for <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a> explain how we match tutors for the two board
    years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-ten">How are the 80 marks in CBSE Class 10 maths spread?</h2>
  <p>
    For 2026-27, CBSE spreads the board marks across 14 NCERT chapters in seven units, and the paper's design is the
    same as the previous session. Algebra leads with 20 marks (polynomials, linear equation pairs, quadratics and
    arithmetic progressions). Geometry, meaning triangles and circles, follows with 15. Trigonometry, heights and
    distances included, has 12; statistics and probability 11; mensuration 10; and real numbers and coordinate geometry
    6 each. A sensible year follows those weights rather than the order in which chapters happen to arrive at school.
  </p>
  <p>
    The paper is split into five lettered sections:
  </p>
  <ul>
    <li><strong>Section A:</strong> twenty questions worth one mark each, eighteen multiple-choice and two of the assertion–reason type.</li>
    <li><strong>Section B:</strong> five short answers at two marks.</li>
    <li><strong>Section C:</strong> six answers at three marks.</li>
    <li><strong>Section D:</strong> four long answers at five marks.</li>
    <li><strong>Section E:</strong> three case studies at four marks each.</li>
  </ul>
  <p>
    Calculators are not allowed, and π is taken as 22/7 unless a question says otherwise. Standard and Basic maths cover
    the same chapters at different depth: around 54% of the Standard paper rests on remembering and understanding,
    against around 75% in Basic. If maths in Class 11 is at all likely, Standard is the safer choice; the school sets
    a deadline for it at registration.
  </p>
  <p>
    Since 2026, Class 10 students sit one compulsory main exam and can take an optional second exam to improve up to
    three subjects, maths included. The 2027 dates had not been announced at the time of writing; follow cbse.gov.in.
    Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> goes chapter
    by chapter, and the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a>
    turns the session into months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-twelve">Class 12 maths and JEE: can one tutor handle both?</h2>
  <p>
    Often yes, provided the week is divided honestly between two very different papers. The CBSE Class 12 paper sets
    38 compulsory questions for 80 marks, and calculus alone carries 35 of them, so it deserves the largest share of
    tuition time from the first month. JEE Main 2026 Paper 1 had 75 questions for 300 marks; maths had 25 of them,
    twenty with options and five with a numerical answer, scored at plus four for a right answer and minus one for a
    wrong one. NTA confirms each year's pattern on jeemain.nta.nic.in.
  </p>
  <p>
    A plan that works for many students: one session a week on entrance problems, chosen from the chapter just
    finished, and one on board answers written in full and marked against the scheme. If your child already attends a
    coaching class, the home tutor should clear the problems left unsolved there rather than teach the same chapter a
    second time. Read the <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and
    algebra guide</a> and the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a>,
    and see our <a href="{{ url('/jee-home-tutor-puducherry') }}">JEE home tutor in Puducherry</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-other">What changes for ICSE, ISC, IB and IGCSE maths?</h2>
  <dl>
    <dt><strong>ICSE Class 10</strong></dt>
    <dd>A written paper of 80 marks and 20 for internal assessment. See the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> for how working is judged.</dd>
    <dt><strong>ISC Class 12</strong></dt>
    <dd>For the 2027 and 2028 exams, CISCE sets one 80-mark paper of seven units with no choice between the old Sections B and C, so vectors, three-dimensional geometry, linear programming and probability are now for every candidate. Calculus is worth 35. Two projects add 20, each out of 10: format 1, content 4, findings 2 and viva 3. The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both years.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Analysis and Approaches leans on algebra, functions, calculus and proof, with one paper taken without a calculator; Applications and Interpretation leans on modelling and statistics and uses a graphic display calculator throughout. Teaching hours are 150 at SL and 240 at HL. SL has two papers at 40% each; HL has two at 30% and a third at 20%; the exploration is the final 20% and must be the student's own. Our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB maths AA or AI guide</a> explains the choice.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>Core caps the grade at C, while Extended runs from A* to G, so agree the tier with the school well before entries close.</dd>
  </dl>
  <p>
    Teachers for these four courses are usually fewer than CBSE teachers, so name the course in your first message.
    If nobody suitable can travel to you, an online specialist can take the course-specific work while a local tutor
    marks written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-town">Which part of Puducherry are you in, and what should the tutor know before visiting?</h2>
  <p>
    The town grew as Pondicherry Municipality, which joined the old Pondicherry and Mudaliarpet communes, with Oulgaret
    Municipality to the north and west and Ariyankuppam and Villianur beyond. Most tutors come by two-wheeler or bus.
    Six areas from the old town and the south show what to arrange; every area is listed on our
    <a href="{{ url('/city/puducherry') }}">Puducherry home tuition page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Puducherry areas: the usual home, how the tutor finds it, and the timing to agree</caption>
    <thead>
      <tr><th scope="col">Area</th><th scope="col">Usual home</th><th scope="col">Finding the door</th><th scope="col">Timing to agree</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pdmA('white-town', 'White Town') !!}</td><td>Independent houses and heritage buildings in the seaward half of the old Boulevard Town</td><td>A street name and house number are usually enough</td><td>Weekdays; the seafront streets fill with visitors in the evenings and at weekends</td></tr>
      <tr><td>{!! $pdmA('tamil-quarter', 'Tamil Quarter') !!}</td><td>Older houses opening straight onto the street, west of the Grand Canal</td><td>A quick phone call and the tutor is at the front door</td><td>Shopping streets crowd in the evening and on festival days, so keep a fixed slot</td></tr>
      <tr><td>{!! $pdmA('muthialpet', 'Muthialpet') !!}</td><td>Mainly independent houses, with some small apartment buildings</td><td>For a flat, share the flat number and a phone number before the first visit</td><td>Roads near the old market are busy at peak hours; build in a margin</td></tr>
      <tr><td>{!! $pdmA('mudaliarpet', 'Mudaliarpet') !!}</td><td>Older houses on side streets and apartment buildings, some of them tall, along the Cuddalore road</td><td>Apartment gates may ask the tutor to sign in; send the building name ahead</td><td>Office-hour traffic on the main road; a tutor from nearby wards helps</td></tr>
      <tr><td>{!! $pdmA('nellithope', 'Nellithope and Anna Nagar') !!}</td><td>Houses, residential plots and apartment buildings near the bus stand</td><td>Give the building name and floor, and tell the guard in advance</td><td>Roads around the bus stand are busy much of the day; a two-wheeler is simplest</td></tr>
      <tr><td>{!! $pdmA('ariyankuppam', 'Ariyankuppam') !!}</td><td>Independent houses and plots on grid streets, with a few apartment buildings</td><td>Give the cross-street name for the first visit</td><td>The Cuddalore road is busy at peak hours; a tutor living in Ariyankuppam is steadiest</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Families in Lawspet, Kalapet, Reddiarpalayam or Villianur will find their areas in the
    <a href="{{ url('/city/puducherry/zone/lawspet-ecr') }}">Lawspet and ECR</a> and
    <a href="{{ url('/city/puducherry/zone/reddiarpalayam-villianur') }}">Reddiarpalayam and Villianur</a> zone
    guides, and our <a href="{{ url('/blog/puducherry-home-tuition-guide') }}">Puducherry home tuition guide</a> walks
    through every zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-demo">How do you judge a maths tutor in one free demo?</h2>
  <p>
    Ask for the chapter your child is doing in school this week, not a topic the tutor prefers. Then watch for five
    things:
  </p>
  <ul>
    <li><strong>A short diagnosis first.</strong> Two or three questions to find out what your child already knows before any teaching starts.</li>
    <li><strong>Errors named by type.</strong> Is it arithmetic, misreading the question, or the idea itself? Each needs a different fix.</li>
    <li><strong>Working in the examiner's style.</strong> Steps laid out the way CBSE, the state board, CISCE or the IB expects.</li>
    <li><strong>Language that helps.</strong> If your child thinks through a hard step in Tamil, can the tutor explain in Tamil and still have the answer written in the language of the paper?</li>
    <li><strong>A plan you can see.</strong> What the next three lessons cover, and which homework the tutor will check.</li>
  </ul>
  <p>
    If the fit is wrong, tell us and the next tutor on the shortlist takes a demo; changing tutor later is free too.
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> has more,
    and our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> article helps if
    you are weighing a screen against a visit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-fees">How much does a maths home tutor in Puducherry charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates. When you compare quotes, ask how long each lesson runs, how many lessons a week the tutor suggests for your
    child's class, and whether the same tutor offers an online lesson in weeks when travel is hard. Every fee on the
    shortlist is visible before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">Puducherry home tuition fees</a> article explains what
    else to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdm-ask">What should your request include?</h2>
  <p>
    Five details make the shortlist sharper: the class; the syllabus by name (CBSE Standard or Basic, state-board
    SSLC or +2, ICSE, ISC, IB or IGCSE); your area with a landmark a newcomer could find; the days and times you can
    offer; and a budget. We reply with two or three matched maths tutors and their fees, and tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. If nobody
    suitable can reach your part of town at your hour, we suggest an online or mixed plan. NXTutors works from Sector
    66, Gurugram, and teaches online across India; the national <a href="{{ url('/maths-home-tutor') }}">maths home
    tutor</a> page shows how we match in other cities, and the
    <a href="{{ url('/science-home-tutor-puducherry') }}">science home tutor in Puducherry</a> page covers the
    sciences.
  </p>
  <p>
    Maths teachers living in Puducherry who would like students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/puducherry') }}">Puducherry tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
