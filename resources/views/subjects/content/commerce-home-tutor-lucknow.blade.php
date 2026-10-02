{{--
  Long-form guide for "commerce home tutor Lucknow": the Class 11-12 commerce
  subjects (accountancy, business studies, economics, maths or applied maths,
  English) across the UP Board Intermediate, ISC and CBSE, with notes on the
  UP Board's Class 10 Commerce subject, CUET and CA Foundation. Byline:
  NXTutors Academic Team. No schools, coaching institutes, societies or
  people are named. No claim about local commerce-tutor supply or demand.
  Kept distinct from commerce-home-tutor-noida, -mumbai and the other city
  versions.

  Official sources:
  - UP Board: Madhyamik Shiksha Parishad, Uttar Pradesh (upmsp.edu.in, read
    2 Oct 2026): home page (career guidance for four groups: agriculture,
    arts, commerce, science); Board_Syllabus.aspx (Class 11-12 Accountancy
    156, Business Studies 157, Economics 136, Maths 131, English 117, Hindi /
    General Hindi; Class 10 Commerce 935);
    Downloads/Syllabus/Class11/156-Accountancy-Class-11.pdf (2026-27,
    commerce group, 100 marks: introduction and theoretical base 10;
    recording of transactions 10; bank reconciliation, trial balance and
    rectification of errors 15; depreciation, provisions and reserves 20;
    financial statements I 20 and II 25);
    Class11/157-Business-Studies-Class-11.pdf (100 marks; first two units on
    business, trade and commerce, forms of organisation, enterprises and
    business services, 16 each); Class11/136-Economics-Class-11.pdf (100
    marks, pass 33; statistics for economics 50 incl. data collection,
    organisation and presentation 20; Indian economic development 50 incl.
    current challenges 25); Class12/156-Accountancy-Class-12.pdf (nine units
    totalling 100: partnership fundamentals 6; admission, retirement/death and
    dissolution 13 each; share capital 13; debentures 12; company financial
    statements 12; ratios 9; cash flow statement 9; four remedial unit tests in July, August, November and December, held
    at school, marks not in the result); Class12/157-Business-Studies-Class-12.pdf
    (commerce group; principles and functions of management; business
    environment 10; marketing 16; consumer protection under the Consumer
    Protection Act 2019, 12); Class12/136-Economics-Class-12.pdf (paper only,
    100: introductory microeconomics 50, introductory macroeconomics 50, with
    income and employment 14 and national income 12);
    ModelPaper/class12/156-Lekhashastra.pdf (2026-27: 3 h 15 min, 100 marks,
    first 15 minutes for reading; all questions compulsory; Q1-10 multiple
    choice, Q11-20 very short about 30 words, Q21-26 short about 100 words
    with practical questions to solve, Q27-30 long answers);
    Syllabus/Class10/935-Commerce-Class-10.pdf (70 written + 30 internal at
    school; final accounts, bank reconciliation, cheques, bills, hundis and
    promissory notes 20; business systems such as filing and indexing).
  - CBSE Senior Secondary Curriculum 2026-27 (cbseacademic.nic.in), as on
    commerce-home-tutor-noida and the national accountancy / economics pages:
    Accountancy, Business Studies and Economics each 80 + 20; Mathematics or
    Applied Mathematics, not both.
  - CISCE ISC Accounts, Commerce and Economics (cisce.org), as on the
    national and Mumbai commerce pages.
  - NTA CUET (UG) (cuet.nta.nic.in): accountancy, business studies and
    economics among domain subjects, based on Class 12, as on the national
    pages. ICAI CA Foundation (icai.org): Accounting, Business Laws,
    Quantitative Aptitude, Business Economics. No eligibility or dates stated.
  Local detail only from database/seo-content/zones/lucknow.json,
  areas/lucknow-research.json, lucknow-zone-guides.json and the Lucknow hub.
  Fee wording is the approved sentence. FAQs render from
  faqs/commerce-home-tutor-lucknow.php.
  Area links render only when that Lucknow area page exists and is active.
--}}
@php
  $cmLkSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cmLkA = function (string $slug, string $label) use ($cmLkSlugs) {
      return in_array($slug, $cmLkSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cmLkGuideTitle">
  <h2 id="cmLkGuideTitle">Commerce tutors in Lucknow: lekhashastra, business studies and economics, planned together</h2>

  <p class="nx-guide__lede">
    A commerce student in Lucknow may be taking the UP Board's commerce group in Hindi or English, ISC with accounts and
    commerce, or CBSE with accountancy, business studies and economics. The names differ, but the shape of the two years
    is similar: accountancy that builds chapter on chapter, a theory subject that rewards structured answers, economics
    with diagrams and data, and often maths or applied maths alongside. This NXTutors Academic Team page sets out what each
    board's syllabus weights, where a tutor helps most, how school commerce connects to CUET and CA Foundation, and how
    to find a tutor who can reach your part of the city.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cmlk-up">UP Board commerce group</a> ·
    <a href="#cmlk-paper">The accountancy paper</a> ·
    <a href="#cmlk-boards">CBSE and ISC</a> ·
    <a href="#cmlk-one">One tutor or three</a> ·
    <a href="#cmlk-plan">Two-year plan</a> ·
    <a href="#cmlk-next">CUET and CA</a> ·
    <a href="#cmlk-class10">Class 10 Commerce</a> ·
    <a href="#cmlk-hindi">Hindi terms</a> ·
    <a href="#cmlk-zones">Reaching you</a> ·
    <a href="#cmlk-demo">Demo</a> ·
    <a href="#cmlk-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cmlk-up">What does the UP Board's commerce group cover?</h2>
  <p>
    The Madhyamik Shiksha Parishad, Uttar Pradesh, groups Intermediate subjects into agriculture, arts, commerce and
    science, and publishes career guidance for each group. For commerce, the core papers are accountancy (lekhashastra),
    business studies (vyavsaay adhyayan) and economics, with maths, English and Hindi or General Hindi available
    alongside. The 2026-27 syllabi show where the marks sit:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>UP Board commerce subjects (2026-27): what carries the marks</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Class 11</th><th scope="col">Class 12</th></tr>
    </thead>
    <tbody>
      <tr><td>Accountancy</td><td>100 marks: financial statements carry 45 (20 and 25), depreciation, provisions and reserves 20, bank reconciliation with trial balance and rectification 15</td><td>Partnership (admission, retirement or death, and dissolution, 13 each); share capital 13; debentures and company financial statements 12 each; ratios and cash flow 9 each</td></tr>
      <tr><td>Business studies</td><td>100 marks: business, trade and commerce, forms of organisation, enterprises and business services in the opening units, 16 each</td><td>Principles and functions of management, business environment 10, marketing 16, consumer protection under the 2019 Act 12</td></tr>
      <tr><td>Economics</td><td>100 marks, 33 to pass: statistics for economics (data collection and presentation alone 20) and Indian economic development (current challenges 25)</td><td>A 100-mark paper split evenly: introductory microeconomics 50, introductory macroeconomics 50</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The same syllabi list four school-level unit tests for remedial teaching, in July, August, November and December,
    whose marks are not added to the result. They make natural checkpoints for a tutor. Our
    <a href="{{ url('/up-board-tutor-lucknow') }}">UP Board tutors in Lucknow</a> page covers the board more widely.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-paper">What does the UP Board Class 12 accountancy paper look like?</h2>
  <p>
    The board's 2026-27 model paper for Class 12 lekhashastra runs for three hours and fifteen minutes, with the first
    fifteen minutes set aside for reading, and carries 100 marks. Every question is compulsory, in four bands:
  </p>
  <ol>
    <li><strong>Questions 1 to 10:</strong> multiple choice.</li>
    <li><strong>Questions 11 to 20:</strong> very short answers of about 30 words.</li>
    <li><strong>Questions 21 to 26:</strong> short answers of about 100 words, including practical problems to be solved.</li>
    <li><strong>Questions 27 to 30:</strong> long answers.</li>
  </ol>
  <p>
    With no choice of questions, a student cannot skip a weak chapter. A tutor should use the reading time in practice
    papers to plan the order of attack, drill the long partnership and company-account questions to full length, and
    insist on neat ledger formats, since presentation decides marks in practical questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-boards">How do CBSE and ISC commerce compare?</h2>
  <ul>
    <li><strong>CBSE:</strong> accountancy, business studies and economics are each marked 80 in the board paper and 20 internally. Students take either Mathematics or Applied Mathematics, not both. Papers follow the NCERT books, with case-based questions in business studies and economics.</li>
    <li><strong>ISC:</strong> commerce students usually combine Accounts, Commerce and Economics with English and often maths. Lucknow's long CISCE tradition means tutors familiar with ISC commerce are not hard to find, but ISC answers are long and need practice in structure.</li>
  </ul>
  <p>
    See <a href="{{ url('/cbse-home-tutor-lucknow') }}">CBSE</a> and <a href="{{ url('/icse-home-tutor-lucknow') }}">ICSE
    and ISC</a> tutors in Lucknow, and the subject pages for <a href="{{ url('/accountancy-home-tutor-lucknow') }}">accountancy</a>
    and <a href="{{ url('/economics-home-tutor-lucknow') }}">economics</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-one">Should one tutor teach all of commerce?</h2>
  <p>
    It depends on the gap. One tutor for accountancy and business studies is common and sensible, as the two share
    vocabulary and many teachers handle both. Economics is a different discipline, with graphs, data and reasoning, and
    a student weak in it often does better with someone who teaches economics properly. Maths or applied maths is a
    separate case again. A practical rule: pay for a specialist in the subject with the lowest marks, and let one
    generalist cover the rest if needed.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where commerce marks usually slip</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Common weak spot</th><th scope="col">What fixes it</th></tr>
    </thead>
    <tbody>
      <tr><td>Accountancy</td><td>Journal entries done by memory; partnership adjustments; cash flow classification</td><td>Daily short practice, then full-length questions in the board's format</td></tr>
      <tr><td>Business studies</td><td>Answers that list points without explaining them</td><td>Answer frames: point, explanation, example</td></tr>
      <tr><td>Economics</td><td>Diagrams drawn without labels; national income numericals</td><td>Labelled-diagram drills and step-by-step calculation practice</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-plan">A two-year commerce plan</h2>
  <ol>
    <li><strong>Class 11, first term:</strong> double entry, journals and ledgers until they are automatic; data collection and presentation in economics.</li>
    <li><strong>Class 11, second term:</strong> depreciation and final accounts, the biggest Class 11 accountancy units; Indian economic development.</li>
    <li><strong>Class 12, first term:</strong> partnership accounts, especially admission of a partner; principles of management; microeconomics.</li>
    <li><strong>Class 12, second term:</strong> company accounts, ratios and cash flow; marketing and consumer protection; macroeconomics; full papers before the pre-boards.</li>
  </ol>
  <p>
    Week to week, a commerce student usually needs less tutor time than a science student but more regular practice.
    Two accountancy sessions and one economics session a week, with twenty minutes of journal or ledger questions on
    the other days, keeps most students level. Business studies can often be handled by self-study, with the tutor
    marking one long answer each week. In the month before each unit test, swap one session for a timed paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-next">How do CUET and CA Foundation relate to school commerce?</h2>
  <p>
    CUET UG, run by NTA for central and participating universities, includes accountancy, business studies and economics
    among its domain subjects, based on the Class 12 syllabus, so strong board preparation is also CUET preparation; add
    timed objective practice in the last months. ICAI's CA Foundation papers, in accounting, business law, quantitative
    aptitude and business economics, build directly on Class 11 and 12 commerce. Take eligibility and dates only
    from cuet.nta.nic.in and icai.org. Our <a href="{{ url('/blog/cuet-preparation-2025-complete-ug-subject-strategies-syllabus-tips-pyqs-and-checklist') }}">CUET
    preparation guide</a> covers the test in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-class10">The UP Board's Class 10 Commerce subject</h2>
  <p>
    UP Board students can meet commerce before Intermediate. The board's Class 10 Commerce syllabus has a 70-mark written
    paper and 30 internal marks at school, and its first unit, worth 20 marks, covers final accounts, bank
    reconciliation, cheques, bills, hundis and promissory notes, followed by business systems such as filing and
    indexing. A student who has taken it starts Class 11 accountancy with a head start, and a tutor should build on it
    rather than repeat it. A student coming from CBSE or ICSE without that subject should expect to spend the first few
    weeks of Class 11 on the basic vocabulary of accounts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-hindi">Hindi-medium commerce: learning the terms the paper uses</h2>
  <p>
    A UP Board commerce student writing in Hindi meets a vocabulary that coaching notes and online videos, mostly in
    English, do not use. The board's own syllabi use terms such as these, and a tutor should teach both columns:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Accountancy terms as the UP Board syllabus names them</caption>
    <thead>
      <tr><th scope="col">English</th><th scope="col">Term in the board's Hindi syllabus</th></tr>
    </thead>
    <tbody>
      <tr><td>Accountancy</td><td>लेखाशास्त्र (lekhashastra)</td></tr>
      <tr><td>Business studies</td><td>व्यवसाय अध्ययन (vyavsaay adhyayan)</td></tr>
      <tr><td>Partnership</td><td>साझेदारी (saajhedari)</td></tr>
      <tr><td>Goodwill</td><td>ख्याति (khyati)</td></tr>
      <tr><td>Depreciation, provisions and reserves</td><td>ह्रास, प्रावधान और संचय</td></tr>
      <tr><td>Trial balance</td><td>तलपट (talpat)</td></tr>
      <tr><td>Bank reconciliation statement</td><td>बैंक समाधान विवरण</td></tr>
      <tr><td>Cash flow statement</td><td>रोकड़ प्रवाह विवरण</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Ask the tutor to keep a running two-column glossary in the back of the notebook. It costs a few minutes a week and
    removes a whole class of avoidable mistakes in the exam hall, especially for students who also prepare for CUET in
    English.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-zones">Reaching a commerce tutor from your part of Lucknow</h2>
  <p>
    Along the Red Line, from Munshi Pulia in the <a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">east</a>
    to Badshahnagar and IT College near the <a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Trans-Gomti
    colonies</a>, the underground stations of <a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj
    and Lalbagh</a>, and the <a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Kanpur Road</a>
    stations, a commerce tutor can travel some distance by metro. In the
    <a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Shaheed Path townships</a>,
    Gomti Nagar Extension and Jankipuram, look for a tutor living nearby for home visits. Accountancy also works well
    online when the tutor can see the ledger through a camera or a shared spreadsheet, so a specialist across the city
    is a realistic choice. See <a href="{{ url('/online-tutor-lucknow') }}">online tutors for Lucknow</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-demo">What to test in a commerce demo</h2>
  <ul>
    <li>Give the tutor a partnership adjustment or a cash flow question and watch the working, not just the answer.</li>
    <li>Ask how they teach a business studies answer to earn full marks.</li>
    <li>For economics, ask them to draw and explain one diagram, fully labelled.</li>
    <li>For UP Board, check they teach in your child's medium and know the model paper's four bands.</li>
    <li>Ask for a plan to the next unit test or term exam.</li>
  </ul>
  <p>
    The demo costs nothing, and switching later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is shown.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cmlk-fees">Commerce tuition fees in Lucknow, and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For commerce, the number of subjects, the board, CUET or CA-level depth and the journey shape the quote, and each
    tutor's fee is visible before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a>.
  </p>
  <p>
    {!! $cmLkA('mahanagar', 'Mahanagar') !!} is close to Badshahnagar and IT College stations, and most homes are
    houses with a doorstep arrival. In {!! $cmLkA('hazratganj', 'Hazratganj') !!}, a tutor can step off at its own
    underground station; in {!! $cmLkA('chowk', 'Chowk') !!}, still waiting for the Blue Line, a two-wheeler and a
    landmark help. {!! $cmLkA('gomti-nagar', 'Gomti Nagar') !!} families should give the khand with the address, and
    {!! $cmLkA('alambagh', 'Alambagh') !!}, with two Red Line stations, is easy to reach outside the Kanpur Road peak.
    {!! $cmLkA('vrindavan-yojana', 'Vrindavan Yojana') !!} has no metro, so a tutor from the township or Telibagh, or an
    online specialist, works well.
  </p>
  <p>
    Related pages: <a href="{{ url('/class-11-home-tutor-lucknow') }}">Class 11</a> and
    <a href="{{ url('/class-12-home-tutor-lucknow') }}">Class 12 tutors in Lucknow</a>. Tell us the board, medium,
    subjects, locality and free hours, and we send two or three matched commerce tutors with fees.
    <a href="{{ url('/demo-class') }}">Request a free demo</a>, see <a href="{{ url('/tutors') }}">tutor profiles</a>, or
    teachers can see <a href="{{ url('/tuition-jobs/lucknow') }}">tuition jobs in Lucknow</a>.
  </p>
  </section>

  </div>
</article>
