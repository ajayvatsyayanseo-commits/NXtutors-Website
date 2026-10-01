{{--
  Board page for "ICSE home tutor Patna" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed. No schools,
  coaching institutes or people are named.

  Board facts only as the Gurgaon board hub (icse-home-tutor-gurgaon) states
  them, which cites cisce.org (read 1 Oct 2026): ICSE Regulations 2027 (Group
  I compulsory, Group II two or three subjects, 80/20; Group III one subject,
  50/50); ICSE Mathematics one 3-hour 80-mark paper + 20 internal from at
  least two assignments marked by teacher and external examiner; ICSE
  Physics, Chemistry, Biology separate 2-hour 80-mark papers + 20 practical
  internal; Analysis of Pupil Performance reports; ISC Regulations (English +
  three to five electives, at most six; no change after 15 September of
  Class XI; XII subject must be studied in XI; promotion 35% in four subjects
  incl. English and 75% attendance; practicals compulsory; Physics not with
  Engineering Science; grades 1-9; pass certificate four subjects incl.
  English + SUPW and Community Service); ISC Mathematics 80 theory + 20
  project.
  Bihar board described generally only, as on the /city/patna hub. Patna's
  board mix only as the hub states it. Local detail only from
  patna-research.json, patna-zone-guides.json, zones/patna.json and the hub.
  Fee wording is the approved sentence. Area links render only for active
  Patna areas.
--}}
@php
  $picSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $picA = function (string $slug, string $label) use ($picSlugs) {
      return in_array($slug, $picSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="picGuideTitle">
  <h2 id="picGuideTitle">ICSE and ISC home tutors in Patna: coverage, writing and the right electives</h2>

  <p class="nx-guide__lede">
    ICSE students in Patna face a board whose difficulty is mostly volume. The council sets long written papers over a
    wide syllabus, English includes set literature, and Class 10 means more separate papers than most parents expect.
    The ISC years then narrow the subjects but deepen each one, with practicals and projects that cannot be skipped.
    This page explains how the CISCE route is organised, where marks usually go, which subjects Patna families ask for,
    how tutors travel to each part of the city, and how to tell in a free demo whether a tutor teaches the way CISCE
    marks. Abhinandan Tiwary writes on ICSE maths, Aaditya Kashyap on the sciences and Ajay Vatsyayan on ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pic-patna">ICSE in Patna</a> ·
    <a href="#pic-groups">The Class 10 groups</a> ·
    <a href="#pic-papers">Maths and science papers</a> ·
    <a href="#pic-coverage">Covering the syllabus</a> ·
    <a href="#pic-isc">ISC rules</a> ·
    <a href="#pic-ladder">Year by year</a> ·
    <a href="#pic-subjects">Subjects</a> ·
    <a href="#pic-zones">Tutors by zone</a> ·
    <a href="#pic-next">After Class 10</a> ·
    <a href="#pic-mode">Home or online</a> ·
    <a href="#pic-demo">The demo</a> ·
    <a href="#pic-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pic-patna">Where ICSE fits in Patna</h2>
  <p>
    Our <a href="{{ url('/city/patna') }}">Patna tutors page</a> names the boards in the city: the Bihar School
    Examination Board, CBSE, CISCE's ICSE and ISC, and a smaller IB and IGCSE group. We do not publish shares. The
    contrast with the state board is the useful part. In general terms BSEB's matric and intermediate exams follow the
    board's own prescribed books and model papers, and students may study in Hindi or English. ICSE asks for longer
    answers in English across nearly every subject, splits science into three papers, and publishes examiner reports
    on common errors. A tutor strong on Bihar board papers needs to show they can mark to CISCE's expectations.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-groups">How the Class 10 subjects are grouped</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE subject groups and their weighting, from the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Subjects</th><th scope="col">Final paper : internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I, everyone takes it</td><td>English; a second language; History, Civics and Geography</td><td>80 : 20</td></tr>
      <tr><td>Group II, two or three chosen</td><td>Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80 : 20</td></tr>
      <tr><td>Group III, one chosen</td><td>Applied subjects, for example Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education, Robotics and AI</td><td>50 : 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The single Group III subject is where internal work counts most, so it rewards a student who keeps projects moving
    through the year rather than one who plans to catch up before the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-papers">The maths and science papers in brief</h2>
  <p>
    <strong>Maths:</strong> a three-hour, 80-mark paper and 20 internal marks earned through at least two assignments,
    each marked separately by the school's teacher and an external examiner. Commercial maths such as banking and shares
    appears with algebra, geometry, trigonometry and statistics, and every step of working is expected.
  </p>
  <p>
    <strong>Science:</strong> Physics, Chemistry and Biology each have their own two-hour, 80-mark paper, and each adds
    20 marks of internal assessment of practical work. Strength in one does not carry the other two. Ask whether a
    single tutor will handle all three or whether the weakest one needs a specialist. CISCE's subject-wise Analysis of
    Pupil Performance, released after each exam season, shows exactly where candidates lost marks; a tutor should use it
    beside the specimen papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-coverage">Covering a wide syllabus without losing the early chapters</h2>
  <p>
    The Patna hub's advice for ICSE and ISC is to plan revision in rounds, set timed writing and keep an eye on project
    work. In practice that means three habits. First, a rolling calendar: every few weeks, one session goes back to an
    old chapter in each paper so nothing goes cold. Second, timed answers from Class 9 onward, not only in the last
    term, because speed in long writing grows slowly. Third, a project list with dates, checked at the start of each
    month. An hour with a good tutor typically starts with the student's own attempts marked line by line, moves to one
    new topic, and ends with one full answer written against the clock.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-isc">ISC in Classes 11 and 12: the rules that bite</h2>
  <ul>
    <li>English is compulsory, with three to five electives and no more than six subjects in total.</li>
    <li>Subjects are locked after 15 September of the Class 11 registration year, and a Class 12 subject must have been studied in Class 11.</li>
    <li>To be promoted, a student needs 35% in four subjects including English and 75% attendance.</li>
    <li>Practical exams are compulsory in subjects that have them, and Physics may not be combined with Engineering Science.</li>
    <li>Grades run from 1 to 9; a pass certificate needs four subjects including English plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics has an 80-mark, three-hour theory paper and 20 marks of project work in both years; see our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-ladder">The CISCE years for a Patna student</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 6 to Class 12 on the ICSE and ISC route</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What is at stake</th><th scope="col">Most useful tuition</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School exams</td><td>Full-sentence answers, stepwise maths, science words used correctly</td></tr>
      <tr><td>9</td><td>The two-year ICSE syllabus begins</td><td>Revision rounds from the start; diagrams and working every week</td></tr>
      <tr><td>10</td><td>ICSE papers and internal marks</td><td>Specimen papers and examiner reports, timed, paper by paper</td></tr>
      <tr><td>11</td><td>Promotion rules; subject lock in September</td><td>Electives chosen with care; the jump from ICSE closed early</td></tr>
      <tr><td>12</td><td>ISC theory, practicals, projects</td><td>Depth, plus practical and project deadlines kept</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-subjects">Subjects Patna ICSE families ask about</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-patna') }}">Maths home tutors in Patna</a>; the <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both papers.</li>
    <li><a href="{{ url('/science-home-tutor-patna') }}">Science tutors</a> for the three ICSE papers, and <a href="{{ url('/physics-home-tutor-patna') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-patna') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-patna') }}">biology</a> tutors for ISC.</li>
    <li><a href="{{ url('/english-home-tutor-patna') }}">English tutors in Patna</a> for set texts and long answers.</li>
    <li>Entrance preparation from Class 11: <a href="{{ url('/jee-home-tutor-patna') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-patna') }}">NEET</a> home tutors in Patna.</li>
  </ul>
  <p>
    For the board in full, see our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC board hub</a>. Weighing
    ISC against CBSE for Class 11? Our <a href="{{ url('/cbse-home-tutor-patna') }}">CBSE home tutors in Patna</a> page
    describes that board, and the <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a>
    helps with subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-zones">How ICSE tutors reach each zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/patna/zone/boring-road-patliputra') }}">Boring Road and Patliputra</a>:</strong> in {!! $picA('sri-krishna-puri', 'Sri Krishna Puri') !!}, give the lane landmark; for towers in {!! $picA('digha', 'Digha') !!}, register the tutor at the gate, and a tutor from the Patliputra side can use the riverfront road.</li>
    <li><strong><a href="{{ url('/city/patna/zone/kankarbagh-rajendra-nagar') }}">Rajendra Nagar</a>:</strong> share the road number and building name in {!! $picA('rajendra-nagar', 'Rajendra Nagar') !!}; a tutor near a Blue Line station can arrive by metro.</li>
    <li><strong><a href="{{ url('/city/patna/zone/bailey-road-danapur') }}">Danapur</a>:</strong> for homes inside the cantonment in {!! $picA('danapur', 'Danapur') !!}, confirm the visitor procedure before the demo.</li>
    <li><strong><a href="{{ url('/city/patna/zone/gandhi-maidan-ashok-rajpath-old-patna') }}">Ashok Rajpath</a>:</strong> along {!! $picA('ashok-rajpath', 'Ashok Rajpath') !!}, book away from college hours and send a lane landmark.</li>
    <li><strong><a href="{{ url('/city/patna/zone/anisabad-gardanibagh-phulwari') }}">Gardanibagh</a>:</strong> in the housing campus at {!! $picA('gardanibagh', 'Gardanibagh') !!}, pass the block and flat to the gate before the first lesson.</li>
  </ul>
  <p>
    ICSE and especially ISC elective specialists are fewer than general tutors, so families often keep a local tutor
    for maths and add online sessions for one ISC elective or literature. Online works when the tutor sees written
    work live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-next">After Class 10: which way, and how a tutor helps the move</h2>
  <p>
    A Patna student finishing ICSE usually weighs three options. Continuing with ISC keeps the CISCE answer style,
    though each elective goes much deeper and practicals and projects grow. Moving to CBSE for Class 11 brings the NCERT
    books, CBSE sample papers and a different split between theory and practical marks; the maths and science carry
    over well, but answers become shorter and more tightly tied to the textbook. Moving to the Bihar board's
    intermediate course means new prescribed books and patterns, so read the board's official notices before
    choosing. Whichever road, the summer after Class 10 is the time for a short bridging plan: the new board's first
    chapters, its question style and, for science students, a calm start on Class 11 physics and maths before coaching
    begins. Because ISC locks subjects in September of Class 11, make the decision early rather than after a term of
    trial.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-mode">Home or online for ICSE in Patna?</h2>
  <p>
    For Class 6 to 10 maths and the three science papers, a tutor at the table is worth the travel, because so much of
    the marking is about each written line. Online is the sensible choice for an ISC elective or a literature course
    whose specialist lives across the city, for short revision checks in the weeks before exams, and for the days when
    summer heat, the heaviest monsoon days or Chhath make the roads hard going. If you go online for maths or science, insist on
    a writing tablet, a shared whiteboard or a camera over the notebook.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-demo">Checking a tutor against the CISCE style</h2>
  <ol>
    <li>Ask which recent specimen paper and examiner report they work from.</li>
    <li>Watch whether maths answers must show every step, the units and the final form.</li>
    <li>Request a short physics problem and a labelled biology diagram in the same hour.</li>
    <li>See whether they correct the English of an answer, not only its facts.</li>
    <li>For ISC, ask how they guide a project and practical file without writing either.</li>
  </ol>
  <p>
    Your shortlist has two or three tutors and shows each fee before the demo; changing tutor later is free. Tutors who
    join complete an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile appears.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pic-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC in
    Patna, the class, how many papers, the time left to the exam and the tutor's route set the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-patna') }}">Patna
    fees post</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, colony and slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. You can browse <a href="{{ url('/tutors') }}">tutor profiles</a>, and
    tutors can find <a href="{{ url('/tuition-jobs/patna') }}">tuition jobs in Patna</a>. Local timing tips are in the
    <a href="{{ url('/blog/north-and-west-patna-tuition-guide') }}">north and west Patna guide</a>.
  </p>
  </section>

  </div>
</article>
