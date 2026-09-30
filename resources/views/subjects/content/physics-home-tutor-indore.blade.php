{{--
  Long-form guide for the "physics home tutor Indore" page (Classes 11 and 12,
  JEE and NEET, ISC/IB/IGCSE, MP Board in general terms). Byline in config:
  NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/indore-research.json (zone_facts and area "about"
  texts; coaching institutes around Palasia and Bhawarkua are stated there).
  Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  blocks 33/18/12/7, recall share, practical scheme and record requirements,
  no calculators, transistors and logic gates out),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern, JEE
  Advanced 2026 eligibility, hybrid route, doubt list, mock analysis),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern,
  physics as the usual weak link) and -ib-physics-slhl-iaee (new guide first
  assessed May 2025, teaching hours, five themes, two papers 80%,
  investigation 20%). No school, institute, society, mall or people's names,
  no distances or travel times, only the allowed fee sentence.

  Area links render only when that Indore area page exists and is active.
--}}
@php
  $inAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $inA = function (string $slug, string $label) use ($inAreaSlugs) {
      return in_array($slug, $inAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide idp-guide" aria-labelledby="idpGuideTitle">
  <h2 id="idpGuideTitle">Physics home tutor in Indore: a partner for the coaching batch, not a second batch</h2>

  <p class="nx-guide__lede">
    Many senior physics students in Indore already spend their evenings in a coaching class, often in the Palasia or
    Bhawarkua belts where institutes are concentrated. What they lack is rarely more lectures. It is someone who can
    sit with the problems they could not start, check their board answers, and read their test papers line by line.
    NXTutors shortlists two or three physics tutors who teach your child's exam and can reach your home in the hours
    left after school and coaching. Each fee is shown before you meet, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#idp-split">Coaching and tutor roles</a> ·
    <a href="#idp-week">A week around the batch</a> ·
    <a href="#idp-exams">JEE and NEET physics</a> ·
    <a href="#idp-board">The board paper</a> ·
    <a href="#idp-practical">Practical marks</a> ·
    <a href="#idp-places">Six localities</a> ·
    <a href="#idp-courses">Other boards</a> ·
    <a href="#idp-fees">Fees</a> ·
    <a href="#idp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="idp-split">If your child is in a coaching batch, what should the home tutor do?</h2>
  <p>
    Coaching and one-to-one teaching do different jobs, and the arrangement works when each keeps to its own. A
    rough division:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics for a coaching student in Indore: what the batch provides and what a home tutor adds</caption>
    <thead>
      <tr><th scope="col">Need</th><th scope="col">Coaching batch</th><th scope="col">Home tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Syllabus order and pace</td><td>Fixed for the whole batch</td><td>Follows the batch calendar, slowing down only on weak chapters</td></tr>
      <tr><td>Doubts</td><td>Little time per student</td><td>Works through the student's own list of stuck problems</td></tr>
      <tr><td>Tests and ranking</td><td>Regular test series and a peer benchmark</td><td>Reads each test and sorts lost marks by cause</td></tr>
      <tr><td>Board answers and practicals</td><td>Often a low priority</td><td>Derivations, diagrams, the practical record and viva practice</td></tr>
      <tr><td>Foundations from Class 9 and 10</td><td>Assumed to be secure</td><td>Rebuilt quickly where the gap shows</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Share the coaching timetable with the tutor at the demo, so home sessions reinforce this week's chapter instead of
    opening another. Our comparisons of <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching
    and a home tutor for JEE</a> and the <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">same
    choice for NEET</a> go into the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-week">How can a week be arranged around the coaching timetable?</h2>
  <p>
    Every family's week is different, but a pattern like this keeps home tuition from becoming one more tiring
    evening:
  </p>
  <ul>
    <li><strong>Coaching evenings:</strong> no tutor visit. The student adds any problem that could not be started to a doubt list, noting the source and the step where it stalled.</li>
    <li><strong>One free weekday:</strong> a home session that clears the doubt list, starting with whichever chapter produced the most entries.</li>
    <li><strong>After each coaching test:</strong> a session that sorts every lost mark into concept not known, concept misapplied, calculation slip, misread question or time running out.</li>
    <li><strong>Before school exams:</strong> the tutor switches to board style, with derivations, labelled diagrams and complete numerical working.</li>
  </ul>
  <p>
    If a coaching day runs late, moving that week's session online with the same tutor keeps the rhythm without an
    evening journey.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-exams">How much physics do JEE and NEET contain?</h2>
  <p>
    In 2026, JEE Main Paper 1 was a computer-based test of 75 questions for 300 marks, and physics made up 25 of them:
    20 multiple-choice questions and 5 with a numerical answer, each scored +4 when correct and −1 when wrong. JEE
    Advanced 2026 was open only to candidates placed within the first 2,50,000 in JEE Main, and its problems join several ideas at once.
    NEET (UG) 2026 was a single three-hour pen-and-paper exam with 180 questions; physics had 45 of them, worth 180
    of the 720 marks, with the same +4 and −1 scoring.
  </p>
  <p>
    For NEET students physics is very often the section that holds the total back while biology goes well, and
    negative marking punishes wide guessing. One-to-one work helps here because a tutor can see whether the concept,
    the set-up of the problem or the arithmetic is failing. Entrance syllabi come from NTA, not from the school board,
    so confirm the current list at nta.ac.in before dropping a topic. Topic priorities are in the
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise guide</a> and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>.
  </p>
  <p>
    Board and entrance physics share most chapters, so they help each other more than they compete. The difference is
    style: entrance papers want speed and accuracy on multi-step problems, while the board paper wants a derivation,
    a diagram and a clean final line. Through most of the year a tutor can teach a chapter for understanding, then set
    entrance-level problems on it the same week. In the weeks before school exams and pre-boards, the balance tips
    towards written answers and sample papers, and back again afterwards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-board">What does the CBSE Class 12 physics theory paper reward?</h2>
  <p>
    The paper is worth 70, with 30 more from practicals, and the 2026-27 sample paper follows last year's design. Its
    fourteen NCERT chapters fall into four blocks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory, 2026-27: mark blocks and where a tutor should spend time</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Marks</th><th scope="col">Where tutoring time goes</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics to alternating current (electricity and magnetism)</td><td>33</td><td>Field and circuit diagrams, then derivations written from them</td></tr>
      <tr><td>Optics with electromagnetic waves</td><td>18</td><td>Ray diagrams with arrows and sign convention stated</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Short numericals with units on every line</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Labelled circuit sketches and characteristic curves</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    There are 33 compulsory questions. Section A has 16 one-mark items, 12 multiple-choice and 4 assertion–reason;
    Section B has five of two marks; Section C seven of three; Section D two case studies of four; and Section E three
    long answers of five. Physical constants are given and calculators are not allowed. Only about 38% of marks reward
    recall, so a student who has memorised notes without applying them is prepared for well under half the paper.
    Transistors and logic gates are out of the syllabus, which dates older notes. Class 12 has one main board exam;
    follow cbse.gov.in for the 2027 date sheet. See our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-practical">Why should a coaching student still prepare the 30 practical marks?</h2>
  <p>
    Because they are the easiest marks to secure, and coaching rarely touches them. Two experiments, one per section,
    are worth 7 each; the record 5; an activity 3; the investigatory project 3; and the viva 5. The record needs at
    least eight experiments, four per section, at least six activities, three per section, and the project report. A
    home tutor can check each write-up for aim, diagram, observation table and result, list the precautions and error
    sources, and run a mock viva built on "why" questions about the readings.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-places">Where in Indore can a physics tutor keep an after-coaching slot?</h2>
  <p>
    Physics sessions for senior students tend to fall late, so the route home matters. Six localities from all four of
    our Indore zones show the variety; the <a href="{{ url('/city/indore') }}">Indore page</a> lists tutors near you.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Around the coaching belts</h3>
      <p>
        {!! $inA('new-palasia', 'New Palasia') !!} sits across AB Road from Old Palasia, with apartment buildings,
        independent houses, shops and offices. Palasia Square is a planned underground metro station that has not
        opened, so tutors come by bus, auto or two-wheeler; a weekday slot avoids the busy evenings around the food
        street. {!! $inA('bhawarkua', 'Bhawarkua') !!}, a student hub with many coaching institutes and hostels, is
        crowded most of the day. Homes are mostly independent houses, so the tutor goes to the door, and an early or
        late evening slot works better than the middle of it.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North-west and north-east</h3>
      <p>
        {!! $inA('super-corridor', 'Super Corridor') !!} is a planned road and township belt joining AB Road with the
        Ujjain road and the airport. The Yellow Line's first five stations opened here on 31 May 2025; tutors ride
        the metro, take an auto into the township and are registered at the gate once. Fewer tutors live on the
        corridor, so most come from Vijay Nagar or Sukhliya. {!! $inA('mahalaxmi-nagar', 'Mahalaxmi Nagar') !!}, a
        high-rise hub beside the Eastern Ring Road, is served by Malviya Nagar Chauraha, the line's current eastern end.
        Avoid office closing time at the ring road junctions.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Centre and south-west</h3>
      <p>
        {!! $inA('geeta-bhawan', 'Geeta Bhawan') !!} mixes IDA flats, cooperative group housing and private houses
        around Geeta Bhawan Square on AB Road. Autos, buses and shared vans make it easy to reach, and families often
        keep classes to the late afternoon. {!! $inA('silicon-city', 'Silicon City') !!}, in the Rau area near the
        Pithampur road, has apartments and plotted pockets; tutors arriving by train to Rajendra Nagar or Rau, or by bus
        on AB Road, finish by auto, and a slightly later evening is smoother.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-courses">What about MP Board, ISC, IB and IGCSE physics?</h2>
  <ul>
    <li><strong>MP Board.</strong> The Board of Secondary Education, Madhya Pradesh sets its own Class 12 syllabus and papers. We stay general: the tutor should work from the prescribed textbook and take any exam detail from the board's official website.</li>
    <li><strong>ISC.</strong> CISCE examines theory alongside practical and project work, and expects fuller explanation than a brief CBSE-style line. Check the tutor knows your exam year's syllabus.</li>
    <li><strong>IB Diploma.</strong> A new guide was first assessed in May 2025, arranged in five themes, A to E, without the old options or Paper 3. Two papers carry 80% and the student's own scientific investigation 20%; teaching time is 150 hours at SL and 240 at HL. The <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a> explains the change.</li>
    <li><strong>Cambridge IGCSE.</strong> Core or Extended tier. A student joining CBSE Class 11 afterwards usually needs early work on vectors, graphs and derivations.</li>
  </ul>
  <p>
    Class 11 is often the most economical year to begin, since motion, forces, energy and rotation all lean on vectors and
    graphs that Class 12 uses again; the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics
    tutor</a> page and our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a> help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-fees">What does a physics home tutor in Indore cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The tutor decides the
    rate, and it usually tracks the target, whether a board paper or JEE Advanced, the tutor's experience at that
    level, the late-evening trip to your area and the sessions per week. An online hour with the same tutor may cost
    less. You see every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="idp-book">How do you book a physics demo in Indore?</h2>
  <p>
    Tell us the class and board, whether the main aim is the board paper, JEE or NEET, the coaching days if any, your
    locality with its scheme or sector, and the evenings that are free. We send two or three matched physics tutors
    with their fees, and you pick one for a free demo class. If the fit is wrong, we set up another demo, and moving to
    a different tutor later is also free. Where no suitable tutor can travel at your hour, we suggest online or mixed
    lessons. NXTutors is based in Sector 66, Gurugram, and teaches online throughout India; the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page has more.
  </p>
  <p>
    Physics teachers who live in Indore can browse open student requests on the
    <a href="{{ url('/tuition-jobs/indore') }}">Indore tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
