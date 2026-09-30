{{--
  Long-form guide for the "chemistry home tutor Patna" page (Classes 11 and
  12, NEET and JEE alongside coaching, ISC/IB/IGCSE, Bihar board in general
  terms). Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/patna-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (chapter-wise marks, branch totals
  23/14/33, 33 questions in five sections, no calculators or log tables,
  recall share, topics out of the syllabus and assessed only in school,
  practical scheme 8/8/6/4/4, KMnO4 titration against oxalic acid or Mohr's
  salt with the standard solution weighed by the student, one main Class 12
  exam), neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026
  pattern), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026
  pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge science tiers).
  IB chemistry themes as already stated on the Delhi and Faridabad pages. No
  coaching institute, school, college, society or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Patna area page exists and is active.
--}}
@php
  $ptAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ptA = function (string $slug, string $label) use ($ptAreaSlugs) {
      return in_array($slug, $ptAreaSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ptc-guide" aria-labelledby="ptcGuideTitle">
  <h2 id="ptcGuideTitle">Chemistry home tutor in Patna: one quiet hour a week that turns coaching notes into marks</h2>

  <p class="nx-guide__lede">
    Chemistry is often where a Patna student in a NEET or JEE batch feels busy but unsure. The coaching
    notes grow thicker every week, school moves at its own pace, and the Class 12 board paper asks for written reasons
    that neither has time to practise. A home chemistry tutor can join those three threads: one session that asks what
    was taught this week, checks it was understood, and writes it up the way each exam wants. NXTutors suggests two or
    three chemistry tutors matched to the syllabus on your child's desk and able to reach your part of Patna. You compare their fees before
    meeting anyone, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ptc-share">Chemistry in each exam</a> ·
    <a href="#ptc-weight">Chapters by weight</a> ·
    <a href="#ptc-out">Removed or school-marked</a> ·
    <a href="#ptc-branch">One job per branch</a> ·
    <a href="#ptc-practical">Practical exam</a> ·
    <a href="#ptc-map">Six localities</a> ·
    <a href="#ptc-boards">Other boards</a> ·
    <a href="#ptc-eleven">Class 11</a> ·
    <a href="#ptc-fees">Fees</a> ·
    <a href="#ptc-go">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ptc-share">How much chemistry sits in each exam your child faces?</h2>
  <p>
    A student in Class 12 can be preparing for two or three chemistry tests at once, and each counts its marks
    differently.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry in the exams Patna students take in Class 12: size, format and what it rewards</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Chemistry in it</th><th scope="col">Rewards most</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 (043)</td><td>Three-hour theory paper of 70 marks with 33 compulsory questions, plus a 30-mark practical</td><td>Written reasons, balanced equations and clean numericals</td></tr>
      <tr><td>NEET (UG), as held in 2026</td><td>45 of the 180 questions, carrying 180 of 720 marks, answered on paper</td><td>Fast, exact recall of NCERT statements</td></tr>
      <tr><td>JEE Main 2026, Paper 1</td><td>A third of the 75 questions: twenty to choose from options, five needing a numerical answer</td><td>Mechanisms and multi-stage physical chemistry problems</td></tr>
      <tr><td>Bihar board Intermediate</td><td>Syllabus and paper set by the Bihar School Examination Board</td><td>Whatever the board's current scheme sets out on its official website</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Both NTA exams in 2026 added four marks for a correct answer and took away one for a wrong answer. NTA publishes
    the pattern afresh each year, so read the latest bulletin. For deeper reading, see the
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a>, our
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a> and the
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-weight">Which CBSE Class 12 chemistry chapters are worth the most?</h2>
  <p>
    In chemistry, CBSE fixes the marks chapter by chapter, which makes planning easier. In the
    2026-27 curriculum, with the paper design unchanged from last session, the ten chapters rank like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 CBSE chemistry for 2026-27: all ten theory chapters in order of marks, with the kind of practice each needs</caption>
    <thead>
      <tr><th scope="col">Marks</th><th scope="col">Chapter</th><th scope="col">Branch</th><th scope="col">Practice that pays</th></tr>
    </thead>
    <tbody>
      <tr><td>9</td><td>Electrochemistry</td><td>Physical</td><td>Cell and conductance numericals, units on each line</td></tr>
      <tr><td>8</td><td>Aldehydes, Ketones and Carboxylic Acids</td><td>Organic</td><td>Named reactions and conversions, written as chains</td></tr>
      <tr><td>7</td><td>Solutions</td><td>Physical</td><td>Colligative-property problems</td></tr>
      <tr><td>7</td><td>Chemical Kinetics</td><td>Physical</td><td>Rate laws, order and half-life calculations</td></tr>
      <tr><td>7</td><td>The d- and f-Block Elements</td><td>Inorganic</td><td>Trends explained in one clear reason each</td></tr>
      <tr><td>7</td><td>Coordination Compounds</td><td>Inorganic</td><td>Naming, isomers and bonding pictures</td></tr>
      <tr><td>7</td><td>Biomolecules</td><td>Organic</td><td>Short definitions and structures</td></tr>
      <tr><td>6</td><td>Haloalkanes and Haloarenes</td><td>Organic</td><td>Substitution and elimination, step by step</td></tr>
      <tr><td>6</td><td>Alcohols, Phenols and Ethers</td><td>Organic</td><td>Distinguishing tests and preparation routes</td></tr>
      <tr><td>6</td><td>Amines</td><td>Organic</td><td>Basicity comparisons and conversions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Added up by branch, organic chemistry is worth 33 marks, physical 23 and inorganic 14. Candidates get three hours for five
    lettered sections, a few questions offer an internal choice, and no calculator or log table may be taken in.
    About two-fifths of the paper checks recall and understanding, while the rest wants the student to apply,
    analyse or evaluate. A chapter-by-chapter treatment is in our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 organic and inorganic
    chemistry</a>, and a board-year plan is on the <a href="{{ url('/chemistry-home-tutor/class-12') }}">chemistry tutor
    for Class 12</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-out">Which topics are gone from the board paper, and which still matter for NEET or JEE?</h2>
  <p>
    For 2026-27, two areas have been taken out of Class 12 entirely: the solid state, and Groups 15 to 18 of the
    p-block. A further four are still taught but are left to the school to assess and never appear on the board paper:
    surface chemistry, the isolation of elements from ores, polymers, and chemistry in everyday life.
  </p>
  <p>
    Coaching students should be careful here. The entrance syllabi are released separately by NTA, and some material
    the board has dropped, including parts of the p-block, can still be examined there. Check the official entrance
    list before crossing anything off, and use the board list only for board revision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-branch">Beside a coaching batch, what should the home tutor do in each branch?</h2>
  <p>
    The weekly home session should follow the coaching chapter, not race ahead of it, and give each branch the kind of
    attention a large batch cannot:
  </p>
  <ul>
    <li><strong>Physical chemistry: slow numericals.</strong> Solutions, electrochemistry and kinetics are where a coaching student often knows the formula but loses the mark on a unit or a power of ten. The tutor watches one or two problems being solved line by line.</li>
    <li><strong>Organic chemistry: the reaction map.</strong> A single sheet joining each functional group to the next, from alcohols through carbonyl compounds and acids to amines, redrawn from memory every week and compared with NCERT. Conversions then become routes on a map rather than facts to cram.</li>
    <li><strong>Inorganic chemistry: exact lines.</strong> NEET in particular rewards the precise NCERT sentence. A tutor can quiz straight from the textbook in short bursts and ask for the reason behind each trend.</li>
  </ul>
  <p>
    Close every session with a pair of board-style "give reasons" questions, corrected before the tutor leaves, so
    the Class 12 paper keeps pace with entrance work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-practical">How much of the 30-mark practical exam can be prepared at home?</h2>
  <p>
    More than most families assume. Of the 30, titration and salt analysis are worth 8 each; an experiment based on
    theory content earns 6; and 4 each go to the project and to the record taken together with the viva. This
    session's titration pits a permanganate solution against oxalic acid or Mohr's salt (ferrous ammonium
    sulphate), and each student weighs and makes up that standard solution personally.
  </p>
  <p>
    Chemicals and glassware stay at school, yet a home tutor can still rehearse the molarity working for the weighed
    sample, a tidy table of burette readings leading to the result, the logic of salt analysis from first tests to
    confirmatory ones, a project topic the student can genuinely manage, and viva favourites such as why no extra
    indicator is added when permanganate is used.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-map">What does your locality change for an evening chemistry class in Patna?</h2>
  <p>
    Six localities across the centre, the west and the south of the city show the practical differences. Browse tutors
    by locality on our <a href="{{ url('/city/patna') }}">Patna page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening chemistry tuition in six Patna localities: the setting, the way in, and one tip</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Setting</th><th scope="col">Way in</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ptA('kidwaipuri', 'Kidwaipuri') !!}</td><td>A small planned colony, also called P&amp;T Colony, next to Nageshwar Colony and Buddha Colony</td><td>Low-rise buildings and houses; arrival at the door or a single gate</td><td>Its central spot suits tutors from Boring Road, Anandpuri and the Patliputra side</td></tr>
      <tr><td>{!! $ptA('shastri-nagar', 'Shastri Nagar') !!}</td><td>Flats and builder floors in small and mid-sized buildings near Bailey Road</td><td>Often just a call to the family from the gate</td><td>Bailey Road crowds at office hours, so set the class after the evening peak</td></tr>
      <tr><td>{!! $ptA('rukanpura', 'Rukanpura') !!}</td><td>Two- and three-bedroom flats in the West End, home to Patliputra Junction</td><td>A guard usually asks for the flat number</td><td>Metro works on Bailey Road can slow travel, so allow margin in the first weeks</td></tr>
      <tr><td>{!! $ptA('kadamkuan', 'Kadamkuan') !!}</td><td>A central mix of flats, builder floors and plots near the main station and markets</td><td>Two-wheelers suit it; parking is limited</td><td>Give a precise lane landmark and keep the timing fixed</td></tr>
      <tr><td>{!! $ptA('ashok-rajpath', 'Ashok Rajpath') !!}</td><td>Older houses near the market frontage of the historic riverside road</td><td>By two-wheeler; the riverfront expressway links to it at several points</td><td>Avoid the hours when the colleges along the road open and close</td></tr>
      <tr><td>{!! $ptA('gardanibagh', 'Gardanibagh') !!}</td><td>An established locality near the Secretariat, with a large state housing project and private flats</td><td>Campuses and buildings check visitors; share block and flat number</td><td>An early-evening slot with a tutor from Gardanibagh or nearby Kidwaipuri works well</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Close to the pre-boards, if a route turns unreliable, switching one of the weekly visits to an online lesson
    protects the revision plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-boards">Bihar board, ISC, IB or IGCSE chemistry: can you find a tutor?</h2>
  <ul>
    <li><strong>Bihar board:</strong> the Bihar School Examination Board sets its own Intermediate syllabus and changes it from time to time, so we give no pattern here; the board's official website is the reference. Ask for a tutor who teaches from the prescribed book and explains in the language your child answers in.</li>
    <li><strong>ISC:</strong> CISCE pairs the theory paper with practical and project work, and good answers explain more than a single NCERT-style line.</li>
    <li><strong>IB Diploma:</strong> offered at SL and HL, with the course organised under two themes, structure and reactivity. Only the student may shape the scientific investigation; a tutor can ask questions about it, nothing more.</li>
    <li><strong>Cambridge IGCSE:</strong> science papers come in Core and Extended tiers, and our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">comparison of Cambridge and Edexcel IGCSE</a> sets out how they differ.</li>
  </ul>
  <p>
    Specialists for ISC, IB and IGCSE are fewer than for CBSE, so ask early. When none can travel to you, pair an
    online specialist with a local tutor who marks the written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-eleven">Why is Class 11 the cheaper year to fix chemistry?</h2>
  <p>
    Class 12 stands on Class 11. The mole concept, equilibrium and the first organic chapters return in solutions,
    electrochemistry and every conversion question, and gaps there cost marks a year later in both the board paper
    and the entrance tests. A term spent making those foundations solid is usually less expensive than repairing them
    in the board year. Read more on the <a href="{{ url('/chemistry-home-tutor/class-11') }}">chemistry tutor for Class 11</a>
    page, or see how we match elsewhere on the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home
    tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-fees">What does a chemistry home tutor in Patna cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names their
    own rate. Expect it to climb with the exam being targeted and the tutor's record with that exam; the evening trip to
    your locality and the weekly number of sessions matter too. The same tutor may quote less for online lessons.
    Every fee is visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptc-go">What should you send us for a chemistry shortlist?</h2>
  <p>
    Send the class, the syllabus, your child's main exam, the branch that loses marks, the coaching days, your
    locality and a landmark, and the free evenings. Back comes a list of two or three chemistry tutors with fees, and
    you pick whom to meet at a free demo class. A wrong first pick leads to a second demo, and changing tutor later
    costs nothing. If no suitable tutor can reach you, an online or part-online arrangement is proposed.
    NXTutors has its office in Sector 66, Gurugram, and teaches online all over India.
  </p>
  <p>
    Chemistry teachers who live in Patna and want to teach close to home can browse open requests on the
    <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
