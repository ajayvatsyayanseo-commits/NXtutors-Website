{{--
  Long-form guide for the "physics home tutor Dehradun" page (Classes 11 and
  12, JEE and NEET alongside coaching, ISC/IB/IGCSE, the Uttarakhand board in
  general terms). Byline in config: NXTutors Academic Team. Local facts come
  only from database/seo-content/areas/dehradun-research.json (zone_facts and
  area "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  JEE Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (new guide first assessed
  May 2025, teaching hours, five themes, two papers 80%, investigation 20%).
  Uttarakhand Board of School Education: name, Intermediate examination,
  syllabus and question banks from https://ubse.uk.gov.in/ (fetched 3 Oct
  2026); no pattern given. No coaching institute, school, college, society or
  people's names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Dehradun area page exists and is active.
--}}
@php
  $ddAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ddA = function (string $slug, string $label) use ($ddAreaSlugs) {
      return in_array($slug, $ddAreaSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ddp-guide" aria-labelledby="ddpGuideTitle">
  <h2 id="ddpGuideTitle">Physics home tutor in Dehradun: the person who reads your child's working after the coaching batch has moved on</h2>

  <p class="nx-guide__lede">
    For a Class 11 or 12 student in Dehradun, physics often has more teachers than hours: school in the morning, a JEE
    or NEET batch most evenings, and a pile of printed problem sheets in between. What is usually missing is one
    person who looks at the student's own working, line by line, and finds the step that keeps breaking. That is the
    work a home physics tutor does well. NXTutors puts forward two or three physics tutors who know the exam your
    child is aiming at and can reach your part of the valley after coaching ends. Their fees are listed before you
    meet them, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ddp-target">Pick the target</a> ·
    <a href="#ddp-gap">What coaching leaves</a> ·
    <a href="#ddp-log">The error log</a> ·
    <a href="#ddp-theory">CBSE theory</a> ·
    <a href="#ddp-lab">The practical</a> ·
    <a href="#ddp-ubse">UBSE Intermediate</a> ·
    <a href="#ddp-routes">Six localities</a> ·
    <a href="#ddp-intl">IB, ISC, IGCSE</a> ·
    <a href="#ddp-when">When to start</a> ·
    <a href="#ddp-cost">Fees</a> ·
    <a href="#ddp-send">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ddp-target">School board, JEE or NEET: which exam sets the rules for your child's physics?</h2>
  <p>
    The chapters overlap a great deal, but each exam rewards something different, and practice should follow the one
    that matters most. Settle that at the first meeting.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the exams Dehradun's senior students sit: size, scoring and the habit each one rewards</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Physics in it</th><th scope="col">Scoring</th><th scope="col">Habit it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 (042)</td><td>A 70-mark theory paper of 33 compulsory questions, with 30 marks of practicals</td><td>Written answers, no calculator</td><td>Derivations, diagrams and reading a case passage carefully</td></tr>
      <tr><td>JEE Main, as set in 2026</td><td>One third of the paper: 25 questions, 5 of them with numerical answers</td><td>+4 for a correct answer, −1 for a wrong one</td><td>Multi-step problems against the clock, then a review of each slip</td></tr>
      <tr><td>JEE Advanced</td><td>For 2026, open only to the leading 2,50,000 JEE Main candidates</td><td>Fixed each year by the organising institute</td><td>Problems that join several ideas; past Advanced papers</td></tr>
      <tr><td>NEET (UG), 2026 pattern</td><td>45 of 180 questions, worth 180 of 720 marks, on pen and paper</td><td>+4 right, −1 wrong</td><td>Accuracy at NCERT level and fewer blind guesses</td></tr>
      <tr><td>UBSE Intermediate</td><td>Set by the Uttarakhand Board of School Education</td><td>See ubse.uk.gov.in</td><td>The prescribed book, in the language the student writes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The entrance syllabus comes from the conducting body, not from the school board, and it may keep chapters a board
    has dropped, so read the current bulletin on nta.ac.in before striking anything off. For chapter priorities, see
    the <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise plan</a> and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>; how we match for each
    exam is on the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages. Families focused on one entrance
    exam can also read the <a href="{{ url('/jee-home-tutor-dehradun') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-dehradun') }}">NEET</a> home tutor pages for Dehradun.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-gap">The batch already covers the syllabus. What is left for a tutor at home?</h2>
  <p>
    Plenty, as long as the tutor does not teach the same chapter twice. A coaching week usually leaves three gaps:
  </p>
  <ul>
    <li><strong>The unsolved pile.</strong> A batch moves at the speed of the room. Questions your child skipped, or copied down without following, build up week after week, and a home session can clear them one by one.</li>
    <li><strong>The board paper.</strong> Coaching is shaped around entrance questions. Board marks still depend on full derivations, labelled diagrams and practical preparation, which one home session a week can keep on track.</li>
    <li><strong>The mock test that nobody reads.</strong> A score alone teaches little. A tutor can sort every lost mark into a gap in the concept, a careless error or a question that should have been left, and build next week from that list.</li>
  </ul>
  <p>
    We compare <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor
    for JEE</a> in one article and do the same for medical entrance in the
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET version</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-log">How should a physics error log be kept?</h2>
  <p>
    The most useful tool for a coaching student is a single notebook shared with the tutor. Every entry has four parts:
    the problem exactly as set, the student's first attempt left as it was, one line saying what went wrong, and a
    clean solution written several days later without looking back. For the clean solution, the tutor should insist on
    a fixed order: a diagram with directions marked, the governing law stated in words, substitution with units on
    every line, and a final check that the answer's sign and size are sensible.
  </p>
  <p>
    Bring this notebook, or the last two coaching tests, to the free demo. A tutor who knows the subject should be
    able to turn a few pages and point to the weak step before teaching anything new.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-theory">CBSE Class 12 physics: where do the 70 theory marks come from?</h2>
  <p>
    The 2026-27 sample paper keeps last session's design. The fourteen NCERT chapters are marked in four blocks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory, 2026-27: the four marking blocks and what a home tutor should check in each</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Marks</th><th scope="col">Check at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics through to alternating current</td><td>33</td><td>Field and circuit diagrams drawn before any formula appears</td></tr>
      <tr><td>Optics and electromagnetic waves</td><td>18</td><td>Ray diagrams complete with arrows and sign convention</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Short numericals with powers of ten handled correctly</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Notes free of transistors and logic gates, which have left the syllabus</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Section A carries sixteen one-mark questions, twelve multiple-choice and four assertion–reason. Section B has five
    two-mark questions, C seven of three marks, D two case studies of four, and E three long answers of five: 33
    questions in total. Only about 38% of the marks reward recall; constants are supplied and calculators are not
    allowed. Class 12 has one main board exam, and the 2027 dates are awaited on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> collect the derivations
    that keep returning, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page
    lays out a board-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-lab">Thirty practical marks that a coaching batch never touches</h2>
  <p>
    The practical is the most predictable part of physics. Of its 30 marks, two experiments carry 14 (7 each, one
    from each section), the record 5, an activity 3, the investigatory project 3 and the viva 5. The record must
    contain at least eight experiments, four from each section, and at least six activities, three from each, plus the
    project report.
  </p>
  <p>
    The apparatus stays in the school laboratory, but a tutor at home can still check each record entry for an aim,
    a diagram and a proper observation table, revise precautions and sources of error, and hold a practice viva with
    questions such as why several readings are taken or what the slope of a graph tells you.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-ubse">Physics in the Uttarakhand board's Intermediate year</h2>
  <p>
    The Uttarakhand Board of School Education conducts the Intermediate examination at Class 12 and publishes its
    syllabus, question banks and model answer sheets on ubse.uk.gov.in. It sets and revises its own scheme, so we give
    no paper pattern here. Ask for a tutor who works from the prescribed book, explains in Hindi or English as your
    child prefers, and still trains the diagram-first method that JEE and NEET reward if an entrance exam is also in
    view. Our <a href="{{ url('/uttarakhand-board-tutor-dehradun') }}">Uttarakhand board tutor</a> page covers the
    board in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-routes">Can a physics tutor still reach you after coaching? Six Dehradun localities</h2>
  <p>
    Senior students often get home after dark, which pushes physics late into the evening, and whether that hour
    holds depends on the tutor's route. The proposed Metro Neo has not been approved for construction, so every
    tutor comes by road. Find tutors by locality on our <a href="{{ url('/city/dehradun') }}">Dehradun page</a>.
  </p>
  <dl>
    <dt><strong>{!! $ddA('rajpur-road', 'Rajpur Road') !!}</strong></dt>
    <dd>Reachable from most of the city, but the lower stretch near the centre is crowded during evening shopping hours. A tutor who arrives before that rush, or one living further up the road, keeps a late slot steady.</dd>
    <dt><strong>{!! $ddA('jakhan', 'Jakhan') !!}</strong></dt>
    <dd>Larger family homes and apartments on the upper road. Tutors from Kishanpur or Canal Road avoid the centre altogether; complexes register visitors at the gate.</dd>
    <dt><strong>{!! $ddA('dalanwala', 'Dalanwala') !!}</strong></dt>
    <dd>Independent houses on quiet lanes, so the tutor walks up to the door and parks outside. A lane landmark is enough for the first visit.</dd>
    <dt><strong>{!! $ddA('kishanpur', 'Kishanpur') !!}</strong></dt>
    <dd>Between the Rajpur Road and Sahastradhara Road corridors, so it draws tutors from both. Main roads nearby fill after office hours; a weekday slot fixed in advance is easier to keep.</dd>
    <dt><strong>{!! $ddA('raipur-road', 'Raipur Road') !!}</strong></dt>
    <dd>Colonies of houses and flats east of the Sahastradhara crossing. Fewer tutors live close by further out, so look to Dalanwala or Sahastradhara Road, or online for specialist JEE work.</dd>
    <dt><strong>{!! $ddA('jogiwala', 'Jogiwala') !!}</strong></dt>
    <dd>A junction area linking the Haridwar highway and the ring road. Tutors from Nehru Colony or Haridwar Road arrive without crossing the centre; avoid office hours at the chowk.</dd>
  </dl>
  <p>
    When a coaching class runs late, swap that evening's session for an online hour with the same tutor, so nobody
    crosses the valley late at night. The zone guides for
    <a href="{{ url('/city/dehradun/zone/rajpur-road-dalanwala') }}">Rajpur Road and Dalanwala</a> and
    <a href="{{ url('/city/dehradun/zone/vasant-vihar-chakrata-road') }}">Vasant Vihar and Chakrata Road</a> add more
    local timing advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-intl">IB, ISC and IGCSE physics: what should the tutor know?</h2>
  <ul>
    <li><strong>IB Diploma.</strong> Since the first exams under the current guide in May 2025, the course runs on five lettered themes, with no options and no Paper 3. The two exam papers together carry 80% of the grade; the remaining 20% is an investigation the student designs and writes alone. Recommended teaching time is 150 hours at SL and 240 at HL. See our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.</li>
    <li><strong>ISC.</strong> CISCE assesses practical work and a project alongside the theory paper, and expects reasoning that goes beyond a one-line answer. Confirm the tutor teaches the syllabus for your child's exam year.</li>
    <li><strong>Cambridge IGCSE.</strong> Sat at Core or Extended level. A student moving into Class 11 on an Indian board afterwards usually needs extra work on vectors and graphs.</li>
  </ul>
  <p>
    These specialists are fewer than CBSE tutors, so mention the course in your first message; an online specialist can
    fill the gap when no one nearby is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-when">Is Class 11 too early to start?</h2>
  <p>
    Usually it is the easiest time to start. Mechanics rests on vectors and graphs, and both come back again and
    again in Class 12, so a gap left in the first term grows into a problem in the board year. See the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page and our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a Class 11 stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-cost">What does a physics home tutor in Dehradun charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets a rate,
    shaped by the target (board paper, JEE Main, JEE Advanced or NEET), experience with that exam, how late the trip
    to your locality is and how many sessions you book. Online lessons with the same tutor may cost less. Every fee is
    shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddp-send">What should you tell us to get a physics shortlist?</h2>
  <p>
    Send the class and board, the main goal (board paper, JEE or NEET), the days the coaching batch meets, your
    locality and a landmark, and the evenings that are still free. We return two or three physics tutors with their
    fees, and you choose one to meet for a free demo. A poor fit simply means a second demo, and moving to a different
    tutor later is free too. If no suitable tutor can reach you at that hour, we offer an online or part-online plan.
    NXTutors has its office in Sector 66, Gurugram, and teaches online across the country; the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers other cities, and the
    <a href="{{ url('/maths-home-tutor-dehradun') }}">maths home tutor in Dehradun</a> page pairs well for JEE students.
  </p>
  <p>
    Physics teachers based in Dehradun who would like students close by can see current requests on the
    <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
