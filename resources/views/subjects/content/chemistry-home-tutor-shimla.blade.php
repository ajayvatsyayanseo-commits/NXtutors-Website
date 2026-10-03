{{--
  Long-form guide for the "chemistry home tutor Shimla" page (Classes 11 and
  12: HP Board Plus Two, CBSE, ISC/IB/IGCSE, with NEET and JEE alongside).
  Byline in config: NXTutors Academic Team. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/shimla-research.json.
  HP Board facts only from hpbose.org (read 3 Oct 2026):
  - https://www.hpbose.org/Admin/Upload/Sylla.Chem.12.04.08.2025.pdf : Plus Two
    chemistry, one theory paper of 3 hours and 60 marks; ten chapters
    (solutions, electrochemistry, chemical kinetics, d- and f-block elements,
    coordination compounds, haloalkanes and haloarenes, alcohols phenols and
    ethers, aldehydes ketones and carboxylic acids, amines, biomolecules);
    practical 20 marks: volumetric analysis 5, salt analysis 4, content-based
    experiment 3, class record and viva 3, investigatory project 5; another
    project of about 10 periods of work may be chosen with the teacher's
    approval; prescribed book "Chemistry" published by HPBOSE, Dharamshala.
  - https://www.hpbose.org/ModelQuesPpr.aspx and
    https://www.hpbose.org/SWMkg.aspx : Plus Two chemistry model question
    paper 2026-27 and step-wise marking (2024-25) listed.
  Other exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (chapter marks, branch totals
  23/14/33, 33 questions, 70 + 30, no calculators or log tables, recall
  share, deleted and school-assessed topics, practical 8/8/6/4/4, KMnO4
  titration), neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026)
  and jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026). The
  observation that the HP Board's ten Plus Two chapters match the ten CBSE
  chapters compares those two official lists. No coaching institute, school,
  college, society or people's names, no distances or travel times, only the
  allowed fee sentence. Weather is timing advice only.

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

