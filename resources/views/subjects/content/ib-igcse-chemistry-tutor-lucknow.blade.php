{{--
  Long-form guide for the "IB and IGCSE chemistry tutor Lucknow" page. Byline:
  NXTutors Academic Team. No schools, societies or people are named.

  Course facts are reworded from ib-igcse-chemistry-tutor-gurgaon, which cites
  the IB DP Chemistry guide, first assessment 2025 (ibo.org: Structure and
  Reactivity framework, SL 150 h / HL 240 h; Paper 1A multiple choice SL 30 /
  HL 40 questions; Paper 1B data-based and experimental questions SL 25 / HL 35
  marks; Paper 1 36%, 1 h 30 min SL / 2 h HL; Paper 2 SL 1 h 30 min 50 marks,
  HL 2 h 30 min 90 marks, 44%; IA scientific investigation 24 marks, 20%,
  3,000-word maximum, four criteria of 6 marks; data booklet; no penalty for
  wrong MCQ answers) and the Cambridge IGCSE Chemistry 0620 syllabus for 2026,
  2027 and 2028 (cambridgeinternational.org): Core Papers 1 + 3, Extended
  Papers 2 + 4, Paper 5 or 6 practical; MCQ 40 questions 45 min 30%; theory 80
  marks 1 h 15 min 50%; practical 40 marks 20%; Core C-G, Extended A*-G; AO
  weightings 50/30/20; twelve topics; qualitative analysis notes supplied in
  Papers 5 and 6. The twelve 0620 topic titles and the six IB Structure and
  Reactivity headings checked in the syllabus/guide text held in the
  scratchpad (chem0620.txt, ibchem.txt). No other dates.

  Local detail only from database/seo-content/zones/lucknow.json,
  areas/lucknow-research.json, lucknow-zone-guides.json and the Lucknow hub
  (a smaller number of students take IB or Cambridge IGCSE; online lessons
  for senior specialist subjects across the city; Indira Nagar Munshi Pulia
  and Indira Nagar stations, houses open to the street; Kapoorthala market
  road, parking in a side lane, IT College and Vishwavidyalaya stations;
  Aminabad Sachivalaya the nearest working station, Blue Line approved and
  under construction, limited car parking, weekend mornings; Aishbagh Junction
  railway station, Charbagh nearest metro, two-wheeler or auto; Rajajipuram
  blocks A to F, Alambagh station and Alamnagar railway station; Vrindavan
  Yojana UP Awas Vikas Parishad township, no metro, Raebareli Road). No
  request data is claimed. Area links render only for active Lucknow areas.
  Fee wording is the approved sentence. FAQs render from
  faqs/ib-igcse-chemistry-tutor-lucknow.php.
--}}
@php
  $libcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $libcA = function (string $slug, string $label) use ($libcSlugs) {
      return in_array($slug, $libcSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="libcGuideTitle">
  <h2 id="libcGuideTitle">IB and IGCSE chemistry tutors in Lucknow: two courses, one ladder</h2>

  <p class="nx-guide__lede">
    Chemistry for international-board students in Lucknow usually comes in two steps: Cambridge IGCSE Chemistry (0620)
    in Grades 9 and 10, then IB Diploma Chemistry for those who stay on. The two courses are examined very differently,
    yet the habits a student forms in the first carry straight into the second. Because international-board students are a
    smaller group in Lucknow than CBSE, ISC or UP Board ones, it pays to find one tutor, or a pair, who can see the whole ladder. This page, from the
    NXTutors Academic Team, explains both courses and how tutoring should adapt. It sits under our
    <a href="{{ url('/chemistry-home-tutor-lucknow') }}">chemistry home tutors in Lucknow</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#libc-compare">The two courses side by side</a> ·
    <a href="#libc-ig">IGCSE 0620</a> ·
    <a href="#libc-moles">Moles first</a> ·
    <a href="#libc-qa">Practical and qualitative analysis</a> ·
    <a href="#libc-ib">IB Chemistry</a> ·
    <a href="#libc-ia">The IB investigation</a> ·
    <a href="#libc-step">From IGCSE, CBSE or ICSE into the IB</a> ·
    <a href="#libc-ladder">Four years in practice</a> ·
    <a href="#libc-zones">Tutors by zone</a> ·
    <a href="#libc-mode">Home or online</a> ·
    <a href="#libc-demo">The demo</a> ·
    <a href="#libc-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="libc-compare">IGCSE and IB chemistry side by side</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the two chemistry courses are assessed</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Cambridge IGCSE Chemistry 0620</th><th scope="col">IB DP Chemistry (first assessed 2025)</th></tr>
    </thead>
    <tbody>
      <tr><td>Levels</td><td>Core (grades C to G) or Extended (A* to G)</td><td>Standard Level (150 hours) or Higher Level (240 hours)</td></tr>
      <tr><td>Objective questions</td><td>A 45-minute multiple-choice paper of 40 questions, 30%</td><td>Paper 1A multiple choice (30 questions SL, 40 HL), sat with Paper 1B</td></tr>
      <tr><td>Written theory</td><td>An 80-mark paper of 1 hour 15 minutes, 50%</td><td>Paper 2: 50 marks in 90 minutes at SL, 90 marks in 2 hours 30 minutes at HL, 44%</td></tr>
      <tr><td>Data and experiments</td><td>Paper 5 (practical test) or Paper 6 (alternative to practical), 40 marks, 20%</td><td>Paper 1B data and experimental questions (25 marks SL, 35 HL); Paper 1 as a whole 36%</td></tr>
      <tr><td>Internal work</td><td>None</td><td>Scientific investigation, 24 marks, 20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The pattern is clear. IGCSE separates knowledge from practical skill into different papers; the IB blends them,
    testing experimental thinking inside a written paper and through an investigation the student designs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-ig">IGCSE Chemistry 0620: twelve topics and a tier</h2>
  <p>
    The 0620 syllabus for 2026 to 2028 sets out twelve topics: states of matter; atoms, elements and compounds;
    stoichiometry; electrochemistry; chemical energetics; chemical reactions; acids, bases and salts; the Periodic
    Table; metals; chemistry of the environment; organic chemistry; and experimental techniques and chemical analysis.
    Core students sit Papers 1 and 3, Extended students Papers 2 and 4, and everyone takes one of the practical papers.
    Assessment objectives weight knowledge with understanding at 50 percent, handling information and problem-solving
    at 30, and experimental skills at 20.
  </p>
  <p>
    Supplementary content, marked for Extended candidates in the syllabus, adds depth across the topics. A student
    aiming for the higher grades, or for IB Chemistry later, needs it taught properly rather than skimmed. For the wider
    picture of Cambridge study in the city, see our <a href="{{ url('/igcse-tutor-lucknow') }}">IGCSE tutors in
    Lucknow</a> hub.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-moles">Why stoichiometry decides so much</h2>
  <p>
    Moles, formulae and equations sit at the centre of both courses. A student who is unsure of relative formula mass,
    mole ratios or concentration loses marks not only in the stoichiometry topic but in electrochemistry, energetics,
    rates and equilibrium too. In IB Chemistry the same ideas return under Reactivity 2, "How much, how fast and how
    far?", at a higher level of demand.
  </p>
  <p>
    For that reason, a tutor should treat calculation fluency as a running thread rather than a single chapter: a few
    mole problems in almost every session, set out in a consistent layout with units, until the method is automatic.
    It is the most transferable investment a chemistry student can make, whatever board comes next.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-qa">The practical paper and qualitative analysis</h2>
  <p>
    The school chooses whether its students take Paper 5, a bench practical, or Paper 6, a written alternative. Both
    carry 40 marks. For both, Cambridge supplies notes for use in qualitative analysis, the tables of tests for ions and
    gases. That changes the skill being examined: the student does not need to recall every test from memory in those
    papers, but must read the notes quickly, apply them to observations, and draw sound conclusions.
  </p>
  <p>
    A home tutor should not run chemical experiments at the dining table. What a tutor can do is work through past
    practical papers, rehearse observation-and-conclusion questions with the official notes in hand, and drill the
    planning questions that ask how a student would carry out an experiment safely and fairly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-ib">IB Chemistry: the Structure and Reactivity framework</h2>
  <p>
    The current IB course, first assessed in 2025, organises chemistry under two strands rather than a list of
    chapters.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The six headings of IB DP Chemistry</caption>
    <thead>
      <tr><th scope="col">Structure</th><th scope="col">Reactivity</th></tr>
    </thead>
    <tbody>
      <tr><td>1. Models of the particulate nature of matter</td><td>1. What drives chemical reactions?</td></tr>
      <tr><td>2. Models of bonding and structure</td><td>2. How much, how fast and how far?</td></tr>
      <tr><td>3. Classification of matter</td><td>3. What are the mechanisms of chemical change?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The framework is built to link topics across the two strands, so a question can draw on more than one heading. A
    tutor who teaches the course as isolated chapters leaves the student unready for that. Calculators and the data
    booklet are used in the papers, and wrong multiple-choice answers carry no penalty. HL students study more topics
    and in greater depth, with longer papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-ia">The IB scientific investigation</h2>
  <p>
    The internal assessment is a scientific investigation worth 24 marks and a fifth of the grade, with a 3,000-word
    maximum and four criteria of six marks each. The student chooses a research question, designs and carries out the
    investigation, analyses the data and evaluates the method. Outside help is tightly limited by IB rules: a tutor may
    teach the underlying chemistry and explain what the criteria reward in general terms, but must not choose the
    question, design the method, process the data or write any part of the report. The student should let the school
    know about outside tutoring.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-step">Into IB Chemistry from IGCSE, CBSE or ICSE</h2>
  <p>
    An IGCSE Extended student usually arrives with useful practical vocabulary and comfort with structured questions.
    The gaps tend to be mathematical: energetics and equilibrium calculations at IB level, and graph work for Paper 1B.
    A student joining from CBSE or ICSE Class 10 may know more facts but less about interpreting unfamiliar data and
    explaining reasoning in words. Either way, the first weeks of DP1 are the time to strengthen moles, bonding models
    and graph skills.
  </p>
  <p>
    Students choosing between staying for the IB and moving to ISC or CBSE for Class 11 can compare the
    <a href="{{ url('/icse-home-tutor-lucknow') }}">ICSE and ISC</a> and <a href="{{ url('/cbse-home-tutor-lucknow') }}">CBSE</a>
    pages for Lucknow. Those planning a medical path should note that NEET follows its own syllabus; see
    <a href="{{ url('/neet-home-tutor-lucknow') }}">NEET home tutors in Lucknow</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-ladder">The ladder in practice: four years of chemistry tutoring</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How chemistry tutoring can change from Grade 9 to the end of the Diploma</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Course</th><th scope="col">Where a tutor's time goes</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9</td><td>IGCSE 0620</td><td>States of matter, atomic structure and bonding; the first mole calculations; laying out answers clearly</td></tr>
      <tr><td>Grade 10</td><td>IGCSE 0620</td><td>Finishing the syllabus with the school; timed multiple-choice sets; Paper 5 or 6 questions with the qualitative analysis notes; past papers before the series</td></tr>
      <tr><td>DP1</td><td>IB Chemistry</td><td>Bridging moles, bonding models and graph skills; keeping pace with the Structure and Reactivity topics; weekly Paper 1B practice</td></tr>
      <tr><td>DP2</td><td>IB Chemistry</td><td>The investigation within IB rules; remaining HL depth; full papers under time and an error log before the May exams</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Not every student needs a tutor in all four years. Often the help matters most at the transition points: the
    start of Grade 9, the months before the IGCSE series, and the first term of DP1. Those are the moments to book
    early.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-zones">Reaching you: chemistry tutors across Lucknow</h2>
  <p>
    International-board chemistry specialists are not in every neighbourhood, so the route needs checking. From our
    zone notes:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> {!! $libcA('indira-nagar', 'Indira Nagar') !!} is on the Red Line, with Munshi Pulia or Indira Nagar station serving most blocks; houses open to the street, so there is no gate to clear.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $libcA('kapoorthala', 'Kapoorthala') !!} is close to IT College and Vishwavidyalaya stations; on the market road a driving tutor should park in a side lane.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> In {!! $libcA('aminabad', 'Aminabad') !!}, Sachivalaya is the nearest working station until the Blue Line, now under construction, opens; car parking is very limited. {!! $libcA('aishbagh', 'Aishbagh') !!} has its railway junction, and tutors usually come by two-wheeler or auto from Charbagh.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> {!! $libcA('rajajipuram', 'Rajajipuram') !!} is planned in blocks A to F; Alambagh metro or Alamnagar railway station, then an auto, is the usual route.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> {!! $libcA('vrindavan-yojana', 'Vrindavan Yojana') !!} has no metro, so tutors come by road along Raebareli Road or Shaheed Path; a tutor living in the township or Telibagh is easiest to keep.</li>
  </ul>
  <p>
    Every locality appears on the <a href="{{ url('/city/lucknow') }}">Lucknow home tutors page</a>, and our guides to
    <a href="{{ url('/blog/gomti-nagar-and-trans-gomti-tuition-guide') }}">Gomti Nagar and Trans-Gomti</a> and
    <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south Lucknow</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-mode">Home or online for chemistry?</h2>
  <p>
    Chemistry adapts well to online teaching: structures and mechanisms can be drawn on a shared screen, and simulations
    and recorded experiments can stand in for the lab during revision. Home sessions help younger IGCSE students who
    need close supervision of written work, and anyone who concentrates better with a tutor in the room. A practical
    mix is home sessions for teaching new topics and online sessions for past-paper review. Our guide to
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online and offline tutoring</a> covers the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-demo">What to check in a chemistry demo</h2>
  <ol>
    <li><strong>Which course and level?</strong> The tutor should ask about 0620 tier and practical paper, or IB SL or HL, before teaching.</li>
    <li><strong>A mole calculation set out step by step,</strong> with units throughout.</li>
    <li><strong>The framework.</strong> For IB, ask how they connect a Structure topic with a Reactivity topic.</li>
    <li><strong>The practical paper.</strong> For IGCSE, ask how they would use the qualitative analysis notes in practice.</li>
    <li><strong>The investigation.</strong> For IB, listen for clear limits on their role.</li>
    <li><strong>The route,</strong> and the plan for evenings when it is congested.</li>
  </ol>
  <p>
    If the demo does not suit, the next matched tutor gives their own free demo; the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="libc-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a>.
  </p>
  <p>
    Tell us the course, tier or level, year, what is difficult, your locality and your free slots. We share two or three
    matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and switching tutor later is
    free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified; you can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>. For physics, see
    <a href="{{ url('/ib-physics-tutor-lucknow') }}">IB physics</a> and
    <a href="{{ url('/igcse-physics-tutor-lucknow') }}">IGCSE physics</a> tutors in Lucknow, and the
    <a href="{{ url('/ib-tutor-lucknow') }}">IB tutors in Lucknow</a> hub.
  </p>
  </section>

  </div>
</article>
