{{--
  Long-form guide for the "chemistry home tutor Port Blair" page (Sri Vijaya
  Puram, Andaman and Nicobar Islands; Classes 11 and 12 on CBSE, with NEET and
  JEE chemistry). Byline in config: NXTutors Academic Team.

  Board position only from the research file's board_facts
  (southandaman.nic.in/education: secondary and senior secondary schools
  affiliated to CBSE; five mediums of instruction; archived CASIAN list). No
  school counts or names.
  CBSE and entrance facts reuse checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (043; 70 + 30; 33 questions in
  sections A-E; chapter marks Solutions 7, Electrochemistry 9, Kinetics 7,
  d- and f-block 7, Coordination 7, Haloalkanes 6, Alcohols 6, Aldehydes 8,
  Amines 6, Biomolecules 7; branch totals physical 23, inorganic 14, organic
  33; four topics assessed only formatively incl. surface chemistry; p-block
  groups 15-18 and the solid state not in the Class 12 syllabus; practical
  volumetric 8, salt analysis 8, content-based experiment 6, project 4, record
  and viva 4; skills split 40/30/30; 33% internal choice),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026: chemistry 45
  of 180, +4/-1) and jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main
  2026: 25 chemistry questions, +4/-1).
  Local facts only from database/seo-content/areas/port-blair-research.json.
  No tourism, no coaching institute/school/college/hospital/society/people
  names, no distances or travel times, only the allowed fee sentence. Area
  links render only for active areas.
