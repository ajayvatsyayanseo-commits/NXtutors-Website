{{--
  Long-form guide for the "IGCSE maths tutor Greater Noida" page. Author: Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results are
  claimed for him. No schools, societies, developers or other people are named.

  Syllabus facts are reworded from igcse-maths-tutor-gurgaon, which cites the
  Cambridge IGCSE Mathematics 0580 syllabus for exams in 2025, 2026 and 2027
  (version 3) and the 0606 Additional Mathematics syllabus for 2025-2027
  (cambridgeinternational.org): Core Papers 1 (no calculator) and 3
  (calculator), 1 h 30 min, 80 marks each; Extended Papers 2 (no calculator)
  and 4 (calculator), 2 h, 100 marks each; each paper 50%; Core grades C-G,
  Extended A*-E; scientific calculator, graphical/algebraic not permitted;
  June and November series, March series available to schools in India; nine
  topics, not in teaching order; about 130 guided learning hours; command
  words; three significant figures, angles to one decimal place, calculator pi
  or 3.142, no premature rounding; M, A and B marks; examiner reports; 0606 two
  papers of 2 h and 80 marks, Paper 1 without and Paper 2 with a calculator,
  grades A*-E. No other dates.

  Local detail only from database/seo-content/zones/greater-noida.json,
  areas/greater-noida-research.json, greater-noida-zone-guides.json and the
  Greater Noida hub (IB/IGCSE a smaller group; Cambridge IGCSE turns on exam
  technique; Sector 10 high-rise societies on Greater Noida West Road, some
  towers under construction; Gaur City 1 township by Char Murti / Gaur Chowk,
  underpass work, nearest metro Noida Sector 51; Alpha 2 plotted blocks,
  ALPHA 1 / DELTA 1 stations, good autos; Chi 5 group housing beside Noida
  Sector 150, Knowledge Park II / Pari Chowk stations, thin public transport;
  Sigma 3 villas and plots plus new gated towers, tutor may come from Pi or
  Kasna; Omicron 2 plotted houses and villas, quiet, two-wheeler travel). No
  request data is claimed. Fee wording is the approved sentence. FAQs render
  from faqs/igcse-maths-tutor-greater-noida.php. Area links render only for
  active areas.
--}}
@php
  $cmgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cmgA = function (string $slug, string $label) use ($cmgSlugs) {
      return in_array($slug, $cmgSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cmgGuideTitle">
  <h2 id="cmgGuideTitle">IGCSE maths tutor in Greater Noida: syllabus code, tier and exam series first</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE maths rewards exam technique as much as understanding: knowing the tier, reading the command words,
    rounding the way the markscheme expects and getting through a paper with no calculator. In Greater Noida the
    Cambridge group is smaller than the CBSE or ICSE one, so it pays to hold out for a tutor who has taken students through a full 0580 series, even if part of the teaching then happens over video. Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors, wrote this guide: what to send us, what each paper tests, and how the travel works across the city. For the wider picture, see our
    <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths home tutors in Greater Noida</a> page and the
    <a href="{{ url('/igcse-tutor-greater-noida') }}">IGCSE tutors in Greater Noida</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cmg-tell">What to tell us</a> ·
    <a href="#cmg-tiers">Core or Extended</a> ·
    <a href="#cmg-nocalc">The non-calculator paper</a> ·
    <a href="#cmg-marks">How marks are lost</a> ·
    <a href="#cmg-0606">Additional Maths</a> ·
    <a href="#cmg-next">Class 11 options</a> ·
    <a href="#cmg-week">A typical week</a> ·
    <a href="#cmg-zones">Reaching your sector</a> ·
    <a href="#cmg-mode">In person or video</a> ·
    <a href="#cmg-plan">Grade 9 and 10 plan</a> ·
    <a href="#cmg-demo">Six demo questions</a> ·
    <a href="#cmg-fees">Fees and starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cmg-tell">Three details to send with your request</h2>
  <ul>
    <li><strong>The syllabus code.</strong> Most students take Cambridge IGCSE Mathematics, code 0580. Some also take Additional Mathematics, code 0606. If the school uses a different exam board's International GCSE, tell us, because the papers are different.</li>
    <li><strong>The tier.</strong> Core or Extended. The school decides the entry, but the tier shapes everything a tutor does.</li>
    <li><strong>The exam series.</strong> Cambridge runs June and November series, and a March series is open to schools in India. The series sets how many weeks the tutor has.</li>
  </ul>
  <p>
    With those three details, we can match a tutor who has prepared students for the same papers. Without them, the
    first two sessions are spent finding out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-tiers">Core or Extended: what each tier involves</h2>
  <p>
    The 0580 syllabus covers nine topic areas, which Cambridge says are not listed in teaching order, and plans for
    about 130 guided learning hours. Both tiers sit two papers, one without a calculator and one with, each worth half
    the grade.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Mathematics 0580, exams in 2025 to 2027</caption>
    <thead>
      <tr><th scope="col">Tier</th><th scope="col">Papers</th><th scope="col">Length and marks</th><th scope="col">Grades available</th></tr>
    </thead>
    <tbody>
      <tr><td>Core</td><td>Paper 1, no calculator; Paper 3, calculator</td><td>1 h 30 min and 80 marks each</td><td>C to G</td></tr>
      <tr><td>Extended</td><td>Paper 2, no calculator; Paper 4, calculator</td><td>2 h and 100 marks each</td><td>A* to E</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The ceiling matters. A Core student cannot score above C however well they do, so a student capable of more needs
    an Extended entry and a tutor who can cover the extra content. On the other hand, a student entered for Extended
    who is struggling may be better served by honest advice to the school early in the course. A good tutor will tell
    you which case your child is in after a few sessions. Our
    <a href="{{ url('/blog/igcse-coreextended-maths') }}">Core versus Extended guide</a> explains the decision in
    detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-nocalc">The paper without a calculator</h2>
  <p>
    Half the grade comes from a paper where only a pen, ruler and compasses help. For students who have relied on a
    calculator since Class 6, this is where most marks go missing. Weekly practice should include:
  </p>
  <ul>
    <li>Fraction, decimal and percentage arithmetic done by hand, quickly and neatly.</li>
    <li>Estimation and rounding, so a student can tell when an answer is wildly wrong.</li>
    <li>Exact values: surds and answers left in terms of pi, where the question asks for them.</li>
    <li>Algebra written line by line, because method marks are awarded for each correct step.</li>
  </ul>
  <p>
    On the calculator paper, a scientific calculator is allowed; graphic and algebraic calculators are not. A student
    used to a graphic calculator from another course should practise on the permitted model before the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-marks">Where IGCSE maths marks are lost, and how a tutor stops it</h2>
  <p>
    Cambridge spells out its accuracy rules: non-exact answers to three significant figures, angles in degrees to one
    decimal place, pi taken from the calculator or as 3.142, and no rounding part-way through a calculation. Markers
    award M marks for method, A marks for accuracy that depends on the method, and B marks for independent results.
    The examiner reports Cambridge publishes after each series show the same slips again and again.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Common losses and the fix a tutor should build in</caption>
    <thead>
      <tr><th scope="col">Where marks go</th><th scope="col">The habit that fixes it</th></tr>
    </thead>
    <tbody>
      <tr><td>Rounding too early in a multi-step problem</td><td>Keep full calculator values until the last line, then round to three significant figures</td></tr>
      <tr><td>Bare answers with no working</td><td>Write each step, so method marks survive an arithmetic slip</td></tr>
      <tr><td>Misreading command words such as "show that" or "explain"</td><td>Learn the command-word list in the syllabus and practise what each demands</td></tr>
      <tr><td>Angles given to the wrong accuracy</td><td>One decimal place, every time, unless the question says otherwise</td></tr>
      <tr><td>Running out of time on the longer paper</td><td>Timed past papers from the start of the second year</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-0606">Additional Mathematics 0606</h2>
  <p>
    Some schools offer 0606 to strong Extended students, often those who plan to take maths at a higher level later.
    It has two papers of two hours and 80 marks each, the first without a calculator and the second with one, graded
    A* to E. It goes well beyond 0580, so a tutor for 0606 should have taught that syllabus itself, not only the core one, and should keep 0580 revision going alongside it
    so neither grade suffers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-next">After IGCSE: IB, A Level, ISC or CBSE</h2>
  <p>
    The tier and the habits formed now decide how smoothly Class 11 goes. Students heading into the IB Diploma find
    Extended algebra familiar but the pace faster; our <a href="{{ url('/ib-maths-tutor-greater-noida') }}">IB maths
    tutors in Greater Noida</a> page covers that step. Students moving to ISC or CBSE Class 11 meet a different style
    of paper and a syllabus that assumes some topics IGCSE handles lightly, so a short bridging block over the summer
    helps. Our <a href="{{ url('/icse-maths-tutor-greater-noida') }}">ICSE and ISC maths tutors in Greater Noida</a>
    page describes the ISC side, and our guide to
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE</a> compares the two
    main international routes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-week">A typical week of IGCSE maths tutoring</h2>
  <p>
    With one session a week, the hour splits well into three parts. The first quarter goes on a short non-calculator
    warm-up: ten quick items on fractions, percentages, standard form or exact values. The middle half follows the
    school's current topic through Cambridge past-paper questions, with the tutor marking each line as M, A or B so the
    student sees how marks are earned. The last quarter goes to one longer structured question under time, followed by
    a two-minute note in the student's error log. Homework is short and specific: three or four questions chosen from
    that log, not a whole worksheet. Over a term, the log shows parents exactly which habits have improved.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-zones">Getting an IGCSE maths tutor to your sector</h2>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>.</strong> {!! $cmgA('sector-10', 'Sector 10') !!} is high-rise societies along Greater Noida West Road, with some towers still being built, so send a map pin and approve the tutor on the visitor app. {!! $cmgA('gaur-city-1', 'Gaur City 1') !!} sits by Gaur Chowk, where underpass work slows evening traffic; with the nearest metro at Noida Sector 51, tutors drive or ride in.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>.</strong> {!! $cmgA('alpha-2', 'Alpha 2') !!} is plotted blocks with the ALPHA 1 and DELTA 1 stations nearby and plenty of autos, so a tutor without a vehicle can still come; there is no gate to register at.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>.</strong> {!! $cmgA('chi-5', 'Chi 5') !!} is group housing on the edge of Noida's Sector 150. Public transport inside is limited, so tutors come by two-wheeler or by metro to Knowledge Park II or Pari Chowk and then an e-rickshaw.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>.</strong> {!! $cmgA('sigma-3', 'Sigma 3') !!} has villas and plots alongside new gated towers. The sector is still growing, so a tutor may come from Pi or Kasna rather than next door.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>.</strong> {!! $cmgA('omicron-2', 'Omicron 2') !!} is quiet streets of houses and villas with little public transport, so a tutor with a two-wheeler is the dependable choice.</li>
  </ul>
  <p>
    Families in <a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a> usually get tutors via GNIDA Office station. Our
    <a href="{{ url('/blog/greater-noida-sectors-tuition-guide') }}">Greater Noida sectors guide</a> describes each zone, and every locality has a page on the
    <a href="{{ url('/city/greater-noida') }}">Greater Noida home tutors</a> list.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-mode">Home or online for IGCSE maths</h2>
  <p>
    The non-calculator paper is the strongest argument for at least some home sessions: a tutor sitting beside the
    student sees the moment a fraction is mishandled or a line of algebra skipped. Video sessions serve past-paper review, topic drills and the run-in to the series well, on one condition: the tutor watches the working live through a tablet or an overhead phone. Where the nearest 0580 specialist lives across Pari Chowk or Gaur Chowk, a weekend home session and a
    weekday online session with the same person is a common arrangement. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-plan">A two-year IGCSE maths plan</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How tutoring usually runs across the two IGCSE years</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>First year, first term</td><td>Number and algebra foundations; non-calculator habits; tier conversation</td><td>One or two a week</td></tr>
      <tr><td>First year, rest</td><td>Keeping pace with school; topic questions from past papers</td><td>One a week</td></tr>
      <tr><td>Second year, until the mocks</td><td>Finishing the syllabus; mixed questions; accuracy rules drilled</td><td>One or two a week</td></tr>
      <tr><td>After the mocks</td><td>Full timed papers for the chosen tier, examiner-report errors, weak topics</td><td>Two a week</td></tr>
      <tr><td>Closing weeks</td><td>Paper-by-paper practice, calculator and non-calculator alternated</td><td>Two to three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-demo">Six questions for the demo</h2>
  <ol>
    <li><strong>Which codes and tiers have you taught?</strong> 0580 Extended and 0606 are different jobs from 0580 Core.</li>
    <li><strong>How do you train the non-calculator paper?</strong> Listen for regular, timed practice, not occasional worksheets.</li>
    <li><strong>What are the accuracy rules?</strong> The tutor should state three significant figures and one decimal place for angles without hesitating.</li>
    <li><strong>Can you mark this?</strong> Put a completed Paper 4 question in front of the tutor and ask for M, A and B marks line by line.</li>
    <li><strong>Do you use examiner reports?</strong> A tutor who reads them knows where students lose marks.</li>
    <li><strong>How will you get here?</strong> Which road or station, and what happens on a jammed evening.</li>
  </ol>
  <p>
    Not convinced after the demo? Let us know and another matched tutor takes a free demo instead. Further questions
    are in our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Where an IGCSE maths tutor lands within that range depends on the tier, the journey and how many hours a week you
    book. You see each tutor's own fee on the shortlist; the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and our article on <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home tuition fees in Greater
    Noida</a> show how fees are set.
  </p>
  <p>
    Write to us with the syllabus code, tier, exam series and school year, your sector or society, and two or three
    slots. A shortlist of two or three tutors follows, the first lesson is a <a href="{{ url('/demo-class') }}">free
    demo</a>, and changing tutor later carries no charge. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and only then does a profile appear. Meanwhile, look
    through <a href="{{ url('/tutors') }}">tutor profiles</a>, read the national
    <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page, or see our
    <a href="{{ url('/igcse-physics-tutor-greater-noida') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-greater-noida') }}">IGCSE chemistry</a> pages for Greater Noida.
  </p>
  </section>

  </div>
</article>
