{{--
  Long-form guide for the "Class 9 home tutor Delhi" page (the first year of
  the two-year course to Class 10). Authors: Abhinandan Tiwary (Class 9-10 CBSE
  and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science). Role statements
  only. No schools named. Kept distinct from class-9-home-tutor-gurgaon and
  class-9-home-tutor-mumbai.

  Official sources (as verified for the Gurgaon Class 9 page and the Delhi CBSE
  hub, 1 Oct 2026):
  - CBSE Secondary Curriculum 2026-27, Part 1
    (cbseacademic.nic.in/web_material/CurriculumMain27/SecPart1/Curriculum_SecP1_2026-27.pdf):
    IX-X composite course; Class IX assessed by school-based internal
    assessment and an annual examination (80 + 20 in major subjects); one
    common maths and one common science syllabus, plus optional Advanced
    courses (25 marks, one hour, higher-order questions; not added to the
    aggregate; a line on the marksheet at 50%); R3 compulsory, assessed by the
    school; "Individual in Society" in Class IX from 2026-27.
  - NCERT Class 9 books Ganita Manjari (maths) and Exploration (science)
    (ncert.nic.in), as on the national Class 9 pages.
  - CISCE ICSE Examination Year 2028 Regulations
    (cisce.org/wp-content/uploads/2026/01/1.-Regulations.pdf): two-year course;
    Class IX final exam conducted by schools; promotion needs 33% in five
    subjects incl. English and 75% attendance; no subject change after 15
    September of Class IX; 80% external / 20% internal.
  - Cambridge IGCSE (cambridgeinternational.org): 14 to 16 year olds, over 70
    subjects, assessed at the end of the course; 0580 Core/Extended.
  - IB MYP (ibo.org): Years 4 and 5 may take six of the eight subject groups;
    personal project in Year 5; optional eAssessment.
  No Delhi state board is described; board mix from the Delhi city hub view.
  Local detail only from the hub view, database/seo-content/zones/delhi.json,
  database/seo-content/areas/delhi-research.json and delhi-zone-guides.json.
  Fee range is the approved sentence. FAQs: faqs/class-9-home-tutor-delhi.php.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $d9Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $d9A = function (string $slug, string $label) use ($d9Slugs) {
      return in_array($slug, $d9Slugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="d9GuideTitle">
  <h2 id="d9GuideTitle">Class 9 home tutors in Delhi: half of the board course, taught as if it counts</h2>

  <p class="nx-guide__lede">
    Class 9 is the first half of a two-year course on every board a Delhi student is likely to follow. CBSE treats
    Classes 9 and 10 as one composite course, ICSE runs over the same two years, and IGCSE and the IB MYP's final
    years are built the same way. The chapters a student skims in Class 9 come back in the Class 10 paper. Abhinandan
    Tiwary covers Class 9 and 10 maths for CBSE and ICSE on NXTutors and Aaditya Kashyap covers science for both boards;
    here they set out how each board handles the year, the early signs that help is needed, how to plan the year
    from April, and how to judge a Class 9 tutor at the demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#d9-why">Why it matters</a> ·
    <a href="#d9-boards">Each board</a> ·
    <a href="#d9-cbse">CBSE changes</a> ·
    <a href="#d9-signs">Warning signs</a> ·
    <a href="#d9-plan">The year plan</a> ·
    <a href="#d9-session">A strong session</a> ·
    <a href="#d9-coaching">Foundation coaching</a> ·
    <a href="#d9-zones">Reaching you</a> ·
    <a href="#d9-mode">Home or online</a> ·
    <a href="#d9-demo">The demo</a> ·
    <a href="#d9-fees">Fees</a> ·
    <a href="#d9-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="d9-why">Why does Class 9 carry so much weight?</h2>
  <p>
    Three reasons. First, content: polynomials, coordinate geometry, Newton's laws, atoms and the cell all start here
    and are assumed in Class 10. Second, volume: a Class 9 science textbook is far longer than a Class 8 one, and
    students who coasted on memory now run out of it. Third, choices: for CBSE, the decision on an Advanced paper in
    maths or science is made in this year, and for ICSE the subject choice is fixed early in the year. A tutor who
    starts in April has the time to fix the base; one who starts in February is mostly firefighting.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-boards">Class 9 rules, board by board</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 9 on the boards Delhi families follow</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Who examines Class 9</th><th scope="col">Rules worth knowing</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>The school: an annual exam plus internal assessment, 80 + 20 in the main subjects</td><td>Classes 9 and 10 form one course; take in Class 9 only subjects you will continue in Class 10; new NCERT books Ganita Manjari and Exploration</td></tr>
      <tr><td>ICSE (CISCE)</td><td>The school conducts the Class 9 final exam</td><td>Promotion needs at least 33% in five subjects including English, plus 75% attendance; subjects cannot be changed after 15 September of Class 9; papers are 80% external and 20% internal</td></tr>
      <tr><td>Cambridge IGCSE</td><td>No external exam in Year 1 of the course</td><td>For 14 to 16 year olds, over 70 subjects, assessed at the end of the course; maths 0580 has Core and Extended tiers</td></tr>
      <tr><td>IB MYP (Years 4 and 5)</td><td>The school, against MYP criteria</td><td>Students may take courses from six of the eight subject groups; the personal project falls in Year 5; eAssessment is optional</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE is the board most Delhi students sit, with ICSE sizeable and a smaller IB and Cambridge group, as our
    <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> notes. See our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE</a> and <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE</a> pages for Delhi.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-cbse">What is new in CBSE Class 9 from 2026-27?</h2>
  <p>
    CBSE's secondary curriculum for 2026-27 brings several changes a tutor should plan around:
  </p>
  <ul>
    <li><strong>A common syllabus with an optional Advanced paper.</strong> Every student follows one maths and one science syllabus. A student may also take Mathematics Advanced, Science Advanced, both or neither: each is a one-hour, 25-mark paper of higher-order questions. The marks do not count in the aggregate; a student who scores 50% gets a line on the marksheet.</li>
    <li><strong>The third language stays.</strong> R3 is compulsory and assessed by the school, not in a board exam.</li>
    <li><strong>A new interdisciplinary area,</strong> "Individual in Society", is part of Class 9 from 2026-27.</li>
  </ul>
  <p>
    Our advice: take Advanced only in a subject your child already enjoys and does well in. The common paper is what
    counts, and it must not suffer for an extra one. Our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE tutors in
    Delhi</a> page explains the changes in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-signs">Early warning signs in Class 9</h2>
  <ul>
    <li>The first unit test in maths shows marks lost on steps rather than ideas, or on Class 8 basics like factorising and fractions.</li>
    <li>Science answers use the right words in the wrong places, or numericals stop at the formula.</li>
    <li>Homework is done but nothing is revised; tests become a surprise.</li>
    <li>Your child says Class 9 is "easy, the board is next year". This is the most expensive belief of all.</li>
    <li>A switch of board, for example from a state board elsewhere into CBSE, or from IGCSE into ICSE, has left gaps in style or content.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-plan">A Class 9 year plan for Delhi</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 9 plan for a CBSE session starting in April</caption>
    <thead>
      <tr><th scope="col">Months</th><th scope="col">Focus</th></tr>
    </thead>
    <tbody>
      <tr><td>April to June</td><td>Repair Class 8 gaps; get ahead in algebra and the first physics chapters during the summer break; decide on any Advanced paper</td></tr>
      <tr><td>July to September</td><td>Weekly chapter tests; a mistakes notebook; first-term exams in many schools</td></tr>
      <tr><td>October to December</td><td>Finish the syllabus; keep internal-assessment work complete; begin mixed revision</td></tr>
      <tr><td>January to March</td><td>Full papers under time; annual exam; a list of weak chapters to take into Class 10</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ICSE, IGCSE and IB schools follow their own calendars; the same shape applies from your school's first month. The
    national <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9 maths</a> page lists the chapters in order.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-session">What a strong Class 9 maths or science session contains</h2>
  <p>
    Class 9 is the year to swap "finishing the exercise" for "being able to do any question on the topic". A useful
    90-minute session usually has four parts:
  </p>
  <ul>
    <li><strong>A short check on last week's work,</strong> two or three questions from memory, so forgotten ideas surface early.</li>
    <li><strong>New teaching built on the NCERT text,</strong> with the student reading the key paragraph, not just hearing it.</li>
    <li><strong>Mixed practice,</strong> including questions from earlier chapters and at least one unfamiliar, application-style question of the kind CBSE now sets.</li>
    <li><strong>Written answers marked step by step,</strong> with lost marks explained and logged in the mistakes notebook.</li>
  </ul>
  <p>
    For science, add one labelled diagram or one numerical each week, even in chapters that seem descriptive. That small
    habit pays off across the two-year course.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-coaching">Foundation coaching in Class 9: worth it?</h2>
  <p>
    Foundation classes for JEE or NEET often begin in Class 9. They can help a student who is already strong
    and motivated. They hurt when they eat the hours needed for school maths and science, or when long travel to classes
    leaves no time for self-study. If your child does join, ask the home tutor to work on the school syllabus and the
    gaps that coaching assumes are already closed, not to repeat the coaching sheets. For later years see our
    <a href="{{ url('/jee-home-tutor-delhi') }}">JEE</a> and <a href="{{ url('/neet-home-tutor-delhi') }}">NEET</a> pages
    for Delhi.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-zones">Getting a Class 9 tutor to your colony</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for Class 9 sessions in six Delhi zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony &amp; Lajpat Nagar</a></td><td>South Extension on the Pink Line or the Lajpat Nagar interchange</td><td>Ring Road traffic outside the markets is slow in the evening; metro is safer</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/vasant-kunj-vasant-vihar-palam') }}">Vasant Kunj, Vasant Vihar &amp; Palam</a></td><td>Dashrathpuri or Palam on the Magenta Line for the Palam side</td><td>Palam-Dabri Marg is busy at office hours</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Sector 12 or 13 on the Blue Line for the central sectors</td><td>Pre-approve the tutor at the society gate</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden &amp; Punjabi Bagh</a></td><td>Moti Nagar or Kirti Nagar on the Blue Line</td><td>Najafgarh Road and the Ring Road are heavy in the evening</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a></td><td>Madhuban Chowk, on the Red and Magenta Lines, for the southern sectors</td><td>Give block and flat clearly; pocket layouts repeat</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar &amp; Shahdara</a></td><td>Krishna Nagar on the Pink Line or Karkarduma</td><td>Market areas crowd in the evening; earlier slots hold better</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-mode">Home or online tuition in Class 9?</h2>
  <p>
    For maths and science, where the tutor needs to see every line of working, home tuition is the natural choice for
    most Class 9 students. Online works well for a disciplined student, for English or a language, or when the right
    ICSE, IGCSE or MYP specialist lives on the other side of the city. With online maths, insist on a writing tablet,
    a shared whiteboard or a phone camera over the notebook. Many families keep one subject at home and one online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-demo">Testing a Class 9 tutor at the demo</h2>
  <p>
    Your first lesson with a shortlisted tutor is free. Use it to check both board knowledge and teaching:
  </p>
  <ol>
    <li><strong>"What changed in Class 9 this year?"</strong> For CBSE, a good tutor knows about the common syllabus, the optional Advanced papers and the new NCERT books.</li>
    <li><strong>Hand over the last unit test.</strong> Can the tutor say why marks were lost?</li>
    <li><strong>Pick a hard topic</strong> from the current chapter and watch how it is taught, not just solved.</li>
    <li><strong>Ask for a plan to the annual exam,</strong> with dates for tests and full papers.</li>
  </ol>
  <p>
    Not the right fit? Another shortlisted tutor can take a demo instead, and a change later on costs nothing. Every
    tutor who joins completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is published.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-fees">Class 9 tuition fees in Delhi</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For Class 9, the board, the subjects, the tutor's experience, the journey to your home and the number of sessions
    all matter. You see each fee before the demo; the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">home tuition fees in Delhi</a> explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="d9-where">Where we match Class 9 tutors in Delhi</h2>
  <p>
    {!! $d9A('south-extension', 'South Extension') !!} is mostly builder floors on quiet inner lanes behind its Ring
    Road shopping frontage; most floors have their own bell, so share the floor. {!! $d9A('mahavir-enclave', 'Mahavir Enclave') !!},
    in three parts off Palam-Dabri Marg, is close to Dashrathpuri station, and homes open straight onto the lane.
    {!! $d9A('dwarka-sector-4', 'Dwarka Sector 4') !!} has no station of its own, so tutors use Sector 12 or 13.
  </p>
  <p>
    {!! $d9A('moti-nagar', 'Moti Nagar') !!}, formed between 1948 and 1950, has its own Blue Line station.
    {!! $d9A('rohini-sector-8', 'Rohini Sector 8') !!} has three stations close by, so a tutor can almost always come
    by metro. {!! $d9A('krishna-nagar', 'Krishna Nagar') !!}, in lettered blocks A to K, is served by the Pink Line.
  </p>
  <p>
    Before Class 9, see <a href="{{ url('/class-6-8-home-tutor-delhi') }}">Class 6 to 8 tutors</a>; after it,
    <a href="{{ url('/class-10-home-tutor-delhi') }}">Class 10 tutors in Delhi</a>. Our subject pages for
    <a href="{{ url('/maths-home-tutor-delhi') }}">maths</a> and <a href="{{ url('/science-home-tutor-delhi') }}">science</a>
    help too. Send us the board, subjects, your colony or sector and the times that suit you; two or three matched
    tutors come back with their fees. <a href="{{ url('/demo-class') }}">Ask for a free demo</a>, look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> or open the <a href="{{ url('/city/delhi') }}">Delhi home tutors
    page</a>. Tutors can find students through <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
