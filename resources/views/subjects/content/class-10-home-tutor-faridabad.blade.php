{{--
  Long-form guide for "Class 10 home tutor in Faridabad" (CBSE, Haryana board
  Secondary, ICSE and IGCSE board year). Authors: Abhinandan Tiwary (Class 10
  CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE science). Role
  statements only. No schools named. Written CBSE-first, as the Faridabad hub
  names CBSE the most common board; kept distinct from class-10-home-tutor-
  noida, -mumbai and -gurgaon. Structure follows the Noida/Mumbai models;
  every sentence is new.

  Official sources:
  - CBSE (as stated on cbse-home-tutor pages, from cbseacademic.nic.in
    Curriculum_SecP1_2026-27.pdf and the cbse.gov.in notification of
    14.02.2026 on two board examinations in Class X): 80 + 20 in major
    subjects; 33% to pass; about half the questions competency-focused; Maths
    Basic/Standard continues only for the 2026-27 Class X batch; two board
    exams from 2026, the first compulsory and the second optional for
    improvement in up to three of science, maths, social science and
    languages. 2027 dates not announced.
  - Board of School Education Haryana, bseh.org.in (read 2 Oct 2026): history
    page (set up in 1969 under Haryana Act No. 11 of 1969; headquarters moved
    from Chandigarh to Bhiwani in January 1981; first Class 10 examination in
    1970); objectives page (prescribing syllabi and textbooks; timely
    re-checking and re-evaluation); Academic Cell page (syllabus and question
    paper design; competency-based assessment guide and item booklets; model
    paper and stepwise marking scheme; practice papers); old question papers
    page (Secondary); home page notices (academic Secondary/Sr. Secondary exam
    Feb./March 2026; a second annual exam April 2026; compartment/additional
    exam July 2026 with re-checking and re-evaluation status; Haryana Open
    School Secondary exams). No paper pattern, marks, pass rule or future
    date is claimed.
  - CISCE ICSE Mathematics (icse-isc-maths-gurgaon-guide.html; cisce.org): one
    3-hour, 80-mark paper + 20 internal (10 teacher, 10 external examiner).
  - Cambridge IGCSE 0580 (2025-2027) Core C-G, Extended A*-E; March series in
    India; Edexcel 4MA1 Foundation 5-1, Higher 9-4
    (ib-igcse-tutoring-gurgaon-parents-guide.html).
  School-year shape only as the Faridabad hub states it. Local detail only
  from database/seo-content/zones/faridabad.json, faridabad-research.json,
  faridabad-zone-guides.json and the Faridabad hub. Fee range is the approved
  sentence. FAQs: faqs/class-10-home-tutor-faridabad.php.
  Area links render only when that Faridabad area page exists and is active.
--}}
@php
  $fdTeSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $fdTeA = function (string $slug, string $label) use ($fdTeSlugs) {
      return in_array($slug, $fdTeSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="fdTeGuideTitle">
  <h2 id="fdTeGuideTitle">Class 10 home tutors in Faridabad: CBSE, the Haryana board's Secondary exam, ICSE and IGCSE</h2>

  <p class="nx-guide__lede">
    In Class 10 a Faridabad student sits a paper set and marked outside the school for the first time. Most take
    the CBSE board exam; others sit the Secondary examination of the Board of School Education Haryana, the ICSE, or
    Cambridge or Edexcel papers. Each has its own question style, internal marks and second chances, and a tutor who
    knows one well can be lost in another. This page is written by Abhinandan Tiwary, our Class 10 maths author for
    CBSE and ICSE, and Aaditya Kashyap, our CBSE and ICSE science author. It sets out what each route asks, which
    subjects repay a tutor, how to shape the year, what happens if a result disappoints, and how to keep evening
    visits on time from Ballabhgarh to Neharpar.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fdte-cbse">CBSE Class 10</a> ·
    <a href="#fdte-hbse">Haryana board Secondary</a> ·
    <a href="#fdte-intl">ICSE and IGCSE</a> ·
    <a href="#fdte-subjects">Which subjects</a> ·
    <a href="#fdte-year">The year</a> ·
    <a href="#fdte-after">Second chances</a> ·
    <a href="#fdte-zones">By zone</a> ·
    <a href="#fdte-mode">Home or online</a> ·
    <a href="#fdte-demo">The demo</a> ·
    <a href="#fdte-fees">Fees</a> ·
    <a href="#fdte-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fdte-cbse">What does the CBSE Class 10 year involve now?</h2>
  <p>
    Major CBSE subjects carry 80 marks in the board paper and 20 in internal assessment, and a student needs 33% to
    pass a subject. About half the questions are competency-focused: case studies, data and application items that
    test whether a student can use a concept in an unfamiliar setting. For the 2026-27 board year, three points
    shape a tutor's plan:
  </p>
  <ul>
    <li><strong>Maths Standard or Basic.</strong> This batch still takes one or the other; later batches move to a common course. Check which your child is registered for and practise only that paper.</li>
    <li><strong>Two board exams.</strong> From 2026, the first sitting is compulsory and a second, optional sitting allows improvement in up to three subjects from science, maths, social science and languages.</li>
    <li><strong>No 2027 dates yet.</strong> At the time of writing the dates had not been announced, so plan in stages and watch cbse.gov.in.</li>
  </ul>
  <p>
    Treat the second exam as insurance, not a strategy; the aim is a first sitting good enough to make it unnecessary.
    Our <a href="{{ url('/cbse-home-tutor-faridabad') }}">CBSE tutors in Faridabad</a> page and the article on
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-hbse">How should a tutor approach the Haryana board's Secondary exam?</h2>
  <p>
    The Board of School Education Haryana was set up in 1969, held its first Class 10 examination in 1970 and has
    been based at Bhiwani since 1981. It prescribes syllabi and textbooks and conducts the Secondary examination after
    Class 10; in 2026 its academic Secondary exam ran in February and March. Schools may teach in Hindi or English, so
    the medium comes first when we match. A tutor's working plan:
  </p>
  <ol>
    <li><strong>Teach from the prescribed books in the right medium,</strong> exercise by exercise.</li>
    <li><strong>Use the Academic Cell's documents.</strong> The board publishes syllabus and question-paper design, a guide to competency-based assessment with item booklets, and model papers with step-wise marking schemes, which show how marks are given line by line.</li>
    <li><strong>Work through old Secondary question papers</strong> from the board's site from the second term onwards.</li>
    <li><strong>Read the current notices.</strong> In 2026 the board also listed a second annual exam in April and a compartment and additional exam in July; what applies to the 2027 batch will be on bseh.org.in.</li>
  </ol>
  <p>
    Our <a href="{{ url('/haryana-board-tutor-faridabad') }}">Haryana Board tutors in Faridabad</a> page covers the
    board across classes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-intl">How do ICSE and the international routes differ?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE, IGCSE and Edexcel maths in Class 10: what a Faridabad tutor plans around</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">Maths assessment</th><th scope="col">Key decision</th><th scope="col">Usual mark loss</th></tr>
    </thead>
    <tbody>
      <tr><td>ICSE (CISCE)</td><td>A three-hour, 80-mark paper plus 20 internal marks, split between the teacher and an external examiner</td><td>Pacing a long syllabus so nothing is left unrevised</td><td>Steps skipped in working; chapters met once and never again</td></tr>
      <tr><td>Cambridge IGCSE 0580</td><td>Written papers only, calculator and non-calculator</td><td>Core (grades C to G) or Extended (A* to E); a March series is available in India</td><td>Entering a tier that caps the grade</td></tr>
      <tr><td>Pearson Edexcel International GCSE 4MA1</td><td>Written papers only</td><td>Foundation (grades 5 to 1) or Higher (9 to 4)</td><td>A tier that does not match the student's level</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See our <a href="{{ url('/icse-home-tutor-faridabad') }}">ICSE</a> and <a href="{{ url('/igcse-tutor-faridabad') }}">IGCSE</a>
    pages for Faridabad and the article on <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-subjects">Which Class 10 subjects repay a tutor?</h2>
  <p>
    Maths and science come first on every board, because each chapter builds on the last and each lost step costs
    marks. Beyond them, match the help to the problem:
  </p>
  <ul>
    <li><strong>Maths:</strong> a tutor if Class 9 algebra or geometry is shaky, or marks vanish in method rather than understanding.</li>
    <li><strong>Science:</strong> a tutor if physics numericals, balancing equations or biology diagrams keep costing marks; one science specialist can usually cover all three parts at this level.</li>
    <li><strong>English:</strong> a few focused sessions on letter, notice and essay formats and on literature answers are often enough.</li>
    <li><strong>Social science:</strong> rarely a tutor; a reading plan, maps and timelines usually do.</li>
    <li><strong>Hindi or Sanskrit:</strong> a weekly self-study slot, with help only if grammar and writing have slipped for years.</li>
  </ul>
  <p>
    Our <a href="{{ url('/maths-home-tutor-faridabad') }}">maths</a> and <a href="{{ url('/science-home-tutor-faridabad') }}">science</a>
    pages for Faridabad and the <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> help
    you choose.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-year">How should the board year be shaped?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 10 year in Faridabad, stage by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What happens at school</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>April to June</td><td>The CBSE session opens; summer break</td><td>Collect the syllabus and paper design for each subject; close Class 9 gaps; get a few chapters ahead</td></tr>
      <tr><td>July to September</td><td>Steady teaching; first-term exams in many schools</td><td>Weekly chapter tests in board style; a running error log</td></tr>
      <tr><td>October to December</td><td>Syllabus finishes; practicals and internal work; pre-boards around the new year</td><td>Single-subject timed papers; internal work done on time</td></tr>
      <tr><td>January to March</td><td>Board exams</td><td>Full papers under exam conditions, then only revision of the error log and the official timetable</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Starting in April allows habits to be rebuilt as well as chapters. Starting after the pre-boards still helps with
    timing and presentation, but foundations can no longer be repaired.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-after">What if the result is not what you hoped?</h2>
  <p>
    Each board has a route back, and a tutor's job changes with it. On CBSE, the optional second board exam lets a
    student try to improve up to three of science, maths, social science and languages, so a tutor narrows straight to
    those subjects and to the question types that went wrong. On the Haryana board, the 2026 notices listed re-checking
    and re-evaluation, a second annual exam and a compartment and additional exam; the exact options for each year
    are on bseh.org.in. In every case, ask the tutor to start from the marked paper or the subject-wise result, not
    from chapter one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-zones">Keeping board-year evening visits on time</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 visits by zone: how tutors come and what to avoid</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Usual route</th><th scope="col">Avoid</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">NIT and Old Faridabad</a></td><td>Bata Chowk, Neelam Chowk Ajronda or the railway station, then a short auto</td><td>Market evenings and the railway crossing</td></tr>
      <tr><td><a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">Central sectors</a></td><td>A Violet Line station inside or beside the sector</td><td>Mathura Road and the Badkhal flyover at peak</td></tr>
      <tr><td><a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28–31 and 37</a></td><td>Sarai, NHPC Chowk, Mewla Maharajpur or Sector 28 stations; tutors from south Delhi by train</td><td>The border crossing by road</td></tr>
      <tr><td><a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a></td><td>Two-wheeler, or metro and an auto up the hill; Badarpur Border for Charmwood</td><td>School and college hours on the Surajkund–Badkhal Road</td></tr>
      <tr><td><a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh and the south</a></td><td>Metro or EMU to Ballabhgarh, then an e-rickshaw</td><td>Factory shift changes on the Sohna Road</td></tr>
      <tr><td><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, 75–80</a></td><td>Escorts Mujesar, Sihi or Bata Chowk, then across the canal</td><td>Canal crossings and the Sector 79 street in the evening</td></tr>
      <tr><td><a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad, 81–89</a></td><td>Kheri Road from the old city; a Neharpar tutor for weekdays</td><td>Canal bridges after office hours</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-mode">Home or online in the board year?</h2>
  <p>
    Home is ideal for long maths and science answers, since the tutor sees each line as it is written. Online widens
    the choice, which matters for an ICSE or IGCSE specialist who lives across the city, and it rescues the
    evenings when Mathura Road or the canal bridges stop moving. For maths online, insist on seeing the page live,
    through a stylus tablet, a shared board or a phone held over the notebook. A common board-year pattern is a long
    weekend session at home for full papers and a shorter online session midweek for doubts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-demo">Using the free demo in the board year</h2>
  <ul>
    <li><strong>Ask about the paper.</strong> On CBSE: internal marks, Standard or Basic, and the second exam. On the Haryana board: which model papers and marking schemes the tutor uses. On IGCSE: the tier.</li>
    <li><strong>Hand over a marked test</strong> and ask exactly where marks were lost and why.</li>
    <li><strong>Watch the checking.</strong> Is every step looked at, or only the final line?</li>
    <li><strong>Pick an unseen question</strong> from the textbook and see whether it is taught or just solved.</li>
    <li><strong>Ask for a written plan</strong> that places full papers before the pre-boards.</li>
  </ul>
  <p>
    If the fit is wrong, the next shortlisted tutor comes for a separate demo, and a change later in the year is free.
    Tutors who join complete an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before parents see the
    profile. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-fees">Class 10 tuition fees in Faridabad</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For Class 10 the quote moves with the board, the number of subjects, the tutor's board-year experience, the
    journey at your hour and how many sessions a week you book. Tutors set their own rates, shown on the shortlist
    before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">home tuition fees in Faridabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fdte-where">Where we match Class 10 tutors in Faridabad</h2>
  <p>
    {!! $fdTeA('sector-15a', 'Sector 15A') !!} has Neelam Chowk Ajronda station inside it, so tutors from across the
    city can come by metro and walk. {!! $fdTeA('sector-18', 'Sector 18') !!} is mid-income houses and rental floors
    between Sectors 16 and 17; a session soon after school beats the evening traffic towards Kheri Road.
    {!! $fdTeA('charmwood-village', 'Charmwood Village') !!}, near Surajkund and the Delhi border, has guarded gates, so
    register the tutor with security first.
  </p>
  <p>
    In {!! $fdTeA('sector-23', 'Sector 23 and Sanjay Colony') !!}, homes sit on small plots with narrow streets, and
    tutors usually come by two-wheeler. Over the canal, {!! $fdTeA('sector-78', 'Sector 78') !!} is mostly society
    flats where many families live close together, and {!! $fdTeA('sector-88', 'Sector 88') !!} mixes societies,
    floors and plots near Tikawali, with Kheri Road as the way back across the canal.
  </p>
  <p>
    The year before is on <a href="{{ url('/class-9-home-tutor-faridabad') }}">Class 9 tutors in Faridabad</a>, and the
    next step on <a href="{{ url('/class-11-home-tutor-faridabad') }}">Class 11 tutors in Faridabad</a>. Send the
    board, medium, subjects, your locality and free slots, and two or three matched tutors come back with fees.
    <a href="{{ url('/demo-class') }}">Request a free demo</a>, browse <a href="{{ url('/tutors') }}">tutor profiles</a>
    or find your area on <a href="{{ url('/city/faridabad') }}">home tutors in Faridabad</a>.
  </p>
  </section>

  </div>
</article>
