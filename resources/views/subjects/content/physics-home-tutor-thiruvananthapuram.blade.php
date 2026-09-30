{{--
  Long-form guide for the "physics home tutor Thiruvananthapuram" page
  (Classes 11 and 12, JEE and NEET, ISC/IB/IGCSE, Kerala State Board in
  general terms). Byline in config: NXTutors Academic Team. Local facts come
  only from database/seo-content/areas/thiruvananthapuram-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  already used on the Delhi physics page (CBSE Class 12: 70 + 30, 33
  questions in Sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, constants supplied, no calculators,
  transistors and logic gates out; JEE Main 2026 pattern; JEE Advanced 2026
  eligibility; NEET UG 2026 pattern; IB physics guide first assessed May 2025,
  five themes, hours, papers 80% and investigation 20%). The Kerala State
  Board and KEAM are named only, with no pattern stated. No school, society,
  hospital, campus or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Thiruvananthapuram area page exists and is
  active.
--}}
@php
  $tvmpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tvmpA = function (string $slug, string $label) use ($tvmpAreaSlugs) {
      return in_array($slug, $tvmpAreaSlugs, true)
          ? '<a href="' . e(url('/city/thiruvananthapuram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide tvmp-guide" aria-labelledby="tvmpGuideTitle">
  <h2 id="tvmpGuideTitle">Physics home tutor in Thiruvananthapuram: choose the exam you are aiming at, then the evening that works</h2>

  <p class="nx-guide__lede">
    Senior physics in Thiruvananthapuram is taught towards several different finishing lines: a CBSE or ISC board
    paper, the Kerala Higher Secondary exams, JEE, NEET, or an IB or IGCSE course with rules of its own. The chapters
    overlap; the way each exam scores them does not. Meanwhile a Plus Two or Class 12 student's evening is
    split between school, coaching and the bus home. NXTutors puts forward two or three physics tutors who know that
    exam and can reach your part of the city in the hour that is left. You see their fees first, and the opening
    lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tvmp-aim">The finishing line</a> ·
    <a href="#tvmp-blocks">CBSE theory blocks</a> ·
    <a href="#tvmp-prac">The 30 practical marks</a> ·
    <a href="#tvmp-state">State Board and KEAM</a> ·
    <a href="#tvmp-evening">Evenings by neighbourhood</a> ·
    <a href="#tvmp-intl">IB, ISC and IGCSE</a> ·
    <a href="#tvmp-eleven">Starting in Class 11</a> ·
    <a href="#tvmp-fees">Fees</a> ·
    <a href="#tvmp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tvmp-aim">Which finishing line is the physics tuition for?</h2>
  <p>
    Agree on one main target before lesson one; the weekly problem sets follow from it.
  </p>
  <ul>
    <li><strong>CBSE Class 12.</strong> A three-hour theory paper of 70 marks with 33 compulsory questions, plus 30 practical marks. Written derivations, labelled diagrams and case-based reading earn the marks.</li>
    <li><strong>JEE Main.</strong> In 2026, physics was 25 of the 75 questions in Paper 1: 20 multiple-choice and 5 with a numerical answer, scored +4 and −1. Pace on long, layered problems counts.</li>
    <li><strong>JEE Advanced.</strong> In 2026 it was open only to the 2,50,000 highest-ranked JEE Main candidates. Problems combine several ideas at once.</li>
    <li><strong>NEET (UG).</strong> In 2026, a pen-and-paper exam where physics was 45 of 180 questions, 180 of 720 marks, also +4 and −1. Accuracy on NCERT concepts outweighs risky attempts.</li>
    <li><strong>Kerala Higher Secondary, ISC, IB or IGCSE.</strong> Each has its own scheme, covered further down.</li>
  </ul>
  <p>
    NTA publishes the entrance syllabi separately from any board, and they may retain chapters a board has cut, so
    compare against the latest nta.ac.in bulletin first. For chapter priorities see our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics by topic</a> and
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics high-yield chapters</a> articles; to weigh
    coaching against tuition, read <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE:
    coaching or a home tutor?</a>
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-blocks">Where do the 70 CBSE Class 12 theory marks sit?</h2>
  <p>
    For 2026-27 the paper design is unchanged from the previous session, and the fourteen NCERT chapters group into
    four blocks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory, 2026-27: the four mark blocks and a weekly habit for each</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Marks</th><th scope="col">Habit to build every week</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics through to alternating current</td><td>33</td><td>One derivation written from a blank page, then one circuit numerical</td></tr>
      <tr><td>Optics with electromagnetic waves</td><td>18</td><td>Ray diagrams with arrows and sign convention stated</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Short numericals with units carried on each line</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Labelled diode circuits and their graphs</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The question paper runs from Section A, with 16 one-mark items (12 multiple-choice, 4 assertion–reason), through
    five two-mark and seven three-mark questions in B and C, to two four-mark case studies in D and three five-mark
    long answers in E. Physical constants are given and calculators are not allowed. Recall earns only about 38% of
    the marks, so dictated notes cover less of the paper than they seem to. Any guidebook with a transistor or logic-gate chapter
    predates the current syllabus. Class 12 has one main board exam, and the 2027 date sheet
    is not yet out. Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics
    strategies</a> list the derivations that keep returning, and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-prac">How are the 30 practical marks earned?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics practical, 30 marks: components and what can be prepared away from the lab</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">Preparation at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Two experiments, one from each section</td><td>7 each</td><td>Aim, circuit or ray diagram and observation table checked in advance</td></tr>
      <tr><td>Practical record</td><td>5</td><td>At least eight experiments (four per section), six activities (three per section) and the project report</td></tr>
      <tr><td>One activity</td><td>3</td><td>The purpose of the activity explained in two lines</td></tr>
      <tr><td>Investigatory project</td><td>3</td><td>A topic the student can explain end to end</td></tr>
      <tr><td>Viva on all of the above</td><td>5</td><td>Mock questions: why several readings, what a graph's slope means</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The apparatus stays in the school laboratory, but these are some of the most controllable marks in the subject,
    and a tutor who holds a mock viva a fortnight before the practical exam turns nervous answers into prepared ones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-state">What about Kerala State Board physics and KEAM?</h2>
  <p>
    Many students in the city study physics on the Kerala State Board through Plus One and Plus Two, from SCERT
    Kerala textbooks. We do not describe the Higher Secondary physics paper here; the state's examination
    authorities publish the scheme, and the school will have the current version. For matching, the key question is
    whether the tutor teaches from the state textbook and the board's own questions, rather than from NCERT alone.
  </p>
  <p>
    Kerala's state engineering entrance, KEAM, is run by the office of the Commissioner for Entrance Examinations;
    check cee.kerala.gov.in for the current scheme before building a plan around it. A student preparing for KEAM or
    JEE alongside the state board needs a tutor who can show, chapter by chapter, where the entrance asks for more
    depth than the textbook.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-evening">Will a late physics slot hold in your neighbourhood?</h2>
  <p>
    Senior students often get home after coaching, so physics sessions start late, and without a metro the tutor's
    bus or scooter route decides whether that hour holds. Four neighbourhoods from different zones show the range;
    browse the rest on the <a href="{{ url('/city/thiruvananthapuram') }}">Thiruvananthapuram page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>A crossroads and a hillside suburb</h3>
      <p>
        {!! $tvmpA('kesavadasapuram', 'Kesavadasapuram') !!} is where NH 66 meets MC Road, which begins here and runs
        north. Two main roads make it easy to reach by bus from the centre, from the Ulloor side or along MC Road, but
        the junction is busiest at school and office hours, so start after the evening peak.
        {!! $tvmpA('vattiyoorkavu', 'Vattiyoorkavu') !!}, higher ground in the north-east crossed by the Killi and
        Karamana rivers, has buses to East Fort and autos at the junction; villas usually mean a doorstep visit, while
        gated communities need a gate entry.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The highway north and the southern edge</h3>
      <p>
        {!! $tvmpA('sreekaryam', 'Sreekaryam') !!} sits on NH 66 between Kazhakkoottam and the centre, so buses from
        both sides stop there; the highway is crowded at school, college and IT-shift times, and later evenings suit
        it. {!! $tvmpA('nemom', 'Nemom') !!}, on the southern edge of the corporation area, is mostly independent
        houses and villas along NH 66; its station was renamed Thiruvananthapuram South in 2024. Tutors from Karamana
        or Poojappura have a direct route, with an auto for the last stretch.
      </p>
    </div>
  </div>
  <p>
    Where coaching finishes late twice a week, moving one of those sessions online with the same tutor spares
    everyone a night journey.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-intl">What should IB, ISC and IGCSE families check?</h2>
  <p>
    IB students since the May 2025 exams follow a rewritten physics guide organised as five themes, lettered A to E,
    with no Paper 3 and no options. Suggested teaching time is 150 hours for SL and 240 for HL. The two written papers
    together weigh 80%; the remaining 20% is a scientific investigation that has to be the student's work alone.
    Older revision books describe the previous course, so look at the publication year. Read our
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a> for the detail. ISC physics pairs
    a CISCE theory paper with practicals and a project, and rewards fuller explanation than a CBSE one-liner. IGCSE
    students take Core or Extended; anyone moving on to CBSE Class 11 afterwards benefits from early practice with
    vectors and graphs. Tutors for these courses are fewer, so mention the course in your first message.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-eleven">Is Class 11 or Plus One the right time to start?</h2>
  <p>
    It is usually the point where help costs least. The first year of senior physics depends on tools, resolving
    vectors, reading a slope, handling a rate, that the maths class may not have taught yet, and the second year
    applies the same tools to fields and circuits. A few months spent making those tools automatic prevents a
    difficult repair job in the board year. If the stream is still undecided, the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> helps; the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page sets out the year, and the
    national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page explains our approach in general.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-fees">How are physics tuition fees set in Thiruvananthapuram?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor quotes their
    own fee, which reflects the target exam, their experience with it, the evening trip to your neighbourhood and
    how many sessions you book. The same tutor may charge less online. Every fee is visible before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-thiruvananthapuram') }}">Thiruvananthapuram fees guide</a> explains
    more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmp-book">What do we need from you for a physics demo?</h2>
  <p>
    Send the class and board, the target (board, JEE, NEET or KEAM), your neighbourhood with its nearest junction, and
    which evenings are free once school and coaching are over. A shortlist of two or three physics tutors follows,
    each with a fee, and one of them gives a free demo class. A poor fit means another demo, and a later switch is
    free too. Our office is in Sector 66, Gurugram, and online classes run India-wide; the
    <a href="{{ url('/blog/thiruvananthapuram-tuition-guide') }}">Thiruvananthapuram tuition guide</a> covers the
    city's zones.
  </p>
  <p>
    Physics teachers based in the city will find open student requests on the
    <a href="{{ url('/tuition-jobs/thiruvananthapuram') }}">Thiruvananthapuram tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
