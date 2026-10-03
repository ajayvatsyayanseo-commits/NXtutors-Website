{{--
  Long-form guide for the "physics home tutor Srinagar" page (Classes 11 and
  12, JEE and NEET alongside coaching, ISC/IB/IGCSE, JKBOSE in general terms).
  Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/srinagar-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026
  pattern, JEE Advanced 2026 eligibility),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern) and
  -ib-physics-slhl-iaee (new guide first assessed May 2025, teaching hours,
  five themes, two papers 80%, investigation 20%).
  Jammu and Kashmir Board of School Education: name and Higher Secondary
  examinations for Classes 11 and 12, from https://jkbose.jk.gov.in/
  (fetched 3 Oct 2026); no JKBOSE pattern given. Strictly practical and
  educational: winter only as timing advice. No coaching institute, school,
  college, hospital, society or people's names, no distances or travel
  times, only the allowed fee sentence.

  Area links render only when that Srinagar area page exists and is active.
--}}
@php
  $sgpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $sgpA = function (string $slug, string $label) use ($sgpSlugs) {
      return in_array($slug, $sgpSlugs, true)
          ? '<a href="' . e(url('/city/srinagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide sgp-guide" aria-labelledby="sgpGuideTitle">
  <h2 id="sgpGuideTitle">Physics home tutor in Srinagar: someone to read the working line by line while the batch races ahead</h2>

  <p class="nx-guide__lede">
    Senior physics in Srinagar often comes with a full timetable already: school in the morning and, for many students
    in Classes 11 and 12, a coaching batch for JEE or NEET afterwards. Hyderpora alone is known locally for its many
    coaching centres. What that week seldom includes is a person who sits beside the student, reads the working and
    finds the one step that keeps going wrong. That is where a home physics tutor earns the hour. NXTutors suggests two
    or three physics tutors who know your child's target exam and can reach your locality at a workable time. You see
    every fee in advance, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sgp-target">The target exam</a> ·
    <a href="#sgp-jk">JKBOSE physics</a> ·
    <a href="#sgp-coach">Beside coaching</a> ·
    <a href="#sgp-mocks">Reading a mock</a> ·
    <a href="#sgp-theory">CBSE theory paper</a> ·
    <a href="#sgp-lab">Practical marks</a> ·
    <a href="#sgp-intl">IB, ISC, IGCSE</a> ·
    <a href="#sgp-where">Six localities</a> ·
    <a href="#sgp-fees">Fees</a> ·
    <a href="#sgp-book">Booking</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sgp-target">Which exam is your child training for, and what does it pay for?</h2>
  <p>
    The chapters overlap, but the scoring does not. Settle the main target at the outset, because it shapes every
    problem the tutor sets.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics in the exams Srinagar's senior students prepare for: size, marking and what to practise each week</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Physics in it</th><th scope="col">Marking</th><th scope="col">Practise each week</th></tr>
    </thead>
    <tbody>
      <tr><td>JKBOSE Higher Secondary</td><td>Set by the Jammu and Kashmir Board of School Education</td><td>Take the current scheme from jkbose.jk.gov.in</td><td>The prescribed textbook, with full written answers and diagrams</td></tr>
      <tr><td>CBSE Class 12 (042)</td><td>A 70-mark theory paper of 33 compulsory questions, and 30 practical marks</td><td>Written answers, no calculator</td><td>Derivations, ray and circuit diagrams, case-based reading</td></tr>
      <tr><td>JEE Main, 2026 pattern</td><td>One third of Paper 1: 25 questions, 5 of them numerical-answer</td><td>+4 right, −1 wrong</td><td>Multi-step problems against the clock, then an error review</td></tr>
      <tr><td>JEE Advanced</td><td>For 2026, open only to the leading 2,50,000 JEE Main candidates</td><td>Set each year by the organising institute</td><td>Questions that join several ideas; past Advanced papers</td></tr>
      <tr><td>NEET (UG), as held in 2026</td><td>45 of 180 questions, 180 of 720 marks, on pen and paper</td><td>+4 right, −1 wrong</td><td>NCERT-level accuracy and disciplined guessing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    It is NTA, not the school board, that fixes the entrance syllabus, and a topic removed from the board course may still be tested, so read the latest bulletin on nta.ac.in before dropping any chapter. For chapter priorities, see our
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise plan</a> and the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">NEET physics high-yield chapters</a>; the
    <a href="{{ url('/physics-home-tutor/jee') }}">physics tutor for JEE</a> and
    <a href="{{ url('/physics-home-tutor/neet') }}">physics tutor for NEET</a> pages describe our matching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-jk">What about physics on the JKBOSE higher secondary course?</h2>
  <p>
    The Jammu and Kashmir Board of School Education conducts the Higher Secondary examinations for Classes 11 and 12
    and publishes its syllabus on jkbose.jk.gov.in. The board can revise its scheme, so we describe no JKBOSE physics
    paper here. Ask instead for a tutor who teaches from the prescribed book, explains in whatever language helps your
    child understand, and still builds the diagram-first, units-on-every-line habit that JEE and NEET reward, since
    many JKBOSE students sit those exams too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-coach">If coaching already teaches the chapters, what is left for a home tutor?</h2>
  <p>
    Plenty, provided the home hour is not a repeat of the coaching lecture. Three tasks rarely fit inside a
    coaching week:
  </p>
  <ul>
    <li><strong>Working through the backlog.</strong> Batches keep to the pace of the whole class. Problems left half done, or copied down without being understood, pile up; the home hour takes them one at a time.</li>
    <li><strong>Holding on to the board paper.</strong> Coaching aims at entrance-style questions, while the board paper pays for complete derivations, labelled figures and a finished practical file; one home session a week can keep these on track.</li>
    <li><strong>Making sense of test results.</strong> A total on its own tells you little; the useful step is to label each lost mark by cause and build the following week around the commonest one.</li>
  </ul>
  <p>
    Our article on <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">JEE coaching, a home tutor or both</a>
    weighs the choice, and the <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET version</a>
    does the same for medical entrance.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-mocks">How should a tutor go through a physics mock test?</h2>
  <p>
    Bring the latest coaching test, or two, to the free demo. Someone who knows physics should be able to read through
    it and name the weak step before teaching anything new. Week to week, a simple sorting table keeps the review
    honest:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Sorting lost marks from a physics mock, with the remedy for each kind</caption>
    <thead>
      <tr><th scope="col">Kind of loss</th><th scope="col">How it shows</th><th scope="col">Remedy in the next session</th></tr>
    </thead>
    <tbody>
      <tr><td>Concept gap</td><td>The student cannot say which law applies</td><td>Re-teach the idea with two fresh problems, then one mixed one</td></tr>
      <tr><td>Set-up error</td><td>Right law, wrong diagram or sign convention</td><td>Draw the diagram with directions before any equation, every time</td></tr>
      <tr><td>Arithmetic or unit slip</td><td>Correct method, wrong number or power of ten</td><td>Write units on every line and estimate the size of the answer first</td></tr>
      <tr><td>Time pressure</td><td>Blank answers at the end of the paper</td><td>Short timed sets and a rule for when to skip and return</td></tr>
      <tr><td>Negative marks</td><td>Many wrong guesses in a marking scheme of +4 and −1</td><td>Attempt only where two options can be ruled out</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-theory">CBSE Class 12 physics: where are the 70 theory marks?</h2>
  <p>
    CBSE's 2026-27 sample paper repeats last session's layout, and the marks are grouped into four blocks across the fourteen NCERT chapters:
  </p>
  <ul>
    <li><strong>Electricity and magnetism, 33 marks</strong>: electrostatics through alternating current, close to half the paper.</li>
    <li><strong>Electromagnetic waves and optics, 18 marks</strong>: a large share depends on accurate ray diagrams.</li>
    <li><strong>Modern physics, 12 marks</strong>: the dual nature of radiation and matter, atoms, and nuclei, usually tested through brief numericals.</li>
    <li><strong>Semiconductor electronics, 7 marks</strong>: transistors and logic gates are no longer on the syllabus, so any notes covering them belong to an older syllabus.</li>
  </ul>
  <p>
    Section A has sixteen one-mark items, twelve multiple choice and four assertion and reason. Section B asks five
    two-mark questions, C seven three-mark questions, D two four-mark case studies and E three five-mark long answers,
    making 33 questions. Recall accounts for only around 38% of marks; the paper gives the constants, and no calculator is permitted. There is a single main Class 12 board exam, with 2027 dates still to be posted on cbse.gov.in. The
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> list the derivations examiners return to, and the <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a>
    page sets out a board-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-lab">The 30 practical marks: what can be prepared at home?</h2>
  <p>
    Batches rarely spend time on the practical, though no part of the subject is easier to predict. Marks run as follows: 14 for two experiments (7 each, one per section), 5 for the record, 3 for an activity, 3 for the investigatory project and 5 for the viva. In the record there must be a minimum of eight experiments and six activities, split evenly between the two sections, along with the project report.
  </p>
  <p>
    Equipment never comes home, yet a tutor at the kitchen table can go through each write-up for its aim, figure and table of readings, rehearse precautions and likely errors, and put viva-style questions: why repeat a reading, what does the gradient of this graph mean? The long winter break, when days are short and some
    sessions move online, is a sensible time to bring the record fully up to date.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-intl">IB, ISC or IGCSE physics: what should a tutor know?</h2>
  <dl>
    <dt><strong>IB Diploma</strong></dt>
    <dd>May 2025 saw the first exams on the present guide, which is built on five lettered themes and drops both options and Paper 3. The written papers carry 80% between them; the other 20% is an investigation planned and written by the student alone. Recommended hours are 150 for SL and 240 for HL. See our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a>.</dd>
    <dt><strong>ISC</strong></dt>
    <dd>Besides theory, CISCE marks practical work and a project, and it looks for reasoning developed beyond a single line. Check that the tutor works from your exam year's syllabus.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>Sat at Core or Extended level; students who switch to an Indian board for Class 11 often need extra work on vectors and graphs.</dd>
  </dl>
  <p>
    On timing, starting in Class 11 tends to cost least overall, because the vectors and graphs of mechanics come back
    all through Class 12. See the <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page and
    our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-where">Can a physics tutor reach you after coaching in these six localities?</h2>
  <p>
    With school and coaching back to back, physics often lands late in the day, and the tutor's route decides whether that hour survives the term. The <a href="{{ url('/city/srinagar') }}">Srinagar page</a> lists every locality.
  </p>
  <dl>
    <dt><strong>Civil Lines</strong></dt>
    <dd>{!! $sgpA('rajbagh', 'Rajbagh') !!} is central and set along the Jhelum, so tutors from Jawahar Nagar, Sonwar or the Lal Chowk side can usually cover it; name the part, such as Rajbagh Extension or Aramwari, and fix the lesson after the school-time rush on the main roads.</dd>
    <dd>{!! $sgpA('sonwar', 'Sonwar') !!} runs parallel to the river below the Takht-i-Sulaiman hill. Its main road is crowded at school times and in the evening, while the inner colonies are quieter and easy to reach on foot.</dd>
    <dt><strong>West of the centre</strong></dt>
    <dd>{!! $sgpA('bemina', 'Bemina') !!} is a spread of planned colonies on the four-lane bypass, with room to park; mid-afternoon or a later evening slot avoids the peak.</dd>
    <dd>{!! $sgpA('batamaloo', 'Batamaloo') !!} mixes busy market roads with family lanes; a slot between the morning market and the evening return traffic is easiest.</dd>
    <dt><strong>Airport Road</strong></dt>
    <dd>{!! $sgpA('hyderpora', 'Hyderpora') !!} has independent houses and its many coaching centres; a tutor from Peerbagh or Sanat Nagar can come straight after the batch ends.</dd>
    <dd>{!! $sgpA('rawalpora', 'Rawalpora') !!} is a colony of houses with direct access to the door, and tutors from the Nowgam side can use the small bridge beside the railway bridge over the Doodhganga.</dd>
  </dl>
  <p>
    If coaching overruns, the same tutor can teach that evening online instead of the visit being cancelled.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-fees">What does a physics home tutor in Srinagar charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own rates. Expect the goal (board, JEE Main, JEE Advanced or NEET), the tutor's track record with it, a late journey to your area and the weekly number of lessons to affect the figure; online teaching by the same person can be cheaper. Fees are
    shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sgp-book">How do you ask for a physics shortlist?</h2>
  <p>
    Let us know the class and board, whether the aim is the school exam, JEE or NEET, which days coaching takes, where you live with a landmark, and which evenings are open. You get two or three physics tutors with fees, pick one for a free demo, and can ask for a second demo if it does not fit; a later change of tutor is free too. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. If no
    suitable tutor can come at that hour, we suggest an online or part-online plan. NXTutors works from Sector 66,
    Gurugram, and teaches online nationwide; the national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a>
    page covers other cities.
  </p>
  <p>
    Physics teachers living in Srinagar who want pupils close by can find current requests on the
    <a href="{{ url('/tuition-jobs/srinagar') }}">Srinagar tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
