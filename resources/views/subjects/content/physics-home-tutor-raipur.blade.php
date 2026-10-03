{{--
  Long-form guide for the "physics home tutor Raipur" page (Classes 11 and 12,
  board papers, JEE and NEET, ISC/IB/IGCSE, Chhattisgarh board in general
  terms). Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/raipur-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  unit blocks 33/18/12/7, recall share, practical scheme and record
  requirements, no calculators, transistors and logic gates out),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern, JEE
  Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (guide first assessed May
  2025, teaching hours, five themes, papers 80%, investigation 20%).
  State board: Chhattisgarh Board of Secondary Education, office in Raipur,
  conducts the Higher Secondary (Class 12) examination -- per
  https://cgbse.nic.in/ (fetched 3 Oct 2026). No CGBSE exam pattern is stated.
  No coaching institute, school, college, society or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Raipur area page exists and is active.
--}}
@php
  $rppSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $rppA = function (string $slug, string $label) use ($rppSlugs) {
      return in_array($slug, $rppSlugs, true)
          ? '<a href="' . e(url('/city/raipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide rpp-guide" aria-labelledby="rppGuideTitle">
  <h2 id="rppGuideTitle">Physics home tutor in Raipur: someone at the desk who reads your child's working, line by line</h2>

  <p class="nx-guide__lede">
    Senior physics is the subject where a Raipur student can attend every class, copy every solution and still freeze
    on a fresh problem. Lectures, whether at school or in a coaching batch, explain the idea; what they seldom do is
    watch one student attempt a problem and point to the exact line where it went wrong. That is what a home physics
    tutor is for. Tell us the class, the board and the target, whether the Class 12 paper, JEE or NEET, and we put
    forward two or three physics tutors who teach that target and can reach your part of the city at a workable hour.
    Fees are listed in advance and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#rpp-why">Why one-to-one</a> ·
    <a href="#rpp-three">Three exams compared</a> ·
    <a href="#rpp-board">CBSE theory paper</a> ·
    <a href="#rpp-lab">The 30 practical marks</a> ·
    <a href="#rpp-method">A solving routine</a> ·
    <a href="#rpp-cg">Chhattisgarh board</a> ·
    <a href="#rpp-intl">IB, ISC, IGCSE</a> ·
    <a href="#rpp-route">Six localities</a> ·
    <a href="#rpp-eleven">Start in Class 11</a> ·
    <a href="#rpp-fee">Fees</a> ·
    <a href="#rpp-request">Requesting tutors</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="rpp-why">What does one-to-one physics give that a classroom cannot?</h2>
  <p>
    A physics student usually loses marks in one of three places, and each is easier to see across a desk than from
    the front of a room:
  </p>
  <ul>
    <li><strong>The setup.</strong> Forces drawn in the wrong direction, a sign convention dropped halfway, a circuit redrawn incorrectly. A tutor watching the first two lines catches it before the algebra starts.</li>
    <li><strong>The pile of unfinished problems.</strong> If your child attends a coaching batch, its pace is set by the room. The questions your child skipped or copied without understanding keep collecting, and the home hour is where they get cleared, one at a time.</li>
    <li><strong>The written paper.</strong> Entrance practice is all about the final answer. A board paper also wants derivations, labelled diagrams and practical knowledge, which need a different kind of rehearsal.</li>
  </ul>
  <p>
    The tutor's job is not to repeat lectures. A good one starts each session from your child's own notebook. We
    compare <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor for
    JEE</a> in one article and do the same for <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET
    preparation</a> in another.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-three">Board, JEE Main or NEET: how does physics count in each?</h2>
  <p>
    Most chapters are common to all three, but the rules of scoring are not. Decide the main target with the tutor in
    the first week, because it decides what gets practised.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in three exams Raipur students in Class 12 commonly face, compared feature by feature</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">CBSE Class 12 (042)</th><th scope="col">JEE Main, 2026 pattern</th><th scope="col">NEET (UG), 2026 pattern</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics in the exam</td><td>Theory paper of 70 marks; practical exam of 30</td><td>25 of the 75 questions on Paper 1</td><td>45 of 180 questions, worth 180 of 720 marks</td></tr>
      <tr><td>Answer format</td><td>Written answers, all 33 questions compulsory</td><td>20 with options, 5 needing a numerical value</td><td>Options marked with a pen on paper</td></tr>
      <tr><td>Scoring</td><td>Step marks for working; no calculator</td><td>+4 for right, −1 for wrong</td><td>+4 for right, −1 for wrong</td></tr>
      <tr><td>What to train</td><td>Derivations, ray and circuit diagrams, case-based reading</td><td>Long problems against the clock, then an error review</td><td>NCERT-level precision and fewer blind guesses</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    JEE Advanced sits above JEE Main; for 2026, only the leading 2,50,000 candidates from JEE Main were eligible.
    Entrance syllabi come from the conducting body, not from CBSE, and may keep chapters the board has dropped, so read
    the latest bulletin on nta.ac.in before removing anything from the plan. For priorities by chapter, see the
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic plan</a> and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>; our
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages describe the matching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-board">How is the 70-mark CBSE physics theory paper put together?</h2>
  <p>
    The sample paper for 2026-27 copies last session's design. Marks are spread over four groups of chapters, and the
    first of them is nearly half the paper:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics, 2026-27: chapter groups by marks and what tends to lose them</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Marks</th><th scope="col">Where marks slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics through to alternating current</td><td>33</td><td>Field and potential confused; phasor reasoning skipped</td></tr>
      <tr><td>Optics and electromagnetic waves</td><td>18</td><td>Ray diagrams without arrows or with the wrong sign convention</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Short numericals rushed, units left out</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Studying transistors and logic gates from old notes, though they are no longer in the syllabus</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Section A carries sixteen single-mark questions, of which twelve offer options and four set an assertion against a
    reason. Section B has five questions at two marks, C has seven at three, D has two case studies at four, and E has
    three long answers at five. Only around 38% of the marks reward straightforward recall; the values of constants are
    printed, and calculators stay outside. Class 12 has one main board exam, and the 2027 timetable will appear on
    cbse.gov.in. Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>
    gather the derivations that keep returning, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12
    physics tutor</a> page shows a full board-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-lab">Can 30 practical marks really be prepared at home?</h2>
  <p>
    Much of them, yes. The split is fixed: two experiments, one from each section, at 7 marks apiece; 5 for the
    practical record; 3 for an activity; 3 for the investigatory project; and 5 for the viva. The record must show at
    least eight experiments, four per section, at least six activities, three per section, and the project report.
  </p>
  <p>
    Apparatus stays in the school laboratory, yet a tutor at the kitchen table can go through each record entry for aim,
    diagram and observation table, rehearse precautions and sources of error, and fire viva questions such as what the
    slope of a graph stands for or why a reading is repeated. Few coaching batches spend time on any of this.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-method">What routine should every written solution follow?</h2>
  <p>
    A tutor should insist on one order for every problem until it becomes automatic:
  </p>
  <ol>
    <li><strong>Sketch first.</strong> A diagram with directions, charges or rays marked.</li>
    <li><strong>Name the principle.</strong> One line in words: conservation of energy, Kirchhoff's loop rule, the lens formula.</li>
    <li><strong>Substitute with units.</strong> Every quantity carries its unit on every line.</li>
    <li><strong>Sanity check.</strong> Is the sign right, and is the size of the answer believable?</li>
  </ol>
  <p>
    Alongside this, keep an error log: the question as set, your child's first attempt left uncorrected, a one-line
    note on the mistake, and a clean solution written a few days later from memory. Bring that log, or two recent test
    papers, to the free demo. A capable tutor will find the weak step by reading them, before teaching anything.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-cg">Higher Secondary physics on the Chhattisgarh board</h2>
  <p>
    The Chhattisgarh Board of Secondary Education, based in Raipur, conducts the Higher Secondary examination at the
    end of Class 12. It sets its own syllabus and papers and may revise them, so this page gives no CGBSE pattern;
    check cgbse.nic.in for the current version. When you ask us for a tutor, mention the prescribed book, the language
    your child writes answers in, and whether JEE or NEET is also planned. A tutor can then follow the board's book
    while still drilling the diagram-first habit that entrance papers reward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-intl">ISC, IB Diploma and IGCSE physics</h2>
  <ul>
    <li><strong>ISC.</strong> CISCE pairs the theory paper with practical work and a project, and it expects reasoning written out in full rather than a single-line answer. Check that the tutor knows the syllabus for your exam year.</li>
    <li><strong>IB Diploma.</strong> The current guide was first examined in May 2025. It is organised as five lettered themes, and the old options and Paper 3 are gone. Written papers carry 80% of the grade, and a scientific investigation designed and written by the student alone carries 20%. Recommended teaching is 150 hours at SL and 240 at HL. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a> explains it.</li>
    <li><strong>Cambridge IGCSE.</strong> Entered at Core or Extended level. A student moving onto an Indian board in Class 11 usually needs extra work on vectors and graphs.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-route">Evening physics classes in six Raipur localities</h2>
  <p>
    Class 11 and 12 students often get home late, which pushes physics into the evening, exactly when the main roads
    are busiest. Whether a slot holds depends on where the tutor starts from. See every locality on our
    <a href="{{ url('/city/raipur') }}">Raipur page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Station side</h3>
      <p>
        {!! $rppA('gudhiyari', 'Gudhiyari') !!} lies close to Raipur Junction, so a tutor travelling by train arrives
        easily, and those living in Samta Colony, Kota or Devendra Nagar can ride over. Its inner lanes suit a
        two-wheeler. {!! $rppA('devendra-nagar', 'Devendra Nagar') !!} is organised in numbered sectors, mostly houses
        and builder floors with their own door; the sector, house number and a landmark are enough for a first visit.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The expressway end</h3>
      <p>
        {!! $rppA('fafadih', 'Fafadih') !!} is where the expressway to Nava Raipur starts, which makes it simple to
        reach from Shankar Nagar and Telibandha. BRTS buses between the railway station and Nava Raipur also pass this
        side of the city. Main-road buildings mix homes with shops and offices, so ask whether visitors sign in, and
        give the tutor a landmark.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East, by the lake and Vidhan Sabha Road</h3>
      <p>
        {!! $rppA('shankar-nagar', 'Shankar Nagar') !!} is well served by autos and cabs; apartment gates usually log
        visitors, while builder floors and houses allow doorstep arrival. In
        {!! $rppA('telibandha', 'Telibandha') !!}, the lakefront promenade draws crowds in the evening, so allow a margin
        near it. {!! $rppA('mowa', 'Mowa') !!} reaches Raipur Junction by Mandi Road; office-hour traffic on Vidhan
        Sabha Road is the thing to plan around.
      </p>
    </div>
  </div>
  <p>
    If a late class keeps slipping, move one session a week online with the same tutor, so that nobody crosses the
    city late at night.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-eleven">Why is Class 11 the easiest year to begin?</h2>
  <p>
    Mechanics in Class 11 depends on vectors, graphs and calculus-style reasoning that come back throughout Class 12,
    and in JEE and NEET alike. A student who starts tuition in Class 11 builds that base once; one who starts in the
    board year has to rebuild it under pressure. Read the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11
    physics tutor</a> page and our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a
    stream after Class 10</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-fee">What do physics home tutors in Raipur charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates belong to the
    tutors. They usually reflect the target (board, JEE Main, JEE Advanced or NEET), the tutor's experience with it,
    how late in the evening the trip to your home falls, and how many sessions you take. Online sessions with the same
    tutor may be priced lower. You see each fee before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-raipur') }}">Raipur fees article</a> has more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="rpp-request">Requesting physics tutors in Raipur</h2>
  <p>
    Write in with the class, the board, the main goal, any coaching days, your locality and a landmark, and the
    evenings still free. You receive two or three physics tutors with their fees and choose whom to meet for the free
    demo. A poor fit leads to a second demo, and swapping tutor later costs nothing. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. If nobody suitable can come
    at your hour, we offer an online or part-online plan; NXTutors has its office in Sector 66, Gurugram, and teaches
    online in every state. The national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers
    other cities, and for the other sciences see <a href="{{ url('/chemistry-home-tutor-raipur') }}">chemistry</a> and
    <a href="{{ url('/maths-home-tutor-raipur') }}">maths</a> tutors in Raipur.
  </p>
  <p>
    Physics teachers in Raipur looking for students close by can browse open requests on
    <a href="{{ url('/tuition-jobs/raipur') }}">Raipur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
