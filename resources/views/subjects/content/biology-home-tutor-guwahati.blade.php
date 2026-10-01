{{--
  Long-form guide for the "biology home tutor Guwahati" subject page. Byline:
  NXTutors Academic Team. No school, hospital, person, institute or society is
  named.

  Exam facts reuse the checked statements on the national biology-home-tutor
  page, which cites (fetched 1 Oct 2026):
  - CBSE Biology (044), XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Biology_SecP2_2026-27.pdf):
    theory 3 h 70, practical 30; XII: Reproduction 16, Genetics and Evolution
    20, Biology and Human Welfare 12, Biotechnology 12, Ecology 10.
  - CISCE ISC Biology (863), cisce.org: theory 70, practical 15, project 10,
    practical file 5.
  - NTA NEET (UG) 2026 Information Bulletin via neet.nta.nic.in: 180 questions,
    180 minutes, physics 45, chemistry 45, biology 90, 720 marks, +4/-1,
    biology first in tie-breaks; syllabus notified by NMC; 2027 bulletin not out.
  - IB DP Biology (first assessment 2025), ibo.org: four themes (unity and
    diversity, form and function, interaction and interdependence, continuity
    and change); SL 150 / HL 240 hours; papers 80%, investigation 20%.
  - Cambridge IGCSE 0610 and Edexcel 4BI1 (as on the national page).
  Assam's state board (SEBA and AHSEC, since combined under a single state
  school education board) is described generally only, as on the Guwahati city
  hub. Local facts only from database/seo-content/areas/guwahati-research.json
  and guwahati-zone-guides.json. Only the allowed fee sentence.
  Area links render only when that Guwahati area page exists and is active.
