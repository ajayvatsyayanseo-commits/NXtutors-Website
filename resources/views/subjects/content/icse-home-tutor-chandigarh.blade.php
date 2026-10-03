{{--
  Board hub for "ICSE home tutor Chandigarh" (CISCE: ICSE Class 10, ISC
  Class 12) across the tricity. Authors: Abhinandan Tiwary (role: Class 10
  CBSE and ICSE maths), Aaditya Kashyap (role: CBSE and ICSE science) and Ajay
  Vatsyayan (role: IB, IGCSE and ISC maths). No anecdotes, years or results
  are claimed for any of them. No schools are named.

  Board facts restate only what icse-home-tutor-gurgaon states, which cites
  cisce.org (read 1 Oct 2026): ICSE Regulations (Group I compulsory, Group II
  two or three subjects, both 80% external / 20% internal; Group III one
  subject, 50% / 50%), ICSE Mathematics (one 3-hour 80-mark paper + 20 marks
  internal from at least two assignments, marked by the teacher and an
  external examiner), ICSE Physics, Chemistry, Biology (each a 2-hour 80-mark
  paper + 20 marks practical internal assessment), the Analysis of Pupil
  Performance reports, ISC Regulations (English + three to five electives, up
  to six; practicals compulsory where set; no change after 15 September of the
  Class XI year; promotion needs 35% in four subjects incl. English and 75%
  attendance; grades 1-9; SUPW and Community Service), ISC Mathematics 860
  (80-mark theory + 20 project). No exam dates.

  Local detail only from the city hub (chandigarh.blade.php: CISCE among up to
  five tricity boards, ICSE/ISC card), database/seo-content/zones/
  chandigarh.json and areas/chandigarh-research.json / -zone-guides.json.
  No share of CISCE schools is claimed. Fee wording is the approved sentence.
  FAQs render from faqs/icse-home-tutor-chandigarh.php. Area links render only
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

<article class="nx-guide icc-guide" aria-labelledby="iccGuideTitle">
  <h2 id="iccGuideTitle">ICSE and ISC tutors in Chandigarh, Mohali and Panchkula: matching the CISCE way of marking</h2>

  <p class="nx-guide__lede">
    CISCE is one of the five boards tricity families work with, and it asks for something the others ask for less:
    long, carefully written answers across a wide syllabus, with English literature, project work and practicals all
    counting. The ICSE at Class 10 and the ISC at Class 12 are run by the same council but feel quite different to a
    student. This page explains both, sets out which papers parents in the tricity usually want help with, describes
    how a tutor reaches each zone, and gives a demo checklist written for this board. It is written by Abhinandan
    Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science), with Ajay Vatsyayan (IB, IGCSE
    and ISC maths) on the ISC sections. For a longer account of the board itself, read
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">how ICSE and ISC work</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icc-place">CISCE in the tricity</a> ·
    <a href="#icc-state">Against the state boards</a> ·
    <a href="#icc-groups">ICSE groups and papers</a> ·
    <a href="#icc-isc">ISC rules</a> ·
    <a href="#icc-years">Year by year</a> ·
    <a href="#icc-session">A good session</a> ·
    <a href="#icc-subjects">Subjects and pages</a> ·
    <a href="#icc-zones">Tutors by zone</a> ·
    <a href="#icc-mode">Home or online</a> ·
    <a href="#icc-demo">Demo checklist</a> ·
    <a href="#icc-start">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icc-place">Where CISCE fits in the tricity's school mix</h2>
  <p>
    Our <a href="{{ url('/city/chandigarh') }}">tricity hub</a> lists up to five boards in use: CBSE, CISCE, the
    international programmes, the Punjab board on the Mohali and Zirakpur side, and the Haryana board in Panchkula.
    We do not put a figure on how many families follow each, and you should be wary of anyone who does. For tuition
    the practical point is simple: a tutor who knows CISCE well is a narrower search than a general one, so an ICSE or
    ISC family should say so clearly at the start and expect us to look a little wider for a tutor who really knows CISCE papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-state">How CISCE papers differ from a state board's</h2>
  <p>
    Speaking generally, a state board such as the Punjab or Haryana board prescribes its own textbooks and sets
    papers to its own pattern. CISCE papers cover more separate subjects at Class 10, include prescribed literature
    in English, and reward written explanation as much as the final answer. A student moving from
    a state-board school into an ICSE school, or the other way, usually finds the content manageable and the answer
    style unfamiliar. That gap, not the syllabus, is what a tutor should close in the first weeks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-groups">ICSE subject groups and what each paper looks like</h2>
  <p>
    CISCE's regulations arrange ICSE subjects in three groups, and the group sets how much of the mark comes from the
    final paper:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE groups and the external–internal split</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What the student takes</th><th scope="col">Exam / internal</th><th scope="col">Tuition angle</th></tr>
    </thead>
    <tbody>
      <tr><td>I, compulsory</td><td>English, a second language, and History, Civics and Geography</td><td>80 / 20</td><td>Written length, set texts, maps and dates</td></tr>
      <tr><td>II, two or three</td><td>From Mathematics, Science, Economics, Commercial Studies, a foreign or classical language, Environmental Science</td><td>80 / 20</td><td>Method in maths; three science papers</td></tr>
      <tr><td>III, one subject</td><td>An applied subject such as Computer Applications, Art, Physical Education or Robotics and AI</td><td>50 / 50</td><td>Steady project work through the year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ICSE Mathematics is a single three-hour paper of 80 marks with 20 internal marks from at least two assignments,
    each marked separately by the subject teacher and an external examiner. Science is really Physics, Chemistry and
    Biology, each a two-hour paper of 80 marks with 20 marks for practical work. A child strong in physics numericals
    can still drop marks on biology diagrams, so either the tutor covers all three or the family plans for the weak
    one. After each exam CISCE publishes an Analysis of Pupil Performance by subject; a tutor who reads it knows where
    marks were lost across the country.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-isc">ISC in Classes 11 and 12: rules that shape the plan</h2>
  <p>
    At ISC, English is compulsory and the student adds three to five electives, with six subjects at most. A few
    regulations affect tutoring directly. Subjects cannot be changed after 15 September of the Class 11 year, and a
    Class 12 subject must have been studied in Class 11. Promotion to Class 12 needs at least 35% in four subjects
    including English, plus 75% attendance. Where a subject has a practical paper, it must be taken. Grades run from 1
    to 9, and the pass certificate also needs Socially Useful Productive Work and Community Service. ISC Mathematics
    pairs an 80-mark, three-hour theory paper with 20 marks of project work in both years; our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page covers it in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-years">The CISCE years for a tricity student</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Classes 6 to 12 on CISCE, and where a tutor fits</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What is being judged</th><th scope="col">A tutor's priority</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School exams and projects</td><td>Neat stepwise maths, science vocabulary, writing full paragraphs</td></tr>
      <tr><td>9</td><td>School exams as the two-year ICSE syllabus begins</td><td>Keeping pace across many subjects; diagrams and working from day one</td></tr>
      <tr><td>10</td><td>ICSE papers plus internal marks</td><td>Specimen papers, examiner reports, timed papers one subject at a time</td></tr>
      <tr><td>11</td><td>School exams; promotion rules apply</td><td>Choosing electives well before mid-September; closing the jump</td></tr>
      <tr><td>12</td><td>ISC theory, practicals and projects</td><td>Depth in each elective, practical records and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-session">What an hour of ICSE tuition should contain</h2>
  <p>
    A useful CISCE session spends as much time on writing as on explaining. It usually opens with the student's own
    attempt at two or three questions from last week's topic, marked line by line: a missing step in maths, a unit
    dropped in physics, an unlabelled part of a biology diagram, a sentence in a history answer that says nothing the
    examiner can credit. Then the tutor teaches or repairs one topic from the school textbook and moves straight to
    specimen-paper questions on it. The last ten minutes are one question written in full under time, so the student
    learns how long a good answer takes. For ISC science, some sessions should also cover the practical record: how
    to tabulate readings, choose a graph's scale and write a conclusion. Ask the tutor to keep a short log of topics,
    scores and repeated errors, and read it once a month; it tells you more than any single test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-subjects">Which ICSE and ISC subjects tricity parents ask about</h2>
  <p>
    At ICSE level the first requests are maths and the three sciences, because their marks build week by week. English
    language and literature come next, since answers are long and set texts must be known well, followed by History,
    Civics and Geography. At ISC, requests narrow to the electives: maths, physics, chemistry and biology for science
    students, accounts, commerce and economics for commerce students. Tricity pages that cover these:
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-chandigarh') }}">Maths home tutors in Chandigarh</a>, ICSE and ISC</li>
    <li><a href="{{ url('/science-home-tutor-chandigarh') }}">Science home tutors</a> for ICSE Physics, Chemistry and Biology</li>
    <li>ISC electives: <a href="{{ url('/physics-home-tutor-chandigarh') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-chandigarh') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-chandigarh') }}">biology</a></li>
    <li><a href="{{ url('/english-home-tutor-chandigarh') }}">English home tutors</a> for both ICSE English papers and ISC English</li>
    <li>Alongside ISC science: <a href="{{ url('/jee-home-tutor-chandigarh') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-chandigarh') }}">NEET</a> preparation</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> walks through both maths
    papers question type by question type.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-zones">How ICSE tutors get to you, zone by zone</h2>
  <p>
    Because a CISCE specialist may not live in your own sector, the second and third rings of our shortlist, tutors who
    already travel to your area and then the wider tricity, matter more for ICSE families.
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-1-30') }}">Sectors 1 to 30</a>.</strong> Doorstep visits to plotted homes. In {!! $cgA('sector-10', 'Sector 10') !!} a tutor coming from Panchkula should arrive before the Madhya Marg rush; near the stadium in {!! $cgA('sector-16', 'Sector 16') !!}, fix a parking spot on day one.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-31-56-manimajra') }}">Sectors 31 to 56 and Manimajra</a>.</strong> {!! $cgA('sector-35', 'Sector 35') !!} is within easy reach of the Sector 43 bus terminal, and {!! $cgA('sector-46', 'Sector 46') !!} sits near the roads to Zirakpur, so tutors from the south can come without crossing the city.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/mohali') }}">Mohali</a>.</strong> {!! $cgA('mohali-phase-5', 'Phase 5') !!} is mostly houses and villas, reached at the gate; tutors from Chandigarh's southern sectors are as practical as Mohali ones. Some Mohali neighbours follow the Punjab board, so say ICSE or ISC plainly in the request.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/panchkula-zirakpur') }}">Panchkula and Zirakpur</a>.</strong> {!! $cgA('mansa-devi-complex-panchkula', 'Mansa Devi Complex') !!} mixes plots with group housing; during Navratra, move lessons earlier or online.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-mode">Home or online for ICSE and ISC</h2>
  <p>
    ICSE rewards presentation, and presentation is easiest to correct with the notebook on the table, so home lessons
    suit Classes 6 to 10 well wherever a CISCE tutor lives within reach. For ISC electives, the right specialist may
    be on the other side of Housing Board Chowk, or outside the tricity altogether. Then a hybrid works: one home
    lesson for written practice and one online session where the tutor watches working live through a shared
    whiteboard or a camera over the page. See the <a href="{{ url('/blog/chandigarh-sectors-tuition-guide') }}">Chandigarh
    sectors guide</a> and <a href="{{ url('/blog/mohali-and-panchkula-tuition-guide') }}">Mohali and Panchkula
    guide</a> for local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-demo">A demo checklist for CISCE tutors</h2>
  <ol>
    <li><strong>Every step, in writing.</strong> In maths, see whether the tutor insists on full method and the final form of the answer.</li>
    <li><strong>Specimen papers and examiner reports.</strong> Ask which they use and what the latest Analysis of Pupil Performance said about your child's subject.</li>
    <li><strong>Three sciences, not one.</strong> Ask for a short physics problem and then a labelled biology diagram.</li>
    <li><strong>Language feedback.</strong> A CISCE tutor corrects sentences as well as facts, in every subject.</li>
    <li><strong>ISC specifics.</strong> For Class 11, ask how they would advise on electives before the September cut-off; for Class 12, how they guide project and practical work without writing it.</li>
  </ol>
  <p>
    You see two or three matched tutors with their fees before the demo, and a later switch is free. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icc-start">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For CISCE students the
    class, the number of papers, the nearness of the exam and the tutor's travel decide where in that range a fee
    falls. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-chandigarh') }}">tricity tuition fees</a>.
  </p>
  <p>
    Tell us ICSE or ISC, the class, subjects, your sector or phase and your slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or if
    you teach CISCE subjects, look at <a href="{{ url('/tuition-jobs/chandigarh') }}">tuition jobs in the tricity</a>.
  </p>
  </section>

  </div>
</article>
