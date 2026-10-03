{{--
  "Accountancy home tutor Bengaluru" city x subject page. Byline: NXTutors
  Academic Team. No school, college, institute, society or people's names.
  Local facts only from database/seo-content/areas/bengaluru-research.json,
  bengaluru-zone-guides.json, database/seo-content/zones/bengaluru.json and the
  Bengaluru city hub (Karnataka SSLC and PUC; IB and IGCSE are mentioned there).
  The Karnataka PUC commerce stream is described only in general terms.
  No claim is made about local accountancy-tutor supply or demand.

  Board facts reused from the national accountancy-home-tutor page, which cites
  (read 1 Oct 2026):
  - CBSE Accountancy (055) 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf)
  - CBSE Business Studies (054) 2026-27, cbseacademic.nic.in
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org
  - Cambridge IGCSE Accounting 0452 (2027-2029) and AS & A Level Accounting 9706
    (2026-2028), cambridgeinternational.org
  - IBO DP individuals and societies subject list, ibo.org
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (domain subject 301)
  Fee wording is the approved NXTutors sentence.
  Area links render only when that Bengaluru area page exists and is active.
--}}
@php
  $bacSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bacA = function (string $slug, string $label) use ($bacSlugs) {
      return in_array($slug, $bacSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="bacGuideTitle">
  <h2 id="bacGuideTitle">Accountancy tuition in Bengaluru: PUC, CBSE, ISC and Cambridge commerce</h2>

  <p class="nx-guide__lede">
    In Bengaluru, a Class 11 commerce student might be in first PUC under the Karnataka board, in a CBSE school
    using NCERT books, in an ISC school, or in a Cambridge programme where accounting began two years earlier. The
    debit-and-credit logic is the same everywhere; the paper, the project and the Class 12 options are not. This page
    sets out those differences for a Bengaluru family, explains how a tutor gets to each part of the city, and lists
    what to watch in the free demo. The full syllabus walk-through sits on our national
    <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a> guide.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bac-boards">Commerce boards</a> ·
    <a href="#bac-puc">PUC commerce</a> ·
    <a href="#bac-options">Class 12 options</a> ·
    <a href="#bac-cuet">CUET</a> ·
    <a href="#bac-zones">Reaching your area</a> ·
    <a href="#bac-mode">Home or online</a> ·
    <a href="#bac-demo">The demo</a> ·
    <a href="#bac-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bac-boards">Class 11 and 12 accountancy across Bengaluru's boards</h2>
  <p>
    Before we shortlist anyone we ask for the board and the exact course, because a tutor fluent in NCERT partnership
    questions may never have set out an IGCSE structured answer, and the reverse is just as common.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Accountancy for senior commerce students in Bengaluru, by board</caption>
    <thead>
      <tr><th scope="col">Board and course</th><th scope="col">How it is assessed</th><th scope="col">Question for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>Karnataka PUC commerce</td><td>Set by the state board for first and second PUC, with its own textbooks and papers</td><td>Have you taught from the current PUC accountancy textbook and the board's model papers?</td></tr>
      <tr><td>CBSE Accountancy (055)</td><td>Three-hour, 80-mark theory paper and a 20-mark project in Class 11 and again in Class 12</td><td>Which Class 12 Part B have you taught lately: analysis of statements or Computerised Accounting?</td></tr>
      <tr><td>ISC Accounts (858) and Commerce (857)</td><td>Each an 80-mark, three-hour paper plus two projects of 10 marks, in both years</td><td>Have you prepared students for Section B or Section C in Class 12?</td></tr>
      <tr><td>Cambridge IGCSE Accounting (0452)</td><td>One multiple-choice paper (40 marks) and one structured paper of five compulsory questions (100 marks); not tiered</td><td>How do you train the written analysis questions?</td></tr>
      <tr><td>Cambridge AS and A Level Accounting (9706)</td><td>Four papers, with cost and management accounting as its own A Level paper</td><td>Have you taught the costing and budgeting paper?</td></tr>
      <tr><td>IB Diploma</td><td>No separate accounting course; Business Management and Economics are the nearby subjects</td><td>Which Business Management unit does the student need help with?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Business Studies (CBSE code 054) usually comes with accountancy in CBSE commerce. It is written and
    point-based, while accountancy is exact. Tell us if one of the two is the problem rather than both, since a
    specialist in the weaker subject is usually a better use of the budget than a generalist for both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-puc">First and second PUC commerce</h2>
  <p>
    A large share of Bengaluru students finish the SSLC and continue under the Karnataka board into the two-year
    pre-university course. Commerce students there take accountancy as part of a combination of subjects chosen at
    admission. We describe this course only in general terms; the scheme of the paper and the timetable come from the
    board's own notices each year, and that is what a tutor should work from.
  </p>
  <p>
    What we look for in a PUC accountancy tutor is practical. They should teach from the prescribed PUC textbook in
    the order your child's college follows, not from a CBSE guide that happens to share chapter names. They should
    practise with the board's model and past papers. And they should insist on the habits that every accountancy
    paper rewards, whichever board sets it: entries derived from the accounting equation rather than memorised,
    working notes for every adjustment, and formats built from understanding. When you send the request, say "first
    PUC" or "second PUC" and name the subject combination, so we do not send a CBSE-only tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-options">The Class 12 choice that decides which tutor you need</h2>
  <p>
    Both national boards split the last part of Class 12 accountancy into two routes, and the right tutor depends on
    which one your child's school teaches.
  </p>
  <ul>
    <li><strong>CBSE.</strong> Part A (60 marks) is compulsory: partnership firms carry 36 and company accounts (shares and debentures) 24. For the other 20 marks, the school picks Analysis of Financial Statements (12) with the Cash Flow Statement (8), or Computerised Accounting with practical work in place of the project. In Class 11, Computerised Accounting is compulsory for every commerce student.</li>
    <li><strong>ISC.</strong> Section A on partnership and joint stock company accounts is compulsory for 60 marks. Students then answer either Section B, on financial statement analysis and cash flow, or Section C, on spreadsheets and database management, for the remaining 20.</li>
  </ul>
  <p>
    A tutor who is strong on ratios may be rusty on spreadsheet functions. Ask the class teacher which route the
    school follows before the demo, and tell us. For the CBSE Class 12 project, the student analyses a company's
    statements using any two of comparative and common size statements, ratios, segment reports or cash flow; a
    tutor can teach those tools and rehearse the viva, but the file has to be your child's own work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-cuet">After the boards: accountancy in CUET (UG)</h2>
  <p>
    Students applying to central and participating universities may sit CUET (UG). The NTA's 2026 bulletin lists
    Accountancy / Book Keeping as domain subject 301, with 50 compulsory questions in 60 minutes on the NCERT Class
    12 syllabus. A CBSE student has already covered that content; a PUC or ISC student should ask the tutor to map
    their own chapters against NCERT's and fill any gaps. The extra skill is speed in a multiple-choice format, which
    is worth adding once the board syllabus is secure. Read the bulletin for your own year, since the NTA publishes a
    fresh one each cycle.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-zones">How a tutor gets to your part of Bengaluru</h2>
  <p>
    Accountancy needs steady weekly practice, so the travel has to work every week, not just for the demo. Families
    anywhere in the city can request a home tutor; where nobody suitable can make the trip reliably, online lessons
    widen the choice. The table shows the usual route into each zone.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting an accountancy tutor to your door, zone by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Usual way in</th><th scope="col">Good to know</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>, e.g. {!! $bacA('hsr-layout', 'HSR Layout') !!}</td><td>By road; the Outer Ring Road is the dividing line</td><td>Give the HSR sector with main and cross numbers; a tutor from your side of the ORR keeps to time</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>, e.g. {!! $bacA('jayanagar', 'Jayanagar') !!}</td><td>Green Line, then a short walk or auto</td><td>Evening parking near the 4th Block shops is tight, so metro is easier</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>, e.g. {!! $bacA('electronic-city', 'Electronic City') !!}</td><td>Yellow Line along Hosur Road; Bannerghatta Road by road for now</td><td>Avoid office shift changes; agree the station exit and auto point</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>, e.g. {!! $bacA('indiranagar', 'Indiranagar') !!}</td><td>Purple Line to Indiranagar; Baiyappanahalli for CV Raman Nagar</td><td>Start before the 100 Feet Road evening crowd</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>, e.g. {!! $bacA('marathahalli', 'Marathahalli') !!}</td><td>Purple Line plus an auto where a station is near</td><td>Some societies ask for photo ID on the first visit</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a></td><td>No metro yet; two-wheeler, bus or cab</td><td>A tutor living close by keeps weekday classes regular</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a>, e.g. {!! $bacA('yelahanka', 'Yelahanka') !!}</td><td>By road along Bellary Road</td><td>Stay on your side of the Hebbal flyover; give the New Town stage or Old Town landmark</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a></td><td>Green Line, most homes a walk or auto from a station</td><td>Chord Road and Tumkur Road are slow at peak hours</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a></td><td>Purple Line west, then a short auto</td><td>Share a map pin for the hilly Basaveshwaranagar streets</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a></td><td>Purple Line to Halasuru or Trinity for Ulsoor; road or metro and auto elsewhere</td><td>Guards at many entrances; send the tutor's name ahead</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/blog/east-bengaluru-tuition-guide') }}">east Bengaluru</a> and
    <a href="{{ url('/blog/south-bengaluru-tuition-guide') }}">south Bengaluru</a> tuition guides add commute and
    timing notes, and every neighbourhood is listed on our <a href="{{ url('/city/bengaluru') }}">Bengaluru home
    tuition page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-mode">Home or online accountancy lessons in Bengaluru</h2>
  <p>
    Accountancy is written in columns on paper, and most mistakes show up in a single line of a ledger. A tutor at the
    table catches a wrong-side posting the moment it is made, which is why home lessons suit Class 11, when double
    entry is new. Online lessons work well when the tutor can see the notebook clearly through a phone on a stand or
    a writing tablet, and they are often better for Computerised Accounting or ISC Section C, where both people can
    work in the same spreadsheet.
  </p>
  <p>
    For homes across the Outer Ring Road or in the farther apartment belts, a mix is common: the heavy chapters, such
    as partnership admission and retirement or final accounts with adjustments, at home at the weekend, and shorter
    online sessions for theory and doubts on weekdays. Online lessons also open tutors elsewhere in India for
    Cambridge A Level costing or an IB Business Management unit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-demo">Checklist for the free demo</h2>
  <p>
    Keep the last marked accountancy test, the notebook and the current chapter's textbook on the table, then watch
    for these points:
  </p>
  <ol>
    <li>The tutor asks for the board, the year and the Class 12 route (Part B option, or ISC Section B or C) before teaching.</li>
    <li>Your child writes most of the entries while the tutor watches.</li>
    <li>Errors are found by questioning ("which two accounts change here?"), not just crossed out.</li>
    <li>Working notes and board-style formats are required, not optional.</li>
    <li>Theory gets a few minutes too: definitions and distinctions in exam language.</li>
    <li>For PUC students, the tutor works from the PUC textbook and the board's model papers.</li>
    <li>The class ends with a specific practice set and a way to check it.</li>
  </ol>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> covers the
    practical side. If the fit is wrong, we arrange a demo with the next tutor on the shortlist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-fees">Accountancy tuition fees in Bengaluru</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their
    own rate, and the course, travel to your neighbourhood and lessons per week all play a part. You see every
    shortlisted fee before the demo. The <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">Bengaluru home
    tuition fees guide</a> and our <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bac-start">Getting started</h2>
  <p>
    Send us the board and year, the Class 12 route if known, the chapters causing trouble, your neighbourhood with
    block or stage, the times that suit and whether you want home, online or both. We reply with two or three matched
    tutors and their fees, your child takes a <a href="{{ url('/demo-class') }}">free demo class</a>, and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified.
  </p>
  <p>
    Commerce students often need a second subject: see our <a href="{{ url('/economics-home-tutor-bengaluru') }}">economics
    home tutors in Bengaluru</a>, <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths tutors</a> if maths sits
    in the combination, and <a href="{{ url('/english-home-tutor-bengaluru') }}">English tutors</a>. Board-wide help
    is on our <a href="{{ url('/cbse-home-tutor-bengaluru') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-bengaluru') }}">ICSE and ISC</a> pages for Bengaluru. Still choosing a stream?
    Our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream guide</a> and
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutor page</a> describe what commerce involves,
    though both were written with Gurugram families in mind. Accountancy teachers in the city can find open
    requests on <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
