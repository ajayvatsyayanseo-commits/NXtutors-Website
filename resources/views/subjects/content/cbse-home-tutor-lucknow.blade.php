{{--
  Board hub for "CBSE home tutor Lucknow". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed for either. No schools
  are named.

  Board facts restate only what cbse-home-tutor-gurgaon states, which cites
  cbseacademic.nic.in and cbse.gov.in (read 1 Oct 2026): Curriculum 2026-27
  Secondary (80 + 20 in major subjects; 33% pass mark; about half the
  secondary board questions competency-focused; sample papers and marking
  schemes on cbseacademic.nic.in; common 80-mark maths and science paper with
  optional 25-mark, one-hour Advanced papers from 2026-27, outside the
  aggregate; R3 assessed internally), notification 14.02.2026 (two Class X
  board exams; second exam improves up to three subjects; a student who
  missed three or more subjects in the first cannot sit the second),
  Curriculum 2026-27 Senior Secondary (sciences 70 + 30; maths or applied
  maths 80 + 20; commerce subjects 80 + 20; Class XII board covers the whole
  syllabus). No exam dates.

  Local detail only from the city hub (resources/views/city/content/
  lucknow.blade.php: CBSE widely followed; CISCE strong and long-standing; a
  smaller IB/IGCSE group; UP Board/UPMSP High School and Intermediate, NCERT-
  based syllabus with the board's own paper, Hindi or English medium; Red
  Line; Blue Line under construction), database/seo-content/zones/
  lucknow.json and areas/lucknow-research.json / -zone-guides.json. No share
  of CBSE schools is claimed. Fee wording is the approved sentence. FAQs
  render from faqs/cbse-home-tutor-lucknow.php. Area links render only when
  that Lucknow area page exists and is active.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cbl-guide" aria-labelledby="cblGuideTitle">
  <h2 id="cblGuideTitle">CBSE home tutors in Lucknow: board, medium and the 2026-27 papers, Class 6 to 12</h2>

  <p class="nx-guide__lede">
    Lucknow's school system is more mixed than most. CBSE is widely followed, CISCE has a strong and long-standing
    presence, many families are on the UP Board, and a smaller group takes the IB or Cambridge. For a CBSE family that
    mix has one practical effect: a tutor may well teach more than one board, so it is worth checking that yours
    teaches to CBSE's current papers rather than a blend. This page covers how CBSE assesses each stage, the 2026-27
    changes in Classes 9 and 10, how CBSE compares with the UP Board, which subjects Lucknow parents most often want
    help with, and how tutors reach each of the city's five zones. Abhinandan Tiwary writes on Class 10 CBSE and ICSE
    maths and Aaditya Kashyap on CBSE and ICSE science. For the board explained in full, see
    <a href="{{ url('/cbse-home-tutor-gurgaon') }}">how CBSE works</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbl-mix">CBSE in Lucknow</a> ·
    <a href="#cbl-up">CBSE and UP Board</a> ·
    <a href="#cbl-stage">Stage by stage</a> ·
    <a href="#cbl-910">Classes 9 and 10</a> ·
    <a href="#cbl-1112">Classes 11 and 12</a> ·
    <a href="#cbl-switch">From UP Board</a> ·
    <a href="#cbl-hour">A good session</a> ·
    <a href="#cbl-subj">Subjects</a> ·
    <a href="#cbl-zones">Five zones</a> ·
    <a href="#cbl-mode">Home or online</a> ·
    <a href="#cbl-demo">Demo</a> ·
    <a href="#cbl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbl-mix">Where CBSE sits in Lucknow</h2>
  <p>
    The <a href="{{ url('/city/lucknow') }}">Lucknow tutors page</a> describes CBSE as widely followed in the city, next
    to a strong CISCE presence, many UP Board families and a smaller international group. We do not publish
    percentages for any board; we have no count we would trust. What the mix means for you is that the tutor's board
    and medium matter as much as the subject, and a request should always say "CBSE" and the class in the first line.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-up">CBSE and the UP Board, compared in general terms</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Two boards a Lucknow tutor may teach, side by side</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">CBSE</th><th scope="col">UP Board (UPMSP)</th></tr>
    </thead>
    <tbody>
      <tr><td>Board exams</td><td>Class 10 and Class 12</td><td>High School (Class 10) and Intermediate (Class 12)</td></tr>
      <tr><td>Syllabus</td><td>NCERT textbooks</td><td>Much of it follows NCERT</td></tr>
      <tr><td>Question paper</td><td>CBSE's own, with sample papers and marking schemes published in advance</td><td>The board's own paper and pattern</td></tr>
      <tr><td>Medium</td><td>Set by the school; tell us which</td><td>Hindi or English, by school</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The overlap in syllabus can mislead. A tutor used to UP Board papers may teach the same chapter well and still
    prepare your child for the wrong style of question. For CBSE, the competency-based items are the dividing line,
    so ask the tutor to show you a recent CBSE sample paper in the first week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-stage">What a CBSE tutor should do at each stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12 for Lucknow families</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">What is examined, and by whom</th><th scope="col">Tutor's job</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School tests and projects</td><td>Number sense, early algebra, reading science text, neat notebooks</td></tr>
      <tr><td>9</td><td>School annual exam on the common paper; optional Advanced maths or science</td><td>Secure NCERT; begin case-based practice; advise on Advanced</td></tr>
      <tr><td>10</td><td>CBSE board paper plus school internal marks; optional second exam</td><td>Sample papers, presentation, a plan across all subjects</td></tr>
      <tr><td>11</td><td>School exams in the stream</td><td>Fill the gap from Class 10; build derivation and numerical habits</td></tr>
      <tr><td>12</td><td>CBSE board theory plus practical or internal marks</td><td>Whole-syllabus revision, full papers, practical record</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-910">Classes 9 and 10: the changes to plan around</h2>
  <p>
    <strong>Class 9 maths and science.</strong> From 2026-27 everyone sits a common paper of 80 marks, three hours
    long. In addition a student may choose an Advanced paper in maths, in science, in both or in neither. Each is a
    one-hour, 25-mark paper of higher-order questions on extra content. Advanced marks do not enter the aggregate;
    a score of 50% or more is recorded on the marksheet. The Standard and Basic maths split is being withdrawn, with
    the 2026-27 Class 10 batch finishing under the old scheme.
  </p>
  <p>
    <strong>Class 10 board exams.</strong> In major subjects the result combines an 80-mark board paper with 20 marks
    of school internal assessment, and 33% is needed to pass a subject. The first board exam is compulsory. A student
    who passes may sit a second exam to improve up to three subjects among science, maths, social science and
    languages; a student who missed three or more subjects in the first exam cannot take the second.
  </p>
  <p>
    <strong>A third language.</strong> Compulsory in the transition batches and assessed in school, with no board
    paper, but needed for the certificate.
  </p>
  <p>
    About half of each secondary board paper is competency-focused: case-based, source-based, data and application
    questions. Practising only textbook exercises leaves marks on the table. The
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">science notes</a> posts help between sessions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-1112">Classes 11 and 12: marks per subject</h2>
  <p>
    In the senior curriculum, physics, chemistry and biology each carry 70 theory marks and 30 practical marks.
    Mathematics and Applied Mathematics, of which a student chooses one, carry 80 and 20, as do accountancy, economics
    and business studies. The Class 12 board paper covers the whole Class 12 syllabus, and CBSE says senior papers
    will include more questions set in real-life situations. A tutor should work from the current year's sample
    paper, because the detailed design is notified with it. The practical share in the sciences is easy marks only if
    the record and viva are prepared through the year, not in the last fortnight.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-switch">Moving from the UP Board to CBSE</h2>
  <p>
    Some Lucknow families move a child from a UP Board school to a CBSE school, for example at a natural break such as
    Class 9 or Class 11. Because much of the UP Board syllabus follows NCERT, the chapters will look familiar. Three
    things usually need work. The first is the question style: CBSE's case-based and source-based items, which ask a
    student to apply an idea to an unfamiliar passage or table. The second is presentation against the marking
    scheme, where each step and unit is a mark. The third, for a child who studied in Hindi medium, is subject
    vocabulary in English, which a tutor can build by teaching key terms in both languages for the first few weeks.
    Ask for a tutor who has taught both boards, and expect the gap to close within a term with steady work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-hour">What a good CBSE session contains</h2>
  <p>
    A productive hour usually has three parts. It opens with the school week: which NCERT exercises were set, which
    were skipped, and which question went wrong. The middle teaches or repairs one chapter, moving from the NCERT text
    to exemplar and competency-style questions on the same idea. The close is written practice, two or three
    board-style answers checked against the marking scheme for steps, units, labelled diagrams and, in accountancy,
    formats. Once a month, ask to see the tutor's record of chapters, test scores and recurring errors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-subj">Subjects Lucknow families ask for</h2>
  <p>
    Up to Class 10 most requests are maths and science. In Classes 11 and 12 science students ask for physics, maths
    and chemistry, commerce students for accountancy and economics. English writing and literature come up at every
    level. Our Lucknow pages:
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-lucknow') }}">Maths home tutors in Lucknow</a> and <a href="{{ url('/science-home-tutor-lucknow') }}">science home tutors</a></li>
    <li><a href="{{ url('/physics-home-tutor-lucknow') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-lucknow') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-lucknow') }}">biology</a> for the senior classes</li>
    <li><a href="{{ url('/english-home-tutor-lucknow') }}">English home tutors in Lucknow</a></li>
    <li>Alongside coaching: <a href="{{ url('/jee-home-tutor-lucknow') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-lucknow') }}">NEET</a> home tutors</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-zones">How CBSE tutors reach Lucknow's five zones</h2>
  <ul>
    <li><strong><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a>.</strong> The Red Line runs through {!! $lkA('indira-nagar', 'Indira Nagar') !!}, so tutors from Hazratganj or Charbagh can ride in; give the sector and block letter.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a>.</strong> {!! $lkA('aliganj', 'Aliganj') !!} is closest to Badshahnagar station; for {!! $lkA('vikas-nagar', 'Vikas Nagar') !!}, a tutor living north of the Gomti is easier to keep than one crossing the Ring Road every evening.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a>.</strong> In the lanes of {!! $lkA('chowk', 'Chowk') !!}, a tutor on a two-wheeler copes most easily; the Blue Line is still under construction. Send the floor and a landmark near the entrance.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a>.</strong> Red Line stations along Kanpur Road widen the pool for {!! $lkA('alambagh', 'Alambagh') !!}; set the lesson clear of the office peak.</li>
    <li><strong><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a>.</strong> No metro; {!! $lkA('vrindavan-yojana', 'Vrindavan Yojana') !!} depends on tutors from the same belt, and Raebareli Road is slow at school times.</li>
  </ul>
  <p>
    Local reading: <a href="{{ url('/blog/gomti-nagar-and-trans-gomti-tuition-guide') }}">Gomti Nagar and Trans-Gomti
    guide</a> and <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south Lucknow
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-mode">Home or online for a CBSE student in Lucknow</h2>
  <p>
    A tutor at the table pays off for younger students and for anything where written working earns the marks, which
    covers most of CBSE maths and science. The Red Line from Munshi Pulia through Hazratganj and Charbagh to Amausi
    links many homes to tutors living near another station. Off the line, in Gomti Nagar Extension, Chinhat,
    Jankipuram or the Shaheed Path townships, home lessons depend on tutors who live close. For a Class 12 specialist
    across the city, one home lesson plus a short online session for doubts is a common pattern. See our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online comparison</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-demo">What to check in the free CBSE demo</h2>
  <ol>
    <li><strong>Board certainty.</strong> Does the tutor teach CBSE now, and from which sample paper?</li>
    <li><strong>Competency practice.</strong> Ask them to take your child through an unseen case-based question.</li>
    <li><strong>Marking-scheme habits.</strong> Do they correct steps, units and diagrams, not only answers?</li>
    <li><strong>Internal and practical marks.</strong> How will they support these without doing the work?</li>
    <li><strong>A record.</strong> Will they keep a short log of chapters, scores and repeated mistakes?</li>
  </ol>
  <p>
    Each shortlist has two or three tutors, with fees shown before the demo, and switching tutor later is free. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbl-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For CBSE in Lucknow, the
    class, number of subjects, weekly sessions and the tutor's travel decide the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home
    tuition fees in Lucknow</a>.
  </p>
  <p>
    Send the class, subjects, your khand, sector or block, and free slots. The first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>; CBSE
    teachers can look at <a href="{{ url('/tuition-jobs/lucknow') }}">tuition jobs in Lucknow</a>.
  </p>
  </section>

  </div>
</article>
