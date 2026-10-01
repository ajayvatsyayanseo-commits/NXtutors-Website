{{--
  Long-form guide for the "commerce home tutor Delhi" page: the Class 11-12
  commerce bundle (accountancy, business studies, economics, maths or applied
  maths, English) for CBSE and ISC, with notes on Cambridge and IB. Byline:
  NXTutors Academic Team. No schools, colleges, coaching institutes, societies
  or people are named. No claim is made about local commerce-tutor supply or
  demand. No Delhi state board is described (CBSE is the main board per the
  Delhi hub); families arriving from another state's board are mentioned in
  general terms only. Kept distinct from commerce-home-tutor-mumbai.

  Official sources (reused as stated on accountancy-home-tutor-delhi,
  economics-home-tutor-delhi and the national pages, read 1 Oct 2026):
  - CBSE Accountancy (055) XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Accountancy_SecP2_2026-27.pdf):
    80 theory + 20 project each year; XII partnership 36, companies 24, then
    analysis 12 + cash flow 8 OR Computerised Accounting.
  - CBSE Business Studies (054) and Economics (030) 2026-27, cbseacademic.nic.in:
    80 + 20; Economics XI statistics 40 + microeconomics 40, XII macroeconomics
    40 + Indian Economic Development 40, project 20 (3,500-4,000 words).
  - CBSE Senior Secondary Curriculum 2026-27, Part 2: Mathematics (041) or
    Applied Mathematics (241), any one, 80 + 20.
  - CISCE ISC Accounts (858), Commerce (857), Economics (856), cisce.org: 80
    theory + two 10-mark projects; XII Accounts Section A 60, then Section B
    or C (20); ISC Economics Part I 20 compulsory, Part II five of eight at 12.
  - Cambridge IGCSE Accounting 0452 and AS & A Level Accounting 9706,
    cambridgeinternational.org; IBO DP subject list: no separate accounting
    course; DP Economics at SL and HL (ibo.org).
  - NTA CUET (UG) 2026 Information Bulletin, cuet.nta.nic.in: domain subjects
    301 Accountancy / Book Keeping and 309 Economics / Business Economics, with
    Business Studies among the domain subjects; 50 compulsory questions in 60
    minutes on the NCERT Class XII syllabus. No dates given.
  - ICAI CA Foundation (new scheme), icai.org/post/foundation-nset: Paper 1
    Accounting, Paper 2 Business Laws, Paper 3 Quantitative Aptitude, Paper 4
    Business Economics. Eligibility and dates are not stated.
  Local detail only from database/seo-content/zones/delhi.json,
  delhi-zone-guides.json, delhi-research.json and the Delhi city hub view
  (Laxmi Nagar known for accountancy and company secretary coaching; Old
  Rajinder Nagar and Mukherjee Nagar as civil-services coaching hubs).
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/commerce-home-tutor-delhi.php.
  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $dcmSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dcmA = function (string $slug, string $label) use ($dcmSlugs) {
      return in_array($slug, $dcmSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dcmGuideTitle">
  <h2 id="dcmGuideTitle">Commerce tuition in Delhi: accounts, economics and business studies, planned as one stream</h2>

  <p class="nx-guide__lede">
    A commerce student in Class 11 meets three or four new subjects at once. Accountancy builds week on week,
    economics swings between graphs and long answers, business studies rewards precise terms, and the maths choice
    shapes what comes after school. CBSE is the board most Delhi students sit, and ISC has a sizeable following. This guide
    sets out the subjects on each board, how a tutor should approach them, whether one tutor or two makes sense, how
    to plan the two years, where CUET and CA Foundation fit, and how to find commerce tutors who can reach your colony.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dcm-subjects">Subjects by board</a> ·
    <a href="#dcm-accounts">Accountancy</a> ·
    <a href="#dcm-econ">Economics and BST</a> ·
    <a href="#dcm-maths">The maths choice</a> ·
    <a href="#dcm-tutors">One tutor or two</a> ·
    <a href="#dcm-plan">Two-year plan</a> ·
    <a href="#dcm-session">A good session</a> ·
    <a href="#dcm-after">CUET and CA</a> ·
    <a href="#dcm-zones">Reaching you</a> ·
    <a href="#dcm-mode">Home or online</a> ·
    <a href="#dcm-demo">The demo</a> ·
    <a href="#dcm-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dcm-subjects">Which commerce subjects will your child take?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 commerce subjects on the boards Delhi students follow</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Core commerce subjects</th><th scope="col">Marks pattern to tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Accountancy (055), Business Studies (054), Economics (030), with Mathematics (041) or Applied Mathematics (241), and English</td><td>80 theory + 20 project or internal marks in each of these subjects</td></tr>
      <tr><td>ISC (CISCE)</td><td>Accounts (858), Commerce (857), Economics (856), with English compulsory and other electives</td><td>80 theory + two 10-mark projects</td></tr>
      <tr><td>Cambridge</td><td>IGCSE Accounting (0452) earlier; AS &amp; A Level Accounting (9706) and Economics in the senior years</td><td>Fully examined papers set by Cambridge</td></tr>
      <tr><td>IB Diploma</td><td>No separate accounting course; Economics at SL or HL</td><td>Exams plus an internal assessment</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students who move to Delhi from another state's board usually find the content familiar but the question style
    and marking new. A tutor's first weeks should go on the new board's format, not on chapters already learned.
    See our <a href="{{ url('/cbse-home-tutor-delhi') }}">CBSE</a> and <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE
    and ISC</a> pages for Delhi.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-accounts">How should a tutor approach accountancy?</h2>
  <p>
    Accountancy is the subject where commerce students most often need a tutor, because every chapter rests on the one
    before. A student who is unsure of journal entries in Class 11 will struggle with partnership accounts in Class 12.
    On CBSE, the Class 12 paper gives 36 marks to partnership firms and 24 to company accounts; the remaining 20 come
    either from analysis of financial statements and cash flow, or from Computerised Accounting, depending on the
    option the school offers. On ISC, the Class 12 Accounts paper has a 60-mark Section A and then either Section B or
    Section C for the rest.
  </p>
  <ul>
    <li><strong>Formats first:</strong> ledger, trial balance, the appropriation account and capital accounts should become automatic.</li>
    <li><strong>Working notes shown:</strong> marks are given for working; a tutor should insist on it.</li>
    <li><strong>The project done by the student,</strong> with the tutor guiding the plan and checking the logic.</li>
  </ul>
  <p>
    Our <a href="{{ url('/accountancy-home-tutor-delhi') }}">accountancy home tutors in Delhi</a> page goes chapter by
    chapter; the national <a href="{{ url('/accountancy-home-tutor') }}">accountancy tutor</a> page covers all boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-econ">Economics and business studies: different skills</h2>
  <p>
    CBSE Economics is split into statistics and microeconomics in Class 11 (40 marks each) and macroeconomics and Indian
    Economic Development in Class 12 (40 each), with a 20-mark project of 3,500 to 4,000 words. Diagrams, numericals
    and long answers all appear, so a tutor has to cover reasoning as well as definitions. ISC Economics has a
    compulsory 20-mark Part I and a choice of five questions from eight in Part II.
  </p>
  <p>
    Business studies is more about precise vocabulary and case-based answers than calculation; many students manage
    it with occasional help. Our <a href="{{ url('/economics-home-tutor-delhi') }}">economics home tutors in Delhi</a>
    page has more, alongside the national <a href="{{ url('/economics-home-tutor') }}">economics tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-maths">Mathematics or Applied Mathematics in commerce?</h2>
  <p>
    On CBSE a student takes either Mathematics (041) or Applied Mathematics (241), not both. The two courses
    have different syllabuses and question styles, set out in CBSE's senior secondary curriculum, and the choice made in
    Class 11 carries through to the Class 12 board exam. Check what the university courses your child is considering ask for before choosing, and choose a tutor
    who knows the exact course: the two are taught differently. Our <a href="{{ url('/maths-home-tutor-delhi') }}">maths
    home tutors in Delhi</a> page covers both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-tutors">One commerce tutor or two?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Ways to cover the commerce stream with home tutors in Delhi</caption>
    <thead>
      <tr><th scope="col">Arrangement</th><th scope="col">Suits</th><th scope="col">Watch for</th></tr>
    </thead>
    <tbody>
      <tr><td>One tutor for accounts, economics and business studies</td><td>A student a little behind in all three; simpler scheduling</td><td>Check depth in economics diagrams and numericals, not just accounts</td></tr>
      <tr><td>An accounts specialist plus self-study for the rest</td><td>A student whose only real gap is accountancy</td><td>Business studies and economics still need a revision timetable</td></tr>
      <tr><td>Two specialists: accounts, and economics with maths</td><td>High targets, or weakness in both quantitative subjects</td><td>Two schedules to fit around school and any coaching</td></tr>
      <tr><td>Home tutor plus an online specialist</td><td>Homes far from a station, or a rare need such as Cambridge 9706</td><td>Agree how the two tutors share the student's week</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-plan">Planning Class 11 and Class 12</h2>
  <ol>
    <li><strong>Class 11, first term:</strong> accounting basics until journal entries and ledgers are automatic; statistics and microeconomics concepts with diagrams.</li>
    <li><strong>Class 11, second term:</strong> financial statements; project work started early.</li>
    <li><strong>Class 12, April to September:</strong> partnership and company accounts; macroeconomics; the project completed before the busy months.</li>
    <li><strong>Class 12, October onwards:</strong> analysis and cash flow, or the computerised option; full papers against the marking scheme.</li>
    <li><strong>Alongside:</strong> CUET domain practice, if your child is applying, using the same NCERT Class 12 base.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-session">What a good commerce session contains</h2>
  <p>
    A 90-minute session that covers accounts and one theory subject might run like this: fifteen minutes of quick
    journal entries or adjustments from memory, forty minutes on the week's hardest accounts topic with the student
    drawing every format, twenty minutes on an economics diagram or a business studies case, and the last fifteen on
    marking one written answer against the board's scheme. The student leaves with a short set of questions to do
    before the next visit, and the tutor checks it first thing next time. Over a term, that rhythm builds the speed
    and accuracy that commerce papers reward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-after">Where do CUET and CA Foundation fit?</h2>
  <p>
    The NTA's CUET (UG) bulletin lists Accountancy / Book Keeping (301) and Economics / Business Economics (309) among
    the domain subjects, with Business Studies also offered. Each domain test has 50 compulsory questions in 60
    minutes, on the NCERT Class 12 syllabus. Good board preparation is most of the work; a tutor adds timed practice
    in the final months. Our <a href="{{ url('/blog/cuet-preparation-2025-complete-ug-subject-strategies-syllabus-tips-pyqs-and-checklist') }}">CUET
    preparation guide</a> covers the format.
  </p>
  <p>
    The ICAI's CA Foundation, under its new scheme, has four papers: Accounting, Business Laws, Quantitative Aptitude
    and Business Economics. Class 12 accountancy and economics are a strong base for two of them. Check eligibility
    and dates on icai.org; a school tutor can help with the overlap, but CA preparation is a separate commitment.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-zones">How do commerce tutors reach you across Delhi?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Routes and timing for commerce sessions in six zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/karol-bagh-patel-nagar-rajinder-nagar') }}">Karol Bagh, Patel Nagar &amp; Rajinder Nagar</a></td><td>Rajendra Place or Patel Nagar on the Blue Line</td><td>Streets towards Rajendra Place are busy at office closing time</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri, Rajouri Garden &amp; Punjabi Bagh</a></td><td>Naraina Vihar on the Pink Line</td><td>Ring Road congestion in the evening; slots after the office rush</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a></td><td>Rithala, the Red Line terminus in Sector 5</td><td>Street parking suits tutors who drive</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar &amp; Shahdara</a></td><td>Karkarduma, a Blue and Pink Line interchange</td><td>Vikas Marg peaks at office hours; book before the evening rush</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj &amp; IP Extension</a></td><td>IP Extension or Mandawali on the Pink Line</td><td>Society gates log every visitor; pre-register the tutor</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">Kalkaji, CR Park &amp; Sarita Vihar</a></td><td>Nehru Enclave or Greater Kailash on the Magenta Line, then an auto</td><td>Late afternoon or evening slots are easier than school-run mornings</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The Laxmi Nagar side of East Delhi is known for accountancy and company secretary coaching, according to our
    <a href="{{ url('/city/delhi') }}">Delhi tutors page</a>. Coaching and home tuition can work together, as long as
    the home tutor focuses on the school paper and the gaps rather than repeating the class.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-mode">Should commerce lessons be at home or online?</h2>
  <p>
    Accountancy works well at home, where the tutor can watch formats being drawn and entries being posted. Economics
    and business studies adapt easily to online lessons. Online also opens up specialists for ISC Accounts or Cambridge
    9706 who may live far away. A sensible pattern is a weekly home lesson for accounts and an online session for
    economics.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-demo">What to check in a commerce demo</h2>
  <p>
    The first class with the tutor you choose is free. Ask the tutor to:
  </p>
  <ul>
    <li>explain how the Class 12 accountancy paper is split on your board, including the option your school offers;</li>
    <li>take a partnership or journal-entry question your child got wrong, and mark the working step by step;</li>
    <li>draw and explain one economics diagram, and say how marks are awarded for it;</li>
    <li>outline a plan to the board exam, with project deadlines and full papers.</li>
  </ul>
  <p>
    If the fit is not right, the next tutor on your shortlist can take a demo, and switching later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dcm-fees">What does a commerce tutor in Delhi charge, and how do you start?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The number of subjects, the board, the tutor's experience and the trip at your hour shape the quote. You see each
    fee before the demo; see the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">home tuition fees in Delhi</a>.
  </p>
  <p>
    Locality pages show tutors who teach near you. {!! $dcmA('east-patel-nagar', 'East Patel Nagar') !!} sits next to
    Rajendra Place and is easy to reach by metro. {!! $dcmA('naraina-vihar', 'Naraina Vihar') !!} has DDA flats and houses
    a walk from its underground Pink Line station. {!! $dcmA('rohini-sector-5', 'Rohini Sector 5') !!} has the Rithala
    terminus inside it. {!! $dcmA('karkardooma', 'Karkardooma') !!} mixes societies and houses beside a two-line
    interchange; {!! $dcmA('patparganj', 'Patparganj') !!} is mainly group-housing societies with staffed gates; and
    {!! $dcmA('alaknanda', 'Alaknanda') !!} has apartment complexes with their own gates but no station inside.
  </p>
  <p>
    Before the stream begins, see <a href="{{ url('/class-11-home-tutor-delhi') }}">Class 11 tutors in Delhi</a>; for the
    final year, <a href="{{ url('/class-12-home-tutor-delhi') }}">Class 12 tutors</a>. Send the board, subjects, maths
    option, your colony or sector and free hours; we shortlist two or three tutors with fees.
    <a href="{{ url('/demo-class') }}">Book a free demo</a>, browse <a href="{{ url('/tutors') }}">tutor profiles</a> or see
    the <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a>. Commerce teachers can find students through
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
