{{--
  Long-form guide for the "IGCSE physics tutor Bengaluru" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named. Written by the city
  authority page writer, 2 Oct 2026.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon, which cites the
  Cambridge IGCSE Physics 0625 syllabus for 2026, 2027 and 2028 (version 2,
  December 2025, no significant changes affecting teaching;
  cambridgeinternational.org): Paper 1 (Core) / Paper 2 (Extended) multiple
  choice, 40 questions, 45 min, 30%; Paper 3 (Core) / Paper 4 (Extended)
  theory, 80 marks, 1 h 15 min, 50%; Paper 5 Practical Test (1 h 15 min) or
  Paper 6 Alternative to Practical (1 h), 40 marks, 20%, chosen by the school,
  same skills and contexts; AO weightings 50/30/20; calculators in all parts;
  Core C-G, Extended A*-G; candidates expected to reach C or above entered for
  Extended; six topics; "recall and use" equations; practical contexts and
  skills listed in the syllabus; command words published in the syllabus. The
  June, November and (India) March series are as stated in igcse-tutor-mumbai
  and igcse-maths-tutor-gurgaon. Karnataka II PUC and SSLC facts as cited in
  karnataka-board-tutor-bengaluru. No other dates.

  Local detail only from database/seo-content/areas/bengaluru-research.json
  and bengaluru-zone-guides.json (Sarjapur Road: no metro, tutors by road
  from HSR, Bellandur or Koramangala, gated societies, keep the same slot;
  Brookefield: Kundalahalli Purple Line station, gated complexes, ITPL Road at
  office hours; Indiranagar: Indiranagar and Swami Vivekananda Road stations,
  houses and apartment gates, 100 Feet Road and CMH Road busy in the evening;
  Kalyan Nagar: Blue Line station planned, buses, two-wheelers and cabs,
  houses, parking near cafe streets; Bannerghatta Road: Pink Line elevated
  section built, not open, tutors by road, gated towers and older layouts;
  JP Nagar: phases, Jaya Prakash Nagar Green Line station, houses) and the
  Bengaluru hub (online widens IGCSE choice). Area links render only for
  active Bengaluru areas. Fee wording is the approved sentence. FAQs render
  from faqs/igcse-physics-tutor-bengaluru.php.
--}}
@php
  $gpbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gpbA = function (string $slug, string $label) use ($gpbSlugs) {
      return in_array($slug, $gpbSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gpbGuideTitle">
  <h2 id="gpbGuideTitle">IGCSE physics tutor in Bengaluru: Cambridge 0625, the practical paper and precise answers</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics asks for three things at once: accurate recall of definitions and equations, clear
    explanations in words, and the skills of an experimenter, tested in a paper of their own. Students who are good at
    numericals but loose with language, or confident in theory but unsure how to plan an experiment, lose marks in
    predictable places. This page covers the 0625 syllabus for 2026 to 2028, the tier decision, the six topics, how to
    prepare for the practical paper without a home laboratory, and how IGCSE physics tutors reach families across
    Bengaluru. It sits under our <a href="{{ url('/physics-home-tutor-bengaluru') }}">physics home tutors in
    Bengaluru</a> page and the <a href="{{ url('/igcse-tutor-bengaluru') }}">IGCSE tutors in Bengaluru</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gpb-papers">The three papers</a> ·
    <a href="#gpb-series">Exam series</a> ·
    <a href="#gpb-tier">Core or Extended</a> ·
    <a href="#gpb-topics">Six topics</a> ·
    <a href="#gpb-practical">The practical paper</a> ·
    <a href="#gpb-mcq">Multiple choice</a> ·
    <a href="#gpb-habits">Habits that protect marks</a> ·
    <a href="#gpb-example">A worked answer</a> ·
    <a href="#gpb-plan">Grades 9 and 10</a> ·
    <a href="#gpb-bridge">Before and after</a> ·
    <a href="#gpb-zones">Travel by zone</a> ·
    <a href="#gpb-mode">Home or online</a> ·
    <a href="#gpb-demo">The demo</a> ·
    <a href="#gpb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gpb-papers">What every candidate sits</h2>
  <p>
    Each candidate takes three papers: a multiple-choice paper, a theory paper and a practical paper. The tier decides
    which versions of the first two they sit; the school decides which practical paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, syllabus for 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Length and marks</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks, 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Practical</td><td colspan="2">Paper 5 Practical Test (1 h 15 min) or Paper 6 Alternative to Practical (1 h)</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators may be used in all papers. Cambridge weights the assessment objectives at 50% knowledge with
    understanding, 30% handling information and solving problems, and 20% experimental skills. Cambridge describes
    the current version of the syllabus as having no significant changes affecting teaching, so recent past papers
    remain good practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-series">Which exam series, and why it changes the plan</h2>
  <p>
    Cambridge holds June and November series, and a March series is available to schools in India. The school
    decides which series its candidates sit, and that single fact sets the tutor's calendar: when the syllabus must be
    finished, when full papers start, and how many weeks are left for the practical paper. A student sitting in March
    has a shorter run-in than one sitting in June, so the "last months" block in the plan below starts earlier. Tell us
    the series with your request, and ask the tutor at the demo to sketch the weeks between now and the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-tier">Core or Extended</h2>
  <p>
    Core candidates can reach grades C to G; Extended candidates can reach A* to G. Cambridge advises entering
    candidates expected to achieve grade C or above for Extended. Extended adds supplementary content across the topics,
    marked in the syllabus, which includes more demanding equations and explanations. A tutor working with an Extended
    student should tick off each supplementary point as it is covered, because these are the points a Core-level
    understanding misses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-topics">The six topics and where students stall</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topics with common sticking points</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Common sticking point</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time graphs; resultant forces; efficiency and power calculations</td></tr>
      <tr><td>Thermal physics</td><td>Explaining changes of state and specific heat capacity in particle terms</td></tr>
      <tr><td>Waves</td><td>Refraction, critical angle and total internal reflection; ray diagrams for lenses</td></tr>
      <tr><td>Electricity and magnetism</td><td>Series and parallel circuits; potential dividers; electromagnetic induction explained in words</td></tr>
      <tr><td>Nuclear physics</td><td>Half-life from graphs and tables; balancing decay equations</td></tr>
      <tr><td>Space physics</td><td>The Earth and Solar System, stars and the Universe: content that is easy to underrate until a question appears</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The syllabus lists equations students must "recall and use", and these should be learned word-perfect from the
    first term, with symbols and units. A short weekly equation and definition test is one of the simplest ways to
    protect marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-practical">Preparing for the practical paper without a home lab</h2>
  <p>
    Whether the school enters candidates for Paper 5, the Practical Test, or Paper 6, the Alternative to Practical, the
    skills and contexts are the same and are listed in the syllabus: planning an experiment, taking and recording
    readings, drawing graphs, identifying sources of error and suggesting improvements. A tutor at home cannot run the
    school's lab, but can do a great deal:
  </p>
  <ul>
    <li>Work through Paper 6 questions, which present real experimental set-ups and data on paper.</li>
    <li>Use simple household equipment, such as a ruler, a stopwatch app, a string pendulum or a spring, to practise measurement and repeat readings.</li>
    <li>Drill table layout: quantity, unit in the heading, consistent decimal places.</li>
    <li>Practise graph drawing to a checklist: labelled axes with units, a sensible scale, accurately plotted points and a single straight line or smooth curve through them.</li>
    <li>Rehearse "planning" questions until the student can name variables, a method, a safety point and a way to improve reliability.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-mcq">Getting the most from the multiple-choice paper</h2>
  <p>
    Forty questions in forty-five minutes leaves about a minute each, and the multiple-choice paper is worth 30%.
    Good preparation means sets of past-paper questions by topic, timed, then a review of why each wrong option was
    tempting. Many errors come from misreading a graph axis or a unit prefix rather than from not knowing the physics,
    and a tutor who sorts the errors that way gives the student something specific to fix.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-habits">Habits that protect IGCSE physics marks</h2>
  <ul>
    <li><strong>SI units before substituting,</strong> and a unit on every final answer.</li>
    <li><strong>Equation, substitution, answer</strong> on three lines, so method marks survive an arithmetic slip.</li>
    <li><strong>Precise vocabulary:</strong> mass and weight, heat and temperature, current and charge are not interchangeable.</li>
    <li><strong>"Explain" answers that reach a cause,</strong> linking to particles, forces or energy rather than repeating what happens.</li>
    <li><strong>Ray and circuit diagrams with a ruler,</strong> with arrows and standard symbols.</li>
    <li><strong>Command words read twice:</strong> "state", "describe", "explain", "calculate" and "suggest" each need a different response, as the syllabus sets out.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-example">One question, a weak answer and a strong one</h2>
  <p>
    Take a typical thermal physics prompt: explain why the pressure of a gas in a sealed container rises when it is
    heated. Here is how the same student might answer before and after some coaching.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Before</h3>
  <p>
    "Because the temperature goes up, so the pressure goes up." This restates the question. It names no particles, no
    motion and no collisions, so it is unlikely to earn the explanation marks.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>After</h3>
  <p>
    "Heating increases the average kinetic energy of the gas particles, so they move faster. They hit the container walls
    more often and with greater force, so the force per unit area on the walls increases." Each sentence adds a link in
    the chain from cause to effect.
  </p>
    </div>
  </div>
  <p>
    A tutor who teaches this chain structure across thermal physics, electricity and waves gives the student a method
    that works on questions they have never seen, which is exactly what Cambridge's explain-type questions reward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-plan">How tutoring time is spread over Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical IGCSE physics plan</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Work</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first term</td><td>Motion, forces and energy; the equation list and glossary begin</td><td>One</td></tr>
      <tr><td>Rest of Grade 9</td><td>Thermal physics and waves; first practical-skills questions</td><td>One</td></tr>
      <tr><td>Grade 10, first half</td><td>Electricity and magnetism, nuclear and space physics; Extended points ticked off</td><td>One or two</td></tr>
      <tr><td>Last months before the series</td><td>Timed papers in the right tier; a practical paper every week; weak topics repaired</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-bridge">Before IGCSE physics, and after it</h2>
  <p>
    Students arriving from the Karnataka state board or CBSE in Grade 9 usually know the formulas but are less used to
    Cambridge's explain-in-words questions and to the practical paper. After IGCSE, the route forks. Students heading
    for the IB Diploma will find the mechanics, waves and electricity familiar and the data and uncertainty work new;
    see the <a href="{{ url('/ib-physics-tutor-bengaluru') }}">IB physics tutor in Bengaluru</a> page. Students moving
    to a Karnataka PU college meet the board's own paper style, where the model paper warns that answers missing a
    needed diagram, or numericals without the formula and working, score nothing; the
    <a href="{{ url('/karnataka-board-tutor-bengaluru') }}">Karnataka Board tutors in Bengaluru</a> page explains the
    II PUC papers. Our comparison of <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and
    Edexcel IGCSE</a> helps if your school uses a different board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-zones">IGCSE physics tutors by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>:</strong> along {!! $gpbA('sarjapur-road', 'Sarjapur Road') !!} there is no metro, so tutors come by road from HSR Layout, Bellandur or Koramangala; pre-register them at the gate and keep the same weekly slot.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>:</strong> {!! $gpbA('brookefield', 'Brookefield') !!} is reached from Kundalahalli on the Purple Line; fit weekday sessions between school and the evening rush on ITPL Road.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>:</strong> {!! $gpbA('indiranagar', 'Indiranagar') !!} has two Purple Line stations, so a short walk or auto finishes most journeys; start before 100 Feet Road fills up in the evening.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>:</strong> {!! $gpbA('kalyan-nagar', 'Kalyan Nagar') !!} has no metro yet; tutors come by bus, two-wheeler or cab, so mention where a two-wheeler can be parked.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>:</strong> on {!! $gpbA('bannerghatta-road', 'Bannerghatta Road') !!}, the Pink Line is built but not open, so tutors still travel by road; towers need a gate entry, older layouts do not.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>:</strong> {!! $gpbA('jp-nagar', 'JP Nagar') !!} is spread over many phases, so give the phase and cross road; Jaya Prakash Nagar station on the Green Line serves the inner phases.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-mode">Home or online for IGCSE physics</h2>
  <p>
    Theory review and multiple-choice practice work well online, and online widens the choice of Cambridge
    specialists, which matters in zones the metro has not reached. Practical-skills work, graph drawing and early
    habit-building benefit from a tutor in the room who can watch the ruler, the table and the units. Many families
    split the week, one home session and one online. See our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-demo">A checklist for the IGCSE physics demo</h2>
  <ol>
    <li><strong>Code, tier, series and practical paper.</strong> The tutor should ask all four before teaching.</li>
    <li><strong>An Extended point.</strong> Ask how they keep track of supplementary content.</li>
    <li><strong>A practical-paper question.</strong> Ask them to teach a graph or planning question from Paper 6.</li>
    <li><strong>Marking an explanation.</strong> Bring a school answer and ask why it lost marks.</li>
    <li><strong>Equations and definitions.</strong> Ask how they will make the "recall and use" list stick.</li>
    <li><strong>The journey.</strong> Route, timing and an online fallback.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpb-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The tutor's fee is on
    their profile before you book; read our note on <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition
    fees in Bengaluru</a> or the <a href="{{ url('/pricing-guide') }}">pricing guide</a> for what shapes it.
  </p>
  <p>
    Tell us the grade, tier, series, the school's practical paper if you know it, your locality and free slots. You
    receive two or three matched tutors and a <a href="{{ url('/demo-class') }}">free demo class</a>, and changing tutor
    later costs nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before
    their profile goes live; <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. See also
    <a href="{{ url('/igcse-maths-tutor-bengaluru') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-bengaluru') }}">IB and IGCSE chemistry</a> tutors in Bengaluru.
  </p>
  </section>

  </div>
</article>
