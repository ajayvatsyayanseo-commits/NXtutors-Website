{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Bengaluru" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named. Written by
  the city authority page writer, 2 Oct 2026.

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
  Papers 5 and 6. Karnataka II PUC chemistry facts (KSEAB 2027 blueprint and
  model paper: 70 marks, 3 hours, a part of numerical problems, log tables and
  a simple calculator allowed, scientific calculator not) as cited in
  karnataka-board-tutor-bengaluru. No other dates.

  Local detail only from database/seo-content/areas/bengaluru-research.json
  and bengaluru-zone-guides.json (HSR Layout: seven sectors on a grid,
  Central Silk Board Yellow Line station, metro plus auto, houses and
  apartment gates, sector/main/cross numbers; Electronic City: phases,
  elevated expressway, Yellow Line stations, gated communities, office shift
  changes; Marathahalli: no metro yet, Bellandur Road rail halt, same side of
  the ORR, late-afternoon or weekend slots; Kumaraswamy Layout: detached
  houses, three nearby Green Line stations, Kanakapura Road evening traffic;
  Richmond Town: guards at entrances, MG Road station plus auto, office-hour
  congestion; HRBR Layout: numbered blocks, houses, Blue Line station planned,
  buses, two-wheelers and cabs, ORR evening traffic) and the Bengaluru hub
  (online widens IB/IGCSE choice). Area links render only for active Bengaluru
  areas. Fee wording is the approved sentence. FAQs render from
  faqs/ib-igcse-chemistry-tutor-bengaluru.php.
--}}
@php
  $chbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chbA = function (string $slug, string $label) use ($chbSlugs) {
      return in_array($slug, $chbSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="chbGuideTitle">
  <h2 id="chbGuideTitle">IB and IGCSE chemistry tutor in Bengaluru: Cambridge 0620 first, then DP Chemistry at SL or HL</h2>

  <p class="nx-guide__lede">
    Chemistry is the subject where gaps compound fastest. A student who never quite understood the mole in Grade 9
    meets it again in every calculation through IGCSE and the IB Diploma, and a student who memorised tests for ions
    without understanding them struggles once the questions turn experimental. This page covers both Cambridge IGCSE
    Chemistry 0620 and IB Diploma Chemistry, because many students take one after the other and good tutoring
    treats them as one ladder. It sets out the papers, the topics, how to prepare for practical assessment at home,
    the limits on help with the IB investigation, and how chemistry tutors reach families across Bengaluru. It sits
    under our <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry home tutors in Bengaluru</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chb-0620">IGCSE 0620 papers</a> ·
    <a href="#chb-topics">The twelve topics</a> ·
    <a href="#chb-moles">The mole, early</a> ·
    <a href="#chb-practical">Practical papers at home</a> ·
    <a href="#chb-dp">DP Chemistry</a> ·
    <a href="#chb-dpexam">DP assessment</a> ·
    <a href="#chb-ia">The investigation</a> ·
    <a href="#chb-next">After IGCSE</a> ·
    <a href="#chb-years">A four-year view</a> ·
    <a href="#chb-zones">Travel by zone</a> ·
    <a href="#chb-mode">Home or online</a> ·
    <a href="#chb-demo">The demo</a> ·
    <a href="#chb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chb-0620">IGCSE Chemistry 0620: the three papers</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Chemistry 0620, syllabus for 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Format</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>Paper 1</td><td>Paper 2</td><td>40 questions in 45 minutes</td><td>30%</td></tr>
      <tr><td>Theory</td><td>Paper 3</td><td>Paper 4</td><td>80 marks in 1 hour 15 minutes</td><td>50%</td></tr>
      <tr><td>Practical</td><td colspan="2">Paper 5 Practical Test or Paper 6 Alternative to Practical</td><td>40 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Core opens grades C to G and Extended opens A* to G. Cambridge weights the assessment at half knowledge with
    understanding, 30% handling information and solving problems, and 20% experimental skills. The current version of
    the syllabus is described by Cambridge as having no substantial changes affecting teaching, so recent past papers
    remain sound practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-topics">The twelve 0620 topics, grouped for teaching</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0620 topics and where students most often struggle</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Topics</th><th scope="col">Typical difficulty</th></tr>
    </thead>
    <tbody>
      <tr><td>Building blocks</td><td>States of matter; atoms, elements and compounds; stoichiometry</td><td>Dot-and-cross diagrams; mole calculations, concentrations and gas volumes at Extended</td></tr>
      <tr><td>Energy and change</td><td>Electrochemistry; chemical energetics; chemical reactions</td><td>Predicting electrolysis products; half-equations; rates and equilibrium explained in words</td></tr>
      <tr><td>Patterns</td><td>Acids, bases and salts; the Periodic Table; metals; chemistry of the environment</td><td>Choosing a method to make a salt; ionic equations; reactivity and extraction</td></tr>
      <tr><td>Carbon and the lab</td><td>Organic chemistry; experimental techniques and chemical analysis</td><td>Naming compounds and reaction types; chromatography and Rf values; tests for ions and gases</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-moles">Teach the mole early, and teach it one way</h2>
  <p>
    The single most useful thing a chemistry tutor can do in Grade 9 is install one reliable method for amount of
    substance and use it every time: write the balanced equation, convert what you know into moles, use the ratio,
    convert back to the quantity asked for. The same four steps handle masses, solution concentrations and gas
    volumes at IGCSE, and they carry straight into DP Chemistry, where titrations, yields and limiting reagents are
    built on them. Students taught a different shortcut for each question type are the ones who freeze when a
    question combines two. A tutor should test the method little and often, with one calculation in every session
    whatever the topic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-practical">Preparing for Paper 5 or 6 without a home lab</h2>
  <p>
    The school decides whether candidates sit Paper 5, a hands-on practical test, or Paper 6, a written alternative to
    practical. Both test the same skills, and in both the notes for qualitative analysis are supplied in the paper, so
    students need to use the tests rather than memorise them. A tutor at home can:
  </p>
  <ul>
    <li>Work through Paper 6 questions on titration readings, temperature changes and rates, drawing tables and graphs to a checklist.</li>
    <li>Practise interpreting the supplied qualitative analysis notes: what a precipitate colour or a gas test tells you, and what it does not.</li>
    <li>Rehearse planning answers: variables, apparatus, method, safety and how to improve reliability.</li>
    <li>Explain the apparatus and techniques the syllabus lists, with diagrams, so a student who has seen them once in school can describe them accurately.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-dp">DP Chemistry: structure and reactivity</h2>
  <p>
    The IB course first assessed in 2025 is organised as two linked strands, Structure and Reactivity, each with three
    headings. The IB plans 150 hours at SL and 240 at HL.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two strands of DP Chemistry</caption>
    <thead>
      <tr><th scope="col">Strand</th><th scope="col">What it covers</th></tr>
    </thead>
    <tbody>
      <tr><td>Structure</td><td>Models of the particulate nature of matter, from atoms and electron configurations to the mole and gases; bonding and structure, from ionic, covalent and metallic bonding to materials; classifying matter, including the periodic table and functional groups</td></tr>
      <tr><td>Reactivity</td><td>What drives reactions, including energy changes and, at HL, entropy and spontaneity; how much, how fast and how far reactions go; the mechanisms of chemical change, through proton transfer, electron transfer and electron sharing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Schools move between the strands rather than teaching them in sequence, so a tutor should follow the school's
    order and keep showing the student how a structure idea explains a reactivity result.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-dpexam">How DP Chemistry is assessed</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Chemistry components, first assessment 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>30 questions</td><td>40 questions</td><td rowspan="2">36% together; 1 h 30 min (SL) or 2 h (HL)</td></tr>
      <tr><td>Paper 1B: data-based and experimental questions</td><td>25 marks</td><td>35 marks</td></tr>
      <tr><td>Paper 2</td><td>50 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Scientific investigation (IA)</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The chemistry data booklet is provided, and wrong multiple-choice answers lose nothing, so every Paper 1A question
    should be answered. Paper 1B is where IGCSE practical-paper skills pay off: reading data, spotting anomalies and
    judging a method.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-ia">The IB investigation: the tutor's boundary</h2>
  <p>
    The scientific investigation is worth 24 marks, assessed on four criteria of six marks, and written up in no more
    than 3,000 words.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Allowed</h3>
  <p>
    Explaining the criteria; teaching the chemistry behind the student's idea; building skills in uncertainty, graphing
    and data processing on practice data; asking questions that help the student judge whether a plan is safe and
    workable.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Not allowed</h3>
  <p>
    Choosing the research question; designing the method; processing the student's own data; writing, rewriting or
    editing the report. These break the IB's academic integrity rules, and the student should tell their teacher about
    any outside tutoring.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-next">After IGCSE: the DP, the right level, or a PU college</h2>
  <ul>
    <li><strong>Into DP Chemistry.</strong> Extended 0620 students arrive with the mole, bonding and organic basics; what is new is the depth of energetics, equilibrium and mechanisms, and data-based questions. A short bridging block before DP1 helps.</li>
    <li><strong>SL or HL.</strong> HL adds 90 teaching hours and a longer Paper 2. Students considering medicine, chemical engineering or chemistry itself should check whether the universities on their list ask for HL, and do so early.</li>
    <li><strong>Into a Karnataka PU college.</strong> The II PUC chemistry paper is 70 marks over three hours, with a separate part of numerical problems; log tables and a simple calculator are allowed but not a scientific one, so calculation habits need adjusting. See our <a href="{{ url('/karnataka-board-tutor-bengaluru') }}">Karnataka Board tutors in Bengaluru</a> page, and <a href="{{ url('/kcet-tutor-bengaluru') }}">KCET tutors in Bengaluru</a> if the entrance test is in view.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parents' guide to IB and IGCSE tutoring</a>
    covers these choices more broadly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-years">A four-year view of chemistry tutoring</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How often students usually meet a chemistry tutor</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>IGCSE Grade 9</td><td>Particles, bonding, the mole method</td><td>One</td></tr>
      <tr><td>IGCSE Grade 10</td><td>Electrochemistry, organic, analysis; a practical-paper question every week</td><td>One or two</td></tr>
      <tr><td>Between IGCSE and DP1</td><td>Bridging: energetics, equilibrium, calculation fluency</td><td>A short block</td></tr>
      <tr><td>DP1</td><td>The school's sequence across both strands; Paper 1B practice</td><td>One or two</td></tr>
      <tr><td>Investigation period</td><td>Skills and criteria only</td><td>Two or three sessions in total</td></tr>
      <tr><td>DP2</td><td>Remaining content, then timed papers against the markscheme</td><td>Two at HL, one or two at SL</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-zones">Chemistry tutors across Bengaluru's zones</h2>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>:</strong> {!! $chbA('hsr-layout', 'HSR Layout') !!} is reached from Central Silk Board on the Yellow Line plus an auto; give the sector, main and cross numbers, as the grid is large.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>:</strong> {!! $chbA('electronic-city', 'Electronic City') !!} now has several Yellow Line stations, so tutors from Bommanahalli, Begur or BTM can come by metro; set lessons away from office shift changes and register the tutor at the gate.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>:</strong> {!! $chbA('marathahalli', 'Marathahalli') !!} has no metro station open yet, and the ORR junction is among the city's heaviest, so a tutor from your side of the ORR, in a late-afternoon or weekend slot, is the dependable choice.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>:</strong> {!! $chbA('kumaraswamy-layout', 'Kumaraswamy Layout') !!} is mostly detached houses near three Green Line stations; an early slot beats Kanakapura Road's evening traffic.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a>:</strong> for {!! $chbA('richmond-town', 'Richmond Town') !!}, tutors take the Purple Line to MG Road and an auto; buildings often have a guard, so leave the tutor's name at the entrance.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>:</strong> {!! $chbA('hrbr-layout', 'HRBR Layout') !!} waits for its Blue Line station, so tutors come by bus, two-wheeler or cab; after-school slots miss the ORR's evening traffic.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-mode">Home or online for chemistry</h2>
  <p>
    Chemistry splits well. Calculations, equations and mechanisms benefit from a tutor beside the student, watching
    each line; data analysis, past-paper review and DP theory work well online, and online widens the choice of IB HL
    specialists considerably. In zones where the metro has not arrived, families often keep one home session and add a
    shorter online one. See our comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online
    tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-demo">Questions for the chemistry demo</h2>
  <ol>
    <li><strong>Which course and level?</strong> 0620 Core or Extended, or DP SL or HL, and the exam session.</li>
    <li><strong>Show me your mole method.</strong> Ask for one calculation taught from scratch.</li>
    <li><strong>A practical-paper question.</strong> Ask how they would prepare your child for Paper 5 or 6, or for Paper 1B in the DP.</li>
    <li><strong>An organic question.</strong> Naming and a reaction type, explained clearly.</li>
    <li><strong>The investigation.</strong> Listen for clear limits.</li>
    <li><strong>The route.</strong> How they will reach you and what the fallback is.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chb-fees">Fees and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor's fee is shown
    on the profile before you book; our note on <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition
    fees in Bengaluru</a> and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain the range.
  </p>
  <p>
    Tell us the course, level or tier, the exam session, the topics causing trouble, your locality and free slots. You
    receive two or three matched tutors and a <a href="{{ url('/demo-class') }}">free demo class</a>; switching later is
    free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile
    goes live, and <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. For other subjects, see
    <a href="{{ url('/ib-maths-tutor-bengaluru') }}">IB maths</a>, <a href="{{ url('/ib-physics-tutor-bengaluru') }}">IB
    physics</a>, <a href="{{ url('/igcse-maths-tutor-bengaluru') }}">IGCSE maths</a> and
    <a href="{{ url('/igcse-physics-tutor-bengaluru') }}">IGCSE physics</a> tutors in Bengaluru, or the
    <a href="{{ url('/ib-tutor-bengaluru') }}">IB</a> and <a href="{{ url('/igcse-tutor-bengaluru') }}">IGCSE</a> hubs.
  </p>
  </section>

  </div>
</article>
