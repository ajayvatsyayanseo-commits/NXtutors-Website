{{--
  "Accountancy home tutor Kolkata" subject page. Byline: NXTutors Academic Team.
  No school, society, person, institute or company is named.

  Board facts reuse the checked statements on the national accountancy-home-tutor
  page, which cites (read 1 Oct 2026):
  - CBSE Accountancy (055) XI-XII 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf
    (XII: partnership 36, companies 24, analysis 12, cash flow 8 or Computerised
    Accounting; project file 12 + viva 8; design 40/30/30).
  - CBSE Business Studies (054) 2026-27, cbseacademic.nic.in.
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org/wp-content/uploads/2025/04/
    (80 theory: Part I 20 compulsory, Part II five of eight at 12; two 10-mark projects;
    XII Section A 60, then Section B or C, two of three at 10).
  - Cambridge IGCSE Accounting 0452 (2027-2029) and AS & A Level 9706 (2026-2028),
    cambridgeinternational.org.
  - IBO DP individuals and societies subject list (no separate accounting course).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (301 Accountancy / Book
    Keeping; 50 compulsory questions, 60 minutes; NCERT Class XII syllabus).
  WBCHSE Higher Secondary commerce is described generally only, as on the Kolkata hub.
  Local facts only from database/seo-content/areas/kolkata-research.json and
  kolkata-zone-guides.json. No claim of local commerce-tutor supply or demand.
  Area links render only when that Kolkata area page exists and is active.
--}}
@php
  $kacSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kacA = function (string $slug, string $label) use ($kacSlugs) {
      return in_array($slug, $kacSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kac-guide" aria-labelledby="kacGuideTitle">
  <h2 id="kacGuideTitle">Accountancy home tutor in Kolkata: start from the paper your child will write</h2>

  <p class="nx-guide__lede">
    A Class 11 commerce student in Kolkata could be writing CBSE Accountancy, ISC Accounts, a Higher Secondary paper
    set by the West Bengal council, or Cambridge Accounting. The ledger rules are the same everywhere; the papers,
    projects and options are not. Tell NXTutors the exact course, your neighbourhood and the hours that suit you, and
    we shortlist two or three tutors who can come to your home or teach online. Each fee is on the shortlist before you
    choose, and the first class with the tutor you pick is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kac-papers">The papers</a> ·
    <a href="#kac-isc">ISC Accounts</a> ·
    <a href="#kac-cbse">CBSE Class 12</a> ·
    <a href="#kac-hs">Higher Secondary</a> ·
    <a href="#kac-where">Six neighbourhoods</a> ·
    <a href="#kac-mode">Home or online</a> ·
    <a href="#kac-cuet">CUET and stream choice</a> ·
    <a href="#kac-demo">The demo</a> ·
    <a href="#kac-fees">Fees and your request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kac-papers">Which accountancy paper sits on your child's desk?</h2>
  <p>
    Most commerce families in the city meet one of the courses below. The column on the right is drawn from each
    board's own syllabus document; for the state council we stay general and point you to its notices.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 accountancy and commerce courses a Kolkata student may be taking</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Years</th><th scope="col">Board</th><th scope="col">How it is examined</th></tr>
    </thead>
    <tbody>
      <tr><td>Accountancy (055)</td><td>Classes 11 and 12</td><td>CBSE</td><td>Three-hour theory paper of 80 marks plus 20 for project work each year; in Class 12 Part B is either financial statement analysis or Computerised Accounting</td></tr>
      <tr><td>Business Studies (054)</td><td>Classes 11 and 12</td><td>CBSE</td><td>A separate written paper of 80 marks with a 20-mark project, usually taken alongside Accountancy</td></tr>
      <tr><td>Accounts (858)</td><td>Classes 11 and 12</td><td>CISCE (ISC)</td><td>20 compulsory short-answer marks, then five 12-mark questions from eight; two projects of 10 marks each</td></tr>
      <tr><td>Commerce (857)</td><td>Classes 11 and 12</td><td>CISCE (ISC)</td><td>Descriptive rather than numerical, on the same Part I and Part II pattern as Accounts</td></tr>
      <tr><td>Higher Secondary, commerce stream</td><td>Classes 11 and 12</td><td>WBCHSE</td><td>Subjects, books and question pattern set by the council; follow its latest notices</td></tr>
      <tr><td>Accounting 0452; AS &amp; A Level Accounting 9706</td><td>Grades 9–10; 11–12</td><td>Cambridge</td><td>IGCSE: a multiple-choice paper (30%) and a structured paper (70%). A Level adds a separate cost and management accounting paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The IB Diploma has no accounting course of its own. Its neighbouring subjects are Business Management and
    Economics, so an IB student who asks for "accounts help" usually needs a tutor for a particular unit of Business
    Management. Name that unit in your request.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-isc">ISC Accounts: build the year around the 12-mark question</h2>
  <p>
    In ISC Accounts, 60 of the 80 theory marks come from long questions worth 12 each. A three-hour paper for 80 marks
    allows a little over two minutes per mark, so a 12-mark question needs to be finished in roughly 25 minutes,
    including working notes. Students who know the chapter but have never written a full question against the clock
    run out of time in the last two answers.
  </p>
  <p>
    Class 11 covers the accounting equation, journal, ledger and trial balance, bank reconciliation, depreciation,
    rectification of errors, final accounts, incomplete records and non-trading organisations, with an introduction to
    computers in accounting. In Class 12 the compulsory Section A (60 marks) is partnership and joint stock company
    accounts. The last 20 marks come from a choice the school makes: Section B on financial statement analysis and the
    cash flow statement, or Section C on spreadsheets and database management. A tutor who has only taught ratio
    analysis may never have set up a spreadsheet question, so tell us which section your child's school prepares for.
  </p>
  <p>
    A practical monthly rhythm for an ISC Class 12 student with a home tutor:
  </p>
  <ol>
    <li><strong>First week:</strong> one partnership topic taught fresh, such as admission of a partner, with two guided questions.</li>
    <li><strong>Second week:</strong> a full 12-mark question written against 25 minutes, then marked line by line.</li>
    <li><strong>Third week:</strong> share capital or debentures, with the student building the journal entries before any ledger.</li>
    <li><strong>Fourth week:</strong> a short Part I drill across the whole syllabus, and one Section B or Section C question.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-cbse">CBSE Accountancy in Class 12: where the 80 marks sit</h2>
  <p>
    The 2026-27 CBSE curriculum gives partnership firms 36 marks and company accounts 24, which together make up Part
    A. Part B is worth 20: either analysis of financial statements (12) with the cash flow statement (8), or
    Computerised Accounting with practical work. The project in Class 12 is a project file worth 12 and a viva worth 8.
    About 30% of the theory paper is meant to test analysing and evaluating rather than recall, so a student who has
    only memorised solved examples meets a ceiling.
  </p>
  <p>
    For Kolkata students on CBSE, the common trouble spots are the order of working in admission and retirement
    questions, forfeiture and reissue of shares, and classifying items in the cash flow statement. A tutor's job is to
    fix the order of working (ratios, goodwill, revaluation, reserves, then capital accounts) so that one slip does not
    wreck the whole answer. Business Studies runs beside it; if both subjects need help, say so, but a specialist for
    the weaker of the two is usually the better use of the budget. The
    <a href="{{ url('/cbse-home-tutor-kolkata') }}">CBSE home tutor in Kolkata</a> page covers the other subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-hs">Higher Secondary commerce on the West Bengal council</h2>
  <p>
    The West Bengal Council of Higher Secondary Education runs the Higher Secondary course for Classes 11 and 12, and it
    sets the commerce stream's subjects, prescribed books and question pattern itself. We keep our notes general here
    because the council publishes the details, and families should rely on its own syllabus and notices. What we ask a
    tutor for these students is simple: bring the council's prescribed book and its recent question papers to the
    first class, and plan the year from them rather than from a CBSE guidebook.
  </p>
  <p>
    Medium matters too. State-board schools in the city teach in Bengali, English and other languages, and a student
    who writes the paper in Bengali needs a tutor who can teach the terms in that language as well. Say in your request
    which language the answers are written in. Families comparing boards before Class 11 can read our
    <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE and ISC home tutor in Kolkata</a> page alongside this one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-where">How does a tutor reach six Kolkata neighbourhoods?</h2>
  <p>
    Metro lines, suburban stations and a few slow roads decide who can keep a weekly evening slot at your door. These
    six neighbourhoods come from six different zones; the <a href="{{ url('/city/kolkata') }}">Kolkata home tuition
    page</a> lists the rest.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a visiting accountancy tutor to six Kolkata neighbourhoods</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Usual way in</th><th scope="col">Worth telling the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kacA('jodhpur-park', 'Jodhpur Park') !!}</td><td>Rabindra Sarobar on the Blue Line, or Dhakuria on the Sealdah South lines</td><td>The plot and road; the colony was laid out by a housing co-operative in 1947</td></tr>
      <tr><td>{!! $kacA('naktala', 'Naktala') !!}</td><td>Gitanjali station on the Blue Line</td><td>The lane off the main road, which slows in the evening peak</td></tr>
      <tr><td>{!! $kacA('new-alipore', 'New Alipore') !!}</td><td>New Alipore or Majerhat suburban stations</td><td>The block letter as well as the house number</td></tr>
      <tr><td>{!! $kacA('kasba', 'Kasba') !!}</td><td>The Orange Line along the bypass, or Ballygunge Junction by train</td><td>A para name and landmark; newer complexes register visitors at the gate</td></tr>
      <tr><td>{!! $kacA('salt-lake-sector-3', 'Salt Lake Sector III') !!}</td><td>Green Line stations through the township</td><td>Block letter, house number and nearest avenue</td></tr>
      <tr><td>{!! $kacA('salkia', 'Salkia') !!}</td><td>Liluah or Tikiapara stations on the Howrah side</td><td>An exact lane landmark near the old market</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Zone guides go further on routes and quiet hours, including
    <a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and the southern bypass</a>,
    <a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a> and
    <a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>. Our
    <a href="{{ url('/blog/south-kolkata-tuition-guide') }}">South Kolkata tuition guide</a> compares the southern
    neighbourhoods in one place.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-mode">Home visits or online accountancy lessons?</h2>
  <p>
    Accountancy is written in columns on paper, and most of the teaching is a tutor reading the student's ledger as it
    is written. That makes a home tutor natural for Class 11, when debit and credit are still settling. Online lessons
    work once the student can send photos of homework before the session and keep the notebook in view of a camera.
    For CBSE Computerised Accounting or ISC Section C, online is often the better format, because tutor and student can
    work in the same spreadsheet.
  </p>
  <p>
    We cannot promise a commerce specialist within a short ride of every Kolkata home. You can request one wherever you
    live; if nobody suitable can reach you at your hour, online widens the choice to tutors elsewhere in the city or in
    other cities. In Puja weeks, when lanes in many neighbourhoods fill with visitors, moving a session online keeps the
    routine. Our article on <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> weighs
    the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-cuet">CUET, and choosing commerce in the first place</h2>
  <p>
    The NTA's CUET (UG) 2026 bulletin lists Accountancy / Book Keeping (code 301) as a domain subject: 50 compulsory
    questions in 60 minutes, on NCERT's Class 12 syllabus. Board preparation comes first; speed on objective questions
    can be added in the final months. Check the bulletin for the year your child applies.
  </p>
  <p>
    If your child is still deciding on a stream, our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a Class 11 stream</a> and our
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutoring page</a> set out what each path asks for.
    Both were written with Gurugram families in mind, but the stream advice applies in Kolkata too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-demo">What to check in the free demo</h2>
  <p>Keep a recent class test ready, and watch for these:</p>
  <ol>
    <li>The tutor asks for the board and the Class 12 option (CBSE Part B choice, or ISC Section B or C) before teaching.</li>
    <li>Your child holds the pen for most of the hour and writes the working notes.</li>
    <li>Mistakes are found by a question from the tutor, not simply crossed out.</li>
    <li>The tutor can explain why an entry is made, not only where it goes.</li>
    <li>For a Higher Secondary student, the tutor works from the council's own book and past papers.</li>
    <li>You leave with a two-week practice plan and a date to check it.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange a demo with the next tutor on the shortlist. Switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kac-fees">Fees, and what to put in your request</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, and you see it before the demo. The
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">Kolkata home tuition fees</a> article explains what moves a
    rate.
  </p>
  <p>
    Send the class, the board and option, the chapters that are hurting, the language of the answers, your
    neighbourhood with a landmark, preferred days and a budget. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. Commerce students often
    want help in economics too: see our <a href="{{ url('/economics-home-tutor-kolkata') }}">economics tutor in
    Kolkata</a> page. The national <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a> guide
    goes chapter by chapter, and our <a href="{{ url('/english-home-tutor-kolkata') }}">English</a> and
    <a href="{{ url('/maths-home-tutor-kolkata') }}">maths</a> pages cover other subjects. Teachers in the city can see
    open requests on <a href="{{ url('/tuition-jobs/kolkata') }}">Kolkata tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
