{{--
  Board hub: "Chhattisgarh Board tutor Raipur" (CGBSE, Chhattisgarh Madhyamik
  Shiksha Mandal: High School Class 10 and Higher Secondary Class 12).
  Author: nxtutors (NXTutors Academic Team). Page writer, 3 Oct 2026.
  No school, college, coaching, hospital, society, developer or people names.
  No results, pass percentages, candidate or school counts, and no exam dates.

  Official sources (all cgbse.nic.in, read 3 Oct 2026; Hindi documents, most
  of them scanned, read page by page and translated by the writer):
  - https://cgbse.nic.in/about_us.aspx : board constituted after the state was
    formed, by School Education Department notification of 20-7-2001; head
    office at Pension Bada, Raipur; divisional offices at Bilaspur, Ambikapur
    (Surguja), Jagdalpur and Rajnandgaon; has held its own examinations since
    2002: High School (regular, private, vocational) and Higher Secondary
    (regular, private), plus D.El.Ed and D.P.Ed; functions include conducting
    the examinations, advising the state government on courses and textbooks,
    and recognising High School and Higher Secondary schools; merit-list
    students are honoured; the Chhattisgarh Madhyamik Shiksha Adhiniyam, 1965.
  - https://cgbse.nic.in/ (home page): results 2026 for the main examination and
    the "second main / avsar" examination, re-totalling and re-evaluation;
    admit cards; permanent merit lists; a notice titled "20 percentile cut-off
    marks 2024, 2025, 2026 (JEE)"; notices on the 2026 second main examination.
  - https://cgbse.nic.in/academic.aspx : revised syllabus and blueprints for
    session 2026-27 by subject for Classes 9-12; model question papers
    (https://cgbse.nic.in/parakh.aspx); question bank for Classes 9-12; the
    teaching and examination plan (adhyapan yojana).
  - https://cgbse.nic.in/Documents/2026/adhyapan_yojana_2026_27.pdf :
    Classes 9-10: Hindi (070), English (080), Sanskrit or another language
    (090 etc.), Maths (100), Science (200), Social Science (300), each 75
    theory + 25 practical/project, pass 25 theory and 8 practical/project; a
    vocational subject may replace one language; textbooks printed by the
    state's textbook corporation in Raipur (English "Flight"); project marks in
    languages, maths and social science: 20 for the project record plus a
    questionnaire on one project, 5 for a viva; three projects recorded, one
    environment project in every subject. Higher Secondary: two of three
    languages, one of them Hindi or English; one faculty from arts, science,
    commerce, agriculture, fine arts and home science; environmental studies
    as an additional compulsory subject; physical and moral education at
    school level; science = Physics (201), Chemistry (202) and Biology (203)
    or Maths (204), with Biology (803) or Maths (804) as an extra subject;
    commerce = Accountancy (301), Business Studies (302) and one of Economics,
    Maths, Commercial Maths, Computer Application and others; Physics,
    Chemistry, Biology 70 + 30, pass 23 and 10; Maths, Accountancy, Business
    Studies, Economics, English 80 + 20, pass 26 and 7; Class 11 English books
    Hornbill and Snapshots.
  - https://cgbse.nic.in/Blueprint/2026/10th/100.pdf : Class 10 Maths 75 + 25
    project; algebra 20, geometry 12, trigonometry 10, coordinate geometry 8,
    mensuration 8, commercial maths (banking and taxation) 7, statistics 6,
    proof of mathematical statements 4. Paper 3 hours, 75 marks: one objective
    question of 15 one-mark parts, 5 x 2, 5 x 3, 5 x 4, 3 x 5 (19 questions);
    difficulty 30% easy, 50% average, 20% hard; knowledge 20%, understanding
    25%, application 25%, analysis, evaluation and creativity 10% each.
  - https://cgbse.nic.in/Blueprint/2026/10th/200.pdf : Class 10 Science 75 +
    25 practical, 18 chapters from 3 to 5 marks each (acids, bases and salts;
    periodic classification; electric current; life processes; metals and
    metallurgy; light; heredity; hydrocarbon derivatives and others); same
    question plan as maths.
  - https://cgbse.nic.in/Blueprint/2026/12th/201.pdf (Physics 70 + 30; 3 hours;
    15 x 1, 7 x 2, 6 x 3, 2 x 4, 3 x 5; electrostatics and current 16,
    magnetism, EMI and AC 19, optics 14), /12th/202.pdf (Chemistry 70 + 30;
    solutions and electrochemistry 16), /12th/203.pdf (Biology 70 + 30;
    genetics and evolution 20, reproduction 16), /12th/204.pdf (Maths 80 + 20
    project; 3 hours; 15 x 1, 6 x 2, 7 x 3, 3 x 4, 4 x 5; calculus 36 of 80,
    vectors and 3D 14).
  - https://cgbse.nic.in/Documents/2024/SecondExam_Gazette_Notification_edit.pdf
    (regulation 148A, gazette of 21 June 2024): Class 10 and 12 examinations
    held twice in a session (first and second main examination); only those
    registered for the first may apply, through the same institution; failed,
    absent or supplementary subjects must be taken, other subjects may be
    improved; a pass candidate may improve one or more subjects, and the
    first marks stand if there is no improvement; no change of subjects;
    practical and project marks carry over; the same grace and bonus rules;
    the second examination starts from the third week of June and the form is
    filled without waiting for re-evaluation results.
  Local detail only from database/seo-content/areas/raipur-research.json,
  raipur-zone-guides.json and the Raipur hub view. Fee wording is the approved
  sentence. FAQs render from faqs/chhattisgarh-board-tutor-raipur.php. Area
  links render only for active Raipur areas.
--}}
@php
  $rcgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rcgA = function (string $slug, string $label) use ($rcgSlugs) {
      return in_array($slug, $rcgSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="rcgGuideTitle">
  <h2 id="rcgGuideTitle">Chhattisgarh Board tutors in Raipur: High School in Class 10, Higher Secondary in Class 12</h2>

  <p class="nx-guide__lede">
    Raipur is the seat of the state board itself. The Chhattisgarh Board of Secondary Education, which most families
    call CGBSE or simply the CG Board and which signs its documents as Chhattisgarh Madhyamik Shiksha Mandal, runs the
    High School examination at the end of Class 10 and the Higher Secondary examination at the end of Class 12. Its
    papers follow a published blueprint that fixes, chapter by chapter, how many marks each part of the syllabus can
    carry, and since 2024 its regulations allow a second main examination in the same session. This page explains
    what the board publishes, how the papers are built, how a home tutor in Raipur should use that material, and what
    to ask at the demo. Every exam detail below comes from cgbse.nic.in and from the board's 2026-27 documents; check
    the site again in your child's exam year, because blueprints are revised.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rcg-board">The board</a> ·
    <a href="#rcg-910">Classes 9 and 10</a> ·
    <a href="#rcg-blueprint">Reading a blueprint</a> ·
    <a href="#rcg-project">Projects and practicals</a> ·
    <a href="#rcg-hs">Higher Secondary streams</a> ·
    <a href="#rcg-12">Class 12 papers</a> ·
    <a href="#rcg-second">The second main exam</a> ·
    <a href="#rcg-medium">Hindi and English</a> ·
    <a href="#rcg-plan">A tutor's year</a> ·
    <a href="#rcg-where">Localities</a> ·
    <a href="#rcg-demo">The demo</a> ·
    <a href="#rcg-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rcg-board">What the board is and what it does</h2>
  <p>
    The board was formed after Chhattisgarh became a state, under a School Education Department notification of
    20 July 2001, and it has conducted its own examinations since 2002. Its head office is in Raipur, at Pension Bada,
    and divisional offices at Bilaspur, Ambikapur, Jagdalpur and Rajnandgaon share the work across the state. It works
    under the Chhattisgarh Madhyamik Shiksha Adhiniyam of 1965.
  </p>
  <p>
    For a parent, three of its jobs matter. It conducts the High School and Higher Secondary examinations, for regular
    students in schools and for private candidates. It recognises the schools that teach to those examinations. And it
    advises the state government on courses and textbooks. The board's site carries the rest of what a family needs
    in a year: admit cards, results, re-totalling and re-evaluation forms, merit lists, the subject blueprints, model
    papers and a question bank for Classes 9 to 12.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-910">Classes 9 and 10: six subjects, each 75 plus 25</h2>
  <p>
    The 2026-27 teaching and examination plan gives Classes 9 and 10 the same six subjects: Hindi, English, Sanskrit
    or another language from the board's list, Mathematics, Science and Social Science. A vocational subject can take
    the place of one language. Every subject is out of 100, split into a 75-mark written paper and 25 marks for
    practical or project work, and the two parts are passed separately.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>High School subjects in the board's 2026-27 plan</caption>
    <thead>
      <tr><th scope="col">Subject (code)</th><th scope="col">Written paper</th><th scope="col">Practical or project</th><th scope="col">Pass marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Hindi (070), English (080), third language (090 or another code)</td><td>75</td><td>25, project</td><td>25 in the paper, 8 in the project</td></tr>
      <tr><td>Mathematics (100)</td><td>75</td><td>25, project</td><td>25 and 8</td></tr>
      <tr><td>Science (200)</td><td>75</td><td>25, practical</td><td>25 and 8</td></tr>
      <tr><td>Social Science (300)</td><td>75</td><td>25, project</td><td>25 and 8</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The mathematics blueprint for Class 10 is worth reading line by line, because it is not a copy of another board's
    course. Algebra carries 20 of the 75 marks, geometry 12, trigonometry 10, coordinate geometry and mensuration 8
    each, and statistics 6. Two units surprise families who come from other boards: commercial mathematics, which
    covers banking and taxation for 7 marks, and a short unit on proving mathematical statements for 4. Science spreads
    its 75 marks across eighteen chapters worth between 3 and 5 marks each, from acids, bases and salts and the
    periodic table to electric current, light, life processes, heredity and metals. No single chapter can sink the
    paper, but none can be skipped either.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-blueprint">How to read a CGBSE blueprint</h2>
  <p>
    Each blueprint has two halves. The first lists units, the marks allotted to each and the teaching periods the
    board expects. The second is the question plan for the paper. For Class 10 maths and science it reads the same
    way: three hours, 75 marks, and nineteen questions.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Question 1: fifteen one-mark parts</h3>
  <p>
    Objective items and one-word answers. Quick to mark and easy to lose through careless reading, so they reward a
    weekly habit of short recall drills rather than a last-minute cram.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Ten short answers</h3>
  <p>
    Five very short questions at 2 marks and five short ones at 3. Here a correct method, a labelled diagram or a
    clean unit at the end of a numerical is what earns the full mark.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Eight long answers</h3>
  <p>
    Five at 4 marks and three at 5, which together make up 35 of the 75. These are where students run out of time,
    so timed practice on long answers matters most.
  </p>
    </div>
  </div>
  <p>
    The blueprint also sets the mix of difficulty, at 30% easy, 50% average and 20% hard, and the mix of thinking: a
    fifth of the marks for knowledge, a quarter each for understanding and application, and a tenth each for analysis,
    evaluation and creative questions. A tutor who knows this can tell a parent honestly where marks are being lost.
    A student who scores well on recall but drops the application and evaluation questions needs different practice
    from one who knows the methods but loses the one-mark parts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-project">Projects and practicals: the 25 marks that are not in the paper</h2>
  <p>
    In languages, maths and social science, the 25 project marks divide into 20 for the project record and a
    questionnaire on one project, and 5 for a viva. The record should list at least three projects taken from those
    the textbook suggests, written up step by step: the problem chosen, the aim, materials, method, reasoning or
    comparison, the conclusion and the difficulties met. Every subject must include one project on the environment.
    Science uses a practical examination for its 25 instead.
  </p>
  <p>
    A tutor cannot and should not do this work, and the marks are given by the school. What a tutor can do is keep
    the record moving through the year, check that each write-up has all seven parts, and rehearse the viva so the
    student can explain the method in their own words. Because the practical or project part has its own pass mark, a
    neglected record can cost a student who writes a good paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-hs">Higher Secondary: choosing a faculty in Class 11</h2>
  <p>
    In Classes 11 and 12, a student takes two languages from Hindi, English and a third language, and one of the two
    must be Hindi or English. Next comes one faculty, from arts, science, commerce, agriculture, fine arts and home
    science. Environmental studies is an additional compulsory subject, and schools also teach physical and moral
    education at school level.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Higher Secondary faculties most Raipur tuition requests involve</caption>
    <thead>
      <tr><th scope="col">Faculty</th><th scope="col">Core subjects</th><th scope="col">Choice within the faculty</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Physics (201), Chemistry (202)</td><td>Biology (203) or Mathematics (204); the other can be added as an extra subject (803 or 804)</td></tr>
      <tr><td>Commerce</td><td>Accountancy (301), Business Studies (302)</td><td>One of Economics, Mathematics, Commercial Mathematics, Computer Application and other listed options; Commercial Mathematics can also be taken as an extra</td></tr>
      <tr><td>Arts</td><td>Three subjects from History, Geography, Political Science, Sociology, Psychology and Economics</td><td>Or two of those plus one option such as Mathematics, Sanskrit or Computer Application</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The extra-subject rule matters for science students who have not settled between engineering and medicine. A
    student can study Biology as the main choice and Mathematics as an extra, or the other way round, which keeps both
    doors open into Class 12. It also doubles the load, so plan tuition hours before choosing it. For the wider
    decision, our <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a board and stream</a> sets
    out the questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-12">How the Class 12 papers are weighted</h2>
  <p>
    Physics, Chemistry and Biology are each 70 for theory and 30 for practicals, with pass marks of 23 and 10.
    Mathematics, Accountancy, Business Studies, Economics and English are 80 and 20, with pass marks of 26 and 7. All
    the science and maths papers run for three hours.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Selected Class 12 blueprints for 2026-27</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Heaviest units</th><th scope="col">Question plan</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (204), 80 marks</td><td>Calculus 36; vectors and three-dimensional geometry 14; matrices and determinants 10</td><td>Fifteen one-mark parts; six of 2 marks, seven of 3, three of 4 and four of 5</td></tr>
      <tr><td>Physics (201), 70 marks</td><td>Magnetism, induction and AC 19; electrostatics and current 16; optics 14</td><td>Fifteen one-mark parts; seven of 2 marks, six of 3, two of 4 and three of 5</td></tr>
      <tr><td>Chemistry (202), 70 marks</td><td>Solutions and electrochemistry 16; then kinetics, d- and f-block, coordination compounds and the organic chapters at 6 to 8 each</td><td>Set out in the same blueprint file; check the current one</td></tr>
      <tr><td>Biology (203), 70 marks</td><td>Genetics and evolution 20; reproduction 16; biotechnology 12; biology in human welfare 12; ecology 10</td><td>Set out in the same blueprint file; check the current one</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculus alone is close to half of the maths paper, which tells a tutor where the Class 12 hours should go. In
    physics, electromagnetism and optics together carry most of the theory marks. Our posts on
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics</a> were written for another board,
    but the chapters overlap heavily; match them against the CGBSE units before using them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-second">The second main examination</h2>
  <p>
    A 2024 amendment to the board's regulations, published in the state gazette, lets CGBSE hold the Class 10 and
    Class 12 examinations twice in one session. The first is called the first main examination, the second the second
    main examination; the board's results page also calls it the avsar, or opportunity, examination. The rules that
    affect planning:
  </p>
  <ul>
    <li><strong>Who can sit it.</strong> Only students registered for the first examination, applying through the same school or institution.</li>
    <li><strong>Failed, absent or supplementary subjects.</strong> These must be taken; other subjects can be added to try for higher marks.</li>
    <li><strong>Improving a pass.</strong> A student who passed can choose one, two or more subjects to improve. If the marks do not go up, the first result stands.</li>
    <li><strong>No new subjects.</strong> The subjects stay those of the first application, and practical and project marks carry over.</li>
    <li><strong>Timing.</strong> The regulation places the second examination from the third week of June, and the form is filled without waiting for re-evaluation results.</li>
  </ul>
  <p>
    Treat the first examination as the real one. The second is a safety net that falls in the summer, when a student
    who is moving into Class 11 or an entrance course has other demands. If your child does plan to improve a subject,
    keep the tutor on through April and May for that subject only.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-medium">Hindi and English</h2>
  <p>
    The board's site opens in Hindi with an English option, and its 2026-27 blueprints and teaching plan are published
    in Hindi. Many Raipur students study partly in Hindi and partly in English, and plenty of children speak
    Chhattisgarhi or Hindi at home. For a tutor, that has two practical consequences. First, the student should
    practise in the language they will write the paper in, using the board's own terms. Second, a student moving from
    a Hindi-medium school to an English-medium one, or preparing for an entrance exam in English, needs the technical
    vocabulary in both languages for a while. Ask at the demo how the tutor handles both.
  </p>
  <p>
    The English papers themselves use the board's prescribed textbooks: Flight in Classes 9 and 10, and Hornbill and
    Snapshots in Class 11. An English tutor should be teaching from those books, not a general grammar workbook. Our
    <a href="{{ url('/english-home-tutor-raipur') }}">English home tutor in Raipur</a> page covers that side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-plan">A CGBSE tutor's year, Class 9 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What a home tutor should be doing at each stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Priority</th><th scope="col">Board material to use</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Close gaps in arithmetic, algebra and reading before Class 10 begins; start the project record properly</td><td>The Class 9 blueprints, which the board also publishes for 2026-27</td></tr>
      <tr><td>Class 10, first half</td><td>Cover the syllabus in blueprint order of weight; weekly fifteen-question recall drills</td><td>Class 10 blueprint and question bank</td></tr>
      <tr><td>Class 10, second half</td><td>Full three-hour papers, marked against the nineteen-question plan; viva practice</td><td>Model papers from the board's Parakh page</td></tr>
      <tr><td>Class 11</td><td>Settle the faculty and any extra subject; build Class 11 physics, chemistry and maths properly</td><td>Class 11 blueprints and the prescribed books</td></tr>
      <tr><td>Class 12</td><td>Weight time by unit marks: calculus in maths, electromagnetism and optics in physics; practical files on schedule</td><td>Class 12 blueprints, model papers and question bank</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students aiming at JEE or NEET alongside the board should read our <a href="{{ url('/jee-home-tutor-raipur') }}">JEE</a>
    and <a href="{{ url('/neet-home-tutor-raipur') }}">NEET</a> pages for Raipur. One detail from the board's own notice
    board is worth knowing: cgbse.nic.in has published a notice of "20 percentile cut-off marks" for JEE purposes for
    2024, 2025 and 2026. If an admission plan depends on board marks, read that notice together with the current
    official JEE information.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-where">Where Raipur's CG Board tutors travel from</h2>
  <p>
    Raipur has no metro, so most tutors ride a two-wheeler or take an auto, and the tutor's own side of the city
    decides how reliable the weekly slot will be.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Raipur localities and what helps a tutor reach them</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Zone</th><th scope="col">What helps</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $rcgA('bhatagaon', 'Bhatagaon') !!}</td><td>South</td><td>The inter-state bus terminal is the landmark everyone knows; avoid times when long-distance buses come and go</td></tr>
      <tr><td>{!! $rcgA('pachpedi-naka', 'Pachpedi Naka') !!}</td><td>South</td><td>Pick a tutor from your side of the Ring Road; the junction carries heavy traffic</td></tr>
      <tr><td>{!! $rcgA('mahaveer-nagar', 'Mahaveer Nagar') !!}</td><td>South</td><td>Villas mean doorstep arrival; for apartments, send the block and flat number</td></tr>
      <tr><td>{!! $rcgA('kota', 'Kota') !!}</td><td>West</td><td>Raipur Junction is reached by Kota Road; choose a tutor on your side of the Great Eastern Road</td></tr>
      <tr><td>{!! $rcgA('tatibandh', 'Tatibandh') !!}</td><td>West</td><td>Sarona station is close for local trains; ask the complex gate about a standing visitor pass</td></tr>
      <tr><td>{!! $rcgA('kabir-nagar', 'Kabir Nagar') !!}</td><td>West</td><td>Block and house numbers make the first visit easy; agree an evening slot clear of Ring Road rush</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides: <a href="{{ url('/city/raipur/zone/central-raipur') }}">Central Raipur</a>,
    <a href="{{ url('/city/raipur/zone/east-raipur') }}">East Raipur</a>,
    <a href="{{ url('/city/raipur/zone/south-raipur') }}">South Raipur</a> and
    <a href="{{ url('/city/raipur/zone/west-raipur') }}">West Raipur</a>. Every locality is on the
    <a href="{{ url('/city/raipur') }}">Raipur page</a>, and our <a href="{{ url('/blog/raipur-home-tuition-guide') }}">Raipur
    home tuition guide</a> walks through them zone by zone. When the right CG Board specialist lives across the city,
    an <a href="{{ url('/online-tutor-raipur') }}">online tutor</a> for one subject is often the simpler answer.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-demo">Questions to ask a CG Board tutor at the demo</h2>
  <ol>
    <li>Have you read this year's blueprint for my child's subject, and which unit carries the most marks?</li>
    <li>How would you divide a three-hour paper across the fifteen one-mark parts and the long answers?</li>
    <li>Will you teach in Hindi, English or both, and use the board's terms for the language my child writes in?</li>
    <li>How will you keep the project record or practical file on track without writing it yourself?</li>
    <li>Where do you live, and can you come at the same hour every week through the monsoon and the festival weeks?</li>
  </ol>
  <p>
    If the answers do not convince you, we arrange the next demo, and switching tutor later is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> covers the general points.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rcg-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fee, and you see it before the demo. For a High School student, one tutor for maths and
    science together is common; in Class 12, a separate tutor for the hardest subject usually pays off. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-raipur') }}">home
    tuition fees in Raipur</a>.
  </p>
  <p>
    Send the class, faculty, subjects, the language your child writes in, school and coaching timings, and your
    locality with a landmark. You receive two or three matched tutors and book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    first. Subject pages for Raipur: <a href="{{ url('/maths-home-tutor-raipur') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-raipur') }}">science</a>, <a href="{{ url('/physics-home-tutor-raipur') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-raipur') }}">biology</a>;
    other boards: <a href="{{ url('/cbse-home-tutor-raipur') }}">CBSE</a> and <a href="{{ url('/icse-home-tutor-raipur') }}">ICSE</a>.
    Teachers can find requests on <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