<article class="nx-guide shmc-guide" aria-labelledby="shmcGuideTitle">
  <h2 id="shmcGuideTitle">Chemistry home tutor in Shimla: ten chapters, two board papers, and the reactions that join them</h2>

  <p class="nx-guide__lede">
    Senior chemistry asks three different things of a student at once: numericals in physical chemistry, trends and
    exceptions in inorganic, and long chains of conversions in organic. A Shimla student in Class 12 meets all three
    whether the paper is set by the Himachal Pradesh board or by CBSE, and often with NEET or JEE alongside. A good
    home tutor turns that spread into one steady weekly routine and checks that each answer is written the way the
    examiner wants it. NXTutors suggests two or three chemistry tutors who know your child's syllabus and can reach your
    locality. Every fee is on screen before you meet anyone, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#shmc-two">Two boards</a> ·
    <a href="#shmc-hp">HP Board practical</a> ·
    <a href="#shmc-cbse">CBSE detail</a> ·
    <a href="#shmc-entrance">NEET and JEE</a> ·
    <a href="#shmc-tools">Three tools</a> ·
    <a href="#shmc-other">ISC, IB, IGCSE</a> ·
    <a href="#shmc-areas">Five localities</a> ·
    <a href="#shmc-fees">Fees</a> ·
    <a href="#shmc-req">Requesting tutors</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="shmc-two">HP Board or CBSE: the same ten chapters, weighed differently</h2>
  <p>
    The Himachal Pradesh Board of School Education, based at Dharamshala, lists ten chapters in its Plus Two chemistry
    syllabus, from solutions and electrochemistry to amines and biomolecules, taught from a Chemistry textbook the
    board publishes. Put that list beside CBSE's for 2026-27 and the chapter titles are the same ten. What differs is
    how each board weighs the theory and the practical, so a tutor who moves between the two must change the
    practice, not the content.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 chemistry on the HP Board and on CBSE: how the marks are divided</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">HP Board Plus Two</th><th scope="col">CBSE Class 12 (043)</th></tr>
    </thead>
    <tbody>
      <tr><td>Theory paper</td><td>One paper, three hours, 60 marks</td><td>Three hours, 70 marks, 33 compulsory questions in five sections</td></tr>
      <tr><td>Practical</td><td>20 marks</td><td>30 marks</td></tr>
      <tr><td>Biggest practical item</td><td>Volumetric analysis and the investigatory project, 5 each</td><td>Titration and salt analysis, 8 each</td></tr>
      <tr><td>Where to check</td><td>Syllabus, model paper and step-wise marking on hpbose.org</td><td>Sample paper and marking scheme on cbseacademic.nic.in</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the full HP Board subject list, see our <a href="{{ url('/himachal-board-tutor-shimla') }}">HP Board tutor in
    Shimla</a> page; for CBSE as a whole, the <a href="{{ url('/cbse-home-tutor-shimla') }}">CBSE home tutor in
    Shimla</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-hp">The HP Board's 20-mark chemistry practical</h2>
  <ul>
    <li><strong>Volumetric analysis, 5 marks.</strong> Readings recorded cleanly and the calculation set out line by line.</li>
    <li><strong>Salt analysis, 4 marks.</strong> The order of tests and the reason each one confirms or rules out an ion.</li>
    <li><strong>Content-based experiment, 3 marks.</strong> Linked to the theory chapters, so it rewards a student who understands the chemistry behind it.</li>
    <li><strong>Class record and viva, 3 marks.</strong> A complete file and confident short answers.</li>
    <li><strong>Investigatory project, 5 marks.</strong> The syllabus allows another project of about ten periods of work if the teacher approves it.</li>
  </ul>
  <p>
    The chemicals stay at school, but a tutor at home can rehearse the logic of salt analysis, check the calculation
    behind each titration, help your child choose a project they can manage alone, and run viva questions. The board
    also lists a 2026-27 Plus Two chemistry model paper and step-wise marking files on hpbose.org; long answers should be
    practised against them, in Hindi or English as your child writes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-cbse">CBSE Class 12 chemistry: marks by chapter, and what has gone</h2>
  <p>
    CBSE attaches marks to each chapter, which makes planning simple. In 2026-27 organic chemistry carries 33 marks:
    aldehydes, ketones and carboxylic acids 8, biomolecules 7, and amines, alcohols with phenols and ethers, and
    haloalkanes with haloarenes 6 apiece. Physical chemistry brings 23 (electrochemistry 9, solutions 7, kinetics 7) and
    inorganic 14 (coordination compounds 7, the d- and f-block 7). Neither calculators nor log tables are allowed, and
    about two-fifths of marks test recall and understanding.
  </p>
  <p>
    The solid state and the p-block groups 15 to 18 have left the syllabus. Surface chemistry, the isolation of
    elements, polymers and chemistry in everyday life are still taught but assessed only in school. The 30-mark practical
    gives 8 each to titration and salt analysis, 6 to a content-based experiment and 4 each to the project and to the
    record with viva; this session's titration uses permanganate against oxalic acid or Mohr's salt, with each
    student weighing and preparing the standard solution. Our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a> and
    the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-entrance">NEET and JEE: where the entrance syllabus parts company with the board</h2>
  <p>
    In 2026, chemistry was 45 of the 180 NEET (UG) questions, worth 180 of 720 marks, and 25 of the 75 questions in JEE
    Main Paper 1, twenty multiple-choice and five numerical. Both gave four marks for a right answer and took one away
    for a wrong one. NEET pays most for exact NCERT statements; JEE leans on mechanisms and multi-step physical
    chemistry. NTA sets these syllabi separately, and some content a board has dropped, including parts of the
    p-block, may still appear, so check the current entrance syllabus before crossing anything out. The
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a>, the
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a> and our
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page help with priorities; the national
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page covers the exam as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-tools">Three things a chemistry tutor should leave behind</h2>
  <p>
    Lessons fade; the right notes do not. By the end of each term, a student working with a good tutor should own
    three documents built week by week:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three study tools a home chemistry tutor should help build, and how each is used</caption>
    <thead>
      <tr><th scope="col">Tool</th><th scope="col">What it holds</th><th scope="col">How it is used</th></tr>
    </thead>
    <tbody>
      <tr><td>Organic route map</td><td>One sheet linking alcohols, carbonyl compounds, acids, amines and haloalkanes, with reagents on the arrows</td><td>Redrawn from memory every fortnight and checked against the textbook</td></tr>
      <tr><td>Inorganic reasons list</td><td>Each trend in the d- and f-block and coordination chapters with the one-line reason behind it</td><td>Quick oral quizzes at the start of a lesson</td></tr>
      <tr><td>Numerical checklist</td><td>The usual traps in solutions, electrochemistry and kinetics: units, powers of ten, signs</td><td>Read before every timed set until it is no longer needed</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each lesson should also end with one board-style "give reasons" answer written and corrected on the spot, so
    entrance work never crowds out the board paper. Class 11 matters too: moles, equilibrium and the first organic
    chapters return in Class 12 and in both entrance exams, and fixing them early is easier than a rescue in the board
    year. See the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-other">ISC, IB and IGCSE chemistry</h2>
  <p>
    ISC marks practical and project work alongside theory and expects a chain of reasoning rather than a memorised
    line. IB Diploma chemistry, at SL or HL, is organised around structure and reactivity, and the internal
    investigation belongs to the student; a tutor may only ask questions about it. IGCSE is entered at Core or
    Extended tier, which the school confirms; our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">IGCSE
    board comparison</a> explains Cambridge and Edexcel. Specialists are fewer, so mention the course first; an online
    specialist plus a nearby tutor for written practice is a workable pair.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-areas">Five Shimla localities: arranging the evening chemistry class</h2>
  <p>
    Hill roads, steps and limited parking shape every visit. Browse tutors by locality on our
    <a href="{{ url('/city/shimla') }}">Shimla page</a>, and keep an online lesson with the same tutor ready for snow
    days and the heaviest rain.
  </p>
  <dl>
    <dt><strong>{!! $shA('sanjauli', 'Sanjauli') !!}</strong></dt>
    <dd>The city's main suburb, with flats, builder floors, houses and plots, and neighbours in Dhalli, Bharari, Lalpani and Bhattakufar, so the pool of nearby tutors is wide. Name a landmark near the Chowk, and keep clear of the office and school rush there.</dd>
    <dt><strong>{!! $shA('jakhu', 'Jakhu') !!}</strong></dt>
    <dd>Steep homes on the slopes below the summit, reached by hill roads and footpaths. Tutors from Lakkar Bazar, Bharari or Sanjauli are the natural match; say whether the last stretch is on foot.</dd>
    <dt><strong>{!! $shA('panthaghati', 'Panthaghati') !!}</strong></dt>
    <dd>Apartments, government housing, builder floors, villas and houses on the highway, with New Shimla, Malyana, Khalini, Kasumpti and Mehli nearby. Register the tutor at a gated project; evening slots are easier once commuter traffic eases.</dd>
    <dt><strong>{!! $shA('khalini', 'Khalini') !!}</strong></dt>
    <dd>A hillside residential ward next to New Shimla, Vikasnagar and Kanlog. Share the building name, a landmark and a phone number, and avoid the office rush towards Chhota Shimla.</dd>
    <dt><strong>{!! $shA('tutikandi', 'Tutikandi') !!}</strong></dt>
    <dd>Home to the inter-state bus terminal on the highway, so tutors from many parts of the city can arrive by bus. Give a precise landmark, because the area around the terminal is busy with buses and taxis.</dd>
  </dl>
  <p>
    The <a href="{{ url('/city/shimla/zone/chhota-shimla-kasumpti-new-shimla') }}">Chhota Shimla, Kasumpti and New
    Shimla</a> zone page and the <a href="{{ url('/blog/shimla-home-tuition-guide') }}">Shimla home tuition guide</a>
    add timing advice for each part of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-fees">What does a chemistry home tutor in Shimla cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names a rate,
    which usually rises with the target exam and the tutor's years on it; the evening journey to your locality and
    the number of weekly sessions matter too. Fees are visible before the demo, and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-shimla') }}">Shimla home tuition fees</a> article explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shmc-req">Requesting chemistry tutors</h2>
  <p>
    Send the class and board, the main exam, the branch that costs your child most marks, any coaching days, your
    locality with a landmark, and the free evenings. You receive two or three chemistry tutors with fees and choose one
    for a <a href="{{ url('/demo-class') }}">free demo class</a>; if the fit is wrong, another demo follows, and changing
    tutor later is free. When nobody suitable can reach you, we suggest an online or part-online plan. NXTutors is based
    in Sector 66, Gurugram, and its tutors also teach online across India; the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page covers other cities, and students taking
    physics too can read the <a href="{{ url('/physics-home-tutor-shimla') }}">physics home tutor in Shimla</a> page.
  </p>
  <p>
    Chemistry teachers living in Shimla can browse open student requests on the
    <a href="{{ url('/tuition-jobs/shimla') }}">Shimla tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
