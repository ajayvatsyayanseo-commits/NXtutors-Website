{{--
  Long-form guide for the "physics home tutor Nagpur" page (Classes 11 and 12,
  JEE and NEET, ISC/IB/IGCSE, Maharashtra State Board HSC in general terms).
  Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/nagpur-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements already used on the Delhi
  physics page (CBSE Class 12: 70 + 30, 33 questions in Sections A to E,
  blocks 33/18/12/7, recall share, practical scheme and record requirements,
  constants supplied, no calculators, transistors and logic gates out; JEE
  Main 2026 pattern; JEE Advanced 2026 eligibility; NEET UG 2026 pattern; IB
  physics guide first assessed May 2025, five themes, hours, papers 80% and
  investigation 20%). HSC and MHT CET are named only, with no pattern stated.
  No school, society, hospital, campus or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Nagpur area page exists and is active.
--}}
@php
  $ngppAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ngppA = function (string $slug, string $label) use ($ngppAreaSlugs) {
      return in_array($slug, $ngppAreaSlugs, true)
          ? '<a href="' . e(url('/city/nagpur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ngpp-guide" aria-labelledby="ngppGuideTitle">
  <h2 id="ngppGuideTitle">Physics home tutor in Nagpur: pick the exam that counts most, then a tutor who can make your evening</h2>

  <p class="nx-guide__lede">
    In Nagpur a senior physics student may be heading for the HSC, a CBSE or ISC board paper, JEE, NEET, MHT CET, or
    an IB or IGCSE course, and quite often two of these at once. Each rewards a different kind of practice, and the
    student's day is already split between school, coaching and the ride home along Wardha Road or Hingna Road.
    NXTutors sends two or three physics tutors who teach the exam that matters most to you and can reach your
    neighbourhood when your child is free. Their fees are on show before the first meeting, and that first class is a
    free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ngpp-exams">Exams side by side</a> ·
    <a href="#ngpp-cbse">CBSE Class 12 theory</a> ·
    <a href="#ngpp-lab">Record and viva</a> ·
    <a href="#ngpp-hsc">HSC physics</a> ·
    <a href="#ngpp-check">After every numerical</a> ·
    <a href="#ngpp-routes">Six neighbourhoods</a> ·
    <a href="#ngpp-other">IB, ISC and IGCSE</a> ·
    <a href="#ngpp-fees">Fees</a> ·
    <a href="#ngpp-next">Next step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ngpp-exams">Which physics exam is your child really preparing for?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior physics exams Nagpur students take, who sets them, and what weekly tuition should lean towards</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Set by</th><th scope="col">What we know of the format</th><th scope="col">Weekly emphasis</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 physics</td><td>CBSE</td><td>70-mark theory paper, 33 compulsory questions, three hours; 30 practical marks</td><td>Derivations, diagrams and case-based reading</td></tr>
      <tr><td>HSC physics</td><td>Maharashtra State Board</td><td>Published by the board; see its official site</td><td>State textbook first, board papers second</td></tr>
      <tr><td>JEE Main</td><td>NTA</td><td>2026 Paper 1: 25 physics questions of 75, 20 with options and 5 numerical, +4 and −1</td><td>Timed multi-concept problems, then error review</td></tr>
      <tr><td>JEE Advanced</td><td>An IIT, on behalf of the joint board</td><td>2026 entry limited to the 2,50,000 leading JEE Main candidates</td><td>Past Advanced papers and depth over speed</td></tr>
      <tr><td>NEET (UG)</td><td>NTA</td><td>2026: pen and paper; physics 45 of 180 questions, 180 of 720 marks, +4 and −1</td><td>NCERT concepts and fewer guesses</td></tr>
      <tr><td>MHT CET</td><td>State Common Entrance Test Cell, Maharashtra</td><td>Check the Cell's official site for the current scheme</td><td>State and NCERT syllabus overlap, speed</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Entrance syllabi come from the bodies that run the exams, not from school boards, and they sometimes keep topics
    a board has dropped; read the current NTA or CET Cell bulletin before cutting a chapter. For planning, see our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">topic-wise JEE physics guide</a>, the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics chapters that score most</a>, and a comparison of
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching with home tuition for JEE</a>.
    The <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages set out how we match for each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-cbse">How is the CBSE Class 12 theory paper built?</h2>
  <p>
    The design for 2026-27 matches the previous session's. By content, electricity and magnetism, from
    electrostatics to alternating current, carries 33 of the 70 marks. Optics together with electromagnetic waves is
    worth 18, the modern-physics group of dual nature, atoms and nuclei 12, and semiconductor electronics 7.
    Transistors and logic gates are no longer taught for the board, so guidebooks that include them are stale. By
    question type, the paper runs:
  </p>
  <ol>
    <li><strong>Section A:</strong> 16 one-mark items, 12 multiple-choice and 4 assertion–reason.</li>
    <li><strong>Section B:</strong> five questions of two marks.</li>
    <li><strong>Section C:</strong> seven questions of three marks.</li>
    <li><strong>Section D:</strong> two case-based questions of four marks.</li>
    <li><strong>Section E:</strong> three long answers of five marks.</li>
  </ol>
  <p>
    Constants are printed on the paper, and calculators stay outside the hall. Straight recall accounts for only
    around 38% of the marks, which is why a tutor who just dictates notes leaves most of the paper unprepared. There
    is one main Class 12 board exam, and its 2027 dates are awaited on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> collect the
    derivations that recur, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page
    plans the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-lab">What earns the 30 practical marks?</h2>
  <p>
    Two experiments, one from each section, are worth 7 marks each. The practical record is worth 5, one activity 3,
    the investigatory project 3, and a viva covering all of them 5. The record has minimums: eight or more experiments
    split four and four across the sections, six or more activities split three and three, and the project report.
  </p>
  <p>
    None of the apparatus comes home, yet much of the preparation can. A tutor can read through the record to check
    that every aim, diagram and observation table is right, go over likely sources of error, and run a mock viva with
    the questions examiners like: why repeat a reading, what a graph's gradient represents, what happens if the wire
    is changed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-hsc">What should HSC physics students look for in a tutor?</h2>
  <p>
    Many Nagpur students take physics on the Maharashtra State Board in Classes 11 and 12, working from
    state-prescribed textbooks towards the HSC examination. We do not restate the HSC paper scheme; the board
    publishes it on its official site and schools have the current version. What matters for matching is a tutor who
    teaches from those textbooks and the board's own past papers. Students adding JEE Main or MHT CET need a tutor who
    can mark, chapter by chapter, where the entrance goes beyond the state book.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-check">Which three questions should follow every numerical?</h2>
  <p>
    Physics marks usually leak from the write-up rather than the idea. A tutor should get your child asking three
    questions after every problem, in every session, until it becomes automatic:
  </p>
  <ul>
    <li><strong>Did I show the principle?</strong> A labelled figure and one line naming the law used, which is where board markers begin to award marks.</li>
    <li><strong>Did the units travel with the numbers?</strong> Writing them on each line catches a slipped power of ten straight away.</li>
    <li><strong>Is the answer believable?</strong> A sensible sign, a plausible size, and the unit of the quantity actually asked for.</li>
  </ul>
  <p>
    Take your child's two most recent physics tests to the free demo. A capable tutor will spot which of these
    checks is missing before starting anything new.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-routes">Will a late physics slot work in your neighbourhood?</h2>
  <p>
    Senior students often get home after coaching, so physics tends to start late. Whether a tutor can hold that
    hour depends on the metro and the main roads near you. Browse every zone on the
    <a href="{{ url('/city/nagpur') }}">Nagpur page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Late physics sessions in six Nagpur neighbourhoods: the nearest rail link, the homes, and what to plan for</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Nearest rail link</th><th scope="col">Homes</th><th scope="col">Plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ngppA('civil-lines', 'Civil Lines') !!}</td><td>Zero Mile Freedom Park or Kasturchand Park, Orange Line</td><td>Old bungalows, government colonies, some apartments</td><td>Gate details at government colonies; extra margin during legislative sessions</td></tr>
      <tr><td>{!! $ngppA('dhantoli', 'Dhantoli') !!}</td><td>Congress Nagar, Orange Line, inside the locality</td><td>Older homes and apartment buildings among clinics</td><td>Hard parking at consulting hours, so metro or two-wheeler</td></tr>
      <tr><td>{!! $ngppA('jaitala', 'Jaitala') !!}</td><td>Subhash Nagar, Aqua Line, in Parsodi</td><td>Plotted-layout houses and newer apartments</td><td>Evening commuter traffic on Hingna Road</td></tr>
      <tr><td>{!! $ngppA('sonegaon', 'Sonegaon') !!}</td><td>Ujjwal Nagar and Airport, Orange Line</td><td>Apartment buildings and independent homes</td><td>Morning and evening peaks on Wardha Road</td></tr>
      <tr><td>{!! $ngppA('seminary-hills', 'Seminary Hills') !!}</td><td>None in the area; Kasturchand Park, then an auto</td><td>Residential colonies, apartments and houses near government campuses</td><td>Identification at gated entrances; security told in advance</td></tr>
      <tr><td>{!! $ngppA('wardhaman-nagar', 'Wardhaman Nagar') !!}</td><td>Aqua Line east: Vaishnodevi Square or Prajapati Nagar</td><td>Homes and apartments along Bhandara Road</td><td>Heavy traffic, goods vehicles included; slots outside peak hours</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When coaching runs late on set days, moving that week's session online with the same tutor keeps the plan on
    track and saves a night trip across the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-other">What do IB, ISC and IGCSE families need to know?</h2>
  <ul>
    <li><strong>IB Diploma.</strong> From the May 2025 exams, physics runs on a new guide: five themes, A to E, with no options and no Paper 3. Teaching time is set at 150 hours for SL and 240 for HL. Two papers weigh 80% and the scientific investigation 20%, and the investigation is the student's work only. The <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a> explains the change.</li>
    <li><strong>ISC.</strong> A CISCE theory paper alongside practical and project work, with answers expected to explain more than a CBSE one-liner.</li>
    <li><strong>Cambridge IGCSE.</strong> Core or Extended; students heading into CBSE or State Board Class 11 afterwards benefit from early work on vectors, graphs and derivations.</li>
  </ul>
  <p>
    Specialists for these are thinner on the ground than CBSE tutors, so name the course in your first message, and
    consider an online specialist paired with a local tutor who checks written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-fees">What does a physics home tutor in Nagpur charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors quote their own
    rates, shaped by the exam, their experience at that level, the evening journey to your zone and the weekly
    number of sessions; online sessions with the same tutor can cost less. You see every fee before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-nagpur') }}">Nagpur home tuition fees guide</a> goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpp-next">What is the next step?</h2>
  <p>
    Tell us the class and board, the main target (board, JEE, NEET or MHT CET), your neighbourhood and nearest metro
    station or square, and the evenings free after school and coaching. We return two or three matched physics tutors
    with their fees; you pick one for a free demo class. A wrong fit gets another demo, and switching later is free.
    NXTutors is based in Sector 66, Gurugram, and teaches online across India. The national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page and the
    <a href="{{ url('/blog/nagpur-tuition-guide') }}">Nagpur tuition guide</a> add context.
  </p>
  <p>
    Physics teachers based in Nagpur can see open student requests on the
    <a href="{{ url('/tuition-jobs/nagpur') }}">Nagpur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
