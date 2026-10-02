{{--
  Board hub: "West Bengal Board (Madhyamik and Higher Secondary) tutor Kolkata".
  Author: nxtutors (NXTutors Academic Team). No school, college, coaching,
  society or people names. No candidate counts or results.

  Official sources (all read 2 Oct 2026):
  - wbbse.wb.gov.in, About Us: the West Bengal Board of Secondary Education
    "came into being" in 1951. Regional offices named in the calendar below:
    Kolkata, Burdwan, Medinipur, North Bengal.
  - wbbse.wb.gov.in, "Academic Calendar for Current Year" (PdfViewer l=MTAxMQ==):
    notification D.S.(Aca)/940/A/25/6 of 29.12.2025, Annual Academic Calendar
    of 2026 for all recognised schools under WBBSE; board address "Nivedita
    Bhawan", DJ-8, Sector II, Salt Lake City, Kolkata 700091; Class IX and X
    subjects in the mandatory routine structure: First Language, Second
    Language, Mathematics (Ganit Prakash), Physical Science & Environment, Life
    Science & Environment, History & Environment, Geography & Environment,
    Optional Elective; Internal Formative Evaluation (IFE) in Classes IX and X;
    three summative evaluations normally in the first week of April, the first
    week of August and the first week of December; textbook distribution to be
    completed by January every year; freely distributed books returned on
    promotion; Kolkata Gazette Notification 214/SE of 08.03.2018, rule 4 sub
    rule 6, "No teacher shall engage himself in any sort of private tuition for
    personal gain".
  - wbbse.wb.gov.in, "MP Examination Routine" (PdfViewer l=MTEwMQ==):
    notification EMU/C/35 of 13/07/2026, Madhyamik Pariksha (Secondary
    Examination) 2027: one subject a day, 15 minutes' reading time 10:45 to
    11:00 am, papers 10:45 am to 2:00 pm; 15 Feb First Language, 16 Feb Second
    Language, 18 Feb History, 19 Feb Geography, 22 Feb Mathematics, 23 Feb
    Physical Science, 24 Feb Life Science, 25 Feb optional electives (2027);
    first languages Bengali, English, Gujarati, Hindi, Modern Tibetan, Nepali,
    Odia, Gurumukhi (Punjabi), Telugu, Tamil, Urdu, Santali; second language
    English where the first is not English, Bengali or Nepali where it is.
    The Board reserves the right to change the schedule.
  - wbchse.wb.gov.in, Brief History of the Council: set up under the WBCHSE
    Act 1975; main office at Salt Lake, Bidhannagar, Karunamoyee, with four
    regional offices; HS course = Class XI and Class XII; curriculum = two
    languages (first and second), three compulsory electives from one set,
    optional elective if desired. Site banner: 50 years, 1975-2025.
  - wbchse.wb.gov.in/subjects/: Sets I, II and III of elective subjects
    (codes as listed), language group, vocational subjects (cannot be combined
    with PHED, MUSC, VISA or ECON as electives).
  - wbchse.wb.gov.in/frequently-asked-questions-examination/: semester
    system; Sem I and III MCQ; Sem I & II conducted by the school, Sem III & IV
    by the Council (centre-venue); normally Sem I & III in September, Sem II & IV
    in March; Class XII practicals at the student's own institute, before Sem
    II (Class XI) and Sem IV (Class XII); pass 30% in five subjects (two
    languages and any three electives), theory and project/practical passed
    separately, best of five; 7 years from registration to pass; no
    calculator in any semester examination, including Accountancy and
    practicals; Rule 9/1 and 9/2 benefits in Sem II and Sem IV; no
    improvement test decided yet.
  - wbchse.wb.gov.in Download Centre > Question Pattern, SCIENCE_qp-marg.pdf:
    Mathematics 80 theory marks per class (Sem 1 MCQ 40, Sem 2 short and
    descriptive 40); Physics, Chemistry, Biological Science 70 per class (35 +
    35). Class XII maths MCQ semester: relations and functions, inverse trig,
    matrices and determinants, continuity and differentiability, application
    of derivatives, probability; written semester: vectors, 3D geometry,
    integrals, application of integrals, differential equations, linear
    programming. Class XII physics MCQ semester: electrostatics, current
    electricity, magnetic effect of current, EMI, EM waves; written semester:
    optics, dual nature, atomic nuclei, electronic devices, communication.
  - wbchse.wb.gov.in/equivalent-boards/: list includes CBSE, CISCE and the
    Cambridge IGCSE among others.
  Local detail only from the Kolkata hub view, zones/kolkata.json and
  kolkata-zone-guides.json. Fee wording is the approved sentence. FAQs render
  from faqs/west-bengal-board-tutor-kolkata.php.
--}}
@php
  $wbbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $wbbA = function (string $slug, string $label) use ($wbbSlugs) {
      return in_array($slug, $wbbSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="wbbGuideTitle">
  <h2 id="wbbGuideTitle">West Bengal Board tutors in Kolkata: Madhyamik in Class 10, Higher Secondary in Classes 11 and 12</h2>

  <p class="nx-guide__lede">
    A child on the West Bengal state syllabus answers to two different bodies. The West Bengal Board of Secondary
    Education (WBBSE) runs the school years up to Class 10 and the Madhyamik Pariksha at the end of them; the West
    Bengal Council of Higher Secondary Education (WBCHSE) runs Classes 11 and 12 and the Higher Secondary
    examination. Both have their head offices in Salt Lake, and both have changed how students are tested: the Council
    now examines Higher Secondary in four semesters, two of them entirely multiple choice. This page explains what the
    two bodies publish about their papers, how a home tutor in Kolkata should plan around them, and what to ask before
    you choose one. Every exam detail below comes from the board's or the Council's own website; read the latest
    notice there before you plan around anything.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#wbb-two">Two bodies</a> ·
    <a href="#wbb-mp">Madhyamik subjects</a> ·
    <a href="#wbb-year">The WBBSE school year</a> ·
    <a href="#wbb-hs">Higher Secondary semesters</a> ·
    <a href="#wbb-sets">Subject sets</a> ·
    <a href="#wbb-switch">Joining from CBSE, ICSE or IGCSE</a> ·
    <a href="#wbb-plan">A tutor's plan</a> ·
    <a href="#wbb-zones">Zones and travel</a> ·
    <a href="#wbb-demo">The demo</a> ·
    <a href="#wbb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="wbb-two">Who runs what: WBBSE, WBCHSE and the two public exams</h2>
  <p>
    WBBSE dates from 1951 and works from Nivedita Bhawan in Sector II of Salt Lake, with regional offices for Kolkata,
    Burdwan, Medinipur and North Bengal. WBCHSE was created by a state Act in 1975, recently marked fifty years, and
    has its main office at Karunamoyee in Salt Lake with four regional offices. Families tend to call the whole route
    "the West Bengal board", but the split matters when you look for a notice, a syllabus or a routine.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The state route from Class 9 to Class 12</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Body</th><th scope="col">Public examination</th><th scope="col">Who conducts it</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 9 and 10</td><td>WBBSE</td><td>Madhyamik Pariksha (Secondary Examination) after Class 10</td><td>The board; school summatives and internal formative evaluation along the way</td></tr>
      <tr><td>Class 11</td><td>WBCHSE</td><td>Semester I (multiple choice) and Semester II (written)</td><td>The student's own school</td></tr>
      <tr><td>Class 12</td><td>WBCHSE</td><td>Semester III (multiple choice) and Semester IV (written)</td><td>The Council, at examination centres</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If your child is on CBSE or the CISCE instead, our <a href="{{ url('/cbse-home-tutor-kolkata') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE and ISC</a> pages for Kolkata cover those papers, and the
    <a href="{{ url('/city/kolkata') }}">Kolkata home tutors page</a> explains how a match is made.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-mp">What a Madhyamik student studies and sits</h2>
  <p>
    The board's 2026 academic calendar sets out the weekly routine every recognised school must follow in Classes 9
    and 10. It lists eight subject slots: a first language, a second language, mathematics (taught from the
    <em>Ganit Prakash</em> books), Physical Science and Environment, Life Science and Environment, History and
    Environment, Geography and Environment, and an optional elective. The "and Environment" in four of those names is
    deliberate; environmental themes run through the science and social science books rather than sitting in a
    separate paper.
  </p>
  <p>
    The routine for the 2027 Madhyamik, notified by the board on 13 July 2026, runs from 15 to 25 February 2027 with
    one subject a day. The first fifteen minutes, from 10:45 to 11:00 am, are for reading the question paper only, and
    most papers end at 2:00 pm. The order is first language, second language, History, Geography, Mathematics,
    Physical Science, Life Science, then the optional electives. The board says it may change the schedule if needed,
    so treat the notice on its site as the final word.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Madhyamik languages, as the 2027 routine lists them</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Options named by the board</th></tr>
    </thead>
    <tbody>
      <tr><td>First language</td><td>Bengali, English, Gujarati, Hindi, Modern Tibetan, Nepali, Odia, Gurumukhi (Punjabi), Telugu, Tamil, Urdu, Santali</td></tr>
      <tr><td>Second language</td><td>English, when the first language is anything other than English; Bengali or Nepali, when English is the first language</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two practical points follow for a tutor. Mathematics and the two sciences come late in the fortnight, after four
    language and social science papers, so revision for them has to be finished before the exam season starts rather
    than squeezed between papers. And because a Bengali-medium student writes science answers with the Bengali terms
    used in the textbook, a tutor who explains in English must still have the student practise writing in the medium
    of the exam. For subject help, see <a href="{{ url('/maths-home-tutor-kolkata') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-kolkata') }}">science</a> home tutors in Kolkata.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-year">The WBBSE school year runs by the calendar, not from April</h2>
  <p>
    CBSE and CISCE schools in Kolkata start their session in April. The board's academic calendar is issued for a
    calendar year instead: the 2026 calendar is dated 29 December 2025, and it asks schools to finish handing out the
    free textbooks by January. Three summative evaluations are normally held in the first weeks of April, August and
    December, and in Classes 9 and 10 schools also run an internal formative evaluation through the year.
  </p>
  <ul>
    <li><strong>January to March.</strong> New books, a new class and, for Class 10 students, the Madhyamik itself in February. A tutor taking on a Class 9 student in January has the whole syllabus ahead.</li>
    <li><strong>Before each summative.</strong> The three summatives are the natural checkpoints. A tutor should know the school's dates and plan revision two or three weeks ahead of each.</li>
    <li><strong>Autumn.</strong> The Puja holidays fall between the second and third summatives, which is when a written revision plan, or a few online sessions, keeps a child from losing the thread.</li>
  </ul>
  <p>
    The same calendar repeats a state rule that families sometimes do not know: under the Kolkata Gazette notification
    of 8 March 2018, a teacher at a recognised school must not take private tuition for personal gain. In practice
    this means your child's home tutor should be someone from outside the school, which is also what keeps the
    tutor's feedback independent of the classroom.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-hs">How Higher Secondary works now: four semesters</h2>
  <p>
    The Council's examination FAQ describes the semester system in plain terms. Class 11 is split into Semester I and
    Semester II; Class 12 into Semester III and Semester IV. Semesters I and III are multiple-choice papers; Semesters
    II and IV use conventional answer scripts with short and descriptive questions. The school conducts Semesters I
    and II itself, while the Council holds Semesters III and IV at examination centres. In the Council's normal
    schedule, the multiple-choice semesters fall in September and the written ones in March.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Theory marks per class from the Council's science question pattern</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">MCQ semester (I or III)</th><th scope="col">Written semester (II or IV)</th><th scope="col">Theory per class</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>40 one-mark questions</td><td>40 marks of 2-mark short answers and 3- or 4-mark descriptive questions</td><td>80</td></tr>
      <tr><td>Physics, Chemistry, Biological Science</td><td>35 one-mark questions</td><td>35 marks of 2- and 3-mark short answers and longer descriptive questions</td><td>70</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The split decides which chapters are tested which way. In Class 12 mathematics, for example, relations and
    functions, inverse trigonometry, matrices and determinants, continuity and differentiability, applications of
    derivatives and probability are in the multiple-choice semester, while vectors, three-dimensional geometry,
    integration and its applications, differential equations and linear programming are examined in writing. In
    Class 12 physics, electrostatics, current electricity, magnetism, induction and electromagnetic waves go into
    Semester III; optics, dual nature, nuclei, electronic devices and communication into Semester IV.
  </p>
  <p>
    Four rules from the same FAQ shape tuition. No calculator is allowed in any semester examination, Accountancy and
    practicals included. Practical and project work is examined at the student's own institution, before Semester II
    in Class 11 and before Semester IV in Class 12, and theory and practical must each be passed separately. To pass,
    a student needs 30 per cent in five subjects, two languages and any three electives, counted as the best of
    five. And a student must clear Semesters I and II before moving to Semester III.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-sets">Choosing subjects: the Council's three sets</h2>
  <p>
    The Council does not use the words Science, Commerce and Arts on its subject page. Instead a student takes two
    languages, three compulsory electives and, if they wish, one optional elective, all from a single "set". The sets
    line up with the familiar streams.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>WBCHSE elective sets, simplified from the Council's subject page</caption>
    <thead>
      <tr><th scope="col">Set</th><th scope="col">Subjects most families ask a tutor for</th><th scope="col">Other choices in the set</th></tr>
    </thead>
    <tbody>
      <tr><td>Set I (science)</td><td>Physics, Chemistry, Mathematics, Biological Science</td><td>Computer Science, Statistics, Economics, Nutrition, Geography, Psychology, Cyber Security, AI and Data Science, and others</td></tr>
      <tr><td>Set II (commerce)</td><td>Accountancy, Business Studies, Costing and Taxation, Economics</td><td>Commercial Law and Preliminaries of Auditing or Statistics; Business Mathematics and Basic Statistics or Mathematics; Applied AI</td></tr>
      <tr><td>Set III (humanities)</td><td>History, Geography, Political Science, Economics, Philosophy, Sociology</td><td>Education, Psychology, Journalism, Sanskrit, Basic Mathematics for Social Sciences, Biological Science and others</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Vocational subjects are offered in some approved schools, but a student who takes one cannot also take Physical
    Education, Music, Visual Arts or Economics as an elective. The language group pairs English with Bengali, Hindi,
    Nepali, Urdu, Santhali, Odia, Telugu, Gujarati or Punjabi in different combinations. For subject help, our Kolkata
    pages cover <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-kolkata') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-kolkata') }}">accountancy</a>,
    <a href="{{ url('/economics-home-tutor-kolkata') }}">economics</a> and
    <a href="{{ url('/english-home-tutor-kolkata') }}">English</a>, and our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> helps with the decision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-switch">Joining Higher Secondary from CBSE, ICSE or IGCSE</h2>
  <p>
    The Council publishes a list of boards it treats as equivalent for entry, and it includes CBSE, the CISCE and the
    Cambridge IGCSE alongside other state boards. So a student who finished Class 10 on ICSE, CBSE or IGCSE can move
    into Higher Secondary in Class 11. What changes most is the way they are tested:
  </p>
  <ul>
    <li><strong>Multiple choice from the first exam.</strong> ICSE and IGCSE students are used to long written answers. Semester I is all one-mark questions, which rewards speed, elimination and exact recall of the textbook.</li>
    <li><strong>No calculator.</strong> IGCSE students in particular need to rebuild mental and written arithmetic before their first written semester.</li>
    <li><strong>The Council's own books and terms.</strong> The Council approves its own textbooks, and answers should use their wording.</li>
  </ul>
  <p>
    A tutor can close these gaps in the first months of Class 11. The reverse move, from Madhyamik into an ISC, CBSE
    or IB school, is covered on our <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE and ISC</a>,
    <a href="{{ url('/ib-tutor-kolkata') }}">IB</a> and <a href="{{ url('/igcse-tutor-kolkata') }}">IGCSE</a> pages
    for Kolkata.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-plan">How a home tutor carries a student from Class 9 to Semester IV</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A state-board tuition plan, stage by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What the tutor concentrates on</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Ganit Prakash chapters in order, written answers in the medium of the exam, steady work before each summative</td><td>Two sessions a week</td></tr>
      <tr><td>Class 10 (Madhyamik)</td><td>Full syllabus done by the third summative, timed papers through December and January, a revision order that matches the February routine</td><td>Two or three a week</td></tr>
      <tr><td>Class 11, Semesters I and II</td><td>Quick, accurate MCQ practice for September; then written answers and practical records for March</td><td>One or two per subject</td></tr>
      <tr><td>Class 12, Semesters III and IV</td><td>The Council's MCQ paper in September, then descriptive answers, practicals and, for science students, entrance work alongside</td><td>Two per core subject in the final months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Science students aiming at engineering in the state also sit WBJEE, which is set by a separate body, the West
    Bengal Joint Entrance Examinations Board. Our <a href="{{ url('/wbjee-tutor-kolkata') }}">WBJEE tutors in
    Kolkata</a> page explains how its two papers work and how to fit them around Semester IV. For national
    entrances, see <a href="{{ url('/jee-home-tutor-kolkata') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-kolkata') }}">NEET</a> home tutors in Kolkata.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-zones">Where state-board tutors come from, zone by zone</h2>
  <p>
    A Madhyamik or HS tutor usually comes two or three times a week for a year or more, so the journey has to be easy
    to repeat. Some notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a>:</strong> {!! $wbbA('bagbazar', 'Bagbazar') !!} grew from the old village of Sutanuti by the river; tutors arrive by the Circular Railway, the Blue Line at Shyambazar or even by ferry to the ghat, then walk the last lanes.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>:</strong> {!! $wbbA('regent-park', 'Regent Park') !!} is mostly compact family flats, and since the Blue Line runs the length of this zone, a tutor on the metro needs only an auto for the last stretch.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala and New Alipore</a>:</strong> {!! $wbbA('thakurpukur', 'Thakurpukur') !!} has its own Purple Line station on Diamond Harbour Road; the road is slow in the evening peak, so afternoons suit a tutor coming by car.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>:</strong> {!! $wbbA('salt-lake-sector-2', 'Sector II') !!}, with Karunamoyee and its Green Line station, is where both boards keep their head offices; homes are plot houses, so give the block letter and house number.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum and Baguiati</a>:</strong> {!! $wbbA('kestopur', 'Kestopur') !!} is spread over several sub-localities off VIP Road, so share an exact landmark; the bridge from Salt Lake brings tutors across.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>:</strong> in {!! $wbbA('salkia', 'Salkia') !!}, around a market more than a century old, Liluah and Tikiapara stations serve the area and a lane landmark helps on the first visit.</li>
  </ul>
  <p>
    The other zones, <a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and
    Alipore</a>, <a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and the southern bypass</a> and
    <a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>, each have their own page.
    Our local guides to <a href="{{ url('/blog/south-kolkata-tuition-guide') }}">South Kolkata</a>,
    <a href="{{ url('/blog/salt-lake-and-new-town-tuition-guide') }}">Salt Lake and New Town</a> and
    <a href="{{ url('/blog/north-kolkata-and-howrah-tuition-guide') }}">North Kolkata and Howrah</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-mode">Home, online or a mix?</h2>
  <p>
    For Madhyamik maths and Physical Science, a tutor at the table sees each step of a calculation or a diagram as it
    is drawn, which is hard to replace. For Higher Secondary, the multiple-choice semesters suit short, frequent
    online drills: twenty questions, timed, checked at once. A workable pattern is one home session for written answers
    and one online session for MCQ practice, with more online in the Puja weeks. Our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-demo">Questions to ask at a West Bengal board demo</h2>
  <ol>
    <li><strong>Which papers have you taught recently?</strong> Madhyamik, HS Set I, Set II or Set III; a strong HS physics tutor may not be the right Class 9 science tutor.</li>
    <li><strong>Can you teach in my child's medium?</strong> Ask to see an answer written with the textbook's own terms, in Bengali or English as the exam requires.</li>
    <li><strong>How do you prepare for the MCQ semesters?</strong> Listen for timed sets, error logs and the Council's question pattern, not just "practice".</li>
    <li><strong>How will you handle practical and project work?</strong> Records and projects should be guided, never written for the student.</li>
    <li><strong>What is the plan around the summatives and semesters?</strong> A good tutor asks for the school's dates in the first session.</li>
    <li><strong>The route.</strong> Which line or station, what time, and what happens in Puja week?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile goes live. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a>.
  </p>
  <p>
    Tell us the class, the set or subjects, the medium, your neighbourhood with its block or nearest station, and the
    evenings that work; the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or, if you teach Madhyamik or HS subjects, see
    <a href="{{ url('/tuition-jobs/kolkata') }}">tuition jobs in Kolkata</a>.
  </p>
  </section>

  </div>
</article>
