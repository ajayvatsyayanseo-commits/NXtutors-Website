{{--
  Long-form guide for the "IGCSE physics tutor Delhi" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Cambridge facts are reworded from igcse-physics-tutor-mumbai and
  igcse-physics-tutor-gurgaon, which cite the Cambridge IGCSE Physics 0625
  syllabus for 2026, 2027 and 2028 (version 2, December 2025, no significant
  changes affecting teaching;
  https://www.cambridgeinternational.org/programmes-and-qualifications/cambridge-igcse-physics-0625/):
  Paper 1 (Core) / Paper 2 (Extended) multiple choice, 40 questions, 45 min,
  30%; Paper 3 (Core) / Paper 4 (Extended) theory, 80 marks, 1 h 15 min, 50%;
  Paper 5 Practical Test (1 h 15 min) or Paper 6 Alternative to Practical
  (1 h), 40 marks, 20%, chosen by the school, same skills and contexts; AO
  weightings 50/30/20; calculators in all parts; Core C-G, Extended A*-G;
  candidates expected to reach C or above entered for Extended; six topics;
  "recall and use" equations; practical contexts and skills listed in the
  syllabus; command words published in the syllabus. June, November and
  (India) March series as stated on igcse-maths-tutor-delhi.
  Edexcel facts are reworded from igcse-tutor-delhi, which cites the Pearson
  Edexcel International GCSE Physics (4PH1) specification
  (https://qualifications.pearson.com/): untiered, two written papers, no
  separate practical exam. No other dates.
  The worked example (E = mc delta-theta) is standard physics, used only to
  illustrate layout.

  Delhi detail only from the Delhi city hub view (CBSE for most students, a
  smaller IB/IGCSE group; IGCSE rewards command words, the right tier and past
  papers against the official scheme; online opens up tutors; Yamuna
  crossing), database/seo-content/zones/delhi.json and
  database/seo-content/areas/delhi-research.json (Chhatarpur: Yellow Line
  station, narrow enclave lanes, e-rickshaws, festival and weekend crowds on
  the main road, weekday slots easier; Mahavir Enclave: Dashrathpuri on the
  Magenta Line, doorstep visits, Palam-Dabri Marg at office hours; Dwarka
  Sector 9: Blue Line station since April 2006, society registers, share
  pocket/tower/flat; East Patel Nagar: Rajendra Place station, builder floors,
  office-closing traffic; Mukherjee Nagar: GTB Nagar station, student crowds
  in the evening, share block and lane; Pandav Nagar: Akshardham Blue Line or
  IP Extension Pink Line, e-rickshaw, floors without society gates, narrow
  lanes). No board is said to concentrate in any area. Area links render only
  for active Delhi areas. Fee wording is the approved sentence. FAQs render
  from faqs/igcse-physics-tutor-delhi.php.
--}}
@php
  $dgpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dgpA = function (string $slug, string $label) use ($dgpSlugs) {
      return in_array($slug, $dgpSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dgpGuideTitle">
  <h2 id="dgpGuideTitle">IGCSE physics tutor in Delhi: 0625 papers, practical skills and exact wording</h2>

  <p class="nx-guide__lede">
    IGCSE physics is usually lost on small things rather than big ideas: an equation the syllabus says to "recall and
    use" that was never learned, a results table with no units, a description where an explanation was wanted, or a
    practical question about apparatus the student has hardly handled. For Delhi families on a Cambridge or Edexcel
    programme, the useful tutor drills that detail every week and can reach your home on a route that survives the
    evening traffic. This NXTutors Academic Team page covers the Cambridge 0625 syllabus for the 2026 to 2028 series,
    how Edexcel's version differs, the practical paper, multiple-choice technique, and how tuition is arranged across
    Delhi. It belongs under our <a href="{{ url('/physics-home-tutor-delhi') }}">physics home tutors in Delhi</a> page
    and the Delhi <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE hub</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dgp-board">Cambridge or Edexcel</a> ·
    <a href="#dgp-papers">The 0625 papers</a> ·
    <a href="#dgp-tier">Core or Extended</a> ·
    <a href="#dgp-topics">Six topics</a> ·
    <a href="#dgp-layout">A calculation laid out</a> ·
    <a href="#dgp-practical">Paper 5 or Paper 6</a> ·
    <a href="#dgp-mcq">Multiple choice</a> ·
    <a href="#dgp-plan">Grades 9 and 10</a> ·
    <a href="#dgp-next">Before and after</a> ·
    <a href="#dgp-travel">Tutors by zone</a> ·
    <a href="#dgp-mode">Home or online</a> ·
    <a href="#dgp-demo">Demo</a> ·
    <a href="#dgp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dgp-board">First question: Cambridge 0625 or Edexcel 4PH1?</h2>
  <p>
    Both are called IGCSE physics in conversation, and both cover much the same physics, but they are examined
    differently. Pearson Edexcel International GCSE Physics (4PH1) is not tiered and is assessed through two written
    papers, with no separate practical exam. Cambridge 0625
    has two tiers and a dedicated practical paper. A tutor must prepare from the right board's papers and mark schemes,
    so check the code with the school before the first session. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel comparison</a> sets out the
    wider differences. The rest of this page follows Cambridge 0625.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-papers">What a Cambridge 0625 candidate sits</h2>
  <p>
    Cambridge reissued the syllabus for 2026, 2027 and 2028 as version 2 in December 2025 and says nothing in it changes
    teaching significantly. Each candidate sits three components.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, 2026 to 2028 series</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Format</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks, 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Practical (school's choice)</td><td colspan="2">Paper 5 Practical Test, 1 h 15 min, or Paper 6 Alternative to Practical, 1 h</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge's assessment objectives split the qualification 50/30/20: half for knowledge and understanding, 30
    percent for using information and solving problems, and 20 for experimental skills. A calculator is allowed in every component, which turns IGCSE
    physics into a test of clean layout rather than mental arithmetic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-tier">Core or Extended, and why the decision comes early</h2>
  <p>
    Core opens grades C to G; Extended opens A* to G. Cambridge advises an Extended entry for any candidate expected to
    reach C or better. Schools usually settle tiers during Grade 9 or early Grade 10, so a student hoping to move up needs
    evidence before then: every Supplement learning outcome listed, taught and tested, plus Paper 2 and Paper 4 practice
    the teacher can see. An Extended student, meanwhile, needs the Supplement material taught explicitly in each topic,
    with its additional equations and multi-step theory questions, rather than assumed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-topics">Six topics and where marks usually slip</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topics and common trouble spots</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Where marks slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time graphs; Extended momentum and impulse; efficiency sums; pressure in a liquid</td></tr>
      <tr><td>Thermal physics</td><td>Particle explanations; specific heat capacity; loose wording about conduction and convection</td></tr>
      <tr><td>Waves</td><td>Ray diagrams for lenses; refraction and critical angle; uses of each part of the electromagnetic spectrum</td></tr>
      <tr><td>Electricity and magnetism</td><td>Parallel circuits; potential dividers; transformers and induction</td></tr>
      <tr><td>Nuclear physics</td><td>Half-life read from data; balancing decay equations</td></tr>
      <tr><td>Space physics</td><td>Orbits and stellar life cycles; on Extended, the expanding universe; easily squeezed when school runs short of time</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The syllabus repeatedly asks students to "recall and use" equations, so there is no formula sheet to lean on. Early on,
    the tutor and student should write a single equation sheet straight from the syllabus, each quantity with its unit,
    and test it in short bursts all year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-layout">One calculation, laid out the way examiners credit it</h2>
  <p>
    Take a typical thermal question: how much energy heats 0.50 kg of water by 20 °C, given a specific heat capacity of
    4200 J/(kg °C)? A tidy answer has three lines. The equation: E = mcΔθ. The substitution: E = 0.50 × 4200 × 20. The
    result with its unit: E = 42 000 J, or 42 kJ. If the student mistypes the multiplication, the first two lines can still
    earn method marks; a lone wrong number earns none. Converting grams to kilograms, or kJ to J, before substituting is
    the habit that saves the most marks across the whole syllabus.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-practical">Paper 5 or Paper 6: practising experimental skills at home</h2>
  <p>
    The two papers share their skills and contexts; the only difference is that Paper 6 is answered entirely in
    writing.
    The syllabus lists the contexts: length, volume, force and time measurement (including very short times and small
    distances), springs and balances, oscillations and moving objects, heating and cooling curves, current and
    potential difference in circuits, and optics experiments with mirrors, lenses, prisms and transparent blocks.
  </p>
  <ul>
    <li><strong>Variables.</strong> Name the independent and dependent variables and say how each control variable is kept fixed.</li>
    <li><strong>Readings.</strong> Read to the nearest half division, check for zero errors, and choose a sensible range and number of readings.</li>
    <li><strong>Tables and graphs.</strong> Quantity and unit in every column heading; a scale that uses most of the grid; a smooth best-fit line.</li>
    <li><strong>Evaluation.</strong> Spot an anomalous reading and suggest a change specific to the method.</li>
  </ul>
  <p>
    A ruler, a spring loaded with small masses, or a thread pendulum and a phone stopwatch are safe and enough to make these
    skills concrete at a dining table.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-mcq">Multiple-choice technique for Paper 1 or Paper 2</h2>
  <p>
    Forty questions in 45 minutes leaves just over a minute each, with no partial credit, and the paper carries 30
    percent of the grade. On numerical items, calculate first and only then look at A to D, since the wrong options are
    usually what common slips produce. On conceptual items, eliminate anything that breaks a principle you are sure of.
    Check every power of ten, and take diagrams slowly. Keep a log of the topic behind each wrong answer, which tells
    the tutor where to reteach. The syllabus also defines its command words; "state", "describe", "explain" and
    "suggest" are not interchangeable in the theory paper either.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-plan">Where the tutoring hours go across Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical 0625 tutoring plan, adjusted to the school's scheme</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Work</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Early Grade 9</td><td>Motion, forces and energy; the equation list and a glossary begin</td><td>One</td></tr>
      <tr><td>Later Grade 9</td><td>Thermal physics and waves; first practical-paper questions</td><td>One</td></tr>
      <tr><td>Early Grade 10</td><td>Electricity, magnetism, nuclear and space physics; Supplement points ticked off</td><td>One or two</td></tr>
      <tr><td>Run-up to the series</td><td>Full timed papers at the right tier, weekly practical questions, repair of weak topics</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-next">Before and after IGCSE physics</h2>
  <p>
    Because CBSE is the board most Delhi students sit, plenty of IGCSE students arrive from it. They often know a fair
    amount of physics but meet a new style: Supplement content, a practical paper and Cambridge's exact phrasing. Topics the
    school covered before the student arrived can be filled in by a tutor who follows its scheme of work. Beyond Grade
    10, a good Extended grade prepares a student well for IB Diploma Physics, described on our
    <a href="{{ url('/ib-physics-tutor-delhi') }}">IB physics tutor in Delhi</a> page. Anyone switching to a Class 11 board course
    will meet more mathematics; see the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11
    physics</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-travel">IGCSE physics tutors by zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Delhi localities and the usual tutor route</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How tutors arrive</th><th scope="col">Worth knowing</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>: {!! $dgpA('chhatarpur', 'Chhatarpur') !!}</td><td>Chhatarpur station on the Yellow Line, then an e-rickshaw into the enclave lanes</td><td>Festival days and weekends slow the main road; weekday slots are easier</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar and Palam</a>: {!! $dgpA('mahavir-enclave', 'Mahavir Enclave') !!}</td><td>Dashrathpuri on the Magenta Line, or a two-wheeler</td><td>Doorstep visits; Palam-Dabri Marg is crowded at office hours</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a>: {!! $dgpA('dwarka-sector-9', 'Dwarka Sector 9') !!}</td><td>The sector's own Blue Line station, open since 2006</td><td>Share pocket, tower and flat; guards may call the flat</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar and Rajinder Nagar</a>: {!! $dgpA('east-patel-nagar', 'East Patel Nagar') !!}</td><td>Rajendra Place on the Blue Line</td><td>Builder floors, no society gate; avoid office-closing time if the tutor drives</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town and North Campus</a>: {!! $dgpA('mukherjee-nagar', 'Mukherjee Nagar') !!}</td><td>GTB Nagar on the Yellow Line, then an e-rickshaw</td><td>Evening roads fill with students; give the block and easiest lane</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj and IP Extension</a>: {!! $dgpA('pandav-nagar', 'Pandav Nagar') !!}</td><td>Akshardham on the Blue Line or IP Extension on the Pink, then an e-rickshaw</td><td>Narrow lanes; two-wheeler or metro beats a car</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    East of the river, a tutor from the same side usually keeps time better than one crossing the Yamuna; the
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi tuition guide</a> explains why. All localities are
    on the <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-mode">Home or online for IGCSE physics</h2>
  <p>
    Online time works well for marking against the scheme, timed multiple-choice sets and theory practice, and they widen the
    choice to tutors anywhere who know 0625 or 4PH1 closely. A tutor in the room is most useful for ray diagrams, graph
    plotting and simple experiments with real objects. A practical pattern is one home session for drawing and
    practical skills, one online for papers, both with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-demo">Checklist for the IGCSE physics demo</h2>
  <ol>
    <li>Did the tutor ask about board and tier, and for Cambridge, which practical paper the school uses?</li>
    <li>Could they explain the Supplement content in your child's current topic?</li>
    <li>Do they use the official mark scheme and insist on rewrites?</li>
    <li>How will they prepare practical skills without a school lab?</li>
    <li>Was your child writing, drawing and calculating for most of the session?</li>
    <li>Did they outline a plan to the exam series, whether that is June, November or March (offered to schools in India)?</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dgp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees, shown on each profile before the demo. Our <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and the post on <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi tuition fees</a> cover what
    moves the number.
  </p>
  <p>
    Send the grade, board and code, tier, practical paper, exam series, your colony or metro station and your free times.
    We return two or three matched tutors; you pick one for a <a href="{{ url('/demo-class') }}">free demo class</a>, and
    a change of tutor later costs nothing. Tutors who join pass an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a>. You can look through <a href="{{ url('/tutors') }}">tutor profiles</a> too, and our Delhi pages on
    <a href="{{ url('/igcse-maths-tutor-delhi') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-delhi') }}">IGCSE chemistry</a> tutors in Delhi.
  </p>
  </section>

  </div>
</article>
