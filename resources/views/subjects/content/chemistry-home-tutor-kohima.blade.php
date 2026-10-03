{{--
  Long-form guide for the "chemistry home tutor Kohima" page (Classes 11 and
  12: NBSE HSSLC, CBSE, ISC/IB/IGCSE; NEET and JEE chemistry). Byline in
  config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/kohima-research.json (zone_facts and area "about"
  texts).

  Nagaland Board of School Education facts, read 3 Oct 2026 on nbsenl.edu.in:
  - https://nbsenl.edu.in/cms/document/51/syllabi (Blueprint of HSSLC 2026,
    Chemistry): 34 questions, 70 marks; 10 x 1 MCQ, 6 x 1 VSA, 6 x 2, 9 x 3,
    3 x 5; chapter marks Solutions 7, Electrochemistry 9, Chemical Kinetics 6,
    d- and f-block elements 9, Coordination Compounds 5, Haloalkanes and
    Haloarenes 6, Alcohols, Phenols and Ethers 7, Aldehydes, Ketones and
    Carboxylic Acids 9, Amines 6, Biomolecules 6 (sum 70; branch totals
    computed here: physical 22, inorganic 14, organic 34).
  - https://nbsenl.edu.in/cms/document/41/syllabi (higher secondary textbooks
    2025): NCERT Chemistry for Classes XI and XII, a reference book and a
    laboratory manual.
  - https://nbsenl.edu.in/cms/document/14/calendars (2026 higher secondary
    calendar): HSSLC internal/practical marks submitted 2-13 February 2026;
    HSSLC practical examination question papers; HSSLC examination and Class
    XI promotion examination in February 2026; Class XI classes from late May.
  CBSE and entrance facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter marks, branch totals 23/14/33, practical 8/8/6/4/4, removed and
  school-assessed topics), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026) and jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main
  2026); IB chemistry themes and Cambridge tiers as stated on the Srinagar and
  Patna pages. Purely practical and educational; weather only as timing
  advice. No coaching institute, school, college, hospital, society or
  people's names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Kohima area page exists and is active.
