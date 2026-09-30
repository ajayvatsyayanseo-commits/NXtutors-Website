{{--
  Long-form guide for the "physics home tutor Pune" page (Classes 11 and 12,
  JEE and NEET, ISC/IB/IGCSE, Maharashtra HSC in general terms). Byline in
  config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/pune-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements already used on the Delhi
  physics page, taken from database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions, sections, blocks
  33/18/12/7, recall share, practical scheme and record, no calculators,
  transistors and logic gates out), jee-preparation-gurgaon-coaching-or-home-tutor
  (JEE Main 2026, JEE Advanced 2026 eligibility),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026) and
  -ib-physics-slhl-iaee (new guide from May 2025, hours, five themes, 80/20).
  Metro Line 3 is described as under construction and not open. No school,
  society, mall or people's names, no roads named after people, no distances
  or travel times, only the allowed fee sentence.

  Area links render only when that Pune area page exists and is active.
--}}
@php
  $ppAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ppA = function (string $slug, string $label) use ($ppAreaSlugs) {
      return in_array($slug, $ppAreaSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pnp-guide" aria-labelledby="pnpGuideTitle">
  <h2 id="pnpGuideTitle">Physics home tutor in Pune: find where the marks leak, then book an hour that survives coaching</h2>

  <p class="nx-guide__lede">
    Senior physics students in Pune rarely have just one target. A Class 12 student may be writing a CBSE, ISC or
    Maharashtra HSC paper, sitting JEE or NEET soon after, or following the IB or IGCSE course, and the evenings are
    shared between school, coaching and the journey home. A physics tutor has to fit the target and the timetable.
    Our shortlist names two or three physics tutors familiar with your child's exam who can get to your
    neighbourhood in the hour you really have spare. You see their fees up front, and lesson one is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pnp-leak">Where marks go</a> ·
    <a href="#pnp-targets">Five targets</a> ·
    <a href="#pnp-board">The board theory paper</a> ·
    <a href="#pnp-lab">Practicals</a> ·
    <a href="#pnp-late">After coaching</a> ·
    <a href="#pnp-other">ISC, IB, IGCSE, HSC</a> ·
    <a href="#pnp-eleven">Class 11 first</a> ·
    <a href="#pnp-fees">Fees</a> ·
    <a href="#pnp-demo">The demo</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pnp-leak">Is your child losing physics marks on concepts, maths or the write-up?</h2>
  <p>
    Before any new chapter, a useful tutor reads your child's last two test papers and sorts the lost marks into
    three piles:
  </p>
  <ol>
    <li><strong>Concept gaps.</strong> The wrong law chosen, or a situation misread, such as treating a charged sphere as a point charge where that does not hold. These need reteaching from the start of the chapter.</li>
    <li><strong>Maths slips.</strong> Vector components, graph slopes, logarithms or a lost power of ten. These need short daily drills more than extra physics.</li>
    <li><strong>Presentation.</strong> No diagram, no stated principle, no units, a derivation that skips its key step. These are the quickest marks to recover.</li>
  </ol>
  <p>
    Every numerical should then follow the same routine: sketch the situation with directions marked, name the law in
    one line, substitute with units on each line, and check whether the sign and size of the answer make sense. Bring
    those two papers to the free demo and ask the tutor which pile is largest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-targets">Which exam is the physics tuition aimed at?</h2>
  <p>
    The chapters overlap, but each target scores them differently, so agree the main one before the first session:
  </p>
  <ul>
    <li><strong>CBSE Class 12 (042):</strong> a three-hour theory paper of 70 marks with 33 compulsory questions and no calculator, plus 30 practical marks. Tuition stresses derivations, labelled diagrams and case-based reading.</li>
    <li><strong>JEE Main:</strong> in 2026, physics was 25 of the 75 questions, 20 multiple-choice and 5 with numerical answers, at +4 and −1. Speed on multi-step problems matters, as does honest review of each mock.</li>
    <li><strong>JEE Advanced:</strong> for 2026, eligibility was limited to the 2,50,000 highest-ranked candidates from JEE Main. Its questions fuse several principles, which makes earlier Advanced papers the main practice source.</li>
    <li><strong>NEET (UG):</strong> the 2026 exam was written on paper; physics supplied 45 of its 180 questions, worth 180 of the 720 marks, with +4 and −1 scoring. Careful NCERT-based accuracy and restraint with guesses pay off.</li>
    <li><strong>IB Diploma Physics:</strong> two papers worth 80% together and a scientific investigation worth 20%, with data handling and uncertainties throughout.</li>
  </ul>
  <p>
    NTA, not CBSE, publishes the entrance syllabus, and it may still list chapters the board no longer examines; read
    the latest bulletin on nta.ac.in before cutting any topic. To set priorities, use our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics guide, topic by topic</a>, the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics chapters that score most</a>, and a look at
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">whether coaching or a home tutor suits
    JEE</a>. The <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages explain how we match for each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-board">How are the 70 theory marks split in CBSE Class 12 physics?</h2>
  <p>
    CBSE's 2026-27 sample paper repeats last year's structure, grouping the 14 NCERT chapters into four blocks of
    marks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 physics theory, 2026-27: the four mark blocks and how a tutor might use each</caption>
    <thead>
      <tr><th scope="col">Block</th><th scope="col">Marks</th><th scope="col">How to practise</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrostatics through to alternating current</td><td>33</td><td>Field and circuit diagrams drawn before any formula; one derivation a week</td></tr>
      <tr><td>Optics with electromagnetic waves</td><td>18</td><td>Ray diagrams with sign conventions stated</td></tr>
      <tr><td>Dual nature, atoms and nuclei</td><td>12</td><td>Short numericals with constants taken from the paper</td></tr>
      <tr><td>Semiconductor electronics</td><td>7</td><td>Labelled characteristics and brief explanations</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Across the five sections there are 16 one-mark items in A (a dozen multiple-choice, four assertion–reason),
    five two-mark questions in B, seven worth three in C, two four-mark case studies in D and three long answers of
    five in E. Only around 38% of marks reward plain recall, which is why copying notes prepares a student for less
    than half the paper. Transistors and logic gates are no longer part of the course, so any material teaching them
    is outdated. There is one main board exam for Class 12; with no 2027 date sheet yet, keep an eye on cbse.gov.in. See our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-lab">How can a home tutor help with the 30 practical marks?</h2>
  <p>
    Few marks in physics are as controllable as these. Each of two experiments, drawn one from either section, is
    worth 7. The record earns 5, a single activity 3, the investigatory project 3 and the viva 5. For the record to
    count, it needs eight or more experiments with four from each section, six or more activities with three from
    each, and the project report.
  </p>
  <p>
    The apparatus stays at school, yet much of the preparation fits a table at home: checking that each write-up
    states the aim, diagram and observation table correctly; going over sources of error and precautions; and a mock
    viva built on "why" questions. Why repeat a reading? What does the slope of this graph represent? What happens
    with a thicker wire? A student who has answered those aloud is ready for the examiner.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-late">Can a tutor keep a late physics slot in your part of Pune?</h2>
  <p>
    Physics often starts after coaching, which puts the lesson in the evening, when office traffic is still heavy
    on several roads. These six neighbourhoods show how the route shapes the slot. Browse tutors by locality on our
    <a href="{{ url('/city/pune') }}">Pune page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Central and west: strong rail links, and a suburb still waiting for Line 3</h3>
      <p>
        {!! $ppA('shivajinagar', 'Shivajinagar') !!} has the strongest rail links in west Pune: Shivaji Nagar station on
        the Purple Line, the District Court interchange with the Aqua Line, and suburban trains towards Lonavala.
        Weekday traffic near University Road is heavy at office hours, so late afternoon or the weekend works better.
        {!! $ppA('baner', 'Baner') !!} mixes office blocks with high-rise societies. Line 3 is being built through it,
        but no Baner station was open when this was written, so tutors from Aundh, Balewadi or Pashan come by
        two-wheeler; a slightly later slot avoids the Baner Road rush.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The IT belts: north-west and east</h3>
      <p>
        {!! $ppA('hinjewadi', 'Hinjewadi') !!} surrounds the IT park, with large townships where the gate needs a
        visitor entry. Roads are very busy at office hours, so early-evening or weekend sessions are easier, and an
        online session helps on the busiest days. {!! $ppA('kharadi', 'Kharadi') !!} grew from a riverside village into
        an office hub of apartment towers. There is no metro station yet; Ramwadi is the nearest. Sort out gate
        registration and visitor parking before the first class, and start after the office wave on Nagar Road.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South: a society road and a highway suburb</h3>
      <p>
        {!! $ppA('nibm-road', 'NIBM Road') !!} is mostly apartment societies, popular with families working in the
        Hadapsar offices. The nearest metro stations are on the Purple Line near Swargate, so tutors come by
        two-wheeler, bus or auto; a slot just after the school rush suits the main road. {!! $ppA('katraj', 'Katraj') !!}
        sits at the foot of the ghat on the Satara highway, with houses, cooperative societies and new complexes. The
        Purple Line's Katraj extension is under construction; until it opens, tutors come by bus or two-wheeler.
      </p>
    </div>
  </div>
  <p>
    When coaching runs long, switching one weekly lesson online with the same tutor saves a late trip and keeps the
    syllabus on schedule.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-other">What should ISC, IB, IGCSE and HSC families check?</h2>
  <ul>
    <li><strong>IB Diploma.</strong> May 2025 brought the first exams on a new physics guide, organised as five themes lettered A to E, with the former options and Paper 3 removed. Suggested teaching time is 150 hours for SL and 240 for HL. The scientific investigation stays entirely the student's: a tutor can talk through the plan but does not write it. Revision books for the older course are still sold, so look at the publication date. Read our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to IB physics at SL and HL</a>.</li>
    <li><strong>ISC.</strong> Assessment covers theory, practicals and a project, and CISCE examiners look for fuller reasoning than a short CBSE reply. Check that the tutor is teaching the syllabus for your child's exam year.</li>
    <li><strong>Cambridge IGCSE.</strong> Entered at Core or Extended. A student who joins Class 11 on an Indian board later usually needs a head start on vectors, graphs and derivations.</li>
    <li><strong>Maharashtra HSC.</strong> The state board sets its own syllabus and papers for Class 12. We keep to general advice here: the tutor should work from the prescribed textbook and the board's official notices.</li>
  </ul>
  <p>
    Tutors for these courses are scarcer than CBSE tutors, so mention the course in your first message. If no
    specialist can come to you, an online specialist and a local tutor who marks written practice can share the
    work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-eleven">Why start physics tuition in Class 11?</h2>
  <p>
    Because gaps are cheapest to fix early. Within a few months Class 11 covers units and kinematics, then the laws
    of motion, work and energy, rotational motion and gravitation. Every one of these relies on vectors, graphs and
    rates of change, and the physics class can reach them before the maths class does. In Class 12 the same toolkit
    returns with charges and fields instead of masses, so one term spent on resolving vectors and reading slopes saves
    far more effort in the board year. Families still choosing a stream can read our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to the Class 11 stream decision</a>; the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page takes the chapters in order,
    and the <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers the national picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-fees">What does physics tuition in Pune cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor quotes their
    own fee. What moves it is the exam in question, how much of that level the tutor has taught, the evening trip
    into your zone and the number of lessons each week; online lessons with the same person can be cheaper. Fees
    are on your shortlist before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pnp-demo">How do you arrange a physics demo in Pune?</h2>
  <p>
    Share your child's class and course, the main goal (board, JEE or NEET), your neighbourhood with society or lane,
    and which evenings are free once school and coaching are done. Two or three physics tutors come back with their
    fees; pick one, and the first class is a free demo. A poor fit leads to another demo, and changing tutor at any
    later point is also free. Where no suitable tutor can travel at that hour, online or part-online lessons are the
    alternative. NXTutors has its office in Sector 66, Gurugram, and teaches online nationwide.
  </p>
  <p>
    If you teach physics and live in Pune, current student requests are listed on the
    <a href="{{ url('/tuition-jobs/pune') }}">Pune tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
