{{--
  Long-form guide for the "IGCSE physics tutor Noida" page. Byline: NXTutors
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
  Extended; six topics (motion, forces and energy; thermal physics; waves;
  electricity and magnetism; nuclear physics; space physics); "recall and
  use" equations; practical contexts and skills listed in the syllabus;
  command words published in the syllabus. June, November and (India) March
  series as stated in igcse-maths-tutor-gurgaon. No other dates.

  Local detail only from database/seo-content/zones/noida.json,
  areas/noida-research.json, noida-zone-guides.json and the Noida hub (CBSE
  most common, IGCSE taught; Sector 12 houses and floors, busy markets and
  tight parking; Sector 33 apartment societies near Noida Sector 34 and City
  Centre stations; Sector 48 low-density plots near Baraula, nearest metro on
  the Aqua Line; Sector 73 Sarfabad village, narrow lanes, Sector 51 / 61
  stations; Sector 105 low-rise houses, Aqua Line Sector 81 / 83; Sector 134
  gated societies, Sector 137 station not walkable, Dadri Road congestion).
  No request data is claimed. Area links render only for active Noida areas.
  Fee wording is the approved sentence. FAQs render from
  faqs/igcse-physics-tutor-noida.php.
--}}
@php
  $gpnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gpnA = function (string $slug, string $label) use ($gpnSlugs) {
      return in_array($slug, $gpnSlugs, true)
          ? '<a href="' . e(url('/city/noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gpnGuideTitle">
  <h2 id="gpnGuideTitle">IGCSE physics tutor in Noida: Cambridge 0625, tiers, the practical paper and exact wording</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics, syllabus 0625, rewards something many students coming from CBSE classrooms are not used
    to: precise wording. A loose explanation that would pass in a school test often scores nothing on a Cambridge mark
    scheme. Add a multiple-choice paper, a choice of tier, and a practical component that some schools assess through
    a written alternative, and there is plenty for a tutor to organise. This page sets out what the syllabus for 2026 to
    2028 asks, how a tutor can cover the practical skills even without a home lab, and how physics tutors reach
    different parts of Noida. It sits under our <a href="{{ url('/physics-home-tutor-noida') }}">physics home tutors in
    Noida</a> page and the <a href="{{ url('/igcse-tutor-noida') }}">IGCSE tutors in Noida</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gpn-papers">The papers</a> ·
    <a href="#gpn-tier">Choosing a tier</a> ·
    <a href="#gpn-topics">Six topics</a> ·
    <a href="#gpn-prac">Paper 5 or 6</a> ·
    <a href="#gpn-words">Wording and equations</a> ·
    <a href="#gpn-model">Precise answers</a> ·
    <a href="#gpn-mcq">The multiple-choice paper</a> ·
    <a href="#gpn-plan">Grades 9 and 10</a> ·
    <a href="#gpn-next">Before and after</a> ·
    <a href="#gpn-zones">Tutors by zone</a> ·
    <a href="#gpn-demo">The demo</a> ·
    <a href="#gpn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gpn-papers">Three papers for every candidate</h2>
  <p>
    Each candidate sits a multiple-choice paper, a theory paper and a practical paper. The tier decides which of the
    first two they take; the school decides which practical paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, series in 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Share</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice: 40 questions in 45 minutes</td><td>Paper 1</td><td>Paper 2</td><td>30%</td></tr>
      <tr><td>Theory: 80 marks in 1 h 15 min, short and structured questions</td><td>Paper 3</td><td>Paper 4</td><td>50%</td></tr>
      <tr><td>Practical, 40 marks</td><td colspan="2">Paper 5, Practical Test (1 h 15 min), or Paper 6, Alternative to Practical (1 h)</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators can be used in every component. Cambridge weights the assessment objectives at roughly half for
    knowledge with understanding, three tenths for handling information and solving problems, and a fifth for
    experimental skills. In other words, half the marks need more than recall. The current version of the syllabus
    states that there are no significant changes affecting teaching, so recent past papers remain good practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-tier">Choosing between Core and Extended</h2>
  <p>
    Core papers lead to grades C to G; Extended papers to A* to G. Cambridge's guidance is that candidates expected to
    reach grade C or above should be entered for Extended. The Extended tier adds Supplement content within each topic,
    marked clearly in the syllabus, and harder problem-solving. A tutor can help the decision by working through
    Supplement material with the student in Grade 9 and reporting how they manage it. If a student will sit Extended,
    the tutor should keep a list of Supplement points and tick them off as each is taught.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-topics">The six topics, and where students stumble</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IGCSE Physics topics and the usual difficulty in each</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Typical difficulty</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time and distance-time graphs; moments; telling mass from weight</td></tr>
      <tr><td>Thermal physics</td><td>Explaining with particles; specific heat capacity calculations; heat versus temperature</td></tr>
      <tr><td>Waves</td><td>Accurate ray diagrams; refraction and total internal reflection; wave equation units</td></tr>
      <tr><td>Electricity and magnetism</td><td>Series and parallel circuits; electromagnetic induction; transformers</td></tr>
      <tr><td>Nuclear physics</td><td>Decay equations; half-life from a graph or table</td></tr>
      <tr><td>Space physics</td><td>Orbits and the Sun's life cycle described in correct terms</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-prac">Paper 5 or Paper 6: practical skills without a home lab</h2>
  <p>
    The school decides whether its candidates sit Paper 5, a hands-on practical test, or Paper 6, a written Alternative
    to Practical. The two test the same skills and contexts: planning an experiment, taking and recording readings,
    drawing graphs, spotting sources of error and suggesting improvements. Ask the school which one your child will sit.
  </p>
  <p>
    A tutor does not need laboratory equipment to cover most of this. Simple measurements at a dining table, such as
    timing a pendulum, measuring a spring's stretch with household weights or recording a cooling cup of water, teach
    recording, tables and graphs perfectly well. Past Paper 6 questions cover the rest. What matters is that the
    student draws every graph by hand, with labelled axes, units and a sensible scale, because those marks are the
    easiest to lose.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-words">Exact wording and the equations to learn</h2>
  <p>
    The syllabus tells students to "recall and use" a set of equations, which means they must know them without a formula
    sheet. A tutor should keep a running list and test it weekly. Wording matters as much: "define", "state",
    "describe", "explain" and "suggest" each ask for something specific, and the syllabus publishes the meaning of each
    command word. Six habits protect marks:
  </p>
  <ol>
    <li><strong>SI units first.</strong> Convert milliamps, kilojoules and centimetres before substituting.</li>
    <li><strong>Equation, substitution, answer.</strong> Three lines, so method marks survive a slip.</li>
    <li><strong>A glossary test each week.</strong> Mass versus weight, heat versus temperature, speed versus velocity.</li>
    <li><strong>A graph checklist.</strong> Labels, units, scale, plotted points, a smooth line or curve.</li>
    <li><strong>Explanations with "because".</strong> Link each answer to particles, forces or energy.</li>
    <li><strong>Ruler and pencil.</strong> Ray diagrams drawn properly, with arrows.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-model">What a precise answer looks like</h2>
  <p>
    The gap between a loose answer and a creditworthy one is often a single idea left unstated. Three illustrations of
    the kind a tutor should rehearse:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Loose answers and precise ones</caption>
    <thead>
      <tr><th scope="col">Question type</th><th scope="col">Loose answer</th><th scope="col">Precise answer</th></tr>
    </thead>
    <tbody>
      <tr><td>Why does a metal rail feel colder than a wooden bench on the same evening?</td><td>"Metal is colder."</td><td>Both are at the same temperature; metal is a better thermal conductor, so it carries thermal energy away from the hand faster.</td></tr>
      <tr><td>What happens to an astronaut's mass and weight on the Moon?</td><td>"They become lighter."</td><td>Mass is unchanged; weight falls because the gravitational field strength is smaller.</td></tr>
      <tr><td>Why does a gas exert pressure on its container?</td><td>"The particles push the walls."</td><td>Particles collide with the walls; each collision exerts a force, and the total force per unit area is the pressure.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A tutor who asks the student to correct the loose version, rather than simply supplying the precise one, builds the
    habit far faster.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-mcq">Handling the multiple-choice paper</h2>
  <p>
    Forty questions in forty-five minutes leaves just over a minute each. Students who score well here usually eliminate
    wrong options before choosing, sketch a quick diagram for any circuit or ray question, and move on rather than
    sinking time into one item. Topic-sorted multiple-choice sets, done under a timer, are a good use of the last ten
    minutes of a session.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-plan">Where the hours go across Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical IGCSE physics plan, adjusted to the school's own scheme</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first term</td><td>Motion, forces and energy; equation list and glossary started</td><td>One</td></tr>
      <tr><td>Rest of Grade 9</td><td>Thermal physics and waves; first practical-paper questions</td><td>One</td></tr>
      <tr><td>Grade 10, first half</td><td>Electricity and magnetism, nuclear and space physics; Supplement points checked</td><td>One or two</td></tr>
      <tr><td>Final months</td><td>Timed papers in the right tier, a practical paper each week, weak topics repaired</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge runs June and November series, and a March series is available to schools in India. A student sitting
    in March needs the final stretch to start earlier.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-next">Before and after IGCSE physics</h2>
  <p>
    Many Grade 9 IGCSE students in Noida arrive from CBSE, the city's most common board, where physics sits inside a
    general science course. The content overlaps, but the expectation of precise written answers is new. After Grade 10,
    students continuing to the IB Diploma will meet the same topics with heavier algebra and data analysis; see the
    <a href="{{ url('/ib-physics-tutor-noida') }}">IB physics tutor in Noida</a> page. Those moving to CBSE or ISC Class
    11 should check the Class 11 syllabus for topics IGCSE does not cover. The
    <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE tutoring guide for parents</a>
    sets out the international track more broadly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-zones">IGCSE physics tutors by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/noida/zone/old-noida') }}">Old Noida</a>:</strong> {!! $gpnA('sector-12', 'Sector 12') !!} is houses and builder floors with busy market lanes, so agree parking for an evening class. {!! $gpnA('sector-33', 'Sector 33') !!} is mostly apartment societies near Noida Sector 34 and Noida City Centre stations, which suits tutors who travel by metro.</li>
    <li><strong><a href="{{ url('/city/noida/zone/central-noida') }}">Central Noida</a>:</strong> {!! $gpnA('sector-48', 'Sector 48') !!} is low-density plots and floors on Dadri Main Road; with the nearest metro on the Aqua Line some distance away, most tutors come by road.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sectors-70-82') }}">Sectors 70 to 82</a>:</strong> {!! $gpnA('sector-73', 'Sector 73') !!} is mostly Sarfabad village with narrow lanes; a tutor on a two-wheeler from Sectors 71, 72 or 74 usually finds it easiest.</li>
    <li><strong><a href="{{ url('/city/noida/zone/noida-expressway') }}">Noida Expressway</a>:</strong> {!! $gpnA('sector-105', 'Sector 105') !!} is low-rise houses reached from Sectors 104, 108 and 110 on local roads. {!! $gpnA('sector-134', 'Sector 134') !!} is gated societies whose nearest station, Sector 137, is not an easy walk, so tutors usually come by two-wheeler or cab.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/noida/zone/sector-62-belt') }}">Sector 62 belt</a> and
    <a href="{{ url('/city/noida/zone/near-noida-extension') }}">Near Noida Extension</a> zones have their own notes;
    see every locality on the <a href="{{ url('/city/noida') }}">Noida home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-mode">Home or online for IGCSE physics</h2>
  <p>
    The tabletop practical work above is easier in person, and Grade 9 students often benefit from a tutor who can see
    them draw a ray diagram. For Grade 10 past-paper work, online sessions with a shared whiteboard work well, and they
    open the choice to Cambridge specialists beyond your sector. Where evening roads are heavy, a mix is common. Our
    guide to <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-demo">Checklist for the IGCSE physics demo</h2>
  <ol>
    <li><strong>Syllabus and tier.</strong> Does the tutor ask for 0625, Core or Extended, and Paper 5 or 6?</li>
    <li><strong>A "define" or "explain" question.</strong> Watch how precisely they model the wording.</li>
    <li><strong>Practical skills.</strong> Ask how they would prepare your child for Paper 6 without a lab.</li>
    <li><strong>Equations.</strong> Do they keep a "recall and use" list?</li>
    <li><strong>Marking.</strong> Do they mark against Cambridge mark schemes?</li>
    <li><strong>Travel.</strong> Which route, and what happens on a jammed evening?</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> adds general questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpn-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-noida') }}">home tuition fees in Noida</a> explain more.
  </p>
  <p>
    Tell us the grade, tier, practical paper, exam series, your sector and society, and the slots that work. We send two
    or three matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live, and you can browse <a href="{{ url('/tutors') }}">tutor profiles</a> first. See also
    <a href="{{ url('/igcse-maths-tutor-noida') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-noida') }}">IB and IGCSE chemistry</a> tutors in Noida.
  </p>
  </section>

  </div>
</article>
