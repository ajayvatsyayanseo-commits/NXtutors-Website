{{--
  Long-form guide for the "physics home tutor Guwahati" page (Classes 11 and
  12, JEE and NEET, ISC/IB/IGCSE, with the Assam Higher Secondary course named
  generally). Byline in config: NXTutors Academic Team. Local facts come only
  from database/seo-content/areas/guwahati-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  JEE Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (new guide first assessed
  May 2025, teaching hours, five themes, papers 80%, investigation 20%). The
  state board's Higher Secondary physics (formerly AHSEC) is named only, with
  no paper pattern. No school, society, hospital or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Guwahati area page exists and is active.
--}}
@php
  $ghAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ghA = function (string $slug, string $label) use ($ghAreaSlugs) {
      return in_array($slug, $ghAreaSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ghp-guide" aria-labelledby="ghpGuideTitle">
  <h2 id="ghpGuideTitle">Physics home tutor in Guwahati: one exam to aim at, one evening that holds, one method for every numerical</h2>

  <p class="nx-guide__lede">
    Physics in Classes 11 and 12 serves several masters. The same chapter on electrostatics might be heading for a
    CBSE or ISC board paper, a Higher Secondary paper set by the Assam board, JEE, NEET, or an IB course, and each
    of those scores answers differently. A Guwahati student's evening may already hold school, a coaching batch and a
    bus ride along GS Road. NXTutors puts forward two or three physics tutors who know that target and can get to your
    locality at a workable hour. You see their fees in advance, and the opening lesson is free.
  </p>

  <nav class="nx-guide__toc" aria-label="Sections of this page">
    <strong>Sections:</strong>
    <a href="#ghp-aim">Pick the target</a> ·
    <a href="#ghp-theory">The 70 theory marks</a> ·
    <a href="#ghp-prac">Practical marks</a> ·
    <a href="#ghp-method">Method for numericals</a> ·
    <a href="#ghp-coach">Beside coaching</a> ·
    <a href="#ghp-where">Five localities</a> ·
    <a href="#ghp-other">IB, ISC, IGCSE</a> ·
    <a href="#ghp-start">When to start</a> ·
    <a href="#ghp-fees">Fees</a> ·
    <a href="#ghp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ghp-aim">Board, JEE, NEET or IB: which scoring rules is your child training for?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior physics targets for Guwahati students: the format and the skill each one rewards</caption>
    <thead>
      <tr><th scope="col">Target</th><th scope="col">Format</th><th scope="col">Skill it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>Higher Secondary, Assam state board</td><td>Set by the board (formerly AHSEC); take the scheme from its official notices</td><td>Answers from the prescribed book, in the medium your child writes in</td></tr>
      <tr><td>CBSE Class 12 (042)</td><td>Theory out of 70 across 33 questions, all compulsory and calculator-free; practicals out of 30</td><td>Derivations from a figure, clean diagrams, reading a case passage</td></tr>
      <tr><td>ISC Class 12</td><td>Theory, practical and project components set by CISCE</td><td>Full, explained working</td></tr>
      <tr><td>JEE Main (2026 pattern)</td><td>Computer-based; physics 25 of 75 questions (20 multiple-choice, 5 numerical), +4 and −1</td><td>Speed across multi-step problems</td></tr>
      <tr><td>JEE Advanced</td><td>In 2026, only the leading 2,50,000 JEE Main candidates were eligible</td><td>Several ideas combined in one problem</td></tr>
      <tr><td>NEET (UG) (2026 pattern)</td><td>Pen-and-paper test; physics supplied 45 of the 180 questions (180 of 720 marks), +4 and −1</td><td>Precision on NCERT ideas and restraint with guesses</td></tr>
      <tr><td>IB Diploma Physics</td><td>Two papers worth 80% together, a scientific investigation worth 20%</td><td>Data, uncertainties, the five-theme course</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Entrance syllabi come from the conducting body, not the board, and may keep topics a board has removed; read the
    current bulletin on nta.ac.in before trimming anything. Useful next reads: our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics priorities by topic</a>,
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics chapters that score most</a> and
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or a home tutor for JEE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-theory">Where do the 70 theory marks sit in CBSE Class 12 physics?</h2>
  <p>
    This session's sample paper keeps the previous design. Grouped by block, the fourteen NCERT chapters carry:
  </p>
  <ul>
    <li><strong>33 marks</strong> for the electricity-and-magnetism chapters, running up to alternating current: almost half of it;</li>
    <li><strong>18</strong> for optics with electromagnetic waves, the largest single block;</li>
    <li><strong>12</strong> for dual nature, atoms and nuclei, mostly short numericals;</li>
    <li><strong>7</strong> for semiconductor electronics. Transistors and logic gates have left the syllabus, so notes that include them are dated.</li>
  </ul>
  <p>
    By section: A has 16 one-mark questions (12 multiple-choice, 4 assertion–reason), B five of two marks, C seven of
    three, D two case studies of four, and E three long answers of five. Recall earns roughly 38% of the marks, which means
    dictated notes cover far less of the paper than they appear to. Physical constants are supplied and no calculator
    may be used. There is a single main Class 12 board exam, and the 2027 timetable will appear on cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> article lists
    derivations that keep coming back; the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics
    tutor</a> page plans the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-prac">How are the 30 practical marks earned?</h2>
  <p>
    Practical marks are the most predictable in the subject. Two experiments, one per section, earn 7 each; the
    record 5; one activity 3; an investigatory project 3; a viva across everything 5. The record needs at least
    eight experiments (four per section), at least six activities (three per section) and the project report. The
    apparatus stays at school, but a tutor at home can check each record entry for aim, diagram and observation
    table, rehearse precautions and likely errors, and ask practice viva questions: why several readings, what the
    gradient of a plotted line means.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-method">What method should every numerical follow?</h2>
  <p>
    Most lost physics marks trace back to how an answer is set out. Four habits, practised on every problem, fix
    most of it:
  </p>
  <ol>
    <li><strong>Sketch first:</strong> a free-body, ray or circuit diagram with directions, before any equation.</li>
    <li><strong>Name the principle</strong> in one line; board examiners begin awarding marks there.</li>
    <li><strong>Keep units in</strong> on every substituted line, so a slipped power of ten is visible.</li>
    <li><strong>Sense-check the result:</strong> sign, size and unit against the quantity asked for.</li>
  </ol>
  <p>
    Take two recent test scripts to the free demo. A capable tutor reads them and names the missing habit before
    teaching anything new.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-coach">If your child already attends coaching, what should a home tutor add?</h2>
  <p>
    Coaching batches move at the batch's speed. A home tutor's value is the chapter the batch left behind: the
    problems your child marked and never finished, the concept that made sense in class but not on the sheet, and
    board-style written answers, which coaching seldom practises. A good week pairs one session on the current
    coaching chapter's unsolved problems with a short board section from the same chapter, so neither target drifts.
    A running error log, one line per mistake with its cause, shows by the half-yearly exam which chapters still
    need work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-where">Will a late physics slot hold where you live in Guwahati?</h2>
  <p>
    Senior physics often starts after coaching, so the evening route decides whether a slot survives. There is no
    metro; tutors use buses, autos, two-wheelers and the railway. Five localities show the range; see more on our
    <a href="{{ url('/city/guwahati') }}">Guwahati page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening physics tuition in five Guwahati localities: homes, how tutors arrive and what to arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">How tutors arrive</th><th scope="col">What to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ghA('paltan-bazaar', 'Paltan Bazaar') !!}</td><td>Flats in older and newer buildings among shops and hotels; quieter lanes towards Rehabari and Ulubari</td><td>Bus or train; Guwahati railway station is here</td><td>A pick-up point or lane landmark, since the station area is crowded all day</td></tr>
      <tr><td>{!! $ghA('lachit-nagar', 'Lachit Nagar') !!}</td><td>Builder floors and small apartment buildings, some houses</td><td>From GS Road, Zoo Road or Chandmari via Rajgarh Road</td><td>Where a two-wheeler or car can park in the narrow lanes</td></tr>
      <tr><td>{!! $ghA('ganeshguri', 'Ganeshguri') !!}</td><td>Apartments, builder floors and houses behind the market</td><td>Buses and autos from every direction</td><td>A start time clear of the junction's evening rush</td></tr>
      <tr><td>{!! $ghA('six-mile', 'Six Mile') !!}</td><td>Mostly flats, with quieter lanes behind GS Road</td><td>GS Road buses from Ganeshguri, Beltola and Khanapara</td><td>Tell the guard to expect the tutor; an earlier or weekend slot</td></tr>
      <tr><td>{!! $ghA('jalukbari', 'Jalukbari') !!}</td><td>Multistorey apartments, some houses and plots; a large student population</td><td>City bus from Adabari, Maligaon and Dharapur; across the bridge from North Guwahati</td><td>Flat number at the gate; timing around highway traffic at the junction</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On the latest coaching nights, switch one lesson a week to online with the same tutor, and nobody travels late.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-other">IB, ISC or IGCSE physics: what is different?</h2>
  <ul>
    <li><strong>IB Diploma:</strong> the current guide was first examined in May 2025, replacing options and Paper 3 with five themes, A to E. Recommended teaching is 150 hours at SL, 240 at HL. The investigation belongs to the student alone; a tutor can talk through the plan and nothing more. Read the <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics at SL and HL</a>.</li>
    <li><strong>ISC:</strong> theory, practical and project work set by CISCE, with answers expected at greater length than a brief CBSE line.</li>
    <li><strong>IGCSE:</strong> Core or Extended; students moving to CBSE Class 11 often need early help with vectors, graphs and derivations.</li>
  </ul>
  <p>
    These specialists are scarce in any city. If none can travel to you, combine an online specialist with a local tutor
    who marks the written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-start">Should physics tuition begin in Class 11?</h2>
  <p>
    Usually, yes. Class 11 moves quickly from measurement and kinematics to Newton's laws, energy, rotation and
    gravitation, each leaning on vectors, graphs and rates of change, sometimes ahead of the maths syllabus.
    Class 12 reuses the same tools with charges instead of masses. Once resolving vectors, reading gradients and finding
    areas under graphs are automatic, the board year needs far less repair. See the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page, the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a> and the national
    <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-fees">What does a physics home tutor in Guwahati charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors quote their own
    fees, shaped by the target, their experience with it, how far they come in the evening and the weekly number of
    sessions. Online lessons with the same tutor can cost less. Every fee is shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghp-book">How do you book a physics demo in Guwahati?</h2>
  <p>
    Share the class and board, whether the goal is the board paper, JEE or NEET, your locality with a landmark, and
    which evenings are still free once school and coaching are done. Two or three physics tutors come back with fees;
    pick one for the free demo. A poor fit means another demo, and changing tutor later is free. If no suitable tutor can make that hour,
    online or part-online lessons are offered instead. NXTutors operates from Sector 66, Gurugram, and teaches
    online nationwide.
  </p>
  <p>
    Physics teachers in Guwahati looking for students nearby can check the
    <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
