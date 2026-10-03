{{--
  Long-form guide for the "accountancy home tutor Pune" subject page.
  Byline: NXTutors Academic Team. No schools, junior colleges, societies,
  developers or people are named. Local detail comes only from
  database/seo-content/areas/pune-research.json, pune-zone-guides.json,
  database/seo-content/zones/pune.json and the Pune city hub view (boards:
  Maharashtra State Board SSC/HSC with Classes 11-12 usually in a junior college,
  CBSE, ICSE/ISC, and "a smaller group" on IB or Cambridge IGCSE). The State Board
  commerce stream is described in general terms only. No claim is made about local
  commerce-tutor supply or demand.

  Board facts reused from the national accountancy-home-tutor page (read 1 Oct 2026):
  - CBSE Accountancy (055) 2026-27:
    https://cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf
  - CBSE Business Studies (054) 2026-27:
    https://cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/BusinessStudies_SecP2_2026-27.pdf
  - CISCE ISC Accounts (858): https://cisce.org/wp-content/uploads/2025/04/15.-ISC-Accounts.pdf
  - CISCE ISC Commerce (857): https://cisce.org/wp-content/uploads/2025/04/14.-ISC-Commerce.pdf
  - Cambridge IGCSE Accounting 0452 (2027-2029):
    https://www.cambridgeinternational.org/Images/718141-2027-2029-syllabus.pdf
  - Cambridge AS & A Level Accounting 9706 (2026-2028):
    https://www.cambridgeinternational.org/Images/697417-2026-2028-syllabus.pdf
  - NTA CUET (UG) 2026 Information Bulletin, https://cuet.nta.nic.in (301 Accountancy / Book Keeping)
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/accountancy-home-tutor-pune.php.
  Area links render only when that Pune area page exists and is active.
--}}
@php
  $acPnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $acPnA = function (string $slug, string $label) use ($acPnSlugs) {
      return in_array($slug, $acPnSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="acPnGuideTitle">
  <h2 id="acPnGuideTitle">Accountancy tuition in Pune: planning the two commerce years</h2>

  <p class="nx-guide__lede">
    In Pune, a commerce student might be in a junior college preparing for the HSC, in a CBSE or ISC school in Aundh
    or Kothrud, or on a Cambridge course in one of the IT suburbs. Wherever they are, accountancy behaves the same way:
    each chapter rests on the one before, so a weak foundation in the first months of Class 11 costs marks in the
    partnership chapters a year later. This page is organised around that timeline. It sets out what each board
    examines, a term-by-term plan, how a tutor reaches each part of Pune and Pimpri-Chinchwad, and what to test in the
    free demo. For the syllabus in depth, see the national
    <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor guide</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#acpn-boards">Boards</a> ·
    <a href="#acpn-state">The HSC route</a> ·
    <a href="#acpn-plan">A two-year plan</a> ·
    <a href="#acpn-cuet">CUET</a> ·
    <a href="#acpn-zones">Zones and travel</a> ·
    <a href="#acpn-mode">Home or online</a> ·
    <a href="#acpn-demo">Demo checklist</a> ·
    <a href="#acpn-fees">Fees</a> ·
    <a href="#acpn-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="acpn-boards">How is accountancy examined on each board Pune students take?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Accounting for Class 11–12 commerce students in Pune, board by board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">What the student sits</th><th scope="col">Where Class 12 choices arise</th></tr>
    </thead>
    <tbody>
      <tr><td>Maharashtra State Board (HSC)</td><td>The board's accounting paper, taught from the state's prescribed textbook in a junior college</td><td>Check the board's official website for the current pattern</td></tr>
      <tr><td>CBSE, Accountancy 055</td><td>Three hours, 80 theory marks, and a 20-mark project in both years</td><td>Part B is either Financial Statement Analysis or Computerised Accounting</td></tr>
      <tr><td>CISCE, ISC Accounts 858 (Commerce 857 is a separate paper)</td><td>Three hours, 80 theory marks, plus two projects of 10 marks</td><td>After the compulsory 60-mark Section A, either Section B or Section C for 20 marks</td></tr>
      <tr><td>Cambridge IGCSE Accounting 0452</td><td>Paper 1, 40 multiple-choice questions; Paper 2, five compulsory structured questions</td><td>No tiers: every candidate sits the same two papers</td></tr>
      <tr><td>Cambridge AS &amp; A Level Accounting 9706</td><td>Four papers across AS and A Level</td><td>A Level adds a separate paper on cost and management accounting</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Pune hub notes that a smaller group of students take the IB Diploma. The IB has no separate accounting
    subject, so IB families usually need help with a unit of Business Management; tell us the course and unit and we
    match on that. Board-wide pages for the city are our <a href="{{ url('/cbse-home-tutor-pune') }}">CBSE tutors in
    Pune</a> and <a href="{{ url('/icse-home-tutor-pune') }}">ICSE and ISC tutors in Pune</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-state">What does the HSC commerce route mean for a tutor?</h2>
  <p>
    Many students across Pune and Pimpri-Chinchwad sit the State Board's SSC and HSC, usually moving to a junior college
    for Classes 11 and 12. The board conducts the HSC at the end of Class 12 and writes its own textbooks and question
    papers, and it publishes and revises the paper pattern itself, so we do not restate it here; use the board's
    official website. When you request a tutor, tell us three things: that the course is HSC, the medium in which your
    child writes the paper, and whether the junior college runs regular unit tests. A tutor who aligns with that test
    calendar, and practises with past HSC papers rather than CBSE material, is far more useful than one teaching from
    a different book.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-plan">What does a sensible two-year accountancy plan look like?</h2>
  <p>
    The plan below follows CBSE's 2026-27 weightings, which are published unit by unit; ISC students can adapt
    it, as the order of topics is broadly similar, and HSC students should follow their own textbook's order. It assumes one or two sessions a week, more before
    exams.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A term-by-term accountancy plan for Classes 11 and 12</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Focus</th><th scope="col">Why then</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11, first term</td><td>Accounting equation, journal, ledger, special books; theoretical framework (12 marks)</td><td>Every later chapter assumes these entries are automatic</td></tr>
      <tr><td>Class 11, second term</td><td>Bank reconciliation, depreciation, trial balance and rectification (the 44-mark process unit), then sole-proprietor final accounts (24)</td><td>Adjustments in final accounts are where balance sheets stop tallying</td></tr>
      <tr><td>Class 11, alongside</td><td>Computerised Accounting basics and the 20-mark project</td><td>Compulsory for CBSE commerce students in Class 11</td></tr>
      <tr><td>Class 12, first term</td><td>Partnership firms: goodwill, admission, retirement, dissolution (36 marks)</td><td>The largest unit; errors in ratios carry through every account</td></tr>
      <tr><td>Class 12, second term</td><td>Company accounts (24), then analysis (12) and cash flow (8), or Computerised Accounting</td><td>Share forfeiture and cash-flow classification need repeated practice</td></tr>
      <tr><td>Class 12, final months</td><td>Full papers to time, theory answers, project file and viva</td><td>Working notes and presentation are marked</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE students usually take Business Studies (054) beside accountancy, also an 80-mark paper with a 20-mark
    project. The two meet in Class 12, when shares and debentures appear as sources of finance in one subject and as
    journal entries in the other. If both feel shaky, say so in the request; a tutor strong in both can link those
    chapters, but a weak accountancy student is usually better served by a specialist.
  </p>
  <p>
    CBSE's question design puts about 40% of theory marks on remembering and understanding, 30% on applying and 30%
    on analysing and evaluating. A plan that only drills textbook solutions reaches the first band and stalls; the
    tutor's job in Class 12 is to set unfamiliar questions and ask the student to justify each treatment. If your
    child has not yet picked commerce, the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> and our
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 home tutor page</a> help with that decision; both are
    written for Gurugram families, but the stream questions apply in Pune too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-cuet">Where does CUET fit?</h2>
  <p>
    NTA's CUET (UG) 2026 bulletin lists Accountancy / Book Keeping (code 301) as a domain subject: 50 compulsory
    questions in 60 minutes, set on NCERT's Class 12 syllabus. Pune students on the HSC or ISC should compare their
    course with those NCERT chapters, and every applicant should read the bulletin for their own year. In the plan
    above, CUET practice slots into the final months, once full board answers are reliable.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-zones">How do tutors reach each part of Pune?</h2>
  <p>
    Any family can request an accountancy tutor; we search outward from your neighbourhood and say plainly when an
    online tutor would be the stronger choice. Metro coverage decides a lot in Pune, so the zones fall into two groups.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>On or near a metro line</h3>
  <p>
    <a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a> is the
    most fully served zone: the Aqua Line stops at Vanaz and Anand Nagar for {!! $acPnA('kothrud', 'Kothrud') !!}, though
    Karve Nagar and Warje rely on two-wheelers.
    <a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and
    Kharadi</a> has Aqua Line stations at Kalyani Nagar, Yerwada and Ramwadi, the last beside
    {!! $acPnA('viman-nagar', 'Viman Nagar') !!}; Kharadi and Wagholi still need a tutor who rides in.
    <a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a> is served
    by Bund Garden and the Pune Railway Station stop, and in
    <a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and
    Pimpri-Chinchwad</a> the Purple Line reaches PCMC Bhavan, with suburban trains at Chinchwad and Akurdi. Families in
    {!! $acPnA('wakad', 'Wakad') !!} still depend on the road.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Road-dependent zones</h3>
  <p>
    <a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a> had no working metro station
    at the time of writing, so a tutor from the next suburb is the practical choice for
    {!! $acPnA('baner', 'Baner') !!}. <a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and
    NIBM</a> has no metro either; for {!! $acPnA('hadapsar', 'Hadapsar') !!} and the townships, a tutor already living
    in the zone keeps a timetable steadier than one crossing the city. In
    <a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>,
    tutors ride the Purple Line to Swargate and finish by bus or auto to homes such as
    {!! $acPnA('bibwewadi', 'Bibwewadi') !!}.
  </p>
    </div>
  </div>
  <p>
    Gate entry matters in the townships of Magarpatta, Hinjewadi and Wakad: send the tutor's name, tower and flat
    before the demo. Neighbourhood listings are on our <a href="{{ url('/city/pune') }}">Pune home tuition page</a>, and
    regional guides cover <a href="{{ url('/blog/west-pune-tuition-guide') }}">west Pune</a>,
    <a href="{{ url('/blog/east-pune-tuition-guide') }}">east Pune</a> and
    <a href="{{ url('/blog/south-pune-tuition-guide') }}">south Pune</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-mode">Is home or online better for accountancy in Pune?</h2>
  <p>
    Home lessons suit the first months of Class 11, when a tutor needs to watch every entry being written, and they
    work well where the tutor lives in your own or the next suburb. Online lessons suit students in road-dependent
    zones when the right tutor lives across the city, and they suit the Computerised Accounting option, ISC Section C
    and Cambridge courses, where screen sharing helps and the choice of tutor widens to the whole country. Plenty of
    families combine the two: home at the weekend for long partnership questions, online midweek for theory and
    doubts. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-demo">What should the free demo show you?</h2>
  <ul>
    <li><strong>The right questions first:</strong> board, class, and the Class 12 option your child is taking.</li>
    <li><strong>Your child writing:</strong> entries, ledgers and working notes, with the tutor watching rather than solving.</li>
    <li><strong>Reasons, not rhymes:</strong> the tutor explains each debit and credit from the accounting equation.</li>
    <li><strong>Board habits:</strong> formats and working notes set out the way your board awards marks.</li>
    <li><strong>A plan:</strong> where your child sits on the two-year timeline above, and what the next four weeks cover.</li>
    <li><strong>Honesty on the project:</strong> help with the method and the viva, never writing the file.</li>
  </ul>
  <p>
    Not convinced? Tell us and we set up a demo with the next tutor on your shortlist; switching is free. See also our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-fees">What do accountancy tutors in Pune charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fees,
    and each shortlisted fee is visible before the demo. Read the
    <a href="{{ url('/blog/home-tuition-fees-pune') }}">Pune home tuition fees guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> for what moves the figure.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acpn-start">How do you get started?</h2>
  <p>
    Tell us the class and board, the chapters that are hurting, your locality and society, free weekdays, home or
    online, and a budget. We send two or three matched tutors with their fees, and you pick one for a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified, and you can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  <p>
    Most commerce students take economics too: see <a href="{{ url('/economics-home-tutor-pune') }}">economics tutors in
    Pune</a>. For English, which every commerce student sits, see
    <a href="{{ url('/english-home-tutor-pune') }}">English home tutors in Pune</a>, and for maths,
    <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a>. Accountancy teachers can find students
    near home on the <a href="{{ url('/tuition-jobs/pune') }}">Pune tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
