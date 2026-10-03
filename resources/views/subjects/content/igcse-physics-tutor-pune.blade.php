{{--
  Long-form guide for the "IGCSE physics tutor Pune" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon, which cites the
  Cambridge IGCSE Physics 0625 syllabus for 2026, 2027 and 2028 (version 2,
  December 2025, no significant changes affecting teaching;
  cambridgeinternational.org): Paper 1 (Core) / Paper 2 (Extended) multiple
  choice, 40 questions, 45 min, 30%; Paper 3 (Core) / Paper 4 (Extended)
  theory, 80 marks, 1 h 15 min, 50%; Paper 5 Practical Test (1 h 15 min) or
  Paper 6 Alternative to Practical (1 h), 40 marks, 20%, chosen by the school,
  same skills and contexts; AO weightings 50/30/20; calculators in all parts;
  Core C-G, Extended A*-G; candidates expected to reach C or above entered for
  Extended; Supplement content adds harder material in every topic; six
  topics (motion, forces and energy; thermal physics; waves; electricity and
  magnetism; nuclear physics; space physics); "recall and use" equations;
  practical contexts and skills listed in the syllabus; command words
  published in the syllabus. June, November and (India) March series as stated
  in igcse-tutor-mumbai and igcse-maths-tutor-gurgaon. No other dates.

  Local detail only from database/seo-content/zones/pune.json,
  areas/pune-research.json, pune-zone-guides.json and the Pune hub view
  (Kothrud: Aqua Line stations at Vanaz, Anand Nagar and Paud Phata, Paud Road
  evening rush, gate registration once; Pashan: no open metro station, tutors
  from Baner, Aundh, Bavdhan or Sus, online for senior specialist subjects;
  Chinchwad: suburban station on the Pune-Lonavala line, PCMC Bhavan nearest
  metro, Purple Line extension under construction; Viman Nagar: Ramwadi
  station beside it, gated societies, local tutor paired with online
  specialists for IB/IGCSE/senior science; Salunke Vihar: Swargate nearest,
  some societies ask for ID at the gate; Magarpatta: controlled entry,
  cluster and tower, shift-change traffic, online for specialist board
  subjects; hub: IGCSE tier and command words; online opens tutors across
  India for IGCSE). Area links render only for active Pune areas. Fee wording
  is the approved sentence. FAQs render from faqs/igcse-physics-tutor-pune.php.
--}}
@php
  $pigpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pigpA = function (string $slug, string $label) use ($pigpSlugs) {
      return in_array($slug, $pigpSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pigpGuideTitle">
  <h2 id="pigpGuideTitle">IGCSE physics tutors in Pune: Cambridge 0625, tier by tier and paper by paper</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics 0625 is assessed in three papers, and each one tests something different: speed and
    judgement in multiple choice, structured explanation and calculation in the theory paper, and experimental skill in
    the practical. A Pune student can be strong in one and lose a grade in another, so useful tutoring starts by finding
    out which. This page, from the NXTutors Academic Team, explains the syllabus for the 2026 to 2028 series, how a tutor
    should divide the time across Grades 9 and 10, and how we match a physics tutor who can reach your area or teach
    online. See also our <a href="{{ url('/igcse-tutor-pune') }}">IGCSE tutors in Pune</a> hub and
    <a href="{{ url('/physics-home-tutor-pune') }}">physics home tutors in Pune</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pigp-papers">The three papers</a> ·
    <a href="#pigp-tier">Choosing the tier</a> ·
    <a href="#pigp-topics">Six topics</a> ·
    <a href="#pigp-eqns">Equations to recall</a> ·
    <a href="#pigp-prac">Paper 5 or Paper 6</a> ·
    <a href="#pigp-theory">Theory answers</a> ·
    <a href="#pigp-worked">A worked calculation</a> ·
    <a href="#pigp-mcq">Multiple choice</a> ·
    <a href="#pigp-years">Grades 9 and 10</a> ·
    <a href="#pigp-zones">Tutors by zone</a> ·
    <a href="#pigp-demo">The demo</a> ·
    <a href="#pigp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pigp-papers">The three papers every candidate sits</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, series in 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Format</th><th scope="col">Share</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks, 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Practical</td><td colspan="2">Paper 5 (Practical Test, 1 h 15 min) or Paper 6 (Alternative to Practical, 1 h), chosen by the school</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators may be used in every part. Across the whole qualification, Cambridge weights its three assessment objectives
    at 50%, 30% and 20%. The current syllabus version carries no
    significant changes affecting teaching, so recent past papers remain good practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-tier">Core or Extended</h2>
  <p>
    Core candidates can achieve grades C to G; Extended candidates A* to G. Cambridge's guidance is that students
    expected to reach grade C or above should be entered for Extended, which adds Supplement material in every topic:
    more equations, harder calculations and fuller explanations. A student heading for IB Diploma Physics, A Level or
    a science stream needs Extended. Because entries are usually confirmed after the Grade 10 mocks, a student on the
    edge should be working through Supplement content well before then.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-topics">Six topics, and a sensible order to secure them</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topics with what a tutor should make sure of in each</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Make sure the student can…</th></tr>
    </thead>
    <tbody>
      <tr><td>1. Motion, forces and energy</td><td>Read and draw speed–time graphs, resolve energy transfers and, on Extended, handle momentum and impulse. Everything else rests on this.</td></tr>
      <tr><td>2. Thermal physics</td><td>Explain conduction, convection and changes of state with the particle model, and calculate with specific heat capacity.</td></tr>
      <tr><td>3. Waves</td><td>Draw ray diagrams for lenses with a ruler, find a critical angle, and match parts of the electromagnetic spectrum to uses and hazards.</td></tr>
      <tr><td>4. Electricity and magnetism</td><td>Work through series and parallel circuits and potential dividers, and explain induction and transformers.</td></tr>
      <tr><td>5. Nuclear physics</td><td>Read half-life from data, balance decay equations and describe safe handling.</td></tr>
      <tr><td>6. Space physics</td><td>Describe orbits and the life cycle of stars, and on Extended, the evidence for an expanding universe.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Space physics is short and often comes last in a school's scheme, which is exactly why it gets squeezed; a tutor
    should make sure it is covered before revision begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-eqns">"Recall and use": the equations a student must carry</h2>
  <p>
    Many learning outcomes in the syllabus say "recall and use the equation", which means the equation is not given in
    the paper. A student who has to work an equation out under pressure loses time and often the mark. The habit that
    fixes this is simple: a single page listing every "recall and use" equation for the student's tier, with units,
    tested for five minutes at the start of each session until it is automatic. Alongside it, a short glossary test
    keeps pairs that students mix up, such as mass and weight or heat and temperature, apart.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-prac">Paper 5 or Paper 6: practical skills without a home lab</h2>
  <p>
    The school decides whether its candidates sit the Practical Test or the Alternative to Practical. Both are worth
    40 marks and test the same skills in the same experimental contexts listed in the syllabus; Paper 6 asks about
    experiments on paper instead of in a laboratory. Either way, a tutor at home can build most of what is assessed:
  </p>
  <ul>
    <li><strong>Tables:</strong> headings with quantities and units, readings to a consistent precision.</li>
    <li><strong>Graphs:</strong> sensible scales, accurately plotted points, a smooth line or curve of best fit, a gradient from a large triangle.</li>
    <li><strong>Method:</strong> identifying variables, describing a fair test, suggesting a specific improvement.</li>
    <li><strong>Simple apparatus:</strong> a ruler, a stopwatch on a phone, a pendulum on a string and a kitchen scale are enough to practise measurement and repeat readings.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-theory">Writing theory answers that collect marks</h2>
  <p>
    The theory paper is half the grade, and most lost marks come from the way answers are written rather than from
    missing knowledge. Calculations should show the equation, the substitution with units converted to SI, and the
    answer with its unit. Explanations should use "because" and connect to particles, forces or energy rather than
    simply describing what happens. Command words such as "state", "describe", "explain" and "calculate" are defined in
    the syllabus, and each asks for a different length and kind of answer; a tutor should teach them explicitly, using
    past papers marked against Cambridge mark schemes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-worked">A calculation laid out for full marks</h2>
  <p>
    Here is a short thermal physics question of the kind that appears on theory papers: how much energy is needed to
    raise the temperature of 500 g of water by 20 °C, if the specific heat capacity of water is 4200 J/(kg °C)?
  </p>
  <ol>
    <li><strong>Equation.</strong> E = mcΔT, written before any number goes in.</li>
    <li><strong>Units converted.</strong> m = 500 g = 0.50 kg.</li>
    <li><strong>Substitution.</strong> E = 0.50 × 4200 × 20.</li>
    <li><strong>Answer with unit.</strong> E = 42 000 J, which is 42 kJ.</li>
  </ol>
  <p>
    The most common slip is leaving the mass in grams, which gives an answer a thousand times too large. Written in
    four lines, that slip is easy to spot, and even if it happens, the equation and substitution can still earn
    method marks. Students who write only the final number lose that safety net. A tutor should mark every practice
    calculation on these four lines until the student does it without being reminded.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-mcq">Forty questions in forty-five minutes</h2>
  <p>
    The multiple-choice paper gives a little over a minute per question, and it is worth 30% of the grade, so it
    deserves its own practice rather than being treated as an afterthought. Three habits help. First, read the
    question and predict the answer before looking at the options, which stops a plausible distractor from steering
    the thinking. Second, for calculation items, check units and orders of magnitude to eliminate impossible options
    quickly. Third, mark doubtful questions and come back to them, rather than spending three minutes on one item. A
    timed set of ten questions at the end of a session, reviewed for why each wrong option was wrong, builds this
    faster than whole papers alone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-years">How the time is spread over Grades 9 and 10</h2>
  <p>
    Cambridge runs June and November series, and schools in India can also enter candidates in March, so the plan starts
    from your child's series and the school's term dates. A typical pattern is one session a week in Grade 9 covering
    motion, forces and energy, then thermal physics and waves, with the equation list and glossary started early and
    the first practical-paper questions before the year ends. In the first half of Grade 10, one or two sessions a week
    cover electricity and magnetism, nuclear and space physics, checking Supplement points off for Extended students.
    In the final months, two sessions a week go on timed papers in the right tier, one practical paper a week and
    repair of weak topics. For students who then move into the IB Diploma, our
    <a href="{{ url('/ib-physics-tutor-pune') }}">IB physics tutors in Pune</a> page explains the next step.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-zones">IGCSE physics tutors across Pune</h2>
  <p>
    Our city guide notes that online lessons open up tutors across India for IGCSE papers, and the zone guides suggest
    pairing a nearby tutor with an online specialist where the journey is long. Locally:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>.</strong> {!! $pigpA('kothrud', 'Kothrud') !!} has three Aqua Line stations, so tutors from Deccan or the city centre can come by metro; Paud Road is slow in the early evening.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>.</strong> In {!! $pigpA('pashan', 'Pashan') !!}, tutors usually ride in from Baner, Aundh, Bavdhan or Sus, and an online tutor can fill gaps for specialist subjects.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>.</strong> {!! $pigpA('chinchwad', 'Chinchwad') !!} has a suburban station on the Lonavala line; the nearest metro is PCMC Bhavan until the Purple Line extension opens.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>.</strong> Ramwadi station stands beside {!! $pigpA('viman-nagar', 'Viman Nagar') !!}; most homes are gated societies, so register the tutor once.</li>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>.</strong> {!! $pigpA('salunke-vihar', 'Salunke Vihar') !!} has no metro close by; some societies ask for ID at the gate.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>.</strong> In {!! $pigpA('magarpatta', 'Magarpatta') !!}, give the cluster and tower and avoid the shift-change hours at the township gates.</li>
  </ul>
  <p>
    Other areas, including <a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and
    Sinhagad Road</a>, are on our <a href="{{ url('/city/pune') }}">Pune tutors page</a>. Our guide to
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> compares the two modes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-demo">Checklist for the IGCSE physics demo</h2>
  <ol>
    <li><strong>Tier and practical paper.</strong> The tutor should ask Core or Extended, and Paper 5 or 6.</li>
    <li><strong>An equation test.</strong> Ask how the tutor makes sure "recall and use" equations stick.</li>
    <li><strong>A graph.</strong> Ask them to mark a graph your child has drawn and explain each lost mark.</li>
    <li><strong>An explanation question.</strong> Watch whether the tutor pushes the student from describing to explaining.</li>
    <li><strong>A plan to the series.</strong> Which topics remain, and when do full papers begin?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pigp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Send the grade, tier, practical paper, series, your area and free slots, and book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or see
    <a href="{{ url('/igcse-maths-tutor-pune') }}">IGCSE maths</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-pune') }}">IB
    and IGCSE chemistry</a> tutors in Pune.
  </p>
  </section>

  </div>
</article>
