{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Mumbai" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon, which cites
  the IB DP Chemistry guide, first assessment 2025 (ibo.org: Structure and
  Reactivity framework, SL 150 h / HL 240 h; Paper 1A multiple choice SL 30 /
  HL 40 questions; Paper 1B data-based and experimental questions SL 25 / HL 35
  marks; Paper 1 36%, 1 h 30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50 marks,
  HL 2 h 30 min 90 marks, 44%; IA scientific investigation 24 marks, 20%,
  3,000-word maximum, four criteria of 6 marks; data booklet; no penalty for
  wrong MCQ answers) and the Cambridge IGCSE Chemistry 0620 syllabus for 2026,
  2027 and 2028 (version 2, August 2026, no substantial changes affecting
  teaching; cambridgeinternational.org): Core Papers 1 + 3, Extended Papers 2
  + 4, Paper 5 or 6 practical; MCQ 40 questions 45 min 30%; theory 80 marks
  1 h 15 min 50%; practical 40 marks 20%; Core C-G, Extended A*-G; AO
  weightings 50/30/20; twelve topics; qualitative analysis notes supplied in
  Papers 5 and 6. No other dates.

  Local detail only from mumbai-research.json and database/seo-content/zones/
  mumbai.json (Colaba: Churchgate and CSMT nearby, Line 3 to Cuffe Parade,
  defence-area entry rules; Santacruz East: east side of Santacruz station and
  the Line 3 Santacruz station at Vakola, autos into Kalina; Jogeshwari West:
  Western and Harbour lines, Line 2A at Oshiwara; Goregaon East: Western and
  Harbour lines, Line 7, gated complexes; Ghatkopar: Central line and Line 1
  interchange; Vashi: Harbour and Trans-Harbour lines, numbered sectors) and
  the city hub (online widens IB/IGCSE choice; international schools keep their
  own terms). The listing sentence reports public tuition listings
  (plan/mumbai-competitors.md section 4), not NXTutors request data. Area links
  render only for active Mumbai areas. Fee wording is the approved sentence.
  FAQs render from faqs/ib-igcse-chemistry-tutor-mumbai.php.
--}}
@php
  $chxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chxA = function (string $slug, string $label) use ($chxSlugs) {
      return in_array($slug, $chxSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="chxGuideTitle">
  <h2 id="chxGuideTitle">IB and IGCSE chemistry tutor in Mumbai: Cambridge 0620, then DP Chemistry SL or HL</h2>

  <p class="nx-guide__lede">
    On Mumbai's international track, chemistry usually arrives in two instalments: Cambridge IGCSE Chemistry 0620 in
    Grades 9 and 10, then IB Diploma Chemistry at Standard or Higher Level in the last two years. The chemistry
    overlaps; the examining does not. IGCSE wants exact recall, tidy calculations and confident practical vocabulary.
    The IB rebuilds the subject around structure and reactivity, tests data handling on paper, and asks each student to
    run an investigation of their own. A tutor who knows both can carry a student across the gap rather than starting
    again at Grade 11. This page covers both courses for current exam sessions, the practical skills each examines, the
    IB investigation and its limits, and how chemistry tuition on these boards works across Mumbai, Thane and Navi
    Mumbai. See also our <a href="{{ url('/chemistry-home-tutor-mumbai') }}">chemistry home tutors in Mumbai</a> page and
    the <a href="{{ url('/ib-tutor-mumbai') }}">IB</a> and <a href="{{ url('/igcse-tutor-mumbai') }}">IGCSE</a> hubs
    for Mumbai.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chx-0620">IGCSE 0620 components</a> ·
    <a href="#chx-topics">Twelve topics</a> ·
    <a href="#chx-moles">The mole method</a> ·
    <a href="#chx-prac">IGCSE practical paper</a> ·
    <a href="#chx-dp">DP Chemistry framework</a> ·
    <a href="#chx-dpexam">DP assessment</a> ·
    <a href="#chx-ia">The investigation</a> ·
    <a href="#chx-cross">From 0620 to the DP</a> ·
    <a href="#chx-travel">Tutors by zone</a> ·
    <a href="#chx-mode">Home or online</a> ·
    <a href="#chx-demo">Demo checklist</a> ·
    <a href="#chx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chx-0620">IGCSE Chemistry 0620: what each candidate sits</h2>
  <p>
    The 0620 syllabus for 2026, 2027 and 2028 was reissued as version 2 in August 2026, and Cambridge says nothing in it
    substantially changes teaching. Every candidate sits a multiple-choice paper, a theory paper and a practical paper.
  </p>
  <ul>
    <li><strong>Multiple choice (30%).</strong> Paper 1 for Core, Paper 2 for Extended: 40 questions in 45 minutes.</li>
    <li><strong>Theory (50%).</strong> Paper 3 for Core, Paper 4 for Extended: 80 marks of short-answer and structured questions in one hour and fifteen minutes.</li>
    <li><strong>Practical (20%).</strong> Paper 5, the Practical Test (1 h 15 min), or Paper 6, the Alternative to Practical (1 h), 40 marks either way, chosen by the school.</li>
  </ul>
  <p>
    Core candidates can reach grades C to G; Extended candidates A* to G. Students expected to achieve a C or better
    belong on Extended. Across the qualification, knowledge with understanding carries half the weight, handling
    information and problem-solving 30 percent, and experimental skills 20 percent.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-topics">The twelve 0620 topics in four groups</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Grouping the IGCSE chemistry content for revision</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Syllabus topics</th><th scope="col">Usual difficulty</th></tr>
    </thead>
    <tbody>
      <tr><td>Particles and quantities</td><td>States of matter; atoms, elements and compounds; stoichiometry</td><td>Bonding diagrams; moles, concentration and gas volumes on Extended</td></tr>
      <tr><td>Change and energy</td><td>Electrochemistry; chemical energetics; chemical reactions</td><td>Electrolysis products and half-equations; energy profiles; rate and equilibrium</td></tr>
      <tr><td>Patterns and materials</td><td>Acids, bases and salts; the Periodic Table; metals; chemistry of the environment</td><td>Choosing a salt preparation; ionic equations; reactivity and extraction</td></tr>
      <tr><td>Carbon and the lab</td><td>Organic chemistry; experimental techniques and chemical analysis</td><td>Naming and reaction types; chromatography and Rf values; tests for ions and gases</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-moles">The mole method that carries from Grade 9 to the DP</h2>
  <p>
    Stoichiometry is where strong Extended candidates most often drop a grade on Paper 4, and it is also where tuition
    pays off fastest, because the method never changes:
  </p>
  <ol>
    <li>Balance the equation; the mole ratio lives there.</li>
    <li>Turn the given quantity into moles, from a mass, from a concentration and volume, or from a gas volume, with units converted first.</li>
    <li>Apply the ratio to reach moles of the unknown.</li>
    <li>Turn those moles back into whatever the question wants.</li>
    <li>Check units, significant figures and whether the size of the answer makes sense.</li>
  </ol>
  <p>
    Set out this way from the first term, yield, purity and titration questions become routine by Grade 10, and the
    student arrives at IB Chemistry with exactly the base it assumes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-prac">Preparing for Paper 5 or Paper 6 without a home lab</h2>
  <p>
    Cambridge treats the two practical papers as testing the same skills in the same contexts; Paper 6 only asks about
    experiments on paper. Notes for qualitative analysis are printed in both, so students need not memorise every test,
    but they must use the notes quickly and record what they see in the expected words. The skills to rehearse are
    measuring gas and solution volumes, masses, temperatures and times with suitable precision; reading a burette and
    judging concordant titres; describing colours, precipitates and gases; planning with variables, controls, apparatus
    and safety; and spotting anomalous results. Chemicals belong in the school lab, not on a kitchen counter in a Mumbai
    flat, so a tutor's job is to work through real past practical questions, draw the apparatus and make the
    observation vocabulary automatic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-dp">DP Chemistry: two strands, six headings</h2>
  <p>
    The IB course first assessed in 2025 organises chemistry under two linked ideas, structure and reactivity, with 150
    recommended teaching hours at SL and 240 at HL.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IB Chemistry framework in brief</caption>
    <thead>
      <tr><th scope="col">Strand</th><th scope="col">Headings and what they cover</th></tr>
    </thead>
    <tbody>
      <tr><td>Structure</td><td>1: particulate models of matter, from the nuclear atom and electron configurations to the mole and ideal gases. 2: bonding and structure, ionic, covalent and metallic, through to materials. 3: classifying matter, the periodic table and functional groups.</td></tr>
      <tr><td>Reactivity</td><td>1: what drives reactions, enthalpy changes and energy cycles, with entropy and spontaneity at HL. 2: how much, how fast and how far reactions go. 3: mechanisms, through proton transfer, electron transfer, electron sharing and electron-pair sharing.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students raised on separate physical, organic and inorganic chapters can find the framework disorienting. A tutor
    helps by drawing the links explicitly, for instance from functional groups under Structure 3 to the reaction types
    under Reactivity 3.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-dpexam">How DP Chemistry is assessed</h2>
  <ul>
    <li><strong>Paper 1 (36%).</strong> Paper 1A has 30 multiple-choice questions at SL and 40 at HL; Paper 1B carries data-based questions and questions on experimental work, 25 marks at SL and 35 at HL. One and a half hours in total at SL, two at HL.</li>
    <li><strong>Paper 2 (44%).</strong> Short-answer and extended-response questions, 50 marks in one and a half hours at SL, 90 marks in two and a half hours at HL.</li>
    <li><strong>Internal assessment (20%).</strong> One scientific investigation, marked out of 24.</li>
  </ul>
  <p>
    The data booklet and a calculator are available in both papers, and wrong multiple-choice answers lose nothing.
    Paper 1B expects students to read an unfamiliar titration curve, rate graph or enthalpy table, calculate with
    uncertainties and propose improvements. Paper 2 marks slip away on unbalanced equations, missing state symbols,
    careless curly arrows and trends named without a reason. HL adds depth across most topics and a long Paper 2 that
    needs timed practice for stamina.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-ia">The IB investigation: where a tutor stops</h2>
  <p>
    The IA is the same task at SL and HL: the student frames a research question, collects and analyses quantitative
    data and writes it up in no more than 3,000 words. It is marked on research design, data analysis, conclusion and
    evaluation, 6 marks each. Strong chemistry investigations are usually narrow (one independent variable, one clear
    dependent variable) with enough data points to show a trend with uncertainties.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>A tutor can</h3>
  <p>
    Explain the criteria; help the student judge whether an idea is feasible with school equipment and safe; teach the
    chemistry behind it; teach uncertainty propagation, graphing and error analysis well before the IA window.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A tutor cannot</h3>
  <p>
    Choose the question, design the procedure, process the data, or write or edit any of the report. The IB's
    academic-integrity rules apply and the school supervisor authenticates the work.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-cross">From 0620 to the DP, and the right level</h2>
  <p>
    Extended IGCSE stoichiometry is a good platform, but the DP's treatment of the mole and of amounts of change moves
    fast. Bonding goes past dot-and-cross into shapes, polarity and intermolecular forces. Data and uncertainty, light at
    IGCSE, become central. HL suits students aiming at medicine, chemistry or chemical engineering who handle
    calculations comfortably; SL suits students who need a science but whose weight lies elsewhere. A few sessions in
    the break before DP1 smooth the start. Students leaving IGCSE for a Class 11 board course should read our
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page instead.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical chemistry tuition rhythm on the international track</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>IGCSE Grade 9</td><td>One</td></tr>
      <tr><td>IGCSE Grade 10, with practical-paper work</td><td>One or two</td></tr>
      <tr><td>Break before DP1</td><td>A short bridging block</td></tr>
      <tr><td>DP1</td><td>One or two</td></tr>
      <tr><td>IA window</td><td>Two or three sessions in total, skills only</td></tr>
      <tr><td>DP2</td><td>Two at HL, one or two at SL</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-travel">IB and IGCSE chemistry tutors by zone</h2>
  <p>
    Chemistry specialists for the international boards are fewer than for the Indian boards, so the route decides a lot:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a>.</strong> For {!! $chxA('colaba', 'Colaba') !!}, Churchgate and CSMT are close and Line 3 ends at neighbouring Cuffe Parade; inside the defence area, settle visitor entry before the demo.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>.</strong> {!! $chxA('santacruz-east', 'Santacruz East') !!} is reached from the east side of the station or the Line 3 stop on the highway at Vakola, then an auto into Kalina.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>.</strong> {!! $chxA('jogeshwari-west', 'Jogeshwari West') !!} has a station on both the Western and Harbour lines plus Line 2A stops at Oshiwara.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a>.</strong> {!! $chxA('goregaon-east', 'Goregaon East') !!} is served by Goregaon station and Line 7 on the highway; gated complexes register visitors at the gate or by app.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a>.</strong> {!! $chxA('ghatkopar', 'Ghatkopar') !!} is where Line 1 meets the Central line, so western-suburb tutors arrive without changing at Dadar.</li>
    <li><strong><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>.</strong> {!! $chxA('vashi', 'Vashi') !!} sits on the Harbour and Trans-Harbour lines, so tutors come by train from Mumbai, Thane or Panvel.</li>
  </ul>
  <p>
    All localities are on the <a href="{{ url('/city/mumbai') }}">Mumbai home tutors page</a>, and the
    <a href="{{ url('/blog/mumbai-western-suburbs-tuition-guide') }}">western suburbs guide</a> covers travel in more
    detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-mode">Home or online for IB and IGCSE chemistry</h2>
  <p>
    Organic mechanisms, structure drawings and practical-paper apparatus are easiest with the tutor at the table.
    Paper 1B data work, markscheme marking and investigation discussions translate well to a shared screen, and online
    widens the choice of specialists. International schools in Mumbai keep their own terms and the monsoon can wreck a
    weekday crossing, so one home session plus one online session with the same tutor is a common, sturdy arrangement.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-demo">What to check in the chemistry demo</h2>
  <ol>
    <li>Does the tutor ask for the exact course: 0620 Core or Extended with Paper 5 or 6, or DP Chemistry SL or HL?</li>
    <li>For the DP, do they teach through the structure and reactivity framework?</li>
    <li>Do they use Cambridge mark schemes and IB markschemes as working tools, every week?</li>
    <li>Ask them to set out a mole calculation. Is the layout one your child could copy?</li>
    <li>Do they explain, without being asked, what they will not do for the investigation?</li>
    <li>Which line do they travel on, and how will they handle a heavy-rain week?</li>
  </ol>
  <p>
    If the demo does not convince you, tell us and the next matched tutor gets a free demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their fee and you see it before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">home tuition fees in Mumbai</a>.
  </p>
  <p>
    Tell us the course, grade or DP year, what worries you, your station or locality and your slots. We shortlist two or
    three matched tutors, you choose one for a <a href="{{ url('/demo-class') }}">free demo class</a>, and switching later
    is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry
    home tutor</a> guide, or <a href="{{ url('/ib-physics-tutor-mumbai') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-mumbai') }}">IGCSE physics</a> tutors in Mumbai.
  </p>
  </section>

  </div>
</article>
