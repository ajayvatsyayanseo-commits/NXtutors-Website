{{--
  Long-form guide for the "physics home tutor Chennai" page (Classes 11 and
  12, the Tamil Nadu State Board described generally, JEE and NEET,
  ISC/IB/IGCSE). Byline in config: NXTutors Academic Team. Local facts come
  only from database/seo-content/areas/chennai-research.json (zone_facts and
  area "about" texts); Metro Phase II is described only as under construction.
  Exam facts reuse the checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  blocks 33/18/12/7, recall share, practical scheme and record requirements,
  no calculators, transistors and logic gates out),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern, JEE
  Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (new guide first assessed
  May 2025, teaching hours, five themes, papers 80%, investigation 20%). No
  state exam pattern is given. No school, college, institute, society or
  people's names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Chennai area page exists and is active.
--}}
@php
  $chAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $chA = function (string $slug, string $label) use ($chAreaSlugs) {
      return in_array($slug, $chAreaSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide chp-guide" aria-labelledby="chpGuideTitle">
  <h2 id="chpGuideTitle">Physics home tutor in Chennai: one subject, several exams, and an evening slot that has to hold</h2>

  <p class="nx-guide__lede">
    By Class 11, physics stops being one subject with one paper. A Chennai student may be preparing for the Tamil
    Nadu State Board higher secondary exams, CBSE or ISC Class 12, JEE or NEET, or an IB or IGCSE course, and often
    two of these at once. Each asks for different practice, and the free hours after school and coaching are few.
    NXTutors picks out two or three physics tutors who know that exam and can get to your part of the city at the
    hour you have free. Their fees are on screen before any meeting, and your first class together costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#chp-exams">Which exam</a> ·
    <a href="#chp-state">State Board students</a> ·
    <a href="#chp-theory">CBSE theory marks</a> ·
    <a href="#chp-lab">The 30 practical marks</a> ·
    <a href="#chp-entrance">JEE and NEET</a> ·
    <a href="#chp-evening">Evening lessons by area</a> ·
    <a href="#chp-intl">IB, ISC and IGCSE</a> ·
    <a href="#chp-start">Starting in Class 11</a> ·
    <a href="#chp-fees">Fees</a> ·
    <a href="#chp-book">After you ask</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="chp-exams">Whose rules is your child's physics really playing by?</h2>
  <p>
    The chapters overlap a great deal; the way marks are won does not. Before the first session, agree on the main
    target, because it decides what the tutor sets every week:
  </p>
  <ul>
    <li><strong>A board paper</strong> (State Board, CBSE or ISC) rewards complete written answers: derivations from a labelled figure, units on every line and the reasoning stated.</li>
    <li><strong>JEE</strong> rewards speed and depth on multi-concept problems, with negative marking for wrong answers.</li>
    <li><strong>NEET</strong> rewards accuracy on NCERT-level concepts at pace, and punishes guessing.</li>
    <li><strong>IB or IGCSE</strong> rewards data handling, explanation and, at IB, an independent investigation.</li>
  </ul>
  <p>
    Most students have a board paper plus one entrance test, and a good tutor makes the two support each other rather
    than compete for the same evening.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-state">What should a State Board physics student look for in a tutor?</h2>
  <p>
    The Tamil Nadu State Board sets its own higher secondary syllabus and textbooks, and the Class 12 public
    examination is conducted by the state. We do not describe that paper's design on this page; the board publishes
    it, and schemes can change between sessions. Choose a tutor who teaches from the state textbook your child uses,
    works through the board's model and past papers, and, for a student also writing JEE or NEET, checks NTA's
    syllabus against the state book at the start of Class 11 so that any missing topics are planned in early.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-theory">Where do the 70 theory marks sit in CBSE Class 12 physics?</h2>
  <p>
    For 2026-27 the design is unchanged from last session: a three-hour paper of 33 compulsory questions, constants
    printed on the paper, calculators not permitted.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory, 2026-27: the four mark blocks and how a tutor should use each</caption>
    <thead>
      <tr><th scope="col">Block of chapters</th><th scope="col">Marks</th><th scope="col">How to practise</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics through to alternating current</td><td>33</td><td>Circuit and field numericals every week, plus one derivation from a figure</td></tr>
      <tr><td>Electromagnetic waves and optics</td><td>18</td><td>Ray diagrams drawn to rule, with sign conventions written out</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Short numericals done quickly and checked for units</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Diode characteristics and circuits explained in words</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The sections run A to E: sixteen one-mark questions, of which twelve are multiple-choice and four
    assertion–reason; five two-mark answers; seven three-mark answers; two four-mark case studies; and three
    five-mark long answers. Recall earns only around 38% of the marks, so a tutor who mostly dictates notes is
    preparing for a minority of the paper. Transistors and logic gates are no longer in the syllabus, and older
    guides that include them should be set aside. Class 12 has a single main board exam; 2027 dates are awaited. Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12
    physics strategies</a> post lists the derivations that keep returning, and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page explains how we match for the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-lab">How are the 30 practical marks earned, and what can be prepared at home?</h2>
  <p>
    The exam day itself brings 14 marks from two experiments, 7 each, one drawn from each section of the list. The
    rest is spread out: 5 for the record file, 3 for an activity, 3 for the investigatory project and 5 for the viva.
    CBSE expects the file to hold a minimum of eight experiments and six activities, split evenly between the two
    sections, along with the project report.
  </p>
  <p>
    Equipment lives in the school lab, but most viva and record preparation does not need it. At home a tutor can go
    through each entry for its aim, circuit or ray diagram and observation table, talk through sources of
    error and precautions, and run a mock viva built on the reasons behind the readings: why several readings are
    taken, what a graph's slope represents, what would change with a thicker wire. That practice turns the viva into
    marks rather than nerves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-entrance">What do JEE and NEET ask of physics?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the 2026 entrance exams: format, share of the paper and the tutoring focus</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Physics in the 2026 paper</th><th scope="col">Tutoring focus</th></tr>
    </thead>
    <tbody>
      <tr><td>JEE (Main) Paper 1</td><td>Computer-based; physics was one-third of the 75 questions: twenty with options and five needing a numerical answer; +4 right, −1 wrong</td><td>Multi-step problems against the clock, with honest review of every mock</td></tr>
      <tr><td>JEE (Advanced)</td><td>Registration in 2026 limited to the first 2,50,000 successful JEE (Main) candidates</td><td>Problems that combine several ideas; past Advanced papers</td></tr>
      <tr><td>NEET (UG)</td><td>Pen and paper; physics was 45 questions, a quarter of the paper, worth 180 marks out of 720, with the same +4 and −1 scoring</td><td>Precision on NCERT ideas, and restraint with uncertain answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Entrance syllabi come from the conducting body, not the school board, and may include topics a board has dropped,
    so read the current NTA bulletin before trimming anything. For priorities, see the
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">topic-wise JEE physics guide</a>, the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics chapters that repay the most effort</a>, and
    two articles weighing a coaching class against a home tutor, one for
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE</a> and one for <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET</a>. The
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages explain how we match for each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-evening">Can a physics tutor keep an evening slot in your part of Chennai?</h2>
  <p>
    For a Class 12 student the free hour usually comes after coaching, and a tutor's route decides whether it
    survives the week. The six neighbourhoods below, each from a different zone, show how much that route varies.
    Every locality is listed on our
    <a href="{{ url('/city/chennai') }}">Chennai page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Where the ECR and OMR begin</h3>
      <p>
        {!! $chA('thiruvanmiyur', 'Thiruvanmiyur') !!} mixes independent houses and apartment blocks, and its MRTS
        station links it north to Mylapore and south to Velachery. The junctions where the ECR and OMR start are
        heavy in office hours, so a late-afternoon lesson is often easier than one at the start of the evening.
        Apartment blocks usually ask visitors to sign in.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Central, with a busy suburban station</h3>
      <p>
        {!! $chA('nungambakkam', 'Nungambakkam') !!} has apartments, builder-floor buildings and some houses behind
        its High Road. Its suburban station is one of the city's busiest, and Thousand Lights on the Blue Line is next
        door. Watchman registers and scarce visitor parking make a two-wheeler or cab drop simpler than a car.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>A transport hub in the south</h3>
      <p>
        {!! $chA('guindy', 'Guindy') !!} has a suburban station and a Blue Line metro station, with Little Mount
        close by, so tutors from almost anywhere on either line can reach it and finish by auto. Homes sit in
        residential pockets between large campuses; share a landmark and gate details before the first class.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>On the OMR, by road for now</h3>
      <p>
        {!! $chA('thoraipakkam', 'Thoraipakkam') !!} is mostly flats in multi-storey buildings and gated communities.
        There is no station yet; Line 3 is under construction. Tutors come by two-wheeler, bus or shared auto, and
        gates may need a resident's approval, so send the tutor's name ahead of the first visit.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>West, on the Green Line</h3>
      <p>
        {!! $chA('vadapalani', 'Vadapalani') !!} is dense and busy, and most families live in flats. The Green Line
        station has run since 2015, and a Line 4 section towards Porur is under construction. With Arcot Road and the
        Inner Ring Road heavy at office hours, tutors often take the metro and walk the last stretch.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North, by suburban train</h3>
      <p>
        {!! $chA('perambur', 'Perambur') !!} has three suburban stations on the line from Chennai Central towards
        Avadi, so tutors from Villivakkam, Kolathur or central Chennai often come by train. Old streets mean doorstep
        visits; market roads are crowded in the evening, so book a little earlier.
      </p>
    </div>
  </div>
  <p>
    On nights when coaching finishes late, moving one weekly lesson online with the same tutor spares everyone a
    late journey and loses nothing from the plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-intl">IB, ISC or IGCSE physics: what needs confirming before lessons start?</h2>
  <p>
    <strong>IB Diploma:</strong> May 2025 was the first exam session under the current physics guide, which drops
    Paper 3 and the options in favour of five themes labelled A to E. The IB suggests 150 hours of teaching for SL
    and 240 for HL. Exam papers account for 80% of the grade and the scientific investigation for 20%, and that
    investigation has to be the student's own; a tutor may question the plan, never draft it. Read our
    <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.
    <strong>ISC:</strong> assessment combines a CISCE theory paper with practical and project components, and
    explanations are marked more fully than a short CBSE reason; check that the tutor is working from your child's
    exam-year syllabus. <strong>Cambridge IGCSE:</strong> entered at Core or Extended; a student switching into
    Class 11 on another board usually benefits from a few early lessons on vectors, graphs and derivations. There
    are fewer specialists for all three, so mention the course when you first write.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-start">Why is Class 11 the cheapest time to start physics tuition?</h2>
  <p>
    Class 11 moves fast from measurement and motion into Newton's laws, work and energy, rotation and gravitation.
    Those chapters lean on vectors, graphs and rates of change, often before the maths class has taught them, and
    Class 12 reuses exactly those tools for fields and circuits. A few months spent making components, gradients and
    the area under a graph feel easy costs far less than rescuing them in the board year. See the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page, the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page, and our
    <a href="{{ url('/maths-home-tutor-chennai') }}">maths home tutors in Chennai</a> if calculus is holding physics
    back.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-fees">What does a physics home tutor in Chennai cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor names their
    own fee, which reflects the exam, their experience teaching it, the evening trip to your neighbourhood and how
    many sessions you book. An online hour with the same tutor can cost less. You compare fees before any demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="chp-book">What happens after you ask for a physics tutor in Chennai?</h2>
  <p>
    Tell us the class, the board, any entrance exam in view, your locality with its nearest station, and which
    evenings are genuinely free. A shortlist of two or three physics tutors comes back with each fee attached, and
    you choose who takes the free demo. A poor fit means another demo, and a change of tutor later is also free. If
    nobody suitable can come at that hour, we propose online lessons or a home-and-online mix. NXTutors is based in
    Sector 66, Gurugram, and teaches online throughout India.
  </p>
  <p>
    Physics teachers who live in Chennai can view open student requests on the
    <a href="{{ url('/tuition-jobs/chennai') }}">Chennai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
