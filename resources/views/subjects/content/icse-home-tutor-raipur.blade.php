{{--
  Board page for "ICSE home tutor Raipur" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed. No schools,
  coaching institutes or people are named. Page writer, 3 Oct 2026.

  Board facts only as the Gurgaon and Patna ICSE pages state them, which cite
  cisce.org (read 1 Oct 2026): ICSE Regulations 2027 (Group I compulsory,
  Group II two or three subjects, 80/20; Group III one subject, 50/50); ICSE
  Mathematics one 3-hour 80-mark paper + 20 internal from at least two
  assignments marked by teacher and external examiner; ICSE Physics,
  Chemistry, Biology separate 2-hour 80-mark papers + 20 practical internal;
  Analysis of Pupil Performance reports; ISC Regulations (English + three to
  five electives, at most six; no change after 15 September of Class XI; XII
  subject must be studied in XI; promotion 35% in four subjects incl. English
  and 75% attendance; practicals compulsory; Physics not with Engineering
  Science; grades 1-9; pass certificate four subjects incl. English + SUPW and
  Community Service); ISC Mathematics 80 theory + 20 project.
  CGBSE comparison only from cgbse.nic.in (read 3 Oct 2026):
  https://cgbse.nic.in/Documents/2026/adhyapan_yojana_2026_27.pdf (Class 10
  75 + 25; Higher Secondary faculties).
  Raipur's board mix only as the hub states it. Local detail only from
  raipur-research.json, raipur-zone-guides.json and the hub. Fee wording is
  the approved sentence. Area links render only for active Raipur areas.
--}}
@php
  $ricSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ricA = function (string $slug, string $label) use ($ricSlugs) {
      return in_array($slug, $ricSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="ricGuideTitle">
  <h2 id="ricGuideTitle">ICSE and ISC home tutors in Raipur: a long syllabus, planned in rounds</h2>

  <p class="nx-guide__lede">
    The council behind ICSE and ISC, CISCE, sets papers that are long, written and wide. Few questions are hard on
    their own; the difficulty is covering everything, writing it out clearly, and still having time to revise the
    chapters taught in July. In Raipur, ICSE sits beside the Chhattisgarh state board and CBSE, so an ICSE family
    should make sure the tutor is working to CISCE's papers and not to the more familiar local formats. This page
    explains how the ICSE subjects are grouped, how the maths and science papers are built, the ISC rules that catch
    students out, how a tutor can plan a Raipur school year in rounds, and how tutors reach your locality. Our named
    authors teach in line with their roles: Abhinandan Tiwary, Class 10 ICSE and CBSE maths; Aaditya Kashyap, ICSE and
    CBSE science; Ajay Vatsyayan, ISC, IB and IGCSE maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ric-local">ICSE in Raipur</a> ·
    <a href="#ric-groups">Subject groups</a> ·
    <a href="#ric-papers">Maths and science papers</a> ·
    <a href="#ric-rounds">Planning in rounds</a> ·
    <a href="#ric-writing">Writing for CISCE</a> ·
    <a href="#ric-english">English and languages</a> ·
    <a href="#ric-isc">ISC rules</a> ·
    <a href="#ric-after10">After Class 10</a> ·
    <a href="#ric-where">Localities</a> ·
    <a href="#ric-mode">Home or online</a> ·
    <a href="#ric-demo">Demo</a> ·
    <a href="#ric-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ric-local">Where ICSE fits among Raipur's boards</h2>
  <p>
    Raipur classrooms run four kinds of syllabus: the Chhattisgarh state board, CBSE, CISCE's ICSE and ISC, and, for
    fewer students, IB and IGCSE. Tutors who teach several boards are common, and that is fine as long as the tutor
    switches style. A CG Board Class 10 paper, for instance, is 75 marks with a fixed nineteen-question plan and 25
    project or practical marks; an ICSE science subject is a separate two-hour paper of 80 marks with 20 internal marks
    for practical work. Practising one board's format for the other wastes months. Ask the tutor to show you the CISCE
    material they will use.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-groups">How the ICSE Class 10 subjects are grouped</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE subject groups in the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What it holds</th><th scope="col">Marks split</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I, taken by all</td><td>English, a second language, and History, Civics and Geography</td><td>80 external, 20 internal</td></tr>
      <tr><td>Group II, two or three</td><td>Choices such as Mathematics, Science, Economics, Commercial Studies, Environmental Science or a further language</td><td>80 external, 20 internal</td></tr>
      <tr><td>Group III, one</td><td>An applied subject, for example Computer Applications, Art or Physical Education</td><td>50 external, 50 internal</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    With half its marks internal, the Group III subject repays steady project work through the year. CISCE also
    publishes a subject-wise Analysis of Pupil Performance after each exam season, showing where candidates lost
    marks; a good tutor reads it alongside the specimen papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-papers">The maths and science papers</h2>
  <ul>
    <li><strong>Mathematics:</strong> one three-hour paper of 80 marks, plus 20 internal marks from at least two assignments, assessed by the subject teacher and an external examiner.</li>
    <li><strong>Physics, Chemistry and Biology:</strong> three separate two-hour papers of 80 marks each, plus 20 internal marks for practical work in each.</li>
  </ul>
  <p>
    Three science papers instead of one means three separate revision tracks. A science tutor should keep a written
    plan showing which chapters of each subject were last revised and when, so none of the three drifts out of reach
    before the preliminary exams. In maths, the assignments are part of the score; a tutor can check that each one is
    finished properly and that your child can explain it, without writing it for them. Our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> goes deeper into the paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-rounds">Planning a Raipur ICSE year in rounds</h2>
  <p>
    Because volume is the problem, the most useful thing a tutor can bring is a plan that revisits every chapter
    several times rather than once at the end. One way to lay it out across a Raipur year:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three rounds through the ICSE Class 10 syllabus</caption>
    <thead>
      <tr><th scope="col">Round</th><th scope="col">When</th><th scope="col">Work</th></tr>
    </thead>
    <tbody>
      <tr><td>First round</td><td>April to September</td><td>Teach with the school; after each chapter, one short written test and a note of errors</td></tr>
      <tr><td>Second round</td><td>October to December</td><td>Revisit every chapter in a fixed order; lighter weeks around Dussehra and Diwali, more hours either side</td></tr>
      <tr><td>Third round</td><td>January onwards</td><td>Full timed papers in every subject, reviewed against the error notes from the first two rounds</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Raipur's hot afternoons in the early months suit morning or evening sessions, and a pre-agreed online session
    keeps the plan moving on the heaviest monsoon days. The same three-round idea is set out month by month in our
    <a href="{{ url('/blog/icse-class-10-board-year-plan-kolkata') }}">ICSE Class 10 board year plan</a>, written for
    another city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-writing">Writing answers the CISCE way</h2>
  <p>
    ICSE and ISC papers reward complete, organised answers: a definition stated before it is used, working shown line
    by line, a labelled diagram where one helps, units on every numerical. Students who prepare for objective entrance
    tests often lose this habit. A tutor should set at least one timed written answer per session and mark it as an
    examiner would, then show the student the difference between their answer and a full-mark one. English matters
    beyond the English paper too; in every subject, a student who writes clear sentences loses fewer marks to
    ambiguity.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-english">English and the second language</h2>
  <p>
    Group I is compulsory for every ICSE candidate, and it is where many Raipur families underestimate the work. English
    comes with prescribed literature texts that must be read closely and written about at length, not summarised from
    a guidebook. The second language, often Hindi for Raipur students, also needs regular written practice, since a
    child who speaks it fluently at home can still lose marks on grammar and composition. History, Civics and Geography
    complete the group and reward the same organised, complete answers as the sciences. A tutor for the sciences or
    maths rarely covers these, so if marks are slipping in Group I, consider a separate
    <a href="{{ url('/english-home-tutor-raipur') }}">English tutor</a> or a short block of sessions before the
    preliminary exams.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-isc">ISC in Classes 11 and 12: rules worth knowing early</h2>
  <ul>
    <li>English plus three to five elective subjects, and at most six subjects in all.</li>
    <li>Subjects cannot be changed after 15 September of Class 11, and a Class 12 subject must have been studied in Class 11.</li>
    <li>Promotion to Class 12 needs 35% in four subjects including English, and 75% attendance.</li>
    <li>Practical work is compulsory where the subject has it, and Physics cannot be combined with Engineering Science.</li>
    <li>Results are given as grades 1 to 9; a pass certificate needs four subjects including English, plus SUPW and Community Service.</li>
    <li>ISC Mathematics has 80 marks of theory and 20 for a project.</li>
  </ul>
  <p>
    The September deadline is the one to watch. If your child is unsure about an elective, use the first weeks of
    Class 11 to try it with a tutor, before the choice locks. The <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a>
    page covers the maths paper in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-after10">After ICSE Class 10: staying with ISC or moving</h2>
  <p>
    Some students continue to ISC, while others move to a CBSE or CG Board school for Classes 11 and 12. A move changes the paper style sharply. A student going to the CG Board meets a
    faculty system, with physics and chemistry plus biology or maths, papers built to a published blueprint and
    separate pass marks for practicals; one going to CBSE meets NCERT as the textbook. In either case, a tutor in
    the first term of Class 11 who knows the new board can save a lot of lost confidence. Our
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">board and stream guide</a> helps with the decision, and the
    <a href="{{ url('/cbse-home-tutor-raipur') }}">CBSE</a> and <a href="{{ url('/chhattisgarh-board-tutor-raipur') }}">Chhattisgarh
    Board</a> pages for Raipur cover those routes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-where">How ICSE tutors reach six Raipur localities</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Travel and arrival notes</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How tutors usually come</th><th scope="col">Arrival</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ricA('new-rajendra-nagar', 'New Rajendra Nagar') !!}</td><td>From Telibandha, Amlidih, Pachpedi Naka or Shankar Nagar</td><td>Apartment buildings ask visitors to sign in; houses mean the door</td></tr>
      <tr><td>{!! $ricA('pachpedi-naka', 'Pachpedi Naka') !!}</td><td>From the centre, Telibandha or the Dhamtari Road side</td><td>Parking is tight beside main-road buildings; give the tutor's name at the gate</td></tr>
      <tr><td>{!! $ricA('amlidih', 'Amlidih') !!}</td><td>From Telibandha, Mahaveer Nagar or New Rajendra Nagar</td><td>Mostly houses; share a map pin for newer layouts</td></tr>
      <tr><td>{!! $ricA('bhatagaon', 'Bhatagaon') !!}</td><td>From the colonies around the bus terminal</td><td>Complexes register visitors; tell the guard before the demo</td></tr>
      <tr><td>{!! $ricA('sarona', 'Sarona') !!}</td><td>By local train to Sarona, or from Tatibandh and Amanaka</td><td>Security usually notes visitors; a lane landmark for houses</td></tr>
      <tr><td>{!! $ricA('kabir-nagar', 'Kabir Nagar') !!}</td><td>From Tatibandh, Hirapur, Kota or Gudhiyari</td><td>Block and house number; flat blocks may have a caretaker</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The four zone guides, <a href="{{ url('/city/raipur/zone/central-raipur') }}">Central</a>,
    <a href="{{ url('/city/raipur/zone/east-raipur') }}">East</a>,
    <a href="{{ url('/city/raipur/zone/south-raipur') }}">South</a> and
    <a href="{{ url('/city/raipur/zone/west-raipur') }}">West Raipur</a>, give more local detail, and the
    <a href="{{ url('/city/raipur') }}">Raipur page</a> lists every locality.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-mode">Home or online for ICSE in Raipur?</h2>
  <p>
    For Class 10 maths and the three sciences, a tutor at home who can watch the written work is usually worth the
    travel. For ISC electives, literature, or a subject where the strongest CISCE specialist lives in another city,
    online lessons widen the choice considerably; the <a href="{{ url('/online-tutor-raipur') }}">online tutors for
    Raipur</a> page explains how that works. Many families mix the two with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-demo">Checking a tutor against the CISCE style</h2>
  <ol>
    <li>Ask the tutor to mark one of your child's recent written answers as a CISCE examiner would.</li>
    <li>Ask how they would plan the year so that early chapters are revised more than once.</li>
    <li>For science, ask how they will keep three separate papers moving at once.</li>
    <li>For ISC, ask what they would advise before the September deadline on electives.</li>
    <li>Confirm they can reach your locality at the same time every week.</li>
  </ol>
  <p>
    If the answers are thin, we arrange the next demo; switching later is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ric-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee, shown before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-raipur') }}">home tuition fees in Raipur</a>.
  </p>
  <p>
    Tell us the class, ICSE or ISC subjects, school timings and your locality with a landmark. You get two or three
    matched tutors and book a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. Subject pages for Raipur: <a href="{{ url('/maths-home-tutor-raipur') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-raipur') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-raipur') }}">biology</a> and <a href="{{ url('/english-home-tutor-raipur') }}">English</a>.
    Teachers can find requests on <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
