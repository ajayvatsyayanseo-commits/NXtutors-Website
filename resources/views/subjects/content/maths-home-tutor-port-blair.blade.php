{{--
  Long-form guide for the "maths home tutor Port Blair" page (Sri Vijaya Puram,
  Andaman and Nicobar Islands; state-capital wave 2, compact depth, subjects
  writer, 3 Oct 2026). Authors in config: Ajay Vatsyayan and Abhinandan Tiwary,
  role statements only, no anecdotes.

  Board position, only from the research file's board_facts:
  - https://southandaman.nic.in/education/ : "All the Sr. Secondary and
    Secondary schools are affiliated to CBSE"; five mediums of instruction
    (English, Hindi, Tamil, Telugu, Bengali; the page's figures date from 2008).
  - https://web.archive.org/web/20250621131025/https://education.andaman.gov.in/casian/ :
    CASIAN portal of CBSE-affiliated government schools; list includes schools
    at Aberdeen, Haddo, School Line, Junglighat, Delanipur, Dairy Farm, South
    Point and Prothrapur. No school counts are given here.
  - Renaming: https://www.pib.gov.in/PressReleaseIframePage.aspx?PRID=2054647
    (13 Sep 2024 decision to rename Port Blair as Sri Vijaya Puram).
  CBSE facts reuse checked statements in database/seo-content/blog:
  cbse-class-10-maths-preparation (7 units: 6/20/6/15/12/10/11, 38 questions,
  sections A-E, 80 + 20), cbse-class-10-board-year-plan-gurgaon and the
  cbse-home-tutor-gurgaon page (two Class 10 exams; Class 9 common paper and
  optional Advanced paper of 25 marks; Basic/Standard ending with the 2026-27
  Class 10 batch), cbse-class-12-maths-calculusalgebra (041, 38 questions,
  calculus 35, vectors and 3D 14, internal 20 = 10 + 5 + 3 + 2, theory exams
  from 17 Feb in 2026) and jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026 Paper 1 pattern).
  Local facts only from database/seo-content/areas/port-blair-research.json.
  No tourism, no school/college/hospital/society/people names, no distances
  or travel times, only the allowed fee sentence. Area links render only when
  the Port Blair area page exists and is active.
--}}
@php
  $pbmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbmA = function (string $slug, string $label) use ($pbmSlugs) {
      return in_array($slug, $pbmSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbm-guide" aria-labelledby="pbmGuideTitle">
  <h2 id="pbmGuideTitle">Maths home tutor in Sri Vijaya Puram (Port Blair): one board, five classroom languages and a tutor who fits both</h2>

  <p class="nx-guide__lede">
    In the Andaman and Nicobar Islands the board question is usually settled before tuition starts: the South Andaman
    district administration states that all secondary and senior secondary schools are affiliated to CBSE. The harder
    question in Sri Vijaya Puram, the city still widely called Port Blair, is often the language of the classroom. The
    district lists five mediums of instruction, English, Hindi, Tamil, Telugu and Bengali, so two Class 8 children
    on the same NCERT chapter may have learnt "ratio" and "factor" under different words. A good maths tutor here
    teaches the CBSE paper and explains it in a way your child already follows. Tell NXTutors the class, the medium
    and your locality, and we suggest two or three maths tutors with their fees shown before you meet; the first lesson
    is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbm-who">Who writes this</a> ·
    <a href="#pbm-medium">Medium and maths</a> ·
    <a href="#pbm-early">Classes 6 to 9</a> ·
    <a href="#pbm-ten">Class 10</a> ·
    <a href="#pbm-twelve">Classes 11 and 12</a> ·
    <a href="#pbm-jee">JEE</a> ·
    <a href="#pbm-island">An island timetable</a> ·
    <a href="#pbm-local">Five localities</a> ·
    <a href="#pbm-demo">The demo</a> ·
    <a href="#pbm-fees">Fees</a> ·
    <a href="#pbm-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbm-who">Who is behind this advice, and what do we ask first?</h2>
  <p>
    Two people sign the maths guidance on this page: Ajay Vatsyayan, whose role covers IB, IGCSE and ISC mathematics,
    and Abhinandan Tiwary, whose role covers Class 10 maths for CBSE and ICSE. Paper details come from CBSE's own
    curriculum and sample papers as summarised in our guides; where a year's document differs, the board's document
    wins.
  </p>
  <p>
    Our first questions for an island family are short. Which class? Which medium does the school teach in? Does your
    child want help keeping up, or a stronger board result, or an entrance exam later? And where do you live, and on
    which days could a tutor come? With CBSE almost a given, those answers decide the match far more than the board
    does.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-medium">Why does the medium of instruction matter for maths?</h2>
  <p>
    Mathematics looks universal on paper, but children learn it through words: "denominator", "is equal to",
    "perpendicular", "prove that". A child who met these terms in Hindi, Tamil or Telugu in the early classes can
    know the method well and still freeze when a question is worded in English, or the reverse. The district's
    education page lists Hindi-, Tamil-, Telugu- and Bengali-medium teaching alongside English, and the research
    we hold for the city notes, for example, Telugu-medium schooling at Haddo and a Tamil-medium primary school on
    the Aberdeen side.
  </p>
  <ul>
    <li><strong>Mention the medium in your request.</strong> We look for a tutor comfortable explaining in it, while the written answers stay in the language of the paper your child will sit.</li>
    <li><strong>Build a two-column glossary.</strong> Each new term in the school's language beside its English form, read aloud once a week.</li>
    <li><strong>Practise reading word problems slowly.</strong> Underline what is given and what is asked before any working starts.</li>
    <li><strong>Check the change of medium early.</strong> If your child moves to an English-medium section in Class 9 or 11, the first month should go on vocabulary, not speed.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-early">What should a tutor fix in Classes 6 to 9?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Middle-school maths: the gaps that show up later in the CBSE board years</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Skill to secure</th><th scope="col">Why it matters later</th></tr>
    </thead>
    <tbody>
      <tr><td>6</td><td>Fractions, decimals and the order of operations</td><td>Every algebra and mensuration answer in Class 10 depends on them</td></tr>
      <tr><td>7</td><td>Negative numbers and simple equations</td><td>Sign errors are the most common lost mark in algebra</td></tr>
      <tr><td>8</td><td>Ratio, percentage and expressions</td><td>Word problems in trigonometry and statistics rest on them</td></tr>
      <tr><td>9</td><td>Proof writing and coordinate basics</td><td>Geometry carries 15 marks in the Class 10 paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Class 9 also brings a choice. Under CBSE's 2026-27 curriculum every Class 9 student sits one common maths paper,
    and there is an optional Advanced paper of 25 marks in one hour, built from higher-order questions on extra
    content. It does not count in the aggregate; a score of 50% or more is recorded on the marksheet. A tutor should
    tell you honestly whether it suits your child rather than adding it by default.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-ten">How is the Class 10 maths paper built?</h2>
  <p>
    The CBSE Class 10 paper carries 80 marks, with 20 more from the school's internal assessment. It is a three-hour
    paper of 38 compulsory questions in five sections, A to E, with internal choice in some. The 80 marks are spread
    over seven units:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 mathematics, 2026-27: unit marks and a habit to build for each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Habit the tutor should build</th></tr>
    </thead>
    <tbody>
      <tr><td>Number systems (real numbers)</td><td>6</td><td>Prime factorisation written out in full, never guessed</td></tr>
      <tr><td>Algebra</td><td>20</td><td>Turning a worded situation into an equation without prompting</td></tr>
      <tr><td>Coordinate geometry</td><td>6</td><td>Formula first, substitution second</td></tr>
      <tr><td>Geometry (triangles, circles)</td><td>15</td><td>A reason beside every line of a proof</td></tr>
      <tr><td>Trigonometry and its applications</td><td>12</td><td>A labelled figure before any ratio is chosen</td></tr>
      <tr><td>Mensuration</td><td>10</td><td>Units carried through combined solids</td></tr>
      <tr><td>Statistics and probability</td><td>11</td><td>Neat tables for mean, median and mode</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Class 10 now has two board examinations. Everyone sits the first; students who pass may take the second to improve
    up to three subjects from science, maths, social science and the languages. Plan for the first as the real
    examination and keep the second for a focused repair. The Basic and Standard choice in maths is being phased out,
    with the 2026-27 Class 10 batch the last to sit it. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a> takes each
    chapter in turn, the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a>
    lays out CBSE's months, and the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths tutor</a> page
    explains how we match for this year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-twelve">What changes in Classes 11 and 12?</h2>
  <p>
    The research we hold lists government senior secondary schools on CBSE's list at School Line, Haddo and
    Prothrapur among others, so many students stay on CBSE through Class 12. Mathematics (041) and Applied
    Mathematics (241) are separate subjects, and a student takes one; confirm which before you ask for a tutor. For
    Mathematics, the Class 12 paper is 80 marks in three hours, 38 compulsory questions in five sections, and calculus
    alone carries 35 of the 80. Vectors and three-dimensional geometry add 14 marks for a fairly small set of methods.
  </p>
  <p>
    The other 20 marks are earned during the year: 10 from periodic tests, 5 from the record of maths activities, 3
    from a year-end activity test and 2 from a viva. A tutor who checks the activity record each month protects marks
    that are easy to lose by neglect. In 2026 the Class 12 theory examinations began on 17 February; later dates
    belong to cbse.gov.in. Class 11 deserves real effort too, since limits, functions and trigonometric identities
    return in every Class 12 calculus chapter. The
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra guide</a> and the
    <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-jee">How should JEE maths sit beside the board?</h2>
  <p>
    Students aiming at engineering add JEE Main to the board year. In 2026 its Paper 1 had 75 questions for 300 marks,
    with 25 in mathematics: twenty multiple choice and five with a numerical answer, scored +4 for a correct response
    and −1 for a wrong one. NTA confirms the pattern each year on jeemain.nta.nic.in. The board wants every step
    written; JEE wants speed and accuracy with no partial credit. A home tutor helps by keeping those two kinds of
    practice in separate sessions and by logging every wrong objective answer. Because a specialist for advanced
    problem-solving may not live on the island, many senior students pair a local tutor for the board with an online
    specialist for entrance work. See the national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page and
    the <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths topic-wise guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-island">How does an island city change the maths timetable?</h2>
  <p>
    Some island families travel between islands for work, and the inter-island ships that leave from Phoenix Bay set
    their own days. Children miss classes, tutors' weeks shift, and the monsoon months make evening travel slower. A
    timetable that survives all three has a few features:
  </p>
  <ol>
    <li><strong>Two fixed weekday slots</strong> agreed at the start, so a missed week is the exception.</li>
    <li><strong>An online fallback with the same tutor</strong> for travel weeks and heavy-rain evenings, at the same hour.</li>
    <li><strong>A written list of chapters done</strong> that the family keeps, so school and tuition never drift apart.</li>
    <li><strong>Timed practice from the winter months</strong> for Class 10 and 12, given that board theory papers in 2026 began in February.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-local">What should a maths tutor know about your locality?</h2>
  <p>
    The <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair) page</a> lists every locality we cover.
    Five of them show what to share before a first visit.
  </p>
  <dl>
    <dt><strong>Aberdeen and the old town</strong></dt>
    <dd>{!! $pbmA('aberdeen-bazaar', 'Aberdeen Bazaar') !!}: the shopping centre, with homes above shops and in side lanes. Give the lane name and the clock tower or a shop as a reference, and choose a slot before the evening market crowd.</dd>
    <dt><strong>Junglighat and the central localities</strong></dt>
    <dd>{!! $pbmA('junglighat', 'Junglighat') !!}: an established residential locality where a landmark and lane work better than a house number; flat dwellers should add the floor and a place to park.</dd>
    <dd>{!! $pbmA('bathubasti', 'Bathubasti') !!}: houses and multi-storey apartment buildings around a local bazaar. Start before the evening rush, and tell the tutor where visitors may leave a scooter.</dd>
    <dt><strong>The expansion villages</strong></dt>
    <dd>{!! $pbmA('dollygunj', 'Dollygunj') !!}: plots and houses in newer lanes brought into the city as the municipal limits grew in 2015. A map pin before the first class saves a wasted trip.</dd>
    <dd>{!! $pbmA('garacharma', 'Garacharma') !!}: a census town just outside the city. A tutor from the centre may come only on set days, so a weekend home class with weekday online sessions is a common pattern for senior maths.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-demo">What should you look for in the free demo?</h2>
  <p>
    Put a marked school test on the table and ask the tutor to teach whatever the class covered this week. Watch for:
  </p>
  <ul>
    <li>The tutor reads the test before explaining anything new.</li>
    <li>Each lost mark is traced to a cause: a slip, a misread question or a concept never settled.</li>
    <li>Your child is asked to explain a step back, in English or in the school's medium.</li>
    <li>The tutor knows the current unit marks and section structure without looking them up.</li>
    <li>Homework is set and a day fixed for checking it.</li>
  </ul>
  <p>
    If the fit is wrong, another tutor from the shortlist can give the next demo, and switching later costs nothing.
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-fees">How much does a maths home tutor in Port Blair charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, which depends on the class, the tutor's experience with the paper, the trip to your locality and the number of
    sessions a week. You see every fee on the shortlist before the demo. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explains how rates are set, and our
    <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in Port Blair</a> guide lists the
    questions worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbm-next">What should you send us?</h2>
  <p>
    Send the class, the school's medium, Mathematics or Applied Mathematics for Classes 11 and 12, any entrance plan,
    your locality with a landmark, the free afternoons and the fee you have in mind. We reply with two or three maths
    tutors and their fees, and one of them gives the free <a href="{{ url('/demo-class') }}">demo class</a>. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before a profile is marked Verified. If nobody
    suitable can reach your lane at your hour, part or all of the plan can move to an
    <a href="{{ url('/online-tutor-port-blair') }}">online tutor</a>. The national
    <a href="{{ url('/maths-home-tutor') }}">maths home tutor</a> page explains the wider service, the
    <a href="{{ url('/blog/port-blair-home-tuition-guide') }}">Port Blair home tuition guide</a> walks through each
    zone, and <a href="{{ url('/tutors') }}">tutor profiles</a> can be browsed at any time. Our office is in Sector 66,
    Gurugram.
  </p>
  <p>
    Teach maths in the islands? Family requests near you appear on
    <a href="{{ url('/tuition-jobs/port-blair') }}">Port Blair tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
