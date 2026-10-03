{{--
  Long-form guide for the "commerce home tutor Greater Noida" page: the Class
  11-12 commerce stream (accountancy, business studies, economics, with maths
  or applied maths and English) across the UP Board Intermediate, CBSE and ISC,
  plus the UP Board's Class 10 Commerce subject. Byline: NXTutors Academic
  Team. No schools, coaching institutes, societies or people are named. No
  claim is made about local commerce-tutor supply or demand.

  Official sources:
  - UP Board (upmsp.edu.in, read 2 Oct 2026; Hindi PDFs in Krutidev font,
    read and translated by the writer):
    Downloads/Syllabus/Class12/156-Accountancy-Class-12.pdf (2026-27): Part 1
    partnership: fundamentals 6, reconstitution on admission 13, on
    retirement or death 13, dissolution 13; Part 2: accounting for share
    capital 13, issue of debentures 12, company financial statements 12,
    accounting ratios 9, cash flow statement 9 (total 100).
    Downloads/Syllabus/Class12/157-Business-Studies-Class-12.pdf (commerce
    group): Part 1 principles and functions of management: nature and
    significance 5, principles 5, business environment 10, planning 7,
    organising 10, staffing 7, directing 10, controlling 6; Part 2 business
    finance and marketing: financial management 12, marketing 16, consumer
    protection (Consumer Protection Act 2019) 12 (total 100).
    Downloads/Syllabus/Class12/136-Economics-Class-12.pdf: one paper of 100;
    Part A introductory microeconomics 50 (introduction 4, consumer
    equilibrium and demand 18, producer behaviour and supply 18, forms of
    market and price under perfect competition 10); Part B introductory
    macroeconomics 50 (national income 12, money and banking 8, income and
    employment 14, government budget 8, balance of payments 8).
    All three files: four school-level unit tests for remedial teaching
    (second week of July, end of August, end of November, end of December),
    marks not counted in the result.
    ModelPaper/class12/156-Lekhashastra.pdf (2026-27): 3 h 15 min, first 15
    minutes reading, 100 marks, all questions compulsory; Q1-10 multiple
    choice, Q11-20 very short (about 30 words), Q21-26 short (within 100
    words), numerical questions to be solved, Q27-30 long answer.
    ModelPaper/class12/136-Economics.pdf: 3 h 15 min, 100 marks; Q1-10
    multiple choice written in the answer book; Q11-16 four marks, about 50
    words; Q17-22 six marks, about 150 words; Q23-25 ten marks, about 300
    words.
    Downloads/Syllabus/Class10/935-Commerce-Class-10.pdf: 70 written + 30
    internal; final accounts, bank reconciliation and simple entries for
    cheques, bills, hundis and promissory notes 20; business systems; banking
    15; economics 15; no textbook prescribed or recommended; two projects of
    10 marks each plus unit tests. ModelPaper/class10/935-Commerce.pdf: 3 h
    15 min, 70 marks, Section A 20 one-mark MCQs on OMR, Section B 50 marks,
    answers within 30 / 100 / 200 words.
    Downloads/Commerce_Final.pdf (career guidance, commerce group): B.Com and
    B.Com (Hons), BBA / BBS with CUET conducted by NTA among admission tests;
    CA (ICAI), CS (ICSI, CSEET), CMA (ICMAI).
  - CBSE Senior Secondary Curriculum 2026-27 (cbseacademic.nic.in), as stated
    on commerce-home-tutor-noida and the national accountancy / economics
    pages: Accountancy (055), Business Studies (054), Economics (030), each 80
    + 20; Mathematics (041) or Applied Mathematics (241).
  - CISCE ISC Accounts (858), Commerce (857), Economics (856), as stated on the
    national and Mumbai commerce pages (cisce.org).
  Local detail only from database/seo-content/zones/greater-noida.json,
  greater-noida-zone-guides.json, greater-noida-research.json and the Greater
  Noida hub (UPMSP in the mix alongside CBSE, ICSE/ISC; Sector P-3 plotted
  near Pari Chowk station; Sigma 2 gated plotted colonies, thinner transport,
  DELTA 1 then auto; Swarn Nagri houses, floors and villas with a few
  apartment blocks, two-wheeler or auto; Zeta 1 mixed housing, limited
  transport, DELTA 1 / GNIDA Office stations; Mu 2 authority flats and plots,
  autos easy; Omicron 3 societies and plots, GNIDA Office / DELTA 1, Boraki
  railway station). Fee wording is the approved NXTutors sentence. FAQs render
  from faqs/commerce-home-tutor-greater-noida.php. Area links render only for
  active areas.
--}}
@php
  $cmgnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cmgnA = function (string $slug, string $label) use ($cmgnSlugs) {
      return in_array($slug, $cmgnSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cmgnGuideTitle">
  <h2 id="cmgnGuideTitle">Commerce tuition in Greater Noida: three papers, three styles of answer</h2>

  <p class="nx-guide__lede">
    A commerce student in Class 11 or 12 is really preparing three different kinds of paper. Accountancy is solved, line
    by line, like maths. Business studies is written, point by point, in the textbook's own terms. Economics sits
    between the two, with diagrams, definitions and some calculation. Each board weights and sets these papers
    differently, and in Greater Noida, which is in Uttar Pradesh, a commerce student may be on the UP Board, CBSE or
    ISC. This guide from the NXTutors Academic Team reads the UP Board's own 2026-27 commerce files in detail, sets CBSE
    and ISC alongside, and explains how tutors reach each zone of the city.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cmgn-boards">Subjects by board</a> ·
    <a href="#cmgn-acc">UP Board accountancy</a> ·
    <a href="#cmgn-bst">Business studies</a> ·
    <a href="#cmgn-eco">Economics</a> ·
    <a href="#cmgn-answers">Answer lengths</a> ·
    <a href="#cmgn-ten">Commerce in Class 10</a> ·
    <a href="#cmgn-after">After Class 12</a> ·
    <a href="#cmgn-plan">Two-year plan</a> ·
    <a href="#cmgn-zones">Tutors by zone</a> ·
    <a href="#cmgn-mode">Home or online</a> ·
    <a href="#cmgn-demo">The demo</a> ·
    <a href="#cmgn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cmgn-boards">The commerce subjects on each board</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11–12 commerce subjects in Greater Noida, by board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Core subjects (code)</th><th scope="col">How the marks are set</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/up-board-tutor-greater-noida') }}">UP Board (UPMSP)</a></td><td>Accountancy (156), Business Studies (157), Economics (136)</td><td>Each set as a 100-mark written paper in the 2026-27 syllabus files, with no practical component</td></tr>
      <tr><td><a href="{{ url('/cbse-home-tutor-greater-noida') }}">CBSE</a></td><td>Accountancy (055), Business Studies (054), Economics (030); Mathematics (041) or Applied Mathematics (241)</td><td>80 marks for the paper and 20 internal in each</td></tr>
      <tr><td><a href="{{ url('/icse-home-tutor-greater-noida') }}">ISC</a></td><td>Accounts (858), Commerce (857), Economics (856)</td><td>Check the current CISCE syllabus for each subject's paper and project split</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The UP Board line is the one to notice if your child is used to CBSE: no 20-mark internal cushion, the whole 100
    riding on one sitting. That changes how a tutor should pace the two years. Single-subject detail is on our
    <a href="{{ url('/accountancy-home-tutor-greater-noida') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-greater-noida') }}">economics</a> pages for Greater Noida.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-acc">UP Board accountancy: where the 100 marks sit</h2>
  <p>
    The Class 12 accountancy syllabus splits the year into two parts. Partnership accounts take 45 marks and company
    accounts with financial analysis take 55.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>UP Board Class 12 Accountancy (156), 2026-27 unit weights</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">Unit</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td rowspan="4">Partnership</td><td>Fundamentals: the partnership deed, profit sharing, interest on capital and drawings, past adjustments</td><td>6</td></tr>
      <tr><td>Reconstitution on admission: new ratios, goodwill, revaluation</td><td>13</td></tr>
      <tr><td>Reconstitution on retirement or death</td><td>13</td></tr>
      <tr><td>Dissolution of the firm</td><td>13</td></tr>
      <tr><td rowspan="5">Companies and analysis</td><td>Accounting for share capital: issue, forfeiture and reissue</td><td>13</td></tr>
      <tr><td>Issue of debentures</td><td>12</td></tr>
      <tr><td>Financial statements of a company</td><td>12</td></tr>
      <tr><td>Accounting ratios</td><td>9</td></tr>
      <tr><td>Cash flow statement</td><td>9</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The 2026-27 model paper has 30 compulsory questions: ten multiple-choice, ten very short answers of about 30
    words, six short answers within 100 words that include numerical problems, and four long questions. The admission
    and retirement units carry 26 marks between them and share the same logic of new ratios, goodwill and capital
    adjustment, so a tutor who teaches them as one connected idea saves the student weeks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-bst">UP Board business studies: a writing paper with a map</h2>
  <p>
    Business studies is 100 marks of written answers. The first part, principles and functions of management, carries
    60 marks: the nature of management 5, principles of management 5, business environment 10, planning 7,
    organising 10, staffing 7, directing 10 and controlling 6. The second part, business finance and marketing,
    carries 40: financial management 12, marketing 16 and consumer protection 12, which the syllabus ties to the
    Consumer Protection Act, 2019.
  </p>
  <p>
    A tutor's job here is less about understanding and more about structure: a definition, the points in a logical
    order, each with a line of explanation and, where it fits, an example. Marketing alone is worth 16 marks and covers
    the marketing mix, branding, packaging, labelling, pricing, physical distribution, advertising and personal
    selling, so it rewards an organised set of notes made early in the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-eco">UP Board economics: half micro, half macro</h2>
  <p>
    The economics syllabus is a single 100-mark paper split evenly. Microeconomics covers an introduction (4),
    consumer equilibrium and demand (18), producer behaviour and supply (18), and price determination under perfect
    competition (10). Macroeconomics covers national income (12), money and banking (8), income and employment (14),
    the government budget (8) and the balance of payments (8).
  </p>
  <p>
    The two 18-mark microeconomics units lean on diagrams: indifference curves, demand and supply curves, cost and
    revenue curves. Students who can draw and label these quickly gain time for the long answers. In macroeconomics,
    the income and employment unit carries the most marks, covering aggregate demand, the propensities to consume and
    save, and the problems of excess and deficient demand.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-answers">Answer lengths the model papers set</h2>
  <p>
    The UP Board's model papers tell students roughly how long each answer should be, which is useful guidance for a
    tutor marking practice work.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Question types in the 2026-27 Class 12 economics model paper</caption>
    <thead>
      <tr><th scope="col">Questions</th><th scope="col">Marks each</th><th scope="col">Suggested length</th></tr>
    </thead>
    <tbody>
      <tr><td>1 to 10, multiple choice (answer written in the answer book)</td><td>1</td><td>The correct option</td></tr>
      <tr><td>11 to 16, very short answer</td><td>4</td><td>About 50 words</td></tr>
      <tr><td>17 to 22, short answer</td><td>6</td><td>About 150 words</td></tr>
      <tr><td>23 to 25, long answer</td><td>10</td><td>About 300 words</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Both the accountancy and economics model papers allow three hours and fifteen minutes, the first fifteen for
    reading. The syllabus files also list four school unit tests, in July, August, November and December, as part of
    remedial teaching; their marks do not count in the board result, but they show early where a student stands.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-ten">Commerce as a Class 10 subject on the UP Board</h2>
  <p>
    UP Board students can meet commerce before Class 11. The High School commerce subject has a 70-mark paper and 30
    marks of internal assessment, built from two projects of 10 marks each and unit tests. The paper covers final
    accounts, bank reconciliation and simple entries for cheques, bills and promissory notes (20 marks), business
    systems, banking (15) and basic economics (15). The board prescribes no single textbook, leaving the school to
    choose one, so a tutor should work from your child's own book. As in other Class 10 papers, Section A is 20
    one-mark questions on an OMR sheet, and the written answers have word limits of 30, 100 and 200 words.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-after">After Class 12: what the board's career notes list</h2>
  <p>
    The UP Board's career-guidance notes for the commerce group list B.Com and B.Com (Hons), BBA and BBS, naming CUET,
    conducted by NTA, among the admission routes, and professional courses such as CA through ICAI, CS through ICSI
    and CMA through ICMAI. A tutor's main job is still the board paper, but a Class 12 student aiming at CUET benefits
    from NCERT-based practice in the same subjects. Our
    <a href="{{ url('/blog/cuet-preparation-2025-complete-ug-subject-strategies-syllabus-tips-pyqs-and-checklist') }}">CUET
    preparation guide</a> and the guide to <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">choosing a
    stream in Class 11</a> help with planning.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-plan">Pacing Classes 11 and 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A commerce tutoring plan for the two Intermediate years</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Accountancy</th><th scope="col">Business studies and economics</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Journal, ledger and trial balance until they are automatic; the base for partnership work</td><td>Definitions and diagrams learned properly; short written answers marked for structure</td></tr>
      <tr><td>Class 12, first months</td><td>Partnership units, taught as one connected idea</td><td>Management principles and functions; microeconomics diagrams</td></tr>
      <tr><td>Class 12, middle months</td><td>Share capital, debentures and company statements</td><td>Finance, marketing and consumer protection; macroeconomics</td></tr>
      <tr><td>Class 12, final months</td><td>Ratios and cash flow; full timed papers</td><td>Model papers with answers kept to the suggested lengths</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The four school unit tests make natural checkpoints for this plan, even though their marks do not count.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-zones">Commerce tutors and the journey to each zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>.</strong> {!! $cmgnA('sector-p-3', 'Sector P-3') !!} is plotted, close to the Pari Chowk station, with no gate to clear. A tutor living in Greater Noida avoids the expressway traffic that delays tutors coming from Noida.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>.</strong> {!! $cmgnA('sigma-2', 'Sigma 2') !!} is gated colonies of plotted houses; once the guard has the tutor's name, the visit is to the doorstep. Public transport is thinner, so tutors ride in or take the metro to DELTA 1 and an auto. In {!! $cmgnA('swarn-nagri', 'Swarn Nagri') !!}, houses and floors need no pass, but the apartment blocks do.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a>.</strong> {!! $cmgnA('zeta-1', 'Zeta 1') !!} has wide roads and mixed housing, but limited public transport, so a tutor from Zeta, Eta or the Delta sectors is easiest to keep on a fixed slot.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>.</strong> {!! $cmgnA('mu-2', 'Mu 2') !!} has authority flats and plotted homes with autos easy to find, so a tutor without a vehicle can still come from GNIDA Office station. {!! $cmgnA('omicron-3', 'Omicron 3') !!} mixes societies and plots; register the tutor at the gate if you live in a society.</li>
  </ul>
  <p>
    For <a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a> and
    <a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>, see the
    <a href="{{ url('/blog/greater-noida-west-tuition-guide') }}">Greater Noida West guide</a> and the
    <a href="{{ url('/city/greater-noida') }}">Greater Noida home tutors page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-mode">Home, online, or one tutor for each style</h2>
  <p>
    Accountancy is the subject that gains most from a tutor at the table, watching a journal entry or a capital account
    take shape and catching the wrong side early. Business studies and economics answers can be marked just as well
    online from a clear photo of the full page. That is why some Class 12 families keep one tutor at home for
    accountancy and a second online for the two writing papers, while others prefer a single tutor who covers all
    three. Either works if someone keeps the overall plan. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> weighs up the options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-demo">What to test in a commerce demo</h2>
  <ol>
    <li><strong>A numerical and a theory answer.</strong> Ask for both in the demo, not only accountancy.</li>
    <li><strong>The board's files.</strong> Can the tutor name the heaviest units for your child's board and year?</li>
    <li><strong>Answer length.</strong> Do they mark to the word limits and marks of the paper your child will sit?</li>
    <li><strong>Diagrams.</strong> For economics, are graphs drawn and labelled correctly every time?</li>
    <li><strong>The route.</strong> Which station or road, and which evenings are reliable.</li>
  </ol>
  <p>
    We send two or three matched tutors with fees shown before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has
    more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmgn-fees">Fees and first steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">home tuition fees in Greater Noida</a> explain what moves
    the figure.
  </p>
  <p>
    Send us the class, board, subjects, the language of the paper, your sector or society and the slots that suit you.
    The first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, and if you teach commerce subjects, see
    <a href="{{ url('/tuition-jobs/greater-noida') }}">tuition jobs in Greater Noida</a>.
  </p>
  </section>

  </div>
</article>