--}}
@php
  $pbcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbcA = function (string $slug, string $label) use ($pbcSlugs) {
      return in_array($slug, $pbcSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbc-guide" aria-labelledby="pbcGuideTitle">
  <h2 id="pbcGuideTitle">Chemistry home tutor in Sri Vijaya Puram (Port Blair): organic early, physical steady, inorganic never forgotten</h2>

  <p class="nx-guide__lede">
    Senior chemistry punishes a late start more than most subjects. Organic reactions pile up chapter after chapter,
    physical chemistry needs regular numerical practice, and inorganic facts fade unless they are revisited. For a
    Class 11 or 12 student in Sri Vijaya Puram, the city also known as Port Blair, the paper is almost always CBSE's,
    since the district's senior secondary schools are affiliated to that board. NXTutors finds two or three chemistry
    tutors who fit your child's class, any NEET or JEE plan and your locality, shows every fee before you meet them, and
    the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbc-weights">Chapter weights</a> ·
    <a href="#pbc-branches">Three branches</a> ·
    <a href="#pbc-out">What is not examined</a> ·
    <a href="#pbc-paper">The paper</a> ·
    <a href="#pbc-lab">Practical marks</a> ·
    <a href="#pbc-entrance">NEET and JEE</a> ·
    <a href="#pbc-terms">Names and equations</a> ·
    <a href="#pbc-where">Five localities</a> ·
    <a href="#pbc-online">Online sessions</a> ·
    <a href="#pbc-demo">The demo</a> ·
    <a href="#pbc-fee">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbc-weights">How are the Class 12 chemistry marks spread?</h2>
  <p>
    Chemistry (043) has a three-hour theory paper of 70 marks and a practical examination of 30. The 2026-27
    curriculum spreads the 70 theory marks over ten NCERT chapters:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: chapter marks grouped by branch</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Chapters and marks</th><th scope="col">Branch total</th></tr>
    </thead>
    <tbody>
      <tr><td>Physical</td><td>Solutions 7; Electrochemistry 9; Chemical Kinetics 7</td><td>23</td></tr>
      <tr><td>Inorganic</td><td>d- and f-Block Elements 7; Coordination Compounds 7</td><td>14</td></tr>
      <tr><td>Organic</td><td>Haloalkanes and Haloarenes 6; Alcohols, Phenols and Ethers 6; Aldehydes, Ketones and Carboxylic Acids 8; Amines 6; Biomolecules 7</td><td>33</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Organic chemistry is close to half the theory paper, and there is no chapter-wise choice, so every chapter must be
    ready. Electrochemistry, at 9, is the heaviest single chapter.
  </p>
  <p>
    Class 11 matters as much as it looks. Mole concept, atomic structure, chemical bonding, equilibrium and the basic
    principles of organic chemistry are taught there, and every Class 12 chapter leans on them. A student who reaches
    Class 12 shaky on moles or on reaction mechanisms will find Solutions and the organic chapters far harder than they
    need to be, so a tutor engaged in Class 11 often saves more time than one hired in a hurry a year later.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-branches">How should a tutor pace the three branches?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Organic: start early, revise weekly</h3>
  <p>
    Each chapter builds on the last. A reaction chart, kept up to date and tested in short conversion exercises every
    week, stops the pile-up that catches students in the final months.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Physical: numericals every week</h3>
  <p>
    Colligative properties, the Nernst equation and rate laws reward steady practice with units written in full.
    A few numericals each week beat a long session once a month.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Inorganic: small and often</h3>
  <p>
    Trends in the d- and f-block and naming of coordination compounds fade quickly. Short recall checks at the start
    of each lesson keep them alive.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-out">Which topics are no longer on the board paper?</h2>
  <p>
    This is where old notes cause wasted weeks. The 2026-27 curriculum lists four topics, surface chemistry among them,
    that stay in the syllabus but are assessed only formatively, without adding to the board marks. The p-block
    elements of groups 15 to 18 and the solid state are not part of the current Class 12 syllabus at all. A tutor
    teaching from an older guide may spend time on them. Ask which edition of the curriculum the tutor plans from,
    and note that entrance syllabi are set separately and can differ. Our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide</a>
    lists the details.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-paper">What does the question paper ask for?</h2>
  <p>
    The 2026-27 sample paper sets 33 compulsory questions in five sections: sixteen one-mark items including four
    assertion-reason questions, five of two marks, seven of three, two case-based or data-based questions of four
    marks, and three long answers of five. The curriculum gives 33% internal choice across the sections.
  </p>
  <p>
    About 40% of the marks reward remembering and understanding; the other 60% ask a student to apply knowledge or
    to analyse and evaluate, often from a table or graph of data. A good tutor brings unseen data to every few
    lessons: boiling points to compare, a rate graph to read, cell values to check against the Nernst equation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-lab">How are the 30 practical marks earned?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry practical, 2026-27, and how a tutor can help at home</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">Tutor's role at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Volumetric analysis</td><td>8</td><td>Calculations of molarity and strength rehearsed until automatic</td></tr>
      <tr><td>Salt analysis</td><td>8</td><td>The order of tests for cations and anions learnt as a flow chart</td></tr>
      <tr><td>Content-based experiment</td><td>6</td><td>The theory behind each experiment explained in plain words</td></tr>
      <tr><td>Project work</td><td>4</td><td>A topic chosen early and finished on time</td></tr>
      <tr><td>Class record and viva</td><td>4</td><td>Record checked entry by entry; short mock vivas</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-entrance">How does NEET or JEE chemistry change the plan?</h2>
  <p>
    In 2026 NEET (UG) had 180 multiple-choice questions, 45 of them in chemistry, with four marks for a correct answer
    and one deducted for a wrong one. JEE Main Paper 1 had 25 chemistry questions out of 75, marked the same way.
    NCERT is the backbone of both, especially for inorganic facts and named reactions, but the entrance papers test
    speed and exactness rather than written explanation.
  </p>
  <ul>
    <li><strong>Separate the sessions.</strong> Board writing in one, timed objective sets in the other.</li>
    <li><strong>Keep an error log.</strong> Every wrong objective answer recorded with the reason.</li>
    <li><strong>Cover the gaps.</strong> Entrance syllabi may include topics the board no longer examines.</li>
  </ul>
  <p>
    See the national <a href="{{ url('/neet-home-tutor') }}">NEET</a> and <a href="{{ url('/jee-home-tutor') }}">JEE</a>
    home tutor pages and our guide to <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching,
    a home tutor or both for NEET</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-terms">Why do names and equations need extra care?</h2>
  <p>
    Chemistry marks are lost on details: a missing state symbol, a misspelt product, a wrong IUPAC name. The district's
    education page lists five mediums of instruction, English, Hindi, Tamil, Telugu and Bengali, and a student who
    studied science in one language up to Class 10 may find chemical vocabulary in English slow at first. A tutor
    can explain the idea in the language your child is most at home in, then insist on the exact English name and equation in
    writing. A weekly naming drill, ten structures to name and ten names to draw, settles it faster than any amount of
    reading.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A weekly chemistry rhythm for a Class 12 student with two tutor sessions</caption>
    <thead>
      <tr><th scope="col">Session</th><th scope="col">Main work</th><th scope="col">Quick check at the start</th></tr>
    </thead>
    <tbody>
      <tr><td>First</td><td>The current school chapter, taught and practised with written answers</td><td>Five named reactions from the organic chart</td></tr>
      <tr><td>Second</td><td>Physical numericals or a data-based question, then homework review</td><td>Three inorganic trends or coordination names</td></tr>
      <tr><td>Weekend (self-study)</td><td>One set of mixed one-mark questions across all chapters done so far</td><td>Marked by the tutor at the next session</td></tr>
    </tbody>
  </table>
  </div>
    <p>
    A simple habit helps: a separate notebook page for every named reaction, with the reagents, conditions and product written the same way each time. Students who build that page as they go revise organic chemistry far faster in the final months, because the reactions they need are already in one place rather than scattered across class notes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-where">What should a chemistry tutor know about five localities?</h2>
  <p>
    The <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair) page</a> lists every locality.
  </p>
  <dl>
    <dt>{!! $pbcA('school-line', 'School Line') !!}</dt>
    <dd>Senior secondary classes are close by, so Class 11 and 12 chemistry is a common request. Give a landmark and the lane, and agree where the tutor can park.</dd>
    <dt>{!! $pbcA('haddo', 'Haddo') !!}</dt>
    <dd>Schooling in English, Hindi and Telugu, so say which medium your child studied science in. In a quarters block, share the block, the quarter number and the nearest gate.</dd>
    <dt>{!! $pbcA('junglighat', 'Junglighat') !!}</dt>
    <dd>A long-established residential locality; a lane name and landmark help more than a house number on the first visit.</dd>
    <dt>{!! $pbcA('dairy-farm', 'Dairy Farm') !!}</dt>
    <dd>Most children here follow CBSE from the early classes. In a family house the tutor can usually come to the door.</dd>
    <dt>{!! $pbcA('garacharma', 'Garacharma') !!}</dt>
    <dd>A census town just outside the city. Two fixed weekday slots, or a weekend home class with online weekday sessions, keeps senior chemistry on track.</dd>
  </dl>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-online">Does chemistry work online?</h2>
  <p>
    Much of it does. Reaction mechanisms can be drawn step by step on a shared screen, numericals photographed and
    marked, and NEET objective sets reviewed question by question. What a visit does better is checking the practical
    record and watching a student write a long answer without help. On an island, the tutor with the right experience
    for NEET or JEE chemistry may live across the city, or on the mainland, so one home lesson and one online lesson
    a week is a common arrangement, with the online slot also covering heavy-rain evenings in the monsoon months. See
    <a href="{{ url('/online-tutor-port-blair') }}">online tutors for Port Blair</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-demo">How should you judge a chemistry demo?</h2>
  <ul>
    <li>The tutor asks which chapters are done at school and checks one quickly.</li>
    <li>Your child writes at least one reaction or numerical in full during the lesson.</li>
    <li>The tutor knows which topics are formative-only or out of the syllabus this year.</li>
    <li>A plan is offered that keeps all three branches moving each month.</li>
  </ul>
  <p>
    If the match is not right, another shortlisted tutor can give the next demo, and switching later is free. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more pointers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbc-fee">What does a chemistry home tutor cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, visible before the demo. The <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in
    Port Blair</a> guide explains what to ask.
  </p>
  <p>
    Send the class, any entrance plan, the chapters that worry you, your locality and the free evenings; two or three
    chemistry tutors come back with fees. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. See also <a href="{{ url('/physics-home-tutor-port-blair') }}">physics</a>
    and <a href="{{ url('/biology-home-tutor-port-blair') }}">biology</a> tutors in Port Blair, the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page and the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page. Chemistry teachers can find requests on
    <a href="{{ url('/tuition-jobs/port-blair') }}">Port Blair tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
