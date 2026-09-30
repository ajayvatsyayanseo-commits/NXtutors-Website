{{--
  Long-form guide for the "chemistry home tutor Pune" page (Classes 11 and 12,
  NEET and JEE, ISC/IB/IGCSE, Maharashtra HSC in general terms). Byline in
  config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/pune-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements already used on the Delhi
  chemistry page, taken from database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (chapter marks, branch totals
  23/14/33, 33 questions in five sections, no calculators or log tables,
  recall share, topics removed or school-assessed, practical scheme
  8/8/6/4/4, KMnO4 titration against oxalic acid or Mohr's salt, standard
  solution weighed by the student), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main
  2026) and cambridge-vs-edexcel-igcse-gurgaon (tiers). IB chemistry themes
  as stated on the Delhi and Faridabad pages. No school, society, mall or
  people's names, no roads named after people, no distances or travel times,
  only the allowed fee sentence.

  Area links render only when that Pune area page exists and is active.
--}}
@php
  $pcAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pcA = function (string $slug, string $label) use ($pcAreaSlugs) {
      return in_array($slug, $pcAreaSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pnc-guide" aria-labelledby="pncGuideTitle">
  <h2 id="pncGuideTitle">Chemistry home tutor in Pune: know which branch is leaking marks, then plan the week around it</h2>

  <p class="nx-guide__lede">
    Chemistry in Classes 11 and 12 is three subjects under one name. Physical chemistry is numerical, organic is a
    web of conversions and mechanisms, and inorganic rewards precise recall, and a student can be strong in one while
    losing marks steadily in another. A chemistry home tutor in Pune should find the weak branch quickly, know what
    NEET or JEE adds to the board syllabus, and fit a session between school, coaching and the ride home. We put
    forward two or three chemistry tutors suited to your child's course and neighbourhood, with fees listed up front,
    and your first lesson with the chosen one is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pnc-branch">Three branches</a> ·
    <a href="#pnc-paper">The board paper</a> ·
    <a href="#pnc-entrance">NEET and JEE</a> ·
    <a href="#pnc-near">Six neighbourhoods</a> ·
    <a href="#pnc-lab">Titration and salts</a> ·
    <a href="#pnc-courses">ISC, IB, IGCSE, HSC</a> ·
    <a href="#pnc-rhythm">Sessions a week</a> ·
    <a href="#pnc-fees">Fees</a> ·
    <a href="#pnc-begin">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pnc-branch">Which branch of chemistry is costing your child marks?</h2>
  <p>
    CBSE fixes Class 12 chemistry marks for every chapter, which makes it easy to see where the weight sits. Here
    are the ten examined chapters of 2026-27, heaviest first, with the branch each belongs to:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry theory, 2026-27: chapters sorted by marks, with their branch and a common slip</caption>
    <thead>
      <tr><th scope="col">Chapter</th><th scope="col">Branch</th><th scope="col">Marks</th><th scope="col">A common slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrochemistry</td><td>Physical</td><td>9</td><td>Logs handled carelessly without a calculator; units lost in cell calculations</td></tr>
      <tr><td>Aldehydes, Ketones and Carboxylic Acids</td><td>Organic</td><td>8</td><td>Named reactions remembered without their reagents or conditions</td></tr>
      <tr><td>Solutions</td><td>Physical</td><td>7</td><td>Mixing up molality and molarity in colligative problems</td></tr>
      <tr><td>Chemical Kinetics</td><td>Physical</td><td>7</td><td>Order and molecularity confused; half-life steps skipped</td></tr>
      <tr><td>The d- and f-Block Elements</td><td>Inorganic</td><td>7</td><td>Vague reasons for trends in colour or oxidation states</td></tr>
      <tr><td>Coordination Compounds</td><td>Inorganic</td><td>7</td><td>Naming rules and isomer counts done in a hurry</td></tr>
      <tr><td>Biomolecules</td><td>Organic</td><td>7</td><td>Definitions learnt loosely, structures not drawn</td></tr>
      <tr><td>Haloalkanes and Haloarenes</td><td>Organic</td><td>6</td><td>SN1 and SN2 mixed up</td></tr>
      <tr><td>Alcohols, Phenols and Ethers</td><td>Organic</td><td>6</td><td>Acidity order stated with no reason</td></tr>
      <tr><td>Amines</td><td>Organic</td><td>6</td><td>Basicity order and test reactions muddled</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Add the rows up and organic chemistry holds 33 of the 70 theory marks, physical 23 and inorganic 14. Conversion
    chains therefore belong in every week, and because electrochemistry leads the list and is largely numerical, its
    problems should appear early rather than in the last month. The
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 organic and inorganic
    chemistry</a> takes each chapter in turn, and our <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12
    chemistry tutor</a> page sets out the whole year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-paper">What should you know about the 2026-27 theory paper?</h2>
  <p>
    Paper 043 is a three-hour, 70-mark theory paper. All 33 of its questions must be attempted, spread over five
    sections lettered A to E, and a few offer an internal choice. Neither calculators nor log tables may be used, and
    this session's design repeats last year's. Roughly 40% of the marks go to remembering and understanding; the rest
    ask a student to apply, analyse or evaluate.
  </p>
  <p>
    Inherited notes can cost weeks. Two areas are gone from the Class 12 syllabus entirely: the solid state, and the
    p-block from Group 15 to Group 18. Four others are still taught but marked only in school, never on the board
    paper: polymers, everyday chemistry, surface chemistry, and isolating elements from their ores. Class 12
    also rests on Class 11 work, above all the mole concept, equilibrium and the opening organic chapters; the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page deals with that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-entrance">How does NEET or JEE change chemistry tuition?</h2>
  <p>
    In 2026, NEET (UG) was a single written test on paper: 180 questions, 720 marks, with chemistry supplying 45 of
    the questions and 180 of the marks. JEE Main that year gave chemistry 25 questions in Paper 1, split into 20
    multiple-choice items and 5 whose answer is a number. Each correct response earned four marks and each wrong one
    cost a mark in both tests. The pattern is set again every year, so go by NTA's latest bulletin. Entrance syllabi
    are also NTA's own, which means chapters CBSE has cut, including the later p-block groups, may still be tested.
  </p>
  <p>
    For NEET the premium is speed and precision on NCERT lines, so inorganic facts and organic reactions are
    quizzed directly from the textbook. JEE goes deeper: every arrow of a mechanism explained, and physical chemistry
    questions that chain two or three ideas together. Whichever test is in view, the student should be able to write
    a full board answer on a chapter before attempting its entrance problems, and the two can happen in one week. Useful reading: the <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">key
    NEET chemistry chapters</a>, the <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry
    guide</a>, our <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching or home
    tutor</a> comparison and the <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-near">What does your neighbourhood change for a chemistry class?</h2>
  <p>
    Class 12 chemistry is written work, usually fitted in after school or coaching. Six neighbourhoods from six
    different zones show how the practical side varies. Compare tutors near you on our
    <a href="{{ url('/city/pune') }}">Pune page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening chemistry tuition in six Pune neighbourhoods: part of the city, homes and the practical detail to sort</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Part of Pune</th><th scope="col">Homes</th><th scope="col">Getting there, and what to sort</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pcA('erandwane', 'Erandwane') !!}</td><td>Central-west</td><td>Mostly apartments, with older bungalows on tree-lined lanes</td><td>Paud Phata on the Aqua Line is at its edge; parking on narrow lanes is tight, so a two-wheeler suits regular visits</td></tr>
      <tr><td>{!! $pcA('balewadi', 'Balewadi') !!}</td><td>West</td><td>High-rise apartment complexes and gated societies</td><td>Line 3 stations are planned but not open; tutors come by road from Baner, Wakad or Aundh. Allow for evening traffic from the Hinjewadi side</td></tr>
      <tr><td>{!! $pcA('pimpri', 'Pimpri') !!}</td><td>Pimpri-Chinchwad</td><td>Older buildings near the market and newer apartment complexes</td><td>PCMC Bhavan on the Purple Line and Pimpri suburban station make it easy to reach from central Pune; avoid shift-change hours on the highway</td></tr>
      <tr><td>{!! $pcA('yerawada', 'Yerawada') !!}</td><td>North of the river</td><td>Independent houses, builder floors and newer apartments in distinct pockets</td><td>Yerwada station on the Aqua Line opened in August 2024; junctions near the river bridges are busy at office times</td></tr>
      <tr><td>{!! $pcA('kondhwa', 'Kondhwa') !!}</td><td>South</td><td>Cooperative societies, mid-rise apartments, townships and villas</td><td>No metro; tutors come by two-wheeler, bus or auto. Townships need gate registration</td></tr>
      <tr><td>{!! $pcA('sinhagad-road', 'Sinhagad Road') !!}</td><td>South-west</td><td>Apartment complexes along the road, home to many families and students</td><td>No metro on the road itself; a long flyover now carries the busiest stretch. Start before or after the peak</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In the busy weeks before the pre-boards, a mix of two lessons at home and one online protects the timetable when
    roads or coaching run late.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-lab">What can be prepared at home for titration and salt analysis?</h2>
  <p>
    Thirty marks ride on the practical exam. Volumetric analysis and salt analysis earn 8 each, an experiment based
    on the theory content 6, the project 4, and the record with the viva a combined 4. For 2026-27 the titration is
    between potassium permanganate and a standard solution that the student makes up after weighing it: either
    oxalic acid or ferrous ammonium sulphate, better known as Mohr's salt.
  </p>
  <p>
    No chemicals come home, yet plenty can be rehearsed at a desk. A tutor can drill the arithmetic that turns a
    weighed mass into molarity, set out a tidy table of burette readings leading to the result, and walk through salt
    analysis in sequence, from the first dry tests to the confirmatory ones, explaining why each comes where it does.
    Choosing a project the student can finish alone, and practising viva questions such as why permanganate acts as
    its own indicator, complete the preparation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-courses">Are ISC, IB, IGCSE and HSC chemistry tutors available in Pune?</h2>
  <p>
    Yes, though fewer than CBSE tutors, so ask early and name the course exactly.
  </p>
  <ul>
    <li><strong>ISC:</strong> CISCE examines theory alongside practical and project work, and expects answers that reason more fully than a brief NCERT line.</li>
    <li><strong>IB Diploma:</strong> offered at SL or HL and organised under two themes, structure and reactivity. The scientific investigation belongs to the student alone; a tutor can probe the plan with questions but contributes nothing to it.</li>
    <li><strong>Cambridge IGCSE:</strong> sat at Core or Extended tier. Anyone moving to Class 11 on an Indian board afterwards usually benefits from early work on the mole, atomic structure and first organic ideas. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> comparison explains the tiers.</li>
    <li><strong>Maharashtra HSC:</strong> the state board sets its own Class 12 syllabus and papers. We keep advice general: the tutor should teach from the prescribed textbook and take any exam detail from the board's official notices.</li>
  </ul>
  <p>
    When the specialist lives too far away, combine online lessons with that specialist and home visits from a
    local tutor who checks written work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-rhythm">How many chemistry sessions a week make sense?</h2>
  <p>
    It depends on the target more than the class:
  </p>
  <ol>
    <li><strong>Board only, steady marks:</strong> one session a week, spent on the weakest branch, plus a short written task in between.</li>
    <li><strong>Board with a clear gap:</strong> two sessions, one teaching and one practice, until the weak branch reaches the level of the others.</li>
    <li><strong>Board with NEET or JEE:</strong> two sessions, the second built on timed entrance questions from the chapter just finished at board standard.</li>
  </ol>
  <p>
    Whatever the rhythm, look in the notebook once a month for balanced equations with conditions, units on every
    numerical line and a reaction map that grows chapter by chapter. Should they still be absent at the half-yearly
    stage, tell the tutor, or tell us and we will set up a demo with someone else.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-fees">What do chemistry home tutors in Pune charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates. Expect the figure to climb with the level of the exam and how long the tutor has taught it, and to reflect
    the evening trip to your zone and how many lessons you book each week. The same tutor may charge less online. You see every fee before
    the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnc-begin">How do you get matched with a chemistry tutor?</h2>
  <p>
    Tell us your child's class and chemistry course, which exam counts most, the branch that keeps losing marks, your
    neighbourhood and the evenings you have free. A shortlist of two or three chemistry tutors comes back with fees
    attached; choose one and the first class is a free demo. A poor fit means a further demo with someone else, and
    switching later is free as well. If no suitable tutor can reach your area, an online or part-online plan is the
    fallback. NXTutors has its office in Sector 66, Gurugram, and teaches online all over India; our national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page covers other cities.
  </p>
  <p>
    Chemistry teachers in Pune looking for students close by can view open requests on the
    <a href="{{ url('/tuition-jobs/pune') }}">Pune tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
