{{--
  Long-form guide for the "physics home tutor Shillong" page (Classes 11 and
  12: MBOSE HSSLC, CBSE, ISC/IB, with JEE and NEET alongside). Byline in config:
  NXTutors Academic Team. Page writer (capitals wave 2, subjects), 3 Oct 2026.

  Local facts only from database/seo-content/areas/shillong-research.json.
  No school, college, university, coaching institute, hospital, society or
  people's names; no distances or travel times; only the allowed fee
  sentence; no defence or tourism references.

  MBOSE facts, read on www.mbose.in on 3 Oct 2026:
  - Notification No. 40, 6 Nov 2024: Class XI-XII subjects that use the CBSE
    syllabus and NCERT books follow the CBSE question pattern (Class XI from
    2024-25, HSSLC from 2026): https://www.mbose.in/public/media_file/1782119473.pdf
  - Notification No. 1020, 28 Aug 2026: new Class XII sample papers, effective
    for HSSLC 2027 and for Class XI internal/promotion exams from 2027:
    https://www.mbose.in/public/notice/17879049240.pdf
  - HSSLC Physics sample paper: https://www.mbose.in/public/media_file/1787905161.pdf
    70 marks, 3 hours, 33 compulsory questions; A 16 (12 MCQ + 4
    assertion-reason) x 1; B 5 x 2; C 7 x 3; D 2 case-study x 4; E 3 long x 5;
    internal choice in two B questions, one C question and all three E
    questions; physical constants supplied.
  - Notice of 9 Sep 2026 (HSSLC 2027 form filling tentatively late October to
    late November 2026): https://www.mbose.in/public/notice/17889610260.pdf
  - Home page: HSSLC results published for Arts, Science, Commerce and
    Vocational streams: https://www.mbose.in/
  CBSE, JEE, NEET and IB facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions, blocks 33/18/12/7, practical scheme and record), jee-preparation-
  gurgaon-coaching-or-home-tutor (JEE Main 2026), neet-preparation-gurgaon-
  coaching-or-home-tutor (NEET UG 2026) and -ib-physics-slhl-iaee.

  Area links render only when that Shillong area page exists and is active.
--}}
@php
  $slpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $slpA = function (string $slug, string $label) use ($slpSlugs) {
      return in_array($slug, $slpSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide slp-guide" aria-labelledby="slpGuideTitle">
  <h2 id="slpGuideTitle">Physics home tutor in Shillong: one paper pattern for two boards, and a separate plan for the entrance exam</h2>

  <p class="nx-guide__lede">
    For a Shillong student in Class 11 or 12, physics has recently become simpler in one way. The Meghalaya Board of
    School Education now sets HSSLC physics to the CBSE question pattern, so an MBOSE student and a CBSE student face
    papers of the same shape: 33 questions over three hours, from one-mark items to five-mark long answers. What still
    differs is the school calendar, the practical arrangements and, for many students, an engineering or medical
    entrance that rewards a different skill again. A home physics tutor's real value is in the working: reading your
    child's solutions line by line and finding the step that keeps breaking. NXTutors suggests two or three physics
    tutors who know your child's target and can reach your locality. Their fees are listed first, and the first
    lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#slp-target">Which target</a> ·
    <a href="#slp-paper">The 33-question paper</a> ·
    <a href="#slp-hsslc">MBOSE HSSLC</a> ·
    <a href="#slp-prac">Practicals</a> ·
    <a href="#slp-entrance">JEE and NEET</a> ·
    <a href="#slp-method">A method for working</a> ·
    <a href="#slp-local">Five localities</a> ·
    <a href="#slp-other">ISC and IB</a> ·
    <a href="#slp-fees">Fees</a> ·
    <a href="#slp-request">Your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="slp-target">Board paper, JEE or NEET: what is your child actually preparing for?</h2>
  <p>
    The chapters overlap, but each exam rewards a different habit. Settle the main target at the first meeting,
    because it decides how the weekly hours are spent.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where physics sits in each exam a Shillong senior student may face, and the skill that earns its marks</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Physics in it</th><th scope="col">Skill that earns marks</th></tr>
    </thead>
    <tbody>
      <tr><td>MBOSE HSSLC (Science stream)</td><td>A 70-mark, three-hour paper of 33 questions in the CBSE pattern, per the board's sample paper for 2027</td><td>Complete derivations, labelled diagrams and careful reading of case passages</td></tr>
      <tr><td>CBSE Class 12 (042)</td><td>70-mark theory paper of 33 questions, plus 30 practical marks</td><td>The same written skills, and a well-kept practical record</td></tr>
      <tr><td>JEE Main, 2026 pattern</td><td>25 of 75 questions, 5 with numerical answers; +4 right, −1 wrong</td><td>Multi-step problems against the clock</td></tr>
      <tr><td>NEET (UG), 2026 pattern</td><td>45 of 180 questions, 180 of 720 marks, on pen and paper</td><td>Exact NCERT-level ideas and restraint with guesses, since wrong answers cost a mark</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    NTA, not the school board, fixes what JEE and NEET cover, and its list can include topics a board no longer
    examines; check the latest information bulletin on nta.ac.in before your child skips a chapter. The
    <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">NEET physics tutor</a> pages explain how we match for each.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-paper">How the 33-question physics paper is built</h2>
  <p>
    The layout below appears in both MBOSE's HSSLC physics sample and the CBSE Class 12 paper. Knowing it lets a tutor plan
    practice section by section instead of chapter by chapter in the final months.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 physics theory paper, 70 marks: section layout shared by the MBOSE 2027 sample paper and CBSE</caption>
    <thead>
      <tr><th scope="col">Section</th><th scope="col">Questions</th><th scope="col">Marks</th><th scope="col">Practise at home</th></tr>
    </thead>
    <tbody>
      <tr><td>A</td><td>16 one-mark items: 12 multiple-choice, 4 assertion-reason</td><td>16</td><td>Quick recall; reading both statements before judging the reason</td></tr>
      <tr><td>B</td><td>5 two-mark questions</td><td>10</td><td>Short numericals with units, or a definition plus one line of reasoning</td></tr>
      <tr><td>C</td><td>7 three-mark questions</td><td>21</td><td>Short derivations and diagram-based answers</td></tr>
      <tr><td>D</td><td>2 case-study questions of four marks</td><td>8</td><td>Reading the passage first and answering from it</td></tr>
      <tr><td>E</td><td>3 long answers of five marks, each with an internal choice</td><td>15</td><td>Full derivations and multi-part numericals, timed</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The MBOSE sample also offers internal choice in two Section B questions and one in Section C, and supplies values
    of physical constants. CBSE groups its 2026-27 marks into four blocks: 33 for electrostatics, current,
    magnetism and alternating current; 18 for optics with electromagnetic waves; 12 for dual nature, atoms and
    nuclei; and 7 for semiconductor electronics, with no calculators allowed. The recurring derivations are listed in
    our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">guide to Class 12 physics</a>, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics
    tutor</a> page has a board-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-hsslc">What else an MBOSE HSSLC student should know</h2>
  <p>
    The board's notification of November 2024 applies the CBSE question pattern to Class 11 and 12 subjects taught
    from the CBSE syllabus and NCERT books, from the 2024-25 session for Class 11 and from the 2026 HSSLC. In August
    2026 the board issued new Class 12 sample papers for the 2027 HSSLC and said the same pattern will be used for
    Class 11 internal and promotion examinations from 2027. So Class 11 school exams now look like the board paper,
    which is a good reason to practise in that format from the start of Class 11.
  </p>
  <p>
    The board has also said that HSSLC 2027 application forms are expected to be filled between late October and late
    November 2026. Exam dates for the HSSLC are announced separately; check the notices on www.mbose.in. Our
    <a href="{{ url('/meghalaya-board-tutor-shillong') }}">MBOSE tutor in Shillong</a> page covers the board as a
    whole, including the SSLC.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-prac">The practical: marks a coaching batch never touches</h2>
  <p>
    On the CBSE side the practical is worth 30: 14 for the two experiments, 5 for the viva, 5 for the record, and 3
    each for one activity and the investigatory project. The record itself needs at least eight experiments, six
    activities and the project report. MBOSE students should check the practical scheme in the board's current syllabus with their
    school, since this page does not set one out.
  </p>
  <p>
    Nobody can do the experiments at a dining table, yet a home tutor can still read through the record book,
    looking for a stated aim, a neat diagram and a complete table of readings in every entry; go over precautions
    and likely errors; and hold a short mock viva:
    why take several readings, what does the slope of this graph tell you, which reading is least reliable and why.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-entrance">Fitting JEE or NEET physics around the board year</h2>
  <p>
    Many senior students also prepare for an entrance exam, through a coaching batch or online. A home tutor who
    repeats the batch lecture adds little. The useful work is narrower: clear the problems the student could not
    finish from the coaching sheet, sort every lost mark in a mock test into a concept gap, a careless slip or a
    question that should have been skipped, and keep one session a week for the board paper, which entrance work
    tends to crowd out. Our comparisons of coaching and home tutoring for
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE</a> and
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET</a> set out the choices, and
    the <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic plan</a> and
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a> help with priorities.
    For the wider picture, see the national <a href="{{ url('/jee-home-tutor') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor') }}">NEET</a> home tutor pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-method">A fixed method for every written solution</h2>
  <p>
    Whatever the exam, physics marks are lost in the working. A tutor should insist on the same order for every
    problem until it is automatic:
  </p>
  <ol>
    <li><strong>Draw first.</strong> A diagram with directions, charges, rays or currents marked, before any formula.</li>
    <li><strong>Name the law.</strong> One line in words: which principle applies and why.</li>
    <li><strong>Substitute with units.</strong> Units on every line, powers of ten written out in full.</li>
    <li><strong>Check the answer.</strong> Is the sign sensible? Is the size believable?</li>
  </ol>
  <p>
    Keep one shared notebook of errors: the problem as set, the first attempt left as it was, one line on what went
    wrong, and a clean solution written a few days later without looking back. Bring it, or the last two school or
    coaching tests, to the free demo; a capable tutor should find the weak step within a few pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-local">After school or coaching: five Shillong localities</h2>
  <p>
    Once school and any coaching are over, physics often lands late in the evening, and a tutor's route decides
    whether that slot survives the term. Shillong has no railway; tutors come by shared taxi, bus or their own vehicle. Find tutors by
    locality on the <a href="{{ url('/city/shillong') }}">Shillong page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening physics tuition in five Shillong localities: who can reach them easily, and a timing tip</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Easiest tutors to match</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $slpA('mawkhar', 'Mawkhar') !!}</td><td>Tutors coming by shared taxi or bus to the Jhalupara stand on GS Road</td><td>Late afternoon or evening, after the market trading rush</td></tr>
      <tr><td>{!! $slpA('nongthymmai', 'Nongthymmai') !!}</td><td>Tutors already teaching in Laitumkhrah or Malki; the Jingkieng stops are handy for a first visit</td><td>Book early in the term; slots just after school go quickly</td></tr>
      <tr><td>{!! $slpA('madanrting', 'Madanrting') !!}</td><td>Tutors who teach in Nongthymmai, Rynjah or Laitumkhrah and can add one more home along the main road</td><td>Meet at a named bus stop the first time; new lanes may not show on maps</td></tr>
      <tr><td>{!! $slpA('nongmynsong', 'Nongmynsong') !!}</td><td>Tutors from Pynthorumkhrah or Rynjah; the Nongmynsong and Umkdait stops are good meeting points</td><td>A weekday evening slot, with an extra class before exams</td></tr>
      <tr><td>{!! $slpA('upper-shillong', 'Upper Shillong') !!}</td><td>Few tutors live close by, so a home tutor plus an online specialist is common</td><td>An earlier slot when rain, mist or winter cold sets in</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When coaching runs late, swap that evening's session for an online hour with the same tutor. The zone guides for
    <a href="{{ url('/city/shillong/zone/laitumkhrah-rynjah') }}">Laitumkhrah and Rynjah</a> and
    <a href="{{ url('/city/shillong/zone/mawlai-pynthorumkhrah') }}">Mawlai and Pynthorumkhrah</a> add more timing
    advice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-other">ISC and IB physics</h2>
  <p>
    <strong>ISC.</strong> Practical work and a project are marked by CISCE beside the written paper, and answers need
    reasoning rather than one memorised line; ask whether the tutor has taught the syllabus for your child's exam year.
    <strong>IB Diploma.</strong> The current guide, examined first in May 2025, is built on five themes; the written
    papers make up 80% of the grade and an investigation the student designs makes up 20%, with 150 teaching hours
    at SL and 240 at HL. Read our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics guide</a>.
    Such specialists are few in any one city, so an online tutor often fills the gap.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-fees">What does a physics home tutor in Shillong charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors price their own time. Expect the figure to move with the goal, whether board or entrance, with years spent
    teaching that exam, with the hour and route to your home, and with the number of weekly sessions. Every fee is shown before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">Shillong home tuition fees</a> article lists the questions
    worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="slp-request">What to send us for a physics shortlist</h2>
  <p>
    Tell us the class, board and main goal, which days coaching takes up, your locality with a landmark or bus stop,
    and which evenings are open. Two or three physics tutors come back with fees attached, and you pick one for the
    free demo. If it does not click, a second demo follows, and a later change of tutor costs nothing. Where no
    suitable tutor can make the trip at your hour, we propose lessons online or a mix of both. NXTutors is based in Sector 66, Gurugram, and teaches
    online across India; the national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers
    other cities. Many students pair this page with the
    <a href="{{ url('/chemistry-home-tutor-shillong') }}">chemistry</a> and
    <a href="{{ url('/maths-home-tutor-shillong') }}">maths</a> pages for Shillong, and Class 11 starters can read the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page.
  </p>
  <p>
    Physics teachers living in Shillong can see student requests on
    <a href="{{ url('/tuition-jobs/shillong') }}">Shillong tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
