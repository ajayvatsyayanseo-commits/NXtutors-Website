{{--
  Long-form guide for the "ICSE maths tutor Kolkata" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, societies or other people are named.

  CISCE facts are reworded from icse-maths-tutor-gurgaon / icse-maths-tutor-
  mumbai, which cite the CISCE ICSE Mathematics syllabus (80 theory + 20
  internal assessment) and the ICSE 2026 Mathematics specimen paper (Section A
  compulsory, 40 marks, including multiple-choice items; Section B any four
  questions, 40 marks; essential working required; rough work on the same
  sheet), and the CISCE ISC Mathematics syllabus 2027 and 2028 (from the 2027
  exam, seven compulsory units and no Section B/C choice; 80 theory + 20
  project; ISC Applied Mathematics a separate subject). Schools choose their
  own textbooks from publishers following the CISCE syllabus. The three-hour
  ICSE paper and the visiting examiner's viva on the ISC project are as stated
  in the Kolkata hub view (cisce.org). No other dates.

  Kolkata context only from the city hub view (CISCE's ICSE and ISC have a long
  and strong following in Kolkata; CBSE and CISCE sessions begin in April;
  autumn Puja holidays), zones/kolkata.json and kolkata-zone-guides.json.
  WBJEE facts as cited in wbjee-tutor-kolkata (wbjeeb.nic.in). Area links
  render only for active Kolkata areas. Fee wording is the approved sentence.
  FAQs render from faqs/icse-maths-tutor-kolkata.php.
--}}
@php
  $kicmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kicmA = function (string $slug, string $label) use ($kicmSlugs) {
      return in_array($slug, $kicmSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="kicmGuideTitle">
  <h2 id="kicmGuideTitle">ICSE and ISC maths tutors in Kolkata: full working, the right section choices, and a plan from Class 6</h2>

  <p class="nx-guide__lede">
    The CISCE's ICSE and ISC examinations have a long and strong following in Kolkata, and maths is the subject where
    the board's style shows most clearly. Examiners want to see every step; a correct final answer with the working
    missing earns little. This page explains how the ICSE Class 10 paper is built, how to use the internal marks,
    what to fix in Classes 6 to 9, and how ISC maths is changing from the 2027 examination. Abhinandan Tiwary, who teaches
    Class 10 CBSE and ICSE maths on NXTutors, wrote the ICSE sections, and Ajay Vatsyayan, who teaches ISC, IB and
    IGCSE maths, wrote the ISC section. It sits under our
    <a href="{{ url('/maths-home-tutor-kolkata') }}">maths home tutors in Kolkata</a> page and the
    <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE and ISC tutors in Kolkata</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kicm-paper">The Class 10 paper</a> ·
    <a href="#kicm-working">Writing the working</a> ·
    <a href="#kicm-internal">Internal marks</a> ·
    <a href="#kicm-classes">Classes 6 to 10</a> ·
    <a href="#kicm-isc">ISC maths</a> ·
    <a href="#kicm-after">After Class 10</a> ·
    <a href="#kicm-books">Textbooks</a> ·
    <a href="#kicm-zones">Zones and travel</a> ·
    <a href="#kicm-mode">Home or online</a> ·
    <a href="#kicm-demo">The demo</a> ·
    <a href="#kicm-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kicm-paper">How the ICSE Class 10 maths paper is put together</h2>
  <p>
    ICSE Mathematics is marked out of 100: a written paper of 80 marks, which our Kolkata hub notes runs for three
    hours, and 20 marks of internal assessment from the school. The CISCE's specimen paper for 2026 splits the written
    paper in two.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 mathematics, as the 2026 specimen paper sets it out</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">What it contains</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Section A</td><td>Compulsory questions, including multiple-choice items and short problems from across the syllabus</td><td>40</td></tr>
      <tr><td>Section B</td><td>Longer questions; the candidate answers any four</td><td>40</td></tr>
      <tr><td>Internal assessment</td><td>Work set and marked by the school during the year</td><td>20</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Section A rewards breadth: a student who has skipped a chapter will meet it there and cannot avoid it. Section B
    rewards judgement. Choosing the four questions well, in the first few minutes, is a skill in itself, and a tutor
    should practise it with the student on full papers: read every Section B question, rank them by confidence, and
    commit. Our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a> covers the topics
    in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-working">Writing the working the way the examiner wants it</h2>
  <p>
    The specimen paper tells candidates that essential working must be shown and that rough work goes on the same
    sheet as the answer, not on a separate page. In practice that means:
  </p>
  <ul>
    <li><strong>One line, one step.</strong> Each transformation of an equation on its own line, with the reason where it is not obvious.</li>
    <li><strong>Rough work beside the answer.</strong> A narrow margin column for side calculations, ruled off, so the examiner can follow it.</li>
    <li><strong>Units and statements.</strong> A final line that answers the question in words, with units, for every word problem.</li>
    <li><strong>Constructions and graphs.</strong> Neat, labelled and to the scale asked for; marks are lost for missing arcs or labels.</li>
  </ul>
  <p>
    Students who move to ICSE from another board often find this the biggest change. It is also the habit that
    serves them well later, in ISC and in any entrance examination where a clean method prevents slips.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-internal">Using the 20 internal marks well</h2>
  <p>
    The internal fifth of the grade is assessed by the school. It is easy to treat as a formality, but it is the only
    part of the subject where a student controls the timing. A tutor can help by checking that assignments are
    complete and correctly presented before they are submitted, explaining the mathematics behind a project, and
    making sure the student understands their own work well enough to discuss it. The tutor should never write any
    part of it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-classes">From Class 6 to Class 10: what each year should fix</h2>
  <p>
    CISCE schools in Kolkata begin their session in April, which gives a clean point to start tuition. The table
    shows where a tutor's time usually goes.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>An ICSE maths path, class by class</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What to secure</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>Fractions, ratio, early algebra and geometry; neat, step-by-step layout from the start</td><td>One or two a week</td></tr>
      <tr><td>9</td><td>The step up in algebra, geometry proofs and trigonometry; first full-length tests</td><td>Two a week</td></tr>
      <tr><td>10, April to the Puja holidays</td><td>Finishing the syllabus with chapter tests; internal assessment work on time</td><td>Two a week</td></tr>
      <tr><td>10, after the Puja holidays</td><td>Full papers, Section B choice practice, pre-board corrections</td><td>Two or three a week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A gap left in Class 9 almost always reappears in Class 10, usually in Section B, where the long questions combine
    several chapters. If you can add a tutor in only one year before the board, Class 9 is often the better choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-isc">ISC mathematics in Classes 11 and 12, and the 2027 change</h2>
  <p>
    ISC Mathematics pairs an 80-mark theory paper with 20 marks of project work, and in Class 12 a visiting examiner
    holds a viva on the project. The CISCE has revised the syllabus for the 2027 and 2028 examinations: from 2027 the
    theory paper is built on seven compulsory units, and the old choice between Section B and Section C is gone. A
    student who would once have skipped one of those sections must now be ready for all of it.
  </p>
  <ul>
    <li><strong>For Class 11 students now:</strong> plan on the revised syllabus and make sure the whole unit list is covered, not a chosen part.</li>
    <li><strong>For the project:</strong> the student chooses and writes it; the tutor can teach the mathematics and rehearse the viva questions.</li>
    <li><strong>Applied Mathematics:</strong> the CISCE offers ISC Applied Mathematics as a separate subject. Make sure the tutor knows which one your child takes.</li>
  </ul>
  <p>
    ISC science students in Kolkata often also sit an engineering entrance. The state's WBJEE gives half its marks to
    mathematics and uses one-mark and two-mark options with negative marking, which needs speed that long ISC answers
    do not build on their own; see our <a href="{{ url('/wbjee-tutor-kolkata') }}">WBJEE tutors in Kolkata</a> and
    <a href="{{ url('/jee-home-tutor-kolkata') }}">JEE home tutors in Kolkata</a> pages. Our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers both levels in more
    depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-after">After ICSE Class 10: staying with ISC or changing board</h2>
  <p>
    Not every ICSE student in Kolkata continues to ISC. The state's Council of Higher Secondary Education lists the
    CISCE among the boards it treats as equivalent, so a move into Higher Secondary for Class 11 is open, and some
    students head for CBSE or the IB Diploma instead. Each route asks something different of an ICSE maths student:
  </p>
  <ul>
    <li><strong>Higher Secondary:</strong> the Class 11 and 12 papers are split into semesters, two of them made up entirely of one-mark multiple-choice questions, and no calculator is allowed in any of them. Speed and option elimination need practice that ICSE did not demand. Our <a href="{{ url('/west-bengal-board-tutor-kolkata') }}">West Bengal board tutors in Kolkata</a> page explains the pattern.</li>
    <li><strong>IB Diploma:</strong> the layout habits carry over well; the graphic calculator and open modelling are new.</li>
    <li><strong>ISC:</strong> the most direct continuation, but the jump in depth from Class 10 to Class 11 is still steep, and new topics arrive quickly.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-books">Why there is no single ICSE maths textbook</h2>
  <p>
    The CISCE sets the syllabus but does not publish one textbook for every school; schools choose books from
    publishers who follow the syllabus. Two students in the same class in different schools may therefore be working
    from different books, with different exercise numbering and a different order of chapters. A tutor should work from
    the book your child's school uses, add questions from the specimen paper, and avoid assuming that "Chapter 7" means
    the same thing everywhere.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-zones">How ICSE maths tutors reach you, zone by zone</h2>
  <p>
    For ICSE maths the journey matters as much as the subject match, because a Class 10 student may need two or three
    sessions a week for months. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a>:</strong> {!! $kicmA('kalighat', 'Kalighat') !!} grew around its temple beside the Adi Ganga and has had a Blue Line station since 1986; for older houses, say which floor and which bell.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>:</strong> {!! $kicmA('naktala', 'Naktala') !!}, known for its Durga Puja, is reached from Gitanjali on the Blue Line; plan around the main road's evening peak.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala and New Alipore</a>:</strong> {!! $kicmA('behala', 'Behala') !!} is one of the city's oldest and largest residential areas; the Purple Line's Behala Chowrasta station stands right above the crossing.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and the southern bypass</a>:</strong> {!! $kicmA('patuli', 'Patuli') !!} is a planned township of blocks; the block and plot number find almost any house, and Kavi Subhash is at the southern end of the Orange Line.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a>:</strong> {!! $kicmA('shyambazar', 'Shyambazar') !!} centres on its five-point crossing, busy at school and office hours; mid-afternoon or later evening lessons are easier.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum and Baguiati</a>:</strong> {!! $kicmA('baguiati', 'Baguiati') !!} has no metro stop and spreads over several sub-localities, so a tutor living nearby is the easiest match and an exact landmark helps.</li>
  </ul>
  <p>
    Every neighbourhood is on the <a href="{{ url('/city/kolkata') }}">Kolkata home tutors page</a>; our local guide to
    <a href="{{ url('/blog/south-kolkata-tuition-guide') }}">South Kolkata</a> goes further for the southern zones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-mode">Home or online for ICSE maths?</h2>
  <p>
    Because the board marks the working, ICSE maths benefits from a tutor who can see the page as it is written,
    which is easiest at home. Constructions, graphs and long Section B answers are hard to correct through a webcam.
    Online works well for short doubt sessions, specimen-paper reviews and the weeks around the Puja holidays. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring comparison</a> covers the wider
    choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-demo">What to look for in an ICSE maths demo</h2>
  <ol>
    <li><strong>Working on the page.</strong> Does the tutor make your child write each step, or accept answers?</li>
    <li><strong>Section B choice.</strong> Ask how they teach a student to pick the four questions.</li>
    <li><strong>Your school's book.</strong> The tutor should ask for it rather than bring their own order.</li>
    <li><strong>Internal assessment.</strong> Listen for "guide, never write".</li>
    <li><strong>For ISC:</strong> ask what changes from 2027 and how they would cover all seven units.</li>
    <li><strong>The route.</strong> Which stop or road, and what happens in Puja week?</li>
  </ol>
  <p>
    You choose from two or three matched tutors, and each fee is shown before the demo. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kicm-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> explain what moves the
    figure.
  </p>
  <p>
    Send the class, ICSE or ISC, the textbook, your neighbourhood and the evenings that work. You receive two or three
    matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and switching tutor later
    is free. You can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or compare with our
    <a href="{{ url('/igcse-maths-tutor-kolkata') }}">IGCSE maths</a> and
    <a href="{{ url('/ib-maths-tutor-kolkata') }}">IB maths</a> pages for Kolkata.
  </p>
  </section>

  </div>
</article>
