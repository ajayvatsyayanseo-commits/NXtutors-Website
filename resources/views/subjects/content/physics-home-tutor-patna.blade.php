{{--
  Long-form guide for the "physics home tutor Patna" page (Classes 11 and 12,
  JEE and NEET alongside coaching, ISC/IB/IGCSE, Bihar board in general terms).
  Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/patna-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  blocks 33/18/12/7, recall share, practical scheme and record requirements,
  no calculators, transistors and logic gates out),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern, JEE
  Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (new guide first assessed
  May 2025, teaching hours, five themes, two papers 80%, investigation 20%).
  No coaching institute, school, college, society or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Patna area page exists and is active.
--}}
@php
  $ptAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ptA = function (string $slug, string $label) use ($ptAreaSlugs) {
      return in_array($slug, $ptAreaSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ptp-guide" aria-labelledby="ptpGuideTitle">
  <h2 id="ptpGuideTitle">Physics home tutor in Patna: make last week's coaching chapter stick before the batch moves on</h2>

  <p class="nx-guide__lede">
    For many senior-secondary students in Patna, physics already has a timetable: school in the morning and a coaching
    batch for JEE or NEET most evenings, with coaching institutes lining much of Boring Road and gathering again around
    Bhootnath Road. What that week rarely leaves room for is someone who sits beside the student, reads their working
    and fixes the step that keeps failing. That is the job of a home physics tutor here. We put forward two
    or three physics tutors who know the target exam and can get to your locality once coaching is over. Their fees
    are visible up front, and there is no charge for the opening demo lesson.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ptp-rules">Scoring rules</a> ·
    <a href="#ptp-role">Beside coaching</a> ·
    <a href="#ptp-doubts">The doubt notebook</a> ·
    <a href="#ptp-theory">Board theory paper</a> ·
    <a href="#ptp-lab">Practical marks</a> ·
    <a href="#ptp-state">Bihar board</a> ·
    <a href="#ptp-reach">Six localities</a> ·
    <a href="#ptp-other">IB, ISC, IGCSE</a> ·
    <a href="#ptp-fees">Fees</a> ·
    <a href="#ptp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ptp-rules">Board paper, JEE or NEET: whose scoring rules is your child training for?</h2>
  <p>
    Most chapters are shared, yet each exam pays for something different. Agree on the main target at the start;
    everything the tutor assigns for practice follows from it.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the exams Patna's Class 11 and 12 students prepare for: the physics share, the marking, and the weekly priority</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Physics share and format</th><th scope="col">Marking</th><th scope="col">Weekly priority with a tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 (042)</td><td>Theory worth 70, all 33 questions compulsory; practicals worth 30</td><td>Written answers; no calculator</td><td>Derivations, diagrams and case-based reading</td></tr>
      <tr><td>JEE Main, 2026 pattern</td><td>A third of the paper: 25 questions, of which 5 need a numerical answer</td><td>+4 right, −1 wrong</td><td>Multi-step problems under a clock, then a review of every error</td></tr>
      <tr><td>JEE Advanced</td><td>For 2026, eligibility was limited to the leading 2,50,000 JEE Main candidates</td><td>Set by the organising institute each year</td><td>Problems that combine several ideas; earlier Advanced papers</td></tr>
      <tr><td>NEET (UG) as set in 2026</td><td>45 of 180 questions, 180 of 720 marks, on pen and paper</td><td>+4 right, −1 wrong</td><td>NCERT-level accuracy and fewer guesses</td></tr>
      <tr><td>Bihar board Class 12</td><td>Set by the Bihar School Examination Board</td><td>Check the board's official website</td><td>The prescribed textbook, in the student's answer language</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The conducting body, not the school board, publishes each entrance syllabus, and it can keep topics a board has
    removed, so read the current bulletin on nta.ac.in before dropping anything. For chapter priorities, read our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">topic-by-topic JEE physics plan</a> and the list of
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics chapters that repay the most time</a>; the
    <a href="{{ url('/physics-home-tutor/jee') }}">physics tutor for JEE</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">physics tutor for NEET</a> pages explain how we match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-role">If a coaching batch already teaches the chapters, what is left for a home tutor?</h2>
  <p>
    Quite a lot, provided the tutor does not simply teach the same chapter a second time. Three jobs are usually
    missing from a coaching week:
  </p>
  <ol>
    <li><strong>Clearing the backlog.</strong> Batch classes move at the pace of the room. Problems your child could not finish, or copied from the board without understanding, pile up; the home session works through them one at a time.</li>
    <li><strong>Keeping the school paper alive.</strong> Coaching is built around entrance questions. Board marks need full derivations, labelled diagrams and practical preparation, which a home tutor can cover in one session a week.</li>
    <li><strong>Reading mock tests properly.</strong> A score says little on its own. A tutor can sort each lost mark into a concept gap, a careless slip or a question that should have been skipped, and plan the next week from that list.</li>
  </ol>
  <p>
    We weigh up <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching against a
    home tutor</a> in one article, and its <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET
    counterpart</a> does the same for medical entrance.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-doubts">What should the physics doubt notebook look like?</h2>
  <p>
    The simplest tool for a coaching student is one notebook that both the student and the tutor use. Each entry
    carries four parts: the question as it was set, the student's first attempt left uncorrected, a one-line note
    of what went wrong, and a clean solution written a few days later without looking. For the solution itself, the
    tutor should insist on the same order every time: a diagram with directions marked, the law or principle named in
    words, substitution with units on each line, and a check that the sign and size of the answer make sense.
  </p>
  <p>
    Carry this notebook, or the two most recent coaching tests, into the free demo. Someone who knows the subject
    should be able to leaf through them and name the weak step before teaching a single new idea.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-theory">Where are the 70 theory marks in CBSE Class 12 physics?</h2>
  <p>
    The 2026-27 sample paper follows the previous session's design. The fourteen NCERT chapters fall into four
    groups for marking:
  </p>
  <ul>
    <li><strong>Electricity and magnetism, 33 marks:</strong> from electrostatics to alternating current, nearly half the paper.</li>
    <li><strong>Optics with electromagnetic waves, 18 marks:</strong> the heaviest single block, where ray diagrams earn or lose marks.</li>
    <li><strong>Modern physics (dual nature, then atoms and nuclei), 12 marks:</strong> often short numericals.</li>
    <li><strong>Semiconductor electronics, 7 marks:</strong> the syllabus no longer covers transistors or logic gates, and notes that still do are outdated.</li>
  </ul>
  <p>
    Section A opens with sixteen one-mark items, twelve of them multiple-choice and four of the assertion–reason kind.
    B then asks five questions for two marks, C seven for three, D two case studies for four, and E three long answers
    for five, making 33 in all. Barely two-fifths of the marks (about 38%) go to recall; values of constants are given
    and no calculator may be used. There is one main board exam in Class 12, and its 2027 dates are awaited on
    cbse.gov.in. Derivations that come back every year are collected in our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>, and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">tutor page for Class 12 physics</a> sets out a board-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-lab">The practical exam: 30 marks that coaching rarely prepares</h2>
  <p>
    No part of physics is more predictable, and batch classes seldom touch it. The 30 marks split like this: 14 for
    two experiments (7 apiece, one per section), 5 for the record, 3 for an activity, 3 for the investigatory project
    and 5 for the viva. The record itself needs eight or more experiments with four from each section, six or more
    activities with three from each, and the report on the project.
  </p>
  <p>
    The equipment never leaves the school lab, yet a tutor at home can check every record entry for its aim, diagram and table of
    observations, go over precautions and sources of error, and run a mock viva with questions such as why several
    readings are taken or what a graph's slope represents.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-state">What about Class 12 physics on the Bihar board?</h2>
  <p>
    The Bihar School Examination Board sets its own Intermediate (Class 12) syllabus and papers and revises them from
    time to time, so we give no pattern here; the board's official website has the current version. The practical
    request is a tutor who teaches from the prescribed book, explains in Hindi or English as your child needs, and
    still trains the diagram-first habit that entrance exams reward if JEE or NEET is also on the plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-reach">Can a physics tutor reach you after coaching in these six Patna localities?</h2>
  <p>
    Class 11 and 12 students often reach home after dark, which pushes physics lessons late. Whether that hour holds
    depends on the tutor's route. Find tutors by locality on our <a href="{{ url('/city/patna') }}">Patna page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>North-west, by the river</h3>
      <p>
        {!! $ptA('boring-canal-road', 'Boring Canal Road') !!} runs as East and West Boring Canal Road through mid-rise
        colonies near Boring Road, so most visits are to a flat in a small building or a house on a colony lane; parking
        suits a two-wheeler better than a car. {!! $ptA('digha', 'Digha') !!} sits on the Ganga, where the riverfront
        expressway begins and Digha Bridge Halt, opened in 2017, has trains towards Patliputra and Patna Junction.
        Homes range from lane houses to towers with gate registration, so confirm the entry process first.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>West and east: a township hub and a metro road</h3>
      <p>
        {!! $ptA('saguna-more', 'Saguna More') !!}, on Bailey Road towards Danapur, is dominated by three-bedroom
        apartments, including large gated townships; ask whether the tutor can be given a regular visitor pass. The
        Red Line station planned there is still under construction. {!! $ptA('bhootnath-road', 'Bhootnath Road') !!}
        has one of Patna's first metro stations, open since October 2025, with trains to Zero Mile, the Patliputra bus
        terminal and Malahi Pakri. Traffic peaks when coaching classes change over, so avoid those hours.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The centre and the south-west</h3>
      <p>
        {!! $ptA('bankipur', 'Bankipur') !!}, the old civil station around the Maidan, has many families in apartment
        buildings; ask whether the gate needs the tutor's name in advance. Patna Junction is close, and the riverfront
        expressway helps tutors coming from Digha. {!! $ptA('phulwari-sharif', 'Phulwari Sharif') !!} is among the
        fastest-growing parts of the city, with its own station on the Howrah–Delhi main line. Newer apartment blocks
        register visitors; a tutor from Phulwari or Anisabad suits a regular evening slot.
      </p>
    </div>
  </div>
  <p>
    When coaching overruns, swap that evening's lesson for an online hour with the same tutor, so nobody has to
    cross the city late at night.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-other">IB, ISC or IGCSE physics, and when to begin?</h2>
  <ul>
    <li><strong>IB Diploma.</strong> Since the first exams on the current guide in May 2025, the course has been built on five lettered themes, with no options and no Paper 3. Exam papers carry 80% of the grade between them, and the rest comes from an investigation the student designs and writes alone; recommended teaching time is 150 hours for SL, 240 for HL. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics at SL and HL</a> covers it.</li>
    <li><strong>ISC.</strong> Alongside the theory paper, CISCE assesses practical work and a project, and it looks for fuller reasoning than a one-line answer. Make sure the tutor knows the syllabus for your exam year.</li>
    <li><strong>Cambridge IGCSE.</strong> Taken at Core or Extended level. A student joining Class 11 on an Indian board afterwards usually needs extra time on vectors and graphs.</li>
  </ul>
  <p>
    As for timing, starting in Class 11 usually costs least in the long run, since mechanics depends on vectors and
    graphs that return throughout Class 12. Read the <a href="{{ url('/physics-home-tutor/class-11') }}">physics tutor
    for Class 11</a> page and our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-fees">What does a physics home tutor in Patna charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, which depend on the target (board paper, JEE Main, JEE Advanced or NEET), their experience with it, how late
    the journey to your locality is, and the sessions booked per week. Online lessons with the same person can be
    cheaper. You see every fee ahead of the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ptp-book">Asking for a physics shortlist in Patna</h2>
  <p>
    Share your child's class, board and main goal (school paper, JEE or NEET), the days coaching runs, your locality
    and a landmark, and the evenings still free. A shortlist of two or three physics tutors comes back, fees included,
    and you choose whom to meet for the free demo. A poor fit simply leads to a second demo, and moving to another
    tutor later is also free. If nobody suitable can come at that hour, an online or part-online plan is offered.
    NXTutors, whose office is in Sector 66, Gurugram, also teaches online nationwide; our
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers other cities.
  </p>
  <p>
    Physics teachers based in Patna who want pupils close by will find current requests on the
    <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
