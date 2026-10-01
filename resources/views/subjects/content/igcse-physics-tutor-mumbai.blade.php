{{--
  Long-form guide for the "IGCSE physics tutor Mumbai" page. Byline: NXTutors
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
  Extended; six topics; "recall and use" equations; practical contexts and
  skills listed in the syllabus; command words published in the syllabus. The
  June, November and (India) March series are as stated in igcse-tutor-mumbai
  and igcse-maths-tutor-gurgaon. No other dates.

  Local detail only from mumbai-research.json and database/seo-content/zones/
  mumbai.json (Tardeo beside Mumbai Central, towers with security desks;
  Bandra East via the east exit of Bandra station and Line 3 at Bandra Colony
  and BKC; Vile Parle East walkable from the station's east side, evening
  highway and airport traffic; Lokhandwala gate desks, Line 2A and D N Nagar;
  Chembur and Tilak Nagar on the Harbour line; Seawoods-Darave-Karave station
  on the Harbour line, gated towers) and the city hub (online widens IGCSE
  choice; international schools keep their own terms). The listing sentence
  reports public tuition listings (plan/mumbai-competitors.md section 4), not
  NXTutors request data. Area links render only for active Mumbai areas. Fee
  wording is the approved sentence. FAQs render from
  faqs/igcse-physics-tutor-mumbai.php.
--}}
@php
  $gpxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gpxA = function (string $slug, string $label) use ($gpxSlugs) {
      return in_array($slug, $gpxSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gpxGuideTitle">
  <h2 id="gpxGuideTitle">IGCSE physics tutor in Mumbai: Cambridge 0625, the practical paper and precise answers</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics rarely defeats students on ideas. It defeats them on detail: an Extended-only equation never
    learned, a results table without units, a description offered where an explanation was asked for, or a practical
    paper about apparatus the student has barely touched. For Mumbai families on a Cambridge programme, the right tutor
    is the one who works on that detail every week and who can reach you on a route that survives the evening rush and
    the monsoon. This page covers the 0625 syllabus for the 2026 to 2028 series, the papers and grades, the practical
    component, past-paper and multiple-choice technique, and how IGCSE physics tuition works across the city. It sits
    under our <a href="{{ url('/physics-home-tutor-mumbai') }}">physics home tutors in Mumbai</a> page and the
    <a href="{{ url('/igcse-tutor-mumbai') }}">IGCSE tutors in Mumbai</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gpx-structure">Three papers per candidate</a> ·
    <a href="#gpx-tier">Tier and grades</a> ·
    <a href="#gpx-content">Six topics</a> ·
    <a href="#gpx-lab">The practical component</a> ·
    <a href="#gpx-papers">Past papers and multiple choice</a> ·
    <a href="#gpx-errors">Six habits</a> ·
    <a href="#gpx-plan">Two-year plan</a> ·
    <a href="#gpx-bridge">Before and after IGCSE</a> ·
    <a href="#gpx-travel">Tutors by zone</a> ·
    <a href="#gpx-mode">Home or online</a> ·
    <a href="#gpx-demo">Demo checklist</a> ·
    <a href="#gpx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gpx-structure">Three papers per candidate</h2>
  <p>
    The 0625 syllabus for 2026, 2027 and 2028 keeps the familiar shape; Cambridge's December 2025 update says there are
    no significant changes that affect teaching. Each candidate takes one multiple-choice paper, one theory paper and one
    practical paper, and the school decides which practical paper it enters.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a Cambridge IGCSE Physics candidate sits, 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core candidate</th><th scope="col">Extended candidate</th><th scope="col">Share</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice: 40 questions in 45 minutes</td><td>Paper 1</td><td>Paper 2</td><td>30%</td></tr>
      <tr><td>Theory: 80 marks in 1 hour 15 minutes, short-answer and structured</td><td>Paper 3</td><td>Paper 4</td><td>50%</td></tr>
      <tr><td>Practical, 40 marks: Paper 5 Practical Test (1 h 15 min) or Paper 6 Alternative to Practical (1 h)</td><td>Paper 5 or 6</td><td>Paper 5 or 6</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Across the whole qualification, Cambridge weights knowledge with understanding at 50 percent, handling information
    and problem-solving at 30 percent, and experimental skills and investigations at 20 percent. Calculators are
    allowed in every part. That makes IGCSE physics a test of laying out a calculation (equation, substitution, answer,
    unit) rather than of mental arithmetic, so method marks survive a slip.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-tier">The tier sets the grade range</h2>
  <p>
    A Core candidate can be awarded grades C to G; an Extended candidate A* to G. Cambridge advises entering for
    Extended any candidate expected to reach grade C or above. Schools usually settle the tier during Grade 9 or early
    Grade 10. An Extended student needs the Supplement material in every topic taught explicitly, with its extra
    equations and multi-step Paper 4 questions, not assumed to follow from the Core. A Core student hoping to move up
    needs a written list of every Supplement outcome, taught and tested topic by topic, with Paper 2 and Paper 4 work to
    show the school, started at least two terms before entries close.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-content">Six topics, and the typical sticking point in each</h2>
  <ul>
    <li><strong>Motion, forces and energy.</strong> Speed-time graphs, momentum and impulse on Extended, efficiency, pressure in liquids. Everything else leans on this topic, so it comes first.</li>
    <li><strong>Thermal physics.</strong> Particle-model explanations and specific heat capacity; precise wording on conduction and convection.</li>
    <li><strong>Waves.</strong> Lens ray diagrams, refraction and critical angle, the electromagnetic spectrum and its uses.</li>
    <li><strong>Electricity and magnetism.</strong> Series and parallel circuits, potential dividers, induction and transformers.</li>
    <li><strong>Nuclear physics.</strong> Half-life from data, balanced decay equations, safety.</li>
    <li><strong>Space physics.</strong> Orbits, the life cycle of stars and, on Extended, the expanding universe. Short, but easily squeezed out at the end of a school scheme.</li>
  </ul>
  <p>
    The syllabus repeatedly says "recall and use" an equation, so students must know them. A tutor should build one
    equation list from the syllabus in the first weeks, with units, and test it regularly rather than in the final month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-lab">The practical component in a Mumbai flat</h2>
  <p>
    Paper 5 and Paper 6 test the same experimental skills in the same contexts; Paper 6 simply asks about experiments on
    paper instead of having students carry them out. The contexts listed in the syllabus include measuring lengths,
    volumes, forces, small distances and short times (reading to the nearest half division and correcting zero errors),
    springs and balances, timing motion and oscillations, heating and cooling curves, connecting circuits to measure
    current and potential difference, and optics with pins, mirrors, prisms, lenses and glass or Perspex blocks.
  </p>
  <p>
    The marks come from skills that can be practised at a dining table: naming the independent and dependent variables,
    explaining which variables are controlled and how, choosing a sensible range and number of readings, drawing a
    results table with units in the headings, plotting with a good scale, and evaluating the method. A spring with a few
    weights or a pendulum and a phone stopwatch is safe, cheap and enough to make Paper 6 feel concrete. A tutor can
    sketch the apparatus with the student, work through real practical questions, and rehearse the planning question
    until it is routine.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-papers">Past papers and the multiple-choice paper</h2>
  <p>
    Past papers only teach if they are marked properly. The routine we ask tutors to follow: topic questions while each
    topic is taught; full timed papers in the correct tier in the final months; every paper marked against the Cambridge
    mark scheme; every lost-mark answer rewritten. Cambridge publishes its command words in the syllabus, and "state",
    "describe", "explain", "suggest" and "calculate" each ask for something different.
  </p>
  <p>
    The multiple-choice paper is 30 percent of the grade and allows just over a minute per question, with no partial
    credit. For calculation items, work the answer out before looking at the options, because the wrong options are
    usually the results of common slips. For conceptual items, strike out options that break a rule you know. Watch
    powers of ten, read diagrams slowly, and after each practice paper log the topic of every wrong answer so the tutor
    knows what to reteach.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-errors">Six habits that protect IGCSE physics marks</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Habit and the error it prevents</caption>
    <thead>
      <tr><th scope="col">Habit</th><th scope="col">Prevents</th></tr>
    </thead>
    <tbody>
      <tr><td>Convert to SI before substituting; a unit on every answer</td><td>Lost marks from mA, kJ and cm left unconverted</td></tr>
      <tr><td>Three lines: equation, substitution, answer</td><td>Losing method marks when the number is wrong</td></tr>
      <tr><td>A weekly glossary test</td><td>Mixing weight with mass, or heat with temperature</td></tr>
      <tr><td>A graph checklist: labels, units, scale, plotted points, a smooth trend line</td><td>Careless marks lost on Paper 5 or 6 and the theory paper</td></tr>
      <tr><td>Answer "explain" with "because…" and a link to particles, forces or energy</td><td>Descriptions that never reach an explanation</td></tr>
      <tr><td>Ruler, sharp pencil, arrows on rays</td><td>Freehand ray diagrams that cannot be credited</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-plan">Grades 9 and 10: where the tutoring hours go</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical IGCSE physics plan, fitted to your school's scheme</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Topics and tasks</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, opening term</td><td>Motion, forces and energy; equation list and glossary started</td><td>One</td></tr>
      <tr><td>Rest of Grade 9</td><td>Thermal physics and waves with topic questions; first practical-paper questions</td><td>One</td></tr>
      <tr><td>Grade 10, first half</td><td>Electricity and magnetism, nuclear and space physics; Supplement points checked off</td><td>One or two</td></tr>
      <tr><td>Final months</td><td>Timed papers in the right tier, a practical paper each week, weak-topic repair</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student who joins mid-course starts wherever the school's scheme has reached, with catch-up sessions on the
    topics already covered.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-bridge">Before and after IGCSE physics</h2>
  <p>
    Students who join a Cambridge school from the State Board, ICSE or CBSE usually know a good deal of physics but meet
    a new style: practical papers, Supplement content and Cambridge's phrasing. A tutor who knows the school's scheme can
    fill the topics already taught before the student arrived. After Grade 10, Extended IGCSE physics is a sound base for
    IB Diploma Physics, where data handling and uncertainties take over; our
    <a href="{{ url('/ib-physics-tutor-mumbai') }}">IB physics tutor in Mumbai</a> page covers that course. Students
    moving to a Class 11 board course should expect a more mathematical treatment, described on our
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-travel">IGCSE physics tutors by zone</h2>
  <p>
    Cambridge physics specialists are fewer than board-exam physics tutors, so we look hard at the route:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a>.</strong> {!! $gpxA('tardeo', 'Tardeo') !!} sits beside Mumbai Central on the Western line, one of the easier southern addresses to reach; pre-register the tutor with the tower's desk.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>.</strong> In {!! $gpxA('bandra-east', 'Bandra East') !!}, the station's east exit and the Line 3 stops at Bandra Colony and the business district bring tutors in; office traffic is heaviest at the start and end of the working day.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a>.</strong> Most lanes of {!! $gpxA('vile-parle-east', 'Vile Parle East') !!} are walkable from the station; highway and airport traffic builds in the evening, so train and auto beats driving.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>.</strong> {!! $gpxA('lokhandwala', 'Lokhandwala') !!} buildings almost all have gate desks and little visitor parking; tutors on Line 2A or from D N Nagar finish by auto.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a>.</strong> {!! $gpxA('chembur', 'Chembur') !!} has two Harbour line stations and road links east and west, so tutors come from several directions.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>.</strong> {!! $gpxA('seawoods', 'Seawoods') !!} has a Harbour line station at its centre, so tutors from Vashi, Nerul, Belapur or Kharghar can come by train.</li>
  </ul>
  <p>
    Every locality is listed on the <a href="{{ url('/city/mumbai') }}">Mumbai home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-mode">Home or online for IGCSE physics</h2>
  <p>
    Online sessions handle mark-scheme work, multiple-choice drills and theory practice well, and they widen the pool of
    tutors who know 0625. Home sessions earn their place for ray diagrams, graph drawing and simple experiments with real
    objects. Because international schools in Mumbai keep their own terms and heavy rain can wreck a weekday journey,
    a common pattern is one home session for practical and drawing work, and one online for papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-demo">Checklist for the IGCSE physics demo</h2>
  <ol>
    <li>Does the tutor ask whether your child is Core or Extended, and whether the school enters Paper 5 or Paper 6?</li>
    <li>Can they explain Supplement content in the topic your child is on?</li>
    <li>Do they mark with the Cambridge mark scheme and ask for rewrites?</li>
    <li>How do they prepare students for the practical paper without a school lab?</li>
    <li>Does your child write, draw and calculate for most of the hour?</li>
    <li>Do they have a plan for the weeks up to your exam series, including June, November or the March series some schools in India use?</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gpx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their fee, shown before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us the grade, tier, practical paper, exam series, your station or locality and your slots. We shortlist two or
    three matched tutors, you choose one for a <a href="{{ url('/demo-class') }}">free demo class</a>, and switching later
    is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or see <a href="{{ url('/igcse-maths-tutor-mumbai') }}">IGCSE
    maths</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-mumbai') }}">IB and IGCSE chemistry</a> tutors in Mumbai.
  </p>
  </section>

  </div>
</article>
