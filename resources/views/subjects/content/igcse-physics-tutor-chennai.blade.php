{{--
  Long-form guide for the "IGCSE physics tutor Chennai" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon (via
  igcse-physics-tutor-mumbai), which cites the Cambridge IGCSE Physics 0625
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
  series as stated in the IGCSE hub pages. No other dates.

  Local detail only from database/seo-content/zones/chennai.json,
  chennai-research.json and chennai-zone-guides.json (Sholinganallur junction,
  gated communities with visitor registration, Line 3 and Line 5 under
  construction; Mylapore: MRTS at Light House, Thirumayilai and Mandaveli,
  narrow lanes near the tank, festival days; Arumbakkam: Green Line station,
  Koyambedu junction at office hours; Virugambakkam: Yellow Line under
  construction, Green Line to Vadapalani then auto, Arcot Road; Madipakkam:
  no metro, Puzhuthivakkam MRTS since March 2026 and Velachery; Kodambakkam:
  suburban station, flyover congested in the evening; OMR tip on online tutors
  for IGCSE) and the city hub. Area links render only for active Chennai
  areas. Fee wording is the approved sentence. FAQs render from
  faqs/igcse-physics-tutor-chennai.php.
--}}
@php
  $cgpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgpA = function (string $slug, string $label) use ($cgpSlugs) {
      return in_array($slug, $cgpSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cgpGuideTitle">
  <h2 id="cgpGuideTitle">IGCSE physics tutor in Chennai: Cambridge 0625, practical skills and careful wording</h2>

  <p class="nx-guide__lede">
    Ask a Cambridge examiner where IGCSE Physics marks go missing and the answer is rarely "the ideas". It is the
    detail: a Supplement equation the student never learned, a results table without units, "describe" answered when
    "explain" was asked, or a practical question about apparatus the student has hardly handled. For Chennai families
    on the Cambridge route, a good tutor attends to that detail every week and can reach your home on a route that
    survives the evening traffic. This page covers 0625 for the 2026 to 2028 series: what each candidate sits, how the
    tier caps the grade, the six topics, the practical paper, multiple-choice and past-paper technique, and how
    tutoring works across the city. Related pages are our
    <a href="{{ url('/physics-home-tutor-chennai') }}">physics home tutors in Chennai</a> and the
    <a href="{{ url('/igcse-tutor-chennai') }}">Chennai IGCSE tutors</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cgp-sits">What a candidate sits</a> ·
    <a href="#cgp-tier">Tier and grade range</a> ·
    <a href="#cgp-topics">The six topics</a> ·
    <a href="#cgp-practical">Paper 5 or Paper 6</a> ·
    <a href="#cgp-mcq">Multiple choice</a> ·
    <a href="#cgp-habits">Mark-saving habits</a> ·
    <a href="#cgp-plan">Grade 9 and 10 plan</a> ·
    <a href="#cgp-next">Before and after</a> ·
    <a href="#cgp-zones">Routes across Chennai</a> ·
    <a href="#cgp-mode">Where lessons happen</a> ·
    <a href="#cgp-demo">At the demo</a> ·
    <a href="#cgp-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cgp-sits">What every 0625 candidate sits</h2>
  <p>
    Cambridge's December 2025 version of the syllabus for 2026, 2027 and 2028 says nothing in it significantly changes
    teaching. Each candidate takes three components, and the school, not the family, chooses which practical paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625 components, 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Share of grade</th><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th></tr>
    </thead>
    <tbody>
      <tr><td>30%</td><td>40 multiple-choice questions, 45 minutes</td><td>Paper 1</td><td>Paper 2</td></tr>
      <tr><td>50%</td><td>Structured theory paper: 80 marks, 75 minutes</td><td>Paper 3</td><td>Paper 4</td></tr>
      <tr><td>20%</td><td>Practical skills, 40 marks: either the Practical Test (75 minutes) or the written Alternative (60 minutes)</td><td colspan="2">Paper 5 or Paper 6, for both tiers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Over the whole qualification, Cambridge gives half the weight to knowledge with understanding, 30 percent to
    handling information and solving problems, and 20 percent to experimental skills. A calculator is allowed
    throughout, so the paper rewards a set-out calculation (equation, then substitution, then answer with unit) more
    than quick arithmetic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-tier">How the tier limits the grade</h2>
  <p>
    Core candidates can be awarded C to G; Extended candidates A* to G. Cambridge's advice is to enter for Extended
    anyone expected to reach a C or better, and schools generally settle tiers during Grade 9 or early Grade 10. For an
    Extended student, the Supplement content (extra equations, longer Paper 4 questions) has to be taught deliberately
    in every topic. For a Core student hoping to move up, the route is a written list of every Supplement outcome,
    covered one topic at a time, with Extended-paper practice the school can inspect, beginning at least two terms
    before entries close.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-topics">The six topics and the trap in each</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topics with a common place to slip</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Typical trap</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading distance from the area under a speed-time graph; on Extended, momentum and impulse</td></tr>
      <tr><td>Thermal physics</td><td>Loose wording about conduction and convection; specific heat capacity calculations</td></tr>
      <tr><td>Waves</td><td>Ray diagrams for lenses; critical angle; uses of the electromagnetic spectrum</td></tr>
      <tr><td>Electricity and magnetism</td><td>Potential dividers; transformers and induction</td></tr>
      <tr><td>Nuclear physics</td><td>Unbalanced decay equations; half-life read from data</td></tr>
      <tr><td>Space physics</td><td>Left until the last weeks of the school scheme and then rushed</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The syllabus asks students to "recall and use" many equations, so they have to be learned, not looked up. A sound
    habit is a single equation list built from the syllabus in the first month, with units, and a quick test on it
    every week or two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-practical">Paper 5 or Paper 6: practical skills without a school lab at home</h2>
  <p>
    Cambridge treats the two practical papers as testing the same skills in the same settings; Paper 6 simply asks
    about experiments in writing instead of having students perform them. The settings named in the syllabus range
    from measurement (length, volume, force, short times and small distances, read to half a division with zero errors
    corrected) through springs, balances, pendulums and other oscillations, to warming and cooling curves, simple
    circuits measuring current and p.d., and optics using pins, mirrors, prisms, lenses and transparent blocks.
  </p>
  <p>
    Many of the marks come from skills a student can rehearse at a table in a Chennai flat: naming independent and
    dependent variables, saying which variables are kept constant and how, choosing a sensible range and number of
    readings, heading table columns with units, choosing a graph scale that uses the grid, and judging the method.
    Hanging masses from a spring, or timing swings of a pendulum with a phone, is safe and nearly free, and it makes Paper 6
    questions feel real. The tutor's part is to work through genuine practical questions and drill the planning task
    until it is routine.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-mcq">Multiple choice and past papers</h2>
  <p>
    With 40 questions in 45 minutes, the multiple-choice paper allows a little over a minute each and gives no partial
    credit. For a numerical item, solve it first and only then read the four choices, because the distractors are
    built from the usual mistakes. On concept items, cross out anything that breaks a rule you know. Read diagrams
    slowly, watch powers of ten, and after each practice paper note the topic of every miss so the tutor knows what to
    reteach.
  </p>
  <p>
    Past papers teach only when marked properly: topic questions while each topic is fresh, complete timed papers at
    the student's own tier near the end, marking against the Cambridge mark scheme every time, and lost-mark answers
    rewritten. The command words published in the syllabus ("state", "describe", "explain", "suggest", "calculate")
    each expect a different kind of answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-habits">Habits that quietly protect marks</h2>
  <ul>
    <li><strong>SI units first.</strong> Convert milliamps, kilojoules and centimetres before substituting, and finish every answer with a unit.</li>
    <li><strong>Three-line calculations.</strong> Equation, substitution, answer, so method marks survive a slip.</li>
    <li><strong>A short glossary quiz.</strong> Weight against mass, heat against temperature, speed against velocity.</li>
    <li><strong>A graph routine.</strong> Labelled axes with units, a scale that fills the grid, neat points, a smooth trend line.</li>
    <li><strong>"Because" in every explanation.</strong> Tie the answer to particles, forces or energy rather than stopping at a description.</li>
    <li><strong>Ruler and sharp pencil.</strong> Arrows on every ray; freehand ray diagrams lose credit.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-plan">Spreading tuition across Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A usual IGCSE physics plan, fitted to the school's scheme</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">What gets done</th><th scope="col">Per week</th></tr>
    </thead>
    <tbody>
      <tr><td>First term of Grade 9</td><td>Motion, forces and energy; the equation list and glossary started</td><td>One</td></tr>
      <tr><td>Later Grade 9</td><td>Heat and waves, with questions after each topic and an early look at the practical paper</td><td>One</td></tr>
      <tr><td>Grade 10, first half</td><td>Circuits and magnetism, nuclear physics, space; each Supplement outcome checked</td><td>One or two</td></tr>
      <tr><td>Last months before the series</td><td>Weekly timed papers at the right tier plus one practical paper; weak topics revisited</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student joining mid-course starts wherever the school has reached, with catch-up sessions on earlier topics.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-next">Before IGCSE physics, and after it</h2>
  <p>
    A child moving into Cambridge from the State Board, ICSE or CBSE rarely lacks physics; what is unfamiliar is the
    practical paper, the Supplement layer and the way Cambridge phrases questions. Topics the class covered before the
    child joined can be filled in by a tutor who follows the school's scheme. Beyond Grade 10, Extended physics sets up
    the IB Diploma course well, where uncertainty and data analysis become central; see the
    <a href="{{ url('/ib-physics-tutor-chennai') }}">IB physics tutor in Chennai</a> page. Anyone switching to an Indian
    board for Class 11, the State Board's +1 included, should expect heavier mathematics; read our
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics</a> page and the
    <a href="{{ url('/tamil-nadu-board-tutor-chennai') }}">Tamil Nadu State Board tutors in Chennai</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-zones">IGCSE physics tutors across Chennai, zone by zone</h2>
  <p>
    There are fewer Cambridge physics specialists than Indian-board physics tutors, so we plan around the journey:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a>.</strong> {!! $cgpA('sholinganallur', 'Sholinganallur') !!} has no rail yet and its large gated communities register every visitor; the junction is heavy as offices open and close, so evening slots after the peak or weekends suit tutors coming from Thoraipakkam, Medavakkam or Navalur.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a>.</strong> {!! $cgpA('mylapore', 'Mylapore') !!} has MRTS stations at Light House, Thirumayilai and Mandaveli; the lanes near the tank are tight for cars, and festival days crowd them.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam and Kodambakkam</a>.</strong> {!! $cgpA('kodambakkam', 'Kodambakkam') !!} has a suburban station on the line to Tambaram; the flyover towards Vadapalani is congested in the evening, so earlier sessions are easier.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>.</strong> {!! $cgpA('arumbakkam', 'Arumbakkam') !!}'s Green Line station sits between CMBT and Vadapalani, so tutors arrive by metro and walk to the colony.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>.</strong> {!! $cgpA('virugambakkam', 'Virugambakkam') !!}'s Yellow Line stations are still being built; tutors ride to Vadapalani and finish by auto, avoiding Arcot Road at office hours.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a>.</strong> {!! $cgpA('madipakkam', 'Madipakkam') !!} has no metro; Puzhuthivakkam on the MRTS extension and Velachery are the nearest rail points, and tutors from Velachery or Nanganallur often come by two-wheeler.</li>
  </ul>
  <p>
    Every locality is on the <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-mode">Home or online for IGCSE physics</h2>
  <p>
    Marking against the scheme, timed multiple-choice sets and theory practice need nothing more than a shared screen,
    and going online brings in more tutors who know 0625, which our zone notes suggest for the OMR when no local specialist fits. Home sessions are
    worth keeping for ray diagrams, graph drawing and small experiments with real objects. Plenty of Chennai
    families split the week: drawing and hands-on work at home, past papers online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-demo">Checklist for the IGCSE physics demo</h2>
  <ol>
    <li>Before teaching, did the tutor find out the tier and which practical paper the school uses?</li>
    <li>Can they point to the Supplement material in the topic your child is studying now?</li>
    <li>Is marking done against Cambridge's scheme, with lost-mark answers redone?</li>
    <li>How will they prepare your child for the practical paper away from the school lab?</li>
    <li>Is your child writing, drawing or calculating for most of the hour?</li>
    <li>Is there a week-by-week plan to your series (June, November, or March where an Indian school enters it)?</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cgp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees and you see each one before the demo; read the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> or our <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai tuition fees</a> post for the
    factors.
  </p>
  <p>
    Share the grade, tier, practical paper, series, locality and usable hours. We return two or three matches; one
    teaches a <a href="{{ url('/demo-class') }}">free demo class</a>, and a later change costs nothing. Every tutor who
    joins completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or visit <a href="{{ url('/igcse-maths-tutor-chennai') }}">IGCSE
    maths</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-chennai') }}">IB and IGCSE chemistry</a> tutors in Chennai.
  </p>
  </section>

  </div>
</article>
