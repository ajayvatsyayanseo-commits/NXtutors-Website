{{--
  "Accountancy home tutor Patna" subject page. Byline: NXTutors Academic Team.
  No school, society, person, institute or company is named.

  Board facts reuse the checked statements on the national accountancy-home-tutor
  page, which cites (read 1 Oct 2026):
  - CBSE Accountancy (055) XI-XII 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf
    (XI: theoretical framework 12, accounting process 44, financial statements 24,
    project 20; XII: partnership 36, companies 24, Part B 20 or Computerised
    Accounting; CAS compulsory in XI; GST basics in XI).
  - CBSE Business Studies (054) 2026-27, cbseacademic.nic.in.
  - CISCE ISC Accounts (858) and Commerce (857), cisce.org/wp-content/uploads/2025/04/.
  - Cambridge IGCSE Accounting 0452 and AS & A Level 9706, cambridgeinternational.org.
  - IBO DP subject list (no separate accounting course).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in (301 Accountancy /
    Book Keeping; 50 compulsory questions in 60 minutes; NCERT Class XII).
  BSEB intermediate commerce is described generally only, as on the Patna hub.
  Local facts only from database/seo-content/areas/patna-research.json and
  patna-zone-guides.json. No claim of local commerce-tutor supply or demand.
--}}
@php
  $pacSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pacA = function (string $slug, string $label) use ($pacSlugs) {
      return in_array($slug, $pacSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pac-guide" aria-labelledby="pacGuideTitle">
  <h2 id="pacGuideTitle">Accountancy home tutor in Patna: three answers we need before we match</h2>

  <p class="nx-guide__lede">
    Before NXTutors suggests an accountancy tutor in Patna, we ask three things. Which board: the Bihar board's
    intermediate commerce course, CBSE, ISC or a Cambridge syllabus? Which language does your child write answers in,
    Hindi, English or a mix? And where do you live, down to the colony and a landmark? With those answers we send two or
    three tutors who can visit or teach online, each with a fee you can see, and the first class with your chosen tutor
    is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pac-boards">Boards compared</a> ·
    <a href="#pac-bseb">Bihar board commerce</a> ·
    <a href="#pac-first">The first eight weeks</a> ·
    <a href="#pac-twelve">Class 12 priorities</a> ·
    <a href="#pac-coaching">School, coaching and a tutor</a> ·
    <a href="#pac-where">Six localities</a> ·
    <a href="#pac-mode">Home or online</a> ·
    <a href="#pac-demo">The demo</a> ·
    <a href="#pac-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pac-boards">How do the accountancy papers compare across boards?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 accountancy in Patna: the paper and the choice to confirm with the school</caption>
    <thead>
      <tr><th scope="col">Board and course</th><th scope="col">The paper in brief</th><th scope="col">Confirm with the school</th></tr>
    </thead>
    <tbody>
      <tr><td>BSEB intermediate, commerce stream</td><td>Set by the Bihar School Examination Board from its own syllabus and books</td><td>The current syllabus, model papers and medium of answers</td></tr>
      <tr><td>CBSE Accountancy (055)</td><td>80 theory marks in three hours, 20 for projects, in both classes; NCERT books</td><td>In Class 12, financial statement analysis or Computerised Accounting as Part B</td></tr>
      <tr><td>CBSE Business Studies (054)</td><td>Its own 80-mark paper and 20-mark project</td><td>Whether help is needed in this subject as well</td></tr>
      <tr><td>ISC Accounts (858) and Commerce (857)</td><td>80 theory marks: 20 short-answer marks, then five long questions from eight; two 10-mark projects</td><td>In Class 12 Accounts, Section B (analysis and cash flow) or Section C (spreadsheets and databases)</td></tr>
      <tr><td>Cambridge IGCSE 0452 and A Level 9706</td><td>IGCSE: two papers, multiple choice and structured. A Level: four papers, one on cost and management accounting</td><td>Whether the A Level is being taken in one series or staged</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    IB schools teach no stand-alone accounting course; the nearest IB subjects are Business Management and Economics.
    If your child is in an IB programme, name the Business Management unit that needs help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-bseb">Intermediate commerce on the Bihar board</h2>
  <p>
    The Bihar School Examination Board conducts the matric examination at Class 10 and the intermediate examination at
    Class 12, and its commerce stream follows the board's own syllabus, prescribed books and question pattern. We do
    not reproduce those details here, because the board publishes them and revises them, so take them only from its
    official website and notices.
  </p>
  <p>
    What a family can ask of a tutor is clear enough. The tutor should know the board's current paper, bring its model
    and past papers, and teach in the language your child will write in. Many Patna students are comfortable in Hindi,
    some in English and many in a mix; accountancy terms are often learnt in one language and written in the other, so
    a tutor who can explain "debit" and "credit" both ways saves weeks of confusion. Say which medium the answers use
    when you send the request.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-first">The first eight weeks of Class 11 accountancy</h2>
  <p>
    Accountancy is new to almost every Class 11 student, and later chapters assume the early ones. Under the 2026-27
    CBSE curriculum, the accounting process unit alone carries 44 marks in Class 11. A sensible opening plan with a home
    tutor, whatever the board:
  </p>
  <ol>
    <li><strong>Weeks 1–2:</strong> the accounting equation. Every transaction is shown changing assets, liabilities or capital before any journal entry is written.</li>
    <li><strong>Weeks 3–4:</strong> journal entries derived from the equation, with narrations; source documents and vouchers on the CBSE route.</li>
    <li><strong>Weeks 5–6:</strong> posting to the ledger and balancing accounts; a short trial balance built by the student alone.</li>
    <li><strong>Weeks 7–8:</strong> the cash book and bank reconciliation, worked from the firm's side and then the bank's side of each item.</li>
  </ol>
  <p>
    Two CBSE details worth knowing early: Computerised Accounting is compulsory for commerce students in Class 11, and
    basic GST calculations come into recording transactions in that year. A tutor who ignores either leaves gaps that
    show up in school tests.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-twelve">Class 12: where the weight falls</h2>
  <p>
    On CBSE, partnership firms carry 36 of the 80 theory marks and company accounts 24. On ISC, partnership and joint
    stock company accounts form Section A, worth 60 and compulsory. Either way, partnership is where the year is won or
    lost. Admission, retirement and death of a partner are long questions in which one reversed ratio spoils every
    account that follows. Students who write a working note for each step keep partial marks; those who do it all in
    their heads lose the lot.
  </p>
  <p>
    Company accounts come next: issue of shares and debentures, forfeiture and reissue. The CBSE project in Class 12 is
    a financial statement analysis worth 20 (a file of 12 and a viva of 8), and the work must be the student's own. Our
    <a href="{{ url('/cbse-home-tutor-patna') }}">CBSE home tutor in Patna</a> and
    <a href="{{ url('/icse-home-tutor-patna') }}">ICSE and ISC home tutor in Patna</a> pages cover the other subjects
    on each board.
  </p>
  <p>
    The remaining 20 theory marks reward a different skill. On the analysis route, students compute ratios and sort
    cash flows into operating, investing and financing activities; most errors come from using the wrong figure inside
    a formula or putting an item under the wrong activity. A tutor fixes that by having the student build a personal
    formula sheet and classify a long list of items quickly, aloud, until the choice is automatic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-coaching">School, coaching and a home tutor in one week</h2>
  <p>
    Many Patna commerce students already attend school and a coaching batch. A home tutor earns a place only by doing
    something neither of those does: watching the student write, line by line, and correcting the method at the first
    wrong step. If your child is in coaching, tell the tutor the batch timetable so sessions revise and practise what
    the batch has taught, rather than teaching the chapter a third time.
  </p>
  <p>
    Coaching hours also shape traffic. Bhootnath Road and the market roads in the Kankarbagh zone fill when batches
    change over, and the Boring Road crossing is the slow point in the evening. Fix a home session either side of those
    windows, or with a tutor who lives in your own colony.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-where">How does a tutor reach six Patna localities?</h2>
  <p>
    The metro serves only part of the city so far, so most tutors ride in by two-wheeler, auto or car. Six localities
    across all five zones show what to plan for; the <a href="{{ url('/city/patna') }}">Patna home tuition page</a>
    covers every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting an accountancy tutor to six Patna localities</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How tutors usually come</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pacA('shivpuri', 'Shivpuri') !!}</td><td>By road; no metro station in this zone yet</td><td>The temple draws a Thursday crowd, so pick another evening or an earlier hour</td></tr>
      <tr><td>{!! $pacA('rukanpura', 'Rukanpura') !!}</td><td>Bailey Road, near Patliputra Junction</td><td>Expect construction barriers on parts of Bailey Road while the Red Line is built</td></tr>
      <tr><td>{!! $pacA('khagaul', 'Khagaul') !!}</td><td>By road from the Danapur side, or rail to Danapur station</td><td>A tutor from the same stretch of Bailey Road is the easiest match</td></tr>
      <tr><td>{!! $pacA('kadamkuan', 'Kadamkuan') !!}</td><td>Two-wheeler through central lanes near the station</td><td>A precise lane landmark, because parking and lanes are tight</td></tr>
      <tr><td>{!! $pacA('bankipur', 'Bankipur') !!}</td><td>The riverfront expressway or Ashok Rajpath</td><td>The building gate needs the tutor's name; big events at Gandhi Maidan slow the area</td></tr>
      <tr><td>{!! $pacA('gardanibagh', 'Gardanibagh') !!}</td><td>By road, close to Patna Junction</td><td>Block and flat number for government housing campuses, and a word to the gate</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone guides for <a href="{{ url('/city/patna/zone/bailey-road-danapur') }}">Bailey Road and Danapur</a>,
    <a href="{{ url('/city/patna/zone/gandhi-maidan-ashok-rajpath-old-patna') }}">Gandhi Maidan, Ashok Rajpath and
    Old Patna</a> and <a href="{{ url('/city/patna/zone/anisabad-gardanibagh-phulwari') }}">Anisabad, Gardanibagh and
    Phulwari</a> go further, as does our <a href="{{ url('/blog/south-and-old-patna-tuition-guide') }}">South and Old
    Patna tuition guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-mode">Home or online for accountancy in Patna?</h2>
  <p>
    Home tuition suits accountancy because the subject lives on paper, in columns, and the tutor needs to see every
    line. That matters most in Class 11. Online lessons work when the student sends photos of homework in advance and
    keeps the notebook in camera view; for the Computerised Accounting option they can be better than a visit, since
    both people share one spreadsheet.
  </p>
  <p>
    We do not promise a commerce specialist in every colony. Families anywhere in the city can request one; when no
    suitable tutor can reach you at your hour, online widens the choice to tutors elsewhere in Patna or beyond. A
    common pattern is home sessions for partnership and final accounts and short online sessions for theory and
    doubts. See <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> for more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-demo">Six things to watch in the free demo</h2>
  <ol>
    <li>Does the tutor confirm the board, the medium of answers and any Class 12 option before starting?</li>
    <li>Does your child write for most of the hour, with working notes?</li>
    <li>Is a mistake traced back to its cause, such as a misread transaction, rather than just corrected?</li>
    <li>Can the tutor explain an entry in both Hindi and English if your child needs it?</li>
    <li>For a BSEB student, does the tutor use the board's own model papers?</li>
    <li>Does the class end with set practice and a date to review it?</li>
  </ol>
  <p>If the answers disappoint, we arrange a demo with the next tutor on your shortlist. Switching later costs nothing.</p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pac-fees">What does an accountancy tutor in Patna charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor names a
    personal rate, shown before the demo. Our <a href="{{ url('/blog/home-tuition-fees-patna') }}">Patna home tuition
    fees</a> article explains the pattern.
  </p>
  <p>
    For students aiming at central universities, the NTA's CUET (UG) 2026 bulletin includes Accountancy / Book Keeping
    (code 301) as a domain subject: 50 compulsory questions in 60 minutes on NCERT's Class 12 syllabus. Check the
    bulletin for your year. Undecided about commerce? Our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream guide</a> and
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 tutoring page</a> were written for Gurugram, but the
    advice on choosing a stream holds in Patna.
  </p>
  <p>
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Most commerce students take economics too, so see our <a href="{{ url('/economics-home-tutor-patna') }}">economics
    tutor in Patna</a> page; the national <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor</a>
    guide has a chapter-by-chapter table, and our <a href="{{ url('/english-home-tutor-patna') }}">English</a> and
    <a href="{{ url('/maths-home-tutor-patna') }}">maths</a> pages cover other subjects. Teachers can find open
    requests on <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
