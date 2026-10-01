{{--
  Long-form guide for the "Class 10 home tutor Delhi" page (CBSE first, then
  ICSE and IGCSE board year). Authors: Abhinandan Tiwary (Class 10 CBSE and
  ICSE maths) and Aaditya Kashyap (CBSE and ICSE science). Role statements only.
  No schools named. Kept distinct from class-10-home-tutor-gurgaon and
  class-10-home-tutor-mumbai.

  Official sources:
  - CBSE (cbseacademic.nic.in and cbse.gov.in, as cited on cbse-home-tutor-delhi,
    read 1 Oct 2026): Curriculum 2026-27 Secondary, Curriculum_SecP1_2026-27.pdf:
    80-mark board paper + 20 internal assessment in major subjects; 33% to
    pass; about 50% competency-focused questions; sample papers and marking
    schemes on cbseacademic.nic.in; Basic/Standard maths discontinued from
    2026-27 except for the 2026-27 Class X batch. Notification 14.02.2026, Two
    Board Examinations in Class X from 2026: first exam mandatory; improvement
    in up to three subjects among science, maths, social science and languages
    in the second exam. Dates for 2027 are not stated here.
  - CISCE ICSE Mathematics (51), Year 2027 syllabus (cisce.org): one 3-hour
    paper of 80 marks + 20 internal (assignments assessed by the subject
    teacher and an external examiner). ICSE Science (52) Physics, Chemistry,
    Biology: each one 2-hour, 80-mark paper + 20 internal practical work (as
    cited on icse-home-tutor-delhi).
  - Cambridge IGCSE 0580 (2025-2027): Core grades C-G, Extended A*-E; Pearson
    Edexcel International GCSE Mathematics A (4MA1) Foundation and Higher
    tiers, grades 9-1 (as cited on igcse-tutor-delhi).
  No Delhi state board is described. Local detail only from the Delhi city hub
  view (CBSE session opens in April; five stretches of the board year; pre-boards
  around the turn of the year in many schools), database/seo-content/zones/delhi.json,
  database/seo-content/areas/delhi-research.json and delhi-zone-guides.json.
  Fee range is the approved sentence. FAQs: faqs/class-10-home-tutor-delhi.php.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $d10Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $d10A = function (string $slug, string $label) use ($d10Slugs) {
      return in_array($slug, $d10Slugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="d10GuideTitle">
  <h2 id="d10GuideTitle">Class 10 home tutors in Delhi: the CBSE board year, and ICSE and IGCSE alongside</h2>

  <p class="nx-guide__lede">
    For most Delhi students, Class 10 means the CBSE board exam, and from 2026 that exam comes in two rounds: a
    mandatory first exam and a later sitting to improve up to three subjects. Others in the same colony are
    preparing for ICSE or IGCSE, with different papers and different risks. Abhinandan Tiwary covers Class 10 maths for
    CBSE and ICSE on NXTutors, and Aaditya Kashyap covers science for the same two boards. Between them they set out
    here what each route asks for, where tuition makes the biggest difference, a month-by-month plan from April, and
    the questions that expose a tutor's board knowledge at the demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#d10-cbse">The CBSE year</a> ·
    <a href="#d10-two">Two exams</a> ·
    <a href="#d10-other">ICSE and IGCSE</a> ·
    <a href="#d10-subjects">Subjects</a> ·
    <a href="#d10-calendar">The calendar</a> ·
    <a href="#d10-week">The week</a> ·
    <a href="#d10-zones">Reaching you</a> ·
    <a href="#d10-mode">Home or online</a> ·
    <a href="#d10-demo">The demo</a> ·
    <a href="#d10-fees">Fees</a> ·
    <a href="#d10-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="d10-cbse">What does the CBSE Class 10 year involve?</h2>
  <p>
    CBSE is the board most Delhi students sit, as our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> notes.
    In the main subjects, each paper has an 80-mark board exam and 20 marks of internal assessment from the school,
    and a student needs 33% to pass a subject. About half of the questions are competency-focused: case studies,
    assertion and reason, and familiar ideas in unfamiliar settings. What that means for a tutor:
  </p>
  <ul>
    <li><strong>NCERT first, every exercise and example.</strong> The paper is written from the NCERT books, and the in-text questions are as useful as the end-of-chapter ones.</li>
    <li><strong>Sample papers and marking schemes from cbseacademic.nic.in,</strong> not only guidebooks. Answers should be checked line by line against the scheme so that no method mark is lost.</li>
    <li><strong>Internal assessment kept complete.</strong> The 20 school marks are the easiest in the year to secure and the most often neglected.</li>
    <li><strong>The maths level settled early.</strong> The Class 10 batch of 2026-27 still sits under the earlier Standard and Basic scheme for maths; the school will confirm which your child is entered for.</li>
  </ul>
  <p>
    Our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE home tutors in Delhi</a> page covers the board from Class 6
    to 12.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-two">How do the two CBSE board exams work?</h2>
  <p>
    Under CBSE's notification on two board examinations for Class 10 from 2026, the first exam is mandatory. A second
    exam gives students the chance to improve their performance in up to three subjects from science, maths, social
    science and languages. Dates for any year are announced by CBSE on cbse.gov.in; plan from the official notice, not
    from forwarded messages.
  </p>
  <p>
    The practical advice is simple. Prepare as though the first exam is the only one. The second sitting is a safety
    net for one or two subjects that went badly, not a plan to spread revision over a longer period. A tutor should
    help decide, soon after the first results, whether a second attempt in a subject is worth the extra weeks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-other">What changes on ICSE, IGCSE and Edexcel?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Non-CBSE Class 10 papers that Delhi tutors prepare students for</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">How the subject is assessed</th><th scope="col">Main risk</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE maths (CISCE)</td><td>A single paper of three hours worth 80 marks; the other 20 come from assignments, judged by the subject teacher together with an external examiner</td><td>Incomplete working and a broad syllabus left unrevised</td></tr>
      <tr><td>ICSE physics, chemistry, biology</td><td>Each a 2-hour, 80-mark paper, plus 20 internal marks for practical work</td><td>Three science papers to revise, each with its own definitions and diagrams</td></tr>
      <tr><td>Cambridge IGCSE maths (0580)</td><td>All marks from exams; Core leads to grades C–G, Extended to A*–E</td><td>Entering the wrong tier</td></tr>
      <tr><td>Edexcel International GCSE maths (4MA1)</td><td>Fully examined; Foundation or Higher tier, grades 9 to 1</td><td>Entering the wrong tier</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See our <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE</a> and <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE</a>
    tutor pages for Delhi, and the <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-subjects">Where does Class 10 tuition make the biggest difference?</h2>
  <ul>
    <li><strong>Maths:</strong> marks disappear on missing steps and on case-based questions, so this is where most families start. See <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors in Delhi</a>, the national <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> page and our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation</a> guide.</li>
    <li><strong>Science:</strong> physics numericals, balanced chemical equations and biology diagrams each need their own kind of practice. See <a href="{{ url('/science-home-tutor-delhi') }}">science home tutors in Delhi</a>, <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a> and our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">science notes</a>.</li>
    <li><strong>English:</strong> answer formats, writing tasks and literature extracts; a handful of targeted sessions is often enough. Our <a href="{{ url('/english-home-tutor-delhi') }}">English tutors in Delhi</a> page has more.</li>
    <li><strong>Social science:</strong> for most students, a reading timetable and map practice rather than weekly tuition.</li>
    <li><strong>Hindi or another language:</strong> quietly costly when ignored; a fixed weekly self-study slot keeps it on track.</li>
  </ul>
  <p>
    A single tutor can handle maths and science together when the gaps are small. When one subject is clearly behind,
    or the target is a very high score, paying for a specialist in that subject usually gives more for the money.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-calendar">A month-by-month board-year plan for Delhi</h2>
  <p>
    The CBSE session opens in April. In Delhi the board year usually moves through these stretches:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The Class 10 year in Delhi, from April to the board exam</caption>
    <thead>
      <tr><th scope="col">Months</th><th scope="col">What the tutor and student should do</th></tr>
    </thead>
    <tbody>
      <tr><td>April to June</td><td>Download the syllabus and sample papers; close Class 9 gaps; use the summer break to move ahead in maths and science</td></tr>
      <tr><td>July to September</td><td>A test every week on the chapter just finished, an error log, and first-term exams in many schools by September</td></tr>
      <tr><td>October to December</td><td>Complete the syllabus and all internal and practical work; start timed papers one subject at a time</td></tr>
      <tr><td>Pre-boards, around the turn of the year</td><td>Whole papers in one sitting, marked strictly with CBSE's scheme</td></tr>
      <tr><td>The last few weeks</td><td>Work only from the error log and the official date sheet; no new chapters</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ICSE and IGCSE schools run on their own calendars, though the rhythm is similar. Starting in April gives a tutor
    time to change how a student works; starting after the pre-boards leaves room only for exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-week">Building the Class 10 week</h2>
  <p>
    Some Class 10 students also attend coaching or group classes, and a metro ride home across Delhi can take most of an
    hour. Before adding a home tutor, list every hour of the week, travel included. Keep an hour a day for self-study,
    put home tuition on days without coaching, have the tutor follow the chapters school is teaching that week with
    board-style written answers, and guard one free evening and a proper night's sleep through the winter months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-zones">Getting a Class 10 tutor to your door, zone by zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Delhi zones: the usual route in and the slot that holds</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">How tutors usually arrive</th><th scope="col">Slot advice</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar &amp; Hauz Khas</a></td><td>Yellow Line to Chhatarpur or Qutub Minar for the southern end</td><td>Temple crowds slow the main road on festival days; weekdays are easier</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar &amp; Palam</a></td><td>Magenta Line to Dashrathpuri, Dabri Mor or Palam</td><td>Narrow lanes; metro plus e-rickshaw or a two-wheeler beats a car</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Blue Line to Sector 10 or 12</td><td>Weekday evening slots in family sectors fill first; book early</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden &amp; Punjabi Bagh</a></td><td>Blue Line along Najafgarh Road</td><td>Parking near the markets is hard; metro riders keep time better</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town &amp; North Campus</a></td><td>Yellow Line to Adarsh Nagar, Model Town or GTB Nagar</td><td>Market streets crowd in the evening; start before the rush</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar &amp; Shahdara</a></td><td>Pink Line, which has served Yamuna Vihar since the ring was completed in March 2026</td><td>Main roads peak at office hours; earlier slots help</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-mode">Should board-year tuition be at home or online?</h2>
  <p>
    For maths and science, a tutor at the table can follow each line as it is written, which is why most board-year
    families start at home. Online earns its place when the right ICSE or IGCSE specialist lives across the Yamuna or
    at the far end of a metro line, or when an evening trip is not worth an hour of travel. If maths is taught online,
    agree on a writing tablet, a shared whiteboard or a phone propped over the notebook before the first lesson. Plenty
    of Class 10 students do well with a Saturday visit at home and a shorter online check-in on a weekday.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-demo">Five questions that test a Class 10 tutor</h2>
  <p>
    Your first lesson with a shortlisted tutor costs nothing. Use the hour to find out whether they know this year's
    paper, not just the subject:
  </p>
  <ol>
    <li><strong>"How is my child's mark made up?"</strong> A CBSE tutor should mention the 20 school marks, the competency-focused share and the second exam; an ICSE tutor the internal assignments; an IGCSE tutor the tier.</li>
    <li><strong>"What went wrong here?"</strong> Give them the last school test and listen for specific, fixable reasons.</li>
    <li><strong>"Can you mark this as the board would?"</strong> Look for step-by-step checking, not a tick on the final line.</li>
    <li><strong>"Teach me this one."</strong> Choose a case-based question from a CBSE sample paper and watch the explanation.</li>
    <li><strong>"What happens between now and the exam?"</strong> Expect dates for full papers and revision.</li>
  </ol>
  <p>
    Not convinced? Another tutor from your shortlist can take a demo instead, and a change later on is free of charge.
    Every tutor who joins completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo checklist</a> adds more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-fees">Class 10 tuition fees in Delhi</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    In a board year, a quote rises or falls with the board, how many subjects are covered, how long the tutor has
    taught Class 10, how far they travel to reach you in the evening and how many visits a week you book. Each tutor
    names a fee, and it is on the shortlist before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    and our <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi fees article</a> go into more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d10-where">Localities where we find Class 10 tutors</h2>
  <p>
    {!! $d10A('chhatarpur', 'Chhatarpur') !!} is a large locality off the Mehrauli-Gurgaon Road with its own Yellow
    Line station; lanes in the enclaves are narrow, so e-rickshaws cover the last leg.
    {!! $d10A('sagarpur', 'Sagarpur') !!} is plotted lanes rather than gated societies, close to three Magenta Line
    stations. {!! $d10A('dwarka-sector-5', 'Dwarka Sector 5') !!} is almost all society flats between the Sector 10 and
    12 stations, so register the tutor at the gate in week one.
  </p>
  <p>
    {!! $d10A('tilak-nagar', 'Tilak Nagar') !!} combines homes with busy markets around its Blue Line station.
    {!! $d10A('adarsh-nagar', 'Adarsh Nagar') !!} has its own Yellow Line station, with Majlis Park close by.
    {!! $d10A('yamuna-vihar', 'Yamuna Vihar') !!}, in blocks B-1 to C-12, now has a Pink Line station of its own.
  </p>
  <p>
    The year before is covered on our <a href="{{ url('/class-9-home-tutor-delhi') }}">Class 9 page</a>, and the move
    into a stream on <a href="{{ url('/class-11-home-tutor-delhi') }}">Class 11 home tutors in Delhi</a>. Share the
    board, the subjects, your colony or sector and the hours that work; two or three matched tutors come back to you
    with their fees. <a href="{{ url('/demo-class') }}">Request the free demo</a>, look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or open the <a href="{{ url('/city/delhi') }}">Delhi city page</a>
    for every colony and sector. Teachers looking for board-year students can start at
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
