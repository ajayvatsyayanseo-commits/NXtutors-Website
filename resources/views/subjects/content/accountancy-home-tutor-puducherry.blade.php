{{--
  "Accountancy home tutor Puducherry" subject page (capitals wave, phase 2,
  subjects-b, 3 Oct 2026). Byline: NXTutors Academic Team. No school, college,
  university, society, person, institute, company or place of worship is named.

  Board facts reuse the checked statements on the national accountancy-home-tutor
  page, which cites (read 1 Oct 2026):
  - CBSE Accountancy (055) XI-XII 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf
    (XI: theoretical framework 12, accounting process 44, financial statements 24,
    project 20; XII: partnership 36, companies 24, Part B 20 = analysis or
    Computerised Accounting; project file 12 + viva 8; CAS compulsory in XI; GST
    basics in XI).
  - CBSE Business Studies (054) 2026-27, cbseacademic.nic.in.
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org/wp-content/uploads/2025/04/.
  - Cambridge IGCSE Accounting 0452 and AS & A Level 9706, cambridgeinternational.org.
  - IBO DP subject list (no separate accounting course).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (301 Accountancy /
    Book Keeping; 50 compulsory questions in 60 minutes; NCERT Class XII).
  Puducherry syllabus situation only from the research file's board_facts
  (schooledn.py.gov.in/CBSE/cbsetrg.html; schooledn.py.gov.in/Exams/sslcResult.html;
  the 2026 state-board +2 result analysis PDF on schooledn.py.gov.in). The state
  board followed by some private schools is not named and its commerce papers are
  not described. Local facts only from puducherry-research.json and the hub. No
  claim of local commerce-tutor supply or demand.
--}}
@php
  $pyacSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pyacA = function (string $slug, string $label) use ($pyacSlugs) {
      return in_array($slug, $pyacSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pyacGuideTitle">
  <h2 id="pyacGuideTitle">Accountancy home tutor in Puducherry: getting the ledger right from the first week</h2>

  <p class="nx-guide__lede">
    Accountancy is the one Class 11 subject almost nobody has studied before, and it punishes a shaky start: every
    chapter in Class 12 assumes the journal, ledger and trial balance are automatic. In Puducherry there is a second
    reason to brief a tutor carefully. Government schools have moved to CBSE, so many commerce students are on the
    CBSE Accountancy course for the first time, while some private schools still teach the state-board +2 syllabus.
    This page sets out what each course asks, how a tutor should open Class 11, where the Class 12 marks lie, how to
    use Tamil and English together for a subject full of technical terms, how tutors reach six localities, and what to
    check in the free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pyac-courses">Which course?</a> ·
    <a href="#pyac-state">State-board +2</a> ·
    <a href="#pyac-open">Opening Class 11</a> ·
    <a href="#pyac-weight">Class 12 weight</a> ·
    <a href="#pyac-words">Terms in two languages</a> ·
    <a href="#pyac-project">Projects and viva</a> ·
    <a href="#pyac-visit">Six localities</a> ·
    <a href="#pyac-mode">Home or online</a> ·
    <a href="#pyac-demo">The demo</a> ·
    <a href="#pyac-fees">Fees and beyond</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pyac-courses">Which accountancy course is your child taking?</h2>
  <p>
    Tell the tutor the course before anything else; the chapters overlap, but the papers and options do not.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 accountancy courses a Puducherry student may be on</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">How it is examined</th><th scope="col">Decision to check</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Accountancy (055)</td><td>An 80-mark, three-hour theory paper and 20 marks of project work in each class; NCERT books</td><td>Class 12 Part B: analysis of financial statements or Computerised Accounting</td></tr>
      <tr><td>CBSE Business Studies (054)</td><td>A separate 80-mark paper and 20-mark project</td><td>Whether it needs tutoring too</td></tr>
      <tr><td>ISC Accounts (858) with Commerce (857)</td><td>80 theory marks, beginning with 20 marks of short answers and then five long questions chosen from eight; two projects of 10 marks</td><td>Class 12 Section B (analysis and cash flow) or Section C (spreadsheets and databases)</td></tr>
      <tr><td>State-board +2 commerce, in some private schools</td><td>Set by that board from its own syllabus and books</td><td>The current syllabus and question pattern, from the school</td></tr>
      <tr><td>Cambridge IGCSE 0452 / A Level 9706</td><td>IGCSE: a multiple-choice paper and a structured paper. A Level: four papers, one on cost and management accounting</td><td>Whether the A Level is staged or taken in one series</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    IB schools teach no separate accounting course; the closest subjects are Business Management and Economics, so an
    IB family should name the unit that needs help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-state">Commerce on the state-board +2 syllabus</h2>
  <p>
    Puducherry has no board of its own. Since the Directorate of School Education reports Class 12 results as CBSE 12
    from 2025, most government-school commerce students are now on the CBSE course. From 2026 the Directorate also
    publishes a separate state-board +2 result analysis for private schools that still follow that syllabus. We do not
    restate that board's accountancy paper here, because it is the board's to publish and revise; the school passes on
    its notices.
  </p>
  <p>
    What a family can expect from a tutor is still clear. They should teach from the prescribed textbook, bring the
    board's past papers, and keep to the format your child will write. If your child is moving between the state
    syllabus and CBSE at Class 11, say so: the core of double entry is the same, but the textbook's order, the projects
    and the Class 12 options are not.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-open">How a tutor should open Class 11</h2>
  <p>
    Under the 2026-27 CBSE curriculum, the accounting process unit carries 44 of the Class 11 theory marks, more than
    the other two units together. That unit is the foundation for everything after it. A tutor should not move on from
    each step until the student can pass a simple test of it unaided:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11 building blocks and how to know each one is secure</caption>
    <thead>
      <tr><th scope="col">Step</th><th scope="col">Secure when the student can</th></tr>
    </thead>
    <tbody>
      <tr><td>The accounting equation</td><td>Show any transaction's effect on assets, liabilities and capital, and keep both sides equal</td></tr>
      <tr><td>Journal entries</td><td>Write the entry and narration from the equation, without a list of rules in front of them</td></tr>
      <tr><td>Ledger posting</td><td>Post a fortnight of entries and balance every account correctly</td></tr>
      <tr><td>Trial balance</td><td>Build one alone and track down a difference when it does not agree</td></tr>
      <tr><td>Cash book and bank reconciliation</td><td>Reconcile from both the firm's and the bank's side</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two CBSE details belong in the first term, not the last. Computerised Accounting is compulsory for commerce
    students in Class 11, and basic GST calculations enter the recording of transactions in that year. A tutor who
    skips either leaves gaps that school tests expose.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-weight">Class 12: where the marks are</h2>
  <p>
    On CBSE, partnership firms carry 36 of the 80 theory marks and company accounts 24; the remaining 20 are Part B,
    either analysis of financial statements or Computerised Accounting. On ISC, partnership and company accounts make
    up the compulsory Section A, worth 60. On both, partnership decides the year. Admission, retirement and death of a
    partner are long questions in which one wrong ratio spoils every account that follows, so the tutor should insist
    on a working note for each adjustment. Students who write them keep part marks when an answer goes wrong.
  </p>
  <p>
    Company accounts follow: issue of shares and debentures, forfeiture and reissue. On the analysis route, ratios and
    cash-flow classification decide the last 20 marks, and errors there are almost always a wrong figure in a formula
    or an item put under the wrong activity. A personal formula sheet and quick, spoken sorting of items into
    operating, investing and financing fix most of them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-words">Debit and credit in Tamil and English</h2>
  <p>
    The Puducherry hub notes that many children read their books in English and think through difficult ideas in
    Tamil. Accountancy is full of words that mean something different in daily speech, such as capital, drawings,
    goodwill and reserve, so a tutor who can explain each in Tamil and then insist on the exact English term in the
    written answer saves weeks of confusion. Say which mix suits your child when you send the request, and check at
    the demo that the written work stays in the paper's language.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-project">Projects and the viva</h2>
  <p>
    Project marks are easy to lose through delay rather than difficulty. The CBSE Class 12 project, an analysis of
    financial statements, is worth 20: 12 for the file and 8 for the viva. ISC sets two projects of 10 marks. In both
    cases the work must be the student's own. A tutor can help by agreeing a timeline with the school's dates, checking
    the calculations and holding a mock viva in which the student explains each ratio aloud. A tutor who offers to write
    the file is the wrong tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-visit">Getting a tutor to six Puducherry localities</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Travel and visit notes for an accountancy tutor</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How tutors usually come</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pyacA('lawspet', 'Lawspet') !!}</td><td>Two-wheeler on the colony roads, or along the East Coast Road</td><td>Whether it is a government housing campus with a gate check or a house on a colony street</td></tr>
      <tr><td>{!! $pyacA('karuvadikuppam', 'Karuvadikuppam') !!}</td><td>From the Oulgaret side or from Muthialpet along Karuvadikuppam Road</td><td>The street behind the main road, and a time clear of the evening build-up</td></tr>
      <tr><td>{!! $pyacA('kamaraj-nagar', 'Kamaraj Nagar') !!}</td><td>From Lawspet, Kalapet or the old town; Krishna Nagar is close to the East Coast Road</td><td>The building and floor if there is a visitor's book at the gate</td></tr>
      <tr><td>{!! $pyacA('saram', 'Saram') !!}</td><td>By bus via the main bus stand, or two-wheeler</td><td>The flat number for the guard; avoid the junction at office hours</td></tr>
      <tr><td>{!! $pyacA('thattanchavady', 'Thattanchavady') !!}</td><td>Two-wheeler or bus from the surrounding Oulgaret wards</td><td>A clear landmark and the floor for builder-floor homes</td></tr>
      <tr><td>{!! $pyacA('villianur', 'Villianur') !!}</td><td>Bus, two-wheeler or train to Villianur station in Sulthanpet</td><td>A landmark near the station; temple festival days crowd the centre</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Every locality is on the <a href="{{ url('/city/puducherry') }}">Puducherry home tutors</a> page, and the zone pages
    for <a href="{{ url('/city/puducherry/zone/lawspet-ecr') }}">Lawspet and ECR</a>,
    <a href="{{ url('/city/puducherry/zone/reddiarpalayam-villianur') }}">Reddiarpalayam and Villianur</a>,
    <a href="{{ url('/city/puducherry/zone/heritage-town') }}">Heritage Town</a> and
    <a href="{{ url('/city/puducherry/zone/mudaliarpet-ariyankuppam') }}">Mudaliarpet and Ariyankuppam</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-mode">Home or online for accountancy?</h2>
  <p>
    Accountancy lives on paper, in columns, so a tutor at the table who sees every line is the strongest choice,
    especially in Class 11. Online works when homework photos are sent before the lesson and the notebook stays in
    view of a second camera. For Computerised Accounting or ISC Section C, online can even be better, because tutor and
    student work in one shared spreadsheet.
  </p>
  <p>
    We do not promise a commerce specialist in every locality. Any family can request one; if no suitable tutor can
    reach you at your hour, online opens the choice to tutors across Puducherry and beyond. A common split is home
    sessions for partnership and final accounts and short online sessions for theory and doubts. Our
    <a href="{{ url('/online-tutor-puducherry') }}">online tutors for Puducherry</a> page and the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online comparison</a> explain the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-demo">What to check in the free demo</h2>
  <ul>
    <li>Does the tutor confirm the board, the Class 12 option and the language of written answers first?</li>
    <li>Does your child do most of the writing, with working notes, while the tutor watches?</li>
    <li>When an entry is wrong, does the tutor trace it to a misread transaction rather than just correct it?</li>
    <li>Can they explain a term in Tamil if needed and still demand the exact English word on paper?</li>
    <li>Does the lesson end with set practice and a date to check it?</li>
  </ul>
  <p>
    If the answers disappoint, we arrange a demo with the next tutor on your shortlist; switching later costs nothing.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pyac-fees">Fees, CUET and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets a personal fee, visible before the demo. Our
    <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">home tuition fees in Puducherry</a> post and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain what to ask.
  </p>
  <p>
    For students aiming at central universities, the NTA's CUET (UG) 2026 bulletin lists Accountancy / Book Keeping
    (code 301) as a domain subject: 50 compulsory questions in 60 minutes on NCERT's Class 12 syllabus. Check the bulletin
    for your year. The national <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a> guide has a
    chapter-by-chapter table, and the <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">stream choice guide</a>
    helps students still deciding on commerce.
  </p>
  <p>
    Send the class, course, Class 12 option if known, preferred language and your locality, then book a
    <a href="{{ url('/demo-class') }}">free demo class</a> or browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
    The <a href="{{ url('/cbse-home-tutor-puducherry') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-puducherry') }}">ICSE and ISC</a> pages for Puducherry cover other subjects, and
    teachers can find requests on <a href="{{ url('/tuition-jobs/puducherry') }}">Puducherry tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
