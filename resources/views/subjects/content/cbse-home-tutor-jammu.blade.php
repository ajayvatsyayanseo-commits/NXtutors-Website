{{--
  Board page for "CBSE home tutor Jammu". Authors: Abhinandan Tiwary (role:
  Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE and ICSE
  science). No anecdotes, years or results are claimed. No schools, coaching
  institutes or people are named. Capitals phase 2 writer (subjects-b),
  3 Oct 2026.

  CBSE facts only as the Gurgaon board hub (cbse-home-tutor-gurgaon) states
  them, which cites cbseacademic.nic.in / cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20 in major subjects, 33% pass, about
  half competency-focused questions, Class IX common paper + optional
  Advanced 25 marks / 1 hour, not in aggregate, 50%+ noted; Basic/Standard
  discontinued except the 2026-27 Class X batch; third language assessed
  internally); Notification 14.02.2026 on two Class X board exams (first
  compulsory, improve up to three of science, maths, social science,
  languages); Curriculum 2026-27 Senior Secondary (Physics 042, Chemistry 043,
  Biology 044 at 70 + 30; Mathematics 041 / Applied Mathematics 241, one only;
  Accountancy 055, Economics 030, Business Studies 054 at 80 + 20).
  JKBOSE comparison facts from jkbose.jk.gov.in, read 3 Oct 2026:
  - Syllabus-for-10th-class.html -> pdf/Syllabi Class 10th 2026 (reedited).pdf:
    five compulsory subjects (General English, Urdu or Hindi, Mathematics,
    Social Science, Science); 80 board + 20 internal (periodic assessment 10,
    portfolio 5, subject enrichment 5); science prescribed textbook published by
    the J&K Board of School Education; summer-zone areas of the Jammu Division on
    the 2026-27 session.
  - Home page: examinations for Class 10, Class 11 (Higher Secondary Part I)
    and Class 12 (Higher Secondary Part II).
  Local detail only from database/seo-content/areas/jammu-research.json.
  Jammu's board mix only as the /city/jammu hub states it (no shares). Fee
  wording is the approved sentence. Area links render only for active areas.
--}}
@php
  $jcbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jcbA = function (string $slug, string $label) use ($jcbSlugs) {
      return in_array($slug, $jcbSlugs, true)
          ? '<a href="' . e(url('/city/jammu/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jcbGuideTitle">
  <h2 id="jcbGuideTitle">CBSE home tutors in Jammu: NCERT, the new Class 10 rules and written answers</h2>

  <p class="nx-guide__lede">
    Jammu families study under CBSE, under the union territory's own board, under CISCE for ICSE and ISC, and in
    smaller numbers under IB or IGCSE. A CBSE tutor in Jammu often has two jobs at once: keep a child steady on the NCERT
    course through the board years, and help families who move between CBSE and JKBOSE understand what changes. This
    page explains the CBSE structure from Class 6 to Class 12 as the board's current curriculum describes it, the
    2026-27 changes for Classes 9 and 10, how CBSE study differs from JKBOSE in practice, the subjects Jammu parents
    ask about, how tutors reach each part of the city, and what to check in the free demo. Class 10 maths notes come
    from Abhinandan Tiwary and science notes from Aaditya Kashyap.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jcb-stages">Class by class</a> ·
    <a href="#jcb-secondary">Classes 9 and 10 now</a> ·
    <a href="#jcb-senior">Classes 11 and 12</a> ·
    <a href="#jcb-internal">School-assessed marks</a> ·
    <a href="#jcb-jkbose">CBSE and JKBOSE</a> ·
    <a href="#jcb-hour">A good hour</a> ·
    <a href="#jcb-subjects">Subjects</a> ·
    <a href="#jcb-areas">Localities</a> ·
    <a href="#jcb-mode">Home or online</a> ·
    <a href="#jcb-demo">Demo</a> ·
    <a href="#jcb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jcb-stages">What CBSE expects, class by class</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12, and where a Jammu tutor helps most</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Who sets the exam</th><th scope="col">Common sticking point</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school</td><td>Fractions, negative numbers, reading a science paragraph closely</td><td>Repair early gaps and build the habit of showing working</td></tr>
      <tr><td>9</td><td>The school: an 80-mark annual paper and 20 internal marks</td><td>Maths and science both widen at once</td><td>Chapter tests, and a decision on the Advanced option</td></tr>
      <tr><td>10</td><td>CBSE board, with 20 marks assessed in school</td><td>Application and case-based questions</td><td>The current sample papers, marked against the official scheme</td></tr>
      <tr><td>11</td><td>The school</td><td>The step up in physics, chemistry and maths</td><td>A secure base before the board year</td></tr>
      <tr><td>12</td><td>CBSE board, theory plus practical or internal marks</td><td>Revising everything while entrance tests compete for time</td><td>One revision plan for board and entrance together</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A Class 10 subject needs 33% to pass. Trouble that appears "suddenly" in Class 9 usually began years earlier with
    fractions or early algebra, so for younger children a tutor who repairs is worth more than one who races ahead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-secondary">Classes 9 and 10 under the 2026-27 curriculum</h2>
  <p>
    Every Class 9 student takes one common paper in maths and one in science, each of 80 marks. In addition, a
    student may choose an Advanced paper in maths, science, both or neither: one hour, 25 marks, entirely higher-order
    questions on additional content. These marks stay outside the aggregate, and a score of 50% or more is recorded on
    the marksheet. The old Basic and Standard split in maths is being retired, with the 2026-27 Class 10 batch the last
    to complete it. Our advice: take Advanced only where your child is already comfortable in that subject.
  </p>
  <p>
    Class 10 now has two board examinations. The first is compulsory for everyone. A student who passes may sit the
    second to improve marks in up to three of science, maths, social science and the languages. Treat the first as the
    real exam, not a rehearsal. CBSE also says roughly half of each secondary paper is competency-based: passages,
    sources, data and situations rather than straight recall. A third language is compulsory in the transition years
    and is assessed by the school rather than by a board paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-senior">Classes 11 and 12: theory, practicals and internal work</h2>
  <ul>
    <li><strong>Physics, Chemistry, Biology:</strong> 70 marks for theory and 30 for practical work.</li>
    <li><strong>Mathematics or Applied Mathematics:</strong> one or the other, 80 for theory and 20 internal.</li>
    <li><strong>Accountancy, Economics, Business Studies:</strong> 80 for theory and 20 internal.</li>
  </ul>
  <p>
    The Class 12 paper covers the whole Class 12 syllabus, and CBSE has said senior papers will lean further towards
    real-life application. Because the paper design arrives each year with the sample paper, a tutor working from last
    year's format is already behind. For board-year help, see our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a>,
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-internal">The marks that are earned before the board paper</h2>
  <p>
    In both the secondary and senior years, part of every major CBSE subject is settled in school: 20 marks in Class 10,
    and 30 practical marks in senior physics, chemistry and biology. These are the easiest marks to protect and the
    easiest to lose through neglect, because coaching and most guidebooks ignore them. A Jammu tutor can help in three
    plain ways:
  </p>
  <ul>
    <li><strong>A record that is never behind.</strong> Practical write-ups, activity sheets and project work checked at the end of each month, not in the final fortnight.</li>
    <li><strong>Viva practice.</strong> A few spoken questions on each experiment, so the student can explain the aim, the method and the sources of error in their own words.</li>
    <li><strong>School tests treated as rehearsals.</strong> Each periodic test reviewed with the same care as a board sample paper, because the habits carry over.</li>
  </ul>
  <p>
    Ask the tutor at the start how they will keep this side current; a vague answer usually means it will be left to
    the school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-jkbose">CBSE and JKBOSE: what a Jammu family should know before switching</h2>
  <p>
    When a Jammu child moves from a JKBOSE school to a CBSE one, or the other way, the
    content is related, but the routines differ in ways a tutor should plan for. On the JKBOSE side, the details below
    are from the board's own syllabus documents on jkbose.jk.gov.in.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Points to check when a Jammu student moves between CBSE and JKBOSE</caption>
    <thead>
      <tr><th scope="col">Point</th><th scope="col">CBSE</th><th scope="col">JKBOSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 10 marks</td><td>80 board + 20 internal in major subjects</td><td>80 board + 20 internal, the internal part made of periodic tests, a portfolio and subject enrichment work</td></tr>
      <tr><td>Books</td><td>NCERT throughout</td><td>The board's own textbooks at Class 10, including its science book; NCERT appears in some senior subjects</td></tr>
      <tr><td>Class 11</td><td>School examination</td><td>A board examination, Higher Secondary Part I</td></tr>
      <tr><td>Calendar</td><td>A national academic session starting in April</td><td>Separate summer-zone and winter-zone sessions; the summer-zone areas of the Jammu Division follow the 2026-27 session</td></tr>
      <tr><td>Class 10 language</td><td>A third language in the transition years</td><td>Urdu or Hindi compulsory, with optional languages such as Dogri and Punjabi</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A student arriving in CBSE from JKBOSE usually knows the ideas but needs a few weeks with NCERT wording and CBSE's
    competency questions. A student going the other way needs the board's own textbook and its model papers, and must
    take Class 11 seriously as an exam year. Our <a href="{{ url('/jkbose-tutor-jammu') }}">JKBOSE tutors in Jammu</a>
    page explains that board in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-hour">What a good CBSE hour looks like</h2>
  <p>
    For a Class 9 or 10 student, two sessions of about an hour each week usually achieve more than one long weekend
    sitting. A useful pattern:
  </p>
  <ol>
    <li><strong>Start with the last school test.</strong> Which marks were lost, and why.</li>
    <li><strong>Spend the largest part on one idea.</strong> NCERT explanation first, then exemplar questions, then one competency question on the same concept.</li>
    <li><strong>Then write.</strong> A full board-style answer, marked line by line for steps, units, labelled diagrams and presentation.</li>
    <li><strong>Close with the plan.</strong> What to finish before the next session.</li>
  </ol>
  <p>
    If your child thinks in Hindi but writes in English, the tutor can explain in Hindi and still insist the written
    answer is clear English. Ask for a short monthly note of chapters covered, test scores and repeated errors. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> guide and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> support the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-subjects">Subjects and where to find each tutor</h2>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-jammu') }}">Maths home tutors in Jammu</a>, with board-year detail at <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12</a>.</li>
    <li><a href="{{ url('/science-home-tutor-jammu') }}">Science tutors</a> up to Class 10; <a href="{{ url('/physics-home-tutor-jammu') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-jammu') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-jammu') }}">biology</a> for the senior classes.</li>
    <li><a href="{{ url('/english-home-tutor-jammu') }}">English tutors</a> for writing and literature.</li>
    <li>Entrance preparation alongside the board: <a href="{{ url('/jee-home-tutor-jammu') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-jammu') }}">NEET</a> home tutors in Jammu.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-areas">How tutors reach your part of Jammu</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Jammu localities and a tip for each</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $jcbA('nanak-nagar', 'Nanak Nagar') !!}</td><td>Tutors already teaching in Gandhi Nagar or Trikuta Nagar can add your home easily; an early slot beats the evening fill-up towards the Gandhi Nagar market</td></tr>
      <tr><td>{!! $jcbA('old-city', 'Old City') !!}</td><td>Narrow lanes open into small squares; give the exact lane and a nearby square, as some homes are easier to reach on foot</td></tr>
      <tr><td>{!! $jcbA('sidhra', 'Sidhra') !!}</td><td>Newer houses and apartment buildings; a complex may register visitors at the gate, so share the tutor's name ahead of time</td></tr>
      <tr><td>{!! $jcbA('janipur', 'Janipur') !!}</td><td>Pick a tutor from Janipur, Rehari, Roop Nagar or Paloura for regular classes; Janipur Road is often congested</td></tr>
      <tr><td>{!! $jcbA('roop-nagar', 'Roop Nagar') !!}</td><td>A planned colony on the foothills; a tutor based nearby and a fixed weekday slot keep classes regular</td></tr>
      <tr><td>{!! $jcbA('talab-tillo', 'Talab Tillo') !!}</td><td>Tutors from Bakshi Nagar, Janipur and Udheywala reach it easily; the chowk is crowded in the evening</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone pages go further: <a href="{{ url('/city/jammu/zone/rail-head-new-city') }}">Rail Head and New City</a>,
    <a href="{{ url('/city/jammu/zone/trikuta-channi') }}">Trikuta and Channi</a>,
    <a href="{{ url('/city/jammu/zone/kunjwani-sainik-colony') }}">Kunjwani and Sainik Colony</a>,
    <a href="{{ url('/city/jammu/zone/old-city-sidhra') }}">Old City and Sidhra</a> and
    <a href="{{ url('/city/jammu/zone/janipur-akhnoor-road') }}">Janipur and Akhnoor Road</a>. All localities are on
    the <a href="{{ url('/city/jammu') }}">Jammu home tutors</a> page, and the
    <a href="{{ url('/blog/jammu-home-tuition-guide') }}">Jammu home tuition guide</a> explains timing in each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-mode">Home or online for CBSE in Jammu?</h2>
  <p>
    Home suits younger children, anyone who drifts on a screen, and subjects where every written line needs checking:
    maths, physics numericals, chemical equations and accountancy formats. Online is the better tool for a short doubt
    session on a busy day, for a senior subject whose right tutor lives on the other bank of the Tawi, and for the
    hottest afternoons or the darkest winter evenings when a trip across town makes little sense. Many families keep
    the same tutor for both. The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a>
    comparison and our <a href="{{ url('/online-tutor-jammu') }}">online tutors for Jammu</a> page set out the details.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-demo">Five questions for a CBSE tutor at the demo</h2>
  <ol>
    <li>"Which sample paper are you working from?" It should be this year's, from the CBSE academic website.</li>
    <li>"Show my child how to read a case-based question." Watch whether they teach the reading, not only the answer.</li>
    <li>"What would you change for a student coming from JKBOSE?" Listen for NCERT wording and the competency questions.</li>
    <li>"How will you handle the Advanced option in Class 9, or the second Class 10 exam?" The answer should be specific to your child.</li>
    <li>"Where do you travel from, and will the hour hold in summer and winter?"</li>
  </ol>
  <p>
    If the fit is wrong, we arrange another demo; switching is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jcb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, shown to you before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and <a href="{{ url('/blog/home-tuition-fees-jammu') }}">home tuition fees in Jammu</a> cover what to ask.
  </p>
  <p>
    Tell us the class, subjects, school timings and your colony with a nearby chowk or morh. You get two or three
    matched tutors and a <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    any time. For CBSE in another city, see our <a href="{{ url('/cbse-home-tutor-gurgaon') }}">Gurgaon CBSE</a> page.
    Teachers who know the NCERT course can see <a href="{{ url('/tuition-jobs/jammu') }}">tuition jobs in Jammu</a>.
  </p>
  </section>

  </div>
</article>
