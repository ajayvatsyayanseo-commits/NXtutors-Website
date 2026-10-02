{{--
  Long-form guide for the "commerce home tutor Gurgaon" page: the Class 11-12
  commerce stream (accountancy, business studies, economics, maths or applied
  maths, English) for CBSE, ISC, the Haryana Board (BSEH) and Cambridge/IB.
  Byline: NXTutors Academic Team. No schools, colleges, coaching institutes,
  societies or people are named. No claim about local commerce-tutor supply
  beyond the Old Gurugram zone note (Accountancy tutors easier to find there)
  and the hub line that Accountancy and Economics are the commerce subjects
  families most often ask about in Class 11. Structure modelled on
  commerce-home-tutor-mumbai / -delhi with new sentences.

  Official sources:
  - CBSE Accountancy (055) 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf):
    80 theory + 20 project; XII partnership 36, companies 24, then analysis of
    financial statements and cash flow OR Computerised Accounting (20).
  - CBSE Business Studies (054) and Economics (030) 2026-27, cbseacademic.nic.in:
    80 + 20; Economics XI statistics 40 + microeconomics 40, XII macroeconomics
    40 + Indian Economic Development 40; project 20.
  - CBSE Senior Secondary Curriculum 2026-27: Mathematics (041) or Applied
    Mathematics (241), any one.
  - CISCE ISC Accounts (858), Commerce (857), Economics (856), cisce.org: 80
    theory + two 10-mark projects; XII Accounts Section A 60, then Section B or
    C; ISC Economics Part I 20 compulsory, Part II five of eight questions.
  - Cambridge IGCSE Accounting 0452 and AS & A Level Accounting 9706,
    cambridgeinternational.org; IBO DP: Economics at SL and HL, no accounting
    course (ibo.org).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in: domain subjects
    include Accountancy / Book Keeping (301), Economics / Business Economics
    (309) and Business Studies; 50 compulsory questions in 60 minutes on the
    NCERT Class XII syllabus. No dates used.
  - ICAI CA Foundation (new scheme), icai.org/post/foundation-nset: Paper 1
    Accounting, Paper 2 Business Laws, Paper 3 Quantitative Aptitude, Paper 4
    Business Economics.
  - Board of School Education Haryana, read 2 Oct 2026:
    https://bseh.org.in/syllabusclass12thforsession2026 (Class 12 subject list
    incl. Accountancy, Business Study, Economics, Entrepreneurship) and the
    2026-27 syllabus PDFs linked there: Accountancy (903) annual 60, practical
    20 (practical file 4, written test on the project 12, viva 4), internal 20;
    Part A partnership 29 + company accounts 16, Part B analysis of financial
    statements 15 (statements 4, ratios and cash flow 11) OR computerised
    accounting 15. Business Studies (900) 80 + 20, chapter groups 16/14/20/12/18.
    Economics (576) 80 + 20, Part A microeconomics 40, Part B macroeconomics 40.
    https://bseh.org.in/class-12th-model-paper-stepwise-marking-scheme-202627 :
    Accountancy model paper 60 marks, 3 hours, 30 questions.
  Local detail only from database/seo-content/zones/gurugram.json,
  database/seo-content/areas/gurugram-about.json (Sector 10A) and the Gurugram
  hub view. Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/commerce-home-tutor-gurgaon.php.
  Area links render only when that Gurugram area page exists and is active.
