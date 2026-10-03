{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Pune" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon, which cites
  the IB DP Chemistry guide, first assessment 2025 (ibo.org: Structure and
  Reactivity framework with Structure 1-3 and Reactivity 1-3; SL 150 h / HL
  240 h; Paper 1A multiple choice SL 30 / HL 40 questions; Paper 1B data-based
  and experimental questions SL 25 / HL 35 marks; Paper 1 36%, 1 h 30 min SL /
  2 h HL; Paper 2 SL 1 h 30 min 50 marks, HL 2 h 30 min 90 marks, 44%; IA
  scientific investigation 24 marks, 20%, 3,000-word maximum, four criteria
  of 6 marks; data booklet; no penalty for wrong MCQ answers; entropy and
  spontaneity at HL) and the Cambridge IGCSE Chemistry 0620 syllabus for 2026,
  2027 and 2028 (version 2, August 2026, no substantial changes affecting
  teaching; cambridgeinternational.org): Core Papers 1 + 3, Extended Papers
  2 + 4, Paper 5 or 6 practical; MCQ 40 questions 45 min 30%; theory 80 marks
  1 h 15 min 50%; practical 40 marks 20%; Core C-G, Extended A*-G; AO
  weightings 50/30/20; twelve topics; qualitative analysis notes supplied in
  Papers 5 and 6. No other dates.

  Local detail only from database/seo-content/zones/pune.json,
  areas/pune-research.json, pune-zone-guides.json and the Pune hub view
  (Model Colony: Shivaji Nagar Purple Line and two Aqua Line stations within
  reach, standalone houses; Sus: no metro, single main road, gate details a
  day ahead, online for specialist subjects; Pimple Nilakh: no metro, bridges
  slow at office hours, watchman takes names in mid-sized societies; Wagholi:
  no metro, approved Aqua Line extension, block number and gate pass, online
  helps families further out; Wanowrie: no metro, Pune Junction and Camp
  nearest, roads to Solapur Road, online alongside a local tutor for
  specialist subjects; Dhankawadi: Swargate nearest, Hatti Chowk bus point,
  online for specialist subjects; KP and Viman Nagar zones: home tutor plus
  online specialist for IB/IGCSE; hub: IB internal assessment never written
  by the tutor, IGCSE command words). Area links render only for active Pune
  areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-igcse-chemistry-tutor-pune.php.
--}}
@php
  $pchxSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pchxA = function (string $slug, string $label) use ($pchxSlugs) {
      return in_array($slug, $pchxSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pchxGuideTitle">
  <h2 id="pchxGuideTitle">IB and IGCSE chemistry tutors in Pune: one subject across two programmes</h2>

  <p class="nx-guide__lede">
    Chemistry is often the subject where an international-school student first feels the gap between understanding a
    lesson and scoring in a paper. In Cambridge IGCSE Chemistry 0620 the gap is usually precision: the exact word for a
    test result, a balanced ionic equation, a mole calculation set out in full. In IB Diploma Chemistry it is
    application: data questions, unfamiliar mechanisms and a scientific investigation the student designs alone. This
    page, from the NXTutors Academic Team, takes the two courses in turn, shows how one tutor can carry a student from
    Grade 9 through the DP, and explains how we match chemistry tutors across Pune or online. See also our
    <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry home tutors in Pune</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pchx-0620">IGCSE 0620 papers</a> ·
    <a href="#pchx-twelve">The twelve topics</a> ·
    <a href="#pchx-words">Precise words</a> ·
    <a href="#pchx-lab">Practical papers</a> ·
    <a href="#pchx-mole">The mole bridge</a> ·
    <a href="#pchx-dp">DP Chemistry</a> ·
    <a href="#pchx-dpgrade">DP assessment</a> ·
    <a href="#pchx-ia">The investigation</a> ·
    <a href="#pchx-zones">Tutors by zone</a> ·
    <a href="#pchx-demo">The demo</a> ·
    <a href="#pchx-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pchx-0620">Cambridge IGCSE Chemistry 0620: the papers</h2>
  <p>
    Every candidate sits three papers. Core candidates take Papers 1 and 3 and can reach grades C to G; Extended
    candidates take Papers 2 and 4 and can reach A* to G. The multiple-choice paper has 40 questions in 45 minutes and
    is worth 30%. The theory paper has 80 marks of short-answer and structured questions in an hour and a quarter and is
    worth 50%. The practical component, worth 20% and 40 marks, is either Paper 5, a Practical Test, or Paper 6, an
    Alternative to Practical, as the school decides. Cambridge weights its three assessment objectives at 50%, 30% and
    20%, and the syllabus for the 2026 to 2028 series carries no substantial changes affecting teaching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-twelve">The twelve topics, and what to secure first</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0620 topics with a priority for each</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">Secure early</th></tr>
    </thead>
    <tbody>
      <tr><td>States of matter</td><td>Particle explanations of changes of state and diffusion</td></tr>
      <tr><td>Atoms, elements and compounds</td><td>Dot-and-cross diagrams; ionic versus covalent properties</td></tr>
      <tr><td>Stoichiometry</td><td>Formulae and equations; on Extended, moles, concentration and gas volumes</td></tr>
      <tr><td>Electrochemistry</td><td>Predicting electrolysis products; half-equations on Extended</td></tr>
      <tr><td>Chemical energetics</td><td>Exothermic and endothermic reactions; reading energy profiles</td></tr>
      <tr><td>Chemical reactions</td><td>Factors affecting rate; reversible reactions and equilibrium</td></tr>
      <tr><td>Acids, bases and salts</td><td>Choosing a method to prepare a named salt</td></tr>
      <tr><td>The Periodic Table</td><td>Trends down a group and across a period</td></tr>
      <tr><td>Metals</td><td>Reactivity series and extraction</td></tr>
      <tr><td>Chemistry of the environment</td><td>Water treatment, air pollutants and their sources</td></tr>
      <tr><td>Organic chemistry</td><td>Naming, homologous series and reaction types</td></tr>
      <tr><td>Experimental techniques and chemical analysis</td><td>Chromatography and Rf values; tests for ions and gases</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Stoichiometry sits underneath almost everything else, so a tutor should make sure it is solid before the school
    reaches electrochemistry or energetics.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-words">Precise words: where IGCSE chemistry marks are won</h2>
  <p>
    Examiners reward exact language. "White precipitate" is not the same as "white solid"; "effervescence" is not
    "it bubbled a lot"; a test for a gas needs the test and the result. Students also lose marks by writing ionic
    equations without state symbols where they are asked for, or by describing a trend without explaining it. A short
    weekly vocabulary check and one structured question marked strictly against the mark scheme fix most of this. The
    command words in the syllabus, such as "state", "describe", "explain" and "suggest", each ask for a different kind
    of answer, and a tutor should teach them directly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-lab">Paper 5 or Paper 6 at home in Pune</h2>
  <p>
    The Practical Test lasts an hour and a quarter and the Alternative to Practical an hour; both are worth 40 marks
    and assess the same skills. For qualitative analysis, notes on the tests are supplied in both papers, so students
    do not need to memorise every result, but they must use the notes quickly and record observations in the expected
    words. A tutor working in a Pune flat cannot run a titration, but can teach the rest well: drawing results tables,
    choosing apparatus, identifying variables, plotting and interpreting graphs, and suggesting a specific improvement
    to a method. Past Paper 6 questions are excellent practice even for students who will sit Paper 5.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-mole">The mole: the bridge between IGCSE and the DP</h2>
  <p>
    Moles are where IGCSE Extended chemistry gets hard and where DP Chemistry begins in earnest, so it is the topic
    most worth teaching the same way across both courses. A dependable method uses the same four lines every time:
    write the balanced equation, convert what is given into moles, use the ratio from the equation, and convert back to
    the quantity asked for, with units at every step. Students who learn this once in Grade 10 rarely struggle with
    concentration, gas volume or limiting-reagent questions in DP1. Students joining a DP chemistry course from the
    State Board, CBSE or ICSE often know the calculations but should practise setting them out this way, because IB
    markschemes credit each step.
  </p>
  <p>
    A short example shows the shape. What mass of carbon dioxide is produced when 10.0 g of calcium carbonate is heated
    until it decomposes completely? The equation is CaCO₃ → CaO + CO₂. The molar mass of calcium carbonate is
    100 g/mol, so 10.0 g is 0.100 mol. The equation gives a 1 : 1 ratio, so 0.100 mol of carbon dioxide forms. With a
    molar mass of 44 g/mol, that is 4.40 g. Four lines, each with a unit, and each one able to earn credit on its own if
    a later line goes wrong.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-dp">IB Diploma Chemistry: Structure and Reactivity</h2>
  <p>
    The DP Chemistry guide first examined in 2025 organises the course in two strands, each with three parts. The IB
    plans 150 teaching hours at SL and 240 at HL.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Structure</h3>
  <p>
    Models of the particulate nature of matter, from the nuclear atom and electron configurations to the mole and
    ideal gases; models of bonding and structure, whether ionic, covalent or metallic, leading to materials; and the
    classification of matter through the periodic table and functional groups.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Reactivity</h3>
  <p>
    What drives chemical reactions, through enthalpy changes and energy cycles, with entropy and spontaneity at HL;
    how much, how fast and how far reactions go; and the mechanisms of change, organised by proton transfer, electron
    transfer, electron sharing and electron-pair sharing.
  </p>
    </div>
  </div>
  <p>
    Schools teach the parts in different orders, often weaving Structure and Reactivity together, so a tutor should
    follow the school's scheme and track what remains.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-dpgrade">How DP Chemistry is assessed</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Chemistry components, first examined in 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>30 questions</td><td>40 questions</td><td rowspan="2">36% together; 1 h 30 min at SL, 2 h at HL</td></tr>
      <tr><td>Paper 1B: data-based and experimental questions</td><td>25 marks</td><td>35 marks</td></tr>
      <tr><td>Paper 2: short and extended answers</td><td>50 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Scientific investigation</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The chemistry data booklet is available, and wrong multiple-choice answers lose nothing. Paper 1B and the
    investigation both reward experimental thinking, so a tutor should bring lab-style questions into ordinary sessions
    instead of saving them for the end of the course. Choosing between SL and HL is easier with the student's DP1
    marks in front of you, and students considering chemistry-heavy university courses should check whether HL is expected.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-ia">The investigation, and where a tutor stops</h2>
  <p>
    The scientific investigation is marked out of 24 on four criteria of six marks each, and the report may not exceed
    3,000 words. A tutor may explain the criteria, teach the chemistry behind the student's idea, discuss whether a
    method is safe and workable in a school lab, and practise data processing on other examples. A tutor may not choose
    the research question, design the method, process the student's results or write or edit the report. The student
    should tell their teacher about outside tutoring, as the IB's academic-integrity rules expect.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-zones">Chemistry tutors across Pune</h2>
  <p>
    Our zone guides note that families looking for an IB or IGCSE specialist often combine a home tutor for most of the
    week with an online specialist. Local notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>.</strong> {!! $pchxA('model-colony', 'Model Colony') !!} is close to Shivaji Nagar on the Purple Line and two Aqua Line stations; in standalone houses the tutor comes straight to the door.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>.</strong> {!! $pchxA('sus', 'Sus') !!} is reached along one main road with no metro, so share the tutor's details with the gate a day ahead.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>.</strong> {!! $pchxA('pimple-nilakh', 'Pimple Nilakh') !!} has no station, and the bridges towards Aundh and Baner slow down at office hours.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>.</strong> {!! $pchxA('wagholi', 'Wagholi') !!} has no metro yet; a clear block number and gate pass save time, and online lessons help families further out.</li>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>.</strong> {!! $pchxA('wanowrie', 'Wanowrie') !!} is reachable for tutors living in east and south Pune; online sessions can sit alongside a local tutor for specialist work.</li>
    <li><strong><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>.</strong> In {!! $pchxA('dhankawadi', 'Dhankawadi') !!}, Swargate is the nearest metro and most tutors live in the surrounding south Pune areas.</li>
  </ul>
  <p>
    For <a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a> and other localities, see
    our <a href="{{ url('/city/pune') }}">Pune tutors page</a>. Chemistry works online when the student's written
    equations and working are clearly visible on camera.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-demo">What to check in the chemistry demo</h2>
  <ol>
    <li><strong>The course.</strong> The tutor should ask 0620 Core or Extended, or DP SL or HL, and which practical paper or year.</li>
    <li><strong>A mole question.</strong> Ask them to teach one; listen for a clear, repeatable method.</li>
    <li><strong>Exact wording.</strong> Ask how they would mark "it fizzed" in a gas-test answer.</li>
    <li><strong>Paper 1B or Paper 6.</strong> Ask how they practise experimental questions without a lab.</li>
    <li><strong>The investigation.</strong> Listen for firm limits on what they will and will not do.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pchx-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Tell us the course and level, the year, your area and free slots, and book a <a href="{{ url('/demo-class') }}">free
    demo class</a>. You can browse <a href="{{ url('/tutors') }}">tutor profiles</a> or see our
    <a href="{{ url('/ib-tutor-pune') }}">IB</a> and <a href="{{ url('/igcse-tutor-pune') }}">IGCSE</a> tutor pages for Pune,
    and the <a href="{{ url('/ib-physics-tutor-pune') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-pune') }}">IGCSE physics</a> pages.
  </p>
  </section>

  </div>
</article>
