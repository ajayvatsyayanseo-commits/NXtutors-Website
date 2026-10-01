{{--
  Long-form guide for the "accountancy home tutor Mumbai" subject page.
  Byline: NXTutors Academic Team. No schools, junior colleges, societies,
  developers or people are named. Local detail comes only from
  database/seo-content/areas/mumbai-research.json, mumbai-zone-guides.json,
  database/seo-content/zones/mumbai.json and the Mumbai city hub view
  (boards: Maharashtra State Board SSC/HSC, CBSE, ICSE/ISC, IB, Cambridge IGCSE;
  Classes 11-12 usually in a junior college per the Pune/Mumbai hubs). The State
  Board commerce stream is described in general terms only. No claim is made
  about local commerce-tutor supply or demand.

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
  FAQs render from faqs/accountancy-home-tutor-mumbai.php.
  Area links render only when that Mumbai area page exists and is active.
--}}
@php
  $acMbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $acMbA = function (string $slug, string $label) use ($acMbSlugs) {
      return in_array($slug, $acMbSlugs, true)
          ? '<a href="' . e(url('/city/mumbai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="acMbGuideTitle">
  <h2 id="acMbGuideTitle">Accountancy tuition in Mumbai: from the first journal entry to the HSC or board paper</h2>

  <p class="nx-guide__lede">
    For most Mumbai commerce students, accountancy arrives in Class 11 with no warning and no earlier chapter to lean
    on. Some sit the HSC from a junior college, some stay on in a CBSE or ISC school, and a few meet accounting even
    earlier through Cambridge IGCSE. Each route sets a different paper, so the right tutor for a Dadar junior college
    student may be the wrong one for a classmate in Thane. This page covers the paper, the journey and the demo. The syllabus itself is covered on our national
    <a href="{{ url('/accountancy-home-tutor') }}">accountancy home tutor guide</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#acmb-paper">Which paper</a> ·
    <a href="#acmb-hsc">State Board commerce</a> ·
    <a href="#acmb-years">Class 11 and Class 12</a> ·
    <a href="#acmb-cuet">CUET</a> ·
    <a href="#acmb-zones">Reaching your zone</a> ·
    <a href="#acmb-mode">Home or online</a> ·
    <a href="#acmb-demo">The demo</a> ·
    <a href="#acmb-fees">Fees</a> ·
    <a href="#acmb-next">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="acmb-paper">Which accountancy paper is your child preparing for?</h2>
  <p>
    Mumbai's schools and junior colleges follow several boards, and accountancy is examined quite differently under
    each. We match the board, the class and, in Class 12, the optional part of the syllabus before we look at distance.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 commerce in Mumbai: the accounting course and what to confirm first</caption>
    <thead>
      <tr><th scope="col">Board and course</th><th scope="col">How it is examined</th><th scope="col">Confirm before the first lesson</th></tr>
    </thead>
    <tbody>
      <tr><td>Maharashtra State Board, HSC commerce</td><td>The board's own accounting paper, written from the state textbooks; the pattern is published by the board</td><td>The latest paper pattern from the board's official website, and the medium your child writes in</td></tr>
      <tr><td>CBSE Accountancy (055)</td><td>Each year a three-hour theory paper out of 80, with a 20-mark project</td><td>In Class 12, whether the school teaches Financial Statement Analysis or Computerised Accounting as Part B</td></tr>
      <tr><td>ISC Accounts (858), with ISC Commerce (857) as a separate subject</td><td>An 80-mark theory paper and two 10-mark projects in each class</td><td>Which of Section B (analysis and cash flow) or Section C (spreadsheets and databases) the school prepares for</td></tr>
      <tr><td>Cambridge IGCSE Accounting (0452)</td><td>A multiple-choice paper worth 30% and a structured paper worth 70%, not tiered</td><td>The school's exam series and which past papers it uses</td></tr>
      <tr><td>Cambridge AS &amp; A Level Accounting (9706)</td><td>Two AS papers, then financial accounting and a separate cost and management accounting paper at A Level</td><td>Whether your child takes the full A Level in one series or carries AS forward</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    IB Diploma students have no stand-alone accounting course; the nearest subjects are Business Management and
    Economics. If an IB student in Mumbai asks for "accounts" help, tell us the course and the unit so we look for
    someone who has taught that IB subject. Our <a href="{{ url('/ib-tutor-mumbai') }}">IB tutors in Mumbai</a> page
    covers the programme more widely.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-hsc">How does the State Board commerce stream work?</h2>
  <p>
    The Maharashtra State Board of Secondary and Higher Secondary Education conducts the HSC at the end of Class 12, and
    State Board students usually spend Classes 11 and 12 in a junior college. Accounting there is taught from the
    board's own textbooks rather than NCERT, so a tutor who has prepared CBSE students only will need time to adjust.
    We do not reproduce the HSC pattern on this page, because the board sets it and revises it; take any detail from
    the board's official website or your child's college.
  </p>
  <p>Three things matter more for matching than a chart of marks:</p>
  <ul>
    <li><strong>The textbook.</strong> The tutor should work from the same state book your child uses, so formats and terms match what the college teacher expects.</li>
    <li><strong>The medium.</strong> Tell us whether your child writes the paper in English or Marathi, since theory answers must use the paper's terms.</li>
    <li><strong>The board's own papers.</strong> Practice should come from past HSC papers and the college's tests, because the way questions are phrased is part of what the student has to learn.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-years">What changes between Class 11 and Class 12?</h2>
  <p>
    Class 11 builds the machinery; Class 12 runs it at speed, as the CBSE 2026-27 curriculum shows. In Class 11 the accounting process (vouchers through the trial balance, bank reconciliation, depreciation
    and rectification) carries 44 of the 80 theory marks, theoretical framework 12, and sole-proprietor financial
    statements 24. In Class 12, partnership firms alone carry 36 marks and company accounts 24, with the remaining 20
    split between analysis of financial statements (12) and the cash flow statement (8), or replaced by Computerised
    Accounting.
  </p>
  <p>
    ISC follows a similar arc. Class 11 runs from the accounting equation to final accounts, incomplete records and
    non-trading organisations, answered as 20 compulsory short-answer marks and five 12-mark questions from eight.
    In Class 12, Section A on partnership and company accounts is compulsory and worth 60, and the student then picks
    Section B or Section C for the last 20.
  </p>
  <p>
    The practical lesson for a Mumbai family is timing. A student who leaves Class 11 unsure of journal entries,
    adjustments or the trial balance spends the first term of Class 12 fighting partnership questions that assume all
    of it. If you are deciding when to start a tutor, the second half of Class 11 is usually cheaper than the
    pre-board months of Class 12. Families still choosing a stream can read our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">guide to choosing a Class 11 stream</a>, and the
    <a href="{{ url('/class-11-home-tutor-gurgaon') }}">Class 11 home tutor page</a> sets out how the first senior
    year is paced; both are written for Gurugram but the stream questions are the same.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-cuet">Does accountancy matter for CUET?</h2>
  <p>
    It can. NTA's CUET (UG) 2026 information bulletin lists Accountancy / Book Keeping (code 301) as a domain subject.
    That bulletin gives each domain test 50 questions, all compulsory, in 60 minutes, built on NCERT's Class 12
    syllabus. State Board and ISC students should check how their syllabus lines up with those NCERT chapters, and
    read the bulletin for the year they apply. The tutoring difference is speed: once board answers are secure, a tutor adds short timed sets where
    the student must spot the right treatment in under a minute.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-zones">How does an accountancy tutor reach your part of Mumbai?</h2>
  <p>
    In Mumbai the railway line matters more than the distance on a map. We do not promise that an accountancy
    specialist lives near every station; what we do is look first at tutors whose line or metro reaches your
    building, then widen the search. When nobody suitable can come at your slot, online lessons open up tutors from
    anywhere in India.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Mumbai zones: how a tutor usually gets there, and what slows the trip</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Usual way in</th><th scope="col">What to plan around</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/mumbai/zone/south-mumbai') }}">South Mumbai</a></td><td>From the north on the Western line to Churchgate or Mumbai Central, or underground on Line 3 to Cuffe Parade</td><td>Office traffic near Nariman Point at the start and end of the day</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/worli-dadar-central-mumbai') }}">Worli, Dadar and Central Mumbai</a>, e.g. {!! $acMbA('dadar', 'Dadar') !!}</td><td>Dadar station serves both main lines; Line 3 has stations at Dadar and Worli</td><td>Peak crowds at Dadar station; strict visitor desks in redeveloped towers</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/bandra-khar-santacruz') }}">Bandra, Khar and Santacruz</a>, e.g. {!! $acMbA('santacruz-west', 'Santacruz West') !!}</td><td>Western and Harbour trains at all three stations</td><td>Shoppers on Hill Road and Linking Road in the evening</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/vile-parle-juhu') }}">Vile Parle and Juhu</a></td><td>Vile Parle station, then on foot or by auto; Juhu has no station of its own</td><td>Roads near the colleges at college hours</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/andheri-jogeshwari') }}">Andheri and Jogeshwari</a>, e.g. {!! $acMbA('andheri-east', 'Andheri East') !!}</td><td>Metro Line 1 to Marol Naka or Chakala for the east side; Line 2A for Oshiwara</td><td>Andheri-Kurla Road at office hours</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/goregaon-malad') }}">Goregaon and Malad</a>, e.g. {!! $acMbA('malad-west', 'Malad West') !!}</td><td>Line 2A along Link Road west of the tracks, Line 7 on the highway to the east</td><td>Say which side of the tracks you live on</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/kandivali-borivali-dahisar') }}">Kandivali, Borivali and Dahisar</a>, e.g. {!! $acMbA('borivali-west', 'Borivali West') !!}</td><td>Borivali's many train services; Lines 2A and 7 meet at Dahisar East</td><td>Link Road at school closing time</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/chembur-ghatkopar-powai') }}">Chembur, Ghatkopar and Powai</a></td><td>Harbour line to Chembur, Central line to Ghatkopar and Kanjurmarg</td><td>Gate registration in Powai and Vikhroli complexes</td></tr>
      <tr><td>Bhandup and Mulund</td><td>Central line stations, then on foot along Mulund's grid streets</td><td>The main road through Bhandup West at peak hours</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/thane') }}">Thane</a></td><td>On foot from Thane station for Naupada and Kopri; bus, auto or two-wheeler along Ghodbunder Road</td><td>Majiwada junction in the morning and evening rush</td></tr>
      <tr><td><a href="{{ url('/city/mumbai/zone/navi-mumbai') }}">Navi Mumbai</a>, e.g. {!! $acMbA('vashi', 'Vashi') !!}</td><td>Harbour line from Vashi to Panvel, Trans-Harbour trains for Airoli and Ghansoli</td><td>Roads near Vashi station at office hours; give node, sector and building</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Every neighbourhood has its own listing on our <a href="{{ url('/city/mumbai') }}">Mumbai home tuition page</a>.
    Regional guides go further for the
    <a href="{{ url('/blog/south-and-central-mumbai-tuition-guide') }}">island city</a>, the
    <a href="{{ url('/blog/mumbai-western-suburbs-tuition-guide') }}">western suburbs</a>, the
    <a href="{{ url('/blog/mumbai-central-suburbs-tuition-guide') }}">central suburbs</a> and
    <a href="{{ url('/blog/thane-and-navi-mumbai-tuition-guide') }}">Thane and Navi Mumbai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-mode">Home or online accountancy lessons in Mumbai?</h2>
  <p>
    Accountancy is written in columns, and much of the teaching happens by watching a student fill a ledger line by
    line. That favours home lessons, especially in Class 11. Mumbai's journeys push the other way: a long
    cross-city trip is hard for any tutor to repeat several times a week, and harder still in heavy monsoon rain.
  </p>
  <ul>
    <li><strong>Home suits</strong> Class 11 students building the basics, students who drift on a screen, and families whose tutor shares their railway line.</li>
    <li><strong>Online suits</strong> the Computerised Accounting option and ISC Section C, where tutor and student can work in the same spreadsheet, and IGCSE or A Level accounting, where you may want a wider choice than your line offers.</li>
    <li><strong>A mix suits</strong> most Class 12 students: a long home session for partnership or company accounts, and a shorter online slot for theory and doubts, with the same tutor.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online
    tutor</a> article compares the two more fully.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-demo">What should you check in the free accountancy demo?</h2>
  <p>Have your child's last marked test and the current chapter ready, and watch for these signs:</p>
  <ol>
    <li>The tutor asks for the board, the class and, for Class 12, the Part B or Section B/C option before teaching.</li>
    <li>Your child writes entries and accounts for most of the hour while the tutor watches.</li>
    <li>Mistakes are caught at the first wrong line, with a question that leads your child to see it.</li>
    <li>Working notes are insisted on, set out the way the board gives marks for them.</li>
    <li>The tutor can say why an entry is debited or credited, not only where it goes.</li>
    <li>For HSC students, the tutor practises from the board's own past papers in the right medium.</li>
    <li>You leave with a practice task and a date when it will be checked.</li>
  </ol>
  <p>
    If the fit is wrong, tell us and we arrange the next tutor on your shortlist; switching is free. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-fees">What does an accountancy tutor in Mumbai charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fees,
    and each fee on your shortlist is shown before the demo. In Mumbai the journey at your chosen hour, the board and the
    number of weekly sessions all move the figure. See the
    <a href="{{ url('/blog/home-tuition-fees-mumbai') }}">Mumbai home tuition fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="acmb-next">How do you request an accountancy tutor in Mumbai?</h2>
  <p>
    Send the class, the board by its exact name, the chapters causing trouble, your neighbourhood and nearest station,
    the days and times that work, home or online, and a budget. Any family can request an accountancy tutor; we come
    back with two or three matches, each with a fee, and the first class with the one you pick is a free
    <a href="{{ url('/demo-class') }}">demo class</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> yourself.
  </p>
  <p>
    Commerce students often want help with a second subject: see our
    <a href="{{ url('/economics-home-tutor-mumbai') }}">economics tutors in Mumbai</a> page, and for English, which
    every commerce student sits, our <a href="{{ url('/english-home-tutor-mumbai') }}">English home tutors in Mumbai</a>.
    Board-wide help is on the <a href="{{ url('/cbse-home-tutor-mumbai') }}">CBSE</a> and
    <a href="{{ url('/icse-home-tutor-mumbai') }}">ICSE and ISC</a> pages for Mumbai, and students taking maths
    alongside commerce can see <a href="{{ url('/maths-home-tutor-mumbai') }}">maths home tutors in Mumbai</a>.
    Accountancy teachers living in the city can find students on the
    <a href="{{ url('/tuition-jobs/mumbai') }}">Mumbai tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
