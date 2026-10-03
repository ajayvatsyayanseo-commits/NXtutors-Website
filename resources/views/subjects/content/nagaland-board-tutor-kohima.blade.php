{{--
  State-board hub: "Nagaland Board tutor Kohima" (Nagaland Board of School
  Education, NBSE: HSLC at Class 10 and HSSLC at Class 12). Author: nxtutors
  (NXTutors Academic Team). No school, college, coaching, hospital, society or
  people names. No candidate or school counts, results, exam fees or dates
  beyond the board's own current documents. Purely educational and
  practical; weather only as timing advice. HSLC and HSSLC are not expanded,
  because the board's pages read here do not spell them out.

  Official source: the board's website, nbsenl.edu.in. Pages and documents
  read 3 Oct 2026:
  - https://nbsenl.edu.in/ (home): Nagaland Board of School Education, Upper
    Bayavü Hill, Kohima, Nagaland 797001; menus for HSLC and HSSLC
    marksheets, results, routine, centre list, academic calendar, curriculum
    and syllabus, question bank and question paper, online exam forms
    (regular, repeater, compartment), migration certificate, toppers (HSLC;
    HSSLC Arts, Science, Commerce), PARAKH; results list "HSSLC & HSLC
    compartmental and improvement"; notification 29-09-2026 "Rules and
    Regulations for HSLC & HSSLC Exams 2027"; notice 12-08-2024
    "Re-introduction of Environmental Education as a subject under NBSE".
  - https://nbsenl.edu.in/curriculum-and-syllabus : yearly blueprints of HSLC
    and HSSLC; question-paper design for Class VIII; phase-wise division of
    chapters for Class IX; textbook lists; rationalised syllabi; stream
    syllabi for Arts, Science and Commerce (Classes XI and XII).
  - https://nbsenl.edu.in/calendars -> cms/document/15/calendars (Calendar
    2026, secondary, Notification 112/2025): classes for X-XII from 13 Jan,
    all classes from 27 Jan; model tests Jan/Feb; HSLC 2026 in February;
    internal/practical marks 2-13 Feb; compartmental and improvement
    examination May; Phase I of Classes VIII and IX final examinations and
    mid-term for Class X (dates later); summer vacation June/July; English
    Listening and Speaking Test for Classes IX and X in September; HSLC 2027
    application forms September; Phase II of Classes VIII and IX in October;
    model test/preparatory classes for HSLC candidates; remedial or
    preparatory classes for HSLC candidates until 15 December; winter
    vacation from 19 December 2026; HSLC Examination 2027 listed for
    February/March 2027; Class VIII registration with the board; Financial
    Literacy course for Classes IX and X.
  - cms/document/14/calendars (Calendar 2026, higher secondary, Notification
    113/2025): classes from January; HSSLC 2026 and Class XI promotion
    examination in February; Class XII classes resume March; Class XI
    admission and classes 25-30 May; institutions to start Class XI within 15
    days of the HSLC result; mid-term for XI and XII; English Listening and
    Speaking Test for Class XII (October) and Class XI; HSSLC practical
    examination for 2027 in the last part of 2026; HSSLC 2027 and Class XI
    promotion examination 2027 listed for February/March 2027.
  - cms/document/50/syllabi (Blueprint of HSLC 2026): Mathematics (common for
    Mathematics A and B) 37 questions / 80; Science 36 / 80; English 38 / 80;
    Social Sciences 34 / 80 including a chapter "Nagaland" worth 10.
  - cms/document/51/syllabi (Blueprint of HSSLC 2026): Mathematics 31 / 80;
    Physics 34 / 70; Chemistry 34 / 70; English 30 / 80; Botany 15 / 35 and
    Zoology 15 / 35; Accountancy 25 / 70; Business Studies 28 / 80;
    Fundamentals of Business Mathematics 28 / 80.
  - cms/document/49/syllabi and cms/document/41/syllabi (textbook lists 2025):
    NCERT Mathematics and Science for IX-X; "A Book on Nagaland" in social
    sciences; languages including Tenyidie, Ao, Sümi, Lotha, Hindi, Bengali
    and Alternative English; vocational subjects; NCERT physics, chemistry,
    biology and mathematics for XI-XII; Arts, Science and Commerce subjects
    such as political science, history, geography, economics, accountancy,
    business studies, computer science and informatics practices.
  Local detail only from database/seo-content/areas/kohima-research.json
  (areas' about + zone_facts). Fee wording is the approved sentence. FAQs
  render from faqs/nagaland-board-tutor-kohima.php. Area links render only for
  active areas.
--}}
@php
  $kmnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kmnA = function (string $slug, string $label) use ($kmnSlugs) {
      return in_array($slug, $kmnSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kmnGuideTitle">
  <h2 id="kmnGuideTitle">Nagaland Board tutors in Kohima: HSLC, HSSLC and a school year that runs January to February</h2>

  <p class="nx-guide__lede">
    The Nagaland Board of School Education, NBSE for short, conducts the HSLC examination at the end of Class 10 and
    the HSSLC examination at the end of Class 12, and its office is in Kohima itself, at Upper Bayavü Hill. For a
    family arranging tuition, three things about the board matter more than anything else: it publishes a blueprint
    for every subject's paper each year, it lists the textbooks schools should use, and its academic year follows the
    calendar, with classes starting in January and the board examinations early in the following year. This page
    explains each of those from the board's own website, then sets out how a home tutor should plan Class 8 to Class
    12 around them. Board rules change, so read the current documents on nbsenl.edu.in before your child's exam year.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kmn-board">The board</a> ·
    <a href="#kmn-year">The NBSE year</a> ·
    <a href="#kmn-blue">Blueprints</a> ·
    <a href="#kmn-books">Textbooks and subjects</a> ·
    <a href="#kmn-early">Classes 8 and 9</a> ·
    <a href="#kmn-eleven">Class 11</a> ·
    <a href="#kmn-plan">A Class 8 to 12 plan</a> ·
    <a href="#kmn-cbse">Versus CBSE</a> ·
    <a href="#kmn-where">Wards</a> ·
    <a href="#kmn-demo">The demo</a> ·
    <a href="#kmn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kmn-board">What does the Nagaland board publish that a tutor should use?</h2>
  <p>
    The board's website is more useful to a parent than it first looks. Alongside results and marksheets it carries:
  </p>
  <ul>
    <li><strong>The academic calendar</strong> for the secondary and higher secondary levels, issued for each year.</li>
    <li><strong>Curriculum and syllabus files,</strong> including the yearly blueprint of the HSLC and HSSLC papers, textbook lists, a question-paper design for Class 8 and a phase-wise division of chapters for Class 9.</li>
    <li><strong>A question bank and past question papers.</strong></li>
    <li><strong>The examination routine and centre list</strong> once they are issued.</li>
    <li><strong>Online examination forms</strong> for regular, repeater and compartment candidates, and results of the compartmental and improvement examinations.</li>
    <li><strong>Notifications,</strong> such as the rules and regulations for the 2027 HSLC and HSSLC examinations posted in late September 2026.</li>
  </ul>
  <p>
    The board also lists HSSLC toppers separately for the Arts, Science and Commerce streams, which reflects how the
    higher secondary course is organised. A tutor who has read the blueprint and question bank for your child's
    subject will prepare your child for the paper that is actually set, not a generic one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-year">How does the NBSE school year run?</h2>
  <p>
    The board's calendars for 2026 set out a year that follows the calendar, which may differ from what families
    coming from another board are used to. Taken from those two documents:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The NBSE year as set out in the board's 2026 calendars, and what it means for tuition</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">What the calendar lists</th><th scope="col">For the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>January</td><td>Classes begin; model tests for board candidates</td><td>A new class starts; diagnose gaps in the first fortnight</td></tr>
      <tr><td>February</td><td>The 2026 HSLC and HSSLC examinations; Class 11 promotion examination</td><td>Board candidates sit their papers</td></tr>
      <tr><td>May and June</td><td>Compartmental and improvement examinations; Class 11 admission and classes in the last week of May; Phase I of the Class 8 and 9 final examinations and a Class 10 mid-term</td><td>Class 11 starts late, so stream subjects need a quick start</td></tr>
      <tr><td>June and July</td><td>Summer vacation</td><td>Good weeks for catching up; rain is heaviest from June to September, so keep an online fallback</td></tr>
      <tr><td>September to November</td><td>English listening and speaking tests; board examination forms; Phase II for Classes 8 and 9; the HSSLC practical examination</td><td>Practical records and spoken English need attention</td></tr>
      <tr><td>December</td><td>Preparatory classes and model tests for HSLC candidates; winter vacation from 19 December</td><td>Full timed papers to the blueprint</td></tr>
      <tr><td>February/March 2027</td><td>The 2027 HSLC and HSSLC examinations, as listed in the 2026 calendars</td><td>Exact dates come from the board's routine</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The winter vacation sits just before the board examinations, so for Class 10 and Class 12 students it is revision
    time, not a break, and tuition is worth keeping going through it, at home or online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-blue">What is a blueprint, and how should a tutor use it?</h2>
  <p>
    Each year the board publishes a blueprint for every HSLC and HSSLC subject: a grid showing how many questions of
    each type, and how many marks, come from each chapter or unit. It is the most practical document a tutor can
    have, because it says where the marks are before a single chapter is taught. Some of the 2026 papers:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Selected subjects from the NBSE 2026 blueprints: questions and marks on the written paper</caption>
    <thead>
      <tr><th scope="col">Examination</th><th scope="col">Subject</th><th scope="col">Questions</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>HSLC</td><td>Mathematics (common to Mathematics A and B)</td><td>37</td><td>80</td></tr>
      <tr><td>HSLC</td><td>Science</td><td>36</td><td>80</td></tr>
      <tr><td>HSLC</td><td>English</td><td>38</td><td>80</td></tr>
      <tr><td>HSLC</td><td>Social Sciences, including a chapter on Nagaland worth 10 marks</td><td>34</td><td>80</td></tr>
      <tr><td>HSSLC</td><td>Mathematics</td><td>31</td><td>80</td></tr>
      <tr><td>HSSLC</td><td>Physics; Chemistry</td><td>34 each</td><td>70 each</td></tr>
      <tr><td>HSSLC</td><td>Botany and Zoology, as two papers</td><td>15 each</td><td>35 each</td></tr>
      <tr><td>HSSLC</td><td>Accountancy</td><td>25</td><td>70</td></tr>
      <tr><td>HSSLC</td><td>Business Studies; Fundamentals of Business Mathematics</td><td>28 each</td><td>80 each</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Read a blueprint the way an examiner would. In HSLC science, every question of one, two or three marks is
    compulsory and choice appears only among the five-mark answers, so no chapter can be dropped. In HSSLC
    mathematics, calculus chapters carry 35 of the 80 marks. In HSSLC chemistry the d- and f-block elements carry 9
    marks, more than CBSE gives them. Our Kohima subject pages go through these in detail:
    <a href="{{ url('/maths-home-tutor-kohima') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-kohima') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-kohima') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-kohima') }}">chemistry</a> and
    <a href="{{ url('/english-home-tutor-kohima') }}">English</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-books">Which textbooks and subjects does the board list?</h2>
  <p>
    The board's textbook lists answer a question many parents ask: will a tutor trained on NCERT books be able to help?
    For maths and science, largely yes.
  </p>
  <ul>
    <li><strong>Classes 9 and 10:</strong> NCERT Mathematics and NCERT Science, each with a lab manual; an English multi-skill course book, with Alternative English as a separate option; social sciences including a book on Nagaland; and languages such as Tenyidie, Ao, Sümi, Lotha, Hindi and Bengali.</li>
    <li><strong>New and vocational subjects:</strong> the board has reintroduced Environmental Education as a subject, and its lists include a range of vocational subjects alongside the core ones.</li>
    <li><strong>Classes 11 and 12:</strong> NCERT books for physics, chemistry, biology and mathematics; and for Arts and Commerce, subjects including history, geography, economics, accountancy, business studies, computer science and informatics practices.</li>
  </ul>
  <p>
    So a science or maths tutor can teach from familiar books, but should practise with the board's blueprint and
    question bank. For languages and the Nagaland chapter of social sciences, ask specifically for a tutor who
    knows the NBSE books.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-early">Why do Classes 8 and 9 matter on this board?</h2>
  <p>
    The board's involvement starts before the HSLC year. Class 8 students are registered with the board, the board
    publishes a question-paper design for Class 8, and the final examinations of Classes 8 and 9 run in two phases,
    the first around the middle of the year and the second in October. The Class 9 document divides the chapters
    between the phases. A tutor who knows which chapters fall in which phase can revise the right half of the book at
    the right time, instead of all of it at once, and can make sure the Class 9 foundations in algebra, geometry and
    science are secure before the board year begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-eleven">How should a family approach Class 11 under NBSE?</h2>
  <p>
    The higher secondary calendar asks institutions to start Class 11 within fifteen days of the HSLC result, and in
    2026 classes began in the last week of May. The year then closes with a Class 11 promotion examination in
    February. That is a short year for new subjects such as physics, chemistry, accountancy or economics, and Class 12
    resumes straight after. Choose the stream with care, using our
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to choosing a board and stream</a>, and if a home tutor
    is needed, start in the first month rather than after the first test.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-plan">A tutor's plan from Class 8 to the HSSLC</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>NBSE tuition from Class 8 to Class 12: focus and weekly rhythm</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Focus of the sessions</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>8 and 9</td><td>Foundations, revised phase by phase to the board's chapter division</td><td>Two a week</td></tr>
      <tr><td>10</td><td>The textbook kept up month by month; blueprint-style sections from mid-year; full papers in December</td><td>Two or three a week, continuing through the winter vacation</td></tr>
      <tr><td>11</td><td>Stream subjects from the first week of a late-starting year</td><td>One per subject, often two</td></tr>
      <tr><td>12</td><td>Blueprint practice, the practical record before the HSSLC practical examination, then timed papers</td><td>Two per core subject before the examinations</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Where a Class 12 science student also has JEE or NEET in view, the national
    <a href="{{ url('/jee-home-tutor') }}">JEE</a> and <a href="{{ url('/neet-home-tutor') }}">NEET</a> home tutor pages
    explain how we match. Because the HSSLC comes early in the year, the board paper can be finished before the
    entrance season begins.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-cbse">How does NBSE study differ from CBSE in practice?</h2>
  <p>
    Some Kohima families move between the boards. The maths and science content overlaps closely because both use
    NCERT books; the differences lie in the paper design (a yearly blueprint against CBSE's sample papers), the
    calendar (January to February against CBSE's own schedule), the Class 11 promotion examination, and state-specific
    content such as the Nagaland chapter and local languages. Our
    <a href="{{ url('/cbse-home-tutor-kohima') }}">CBSE home tutor in Kohima</a> page covers the other side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-where">Getting a tutor to your part of Kohima</h2>
  <p>
    Kohima is built on hill slopes and buses and taxis are the usual way around, so we look first for a tutor who can
    make the same journey every week. Some notes from our research:
  </p>
  <ul>
    <li><strong>{!! $kmnA('bayavu-hill', 'Bayavü Hill') !!}</strong> holds the board's own office at the upper level; say whether you are in Upper or Lower Bayavü Hill.</li>
    <li><strong>{!! $kmnA('kohima-village', 'Kohima Village') !!}</strong>, the original settlement on the high ground, has homes spread over the slope; give the point a taxi can reach.</li>
    <li><strong>{!! $kmnA('naga-bazaar', 'Naga Bazaar') !!}</strong> links the northern wards with the centre; name Upper or Lower Naga Bazaar.</li>
    <li><strong>{!! $kmnA('midland', 'Midland') !!}</strong> has Upper, Middle and Lower parts; weekday traffic gathers when offices open and close.</li>
    <li><strong>{!! $kmnA('upper-chandmari', 'Upper Chandmari') !!}</strong> is a separate ward from Lower Chandmari, so say which.</li>
    <li><strong>{!! $kmnA('agri-farm', 'Agri Farm') !!}</strong> also covers Upper Agri, Electrical and Forest; give the smaller name too.</li>
  </ul>
  <p>
    Every area is on the <a href="{{ url('/city/kohima') }}">Kohima home tutors page</a>, the
    <a href="{{ url('/blog/kohima-home-tuition-guide') }}">Kohima home tuition guide</a> walks through each zone, and the
    <a href="{{ url('/online-tutor-kohima') }}">online tutors for Kohima</a> page covers lessons on screen.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-demo">Questions to ask an NBSE tutor at the demo</h2>
  <ol>
    <li><strong>Which NBSE classes and subjects do you teach?</strong> Preparing HSLC maths and HSSLC accountancy call for different skills.</li>
    <li><strong>What does this year's blueprint for my child's subject look like?</strong> A prepared tutor can describe its question types.</li>
    <li><strong>Do you use the board's question bank and past papers?</strong></li>
    <li><strong>What happens in the winter vacation?</strong> For board candidates it should be planned revision.</li>
    <li><strong>How will you reach us each week, and what if it rains heavily?</strong> Agree an online fallback.</li>
  </ol>
  <p>
    You receive two or three suitable tutors, each fee visible before the demo; the first lesson costs nothing, and so
    does changing tutor later. Every tutor who joins passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before appearing on the site. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for demo
    classes</a> suggests more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kmn-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Rates are set by the tutors themselves and shown to you ahead of the demo. For the questions worth asking about
    hours and sessions, see the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-kohima') }}">Kohima home tuition fees</a> article.
  </p>
  <p>
    Send the class, the stream or subjects, your ward and a landmark, and the times that suit, including over the
    winter vacation, and book the <a href="{{ url('/demo-class') }}">free demo</a>; <a href="{{ url('/tutors') }}">tutor
    profiles</a> are open to browse. Teachers familiar with the NBSE books will find requests under
    <a href="{{ url('/tuition-jobs/kohima') }}">Kohima tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