--}}
@php
  $cmgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cmgA = function (string $slug, string $label) use ($cmgSlugs) {
      return in_array($slug, $cmgSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cmgGuideTitle">
  <h2 id="cmgGuideTitle">Commerce tuition in Gurugram: accounts, economics and business studies across four boards</h2>

  <p class="nx-guide__lede">
    Commerce in Gurugram is not a single syllabus. One Class 11 student may be on CBSE or ISC, another on the
    Haryana Board, and a third, at an international school, on Cambridge A Level or the IB, where accounting is
    either a separate course or absent. The subjects share names but not papers. This
    page sets out what each board asks of a commerce student, how the subjects differ in the help they need, how to
    spread two years of work, where CUET and CA Foundation fit, and how tutors reach each part of the city. For a
    single subject, our <a href="{{ url('/accountancy-home-tutor-gurgaon') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-gurgaon') }}">economics</a> pages for Gurgaon go further.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cmg-boards">Boards and papers</a> ·
    <a href="#cmg-hbse">Haryana Board commerce</a> ·
    <a href="#cmg-accounts">Accountancy</a> ·
    <a href="#cmg-econ">Economics and BST</a> ·
    <a href="#cmg-maths">Maths</a> ·
    <a href="#cmg-who">Which tutor</a> ·
    <a href="#cmg-map">Term-by-term map</a> ·
    <a href="#cmg-lesson">Inside a lesson</a> ·
    <a href="#cmg-next">CUET and CA</a> ·
    <a href="#cmg-zones">Zones</a> ·
    <a href="#cmg-demo">The demo</a> ·
    <a href="#cmg-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cmg-boards">Which papers does a Gurugram commerce student sit?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 commerce on the boards taught in Gurugram</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Commerce subjects</th><th scope="col">How marks are split</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Accountancy (055), Business Studies (054), Economics (030), with Mathematics (041) or Applied Mathematics (241), and English</td><td>80 theory and 20 project or internal marks per subject</td></tr>
      <tr><td>ISC (CISCE)</td><td>Accounts (858), Commerce (857), Economics (856), with compulsory English</td><td>80 theory and two 10-mark projects</td></tr>
      <tr><td>Haryana Board (BSEH)</td><td>Accountancy (903), Business Studies (900), Economics (576), with Entrepreneurship also on the list</td><td>Accountancy 60 theory, 20 practical, 20 internal; the others 80 and 20</td></tr>
      <tr><td>Cambridge and IB</td><td>IGCSE Accounting (0452), AS &amp; A Level Accounting (9706) and Economics; IB Economics at SL or HL, with no accounting course</td><td>Set and marked by Cambridge or the IB</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Before booking anyone, write down the board, the subject codes on your child's timetable and the maths option.
    That one line decides whether a tutor's experience fits. Board-specific pages:
    <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and
    ISC</a>, <a href="{{ url('/haryana-board-tutor-gurgaon') }}">Haryana Board</a>,
    <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE</a> and <a href="{{ url('/ib-tutor-gurgaon') }}">IB</a> tutors in
    Gurgaon.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-hbse">What is different about Haryana Board commerce?</h2>
  <p>
    The board's 2026-27 syllabus documents give accountancy a shape of its own. The written paper is worth 60
    marks, not 80. A further 20 come from a practical exam: a practical file, a written test built on the student's
    project, and a viva. The last 20 are internal, drawn from school tests, classroom participation, a project and
    attendance. Within the written paper, Part A on partnership firms (29 marks) and company accounts (16) is
    compulsory, and Part B is a choice between financial-statement analysis and computerised accounting, 15 marks
    either way. The board's model paper puts all of this into 30 questions over three hours.
  </p>
  <p>
    Economics (576) on the Haryana Board puts microeconomics and macroeconomics, 40 marks each, into the Class 12
    paper. Business Studies (900) is an 80-mark paper whose largest block, 20 marks, covers staffing, directing and
    controlling, with marketing and consumer protection close behind at 18. A tutor coming from CBSE needs a few
    sessions with these syllabi and the board's stepwise marking schemes before the teaching fits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-accounts">Accountancy: the subject that compounds</h2>
  <p>
    The Gurugram hub page names accountancy and economics as the commerce subjects families most often ask about in
    Class 11, and accountancy usually comes first. Its chapters stack: a shaky grasp of journal entries in April
    becomes a confused ledger by July and a lost partnership question a year later. On CBSE, the Class 12 paper
    gives 36 marks to partnership firms and 24 to company accounts, and the last 20 go either to financial-statement
    analysis with cash flow or to computerised accounting. ISC's Class 12 paper has a 60-mark Section A, followed by
    Section B or Section C.
  </p>
  <p>
    What a tutor should build: formats the student can draw without looking, adjustments handled in written working
    notes, and the habit of checking that a balance sheet actually balances before moving on. The project belongs to
    the student; a tutor guides the topic and checks the figures. The national
    <a href="{{ url('/accountancy-home-tutor') }}">accountancy tutor</a> guide covers each board chapter by chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-econ">Economics and business studies need different help</h2>
  <p>
    CBSE economics puts statistics and microeconomics in Class 11, 40 marks each, and macroeconomics with Indian
    Economic Development in Class 12, again 40 each, plus a 20-mark project. ISC economics has a compulsory 20-mark
    first part and then five questions chosen from eight. Across boards, the marks come from three skills: drawing
    and labelling a diagram correctly, working a numerical such as national income or elasticity, and writing a
    reasoned answer within a word limit.
  </p>
  <p>
    Business studies tests vocabulary and application rather than arithmetic. Students tend to lose marks by
    describing a principle in loose everyday words or by missing which function a case study is pointing at. Many
    manage it with a few sessions before each exam rather than weekly lessons. The national
    <a href="{{ url('/economics-home-tutor') }}">economics tutor</a> page covers the subject on every board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-maths">Should a commerce student keep maths?</h2>
  <p>
    On CBSE the choice is Mathematics (041) or Applied Mathematics (241), one or the other, made in Class 11 and
    carried to the Class 12 exam. The syllabuses differ in content and in the style of question, so a tutor who
    teaches one is not automatically right for the other. Look at what the university courses your child is
    considering ask for before deciding. On the Haryana Board and ISC, check with the school which maths paper, if
    any, sits in the commerce timetable. Our <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths home tutors in
    Gurgaon</a> page covers both CBSE options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-who">Which kind of commerce tutor suits your child?</h2>
  <ul>
    <li><strong>Behind a little in everything:</strong> one tutor for accounts, economics and business studies keeps the week simple; check the economics diagrams at the demo, not only the accounts.</li>
    <li><strong>Accounts is the only real problem:</strong> an accountancy specialist once or twice a week, with a self-study timetable for the theory papers.</li>
    <li><strong>Aiming high in both numerical subjects:</strong> two tutors, one for accounts and one for economics with maths, booked so the sessions do not clash with school tests.</li>
    <li><strong>On a less common paper:</strong> Cambridge 9706, IB Economics HL or the Haryana Board practical, where the closest specialist may be online.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-map">A term-by-term map for Classes 11 and 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>What the commerce tutor works on, term by term</caption>
    <thead>
      <tr><th scope="col">Term</th><th scope="col">Accounts</th><th scope="col">Economics and business studies</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11, first half</td><td>Journal, ledger and trial balance until they are automatic</td><td>Basic statistics or micro concepts with diagrams; management terms</td></tr>
      <tr><td>Class 11, second half</td><td>Final accounts and adjustments; start the project early</td><td>Numericals and the first long answers</td></tr>
      <tr><td>Class 12, first half</td><td>Partnership firms, then share and debenture issues</td><td>Macroeconomics; projects finished before the half-yearly</td></tr>
      <tr><td>Class 12, second half</td><td>The Part B option, full papers against the marking scheme, practical and viva practice on the Haryana Board</td><td>Timed answers, case studies, revision of definitions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the year around this stream, see <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 home tutors in
    Gurgaon</a> and <a href="{{ url('/class-12-home-tutor-gurgaon') }}">Class 12 home tutors in Gurgaon</a>, and our
    guide to <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">choosing a Class 11 stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-lesson">Inside a ninety-minute commerce lesson</h2>
  <p>
    A lesson that gets results is usually built in four parts. It opens with a short drill of five or six entries or
    adjustments done from memory, so weak spots show up at once. The longest block goes on one hard accounts topic,
    such as a change in profit-sharing ratio, with the student writing every format by hand while the tutor watches.
    Then comes a single economics diagram or business studies case, explained aloud and then written. The lesson
    ends with the tutor marking one answer the way the board's scheme would, and setting a small task to be checked
    at the start of the next visit. Repeated through a term, that pattern builds accuracy and speed together.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-next">CUET, CA Foundation and what comes after</h2>
  <p>
    The NTA's CUET (UG) bulletin lists Accountancy / Book Keeping (301), Economics / Business Economics (309) and
    Business Studies among its domain subjects. Each domain test has 50 compulsory questions in 60 minutes on the
    NCERT Class 12 syllabus, so solid board preparation covers most of it, and a tutor adds timed multiple-choice
    practice towards the end. Our <a href="{{ url('/blog/cuet-preparation-2025-complete-ug-subject-strategies-syllabus-tips-pyqs-and-checklist') }}">CUET
    preparation guide</a> explains the format.
  </p>
  <p>
    ICAI's CA Foundation has four papers under its new scheme: Accounting, Business Laws, Quantitative Aptitude and
    Business Economics. Class 12 accounts and economics give a head start on two of them. Eligibility and dates are
    on icai.org; a school tutor helps with the overlap, but CA preparation is a separate track.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-zones">How commerce tutors reach you across Gurugram</h2>
  <p>
    Our zone notes say accountancy tutors are easier to find in Old Gurugram than in the newer sectors, which is
    worth knowing if you live further out. Six sectors, one per zone:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a commerce tutor to six Gurugram sectors</caption>
    <thead>
      <tr><th scope="col">Sector and zone</th><th scope="col">What shapes the trip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $cmgA('sector-10a', 'Sector 10A') !!}, <a href="{{ url('/city/gurugram/zone/old-gurugram') }}">Old Gurugram</a></td><td>Close to NH-48 and Hero Honda Chowk; a class timed just before or after the evening peak is kept more reliably, and tutors from Sectors 4, 7, 9 and 12 come on local roads</td></tr>
      <tr><td>{!! $cmgA('sector-30-', 'Sector 30') !!}, <a href="{{ url('/city/gurugram/zone/central-gurugram') }}">Central Gurugram</a></td><td>Reachable from the DLF side, Sohna Road and Golf Course Extension Road, which widens the pool for a separate accounts and economics tutor</td></tr>
      <tr><td>{!! $cmgA('sector-63a', 'Sector 63A') !!}, <a href="{{ url('/city/gurugram/zone/golf-course-extension-road') }}">Golf Course Extension Road</a></td><td>Gated societies with visitor apps; some stop visitor entry after a set evening hour, which fixes the latest slot; our office is in Sector 66 on this road</td></tr>
      <tr><td>{!! $cmgA('sector-78-', 'Sector 78') !!}, <a href="{{ url('/city/gurugram/zone/southern-peripheral-road') }}">Southern Peripheral Road</a></td><td>Fewer tutors live inside the belt; many Class 11–12 families use a weekly home session plus online classes</td></tr>
      <tr><td>{!! $cmgA('sector-104-', 'Sector 104') !!}, <a href="{{ url('/city/gurugram/zone/dwarka-expressway') }}">Dwarka Expressway</a></td><td>High-rise societies along the expressway; tutors from Palam Vihar or the expressway sectors reach it most easily</td></tr>
      <tr><td>{!! $cmgA('sector-82a-', 'Sector 82A') !!}, <a href="{{ url('/city/gurugram/zone/new-gurugram') }}">New Gurugram</a></td><td>Longer drives between societies; keep one fixed slot and consider weekend mornings</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/city/gurugram') }}">home tutors in Gurgaon</a> page covers every zone, and our
    <a href="{{ url('/blog/gurgaon-golf-course-extension-spr-tuition-guide') }}">Golf Course Extension and SPR guide</a>
    and <a href="{{ url('/blog/study-routine-long-commute-gurgaon') }}">study routine for long commutes</a> help with
    the timetable.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-mode">Home lessons, online lessons, or both?</h2>
  <p>
    Accounts benefits from a tutor in the room who can see a ledger being ruled and a working note being skipped.
    Economics and business studies move online with little loss, since diagrams and answers can be shared on
    screen. Online also brings in specialists for ISC Accounts or Cambridge 9706 who may live across the city. A
    common Gurugram rhythm for Class 12 is one home session for accounts and one online session for the theory
    subjects. Our <a href="{{ url('/online-tutor-gurgaon') }}">online tutors in Gurgaon</a> page explains how that works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-demo">What to ask in a commerce demo</h2>
  <p>
    The first class with each shortlisted tutor is free. Use it to ask the tutor to:
  </p>
  <ul>
    <li>describe how your board splits the Class 12 accountancy marks, including the option your school offers;</li>
    <li>correct one partnership or adjustment question your child got wrong, line by line;</li>
    <li>draw one economics diagram and say where the marks go;</li>
    <li>sketch a plan to the board exam with project and practical deadlines marked.</li>
  </ul>
  <p>
    If the fit is wrong, the next tutor on your shortlist takes a demo, and switching later costs nothing. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmg-fees">What a commerce tutor in Gurgaon charges, and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    How many subjects, which board, the tutor's experience and the drive at your hour all shape the quote, and you
    see each fee before the demo. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">home tuition fees in Gurgaon</a> have more.
  </p>
  <p>
    Send the board, subjects, maths option, your sector and the hours that work; we shortlist two or three tutors
    with their fees. <a href="{{ url('/demo-class') }}">Book a free demo</a> or browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>. Commerce teachers can find students through
    <a href="{{ url('/tuition-jobs/gurugram') }}">tuition jobs in Gurugram</a>.
  </p>
  </section>

  </div>
</article>
