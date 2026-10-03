{{--
  Board page for "ICSE home tutor Guwahati" (CISCE: ICSE Class 10, ISC Class
  12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths),
  Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed. No
  schools, coaching institutes or people are named.

  Board facts only as the Gurgaon board hub (icse-home-tutor-gurgaon) states
  them, which cites cisce.org (read 1 Oct 2026): ICSE Regulations 2027 (Group
  I compulsory, Group II two or three, 80/20; Group III one subject, 50/50);
  ICSE Mathematics 3-hour 80-mark paper + 20 internal from at least two
  assignments marked by teacher and external examiner; Physics, Chemistry,
  Biology separate 2-hour 80-mark papers + 20 practical internal; Analysis of
  Pupil Performance; ISC Regulations (English + three to five electives, max
  six; no change after 15 September of Class XI; XII subject studied in XI;
  promotion 35% in four incl. English + 75% attendance; practicals
  compulsory; no Physics with Engineering Science; grades 1-9; pass
  certificate four incl. English + SUPW and Community Service); ISC
  Mathematics 80 theory + 20 project.
  Assam's state board described generally only, as on the /city/guwahati hub.
  Local detail only from guwahati-research.json, guwahati-zone-guides.json,
  zones/guwahati.json and the hub. Fee wording is the approved sentence. Area
  links render only for active Guwahati areas.
--}}
@php
  $gicSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gicA = function (string $slug, string $label) use ($gicSlugs) {
      return in_array($slug, $gicSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gicGuideTitle">
  <h2 id="gicGuideTitle">ICSE and ISC home tutors in Guwahati: full answers, many papers and the right elective</h2>

  <p class="nx-guide__lede">
    CISCE's two exams ask different things of a Guwahati student. ICSE at Class 10 is broad: a long list of papers,
    full written answers in English, set literature, and internal work alongside. ISC at Class 12 is deep: fewer
    subjects, harder content, compulsory practicals and rules about subject choice that leave little room for second
    thoughts. In a city without a metro, stretched along GS Road and split by the Brahmaputra, the tutor also has to be
    someone who can reach you on the same evening every week. This page explains how both exams are organised, where
    marks are usually lost, which subjects families ask about, how tutors reach each zone, and how to choose one at a
    free demo. The maths sections draw on Abhinandan Tiwary (ICSE) and Ajay Vatsyayan (ISC), the science sections on
    Aaditya Kashyap.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gic-mix">ICSE in Guwahati</a> ·
    <a href="#gic-groups">Groups and weightings</a> ·
    <a href="#gic-papers">Maths and science</a> ·
    <a href="#gic-habit">Weekly habits</a> ·
    <a href="#gic-isc">ISC rules</a> ·
    <a href="#gic-years">Year by year</a> ·
    <a href="#gic-subjects">Subjects</a> ·
    <a href="#gic-after">After Class 10</a> ·
    <a href="#gic-zones">By zone</a> ·
    <a href="#gic-mode">Home or online</a> ·
    <a href="#gic-demo">The demo</a> ·
    <a href="#gic-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gic-mix">Where ICSE sits in Guwahati</h2>
  <p>
    Our <a href="{{ url('/city/guwahati') }}">Guwahati tutors page</a> describes families spread across three systems:
    Assam's state board, CBSE, and CISCE's ICSE and ISC. It gives no shares and we add none. In general terms, the state
    board, long known through SEBA at Class 10 and AHSEC for higher secondary and now combined under one board, works
    from its prescribed textbooks in the school's medium. ICSE differs in ways a family notices at home: more separate
    papers in Class 10, longer answers in English across subjects, and published examiner reports that show exactly
    where candidates lose marks. A tutor who is good for one system is not automatically good for another.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-groups">ICSE groups and how each is weighted</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 subject groups under the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Rule</th><th scope="col">Subjects in it</th><th scope="col">Final exam / internal</th></tr>
    </thead>
    <tbody>
      <tr><td>Group I</td><td>Every subject compulsory</td><td>English; a second language; History, Civics and Geography</td><td>80 / 20</td></tr>
      <tr><td>Group II</td><td>Choose two or three</td><td>Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80 / 20</td></tr>
      <tr><td>Group III</td><td>Choose one</td><td>Applied subjects including Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education, Robotics and AI</td><td>50 / 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Group III is only one subject, but with half its marks internal, project work through the year decides much of the
    result.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-papers">Maths and the science papers</h2>
  <p>
    Mathematics is examined in one three-hour paper worth 80 marks. The remaining 20 are internal, from at least two
    assignments that the subject teacher and an external examiner each mark on their own. Commercial mathematics such
    as banking and shares is part of the course along with algebra, geometry, trigonometry and statistics, and the
    working is marked, not just the answer.
  </p>
  <p>
    Science is three papers. Physics, Chemistry and Biology are each examined for two hours and 80 marks, and each has 20
    marks of internal assessment of practical work. A student can be strong in one and weak in another, so check
    whether a single tutor is confident in all three. After the exams CISCE publishes an Analysis of Pupil Performance
    for each subject; read beside the specimen papers, it shows a tutor what examiners actually reward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-habit">Weekly habits that make ICSE manageable</h2>
  <p>
    The Guwahati hub describes the ICSE difficulty as volume, not any one chapter, and the tutor's work as a revision
    loop that keeps coming back to earlier topics, regular timed answers and steady care over project and internal
    work. Built into a week, that means: one slot that returns to an old chapter, rotating across papers; one answer
    written against the clock in every session; and a project list checked monthly. Inside each hour, the student
    attempts first, the tutor marks line by line for steps, labels, units and wording, and only then teaches the next
    topic. For English literature, a weekly written answer on a set text, returned with comments on structure, does
    more than discussion alone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-isc">ISC in Classes 11 and 12: the regulations in brief</h2>
  <ul>
    <li><strong>Subjects:</strong> English is compulsory, plus three to five electives, with six subjects at most.</li>
    <li><strong>No late changes:</strong> once 15 September of the year a student registers for Class 11 has passed, subjects stay as they are; nothing can be taken up fresh in Class 12.</li>
    <li><strong>Moving up:</strong> Class 12 requires at least 35% in four subjects, English among them, together with 75% attendance.</li>
    <li><strong>Practicals:</strong> compulsory where a subject has them; Physics and Engineering Science cannot be combined.</li>
    <li><strong>Results:</strong> graded on a 1 to 9 scale; the pass certificate asks for four subjects, English included, and passes in Socially Useful Productive Work and in Community Service.</li>
  </ul>
  <p>
    In ISC Mathematics, both Class 11 and Class 12 combine a theory paper (three hours, 80 marks) with project work
    worth 20; the
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page explains it in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-years">The CISCE years in Guwahati, one by one</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From Class 6 to Class 12, what counts and what a tutor should do</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What counts</th><th scope="col">Tutor's task</th></tr>
    </thead>
    <tbody>
      <tr><td>6–8</td><td>School exams</td><td>Number sense, fractions, neat working, reading with understanding</td></tr>
      <tr><td>9</td><td>School exams; the two-year ICSE course starts</td><td>A revision loop across every paper from the first term</td></tr>
      <tr><td>10</td><td>ICSE papers and internal marks</td><td>Specimen papers, examiner reports, timed practice</td></tr>
      <tr><td>11</td><td>School exams; promotion and subject-lock rules</td><td>Choosing electives; the step up from ICSE</td></tr>
      <tr><td>12</td><td>ISC theory, practicals, projects</td><td>Depth in electives; practical and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-subjects">Subjects Guwahati ICSE families ask about</h2>
  <p>
    Maths and the three sciences come first. English literature and History, Civics and Geography are next, for students
    who understand the material but write answers that are too short. In ISC the requests narrow to physics, chemistry,
    maths and biology for science students, and accounts and economics for commerce.
  </p>
  <ul>
    <li>For maths at either level, start with <a href="{{ url('/maths-home-tutor-guwahati') }}">maths home tutors in Guwahati</a>, and read our <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">guide to ICSE and ISC maths papers</a>.</li>
    <li>For Class 9 and 10 science, <a href="{{ url('/science-home-tutor-guwahati') }}">science tutors in Guwahati</a>; for a single ISC science, our <a href="{{ url('/physics-home-tutor-guwahati') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-guwahati') }}">chemistry</a> or <a href="{{ url('/biology-home-tutor-guwahati') }}">biology</a> pages.</li>
    <li>For literature and long answers, <a href="{{ url('/english-home-tutor-guwahati') }}">English tutors in Guwahati</a>.</li>
    <li>If an engineering or medical entrance is part of the plan, <a href="{{ url('/jee-home-tutor-guwahati') }}">JEE tutors</a> and <a href="{{ url('/neet-home-tutor-guwahati') }}">NEET tutors</a> in the city.</li>
  </ul>
  <p>
    Our <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC board hub</a> is the reference for how the board
    works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-after">After Class 10: ISC, CBSE or the state board</h2>
  <p>
    Continuing to ISC keeps the CISCE answer style, while each elective becomes much deeper and practical work grows.
    Switching to CBSE for Class 11 means NCERT books, CBSE sample papers and its own theory and practical splits; the
    maths and science carry over, the answer format shortens. Moving to the state board's higher secondary course
    means its prescribed books, pattern and possibly a different medium, so read the board's notices first. Settle the
    choice before Class 11 starts, since ISC fixes subjects in mid-September, and use the break for a bridging plan.
    See <a href="{{ url('/cbse-home-tutor-guwahati') }}">CBSE home tutors in Guwahati</a> and the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-zones">How ICSE tutors reach each zone</h2>
  <p>
    Every visit here is by bus, auto or two-wheeler, and ICSE specialists are fewer than general tutors, so we start
    close to your stretch of the city. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/guwahati/zone/old-city-riverfront') }}">Old City</a>:</strong> book {!! $gicA('ulubari', 'Ulubari') !!} sessions early morning, later evening or at weekends, away from office and market hours around the station, and avoid stadium event days.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/chandmari-zoo-road') }}">Zoo Road</a>:</strong> apartment buildings on {!! $gicA('zoo-road', 'Zoo Road') !!} often keep a visitor register, so give the guard the tutor's name before the demo.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/gs-road-dispur') }}">GS Road</a>:</strong> in {!! $gicA('rukminigaon', 'Rukminigaon') !!}, pass the building name, flat number and a phone number for the guard to the tutor.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/beltola-khanapara') }}">Khanapara</a>:</strong> for large complexes in {!! $gicA('khanapara', 'Khanapara') !!}, give the tower and flat with the gate to use; if the specialist lives far north, pair a nearby tutor with online classes.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/maligaon-jalukbari-north-guwahati') }}">Jalukbari and the north bank</a>:</strong> plan around the busy junction at {!! $gicA('jalukbari', 'Jalukbari') !!}; in {!! $gicA('north-guwahati', 'North Guwahati') !!}, ask for a tutor who already lives on the north bank.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-mode">Home or online for ICSE in Guwahati?</h2>
  <p>
    The hub notes that online lessons open up tutors across India, which matters most for ICSE literature and senior
    specialist papers. That suggests a split: a tutor from your own zone for maths and the sciences, where marking
    the working in person counts, and an online specialist for set texts or an ISC elective. North-bank families gain
    most from this mix. Online maths or science works only if the tutor sees the notebook live; on Bihu, Durga Puja and
    market-day evenings, an online session keeps the week on track.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-demo">What to check at an ICSE demo</h2>
  <ol>
    <li>Which specimen papers and examiner reports they use, and how recent.</li>
    <li>Whether maths answers must show each step and the final form.</li>
    <li>Whether they can teach a physics numerical and a biology diagram equally well.</li>
    <li>Whether they correct the wording of an answer as well as its facts.</li>
    <li>For ISC, how they guide projects and the practical file while leaving the work to the student.</li>
  </ol>
  <p>
    Each request brings two or three matched tutors, fees visible before the demo, and a free switch later on. No profile carries the Verified badge until the tutor has passed our <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gic-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. A CISCE student's fee
    moves with the class, how many papers need help, how close the exam is and how far the tutor rides. Budgeting help
    is in the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">home tuition fees in Guwahati</a>.
  </p>
  <p>
    Start by sending the exam (ICSE or ISC), class, subjects, locality with a landmark, and the evenings that suit you.
    Whichever shortlisted tutor you choose, the opening class is a <a href="{{ url('/demo-class') }}">free demo</a>. Read the <a href="{{ url('/blog/guwahati-tuition-guide') }}">Guwahati
    tuition guide</a>, browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or find
    <a href="{{ url('/tuition-jobs/guwahati') }}">tuition jobs in Guwahati</a>.
  </p>
  </section>

  </div>
</article>
