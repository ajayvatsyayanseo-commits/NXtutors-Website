{{--
  Long-form guide for the "IB physics tutor Gurgaon" page. Byline: NXTutors
  Academic Team. Source: IB Diploma Programme Physics guide, first assessment
  2025 (themes A to E, SL 150 / HL 240 teaching hours, assessment outlines for
  SL and HL, Paper 1A/1B structure, IA = scientific investigation, 10 hours,
  20%, 3,000-word maximum, four criteria of 6 marks each, collaboration rules;
  collaborative sciences project). Schools are the verified IB list from
  maths-home-tutor-gurgaon, named only as schools students attend.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ibpGuideTitle">
  <h2 id="ibpGuideTitle">IB physics tutor in Gurgaon: DP Physics SL and HL, papers and the IA</h2>

  <p class="nx-guide__lede">
    IB Diploma Physics changed substantially with the course first examined in 2025. The old core-and-options model
    has gone; in its place are five themes taught to everyone, a Paper 1 that pairs multiple choice with data-based
    questions, and an internal assessment that is now one open-ended scientific investigation worth a fifth of the
    grade. Many Gurugram students arrive in DP Physics from IGCSE or CBSE, strong on content but new to the IB's way of
    asking questions. This guide explains the current SL and HL course, how the papers work, how to approach
    data-based questions and the IA with a tutor's help, and how IB physics tuition works across Gurugram.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibp-course">The course</a> ·
    <a href="#ibp-assess">How it is assessed</a> ·
    <a href="#ibp-sl-hl">SL or HL</a> ·
    <a href="#ibp-data">Data-based questions</a> ·
    <a href="#ibp-paper2">Paper 2</a> ·
    <a href="#ibp-hard">Where students need help</a> ·
    <a href="#ibp-ia">The IA</a> ·
    <a href="#ibp-tutor">What a tutor does</a> ·
    <a href="#ibp-bridge">Starting the DP</a> ·
    <a href="#ibp-choose">Choosing a tutor</a> ·
    <a href="#ibp-schools">Gurugram IB schools</a> ·
    <a href="#ibp-where">Home, online and fees</a> ·
    <a href="#ibp-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibp-course">IB DP Physics: five themes for SL and HL</h2>
  <p>
    The IB recommends 150 teaching hours for SL and 240 for HL. Content is arranged in five themes, each split into
    topics. Some topics are for all students, some add extra higher-level material, and a few are HL only.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Physics syllabus, first assessment 2025</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">Topics</th></tr>
    </thead>
    <tbody>
      <tr><td>A. Space, time and motion</td><td>A.1 Kinematics; A.2 Forces and momentum; A.3 Work, energy and power; A.4 Rigid body mechanics (HL); A.5 Galilean and special relativity (HL)</td></tr>
      <tr><td>B. The particulate nature of matter</td><td>B.1 Thermal energy transfers; B.2 Greenhouse effect; B.3 Gas laws; B.4 Thermodynamics (HL); B.5 Current and circuits</td></tr>
      <tr><td>C. Wave behaviour</td><td>C.1 Simple harmonic motion; C.2 Wave model; C.3 Wave phenomena; C.4 Standing waves and resonance; C.5 Doppler effect</td></tr>
      <tr><td>D. Fields</td><td>D.1 Gravitational fields; D.2 Electric and magnetic fields; D.3 Motion in electromagnetic fields; D.4 Induction (HL)</td></tr>
      <tr><td>E. Nuclear and quantum physics</td><td>E.1 Structure of the atom; E.2 Quantum physics (HL); E.3 Radioactive decay; E.4 Fission; E.5 Fusion and stars</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Several topics shared by both levels also carry additional HL content, so an HL student's version of, say,
    simple harmonic motion or gravitational fields goes further than an SL student's. Tutors need to know exactly
    which understandings are SL and which are additional higher level.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-assess">How IB Physics is assessed</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Physics assessment outline, SL and HL</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weighting</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>25 questions, 25 marks</td><td>40 questions, 40 marks</td><td rowspan="2">Paper 1 total: 36%</td></tr>
      <tr><td>Paper 1B: data-based questions</td><td>20 marks</td><td>20 marks</td></tr>
      <tr><td>Paper 1 time</td><td>1 h 30 min</td><td>2 h</td><td></td></tr>
      <tr><td>Paper 2: short-answer and extended response</td><td>1 h 30 min, 55 marks</td><td>2 h 30 min, 90 marks</td><td>44%</td></tr>
      <tr><td>Internal assessment: scientific investigation</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Papers 1A and 1B are sat together without a break. No marks are deducted for wrong multiple-choice answers, so
    no question should be left blank. Calculators are allowed on both papers, and students use a clean copy of the
    Physics data booklet. That booklet saves memorising formulae, but it does not tell a student which equation fits
    a situation; that judgement is what the papers test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-sl-hl">SL or HL physics?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>HL suits</h3>
  <p>
    Students planning engineering, physics or related university courses, and those comfortable with algebraic
    manipulation and multi-step reasoning. HL adds rigid body mechanics, relativity, thermodynamics, induction and
    quantum physics, plus a much longer Paper 2.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>SL suits</h3>
  <p>
    Students who need a group 4 science but whose main interests lie elsewhere, or who are taking another science at
    HL. SL still covers all five themes, so it is not a light option. Pairing it with the right maths course matters
    too; see <a href="{{ url('/ib-maths-tutor-gurgaon') }}">IB maths tutor in Gurgaon</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-data">Handling Paper 1B data-based questions</h2>
  <p>
    Paper 1B is where students coming from IGCSE or CBSE most often lose marks, because it asks them to reason about
    an unfamiliar experiment or dataset rather than recall content. Typical tasks: reading and linearising a graph,
    finding a gradient and its meaning, propagating uncertainties, commenting on whether data supports a relationship,
    and suggesting an improvement to a method.
  </p>
  <ul>
    <li><strong>Uncertainties as a habit.</strong> Absolute, fractional and percentage uncertainties, error bars, and maximum and minimum gradient lines, practised until automatic.</li>
    <li><strong>Linearising.</strong> Knowing what to plot against what so that a relationship becomes a straight line, and what the gradient and intercept then mean.</li>
    <li><strong>Precise language.</strong> "Systematic" and "random" error, "precision" and "accuracy" are not interchangeable, and markschemes reward exact use.</li>
    <li><strong>Short, frequent practice.</strong> One data question at the end of every session builds more skill than a burst before mocks.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB Physics SL/HL, IA and EE guide</a> has more on the papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-paper2">Paper 2: structured and extended responses</h2>
  <p>
    Paper 2 carries 44% of the grade and is where HL students spend the most exam time: two and a half hours for 90
    marks. Questions typically start with a familiar calculation, then move to explanation, then to a less familiar
    application of the same idea. Marks are lost in three predictable ways:
  </p>
  <ul>
    <li><strong>Unexplained numbers.</strong> A correct answer with no working may still lose method marks. Show the equation from the data booklet, the substitution and the unit.</li>
    <li><strong>Explanations that stop short.</strong> "Explain" questions want a chain of reasoning, often two or three linked steps. Students who write one sentence usually get one mark.</li>
    <li><strong>Theme-crossing questions.</strong> Because the syllabus is built on connected themes, a question can start in fields and finish in energy or motion. Revising topics in isolation leaves students unready for this.</li>
  </ul>
  <p>
    A tutor's best tool here is the markscheme: attempt, mark, rewrite. Two or three rewritten answers a week do more
    than a dozen new questions left unmarked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-hard">Where IB physics students usually need help</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Common difficulties by theme</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">What students find hard</th></tr>
    </thead>
    <tbody>
      <tr><td>A. Space, time and motion</td><td>Momentum and impulse problems; at HL, rigid body rotation and special relativity, which feel unlike anything from IGCSE</td></tr>
      <tr><td>B. The particulate nature of matter</td><td>Linking the gas laws to the particle model; at HL, thermodynamic cycles and entropy</td></tr>
      <tr><td>C. Wave behaviour</td><td>Simple harmonic motion graphs and phase; interference and diffraction patterns</td></tr>
      <tr><td>D. Fields</td><td>Field and potential in gravity and electricity; motion of charges in fields; at HL, induction</td></tr>
      <tr><td>E. Nuclear and quantum physics</td><td>Decay and binding energy calculations; at HL, the photoelectric effect and wave-particle duality</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-ia">The internal assessment: the scientific investigation</h2>
  <p>
    The IA is the same for SL and HL, and the same requirement applies in biology, chemistry and physics. It is one
    open-ended investigation in which the student answers their own research question by gathering and analysing
    quantitative data. The IB allocates about 10 hours to it, and the written report has a maximum of 3,000 words
    (tables, graphs, equations, calculations and references do not count).
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IA assessment criteria</caption>
    <thead>
      <tr><th scope="col">Criterion</th><th scope="col">Marks</th><th scope="col">Share of IA</th></tr>
    </thead>
    <tbody>
      <tr><td>Research design</td><td>6</td><td>25%</td></tr>
      <tr><td>Data analysis</td><td>6</td><td>25%</td></tr>
      <tr><td>Conclusion</td><td>6</td><td>25%</td></tr>
      <tr><td>Evaluation</td><td>6</td><td>25%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Data can come from hands-on lab work, fieldwork, spreadsheet modelling, databases or simulations. Students may
    collaborate in groups of up to three, but each must investigate an individual research question and must not
    present the same raw data as another student.
  </p>
  <p>
    <strong>What a tutor can and cannot do.</strong> A tutor can explain the criteria, help a student test whether a
    research question is feasible and physics-rich enough, teach uncertainty analysis and graphing, and ask the
    questions an examiner would. A tutor must not choose the question for the student, design the method, process the
    data or write or edit the report. The IB's academic-integrity rules apply, and the school's own supervisor
    authenticates the work. Any tutor we shortlist for IA support works on that basis.
  </p>
  <p>
    Separately, DP science students take part in the collaborative sciences project, an interdisciplinary project on
    a real-world problem, run by the school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-tutor">What an IB physics tutor should do across the two years</h2>
  <ul>
    <li><strong>DP Year 1, first term.</strong> Bridge from IGCSE or CBSE: kinematics with graphs, vectors, and the uncertainty toolkit.</li>
    <li><strong>DP Year 1, rest of year.</strong> Keep pace with school through themes A to C, with weekly Paper 1B-style data work.</li>
    <li><strong>Around the IA.</strong> Two or three sessions on criteria, question feasibility and analysis skills, without touching the student's report.</li>
    <li><strong>DP Year 2.</strong> Fields and nuclear and quantum physics, then timed Paper 1 and Paper 2 practice against markschemes before mocks and the final exams.</li>
  </ul>
  <p>
    Two sessions a week is common for HL, one or two for SL. For physics tuition beyond the IB, see our
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page and the
    <a href="{{ url('/physics-home-tutor-gurgaon') }}">physics home tutor in Gurgaon</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-bridge">Starting DP Physics from IGCSE, MYP or CBSE</h2>
  <ul>
    <li><strong>From IGCSE Physics.</strong> Content in mechanics, waves and electricity is familiar, but the IB expects more algebra, fields as a unifying idea, and routine uncertainty work. Extended IGCSE students adjust faster than Core. Our <a href="{{ url('/igcse-physics-tutor-gurgaon') }}">IGCSE physics page</a> covers that course.</li>
    <li><strong>From the IB MYP.</strong> Students are used to criteria-based assessment and inquiry, which helps with the IA, but may need to build exam-style calculation fluency for Papers 1 and 2.</li>
    <li><strong>From CBSE Class 10.</strong> Numerical ability is often strong. The adjustment is to data-based questions, extended written explanations and the investigation, none of which CBSE Class 10 emphasises.</li>
  </ul>
  <p>
    A handful of sessions before DP Year 1 starts, focused on graphs, uncertainties and vector work, is usually enough
    to make the first term feel manageable rather than overwhelming.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-choose">Choosing an IB physics tutor in Gurgaon</h2>
  <ol>
    <li><strong>Have they taught the current course?</strong> Ask about the five themes and Paper 1B. A tutor still talking about "options" is working from the old guide.</li>
    <li><strong>Can they explain the IA limits?</strong> They should be clear on what they will and will not do for the investigation.</li>
    <li><strong>Do they teach uncertainties properly?</strong> Ask them to show how they would handle error bars and gradient uncertainty.</li>
    <li><strong>Do they use IB markschemes?</strong> And do they make your child rewrite answers that lost marks?</li>
    <li><strong>Do they know SL from HL?</strong> Especially the additional higher-level content in shared topics.</li>
  </ol>
  <p>
    If the demo misses on these, tell us and we arrange the next tutor at no charge.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-schools">Gurugram IB schools our physics students attend</h2>
  <p>
    Examples of Gurugram schools offering the IB Diploma that students we help attend include Pathways World School,
    Aravali; Pathways School Gurgaon; Lancers International School; GD Goenka World School; Scottish High International
    School; The Shri Ram School, Aravali; and Shiv Nadar School Gurgaon. NXTutors has no link with any of them; boards
    are as stated on each school's website. Students joining the DP from an IGCSE programme may find our
    <a href="{{ url('/igcse-physics-tutor-gurgaon') }}">IGCSE physics tutor in Gurgaon</a> page useful for the bridge.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-where">IB physics tuition in Gurugram: home, online and fees</h2>
  <p>
    IB physics requests come mostly from {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!},
    {!! $ggA('dlf-phase-5', 'DLF Phase 5') !!}, {!! $ggA('dlf-phase-3', 'DLF Phase 3') !!},
    {!! $ggA('nirvana-country', 'Nirvana Country') !!}, {!! $ggA('sector-57', 'Sector 57') !!},
    {!! $ggA('emaar-palm-hills', 'Emaar Palm Hills') !!} and {!! $ggA('m3m-urbana-residences-sector-67-gurugram', 'M3M Urbana') !!},
    as well as families near the Aravali-side schools. Experienced IB physics tutors are a small group, so many
    families combine home and online sessions to get the right person. See all localities on our
    <a href="{{ url('/city/gurugram') }}">Gurugram page</a>.
  </p>
  <p>
    Across NXTutors most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; IB HL physics and IA guidance
    usually sit towards the upper end. You see each tutor's fee before the demo. See our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibp-start">Getting started</h2>
  <p>
    Tell us SL or HL, DP Year 1 or 2, where your child is finding it hard (content, Paper 1B, Paper 2, the IA), your
    locality and your slots. We shortlist two or three ID-verified IB physics tutors; you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and switching is free. For IB chemistry, see our
    <a href="{{ url('/ib-igcse-chemistry-tutor-gurgaon') }}">IB and IGCSE chemistry tutor in Gurgaon</a> page.
  </p>
  </section>

  </div>
</article>
