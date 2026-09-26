{{--
  Long-form guide for the "IGCSE physics tutor Gurgaon" page. Byline: NXTutors
  Academic Team. Source: Cambridge IGCSE Physics 0625 syllabus for 2026, 2027
  and 2028 (version 2, December 2025; "no significant changes which affect
  teaching"), cambridgeinternational.org. Components, weightings, grade ranges,
  topic list, AO weightings, practical contexts and calculator rule are taken
  from that document. Schools are the verified Cambridge list from
  maths-home-tutor-gurgaon, named only as schools students attend.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="igpGuideTitle">
  <h2 id="igpGuideTitle">IGCSE physics tutor in Gurgaon: Cambridge 0625 for 2026 to 2028</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics looks friendly on paper: six topics, no calculus, calculators allowed throughout. Students
    who drop marks usually do so in three places: the gap between Core and Extended content, the practical paper, and
    the precise way Cambridge wants answers phrased. A good IGCSE physics tutor works on all three from the start.
    This guide sets out the current 0625 syllabus and papers, the experimental skills that carry a fifth of the grade,
    how to use past papers properly, and how IGCSE physics tuition works for families across Gurugram.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igp-papers">Papers and weightings</a> ·
    <a href="#igp-tier">Core or Extended</a> ·
    <a href="#igp-topics">The six topics</a> ·
    <a href="#igp-practical">Practical skills</a> ·
    <a href="#igp-pastpapers">Past-paper technique</a> ·
    <a href="#igp-mcq">Multiple choice</a> ·
    <a href="#igp-mistakes">Mistakes that cost marks</a> ·
    <a href="#igp-plan">Two-year plan</a> ·
    <a href="#igp-choose">Choosing a tutor</a> ·
    <a href="#igp-schools">Gurugram Cambridge schools</a> ·
    <a href="#igp-next">After IGCSE</a> ·
    <a href="#igp-where">Home, online and fees</a> ·
    <a href="#igp-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igp-papers">IGCSE Physics 0625: the papers and what they are worth</h2>
  <p>
    The 0625 syllabus for examinations in 2026, 2027 and 2028 keeps the familiar structure. Cambridge's latest version
    (December 2025) states there are no significant changes that affect teaching. Every candidate sits three papers:
    a multiple-choice paper, a theory paper, and one practical paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625 components, 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Who sits it</th><th scope="col">Format</th><th scope="col">Time and marks</th><th scope="col">Weighting</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1: Multiple Choice (Core)</td><td>Core</td><td>40 four-option questions</td><td>45 min, 40 marks</td><td>30%</td></tr>
      <tr><td>Paper 2: Multiple Choice (Extended)</td><td>Extended</td><td>40 four-option questions</td><td>45 min, 40 marks</td><td>30%</td></tr>
      <tr><td>Paper 3: Theory (Core)</td><td>Core</td><td>Short-answer and structured questions</td><td>1 h 15 min, 80 marks</td><td>50%</td></tr>
      <tr><td>Paper 4: Theory (Extended)</td><td>Extended</td><td>Short-answer and structured questions</td><td>1 h 15 min, 80 marks</td><td>50%</td></tr>
      <tr><td>Paper 5: Practical Test</td><td>Either tier (school chooses 5 or 6)</td><td>Experiments in a laboratory</td><td>1 h 15 min, 40 marks</td><td>20%</td></tr>
      <tr><td>Paper 6: Alternative to Practical</td><td>Either tier</td><td>Written paper on experimental skills; no experiments</td><td>1 h, 40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Across the qualification, Cambridge weights knowledge with understanding at 50%, handling information and
    problem-solving at 30%, and experimental skills and investigations at 20%. Calculators may be used in all parts of
    the examination. That last point surprises some parents: IGCSE physics is not a mental-arithmetic test, but it is
    a test of setting out a calculation clearly, with units, so that method marks are safe even if the final number
    slips.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-tier">Core or Extended: the decision that caps the grade</h2>
  <p>
    Core candidates (Papers 1, 3 and 5 or 6) can achieve grades C to G. Extended candidates (Papers 2, 4 and 5 or 6)
    can achieve A* to G. Cambridge's guidance is that students expected to reach grade C or above should be entered
    for Extended. In practice the school usually decides the tier during Grade 9 or early Grade 10.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>If your child is on Extended</h3>
  <p>
    The Supplement content adds the harder material in every topic: more equations to recall and use, more
    quantitative reasoning, and multi-step Paper 4 questions. Tuition should cover Supplement points explicitly, not
    assume they follow from the Core.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>If your child is on Core but wants Extended</h3>
  <p>
    It can be done, but it needs a plan: a list of every Supplement learning outcome, taught and tested topic by topic,
    with Paper 2 and 4 past papers as evidence for the school. Start at least two terms before entries close.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-topics">The six topics, and where Gurugram students struggle</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 subject content and common difficulties</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Typical sticking points</th></tr>
    </thead>
    <tbody>
      <tr><td>1. Motion, forces and energy</td><td>Reading speed-time graphs, momentum and impulse (Extended), energy efficiency calculations, pressure in liquids</td></tr>
      <tr><td>2. Thermal physics</td><td>Explaining with particle models, specific heat capacity calculations, precise wording on conduction and convection</td></tr>
      <tr><td>3. Waves</td><td>Ray diagrams for lenses, refraction and critical angle, the electromagnetic spectrum and its uses</td></tr>
      <tr><td>4. Electricity and magnetism</td><td>Series and parallel circuits, potential dividers, electromagnetic induction and transformers</td></tr>
      <tr><td>5. Nuclear physics</td><td>Half-life from data, balancing decay equations, safety precautions</td></tr>
      <tr><td>6. Space physics</td><td>Orbits, the life cycle of stars, and Extended content on the expanding universe; often left too late in school schemes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Throughout the syllabus, learning outcomes say "recall and use the equation". Students are expected to know these
    equations, so a tutor should build a single equation list from the syllabus early and test it regularly, with
    units, rather than leaving it to the final month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-practical">Practical skills: Paper 5 and Paper 6</h2>
  <p>
    Your child's school chooses whether candidates sit the Practical Test (Paper 5) or the Alternative to Practical
    (Paper 6). Cambridge is clear that both require the same experimental skills, the same experimental contexts, and
    test the same assessment objective. Paper 6 simply asks about experiments on paper rather than having students
    carry them out. Students who have done little hands-on work often find Paper 6 hardest, because they have to
    imagine apparatus they have never handled.
  </p>
  <p>The syllabus lists the contexts students should be familiar with, including:</p>
  <ul>
    <li><strong>Measurement.</strong> Lengths, volumes, forces, small distances and short time intervals, reading to the nearest half-scale division and correcting zero errors.</li>
    <li><strong>Springs, balances and timing.</strong> Extension per unit load, timing motion and oscillations.</li>
    <li><strong>Heating and cooling.</strong> Temperature readings and cooling curves.</li>
    <li><strong>Electric circuits.</strong> Connecting and reconnecting circuits, measuring current and potential difference.</li>
    <li><strong>Optics.</strong> Pins, mirrors, prisms, lenses, and rectangular and semicircular glass or Perspex blocks.</li>
  </ul>
  <p>
    And the skills that earn the marks: identifying independent and dependent variables, explaining how variables are
    controlled, choosing a sensible range and number of readings, recording results in a table with units, plotting a
    graph with a good scale, and evaluating the method. A tutor cannot run a physics lab at home, but can draw the
    apparatus with the student, work through real Paper 6 questions, and rehearse the planning question until it is
    routine. Many simple experiments, such as a spring and weights or a pendulum and a stopwatch, are safe to do at
    home and make the paper far less abstract.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-pastpapers">Past-paper technique for IGCSE physics</h2>
  <ul>
    <li><strong>Mark schemes before more papers.</strong> After each paper, the student marks it against the Cambridge mark scheme and rewrites any answer that lost marks. Doing twenty papers without this teaches very little.</li>
    <li><strong>Command words.</strong> "State", "describe", "explain", "suggest" and "calculate" ask for different things. Cambridge publishes the command words in the syllabus, and a tutor should drill them.</li>
    <li><strong>Topic papers first, full papers later.</strong> Topical past-paper practice while teaching; full timed papers in the final months.</li>
    <li><strong>Paper 2 speed.</strong> Forty questions in 45 minutes. Practise a steady pace and a rule for returning to hard items.</li>
    <li><strong>Units and significant figures.</strong> Units on every answer, and a sensible number of significant figures.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-mcq">Multiple-choice technique for Paper 1 or 2</h2>
  <p>
    The multiple-choice paper is 30% of the grade, and it rewards a different skill from the theory paper: quick,
    accurate reasoning with no partial credit. Forty questions in 45 minutes leaves just over a minute each.
  </p>
  <ul>
    <li><strong>Work it out, then look.</strong> For calculation items, solve on the question paper before reading the options; the distractors are usually the answers produced by common slips.</li>
    <li><strong>Eliminate.</strong> In conceptual items, cross out options that break a rule you know (energy conservation, current in series, direction of a force) before choosing.</li>
    <li><strong>Watch units and powers of ten.</strong> Options often differ only by a factor of 10 or 1,000.</li>
    <li><strong>Read diagrams slowly.</strong> Circuit, ray and graph questions hide the key information in the figure.</li>
    <li><strong>Keep a review list.</strong> After each practice paper, log the topic of every wrong answer; patterns tell the tutor what to reteach.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-mistakes">Mistakes that cost marks in IGCSE physics</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Frequent 0625 errors and the habit that fixes each</caption>
    <thead>
      <tr><th scope="col">Mistake</th><th scope="col">Habit that fixes it</th></tr>
    </thead>
    <tbody>
      <tr><td>Answer given without units, or with the wrong prefix (mA, kJ, cm)</td><td>Convert to SI units before substituting; write the unit with every answer</td></tr>
      <tr><td>Equation written without the working shown</td><td>Equation, substitution, answer, on three lines, every time</td></tr>
      <tr><td>Using "weight" and "mass" or "heat" and "temperature" interchangeably</td><td>A glossary of key terms, tested weekly</td></tr>
      <tr><td>Graph axes without labels or units; awkward scales</td><td>A checklist for every graph: labels, units, scale, plotted points, line of best fit</td></tr>
      <tr><td>Explanations that describe but do not explain</td><td>Answering "because…" and linking to particles, forces or energy</td></tr>
      <tr><td>Ray diagrams freehand</td><td>Ruler and sharp pencil; arrows on every ray</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-plan">A two-year plan for IGCSE physics</h2>
  <ul>
    <li><strong>Grade 9, first term.</strong> Motion, forces and energy, since so much of the course depends on it. Start the equation list and the key-terms glossary.</li>
    <li><strong>Grade 9, rest of the year.</strong> Thermal physics and waves in step with school, with topical past-paper questions after each topic and the first Paper 6-style practical questions.</li>
    <li><strong>Grade 10, first half.</strong> Electricity and magnetism, nuclear physics and space physics. Space physics is short but often left late in school schemes, so a tutor makes sure it gets proper attention.</li>
    <li><strong>Grade 10, final months.</strong> Full timed papers, marked against Cambridge mark schemes, with a weekly practical paper and targeted repair of weak topics.</li>
  </ul>
  <p>
    Students joining mid-way, or moving from CBSE or ICSE into an IGCSE school, usually need a few weeks of catch-up on
    topics the new class has already covered; tell us the school's scheme and we look for a tutor who can start there.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-choose">Choosing an IGCSE physics tutor: what to look for in the demo</h2>
  <ol>
    <li><strong>Do they know 0625 specifically?</strong> Ask about Core and Supplement content, and the difference between Papers 5 and 6.</li>
    <li><strong>Do they use mark schemes?</strong> A good IGCSE tutor marks work the way Cambridge does and shows your child where marks went.</li>
    <li><strong>Do they teach the practical paper?</strong> It is 20% of the grade; ask how they prepare students for it.</li>
    <li><strong>Do they make your child write?</strong> Explanations, calculations and graphs, not just listening.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-schools">Gurugram Cambridge schools our IGCSE physics students attend</h2>
  <p>
    These are examples of Gurugram schools offering Cambridge IGCSE that students we help attend: Lancers International
    School, GD Goenka World School, Scottish High International School and Suncity School. NXTutors has no link with
    any of them; boards are as stated on each school's website. Each school sets its own scheme of work and chooses
    between Paper 5 and Paper 6, so tell us what your child's school uses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-next">After IGCSE: IB, A Level or CBSE Class 11</h2>
  <p>
    Many Gurugram IGCSE students move on to the IB Diploma; some move to CBSE for Class 11 to prepare for JEE or NEET.
    Extended IGCSE physics is a good base for IB Physics; see our <a href="{{ url('/ib-physics-tutor-gurgaon') }}">IB
    physics tutor in Gurgaon</a> page. Students moving to CBSE should expect a steeper mathematical treatment, with
    vectors, calculus-based kinematics and derivations; our <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11
    physics</a> page explains the jump.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-where">IGCSE physics tuition across Gurugram: home, online and fees</h2>
  <p>
    Most IGCSE physics requests come from families along {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!},
    in the {!! $ggA('dlf-phase-5', 'DLF Phase 5') !!} and {!! $ggA('dlf-phase-4', 'Phase 4') !!} area, and from newer
    societies such as {!! $ggA('emaar-palm-drive', 'Emaar Palm Drive') !!} and
    {!! $ggA('m3m-urbana-residences-sector-67-gurugram', 'M3M Urbana') !!}, with others from
    {!! $ggA('sector-56', 'Sector 56') !!}, {!! $ggA('sector-57', 'Sector 57') !!} and
    {!! $ggA('south-city-2', 'South City 2') !!}. IGCSE-experienced physics tutors are fewer than CBSE tutors, so online
    or hybrid sessions widen the choice. See all localities on our <a href="{{ url('/city/gurugram') }}">Gurugram
    page</a>.
  </p>
  <p>
    Across NXTutors most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; IGCSE specialists usually sit
    in the middle to upper part of that range, with travel and frequency moving the figure. One or two sessions a week
    is typical, rising before the exam series. See our <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-start">Getting started</h2>
  <p>
    Tell us the grade, Core or Extended, whether the school uses Paper 5 or 6, the exam series, your locality and your
    slots. We shortlist two or three ID-verified IGCSE physics tutors; you choose one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and switching is free. For physics tuition more broadly, see
    our <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page and the
    <a href="{{ url('/physics-home-tutor-gurgaon') }}">physics home tutor in Gurgaon</a> page; for IGCSE chemistry, see
    <a href="{{ url('/ib-igcse-chemistry-tutor-gurgaon') }}">IB and IGCSE chemistry in Gurgaon</a>.
  </p>
  </section>

  </div>
</article>
