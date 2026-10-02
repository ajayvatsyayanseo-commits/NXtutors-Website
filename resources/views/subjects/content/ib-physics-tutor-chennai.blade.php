{{--
  Long-form guide for the "IB physics tutor Chennai" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-physics-tutor-gurgaon (via
  ib-physics-tutor-mumbai), which cites the IB Diploma Programme Physics guide,
  first assessment 2025 (ibo.org): five themes A to E and their topics, with
  A.4, A.5, B.4, D.4 and E.2 HL only; SL 150 h / HL 240 h; Paper 1A multiple
  choice (SL 25, HL 40 questions) and Paper 1B data-based questions (20 marks),
  sat together, 36% (SL 1 h 30 min, HL 2 h); Paper 2 (SL 1 h 30 min, 55
  marks; HL 2 h 30 min, 90 marks) 44%; IA scientific investigation 24 marks,
  20%, about 10 hours, 3,000-word maximum, four criteria of 6 marks; groups of
  up to three with individual research questions and no shared raw data; data
  from lab work, fieldwork, spreadsheets, databases or simulations; no penalty
  for wrong MCQ answers; calculators and the data booklet on both papers;
  collaborative sciences project. No other dates.

  Local detail only from database/seo-content/zones/chennai.json,
  chennai-research.json and chennai-zone-guides.json (Perungudi MRTS station,
  OMR peaks when offices open and close, gated complexes; Thiruvanmiyur MRTS
  and bus terminus, where the ECR begins; Shenoy Nagar Green Line station,
  Poonamallee High Road; Vadapalani Green Line station, Inner Ring Road and
  Arcot Road traffic, most families in flats; Medavakkam no rail yet, Line 5
  under construction, tutors by two-wheeler; Guindy suburban and Blue Line
  stations, Kathipara at office hours; OMR tip: online tutor for IB papers when
  no home tutor fits) and the city hub (IB students sit May papers; school
  calendars differ). Area links render only for active Chennai areas. Fee
  wording is the approved sentence. FAQs render from
  faqs/ib-physics-tutor-chennai.php.
--}}
@php
  $cipSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cipA = function (string $slug, string $label) use ($cipSlugs) {
      return in_array($slug, $cipSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cipGuideTitle">
  <h2 id="cipGuideTitle">IB physics tutor in Chennai: the 2025 course, data questions and an investigation the student owns</h2>

  <p class="nx-guide__lede">
    Chennai students arrive in IB Diploma Physics from very different places. Some have State Board or CBSE habits of
    fast numericals and memorised derivations; some come from IGCSE with a practical paper behind them; some are MYP
    students used to inquiry but not to timed papers. The course the IB first examined in 2025 tests all of them in the
    same way: unfamiliar data, explanations that must link cause and effect, and an investigation the student designs.
    This page explains the SL and HL course, the exam components, the skills a tutor should build week by week, the
    rules around the internal assessment, and how IB physics tuition runs across the city. Its parent pages are
    <a href="{{ url('/physics-home-tutor-chennai') }}">Chennai physics home tutors</a> and the
    <a href="{{ url('/ib-tutor-chennai') }}">IB tutors in Chennai</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cip-course">The course map</a> ·
    <a href="#cip-assess">Assessment</a> ·
    <a href="#cip-levels">SL or HL</a> ·
    <a href="#cip-1b">Paper 1B skills</a> ·
    <a href="#cip-p2">Paper 2 technique</a> ·
    <a href="#cip-ia">The investigation</a> ·
    <a href="#cip-start">Starting from another board</a> ·
    <a href="#cip-year">Through DP1 and DP2</a> ·
    <a href="#cip-zones">Tutors across Chennai</a> ·
    <a href="#cip-mode">Home or online</a> ·
    <a href="#cip-demo">The demo</a> ·
    <a href="#cip-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cip-course">The course map: five themes, and what HL adds</h2>
  <p>
    The old structure of a core plus options has gone. Every student now works through five themes, lettered A to E:
    space, time and motion; the particulate nature of matter; wave behaviour; fields; and nuclear and quantum physics.
    The IB plans 150 teaching hours for SL and 240 for HL, and the extra 90 hours at HL go into five additional topics
    plus deeper treatment of several shared ones.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where HL students go beyond SL in DP Physics</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">HL-only topic</th><th scope="col">Why it needs early attention</th></tr>
    </thead>
    <tbody>
      <tr><td>A (motion)</td><td>Rigid body mechanics</td><td>Carries the forces and energy of Theme A over to objects that rotate</td></tr>
      <tr><td>A (motion)</td><td>Galilean and special relativity</td><td>Counter-intuitive ideas that need weeks to settle, not a late cram</td></tr>
      <tr><td>B (matter)</td><td>Thermodynamics</td><td>Extends the gas laws met earlier in the same theme</td></tr>
      <tr><td>D (fields)</td><td>Induction</td><td>Rests on the magnetic-field work earlier in Theme D</td></tr>
      <tr><td>E (nuclear and quantum)</td><td>Quantum physics</td><td>Joins atomic structure in Theme E to the wave ideas of Theme C</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Theme C has no HL-only topic, yet HL students still meet harder versions of shared material there and elsewhere:
    simple harmonic motion, gravitational fields and the Doppler effect all carry additional higher-level
    understandings. A tutor needs to know precisely where the SL version stops.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-assess">How the grade is assessed</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>IB DP Physics components, first assessment 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>25 questions</td><td>40 questions</td><td rowspan="2">36% together; 1 h 30 min (SL) or 2 h (HL)</td></tr>
      <tr><td>Paper 1B: data-based questions</td><td>20 marks</td><td>20 marks</td></tr>
      <tr><td>Paper 2: short and extended answers</td><td>55 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Internal assessment: scientific investigation</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    There is no penalty for a wrong multiple-choice answer, so a blank is a wasted chance. Both papers allow a
    calculator and come with the physics data booklet. Having the formulae printed removes the memory load but not the
    judgement: picking the right relationship for an unfamiliar situation is exactly what many questions probe.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-levels">SL or HL physics: deciding</h2>
  <p>
    Students heading for engineering or physics degrees, and who enjoy algebra and multi-step reasoning, usually take
    HL; it brings the five extra topics above and a Paper 2 of 90 marks. SL still spans all five themes, so it is real
    physics, and it suits a student whose Higher Level subjects lie elsewhere. Look at the maths course as well: a
    student taking HL physics alongside AI SL maths may need extra calculus help, which our <a href="{{ url('/ib-maths-tutor-chennai') }}">IB maths tutor in Chennai</a> page
    discusses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-1b">Paper 1B: the data skills to build every week</h2>
  <p>
    Paper 1B presents an experiment or dataset the student has not seen and asks them to make sense of it. These
    skills improve only with steady practice:
  </p>
  <ul>
    <li><strong>Reading the graph first:</strong> axes, units and trend, and what the gradient and intercept mean physically, before any calculation.</li>
    <li><strong>Linearising:</strong> choosing variables to plot so that the expected relationship gives a straight line.</li>
    <li><strong>Handling uncertainty:</strong> absolute, fractional and percentage uncertainty, error bars, and the steepest and shallowest lines of fit.</li>
    <li><strong>Precise vocabulary:</strong> random and systematic error, precision and accuracy, used exactly as markschemes expect.</li>
    <li><strong>Specific improvements:</strong> a change to this particular apparatus or procedure, never a generic "repeat the readings".</li>
  </ul>
  <p>
    One short data question closing every session through DP1 does more than a burst of practice before mocks. For
    more on levels, the IA and the extended essay, read the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB
    physics guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-p2">Paper 2: answers that keep their marks</h2>
  <p>
    A typical Paper 2 question starts with a calculation, moves to an explanation and then applies the same physics
    somewhere new, often crossing between themes. The usual losses: a bare number with no equation or substitution, an
    "explain" that offers one sentence where three linked steps were wanted, and revision done topic by topic so the
    cross-theme part feels foreign. The cure is a loop of attempt, markscheme, rewrite. Two or three answers redone
    properly each week beat a stack of fresh questions that nobody marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-ia">The scientific investigation: help that stays within the rules</h2>
  <p>
    SL and HL students do the identical task, in the same format as the chemistry and biology investigations. Over
    about ten hours of class time, the student poses a question, gathers and analyses quantitative data, and reports
    in 3,000 words at most. The marking uses four six-mark criteria: research design, data analysis, conclusion,
    evaluation. Acceptable data sources include hands-on experiments, fieldwork, spreadsheet models, databases and
    simulations. Up to three students may collaborate, though each must have an individual research question and their
    own raw data.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>What a tutor can do</h3>
  <p>
    Walk through the criteria; let the student test whether an idea can be done in school and holds enough physics;
    teach graphing, uncertainty propagation and the background theory long before the IA window.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>What a tutor must not do</h3>
  <p>
    Pick the question, plan the procedure, crunch the numbers, or draft or polish any part of the write-up. Breaking
    this endangers the diploma under IB academic-integrity rules; the school supervisor signs off the work as the
    student's own.
  </p>
    </div>
  </div>
  <p>
    The collaborative sciences project, which schools also run, is a separate interdisciplinary task and does not
    count as the investigation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-start">Starting DP Physics from another board</h2>
  <ul>
    <li><strong>Tamil Nadu State Board or CBSE Class 10:</strong> fast with formula-based problems; less used to unseen datasets, explanations of several linked steps, or planning an experiment of their own.</li>
    <li><strong>ICSE Class 10:</strong> neat, complete working is already a habit; uncertainties and open-ended IB questions take getting used to.</li>
    <li><strong>IGCSE Physics:</strong> familiar mechanics, waves and electricity; more algebra, fields as a unifying idea and routine uncertainty work are the step up. The <a href="{{ url('/igcse-physics-tutor-chennai') }}">IGCSE physics tutor in Chennai</a> page covers what they already know.</li>
    <li><strong>IB MYP:</strong> at ease with inquiry tasks; slower when calculations must be done quickly under exam conditions.</li>
  </ul>
  <p>
    Whatever the starting point, a handful of sessions before DP1 on vectors, graph reading and uncertainty makes the
    opening term much smoother.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-year">Through DP1 and DP2: where tutoring time goes</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A common IB physics tutoring rhythm</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Work in sessions</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening weeks of DP1</td><td>Vectors, motion graphs and how to handle uncertainties</td><td>One or two</td></tr>
      <tr><td>Remainder of DP1</td><td>Themes A to C alongside school; one Paper 1B-style question each week</td><td>One at SL, two at HL</td></tr>
      <tr><td>Investigation window</td><td>Feasibility checks and analysis skills only; the student writes alone</td><td>A few sessions across the window</td></tr>
      <tr><td>DP2</td><td>Themes D and E; then full timed papers checked against IB markschemes</td><td>Two, rising before mocks and May</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Chennai's schools keep different calendars, and IB students sit their papers in May, so the tutor plans from your
    school's own dates.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-zones">IB physics tutors across Chennai</h2>
  <p>
    Tutors with real IB physics experience are few in any city, so the journey shapes the shortlist:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a>.</strong> {!! $cipA('perungudi', 'Perungudi') !!} has an MRTS station, so a tutor from Velachery or Mylapore can ride in and finish by auto; the OMR itself peaks when offices open and close.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a>.</strong> {!! $cipA('thiruvanmiyur', 'Thiruvanmiyur') !!} has its own MRTS station and a large bus terminus; the junctions where the ECR and OMR begin are slow at office hours, so late afternoon works better.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>.</strong> {!! $cipA('shenoy-nagar', 'Shenoy Nagar') !!}'s Green Line station lets tutors from Anna Nagar, Kilpauk or Egmore arrive by metro and walk.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>.</strong> In {!! $cipA('vadapalani', 'Vadapalani') !!}, Arcot Road and the Inner Ring Road are heavy at office hours, so tutors tend to take the metro; most homes are flats, so allow a moment at the gate.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a>.</strong> {!! $cipA('guindy', 'Guindy') !!} has both a suburban station and a Blue Line stop, which makes it reachable from much of the city. {!! $cipA('medavakkam', 'Medavakkam') !!} has no rail yet, so a tutor on a two-wheeler from Velachery or Madipakkam is the practical choice.</li>
  </ul>
  <p>
    See every locality on the <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-mode">Home or online for IB physics</h2>
  <p>
    Data questions, marking against the markscheme and talking through an investigation idea all translate well to a
    screen, and going online lets you choose from IB-experienced tutors anywhere, which our zone notes suggest for the
    OMR corridor when nobody local fits. Sitting together helps most with long Paper 2 problems and with students who
    drift when alone. Many Chennai families combine the two: a home lesson at the weekend, online on a weekday, same
    tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-demo">What to ask in the IB physics demo</h2>
  <ol>
    <li>Can the tutor list the five themes and the HL-only topics? Talk of "options" means they are thinking of the old course.</li>
    <li>Give them a graph with error bars and ask for the maximum and minimum gradient lines.</li>
    <li>Listen for a plain statement of the IA limits before you have to ask.</li>
    <li>Check that marking follows IB markschemes and that lost-mark answers get rewritten.</li>
    <li>Ask where, inside shared topics, the HL-only understandings begin.</li>
    <li>How will they reach your home, and at what time, given the traffic on your side of the city?</li>
  </ol>
  <p>
    If the demo misses on these, let us know and another matched tutor gives a free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cip-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Fees are set by each tutor and displayed before the demo. What moves them is covered in the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai tuition fees</a>.
  </p>
  <p>
    Tell us SL or HL, the DP year, where the trouble lies (content, Paper 1B, Paper 2 or the investigation), your
    locality and the hours you can offer. Two or three matched tutors come back to you, one gives a
    <a href="{{ url('/demo-class') }}">free demo class</a>, and a later switch is free. Joining tutors pass an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first. Other places to look: <a href="{{ url('/tutors') }}">tutor
    profiles</a>, our national <a href="{{ url('/physics-home-tutor') }}">physics</a> page, and
    <a href="{{ url('/ib-igcse-chemistry-tutor-chennai') }}">IB and IGCSE chemistry</a> help in Chennai.
  </p>
  </section>

  </div>
</article>
