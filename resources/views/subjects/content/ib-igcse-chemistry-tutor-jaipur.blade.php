{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Jaipur" page. Byline:
  NXTutors Academic Team. No schools, coaching institutes, societies or people
  are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon /
  ib-igcse-chemistry-tutor-mumbai, which cite the IB DP Chemistry guide, first
  assessment 2025 (ibo.org: Structure and Reactivity framework, Structure 1-3
  and Reactivity 1-3; SL 150 h / HL 240 h; Paper 1A multiple choice SL 30 /
  HL 40 questions; Paper 1B data-based and experimental questions SL 25 / HL
  35 marks; Paper 1 36%, 1 h 30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50
  marks, HL 2 h 30 min 90 marks, 44%; IA scientific investigation 24 marks,
  20%, 3,000-word maximum, four criteria of 6 marks; data booklet; no penalty
  for wrong MCQ answers) and the Cambridge IGCSE Chemistry 0620 syllabus for
  2026, 2027 and 2028 (version 2, August 2026, no substantial changes
  affecting teaching; cambridgeinternational.org): Core Papers 1 + 3,
  Extended Papers 2 + 4, Paper 5 or 6 practical; MCQ 40 questions 45 min 30%;
  theory 80 marks 1 h 15 min 50%; practical 40 marks 20%; Core C-G, Extended
  A*-G; AO weightings 50/30/20; twelve topics; qualitative analysis notes
  supplied in Papers 5 and 6. No other dates.

  RBSE note: rajeduboard.rajasthan.gov.in Class 10 syllabus 2026-27
  (10_2027.pdf, read 2 Oct 2026): chemistry chapters chemical reactions and
  equations (6), acids, bases and salts (7), metals and non-metals (5),
  carbon and its compounds (7), i.e. 25 of the 80-mark science paper; NCERT
  science book prescribed.

  Local detail only from database/seo-content/zones/jaipur.json,
  areas/jaipur-research.json, areas/jaipur-zone-guides.json and the city hub
  (IB/IGCSE a smaller group; online reach matters most for IB and IGCSE;
  chemistry numericals gain from a tutor at the table). Area links render
  only for active Jaipur areas. Fee wording is the approved sentence. FAQs
  render from faqs/ib-igcse-chemistry-tutor-jaipur.php.
--}}
@php
  $chjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chjA = function (string $slug, string $label) use ($chjSlugs) {
      return in_array($slug, $chjSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp


<article class="nx-guide" aria-labelledby="chjGuideTitle">
  <h2 id="chjGuideTitle">IB and IGCSE chemistry tutors in Jaipur: Cambridge 0620 first, then DP Chemistry</h2>

  <p class="nx-guide__lede">
    A Jaipur student on the international route usually meets school chemistry twice: as Cambridge IGCSE Chemistry
    0620 across Grades 9 and 10, and then as IB Diploma Chemistry, Standard or Higher Level, in the final two years.
    Much of the content travels from one to the other, yet the two are examined in very different ways. Cambridge pays
    for precise recall, careful mole arithmetic and the right practical words; the IB rebuilds chemistry as a story of
    structure and reactivity, sets data problems on paper, and expects each student to design and report an
    investigation. Below we set out both, starting from what a CBSE or RBSE Class 10 student already brings, then the
    practical and investigation rules, and finally how a tutor reaches your colony. Related pages: our
    <a href="{{ url('/chemistry-home-tutor-jaipur') }}">chemistry home tutors in Jaipur</a> page, plus the Jaipur
    <a href="{{ url('/ib-tutor-jaipur') }}">IB</a> and <a href="{{ url('/igcse-tutor-jaipur') }}">IGCSE</a> hubs.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chj-0620">IGCSE 0620 papers</a> ·
    <a href="#chj-ncert">From NCERT Class 10</a> ·
    <a href="#chj-moles">The mole method</a> ·
    <a href="#chj-prac">Paper 5 or 6</a> ·
    <a href="#chj-dp">DP Chemistry</a> ·
    <a href="#chj-dpassess">DP assessment</a> ·
    <a href="#chj-ia">The investigation</a> ·
    <a href="#chj-bridge">IGCSE to DP</a> ·
    <a href="#chj-zones">Tutors by zone</a> ·
    <a href="#chj-mode">Home or online</a> ·
    <a href="#chj-rhythm">Rhythm</a> ·
    <a href="#chj-demo">The demo</a> ·
    <a href="#chj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chj-0620">Cambridge IGCSE Chemistry 0620: three components</h2>
  <p>
    Version 2 of the syllabus covering the 2026, 2027 and 2028 series came out in August 2026, and Cambridge describes
    its changes as minor for teaching purposes.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Components of 0620, by tier</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Format</th><th scope="col">Share</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 items in 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks in 75 minutes</td><td>50%</td></tr>
      <tr><td>Practical, chosen by the school</td><td colspan="2">Paper 5, a Practical Test of 75 minutes, or Paper 6, an Alternative to Practical of one hour</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The tier sets the ceiling: grades C to G on Core, A* to G on Extended, and Cambridge's advice is to enter anyone
    likely to reach a C for Extended. The assessment objectives weigh recall and understanding at 50 percent, using
    information and solving problems at 30, and experimental skill at 20.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-ncert">What a student from CBSE or RBSE already knows</h2>
  <p>
    The Rajasthan Board's current Class 10 science syllabus, like CBSE's, is taught from the NCERT book. Its chemistry
    is four chapters worth 25 of the paper's 80 marks: chemical reactions and equations; acids, bases and salts; metals
    and non-metals; carbon and its compounds. Set against Cambridge's twelve topics, those four reach only a third of
    the course. Some other ideas may be familiar from earlier classes, but a tutor should test rather than assume.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The twelve 0620 topics beside the Class 10 NCERT chemistry chapters</caption>
    <thead>
      <tr><th scope="col">Where they stand</th><th scope="col">0620 topics</th><th scope="col">What still needs teaching</th></tr>
    </thead>
    <tbody>
      <tr><td>Overlap with the four Class 10 chapters</td><td>Chemical reactions; acids, bases and salts; metals; organic chemistry</td><td>Ionic equations, choosing a method to prepare a salt, Cambridge naming and reaction types</td></tr>
      <tr><td>Outside those four chapters</td><td>The particulate nature of matter, atomic structure and bonding, stoichiometry, electrochemistry, energetics, the Periodic Table, the environment, and laboratory techniques with analysis</td><td>Bonding diagrams, moles and concentrations, electrolysis and half-equations, energy profiles, group trends, chromatography and ion tests</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a newcomer we suggest two or three sessions of auditing against the syllabus, then stoichiometry and
    electrochemistry early, since nearly every later topic leans on them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-moles">A mole layout that lasts four years</h2>
  <p>
    Amount-of-substance questions are the commonest place for a capable Extended candidate to lose Paper 4 marks, and
    the quickest place for a tutor to recover them, since the logic is identical every time. The layout we ask tutors
    to drill:
  </p>
  <ol>
    <li>A balanced equation first, because the reacting ratio is read from it.</li>
    <li>Everything given becomes moles: from grams, from concentration times volume, or from a gas volume, after converting units.</li>
    <li>The ratio turns moles of the known substance into moles of the unknown one.</li>
    <li>Those moles go back into grams, volume or concentration, whichever is asked.</li>
    <li>A final glance at units, significant figures and whether the number is believable.</li>
  </ol>
  <p>
    Drilled from the first term, this turns percentage yield, purity and titration work into routine by Grade 10, and
    it is the very foundation the Diploma course assumes on day one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-prac">Paper 5 or Paper 6 without a lab at home</h2>
  <p>
    Cambridge treats the two practical options as equivalent: identical skills, identical contexts, with Paper 6 simply
    describing the experiment instead of asking the student to perform it. Both supply notes for qualitative analysis,
    so memorising every test is unnecessary; speed with the notes and the expected wording for observations is what
    counts. Worth rehearsing: burette readings and concordant titres; sensible precision for volume, mass, temperature
    and time; describing a precipitate, a colour change or a gas; a plan with variables, controls and safety; and
    picking out an anomalous reading. Reagents stay in the school laboratory, not a Jaipur kitchen, so home sessions use
    genuine past practical questions, apparatus sketched by the student and repeated observation wording.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-dp">DP Chemistry: structure and reactivity</h2>
  <p>
    Since the 2025 exams the IB has organised chemistry as two interlocking strands, planned at 150 teaching hours for
    SL and 240 for HL.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB Chemistry framework in outline</caption>
    <thead>
      <tr><th scope="col">Heading</th><th scope="col">Structure strand</th><th scope="col">Reactivity strand</th></tr>
    </thead>
    <tbody>
      <tr><td>1</td><td>Particulate models of matter: the nuclear atom, electron configuration, amount of substance, ideal gases</td><td>Why reactions happen: enthalpy and energy cycles; entropy and spontaneity added at HL</td></tr>
      <tr><td>2</td><td>Bonding models from ionic, covalent and metallic to materials</td><td>Quantity, rate and extent: amounts, kinetics, equilibrium</td></tr>
      <tr><td>3</td><td>Classifying matter: periodic trends and functional groups</td><td>Mechanisms grouped as proton transfer, electron transfer, electron sharing and electron-pair sharing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students raised on separate physical, inorganic and organic chapters often find this layout strange at first. A good
    tutor names the connections out loud, for instance how a functional group met under Structure 3 predicts the
    reaction types that appear under Reactivity 3.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-dpassess">How DP Chemistry is assessed</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Chemistry components</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A, multiple choice</td><td>30 questions</td><td>40 questions</td><td rowspan="2">36% together</td></tr>
      <tr><td>Paper 1B, data and experimental work</td><td>25 marks</td><td>35 marks</td></tr>
      <tr><td>Paper 1 time</td><td>90 minutes</td><td>2 hours</td><td>—</td></tr>
      <tr><td>Paper 2, short and extended answers</td><td>50 marks, 90 minutes</td><td>90 marks, 150 minutes</td><td>44%</td></tr>
      <tr><td>Internal scientific investigation</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators and the data booklet are allowed throughout, and guessing on multiple choice carries no penalty. On
    Paper 2, marks commonly vanish through equations left unbalanced, state symbols forgotten, sloppy curly arrows, or
    a trend described with no reason given. Paper 1B hands over something unfamiliar, perhaps a titration curve or a
    rate graph, and asks for reasoning that includes uncertainty.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-ia">The investigation: help that stays within the rules</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>The task</h3>
  <p>
    Identical for SL and HL. Each student poses a research question, gathers and analyses quantitative data, and
    reports in 3,000 words or fewer. Four criteria, 6 marks apiece, cover research design, data analysis, conclusion
    and evaluation. Focused questions, with a single independent variable and plenty of data points, tend to fare
    better than broad ones.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>The tutor's limits</h3>
  <p>
    Fair help: explaining the criteria, checking that an idea is safe and possible with school equipment, and teaching
    uncertainty and graphing well before the window opens. Not allowed: picking the question, designing the method,
    processing data, or writing or editing any part of the report. The IB's academic-integrity rules govern this.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-bridge">From 0620 to the Diploma, and choosing the level</h2>
  <p>
    Extended stoichiometry gives a head start, but DP work on amounts and equilibrium moves quickly. Bonding moves past
    dot-and-cross diagrams to molecular shape, polarity and forces between molecules, and handling data with
    uncertainties moves to the centre. HL tends to fit students heading for medicine, chemistry or chemical engineering
    who are at ease with calculation; SL fits those who need a science while their main interests lie in other
    subjects. A handful of bridging sessions before DP1 eases the first term. If your child is leaving IGCSE for a Class
    11 Indian-board course, the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry</a> page fits
    better, and families also weighing NEET can read our <a href="{{ url('/neet-home-tutor-jaipur') }}">NEET home tutors
    in Jaipur</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-zones">Chemistry tutors by zone</h2>
  <p>
    International-board chemistry specialists are a smaller pool than Indian-board ones, which makes the journey part of
    the match:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>.</strong> {!! $chjA('civil-lines', 'Civil Lines') !!} is a green area of official bungalows on wide avenues; send the full address and a landmark, and evening traffic on Ajmer Road needs a margin.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>.</strong> {!! $chjA('bapu-nagar', 'Bapu Nagar') !!} mixes older bungalows and newer apartment blocks, and traffic near its junction builds at peak hours. {!! $chjA('adarsh-nagar', 'Adarsh Nagar') !!}, with the Agra Road side close by, is mostly houses and builder floors.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>.</strong> {!! $chjA('chitrakoot', 'Chitrakoot') !!} sits along Ajmer Road with the 200 Feet Bypass close by; tutors come by scooter or car, as there is no station.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>.</strong> {!! $chjA('pratap-nagar', 'Pratap Nagar') !!}, one of the city's largest residential areas, runs on internal roads such as Haldighati Marg and Chetak Marg; give the sector number.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>.</strong> {!! $chjA('malviya-nagar', 'Malviya Nagar') !!} has Jawahar Circle on the main road to the airport; its restaurant streets fill in the evening, so earlier slots travel better.</li>
  </ul>
  <p>
    Every locality appears on the <a href="{{ url('/city/jaipur') }}">Jaipur home tutors</a> page, and our
    <a href="{{ url('/blog/central-and-north-jaipur-tuition-guide') }}">central and north Jaipur guide</a> describes the
    routes at length.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-mode">Home or online for IB and IGCSE chemistry</h2>
  <p>
    The city hub notes that chemistry numericals gain from a tutor at the table, and the same goes for organic
    mechanisms and apparatus drawings. Data questions, marking against the markscheme and talking through an
    investigation idea all sit comfortably on a screen, and going online lets you reach specialists beyond your zone,
    which in Jaipur matters most for the international boards. Plenty of families settle on one visit at home and one
    online slot a week, both with the same person.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-rhythm">A typical rhythm across four years</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry tuition on the international track</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Main work</th><th scope="col">Per week</th></tr>
    </thead>
    <tbody>
      <tr><td>IGCSE Grade 9</td><td>Particles, bonding, the mole layout from the start</td><td>One</td></tr>
      <tr><td>IGCSE Grade 10</td><td>Electrochemistry, energetics, organic; practical-paper questions</td><td>One or two</td></tr>
      <tr><td>Before DP1</td><td>Bridging: shapes, polarity, amounts of substance</td><td>A short block</td></tr>
      <tr><td>DP1</td><td>The framework in step with school; Paper 1B practice</td><td>One or two</td></tr>
      <tr><td>Investigation window</td><td>Skills only; the report untouched</td><td>A handful of sessions overall</td></tr>
      <tr><td>DP2</td><td>Timed papers marked against IB markschemes</td><td>Two for HL; one or two for SL</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-demo">What to check in the chemistry demo</h2>
  <ol>
    <li>Before teaching, did the tutor pin down the course: 0620 Core or Extended, Paper 5 or 6, or DP SL or HL?</li>
    <li>For a student from CBSE or RBSE, did they name the 0620 topics that will be new?</li>
    <li>Give them a yield or titration question. Is their layout one your child could copy line for line?</li>
    <li>For the Diploma, do they connect topics through the structure and reactivity strands?</li>
    <li>Are official mark schemes part of every week, or an occasional extra?</li>
    <li>Without prompting, do they say where their help with the investigation ends?</li>
  </ol>
  <p>
    Not convinced after the demo? Let us know, and another matched tutor gives a free demo of their own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors price their own sessions, and the figure appears on each profile ahead of the demo; for background, read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home tuition fees in Jaipur</a>.
  </p>
  <p>
    Send the course, the grade or DP year, the topics causing worry, your colony and the times you can offer. Two or
    three matched tutors come back; one gives a <a href="{{ url('/demo-class') }}">free demo class</a>, and changing
    tutor afterwards costs nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a>. Other routes in: <a href="{{ url('/tutors') }}">tutor profiles</a>, the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> guide, and the Jaipur pages for
    <a href="{{ url('/ib-physics-tutor-jaipur') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-jaipur') }}">IGCSE physics</a>.
  </p>
  </section>

  </div>
</article>
