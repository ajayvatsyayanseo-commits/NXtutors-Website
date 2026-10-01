{{--
  "Economics tutor Guwahati" subject page. Byline: NXTutors Academic Team.
  No school, society, person, institute or company is named.

  Board facts reuse the checked statements on the national economics-home-tutor
  page, which cites (read 1 Oct 2026):
  - CBSE Economics (030) XI-XII 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Economics_SecP2_2026-27.pdf
    (XII Part A macro 40: national income 10, money and banking 6, income and
    employment 12, budget 6, BoP 6; Part B IED 40; project 20).
  - CISCE ISC Economics (856), cisce.org/wp-content/uploads/2025/04/13.-ISC-Economics.pdf
    (XII: micro theory, income and employment, money and banking, BoP and exchange
    rate, public finance, national income).
  - Cambridge IGCSE Economics 0455 and AS & A Level 9708, cambridgeinternational.org
    (AS essays in two parts; A Level essays unstructured).
  - IBO DP Economics page and subject briefs, ibo.org.
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (309; 50 questions, 60 min).
  Assam's state board (AHSEC, now under a single state school education board) is
  described generally only, as on the Guwahati hub; calendar notes (CBSE session in
  April, Bohag Bihu in mid-April, pre-boards and boards December to March) come from
  the hub. Local facts only from database/seo-content/areas/guwahati-research.json and
  guwahati-zone-guides.json. No claim of local commerce-tutor supply or demand.
--}}
@php
  $gecSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gecA = function (string $slug, string $label) use ($gecSlugs) {
      return in_array($slug, $gecSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gec-guide" aria-labelledby="gecGuideTitle">
  <h2 id="gecGuideTitle">Economics tutor in Guwahati: macroeconomics, the Indian economy and a year that fits the calendar</h2>

  <p class="nx-guide__lede">
    The Class 12 economics year in Guwahati is short on spare weeks. The CBSE session opens in April, Bohag Bihu follows,
    and December to March brings pre-boards and then the board papers. Inside that year sit national income numericals, money and
    banking, the budget, and long answers on the Indian economy, or the equivalents on Assam's state board, ISC,
    Cambridge or IB. NXTutors matches a tutor to the board, the class and the weak spot, sending two or three who can
    visit or teach online. Fees are listed before you choose, and the first session with your chosen tutor is a free
    demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gec-boards">Class 12 by board</a> ·
    <a href="#gec-state">Assam's state board</a> ·
    <a href="#gec-ni">National income</a> ·
    <a href="#gec-year">The year, month by month</a> ·
    <a href="#gec-intl">IB and A Level</a> ·
    <a href="#gec-where">Six localities</a> ·
    <a href="#gec-mode">Home or online</a> ·
    <a href="#gec-demo">The demo</a> ·
    <a href="#gec-fees">Fees and CUET</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gec-boards">What Class 12 economics covers on each board</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 12 (or final-year) economics for Guwahati students, by board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Final-year content</th><th scope="col">Exam format</th></tr>
    </thead>
    <tbody>
      <tr><td>Assam state board, higher secondary</td><td>As in the board's syllabus</td><td>Pattern in the board's notices</td></tr>
      <tr><td>CBSE (030)</td><td>Macroeconomics: national income (10), money and banking (6), income and employment (12), budget (6), balance of payments (6). Indian Economic Development (40)</td><td>80-mark theory paper in three hours and a 20-mark project</td></tr>
      <tr><td>ISC (856)</td><td>Micro theory, income and employment, money and banking, balance of payments and exchange rate, public finance, national income</td><td>80 marks: 20 compulsory short answers, then five 12-mark answers from eight; two 10-mark projects</td></tr>
      <tr><td>Cambridge A Level (9708)</td><td>Deeper micro and macro, built on AS</td><td>Multiple choice plus data response and essays; essays unstructured at full A Level</td></tr>
      <tr><td>IB Economics, second year</td><td>Microeconomics, macroeconomics and the global economy</td><td>Papers 1 and 2; Paper 3 at HL; internal assessment of three commentaries</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the rest of the CBSE and CISCE timetable, see our <a href="{{ url('/cbse-home-tutor-guwahati') }}">CBSE home
    tutor in Guwahati</a> and <a href="{{ url('/icse-home-tutor-guwahati') }}">ICSE and ISC home tutor in Guwahati</a>
    pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-state">Economics on Assam's state board</h2>
  <p>
    The higher secondary course for Classes 11 and 12 was run by AHSEC, the Assam Higher Secondary Education Council,
    which has since been brought together with SEBA under a single state school education board. Newer notices may use
    that name. We keep our description general: the syllabus, books and paper pattern for economics should come from the
    board's official notices. A tutor for a state-board student should plan from the prescribed book and recent papers
    and teach in the language of the answer sheet, whether English or Assamese. Economic terms are the hard part for a
    student changing medium, so a short glossary in both languages, kept from the first week, saves time later.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-ni">National income: the numericals that decide many papers</h2>
  <p>
    National income is the first macroeconomics chapter in CBSE Class 12 and part of the ISC Class 12 syllabus too. Its
    numericals reward a student who knows exactly which items to include and which to leave out. The three methods a
    tutor drills:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three ways of measuring national income, and the slip each one invites</caption>
    <thead>
      <tr><th scope="col">Method</th><th scope="col">What is added up</th><th scope="col">Typical slip</th></tr>
    </thead>
    <tbody>
      <tr><td>Value added (product) method</td><td>Value of output minus intermediate consumption, sector by sector</td><td>Counting intermediate goods twice</td></tr>
      <tr><td>Income method</td><td>Compensation of employees, rent, interest, profit and mixed income</td><td>Including transfer payments, which are not payments for production</td></tr>
      <tr><td>Expenditure method</td><td>Consumption, investment, government spending and net exports</td><td>Adding second-hand goods or purely financial transactions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The other trap is moving between aggregates: gross and net (depreciation), domestic and national (net factor
    income from abroad), market price and factor cost (net indirect taxes). A student who writes each adjustment on its
    own line, with a sign, almost never loses these marks. A tutor watching the working catches the missing sign at once.
  </p>
  <p>
    A short practice set-up with invented figures: gross domestic product at market price is ₹1,000 crore, depreciation
    ₹100 crore, net factor income from abroad minus ₹20 crore, and net indirect taxes ₹80 crore. Subtract depreciation
    to reach net domestic product at market price (₹900 crore); add net factor income from abroad, which here is
    negative, to reach net national product at market price (₹880 crore); subtract net indirect taxes to reach net
    national product at factor cost, ₹800 crore. Written as three labelled lines, the answer is easy to check and easy
    to award marks to. Squeezed into one line, a single wrong sign costs the whole question.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-year">The Class 12 year, month by month</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Pacing CBSE or ISC Class 12 economics with a tutor around Guwahati's calendar</caption>
    <thead>
      <tr><th scope="col">Months</th><th scope="col">With the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>April and May</td><td>New session; start national income while it is fresh, allowing for the Bohag Bihu break in mid-April</td></tr>
      <tr><td>June to September</td><td>Money and banking, income and employment, then the budget and balance of payments; project topic chosen early</td></tr>
      <tr><td>October and November</td><td>Indian economy answers written to time; project and viva rehearsal; Durga Puja weeks moved online if travel is hard</td></tr>
      <tr><td>December to March</td><td>Full papers and pre-boards, marked against the board's scheme, then the board papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    State-board calendars and school calendars differ, so confirm every date from official notices. For CUET, the
    NTA's 2026 bulletin listed Economics / Business Economics (code 309) as a domain subject with 50 compulsory
    questions in an hour, on the NCERT Class 12 syllabus; add objective practice once the board syllabus is secure. A
    state-board student planning for CUET should ask the tutor to check the board's book against the NCERT chapters
    early in the year, so any gap is filled before the pre-boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-intl">IB and A Level economics from Guwahati</h2>
  <p>
    Experienced IB and A Level economics tutors are few near any one home, so these families often begin online. IB
    students need help with evaluation, real-world examples and, at HL, the policy paper, plus a tutor who can teach the
    commentary skill without ever writing any part of the three commentaries. A Level students need to plan essays that
    come without the two-part prompts of AS. The national <a href="{{ url('/economics-home-tutor') }}">economics home
    tutor</a> guide sets both out in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-where">How does a tutor reach six Guwahati localities?</h2>
  <p>
    The Brahmaputra, GS Road and a few busy junctions decide most journeys. Six localities spread across the city; the
    <a href="{{ url('/city/guwahati') }}">Guwahati home tuition page</a> has every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for an economics tutor visiting six Guwahati localities</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Route</th><th scope="col">Timing and access</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $gecA('ulubari', 'Ulubari') !!}</td><td>Where GS Road begins, between Paltan Bazaar and Bhangagarh</td><td>Early morning, later evening or weekends, away from station-area crowds</td></tr>
      <tr><td>{!! $gecA('bhangagarh', 'Bhangagarh') !!}</td><td>On GS Road, a busy market locality</td><td>A weekday slot that does not clash with your child's coaching batch</td></tr>
      <tr><td>{!! $gecA('kahilipara', 'Kahilipara') !!}</td><td>By bus through Ganeshguri, then the older lanes</td><td>Avoid office opening and closing times near the capital complex</td></tr>
      <tr><td>{!! $gecA('basistha', 'Basistha') !!}</td><td>City bus or auto along the highway to Basistha Chariali</td><td>Tower, flat and gate for large complexes</td></tr>
      <tr><td>{!! $gecA('jalukbari', 'Jalukbari') !!}</td><td>The Assam Trunk Road on the western corridor</td><td>A margin for the busy junction at peak hours</td></tr>
      <tr><td>{!! $gecA('north-guwahati', 'North Guwahati') !!}</td><td>Across the Brahmaputra by one of three bridges, the newest a six-lane bridge opened in February 2026</td><td>A tutor already living on the north bank, and a clear landmark</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/city/guwahati/zone/chandmari-zoo-road') }}">Chandmari and Zoo Road</a> and
    <a href="{{ url('/city/guwahati/zone/beltola-khanapara') }}">Beltola and Khanapara</a> zone guides go further, and
    our <a href="{{ url('/blog/guwahati-tuition-guide') }}">Guwahati tuition guide</a> compares the parts of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-mode">Should economics lessons be at home or online?</h2>
  <p>
    Economics teaches well on a screen: shared diagrams, an article read together, an answer marked live. That widens
    the choice for IB, A Level and ISC students in particular. Home lessons still have the edge for Class 11 statistics
    and Class 12 national income, where a tutor at the table sees every line of working, and for students who tire of
    screens after school and coaching.
  </p>
  <p>
    How many economics tutors live in your part of Guwahati is not something we can promise. Ask for home tuition
    wherever you are; when no suitable tutor can reach you at your hour, especially across the river, online lessons open
    the choice to tutors elsewhere in the city and in other cities. Our article on
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> covers the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-demo">During the free demo, look for these</h2>
  <p>Have your child's last marked test or a recent homework answer ready, so the tutor starts from real work.</p>
  <ol>
    <li>Questions about board, class and language of answers come before any teaching.</li>
    <li>A national income problem is worked with every adjustment on its own line.</li>
    <li>Your child draws and labels at least one diagram.</li>
    <li>A long answer ends with a judgement, not a list.</li>
    <li>The tutor names how they will use past or sample papers across the year.</li>
    <li>Projects and IB commentaries are clearly left to your child.</li>
  </ol>
  <p>
    If the hour does not convince you, the next tutor on your shortlist can give a demo instead, and a change of tutor
    later is free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gec-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    rate and you see it before the demo; our <a href="{{ url('/blog/home-tuition-fees-guwahati') }}">Guwahati fees
    article</a> explains what moves it.
  </p>
  <p>
    Your request should name the class and board, the language of answers, which part of economics is weakest, your
    locality and landmark, days and budget. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a>. Commerce students can pair this with our <a href="{{ url('/accountancy-home-tutor-guwahati') }}">accountancy
    tutor in Guwahati</a> page, and the <a href="{{ url('/english-home-tutor-guwahati') }}">English tutor in Guwahati</a>
    page helps with long answers. Families still weighing streams can read our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream guide</a> and
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 page</a>; the examples are from Gurugram, the choices are
    the same. Economics teachers in the city can browse <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition
    jobs</a>.
  </p>
  </section>

  </div>
</article>
