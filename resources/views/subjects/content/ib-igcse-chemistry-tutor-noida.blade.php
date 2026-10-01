{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Noida" page. Byline:
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

  Local detail only from database/seo-content/zones/noida.json,
  areas/noida-research.json, noida-zone-guides.json and the Noida hub (CBSE
  most common, IB and IGCSE taught; Sector 22 dense, authority LIG/MIG flats
  and Chaura Raghunathpur village, market lanes; Sector 35 Morna village and
  bus stand opposite Noida City Centre station; Sector 37 / Arun Vihar gated
  community near the Mahamaya Flyover, Golf Course and Botanical Garden
  stations; Sector 70 mixed housing, Sector 61 / 51 stations; Sector 93
  towers, authority flats and plots, NSEZ / Sector 83 stations; Sector 168
  towers, Sector 142 station). No request data is claimed. Area links render
  only for active Noida areas. Fee wording is the approved sentence. FAQs
  render from faqs/ib-igcse-chemistry-tutor-noida.php.
--}}
@php
  $chnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chnA = function (string $slug, string $label) use ($chnSlugs) {
      return in_array($slug, $chnSlugs, true)
          ? '<a href="' . e(url('/city/noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="chnGuideTitle">
  <h2 id="chnGuideTitle">IB and IGCSE chemistry tutor in Noida: from Cambridge 0620 to DP Chemistry</h2>

  <p class="nx-guide__lede">
    Chemistry on the international track comes in two stages. Grades 9 and 10 usually lead to Cambridge IGCSE Chemistry,
    syllabus 0620; Grades 11 and 12 to IB Diploma Chemistry at Standard or Higher Level. The two are examined very
    differently, but they share a backbone: the mole, bonding, energy changes and careful practical work. A tutor who
    understands both can make the first prepare for the second. This page explains each course as Cambridge and the IB
    publish them, how to handle practical papers and the IB investigation, and how chemistry tutors reach families
    across Noida. It sits under our <a href="{{ url('/chemistry-home-tutor-noida') }}">chemistry home tutors in Noida</a>
    page, alongside the <a href="{{ url('/ib-tutor-noida') }}">IB</a> and
    <a href="{{ url('/igcse-tutor-noida') }}">IGCSE</a> hubs for the city.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chn-ig">IGCSE 0620 papers</a> ·
    <a href="#chn-topics">The twelve topics</a> ·
    <a href="#chn-mole">The mole</a> ·
    <a href="#chn-prac">Practical papers</a> ·
    <a href="#chn-org">Organic chemistry</a> ·
    <a href="#chn-dp">DP Chemistry</a> ·
    <a href="#chn-dpx">DP assessment</a> ·
    <a href="#chn-ia">The IB investigation</a> ·
    <a href="#chn-bridge">From 0620 to the DP</a> ·
    <a href="#chn-zones">Tutors by zone</a> ·
    <a href="#chn-demo">The demo</a> ·
    <a href="#chn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chn-ig">IGCSE Chemistry 0620: the three papers</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Chemistry 0620, series in 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Format</th><th scope="col">Who sits it</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>1 or 2</td><td>Forty multiple-choice items, 45 minutes</td><td>Paper 1 for Core, Paper 2 for Extended</td><td>30%</td></tr>
      <tr><td>3 or 4</td><td>Structured theory questions, 80 marks, 75 minutes</td><td>Paper 3 for Core, Paper 4 for Extended</td><td>50%</td></tr>
      <tr><td>5 or 6</td><td>Practical test, or a written alternative to practical; 40 marks</td><td>Either tier; the school decides</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Core leads to grades C to G and Extended to A* to G. Cambridge splits the credit 50/30/20 between knowing and
    understanding chemistry, using information to solve problems, and experimental skill. Cambridge describes the current syllabus as having no substantial changes affecting teaching,
    so recent past papers are reliable practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-topics">The twelve topics, grouped for revision</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A revision grouping of the 0620 topics</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Topics</th><th scope="col">Skills the group tests most</th></tr>
    </thead>
    <tbody>
      <tr><td>Matter and amounts</td><td>States of matter; atoms, elements and compounds; stoichiometry</td><td>Dot-and-cross diagrams; mole, concentration and gas-volume calculations at Extended</td></tr>
      <tr><td>Reactions and energy</td><td>Electrochemistry; chemical energetics; chemical reactions</td><td>Predicting electrolysis products; energy profile diagrams; rates and equilibrium</td></tr>
      <tr><td>Patterns in the elements</td><td>Acids, bases and salts; the Periodic Table; metals; chemistry of the environment</td><td>Choosing a method to prepare a salt; ionic equations; the reactivity series and extraction</td></tr>
      <tr><td>Carbon compounds and analysis</td><td>Organic chemistry; experimental techniques and chemical analysis</td><td>Naming and classifying reactions; chromatography and Rf values; tests for ions and gases</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-mole">The mole: one method from Grade 9 to the Diploma</h2>
  <p>
    The mole is where most chemistry marks are won or lost, at IGCSE and again in the IB. Students who learn several
    unrelated tricks for different calculation types get lost when a question combines them. A tutor should teach one
    route and use it everywhere: write a balanced equation, convert what is given into moles, use the equation's ratio,
    then convert to what is asked. Masses, solution concentrations and gas volumes all fit that pattern. Laid out in
    the same four lines every time, the method survives exam pressure and carries straight into DP Chemistry, where the
    same reasoning drives titrations, limiting reagents and yield.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-prac">Paper 5 or Paper 6 without a home lab</h2>
  <p>
    The school chooses whether students sit the hands-on Paper 5 or the written Paper 6. Either way, the skills are
    planning, recording results in tables, graphing, identifying errors and suggesting improvements, plus qualitative
    analysis. Cambridge supplies notes for qualitative analysis in both practical papers, so students need to know how
    to use them rather than memorise every test. A tutor can rehearse most of this with past papers: reading a burette
    from a diagram, completing a results table, interpreting a colour change from a flame test table, or planning a rate
    experiment in writing. Ask the school which paper your child sits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-org">Organic chemistry: start the naming habit early</h2>
  <p>
    Organic chemistry is the 0620 topic that most directly becomes a large part of DP Chemistry. At IGCSE it covers
    naming simple compounds, homologous series, and reactions such as combustion, addition and substitution. Students who
    learn to name and draw structures accurately in Grade 10, and who group reactions by type rather than memorising
    them one by one, find the DP's functional groups and mechanisms far less daunting. A tutor can build a single reaction
    map in Grade 10 and keep extending it through DP1.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-dp">DP Chemistry: structure and reactivity</h2>
  <p>
    The IB's chemistry guide, first assessed in 2025, organises the course around two ideas rather than a list of
    topics. The IB plans 150 hours at SL and 240 at HL.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two strands of IB Chemistry</caption>
    <thead>
      <tr><th scope="col">Strand</th><th scope="col">What it covers</th></tr>
    </thead>
    <tbody>
      <tr><td>Structure</td><td>Models of the particulate nature of matter, from the nuclear atom and electron configurations to the mole and ideal gases; bonding and structure across ionic, covalent and metallic substances and materials; classifying matter through the periodic table and functional groups</td></tr>
      <tr><td>Reactivity</td><td>What drives reactions, through enthalpy changes and energy cycles, with entropy and spontaneity at HL; how much, how fast and how far reactions go; and reaction mechanisms built on proton transfer, electron transfer, electron sharing and electron-pair sharing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Because topics link across strands, a student who has learned chemistry as separate chapters may struggle to see
    connections. A tutor's job is to keep pointing them out: how bond enthalpies connect structure to energetics, or how
    equilibrium connects to acids and bases.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-dpx">How DP Chemistry is assessed</h2>
  <ul>
    <li><strong>Paper 1 (36%).</strong> Paper 1A is multiple choice, 30 questions at SL and 40 at HL, with no penalty for wrong answers. Paper 1B has data-based and experimental questions, 25 marks at SL and 35 at HL. Both parts are sat together, in 1 h 30 min at SL or 2 h at HL.</li>
    <li><strong>Paper 2 (44%).</strong> Short and extended answers: 50 marks in 1 h 30 min at SL, 90 marks in 2 h 30 min at HL.</li>
    <li><strong>Scientific investigation (20%).</strong> Internally assessed, 24 marks over four criteria of six, written up in no more than 3,000 words.</li>
  </ul>
  <p>
    The chemistry data booklet is provided, so students should know what it contains and where. Paper 1B rewards the same
    practical reasoning as IGCSE Paper 6, pitched higher, which is one reason IGCSE practical skills are worth taking
    seriously.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-ia">The IB investigation: the tutor's boundary</h2>
  <p>
    A tutor can explain the four criteria, teach the chemistry and the analysis an idea needs, and discuss whether an
    investigation is feasible with school equipment. A tutor must not choose the research question, design the method,
    process the data or write any part of the report, and must not edit drafts. These rules come from the IB's
    academic-integrity policy, and breaking them puts the diploma at risk. The student should tell their teacher about
    outside tutoring.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-bridge">From 0620 to the DP, and choosing SL or HL</h2>
  <p>
    Students who sat Extended 0620 arrive in DP Chemistry with a sound base in moles, bonding and qualitative tests.
    What is new is depth: energetics with cycles, equilibrium treated quantitatively, organic mechanisms, and at HL,
    entropy and spontaneity. Students coming from CBSE, the most common board in Noida, or from the
    <a href="{{ url('/up-board-tutor-noida') }}">UP Board</a>, often know more organic facts but are less practised
    with data analysis and extended written explanation. HL suits students heading for medicine, chemistry, chemical
    engineering or related degrees; check the entry requirements of the courses your child is considering.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A common chemistry tutoring rhythm on the international track</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>IGCSE Grade 9</td><td>One</td></tr>
      <tr><td>IGCSE Grade 10, including practical-paper work</td><td>One or two</td></tr>
      <tr><td>Gap between IGCSE and DP1</td><td>A short bridging block on moles, bonding and energetics</td></tr>
      <tr><td>DP1</td><td>One or two</td></tr>
      <tr><td>Investigation window</td><td>Two or three sessions in all, skills only</td></tr>
      <tr><td>DP2</td><td>Two at HL; one or two at SL</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-zones">IB and IGCSE chemistry tutors by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/noida/zone/old-noida') }}">Old Noida</a>:</strong> {!! $chnA('sector-22', 'Sector 22') !!} is dense, with authority flats, small plots and Chaura Raghunathpur village; tutors from neighbouring sectors arrive quickly, but agree a landmark and parking for the first visit.</li>
    <li><strong><a href="{{ url('/city/noida/zone/central-noida') }}">Central Noida</a>:</strong> {!! $chnA('sector-35', 'Sector 35') !!} sits within walking reach of Noida City Centre station, with the Morna bus stand opposite, so metro-riding tutors are realistic. {!! $chnA('sector-37', 'Sector 37') !!} is a gated community near the Mahamaya Flyover; share the tutor's name and vehicle with security in advance.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sectors-70-82') }}">Sectors 70 to 82</a>:</strong> {!! $chnA('sector-70', 'Sector 70') !!} mixes large societies, floors and houses, with Noida Sector 61 and Sector 51 stations nearby; tutors finish by auto or e-rickshaw.</li>
    <li><strong><a href="{{ url('/city/noida/zone/noida-expressway') }}">Noida Expressway</a>:</strong> {!! $chnA('sector-93', 'Sector 93') !!} ranges from towers to authority flats and plots, with NSEZ and Sector 83 stations close by. {!! $chnA('sector-168', 'Sector 168') !!} is high-rise societies near the Sector 142 station; tutors from Sectors 142, 135 or 144 are nearest.</li>
  </ul>
  <p>
    Families in the <a href="{{ url('/city/noida/zone/sector-62-belt') }}">Sector 62 belt</a> or
    <a href="{{ url('/city/noida/zone/near-noida-extension') }}">Near Noida Extension</a> can read those zone pages, and
    our <a href="{{ url('/city/noida') }}">Noida tutors page</a> lists every locality.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-mode">Home or online for chemistry</h2>
  <p>
    Mole calculations and organic mechanisms are written work, so a tutor at the table can catch errors line by line.
    Online works when the notebook is clearly visible and work is photographed and marked after each session; it also
    widens the choice for HL chemistry, where specialists are fewer. Families on the expressway often combine one home
    session with online sessions. See <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online
    tutor</a> for the general picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-demo">What to check in the chemistry demo</h2>
  <ol>
    <li><strong>Course and level.</strong> Does the tutor ask for 0620 tier and practical paper, or IB SL or HL?</li>
    <li><strong>A mole question.</strong> Watch whether they teach one consistent method.</li>
    <li><strong>Practical reasoning.</strong> Ask for a short Paper 6 or Paper 1B item to be taught on the spot.</li>
    <li><strong>The investigation.</strong> Their answer should respect the IB's limits.</li>
    <li><strong>Marking.</strong> Do they use Cambridge mark schemes or IB markschemes?</li>
    <li><strong>The route.</strong> How they will get to you, and the fallback if traffic stops them.</li>
  </ol>
  <p>
    For general questions to ask any tutor, use our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo
    class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chn-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors price their own sessions, and the figure is on your shortlist before any demo is booked; read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> or our post on
    <a href="{{ url('/blog/home-tuition-fees-noida') }}">home tuition fees in Noida</a> for what moves it.
  </p>
  <p>
    Share the course, level or tier, grade and the chemistry that is going wrong, along with your sector, society and
    free evenings. Two or three matched tutors come back to you; pick one for a
    <a href="{{ url('/demo-class') }}">free demo</a>, and change tutor later at no cost if the fit fades. Every tutor who
    joins passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is visible, and
    <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. See
    also <a href="{{ url('/ib-physics-tutor-noida') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-noida') }}">IGCSE physics</a> tutors in Noida.
  </p>
  </section>

  </div>
</article>
