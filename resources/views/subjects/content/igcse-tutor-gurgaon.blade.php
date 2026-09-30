{{--
  Board hub for "IGCSE tutor Gurgaon" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools are named.

  Official sources (syllabus PDFs fetched from cambridgeinternational.org and
  qualifications.pearson.com, read 1 Oct 2026):
  - Cambridge IGCSE Mathematics 0580 syllabus for 2025–2027: Core Papers 1
    (non-calculator) and 3 (calculator), grades C–G; Extended Papers 2 and 4,
    grades A*–E; scientific calculator on calculator papers, graphical not
    permitted; June and November series, March series also in India; about
    130 guided learning hours per subject.
  - Cambridge IGCSE Chemistry 0620, Physics 0625, Biology 0610 syllabuses for
    2026–2028: Core (Papers 1 and 3, grades C–G) or Extended (Papers 2 and 4,
    grades A*–G, Core plus Supplement content); multiple-choice, theory and
    a practical test or alternative-to-practical paper (MCQ 40 questions,
    45 min, 30%; theory 80 marks, 1 h 15 min, 50%; practical 40 marks, 20%);
    same exam series.
  - Cambridge IGCSE Additional Mathematics 0606 (2028–2030): same series.
  - Pearson Edexcel International GCSE Mathematics A (4MA1): Foundation and
    Higher tiers, grades 9–1, availability January and June; 4PH1/4CH1/4BI1
    untiered, two written papers, no separate practical exam. As used in
    blog/cambridge-vs-edexcel-igcse-gurgaon.
  Local detail only from config/zone_guides.php (Gurugram). Fee wording is
  the approved NXTutors sentence. FAQs render from faqs/igcse-tutor-gurgaon.php.
  Area links render only when the Gurugram area page exists and is active.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igh-guide" aria-labelledby="ighGuideTitle">
  <h2 id="ighGuideTitle">IGCSE tutors in Gurgaon: Cambridge and Edexcel, subject by subject</h2>

  <p class="nx-guide__lede">
    Say "IGCSE" to a tutor and you have told them half of what they need. The other half is the awarding body
    (Cambridge or Pearson Edexcel), the syllabus code, the tier and the exam series your child is entered for. Those
    details decide which papers your child sits, which grades are reachable and what practice actually helps. This page
    explains how the IGCSE years work, which subjects Gurugram families usually ask about, how tiers are decided, what
    to check in a demo class, and how home and online tuition compare across the city. It is written by Ajay Vatsyayan,
    who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igh-what">What IGCSE involves</a> ·
    <a href="#igh-tiers">Tiers and grades</a> ·
    <a href="#igh-science">Science papers</a> ·
    <a href="#igh-years">Grade 9 and Grade 10</a> ·
    <a href="#igh-session">A good session</a> ·
    <a href="#igh-subjects">Pick a subject</a> ·
    <a href="#igh-demo">Checking a tutor</a> ·
    <a href="#igh-next">After IGCSE</a> ·
    <a href="#igh-mode">Home or online</a> ·
    <a href="#igh-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igh-what">What does an IGCSE course involve?</h2>
  <p>
    Most schools teach IGCSE over Grades 9 and 10, with exams at the end of Grade 10. Cambridge says it designs each
    IGCSE syllabus to need about 130 guided learning hours. Students take a set of separate subjects, each with its own
    code, papers and grade, rather than one combined board result.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE and Edexcel International GCSE at a glance</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Cambridge IGCSE</th><th scope="col">Pearson Edexcel International GCSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Grading</td><td>A* to G (separate 9–1 versions exist under other codes)</td><td>9 to 1</td></tr>
      <tr><td>Maths tiers</td><td>Core or Extended (0580)</td><td>Foundation or Higher (4MA1)</td></tr>
      <tr><td>Science tiers</td><td>Core or Extended in 0625, 0620 and 0610</td><td>Untiered in 4PH1, 4CH1 and 4BI1</td></tr>
      <tr><td>Calculator in maths</td><td>One non-calculator and one calculator paper</td><td>Allowed in both papers</td></tr>
      <tr><td>Practical skills in sciences</td><td>A practical test or an alternative-to-practical paper</td><td>Tested inside the written papers</td></tr>
      <tr><td>Exam series</td><td>June and November; March is also available in India</td><td>Maths A lists January and June; check with the school for each subject</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Parents rarely choose the board: the school does, subject by subject, and some schools mix the two. Ask the
    school office for the exact codes on your child's entry. Our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs Edexcel IGCSE comparison</a> sets out
    the paper-by-paper differences.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-tiers">Core or Extended, Foundation or Higher: why the tier matters</h2>
  <p>
    In Cambridge maths, Core candidates sit Papers 1 and 3 and can reach grades C to G; Extended candidates sit Papers
    2 and 4 and can reach A* to E. In the Cambridge sciences, Extended students study the Core content plus a
    Supplement and can be awarded A* to G, while Core students can reach C to G. In Edexcel maths, Foundation targets
    grades 5 to 1 and Higher targets 9 to 4.
  </p>
  <p>
    The practical meaning is simple: a student on Core maths cannot get an A, however well they do. Schools usually
    decide the tier during Grade 10 from test results, so a tutor's job in Grade 9 and the first half of Grade 10 is
    often to make sure the student is clearly working at the higher tier's level before that decision is made. If your
    child is borderline, ask the school when the tier is fixed and what evidence they use.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a tutor should do at each tier</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Borderline between Core and Extended</td><td>Supplement topics, harder algebra, full Extended past papers under time</td></tr>
      <tr><td>Secure on Extended or Higher, aiming for A* or 9</td><td>Multi-step problems, precise command-word answers, error logs from past papers</td></tr>
      <tr><td>Entered for Core or Foundation</td><td>Secure every reachable mark: method marks, units, reading the question fully</td></tr>
      <tr><td>Cambridge science, alternative-to-practical paper</td><td>Planning methods, tables with units, graphs, commenting on reliability</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-science">How the Cambridge science papers are weighted</h2>
  <p>
    Cambridge IGCSE Physics, Chemistry and Biology share one structure, and each paper needs its own kind of practice.
    Everyone sits a multiple-choice paper, a theory paper and one practical paper; the tier decides which
    multiple-choice and theory papers.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE sciences (0625, 0620, 0610): the three papers every candidate sits</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Format</th><th scope="col">Weight</th><th scope="col">How to practise</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice (Paper 1 Core, Paper 2 Extended)</td><td>40 four-option questions in 45 minutes</td><td>30%</td><td>Timed sets of 40, then review every wrong option</td></tr>
      <tr><td>Theory (Paper 3 Core, Paper 4 Extended)</td><td>Short-answer and structured questions, 80 marks, 1 hour 15 minutes</td><td>50%</td><td>Past-paper questions marked against the mark scheme's key words</td></tr>
      <tr><td>Practical test (Paper 5) or alternative to practical (Paper 6)</td><td>40 marks; the school chooses which</td><td>20%</td><td>Methods, variables, results tables, graphs and evaluation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Edexcel International GCSE sciences work differently: two written papers, no tiers and no separate practical exam,
    with practical skills tested inside the written questions. The longer Edexcel papers reward clear extended answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-years">Grade 9 and Grade 10: a realistic shape for the two years</h2>
  <p>
    Grade 9 is where habits are set. Content moves quickly and much of it looks familiar to students arriving from CBSE
    or ICSE, which lulls them; the marks are lost on unfamiliar question styles, calculator papers and "explain"
    questions. A tutor in Grade 9 should work alongside the school scheme, one topic ahead or one topic behind, and
    start past-paper questions by topic early.
  </p>
  <p>
    Grade 10 splits in two. Until the mocks, the work is finishing content and building exam technique subject by
    subject. After the mocks, it is full papers under timed conditions, marked with the official mark scheme, with
    every lost mark logged by cause. The exam series matters here: a March entry in India shortens the second half
    of the year compared with a June entry, so ask the school which series your child is sitting and plan backwards
    from it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-session">What a good IGCSE session looks like</h2>
  <p>
    A typical 60 to 90 minute session with a tutor who knows the course has a clear shape. It opens with a few minutes
    on last week's mistakes, pulled from the student's error log rather than from memory. The middle is new teaching
    or repair of one topic, with worked examples in the style of the actual papers, including the command words.
    The last part is exam practice: two or three past-paper questions on that topic, done under time, then marked
    against the official mark scheme together so the student sees exactly where each mark is awarded. Homework is
    short and specific, and the tutor tells the parent in a line or two what was covered and what comes next. If a
    session is mostly the tutor talking, or the same worksheet every week, ask for a change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-subjects">Pick a subject: our IGCSE pages for Gurgaon</h2>
  <p>
    Maths and the three sciences have their own Gurgaon pages, each going into the papers in detail:
  </p>
  <ul>
    <li><strong>Maths (0580 or 4MA1).</strong> Non-calculator technique for Cambridge, long multi-step problems for Edexcel, and the tier decision: <a href="{{ url('/igcse-maths-tutor-gurgaon') }}">IGCSE maths tutors in Gurgaon</a>. Prefer online? See the <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page.</li>
    <li><strong>Physics (0625 or 4PH1).</strong> Equations, units and the practical paper: <a href="{{ url('/igcse-physics-tutor-gurgaon') }}">IGCSE physics tutors in Gurgaon</a>.</li>
    <li><strong>Chemistry (0620 or 4CH1).</strong> Moles, equations and practical write-ups: <a href="{{ url('/ib-igcse-chemistry-tutor-gurgaon') }}">IB and IGCSE chemistry tutors in Gurgaon</a>.</li>
    <li><strong>Additional Maths or Further Pure Maths.</strong> Cambridge 0606 and Edexcel 4PM1 go further into algebra, functions and calculus. They suit students whose main maths grade is already secure; we match maths tutors who teach them.</li>
    <li><strong>Biology, English, economics and business.</strong> We match these on request; tell us the syllabus code, since English as a first language and English as a second language are different courses.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE tutoring in
    Gurgaon</a> covers command terms and criteria-based marking across both systems.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-demo">What to check before you choose an IGCSE tutor</h2>
  <p>
    Use the free demo to test the specifics. A tutor who has taught the exact course recently should handle all of
    these without hesitation:
  </p>
  <ol>
    <li><strong>The code and tier.</strong> Say "0580 Extended" or "4PH1" and see whether the tutor knows the paper structure without looking it up.</li>
    <li><strong>A past-paper question marked live.</strong> Ask them to mark your child's attempt against the published mark scheme and explain where the method marks went.</li>
    <li><strong>Calculator discipline.</strong> For Cambridge maths, the tutor should drill the non-calculator paper by hand; for Edexcel, the harder algebra a calculator cannot do.</li>
    <li><strong>Practical skills.</strong> For Cambridge sciences, ask whether the school enters Paper 5 or Paper 6, and how the tutor would prepare each.</li>
    <li><strong>Command words.</strong> Ask what "describe", "explain" and "suggest" each require in a science answer.</li>
    <li><strong>A plan to the exam series.</strong> The tutor should sketch the months to March, June or November in outline.</li>
  </ol>
  <p>
    If the fit is not right, we arrange a demo with the next tutor on your shortlist, and switching later is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-next">After IGCSE: IB, A Level or back to CBSE or ISC</h2>
  <p>
    What comes after Grade 10 should shape the IGCSE year. A student heading to the IB Diploma benefits from Extended
    maths and a graphic calculator habit early; one moving to CBSE or ISC for Class 11 needs fast hand calculation,
    radian trigonometry and textbook-style full working, which IGCSE does not demand in the same way. Our guide to
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching between CBSE and IB or IGCSE</a> has a
    six to eight week bridging plan in both directions, and our <a href="{{ url('/ib-tutor-gurgaon') }}">IB tutors in
    Gurgaon</a> page explains what the Diploma asks for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-mode">IGCSE tutors near you, or online?</h2>
  <p>
    Many families with children in IGCSE and IB schools live along Golf Course Road and Golf Course Extension Road, in
    gated societies with visitor-app entry, and more families along Sohna Road now ask for IGCSE tutors too. Home
    classes are easiest where a tutor for your child's exact syllabus lives close by, for instance around
    {!! $ggA('dlf-phase-4', 'DLF Phase 4') !!}, {!! $ggA('sector-53', 'Sector 53') !!},
    {!! $ggA('sector-56', 'Sector 56') !!} and {!! $ggA('sector-67', 'Sector 67') !!}, or
    {!! $ggA('south-city-2', 'South City 2') !!} and {!! $ggA('malibu-towne', 'Malibu Towne') !!} on the Sohna Road side.
    Large societies can take ten minutes from gate to tower, so build that into the slot.
  </p>
  <p>
    For Additional Maths, a science on the Cambridge practical route or a Grade 10 student close to the exam, the
    right specialist may live across the city. In Central Gurugram, around {!! $ggA('south-city-1', 'South City 1') !!}
    or {!! $ggA('sector-31', 'Sector 31') !!}, the central location puts more tutors within reach; further out, a
    hybrid plan (a home session at the weekend, online on weekdays) keeps the specialist practical. Online maths and
    science need the tutor to see written working live. See <a href="{{ url('/online-tutor-gurgaon') }}">online
    tutoring for Gurgaon</a> and the <a href="{{ url('/blog/gurgaon-sohna-road-south-city-tuition-guide') }}">Sohna
    Road and South City guide</a> for local timing tips.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igh-start">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IGCSE, the subject,
    tier, how close the exam is and the tutor's travel at your slot all move the figure. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">Gurgaon fees post</a> explain the ranges.
  </p>
  <p>
    Tell us the board, syllabus code and tier (for example "Cambridge 0625 Extended"), the grade, your sector or
    society and your free slots. We shortlist two or three tutors, you see each fee first, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a> or every
    area on our <a href="{{ url('/city/gurugram') }}">Gurugram tutors page</a>.
  </p>
  </section>

  </div>
</article>
