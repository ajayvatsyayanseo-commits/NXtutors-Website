{{--
  Long-form guide for the "IGCSE physics tutor Ghaziabad" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Syllabus facts are reworded from igcse-physics-tutor-mumbai and
  igcse-physics-tutor-gurgaon, which cite the Cambridge IGCSE Physics 0625
  syllabus for 2026, 2027 and 2028 (version 2, December 2025, no significant
  changes affecting teaching; cambridgeinternational.org): Paper 1 (Core) /
  Paper 2 (Extended) multiple choice, 40 questions, 45 min, 30%; Paper 3
  (Core) / Paper 4 (Extended) theory, 80 marks, 1 h 15 min, 50%; Paper 5
  Practical Test (1 h 15 min) or Paper 6 Alternative to Practical (1 h), 40
  marks, 20%, chosen by the school, same skills and contexts; assessment
  objectives weighted 50/30/20; calculators in all parts; Core C-G, Extended
  A*-G; candidates expected to reach C or above entered for Extended; six
  topics; "recall and use" equations; practical contexts and skills listed in
  the syllabus; command words published in the syllabus. June, November and
  (India) March series as stated on igcse-maths-tutor-gurgaon. No other dates.

  IGCSE presence only as the Ghaziabad hub states it ("the IB and Cambridge
  IGCSE serve a smaller group"). Local detail only from database/seo-content/
  areas/ghaziabad-research.json, ghaziabad-zone-guides.json and
  zones/ghaziabad.json (Abhay Khand 3 societies, resident confirmation on the
  first visit, Vaishali station; Shakti Khand 1 floors and societies near
  Swarna Jayanti Park, Vaishali and Kaushambi stations, Kala Pathar Road
  junction; Vaishali Sector 7 high-rise complexes, visitor-parking rules;
  Vasundhara Sector 16 main market and busy chowk, Vaishali station; Pasonda
  plotted lanes, Rajendra Nagar Red Line station and Sahibabad Junction;
  Shaheed Nagar station beside the colony, GT Road border traffic). Area links
  render only for active Ghaziabad areas. Fee wording is the approved
  sentence. FAQs render from faqs/igcse-physics-tutor-ghaziabad.php.
--}}
@php
  $gpgzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gpgzA = function (string $slug, string $label) use ($gpgzSlugs) {
      return in_array($slug, $gpgzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gpgzGuideTitle">
  <h2 id="gpgzGuideTitle">IGCSE physics tutor in Ghaziabad: Cambridge 0625, the tier, and a practical paper you can prepare for at home</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics rewards precise wording and careful method more than clever shortcuts, and a fifth of the
    grade comes from practical skills. A tutor who mainly teaches CBSE or UP Board physics may know the content but not
    the way Cambridge marks it. IGCSE students are a smaller group in Ghaziabad than board students, so the right tutor
    is sometimes a metro ride away rather than in the next tower. This page explains the 0625 papers, what the tier
    decides, how to prepare for the practical paper without a laboratory, and how tutors reach different parts of the
    city. It is written by the NXTutors Academic Team; for the board as a whole see our
    <a href="{{ url('/igcse-tutor-ghaziabad') }}">IGCSE tutors in Ghaziabad</a> hub, and for physics on every board,
    <a href="{{ url('/physics-home-tutor-ghaziabad') }}">physics home tutors in Ghaziabad</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gpgz-papers">The three papers</a> ·
    <a href="#gpgz-tier">Core or Extended</a> ·
    <a href="#gpgz-topics">Six topics</a> ·
    <a href="#gpgz-prac">Practical skills at home</a> ·
    <a href="#gpgz-mcq">Multiple choice and past papers</a> ·
    <a href="#gpgz-habits">Mark-saving habits</a> ·
    <a href="#gpgz-plan">Grades 9 and 10</a> ·
    <a href="#gpgz-next">Before and after</a> ·
    <a href="#gpgz-travel">Tutors and travel</a> ·
    <a href="#gpgz-demo">The demo</a> ·
    <a href="#gpgz-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gpgz-papers">What a 0625 candidate sits</h2>
  <p>
    The current syllabus covers the 2026, 2027 and 2028 series; Cambridge reissued it in December 2025 and says
    nothing in that update changes how the subject is taught. Each candidate takes three components, and the school
    decides which of the two practical options it uses.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, series in 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Share of grade</th><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th></tr>
    </thead>
    <tbody>
      <tr><td>50%</td><td>Theory: short-answer and structured questions, 80 marks, 75 minutes</td><td>Paper 3</td><td>Paper 4</td></tr>
      <tr><td>30%</td><td>Multiple choice: 40 items, 45 minutes</td><td>Paper 1</td><td>Paper 2</td></tr>
      <tr><td>20%</td><td>Practical, 40 marks: either the Practical Test (75 minutes) or the Alternative to Practical (one hour)</td><td colspan="2">Paper 5 or Paper 6, the same for both tiers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Across the qualification, half the credit is for knowledge with understanding, 30 percent for handling information
    and solving problems, and 20 percent for experimental skills. A calculator may be used in every component, so
    marks depend on setting out a calculation clearly rather than on arithmetic speed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-tier">Core or Extended: the decision that caps the grade</h2>
  <p>
    Core candidates can be awarded C to G; Extended candidates A* to G. Cambridge's advice is that any candidate
    expected to reach a C or better should be entered for Extended. Schools usually settle the tier during Grade 9 or
    early in Grade 10, which gives a student hoping to move up a limited window.
  </p>
  <p>
    The Extended course adds Supplement material to every topic: more equations, harder multi-step questions and the
    longer reasoning that Paper 4 expects. A tutor should teach that material deliberately, not assume it follows from
    Core. For a student currently on Core who wants Extended, the practical plan is a written list of every Supplement
    outcome, worked through topic by topic with Paper 2 and Paper 4 questions, and started at least two terms before
    entries are fixed, so the school has evidence to look at.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-topics">The six topics and where students usually stall</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 content and common difficulties</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Where students usually stall</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time graphs; momentum and impulse (Extended); efficiency; liquid pressure. Everything else builds on this, so it comes first</td></tr>
      <tr><td>Thermal physics</td><td>Explaining with the particle model; specific heat capacity; exact wording for conduction and convection</td></tr>
      <tr><td>Waves</td><td>Ray diagrams for lenses; refraction and the critical angle; uses of the electromagnetic spectrum</td></tr>
      <tr><td>Electricity and magnetism</td><td>Series and parallel circuits; potential dividers; induction and transformers</td></tr>
      <tr><td>Nuclear physics</td><td>Finding half-life from data; balancing decay equations; safety precautions</td></tr>
      <tr><td>Space physics</td><td>Orbits; the life cycle of stars; the expanding universe on Extended. Short, and often squeezed at the end of the school year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The syllabus repeatedly asks students to "recall and use" equations, so they must be learnt. In the first few weeks
    a tutor should build one list from the syllabus, with units, and test it little and often across both years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-prac">Practical skills, prepared at a dining table</h2>
  <p>
    Paper 5 has students carry out experiments; Paper 6 asks about experiments on paper. Cambridge assesses the same
    skills in the same contexts either way. The contexts in the syllabus include measuring lengths, volumes, forces and
    short times, correcting zero errors and reading scales to half a division, springs and balances, oscillations,
    heating and cooling curves, simple circuits measuring current and potential difference, and optics with pins,
    mirrors, prisms, lenses and glass blocks.
  </p>
  <p>
    Most of the marks come from skills that need no laboratory. Students must name what is changed and what is
    measured, say how everything else is kept constant, decide how many readings to take and over what range, set out
    a table whose column headings carry units, choose a graph scale that uses the grid, and judge the method's
    weaknesses. A pendulum made from
    thread and a key, timed with a phone, or a rubber band stretched by a few coins is safe and cheap, and makes the
    planning question feel real. With a tutor, the student can draw the apparatus, attempt real practical questions
    from past series and practise planning answers until the structure comes without thinking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-mcq">The multiple-choice paper and past papers</h2>
  <p>
    Forty questions in 45 minutes leaves a little over a minute each, with no partial credit, and the paper is worth 30
    percent. For calculations, get your own answer first and only then look at the choices, since the distractors are built
    from typical slips. For concept questions, cross out anything that breaks a rule you know. Read powers of ten and
    diagrams slowly, and keep a running tally of which topics the wrong answers came from; that tally is the tutor's
    reteaching list.
  </p>
  <p>
    Past papers teach only when marked properly. The routine that works: topic questions while each topic is fresh,
    whole papers under time in the right tier once the course is covered, marking against the official scheme, and a
    fresh attempt at every answer that lost marks. The syllabus defines each command word, and a student should know
    without hesitating how "state" differs from "describe", or "explain" from "suggest".
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-habits">Habits that protect marks</h2>
  <ul>
    <li><strong>SI units first.</strong> Convert mA, kJ and cm before substituting, and put a unit on every answer.</li>
    <li><strong>Three lines for every calculation.</strong> Equation, substitution, answer; if the number goes wrong, the method still earns credit.</li>
    <li><strong>A weekly word test.</strong> Weight and mass, heat and temperature, current and charge are confused all the time.</li>
    <li><strong>A graph checklist.</strong> Labelled axes with units, a sensible scale, accurate points and a smooth line of best fit.</li>
    <li><strong>"Because" in every explanation.</strong> Link the answer to particles, forces or energy rather than describing what happens.</li>
    <li><strong>Ruler, sharp pencil, arrowheads.</strong> Freehand ray diagrams lose marks that a ruler would have kept.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-plan">Tutoring time across Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A common IGCSE physics pattern, fitted to your school's order of topics</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9</td><td>Motion, forces and energy secured; the equation list built; practical vocabulary</td><td>One</td></tr>
      <tr><td>Late Grade 9 to early Grade 10</td><td>Waves, electricity and thermal physics; Supplement material for Extended; first planning questions</td><td>One or two</td></tr>
      <tr><td>Grade 10 to mocks</td><td>Nuclear and space physics; mixed topic questions; timed multiple choice</td><td>Two</td></tr>
      <tr><td>Mocks to the series</td><td>Full papers in the right tier, marked against mark schemes; practical paper rehearsal</td><td>Two or three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-next">Before IGCSE physics, and after it</h2>
  <p>
    Students joining IGCSE from CBSE, ICSE or the UP Board in Grade 9 usually know much of the content but need the
    Cambridge command words and the practical vocabulary early. After IGCSE, students heading into the IB Diploma
    should read the <a href="{{ url('/ib-physics-tutor-ghaziabad') }}">IB physics tutor in Ghaziabad</a> page, and
    those moving to a Class 11 board course the national <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11
    physics</a> page. The maths behind physics matters too; our
    <a href="{{ url('/igcse-maths-tutor-ghaziabad') }}">IGCSE maths tutor in Ghaziabad</a> page covers that side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-travel">How IGCSE physics tutors reach you</h2>
  <p>
    From our zone research, these are the practical details that decide which tutor can come weekly:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/indirapuram') }}">Indirapuram</a>.</strong> {!! $gpgzA('indirapuram-abhay-khand-3', 'Abhay Khand 3') !!} is mostly apartment buildings and gated societies near Vaishali station; a resident's confirmation call on the first visit speeds up the gate. {!! $gpgzA('indirapuram-shakti-khand-1', 'Shakti Khand 1') !!}, by Swarna Jayanti Park, mixes builder floors and societies, with Vaishali and Kaushambi both close; the Kala Pathar Road junction jams at office hours.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vaishali-kaushambi') }}">Vaishali and Kaushambi</a>.</strong> {!! $gpgzA('vaishali-sector-7', 'Vaishali Sector 7') !!} is largely high-rise complexes: register the tutor at the gate with tower and flat, and a driving tutor should know the visitor-parking rules.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vasundhara') }}">Vasundhara</a>.</strong> {!! $gpgzA('vasundhara-sector-16', 'Sector 16') !!} is mostly apartments with its own main market; the chowk crowds at peak hours, so a post-rush or weekend slot is easier to keep. Vaishali is the nearest station.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/sahibabad-rajendra-nagar') }}">Sahibabad and Rajendra Nagar</a>.</strong> {!! $gpgzA('shaheed-nagar', 'Shaheed Nagar') !!} has its own Red Line station beside the colony, so a tutor from Delhi can often walk from the platform; in {!! $gpgzA('pasonda', 'Pasonda') !!}, plotted lanes are narrow, so give a clear landmark, and the usual stop is Rajendra Nagar station.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/ghaziabad') }}">Ghaziabad home tutors page</a> lists every locality, and our
    <a href="{{ url('/blog/vaishali-vasundhara-sahibabad-tuition-guide') }}">Vaishali, Vasundhara and Sahibabad
    guide</a> goes deeper into those zones. Ray diagrams, circuit drawings and practical planning are easiest to
    correct in person; past-paper review and multiple-choice drills work well online. Many families combine the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-demo">What to check in the IGCSE physics demo</h2>
  <ul>
    <li>Does the tutor ask for the tier and whether the school uses Paper 5 or Paper 6?</li>
    <li>Do they insist on equation, substitution, answer and units?</li>
    <li>Can they explain how a planning question is marked?</li>
    <li>Do they know the command words and correct loose wording?</li>
    <li>Is there a plan for past papers and for the weeks before the mocks?</li>
    <li>Is the route to your home realistic on a weekday evening?</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpgz-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, shown on the profile before you book. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">home tuition fees in Ghaziabad</a> explain the factors.
  </p>
  <p>
    Tell us the grade, the tier, the practical paper, the series, a recent test result, and your khand, sector or colony
    with free times. We suggest two or three matched tutors; the first lesson is a
    <a href="{{ url('/demo-class') }}">free demo</a>, and swapping tutor later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> first. For chemistry on the same track, see
    <a href="{{ url('/ib-igcse-chemistry-tutor-ghaziabad') }}">IB and IGCSE chemistry tutors in Ghaziabad</a>.
  </p>
  </section>

  </div>
</article>
