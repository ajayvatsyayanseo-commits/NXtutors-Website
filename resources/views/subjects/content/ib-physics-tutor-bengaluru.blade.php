{{--
  Long-form guide for the "IB physics tutor Bengaluru" page. Byline: NXTutors
  Academic Team. No schools, societies or people are named. Written by the city
  authority page writer, 2 Oct 2026.

  Course facts are reworded from ib-physics-tutor-gurgaon, which cites the IB
  Diploma Programme Physics guide, first assessment 2025 (ibo.org): five themes
  A to E and their topics, with A.4, A.5, B.4, D.4 and E.2 HL only; SL 150 h /
  HL 240 h; Paper 1A multiple choice (SL 25, HL 40 questions) and Paper 1B
  data-based questions (20 marks), sat together, 36% (SL 1 h 30 min, HL 2 h);
  Paper 2 (SL 1 h 30 min, 55 marks; HL 2 h 30 min, 90 marks) 44%; IA
  scientific investigation 24 marks, 20%, about 10 hours, 3,000-word maximum,
  four criteria of 6 marks; groups of up to three with individual research
  questions; data from lab work, fieldwork, spreadsheets, databases or
  simulations; no penalty for wrong MCQ answers; calculators and the data
  booklet on both papers; collaborative sciences project. Karnataka SSLC and
  II PUC physics paper facts as cited in karnataka-board-tutor-bengaluru
  (KSEAB blueprints and model papers). No other dates.

  Local detail only from database/seo-content/areas/bengaluru-research.json
  and bengaluru-zone-guides.json (Koramangala: eight blocks split by the Inner
  Ring Road, houses and apartment gates, tutors by road from neighbouring
  areas, Hosur Road in the evening; Whitefield: Purple Line since March 2023,
  metro plus auto, gated communities, ITPL Road and Whitefield Main Road at
  peak; Jayanagar: Green Line South End Circle and Jayanagar stations, houses,
  tight parking near the 4th Block shops; Yelahanka: no metro yet, railway
  junction, Old Town and New Town, local tutors suit regular classes;
  Rajajinagar: Green Line Rajajinagar and Kuvempu Road stations on Chord Road,
  houses and apartments, Chord Road slow at peak; RR Nagar: Purple Line
  station since August 2021, gated projects with visitor lists, Mysore Road at
  office hours) and the Bengaluru hub (online widens IB choice). Area links
  render only for active Bengaluru areas. Fee wording is the approved
  sentence. FAQs render from faqs/ib-physics-tutor-bengaluru.php.
--}}
@php
  $ipbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipbA = function (string $slug, string $label) use ($ipbSlugs) {
      return in_array($slug, $ipbSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ipbGuideTitle">
  <h2 id="ipbGuideTitle">IB physics tutor in Bengaluru: SL and HL, data-based questions and the investigation</h2>

  <p class="nx-guide__lede">
    IB Diploma Physics, in the version first assessed in 2025, is organised into five themes and tested in a way that
    surprises students from other boards: a fifth of the grade comes from an investigation the student designs, and a
    dedicated set of data-based questions sits inside Paper 1. Formula recall gets a student only so far; reading
    graphs, handling uncertainties and explaining physics in words carry the rest. This page sets out the course and
    its assessment, how SL and HL differ, what a tutor may and may not do for the internal assessment, and how IB
    physics tutors travel across Bengaluru. It sits under our <a href="{{ url('/physics-home-tutor-bengaluru') }}">physics
    home tutors in Bengaluru</a> page and the <a href="{{ url('/ib-tutor-bengaluru') }}">IB tutors in Bengaluru</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ipb-themes">Five themes</a> ·
    <a href="#ipb-assess">Assessment</a> ·
    <a href="#ipb-level">SL or HL</a> ·
    <a href="#ipb-data">Paper 1B and uncertainties</a> ·
    <a href="#ipb-paper2">Paper 2 answers</a> ·
    <a href="#ipb-ia">The investigation</a> ·
    <a href="#ipb-from">From other boards</a> ·
    <a href="#ipb-years">DP1 and DP2</a> ·
    <a href="#ipb-session">A useful session</a> ·
    <a href="#ipb-zones">Travel by zone</a> ·
    <a href="#ipb-mode">Home or online</a> ·
    <a href="#ipb-demo">The demo</a> ·
    <a href="#ipb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ipb-themes">The course, theme by theme</h2>
  <p>
    The IB plans 150 teaching hours at SL and 240 at HL. Both levels study the same five themes; HL adds whole topics
    and takes shared topics further.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics themes, with the HL-only topics</caption>
    <thead>
      <tr><th scope="col">Theme</th><th scope="col">Core topics for everyone</th><th scope="col">Added at HL</th></tr>
    </thead>
    <tbody>
      <tr><td>A. Space, time and motion</td><td>Kinematics; forces and momentum; work, energy and power</td><td>Rigid body mechanics; relativity</td></tr>
      <tr><td>B. The particulate nature of matter</td><td>Thermal energy transfers; greenhouse effect; gas laws; electric circuits</td><td>Thermodynamics</td></tr>
      <tr><td>C. Wave behaviour</td><td>Simple harmonic motion; the wave model; wave phenomena; standing waves and resonance; Doppler effect</td><td>No separate topic, but more depth</td></tr>
      <tr><td>D. Fields</td><td>Gravitational, electric and magnetic fields; motion in electromagnetic fields</td><td>Induction</td></tr>
      <tr><td>E. Nuclear and quantum physics</td><td>Atomic structure; radioactive decay; fission; fusion and stars</td><td>Quantum physics</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Schools teach the themes in their own order, so a tutor should follow the school's sequence rather than the guide's
    lettering.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-assess">How the grade is made up</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>DP Physics assessment, first assessment 2025</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">SL</th><th scope="col">HL</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Paper 1A: multiple choice</td><td>25 questions</td><td>40 questions</td><td rowspan="2">36% together; 1 h 30 min (SL) or 2 h (HL)</td></tr>
      <tr><td>Paper 1B: data-based questions</td><td>20 marks</td><td>20 marks</td></tr>
      <tr><td>Paper 2: short and extended answers</td><td>55 marks, 1 h 30 min</td><td>90 marks, 2 h 30 min</td><td>44%</td></tr>
      <tr><td>Scientific investigation (IA)</td><td>24 marks</td><td>24 marks</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators and the physics data booklet are allowed on both papers, and wrong multiple-choice answers carry no
    penalty, so no question in Paper 1A should be left blank. Students also take part in the collaborative sciences
    project, which is part of the programme but not marked as a physics component.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-level">Choosing between SL and HL</h2>
  <p>
    The extra 90 teaching hours at HL go into rigid bodies, relativity, thermodynamics, induction and quantum physics,
    plus harder versions of shared topics; Paper 2 is an hour longer and worth 90 marks rather than 55. HL suits
    students who are comfortable with algebra and calculus-style reasoning and who may want physics or engineering
    later. Students who choose SL are not choosing an easy course: the data-based questions and the investigation
    are the same in kind. A tutor's view, based on how a student handles a few weeks of HL-level problems, is useful
    evidence before the school's deadline for changing level.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-data">Paper 1B, graphs and uncertainties</h2>
  <p>
    Paper 1B gives students experimental data and asks them to work with it: plot or read a graph, linearise a
    relationship, find a gradient with its uncertainty, judge whether a conclusion is supported. These skills are
    built slowly, which is why a tutor should weave them into every week rather than saving them for a revision
    block. A good routine is one short data question per session, on whatever theme the school is teaching, with the
    student writing a sentence on the reliability of the result each time. The same skills carry straight into the
    investigation, so the effort pays twice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-paper2">Writing Paper 2 answers that earn every mark</h2>
  <ul>
    <li><strong>Show the physics, not just the arithmetic.</strong> State the principle used before substituting numbers.</li>
    <li><strong>Units and significant figures.</strong> Carry units through and give answers to a sensible precision.</li>
    <li><strong>Explanations in steps.</strong> Extended answers are marked point by point; numbered, linked statements beat a paragraph of loose prose.</li>
    <li><strong>Command terms.</strong> "Outline", "explain", "determine" and "show that" each need a different kind of response.</li>
    <li><strong>Diagrams with labels.</strong> Force diagrams, field lines and ray paths should be drawn with a ruler and labelled.</li>
  </ul>
  <p>
    Students coming from the Karnataka II PUC will recognise the last point: the board's own physics model paper
    warns that answers missing a needed diagram, or numericals without formula and working, earn nothing. That habit
    transfers well; the open, data-heavy questions are what need new practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-ia">The scientific investigation, and the tutor's limits</h2>
  <p>
    The investigation is worth 24 marks and 20% of the grade. It takes about ten hours of class time and is written up
    in no more than 3,000 words, marked on four criteria of six marks each. Students may work in groups of up to three,
    but each needs an individual research question. Data can come from lab work, fieldwork, spreadsheets, databases or
    simulations.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>A tutor can</h3>
  <p>
    Explain the criteria and how they are applied; teach the physics behind the student's own idea; teach uncertainty
    analysis, graphing and spreadsheet skills on practice data; ask questions that help the student judge whether a
    plan is workable in ten hours.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>A tutor cannot</h3>
  <p>
    Choose the research question; design the method; process the student's real data; write, rewrite or edit any part
    of the report. Doing so breaks the IB's academic integrity rules, and the student should tell their teacher about
    any outside tutoring.
  </p>
    </div>
  </div>
  <p>
    Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL, HL and IA guide</a> goes further into choosing
    a level and planning the investigation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-from">Starting DP Physics from another board</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What students bring, and what is new</caption>
    <thead>
      <tr><th scope="col">Previous course</th><th scope="col">Strengths</th><th scope="col">Usually new</th></tr>
    </thead>
    <tbody>
      <tr><td>Karnataka SSLC science</td><td>A broad Class 10 base and blueprint-style written answers</td><td>Data-based questions, uncertainties, designing an investigation</td></tr>
      <tr><td>CBSE Class 10</td><td>Standard numericals and derivations</td><td>Open questions and extended written explanations</td></tr>
      <tr><td>ICSE Class 10</td><td>Careful, complete written working</td><td>Uncertainty handling and the IB's question style</td></tr>
      <tr><td>Cambridge IGCSE Physics</td><td>Mechanics, waves and electricity content; practical-paper skills</td><td>More algebra, fields as a unifying idea</td></tr>
      <tr><td>IB MYP sciences</td><td>Inquiry and criteria-based work</td><td>Speed and fluency in exam-style calculation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A few weeks on kinematics with graphs, vectors and the basic uncertainty toolkit, before or early in DP1, removes
    most of the early stress. Students coming from Cambridge should also see the
    <a href="{{ url('/igcse-physics-tutor-bengaluru') }}">IGCSE physics tutor in Bengaluru</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-years">How tutoring time is spread over DP1 and DP2</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A two-year IB physics rhythm</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening weeks of DP1</td><td>Graphs, vectors, units and uncertainties; kinematics</td><td>One or two</td></tr>
      <tr><td>Rest of DP1</td><td>The school's themes in order; one data question every session</td><td>One at SL, two at HL</td></tr>
      <tr><td>Investigation period</td><td>Criteria, skills on practice data, feasibility questions; the report itself untouched</td><td>Two or three sessions in total</td></tr>
      <tr><td>DP2</td><td>Remaining themes, then timed Papers 1 and 2 marked against the markscheme</td><td>Two, more before mocks</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-session">Inside a useful IB physics session</h2>
  <p>
    Parents rarely see what happens in a tutoring hour, so it helps to know what a productive one contains. It usually
    opens with a check on last week's work and any marked school test, then moves to the concept the school is
    teaching now, explained with a diagram and a worked example. The middle of the session is the student's turn:
    two or three exam-style questions, at least one of them data-based, answered under light time pressure with the
    data booklet open. The last part is marking against the markscheme, with the student saying aloud why each mark was
    or was not earned. A tutor who spends most of the hour talking, or who solves the school homework while the student
    copies, is not building the skills the papers test. Ask your child, after the first few sessions, who did most of
    the writing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-zones">Where IB physics tutors can reach, zone by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>:</strong> {!! $ipbA('koramangala', 'Koramangala') !!}'s eight blocks are split by the Inner Ring Road, so give the block number; tutors come by road from nearby areas, and an early evening or weekend morning slot avoids Hosur Road at its worst.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>:</strong> {!! $ipbA('whitefield', 'Whitefield') !!} has had the Purple Line since March 2023, so tutors can ride in and take an auto; register them with the society desk before the first class.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>:</strong> {!! $ipbA('jayanagar', 'Jayanagar') !!} has South End Circle and Jayanagar stations on the Green Line, and most homes are houses, so a tutor arriving by metro simply rings the bell.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a>:</strong> {!! $ipbA('yelahanka', 'Yelahanka') !!} has a railway junction but no metro yet, so a tutor who lives in Yelahanka suits regular classes; give the New Town stage or an Old Town landmark.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a>:</strong> {!! $ipbA('rajajinagar', 'Rajajinagar') !!} has Rajajinagar and Kuvempu Road stations on Chord Road; the metro plus a short walk beats driving at peak.</li>
    <li><strong><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a>:</strong> {!! $ipbA('rr-nagar', 'RR Nagar') !!} has its own Purple Line station; in gated projects, add the tutor to the visitor list, and keep clear of Mysore Road at office hours.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-mode">Home or online for IB physics</h2>
  <p>
    Physics tutoring moves online more easily than most subjects: graphs, simulations and data sets are already on a
    screen, and the specialist pool for HL widens a great deal. A home session still helps for long written answers
    and for students who need someone beside them to keep pace. A common pattern in parts of the city without a metro
    is one home session at the weekend and one online session midweek. Our guide to
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online and offline tutoring</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-demo">What to ask in the IB physics demo</h2>
  <ol>
    <li><strong>Which guide do you teach from?</strong> The tutor should know the current themes and the Paper 1B format.</li>
    <li><strong>Teach a data question.</strong> Ask for a short gradient-and-uncertainty problem on the spot.</li>
    <li><strong>Mark a Paper 2 answer.</strong> Bring a school test and ask where marks were lost and why.</li>
    <li><strong>SL or HL?</strong> Ask how they would judge which level suits your child.</li>
    <li><strong>The investigation.</strong> Listen for clear limits: skills and criteria, never the report.</li>
    <li><strong>Getting here.</strong> The route, the time, and the plan for a day the road is jammed.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ipb-fees">Fees and starting</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The tutor's own fee is on
    the profile before you book; our note on <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition fees in
    Bengaluru</a> and the <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain the range.
  </p>
  <p>
    Send the level, DP year, exam session, the themes causing trouble, your locality and free slots. You get two or
    three matched tutors and a <a href="{{ url('/demo-class') }}">free demo class</a>; changing tutor later is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. For the rest of the Diploma sciences and maths, see <a href="{{ url('/ib-maths-tutor-bengaluru') }}">IB maths</a>
    and <a href="{{ url('/ib-igcse-chemistry-tutor-bengaluru') }}">IB and IGCSE chemistry</a> tutors in Bengaluru.
  </p>
  </section>

  </div>
</article>
