{{--
  Long-form guide for the "accountancy home tutor Jaipur" page. Byline: NXTutors
  Academic Team. No schools, coaching institutes, societies or people are named,
  and no claim is made about local commerce-tutor supply or demand.

  Local facts come only from database/seo-content/areas/jaipur-research.json,
  jaipur-zone-guides.json, database/seo-content/zones/jaipur.json and the city
  hub (resources/views/city/content/jaipur.blade.php): five zones, Pink Line
  open since 3 June 2015 (Mansarovar to the old city via Civil Lines, Railway
  Station, Sindhi Camp), Orange Line planned and under construction, Vidhyadhar
  Nagar sectors, Raja Park market road, Nirman Nagar's Mansarovar station,
  Mansarovar JDA/RHB schemes, Jagatpura gated complexes and flyover, C-Scheme
  apartment buildings and offices. RBSE (Board of Secondary Education,
  Rajasthan) is described in general terms only, as the hub does.

  Board facts are reused from the national accountancy-home-tutor page, which
  read these official documents on 1 Oct 2026:
  - CBSE Accountancy (055) and Business Studies (054) 2026-27, cbseacademic.nic.in
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org
  - Cambridge IGCSE Accounting 0452 (2027-2029), AS & A Level 9706 (2026-2028),
    cambridgeinternational.org
  - IBO DP individuals and societies subject list, ibo.org
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/accountancy-home-tutor-jaipur.php.
  Area links render only when that Jaipur area page exists and is active.
--}}
@php
  $jacAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jacA = function (string $slug, string $label) use ($jacAreaSlugs) {
      return in_array($slug, $jacAreaSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jacGuideTitle">
  <h2 id="jacGuideTitle">Accountancy tuition in Jaipur: RBSE, CBSE and ISC commerce, from Vidhyadhar Nagar to Jagatpura</h2>

  <p class="nx-guide__lede">
    The Jaipur city page puts it plainly: in Classes 11 and 12, science students tend to struggle first with Physics
    and Maths, and commerce students with Accountancy. The reason is that accountancy is the one commerce subject with
    no school history behind it. A student meets debit and credit for the first time in Class 11, and within a term
    the whole course rests on them. NXTutors matches Jaipur families with accountancy tutors by board, medium and
    class first, then by colony and travel. This guide from the NXTutors Academic Team covers the local side; the
    complete syllabus sits on the national <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a>
    page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jac-boards">Board by board</a> ·
    <a href="#jac-rbse">RBSE commerce</a> ·
    <a href="#jac-year">The Class 11 year</a> ·
    <a href="#jac-twelve">Class 12 and CUET</a> ·
    <a href="#jac-zones">Five zones</a> ·
    <a href="#jac-colonies">Six colonies</a> ·
    <a href="#jac-mode">Home or online</a> ·
    <a href="#jac-demo">The demo</a> ·
    <a href="#jac-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jac-boards">Board by board: what a Jaipur commerce student is examined on</h2>
  <p>
    Jaipur families study under CBSE, RBSE, CISCE's ICSE and ISC and, in a smaller group, the IB or Cambridge IGCSE.
    The accounting content overlaps, but the papers do not.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Accounting in Jaipur's boards: structure and the first thing to ask</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Paper structure (official documents)</th><th scope="col">First question for the family</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Accountancy 055</td><td>80 theory marks and 20 for project work each year. Class 11: theoretical framework 12, accounting process 44, sole proprietor's financial statements 24</td><td>Has the school picked Financial Statement Analysis or Computerised Accounting for Class 12?</td></tr>
      <tr><td>ISC Accounts 858</td><td>80-mark paper with 20 compulsory short-answer marks; Class 12 Section A (partnership and companies) is compulsory, then Section B or C</td><td>Which of Section B or Section C?</td></tr>
      <tr><td>ISC Commerce 857</td><td>A separate, descriptive subject on business, trade, finance, management and marketing</td><td>Is help needed in Commerce as well as Accounts?</td></tr>
      <tr><td>RBSE</td><td>The board's own Class 11–12 commerce syllabus, prescribed books and question paper</td><td>Hindi or English medium?</td></tr>
      <tr><td>Cambridge IGCSE 0452 / A Level 9706</td><td>IGCSE: multiple choice (30%) and a structured paper (70%), not tiered; A Level adds a cost and management accounting paper</td><td>Which qualification and series?</td></tr>
      <tr><td>IB Diploma</td><td>No separate accounting course; accounting topics arise inside Business Management</td><td>Which IB course and unit?</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-rbse">What should an RBSE commerce student's tutor know?</h2>
  <p>
    The Board of Secondary Education, Rajasthan conducts the state's senior secondary examinations for its affiliated
    schools. We describe its commerce stream only in general terms: the board sets the Class 11 and 12 syllabus,
    prescribes the textbooks and writes its own question paper, and its pattern and dates should be read on the
    board's official website, not taken from a CBSE guidebook. A tutor should work from the book in your child's bag
    and the board's recent papers.
  </p>
  <p>
    The medium matters more in accountancy than many parents expect. A Hindi-medium student learns every account name,
    format heading and theory definition in Hindi, and writes the board answers in Hindi too. A tutor who
    switches the student to English terms mid-year, without being asked, creates a second problem on top of the first.
    Tell us the medium, and whether a move to English is planned for later study.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-year">How a Class 11 accountancy year usually unfolds with a tutor</h2>
  <ol>
    <li><strong>First weeks.</strong> The accounting equation and the rules of debit and credit, built from the equation rather than memorised as a rhyme.</li>
    <li><strong>The long middle.</strong> Journal, ledger, special books, bank reconciliation, depreciation and the trial balance. In CBSE this unit alone carries 44 of the 80 theory marks, so it gets the most lessons.</li>
    <li><strong>Rectification of errors.</strong> Classifying each error before writing any entry, so the suspense account closes.</li>
    <li><strong>Financial statements.</strong> Final accounts of a sole proprietor with adjustments, where every adjustment has two effects; CBSE gives this unit 24 marks.</li>
    <li><strong>Revision and project.</strong> Timed full questions with working notes, and support for the project the school sets, which the student must write.</li>
  </ol>
  <p>
    CBSE's question design gives about 40% of marks to recall and understanding, 30% to application and 30% to
    analysis and evaluation. A tutor's weekly written practice is aimed squarely at that last band.
  </p>
  <p>
    A small example shows the kind of slip a tutor catches. A firm buys a machine for ₹1,00,000 on 1 October,
    expects to sell it for ₹10,000 as scrap after nine years, and closes its books on 31 March. Straight-line
    depreciation is ₹90,000 ÷ 9 = ₹10,000 a year, but only six months have passed, so the first year's charge is
    ₹5,000. Students who charge the full ₹10,000, or forget to subtract the scrap value first, carry the error into
    the asset account, the profit and loss account and the balance sheet. Counting the months aloud before writing
    any figure is a habit a tutor can build in a few lessons.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-twelve">Class 12, Business Studies and CUET</h2>
  <p>
    Class 12 CBSE Accountancy is dominated by partnership firms (36 marks) and company accounts (24 marks): goodwill,
    admission, retirement, share capital and debentures. These are long questions where an early slip, such as a
    reversed sacrificing ratio, carries into every account that follows, so a fixed order of working matters. Most
    commerce students also take Business Studies (054), a written subject marked for relevant points and correct
    terms. Say which subject needs help; a specialist for one often serves better than a generalist for both.
  </p>
  <p>
    For central universities, CUET (UG) lists Accountancy / Book Keeping (code 301) among its domain subjects. The
    NTA's 2026 bulletin sets 50 compulsory questions in 60 minutes on the NCERT Class 12 syllabus. The NTA issues a
    new bulletin each cycle, so confirm the details for your child's year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-zones">How tutors reach each Jaipur zone</h2>
  <p>
    The Pink Line, open since June 2015, links Mansarovar in the south-west through Civil Lines and the railway
    station to the old city. The Orange Line is planned and under construction, so the east and south still travel
    by scooter, car or auto.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Jaipur zones and the usual way a visiting tutor gets there</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Metro or road?</th><th scope="col">Share in advance</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park &amp; Vidhyadhar Nagar</a></td><td>Pink Line at the southern edge; road beyond, including the Sikar Road corridor</td><td>Sector number in Vidhyadhar Nagar</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar &amp; Bapu Nagar</a></td><td>Road only</td><td>A landmark on your inner lane</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar &amp; West Jaipur</a></td><td>Pink Line for Nirman Nagar, Shyam Nagar and Sodala; road for Vaishali Nagar</td><td>Gate registration</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar &amp; Sanganer</a></td><td>Pink Line from Mansarovar; road and rail further south</td><td>Scheme or sector with the flat number</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura &amp; Tonk Road</a></td><td>Road; Durgapura and Getor Jagatpura rail stations</td><td>Which side of Tonk Road you live on</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-colonies">Six Jaipur colonies and what to settle for a weekly lesson</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Centre and north</h3>
      <p>
        {!! $jacA('c-scheme', 'C-Scheme') !!} mixes apartment buildings with offices and hotels; give security the
        tutor's name, and avoid office-hour parking. {!! $jacA('vidhyadhar-nagar', 'Vidhyadhar Nagar') !!} runs in
        numbered sectors along a central spine, so the sector number gets the tutor to the right door first time.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>East and west</h3>
      <p>
        {!! $jacA('raja-park', 'Raja Park') !!} has a crowded market road with builder floors behind it; point the
        tutor to a two-wheeler spot off the main road. {!! $jacA('nirman-nagar', 'Nirman Nagar') !!} holds Mansarovar
        station, the Pink Line's western terminal, which brings metro-riding tutors within reach.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South</h3>
      <p>
        {!! $jacA('mansarovar', 'Mansarovar') !!} is large and planned in schemes, with housing board flats and houses;
        similar addresses repeat, so add the scheme. {!! $jacA('jagatpura', 'Jagatpura') !!} is mostly apartments in
        gated complexes near its long flyover; share the tower and flat number with the gate.
      </p>
    </div>
  </div>
  <p>
    For more on each part of the city, read our
    <a href="{{ url('/blog/central-and-north-jaipur-tuition-guide') }}">central and north Jaipur tuition guide</a> and
    the <a href="{{ url('/blog/south-and-west-jaipur-tuition-guide') }}">south and west Jaipur tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-mode">Home or online accountancy in Jaipur?</h2>
  <p>
    Home lessons suit the first year, when a tutor needs to see every ledger line as it is written. Online works once
    the student can photograph homework before the session and keep the notebook in view on a stand or tablet. For
    Computerised Accounting or ISC Section C, online with a shared spreadsheet is usually more practical than a visit.
    We cannot say in advance that a commerce specialist lives in your colony; any Jaipur family can request one, and
    online widens the choice to tutors across India. If you live near a Pink Line station, mention it, because it can
    bring tutors from the far end of the line within reach.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-demo">A checklist for the free demo</h2>
  <ul>
    <li>Did the tutor ask the board, medium, class and Class 12 option before teaching?</li>
    <li>Did your child write most of the entries, with the tutor stopping them at the first wrong step?</li>
    <li>Did the tutor ask for working notes and the board's formats?</li>
    <li>For an RBSE student, did they teach from the board's own textbook and in the right language?</li>
    <li>Could your child explain afterwards why an entry was made?</li>
    <li>Was there a clear practice task and a way to check it at the next lesson?</li>
  </ul>
  <p>
    If not, tell us and we arrange a demo with the next tutor on the shortlist; switching later is free too. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profiles are marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jac-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own
    rates and you see each one before the demo; the <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">Jaipur home
    tuition fees guide</a> explains what moves them.
  </p>
  <p>
    Send us the class, board and medium, the chapters causing trouble, your colony with sector or scheme, free times,
    home or online, and a budget. We reply with two or three tutor profiles, and you choose one for the
    <a href="{{ url('/demo-class') }}">free demo class</a>. Browse by colony on our
    <a href="{{ url('/city/jaipur') }}">Jaipur page</a>; accountancy teachers can find open requests on
    <a href="{{ url('/tuition-jobs/jaipur') }}">Jaipur tuition jobs</a>.
  </p>
  <p>
    Pair this with our <a href="{{ url('/economics-home-tutor-jaipur') }}">economics tutors in Jaipur</a> page.
    For board-wide support see <a href="{{ url('/cbse-home-tutor-jaipur') }}">CBSE tutors in Jaipur</a> and
    <a href="{{ url('/icse-home-tutor-jaipur') }}">ICSE and ISC tutors in Jaipur</a>; for theory answers, our
    <a href="{{ url('/english-home-tutor-jaipur') }}">English tutors in Jaipur</a>; and if commerce comes with maths,
    <a href="{{ url('/maths-home-tutor-jaipur') }}">maths tutors in Jaipur</a>. Students still deciding after Class 10
    can read our <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream-choice guide</a> and see
    how the year is planned on our <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutor page</a>.
  </p>
  </section>

  </div>
</article>
