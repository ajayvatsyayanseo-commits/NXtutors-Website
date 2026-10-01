{{--
  Ghaziabad board page for "ICSE home tutor Ghaziabad" (CISCE: ICSE Class 10
  and ISC Class 12). Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE
  maths), Aaditya Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for any of them. No schools, societies, developers or people are named.

  Board facts reworded from the Gurgaon ICSE hub (icse-home-tutor-gurgaon),
  which cites (cisce.org, read 1 Oct 2026):
  - ICSE Regulations, Year 2027: Group I compulsory (English, a second
    language, History, Civics & Geography), Group II any two or three
    (Mathematics, Science, Economics, Commercial Studies, a modern foreign or
    classical language, Environmental Science), 80% external / 20% internal;
    Group III one subject (Computer Applications, Economic Applications,
    Commercial Applications, Art, Physical Education, Robotics and AI and
    others), 50% / 50%.
  - ICSE Mathematics (51), Year 2027 syllabus: one 3-hour paper of 80 marks
    plus 20 marks internal assessment; at least two assignments, assessed by
    the subject teacher and an external examiner.
  - ICSE Science (52) Physics, Chemistry, Biology, Year 2028 syllabuses: each
    one 2-hour paper of 80 marks plus 20 marks internal assessment of
    practical work.
  - ICSE Analysis of Pupil Performance (CISCE publishes these subject by
    subject).
  - ISC Regulations: English compulsory with three, four or five electives,
    no more than six subjects; practical exam compulsory where a subject has
    one; no Class XII subject not studied in Class XI; no change of subject
    after 15 September of the Class XI year; promotion to XII needs 35% in
    four subjects including English and 75% attendance; grades 1 to 9; pass
    certificate needs four or more subjects including English, plus SUPW and
    Community Service; Physics cannot be combined with Engineering Science.
  - ISC Mathematics (860), Year 2027: Paper I theory, 3 hours, 80 marks, and
    Paper II project work, 20 marks.
  City board mix and UP Board (UPMSP) wording only as the Ghaziabad hub view
  states it; UP Board described in general terms only. Local detail only from
  database/seo-content/areas/ghaziabad-research.json,
  ghaziabad-zone-guides.json, zones/ghaziabad.json and the hub. Fee wording is
  the approved NXTutors sentence. FAQs: faqs/icse-home-tutor-ghaziabad.php.
  Area links render only for active Ghaziabad areas.
--}}
@php
  $icgzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icgz = function (string $slug, string $label) use ($icgzSlugs) {
      return in_array($slug, $icgzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide icgz-guide" aria-labelledby="icgzGuideTitle">
  <h2 id="icgzGuideTitle">ICSE and ISC home tutors in Ghaziabad: a CISCE tutor who marks the way the examiners do</h2>

  <p class="nx-guide__lede">
    An ICSE week can easily look like this: a maths assignment due, a biology diagram to
    redo, a history answer that ran out of space, and a language paper on Monday. The council behind it, CISCE, sets
    the ICSE at Class 10 and the ISC at Class 12, and both reward long, carefully set-out answers across many
    separate papers. This page covers how the papers are built, how CISCE differs from the CBSE and UP Board routes
    families around you may follow, which subjects need a tutor, what to test in the free demo and how tutors travel
    to each part of the city. Abhinandan Tiwary (Class 10 CBSE and ICSE maths) and Aaditya Kashyap (CBSE and ICSE
    science) wrote the ICSE sections; Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths, wrote the ISC ones.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icz-place">CISCE in Ghaziabad</a> ·
    <a href="#icz-compare">Against CBSE and UP Board</a> ·
    <a href="#icz-papers">The Class 10 papers</a> ·
    <a href="#icz-years">Year by year</a> ·
    <a href="#icz-isc">ISC rules</a> ·
    <a href="#icz-help">Subjects that need help</a> ·
    <a href="#icz-hour">An hour well spent</a> ·
    <a href="#icz-travel">Getting a tutor to you</a> ·
    <a href="#icz-online">Home, online or both</a> ·
    <a href="#icz-demo">Demo questions</a> ·
    <a href="#icz-cost">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icz-place">Where ICSE and ISC fit in Ghaziabad</h2>
  <p>
    Our <a href="{{ url('/city/ghaziabad') }}">Ghaziabad guide</a> describes the city's schools this way: CBSE is the
    most common board, ICSE and ISC have a steady following, the IB and Cambridge IGCSE serve a smaller group, and UP
    Board schools matter because the city is in Uttar Pradesh. What that means for an ICSE family is simple: CISCE
    specialists exist across the city, but there are fewer of them than CBSE tutors, and ISC specialists in a single
    elective are fewer again. Asking early, and being exact about the class and the papers, makes the match easier.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-compare">How the CISCE route compares with CBSE and the UP Board</h2>
  <p>
    The content overlaps a good deal, especially in maths and science; the difference is in what earns marks. ICSE
    spreads a student's effort across more papers, and examiners expect full working, labelled diagrams and answers
    written in proper sentences. CBSE works from NCERT books and its own sample papers. UPMSP, the state board, sets
    its own High School and Intermediate papers in its own pattern, and its schools may teach in Hindi or English.
  </p>
  <p>
    So a tutor who has taught mostly CBSE or UP Board students can know every topic and still under-prepare an ICSE
    child for the length and precision of the answers. When you send a request, say "ICSE" or "ISC" rather than just
    the class, and if your child has moved from another board, name it too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-papers">What an ICSE Class 10 student actually sits</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE subject groups and how each group is weighted (CISCE regulations)</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">What the student takes</th><th scope="col">Final exam / internal</th><th scope="col">Where effort pays</th></tr>
    </thead>
    <tbody>
      <tr><td>I, compulsory</td><td>English; a second language; History, Civics and Geography</td><td>80 / 20</td><td>Long answers written to time</td></tr>
      <tr><td>II, two or three</td><td>From Mathematics, Science, Economics, Commercial Studies, a modern foreign or classical language, Environmental Science</td><td>80 / 20</td><td>Method in maths; three separate science papers</td></tr>
      <tr><td>III, one subject</td><td>An applied subject such as Computer Applications, Economic Applications, Commercial Applications, Art, Physical Education or Robotics and AI</td><td>50 / 50</td><td>Steady project work through the year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ICSE Mathematics is a single three-hour, 80-mark paper with 20 internal marks from at least two assignments,
    which the subject teacher and an external examiner each assess. Science is three papers, not one: Physics,
    Chemistry and Biology are each examined for two hours and 80 marks, with 20 internal marks for practical work in
    each. CISCE's Analysis of Pupil Performance reports, published subject by subject, show where candidates lost
    marks; a tutor who reads them is preparing your child for the real marking. Our posts on
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths</a> and the
    <a href="{{ url('/blog/icse-class-10-english-papers') }}">ICSE English papers</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-years">The CISCE years, one at a time</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Classes 6 to 12 on the CISCE route: what is at stake and the tutor's task</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What is at stake</th><th scope="col">The tutor's main task</th></tr>
    </thead>
    <tbody>
      <tr><td>6–8</td><td>School tests and projects only</td><td>Arithmetic and early algebra, science words, writing a full paragraph</td></tr>
      <tr><td>9</td><td>The two-year ICSE syllabus starts</td><td>Habits of full working and neat diagrams before the volume grows</td></tr>
      <tr><td>10</td><td>The ICSE papers plus internal marks</td><td>Specimen papers, examiner reports and timed answers, one paper at a time</td></tr>
      <tr><td>11</td><td>Promotion rules and the choice of electives</td><td>Bridging the jump from ICSE early, before subjects are locked</td></tr>
      <tr><td>12</td><td>ISC theory, practicals and projects</td><td>Depth in each elective, and practical and project deadlines</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-isc">ISC in Classes 11 and 12: rules worth knowing early</h2>
  <p>
    At ISC, English is compulsory and a student adds three, four or five electives, with six subjects at most. The
    regulations contain a few rules that catch families out:
  </p>
  <ul>
    <li>Subjects are fixed by 15 September of the Class 11 year, and a Class 12 subject must have been studied in Class 11.</li>
    <li>Moving up to Class 12 needs 35% in four subjects including English, on the year's cumulative average, and 75% attendance.</li>
    <li>Where a subject has a practical exam, it must be taken; certain pairings, such as Physics with Engineering Science, are not permitted.</li>
    <li>Results come as grades 1 to 9; the pass certificate needs four or more subjects including English, plus Socially Useful Productive Work and Community Service.</li>
  </ul>
  <p>
    ISC Mathematics pairs a three-hour, 80-mark theory paper with 20 marks of project work in each of the two years.
    See our <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page and the
    <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English guide</a>; the
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC page for Gurgaon</a> sets out how the council works
    in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-help">Subjects ICSE families usually want help with</h2>
  <p>
    Maths and the three sciences come first, because marks there build week by week from method and practice. Next
    come English and History, Civics and Geography, where the problem is usually writing a long answer clearly in the
    time allowed. At ISC, requests narrow to the electives: maths, physics, chemistry and biology on the science side,
    accounts, commerce and economics on the commerce side.
  </p>
  <ul>
    <li>Maths: <a href="{{ url('/maths-home-tutor-ghaziabad') }}">maths home tutors in Ghaziabad</a>, with the <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12</a> maths pages.</li>
    <li>ICSE science: <a href="{{ url('/science-home-tutor-ghaziabad') }}">science home tutors in Ghaziabad</a>; for one paper only, <a href="{{ url('/physics-home-tutor-ghaziabad') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-ghaziabad') }}">chemistry</a> or <a href="{{ url('/biology-home-tutor-ghaziabad') }}">biology</a>.</li>
    <li>English language and literature: <a href="{{ url('/english-home-tutor-ghaziabad') }}">English home tutors in Ghaziabad</a>; tell us the set texts.</li>
    <li>ISC science with an entrance exam in view: <a href="{{ url('/jee-home-tutor-ghaziabad') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-ghaziabad') }}">NEET</a> tutors in Ghaziabad.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-hour">An ICSE hour that is well spent</h2>
  <p>
    Writing should take up a real share of the session. Start with your child's own attempt at a couple of questions
    from last time, marked line by line for missing steps, units, labels and, in the wordier subjects, unclear
    sentences. Then the new topic, from the textbook first and specimen-paper questions after. Finish with one
    question written in full against the clock. For ISC sciences, leave room for the practical: recording readings,
    choosing the right graph and writing a conclusion an examiner can credit. A tutor who only explains, and never
    reads what your child writes, is missing the half of ICSE that decides the mark.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-travel">Getting an ICSE tutor to your door in Ghaziabad</h2>
  <p>
    With fewer CISCE specialists to choose from, it helps to know how a tutor will actually get to you.
    {!! $icgz('kaushambi', 'Kaushambi') !!} is one of the easiest places in the city to reach: it has its own Blue Line
    station, and Anand Vihar across the border adds the Pink Line, rail and Namo Bharat links, though most homes are in
    societies where the tutor's name should be at the gate. {!! $icgz('vasundhara-sector-13', 'Vasundhara Sector 13') !!}
    has no station inside it; tutors usually take an e-rickshaw from Vaishali or ride over from Indirapuram. In
    {!! $icgz('indirapuram-niti-khand-1', 'Niti Khand 1') !!}, public transport inside the khand is thin, so a tutor
    with a two-wheeler is the practical choice, coming from Noida Electronic City station if not.
  </p>
  <p>
    {!! $icgz('shalimar-garden', 'Shalimar Garden') !!}, north of GT Road, is low-rise flats often above shops; Raj Bagh
    and Shaheed Nagar on the Red Line are the usual stops, and giving the block and a landmark saves the first visit.
    East of the Hindon, {!! $icgz('kavi-nagar', 'Kavi Nagar') !!} is lettered blocks of floors and houses with no gate
    pass needed, but Hapur Road and Meerut Road traffic means a slot clear of the evening rush. And in
    {!! $icgz('crossings-republik', 'Crossings Republik') !!}, an integrated township of gated societies with no metro,
    tutors come by road, so one who already lives in the township is worth asking for first. More local detail is on
    the <a href="{{ url('/city/ghaziabad/zone/indirapuram') }}">Indirapuram</a>,
    <a href="{{ url('/city/ghaziabad/zone/vasundhara') }}">Vasundhara</a> and
    <a href="{{ url('/city/ghaziabad/zone/raj-nagar-kavi-nagar-old-ghaziabad') }}">Raj Nagar and Kavi Nagar</a> zone
    pages and in our <a href="{{ url('/blog/indirapuram-tuition-guide') }}">Indirapuram tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-online">Home, online or a mix for ICSE</h2>
  <p>
    Home classes suit ICSE well, because so much of the work is reading what a child has written and correcting it on
    the page. Online sessions make sense when the right ISC specialist lives on the far bank of the Hindon, or when a
    Class 10 student needs one paper revised quickly. Many families keep one home session for the main subject and
    add an online hour for a second paper. On screen, the tutor must see the working as it is written, through a
    tablet, a shared board or a camera over the notebook. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home
    or online tutor</a> post weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-demo">Questions to put to an ICSE tutor in the demo</h2>
  <ol>
    <li><strong>Which ICSE papers have you taught recently?</strong> A science tutor should be at ease in Physics, Chemistry and Biology alike; ask for a short piece of each.</li>
    <li><strong>Do you use the examiners' reports?</strong> A tutor who knows the Analysis of Pupil Performance can tell you where marks usually slip.</li>
    <li><strong>How will you mark my child's writing?</strong> Look for corrections to expression and layout, not only to the final answer.</li>
    <li><strong>How do you handle internal work?</strong> For ICSE assignments and ISC projects, the right answer is guidance on method, never doing it.</li>
    <li><strong>For Class 11:</strong> what would they advise on electives, given the deadline for changing subjects?</li>
  </ol>
  <p>
    You get two or three matched tutors with their fees shown before the demo, and switching later is free. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. See also our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for the demo class</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icz-cost">Fees, and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For ICSE and ISC, what moves the figure is the class, how many papers need help, how near the exam is and the
    distance the tutor covers. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">Ghaziabad fees post</a> help you plan.
  </p>
  <p>
    Tell us ICSE or ISC, the class, the papers, your locality or society and your free times. The first class with
    the tutor you pick is a <a href="{{ url('/demo-class') }}">free demo</a>, and you can look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> first. For other boards in the city, see
    <a href="{{ url('/cbse-home-tutor-ghaziabad') }}">CBSE</a>, <a href="{{ url('/ib-tutor-ghaziabad') }}">IB</a> and
    <a href="{{ url('/igcse-tutor-ghaziabad') }}">IGCSE</a> tutors in Ghaziabad. Tutors can find ICSE students to teach
    through <a href="{{ url('/tuition-jobs/ghaziabad') }}">tuition jobs in Ghaziabad</a>.
  </p>
  </section>

  </div>
</article>
