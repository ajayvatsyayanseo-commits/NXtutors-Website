{{--
  Long-form guide for the "Class 10 home tutor Gurgaon" page (CBSE, ICSE and
  IGCSE board year). Authors: Abhinandan Tiwary (Class 10 CBSE and ICSE maths)
  and Aaditya Kashyap (CBSE and ICSE science). No anecdotes or experience claims
  are made for either author. No schools are named.

  Exam facts are reused from already-verified NXTutors blog posts:
  - CBSE (80 + 20, 33% pass, about 50% competency-focused questions, Maths
    Standard 041 / Basic 241, two board exams from 2026, 2027 dates not yet
    announced, LOC process) from database/seo-content/blog/
    cbse-class-10-board-year-plan-gurgaon.html (sources: cbseacademic.nic.in
    2026-27 curriculum and CBSE circulars on cbse.gov.in).
  - ICSE Mathematics (one 3-hour 80-mark paper plus 20 marks internal
    assessment, 10 by teacher and 10 by external examiner, 2025 paper Section A
    40 marks compulsory and Section B any four) from icse-isc-maths-gurgaon-guide.html.
  - Cambridge IGCSE 0580 tiers and grades (2025-2027) and Edexcel 4MA1 tiers
    from ib-igcse-tutoring-gurgaon-parents-guide.html.
  Fee wording is the approved NXTutors statement.
  FAQs render from faqs/class-10-home-tutor-gurgaon.php.

  Area links render only when that Gurugram area page exists and is active.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide c10-guide" aria-labelledby="c10GuideTitle">
  <h2 id="c10GuideTitle">Class 10 home tutors in Gurgaon (Gurugram): planning the board year</h2>

  <p class="nx-guide__lede">
    Most Class 10 students in Gurgaon who need a tutor need one for maths, science or both; social science, English
    and the second language usually need a plan more than a tutor. The right tutor knows your child's exact board,
    whether CBSE, ICSE or Cambridge or Edexcel IGCSE, starts early in the session, and can reach your sector at the slot
    you need. This guide explains how the Class 10 year differs by board, which subjects are worth tutoring, when one
    tutor for several subjects works and when it does not, how to fit tuition around school, coaching and Gurgaon
    traffic, and what to test in a demo. Abhinandan Tiwary writes on Class 10 CBSE and ICSE maths, and Aaditya Kashyap
    on CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#c10-boards">Class 10 by board</a> ·
    <a href="#c10-subjects">Which subjects need a tutor</a> ·
    <a href="#c10-one-or-many">One tutor or several</a> ·
    <a href="#c10-plan">The year at a glance</a> ·
    <a href="#c10-week">Fitting it into the week</a> ·
    <a href="#c10-mode">Home or online</a> ·
    <a href="#c10-demo">What to test in a demo</a> ·
    <a href="#c10-fees">Fees</a> ·
    <a href="#c10-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="c10-boards">How is Class 10 different for CBSE, ICSE and IGCSE?</h2>
  <p>
    Gurgaon has students on all three routes, often in the same society. The subjects look similar, but the papers,
    the internal marks and the timetable are not, and a tutor has to plan around the right one.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE Class 10</h3>
  <p>
    In the main subjects the board paper is out of 80 and the school's internal assessment out of 20, and CBSE's
    curriculum sets 33% as the minimum to pass a subject. CBSE's 2026-27 curriculum states that about half the board
    questions are competency-focused: case-based, source-based and application questions. Maths is offered as
    Standard or Basic, both 3-hour, 80-mark papers. CBSE introduced two board exams for Class 10 from 2026, a
    compulsory main exam and an optional second exam to improve performance in up to three subjects; the 2027 dates
    had not been announced at the time of writing, so check cbse.gov.in.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE Class 10</h3>
  <p>
    ICSE Mathematics for the 2027 exam is one 3-hour paper of 80 marks plus 20 marks of internal assessment, marked
    half by the subject teacher and half by an external examiner. In the 2025 paper, Section A (40 marks) was
    compulsory and candidates chose four questions in Section B. The syllabus covers more ground than many students
    expect, including commercial mathematics, and examiners reward fully shown working. Check the current CISCE
    specimen paper for each subject your child sits.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IGCSE at the end of Grade 10</h3>
  <p>
    In Cambridge IGCSE Mathematics (0580), for exams in 2025 to 2027, Core candidates can achieve grades C to G and
    Extended candidates A* to E, and there are both calculator and non-calculator papers. In India, 0580 exams are
    available in March as well as the June and November series. Edexcel International GCSE Mathematics A has a
    Foundation tier (grades 5 to 1) and a Higher tier (grades 9 to 4). The tier decision, usually made by the school,
    shapes what a tutor should teach.
  </p>
      </div>
    </div>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a Class 10 tutor must plan around, by board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Marks earned during the year</th><th scope="col">Biggest risk in the paper</th><th scope="col">What the tutor should bring</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>20 internal marks per main subject: tests, portfolio, practical or project work</td><td>Competency and case-based questions; running out of time</td><td>NCERT depth, CBSE sample papers, marking-scheme checking</td></tr>
      <tr><td>ICSE</td><td>20 internal marks in maths from assignments; school-based work in other subjects</td><td>Syllabus volume and incomplete working</td><td>Full written solutions, CISCE specimen papers, speed practice</td></tr>
      <tr><td>Cambridge or Edexcel IGCSE</td><td>Depends on subject; maths is fully examined</td><td>Wrong tier, command words, calculator and non-calculator papers</td><td>Past papers and mark schemes for the exact syllabus and tier</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-subjects">Which Class 10 subjects actually need a tutor?</h2>
  <p>
    Very few students need a tutor in every subject. Tuition in five subjects leaves no time for the self-study
    where most marks are really made. Look at the September or half-yearly results and ask where marks are lost and
    why.
  </p>
  <ul>
    <li><strong>Maths.</strong> The most common request, because it is cumulative and unforgiving of gaps from Class 9. A tutor helps most when algebra or geometry is weak, when marks are lost in working rather than concepts, or when a student freezes on application questions. See our <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths home tutors in Gurgaon</a> page.</li>
    <li><strong>Science.</strong> Three subjects in one: physics numericals, chemical equations and biology diagrams each trip up different students. A tutor who can teach all three well at Class 10 level is common and useful. See <a href="{{ url('/science-home-tutor-gurgaon') }}">science home tutors in Gurgaon</a>.</li>
    <li><strong>Social science.</strong> Usually a planning problem, not an understanding problem. Weekly reading, map practice and source-based questions fix most of it. A tutor makes sense only if the student is far behind or struggles to write structured answers.</li>
    <li><strong>English.</strong> Worth a tutor mainly for writing formats and literature answers, and for students whose English is still developing after moving from another board or country.</li>
    <li><strong>Second language.</strong> Often the quiet mark-loser because it gets the least time. A short weekly session, or a fixed self-study slot, is usually enough.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-one-or-many">One tutor for several subjects, or one per subject?</h2>
  <p>
    Parents often ask whether one tutor can cover maths and science together. For Class 10 it can work, but not for
    every student.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Single-subject or multi-subject tutor in Class 10</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">One tutor, maths and science</th><th scope="col">Separate subject tutors</th></tr>
    </thead>
    <tbody>
      <tr><td>Suits</td><td>Students who need steady support, structure and a timetable across subjects</td><td>Students with a clear weak subject, or aiming high in maths and science</td></tr>
      <tr><td>Depth</td><td>Good for board level; check the tutor is strong in both</td><td>Deeper in each subject; better for difficult chapters</td></tr>
      <tr><td>Scheduling</td><td>One set of slots and one gate entry</td><td>Two tutors' timetables to fit around school</td></tr>
      <tr><td>Watch out for</td><td>A tutor strong in maths but thin in biology, or the reverse</td><td>Too many tuition hours in total</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A practical rule: if both subjects are "a bit behind", one tutor is fine. If one subject is clearly the problem, get
    a specialist for that subject first and handle the other with a plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-plan">What does a Class 10 board year look like?</h2>
  <p>
    Most Gurgaon schools start the session in April, hold half-yearly exams around September and run pre-boards
    between December and January. Your school's calendar may differ by a few weeks. In summary:
  </p>
  <ol>
    <li><strong>April to June:</strong> get the syllabus and paper design for every subject, fix Class 9 gaps in maths and science, and use the summer break to get a chapter or two ahead.</li>
    <li><strong>July to August:</strong> keep NCERT or textbook exercises up to date every week, start a mistakes notebook, and begin timed practice on single chapters.</li>
    <li><strong>September:</strong> treat the half-yearly as a rehearsal, then list the three weakest chapters in each subject.</li>
    <li><strong>October to November:</strong> repair those chapters, keep internal assessment work complete, and start sample papers or specimen papers subject by subject.</li>
    <li><strong>December to January:</strong> full papers under exam conditions, checked against the marking scheme; pre-boards and practicals.</li>
    <li><strong>February to March:</strong> light revision from the mistakes notebook, and the board exams on the official date sheet.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">CBSE Class 10 board year plan for Gurgaon</a>
    gives the full month-by-month table. For ICSE students, our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers the CISCE paper and the
    working examiners reward. IGCSE students should build the plan backwards from the exam series the school has
    entered them for.
  </p>
  <p>
    <strong>When to start a tutor:</strong> April or July gives time to build habits. A tutor who starts after the
    pre-boards can still help with timed practice and presentation, but cannot rebuild foundations.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-week">How to fit tuition into a Class 10 week in Gurgaon</h2>
  <p>
    A Class 10 week in Gurgaon can fill up quickly: school, a long bus ride, foundation coaching for a future entrance
    exam, sport, and tuition on top. Add evening traffic and there is no time left to study alone. A few rules that
    keep the week workable:
  </p>
  <ul>
    <li><strong>Count every hour.</strong> Add up school, travel, coaching, tuition and homework. If self-study falls below about an hour a day, cut something.</li>
    <li><strong>Two to three sessions a week per tutored subject</strong> is typical in Class 10. More than that usually means the tutor is doing the practice the student should be doing alone.</li>
    <li><strong>Bring the tutor to you.</strong> Home tuition, or online for a focused student, saves the cross-city drive at school-run and office hours.</li>
    <li><strong>Protect one free evening</strong> and a fixed sleep time, especially from December onwards.</li>
    <li><strong>Sort gate entry once.</strong> In gated societies, register the tutor on the visitor app so sessions start on time.</li>
  </ul>
  <p>
    If your child is also in foundation coaching for JEE or NEET, ask the tutor to work from the school syllabus and
    board-style answers. The coaching covers depth; the tutor makes sure board marks do not slip.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-mode">Home or online tuition for Class 10?</h2>
  <p>
    Either works in Class 10. Home tuition suits students who drift on a screen and subjects where the tutor needs to
    watch written working, which in Class 10 means maths and science numericals. Online widens the choice of tutor,
    which matters for ICSE and IGCSE specialists in parts of the city where few live nearby, and it removes travel on
    busy evenings. For maths and science online, the tutor must be able to see the notebook, through a writing tablet,
    a shared whiteboard or a phone camera over the page. Many families use a hybrid: one home session a week and one
    online session for tests and doubts. Our <a href="{{ url('/online-tutor-gurgaon') }}">online tutoring for Gurgaon
    students</a> page explains the setup.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-demo">What to test in a Class 10 demo class</h2>
  <p>
    The first class is a free demo. For a board-year student, use it to test board knowledge, not just friendliness:
  </p>
  <ol>
    <li><strong>Does the tutor know the paper?</strong> Ask how the internal 20 marks work for your board, or which tier your IGCSE child is on and why it matters.</li>
    <li><strong>Did they ask for recent test papers?</strong> A tutor who wants to see the September paper before planning is a good sign.</li>
    <li><strong>Did they correct the working, not just the answer?</strong> Step marks decide Class 10 results in maths and science.</li>
    <li><strong>Can they handle an application question?</strong> Give them a case-based or unfamiliar question from your child's book and watch how they teach it.</li>
    <li><strong>Did they propose a plan to the exam?</strong> Chapters, tests, and when full papers start.</li>
  </ol>
  <p>
    If it is not the right fit, tell us and we set up a demo with the next tutor on the shortlist. Switching tutor later
    is also free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-fees">What does a Class 10 home tutor cost in Gurgaon?</h2>
  <p>
    Across NXTutors most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11 and 12,
    IB and IGCSE and JEE and NEET sit toward the upper end, and specialists for IB HL or JEE Advanced can charge more.
    For Class 10, the fee moves with the board (IGCSE tends to cost more than CBSE), the number of subjects, the tutor's
    board-year experience, travel at your slot, and how many sessions a week you take. You see each shortlisted
    tutor's fee before the demo. Our <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">guide to home tuition fees in
    Gurgaon</a> helps with budgeting.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10-where">Where we match Class 10 tutors in Gurugram</h2>
  <p>
    Class 10 tutors are easiest to find in the older, denser parts of the city, such as
    {!! $ggA('sector-44', 'Sector 44') !!}, {!! $ggA('south-city-2', 'South City 2') !!} and
    {!! $ggA('sector-14', 'Sector 14') !!} in Old Gurgaon, where many teach several board students in one evening.
    ICSE and IGCSE specialists are fewer, so families along Golf Course Extension Road and in New Gurugram, in sectors
    such as {!! $ggA('sector-67', 'Sector 67') !!} or {!! $ggA('sector-86', 'Sector 86') !!}, often combine home and
    online sessions to get the right tutor.
  </p>
  <p>
    For a single subject, start with the <a href="{{ url('/icse-maths-tutor-gurgaon') }}">ICSE maths tutors in
    Gurgaon</a> or <a href="{{ url('/igcse-maths-tutor-gurgaon') }}">IGCSE maths tutors in Gurgaon</a> pages. Or tell us
    the board, the subjects, your sector or society and your slots: we shortlist two or three tutors, and the first
    class is a free demo. Browse by area on our <a href="{{ url('/city/gurugram') }}">Gurugram tutors page</a>.
  </p>
  </section>

  </div>
</article>
