{{--
  Long-form guide for the "IGCSE physics tutor Jaipur" page. Byline: NXTutors
  Academic Team. No schools, coaching institutes, societies or people are
  named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon /
  igcse-physics-tutor-mumbai, which cite the Cambridge IGCSE Physics 0625
  syllabus for 2026, 2027 and 2028 (version 2, December 2025, no significant
  changes affecting teaching; cambridgeinternational.org): Paper 1 (Core) /
  Paper 2 (Extended) multiple choice, 40 questions, 45 min, 30%; Paper 3
  (Core) / Paper 4 (Extended) theory, 80 marks, 1 h 15 min, 50%; Paper 5
  Practical Test (1 h 15 min) or Paper 6 Alternative to Practical (1 h), 40
  marks, 20%, chosen by the school, same skills and contexts; AO weightings
  50/30/20; calculators in all parts; Core C-G, Extended A*-G; candidates
  expected to reach C or above entered for Extended; six topics; "recall and
  use" equations; practical contexts and skills listed in the syllabus;
  command words published in the syllabus. June, November and (India) March
  series as stated in igcse-tutor-mumbai and igcse-maths-tutor-gurgaon. No
  other dates.

  RBSE note: rajeduboard.rajasthan.gov.in Class 10 syllabus 2026-27
  (10_2027.pdf, read 2 Oct 2026): physics chapters light - reflection and
  refraction (8), human eye and the colourful world (4), electricity (7),
  magnetic effects of electric current (6), in an 80-mark science paper of
  3 h 15 min; NCERT science book prescribed.

  Local detail only from database/seo-content/zones/jaipur.json,
  areas/jaipur-research.json, areas/jaipur-zone-guides.json and the city hub
  (IGCSE a smaller group; online reach matters most for IGCSE). Area links
  render only for active Jaipur areas. Fee wording is the approved sentence.
  FAQs render from faqs/igcse-physics-tutor-jaipur.php.
--}}
@php
  $igpjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igpjA = function (string $slug, string $label) use ($igpjSlugs) {
      return in_array($slug, $igpjSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="igpjGuideTitle">
  <h2 id="igpjGuideTitle">IGCSE physics tutors in Jaipur: Cambridge 0625, the tier, and the practical paper</h2>

  <p class="nx-guide__lede">
    Students seldom drop IGCSE Physics marks on the big ideas. The losses are smaller and more frequent: a Supplement
    equation that was never memorised, a table of readings with no units, a "describe" answer handed in for an
    "explain" question, or a practical paper built around equipment the student has barely touched. Cambridge families
    in Jaipur are fewer than CBSE or RBSE families, so it pays to ask specifically for someone who knows the 0625 papers
    and will chase those details week after week. Below: the 0625 syllabus for the 2026–2028 series, its papers and
    tiers, a comparison with the physics a CBSE or RBSE student covered in Class 10, the practical component, and how
    tutors reach each zone. Related pages are our <a href="{{ url('/physics-home-tutor-jaipur') }}">physics home tutors
    in Jaipur</a> guide and the <a href="{{ url('/igcse-tutor-jaipur') }}">IGCSE tutors in Jaipur</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igpj-papers">What a candidate sits</a> ·
    <a href="#igpj-tier">The tier</a> ·
    <a href="#igpj-topics">Six topics, two backgrounds</a> ·
    <a href="#igpj-equations">Equations and wording</a> ·
    <a href="#igpj-practical">Paper 5 or 6</a> ·
    <a href="#igpj-mcq">The multiple-choice paper</a> ·
    <a href="#igpj-zones">Tutors by zone</a> ·
    <a href="#igpj-mode">Home or online</a> ·
    <a href="#igpj-plan">Grades 9 and 10</a> ·
    <a href="#igpj-next">After IGCSE</a> ·
    <a href="#igpj-demo">The demo</a> ·
    <a href="#igpj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igpj-papers">What every 0625 candidate sits</h2>
  <p>
    Cambridge's December 2025 update to the syllabus for 2026, 2027 and 2028 says nothing in it significantly changes
    teaching. Each candidate takes three components:
  </p>
  <ul>
    <li><strong>Multiple choice, 30 percent.</strong> Forty questions in 45 minutes: Paper 1 for Core, Paper 2 for Extended.</li>
    <li><strong>Theory, 50 percent.</strong> Short-answer and structured questions worth 80 marks in 1 hour 15 minutes: Paper 3 for Core, Paper 4 for Extended.</li>
    <li><strong>Practical, 20 percent.</strong> Either Paper 5, a Practical Test of 1 hour 15 minutes, or Paper 6, an Alternative to Practical of 1 hour, each out of 40. The school chooses which.</li>
  </ul>
  <p>
    Overall, half the credit is for knowing and understanding, 30 percent for using information and solving
    problems, and 20 percent for experimental skill. A calculator is permitted in every component, which shifts the
    marks onto how a calculation is set out: the formula, the numbers put in, the result, and its unit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-tier">The tier decides the grade range</h2>
  <p>
    On Core the available grades run from C down to G; on Extended, from A* down to G. Cambridge recommends Extended
    for anyone likely to achieve at least a C. Most schools fix the tier during Grade 9 or at the start of Grade 10. An
    Extended student needs the Supplement material taught directly in each topic, extra equations included, and plenty
    of the longer Paper 4 questions. Moving a Core student up is possible: list every Supplement statement, teach and
    test each one, and collect Extended-standard work for the school, beginning two terms or more before the entry
    deadline.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-topics">Six topics, seen from a CBSE or RBSE background</h2>
  <p>
    A student who joins a Cambridge school from an Indian board brings some physics with them. The Rajasthan Board's
    current Class 10 science syllabus, taught from the NCERT book, gives physics four chapters: light (reflection and
    refraction), the human eye and the colourful world, electricity, and magnetic effects of current. Set against the
    six 0625 topics, the picture looks like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topics beside the Class 10 NCERT physics chapters</caption>
    <thead>
      <tr><th scope="col">0625 topic</th><th scope="col">Class 10 NCERT chapters touch it?</th><th scope="col">Where students usually stumble</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>No</td><td>Reading distance and speed graphs; impulse and momentum (Extended); liquid pressure</td></tr>
      <tr><td>Thermal physics</td><td>No</td><td>Particle-model explanations; specific heat capacity; precise words for conduction and convection</td></tr>
      <tr><td>Waves</td><td>Partly: light, lenses and the eye</td><td>Freehand ray diagrams; total internal reflection; where each part of the electromagnetic spectrum is used</td></tr>
      <tr><td>Electricity and magnetism</td><td>Partly: circuits and magnetic effects</td><td>Potential dividers; induction and transformers</td></tr>
      <tr><td>Nuclear physics</td><td>No</td><td>Half-life from data; balanced decay equations</td></tr>
      <tr><td>Space physics</td><td>No</td><td>Orbital motion, how stars evolve, and (Extended) evidence that the universe is expanding</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    So a newcomer is usually stronger in optics and circuits than in mechanics or thermal physics, and has not met
    the space topic in Class 10 at all. A tutor's first job is a written audit against the syllabus, then teaching the missing topics
    before past papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-equations">Equations to recall, and words that score</h2>
  <p>
    The syllabus says "recall and use" for many equations, so students must know them without a formula sheet. We ask
    tutors to draw up, early in Grade 9, a single sheet of every equation the syllabus names, each with its units, and
    to quiz it fortnightly.
    The command words, which Cambridge publishes in the syllabus, need the same treatment: "state" wants a fact,
    "describe" wants what happens, "explain" wants why, "suggest" wants a reasoned idea for an unfamiliar case, and
    "calculate" wants working.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Habits that protect IGCSE physics marks</caption>
    <thead>
      <tr><th scope="col">Habit</th><th scope="col">Marks it protects</th></tr>
    </thead>
    <tbody>
      <tr><td>Convert mA, kJ or cm to SI units before substituting</td><td>Calculation marks lost to unit slips</td></tr>
      <tr><td>Answer "explain" with a "because" that links to particles, forces or energy</td><td>Explanation marks lost to plain description</td></tr>
      <tr><td>A short glossary test each fortnight</td><td>Marks lost by mixing up mass and weight, or heat and temperature</td></tr>
      <tr><td>Graphs checked for labels, units, scale and a smooth line</td><td>Easy marks on the theory and practical papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-practical">Paper 5 or Paper 6: practical skills without a school lab</h2>
  <p>
    Cambridge designs the two options to be interchangeable: the skills and settings match, and Paper 6 simply has the
    student reason about an experiment instead of carrying it out. The syllabus names the settings. Students should
    expect to measure length, volume, force, tiny distances and brief time intervals with suitable precision; work with
    springs and balances; time moving objects and swinging pendulums; follow a heating or cooling curve; wire up
    circuits to read current and p.d.; and trace light with pins, mirrors, prisms, lenses and transparent blocks.
  </p>
  <p>
    Most of the marks are for planning and recording, which need no laboratory: naming the variable that is changed
    and the one that is measured, explaining how the rest are held constant, picking a sensible range and number of
    readings, heading table columns with units, choosing a graph scale, and criticising the method. Simple kit such as
    a pendulum timed with a phone, or a spring loaded with a few weights, costs little, is safe, and makes written
    practical questions concrete. The planning question in particular should be practised until it feels automatic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-mcq">The multiple-choice paper</h2>
  <p>
    Forty questions in 45 minutes leaves just over a minute each, with no partial credit. For calculations, work the
    answer out before reading the options, since wrong options are often the results of common slips. For concepts,
    cross off any option that contradicts a principle you are sure of. After every practice paper, log the topic of each wrong answer; that
    log tells the tutor what to reteach.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-zones">IGCSE physics tutors by zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a Cambridge physics tutor reaches each part of Jaipur</caption>
    <thead>
      <tr><th scope="col">Zone and locality</th><th scope="col">Usual route</th><th scope="col">Before the first visit</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">North</a>: {!! $igpjA('sikar-road', 'Sikar Road') !!}</td><td>Scooter or auto along the highway; Orange Line stops at Harmada and Todi Mod are planned, not open</td><td>Say which end of the corridor you live on; townships register visitors at the gate</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">East and south-east</a>: {!! $igpjA('bajaj-nagar', 'Bajaj Nagar') !!}</td><td>Between Tonk Road and the airport road, so tutors from Malviya Nagar or Durgapura avoid the old city</td><td>Share a landmark on your inner lane; market roads fill in the evening</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">West</a>: {!! $igpjA('sodala', 'Sodala') !!}, {!! $igpjA('ajmer-road', 'Ajmer Road') !!}</td><td>Ram Nagar and Civil Lines Pink Line stations for Sodala; outer Ajmer Road townships suit a tutor living nearby</td><td>Allow spare time; Ajmer Road is heavy at peak hours</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">South-west</a>: {!! $igpjA('gopalpura-bypass', 'Gopalpura Bypass') !!}</td><td>By road; Durgapura and Gandhinagar are the nearest stations</td><td>Late-evening or weekend slots avoid the daytime student crowd</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">South</a>: {!! $igpjA('durgapura', 'Durgapura') !!}</td><td>Its own railway station; Tonk Road and the airport road for tutors by car or scooter</td><td>Flats may ask the tutor to register at the gate</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Every locality is listed on the <a href="{{ url('/city/jaipur') }}">Jaipur home tutors</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-mode">Home or online for IGCSE physics</h2>
  <p>
    Screens cope well with marking past papers, multiple-choice drills and theory questions, and an online search
    reaches tutors who actually know 0625, which the city hub says matters most for IGCSE. Face-to-face time is better
    spent on ray diagrams, plotting graphs by hand and small experiments with real objects. Many families split the week
    that way: one visit at home for drawing and practical work, one online slot for papers, both with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-plan">Where the hours go in Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical 0625 tutoring plan, fitted to the school's scheme</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Work</th><th scope="col">Per week</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening term of Grade 9</td><td>Gap audit for newcomers; motion, forces and energy; equation sheet started</td><td>One</td></tr>
      <tr><td>Remainder of Grade 9</td><td>Heat and waves; the first written practical questions</td><td>One</td></tr>
      <tr><td>Grade 10 until the mocks</td><td>Electricity, magnetism, nuclear and space; every Supplement statement ticked off for Extended</td><td>One, sometimes two</td></tr>
      <tr><td>Last months before the series</td><td>Full papers for the correct tier under time; a practical paper every week</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge examines in June and November, and schools in India can also enter in March, so the final-months row
    moves with your child's series.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-next">After IGCSE physics</h2>
  <p>
    An Extended grade prepares a student well for DP Physics, where handling data and uncertainty becomes the main
    challenge; see the
    <a href="{{ url('/ib-physics-tutor-jaipur') }}">IB physics tutor in Jaipur</a> page. A student moving to a Class 11
    course on an Indian board should expect a more mathematical treatment; our
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics</a> page describes it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-demo">What to check in the IGCSE physics demo</h2>
  <ol>
    <li>Before teaching, did the tutor find out the tier and which practical paper the school uses?</li>
    <li>Could they show which Supplement statements belong to the topic your child is on now?</li>
    <li>Is the official mark scheme used for marking, with wrong answers rewritten afterwards?</li>
    <li>What is their plan for the practical paper when there is no lab at home?</li>
    <li>For a student from CBSE or RBSE, can they list the topics that will be new?</li>
    <li>Is there a timetable that runs to your child's exam series?</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igpj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Every tutor names their own rate, and you see it on the profile before booking; our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the post on
    <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home tuition fees in Jaipur</a> explain what moves it.
  </p>
  <p>
    Send the grade, tier, practical paper, exam series, your colony and the times you can offer. Two or three matched
    tutors come back; one gives a <a href="{{ url('/demo-class') }}">free demo class</a>, and moving to a different
    tutor later costs nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
    You can also look through <a href="{{ url('/tutors') }}">tutor profiles</a>, or read our Jaipur pages for
    <a href="{{ url('/igcse-maths-tutor-jaipur') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-jaipur') }}">IB and IGCSE chemistry</a>.
  </p>
  </section>

  </div>
</article>
