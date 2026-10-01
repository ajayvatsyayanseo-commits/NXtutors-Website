{{--
  Board hub for "CBSE home tutor Chandigarh" (tricity: Chandigarh, Mohali,
  Panchkula, Zirakpur). Authors: Abhinandan Tiwary (role: Class 10 CBSE and
  ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE science). No anecdotes,
  years or results are claimed for either. No schools are named.

  Board facts restate only what cbse-home-tutor-gurgaon states, which cites
  cbseacademic.nic.in and cbse.gov.in (read 1 Oct 2026): Curriculum 2026-27
  Secondary (Curriculum_SecP1_2026-27.pdf: 80 + 20 in major subjects, 33% to
  pass, about half the questions competency-focused, common 80-mark maths and
  science paper with optional 25-mark one-hour Advanced papers from 2026-27,
  Advanced not in the aggregate, R3 assessed by the school), the 14.02.2026
  notification on two Class X board exams (second exam for up to three
  subjects), Curriculum 2026-27 Senior Secondary (Curriculum_SecP2_2026-27.pdf:
  physics, chemistry, biology 70 + 30; maths or applied maths 80 + 20;
  accountancy, economics, business studies 80 + 20). No exam dates.

  Local detail only from the city hub (resources/views/city/content/
  chandigarh.blade.php: up to five boards in the tricity, PSEB on the Mohali
  side and BSEH in Panchkula, no metro, bus terminals in Sectors 17 and 43,
  Madhya Marg and Housing Board Chowk), database/seo-content/zones/
  chandigarh.json and areas/chandigarh-research.json / -zone-guides.json.
  No share of CBSE schools is claimed. Fee wording is the approved sentence.
  FAQs render from faqs/cbse-home-tutor-chandigarh.php. Area links render only
  when that tricity area page exists and is active.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cbc-guide" aria-labelledby="cbcGuideTitle">
  <h2 id="cbcGuideTitle">CBSE tuition across the tricity: what the board asks of a student, stage by stage</h2>

  <p class="nx-guide__lede">
    Two families on the same tricity street can have children on different boards: CBSE, CISCE, the Punjab board on the Mohali side or the Haryana board in Panchkula. That is why
    every NXTutors request in the tricity starts with the board. This page is for families whose children are on
    CBSE, from Class 6 to Class 12. It explains the 2026-27 changes in Classes 9 and 10, how senior subjects are
    marked, which subjects tricity parents most often bring a tutor in for, how tutors get to each zone, and what to
    test in the free demo. Abhinandan Tiwary writes on Class 10 CBSE and ICSE maths and Aaditya Kashyap on CBSE and
    ICSE science; for the full board explanation, our <a href="{{ url('/cbse-home-tutor-gurgaon') }}">guide to how
    CBSE works</a> goes deeper.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbc-mix">CBSE in the tricity</a> ·
    <a href="#cbc-state">CBSE or a state board</a> ·
    <a href="#cbc-ladder">Class-by-class</a> ·
    <a href="#cbc-nine">Classes 9 and 10 now</a> ·
    <a href="#cbc-senior">Senior subjects</a> ·
    <a href="#cbc-help">Where tutors help</a> ·
    <a href="#cbc-zones">Reaching your zone</a> ·
    <a href="#cbc-mode">Home or online</a> ·
    <a href="#cbc-demo">Demo checklist</a> ·
    <a href="#cbc-start">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbc-mix">Where CBSE sits among the tricity's boards</h2>
  <p>
    Our <a href="{{ url('/city/chandigarh') }}">tricity tutors page</a> counts up to five boards in use across
    Chandigarh, Mohali, Panchkula and Zirakpur. CBSE and CISCE are national, the IB and Cambridge are international,
    and the two state boards follow the state line: the Punjab School Education Board for some families in Mohali and
    Zirakpur, and the Board of School Education Haryana for some in Panchkula. We do not give a share for each board,
    since we have no reliable count to quote. What we can say is practical: the harder part of a CBSE match is
    usually finding a tutor who teaches to the current papers rather than to habits formed years ago.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-state">How CBSE differs from the Punjab and Haryana boards</h2>
  <p>
    In general terms, CBSE builds its papers on the NCERT textbooks and publishes sample papers and marking schemes
    for each session, while a state board prescribes its own books, sets its own papers and announces its own scheme.
    Families who cross the Panchkula–Chandigarh or Mohali–Chandigarh line when they change school feel this most:
    the chapter names may look familiar, but the question style and the expected length of answers are not the same.
    A tutor who has taught both helps in the first term after a move. For a CBSE student, ask the tutor to work from
    NCERT and the current CBSE sample paper only, not from state-board guidebooks that happen to cover the topic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-ladder">CBSE class by class, and what a tutor does at each step</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE stages from Class 6 to Class 12 for tricity families</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Assessment</th><th scope="col">Tutor's main job</th><th scope="col">Usual rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>School tests and projects only</td><td>Fractions, integers, first algebra; reading science text with understanding</td><td>One or two home sessions a week, often one tutor for several subjects</td></tr>
      <tr><td>Class 9</td><td>School annual exam on the common 80-mark paper, with optional Advanced maths or science</td><td>Securing NCERT content, deciding on Advanced, starting competency questions</td><td>Two sessions a week for maths and science</td></tr>
      <tr><td>Class 10</td><td>Board paper of 80 plus 20 internal; a second board exam for improvement</td><td>Full papers, marking-scheme presentation, a revision plan for every subject</td><td>Two or three sessions a week, timed papers from midyear</td></tr>
      <tr><td>Class 11</td><td>School exams in the chosen stream</td><td>Closing the jump from Class 10; habits for derivations and numericals</td><td>A specialist per hard subject</td></tr>
      <tr><td>Class 12</td><td>Board theory papers plus practical or internal marks</td><td>Whole-syllabus revision, sample papers, practical file guidance</td><td>Weekly specialist sessions, short online doubt slots near the exam</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-nine">Classes 9 and 10 under the 2026-27 curriculum</h2>
  <p>
    Three changes matter for tricity families planning tuition this year. First, maths and science in Class 9 now
    have one common paper of 80 marks for everyone, and a student may add an Advanced paper in either or both
    subjects. Each Advanced paper is worth 25 marks, lasts an hour and is built entirely of higher-order questions.
    CBSE does not add these marks to the aggregate; clearing 50% earns a mention on the marksheet. The older split
    into Standard and Basic maths is being phased out, though the 2026-27 Class 10 batch stays on the earlier scheme.
  </p>
  <p>
    Second, Class 10 now has two board exams. The first is compulsory. A student who has passed may return for the
    second to improve up to three subjects drawn from science, maths, social science and languages. Third, a third
    language is compulsory during the transition and is assessed in school without a board paper, but it must be
    passed for the certificate.
  </p>
  <p>
    For tuition, the Advanced choice is the real decision. A student who enjoys maths and already finishes NCERT
    comfortably can take on the extra problem-solving; a student who is still shaky on the common paper gains more
    from securing it. Ask the tutor for an honest view after four or five sessions, not on day one. Our
    <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a> pages cover the board year subject by subject.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-senior">How the senior subjects are marked</h2>
  <p>
    From Class 11 each CBSE subject carries its own split between the theory paper and practical or internal marks,
    and the split shows where steady weekly work pays. Physics, chemistry and biology are 70 marks of theory with 30
    of practical. Mathematics and Applied Mathematics, of which a student takes one, are 80 and 20, as are
    accountancy, economics and business studies. Board papers in the senior classes are set to include more
    questions in real-life settings that ask the student to apply and analyse, within the NCERT syllabus, and the
    Class 12 paper covers the whole Class 12 syllabus. Because the exact paper design arrives with each year's sample
    paper, a tutor should be working from this year's, not last year's.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-help">Which CBSE subjects tricity parents ask tutors for</h2>
  <p>
    Up to Class 10 the requests are mostly maths and science, because both build on every earlier year and gaps show
    up suddenly in Class 9. After Class 10, science students usually want physics and maths, sometimes chemistry,
    and commerce students accountancy and economics. English is a steadier request across all classes, often for
    writing and literature answers. Each has its own tricity page with local tutors:
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-chandigarh') }}">Maths home tutors in Chandigarh</a>, Classes 5 to 12</li>
    <li><a href="{{ url('/science-home-tutor-chandigarh') }}">Science home tutors</a> for Classes 6 to 10</li>
    <li><a href="{{ url('/physics-home-tutor-chandigarh') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-chandigarh') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-chandigarh') }}">biology</a> for Classes 11 and 12</li>
    <li><a href="{{ url('/english-home-tutor-chandigarh') }}">English home tutors</a> for language and literature papers</li>
    <li>Entrance preparation beside the board: <a href="{{ url('/jee-home-tutor-chandigarh') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-chandigarh') }}">NEET</a> home tutors in the tricity</li>
  </ul>
  <p>
    For reading between sessions, see <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10
    maths preparation</a>, <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-zones">How CBSE tutors reach each part of the tricity</h2>
  <p>
    No metro runs in the tricity yet, so every tutor arrives by scooter, car, city bus or auto, and the lesson time
    matters as much as the distance.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-1-30') }}">Sectors 1 to 30</a>.</strong> Mostly plotted houses and low-rise blocks, so the tutor rings at your gate. The Sector 17 bus terminal sits in the middle, which lets a tutor without a car reach homes such as {!! $cgA('sector-22', 'Sector 22') !!} with a short auto ride; in {!! $cgA('sector-8', 'Sector 8') !!}, start evening lessons before the Madhya Marg return rush.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-31-56-manimajra') }}">Sectors 31 to 56 and Manimajra</a>.</strong> {!! $cgA('sector-44', 'Sector 44') !!} lies beside the Sector 43 bus terminal, so tutors from Mohali or Zirakpur can come by bus. In {!! $cgA('manimajra', 'Manimajra') !!}, avoid the hours when Housing Board Chowk is busiest and agree parking in the old-town lanes.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/mohali') }}">Mohali</a>.</strong> {!! $cgA('mohali-phase-7', 'Phase 7') !!} borders Chandigarh's southern sectors, so tutors from either side reach it easily. Tell us the board clearly here, since some neighbours study under the Punjab board.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/panchkula-zirakpur') }}">Panchkula and Zirakpur</a>.</strong> {!! $cgA('panchkula-sector-15', 'Panchkula Sector 15') !!} already has many teachers working close by; staying on your own side of Housing Board Chowk keeps a weekly slot steady.</li>
  </ul>
  <p>
    Local guides: <a href="{{ url('/blog/chandigarh-sectors-tuition-guide') }}">Chandigarh sectors tuition guide</a>
    and <a href="{{ url('/blog/mohali-and-panchkula-tuition-guide') }}">Mohali and Panchkula tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-mode">Home lessons or online for a CBSE student?</h2>
  <p>
    For CBSE, a tutor at the table is usually worth it up to Class 10, because the board rewards written steps and
    labelled diagrams, and a tutor sitting beside the notebook corrects them as they happen. In Classes 11 and 12, a
    physics or maths specialist who lives across the tricity may be a better teacher than whoever lives nearest, and
    that is where online sessions earn their place. Many families keep one home lesson a week and add a short online
    session for doubts with the same tutor, especially when coaching runs late. Match days near the Sector 16 and
    Phase 9 stadiums, and Navratra weeks near Mansa Devi, are sensible weeks to switch a lesson online. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-demo">What to check in the free CBSE demo</h2>
  <ol>
    <li><strong>This year's sample paper.</strong> Ask which session's sample paper and marking scheme they teach from, and whether they know about the Class 9 Advanced option.</li>
    <li><strong>An unseen case-based question.</strong> Give one from the sample paper and watch whether they teach your child to read the passage, not just recall the formula.</li>
    <li><strong>Marking-scheme correction.</strong> The tutor should mark a written answer step by step and show which lines earn marks.</li>
    <li><strong>Board clarity.</strong> If the tutor also teaches the Punjab or Haryana board, ask how they keep the two apart for your child.</li>
    <li><strong>Practical and internal work.</strong> Ask how they would guide the practical file or internal marks without doing the work.</li>
    <li><strong>A plan you can see.</strong> By the end, you should hear what the next month covers and how progress will be recorded.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and can switch tutor later at no cost.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbc-start">Fees and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For a CBSE student in the
    tricity, the class, the number of subjects, how many sessions a week and how far the tutor travels shape the
    figure. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-chandigarh') }}">home tuition fees in Chandigarh</a>.
  </p>
  <p>
    Send the class, subjects, your sector or phase and free slots. We shortlist two or three CBSE tutors and the first
    class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, or if you teach CBSE yourself, see <a href="{{ url('/tuition-jobs/chandigarh') }}">tuition jobs in
    the tricity</a>.
  </p>
  </section>

  </div>
</article>
