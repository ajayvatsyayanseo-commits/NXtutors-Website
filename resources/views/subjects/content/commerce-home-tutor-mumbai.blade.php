{{--
  Long-form guide for the "commerce home tutor Mumbai" page: the Class 11-12
  commerce bundle (accountancy, economics, business studies / OC / SP, maths,
  English) across Maharashtra State Board HSC, CBSE and ISC, with notes on
  Cambridge and IB. Byline: NXTutors Academic Team. No schools, junior
  colleges, coaching institutes, societies or people are named. No claim is
  made about local commerce-tutor supply or demand.

  Official sources:
  - Maharashtra State Board, rules (Appendix IV, classification of subjects
    under Arts, Commerce and Science streams; Commerce lists Mathematics and
    Statistics, Economics, Geography, Book-keeping and Accountancy,
    Organisation of Commerce, Secretarial Practice, Co-operation, Occupational
    Orientation): https://www.mahahsscboard.in/rules.pdf (read 1 Oct 2026)
  - Maharashtra State Board, Syllabi for Standards XI and XII, general subjects
    (English compulsory; a separate Mathematics and Statistics syllabus "For
    Commerce"): https://mahahsscboard.in/hscsyllabus.pdf (read 1 Oct 2026)
    The HSC paper pattern and current subject names are NOT reproduced; the
    page sends families to the board's website and the junior college.
  - CBSE Accountancy (055), Business Studies (054), Economics (030) 2026-27,
    reused as stated on accountancy-home-tutor-mumbai / economics-home-tutor-
    mumbai and the national pages (cbseacademic.nic.in curriculum 2026-27).
  - CISCE ISC Accounts (858), Commerce (857), Economics (856), reused as stated
    on the same pages (cisce.org).
  - NTA CUET (UG) 2026 Information Bulletin (cuet.nta.nic.in): 301 Accountancy /
    Book Keeping, 309 Economics / Business Economics, Business Studies among the
    domain subjects; 50 compulsory questions in 60 minutes on NCERT Class 12,
    as stated on the national accountancy and economics pages.
  - ICAI CA Foundation (new scheme), https://www.icai.org/post/foundation-nset
    (read 1 Oct 2026): Paper 1 Accounting, Paper 2 Business Laws, Paper 3
    Quantitative Aptitude, Paper 4 Business Economics. Eligibility and dates
    are not stated; families are sent to icai.org.
  Local detail only from database/seo-content/zones/mumbai.json,
  mumbai-zone-guides.json and the Mumbai city hub view.
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/commerce-home-tutor-mumbai.php.
  Area links render only when that Mumbai area page exists and is active.
--}}
@php
  $cmMbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cmMbA = function (string $slug, string $label) use ($cmMbSlugs) {
      return in_array($slug, $cmMbSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cmMbGuideTitle">
  <h2 id="cmMbGuideTitle">Commerce tuition in Mumbai: one stream, four or five papers, one plan</h2>

  <p class="nx-guide__lede">
    A Mumbai commerce student in Class 11 or 12 rarely needs help with only one subject. Accounts, economics and a
    theory paper on business arrive together, often with maths or statistics and usually with English, and the
    pressure of each peaks at different times of the year. Whether your child writes the HSC from a junior college or
    sits CBSE or ISC from school, the question is the same: one tutor for the numerical papers and another for theory,
    or a single person who can hold the whole timetable together? This page from the NXTutors Academic Team sets out
    the subjects by board, how to split the help, where CUET and CA Foundation fit, and how to find tutors who can
    reach your part of Mumbai, Thane or Navi Mumbai.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cmmb-boards">Subjects by board</a> ·
    <a href="#cmmb-hsc">HSC commerce</a> ·
    <a href="#cmmb-split">One tutor or two</a> ·
    <a href="#cmmb-year">Planning the two years</a> ·
    <a href="#cmmb-next-step">CUET and CA Foundation</a> ·
    <a href="#cmmb-reach">Tutors across the region</a> ·
    <a href="#cmmb-mode">Home or online</a> ·
    <a href="#cmmb-demo">The demo</a> ·
    <a href="#cmmb-fees">Fees and requests</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cmmb-boards">Which commerce subjects does your child take?</h2>
  <p>
    The stream is called commerce on every board, but the subject list, the textbooks and the way answers are marked
    differ. Before we look for anyone, we need the exact subject names from your child's timetable.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 commerce in Mumbai by board: the usual subjects and what to tell a tutor</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Commerce subjects you will meet</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/maharashtra-board-tutor-mumbai') }}">Maharashtra State Board (HSC)</a></td><td>The board's rules list Book-keeping and Accountancy, Organisation of Commerce, Secretarial Practice, Economics and Mathematics and Statistics among commerce subjects, with English compulsory</td><td>The exact subjects your junior college offers, the textbook edition and the medium of the paper</td></tr>
      <tr><td><a href="{{ url('/cbse-home-tutor-mumbai') }}">CBSE</a></td><td>Accountancy (055), Business Studies (054) and Economics (030), each 80 theory marks plus a 20-mark project, alongside a language paper and, for many students, maths</td><td>In Class 12, which Part B option the school teaches in accountancy</td></tr>
      <tr><td><a href="{{ url('/icse-home-tutor-mumbai') }}">ISC</a></td><td>Accounts (858), Commerce (857) and Economics (856), with English compulsory and maths as an option</td><td>Which section of the accounts syllabus the school prepares for, and whether the maths is Mathematics or Applied Mathematics</td></tr>
      <tr><td><a href="{{ url('/igcse-tutor-mumbai') }}">Cambridge</a> and <a href="{{ url('/ib-tutor-mumbai') }}">IB</a></td><td>Cambridge offers Accounting and Economics at IGCSE and A Level; the IB Diploma has Business Management and Economics, with no separate accounting course</td><td>The syllabus code or IB subject and level, and the exam series</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The details for single subjects live on our Mumbai pages for
    <a href="{{ url('/accountancy-home-tutor-mumbai') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-mumbai') }}">economics</a>, which set out mark splits and options for each
    board. This page is about the stream as a whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-hsc">How should a tutor approach HSC commerce?</h2>
  <p>
    The Maharashtra State Board of Secondary and Higher Secondary Education sets the HSC, and its own rules group
    the commerce subjects listed above. Its published syllabus for Standards XI and XII also gives commerce students a
    Mathematics and Statistics course of their own, separate from the one for arts and science. Subject combinations can
    differ from one junior college to the next, so confirm your child's exact list with the college.
    We do not reproduce the HSC paper pattern here; the board revises it, and the latest version is on
    <a href="https://www.mahahsscboard.in/" rel="noopener" target="_blank">mahahsscboard.in</a> and with your
    college.
  </p>
  <p>What matters when matching an HSC commerce tutor:</p>
  <ul>
    <li><strong>State textbooks, not NCERT.</strong> The tutor should teach from the same books and formats your child's lecturers use. A tutor who has only prepared CBSE students needs time to adjust.</li>
    <li><strong>The language of the paper.</strong> Tell us if your child writes in English or Marathi, because theory papers reward the textbook's own terms.</li>
    <li><strong>Theory papers are a skill.</strong> Organisation of Commerce and Secretarial Practice are written subjects: definitions, features, distinctions and short notes. Students who are strong in accounts often lose marks here through thin, unstructured answers.</li>
    <li><strong>Board-style practice.</strong> Past HSC papers and the college's own unit tests make the most useful material, because the phrasing of questions is part of what is tested.</li>
  </ul>
  <p>
    Students who need help across HSC science or arts as well can see our
    <a href="{{ url('/maharashtra-board-tutor-mumbai') }}">Maharashtra Board tutors in Mumbai</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-split">One commerce tutor or two?</h2>
  <p>
    The commerce subjects fall into two kinds. Accounts, and maths or statistics, are worked on paper line by line and
    are learnt by doing many problems. Economics, business studies, Organisation of Commerce, Secretarial Practice and
    ISC Commerce are mostly written theory, with diagrams and a few numericals in economics. Very few tutors are
    equally strong in both kinds, so this is the real decision for parents.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Ways to cover the commerce stream with home tutors</caption>
    <thead>
      <tr><th scope="col">Plan</th><th scope="col">Suits</th><th scope="col">Watch out for</th></tr>
    </thead>
    <tbody>
      <tr><td>One tutor for accounts only</td><td>Students managing theory on their own but stuck on ledgers, adjustments or partnership</td><td>Theory papers left until the last month</td></tr>
      <tr><td>One tutor for all commerce subjects</td><td>Class 11 students, and families who want one weekly slot and one point of contact</td><td>Check that the demo includes a theory answer, not only a numerical</td></tr>
      <tr><td>Two tutors: accounts and maths with one, economics and theory with the other</td><td>Class 12 students aiming high, and CBSE or ISC students with the full subject load</td><td>Two timetables to keep; agree which tutor tracks the overall plan</td></tr>
      <tr><td>Accounts tutor at home, theory online</td><td>Families where the accounts tutor shares your line but the theory specialist lives further away</td><td>Written answers still need checking by hand; send photos of full answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    English deserves a word too: almost every commerce student sits it, and it counts towards the result like any other paper.
    If writing is weak, our <a href="{{ url('/english-home-tutor-mumbai') }}">English home tutors in Mumbai</a> page
    explains what to look for. For maths or statistics, see
    <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-year">Planning Class 11 and Class 12</h2>
  <p>
    Class 11 is where commerce students set up the habits that carry the next year. Accounts introduces the whole
    recording process from scratch; economics brings new tools such as basic statistics and demand and supply; the
    theory paper builds a vocabulary of business terms. In Class 12, accounts moves to partnerships and companies,
    economics to the economy as a whole, and the board exam, entrance tests and college choices all arrive in one
    season.
  </p>
  <ul>
    <li><strong>First term of Class 11:</strong> get the accounting basics and the theory vocabulary secure. This is the cheapest point to start a tutor.</li>
    <li><strong>Second term of Class 11:</strong> final accounts and adjustments, plus a habit of writing full theory answers every week.</li>
    <li><strong>Start of Class 12:</strong> partnership accounts early, because later chapters build on them; economics numericals practised alongside.</li>
    <li><strong>Monsoon months:</strong> agree that heavy-rain days move online so the weekly routine holds.</li>
    <li><strong>Before the boards:</strong> timed past papers in every subject, with the tutor marking the theory answers line by line, and entrance practice added once board answers are steady.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-next-step">Where do CUET and CA Foundation fit?</h2>
  <p>
    <strong>CUET (UG).</strong> The NTA's 2026 information bulletin lists Accountancy / Book Keeping (code 301),
    Economics / Business Economics (code 309) and Business Studies among the domain subjects. Each domain test has 50
    compulsory questions in 60 minutes, based on NCERT's Class 12 syllabus. HSC and ISC students should compare their
    syllabus with those NCERT chapters. Read the bulletin on
    cuet.nta.nic.in for your year, and add timed
    objective practice only once board answers are solid.
  </p>
  <p>
    <strong>CA Foundation.</strong> The Institute of Chartered Accountants of India lists four papers for its
    Foundation Course under the new scheme: Accounting, Business Laws, Quantitative Aptitude and Business Economics.
    The first and last overlap with school accounts and economics; business law and the aptitude paper are new ground.
    Eligibility, registration and exam timing are set by the institute, so check them on
    <a href="https://www.icai.org/post/foundation-nset" rel="noopener" target="_blank">icai.org</a>. A school tutor
    can strengthen the shared subjects, but say if your child is preparing for Foundation so the tutor knows the goal.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-reach">Finding commerce tutors across Mumbai, Thane and Navi Mumbai</h2>
  <p>
    We do not claim a commerce tutor lives beside every station. The shortlist starts with tutors in your own
    neighbourhood, then those who already travel to it, then the rest of the city, and then online tutors anywhere in
    India. In practice, Mumbai's rail lines decide who can come regularly:
  </p>
  <ul>
    <li><strong>The island city.</strong> <a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a> is reached mostly from the north, and <a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>, where all three suburban lines meet, draws on one of the widest tutor pools, for example around {!! $cmMbA('matunga', 'Matunga') !!}.</li>
    <li><strong>The Western line.</strong> <a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a> (including {!! $cmMbA('bandra-east', 'Bandra East') !!}), <a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a>, <a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>, <a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a> and <a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>, such as {!! $cmMbA('borivali-east', 'Borivali East') !!}: say which side of the tracks you live on.</li>
    <li><strong>The Central and Harbour lines.</strong> <a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a>, for instance {!! $cmMbA('ghatkopar', 'Ghatkopar') !!}, and Bhandup and Mulund further up the Central line.</li>
    <li><strong>Across the city limits.</strong> <a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a>, where station-side homes such as {!! $cmMbA('naupada', 'Naupada') !!} are easier to reach than the Ghodbunder belt, and <a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>, where a tutor from your node or the next, such as {!! $cmMbA('sanpada', 'Sanpada') !!}, avoids crossing the creek.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/mumbai') }}">Mumbai home tutors page</a> lists every neighbourhood, and our guides cover
    the <a href="{{ url('/blog/mumbai-western-suburbs-tuition-guide') }}">western suburbs</a> and
    <a href="{{ url('/blog/thane-and-navi-mumbai-tuition-guide') }}">Thane and Navi Mumbai</a> in more depth.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-mode">Should commerce lessons be at home or online?</h2>
  <p>
    Accounts favours the table: a tutor watching a ledger being drawn catches a wrong posting the moment it happens.
    Theory subjects travel well online, because the work is reading, discussing and then writing an answer that the
    tutor can mark from a photo or a shared document. Junior college students also tend to have the least free time
    in daylight. A common Mumbai pattern is accounts at home once or twice a week with a tutor from your line, and
    economics or theory online in the late evening. Our
    <a href="{{ url('/online-tutor-mumbai') }}">online tutoring for Mumbai students</a> page covers the setup, and
    parents who want a woman teacher can read <a href="{{ url('/female-home-tutor-mumbai') }}">female home tutors in
    Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-demo">What to check in a commerce demo</h2>
  <ol>
    <li>The tutor asks for the board, the exact subject names and the textbook before starting.</li>
    <li>In accounts, your child writes the entries; the tutor stops a mistake at the line where it starts.</li>
    <li>In a theory subject, the tutor asks for a written answer and then shows how it would be marked: points, terms, examples.</li>
    <li>In economics, diagrams are drawn and labelled by your child, not only by the tutor.</li>
    <li>The tutor can explain how the subjects connect, such as how shares and debentures in accounts link to sources of finance in the theory paper.</li>
    <li>You leave with a weekly plan that names which subject gets which day.</li>
  </ol>
  <p>
    If the demo is not right, we arrange the next tutor on your list, and switching later is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> adds more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmmb-fees">What does a commerce tutor in Mumbai charge, and how do you start?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees, and each fee on your shortlist is shown before the demo. Covering several commerce
    subjects with one tutor usually means longer or more frequent sessions, so compare the weekly total rather than
    the hourly figure. The <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">Mumbai home tuition fees guide</a> and
    our <a href="{{ url('/pricing-guide') }}">pricing guide</a> help with budgeting.
  </p>
  <p>
    Send us the class, the board, every subject by its exact name, the subjects causing most trouble, your locality
    and nearest station, home, online or both, and the times that work. We reply with two or three tutors; the first
    class with the one you choose is a free <a href="{{ url('/demo-class') }}">demo class</a>. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified, and you can
    browse <a href="{{ url('/tutors') }}">tutor profiles</a> yourself. Commerce teachers in the city can find students
    on the <a href="{{ url('/tuition-jobs/mumbai') }}">Mumbai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
