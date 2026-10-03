{{--
  Board page for "CBSE home tutor Guwahati". Authors: Abhinandan Tiwary
  (role: Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and
  ICSE science). No anecdotes, years or results are claimed. No schools,
  coaching institutes or people are named.

  Board facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states
  them, which cites cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20; 33% pass; about half
  competency-focused; Class IX common 80-mark paper + optional Advanced 25
  marks / 1 hour, outside aggregate, 50%+ noted; Basic/Standard ending except
  the 2026-27 Class X batch; R3 internal); Notification 14.02.2026 (two Class X
  board exams; first compulsory; improve up to three of science, maths,
  social science, languages); Curriculum 2026-27 Senior Secondary
  (042/043/044 at 70 + 30; 041 or 241 one only, 055, 030, 054 at 80 + 20).
  Assam's state board described generally only, as on the /city/guwahati hub
  (SEBA and AHSEC historically, since combined under a single state board;
  "three systems"; no shares). Local detail only from guwahati-research.json,
  guwahati-zone-guides.json, zones/guwahati.json and the hub. Fee wording is
  the approved sentence. Area links render only for active Guwahati areas.
--}}
@php
  $gcbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gcbA = function (string $slug, string $label) use ($gcbSlugs) {
      return in_array($slug, $gcbSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="gcbGuideTitle">
  <h2 id="gcbGuideTitle">CBSE home tutors in Guwahati: NCERT depth along a long, narrow city</h2>

  <p class="nx-guide__lede">
    Guwahati stretches from the old bazaars by the Brahmaputra down GS Road to Khanapara, and west to Maligaon and
    Jalukbari, with no metro yet. For a CBSE family that means two searches in one: a tutor who knows what the board now
    rewards, and one who can reach your stretch of the city on the evenings you have free. This page covers both. It
    explains how CBSE differs from Assam's state board, what each CBSE stage asks for, the 2026-27 changes in Classes 9
    and 10, which subjects Guwahati parents ask about, how tutors travel to each zone, and what to check at the free
    demo. Abhinandan Tiwary contributes on Class 10 maths and Aaditya Kashyap on science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gcb-boards">CBSE and the state board</a> ·
    <a href="#gcb-steps">CBSE step by step</a> ·
    <a href="#gcb-secondary">Classes 9 and 10</a> ·
    <a href="#gcb-senior">Classes 11 and 12</a> ·
    <a href="#gcb-practice">How to practise</a> ·
    <a href="#gcb-move">Changing board</a> ·
    <a href="#gcb-middle">Before Class 9</a> ·
    <a href="#gcb-coaching">With coaching</a> ·
    <a href="#gcb-subjects">Subjects</a> ·
    <a href="#gcb-zones">Zone by zone</a> ·
    <a href="#gcb-mode">Home or online</a> ·
    <a href="#gcb-demo">The demo</a> ·
    <a href="#gcb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gcb-boards">CBSE beside Assam's state board and CISCE</h2>
  <p>
    Our <a href="{{ url('/city/guwahati') }}">Guwahati tutors page</a> describes families spread across three systems:
    the state board, CBSE, and CISCE's ICSE and ISC. We do not have a reliable split and do not invent one. For years
    the state's Class 10 exam was run by SEBA and the higher secondary course by AHSEC; the state has since brought
    the two under a single board, so notices may carry the new name. In general terms, a state-board student works from
    the board's prescribed textbooks in the school's medium of instruction. A CBSE student works from NCERT, and the
    board publishes sample papers and marking schemes in advance. The overlap in maths and science content is large; the
    question style, marking and sometimes the language of teaching are not, so say which board in your request.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-steps">CBSE step by step, Class 6 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The CBSE route and the tutor's focus at each step</caption>
    <thead>
      <tr><th scope="col">Step</th><th scope="col">Assessment</th><th scope="col">Where children slip</th><th scope="col">Focus for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6–8</td><td>School exams</td><td>Fractions, integers, the first algebra</td><td>Basics, and writing out the working</td></tr>
      <tr><td>Class 9</td><td>School exam (80) plus internal (20)</td><td>Two heavier subjects arrive together</td><td>Chapter tests; the Advanced decision</td></tr>
      <tr><td>Class 10</td><td>Board paper (80) plus school marks (20), 33% to pass</td><td>Competency questions; presentation</td><td>Current sample papers and marking schemes</td></tr>
      <tr><td>Class 11</td><td>School exams</td><td>Senior physics, chemistry, maths or accountancy</td><td>Laying the base for the board year</td></tr>
      <tr><td>Class 12</td><td>Board theory plus practical or internal work</td><td>A full-syllabus paper plus practical files</td><td>Revision cycles and practical deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-secondary">Classes 9 and 10 after the 2026-27 changes</h2>
  <p>
    <strong>A common paper and an optional stretch.</strong> Class 9 maths and science now have one 80-mark paper that
    everybody writes. In addition, a student may choose an Advanced paper in maths, science, both or neither; each is an
    hour long, worth 25 marks, and made only of higher-order questions on additional content. CBSE leaves Advanced marks
    out of the aggregate and notes a score of 50% or more on the marksheet. The Basic and Standard maths papers are on
    their way out, except for the 2026-27 Class 10 batch.
  </p>
  <p>
    <strong>Two chances at Class 10.</strong> The first board exam is compulsory. A student who passes can use the
    second to improve up to three subjects from science, maths, social science and languages. Plan for the first.
  </p>
  <p>
    <strong>Half the paper is about application.</strong> About 50% of a secondary paper is competency-focused: case,
    source, data, situation and application questions. A third language is also compulsory in the transition years,
    marked in school with no board exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-senior">Classes 11 and 12: the marks behind each subject</h2>
  <p>
    Physics, Chemistry and Biology each split 70 for theory and 30 for practical work. Mathematics or Applied
    Mathematics (one only), Accountancy, Economics and Business Studies split 80 and 20. The Class 12 paper covers the
    whole Class 12 syllabus, and CBSE says senior papers will bring in more real-life application. Each year's sample
    paper fixes the detail, so ask the tutor which one they are using. The
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> help in the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-practice">How a CBSE student should practise</h2>
  <p>
    The hub's advice is to work outwards from the NCERT chapter, practise with the board's own sample papers and marking
    schemes, and insist every step is written down. Week to week, that becomes a simple routine. Check the school
    notebook first. Teach or repair one chapter, from the NCERT text to exemplar problems to an unseen competency
    question. Then write two board-style answers in full and mark them against the scheme, including units, labelled
    diagrams and layout. A one-page monthly record of chapters, test marks and recurring mistakes tells you whether the
    hours are paying off.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-move">Moving between the state board and CBSE</h2>
  <p>
    Some Guwahati children change board at Class 9 or Class 11, and the move is harder than the syllabus suggests. A
    student coming to CBSE from a state-board school may have studied in a different medium, so NCERT's English
    vocabulary in science and maths becomes the first hurdle, before any new topic. The tutor should spend the opening
    weeks reading NCERT chapters aloud with the student, building a word list, and practising CBSE's case-based
    questions slowly. A student going the other way needs the state board's prescribed books, its latest notices and
    practice in its question style, ideally from a tutor who can teach in the school's medium. Tell us about any move
    when you send the request.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-middle">The quiet years before Class 9</h2>
  <p>
    Classes 6 to 8 carry no board exams, which is exactly why they are worth attention. The hub's advice for these
    years is sound habits: reading with understanding, quick mental arithmetic, fractions and early algebra, and neat,
    complete written work. A patient tutor once or twice a week achieves more at this age than daily tuition, and
    spares the child a difficult first term in Class 9.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-coaching">CBSE work around evening coaching</h2>
  <p>
    Many Guwahati students in Classes 11 and 12 attend entrance coaching in the evenings. Our Chandmari zone guide's
    first tip is simple: agree a weekday tuition slot that does not clash with the coaching batch, and keep it the same
    each week. Inside that slot, a CBSE tutor should do what coaching does not: written board answers, the practical
    record, internal work and NCERT chapters the batch moved through quickly. If entrance help is needed too, see
    <a href="{{ url('/jee-home-tutor-guwahati') }}">JEE home tutors in Guwahati</a> and
    <a href="{{ url('/neet-home-tutor-guwahati') }}">NEET home tutors in Guwahati</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-subjects">Subjects Guwahati parents ask for</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-guwahati') }}">Maths home tutors in Guwahati</a>, and <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12</a> maths.</li>
    <li><a href="{{ url('/science-home-tutor-guwahati') }}">Science tutors in Guwahati</a> for Classes 6 to 10, with <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a>.</li>
    <li><a href="{{ url('/physics-home-tutor-guwahati') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-guwahati') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-guwahati') }}">biology</a> tutors for Classes 11 and 12.</li>
    <li><a href="{{ url('/english-home-tutor-guwahati') }}">English tutors in Guwahati</a>.</li>
  </ul>
  <p>
    Maths and science dominate up to Class 10; after that, the stream subjects. Our
    <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE board hub</a> explains how the board works in more depth, and
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> is a good next read.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-zones">How tutors reach each part of Guwahati</h2>
  <ul>
    <li><strong><a href="{{ url('/city/guwahati/zone/old-city-riverfront') }}">Old City and Riverfront</a>:</strong> many homes in {!! $gcbA('pan-bazar', 'Pan Bazar') !!} sit above or behind shopfronts, so give the floor and a lane landmark. Tutors from across the city can come by train or bus, so ask for a subject specialist.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/chandmari-zoo-road') }}">Chandmari and Zoo Road</a>:</strong> in {!! $gcbA('chandmari', 'Chandmari') !!}'s narrower lanes, tell the tutor where to park.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/gs-road-dispur') }}">GS Road and Dispur</a>:</strong> near {!! $gcbA('dispur', 'Dispur') !!}, avoid office hours at the capital complex; a home a short walk off GS Road near {!! $gcbA('ganeshguri', 'Ganeshguri') !!} is easy for a tutor coming by bus.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/beltola-khanapara') }}">Beltola and Khanapara</a>:</strong> keep sessions in {!! $gcbA('beltola', 'Beltola') !!} away from market days at the bazaar.</li>
    <li><strong><a href="{{ url('/city/guwahati/zone/maligaon-jalukbari-north-guwahati') }}">Maligaon and Jalukbari</a>:</strong> tell the tutor whether Kamakhya Junction or a city bus is easier for {!! $gcbA('maligaon', 'Maligaon') !!}, and plan around Durga Puja there.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-mode">Home or online for CBSE in Guwahati?</h2>
  <p>
    With every home visit made by road, a tutor from your own zone is easiest to keep for a full year, and home lessons
    suit maths and numerical science well. Homes close to GS Road can draw on tutors all along it. Online is the answer
    for a north-bank home without a local specialist, for a senior subject whose tutor lives at the far end of the
    city, and for festival and event evenings, Bihu at the Chandmari playground or stadium days in Ulubari, when nearby
    roads slow. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> lays out
    the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-demo">At the demo, ask a CBSE tutor</h2>
  <ol>
    <li>Which year's sample paper and marking scheme they are teaching from.</li>
    <li>To walk your child through a case-based question neither has seen.</li>
    <li>How a CBSE answer differs from a state-board answer, if they teach both.</li>
    <li>How they will help with internal marks and the practical file, without doing them.</li>
    <li>Which weekday slot they can hold all year around coaching and traffic.</li>
  </ol>
  <p>
    Every request brings two or three matched tutors, fees visible before the demo, and a free switch later. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gcb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Guwahati, the class,
    subjects, sessions a week and the length of the tutor's ride decide the fee; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">home
    tuition fees in Guwahati</a>.
  </p>
  <p>
    Share the class, subjects, locality with a tiniali or lane landmark, and free slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. The <a href="{{ url('/blog/guwahati-tuition-guide') }}">Guwahati
    tuition guide</a> has more local detail. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or see
    <a href="{{ url('/tuition-jobs/guwahati') }}">tuition jobs in Guwahati</a> if you teach.
  </p>
  </section>

  </div>
</article>
