{{--
  Long-form guide for the "Class 10 home tutor Chennai" page (SSLC, CBSE, ICSE
  and IGCSE board year). Authors: Abhinandan Tiwary (Class 10 CBSE and ICSE
  maths) and Aaditya Kashyap (CBSE and ICSE science). Role statements only. No
  schools named. Written SSLC-first and kept distinct from the other cities'
  Class 10 pages.

  Official sources:
  - Directorate of Government Examinations, Tamil Nadu, About Us
    (dge.tn.gov.in/aboutus.html, read 2 Oct 2026): conducts the board
    examinations for State Board students in Std X and XII; the Std X and XII
    mark certificates are treated as vital documents for higher education;
    seven regional offices including Chennai; the State Board of School
    Examinations was formed by merging the Board of Secondary Education and
    the Board of Higher Secondary Examinations (G.O.(Ms) No.26, 16.02.2011).
  - DGE, Functions (dge.tn.gov.in/function.html): SSLC and Higher Secondary are
    the main examinations; special supplementary examinations for X and XII for
    students who fail the March/April examinations, allowed from June/July
    2012 irrespective of the number of subjects failed.
  - DGE question bank (apply1.tndge.org/dge-notification/questbank) and
    sample papers (apply1.tndge.org/dge-notification/samques), read 2 Oct 2026;
    March 2026 SSLC set (tnegadge.s3.ap-south-1.amazonaws.com/notification/questbank/SSLC_2026_Q.pdf):
    Part I languages (Tamil, Telugu, Malayalam, Kannada, Urdu, Hindi,
    Sanskrit, Arabic, French, Gujarati among them), Part II English 100
    marks; Mathematics 3 h, 100 marks (14 x 1, 10 x 2, 10 x 5, 2 x 8);
    Science 3 h, 75 marks (12 x 1, 7 x 2, 7 x 4, 3 x 7); Social Science
    100 marks; maths and science in a Tamil and English version. Practical or
    internal components are NOT stated.
  - CBSE (as on the verified Mumbai Class 10 page, cbseacademic.nic.in and
    cbse.gov.in): 80 + 20; 33% pass per subject; Maths Standard / Basic; two
    board exams from 2026 (compulsory main, optional second to improve up to
    three subjects); 2027 dates not announced.
  - CISCE ICSE Mathematics: one 3-hour 80-mark paper + 20 internal.
  - Cambridge IGCSE 0580 (2025-2027) Core C-G, Extended A*-E; Edexcel 4MA1
    Foundation 5-1, Higher 9-4.
  Local detail only from the Chennai city hub view, database/seo-content/zones/chennai.json,
  chennai-zone-guides.json and chennai-research.json. Fee range is the
  approved sentence. FAQs: faqs/class-10-home-tutor-chennai.php.

  Area links render only when that Chennai area page exists and is active.
--}}
@php
  $tnChSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tnChA = function (string $slug, string $label) use ($tnChSlugs) {
      return in_array($slug, $tnChSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="tnChGuideTitle">
  <h2 id="tnChGuideTitle">Class 10 tutors in Chennai: the SSLC paper by paper, then CBSE, ICSE and IGCSE</h2>

  <p class="nx-guide__lede">
    For a State Board student in Chennai, Class 10 ends in the SSLC, the public examination conducted by Tamil Nadu's
    Directorate of Government Examinations, whose mark certificate the Directorate itself describes as a vital document
    for further study. In the same apartment block, other students are working towards the CBSE or ICSE board, or
    Cambridge or Edexcel papers. Same chapter names, very different papers. Our authors for this page are Abhinandan
    Tiwary, whose subject is CBSE and ICSE maths for Classes 9 and 10, and Aaditya Kashyap, who covers CBSE and ICSE
    science; together they set out the shape of each paper, where a tutor makes the most difference, how to plan the year and the week, and what to test in a
    demo before you commit.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tnch-sslc">The SSLC</a> ·
    <a href="#tnch-papers">SSLC papers in 2026</a> ·
    <a href="#tnch-boards">Other boards</a> ·
    <a href="#tnch-subjects">Subjects to prioritise</a> ·
    <a href="#tnch-year">The year in stages</a> ·
    <a href="#tnch-zones">Getting there</a> ·
    <a href="#tnch-mode">Format</a> ·
    <a href="#tnch-demo">Testing the tutor</a> ·
    <a href="#tnch-fees">Cost</a> ·
    <a href="#tnch-where">Localities</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tnch-sslc">Who runs the SSLC, and what does that mean for tuition?</h2>
  <p>
    The Directorate of Government Examinations conducts the board examinations for State Board students in Class 10
    and Class 12. It works through seven regional offices, Chennai among them, which handle exam logistics and the
    distribution of mark certificates. Since 2011 the state has had a single State Board of School Examinations,
    formed by merging the earlier secondary and higher secondary boards. For students who do not clear the March or
    April examination, the Directorate holds special supplementary examinations, and since 2012 a student may sit them
    whatever the number of subjects failed.
  </p>
  <p>
    For a tutor, three practical rules follow:
  </p>
  <ul>
    <li><strong>The state textbook is the syllabus.</strong> Every exercise and every worked example in it deserves attention before any guidebook.</li>
    <li><strong>The Directorate's own papers make the most useful practice.</strong> Its site publishes past SSLC question papers, including the full March 2026 set, and sample question papers for Class 10. Work them in your child's medium.</li>
    <li><strong>Check the current scheme at the source.</strong> Patterns can change; take them from the Directorate's notices, never from forwarded messages.</li>
  </ul>
  <p>
    For the State Board across classes, see our <a href="{{ url('/tamil-nadu-board-tutor-chennai') }}">Tamil Nadu Board
    tutors in Chennai</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-papers">What did the March 2026 SSLC papers look like?</h2>
  <p>
    The published question set is the clearest guide to what a student must be ready for. The table below is taken
    from the March 2026 papers on the Directorate's site; it describes those papers, not a promise about the next
    series, and it leaves out any practical or internal component, which you should confirm with the school.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>SSLC March 2026: the written papers, as printed</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Time and marks</th><th scope="col">How the marks were spread</th><th scope="col">What a tutor should drill</th></tr>
    </thead>
    <tbody>
      <tr><td>Part I language (Tamil or another listed language)</td><td>Set separately for each language</td><td>Varies by language</td><td>Grammar, set texts and composition in the chosen language</td></tr>
      <tr><td>Part II English</td><td>3 hours, 100 marks</td><td>One-mark items, short answers on prose, poetry and grammar, then paragraph and longer answers</td><td>Answer formats and timed writing</td></tr>
      <tr><td>Mathematics</td><td>3 hours, 100 marks</td><td>14 one-mark, 10 two-mark, 10 five-mark and 2 eight-mark questions</td><td>Fast one-mark accuracy and fully laid-out long solutions</td></tr>
      <tr><td>Science</td><td>3 hours, 75 marks</td><td>12 one-mark, 7 two-mark, 7 four-mark and 3 seven-mark questions</td><td>Precise terms, labelled diagrams, numericals with units</td></tr>
      <tr><td>Social Science</td><td>3 hours, 100 marks</td><td>14 one-mark, 10 two-mark, 10 five-mark and 2 eight-mark questions</td><td>Structured answers and map practice</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Maths and science were printed in a Tamil and an English version. Notice how much of the maths paper sits in the
    five- and eight-mark questions: a student who rushes those, or skips steps, gives away far more than a careless
    one-mark slip.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-boards">If your child is not on the State Board</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The other Class 10 routes in Chennai: the facts a tutor works around</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Assessment</th><th scope="col">Choices and timing</th><th scope="col">Common trap</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Main subjects carry an 80-mark board paper and 20 internal marks; 33% per subject to pass</td><td>Maths at Standard or Basic level; since 2026 a main board exam everyone sits, plus an optional second sitting to raise marks in at most three subjects; no 2027 dates announced yet</td><td>Competency-style questions under time pressure</td></tr>
      <tr><td>ICSE</td><td>Maths: one 3-hour paper of 80 marks, plus 20 internal</td><td>A wide syllabus with written working expected throughout</td><td>Steps missed in long answers</td></tr>
      <tr><td>Cambridge IGCSE maths (0580)</td><td>Examined papers only</td><td>Core, graded C to G, or Extended, graded A* to E, in the 2025-2027 syllabus</td><td>Entering the wrong tier</td></tr>
      <tr><td>Edexcel International GCSE maths</td><td>Examined papers only</td><td>Foundation tier graded 5 down to 1, Higher tier 9 down to 4</td><td>Entering the wrong tier</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For depth on one board, open the Chennai pages for <a href="{{ url('/cbse-home-tutor-chennai') }}">CBSE tutors</a>,
    <a href="{{ url('/icse-home-tutor-chennai') }}">ICSE tutors</a> or <a href="{{ url('/igcse-tutor-chennai') }}">IGCSE
    tutors</a>, and in the <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">CBSE Class 10
    board-year plan</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-subjects">Which subjects should get the tutor's time?</h2>
  <ul>
    <li><strong>Maths:</strong> the clearest case on every board. Long questions reward a complete method, and a tutor who marks working line by line changes results. See <a href="{{ url('/maths-home-tutor-chennai') }}">maths home tutors in Chennai</a> and the <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> guide.</li>
    <li><strong>Science:</strong> three subjects in one paper, so numericals with units, balanced equations and labelled diagrams all need their own drill. Our <a href="{{ url('/science-home-tutor-chennai') }}">science home tutors in Chennai</a> page and <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> help.</li>
    <li><strong>English:</strong> usually a handful of focused sessions on formats and composition.</li>
    <li><strong>The Part I language:</strong> Tamil or the second language is easy to leave until late; a weekly slot of reading and grammar avoids a scramble.</li>
    <li><strong>Social science:</strong> a reading plan and map practice, not regular tuition, for most students.</li>
  </ul>
  <p>
    Where maths and science are both close to target, a single tutor for the pair is fine. A subject that is far
    behind, or an ambitious score, justifies its own specialist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-year">The Class 10 year in five stages</h2>
  <p>
    CBSE schools open in April, while State Board schools follow the calendar the state announces each year, so two
    students in one building may be months apart. Measure from your child's own first month:
  </p>
  <ol>
    <li><strong>Opening weeks:</strong> collect the syllabus and the latest papers, list Class 9 gaps and fix them first.</li>
    <li><strong>First term:</strong> stay a chapter ahead in maths and science, with a short written test every week and a mistakes notebook.</li>
    <li><strong>Middle months:</strong> finish the syllabus, keep practical and internal work up to date, and begin single-subject timed papers.</li>
    <li><strong>Revision season:</strong> whole papers, timed, at the table at home, then marked in the board's own answer style.</li>
    <li><strong>Final weeks:</strong> the mistakes notebook, the official timetable and rest; nothing new.</li>
  </ol>
  <p>
    Protect an hour of independent work most days, keep tuition off coaching days, and leave one evening empty.
    Teaching only sticks when there is time left in the week to practise it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-zones">Getting a board-year tutor to your street</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Board-year sessions: routes and timing in six Chennai zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Usual route</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar &amp; Mylapore</a></td><td>MRTS to Kasturba Nagar or Indira Nagar, then an auto</td><td>Fix an early or late slot; the Adyar signal backs up in the evening</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam &amp; Kodambakkam</a></td><td>Suburban train to Mambalam, then a walk through the subway</td><td>Avoid shopping weekends and festival seasons</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy &amp; Tambaram</a></td><td>Suburban train to Tambaram, one of the area's main terminals</td><td>Just before or after the GST Road rush</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk &amp; Aminjikarai</a></td><td>Green Line to Thirumangalam, then a short auto</td><td>Late afternoon, or weekend mornings, clear of Inner Ring Road traffic</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/mogappair-ambattur-avadi') }}">Mogappair, Ambattur &amp; Avadi</a></td><td>Local train to Avadi's terminal station and an auto</td><td>Send gate details in advance for defence areas and gated estates</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur &amp; North Chennai</a></td><td>Blue Line or suburban train to Tondiarpet</td><td>Evenings or weekends, after the working-day traffic</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-mode">Should board-year lessons be at the table or on a screen?</h2>
  <p>
    The long maths answers and science numericals that carry so many SSLC marks are taught most effectively face to face, with the
    tutor's eye on your child's pen. Screen lessons earn their place when the right person lives far away: an ICSE or
    IGCSE specialist on the other side of the city, or a teacher for a Part I language other than Tamil. Make sure the
    tutor can watch the notebook in real time, with a phone clipped above the page or a writing tablet. A practical
    arrangement is a Saturday visit for maths and a shorter weekday call for doubts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-demo">How do you test a tutor in the free demo?</h2>
  <ol>
    <li><strong>Start with the paper itself.</strong> A State Board tutor should know where to find the Directorate's past and sample papers and how they tackle the five- and eight-mark maths questions. A CBSE tutor should explain the internal marks and the optional second exam; an IGCSE tutor, the tier.</li>
    <li><strong>Give them a test your child has already had marked.</strong> Within a few minutes they should be able to say which kind of slip is costing the most.</li>
    <li><strong>Watch how they correct.</strong> Line by line, or a tick against the final answer?</li>
    <li><strong>Pick a question from the textbook your child has not tried</strong> and see whether the tutor teaches the thinking or just solves it.</li>
    <li><strong>Ask for a written plan</strong> up to the exam, with the weeks when full papers start.</li>
  </ol>
  <p>
    Not convinced? Another tutor from your shortlist can take their own demo, and moving to someone else later in the
    year costs nothing. Every tutor who joins completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before going live, though that checks identity, not teaching. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for demo classes</a> has further questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-fees">How much does Class 10 tuition cost in Chennai?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Within that range, a Class 10 quote rises with the number of subjects, the tutor's experience of that board's
    paper and a long journey at a busy hour, and falls when a tutor lives close by. Each tutor fixes a fee and it
    appears on the shortlist before any demo. For budgeting, read our
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai tuition fees guide</a> and the general
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnch-where">Where we match Class 10 tutors in Chennai</h2>
  <p>
    {!! $tnChA('adyar', 'Adyar') !!} is a set of named nagars with houses and low-rise flats, where most visits are a
    doorstep call or a quick sign-in at a small gate. In {!! $tnChA('t-nagar', 'T Nagar') !!}, tutors aim for the
    residential streets away from the bazaar and park well clear of the main shopping roads.
    {!! $tnChA('tambaram', 'Tambaram') !!} has frequent suburban trains towards Guindy and Mambalam, so tutors living
    along the line can reach it easily.
  </p>
  <p>
    {!! $tnChA('anna-nagar-west', 'Anna Nagar West') !!} follows the same grid as the rest of the township, with one of
    the city's largest bus terminals on the Inner Ring Road. In {!! $tnChA('avadi', 'Avadi') !!}, share the address,
    a contact number and gate instructions before the first class. {!! $tnChA('tondiarpet', 'Tondiarpet') !!} gives
    tutors two rail options, a Blue Line stop and a suburban station.
  </p>
  <p>
    The year before is on <a href="{{ url('/class-9-home-tutor-chennai') }}">Class 9 home tutors in Chennai</a>, and
    the higher secondary step that follows on <a href="{{ url('/class-11-home-tutor-chennai') }}">Class 11 home tutors
    in Chennai</a>. Send the board, every subject, the medium, your locality and the station nearest you; two or three
    matched tutors come back, each with a visible fee. Then <a href="{{ url('/demo-class') }}">ask for the free
    demo</a>, read <a href="{{ url('/tutors') }}">tutor profiles</a>, or open the
    <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a> for all eight zones.
  </p>
  </section>

  </div>
</article>
