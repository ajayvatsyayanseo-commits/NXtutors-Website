{{--
  Long-form guide for the "accountancy home tutor Surat" subject page.
  Byline: NXTutors Academic Team. No schools, colleges, societies, developers or
  people are named. Local detail comes only from
  database/seo-content/areas/surat-research.json, surat-zone-guides.json,
  database/seo-content/zones/surat.json and the Surat city hub view (boards: GSEB in
  Gujarati, English or another medium; CBSE; ICSE/ISC; IB and IGCSE; commerce
  students find Accountancy hardest; Class 11 deserves as much effort as Class 12;
  Amroli/Mota Varachha families pair a nearby tutor with an online specialist).
  The GSEB commerce stream is described in general terms only. No claim is made
  about local commerce-tutor supply or demand.

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
  FAQs render from faqs/accountancy-home-tutor-surat.php.
  Area links render only when that Surat area page exists and is active.
--}}
@php
  $acSrSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $acSrA = function (string $slug, string $label) use ($acSrSlugs) {
      return in_array($slug, $acSrSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="acSrGuideTitle">
  <h2 id="acSrGuideTitle">Accountancy tuition in Surat: why Class 11 decides Class 12</h2>

  <p class="nx-guide__lede">
    Our Surat city page makes two points about senior commerce that shape this whole guide. Accountancy is the subject
    commerce students tend to find hardest, and Class 11 deserves as much effort as Class 12 because it lays the
    ground for everything after. Both apply with special force to accountancy: a Class 12 partnership
    question is built entirely from Class 11 entries, ledgers and adjustments. Below you will find which board and
    medium your child is on, how Class 11 chapters feed Class 12, how a tutor reaches each side of the Tapi, and what
    to look for in the free demo. Our national
    <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor guide</a> covers each syllabus in detail.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#acsr-boards">Board and medium</a> ·
    <a href="#acsr-gseb">The GSEB route</a> ·
    <a href="#acsr-chain">From Class 11 to Class 12</a> ·
    <a href="#acsr-cuet">CUET</a> ·
    <a href="#acsr-zones">Zones</a> ·
    <a href="#acsr-mode">Home or online</a> ·
    <a href="#acsr-demo">Demo</a> ·
    <a href="#acsr-fees">Fees and requests</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="acsr-boards">Which board and medium is your child studying in?</h2>
  <p>
    Requests from Surat come under four boards, and our city page asks for the medium of instruction alongside the
    board. For accounting, that pairing narrows the right tutor quickly.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Accounting on the boards Surat commerce students take</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Shape of the paper</th><th scope="col">What to tell us</th></tr>
    </thead>
    <tbody>
      <tr><td>GSEB, Class 12 commerce</td><td>The board's own accounting paper and textbook; follow the board's circulars for the pattern</td><td>Class, medium (Gujarati, English or other) and the school's test calendar</td></tr>
      <tr><td>CBSE 055</td><td>80 theory marks in three hours plus a 20-mark project, both years</td><td>The Class 12 Part B choice: analysis and cash flow, or Computerised Accounting</td></tr>
      <tr><td>ISC 858 (with Commerce 857 as a separate subject)</td><td>80 theory marks; two projects of 10 marks each; Class 12 Section A compulsory for 60</td><td>Whether the school prepares Section B or Section C</td></tr>
      <tr><td>Cambridge IGCSE 0452</td><td>Paper 1, 40 multiple-choice questions; Paper 2, five compulsory structured questions</td><td>The exam series your child is entered for</td></tr>
      <tr><td>Cambridge AS &amp; A Level 9706</td><td>Fundamentals and financial accounting, plus a cost and management accounting paper at A Level</td><td>Whether AS will be carried forward</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The IB Diploma has no separate accounting subject; an IB student needing "accounts" help usually means a Business
    Management unit. See our <a href="{{ url('/ib-tutor-surat') }}">IB tutors in Surat</a> and
    <a href="{{ url('/igcse-tutor-surat') }}">IGCSE tutors in Surat</a> pages for the international programmes, and the
    <a href="{{ url('/cbse-home-tutor-surat') }}">CBSE</a> and <a href="{{ url('/icse-home-tutor-surat') }}">ICSE and
    ISC</a> pages for Surat for board-wide help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acsr-gseb">What should a GSEB commerce tutor bring?</h2>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board conducts the state's public examinations at the end of
    Class 10 and Class 12, and many Surat students study under it. Its commerce students learn accounting from the
    board's own textbook, in Gujarati, English or another medium. The tutor should teach in the same medium and use the
    same account titles and terms as the book, because narrations and theory answers are marked in the paper's
    language. We leave the paper pattern to the board's own circulars, which it revises. Practice should come from the
    board's past papers, and lessons should keep step with the school's unit tests so that each one becomes a checkpoint
    rather than a surprise.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acsr-chain">How do Class 11 chapters feed Class 12?</h2>
  <p>
    The table below traces the chain using CBSE's 2026-27 weightings. ISC students follow a broadly similar path; GSEB
    students should map it against their own textbook.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>If this Class 11 skill is weak, this Class 12 topic suffers</caption>
    <thead>
      <tr><th scope="col">Class 11 skill</th><th scope="col">Class 12 topic that depends on it</th><th scope="col">Marks at stake (CBSE)</th></tr>
    </thead>
    <tbody>
      <tr><td>Journal entries from the accounting equation</td><td>Every partnership and company entry</td><td>All 60 marks of Part A</td></tr>
      <tr><td>Ledger posting and balancing</td><td>Capital accounts, revaluation and realisation accounts</td><td>Within partnership firms (36)</td></tr>
      <tr><td>Adjustments in final accounts</td><td>Revaluation and reserves on admission and retirement</td><td>Within partnership firms (36)</td></tr>
      <tr><td>Depreciation methods</td><td>Asset revaluation; non-cash items in the cash flow statement</td><td>Partnership (36) and cash flow (8)</td></tr>
      <tr><td>Reading a balance sheet</td><td>Ratios and analysis of financial statements</td><td>Analysis (12)</td></tr>
      <tr><td>Computerised Accounting basics (compulsory in Class 11)</td><td>The Computerised Accounting option in Part B</td><td>20, if the school chooses it</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Company accounts show the chain clearly. Say a holder of 100 shares of ₹10 has paid ₹6 a share and fails to pay
    the final call of ₹4, so the shares are forfeited. Share capital is debited with the ₹1,000 called up, calls in
    arrears are credited with the unpaid ₹400, and the ₹600 already received goes to a share forfeiture account. If
    the shares are then reissued at ₹8 each, the bank receives ₹800, ₹200 is taken from the forfeiture account to make
    up the full ₹1,000 of capital, and the remaining ₹400 moves to capital reserve. Every step is a Class 11 skill:
    identifying which accounts are affected, deciding debit or credit, and checking that both sides agree.
  </p>
  <p>
    The lesson is simple: a tutor engaged in Class 11 protects most of the Class 12 paper. A student who arrives in
    Class 12 unsure of the basics needs a few weeks of repair before partnership teaching can stick, and a good tutor
    will say so at the demo rather than pressing on. Families still choosing a stream can read our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a> and the
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 home tutor page</a>; both were written for Gurugram,
    but the stream questions are the same in Surat.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acsr-cuet">Does accountancy count in CUET?</h2>
  <p>
    NTA's CUET (UG) 2026 bulletin lists Accountancy / Book Keeping (code 301) as a domain subject: 50 compulsory
    questions in 60 minutes, set on NCERT's Class 12 syllabus. GSEB and ISC students should compare that syllabus with
    their textbook, and every applicant should read the bulletin for their year. Timed objective practice belongs
    near the end of Class 12, once full board answers are reliable.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acsr-zones">How does a tutor reach your part of Surat?</h2>
  <p>
    Surat's metro is still being built, so tutors travel by two-wheeler, auto or Sitilink bus, and the Tapi bridges are
    the slowest part of many trips. Any family can request an accountancy tutor; we look first on your own bank of the
    river, then widen, and suggest online lessons when that gives a better match.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>West of the Tapi</h3>
  <p>
    In <a href="{{ url('/city/surat/zone/adajan-pal-rander') }}">Adajan, Pal and Rander</a>, a tutor who already lives
    on the western bank avoids the bridges at office hours. For {!! $acSrA('adajan', 'Adajan') !!}, mention if you are
    near Adajan Patiya, where BRTS corridors start; in {!! $acSrA('rander', 'Rander') !!}'s old lanes, send a landmark and
    say where a two-wheeler can be parked.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>The centre and the south-west</h3>
  <p>
    <a href="{{ url('/city/surat/zone/central-surat-athwa-ghod-dod-road') }}">Central Surat, Athwa and Ghod Dod Road</a>
    sits in the middle of the city, so tutors from several zones can reach {!! $acSrA('ghod-dod-road', 'Ghod Dod Road') !!};
    a straight-after-school slot beats the evening shopping crowd. In
    <a href="{{ url('/city/surat/zone/piplod-vesu-dumas-road') }}">Piplod, Vesu and Dumas Road</a>, nearly every home in
    {!! $acSrA('vesu', 'Vesu') !!} is in a gated society, so ask security for a standing visitor entry after the demo. If you live close to Gaurav Path, say so: its BRTS lane
    lets tutors without a vehicle reach Piplod by Sitilink bus.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>South and north-east</h3>
  <p>
    In <a href="{{ url('/city/surat/zone/udhna-althan-pandesara') }}">Udhna, Althan and Pandesara</a>, industrial shift
    changes fill the roads, so agree a time after they clear; a tutor from Bhatar, City Light or Vesu can reach
    {!! $acSrA('althan', 'Althan') !!} without crossing the river. In
    <a href="{{ url('/city/surat/zone/katargam-varachha-sarthana') }}">Katargam, Varachha and Sarthana</a>, diamond-unit
    shift times shape traffic in {!! $acSrA('varachha', 'Varachha') !!}, and families on the northern edge often pair a
    nearby tutor with an online specialist for senior papers.
  </p>
    </div>
  </div>
  <p>
    Every locality has a listing on our <a href="{{ url('/city/surat') }}">Surat home tuition page</a>, and the
    <a href="{{ url('/blog/surat-tuition-guide') }}">Surat tuition guide</a> adds commuting and timing notes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acsr-mode">Home or online accountancy in Surat?</h2>
  <p>
    Home lessons suit Class 11 most, while the tutor still needs to see every entry as it is written. Online lessons
    suit Cambridge courses, the Computerised Accounting option and ISC Section C, where a shared spreadsheet helps, and
    any family whose most suitable tutor lives across the river. For the online part, a
    phone on a stand that shows the notebook clearly is enough, and photos of homework sent the evening before let
    the tutor mark it ahead of the lesson. A common pattern for Class 12 is one long home session
    for partnership or company accounts and one short online session for theory and doubts. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutor</a> article compares the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acsr-demo">What should the demo show you?</h2>
  <ol>
    <li>The tutor asks for board, medium, class and Class 12 option before teaching.</li>
    <li>They check a Class 11 basic (an entry, an adjustment) even with a Class 12 student, to find the real gap.</li>
    <li>Your child writes; the tutor watches, questions and catches the first wrong line.</li>
    <li>Working notes and formats are set out as your board marks them.</li>
    <li>Theory answers are practised in the language of the paper.</li>
    <li>The tutor gives a frank view of how many weeks of repair are needed, if any.</li>
  </ol>
  <p>
    If it is not the right fit, we arrange the next tutor on your shortlist; switching is free. See our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acsr-fees">What does it cost, and how do you ask for a tutor?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fees,
    and every shortlisted fee is shown before the demo. Our
    <a href="{{ url('/blog/home-tuition-fees-surat') }}">Surat home tuition fees guide</a> and
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain the range.
  </p>
  <p>
    Send the class, board and medium, the chapters that are hurting, your locality with the nearest junction or BRTS
    stop, times, home or online, and a budget. We return two or three matched tutors and the first class is a free
    <a href="{{ url('/demo-class') }}">demo</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. For economics, see <a href="{{ url('/economics-home-tutor-surat') }}">economics tutors in Surat</a>;
    for English, <a href="{{ url('/english-home-tutor-surat') }}">English home tutors in Surat</a>; for maths,
    <a href="{{ url('/maths-home-tutor-surat') }}">maths home tutors in Surat</a>. Accountancy teachers can find
    students on <a href="{{ url('/tuition-jobs/surat') }}">Surat tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
