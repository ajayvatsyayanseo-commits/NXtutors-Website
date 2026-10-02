{{--
  Long-form guide for "Class 10 home tutor Lucknow" (CBSE, ICSE, UP Board High
  School and IGCSE board year). Authors: Abhinandan Tiwary (Class 10 CBSE and
  ICSE maths) and Aaditya Kashyap (CBSE and ICSE science). Role statements
  only. No schools named. Kept distinct from class-10-home-tutor-noida,
  -mumbai, -gurgaon and the other city versions.

  Official sources:
  - CBSE (as stated on cbse-home-tutor-lucknow, from cbseacademic.nic.in
    Curriculum 2026-27 Secondary and the cbse.gov.in notification of
    14.02.2026): 80 + 20 in major subjects; 33% to pass; about half of each
    paper competency-focused; Maths Standard/Basic continues for the 2026-27
    Class X batch; two Class X board exams, the second optional for improving
    up to three subjects among science, maths, social science and languages.
    No 2027 dates.
  - CISCE (as stated on icse-home-tutor-lucknow, from cisce.org): ICSE
    Mathematics one 3-hour, 80-mark paper + 20 internal from at least two
    assignments, marked by the teacher and an external examiner; ICSE
    Physics, Chemistry, Biology 2-hour 80-mark papers + 20 practical.
  - Cambridge IGCSE 0580: Core and Extended tiers (cambridgeinternational.org),
    as on the verified Class 10 pages.
  - UP Board: Madhyamik Shiksha Parishad, Uttar Pradesh (upmsp.edu.in, read
    2 Oct 2026): AboutUs.aspx (High School examination after ten years of
    schooling; set up 1921 at Prayagraj); home page (High School improvement /
    compartment examination; online scrutiny of answer books; Samadhan portal
    for mark-sheet and certificate problems; model papers and question bank);
    Downloads/Syllabus/Class10/928-Maths-Class-10.pdf (2026-27): 70-mark
    written exam + 30 internal at school level with project work; pass 23 +
    10 = 33; units number systems 5, algebra 18, coordinate geometry 5,
    geometry 10, trigonometry 12, mensuration 10, statistics and probability
    10; heights and distances use only 30, 45 and 60 degrees and at most two
    right triangles; surface area and volume combine at most two solids;
    internal 30 = August project + oral questions (5 + 5),
    December project + practice-book record (5 + 5), four unit tests
    converted to 10; one project from a list plus a compulsory project from
    the prescribed book on India's traditional mathematical knowledge.
    Downloads/Syllabus/Class10/931-Science-Class-10.pdf (2026-27): 70 written
    + 30 practical exam; pass 23 + 10; units chemical substances 20, world of
    living 20, natural phenomena 12, effects of current 13, natural resources
    5. No exam date is claimed.
  School-year shape only as the Lucknow hub states it. Local detail only from
  database/seo-content/zones/lucknow.json, areas/lucknow-research.json and
  lucknow-zone-guides.json. Fee range is the approved sentence.
  FAQs: faqs/class-10-home-tutor-lucknow.php.
  Area links render only when that Lucknow area page exists and is active.
--}}
@php
  $c10LkSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $c10LkA = function (string $slug, string $label) use ($c10LkSlugs) {
      return in_array($slug, $c10LkSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="c10LkGuideTitle">
  <h2 id="c10LkGuideTitle">Class 10 home tutors in Lucknow: UP Board High School, CBSE, ICSE and IGCSE</h2>

  <p class="nx-guide__lede">
    In Lucknow the Class 10 year can end in four different exams. A UP Board student writes the High School examination,
    often in Hindi; a CBSE student now has a first board exam and an optional second sitting; an ICSE student faces long
    papers across a wide syllabus; and a smaller group sits IGCSE. The chapters overlap, but internal marks, paper
    styles and calendars do not. This page, by Abhinandan Tiwary, NXTutors' author for Class 10 CBSE and ICSE maths, and
    Aaditya Kashyap, who writes our CBSE and ICSE science pages, sets out what each route expects, how the UP Board's internal
    marks are earned, which subjects deserve paid help, and how to test a tutor in the free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#c10lk-up">UP Board High School</a> ·
    <a href="#c10lk-internal">Earning the 30 internal marks</a> ·
    <a href="#c10lk-cbse">CBSE</a> ·
    <a href="#c10lk-icse">ICSE and IGCSE</a> ·
    <a href="#c10lk-subjects">Which subjects</a> ·
    <a href="#c10lk-months">Month by month</a> ·
    <a href="#c10lk-zones">Getting there</a> ·
    <a href="#c10lk-mode">Home or online</a> ·
    <a href="#c10lk-demo">Demo</a> ·
    <a href="#c10lk-fees">Fees</a> ·
    <a href="#c10lk-where">Localities</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="c10lk-up">How is UP Board High School maths and science marked?</h2>
  <p>
    The Madhyamik Shiksha Parishad, Uttar Pradesh, set up in 1921 at Prayagraj, conducts the High School examination
    after ten years of schooling. Its 2026-27 syllabi give each of the two core subjects a 70-mark written paper and 30
    further marks earned during the year, and a pass needs 23 in the written paper and 10 in the rest, 33 in all.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>UP Board Class 10 (2026-27): marks by unit in the 70-mark written papers</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Units and marks</th><th scope="col">The other 30</th></tr>
    </thead>
    <tbody>
      <tr><td>Maths</td><td>Algebra 18, trigonometry 12, geometry 10, mensuration 10, statistics and probability 10, number systems 5, coordinate geometry 5</td><td>Internal assessment at school, with projects</td></tr>
      <tr><td>Science</td><td>Chemical substances 20, world of living 20, effects of current 13, natural phenomena 12, natural resources 5</td><td>A practical examination</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two details from the maths syllabus are worth a tutor's attention. Heights and distances questions use only angles of
    30, 45 and 60 degrees and involve no more than two right triangles, and surface-area and volume questions combine at
    most two solids. Practising beyond those limits wastes time that algebra and trigonometry, together 30 of the 70
    marks, deserve. Our <a href="{{ url('/up-board-tutor-lucknow') }}">UP Board tutors in Lucknow</a> page covers the
    board across classes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-internal">How are the 30 internal maths marks earned?</h2>
  <p>
    For 2026-27 the board splits the maths internal assessment into three parts, all at school level:
  </p>
  <ol>
    <li><strong>August:</strong> a project and oral questions, five marks each.</li>
    <li><strong>December:</strong> a project and the record of the practice book, five marks each.</li>
    <li><strong>Four unit tests</strong> through the year, in July, August, November and December, added together and scaled to ten marks.</li>
  </ol>
  <p>
    Every student prepares one project from a list the board gives, such as checking Pythagoras' theorem with a paper
    model or explaining the steps of a bank loan, plus one compulsory project drawn from the prescribed book on India's
    traditional mathematical knowledge. A tutor can help the student plan the project and practise for the oral
    questions, and should make sure the practice book is kept up through the year, but the work must be the student's
    own.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-cbse">What does the CBSE Class 10 year involve now?</h2>
  <p>
    CBSE marks the main subjects out of 80 in the board paper and 20 internally, and a student needs 33% to pass. About
    half of each paper tests applying ideas, through cases, sources and real-life contexts. The 2026-27 batch still
    chooses between Maths Standard and Basic; later batches move to a common course. Since 2026 there are two board
    exams: the first for everyone, the second optional, for improving up to three subjects among science, maths, social
    science and languages. Dates for 2027 had not been announced when this was written, so check cbse.gov.in. Treat the
    second sitting as a fallback and aim to get the first right. More on our
    <a href="{{ url('/cbse-home-tutor-lucknow') }}">CBSE tutors in Lucknow</a> page and in our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a> guide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-icse">ICSE and IGCSE in the board year</h2>
  <p>
    Lucknow has a strong, long-standing ICSE tradition, so tutors who know CISCE papers well are easier to find here than
    in many cities. ICSE maths is a three-hour, 80-mark paper with 20 internal marks from at least two assignments,
    marked by the teacher and an external examiner; physics, chemistry and biology are two-hour, 80-mark papers with 20
    practical marks each. The challenge is breadth: every chapter can appear, and answers lose marks for skipped steps.
    For IGCSE, the main decision is the tier, Core or Extended in Cambridge 0580 maths, which caps or opens the grade
    range. See <a href="{{ url('/icse-home-tutor-lucknow') }}">ICSE</a> and
    <a href="{{ url('/igcse-tutor-lucknow') }}">IGCSE</a> tutors in Lucknow, and our article on
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-subjects">Which Class 10 subjects are worth paying for?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where a Class 10 tutor earns their fee</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Pay for a tutor if</th><th scope="col">Self-study may do if</th></tr>
    </thead>
    <tbody>
      <tr><td>Maths</td><td>Algebra or trigonometry from Class 9 is shaky, or working is untidy</td><td>Scores are steady and only speed is lacking</td></tr>
      <tr><td>Science</td><td>Numericals in electricity, chemical equations or biology diagrams lose marks</td><td>Only definitions need revising</td></tr>
      <tr><td>Hindi</td><td>Grammar and essay writing are weak, particularly for UP Board or Hindi-medium students</td><td>Reading and writing are fluent</td></tr>
      <tr><td>English</td><td>ICSE literature answers or writing formats are thin</td><td>A few format drills will close the gap</td></tr>
      <tr><td>Social science</td><td>Very far behind</td><td>A reading timetable and map practice suffice</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    See <a href="{{ url('/maths-home-tutor-lucknow') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-lucknow') }}">science home tutors in Lucknow</a>, and our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-months">A month-by-month board year</h2>
  <ul>
    <li><strong>April to June:</strong> collect the current syllabus for every subject; close Class 9 gaps; for UP Board, finish the summer homework that counts in the first unit test.</li>
    <li><strong>July to September:</strong> steady chapters with weekly tests; the August project and oral for UP Board maths; first-term exams in many schools.</li>
    <li><strong>October to December:</strong> complete the syllabus, internal work and practicals; the December project and practice-book check for UP Board; start timed papers ahead of pre-boards around the new year.</li>
    <li><strong>January onwards:</strong> full papers under exam conditions, then only revision from the mistakes notebook until the board's own timetable.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-zones">Getting a board-year tutor to your home</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 10 visits by zone: the route and the risk</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route a tutor is likely to use</th><th scope="col">What can make a visit late</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/lucknow/zone/gomti-nagar-indira-nagar-chinhat') }}">Gomti Nagar, Indira Nagar and Chinhat</a></td><td>Red Line to Lekhraj Market, Bhootnath or Munshi Pulia; by road to the Extension and Chinhat</td><td>Shaheed Path and Faizabad Road at office hours</td></tr>
      <tr><td><a href="{{ url('/city/lucknow/zone/mahanagar-aliganj-jankipuram') }}">Mahanagar, Aliganj and Jankipuram</a></td><td>Badshahnagar, IT College or Vishwavidyalaya, then an auto; road only beyond Aliganj</td><td>Sitapur Road, Kursi Road and the Ring Road at Tedhi Pulia</td></tr>
      <tr><td><a href="{{ url('/city/lucknow/zone/hazratganj-lalbagh-aminabad') }}">Hazratganj, Lalbagh and Aminabad</a></td><td>Hazratganj, Sachivalaya or Hussainganj stations, then a walk</td><td>Market crowds from late afternoon</td></tr>
      <tr><td><a href="{{ url('/city/lucknow/zone/alambagh-ashiyana-rajajipuram') }}">Alambagh, Ashiyana and Rajajipuram</a></td><td>Alambagh, Singar Nagar or Krishna Nagar stations</td><td>Kanpur Road in both rush hours</td></tr>
      <tr><td><a href="{{ url('/city/lucknow/zone/sushant-golf-city-vrindavan-yojana-telibagh') }}">Sushant Golf City, Vrindavan Yojana and Telibagh</a></td><td>Car, two-wheeler or cab via Shaheed Path or Raebareli Road</td><td>School and office times on Raebareli Road</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-mode">Should Class 10 tuition be at home or online?</h2>
  <p>
    For maths and science, a tutor at the table sees every step and every diagram, which matters most in the board year.
    Online helps when the right tutor lives far away, an ICSE physics specialist on the other side of the Gomti for
    instance, or when the exam months make any journey a waste of time. Keep the working visible with a phone above the
    notebook or a tablet and stylus. A weekend home session for long practice plus a short online check midweek suits
    many families.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-demo">How to use the free demo in Class 10</h2>
  <ul>
    <li><strong>Ask about the paper.</strong> For UP Board: the 70 and 30 split, the projects and the unit tests. For CBSE: Standard or Basic and the second exam. For ICSE: internal assignments. For IGCSE: the tier.</li>
    <li><strong>Hand over a marked test</strong> and ask exactly where marks were lost.</li>
    <li><strong>Watch the marking.</strong> Steps, units and labels, not just the final answer.</li>
    <li><strong>Check the medium.</strong> A Hindi-medium student needs a tutor who explains and writes in Hindi.</li>
    <li><strong>Ask for a plan</strong> that includes full papers before the pre-boards.</li>
  </ul>
  <p>
    If the demo is not right, another shortlisted tutor can give one, and there is no charge for changing tutor later.
    Every tutor who signs up completes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> first. See also our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-fees">Class 10 tuition fees in Lucknow</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For Class 10, the board, the number of subjects, the tutor's board-year experience, the journey and the number of
    sessions a week set the figure. Each tutor sets a fee, shown on your shortlist before the demo. Read the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="c10lk-where">Where we match Class 10 tutors in Lucknow</h2>
  <p>
    {!! $c10LkA('aliganj', 'Aliganj') !!}, one of the biggest colonies north of the river, is laid out in lettered
    sectors of plotted houses; Badshahnagar is the nearest station, and a sector letter with the house number brings
    the tutor straight to you. {!! $c10LkA('nirala-nagar', 'Nirala Nagar') !!}, with its parks and wide roads, is a
    short ride from IT College station; start a little earlier on school days, as traffic towards Hazratganj builds in
    the evening. In {!! $c10LkA('chinhat', 'Chinhat') !!}, on the Faizabad Road, there is no metro, so a tutor from
    Chinhat or Gomti Nagar is the practical choice in the board year.
  </p>
  <p>
    {!! $c10LkA('lalbagh', 'Lalbagh') !!} has Sachivalaya station within it, which makes it easy for tutors from Indira
    Nagar or Alambagh to arrive by metro and walk; send the floor number, as many buildings have no guard.
    {!! $c10LkA('alambagh', 'Alambagh') !!} has two Red Line stations and a mix of houses, builder floors and some gated
    communities; avoid the evening peak on Kanpur Road. {!! $c10LkA('telibagh', 'Telibagh') !!}, on Raebareli Road, is
    mainly houses with no gate to clear, but with no metro, a tutor from Telibagh or Vrindavan Yojana is easiest to keep.
  </p>
  <p>
    The year before is on <a href="{{ url('/class-9-home-tutor-lucknow') }}">Class 9 tutors in Lucknow</a>, and the
    next step on <a href="{{ url('/class-11-home-tutor-lucknow') }}">Class 11 tutors in Lucknow</a>. Tell us the exam
    your child will write, the medium, the subjects that worry you, your locality and the hours that are free; we reply
    with two or three suitable tutors and their fees. <a href="{{ url('/demo-class') }}">Ask for a free demo</a>, compare
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or open <a href="{{ url('/city/lucknow') }}">home tutors in
    Lucknow</a> to find your neighbourhood.
  </p>
  </section>

  </div>
</article>
