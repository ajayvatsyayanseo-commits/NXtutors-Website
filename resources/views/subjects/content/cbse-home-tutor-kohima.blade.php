{{--
  Board page for "CBSE home tutor Kohima". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, coaching
  institutes or people are named.

  CBSE facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states
  them, which cites cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20 in major subjects, 33% pass, about
  half competency-focused questions, Class IX common paper + optional
  Advanced 25 marks / 1 hour, not in aggregate, 50%+ noted; Basic/Standard
  discontinued except the 2026-27 Class X batch); Notification 14.02.2026 on
  two Class X board exams (first compulsory, improve up to three of science,
  maths, social science, languages); Curriculum 2026-27 Senior Secondary
  (Physics 042, Chemistry 043, Biology 044 at 70 + 30; Mathematics 041 /
  Applied Mathematics 241, one only; Accountancy 055, Economics 030, Business
  Studies 054 at 80 + 20).
  NBSE facts only from nbsenl.edu.in (read 3 Oct 2026): HSLC and HSSLC;
  textbook lists naming NCERT Mathematics and NCERT Science for IX-X and NCERT
  physics, chemistry, biology and mathematics for XI-XII
  (cms/document/49/syllabi, cms/document/41/syllabi); HSLC 2026 social
  sciences blueprint includes a chapter "Nagaland" worth 10 marks
  (cms/document/50/syllabi); 2026 calendars: classes from January, HSLC and
  HSSLC in February, Class XI promotion examination in February
  (cms/document/14/calendars, 15/calendars).
  Local facts only from database/seo-content/areas/kohima-research.json.
  Purely practical and educational; weather only as timing advice. Only the
  allowed fee sentence.

  Area links render only when that Kohima area page exists and is active.
--}}
@php
  $kmbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kmbA = function (string $slug, string $label) use ($kmbSlugs) {
      return in_array($slug, $kmbSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kmb-guide" aria-labelledby="kmbGuideTitle">
  <h2 id="kmbGuideTitle">CBSE home tutors in Kohima: NCERT at every level, the new Class 10 rules, and a state board next door on a different calendar</h2>

  <p class="nx-guide__lede">
    The CBSE syllabus a Kohima child studies is the national one: NCERT textbooks throughout, with board examinations
    at the end of Class 10 and Class 12. The local picture is what makes tuition planning particular. The Nagaland
    Board of School Education uses many of the same NCERT books but runs its school year from January to February;
    some families switch between the two boards; and in a hill city a tutor's route has to be worked out before the
    first visit. Below you will find the CBSE priorities class by class, the 2026-27 changes for Classes 9 and 10, the
    theory and internal split in the senior years, a side-by-side look at CBSE and NBSE, and notes on five Kohima
    wards. The maths guidance carries Abhinandan Tiwary's byline and the science guidance Aaditya Kashyap's.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kmb-stages">Class by class</a> ·
    <a href="#kmb-910">Classes 9 and 10 now</a> ·
    <a href="#kmb-1112">Senior marks</a> ·
    <a href="#kmb-comp">Case-based questions</a> ·
    <a href="#kmb-nbse">CBSE and NBSE</a> ·
    <a href="#kmb-week">A sample week</a> ·
    <a href="#kmb-mode">At home or on screen</a> ·
    <a href="#kmb-subjects">Next pages</a> ·
    <a href="#kmb-wards">Wards</a> ·
    <a href="#kmb-demo">Demo questions</a> ·
    <a href="#kmb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kmb-stages">What should a CBSE tutor concentrate on in each class?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>From Class 6 to Class 12 on CBSE: the stage, what is at stake, and the tutor's priority</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What is at stake</th><th scope="col">Tutor's priority</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>School tests on the NCERT books, no board paper yet</td><td>Closing gaps in fractions, ratio, early algebra and science vocabulary while they are small</td></tr>
      <tr><td>Class 9</td><td>A common maths paper and a common science paper; an Advanced paper is optional</td><td>A frank view on whether the Advanced paper is worth your child's time</td></tr>
      <tr><td>Class 10</td><td>A compulsory first board examination and an optional second one</td><td>Everything aimed at the first sitting, with a clear rule for using the second</td></tr>
      <tr><td>Class 11</td><td>School examinations only</td><td>Treating new stream subjects seriously from week one, because Class 12 builds on them</td></tr>
      <tr><td>Class 12</td><td>A board paper on the whole year's syllabus, plus practical or internal marks</td><td>Timed papers, a complete record book, and entrance work where the student needs it</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-910">How do Classes 9 and 10 work from 2026-27?</h2>
  <p>
    In each main subject the school keeps 20 marks and the board paper carries 80; a student needs 33% to pass. Around
    half of every paper now tests competencies through cases, data and real situations instead of plain recall.
  </p>
  <p>
    Class 9 has a single common paper each for maths and science. Students who want a stretch can add an Advanced
    paper in either subject, lasting an hour and worth 25 marks, made up of harder questions on additional content.
    That paper stays outside the aggregate, though 50% or above is noted on the marksheet. In Class 10, the old split
    between Basic and Standard maths ends with the 2026-27 batch.
  </p>
  <p>
    Class 10 students now have two chances at the board. Sitting the first is compulsory; after passing, a student may
    sit the second in no more than three subjects drawn from science, maths, social science and the languages, to
    raise the score. Plan the year around the first, and use the second only to fix a specific weak result. Chapter
    help is in our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation guide</a>
    and <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-1112">What is the theory and internal split in Classes 11 and 12?</h2>
  <ul>
    <li><strong>Sciences:</strong> physics (042), chemistry (043) and biology (044) each have a theory paper of 70 marks, and practical work supplies the remaining 30.</li>
    <li><strong>Mathematics:</strong> students take either Mathematics (041) or Applied Mathematics (241), never both; the paper is worth 80 and internal assessment 20.</li>
    <li><strong>Commerce:</strong> accountancy (055), economics (030) and business studies (054) follow the same 80 and 20 pattern.</li>
  </ul>
  <p>
    Class 12 is examined on that year's complete syllabus, and each subject's paper design comes with the current
    sample paper, which is what a tutor should be practising from. Useful reading:
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">physics strategies for Class 12</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry</a>
    and <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-comp">How do you prepare a student for case-based questions?</h2>
  <p>
    If close to half of a secondary paper comes as cases and data, exercise drilling alone will not be enough. Such
    questions are partly a reading test. Students who handle them well tend to do four things:
  </p>
  <ol>
    <li><strong>Underline the data and the demand</strong> before reaching for any formula.</li>
    <li><strong>Name the chapter behind the story,</strong> whether that is similar triangles, Ohm's law or a balanced equation.</li>
    <li><strong>Treat each sub-part separately,</strong> so an early slip does not cost the later parts.</li>
    <li><strong>Write a line of reasoning</strong> with every answer, since the method carries marks.</li>
  </ol>
  <p>
    In the demo, ask the tutor to pick one case question and teach it to your child; it shows at once whether the
    teaching matches the current paper. For maths, that is Abhinandan Tiwary's area at Class 10; for physics,
    chemistry and biology, Aaditya Kashyap's.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-nbse">CBSE beside the Nagaland board: what changes for a tutor?</h2>
  <p>
    Some Kohima families move between CBSE and the Nagaland Board of School Education, and some tutors teach both.
    The overlap is larger than parents might assume, because the state board's own textbook lists name NCERT books for maths
    and science in Classes 9 and 10 and for the main science subjects in Classes 11 and 12. The differences lie in the
    paper and the calendar:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Points to check when a Kohima student moves between CBSE and NBSE</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">CBSE</th><th scope="col">NBSE (from nbsenl.edu.in)</th></tr>
    </thead>
    <tbody>
      <tr><td>Maths and science books</td><td>NCERT</td><td>NCERT, per the board's textbook lists</td></tr>
      <tr><td>Board examinations</td><td>Class 10 and Class 12</td><td>HSLC at Class 10 and HSSLC at Class 12; Class 11 ends with a promotion examination</td></tr>
      <tr><td>Paper design</td><td>Sample papers each session, about half competency-based</td><td>A blueprint for each subject each year</td></tr>
      <tr><td>School year</td><td>CBSE's own schedule, with dates on cbse.gov.in</td><td>In 2026, classes from January and the HSLC and HSSLC in February</td></tr>
      <tr><td>Social science</td><td>The CBSE syllabus</td><td>The HSLC 2026 blueprint includes a chapter on Nagaland worth 10 marks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student moving to CBSE should spend the first weeks on case-based questions and sample papers; one moving the
    other way needs the board's blueprint and question bank early, and a revised sense of when the examinations fall.
    The <a href="{{ url('/nagaland-board-tutor-kohima') }}">Nagaland Board tutor in Kohima</a> page explains the state
    board in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-week">What does a sensible CBSE week look like in Kohima?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sample week for a CBSE Class 10 student in Kohima</caption>
    <thead>
      <tr><th scope="col">Part of the week</th><th scope="col">Drier months</th><th scope="col">June to September</th></tr>
    </thead>
    <tbody>
      <tr><td>Maths</td><td>Two home sessions after school</td><td>One home session and one online, same tutor</td></tr>
      <tr><td>Science</td><td>One home session and a short online check</td><td>Two online sessions; diagrams and numericals shown on camera</td></tr>
      <tr><td>Practice</td><td>One case-based set at the weekend</td><td>One case-based set, photographed and marked before the next lesson</td></tr>
      <tr><td>Heavy-rain evenings</td><td>Rarely needed</td><td>The visit moves online at the same hour rather than being cancelled</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-mode">Should CBSE lessons happen at home or on screen?</h2>
  <p>
    Class 10 maths and the younger classes gain most from a tutor sitting beside the student and watching each line
    being written. Science explanations, chapter tests and doubt-clearing translate well to a screen, and for a single
    senior subject the right specialist may simply not live nearby. Our
    <a href="{{ url('/online-tutor-kohima') }}">online tutors for Kohima</a> page covers how to set lessons up, and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-subjects">Which Kohima subject page should you read next?</h2>
  <ul>
    <li>Maths, Classes 6 to 12: <a href="{{ url('/maths-home-tutor-kohima') }}">maths home tutor in Kohima</a>.</li>
    <li>Science, Classes 6 to 10: <a href="{{ url('/science-home-tutor-kohima') }}">science home tutor in Kohima</a>.</li>
    <li>Senior sciences: <a href="{{ url('/physics-home-tutor-kohima') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-kohima') }}">chemistry</a> for Classes 11 and 12.</li>
    <li>Language: <a href="{{ url('/english-home-tutor-kohima') }}">English home tutor in Kohima</a>.</li>
    <li>Entrance preparation: the national <a href="{{ url('/jee-home-tutor') }}">JEE</a> and <a href="{{ url('/neet-home-tutor') }}">NEET</a> pages.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-wards">How do CBSE tutors reach five Kohima wards?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Practical notes for weekly visits in five wards</caption>
    <thead>
      <tr><th scope="col">Ward</th><th scope="col">What helps the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kmbA('bayavu-hill', 'Bayavü Hill') !!}</td><td>Say Upper or Lower Bayavü Hill; lanes climb between the two, and the state board's office sits at the upper level, so working-day visitors are common</td></tr>
      <tr><td>{!! $kmbA('daklane', 'Daklane') !!}</td><td>Central and easy to reach from most of the city; start after the busy hours around the central market</td></tr>
      <tr><td>{!! $kmbA('new-market', 'New Market') !!}</td><td>An address every taxi knows; mention any space to park a scooter on the busy central roads</td></tr>
      <tr><td>{!! $kmbA('pr-hill', 'PR Hill') !!}</td><td>P.R. Hill or Lower P.R. Hill; give the level of the slope; tutors from Officers' Hill or Upper Chandmari are close</td></tr>
      <tr><td>{!! $kmbA('merhulietsa', 'Merhülietsa') !!}</td><td>On the western edge next to Agri Farm; share the nearest road point, as hillside paths can be steep</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zones: <a href="{{ url('/city/kohima/zone/north-kohima-kohima-village') }}">North Kohima and Kohima Village</a>,
    <a href="{{ url('/city/kohima/zone/main-town-midland') }}">Main Town and Midland</a>,
    <a href="{{ url('/city/kohima/zone/chandmari-pr-hill') }}">Chandmari and PR Hill</a> and
    <a href="{{ url('/city/kohima/zone/lerie-agri-farm') }}">Lerie and Agri Farm</a>. The
    <a href="{{ url('/city/kohima') }}">Kohima home tutors page</a> lists every area.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-demo">What should you ask a CBSE tutor at the free demo?</h2>
  <ol>
    <li>Is the Class 9 Advanced paper sensible for my child, and why?</li>
    <li>How will the year be planned around the first Class 10 board sitting, and in which case would you use the second?</li>
    <li>Would you take one case-based question and teach it to my child now?</li>
    <li>Which sample paper is your practice based on this session?</li>
    <li>If heavy rain makes the trip slow, do we switch to an online lesson at the same hour?</li>
  </ol>
  <p>
    Two or three tutors come with their fees visible in advance, the first lesson costs nothing, and you can change
    tutor later at no charge. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for demo
    classes</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmb-fees">What will it cost, and how do you begin?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor decides a rate, shown to you ahead of any booking; read the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our <a href="{{ url('/blog/home-tuition-fees-kohima') }}">Kohima home tuition fees</a> article for the
    questions worth asking.
  </p>
  <p>
    Tell us the class, the subjects, the ward and a landmark, and the times that work, then request a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Every tutor who joins passes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and <a href="{{ url('/tutors') }}">profiles</a> are open to
    browse. Teachers looking for students can open <a href="{{ url('/tuition-jobs/kohima') }}">Kohima tuition jobs</a>,
    and the <a href="{{ url('/blog/kohima-home-tuition-guide') }}">Kohima home tuition guide</a> covers each zone.
  </p>
  </section>

  </div>
</article>
