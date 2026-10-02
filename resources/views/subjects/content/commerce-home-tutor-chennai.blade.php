{{--
  Long-form guide for the "commerce home tutor Chennai" page: the Class 11-12
  commerce bundle (accountancy, commerce, economics, business mathematics and
  statistics, computer applications, English) across the Tamil Nadu State
  Board Higher Secondary course, CBSE and ISC, with notes on Cambridge and IB.
  Byline: NXTutors Academic Team. No schools, colleges, coaching institutes,
  societies or people named. No claim about local commerce-tutor supply or
  demand.

  Official sources:
  - Directorate of Government Examinations, Tamil Nadu (dge.tn.gov.in/aboutus.html,
    function.html, read 2 Oct 2026): conducts the State Board's Std X and XII
    board examinations; special supplementary examinations for X and XII.
  - DGE question bank (apply1.tndge.org/dge-notification/questbank, read 2 Oct
    2026): March 2026 Higher Secondary first-year and second-year sets
    (HSE1_2026_Q.pdf, HSE2_2026_Q.pdf on tnegadge.s3.ap-south-1.amazonaws.com).
    Both include Accountancy, Commerce, Economics, Business Mathematics and
    Statistics (each 3 hours, 90 marks), Computer Applications (70 marks in
    the second-year set) and the vocational Office Management and
    Secretaryship. Second-year Commerce and Accountancy: Part I 20 x 1,
    Part II 7 x 2, Part III 7 x 3, Part IV 7 x 5. Papers printed in a Tamil and
    English version. Group combinations are NOT stated; families are sent to
    the school.
  - CBSE Accountancy (055), Business Studies (054), Economics (030) 2026-27,
    80 + 20 (cbseacademic.nic.in), as on the Chennai accountancy and economics
    pages and the verified Mumbai commerce page.
  - CISCE ISC Accounts (858), Commerce (857), Economics (856) (cisce.org).
  - NTA CUET (UG) 2026 bulletin (cuet.nta.nic.in): 301 Accountancy / Book
    Keeping, 309 Economics / Business Economics, Business Studies among domain
    subjects; 50 compulsory questions in 60 minutes on NCERT Class 12.
  - ICAI CA Foundation (icai.org/post/foundation-nset): Accounting, Business
    Laws, Quantitative Aptitude, Business Economics.
  Local detail only from database/seo-content/zones/chennai.json,
  chennai-zone-guides.json, chennai-research.json and the Chennai city hub view.
  Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/commerce-home-tutor-chennai.php.
  Area links render only when that Chennai area page exists and is active.
--}}
@php
  $cmChSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cmChA = function (string $slug, string $label) use ($cmChSlugs) {
      return in_array($slug, $cmChSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cmChGuideTitle">
  <h2 id="cmChGuideTitle">Commerce tuition in Chennai: accounts, theory and business maths across two higher secondary years</h2>

  <p class="nx-guide__lede">
    A commerce student in Chennai seldom struggles with a single paper. Accountancy, a theory paper on commerce or
    business, economics and, for many, business mathematics and statistics all arrive together in Class 11, and each
    peaks at a different point in the year. On the Tamil Nadu State Board both higher secondary years end in papers
    set by the Directorate of Government Examinations; on CBSE and ISC, Class 12 carries the board exam. This page from
    the NXTutors Academic Team lays out the subjects on each board, how the State Board commerce papers were built in
    March 2026, ways to divide the work between tutors, the place of CUET and CA Foundation, and the travel realities in each
    zone.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cmch-boards">Subjects by board</a> ·
    <a href="#cmch-state">State Board commerce papers</a> ·
    <a href="#cmch-split">How many tutors</a> ·
    <a href="#cmch-year">Plus one to plus two</a> ·
    <a href="#cmch-next-step">After school</a> ·
    <a href="#cmch-reach">Tutors by zone</a> ·
    <a href="#cmch-mode">Home or online</a> ·
    <a href="#cmch-demo">The demo</a> ·
    <a href="#cmch-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cmch-boards">Which commerce papers will your child sit?</h2>
  <p>
    "Commerce" means a different list of papers on each board, so a tutor search starts with the subject names on your
    child's timetable, written exactly as the school writes them.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11-12 commerce in Chennai, board by board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Commerce papers you will see</th><th scope="col">What to tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/tamil-nadu-board-tutor-chennai') }}">Tamil Nadu State Board</a></td><td>The Directorate's 2026 question sets include Accountancy, Commerce, Economics, Business Mathematics and Statistics and Computer Applications, plus a vocational Office Management and Secretaryship paper</td><td>Your school's subject group, the textbook year and whether your child writes in Tamil or English</td></tr>
      <tr><td><a href="{{ url('/cbse-home-tutor-chennai') }}">CBSE</a></td><td>Accountancy (055), Business Studies (054), Economics (030): an 80-mark theory paper and a 20-mark project in each; a language, and for many, mathematics or applied mathematics</td><td>The Part B choice the school makes for Class 12 accountancy</td></tr>
      <tr><td><a href="{{ url('/icse-home-tutor-chennai') }}">ISC</a></td><td>English for all candidates, with Accounts (858), Commerce (857) and Economics (856) as the usual commerce electives</td><td>The accounts section the school prepares, and whether maths is part of the group</td></tr>
      <tr><td><a href="{{ url('/igcse-tutor-chennai') }}">Cambridge</a> and <a href="{{ url('/ib-tutor-chennai') }}">IB</a></td><td>Cambridge offers Accounting and Economics from IGCSE to A Level; the IB Diploma offers Business Management and Economics</td><td>The syllabus code, or the IB subject and level</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Single-subject detail is on our Chennai pages for <a href="{{ url('/accountancy-home-tutor-chennai') }}">accountancy</a>
    and <a href="{{ url('/economics-home-tutor-chennai') }}">economics</a>; this page looks at the commerce group as a
    whole.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-state">How were the State Board commerce papers built in 2026?</h2>
  <p>
    The Directorate of Government Examinations conducts the State Board's Class 12 examination and publishes complete
    question sets for both higher secondary years. In the March 2026 sets, Accountancy, Commerce, Economics and Business
    Mathematics and Statistics were each three-hour papers of 90 marks, printed in a Tamil and an English version. The
    second-year Commerce and Accountancy papers shared one layout:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Second-year Commerce and Accountancy, March 2026: the four parts</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">Questions and marks</th><th scope="col">What a tutor should practise</th></tr>
    </thead>
    <tbody>
      <tr><td>Part I</td><td>20 one-mark questions (20 marks)</td><td>Quick, exact recall of terms, formats and rules</td></tr>
      <tr><td>Part II</td><td>7 two-mark answers (14 marks)</td><td>Crisp definitions and short distinctions</td></tr>
      <tr><td>Part III</td><td>7 three-mark answers (21 marks)</td><td>Short calculations or three clear points with an example</td></tr>
      <tr><td>Part IV</td><td>7 five-mark answers (35 marks)</td><td>Full problems in accountancy, structured long answers in commerce</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The lesson for tuition: the five-mark answers carry the largest share, so a student who knows the theory but
    writes thin, unstructured long answers, or who cannot finish an accountancy problem neatly in time, loses most. Use
    the Directorate's past and sample papers for practice, and confirm the current scheme there. Which subjects make up
    your child's group depends on the school, so check the timetable before searching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-split">Should one tutor cover all of commerce, or two?</h2>
  <p>
    Commerce subjects come in two kinds. Accountancy and business mathematics and statistics are numerical and are
    learned by doing many problems on paper. Commerce, business studies and most of economics are written theory with
    some diagrams and a few numericals. Few tutors are equally strong at both, which is the real choice parents face.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Covering the commerce group with home tutors</caption>
    <thead>
      <tr><th scope="col">Arrangement</th><th scope="col">Works well for</th><th scope="col">Risk to manage</th></tr>
    </thead>
    <tbody>
      <tr><td>An accountancy tutor only</td><td>Students who manage theory alone but stall on adjustments, partnership or company accounts</td><td>Theory papers neglected until the final month</td></tr>
      <tr><td>One tutor for the whole group</td><td>Class 11, or families wanting a single weekly slot</td><td>Make sure the demo includes a long theory answer, not just a numerical</td></tr>
      <tr><td>Numbers with one tutor, theory with another</td><td>Class 12 students with a high target, and CBSE or ISC students carrying the full load</td><td>Two schedules; decide who owns the overall plan</td></tr>
      <tr><td>Accountancy at home, theory online</td><td>Homes where the numbers tutor lives nearby but the theory specialist does not</td><td>Long answers still need marking; send photos of complete answers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    English matters too, since every commerce student sits it. If writing is weak, see our
    <a href="{{ url('/english-home-tutor-chennai') }}">English home tutors in Chennai</a> page; for business mathematics or
    applied maths, see <a href="{{ url('/maths-home-tutor-chennai') }}">maths home tutors in Chennai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-year">From plus one to plus two: pacing the commerce years</h2>
  <p>
    Class 11 builds the foundations: accountancy starts from the very first journal entry, economics introduces new
    tools and vocabulary, and the theory paper builds the language of business. In Class 12, accountancy moves to
    partnerships and companies, economics widens to the whole economy, and board papers, entrance tests and college
    choices arrive in a single season.
  </p>
  <ul>
    <li><strong>Start of Class 11:</strong> secure the accounting basics and the vocabulary of the theory paper; it is the least expensive moment to begin tuition.</li>
    <li><strong>Later in Class 11:</strong> final accounts with adjustments, and a weekly full-length theory answer, checked and rewritten. State Board students should also work the Directorate's first-year papers.</li>
    <li><strong>Opening months of Class 12:</strong> get partnership accounts right first, since company accounts and analysis lean on them, while keeping economics problems ticking over.</li>
    <li><strong>The run-in to the board papers:</strong> a timed paper in each subject every week, long answers marked point by point; objective entrance practice waits until the written answers hold up.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-next-step">After school: CUET and CA Foundation</h2>
  <p>
    <strong>CUET (UG).</strong> Among the domain tests in the NTA's 2026 information bulletin are code 301 (Accountancy /
    Book Keeping), code 309 (Economics / Business Economics) and Business Studies. Each is set on the NCERT Class 12
    syllabus as 50 questions, all compulsory, to be answered in 60 minutes. State Board and ISC students should compare their own syllabus with those NCERT
    chapters early, and add objective practice once their board answers are secure. Read the current bulletin on
    cuet.nta.nic.in.
  </p>
  <p>
    <strong>CA Foundation.</strong> ICAI's Foundation course has four papers, namely Accounting, Business Laws,
    Quantitative Aptitude and Business Economics. School accountancy and economics give a head start in two of them;
    business law and the aptitude paper are fresh territory. For eligibility and exam windows, go to
    <a href="https://www.icai.org/post/foundation-nset" rel="noopener" target="_blank">icai.org</a>, and tell the tutor if
    Foundation is the goal.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-reach">Finding commerce tutors across Chennai's zones</h2>
  <p>
    We do not claim there is a commerce tutor on every street. A shortlist is built outward: tutors living in your
    locality, next those already teaching nearby, then anyone in Chennai, and finally online tutors from across India. In practice, the rail
    lines decide who can come every week:
  </p>
  <ul>
    <li><strong>South and the coast.</strong> <a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a> rely on the MRTS; {!! $cmChA('besant-nagar', 'Besant Nagar') !!} has no station, so tutors finish by auto. <a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a> mixes the Blue Line, MRTS and suburban trains; {!! $cmChA('guindy', 'Guindy') !!} sits on both the metro and the railway.</li>
    <li><strong>The centre-west.</strong> <a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam and Kodambakkam</a> is suburban-train territory, including {!! $cmChA('kodambakkam', 'Kodambakkam') !!}; <a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a> has the Green Line at its eastern end, with {!! $cmChA('ashok-nagar', 'Ashok Nagar') !!}'s numbered roads easy to find.</li>
    <li><strong>The Green Line belt and the west.</strong> <a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>, such as {!! $cmChA('aminjikarai', 'Aminjikarai') !!}, is well served by the underground metro; <a href="{{ url('/city/chennai/zone/mogappair-ambattur-avadi') }}">Mogappair, Ambattur and Avadi</a> depends on the Arakkonam line.</li>
    <li><strong>The OMR and the north.</strong> On the <a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a>, tutors come by road, so a mixed plan helps; in <a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur and north Chennai</a>, {!! $cmChA('royapuram', 'Royapuram') !!} and its neighbours are easiest to reach by train.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/south-chennai-tuition-guide') }}">south Chennai</a> and
    <a href="{{ url('/blog/west-and-north-chennai-tuition-guide') }}">west and north Chennai</a> guides go deeper, and the
    <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a> lists every locality.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-mode">Which commerce subjects travel well online?</h2>
  <p>
    Accountancy favours the table: a tutor beside the ledger catches a wrong posting as it is made. Theory subjects
    move well online, because the work is reading, discussion and a written answer that can be marked from a photo or
    shared document. Many commerce students are busiest in daylight, so a sensible Chennai split is one or two
    accountancy visits a week from someone on your rail line, with theory handled on screen after dinner. See
    <a href="{{ url('/online-tutor-chennai') }}">online tutors for Chennai students</a>, and families wanting a woman
    teacher will find <a href="{{ url('/female-home-tutor-chennai') }}">female home tutors in Chennai</a> useful.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-demo">What to look for in a commerce demo</h2>
  <ol>
    <li>The tutor wants to see the timetable, the textbooks and the medium of the paper before starting.</li>
    <li>In accountancy, your child writes the entries, and the tutor stops an error at the line where it begins.</li>
    <li>For theory, a five-mark question is attempted and the tutor explains, point by point, where marks would be won or lost.</li>
    <li>In economics, your child draws and labels the diagram, not only the tutor.</li>
    <li>The tutor can link subjects, for example how sources of finance in the theory paper connect to shares and debentures in accountancy.</li>
    <li>At the end you get a week-by-week plan with a day assigned to each subject.</li>
  </ol>
  <p>
    If the fit is wrong, the next tutor on your list takes a demo, and switching later is free. More questions are in
    the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmch-fees">What does a commerce tutor in Chennai charge, and how do you begin?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor names a fee, and you see it on the shortlist ahead of the demo. One tutor teaching three or four commerce
    papers will need more hours, so weigh the cost per week, not per hour. For planning, use the
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai fees guide</a> and the general
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    To begin, write to us with the class and board, every subject as the school names it, the medium, the one or two
    subjects that worry you most, your locality and station, the format you want and your free evenings. Two or three
    tutors come back; your first lesson with the chosen one is a free <a href="{{ url('/demo-class') }}">demo
    class</a>. All tutors who join complete an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first, and
    <a href="{{ url('/tutors') }}">tutor profiles</a> are open to browse. Teachers of commerce subjects looking for
    students can use <a href="{{ url('/tuition-jobs/chennai') }}">Chennai tuition jobs</a>. Class-specific help is on our
    <a href="{{ url('/class-11-home-tutor-chennai') }}">Class 11</a> and
    <a href="{{ url('/class-12-home-tutor-chennai') }}">Class 12</a> pages for Chennai.
  </p>
  </section>

  </div>
</article>
