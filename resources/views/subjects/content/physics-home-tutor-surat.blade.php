{{--
  Long-form guide for the "physics home tutor Surat" page (Classes 11 and 12,
  JEE and NEET, ISC/IB/IGCSE, GSEB HSC in general terms). Byline in config:
  NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/surat-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements used on the Delhi physics
  page, from database/seo-content/blog: cbse-class-12-physics-strategies (70 +
  30, 33 questions in sections A to E, blocks 33/18/12/7, recall share,
  practical scheme and record requirements, no calculators, transistors and
  logic gates out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main
  2026 pattern, JEE Advanced 2026 eligibility),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern) and
  -ib-physics-slhl-iaee (new guide first assessed May 2025, five themes, two
  papers 80%, investigation 20%). GSEB is described generally only; no GSEB
  pattern is given. The Surat Metro is described as under construction, with
  no dates. No school, society, mall or people's names, no distances or
  travel times, only the allowed fee sentence.

  Area links render only when that Surat area page exists and is active.
--}}
@php
  $srAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $srA = function (string $slug, string $label) use ($srAreaSlugs) {
      return in_array($slug, $srAreaSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide srp-guide" aria-labelledby="srpGuideTitle">
  <h2 id="srpGuideTitle">Physics home tutor in Surat: one subject, several different exams, and an evening that coaching has already half filled</h2>

  <p class="nx-guide__lede">
    A Class 12 physics student in Surat may be answering to a CBSE, ISC or GSEB board paper, to JEE or NEET a few
    months later, or to an IB or IGCSE course with rules of its own. The chapters overlap; the way marks are won does
    not. NXTutors sends two or three physics tutors who teach the exam your child is actually aiming at and can reach
    your locality at the hour left over after school and coaching. You see each fee before meeting anyone, and the
    opening lesson costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#srp-aim">Pick the aim</a> ·
    <a href="#srp-blocks">Class 12 mark blocks</a> ·
    <a href="#srp-lab">The 30 practical marks</a> ·
    <a href="#srp-other">GSEB, ISC, IB, IGCSE</a> ·
    <a href="#srp-foundation">Starting in Class 11</a> ·
    <a href="#srp-evening">Evenings by locality</a> ·
    <a href="#srp-test">Reading a marked test</a> ·
    <a href="#srp-fees">Fees</a> ·
    <a href="#srp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="srp-aim">What is the physics tuition for: a board, an entrance test, or both?</h2>
  <p>
    Settle this first; it decides what the tutor sets each week.
  </p>
  <ul>
    <li><strong>CBSE Class 12 (042).</strong> Theory is a three-hour, 70-mark paper of 33 questions, all compulsory, written without a calculator; practical work adds 30. Weekly work should centre on derivations that start from a figure, exact ray and circuit sketches, and case-based passages.</li>
    <li><strong>JEE Main.</strong> Of the 75 questions in the 2026 Paper 1, physics supplied 25: twenty with options and five needing a typed numerical entry, with four marks gained for each correct response and one lost for each incorrect one. What matters is pace on long problems and a frank post-mortem of every mock.</li>
    <li><strong>JEE Advanced.</strong> Eligibility in 2026 was limited to 2,50,000 JEE Main candidates, chosen by rank. Its problems knit several ideas together, so earlier Advanced papers form the core of practice.</li>
    <li><strong>NEET (UG).</strong> The 2026 exam was written on paper, and physics made up a quarter of it: 45 questions carrying 180 of the 720 marks, scored the same way as JEE Main. Precision on NCERT ideas pays more than bold guessing.</li>
  </ul>
  <p>
    The body that conducts each entrance test writes its syllabus, which can still include chapters a board has
    removed, so check the latest official bulletin on nta.ac.in before cutting anything. For priorities, read our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise guide</a> or the list of
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a>; parents weighing a
    coaching institute against private tuition can see
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE: coaching or a home tutor</a>.
    Our matching for each entrance exam is set out on the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics
    tutor</a> and <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-blocks">Where do the 70 theory marks sit in CBSE Class 12 physics?</h2>
  <p>
    CBSE has kept last session's design in its 2026-27 sample paper. The 14 NCERT chapters fall into four groups:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 physics (CBSE), 2026-27: chapter groups by weight, with a teaching note for each</caption>
    <thead>
      <tr><th scope="col">Chapter group</th><th scope="col">Marks</th><th scope="col">Teaching note</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics, current electricity, magnetism and alternating current</td><td>33</td><td>Close to half of theory, so numericals and derivations every week from April</td></tr>
      <tr><td>Optics, together with electromagnetic waves</td><td>18</td><td>The heaviest single group; keep redrawing ray diagrams until they are exact</td></tr>
      <tr><td>Dual nature of radiation, atoms, nuclei</td><td>12</td><td>Mostly brief numericals that suit quick practice sets</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Transistors and logic gates are no longer examined; discard notes that teach them</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper runs in five sections: A holds 16 one-mark items, twelve with options and four assertion–reason; B
    holds five two-mark questions; C seven three-mark ones; D two four-mark case studies; E three five-mark long
    answers. Roughly 38% of marks are for recall alone, which is why a tutor who only dictates notes leaves most of the
    paper unprepared. Values of constants are supplied. Class 12 has one main board exam, and the 2027 date sheet has
    not appeared, so keep an eye on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> post collects the
    derivations examiners return to, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics
    tutor</a> page plans the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-lab">How are the 30 practical marks earned, and what can be prepared at home?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics practical examination: where the 30 marks come from</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Two experiments, taken one per section</td><td>7 + 7</td></tr>
      <tr><td>Practical record</td><td>5</td></tr>
      <tr><td>Activity</td><td>3</td></tr>
      <tr><td>Investigatory project</td><td>3</td></tr>
      <tr><td>Viva on all the above</td><td>5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The record is expected to contain eight or more experiments, split evenly between the two sections, six or more
    activities, likewise split, and the project report. The apparatus never leaves school, but a home tutor can check
    that every entry has its aim, figure and observation table, discuss likely errors and the precautions against
    them, and rehearse the viva with questions about reasoning: why repeat a reading, what a graph's slope represents,
    how a thicker wire would alter the result.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-other">GSEB, ISC, IB and IGCSE: what should families check?</h2>
  <ul>
    <li><strong>Gujarat board, HSC science.</strong> GSEB writes its own HSC physics syllabus and question paper and posts the details on gseb.org; we do not restate them here. Say whether your child studies in Gujarati or English, and expect lessons built on the textbook GSEB prescribes.</li>
    <li><strong>ISC.</strong> CISCE combines a theory paper with practical and project work, and rewards fuller written explanation than a brief CBSE-style line. Confirm the tutor is using the syllabus for your child's exam year.</li>
    <li><strong>IB Diploma.</strong> The revised course, examined for the first time in May 2025, dropped Paper 3 and the option topics and now organises content into five themes labelled A to E. Written exams give 80% and the internally assessed investigation 20%, which the student alone must write. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a> has details.</li>
    <li><strong>Cambridge IGCSE.</strong> Entered at Core or Extended tier. Anyone joining an Indian board for Class 11 afterwards should expect to shore up vectors, graph work and derivations early on.</li>
  </ul>
  <p>
    Specialists in these courses are scarcer than CBSE teachers. When none lives within reach, combine an online
    specialist with a nearby tutor who marks written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-foundation">Why is Class 11 often the right time to begin?</h2>
  <p>
    The Class 11 course races from units and kinematics through the laws of motion, work and energy, rotation and
    gravitation. Almost every chapter expects ease with vectors, slopes and rates of change, occasionally before the
    maths class has covered them, and Class 12 reuses the same machinery for charges and fields. Making those tools
    routine in the first term is far cheaper than patching two years of physics in the board winter. Chapter-level
    detail is on the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page, and our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a Class 11 stream</a> helps families
    who have not yet decided.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-evening">Can a tutor keep a late physics slot in your part of Surat?</h2>
  <p>
    Coaching usually fills the early evening for senior students, which pushes physics tuition later. The Surat Metro
    is being built but carries no passengers yet, so tutors travel by two-wheeler, auto or Sitilink bus. Six
    localities show how arrangements vary; find tutors near you on our <a href="{{ url('/city/surat') }}">Surat
    page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>West bank and the centre</h3>
      <p>
        {!! $srA('rander', 'Rander') !!} is one of the oldest settlements on the Tapi. Its old core has narrow lanes of
        family houses, where a tutor comes to the door but may park a little away; newer blocks around it have a gate
        desk. Market hours fill the main roads, so a fixed early-evening time works. At
        {!! $srA('majura-gate', 'Majura Gate') !!}, where the Ring Road passes through, most homes are flats with a
        watchman, and a call from the parent on the first visit helps.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The south</h3>
      <p>
        {!! $srA('city-light', 'City Light') !!} is mostly two- and three-bedroom flats in societies with a gate desk:
        the tutor is registered once, then waved through. Canal road junctions are busiest at office hours, so a
        steady slot just after works. {!! $srA('bhatar', 'Bhatar') !!}, between Ghod Dod Road and Althan, has one- and
        two-bedroom apartments with a watchman, and tutors from Athwa, City Light and Althan reach it easily; arrive
        ahead of the evening rush at Bhatar Char Rasta.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The north-east and east</h3>
      <p>
        {!! $srA('mota-varachha', 'Mota Varachha') !!} has newer multi-storey societies whose gate desk notes the tutor
        on the first visit; a regular weekday slot helps guards recognise them. Utran and Kosad are the nearest
        stations. {!! $srA('sarthana', 'Sarthana') !!}, on the eastern edge, is the planned end of the metro's Red Line
        and already the end of an early BRTS corridor via Canal Road, so a tutor without a vehicle can come by bus.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-test">How should a tutor read your child's last marked test?</h2>
  <p>
    Bring two recent answer sheets to the free demo. A capable physics tutor sorts each lost mark into one of four
    boxes before teaching anything new:
  </p>
  <ol>
    <li><strong>No sketch.</strong> The answer began without a force, ray or circuit drawing, so the equation had nothing to stand on.</li>
    <li><strong>No principle.</strong> Numbers appeared before any line naming the law used, and that line is where examiners start giving credit.</li>
    <li><strong>Lost units.</strong> Values substituted bare, so a slip in a power of ten went unnoticed.</li>
    <li><strong>No sense check.</strong> A negative time or an absurd current left on the page unquestioned.</li>
  </ol>
  <p>
    The fullest box sets the first month's agenda.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-fees">How much do physics tutors in Surat charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors price their own
    lessons, taking into account the exam, how long they have taught it, the late journey to your area and how many
    lessons you book weekly. An online hour with the same person may come cheaper. Every fee is listed before the
    demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srp-book">How do you book a physics demo in Surat?</h2>
  <p>
    Share the class and board, whether the goal is the board paper, JEE or NEET, your locality, and which evenings
    stay free after school and coaching. Two or three matched physics tutors come back with their fees, and you pick
    one for the free demo. A poor fit means we set up another demo, and moving to a different tutor later is also
    free. NXTutors has its office in Sector 66, Gurugram, and runs online lessons all over India; our national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page describes the service elsewhere.
  </p>
  <p>
    Surat-based physics teachers looking for students close to home can browse current requests on the
    <a href="{{ url('/tuition-jobs/surat') }}">Surat tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
