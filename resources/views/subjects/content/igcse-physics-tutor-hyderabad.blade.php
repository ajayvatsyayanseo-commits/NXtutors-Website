{{--
  Long-form guide for the "IGCSE physics tutor Hyderabad" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon and
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

  Telangana facts from bse.telangana.gov.in (G.O.Ms.No.33 of 2022, G.O.Ms.No.
  23 of 2024: SSC Physical Science a separate 40-mark part on its own day;
  G.O.Ms.No.15 of 2018: Telugu compulsory to Class X in every school) and the
  TGBIE circular of 01-10-2026 (first-year Intermediate Physics 60 theory +
  15-mark external practical), as cited in telangana-board-tutor-hyderabad.
  Local detail only from areas/hyderabad-research.json, hyderabad-zone-guides
  .json and zones/hyderabad.json. Area links render only for active
  Hyderabad areas. Fee wording is the approved sentence. FAQs render from
  faqs/igcse-physics-tutor-hyderabad.php.
--}}
@php
  $hgpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $hgpA = function (string $slug, string $label) use ($hgpSlugs) {
      return in_array($slug, $hgpSlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="hgpGuideTitle">
  <h2 id="hgpGuideTitle">IGCSE physics tutor in Hyderabad: Cambridge 0625, the practical paper and exact answers</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE Physics rewards a particular kind of student: one who knows the equations by heart, uses units
    without being reminded, and can describe an experiment they may never have done in a school lab. Students who
    did well on a recall-heavy Class 8 science course are sometimes surprised by how much of the 0625 grade depends on
    that precision. This page sets out the syllabus for exams in 2026 to 2028, the choice of practical paper, the six
    topics and their usual traps, and how we find a Cambridge physics tutor who can reach your home in Hyderabad. It
    sits under our <a href="{{ url('/physics-home-tutor-hyderabad') }}">Hyderabad physics tutors</a> page and the
    <a href="{{ url('/igcse-tutor-hyderabad') }}">IGCSE tutors in Hyderabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#hgp-confirm">Before matching</a> ·
    <a href="#hgp-papers">What a candidate sits</a> ·
    <a href="#hgp-tier">Core or Extended</a> ·
    <a href="#hgp-topics">The six topics</a> ·
    <a href="#hgp-equations">Equations and units</a> ·
    <a href="#hgp-practical">Paper 5 or Paper 6</a> ·
    <a href="#hgp-switch">Switching boards</a> ·
    <a href="#hgp-plan">Grades 9 and 10</a> ·
    <a href="#hgp-next">After IGCSE</a> ·
    <a href="#hgp-zones">Tutors by zone</a> ·
    <a href="#hgp-demo">Demo</a> ·
    <a href="#hgp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="hgp-confirm">Three answers we need before matching</h2>
  <ul>
    <li><strong>The tier.</strong> Core or Extended, or still to be decided by the school.</li>
    <li><strong>The practical paper.</strong> The school chooses between Paper 5, a practical test in a lab, and Paper 6, a written alternative; your child's teacher will know which.</li>
    <li><strong>The exam series.</strong> June or November, or March, which Cambridge makes available to schools in India. It fixes the length of the plan.</li>
  </ul>
  <p>
    Cambridge's 2026 to 2028 syllabus has no significant changes affecting teaching compared with the previous one, so
    recent past papers remain good practice material, though a tutor should still check them against the current
    topic list.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-papers">What a 0625 candidate sits</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, exams in 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core candidates</th><th scope="col">Extended candidates</th><th scope="col">Length and marks</th><th scope="col">Share</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions, 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory, short and structured answers</td><td>Paper 3</td><td>Paper 4</td><td>80 marks, 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Practical skills</td><td colspan="2">Paper 5 Practical Test (1 hour 15 minutes) or Paper 6 Alternative to Practical (1 hour)</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A calculator is allowed in every part. The assessment objectives are weighted 50% to knowledge with
    understanding, 30% to handling information and solving problems, and 20% to experimental skills.
    In practice, half the grade asks the student to use physics in an unfamiliar situation or to plan, record and
    evaluate an experiment, not just to recall it. Forty multiple-choice questions in 45 minutes leaves a little over
    a minute each, so steady timed practice matters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-tier">Core or Extended, and why physics differs from maths here</h2>
  <p>
    Core candidates can achieve grades C to G; Extended candidates A* to G. Cambridge advises that candidates expected
    to reach grade C or above should be entered for Extended. Unlike IGCSE maths, the Extended physics range runs all
    the way down to G, so the risk of entering a borderline student for Extended is smaller. The extra Extended content,
    marked as supplement material in the syllabus, is where a tutor's time should go once the core is secure.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-topics">The six topics, and the confusion typical of each</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 content areas with the misunderstanding a tutor watches for</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Common confusion</th><th scope="col">The fix</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Treating mass and weight as the same; reading speed from a distance-time graph's height rather than its gradient</td><td>Graph-reading drills; a vocabulary check every week</td></tr>
      <tr><td>Thermal physics</td><td>Heat and temperature used interchangeably; specific heat capacity versus latent heat</td><td>Particle-level explanations written out in full</td></tr>
      <tr><td>Waves</td><td>Mixing up reflection, refraction and diffraction; sloppy ray diagrams</td><td>Ruler-drawn diagrams with arrows, every time</td></tr>
      <tr><td>Electricity and magnetism</td><td>Current "used up" in a circuit; series and parallel rules swapped</td><td>Circuit puzzles before formulae</td></tr>
      <tr><td>Nuclear physics</td><td>Half-life misread from a decay graph; alpha, beta and gamma properties muddled</td><td>A summary table the student builds and tests themselves on</td></tr>
      <tr><td>Space physics</td><td>Orbits and the life cycle of stars learned as stories without the physics</td><td>Linking each fact to gravity or energy</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-equations">Equations, units and command words</h2>
  <p>
    The syllabus lists equations students must "recall and use", which means they must be memorised, not looked up.
    A tutor should help the student build a one-page list early in Grade 9 and test it weekly until it is automatic.
    Alongside it:
  </p>
  <ul>
    <li><strong>Units:</strong> convert to SI before substituting and write a unit on every final answer.</li>
    <li><strong>Working:</strong> equation, substitution, answer, on separate lines, so method can be credited even if the number is wrong.</li>
    <li><strong>Command words:</strong> the syllabus defines terms such as "state", "describe", "explain" and "calculate", and each expects a different kind of answer. "Explain" needs a reason, usually tied to particles, forces or energy.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-practical">Paper 5 or Paper 6 when there is no lab at home</h2>
  <p>
    Both practical papers test the same skills in the same experimental contexts, which the syllabus lists. Paper 5 is
    done in a school lab with real apparatus; Paper 6 asks the student to answer on paper as if they had done the
    experiment. Either way, a home tutor can cover most of the skills at a dining table:
  </p>
  <ul>
    <li>identifying independent, dependent and control variables in a described experiment;</li>
    <li>drawing results tables with units in the headings and consistent decimal places;</li>
    <li>plotting graphs with sensible scales and a best-fit line, then reading a gradient;</li>
    <li>suggesting realistic sources of error and improvements;</li>
    <li>simple measurements with a ruler, stopwatch or kitchen scale to make the ideas concrete.</li>
  </ul>
  <p>
    One written practical question each week from the start of Grade 10 is usually enough to make this component
    dependable.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-switch">Joining IGCSE from CBSE or the state syllabus</h2>
  <p>
    Families who move to Hyderabad from another city, or switch schools within it, sometimes change board at Grade 9.
    A student coming from CBSE or the Telangana state syllabus usually knows a fair amount of physics content but
    meets three new demands at once:
  </p>
  <ol>
    <li><strong>A multiple-choice paper worth 30%</strong>, with forty questions to finish in 45 minutes.</li>
    <li><strong>A practical component worth 20%</strong>, even when it is the written Paper 6, which tests planning and data handling rather than recall.</li>
    <li><strong>Cambridge's command words and precision</strong>: units on every answer, explanations that give a reason, and diagrams drawn with a ruler.</li>
  </ol>
  <p>
    A few weeks spent on those three, using Cambridge past questions on topics the student already knows, settles most
    of the early anxiety. Students from the state syllabus, where the SSC now sets Physical Science as its own
    separate paper, are used to physics standing alone, which helps. One rule continues after a switch: under
    Telangana's 2018 law, Telugu remains a compulsory language to Class 10 in schools of every board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-plan">Grades 9 and 10: how the tutoring hours are used</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>An IGCSE physics plan built back from the exam series</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of Grade 9</td><td>Equation list, unit conversions and graph reading; the school's first topic</td><td>One</td></tr>
      <tr><td>Rest of Grade 9</td><td>Topics in the school's order with past questions by topic</td><td>One</td></tr>
      <tr><td>Grade 10, first half</td><td>Remaining topics, Extended supplement content, weekly practical-paper question</td><td>One or two</td></tr>
      <tr><td>Before the series</td><td>Timed multiple-choice and theory papers in the right tier, mark scheme review</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-next">After IGCSE: IB, Intermediate or ISC</h2>
  <p>
    Hyderabad students leave IGCSE in several directions. For the IB Diploma, see our
    <a href="{{ url('/ib-physics-tutor-hyderabad') }}">IB physics tutor in Hyderabad</a> page: the mechanics, waves and
    electricity carry over well, while uncertainty analysis and heavier algebra are new. For the state's Intermediate
    course, physics is taught from new first-year textbooks from 2026-27, with 60 theory marks and a 15-mark external
    practical in the first year; our <a href="{{ url('/telangana-board-tutor-hyderabad') }}">Telangana Board tutors</a>
    page explains the scheme, and the <a href="{{ url('/ts-eapcet-tutor-hyderabad') }}">TG EAPCET</a> page covers the
    state entrance. Students who move into the state system from IGCSE often find derivations and longer written
    answers the biggest change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-zones">IGCSE physics tutors by zone</h2>
  <p>
    From our area research, here is how tutors usually reach each part of the city:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/hyderabad/zone/kukatpally-miyapur-nizampet') }}">Kukatpally, Miyapur and Nizampet</a>:</strong> {!! $hgpA('kukatpally', 'Kukatpally') !!} has three Red Line stations along the highway, so many homes are a short walk or auto from the metro; allow extra time near the Y junction at peak hours.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/manikonda-narsingi-kokapet') }}">Manikonda, Narsingi and Kokapet</a>:</strong> {!! $hgpA('manikonda', 'Manikonda') !!} is reached from Raidurg on the Blue Line by auto or cab, or by Shaikpet Main Road; townships register visitors at the gate.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/sainikpuri-alwal-trimulgherry') }}">Sainikpuri, Alwal and Trimulgherry</a>:</strong> {!! $hgpA('sainikpuri', 'Sainikpuri') !!} has wide, numbered roads and many independent houses; Ammuguda on the MMTS is the nearest station, and most tutors come by road.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/uppal-habsiguda-nacharam') }}">Uppal, Habsiguda and Nacharam</a>:</strong> {!! $hgpA('nagole', 'Nagole') !!} is the Blue Line's eastern terminus, so a tutor from the western side of the city can ride straight across.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/dilsukhnagar-lb-nagar-vanasthalipuram') }}">Dilsukhnagar, LB Nagar and Vanasthalipuram</a>:</strong> for {!! $hgpA('vanasthalipuram', 'Vanasthalipuram') !!}, tutors take the Red Line to LB Nagar and an auto along the highway into the plotted colonies.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/mehdipatnam-tolichowki-attapur') }}">Mehdipatnam, Tolichowki and Attapur</a>:</strong> {!! $hgpA('mehdipatnam', 'Mehdipatnam') !!} is a bus hub with routes to Secunderabad, Uppal and Gachibowli; the junction is heavy at office hours, so start after the evening rush.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/east-and-south-hyderabad-tuition-guide') }}">east and south Hyderabad</a> and
    <a href="{{ url('/blog/west-hyderabad-tuition-guide') }}">west Hyderabad</a> guides add more local detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-mode">Home or online for IGCSE physics</h2>
  <p>
    Diagrams, graphs and practical-paper tables are easier to correct with the tutor beside the student, pencil in hand.
    Online works well for multiple-choice drills, past-paper review and topics like space physics that lean on
    animations. Families far from the western or central metro lines often find a Cambridge physics specialist easier
    to keep online, with a home session added before mocks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-demo">A checklist for the IGCSE physics demo</h2>
  <ol>
    <li><strong>Syllabus and tier.</strong> The tutor should ask for 0625, Core or Extended, Paper 5 or 6, and the series.</li>
    <li><strong>A "recall and use" check.</strong> Ask how they make sure the equation list is memorised.</li>
    <li><strong>A practical-paper question.</strong> Ask them to teach one Paper 6 item on variables or graphing.</li>
    <li><strong>An "explain" answer.</strong> Watch whether they push your child to give the reason, not just the fact.</li>
    <li><strong>Travel and timing.</strong> Which line or road, and what they will do if traffic makes them late.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="hgp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees, which you see before booking; read the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">Hyderabad fees</a> post for the factors.
  </p>
  <p>
    Send the tier, practical paper, series, grade, your locality and free hours. We share two or three matched tutors;
    the first lesson is a <a href="{{ url('/demo-class') }}">free demo</a> and a later switch is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. For maths and chemistry on the same track, see
    <a href="{{ url('/igcse-maths-tutor-hyderabad') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-hyderabad') }}">IB and IGCSE chemistry</a> tutors in Hyderabad, or
    browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  </section>

  </div>
</article>
