{{--
  Long-form guide for the "accountancy home tutor Delhi" page. Byline: NXTutors
  Academic Team. No schools, coaching institutes, societies, developers or
  people are named. Local detail comes only from
  database/seo-content/areas/delhi-research.json, delhi-zone-guides.json,
  database/seo-content/zones/delhi.json and the Delhi city hub view (CBSE for
  most students, ICSE/ISC sizeable, a smaller IB/IGCSE group). No Delhi state
  board is described; families arriving from another state's board are
  mentioned in general terms only. No claim is made about local supply of or
  demand for commerce tutors.

  Official exam facts, reused from the national accountancy-home-tutor page
  (read 1 Oct 2026):
  - CBSE Accountancy (055) XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf):
    80 theory + 20 project each year; XI units 12 / 44 / 24; XII partnership 36,
    companies 24, then analysis 12 + cash flow 8 OR Computerised Accounting;
    CAS compulsory in XI; GST treatment confined to XI.
  - CBSE Business Studies (054), cbseacademic.nic.in.
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org: 80 theory + two
    10-mark projects; XII Accounts Section A 60, then Section B or C (20).
  - Cambridge IGCSE Accounting 0452 (2027-2029) and AS & A Level Accounting
    9706 (2026-2028), cambridgeinternational.org.
  - IBO DP subject list: no separate accounting course.
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in: domain subject
    301 Accountancy / Book Keeping; 50 compulsory questions in 60 minutes;
    NCERT Class XII syllabus. No dates given.
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/accountancy-home-tutor-delhi.php.
  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $acDlSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $acDl = function (string $slug, string $label) use ($acDlSlugs) {
      return in_array($slug, $acDlSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="acDlGuideTitle">
  <h2 id="acDlGuideTitle">Accountancy tuition in Delhi: start with the ledger, then the metro line</h2>

  <p class="nx-guide__lede">
    A Delhi commerce student usually asks for an accountancy tutor at one of three moments: a few weeks into Class
    11, when journal entries stop making sense; in Class 12, when partnership admission and retirement questions
    run to three pages; or in the last months before the boards, when the paper has to be finished inside three
    hours. Each moment needs a slightly different tutor, and in a city this size the tutor also has to reach your
    colony at a sensible hour. You can request an accountancy tutor from anywhere in Delhi; NXTutors sends two or
    three profiles that fit the board and your part of the city, shows each fee first, and the first class with
    the tutor you choose is a free demo. Where nobody suitable can travel to you, online lessons widen the choice.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#acdl-new">A new subject</a> ·
    <a href="#acdl-boards">Commerce boards in Delhi</a> ·
    <a href="#acdl-option">The Class 12 option</a> ·
    <a href="#acdl-cuet">CUET</a> ·
    <a href="#acdl-zones">Reaching your zone</a> ·
    <a href="#acdl-mode">Home or online</a> ·
    <a href="#acdl-demo">The demo</a> ·
    <a href="#acdl-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="acdl-new">Why Class 11 accountancy catches Delhi students out</h2>
  <p>
    Almost every other subject in the commerce timetable builds on something a child met in Class 10. Accountancy
    does not. In the first term a student meets a new vocabulary (capital, drawings, liabilities, vouchers), a new
    habit of thought (every transaction has two sides) and a set of layouts that must be drawn exactly. Students who
    switched to commerce after a science or general Class 10 often find the first unit test the hardest of the year,
    not because the arithmetic is difficult but because the rules were memorised rather than understood.
  </p>
  <p>
    The fix is rarely more questions. A tutor sits beside the student, asks why rent is debited or why capital
    sits on the credit side, and goes back to the accounting equation until the answer comes without a rhyme. Once
    that base is secure, the later chapters (bank reconciliation, depreciation, rectification, final accounts with
    adjustments) become procedures the student can check for themselves. If your child is choosing a stream right
    now rather than already in Class 11, our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a Class 11 stream</a> explains what
    commerce involves, and our <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutoring page</a> sets out
    how the step up from Class 10 feels in each stream. Both were written for Gurugram families, but the stream
    advice holds in any city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acdl-boards">How is commerce examined across the boards Delhi students sit?</h2>
  <p>
    CBSE is the board most Delhi students take, CISCE's ISC has a sizeable following, and a smaller group study
    Cambridge or IB programmes. Some families also arrive in Delhi mid-school from a state board elsewhere in India,
    where the commerce stream follows that board's own syllabus and pattern. The accountancy paper looks different
    on each route, so the first thing a tutor should ask is which one your child is on.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 accounting and commerce papers a Delhi tutor may be asked to teach</caption>
    <thead>
      <tr><th scope="col">Route</th><th scope="col">Paper and structure</th><th scope="col">Ask the tutor about</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Accountancy (055)</td><td>80-mark theory paper and a 20-mark project in each class; Class 11 is mostly the accounting process (44 of 80); Class 12 opens with partnership (36) and companies (24)</td><td>Partnership sequences and working notes</td></tr>
      <tr><td>CBSE Business Studies (054)</td><td>A separate written paper that most commerce students take alongside accountancy</td><td>Whether they teach it too, or only accounts</td></tr>
      <tr><td>ISC Accounts (858) and Commerce (857)</td><td>80-mark theory paper plus two projects of 10 marks each; Accounts Class 12 has a compulsory 60-mark Section A, then a choice of Section B or C</td><td>Which 20-mark section the school prepares</td></tr>
      <tr><td>Cambridge IGCSE Accounting (0452)</td><td>A multiple-choice paper and a structured written paper, untiered</td><td>Recent Cambridge teaching</td></tr>
      <tr><td>Cambridge AS &amp; A Level Accounting (9706)</td><td>Four papers, with cost and management accounting examined on its own at A Level</td><td>Costing and budgeting depth</td></tr>
      <tr><td>IB Diploma</td><td>No separate accounting course; finance questions sit inside Business Management</td><td>The exact IB unit, not "accounts" in general</td></tr>
      <tr><td>Another state's board</td><td>A commerce stream in Classes 11–12 set to that board's own syllabus</td><td>Bridging the format change on arrival in Delhi</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a fuller account of every board, with unit marks and paper timings, read our national
    <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor guide</a>. Families sorting out the wider
    board picture can also see our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE tutors in Delhi</a> and
    <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE and ISC tutors in Delhi</a> pages.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acdl-option">The Class 12 choice to settle before you hire anyone</h2>
  <p>
    Both Indian boards split the last 20 theory marks of Class 12 accountancy into two possible routes. Under CBSE, a
    student takes either the analysis of financial statements with the cash flow statement, or Computerised
    Accounting, which swaps the project for practical work. Under ISC, Section B covers analysis and cash flow while
    Section C covers spreadsheets and database work. A tutor who teaches ratio analysis brilliantly may never have
    opened an accounting package with a student, and the reverse is just as common.
  </p>
  <p>
    So check with the school first, then tell us which route it is. Two smaller details from the CBSE document are
    worth knowing too: Computerised Accounting is compulsory for every commerce student in Class 11, and the
    accounting treatment of GST is confined to Class 11, so a Class 12 student does not need a tutor to revisit it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acdl-cuet">Accountancy for CUET (UG)</h2>
  <p>
    Many Delhi students also sit CUET (UG) for university admission. In the NTA's 2026 information bulletin,
    Accountancy / Book Keeping is domain subject 301: 50 questions, all compulsory, in 60 minutes, set on NCERT's
    Class 12 syllabus. The content is the board syllabus; the skill is different. A board answer earns marks for
    complete formats and working notes, while a CUET question rewards spotting the right treatment fast and getting
    the arithmetic right first time. A tutor can add timed objective practice once the board chapters are secure.
    Check the bulletin for the year your child applies, since the NTA issues a new one every cycle.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acdl-zones">How an accountancy tutor reaches your part of Delhi</h2>
  <p>
    Delhi is split into twelve zones on our <a href="{{ url('/city/delhi') }}">Delhi page</a>, and the shortlist for
    each starts with tutors living nearby, then tutors who travel there, then the rest of the city, then online.
    Senior commerce lessons often run after school and coaching, so the evening road matters as much as the
    distance.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Dwarka and West Delhi</h3>
  <p>
    In <a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a> most homes sit inside cooperative societies, so the
    gate, not the ride, is what costs time; {!! $acDl('dwarka-sector-11', 'Dwarka Sector 11') !!} has its own Blue
    Line station. In the <a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri,
    Rajouri Garden and Punjabi Bagh</a> zone, {!! $acDl('janakpuri', 'Janakpuri') !!} sits where the Blue and Magenta
    Lines meet, though market parking makes driving slow.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>South Delhi</h3>
  <p>
    For <a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar and Hauz Khas</a>,
    most tutors arrive on the Yellow Line; {!! $acDl('saket', 'Saket') !!} mixes row houses and DDA flats, and the
    Mehrauli-Badarpur Road fills in the evening. In {!! $acDl('chittaranjan-park', 'Chittaranjan Park') !!}, part of
    the <a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji and CR Park</a> zone, Kalkaji
    Mandir is the hub, and festival weeks bring heavy crowds.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Rohini and the north-west</h3>
  <p>
    <a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a> is three lines in one: the Red Line in the south, the
    Yellow Line to the north and the newer Magenta stops along the Outer Ring Road. In
    {!! $acDl('rohini-sector-9', 'Rohini Sector 9') !!}, RWA-run societies log visitors, so give sector, pocket and
    flat together, since block names repeat across sectors.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>East Delhi</h3>
  <p>
    In the <a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar and
    Shahdara</a> zone, the Blue Line along Vikas Marg serves {!! $acDl('preet-vihar', 'Preet Vihar') !!}, a plotted
    colony of floors. Laxmi Nagar, known for its commerce-exam coaching streets, crowds up in the evening, and Vikas
    Marg is heavy when offices close, so an earlier slot travels better.
  </p>
      </div>
    </div>
  <p>
    Our neighbourhood guides go further: <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and
    West Delhi</a>, <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a>,
    <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acdl-mode">Home or online accountancy lessons in Delhi?</h2>
  <p>
    Accountancy is written in columns, and much of the teaching is a tutor watching a ledger take shape and stopping
    the pen at the first wrong posting. That makes home lessons a natural fit while Class 11 foundations are being
    laid. Online lessons work well too, as long as the tutor can see the notebook clearly (a phone on a stand, or a
    writing tablet) and homework photos arrive before the session. For Computerised Accounting or ISC Section C,
    screen sharing is often better than a home visit, because both people can work in the same spreadsheet.
  </p>
  <ul>
    <li><strong>Class 11, first term:</strong> home lessons, if a tutor can reach you without crossing the city at rush hour.</li>
    <li><strong>Class 12 partnership and company accounts:</strong> either works; long questions need a clear view of every line.</li>
    <li><strong>Revision and CUET practice:</strong> short online sessions fit around school, coaching and mock tests.</li>
  </ul>
  <p>
    A hybrid plan, one home session a week and one online, is often what makes a specific tutor possible when they
    live on the far side of the Yamuna or the Ridge. Families can always request home tuition; online lessons
    simply widen the choice when the nearest suitable tutor is too far away.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acdl-demo">What to check in the free accountancy demo</h2>
  <p>
    The demo is a normal lesson on whatever your child is studying that week. Have a recent test paper or homework
    notebook ready, and afterwards ask yourself:
  </p>
  <ol>
    <li>Did the tutor ask for the board, the class and the Class 12 option before teaching?</li>
    <li>Did your child hold the pen for most of the hour?</li>
    <li>When an entry went wrong, did the tutor ask a question that led your child to the mistake?</li>
    <li>Did they insist on working notes and the board's formats?</li>
    <li>Could they explain why an entry is made, not only how?</li>
    <li>For Class 12, did they mention the project or practical work and make clear it must be your child's own?</li>
    <li>Did the lesson end with a specific practice task and a way to check it?</li>
  </ol>
  <p>
    If most answers are no, tell us and we arrange a demo with the next tutor on the shortlist. Switching later is
    free too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acdl-fees">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, and travel time at your slot can move it. You see every shortlisted fee before the demo, and our
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi home tuition fees guide</a> explains the rest.
  </p>
  <p>
    Send us the class and board, the Class 12 option if relevant, the chapters that hurt, your colony with block or
    pocket, the nearest metro station, free days and a budget. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live, and you can book a
    <a href="{{ url('/demo-class') }}">free demo class</a> with the one you prefer. Commerce students who also need
    economics help can see our <a href="{{ url('/economics-home-tutor-delhi') }}">economics tutors in Delhi</a>
    page; for English, see <a href="{{ url('/english-home-tutor-delhi') }}">English tutors in Delhi</a>; and if maths
    is part of the timetable, <a href="{{ url('/maths-home-tutor-delhi') }}">maths tutors in Delhi</a>. Younger
    siblings can use our <a href="{{ url('/science-home-tutor-delhi') }}">science tutors in Delhi</a>.
  </p>
  <p>
    Accountancy teachers who would like to take students in Delhi can see open requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
