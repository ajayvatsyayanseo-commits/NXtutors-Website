{{--
  Board hub: "Tamil Nadu Board SSLC & HSC tutor Chennai". Author: nxtutors
  (NXTutors Academic Team). No school, college, coaching, society or people
  names. No candidate counts and no dates beyond the current official schedule.

  Official sources (all read 2 Oct 2026):
  - dge.tn.gov.in/aboutus.html: the Directorate of Government Examinations
    conducts the Board examinations for State Board students in Std X and XII;
    seven regional offices (Madurai, Coimbatore, Tiruchirappalli, Tirunelveli,
    Chennai, Cuddalore, Vellore); the State Board of School Examinations was
    constituted by merging the Board of Secondary Education and the Board of
    Higher Secondary Examinations, G.O.(Ms) No.26, School Education Department,
    16.02.2011.
  - dge.tn.gov.in/function.html: SSLC and Higher Secondary (12th standard) are
    the main examinations; special supplementary examinations for X and XII for
    students who failed in March/April, from June/July 2012 irrespective of the
    number of subjects failed; NMMS eligibility (passed VII from Central/State
    Government or aided schools with 55% (50% SC/ST), studying VIII, parental
    income up to Rs 1,50,000; Rs 6,000 a year from IX to XII); NTSE Level I.
  - dge.tn.gov.in/examination.html: SSLC and Higher Secondary sessions March/June.
  - dge.tn.gov.in/timetable.html and docs/hsesslc/2026/timetable_12_11A_10_2026.pdf
    (dated 04.11.2025): 2025-26 schedule with HSE second year (Class 12), HSE
    first year (Class 11) "only for arrear candidates" (2018 to 2025 arrears)
    and SSLC (Class 10); practical examinations in February before the theory
    papers; exams 10.00 a.m. to 1.15 p.m. with 10 minutes to read the paper, 5
    minutes to verify particulars and three hours of writing; SSLC Part I
    language, Part II English, Part III Mathematics, Science, Social Science,
    Part IV optional language; HSE subject list (Physics, Chemistry,
    Mathematics, Biology, Botany, Zoology, Computer Science, Computer
    Applications, Bio-Chemistry, Micro Biology, Accountancy, Commerce,
    Economics, Business Mathematics and Statistics, History, Geography,
    Political Science, Statistics, Advanced Language (Tamil), Communicative
    English, Ethics and Indian Culture, Home Science, Nutrition and Dietetics,
    vocational subjects and Employability Skills).
  - dge.tn.gov.in index and docs/faq_english.pdf: Matric and Anglo-Indian
    certificate forms and an Additional Secretary (Matric) contact; Higher
    Secondary contact is the Joint Director (Higher Secondary).
  - apply1.tndge.org (the Directorate's notification portal, linked from
    dge.tn.gov.in): SSLC and HSE notification lists (scan copy of answer
    scripts, re-totalling and revaluation forms, supplementary examinations,
    SSLC science practical enrolment for private candidates); Sample Question
    Papers page: SSLC Sample Question Paper V (Mathematics 3 h, 100 marks, Part
    I 14x1, Part II any ten of the 2-mark questions with one compulsory, Part
    III any ten of the 5-mark questions with one compulsory, Part IV 2x8 with
    alternatives on constructions and graphs; Science 3 h, 75 marks, 12x1, any
    seven 2-mark with one compulsory, any seven 4-mark with one compulsory, 3x7
    with diagrams; papers in Tamil & English version) and HSE II Year Sample
    Question Paper V (Mathematics 90 marks: 20x1, any seven 2-mark with one
    compulsory, any seven 3-mark with one compulsory, 7x5 all answered;
    Physics and Chemistry 70 marks: 15x1, any six 2-mark, any six 3-mark, each
    with one compulsory, 5x5; Biology 70 marks in Bio-Botany and Bio-Zoology
    parts of 35 marks written in separate answer books; English 90).
  - HSE March 2026 result press release (apply1.tndge.org): results on
    tnresults.nic.in, dge.tn.gov.in and results.digilocker.gov.in.
  - tneaonline.org: the official page title "Tamil Nadu Engineering Admissions
    (TNEA Online Counselling)". Nothing else from it is stated.
  The textbook corporation site did not load, so the state textbooks are
  described only in general terms. Local detail only from the Chennai hub
  view, zones/chennai.json, chennai-research.json and chennai-zone-guides.json.
  Fee wording is the approved sentence. FAQs render from
  faqs/tamil-nadu-board-tutor-chennai.php.
--}}
@php
  $tnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tnA = function (string $slug, string $label) use ($tnSlugs) {
      return in_array($slug, $tnSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="tnbGuideTitle">
  <h2 id="tnbGuideTitle">Tamil Nadu State Board tutors in Chennai: SSLC, then the +1 and +2 years</h2>

  <p class="nx-guide__lede">
    For a large share of Chennai's children, school ends with two sets of state papers: the SSLC public examination
    in Class 10 and the Higher Secondary examination at the close of Class 12, usually called "+2". Both are run by the
    Directorate of Government Examinations, whose head office and one of its seven regional offices are in the city.
    Families searching for a "Samacheer" or "Matric" tutor are usually looking for exactly this board. This page lays
    out what the Directorate itself publishes: how the papers are timed, how marks are split inside a maths or science
    paper, which Higher Secondary subjects exist, what happens after results, and how a home tutor fits around all of
    it. Read every rule here against the Directorate's own site before you plan a year on it.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tnb-who">Who sets the papers</a> ·
    <a href="#tnb-season">The exam season</a> ·
    <a href="#tnb-sslc">Inside the SSLC papers</a> ·
    <a href="#tnb-groups">+1 and +2 subjects</a> ·
    <a href="#tnb-plus2">Inside the +2 papers</a> ·
    <a href="#tnb-after">After the results</a> ·
    <a href="#tnb-compare">Against CBSE and ICSE</a> ·
    <a href="#tnb-next">Engineering and other routes</a> ·
    <a href="#tnb-plan">A year-by-year plan</a> ·
    <a href="#tnb-travel">Reaching your home</a> ·
    <a href="#tnb-demo">The demo</a> ·
    <a href="#tnb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tnb-who">Who sets and marks the State Board papers?</h2>
  <p>
    The Directorate of Government Examinations (DGE) conducts the board examinations for State Board students in
    Standards X and XII and issues their mark certificates. In 2011 the state brought the old Board of Secondary
    Education and the Board of Higher Secondary Examinations together as a single State Board of School Examinations,
    so one body now stands behind both the SSLC and the Higher Secondary certificate. The Directorate also runs
    scholarship tests that matter to younger children: the National Means-cum-Merit Scholarship (NMMS) test for
    eligible Class 8 students in government and aided schools, and the first level of the National Talent Search for
    Class 10 students.
  </p>
  <p>
    Many Chennai parents describe their child's school as "Matric". The Directorate's own forms still list
    Matriculation and Anglo-Indian school certificates beside SSLC and Higher Secondary ones, and it handles the
    upgrading of a Matriculation school into a higher secondary school, so for tuition purposes these children sit the
    same state papers. When you write to us, say "State Board" and the class; that is enough for us to match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-season">How the public examination season runs</h2>
  <p>
    The Directorate's schedule for 2025-26 shows the pattern families plan around. Practical examinations come first,
    in February, a week apiece for Class 12, Class 11 arrear candidates and Class 10. Theory papers follow from early
    March, with the +2 papers first and the SSLC papers running into the first week of April. On the day, the hall
    opens the paper at 10.00 a.m.: ten minutes to read it, five to check the printed particulars, and three hours of
    writing, ending at 1.15 p.m.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The three public examinations on the Directorate's 2025-26 schedule</caption>
    <thead>
      <tr><th scope="col">Examination</th><th scope="col">Who sits it</th><th scope="col">What a tutor should note</th></tr>
    </thead>
    <tbody>
      <tr><td>SSLC (Class 10)</td><td>All Class 10 State Board students</td><td>Language (Part I), English (Part II), Maths, Science and Social Science (Part III); a science practical in February</td></tr>
      <tr><td>HSE second year, "+2" (Class 12)</td><td>All Class 12 students</td><td>Language, English and the group subjects; practicals in February for subjects that have them</td></tr>
      <tr><td>HSE first year, "+1" (Class 11)</td><td>Listed for arrear candidates only (those carrying papers from 2018 to 2025)</td><td>Check with the school how Class 11 is assessed in your child's year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    That last row matters. The 2025-26 timetable prints the first-year Higher Secondary examination "only for arrear
    candidates", which is a change families with older children will remember differently. Do not plan Class 11
    around a board paper until the school confirms what applies to your child's batch; a tutor's Class 11 work should
    still be thorough, because the +2 papers build directly on it. Dates for the coming year appear on the
    Directorate's timetable page; take them from there, not from a forwarded message.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-sslc">Inside the SSLC maths and science papers</h2>
  <p>
    The Directorate publishes sample question papers, and the fifth set for Class 10 shows how marks are laid out.
    Each paper is printed in a Tamil and English version, so a student reads every question in both languages.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>SSLC Mathematics and Science in the Directorate's Sample Question Paper V</caption>
    <thead>
      <tr><th scope="col">Part</th><th scope="col">Mathematics (100 marks, 3 hours)</th><th scope="col">Science (75 marks, 3 hours)</th></tr>
    </thead>
    <tbody>
      <tr><td>I</td><td>14 multiple-choice questions, 1 mark each, all answered</td><td>12 multiple-choice questions, 1 mark each</td></tr>
      <tr><td>II</td><td>Any ten 2-mark questions; one numbered question is compulsory</td><td>Any seven 2-mark questions; one is compulsory</td></tr>
      <tr><td>III</td><td>Any ten 5-mark questions; one is compulsory</td><td>Any seven 4-mark questions; one is compulsory</td></tr>
      <tr><td>IV</td><td>Two 8-mark questions, one on geometric construction and one on drawing a graph, each with two alternatives</td><td>Three 7-mark questions, all answered, with diagrams where needed</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Read the maths column the way an examiner does. Twenty marks sit in Part IV, and both questions are about drawing:
    a triangle or tangents built to exact measurements, then a graph of a quadratic or a direct-variation situation.
    A child who has never practised with compass and graph sheet under a clock gives these away. The compulsory
    question inside Parts II and III cannot be dodged, so no chapter is truly optional. In science, the one-mark
    section and the 7-mark answers with labelled diagrams reward a student who knows the textbook's figures by heart
    and can draw them neatly. The SSLC science practical, held in February, is a separate event; private candidates
    must enrol for practical classes in advance, which tells you how seriously the board treats it.
  </p>
  <p>
    For subject depth, see our <a href="{{ url('/maths-home-tutor-chennai') }}">maths home tutors in Chennai</a> and
    <a href="{{ url('/science-home-tutor-chennai') }}">science home tutors in Chennai</a> pages; the English paper is
    covered on <a href="{{ url('/english-home-tutor-chennai') }}">English home tutors in Chennai</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-groups">Which +1 and +2 subjects can a tutor cover?</h2>
  <p>
    In the Higher Secondary years a student studies a language as Part I, English as Part II and a group of subjects as
    Part III. The Directorate's timetable lists every Part III subject that is examined, and they fall into
    recognisable groups:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Part III subjects on the Directorate's Higher Secondary timetable</caption>
    <thead>
      <tr><th scope="col">Kind of group</th><th scope="col">Subjects most often taken to a tutor</th><th scope="col">Other subjects on the list</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Mathematics, Physics, Chemistry, Biology (or Botany and Zoology separately)</td><td>Computer Science, Computer Applications, Bio-Chemistry, Micro Biology, Statistics, Home Science, Nutrition and Dietetics</td></tr>
      <tr><td>Commerce and humanities</td><td>Accountancy, Commerce, Economics, Business Mathematics and Statistics</td><td>History, Geography, Political Science, Ethics and Indian Culture, Advanced Language (Tamil), Communicative English</td></tr>
      <tr><td>Vocational</td><td>Employability Skills with the trade subject</td><td>Basic Electrical, Electronics, Civil, Mechanical and Automobile Engineering; Nursing; Textile Technology; Office Management and Secretaryship; Agricultural Science; Food Service Management; Textile and Dress Designing</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two points save confusion. Business Mathematics and Statistics is a different paper from Mathematics, so a
    commerce student needs a tutor who teaches that syllabus, not the science one. And Biology can be one combined
    paper or two papers, Botany and Zoology; tell us which. For the subjects themselves, see our
    <a href="{{ url('/physics-home-tutor-chennai') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-chennai') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-chennai') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-chennai') }}">economics</a> tutor pages for Chennai, and the guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-plus2">Inside the +2 papers: where the marks sit</h2>
  <p>
    The Class 12 sample papers keep the same four-part skeleton as the SSLC, with heavier long answers. In the
    Directorate's fifth set:
  </p>
  <ul>
    <li><strong>Mathematics, 90 marks.</strong> Twenty one-mark multiple-choice questions; any seven 2-mark and any seven 3-mark questions, each part with one compulsory question; then seven 5-mark questions, all answered, each giving a choice of two. That final part alone is 35 marks of full, set-out solutions.</li>
    <li><strong>Physics and Chemistry, 70 marks each.</strong> Fifteen one-mark questions, any six 2-mark and any six 3-mark questions (one compulsory in each), and five 5-mark questions. The practical examination is held separately in February.</li>
    <li><strong>Biology, 70 marks.</strong> Two halves of 35 marks, Bio-Botany and Bio-Zoology, written in separate answer books, each with its own one-mark, short and 5-mark sections.</li>
    <li><strong>English, 90 marks.</strong> Twenty one-mark questions open the paper, and later parts include passages and longer writing.</li>
  </ul>
  <p>
    The lesson for a tutor is arithmetic. In +2 maths, 20 marks come from multiple choice and 35 from long answers
    where every step is read, so a student needs both speed on short items and patience on full solutions. In physics
    and chemistry, the compulsory 2- and 3-mark questions are often where students who skipped a chapter lose marks
    they cannot recover by choice elsewhere.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-after">After the results: scans, revaluation and a second attempt</h2>
  <p>
    Results are published on tnresults.nic.in, on the Directorate's site and through DigiLocker. If a mark looks
    wrong, the Directorate lets students apply for a scanned copy of their answer script, then for re-totalling or
    revaluation, using the forms it posts after each examination. A student who does not pass in March or April can
    sit the special supplementary examination in June or July, and since 2012 that has been open whatever the number
    of failed subjects. A tutor can help in the weeks before a supplementary paper, but only if the family moves
    quickly once results are out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-compare">How the State Board differs from CBSE and ICSE in practice</h2>
  <ul>
    <li><strong>Choice with a catch.</strong> SSLC and +2 papers let students pick, for example, ten of the 2-mark questions, but always with a compulsory one inside the set. CBSE and ICSE papers build choice differently, so mock papers from another board do not train this habit.</li>
    <li><strong>Two languages on the page.</strong> State papers are printed in Tamil and English versions. A Tamil-medium student answers with the terms from the Tamil textbook; an English-medium student never needs the Tamil, but should know the textbook's own English wording.</li>
    <li><strong>Drawing and construction carry real weight.</strong> In SSLC maths, a fifth of the marks come from constructions and graphs; in science, from labelled diagrams.</li>
    <li><strong>Books.</strong> State Board papers follow the state's own textbooks, so the order of chapters and the worked examples differ from NCERT or CISCE books even where the topic is the same.</li>
  </ul>
  <p>
    If your child is on another board, our <a href="{{ url('/cbse-home-tutor-chennai') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-chennai') }}">ICSE and ISC</a>, <a href="{{ url('/ib-tutor-chennai') }}">IB</a>
    and <a href="{{ url('/igcse-tutor-chennai') }}">IGCSE</a> pages for Chennai cover those papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-next">Engineering admission and the national entrances</h2>
  <p>
    Tamil Nadu's engineering admission is a counselling process, not a separate state entrance paper; its official
    site describes itself as Tamil Nadu Engineering Admissions (TNEA Online Counselling). Read the current
    information brochure there for how +2 marks are used, because the rules are set afresh each year and we do not
    restate them. For students who also want national exams, a tutor can plan +2 board work alongside
    <a href="{{ url('/jee-home-tutor-chennai') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-chennai') }}">NEET</a>
    preparation; our Chennai pages for both explain how the week is shared.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-plan">A State Board tuition plan, year by year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How tutoring time is usually spent from Class 9 to +2</caption>
    <thead>
      <tr><th scope="col">Year</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>Maths and science chapters at the school's pace; constructions and graph work started early; neat diagrams</td><td>Two</td></tr>
      <tr><td>Class 10 (SSLC)</td><td>The four-part paper drilled part by part; the compulsory questions; the sample papers under time; practical preparation before February</td><td>Two or three</td></tr>
      <tr><td>Class 11 (+1)</td><td>The new group subjects at full depth, because +2 builds on them; school assessments</td><td>One per subject</td></tr>
      <tr><td>Class 12 (+2)</td><td>Full papers, the 5-mark answers written out completely, practical records, and any entrance plan</td><td>Two per core subject before the papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Bright Class 8 students in government or aided schools may also be eligible for the NMMS scholarship test that the
    Directorate runs; ask the school, and a maths tutor can add reasoning practice for it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-travel">How State Board tutors reach homes across Chennai</h2>
  <p>
    State Board families live in every zone of the city, so we match first on the line a tutor can ride to you:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur and North Chennai</a>.</strong> {!! $tnA('tondiarpet', 'Tondiarpet') !!} has both a Blue Line metro stop and a suburban station on the Gummidipoondi line. {!! $tnA('kolathur', 'Kolathur') !!} waits for its Red Line station, so tutors use Villivakkam station or a bus and finish by auto.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/mogappair-ambattur-avadi') }}">Mogappair, Ambattur and Avadi</a>.</strong> {!! $tnA('avadi', 'Avadi') !!} is a terminal on the Arakkonam suburban line; near defence establishments and in gated estates, arrange entry before the first class.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>.</strong> {!! $tnA('porur', 'Porur') !!} has no working metro yet, and its junction of three main roads clogs at office hours; late-afternoon lessons hold better.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a>.</strong> {!! $tnA('chromepet', 'Chromepet') !!} is on the suburban line along GST Road, so a tutor from Tambaram or Pallavaram can come by train and walk.</li>
    <li><strong><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam and Kodambakkam</a>.</strong> {!! $tnA('saidapet', 'Saidapet') !!} has a suburban station and two Blue Line stops, which widens the pool from both directions.</li>
  </ul>
  <p>
    Every locality is on our <a href="{{ url('/city/chennai') }}">Chennai home tutors page</a>, and the
    <a href="{{ url('/blog/west-and-north-chennai-tuition-guide') }}">west and north Chennai tuition guide</a> and
    <a href="{{ url('/blog/south-chennai-tuition-guide') }}">south Chennai tuition guide</a> go area by area.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-mode">Home, online, or a mix?</h2>
  <p>
    Constructions, graph sheets and science diagrams are easiest with a tutor at the table who can see the compass
    slip. That is why most SSLC families prefer home sessions. For +2, when school days are long and some students add
    entrance coaching, one home session and one online session a week with the same tutor is often easier to sustain,
    and online also lets a Tamil-medium student find a tutor comfortable in that medium beyond the nearest streets. Our
    comparison of <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-demo">What to ask at a State Board demo</h2>
  <ol>
    <li><strong>Which papers have you taught in the last two years?</strong> SSLC, +2 science group, +2 commerce; they are different jobs.</li>
    <li><strong>Teach me one Part IV question.</strong> For SSLC maths, ask for a construction or a graph from the Directorate's sample paper, timed.</li>
    <li><strong>Which medium?</strong> If your child writes in Tamil, ask to see an answer set out with the Tamil textbook's terms.</li>
    <li><strong>How will you handle the compulsory questions?</strong> The tutor should name them as a reason no chapter can be skipped.</li>
    <li><strong>What about practicals and records?</strong> Guided preparation, never a record written for the student.</li>
    <li><strong>Which line do you travel on?</strong> Metro, MRTS, suburban train or road, and what time you can reliably arrive.</li>
  </ol>
  <p>
    We send two or three matched tutors and you see each fee before the demo; the first class is free and switching
    tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>
    before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tnb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For State Board work, the class, the number of subjects and the tutor's journey move the figure; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">home tuition fees in Chennai</a>.
  </p>
  <p>
    Send us the class, the group for +1 or +2, the medium, the subjects, your locality and nearest station, and the
    hours you can keep free. The first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or, if you teach State Board subjects, see
    <a href="{{ url('/tuition-jobs/chennai') }}">tuition jobs in Chennai</a>.
  </p>
  </section>

  </div>
</article>
