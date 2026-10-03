{{--
  Board page for "ICSE home tutor Dehradun" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed. No schools,
  coaching institutes, campuses, factories or people are named. Page writer
  (capitals phase 2), 3 Oct 2026.

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
  Uttarakhand board mentioned only generally (ubse.uk.gov.in). The Dehradun hub
  names ICSE and ISC among the city's boards; no shares or board-by-area
  claims. Local detail only from database/seo-content/areas/dehradun-research.json.
  Fee wording is the approved sentence. Area links render only for active
  Dehradun areas.
--}}
@php
  $dicSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dicA = function (string $slug, string $label) use ($dicSlugs) {
      return in_array($slug, $dicSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dicGuideTitle">
  <h2 id="dicGuideTitle">ICSE and ISC home tutors in Dehradun: breadth, long answers and steady project work</h2>

  <p class="nx-guide__lede">
    ICSE in Class 10 and ISC in Class 12 are set by CISCE, and they are among the boards Dehradun children study under,
    together with CBSE, the Uttarakhand board and a smaller IB and IGCSE group. A CISCE course asks for more writing
    and covers more ground than many families expect, and its internal and project marks are spread across the year.
    A tutor who knows this board plans for that from the first month. This page sets out how ICSE subjects are grouped
    and weighted, what the maths and science papers look like, which ISC rules catch families out, how to plan revision
    for a wide syllabus, how tutors reach each part of Dehradun, and what to check in the free demo. It reflects the
    roles of our authors for Class 10 ICSE maths, ICSE science and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dic-groups">ICSE groups</a> ·
    <a href="#dic-papers">Maths and science papers</a> ·
    <a href="#dic-rounds">Revision in rounds</a> ·
    <a href="#dic-projects">Internal work</a> ·
    <a href="#dic-isc">ISC rules</a> ·
    <a href="#dic-years">Class by class</a> ·
    <a href="#dic-subjects">Subjects</a> ·
    <a href="#dic-where">Localities</a> ·
    <a href="#dic-after">After Class 10</a> ·
    <a href="#dic-mode">Home or online</a> ·
    <a href="#dic-demo">Demo</a> ·
    <a href="#dic-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dic-groups">How ICSE Class 10 subjects are grouped and weighted</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE subject groups under the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What it contains</th><th scope="col">Exam paper : internal marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I (compulsory)</td><td>English, a second language, and History, Civics and Geography</td><td>80 : 20</td></tr>
      <tr><td>Group II (two or three)</td><td>Choices such as Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80 : 20</td></tr>
      <tr><td>Group III (one)</td><td>An applied subject, for example Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education, or Robotics and AI</td><td>50 : 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Group III subject is the one where half the marks are earned through the year. A student who lets that work
    slide until the last term gives away marks that no amount of revision can recover, so a tutor or parent should
    keep a dated list of its assignments from the start of Class 9.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-papers">What the ICSE maths and science papers look like</h2>
  <ul>
    <li><strong>Mathematics.</strong> One three-hour paper of 80 marks, plus 20 internal marks from at least two assignments, each marked separately by the school's teacher and by an external examiner. Commercial topics such as banking and shares sit alongside algebra, geometry, trigonometry and statistics, and examiners expect every step of working.</li>
    <li><strong>Physics, Chemistry and Biology.</strong> Three separate two-hour papers of 80 marks each, and 20 internal marks in each for practical work. A good result in one does not help the other two, so it is worth asking whether one tutor will cover all three or whether the weakest needs its own specialist.</li>
  </ul>
  <p>
    After each exam season CISCE publishes an Analysis of Pupil Performance for each subject, showing where candidates
    lost marks and what examiners wanted. A tutor who uses these reports alongside the specimen papers is preparing
    your child for the examiner, not just the textbook. Our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> was written for another
    city, but the paper advice applies in Dehradun.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-rounds">Revising a wide syllabus in rounds</h2>
  <p>
    The usual ICSE problem is not difficulty but breadth: by the time the last chapters are taught, the first ones have
    gone cold. Revision in rounds solves that. A simple version a tutor can run from Class 9:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A three-round revision plan for ICSE or ISC</caption>
    <thead>
      <tr><th scope="col">Round</th><th scope="col">When</th><th scope="col">What happens</th></tr>
    </thead>
    <tbody>
      <tr><td>Round one</td><td>Through the teaching year</td><td>Every third or fourth session reopens an old chapter in each paper for a short timed question</td></tr>
      <tr><td>Round two</td><td>After the syllabus is finished</td><td>Chapter-by-chapter specimen questions, with errors logged against the examiners' comments</td></tr>
      <tr><td>Round three</td><td>The final weeks</td><td>Full papers at real length, marked line by line, with the weakest chapters revisited between papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Timed long answers should start in Class 9, not in the final term, because writing speed for structured answers
    grows slowly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-projects">Keeping internal work on track</h2>
  <p>
    Internal marks in a CISCE course are earned in small pieces: maths assignments, science practical records, the
    Group III coursework and, at ISC, project work in subjects such as mathematics. None of these is written by a tutor,
    and none should be. What a tutor can do is make sure they are started early, checked against the requirement and
    finished calmly. A short routine works well:
  </p>
  <ul>
    <li>At the first session of each month, list every assignment and practical due in the next six weeks.</li>
    <li>Agree which ones need guidance, such as choosing a topic or planning a method, and which the student will do alone.</li>
    <li>Look over drafts for accuracy and completeness, and leave the writing to the student.</li>
  </ul>
  <p>
    Parents in a busy household find this the easiest part of an ICSE year to lose track of, and the simplest to fix.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-isc">ISC in Classes 11 and 12: the rules to know early</h2>
  <ul>
    <li><strong>Subject count.</strong> English is compulsory, with three to five electives and a maximum of six subjects.</li>
    <li><strong>A firm deadline.</strong> Subjects cannot be changed after 15 September of the Class 11 registration year, and any Class 12 subject must have been studied in Class 11.</li>
    <li><strong>Promotion.</strong> Moving to Class 12 needs 35% in four subjects including English, and 75% attendance.</li>
    <li><strong>Practicals and combinations.</strong> Practical exams are compulsory in subjects that have them, and Physics cannot be combined with Engineering Science.</li>
    <li><strong>Grades and certificates.</strong> Grades run from 1 to 9; a pass certificate needs four subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics has a three-hour, 80-mark theory paper and 20 marks of project work in each year. Our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page explains what a specialist should cover.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-years">The CISCE route class by class</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 6 to Class 12 on ICSE and ISC, and where a tutor helps</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">What changes</th><th scope="col">Tutor's role</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school sets the papers; reading and writing loads grow year on year</td><td>Reading for meaning, neat working, and a weekly writing habit</td></tr>
      <tr><td>9 and 10</td><td>Group choices made; internal and project marks count towards the ICSE result</td><td>Revision in rounds, timed answers, and a project calendar</td></tr>
      <tr><td>11</td><td>ISC electives fixed by mid-September; the step up in maths and physics</td><td>Choosing subjects with care, then building the base for Class 12</td></tr>
      <tr><td>12</td><td>Theory, practicals and projects across five or six subjects</td><td>One plan that covers board papers and, for some, JEE or NEET</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-subjects">Subjects Dehradun ICSE families most often need help with</h2>
  <ul>
    <li><strong>Mathematics</strong>, ICSE and ISC: see <a href="{{ url('/maths-home-tutor-dehradun') }}">maths home tutors in Dehradun</a>.</li>
    <li><strong>Physics, chemistry and biology</strong>: <a href="{{ url('/physics-home-tutor-dehradun') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-dehradun') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-dehradun') }}">biology</a> pages for Dehradun.</li>
    <li><strong>English language and literature</strong>, which carries weight in both ICSE and ISC: <a href="{{ url('/english-home-tutor-dehradun') }}">English home tutors in Dehradun</a>.</li>
    <li><strong>Commerce and humanities electives</strong> at ISC: ask, and we match by subject.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-where">How ICSE tutors reach six Dehradun localities</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Visits to six Dehradun localities for ICSE and ISC tuition</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">Practical note</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $dicA('vasant-vihar', 'Vasant Vihar') !!}</td><td>Vasant Vihar and Chakrata Road</td><td>Balliwala Chowk is the nearest main bus stop; register the tutor at the complex gate</td></tr>
      <tr><td>{!! $dicA('gms-road', 'GMS Road') !!}</td><td>Vasant Vihar and Chakrata Road</td><td>Evening shopping traffic on the main road, so begin early; lanes behind are quieter</td></tr>
      <tr><td>{!! $dicA('kanwali', 'Kanwali') !!}</td><td>Vasant Vihar and Chakrata Road</td><td>Gated townships may issue a regular pass after the demo; Kanwali Road peaks at office hours</td></tr>
      <tr><td>{!! $dicA('turner-road', 'Turner Road') !!}</td><td>Saharanpur Road and Clement Town</td><td>Mostly independent houses; work on a new bypass may change routes for a while</td></tr>
      <tr><td>{!! $dicA('clement-town', 'Clement Town') !!}</td><td>Saharanpur Road and Clement Town</td><td>Cantonment visitor rules apply; tutors from Turner Road or Subhash Nagar suit regular evenings</td></tr>
      <tr><td>{!! $dicA('doiwala', 'Doiwala') !!}</td><td>Haridwar Road</td><td>A local tutor for weekly visits; ISC specialists online if none lives nearby</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages cover the rest: <a href="{{ url('/city/dehradun/zone/rajpur-road-dalanwala') }}">Rajpur Road and
    Dalanwala</a>, <a href="{{ url('/city/dehradun/zone/sahastradhara-raipur') }}">Sahastradhara and Raipur</a>,
    <a href="{{ url('/city/dehradun/zone/haridwar-road') }}">Haridwar Road</a>,
    <a href="{{ url('/city/dehradun/zone/vasant-vihar-chakrata-road') }}">Vasant Vihar and Chakrata Road</a> and
    <a href="{{ url('/city/dehradun/zone/saharanpur-road-clement-town') }}">Saharanpur Road and Clement Town</a>. See
    also the <a href="{{ url('/city/dehradun') }}">Dehradun home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-after">After Class 10: staying with ISC or changing board</h2>
  <p>
    Some Dehradun students continue to ISC; others move to CBSE or the Uttarakhand board for Class 11, often with JEE
    or NEET in mind. Either route can work. If your child changes board, expect the first term to feel uneven: CISCE
    students usually write well at length but may need practice with objective and competency-style questions, while
    the new board's paper design, internal marks and textbooks all have to be learned. A tutor can map the gaps in the
    first month. Read <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a>, and the
    <a href="{{ url('/cbse-home-tutor-dehradun') }}">CBSE</a> and
    <a href="{{ url('/uttarakhand-board-tutor-dehradun') }}">Uttarakhand board</a> pages for Dehradun.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-mode">Home or online for ICSE in Dehradun?</h2>
  <p>
    Maths and the sciences benefit from a tutor at the table, especially in Classes 9 and 10, where marks depend on
    complete working. English literature, history and geography and ISC theory revision often work well online, and
    narrow ISC electives may only have a specialist online. On cold winter evenings and heavy monsoon days, an agreed
    online fallback keeps the week intact. See <a href="{{ url('/online-tutor-dehradun') }}">online tutors for
    Dehradun</a> and our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-demo">Testing a tutor against the CISCE style</h2>
  <ol>
    <li>Ask the tutor to mark one of your child's long answers the way a CISCE examiner would, and explain each lost mark.</li>
    <li>Ask how they use specimen papers and the Analysis of Pupil Performance reports.</li>
    <li>Check that they know the internal and project requirements for your child's subjects.</li>
    <li>For ISC, ask which electives they teach and at what level.</li>
    <li>Confirm the weekly day and time they can keep, including through winter.</li>
  </ol>
  <p>
    If the demo does not satisfy you, we arrange another; switching tutor later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dic-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees, visible before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-dehradun') }}">home tuition fees in Dehradun</a>.
  </p>
  <p>
    Tell us the class, ICSE or ISC, subjects, and your locality with a landmark. We send two or three matched tutors,
    and the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; you can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, read the <a href="{{ url('/blog/dehradun-home-tuition-guide') }}">Dehradun home tuition guide</a>, or,
    if you teach, see <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