--}}
@php
  $kmcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kmcA = function (string $slug, string $label) use ($kmcSlugs) {
      return in_array($slug, $kmcSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kmc-guide" aria-labelledby="kmcGuideTitle">
  <h2 id="kmcGuideTitle">Chemistry home tutor in Kohima: ten chapters, two boards that weigh them differently, and one tutor to keep all three branches moving</h2>

  <p class="nx-guide__lede">
    Class 12 chemistry has the same ten NCERT chapters whether a Kohima student sits the HSSLC examination of the
    Nagaland Board of School Education or the CBSE board. What differs is the weight each board puts on them, and
    that changes where a tutor should spend the year. Marks also leak from each branch in its own way: wrong units in
    physical, muddled reaction sequences in organic, trends without reasons in inorganic. A good home tutor works out
    which leak is the largest for your child and closes it first. We send two or three chemistry tutors who know the
    paper your child will sit and can get to your ward; their fees are listed before any meeting, and the opening
    lesson is free.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kmc-papers">Which paper</a> ·
    <a href="#kmc-weights">HSSLC and CBSE weights</a> ·
    <a href="#kmc-types">Question types</a> ·
    <a href="#kmc-branch">Fixing each branch</a> ·
    <a href="#kmc-practical">Practical work</a> ·
    <a href="#kmc-eleven">Starting in Class 11</a> ·
    <a href="#kmc-other">ISC, IB, IGCSE</a> ·
    <a href="#kmc-wards">Five wards</a> ·
    <a href="#kmc-fees">Fees</a> ·
    <a href="#kmc-start">Shortlist</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kmc-papers">What does each chemistry paper reward?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry papers a Kohima Class 12 student may face, and the skill each one pays for</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Size</th><th scope="col">Pays for</th></tr>
    </thead>
    <tbody>
      <tr><td>NBSE HSSLC, 2026 blueprint</td><td>34 questions, 70 theory marks; textbook NCERT Chemistry</td><td>Short written reasons, balanced equations and three-mark answers set out in full</td></tr>
      <tr><td>CBSE Class 12</td><td>70 theory marks over 33 compulsory questions, plus 30 practical marks</td><td>Reasons in words, tidy numericals, no calculator or log tables</td></tr>
      <tr><td>NEET (UG), as held in 2026</td><td>Chemistry is a quarter of the paper: 45 of the 180 questions, offline</td><td>Exact recall of NCERT statements under time</td></tr>
      <tr><td>JEE Main, Paper 1 in 2026</td><td>A third of the 75 questions, five of them with a numerical answer</td><td>Reaction mechanisms and multi-step calculations</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In 2026 both entrance tests awarded four marks per correct answer and deducted one per wrong answer; NTA
    republishes the scheme every year. Priorities by chapter are in our
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET chemistry chapters guide</a> and the
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a>, and the
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page explains how we match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-weights">How do HSSLC and CBSE weigh the same ten chapters?</h2>
  <p>
    The Nagaland board lists NCERT Chemistry for Classes 11 and 12, with a reference book and a laboratory manual, and
    its 2026 HSSLC blueprint gives marks to every chapter. Set beside CBSE's 2026-27 chapter marks, the two lists
    show where a tutor teaching both boards should shift time:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 chemistry chapter marks: NBSE HSSLC 2026 blueprint and CBSE 2026-27</caption>
    <thead>
      <tr><th scope="col">Chapter</th><th scope="col">HSSLC</th><th scope="col">CBSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Solutions</td><td>7</td><td>7</td></tr>
      <tr><td>Electrochemistry</td><td>9</td><td>9</td></tr>
      <tr><td>Chemical kinetics</td><td>6</td><td>7</td></tr>
      <tr><td>d- and f-block elements</td><td>9</td><td>7</td></tr>
      <tr><td>Coordination compounds</td><td>5</td><td>7</td></tr>
      <tr><td>Haloalkanes and haloarenes</td><td>6</td><td>6</td></tr>
      <tr><td>Alcohols, phenols and ethers</td><td>7</td><td>6</td></tr>
      <tr><td>Aldehydes, ketones and carboxylic acids</td><td>9</td><td>8</td></tr>
      <tr><td>Amines</td><td>6</td><td>6</td></tr>
      <tr><td>Biomolecules</td><td>6</td><td>7</td></tr>
      <tr><td><strong>Totals: physical / inorganic / organic</strong></td><td>22 / 14 / 34</td><td>23 / 14 / 33</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The totals look almost identical, but the inside of the inorganic block is not: the HSSLC blueprint puts 9 marks
    on the d- and f-block elements and 5 on coordination compounds, where CBSE gives 7 to each. An NBSE student should
    therefore know transition-element trends and their reasons especially well. In organic chemistry, the carbonyl
    chapter carries 9 on the HSSLC paper, the joint highest. Always check the current year's blueprint on
    nbsenl.edu.in before planning revision, since boards revise their weights.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-types">What kinds of question does the HSSLC chemistry paper use?</h2>
  <p>
    The 2026 blueprint mixes ten one-mark multiple-choice questions, six one-mark very short answers, six two-mark
    answers, nine three-mark answers and three five-mark long answers. Each type wants a slightly different drill:
  </p>
  <ul>
    <li><strong>One-mark items, 16 in all.</strong> Names, formulae, trends and the one-word reason; rapid oral quizzing at the start of every session.</li>
    <li><strong>Two-mark answers.</strong> A reaction with its condition, or a reason plus one example; nothing longer.</li>
    <li><strong>Three-mark answers, 27 marks together.</strong> A short numerical in solutions or kinetics, a conversion in two or three steps, or a structure with its explanation.</li>
    <li><strong>Five-mark answers.</strong> In 2026 these sat in electrochemistry, the d- and f-block, and the carbonyl chapter; a tutor should rehearse one full answer from each until it is automatic.</li>
  </ul>
  <p>
    The CBSE paper is laid out in five sections, offers a choice inside a few questions, and puts roughly two-fifths
    of its marks on recall and understanding. For a chapter-by-chapter walk-through, read our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 organic and inorganic
    chemistry</a>; the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry</a> page describes our
    board-year matching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-branch">How does a tutor fix each branch of chemistry?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The usual weak point in each branch and what the home session does about it</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Usual weak point</th><th scope="col">Home-session remedy</th></tr>
    </thead>
    <tbody>
      <tr><td>Physical</td><td>Right formula, wrong answer, usually a unit or a power of ten</td><td>The student talks through each line while solving, so the tutor can halt at the slip</td></tr>
      <tr><td>Organic</td><td>Each reaction stored on its own, so similar ones get confused</td><td>A single chart linking haloalkanes, alcohols, carbonyls, acids and amines, redrawn without notes every week</td></tr>
      <tr><td>Inorganic</td><td>Trends half-remembered, reasons missing</td><td>Quick-fire questions from the textbook, each answer followed by "why?"</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two short "explain why" questions at the close of every lesson, marked straight away, stop the board answers
    from slipping while entrance practice takes up the rest of the week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-practical">How much of the practical work can be prepared at home?</h2>
  <p>
    More than students think. On the Nagaland board, the 2026 calendar had schools submitting HSSLC internal and
    practical marks in early February, ahead of the theory paper, and the board lists a laboratory manual for Classes
    11 and 12. CBSE gives the practical 30 marks, of which volumetric analysis and salt analysis take 8 apiece, a
    content-based experiment 6, and the project and the record-plus-viva 4 each.
  </p>
  <p>
    None of the following needs a laboratory: working out molarity from a titre, ruling a neat table of burette
    readings, reciting the sequence of tests for an unknown salt, picking a project that can genuinely be completed,
    and answering the viva questions that come up year after year. For NBSE students, October to December is the natural time to
    finish the record, before the February deadlines.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-eleven">Why start chemistry tuition in Class 11?</h2>
  <p>
    Most of Class 12 leans on Class 11: the mole, equilibrium and basic organic reasoning reappear in solutions,
    electrochemistry and nearly every conversion. On the Nagaland board the Class 11 year is also
    short, running in 2026 from classes in late May to a promotion examination in February, so a weak start has little
    time to recover. Three small tasks make a useful early test: convert a mass into moles, write Kc for a simple
    reaction, and give the IUPAC name of a short-chain compound. Whichever one stalls is where tuition should begin.
    More on the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry</a> page and the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-other">What about ISC, IB or IGCSE chemistry?</h2>
  <p>
    On ISC, practical and project marks sit beside the written paper, and one-line answers rarely earn full credit.
    The IB Diploma course, at SL and HL, is arranged around two themes, structure and reactivity, and the scientific
    investigation must be the student's own. Cambridge IGCSE science is sat at Core or Extended tier. Specialists are
    scarce in any one city, so name the course in your first message; a specialist online plus a nearby tutor for
    written practice is a workable mix.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-wards">Evening chemistry lessons in five Kohima wards</h2>
  <p>
    By Class 12 most chemistry lessons happen in the evening, and a slot only lasts the year if the tutor's journey is
    simple. Five wards illustrate what to arrange; every area is on the <a href="{{ url('/city/kohima') }}">Kohima
    page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Kohima wards for evening chemistry: position, the approach to the door, and when to start</caption>
    <thead>
      <tr><th scope="col">Ward</th><th scope="col">Where</th><th scope="col">Arrival</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kmcA('naga-bazaar', 'Naga Bazaar') !!}</td><td>Between the northern wards and the centre, in Upper and Lower parts</td><td>Taxi for the last stretch; say upper or lower</td><td>A tutor from Daklane or New Market keeps it steady</td></tr>
      <tr><td>{!! $kmcA('kitsubozou', 'Kitsübozou') !!}</td><td>East of the centre, beside Kohima Village, with Daklane to the west</td><td>To the nearest road point, then on foot</td><td>Later slots suit a tutor from the southern wards</td></tr>
      <tr><td>{!! $kmcA('midland', 'Midland') !!}</td><td>Just south of New Market, in Upper, Middle and Lower parts</td><td>Name the part when booking</td><td>Avoid the hour when offices close</td></tr>
      <tr><td>{!! $kmcA('upper-chandmari', 'Upper Chandmari') !!}</td><td>South of the centre, with PR Hill to the west</td><td>Say "Upper" clearly; Lower Chandmari is a separate ward</td><td>Tutors from PR Hill or Midland suit weekly visits</td></tr>
      <tr><td>{!! $kmcA('agri-farm', 'Agri Farm') !!}</td><td>South-west, taking in Upper Agri, Electrical and Forest</td><td>Give the smaller neighbourhood's name too</td><td>Start after the office-hour traffic towards the centre</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When June-to-September rain makes a particular evening slow, keep the hour and move it on screen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-fees">What do chemistry tutors in Kohima charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names a fee,
    which usually climbs with the exam in view and the tutor's record with it; the evening trip and how often you meet
    matter too, and screen lessons can be lower. You see every fee before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-kohima') }}">Kohima fees guide</a> lists the questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmc-start">How do you ask for chemistry tutors?</h2>
  <p>
    Send us the class, the board, the exam that matters most, the branch that loses marks, the ward and a landmark,
    and the free evenings. A shortlist of two or three chemistry tutors arrives with fees; one of them teaches the free
    demo, and if the fit is poor another gives the next one. Changing later is free as well. All tutors who join pass
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profiles appear. If the journey to your
    home will not work, we suggest teaching online for some or all sessions. The
    <a href="{{ url('/physics-home-tutor-kohima') }}">physics home tutor in Kohima</a> page covers the companion
    subject, and the <a href="{{ url('/blog/kohima-home-tuition-guide') }}">Kohima home tuition guide</a> covers every zone.
  </p>
  <p>
    Teach chemistry in Kohima? Families' requests are listed on <a href="{{ url('/tuition-jobs/kohima') }}">Kohima
    tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
