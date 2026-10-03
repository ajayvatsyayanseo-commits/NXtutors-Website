{{--
  Long-form guide for the "physics home tutor Itanagar" page, Classes 11 and 12
  with JEE and NEET (state-capital wave 2, compact depth, subjects writer,
  3 Oct 2026). Byline in config: NXTutors Academic Team.

  Board position: CBSE's affiliation overview lists the government schools of
  Arunachal Pradesh among CBSE-affiliated schools
  (https://saras.cbse.gov.in/saras/attach/CHAPTER_1_CBSE_AN_OVERVIEW.pdf, read
  3 Oct 2026). No state board is named or described.

  Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-12-physics-strategies (70 + 30, 33 questions in sections A to E,
  unit blocks 33/18/12/7, recall share, practical scheme and record requirements,
  no calculators, transistors and logic gates out),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern, JEE
  Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (current guide first examined
  May 2025, five themes, papers 80%, investigation 20%, 150/240 hours).

  Local facts only from database/seo-content/areas/itanagar-research.json. No
  coaching institute, school, college, society or people's names, no distances or
  travel times, only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $itpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $itpA = function (string $slug, string $label) use ($itpSlugs) {
      return in_array($slug, $itpSlugs, true)
          ? '<a href="' . e(url('/city/itanagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide itp-guide" aria-labelledby="itpGuideTitle">
  <h2 id="itpGuideTitle">Physics home tutor in Itanagar: a senior-secondary plan that holds through dark evenings and monsoon weeks</h2>

  <p class="nx-guide__lede">
    Physics in Classes 11 and 12 is where many students in the capital first feel that school alone is not enough. The
    board paper asks for derivations, ray diagrams and practical records; JEE and NEET ask for speed with numericals
    and careful judgement under negative marking. Beyond the syllabus, the Itanagar capital region is a line of hill towns
    along one highway, and the evening hours when a senior student is free are also the hours when roads are busiest
    or, in the monsoon, slowest. We put forward two or three physics tutors who understand the exam your child is aiming at and can hold
    a regular slot, by visit or online. Their fees are shown before you meet anyone, and the opening lesson is a free
    demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#itp-target">Pick the target</a> ·
    <a href="#itp-theory">The 70 theory marks</a> ·
    <a href="#itp-sheet">Solving routine</a> ·
    <a href="#itp-lab">Practical marks</a> ·
    <a href="#itp-entrance">JEE and NEET</a> ·
    <a href="#itp-other">IB, ISC, IGCSE</a> ·
    <a href="#itp-reach">Five localities</a> ·
    <a href="#itp-cost">Fees</a> ·
    <a href="#itp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="itp-target">Board paper, JEE or NEET: what is your child training for?</h2>
  <p>
    The chapters overlap, but each exam pays for different skills. Settle on the main exam in the first week; the
    weekly problem sets all follow from that choice. CBSE lists the government schools of Arunachal Pradesh among its
    affiliated schools, so for a large group of students in the capital the school paper is CBSE physics (042).
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the exams an Itanagar senior student may take: share, marking and what to practise each week</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Physics in it</th><th scope="col">Marking</th><th scope="col">Practise each week</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 physics (042)</td><td>70-mark theory paper of 33 compulsory questions, plus 30 practical marks</td><td>Written answers, no calculator</td><td>Derivations, labelled diagrams, case-based reading</td></tr>
      <tr><td>JEE Main, 2026 pattern</td><td>25 questions in Paper 1, five of them with a numerical answer</td><td>+4 for a correct answer, −1 for a wrong one</td><td>Timed multi-step problems and an error review</td></tr>
      <tr><td>JEE Advanced</td><td>For 2026, open only to the top-ranked 2,50,000 from JEE Main</td><td>Decided each year by the institute running it</td><td>Multi-concept problems from past Advanced papers</td></tr>
      <tr><td>NEET (UG), 2026</td><td>45 of 180 questions, 180 of 720 marks, on pen and paper</td><td>+4 right, −1 wrong</td><td>NCERT-level accuracy and fewer guesses</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    An entrance syllabus is published by the body that runs the test, not by CBSE, and it may still include chapters
    the board has cut; check the latest NTA bulletin before your child skips anything.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-theory">How are the 70 theory marks in CBSE Class 12 physics grouped?</h2>
  <p>
    For 2026-27 the paper design is unchanged from last session. The fourteen NCERT chapters fall into four blocks:
  </p>
  <ul>
    <li><strong>Electricity and magnetism, 33 marks:</strong> electrostatics through to alternating current, close to half the paper, and the block to start early.</li>
    <li><strong>Optics with electromagnetic waves, 18 marks:</strong> marks are won or lost on ray diagrams and sign conventions.</li>
    <li><strong>Modern physics, 12 marks:</strong> dual nature, atoms and nuclei, often in short numericals.</li>
    <li><strong>Semiconductor electronics, 7 marks:</strong> older notes may still teach transistors and logic gates, which have left the syllabus.</li>
  </ul>
  <p>
    The 33 questions run in five sections: sixteen one-mark items in A (twelve multiple-choice, four
    assertion–reason), five two-mark questions in B, seven three-mark questions in C, two four-mark case studies in D
    and three five-mark long answers in E. Recall earns only about 38% of the marks; the paper gives values of constants, and no calculator may be used. There
    is a single main board exam in Class 12; watch cbse.gov.in for the 2027 timetable. Derivations that come up year
    after year are gathered in our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics
    strategies</a>, and a month-by-month plan is on the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12
    physics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-sheet">What should every physics session at home include?</h2>
  <p>
    With or without a coaching batch in the week, a home tutor earns the fee by doing what a crowded
    classroom cannot: watching one student solve, line by line. Three routines make that time count.
  </p>
  <ol>
    <li><strong>The same solving order every time.</strong> A diagram with directions marked, the law named in words, substitution with units on every line, and a last check that the answer's sign and size make sense.</li>
    <li><strong>An error notebook.</strong> Each entry holds the question, the first attempt left uncorrected, a short line naming the mistake, and a fresh solution attempted a few days on, from memory.</li>
    <li><strong>Test reading.</strong> Each mark dropped in a school test or mock is labelled: idea not understood, slip of the pen, or a question better left alone. The following week is planned around those labels.</li>
  </ol>
  <p>
    Bring the notebook or the two latest tests to the free demo. A tutor who knows the subject should be able to read
    them and name the weak step before teaching anything new.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-lab">The 30 practical marks: what can be prepared at home?</h2>
  <p>
    The practical exam is the most predictable part of physics and is easy to neglect. Two experiments, one per
    section, earn 7 marks apiece, so 14 in total. The viva and the record bring 5 marks each, while the activity and
    the investigatory project bring 3 each. Before the exam the student's file needs eight or more experiments split
    evenly between the two sections, six or more activities split the same way, and the write-up of the project.
  </p>
  <p>
    The apparatus stays in the school lab, but at home a tutor can read every entry in the file for its aim, figure and
    readings table, go through precautions and sources of error, and run a mock viva: why repeat a reading, what
    does the slope of this graph mean, which error matters most here.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-entrance">How does a home tutor fit JEE or NEET physics into Class 11 and 12?</h2>
  <p>
    Entrance preparation works better as a steady layer above the board course rather than a separate track that
    swallows it. In practice that means one session a week of timed objective problems from the chapter just finished,
    and one that ends with a full board answer written and marked. Class 11 is the cheaper year to start: mechanics
    leans on vectors and graphs that return all through Class 12. Read the
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">topic-by-topic JEE physics plan</a>, the list of
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics chapters that repay the most time</a>, and our
    comparison of <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home
    tutor for JEE</a>. How we match for each exam is set out on the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics
    tutor</a> and <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-other">IB, ISC or IGCSE physics</h2>
  <p>
    <strong>IB Diploma:</strong> since the first exams on the current guide in May 2025, the course has five themes with
    no options; exams account for 80% of the grade, and the remaining 20% comes from an investigation that only the student may
    design. SL is planned around 150 teaching hours and HL around 240; see our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">guide to
    IB physics</a>. <strong>ISC:</strong> CISCE assesses practical work and a project alongside the theory paper, and
    wants reasoning set out in full sentences. <strong>Cambridge IGCSE:</strong> taken at Core or Extended level.
    Specialists for these courses are scarce in the capital, so an online tutor is often the realistic choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-reach">Five localities and the evening physics slot</h2>
  <p>
    Senior students often get home late, which pushes physics into the evening. Whether that slot holds depends on the
    tutor's route along the highway. The <a href="{{ url('/city/itanagar') }}">Itanagar home tutors page</a> lists
    every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five localities in the capital region: the setting, how a tutor gets in, and a tip for evening physics</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Setting</th><th scope="col">Getting in</th><th scope="col">Evening tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $itpA('vivek-vihar-itanagar', 'Vivek Vihar') !!}</td><td>Government quarters, officers' colonies and hillside houses between the highway and the Senki River</td><td>Parking outside houses; tell the colony gate the tutor's name and time</td><td>Hill roads are slower on rainy days, so keep a fixed online backup slot</td></tr>
      <tr><td>{!! $itpA('c-sector-itanagar', 'C-Sector') !!}</td><td>Officers' colonies, quarters and houses on the ridge above Gandhi Market</td><td>Parking is tight near the market; a two-wheeler or shared taxi is easier</td><td>Book after office traffic on the highway eases</td></tr>
      <tr><td>{!! $itpA('zero-point', 'Zero Point and P-Sector') !!}</td><td>Quarters in the lettered sectors, houses and older settlements on the slopes</td><td>Get down at the junction and walk or take an auto</td><td>Suits a tutor coming from either Itanagar or Naharlagun</td></tr>
      <tr><td>{!! $itpA('naharlagun', 'Naharlagun') !!}</td><td>Quarters, houses and buildings around the daily market; E Sector and G Extension up the hill</td><td>Shared taxi to the market, then an auto up the link roads</td><td>Fix the slot after the market junction's evening rush</td></tr>
      <tr><td>{!! $itpA('doimukh', 'Doimukh') !!}</td><td>A smaller town with independent houses</td><td>Doorstep arrival at most houses</td><td>Fewer local tutors, so a home-and-online mix is common</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When a heavy monsoon evening makes the trip unwise, hold that week's lesson on screen with the same tutor
    instead of cancelling. The <a href="{{ url('/online-tutor-itanagar') }}">online tutors for Itanagar</a> page covers
    the set-up, and the <a href="{{ url('/city/itanagar/zone/nirjuli-banderdewa-doimukh') }}">Nirjuli, Banderdewa and
    Doimukh</a> zone page explains the eastern end of the capital region.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-cost">What does a physics home tutor in Itanagar charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    fees, which depend on the target exam, their experience with it, the evening journey to your home and the
    number of sessions a week. Some tutors charge differently when the lesson is online. You see every fee before the
    demo, and the <a href="{{ url('/blog/home-tuition-fees-itanagar') }}">Itanagar home tuition fees</a> guide explains
    what moves it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itp-book">Asking for a physics shortlist</h2>
  <p>
    Tell us the class, the board, whether the aim is the board paper, JEE or NEET, the days already taken by any
    batch, a landmark near your home and which evenings are open. We return two or three matched physics tutors with their fees, and
    you choose whom to meet at the free demo. If the first demo is not right, a second follows, and a later change of tutor costs
    nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers other cities,
    and <a href="{{ url('/maths-home-tutor-itanagar') }}">maths</a> and
    <a href="{{ url('/chemistry-home-tutor-itanagar') }}">chemistry</a> tutors in Itanagar complete the science stream.
  </p>
  <p>
    Physics teachers who live in the capital region can see open requests on
    <a href="{{ url('/tuition-jobs/itanagar') }}">Itanagar tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
