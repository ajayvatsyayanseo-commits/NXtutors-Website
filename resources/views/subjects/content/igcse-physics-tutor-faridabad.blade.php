{{--
  Long-form guide for the "IGCSE physics tutor Faridabad" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named; no school
  counts.

  Syllabus facts are reworded from igcse-physics-tutor-mumbai / igcse-physics-
  tutor-gurgaon, which cite the Cambridge IGCSE Physics 0625 syllabus for 2026,
  2027 and 2028 (cambridgeinternational.org): Paper 1 (Core) / Paper 2
  (Extended) multiple choice, 40 questions, 45 min, 30%; Paper 3 (Core) /
  Paper 4 (Extended) theory, 80 marks, 1 h 15 min, 50%; Paper 5 Practical Test
  (1 h 15 min) or Paper 6 Alternative to Practical (1 h), 40 marks, 20%, chosen
  by the school, same skills and contexts; assessment objective weightings
  50/30/20; calculators in all parts; Core grades C-G, Extended A*-G;
  candidates expected to reach C or above entered for Extended; six topics
  (motion, forces and energy; thermal physics; waves; electricity and
  magnetism; nuclear physics; space physics); "recall and use" equations;
  practical contexts listed in the syllabus; command words published in the
  syllabus. Series: June, November and (India) March, as stated in
  igcse-tutor-mumbai and igcse-maths-tutor-gurgaon. No other dates.

  Board mix only as the Faridabad hub view states it (a smaller group study for
  the IB or Cambridge IGCSE; Cambridge IGCSE rewards command words, Core or
  Extended, practice against mark schemes; online widens the pool for IGCSE).
  No claim about where IGCSE families live. Local detail only from
  database/seo-content/areas/faridabad-research.json, faridabad-zone-guides.json
  and zones/faridabad.json (Sector 9 plotted, Escorts Mujesar, Mathura Road
  slow at peaks; Old Faridabad dense, few gated complexes, metro then auto;
  Sector 18 rental floors, Old Faridabad / Badkhal Mor, Kheri Road; Charmwood
  Village guarded gates, nearest metro Badarpur Border / Tughlakabad; Sector 79
  open-air shopping street crowded in the evening; Sector 86 near the bypass,
  one of the nearer Neharpar sectors, Neelam Chowk Ajronda / Old Faridabad).
  Area links render only for active Faridabad areas. Fee wording is the
  approved sentence. FAQs: faqs/igcse-physics-tutor-faridabad.php.
--}}
@php
  $fgpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fgpA = function (string $slug, string $label) use ($fgpSlugs) {
      return in_array($slug, $fgpSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="fgpGuideTitle">
  <h2 id="fgpGuideTitle">IGCSE physics tutor in Faridabad: tier, practical paper and a steady weekly slot</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics (0625) tests three things at once: knowledge through multiple choice, written explanation
    and calculation in a theory paper, and experimental skill through a practical or written alternative. Each
    candidate sits three papers, and the tier the school chooses decides which grades are possible. In Faridabad, where
    IGCSE is studied by a smaller group than CBSE or the Haryana board, a tutor who knows 0625 well may come from
    another part of the city or teach online. This page from the NXTutors Academic Team explains the papers, the tier
    decision, the six topics, how to prepare for the practical component at home, the habits that protect marks, and
    how tutors reach your sector. It sits under <a href="{{ url('/physics-home-tutor-faridabad') }}">physics home
    tutors in Faridabad</a> and the <a href="{{ url('/igcse-tutor-faridabad') }}">IGCSE tutors in Faridabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fgp-papers">The three papers</a> ·
    <a href="#fgp-tier">Core or Extended</a> ·
    <a href="#fgp-topics">Six topics</a> ·
    <a href="#fgp-practical">Paper 5 or 6</a> ·
    <a href="#fgp-habits">Mark-saving habits</a> ·
    <a href="#fgp-worked">A worked question</a> ·
    <a href="#fgp-plan">Grades 9 and 10</a> ·
    <a href="#fgp-next">After IGCSE</a> ·
    <a href="#fgp-reach">Reaching you</a> ·
    <a href="#fgp-mode">Home or online</a> ·
    <a href="#fgp-demo">The demo</a> ·
    <a href="#fgp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fgp-papers">Which papers does an IGCSE physics candidate sit?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, syllabus for 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Share</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice: 40 questions, 45 minutes</td><td>Paper 1</td><td>Paper 2</td><td>30%</td></tr>
      <tr><td>Theory: 80 marks, 1 hour 15 minutes</td><td>Paper 3</td><td>Paper 4</td><td>50%</td></tr>
      <tr><td>Practical: 40 marks</td><td colspan="2">Paper 5, a practical test of 1 hour 15 minutes, or Paper 6, an Alternative to Practical of 1 hour; the school decides</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators are allowed throughout. Cambridge weights the assessment objectives at 50% knowledge with
    understanding, 30% handling information and solving problems, and 20% experimental skills, so recall alone covers
    only half of the marks. Exams run in June and November, and schools in India can also enter candidates in March.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-tier">Core or Extended: settle the tier early</h2>
  <p>
    Core candidates can be awarded grades C to G; Extended candidates A* to G. Cambridge advises that students expected
    to reach grade C or above be entered for Extended. Extended adds content such as momentum and impulse, and its
    theory paper asks for longer chains of reasoning and harder calculations.
    If your child is near the boundary, ask the school in Grade 9 how and when the tier is decided, and plan tuition so
    the Extended-only content is covered before the mock exams in Grade 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-topics">The six topics and what usually goes wrong</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topics and the weak spot a tutor should look for</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Typical weak spot</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time graphs; turning moments; efficiency; pressure in liquids</td></tr>
      <tr><td>Thermal physics</td><td>Explaining with the particle model; specific heat capacity sums; loose wording about convection</td></tr>
      <tr><td>Waves</td><td>Ray diagrams for lenses; critical angle; uses of each part of the electromagnetic spectrum</td></tr>
      <tr><td>Electricity and magnetism</td><td>Parallel circuits; potential dividers; transformers and induction</td></tr>
      <tr><td>Nuclear physics</td><td>Half-life read from a graph or table; balancing decay equations</td></tr>
      <tr><td>Space physics</td><td>Often left until last in school and then rushed; orbits and the life cycle of stars</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The syllabus asks students to "recall and use" many equations, so there is no shortcut: a tutor should help your
    child build one equation sheet from the syllabus itself, with units, in the first month, and test it a little in
    every session.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-practical">Preparing for Paper 5 or Paper 6 without a school lab</h2>
  <p>
    Paper 5 and Paper 6 assess the same experimental skills in the same contexts; Paper 6 asks about experiments on
    paper rather than having the student do them. The syllabus lists the contexts: measuring lengths, volumes, forces
    and short times; springs and balances; timing motion and oscillations; heating and cooling; circuits to measure
    current and potential difference; and optics with mirrors, lenses, prisms and glass blocks.
  </p>
  <p>
    Most of the marks come from planning and handling data, which can be practised at home: naming the independent and
    dependent variables, saying how others will be kept constant, choosing a sensible range and number of readings,
    drawing a results table with units in the column headings, choosing a graph scale, and judging the method. A spring
    with a few coins in a bag, or a pendulum and a phone stopwatch, is enough to make Paper 6 real. A useful exercise is
    to time ten swings rather than one and ask the student why the answer is more reliable; it brings out the idea of
    uncertainty that the later questions test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-habits">Habits that protect IGCSE physics marks</h2>
  <ol>
    <li><strong>Equation, substitution, answer, unit.</strong> On separate lines, so a slip loses one mark rather than all.</li>
    <li><strong>Command words obeyed.</strong> "State" wants a short answer; "explain" wants a reason; "calculate" wants working. Cambridge publishes the list in the syllabus.</li>
    <li><strong>Significant figures.</strong> Match the data given; do not copy the whole calculator display.</li>
    <li><strong>Graphs.</strong> Sharp pencil, labelled axes with units, points that fill more than half the grid, a single smooth line.</li>
    <li><strong>Multiple choice by elimination.</strong> Cross out the options that break a unit or a basic rule before choosing.</li>
    <li><strong>Past papers marked properly.</strong> Use the published mark schemes, and read the examiner comments that follow each series.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-worked">A theory-paper question, answered the way examiners want</h2>
  <p>
    Consider a typical thermal physics item: an electric kettle of power 2.0 kW heats 0.50 kg of water from 20 °C to
    60 °C, and the specific heat capacity of water is 4200 J/(kg °C). Calculate the energy needed, then the time taken,
    and explain why the real time is longer.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Calculation</h3>
  <p>
    Write the equation first, ΔE = mcΔT, then substitute: 0.50 × 4200 × 40, giving 84 000 J. Next, time = energy ÷
    power = 84 000 ÷ 2000 = 42 s. Each line earns its own mark, and the unit closes each answer.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Explanation</h3>
  <p>
    Energy is also transferred to the kettle itself and to the surroundings by heating, so more than 84 000 J must be
    supplied and the water takes longer than 42 s. One clear cause, stated with the physics words, beats three vague
    ones.
  </p>
    </div>
  </div>
  <p>
    Students who lose marks on items like this usually do so in predictable ways: the temperature change written as
    60 instead of 40, power left in kilowatts, or an explanation that says "heat is lost" without saying where it goes.
    A tutor who marks against the published scheme will point these out each time until they stop.
  </p>
  <p>
    The multiple-choice paper needs its own practice. Forty questions in 45 minutes leaves a little over a minute for
    each, so students should answer the quick recall items first, and mark the calculation items to come back
    to. Timed sets of ten questions, reviewed straight afterwards, build that pace without the fatigue of a
    full paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-plan">How tutoring time is spread across Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical plan for IGCSE physics tuition</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9</td><td>Motion, forces and energy secured; equation sheet built; practical planning introduced</td><td>One</td></tr>
      <tr><td>Grade 10, first half</td><td>Electricity, waves and the remaining topics as school teaches them; topic-wise past questions</td><td>One or two</td></tr>
      <tr><td>Before the mocks</td><td>Timed multiple choice and theory papers; Paper 5 or 6 practice</td><td>Two</td></tr>
      <tr><td>Final weeks</td><td>Full sets of three papers; error log; weak topics revisited</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-next">Before and after IGCSE physics</h2>
  <p>
    Students joining a Cambridge school from CBSE or the Haryana board usually know the physics content but are new to
    the practical paper and to command words, so the first months should focus there. After Grade 10, some students go
    on to the IB Diploma, where Physics adds data-based questions and an internal investigation; our
    <a href="{{ url('/ib-physics-tutor-faridabad') }}">IB physics tutors in Faridabad</a> page explains that stage.
    Others move to an Indian board for Classes 11 and 12, and families weighing that choice can read
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">our Cambridge and Edexcel guide</a> and the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-reach">How IGCSE physics tutors reach different sectors</h2>
  <ul>
    <li><strong><a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a>:</strong> {!! $fgpA('old-faridabad', 'Old Faridabad') !!} has few gated complexes, so tutors come to the door, usually by metro and a short auto because lanes and parking are tight.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">Central sectors</a>:</strong> {!! $fgpA('sector-9', 'Sector 9') !!} is plotted with wide roads, served by Escorts Mujesar; {!! $fgpA('sector-18', 'Sector 18') !!} is reached from Old Faridabad or Badkhal Mor, and Kheri Road gets busy in the evening.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>:</strong> {!! $fgpA('charmwood-village', 'Charmwood Village') !!} has guarded gates, and its nearest metro stations are on the Delhi side, so most tutors arrive by auto, cab or their own vehicle.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, 75 to 80</a>:</strong> {!! $fgpA('sector-79', 'Sector 79') !!} is easy to find thanks to its open-air shopping street, but the roads around it are crowded in the evening, so ask the tutor to allow extra time.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad, 81 to 89</a>:</strong> {!! $fgpA('sector-86', 'Sector 86') !!} is one of the Neharpar sectors nearest the old city, so tutors from both sides of the canal can serve it.</li>
  </ul>
  <p>
    <a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28 to 31 and 37</a> and
    <a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh</a> are on the Violet Line
    too; see the <a href="{{ url('/city/faridabad') }}">Faridabad tutors page</a> for every locality.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-mode">Should IGCSE physics be taught at home or online?</h2>
  <p>
    Online lessons widen the choice of IGCSE specialists, which helps in a smaller group, and most theory and multiple
    choice practice works well on a shared screen. The practical paper is the exception: a tutor in the room can watch
    the student take readings from a spring or time a pendulum and correct the method immediately. A sensible mix is a
    home session every week or two for practical skills and written answers, with online sessions for past-paper work.
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online comparison</a> gives more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-demo">Checklist for the IGCSE physics demo</h2>
  <ol>
    <li><strong>The syllabus code and tier.</strong> The tutor should ask for both before starting.</li>
    <li><strong>Paper 5 or Paper 6.</strong> Ask which the school uses and how the tutor would prepare for it.</li>
    <li><strong>A planning question.</strong> Watch the tutor teach your child to name variables and design a results table.</li>
    <li><strong>Marking.</strong> Give a theory answer your child wrote and see whether the tutor marks it against the published scheme.</li>
    <li><strong>The journey.</strong> Ask how they will reach your sector and what happens on a jammed evening.</li>
  </ol>
  <p>
    We send two or three matched tutors with their fees shown up front; the first class is a free demo, and a later
    change of tutor is free. The Verified badge appears only after the tutor passes our
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fgp-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">Faridabad
    tuition fees</a>.
  </p>
  <p>
    Send the tier, practical paper, exam series, grade, your sector and free slots, then book the
    <a href="{{ url('/demo-class') }}">free demo class</a> or look through <a href="{{ url('/tutors') }}">tutor
    profiles</a>. For the other Cambridge subjects, see <a href="{{ url('/igcse-maths-tutor-faridabad') }}">IGCSE
    maths</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-faridabad') }}">IB and IGCSE chemistry</a> tutors in
    Faridabad.
  </p>
  </section>

  </div>
</article>
