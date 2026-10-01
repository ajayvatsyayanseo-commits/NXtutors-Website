{{--
  Board page for "IGCSE tutor Greater Noida" (Cambridge IGCSE and Pearson
  Edexcel International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC
  maths). No anecdotes, years or results are claimed for him. No schools,
  coaching institutes, societies, developers or people are named.

  Board facts reworded from the Gurgaon board hub (igcse-tutor-gurgaon), which
  cites (syllabus PDFs from cambridgeinternational.org and
  qualifications.pearson.com, read 1 Oct 2026):
  - Cambridge IGCSE Mathematics 0580 syllabus: Core Papers 1 (non-calculator)
    and 3 (calculator), grades C-G; Extended Papers 2 (non-calculator) and 4
    (calculator), grades A*-E; about 130 guided learning hours per subject.
  - Cambridge IGCSE Chemistry 0620, Physics 0625, Biology 0610 syllabuses:
    Core (grades C-G) or Extended (grades A*-G, Core plus Supplement);
    multiple-choice 40 questions, 45 min, 30%; theory 80 marks, 1 h 15 min,
    50%; practical test or alternative-to-practical 40 marks, 20%.
  - Cambridge IGCSE Additional Mathematics 0606.
  - Pearson Edexcel International GCSE Mathematics A (4MA1): Foundation and
    Higher tiers, grades 9-1 (Foundation targets 5-1, Higher 9-4), calculator
    allowed in both papers; 4PH1/4CH1/4BI1 untiered, two written papers, no
    separate practical exam; Further Pure Mathematics 4PM1.
  No exam series months or dates are stated on this page.
  State board and CBSE described only in general terms, as the Greater Noida
  hub does (UPMSP is the state board).
  Local detail only from database/seo-content/areas/greater-noida-research.json,
  greater-noida-zone-guides.json, zones/greater-noida.json and the Greater
  Noida hub view (IB/IGCSE a smaller group; these tutors are fewer, online
  widens the choice). No claim that IGCSE families live in any one area. Fee
  wording is the approved NXTutors sentence. FAQs render from
  faqs/igcse-tutor-greater-noida.php. Area links render only for active
  Greater Noida areas.
--}}
@php
  $ggnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggnA = function (string $slug, string $label) use ($ggnSlugs) {
      return in_array($slug, $ggnSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ggn-guide" aria-labelledby="ggnGuideTitle">
  <h2 id="ggnGuideTitle">IGCSE tutors in Greater Noida: syllabus codes, tiers and a workable weekly plan</h2>

  <p class="nx-guide__lede">
    For an IGCSE student, "maths tutor" is not a precise enough request. Cambridge 0580 Extended and Edexcel 4MA1
    Higher are different papers with different calculator rules and grade scales, and the tier a school enters your
    child for decides which grades are possible at all. In Greater Noida, where IGCSE families are a smaller group
    than CBSE or ICSE families, getting those details right from the start is what puts the right tutor in front of
    you. This page covers the two awarding bodies, tiers, the science papers, the shape of Grades 9 and 10, and how to
    plan home and online sessions. It is by Ajay Vatsyayan, whose own teaching is IB, IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ggn-mix">IGCSE in Greater Noida</a> ·
    <a href="#ggn-diff">Compared with CBSE and the UP Board</a> ·
    <a href="#ggn-bodies">Cambridge or Edexcel</a> ·
    <a href="#ggn-tiers">Tiers</a> ·
    <a href="#ggn-science">Science papers</a> ·
    <a href="#ggn-years">Grade 9 and Grade 10</a> ·
    <a href="#ggn-subjects">Subjects</a> ·
    <a href="#ggn-session">A good session</a> ·
    <a href="#ggn-zones">First visit by zone</a> ·
    <a href="#ggn-mode">Home or online</a> ·
    <a href="#ggn-demo">Demo checklist</a> ·
    <a href="#ggn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ggn-mix">IGCSE among Greater Noida's boards</h2>
  <p>
    CBSE is the board most Greater Noida students sit, ICSE and ISC make up a sizeable group, and UPMSP, the Uttar
    Pradesh state board, is part of the mix. Cambridge IGCSE, like the IB, is followed by a smaller group, and tutors
    who know a particular IGCSE syllabus well are fewer. That is why we ask for the awarding body, syllabus code and
    tier with every request, and why online classes often widen the choice. Families on other boards can use our
    <a href="{{ url('/cbse-home-tutor-greater-noida') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-greater-noida') }}">ICSE
    and ISC</a> or <a href="{{ url('/ib-tutor-greater-noida') }}">IB</a> pages for Greater Noida.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-diff">How IGCSE feels different from CBSE and the UP Board</h2>
  <p>
    Students arriving from CBSE or a UP Board school usually find much of the Grade 9 content familiar, and that is
    the trap. IGCSE questions are worded around command words such as "describe", "explain" and "suggest", each with
    a specific expectation, and marks are awarded against published mark schemes that reward particular key points.
    There is no single board result: each subject is a separate qualification with its own code, papers and grade.
    A tutor who has mostly taught textbook-and-board-paper courses needs to know these papers, not just the topics.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-bodies">Cambridge IGCSE or Edexcel International GCSE?</h2>
  <p>
    Families rarely get to pick: the school decides per subject, and a few use both boards. Get the syllabus codes
    from the school before searching for a tutor. Cambridge plans each syllabus around roughly 130 guided learning
    hours.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The main differences a tutor has to plan around</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">Cambridge IGCSE</th><th scope="col">Edexcel International GCSE</th><th scope="col">What changes in tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade scale</td><td>Letters, A* down to G</td><td>Numbers, 9 down to 1</td><td>Targets and mock analysis use different scales</td></tr>
      <tr><td>Maths calculator use</td><td>Each tier has one paper without a calculator and one with</td><td>Calculator permitted on both papers</td><td>Cambridge needs hand-calculation drills; Edexcel needs harder algebra</td></tr>
      <tr><td>Science tiers</td><td>Core or Extended in physics, chemistry and biology</td><td>No tiers</td><td>Cambridge students need the Supplement content if entered for Extended</td></tr>
      <tr><td>Practical skills</td><td>A practical test or an alternative-to-practical paper</td><td>Assessed within the written papers</td><td>Cambridge needs explicit practice on methods, tables and graphs</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs Edexcel IGCSE comparison</a> goes
    paper by paper, and the <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE tutor guide for Gurgaon</a> explains how
    the qualification works in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-tiers">Tiers decide the ceiling</h2>
  <p>
    In Cambridge 0580 maths, Core candidates take Papers 1 and 3 and can be awarded C to G, while Extended candidates
    take Papers 2 and 4 and can reach A* to E. In the Cambridge sciences, Extended adds Supplement content to the Core
    and opens grades A* to G; Core stops at C. Edexcel 4MA1 has a Foundation tier aimed at grades 5 to 1 and a Higher
    tier aimed at 9 to 4.
  </p>
  <p>
    So a Core maths entry rules out an A, however strong the paper. Schools generally settle the tier during Grade 10,
    based on test performance. If your child is near the boundary, a tutor's job through Grade 9 and early Grade 10 is
    to make the higher-tier work secure before that decision, using Supplement topics and full Extended or Higher past
    papers under time. Find out from the school when tiers are confirmed and on what basis.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-science">The Cambridge science papers, weight by weight</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, Chemistry 0620 and Biology 0610</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Share of the grade</th><th scope="col">Format</th><th scope="col">How to practise it</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice (Paper 1 or 2, by tier)</td><td>30%</td><td>40 questions in 45 minutes</td><td>Full timed sets, then a reason for every wrong option</td></tr>
      <tr><td>Theory (Paper 3 or 4, by tier)</td><td>50%</td><td>Structured and short answers, 80 marks, 75 minutes</td><td>Answers checked for the mark scheme's key terms</td></tr>
      <tr><td>Practical (Paper 5) or alternative to practical (Paper 6)</td><td>20%</td><td>40 marks; the school picks which</td><td>Planning, variables, results tables, graphs, evaluation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Edexcel's physics, chemistry and biology are set as two written papers with no tier and no separate practical;
    practical understanding is tested through the written questions, and longer answers carry more weight.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-years">How Grades 9 and 10 usually run</h2>
  <p>
    Most schools teach IGCSE across Grades 9 and 10, with the exams at the end of Grade 10. Grade 9 sets habits:
    topic-by-topic past-paper questions from early on, careful use of command words and, for Cambridge maths, regular
    non-calculator work. Grade 10 has two halves. Before the school mocks, the job is finishing content and building
    technique in each subject; after them, it is full timed papers marked against the official scheme, with each lost
    mark logged by cause. Ask the school which exam series your child is entered for and plan backwards from it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-subjects">Subjects Greater Noida families ask about</h2>
  <ul>
    <li><strong>Maths (0580 or 4MA1):</strong> the <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page, or <a href="{{ url('/maths-home-tutor-greater-noida') }}">maths home tutors in Greater Noida</a> matched to IGCSE. Additional Maths (0606) or Further Pure (4PM1) suits students whose main maths is already secure.</li>
    <li><strong>Sciences (0625, 0620, 0610 or 4PH1, 4CH1, 4BI1):</strong> <a href="{{ url('/physics-home-tutor-greater-noida') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-greater-noida') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-greater-noida') }}">biology</a> tutors in Greater Noida, or <a href="{{ url('/science-home-tutor-greater-noida') }}">science tutors</a> for a combined course.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-greater-noida') }}">English home tutors in Greater Noida</a>; say whether it is English as a first or second language, which are different courses.</li>
    <li><strong>Economics and business:</strong> matched on request with the syllabus code.</li>
  </ul>
  <p>
    After Grade 10, students head to the IB Diploma, A Level or back to CBSE or ISC for Class 11. Each route needs
    different preparation; see <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching between CBSE
    and IB or IGCSE</a> and the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE
    parent's guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-session">A good IGCSE session</h2>
  <p>
    Sixty to ninety minutes works well. Open with the student's error log from last week, not with memory. Teach or
    repair one topic using examples written the way the real papers word them. Close with two or three past-paper
    questions under time, then mark them together against the official mark scheme so the student sees exactly where
    each mark sits. Homework should be short and specific, and a line to the parent says what was done and what is
    next. A session that is mostly the tutor talking needs to change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-zones">Making the first visit work, zone by zone</h2>
  <p>
    A specialist may be coming from some distance, so a smooth first visit matters. These notes apply wherever your
    child goes to school.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>:</strong> {!! $ggnA('sector-16b', 'Sector 16B') !!} is nearly all gated societies near Ek Murti Chowk; register the tutor at the gate or on the app, share tower and flat, and leave slack for the evening junction traffic.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>:</strong> {!! $ggnA('delta-1', 'Delta 1') !!} has its own Aqua Line station, so a metro rider can walk or take an e-rickshaw; homes are plotted, with no gate to clear.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>:</strong> in {!! $ggnA('swarn-nagri', 'Swarn Nagri') !!}, most families in houses and floors get the tutor straight at the door; those in its few apartment blocks need a security entry.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>:</strong> {!! $ggnA('omega-2', 'Omega 2') !!} sits beside Pari Chowk, with the station just across in Knowledge Park I, which makes it easy for a tutor coming by metro.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a>:</strong> {!! $ggnA('eta-2', 'Eta 2') !!} is still being built in parts, so send a map pin and name the right gate; Depot and DELTA 1 are the nearest stations, with an auto for the last leg.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>:</strong> {!! $ggnA('omicron-3', 'Omicron 3') !!} mixes societies and plotted houses; GNIDA Office and DELTA 1 are the usual stations, so check how the tutor will cover the final stretch.</li>
  </ul>
  <p>
    Every sector is on our <a href="{{ url('/city/greater-noida') }}">Greater Noida tutors page</a>; the
    <a href="{{ url('/blog/greater-noida-west-tuition-guide') }}">Greater Noida West</a> and
    <a href="{{ url('/blog/greater-noida-sectors-tuition-guide') }}">Greek-letter sectors</a> guides add timing tips.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-mode">Home classes or online?</h2>
  <p>
    Home works when a tutor for your child's exact syllabus and tier is within reasonable travel. For Additional Maths,
    a Cambridge practical paper or a Grade 10 student close to the exams, the right specialist may be across the city
    or beyond it, and online removes that limit. A common compromise is a weekend session at home and a weekday one
    online with the same tutor. For maths and science online, the tutor must watch the working as it is written. More in our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-demo">A demo checklist for IGCSE parents</h2>
  <ol>
    <li><strong>Code and tier.</strong> Say "0620 Extended" or "4MA1 Higher" and see whether the tutor describes the papers unprompted.</li>
    <li><strong>Live marking.</strong> Ask them to mark one of your child's past-paper answers against the published scheme.</li>
    <li><strong>Calculator rules.</strong> For Cambridge maths, ask how they train the non-calculator paper.</li>
    <li><strong>Paper 5 or Paper 6.</strong> For Cambridge sciences, ask which one the school uses and how they prepare for it.</li>
    <li><strong>Command words.</strong> Ask how "explain" differs from "describe" in a science answer.</li>
    <li><strong>A plan to the exam.</strong> Expect an outline of the months ahead.</li>
  </ol>
  <p>
    Every request brings two or three matched tutors, each fee is shown before the demo, and a later switch is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes
    live. See also the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ggn-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IGCSE, the subject,
    the tier, how close the exams are and the tutor's travel decide where in that range a fee lands. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home
    tuition fees in Greater Noida</a>.
  </p>
  <p>
    Send the awarding body, code and tier (for example "Cambridge 0625 Core"), the grade, your sector and block or
    society, and your free hours. We come back with two or three tutors and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or if you
    teach IGCSE subjects, see <a href="{{ url('/tuition-jobs/greater-noida') }}">tuition jobs in Greater Noida</a>.
  </p>
  </section>

  </div>
</article>