--}}
@php
  $gbiSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gbiA = function (string $slug, string $label) use ($gbiSlugs) {
      return in_array($slug, $gbiSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gbi-guide" aria-labelledby="gbiGuideTitle">
  <h2 id="gbiGuideTitle">Biology home tutor in Guwahati: one plan for the board paper and NEET</h2>

  <p class="nx-guide__lede">
    A Class 11 or 12 biology student in Guwahati may be working towards two things at once: a board examination,
    whether on the state board, CBSE or ISC, and NEET. The two overlap in content but not in style. The
    board wants explained, labelled answers; NEET wants the right option chosen in about a minute, with a penalty for a
    wrong one. A biology tutor's value lies in keeping both on track without one crowding out the other. NXTutors asks
    for the board, class, NEET plans and your locality, then sends two or three biology tutors with their fees. Your
    first class with the one you pick is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gbi-boards">Boards</a> ·
    <a href="#gbi-state">State board</a> ·
    <a href="#gbi-two">Board versus NEET</a> ·
    <a href="#gbi-week">A sample week</a> ·
    <a href="#gbi-cbse">CBSE Class 12</a> ·
    <a href="#gbi-when">When to start</a> ·
    <a href="#gbi-ib">IB and IGCSE</a> ·
    <a href="#gbi-where">Six localities</a> ·
    <a href="#gbi-mode">Home or online</a> ·
    <a href="#gbi-demo">Demo</a> ·
    <a href="#gbi-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gbi-boards">Which biology course is your child studying?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior biology courses Guwahati students follow and what each one needs from a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">How it is assessed</th><th scope="col">Tutor needs</th></tr>
    </thead>
    <tbody>
      <tr><td>Higher secondary biology, Assam's state board</td><td>Set by the board; pattern in its official notices</td><td>The prescribed textbooks and the school's medium of instruction</td></tr>
      <tr><td>CBSE Biology (044)</td><td>A 70-mark theory paper and 30 practical marks, each year</td><td>NCERT depth and application questions</td></tr>
      <tr><td>ISC Biology (863)</td><td>Class 12: 70 theory, 15 practical, 10 project, 5 practical file</td><td>Detailed diagrams and exact terms</td></tr>
      <tr><td>NEET (UG)</td><td>90 biology questions within a 180-question paper</td><td>Speed, accuracy and mock analysis</td></tr>
      <tr><td>IB Biology; IGCSE 0610 or 4BI1</td><td>Papers plus a 20% investigation (IB); practical skills (IGCSE)</td><td>Data analysis and experimental method, usually online</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10, biology is taught within science; our <a href="{{ url('/science-home-tutor-guwahati') }}">science
    home tutor in Guwahati</a> page covers those years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-state">Biology on Assam's state board</h2>
  <p>
    The higher secondary course in Assam was run for many years by AHSEC, the Assam Higher Secondary Education Council,
    with SEBA handling Class 10; the state has since combined them under a single state school education board, and
    notices may carry the new name. We keep our description of the biology paper general. A tutor for a state board
    student should work from the prescribed textbooks, teach in or alongside the medium the school uses, and take the
    syllabus, timetable and pattern only from the board's notices. If the student is also sitting NEET, the tutor should
    map the state textbook chapters onto the NEET syllabus so that nothing is missed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-two">How do board biology and NEET biology differ?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Board biology and NEET biology compared, and what each asks of the student</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">Board paper</th><th scope="col">NEET (UG), 2026 pattern</th></tr>
    </thead>
    <tbody>
      <tr><td>Question type</td><td>Short and long written answers, diagrams, case-based items</td><td>Multiple choice only</td></tr>
      <tr><td>Marking</td><td>Step marks for terms, sequence and labels</td><td>Four for a right answer, minus one for a wrong one</td></tr>
      <tr><td>Share of the paper</td><td>The whole paper is biology</td><td>90 of 180 questions, split between botany and zoology</td></tr>
      <tr><td>What wins marks</td><td>Complete, precise explanation</td><td>Exact recall of NCERT detail, fast</td></tr>
      <tr><td>Practical work</td><td>Practical exam, record or file, and a project</td><td>None</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In the NEET (UG) 2026 bulletin the paper ran for 180 minutes and carried 720 marks, and biology scores were used
    first to break ties. NTA confirms the pattern and dates each year, the syllabus is notified by the National Medical
    Commission, and the 2027 bulletin had not been published when we wrote this, so check neet.nta.nic.in. Our
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page covers all three subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-week">What does a balanced week look like?</h2>
  <p>
    For a Class 12 student taking both with two sessions a week, here is a pattern that keeps the two styles in
    balance, to adjust to the school timetable and any coaching batch:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A sample two-session week of biology tuition for a board and NEET student</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">First half</th><th scope="col">Second half</th></tr>
    </thead>
    <tbody>
      <tr><td>Session one</td><td>The week's new chapter, explained and drawn by the student</td><td>Two board-style written answers, marked for terms and order</td></tr>
      <tr><td>Session two</td><td>A timed set of objective questions on the same chapter</td><td>Review of mistakes, and a short quiz on a chapter from a month earlier</td></tr>
      <tr><td>Between sessions</td><td colspan="2">Flashcards in the student's own words; a diagram redrawn from memory</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Near the pre-boards, the balance tips towards full written papers; after the board exams, it moves almost entirely
    to NEET mocks and NCERT revision. Our guide to <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology,
    NCERT first</a> explains how to read the textbooks for the entrance paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-cbse">CBSE Class 12 biology: where should time go?</h2>
  <p>
    Of the 70 theory marks in CBSE's 2026-27 curriculum, Genetics and Evolution takes 20, Reproduction 16, Biology and
    Human Welfare and Biotechnology 12 each, and Ecology 10. Genetics deserves the most time, because inheritance
    problems and molecular genetics call for reasoning, and it helps to begin weekly problem sets as soon as the unit
    starts. Reproduction rewards neat labelled diagrams and events in the right order. The 30 practical marks depend on
    experiments, spotting, the record and a project with a viva, so a tutor should ask to see the record regularly. ISC
    students follow a similar unit list, with 15 marks each for Genetics and Evolution and Ecology.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-when">When is the right time to start?</h2>
  <p>
    The start of Class 11 is the most useful point, because the new course arrives with a jump in vocabulary and
    volume, and habits formed in the first term last. Other good moments are the first weak unit test, a move between
    boards (from the state board to CBSE, or from ICSE to ISC), and the summer before Class 12, when Class 11 chapters
    can be revised before new ones begin. Watch for these signs: answers that lose marks for vague wording, diagrams
    left out or mislabelled, data questions left blank, and good chapter tests followed by a weak half-yearly, which
    usually points to no revision system at all. Starting late in Class 12 is still worthwhile, but the plan then has to
    be narrower and sharper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-ib">IB and IGCSE biology from Guwahati</h2>
  <p>
    Families on these courses usually find their specialist online. IB Biology is organised around four themes, unity
    and diversity, form and function, interaction and interdependence, and continuity and change, studied across levels
    from molecules to ecosystems, over 150 hours at SL or 240 at HL. Exams make up 80% of the grade and an individual
    scientific investigation the other 20%; a tutor may discuss the research question and challenge the method, but the
    work must stay the student's own. For IGCSE, confirm whether your child is on Cambridge 0610, with its Core and
    Extended tiers and a practical or alternative-to-practical paper, or Edexcel 4BI1, which is untiered. The national
    <a href="{{ url('/biology-home-tutor') }}">biology home tutor</a> guide has the full comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-where">How does a biology tutor reach six Guwahati localities?</h2>
  <p>
    Travel across Guwahati runs mostly along GS Road, Zoo Road and the highway, with Guwahati station, Kamakhya Junction
    and Narangi as rail points. We look for tutors close to your stretch of the city first; the
    <a href="{{ url('/city/guwahati') }}">Guwahati tuition page</a> lists every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Guwahati localities: the setting, the way in and a tip for regular biology lessons</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Setting</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gbiA('ulubari', 'Ulubari') !!}</td><td>Between Paltan Bazaar and Bhangagarh, where GS Road begins; low-rise apartment buildings</td><td>Avoid office and market hours near the station</td></tr>
      <tr><td>{!! $gbiA('zoo-road', 'Zoo Road') !!}</td><td>Runs from Chandmari to Ganeshguri past the state zoo</td><td>Buildings often keep a visitor register; give the guard the tutor's name</td></tr>
      <tr><td>{!! $gbiA('dispur', 'Dispur') !!}</td><td>The capital complex, with GS Road and the Assam Trunk Road passing through</td><td>Keep clear of government office opening and closing times</td></tr>
      <tr><td>{!! $gbiA('hatigaon', 'Hatigaon') !!}</td><td>Builder floors, houses and some larger villas in older lanes</td><td>Say if you are a short walk off GS Road, for a tutor coming by bus</td></tr>
      <tr><td>{!! $gbiA('six-mile', 'Six Mile') !!}</td><td>On GS Road, with a flyover up to the highway</td><td>Narangi station is a rail option for this side</td></tr>
      <tr><td>{!! $gbiA('jalukbari', 'Jalukbari') !!}</td><td>On the river in the western corridor, with a large student population</td><td>Plan around the busy junction, and switch online on the worst evenings</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/city/guwahati/zone/gs-road-dispur') }}">GS Road and Dispur</a> and
    <a href="{{ url('/city/guwahati/zone/maligaon-jalukbari-north-guwahati') }}">Maligaon, Jalukbari and North
    Guwahati</a> zone guides give more local detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-mode">Home, online or both?</h2>
  <p>
    Senior biology works well online: diagrams go on a tablet or a notebook held to the camera, and NEET mock analysis
    suits a shared screen. Home lessons suit a student who needs someone at the desk, and a family that wants the
    practical record checked on paper. On the north bank, a tutor who already lives there, or an online one, is the
    practical match, since a daily river crossing is hard to keep up. Pairing a nearby tutor for board work with an
    online specialist for NEET or IB is another option, and our article on
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> weighs the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-demo">What should you check in the demo?</h2>
  <ol>
    <li>The tutor asks what your child already knows and finds the gap first.</li>
    <li>Your child draws and labels a structure in the class.</li>
    <li>The tutor explains how the state board, CBSE or ISC paper is set, and how NEET differs.</li>
    <li>A written answer is corrected for terms and sequence, and an objective question is discussed option by option.</li>
    <li>You leave with a plan for the next month, including revision of earlier chapters.</li>
  </ol>
  <p>
    If the fit is wrong, we arrange a demo with the next shortlisted tutor, and switching later costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-fees">What does a biology home tutor in Guwahati charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Senior and NEET biology
    usually sits in that upper part. Every tutor sets their own fee, and you see it before the demo; our
    <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">Guwahati fees article</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gbi-send">What to send us</h2>
  <p>
    Tell us the class, the board, NEET plans, the chapters that trouble your child, the medium of study, your locality
    and times, home or online, and a budget. We send two or three matched biology tutors with fees, and tutors who join
    go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. For the
    other sciences, see our <a href="{{ url('/physics-home-tutor-guwahati') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-guwahati') }}">chemistry</a> pages for Guwahati. Biology teachers in the city
    can see open requests on <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
