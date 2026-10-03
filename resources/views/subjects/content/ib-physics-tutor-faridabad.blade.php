{{--
  Long-form guide for the "IB physics tutor Faridabad" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named; no school counts.

  Course facts are reworded from ib-physics-tutor-mumbai / ib-physics-tutor-
  gurgaon, which cite the IB Diploma Programme Physics guide, first assessment
  2025 (ibo.org): five themes A to E (A Space, time and motion; B The
  particulate nature of matter; C Wave behaviour; D Fields; E Nuclear and
  quantum physics) with A.4 rigid body mechanics, A.5 Galilean and special
  relativity, B.4 thermodynamics, D.4 induction and E.2 quantum physics HL
  only; SL 150 h / HL 240 h; Paper 1A multiple choice (SL 25, HL 40 questions)
  and Paper 1B data-based questions (20 marks), sat together, 36% (SL 1 h 30
  min, HL 2 h); Paper 2 (SL 1 h 30 min, 55 marks; HL 2 h 30 min, 90 marks) 44%;
  IA scientific investigation 24 marks, 20%, about 10 hours, 3,000-word
  maximum, four criteria of 6 marks (research design, data analysis,
  conclusion, evaluation); groups of up to three with individual research
  questions and no shared raw data; data from lab work, fieldwork,
  spreadsheets, databases or simulations; no penalty for wrong MCQ answers;
  calculators and the data booklet on both papers; collaborative sciences
  project. No other dates.

  Board mix only as the Faridabad hub view states it (a smaller group study for
  the IB or Cambridge IGCSE; online widens the pool for IB, IGCSE and senior
  specialist subjects; IB candidates sit the May series). No claim about where
  IB families live. Local detail only from
  database/seo-content/areas/faridabad-research.json, faridabad-zone-guides.json
  and zones/faridabad.json (Sector 8 plotted homes, metro then auto; Sector
  16A has Old Faridabad station, railway station in 20A; Sector 31 has Mewla
  Maharajpur station, Old Sher Shah Suri Road busy in office hours; Sainik
  Colony in Sector 49, stations some way off, auto or own vehicle; Sector 77
  townships with visitor passes, Escorts Mujesar then auto across the canal;
  Sector 82 high-rise societies, Neelam Chowk Ajronda or Bata Chowk then auto).
  Area links render only for active Faridabad areas. Fee wording is the
  approved sentence. FAQs: faqs/ib-physics-tutor-faridabad.php.
--}}
@php
  $fbpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fbpA = function (string $slug, string $label) use ($fbpSlugs) {
      return in_array($slug, $fbpSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="fbpGuideTitle">
  <h2 id="fbpGuideTitle">IB physics tutor in Faridabad: themes, data skills and an investigation that stays the student's own</h2>

  <p class="nx-guide__lede">
    IB Diploma Physics asks for more than solving numericals. Students must read unfamiliar data, handle
    uncertainties, write explanations that earn every mark, and design an investigation of their own. In Faridabad,
    where the IB is a smaller group than CBSE or ICSE, a tutor who knows the current IB guide well may live a few
    stations up the Violet Line or teach online rather than next door. This page from the NXTutors Academic Team
    explains the five themes, the papers and their weights, how to choose between SL and HL, the skills behind Paper
    1B and Paper 2, the limits on help with the internal assessment, and how a tutor reaches your part of the city.
    For the wider subject, see our <a href="{{ url('/physics-home-tutor-faridabad') }}">physics home tutors in
    Faridabad</a> page and the <a href="{{ url('/ib-tutor-faridabad') }}">IB tutors in Faridabad</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fbp-themes">Five themes</a> ·
    <a href="#fbp-papers">Papers and weights</a> ·
    <a href="#fbp-level">SL or HL</a> ·
    <a href="#fbp-1b">Paper 1B data skills</a> ·
    <a href="#fbp-p2">Paper 2 writing</a> ·
    <a href="#fbp-ia">The investigation</a> ·
    <a href="#fbp-from">Coming from another board</a> ·
    <a href="#fbp-reach">Travel by zone</a> ·
    <a href="#fbp-mode">Home or online</a> ·
    <a href="#fbp-demo">The demo</a> ·
    <a href="#fbp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fbp-themes">What does the current IB physics course cover?</h2>
  <p>
    The guide first assessed in 2025 organises physics into five themes that all students study, with a planned 150
    hours at SL and 240 at HL. Most topics are common to both levels, some shared topics go deeper at HL, and five
    topics belong to HL alone.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The five DP Physics themes, read from an HL student's side</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">Where the common course starts</th><th scope="col">Topic added for HL only</th></tr>
    </thead>
    <tbody>
      <tr><td>A, Space, time and motion</td><td>Motion, forces, momentum and energy</td><td>A.4 rigid bodies; A.5 Galilean and special relativity</td></tr>
      <tr><td>B, The particulate nature of matter</td><td>Heat transfer, the greenhouse effect, gases, electric circuits</td><td>B.4 thermodynamics</td></tr>
      <tr><td>C, Wave behaviour</td><td>Oscillations, waves, resonance and the Doppler effect</td><td>No separate topic; extra depth inside the shared ones</td></tr>
      <tr><td>D, Fields</td><td>Gravitational and electromagnetic fields and charged particles moving in them</td><td>D.4 induction</td></tr>
      <tr><td>E, Nuclear and quantum physics</td><td>The atom, radioactivity, fission, fusion and stars</td><td>E.2 quantum physics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The detail that catches tutors out is the extra HL depth inside shared topics such as simple harmonic motion and
    gravitational fields. Someone who has taught older versions of the course, or only Indian-board physics, needs to
    know which higher-level understandings sit inside each topic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-papers">How the marks are divided</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics assessment, current guide</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A (multiple choice) and 1B (data-based, 20 marks), sat together</td><td>25 MCQs; 1 hour 30 minutes in total</td><td>40 MCQs; 2 hours in total</td><td>36%</td></tr>
      <tr><td>Paper 2 (short and extended answers)</td><td>55 marks, 1 hour 30 minutes</td><td>90 marks, 2 hours 30 minutes</td><td>44%</td></tr>
      <tr><td>Scientific investigation (internal assessment)</td><td colspan="2">Marked out of 24 at both levels</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    There is no negative marking on the multiple-choice items, so a reasoned guess is always better than a gap. Calculators are allowed on both
    papers, and students have the physics data booklet, which lists the equations but leaves the student to choose
    the right one; many questions are built to test exactly that choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-level">Choosing between SL and HL</h2>
  <p>
    The five HL-only topics in the table, plus a Paper 2 worth 90 marks rather than 55, make HL a heavy commitment. It
    suits students considering engineering or physics who enjoy algebra and extended reasoning. SL is still the whole
    five-theme course, not a light version, and suits a student whose other HL subjects carry their main interest.
    Look at the maths choice alongside it: students pairing HL physics with AI SL maths sometimes want extra calculus practice, and our
    <a href="{{ url('/ib-maths-tutor-faridabad') }}">IB maths tutors in Faridabad</a> page discusses. A longer
    discussion of level, IA and extended essay choices is in our
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics planning guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-1b">Practising for Paper 1B, the data paper</h2>
  <p>
    In Paper 1B the student meets an experiment or a table of results for the first time and has to make sense of
    it under time pressure. Nobody is born good at this; it comes from small doses of practice, every week:
  </p>
  <ol>
    <li><strong>Describe before you calculate.</strong> Axes, units and the shape of the graph first; then what the gradient and intercept mean physically.</li>
    <li><strong>Straighten the curve.</strong> Decide which quantities to plot so the expected relationship becomes linear.</li>
    <li><strong>Carry uncertainty through.</strong> Move between absolute, fractional and percentage forms, draw error bars, and find the steepest and shallowest lines that fit them.</li>
    <li><strong>Use the precise term.</strong> Random or systematic error, precision or accuracy: markschemes reward the exact word.</li>
    <li><strong>Improve the actual method.</strong> A specific change to the experiment in front of you, not "take more readings".</li>
  </ol>
  <p>
    Ending each DP1 session with a single data question builds this far better than a burst of practice before the
    mocks.
  </p>
  <p>
    A small example shows the habit. A student times one swing of a pendulum as 1.5 s with a reaction-time uncertainty
    of about 0.2 s: that is roughly 13% uncertainty in the period. Timing twenty swings, about 30 s, with the same
    0.2 s uncertainty brings it below 1%. A student who can explain that trade-off in a sentence, and then show how the
    uncertainty in the period feeds into a value of g, is doing exactly what Paper 1B and the investigation reward. A
    tutor should set little problems like this until the reasoning is automatic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-p2">Paper 2: turning knowledge into marks</h2>
  <p>
    A Paper 2 question often starts with a calculation, asks for an explanation, then applies the idea in a new
    setting, sometimes linking two themes. The usual leaks are a final number with no equation or substitution above it, a
    one-line reply to a question that says "explain", and a student who revised each theme in isolation and freezes
    when a question jumps between them. What works is a loop: the student answers, the tutor marks with the official
    markscheme beside them, and the student writes the answer again properly. A few answers rewritten each week
    outweigh dozens attempted and never marked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-ia">The scientific investigation: where a tutor must stop</h2>
  <p>
    SL and HL students do an identical internal assessment, built on a format shared by all the DP sciences. Each student poses a
    question that can be answered with numbers, collects or sources the data, and writes it up in no more than 3,000
    words after roughly 10 hours of class time. Four criteria, each out of 6, cover the design, the analysis, the
    conclusion and the evaluation. The data can be gathered in a lab or in the field, or drawn from a spreadsheet
    model, a database or a simulation. Up to three students may collaborate, yet every one of them needs a distinct
    research question and their own raw data.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>A tutor can</h3>
  <p>Go through what each criterion is looking for, ask questions that let the student judge whether an idea is workable and physics-rich, and teach graphing and uncertainty methods as general skills.</p>
    </div>
    <div class="nx-guide__card">
  <h3>A tutor cannot</h3>
  <p>Pick the research question, plan the procedure, crunch the numbers, or draft or edit any part of the write-up. Such help breaches IB academic-integrity rules, and the supervising teacher has to confirm the work is the student's.</p>
    </div>
  </div>
  <p>
    The collaborative sciences project that schools run is a separate interdisciplinary task, not part of the
    investigation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-from">Starting DP physics after CBSE, HBSE, ICSE, IGCSE or the MYP</h2>
  <p>
    Students arriving from CBSE or the Haryana board often know a lot of formulae and solve standard numericals well,
    but are new to Paper 1B's open data questions and to writing extended explanations. ICSE students usually write
    well and need more graphing and uncertainty work. IGCSE students have met the practical skills but must lift
    their mathematics, especially algebra and later calculus for HL. MYP students are comfortable with inquiry but not
    with long timed papers. A few weeks of kinematics with graphs, vectors and uncertainty at the start of DP1 helps
    every one of them. Our <a href="{{ url('/igcse-physics-tutor-faridabad') }}">IGCSE physics tutors in
    Faridabad</a> page covers the Cambridge stage before the Diploma.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-reach">Getting an IB physics tutor to your sector</h2>
  <ul>
    <li><strong><a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">Central sectors</a>:</strong> {!! $fbpA('sector-16a', 'Sector 16A') !!} has Old Faridabad station within it and the railway station next door, so a tutor needs no car; {!! $fbpA('sector-8', 'Sector 8') !!} is a plotted sector where the metro and a short auto cover the trip.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28 to 31 and 37</a>:</strong> {!! $fbpA('sector-31', 'Sector 31') !!} has Mewla Maharajpur station inside it, which is more reliable than driving Old Sher Shah Suri Road in office hours.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a>:</strong> in {!! $fbpA('sainik-colony', 'Sainik Colony') !!} the nearest stations are some distance away, so tutors usually come by auto or their own vehicle; afternoon or later-evening slots avoid the worst traffic.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, 75 to 80</a>:</strong> {!! $fbpA('sector-77', 'Sector 77') !!} has large townships with visitor passes; a metro rider comes to Escorts Mujesar and crosses the canal by auto.</li>
    <li><strong><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad, 81 to 89</a>:</strong> {!! $fbpA('sector-82', 'Sector 82') !!} is mostly high-rise societies; Neelam Chowk Ajronda or Bata Chowk and an auto is the usual route, with online sessions handy on busy evenings.</li>
  </ul>
  <p>
    <a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a> and
    <a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh</a> sit on the same Violet
    Line; the <a href="{{ url('/city/faridabad') }}">Faridabad page</a> lists every sector, and our
    <a href="{{ url('/blog/ballabhgarh-and-surajkund-tuition-guide') }}">Ballabhgarh and Surajkund guide</a> covers the
    hill-side roads.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-mode">Is online IB physics tuition a good idea?</h2>
  <p>
    Much of IB physics, from derivations to data questions, transfers well to a shared screen, and online lessons
    widen the choice of IB specialists, which matters for a smaller group. What needs care is handwriting: graphs,
    uncertainty working and Paper 2 answers should be written on paper and photographed for marking, not typed. A
    common pattern is a weekly home session in DP1, when foundations are laid, and more online sessions in DP2 when the
    timetable tightens before the May exams.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A two-year rhythm for IB physics tuition</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>First weeks of DP1</td><td>Motion graphs, vector resolution, and how uncertainties are recorded and combined</td><td>One or two</td></tr>
      <tr><td>Remainder of DP1</td><td>Following the school's order of themes, with one data question closing every session</td><td>One</td></tr>
      <tr><td>Investigation period</td><td>Criteria explained, uncertainty methods taught; no help with the report itself</td><td>One</td></tr>
      <tr><td>DP2 to mocks and May</td><td>Paper 2 rewrites, timed Paper 1A and 1B, HL topics consolidated</td><td>Two</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-demo">How to judge an IB physics demo</h2>
  <ol>
    <li><strong>The current guide.</strong> Ask which topics are HL only. The answer should be quick and specific.</li>
    <li><strong>A Paper 1B question.</strong> Ask the tutor to walk your child through an unseen data question and its uncertainties.</li>
    <li><strong>Marking.</strong> Give them a Paper 2 answer your child wrote and watch how they mark it.</li>
    <li><strong>The investigation.</strong> The tutor should describe what they will and will not do in the same terms as the IB's rules.</li>
    <li><strong>Route and back-up.</strong> How they travel to you, and what happens on an evening when the canal crossing or Mathura Road is jammed.</li>
  </ol>
  <p>
    You see two or three matched tutors with fees before the demo; the first class is free and a later switch is free.
    A tutor's profile is marked Verified only after an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fbp-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">tuition
    fees in Faridabad</a> for what changes the figure.
  </p>
  <p>
    Send the level, DP year, the topics or components that worry you, your sector and possible slots, and book the
    <a href="{{ url('/demo-class') }}">free demo class</a>, or browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. For chemistry, see <a href="{{ url('/ib-igcse-chemistry-tutor-faridabad') }}">IB and IGCSE chemistry
    tutors in Faridabad</a>.
  </p>
  </section>

  </div>
</article>
