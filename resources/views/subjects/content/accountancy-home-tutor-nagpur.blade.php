{{--
  Long-form guide for the "accountancy home tutor Nagpur" subject page.
  Byline: NXTutors Academic Team. No schools, junior colleges, societies,
  developers or people are named. Local detail comes only from
  database/seo-content/areas/nagpur-research.json, nagpur-zone-guides.json,
  database/seo-content/zones/nagpur.json and the Nagpur city hub view (students
  "divide mainly between the Maharashtra State Board and the national boards";
  state-board families asked for the medium; "commerce students [struggle] with
  Accountancy"; IB/IGCSE families combine a local tutor with online specialists).
  The State Board commerce stream is described in general terms only. No claim is
  made about local commerce-tutor supply or demand.

  Board facts reused from the national accountancy-home-tutor page (read 1 Oct 2026):
  - CBSE Accountancy (055) 2026-27:
    https://cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf
  - CISCE ISC Accounts (858): https://cisce.org/wp-content/uploads/2025/04/15.-ISC-Accounts.pdf
  - CISCE ISC Commerce (857): https://cisce.org/wp-content/uploads/2025/04/14.-ISC-Commerce.pdf
  - Cambridge IGCSE Accounting 0452 (2027-2029):
    https://www.cambridgeinternational.org/Images/718141-2027-2029-syllabus.pdf
  - Cambridge AS & A Level Accounting 9706 (2026-2028):
    https://www.cambridgeinternational.org/Images/697417-2026-2028-syllabus.pdf
  - NTA CUET (UG) 2026 Information Bulletin, https://cuet.nta.nic.in (301 Accountancy / Book Keeping)
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/accountancy-home-tutor-nagpur.php.
  Area links render only when that Nagpur area page exists and is active.
--}}
@php
  $acNgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $acNgA = function (string $slug, string $label) use ($acNgSlugs) {
      return in_array($slug, $acNgSlugs, true)
          ? '<a href="' . e(url('/city/nagpur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="acNgGuideTitle">
  <h2 id="acNgGuideTitle">Accountancy tuition in Nagpur: board, medium and the chapter that went wrong</h2>

  <p class="nx-guide__lede">
    Our Nagpur city page notes that commerce students tend to struggle with accountancy. That is no surprise
    given what the subject asks of a newcomer: a new vocabulary, fixed formats and a logic of
    two-sided entries, all in the first term of Class 11. In Nagpur the request also has to say which board and, for
    State Board students, which medium, because the city's students divide mainly between the Maharashtra State Board
    and the national boards. This page helps you pin down the paper, find the chapter where things went wrong, plan
    travel from the centre to the Ring Road and beyond, and judge the free demo. Our national
    <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor guide</a> covers the syllabus in full.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#acng-boards">Board table</a> ·
    <a href="#acng-state">State Board and medium</a> ·
    <a href="#acng-diagnose">Finding the gap</a> ·
    <a href="#acng-cuet">CUET</a> ·
    <a href="#acng-zones">Zones</a> ·
    <a href="#acng-mode">Home or online</a> ·
    <a href="#acng-demo">Demo</a> ·
    <a href="#acng-fees">Fees and requests</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="acng-boards">Which accounting paper does your child sit?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 accounting courses Nagpur students take, and the question to ask a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Exam in outline</th><th scope="col">Ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Maharashtra State Board, HSC commerce</td><td>The board's own accounting paper from the state textbook; current pattern on the board's website</td><td>Which medium have you taught in, and do you use past HSC papers?</td></tr>
      <tr><td>CBSE Accountancy 055</td><td>80-mark, three-hour theory paper and a 20-mark project each year; Class 12 Part B is Financial Statement Analysis or Computerised Accounting</td><td>Which Part B option have you taught, and how do you prepare a student for the project viva?</td></tr>
      <tr><td>ISC Accounts 858 (ISC Commerce 857 is separate)</td><td>80-mark theory paper with two 10-mark projects; Class 12 adds a choice between Section B and Section C after the compulsory Section A</td><td>Have you taught ISC partnership and company accounts, and which section?</td></tr>
      <tr><td>Cambridge IGCSE 0452 or AS &amp; A Level 9706</td><td>IGCSE: a multiple-choice paper and a structured paper. A Level adds cost and management accounting</td><td>Which Cambridge papers have you prepared students for? (Often an online match in Nagpur.)</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Nagpur hub suggests that IB and Cambridge families combine a local tutor with online lessons from specialists
    elsewhere in India; the same applies to accounting. The IB has no separate accounting subject, so an IB student
    usually needs help with a unit of Business Management. For board-wide help in the city, see our
    <a href="{{ url('/cbse-home-tutor-nagpur') }}">CBSE tutors in Nagpur</a> and
    <a href="{{ url('/icse-home-tutor-nagpur') }}">ICSE and ISC tutors in Nagpur</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acng-state">Why do board and medium matter so much for HSC accountancy?</h2>
  <p>
    The Maharashtra State Board of Secondary and Higher Secondary Education sets the HSC at the end of Class 12, and its
    accounting is taught from the state's own textbook. Two State Board students in the same Nagpur lane may still need
    different tutors if one writes in English and the other in Marathi: formats travel across languages, but theory
    answers, terms and narrations have to match the paper. Say the medium in your request, as the city page asks.
  </p>
  <p>
    We do not reproduce the HSC paper pattern here. The board publishes it and revises it, so the board's official
    notices and your child's college are the sources to trust. A good HSC tutor keeps pace with the college's tests and
    practises from the board's past papers, so your child gets used to the board's way of asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acng-diagnose">Where exactly did accountancy go wrong?</h2>
  <p>
    Before a tutor teaches anything new, the first two sessions should locate the gap. These are the usual signs and
    what each one points to.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Symptoms parents notice, the likely cause, and the repair</caption>
    <thead>
      <tr><th scope="col">What you see</th><th scope="col">Likely cause</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>Journal entries memorised, but new transactions go wrong</td><td>Rules learnt by rhyme, not from the accounting equation</td><td>Rebuild each rule from assets = liabilities + capital</td></tr>
      <tr><td>Trial balance never agrees</td><td>Posting and balancing errors in the ledger</td><td>Slow, checked posting until the habit is clean</td></tr>
      <tr><td>Balance sheet out by the amount of one adjustment</td><td>Each adjustment shown in one place only</td><td>A two-effects check for closing stock, prepaid and outstanding items, depreciation and provisions</td></tr>
      <tr><td>Full marks in practice, low marks in tests</td><td>No working notes, so no partial credit</td><td>Working notes on every question, as boards award them</td></tr>
      <tr><td>Class 12 partnership answers collapse midway</td><td>Sacrificing and gaining ratios reversed early on</td><td>A fixed order: ratios, goodwill, revaluation, reserves, capitals</td></tr>
      <tr><td>Share forfeiture questions skipped</td><td>The life of a share is not clear</td><td>Trace one share from application to reissue</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A small example shows the third row in action. A firm pays ₹12,000 for a year's insurance on 1 October and closes
    its books on 31 March. Only six months have been used, so ₹6,000 is an expense for the year and ₹6,000 is prepaid.
    The student who understands this reduces the insurance charged in the profit and loss account to ₹6,000 and lists
    ₹6,000 of prepaid insurance among the current assets. The student who does only the first step finds the balance
    sheet out by exactly ₹6,000, and a tutor who sees that figure knows at once which habit to build.
  </p>
  <p>
    The weightings explain why the Class 12 rows matter. In CBSE's 2026-27 curriculum, partnership firms carry 36 of
    the 80 theory marks and company accounts 24; in ISC, partnership and company accounts make up the compulsory 60-mark
    Section A. A gap there is expensive, and it usually traces back to a Class 11 chapter. If your child is still
    choosing a stream, our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a>
    and <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 home tutor page</a> help, though both are
    written with Gurugram families in mind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acng-cuet">Does accountancy appear in CUET?</h2>
  <p>
    NTA's CUET (UG) 2026 information bulletin includes Accountancy / Book Keeping (code 301) among its domain subjects,
    each a test of 50 compulsory questions in 60 minutes on NCERT's Class 12 syllabus. HSC students should compare
    that syllabus with the state textbook, and everyone should read the bulletin for the year they apply. The change
    in technique is speed: recognising the right treatment fast rather than writing a full solution.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acng-zones">How does a tutor reach each part of Nagpur?</h2>
  <p>
    Any family can request an accountancy tutor. We look first at tutors who can reach your zone easily and say
    honestly when an online tutor would serve better. Nagpur's metro decides a good deal:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/nagpur/zone/central-west-nagpur') }}">Central West Nagpur</a></strong>, e.g. {!! $acNgA('dharampeth', 'Dharampeth') !!} and {!! $acNgA('laxmi-nagar', 'Laxmi Nagar') !!}: well served, with Sitabuldi as the Orange and Aqua Line interchange. Parking near markets and clinics is hard, so a tutor on the metro or a two-wheeler arrives more reliably.</li>
    <li><strong><a href="{{ url('/city/nagpur/zone/hingna-road-and-ring-road') }}">Hingna Road and Ring Road</a></strong>, e.g. {!! $acNgA('pratap-nagar', 'Pratap Nagar') !!}: Subhash Nagar or Rachana Ring Road Junction stations, then an auto. Give the layout and plot number, since many layouts look alike from the main road.</li>
    <li><strong><a href="{{ url('/city/nagpur/zone/wardha-road') }}">Wardha Road</a></strong>, e.g. {!! $acNgA('manish-nagar', 'Manish Nagar') !!}: a string of Orange Line stations. Allow extra time for the railway underbridge at busy hours.</li>
    <li><strong><a href="{{ url('/city/nagpur/zone/north-nagpur') }}">North Nagpur</a></strong>, e.g. {!! $acNgA('seminary-hills', 'Seminary Hills') !!}: thin metro coverage, so a tutor with a two-wheeler or one living in the north is the practical choice. Government colonies have gated entrances; inform security first.</li>
    <li><strong><a href="{{ url('/city/nagpur/zone/east-and-south-east-nagpur') }}">East and South-East Nagpur</a></strong>, e.g. {!! $acNgA('nandanvan', 'Nandanvan') !!}: the Aqua Line reaches the east, but Manewada and Hudkeshwar depend on road travel. Bhandara Road carries heavy goods traffic, so book outside peak hours.</li>
  </ul>
  <p>
    Every locality has its own listing on our <a href="{{ url('/city/nagpur') }}">Nagpur home tuition page</a>, and the
    <a href="{{ url('/blog/nagpur-tuition-guide') }}">Nagpur tuition guide</a> adds timing and commuting notes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acng-mode">Home or online accountancy in Nagpur?</h2>
  <p>
    Home lessons are the natural start for Class 11, when the tutor needs to see every line of a ledger as it is
    written, and they suit families on a metro line or within a short two-wheeler ride of the tutor. Online lessons are
    the better route for Cambridge courses, and for the Computerised Accounting option or ISC Section C, where tutor and
    student can share one spreadsheet. They also help in the outer layouts when the right tutor lives across the city.
    During legislative sessions, when roads around Civil Lines
    can be slower, an online lesson that week avoids a missed class. A mix works for many Class 12 students: a long home session for partnership questions, a short online one for
    theory. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article goes further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acng-demo">What should you watch for in the demo?</h2>
  <ol>
    <li>The tutor asks for the board, the medium for HSC students, and the Class 12 option.</li>
    <li>They look at a recent marked test and name the gap, using something like the table above.</li>
    <li>Your child writes for most of the hour; the tutor watches and questions.</li>
    <li>Every entry is explained from the accounting equation, not from a rhyme.</li>
    <li>Working notes and formats follow the board's marking.</li>
    <li>You leave with practice to do and a date it will be checked.</li>
  </ol>
  <p>
    If the tutor is not right, tell us and we arrange a demo with the next one; switching is free. See also our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acng-fees">What does it cost, and how do you ask for a tutor?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fees
    and every shortlisted fee is shown before the demo. The
    <a href="{{ url('/blog/home-tuition-fees-nagpur') }}">Nagpur home tuition fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain the range.
  </p>
  <p>
    Send the class, board and medium, the chapters causing trouble, your locality and the road it is off, times, home
    or online, and a budget. We come back with two or three matched tutors, and the first class is a free
    <a href="{{ url('/demo-class') }}">demo</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. For the other commerce subject, see <a href="{{ url('/economics-home-tutor-nagpur') }}">economics
    tutors in Nagpur</a>; for English, <a href="{{ url('/english-home-tutor-nagpur') }}">English home tutors in
    Nagpur</a>; for maths, <a href="{{ url('/maths-home-tutor-nagpur') }}">maths home tutors in Nagpur</a>.
    Accountancy teachers can find students on <a href="{{ url('/tuition-jobs/nagpur') }}">Nagpur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
