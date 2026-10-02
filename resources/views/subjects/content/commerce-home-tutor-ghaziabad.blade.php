{{--
  Long-form guide for "commerce home tutor Ghaziabad": the Class 11-12
  commerce subjects (accountancy, business studies, economics, maths or
  applied maths, English) across the UP Board Intermediate commerce group,
  CBSE and ISC, with notes on CUET and CA Foundation. Byline: NXTutors
  Academic Team. No schools, colleges, coaching institutes, societies or people
  are named. No claim about local commerce-tutor supply or demand. Kept
  distinct from commerce-home-tutor-noida, -lucknow and -mumbai.

  Official sources:
  - UP Board, Madhyamik Shiksha Parishad (upmsp.edu.in, read 2 Oct 2026; Hindi
    PDFs in Krutidev font read and translated by the writer):
    Board_Syllabus.aspx (Class 11-12 Accountancy 156, Business Studies 157,
    Economics 136, Maths 131, English 117; Class 10 Commerce 935);
    Downloads/Syllabus/Class12/156-Accountancy-Class-12.pdf (2026-27: Part 1
    partnership fundamentals 6, admission 13, retirement/death 13,
    dissolution 13; Part 2 share capital 13, debentures 12, company financial
    statements 12, accounting ratios 9, cash flow statement 9; four unit tests
    for remedial teaching, two MCQ-based and two descriptive, the first
    combining 10 marks of summer-vacation homework and a 10-mark test);
    Class12/157-Business-Studies-Class-12.pdf (Part 1 nature and significance
    of management 5, principles 5, business environment 10, planning 7,
    organising 10, staffing 7, directing 10, controlling 6; Part 2 business
    finance 12, marketing 16, consumer protection incl. the Consumer
    Protection Act 2019, 12); Class12/136-Economics-Class-12.pdf
    (microeconomics: introduction 4, consumer equilibrium and demand 18,
    producer behaviour and supply 18, price determination under perfect
    competition 10; macroeconomics: national income 12, money and banking 8,
    determination of income and employment 14, government budget 8, balance
    of payments 8); Class12/117-English-Class-12.pdf (writing section: letter
    to the editor, complaint or business letters such as placing orders,
    booking or cancellation and enquiries, 10 marks; translation from Hindi);
    Class10/935-Commerce-Class-10.pdf (70 written + 30 internal at school);
    Downloads/Commerce_Final.pdf (career guidance, commerce group: B.Com,
    BBA/BBS, CA, CS, CMA, CFA, actuarial routes, CUET among entrance tests;
    notice that families should take a career counsellor's advice before
    admission and that the board does not check how any institution or course
    is run). Home page: career guidance for four groups.
  - CBSE Senior Secondary Curriculum 2026-27 (cbseacademic.nic.in), as stated
    on commerce-home-tutor-noida, -mumbai and the national accountancy /
    economics pages: Accountancy (055), Business Studies (054), Economics (030)
    each 80 theory + 20 project; Mathematics or Applied Mathematics.
  - CISCE ISC Accounts (858), Commerce (857), Economics (856), English
    compulsory, maths optional (Mathematics or Applied Mathematics), as stated
    on commerce-home-tutor-mumbai (cisce.org).
  - NTA CUET (UG) 2026 Information Bulletin (cuet.nta.nic.in), as on
    commerce-home-tutor-mumbai: Accountancy / Book Keeping (301), Economics /
    Business Economics (309) and Business Studies among domain subjects; 50
    compulsory questions in 60 minutes on NCERT Class 12 content.
  - ICAI CA Foundation (icai.org/post/foundation-nset): Accounting, Business
    Laws, Quantitative Aptitude, Business Economics. No eligibility or dates.
  Local detail only from database/seo-content/areas/ghaziabad-research.json,
  ghaziabad-zone-guides.json, zones/ghaziabad.json and the Ghaziabad hub
  (commerce students find Accountancy and Economics hardest in Class 11, as
  the hub says; UP Board lessons may be in Hindi or English). Fee wording is
  the approved sentence. FAQs render from faqs/commerce-home-tutor-ghaziabad.php.
  Area links render only when that Ghaziabad area page exists and is active.
--}}
@php
  $cogzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cogzA = function (string $slug, string $label) use ($cogzSlugs) {
      return in_array($slug, $cogzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="coGzGuideTitle">
  <h2 id="coGzGuideTitle">Commerce home tutors in Ghaziabad: UP Board, CBSE and ISC commerce, planned subject by subject</h2>

  <p class="nx-guide__lede">
    A commerce student in Class 11 or 12 carries four or five papers at once: accountancy, business studies (or
    commerce), economics, usually a maths paper, and English. In Ghaziabad that student may be in a UP Board school, a
    CBSE school or an ISC school, and each board names, weights and marks those subjects differently. This page sets
    out what the UP Board's own 2026-27 files say about its Class 12 commerce papers, how CBSE and ISC commerce compare,
    how to split the subjects between one tutor or two, where CUET and CA Foundation fit, and how tutors travel to each
    part of the city. It is written by the NXTutors Academic Team; for single subjects see our
    <a href="{{ url('/accountancy-home-tutor-ghaziabad') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-ghaziabad') }}">economics</a> pages for Ghaziabad.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cogz-boards">Subjects by board</a> ·
    <a href="#cogz-up">UP Board Class 12 weights</a> ·
    <a href="#cogz-tests">Unit tests and English</a> ·
    <a href="#cogz-split">One tutor or two</a> ·
    <a href="#cogz-plan">Class 11 and 12 plan</a> ·
    <a href="#cogz-after">CUET, CA and careers</a> ·
    <a href="#cogz-travel">Tutors and travel</a> ·
    <a href="#cogz-mode">Home or online</a> ·
    <a href="#cogz-demo">The demo</a> ·
    <a href="#cogz-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cogz-boards">Which commerce papers will your child sit?</h2>
  <p>
    Before we suggest anyone, we need the subject names exactly as they appear on your child's timetable, because the
    same stream looks different on each board.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 commerce in Ghaziabad, board by board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Commerce subjects</th><th scope="col">What to tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>UP Board (Intermediate commerce group)</td><td>Accountancy (156), Business Studies (157) and Economics (136) from the board's Class 11–12 list, which also carries English (117), Hindi and Mathematics (131); the school sets the exact combination</td><td>The medium of the answer sheet, and the textbooks the school uses</td></tr>
      <tr><td>CBSE</td><td>Accountancy (055), Business Studies (054), Economics (030): in each, a theory paper of 80 and a project of 20. Most students add a language, and many add Mathematics or Applied Mathematics</td><td>The accountancy option chosen by the school for Class 12, and which of the two maths papers your child sits</td></tr>
      <tr><td>ISC</td><td>Accounts (858), Commerce (857), Economics (856); English is compulsory, maths is a choice</td><td>Mathematics or Applied Mathematics, and when the school's project deadlines fall</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The single-subject pages for <a href="{{ url('/accountancy-home-tutor-ghaziabad') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-ghaziabad') }}">economics</a> in Ghaziabad go into each board's paper. This
    page looks at the stream as a whole. Families still choosing a stream may find our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> useful.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-up">UP Board Class 12 commerce: where the 100 marks sit</h2>
  <p>
    The board publishes a syllabus file for every subject, with marks attached to each unit. For the three core
    commerce subjects in Class 12, the 2026-27 files read like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>UP Board Class 12 commerce subjects, unit weights from the 2026-27 syllabus files</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">First part</th><th scope="col">Second part</th></tr>
    </thead>
    <tbody>
      <tr><td>Accountancy (156)</td><td>Partnership: basic concepts 6; admission of a partner 13; retirement or death 13; dissolution 13</td><td>Company accounts: share capital 13; debentures 12; company financial statements 12; accounting ratios 9; cash flow statement 9</td></tr>
      <tr><td>Business Studies (157)</td><td>Principles and functions of management: nature and significance 5; principles 5; business environment 10; planning 7; organising 10; staffing 7; directing 10; controlling 6</td><td>Business finance 12; marketing 16; consumer protection, including the Consumer Protection Act 2019, 12</td></tr>
      <tr><td>Economics (136)</td><td>Microeconomics: introduction 4; consumer equilibrium and demand 18; producer behaviour and supply 18; price under perfect competition 10</td><td>Macroeconomics: national income 12; money and banking 8; income and employment 14; government budget 8; balance of payments 8</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Three things stand out. In accountancy, the partnership chapters together carry 45 marks, so a student who is
    shaky on admission and retirement adjustments cannot make it up elsewhere; and the company half (55 marks) is
    where share and debenture entries must become automatic. In business studies, the management half is spread
    across eight units, which rewards steady weekly revision of definitions and features rather than a late cram. In
    economics, the two halves are exactly equal, and the diagrams of demand, supply and price are the backbone of the
    first half.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-tests">Unit tests through the year, and the English paper</h2>
  <p>
    The Class 12 accountancy, business studies and economics files each set out four unit tests in the school year
    for remedial teaching, two built on multiple-choice questions and two descriptive, the first of them combining
    summer-vacation homework with a short test. They are a useful early warning: a tutor who sees the result of each
    test can fix the weak unit while there is still time.
  </p>
  <p>
    Commerce students should not neglect English either. The UP Board Class 12 English paper is a full 100 marks, and
    its writing section includes a letter to the editor, a complaint or a business letter, such as placing an order,
    booking or cancelling, or making an enquiry, worth 10 marks, alongside a translation from Hindi into English. Those
    are skills a commerce student uses later, and they are quick marks with practice. Our
    <a href="{{ url('/english-home-tutor-ghaziabad') }}">English home tutors in Ghaziabad</a> page covers the subject,
    and the <a href="{{ url('/up-board-tutor-ghaziabad') }}">UP Board tutors in Ghaziabad</a> page explains the board's
    other papers. The board also lists a Commerce subject for Class 10, examined through a 70-mark written paper with
    30 marks of internal assessment at school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-split">One commerce tutor or two?</h2>
  <p>
    The stream contains two kinds of subject. Accountancy and maths are worked line by line and learnt by solving many
    problems; business studies, ISC Commerce and much of economics are written theory, with diagrams and some
    numericals in economics. A tutor who is excellent at both is rare, so the choice below matters more than it looks.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four ways families arrange commerce tuition</caption>
    <thead>
      <tr><th scope="col">Arrangement</th><th scope="col">Suits</th><th scope="col">The risk</th></tr>
    </thead>
    <tbody>
      <tr><td>An accountancy tutor and nothing else</td><td>A student comfortable with theory who gets lost in adjustments, ledgers or partnership questions</td><td>The theory papers quietly slide until the final weeks</td></tr>
      <tr><td>A single tutor for every commerce paper</td><td>Class 11, or a family that wants one fixed weekly slot</td><td>Weakness on the theory side; make sure the demo covers a written answer too</td></tr>
      <tr><td>A numbers tutor plus a theory tutor</td><td>A Class 12 student with high targets and a heavy subject load</td><td>Two calendars to manage; decide which tutor owns the overall plan</td></tr>
      <tr><td>Accountancy in person, theory on screen</td><td>A family whose strongest theory tutor lives on the far side of the city</td><td>Answers must still be marked in full, so share clear photos of every page</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the maths paper, see <a href="{{ url('/maths-home-tutor-ghaziabad') }}">maths home tutors in Ghaziabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-plan">A plan for Classes 11 and 12</h2>
  <p>
    Our Ghaziabad hub notes that commerce students tend to find accountancy and economics the hardest Class 11
    subjects. That is because both start from scratch: accountancy builds the whole recording process, and economics
    brings in statistics and demand and supply. Class 12 then moves accountancy to partnerships and companies and
    economics to the economy as a whole.
  </p>
  <ul>
    <li><strong>Class 11, first half:</strong> journal, ledger and trial balance made secure; business vocabulary built; this is the easiest point at which to start a tutor.</li>
    <li><strong>Class 11, second half:</strong> financial statements with adjustments; a full theory answer written every week.</li>
    <li><strong>Class 12, start:</strong> partnership accounts early, because later chapters lean on them; economics numericals and diagrams practised alongside.</li>
    <li><strong>Class 12, middle:</strong> company accounts, shares and debentures until entries are automatic; unit-test results used to choose what to revisit.</li>
    <li><strong>Before the boards:</strong> a timed paper in each subject every week or two, theory answers checked point by point, and CUET-style practice only after that routine is settled.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-after">CUET, CA Foundation and the board's career guidance</h2>
  <p>
    <strong>CUET (UG).</strong> In the NTA's information bulletin for 2026, the domain subjects include Business
    Studies, Accountancy / Book Keeping (301) and Economics / Business Economics (309). Each domain test is 60 minutes
    of 50 compulsory questions drawn from NCERT's Class 12 books, so a UP Board or ISC student should check which
    NCERT chapters their own syllabus does not cover. The bulletin for your year is on
    <a href="https://cuet.nta.nic.in" rel="noopener" target="_blank">cuet.nta.nic.in</a>; objective, timed practice is
    worth adding only after the board-style answers are in good shape.
  </p>
  <p>
    <strong>CA Foundation.</strong> Under its new scheme, the ICAI's Foundation course has four papers: Accounting;
    Business Laws; Quantitative Aptitude; and Business Economics. School accountancy and economics give a head start
    on two of them, while law and quantitative aptitude are fresh territory. The institute decides who may register
    and when, so rely on <a href="https://www.icai.org" rel="noopener" target="_blank">icai.org</a> for that, and let the
    tutor know early if Foundation is on the cards.
  </p>
  <p>
    <strong>The UP Board's own career file.</strong> The board's career guidance for the commerce group describes
    routes such as B.Com, BBA, chartered and company secretary courses, cost and management accounting, CFA and
    actuarial science, with CUET among the entrance tests. It also tells families to take a career counsellor's advice
    before any admission and says the board does not check how any institution or course named is run. Read it as a
    starting list, not a recommendation.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-travel">How commerce tutors reach each part of Ghaziabad</h2>
  <p>
    From our zone research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/indirapuram') }}">Indirapuram</a>.</strong> {!! $cogzA('indirapuram-shakti-khand-3', 'Shakti Khand 3') !!} is mostly independent houses and standalone buildings near Vaishali station, so a tutor usually comes straight to the door, which makes short, frequent sessions practical.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vaishali-kaushambi') }}">Vaishali and Kaushambi</a>.</strong> Most of {!! $cogzA('vaishali-sector-5', 'Vaishali Sector 5') !!} is a short e-rickshaw ride from Vaishali metro, and its houses and floors mean doorstep visits; plan weekday lessons around evening traffic near the station.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/vasundhara') }}">Vasundhara</a>.</strong> {!! $cogzA('vasundhara-sector-11', 'Sector 11') !!} has a lively market whose narrow inner roads fill in the evening; Vaishali and Shyam Park are the nearest stations, both needing an e-rickshaw.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/sahibabad-rajendra-nagar') }}">Sahibabad and Rajendra Nagar</a>.</strong> {!! $cogzA('rajendra-nagar', 'Rajendra Nagar') !!} has its own Red Line station on GT Road and plotted lanes with no society gate; late-afternoon or weekend slots avoid shift-change traffic.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/surya-nagar-ramprastha') }}">Surya Nagar and Ramprastha</a>.</strong> {!! $cogzA('brij-vihar', 'Brij Vihar') !!} is a quiet block-wise colony; tutors come via Dilshad Garden or Vaishali and an auto, so give the block letter and a landmark.</li>
    <li><strong><a href="{{ url('/city/ghaziabad/zone/raj-nagar-kavi-nagar-old-ghaziabad') }}">Raj Nagar, Kavi Nagar and Old Ghaziabad</a>.</strong> {!! $cogzA('patel-nagar', 'Patel Nagar') !!} is one of the better-connected pockets, with the Ghaziabad Namo Bharat station in Patel Nagar 2nd linking to the Red Line at Shaheed Sthal; Meerut Mod is the traffic point to plan around.</li>
  </ul>
  <p>
    Every locality, including <a href="{{ url('/city/ghaziabad/zone/raj-nagar-extension-nh-9-corridor') }}">Raj Nagar
    Extension and NH-9</a>, is on the <a href="{{ url('/city/ghaziabad') }}">Ghaziabad home tutors page</a>, and our
    <a href="{{ url('/blog/raj-nagar-and-old-ghaziabad-tuition-guide') }}">Raj Nagar and old Ghaziabad guide</a> covers
    the older city in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-mode">Which commerce subjects suit home lessons, and which work online?</h2>
  <p>
    Accountancy suits home lessons: the tutor watches every journal entry and ledger balance as it is written and
    catches a wrong side or a missed adjustment immediately. Theory subjects work well online, as long as the student
    writes full answers and sends clear photos for marking. Many families keep accountancy at home and move economics
    or business studies online, especially in Class 12 when coaching and school tests crowd the week. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-demo">What to check in a commerce demo</h2>
  <ol>
    <li><strong>Board fluency.</strong> Ask which board's commerce papers the tutor has taught recently, and for the UP Board, in which medium.</li>
    <li><strong>A numerical and a theory answer.</strong> One short partnership adjustment and one business studies answer show both halves of the job.</li>
    <li><strong>Marking.</strong> Does the tutor mark theory answers point by point, the way board examiners do?</li>
    <li><strong>The plan.</strong> Ask how they would use the unit weights and the school's unit tests to decide what to revise.</li>
    <li><strong>The route.</strong> Which station or road, and what happens on a jammed evening.</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cogz-fees">Commerce tuition fees in Ghaziabad, and the first step</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, shown on the profile before you book. The <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our post on <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">home tuition fees in
    Ghaziabad</a> explain the factors.
  </p>
  <p>
    Send the board, class, subjects, the medium for UP Board, any entrance goal, your colony, khand or sector, and free
    times. We suggest two or three matched tutors; the first class is a <a href="{{ url('/demo-class') }}">free
    demo</a>, and switching tutor later is free. All tutors who join complete an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile appears, and
    <a href="{{ url('/tutors') }}">tutor profiles</a> can be browsed at any time. For whole-board help, see our
    <a href="{{ url('/cbse-home-tutor-ghaziabad') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-ghaziabad') }}">ICSE and ISC</a> pages for Ghaziabad.
  </p>
  </section>

  </div>
</article>
