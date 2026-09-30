{{--
  Long-form guide for the "science home tutor Jaipur" page (Classes 6 to 10,
  CBSE, ICSE and the Rajasthan board). Byline in config: Aaditya Kashyap; role
  statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/jaipur-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements already used on the Delhi,
  Faridabad and Hyderabad science pages and in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39 questions
  by type, 30/25/25 by subject, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science. RBSE is described generally only (name, levels, own
  site); no RBSE pattern is given. No school, society, mall or people's names,
  no distances or travel times, only the allowed fee sentence.

  Area links render only when that Jaipur area page exists and is active.
--}}
@php
  $jpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jpA = function (string $slug, string $label) use ($jpAreaSlugs) {
      return in_array($slug, $jpAreaSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jps-guide" aria-labelledby="jpsGuideTitle">
  <h2 id="jpsGuideTitle">Science home tutor in Jaipur for Classes 6 to 10: one book at a time, and an after-school hour that stays fixed</h2>

  <p class="nx-guide__lede">
    Between Class 6 and Class 10, science changes shape twice: first from activities into three separate strands,
    then from school tests into a board paper that rewards application. A Jaipur child may meet those changes on
    the NCERT books, on ICSE's three papers or on the Rajasthan board's own syllabus, and the tutor has to teach from
    whichever one is on the desk. NXTutors sends two or three science tutors who know your child's book and can
    reach your colony after school. Each fee is shown before you meet anyone, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jps-desk">The book on the desk</a> ·
    <a href="#jps-units">CBSE Class 10 units</a> ·
    <a href="#jps-outside">Outside the board paper</a> ·
    <a href="#jps-nine">Class 9 this year</a> ·
    <a href="#jps-other">ICSE and RBSE</a> ·
    <a href="#jps-slots">Six localities</a> ·
    <a href="#jps-week">Sessions a week</a> ·
    <a href="#jps-demo">At the demo</a> ·
    <a href="#jps-fees">Fees</a> ·
    <a href="#jps-first">First steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jps-desk">Which science book is your child working from, and what should the tutor do with it?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The first thing he asks a family is not
    the class but the book, because each one sets a different task for the tutor:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science books and papers for Jaipur students in Classes 6 to 10, and the tutor's main task with each</caption>
    <thead>
      <tr><th scope="col">Class and board</th><th scope="col">Book or paper</th><th scope="col">The tutor's main task</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 and 7, CBSE</td><td>NCERT <em>Curiosity</em>, built around activities</td><td>Turn each activity into a correct sentence and a labelled sketch</td></tr>
      <tr><td>Class 8, CBSE</td><td>NCERT science, with physics, chemistry and biology now distinct</td><td>Units on every answer; the first word equations</td></tr>
      <tr><td>Class 9, CBSE</td><td>NCERT <em>Exploration</em>, the new book for this session</td><td>Start from the new chapters, not an older sibling's notes</td></tr>
      <tr><td>Class 10, CBSE</td><td>One 80-mark board paper with 20 internal marks</td><td>Application questions and answers sized to the marks</td></tr>
      <tr><td>Classes 9 and 10, ICSE</td><td>Separate Physics, Chemistry and Biology papers under CISCE</td><td>Teach from the school's chosen books and CISCE specimen papers</td></tr>
      <tr><td>Up to Class 10, Rajasthan board</td><td>The state syllabus and textbooks, examined at Secondary level</td><td>Match the medium and the state textbook's terms</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until Class 10, a single tutor for all three strands usually works well, and it helps in one practical way: the
    same person notices when a physics numerical is failing on arithmetic rather than physics. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains how we match everywhere, and the
    <a href="{{ url('/science-home-tutor/class-7') }}">Class 7 science tutor</a> page covers the
    <em>Curiosity</em> years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-units">What do the CBSE Class 10 science units carry, and what does each need?</h2>
  <p>
    The board paper is three hours for 80 marks. The school adds 20 through four parts of 5 marks each: periodic
    assessment, multiple assessment, a portfolio, and subject enrichment through practical work. Split by strand,
    biology carries 30 marks, and chemistry and physics 25 apiece.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science units, 2026-27, with the habit a tutor should build for each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Board marks</th><th scope="col">Habit to build</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances: Nature and Behaviour</td><td>25</td><td>Balanced equations, with state symbols when asked</td></tr>
      <tr><td>World of Living</td><td>25</td><td>Exact terms and neat, labelled diagrams</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>A circuit drawn before any formula</td></tr>
      <tr><td>Natural Phenomena</td><td>12</td><td>Arrows on every ray, virtual rays dotted</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>Short, precise points; no padding</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The 2026-27 sample paper has 39 questions. Twenty carry one mark each and mix multiple-choice with
    assertion–reason items. Six short answers are worth two marks and seven are worth three. Three case- or
    source-based questions carry four marks, and three long answers carry five. By thinking skill, half the paper
    asks for knowledge and understanding, 30% for application and 20% for analysis and evaluation, so a child who
    only memorises is preparing for half the marks. The
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go chapter by chapter, and
    the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page sets out the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-outside">What stays outside the Class 10 board paper, and how many sittings are there?</h2>
  <p>
    For 2026-27, three areas are assessed by the school rather than in the board paper: the electric motor, the
    generator and electromagnetic induction; evolution; and the periodic classification of elements. They still need
    teaching, because internal marks and Class 11 depend on them, but they should not eat into board revision. The
    curriculum also names 14 experiments, and board questions are built on them, which makes the practical file a
    revision tool rather than a formality.
  </p>
  <p>
    All Class 10 students take the main board exam. A second, optional exam allows eligible students to improve
    their result in up to three subjects, and science is among them. Dates for 2027 are not out, so follow
    cbse.gov.in and plan for the main exam. Our
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> maps the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-nine">Why does Class 9 science need a fresh plan this session?</h2>
  <p>
    Class 9 now learns from <em>Exploration</em>, the new NCERT book that CBSE's 2026-27 curriculum follows. The
    split stays 80 for the yearly exam and 20 internal. Within the 80, Matter: its nature and behaviour is the
    largest unit at 27, World of living has 25, Motion, force, work and sound has 23, and Earth as a system has 5.
    School practicals include onion-peel and cheek-cell slides, separating mixtures and plotting motion graphs; a
    tutor who explains why each set-up works makes the matching theory questions far less daunting. The
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-other">What changes for ICSE and Rajasthan board students?</h2>
  <h3>ICSE</h3>
  <p>
    CISCE examines Class 10 science as three separate papers, Physics, Chemistry and Biology, each with its own
    internal assessment. Schools choose their textbooks within the CISCE syllabus, so an NCERT-based plan will not fit;
    the tutor should work from your child's books and the CISCE specimen papers. Marks usually slip on loose
    definitions and unfinished numericals. Some families ask for help in only the weakest of the three papers from
    Class 9.
  </p>
  <h3>Rajasthan board</h3>
  <p>
    The Board of Secondary Education, Rajasthan examines science at the Secondary level, Class 10, and publishes its
    syllabus and scheme on rajeduboard.rajasthan.gov.in; we do not restate its pattern here. If your child studies in
    Hindi medium, say so in the request, so the shortlist includes tutors who teach and mark in Hindi with the state
    textbook's vocabulary. Practice should come from that textbook rather than from CBSE sample papers, which follow
    a different layout.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-slots">How does an after-school science slot work in six Jaipur localities?</h2>
  <p>
    For a child of eleven or twelve, the lesson sits between school and dinner, and a steady arrival time counts for
    more than anything else. Six localities from four of Jaipur's five zones show how differently that works out.
    Every locality is listed on our <a href="{{ url('/city/jaipur') }}">Jaipur page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Near the railway station, and in the central colonies</h3>
      <p>
        {!! $jpA('bani-park', 'Bani Park') !!} is one of Jaipur's older residential areas, mostly independent houses
        and heritage homes, so the tutor comes straight to the door. The Sindhi Camp and Railway Station stops on the
        Pink Line serve it, but the roads towards the station and bus stand fill up in the evening; a slightly earlier
        or later slot helps. {!! $jpA('adarsh-nagar', 'Adarsh Nagar') !!} keeps a calm, family feel, with older houses,
        builder floors and apartments. City buses serve it but the metro does not, so tutors come by scooter or auto,
        and it helps to suggest where a two-wheeler can stand.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Beside the Rambagh side, and in the west</h3>
      <p>
        {!! $jpA('tilak-nagar', 'Tilak Nagar') !!} has green, fairly quiet streets with independent houses and newer
        apartment projects; the newer buildings register visitors, so share the tutor's name before the first lesson.
        {!! $jpA('chitrakoot', 'Chitrakoot') !!}, along Ajmer Road, is organised into 12 sectors, ten mainly
        residential. Give the sector with the plot or flat number and the tutor finds the home quickly; with no metro
        station, most tutors ride in from Vaishali Nagar, Nirman Nagar or Shyam Nagar.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The southern edge, near the airport</h3>
      <p>
        {!! $jpA('sanganer', 'Sanganer') !!}, the historic town known for block printing and handmade paper, is home to
        the city's airport. Lanes near the old centre are narrow and suit tutors on two-wheelers, while newer apartment
        projects register guests at the gate. {!! $jpA('jagatpura', 'Jagatpura') !!} is mostly apartments, many in gated
        complexes, so give security the tutor's name and your tower and flat number. Getor Jagatpura railway station
        serves the area, and roads near the flyover get busy in the evening.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-week">How many science sessions a week does a child need?</h2>
  <ul>
    <li><strong>Classes 6 and 7:</strong> one session is usually enough, spent on understanding the week's activities and writing short, exact answers.</li>
    <li><strong>Class 8:</strong> one or two, depending on how comfortable your child is with numbers, since numericals arrive this year.</li>
    <li><strong>Class 9:</strong> two sessions suit most students, given the new book and the jump in difficulty.</li>
    <li><strong>Class 10:</strong> two, rising to three in the months before the board exam, with one of them given to a timed paper section.</li>
  </ul>
  <p>
    The <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page explains the bridge year in
    more detail. Children thinking about NEET later gain most from firm Class 9 and 10 foundations, not from
    entrance books opened early.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-demo">What should you watch for during the free science demo?</h2>
  <p>
    Ask the tutor to teach the chapter your child is on at school, as a normal lesson. Then notice:
  </p>
  <ol>
    <li>Does the tutor ask for the exact term, such as "alveoli" rather than "air sacs", and correct a vague one?</li>
    <li>Is every numerical finished with a unit, and every ray diagram drawn with arrows?</li>
    <li>Are answers shaped to the marks: two points for two marks, three for three?</li>
    <li>Does the tutor ask to see a recent school test before deciding what to teach next?</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo checklist</a> has more questions.
    If the match is not right, we set up a demo with another tutor from your shortlist, and changing tutor later
    costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-fees">What does a science home tutor in Jaipur cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor fixes their
    own rate. For Classes 6 to 10, the board year normally costs more than the middle-school years, and the trip to
    your colony and the number of weekly lessons also count. You see every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jps-first">What are the first steps?</h2>
  <p>
    Share the class, the board and medium, the strand that is causing trouble, your locality with its sector or a
    landmark, and the afternoons that suit your family. We send two or three matched science tutors with their fees,
    and you pick one for a free demo class. If no one suitable can travel to you at that time, we propose online or
    mixed lessons. NXTutors is based in Sector 66, Gurugram, and teaches online across India. Older students can look
    at our <a href="{{ url('/chemistry-home-tutor-jaipur') }}">chemistry tutors in Jaipur</a>.
  </p>
  <p>
    Science teachers who live in Jaipur and would like students nearby can browse open requests on the
    <a href="{{ url('/tuition-jobs/jaipur') }}">Jaipur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
