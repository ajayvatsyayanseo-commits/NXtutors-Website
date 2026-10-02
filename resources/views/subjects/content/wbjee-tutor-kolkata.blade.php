{{--
  Exam page: "WBJEE tutor Kolkata" (state engineering, technology, pharmacy and
  architecture entrance). Author: nxtutors (NXTutors Academic Team). No school,
  college, university, coaching, society or people names. No candidate counts.

  Official sources (read 2 Oct 2026):
  - wbjeeb.nic.in/wbjee/ (last updated 22 Sep 2026): WBJEEB conducts the
    OMR-based WBJEE for UG Engineering & Technology, Pharmacy and
    Architecture in West Bengal; WBJEE-2026 held 24 May 2026 (Sunday);
    counselling notices for 2026.
  - WBJEE-2026 Information Bulletin (linked from wbjeeb.nic.in/wbjee/,
    cdnbbsr.s3waas.gov.in/.../2026/03/202603101506582412.pdf): Board address
    "Rupanna", DB-118, Sector I, Salt Lake City, Kolkata 700064; WBJEEB set up
    in 1962, authorised under West Bengal Act XIV of 2014; one-time OMR exam,
    two papers, tentatively April to May, preferably a Sunday; 2026 timings
    Paper I Mathematics 11:00-1:00, Paper II Physics & Chemistry 2:00-4:00;
    syllabus closely aligned with Class 11-12 curricula of recognised boards;
    pattern: Mathematics 75 questions/100 marks (Cat-1 50, Cat-2 15, Cat-3 10),
    Physics 40/50 (30, 5, 5), Chemistry 40/50 (30, 5, 5); Cat-1 one correct,
    +1, -1/4; Cat-2 one correct, +2, -1/2; Cat-3 one or more correct, +2 for
    all correct, partial 2 x (correct marked / total correct) if no wrong
    option, zero if any wrong option, no negative; ballpoint on OMR, no
    pencil, no editing; GMR from Papers I + II (engineering, technology,
    architecture, and pharmacy at one named university), PMR from Paper II
    only (pharmacy), Paper I only = no rank; tie-breaks start with fewer
    negative marks; eligibility: passed or appearing 10+2 in 2026, lower age
    17 as of 31.12.2026, no upper limit (except marine engineering); for
    admission in West Bengal: English passed with at least 30%, theory and
    practical/project passed, engineering 45% (40% reserved) in three
    subjects per AICTE table; domicile needed for government-aided college
    seats and reserved seats, domicile = 10 years' continuous residence as of
    31.12.2025 or parent a permanent resident; up to 10% of seats in
    self-financed engineering colleges for JEE (Main) 2026 candidates; TFW
    for WB-domiciled students with family income below Rs 2.5 lakh; no
    calculator, log table, watch or phone in the hall; model answer keys and
    OMR images published with an online challenge facility; candidates pick
    three exam zones; zones include North, South, Central and West Kolkata,
    Salt Lake/New Town, Howrah Maidan/Shibpur, Garia/Sonarpur/Baruipur.
    Syllabus appendix (Mathematics includes logarithms, A.P./G.P./H.P.,
    De Moivre's theorem statement only, matrices up to 3 x 3; Chemistry
    includes identification of acid and basic radicals; Physics includes
    semiconductor and Zener diodes).
  - WBCHSE semester facts as cited in west-bengal-board-tutor-kolkata
    (wbchse.wb.gov.in FAQ: Sem III MCQ normally September, Sem IV March).
  JEE Main session timing as stated in the Kolkata hub view (NTA). Local detail
  only from the Kolkata hub view, zones/kolkata.json and kolkata-zone-guides.json.
  Fee wording is the approved sentence. FAQs render from faqs/wbjee-tutor-kolkata.php.
--}}
@php
  $wbjSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $wbjA = function (string $slug, string $label) use ($wbjSlugs) {
      return in_array($slug, $wbjSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="wbjGuideTitle">
  <h2 id="wbjGuideTitle">WBJEE tutors in Kolkata: two OMR papers, three kinds of question, one plan with your boards</h2>

  <p class="nx-guide__lede">
    WBJEE is West Bengal's common entrance test for undergraduate engineering, technology, pharmacy and architecture
    courses in the state. It is set by the West Bengal Joint Entrance Examinations Board, which works from Salt Lake's
    Sector I, and it is unusual in two ways: it is still a pen-and-OMR examination, and each subject mixes ordinary
    single-answer questions with questions that can have more than one right option. A home tutor who understands
    the marking can add marks a student would otherwise give away. This page explains how the papers are built and
    scored, who can sit and who can use the rank, and how to fit WBJEE around Higher Secondary, ISC or CBSE and
    JEE Main. Everything about the exam comes from the board's website and its 2026 Information Bulletin; check the
    current year's bulletin before you rely on any detail.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#wbj-papers">The two papers</a> ·
    <a href="#wbj-marking">Scoring by category</a> ·
    <a href="#wbj-ranks">GMR and PMR</a> ·
    <a href="#wbj-eligible">Eligibility and domicile</a> ·
    <a href="#wbj-syllabus">The syllabus</a> ·
    <a href="#wbj-boards">Alongside HS, ISC or CBSE</a> ·
    <a href="#wbj-week">A tutor's week</a> ·
    <a href="#wbj-zones">Zones and travel</a> ·
    <a href="#wbj-demo">The demo</a> ·
    <a href="#wbj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="wbj-papers">What are the two WBJEE papers?</h2>
  <p>
    The bulletin describes a single sitting of two papers on one day. In 2026 the examination was held on Sunday,
    24 May, with Paper I, Mathematics, from 11 am to 1 pm and Paper II, Physics and Chemistry together, from 2 pm to
    4 pm. The board describes the exam as usually falling between April and May, preferably on a Sunday; the date
    for any later year appears only in that year's bulletin and notices.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>WBJEE question pattern as published in the 2026 bulletin</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Category 1 (1 mark)</th><th scope="col">Category 2 (2 marks)</th><th scope="col">Category 3 (2 marks)</th><th scope="col">Total</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics (Paper I)</td><td>50 questions</td><td>15 questions</td><td>10 questions</td><td>75 questions, 100 marks</td></tr>
      <tr><td>Physics (Paper II)</td><td>30 questions</td><td>5 questions</td><td>5 questions</td><td>40 questions, 50 marks</td></tr>
      <tr><td>Chemistry (Paper II)</td><td>30 questions</td><td>5 questions</td><td>5 questions</td><td>40 questions, 50 marks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two things stand out. Mathematics carries half of the 200 marks, so a student weak in maths cannot make it up
    elsewhere. And the clock is tight: 75 maths questions in two hours leaves about a minute and a half for each,
    and Paper II gives the same two hours to 80 questions across two subjects. Calculators, log tables and watches are
    not allowed in the hall, so speed has to come from method and mental arithmetic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-marking">How each category is marked, and what that means for strategy</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Scoring rules from the bulletin</caption>
    <thead>
      <tr><th scope="col">Category</th><th scope="col">Correct options</th><th scope="col">Right answer</th><th scope="col">Wrong answer</th></tr>
    </thead>
    <tbody>
      <tr><td>1</td><td>Exactly one</td><td>+1</td><td>−¼ (marking two options counts as wrong)</td></tr>
      <tr><td>2</td><td>Exactly one</td><td>+2</td><td>−½ (marking two options counts as wrong)</td></tr>
      <tr><td>3</td><td>One or more</td><td>+2 for marking all the correct options</td><td>0 if any wrong option is marked; no negative marks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Category 3 has a rule for partial answers: if a student marks some of the correct options and no wrong one, they
    earn two marks multiplied by the share of correct options they found. So with three correct options, marking two
    of them safely earns about 1.33 marks. Marking a doubtful extra option turns that into zero. The lesson a tutor
    drills is simple: in Category 3, mark only what you are sure of.
  </p>
  <p>
    In Categories 1 and 2 the penalty is a quarter of the question's value, so a pure guess among four options
    roughly breaks even, while a guess between two remaining options is usually worth taking. A tutor should also
    teach the OMR itself. The bulletin asks for a blue or black ballpoint, supplied in the hall, and says a response
    cannot be changed once marked; half-filled bubbles, ticks or overwriting may be misread. Practising on printed OMR
    sheets with a pen, never a pencil, removes one source of lost marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-ranks">General Merit Rank and Pharmacy Merit Rank</h2>
  <p>
    The board builds two ranks from the same sitting. The General Merit Rank (GMR) adds Paper I and Paper II and is
    used for engineering, technology and architecture admissions. The Pharmacy Merit Rank (PMR) uses Paper II alone
    and is used for pharmacy courses. A student who writes only Paper II receives a PMR only; one who writes only
    Paper I receives no rank at all. Rank cards are released to each candidate, and the board does not publish a
    public rank list.
  </p>
  <p>
    Ties are broken in a fixed order, and the first test for both ranks is fewer negative marks. Careless guessing
    therefore costs twice: once in the score and again if the score is tied. That makes a weekly error log, with
    every wrong answer in a mock sorted into "did not know" and "should have left", one of the most useful things a
    tutor can keep.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-eligible">Who can sit, and what admission needs on top of a rank</h2>
  <p>
    The 2026 bulletin allowed students who had passed Class 12 or were appearing in that year, with a lower age limit
    of 17 on 31 December of the exam year and no upper limit for most courses. Sitting the exam is one thing; using
    the rank is another. For admission in West Bengal the bulletin asks for a pass in English with at least 30 per
    cent, passes in both theory and practical work, and, for engineering, at least 45 per cent (40 for reserved
    categories) across three qualifying subjects. Some institutions set higher bars of their own, and the bulletin
    lists them.
  </p>
  <ul>
    <li><strong>Domicile.</strong> Seats in government-aided colleges and all reserved seats need West Bengal domicile, defined as ten years' continuous residence in the state or a parent who is a permanent resident with an address in the state.</li>
    <li><strong>JEE Main route.</strong> Up to 10 per cent of approved seats in self-financed engineering colleges are open to candidates on the JEE (Main) list, subject to the same eligibility rules.</li>
    <li><strong>Tuition Fee Waiver.</strong> A state scheme waives tuition fees for domiciled students with family income below ₹2.5 lakh a year.</li>
  </ul>
  <p>
    This is why a Class 12 student's board marks still matter for WBJEE, even though the rank itself comes from the
    entrance test alone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-syllabus">The syllabus: close to Classes 11 and 12, with a few corners to check</h2>
  <p>
    The bulletin says the syllabus is closely aligned with the Class 11 and 12 curricula of recognised boards and
    stresses conceptual clarity and numerical work. Its own appendix lists the topics in detail, and a careful tutor
    reads it line by line against the student's board syllabus. A few items worth checking:
  </p>
  <ul>
    <li><strong>Mathematics:</strong> logarithms and change of base; arithmetic, geometric and harmonic progressions; De Moivre's theorem (statement only); matrices up to 3 × 3 and systems of up to three equations; conic sections and three-dimensional geometry.</li>
    <li><strong>Physics:</strong> the full mechanics-to-modern-physics run, including fluids, surface tension and viscosity, and semiconductor and Zener diodes.</li>
    <li><strong>Chemistry:</strong> physical, organic and inorganic chemistry, plus identification of common acid and basic radicals, a salt-analysis topic that pure MCQ practice can miss.</li>
  </ul>
  <p>
    Our topic plans for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry</a> overlap heavily with WBJEE
    and are a useful map, provided the bulletin's own list has the final say.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-boards">Fitting WBJEE around Higher Secondary, ISC or CBSE, and JEE Main</h2>
  <p>
    The hardest part of WBJEE is often the calendar. A Higher Secondary student sits the Council's multiple-choice
    Semester III in September and the written Semester IV in March; an ISC or CBSE student sits board papers in the
    first months of the year; the first JEE Main session usually falls in January to March and the second in April;
    and WBJEE comes after all of them. Each route needs a slightly different plan.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How the board route changes WBJEE preparation</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Advantage for WBJEE</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>West Bengal Higher Secondary</td><td>Two semesters of one-mark MCQs build speed with options</td><td>Class 11 chapters, examined in Semesters I and II, revisited before May; multi-correct practice the Council's papers do not have</td></tr>
      <tr><td>ISC</td><td>Long, careful written working; strong algebra</td><td>Timed MCQ sets, elimination, and the habit of not writing every step</td></tr>
      <tr><td>CBSE</td><td>NCERT base shared with JEE Main</td><td>The bulletin's extra corners, and Category 3 discipline</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For HS students, our <a href="{{ url('/west-bengal-board-tutor-kolkata') }}">West Bengal board tutors in
    Kolkata</a> page explains the semester pattern; for ISC students, see
    <a href="{{ url('/icse-home-tutor-kolkata') }}">ICSE and ISC tutors in Kolkata</a>. Families preparing for both
    entrances will find the national picture on our <a href="{{ url('/jee-home-tutor-kolkata') }}">JEE home tutors in
    Kolkata</a> page, and our <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or
    home tutor guide</a> weighs the two approaches.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-week">What a WBJEE tutor's week looks like</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 12 plan from autumn to the exam</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Sessions</th></tr>
    </thead>
    <tbody>
      <tr><td>Autumn (Class 12)</td><td>Board work first; one WBJEE-style set a week, maths-heavy; error log begun</td><td>Two a week</td></tr>
      <tr><td>Winter</td><td>Class 11 topics revisited; Category 3 sets on their own; OMR practice with a pen</td><td>Two or three a week</td></tr>
      <tr><td>Board and JEE Main weeks</td><td>Light WBJEE contact, short online doubt sessions only</td><td>One, often online</td></tr>
      <tr><td>The final weeks</td><td>Full two-paper mocks on the exam's timetable, then review of every negative mark</td><td>Three a week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    After the exam, the bulletin says model answer keys and images of each OMR are posted for a short time, with an
    online challenge facility. A tutor who has marked mocks the board's way can help a student check their own sheet.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-zones">Finding a WBJEE tutor near you, zone by zone</h2>
  <p>
    Maths specialists are the scarcest, so we match on subject first and journey second. The bulletin also lets
    candidates choose three exam zones, and several cover Kolkata and its edges: North, South, Central and West
    Kolkata, Salt Lake and New Town, Garia and Sonarpur, and Howrah Maidan and Shibpur. Notes from our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/kolkata/zone/north-kolkata') }}">North Kolkata</a>:</strong> {!! $wbjA('belgachia', 'Belgachia') !!} has had a Blue Line station since 1984, so tutors from anywhere on the line arrive easily; homes mix newer flats with older houses.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/tollygunge-jadavpur-garia') }}">Tollygunge, Jadavpur and Garia</a>:</strong> {!! $wbjA('baghajatin', 'Baghajatin') !!} is served by Kavi Nazrul on the Blue Line and by its own suburban station; avoid the evening peak on the main road to Garia.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/kasba-em-bypass-south') }}">Kasba and the southern bypass</a>:</strong> {!! $wbjA('santoshpur', 'Santoshpur') !!}, once marsh and fields around its lake, is a short auto ride from the Orange Line at Satyajit Ray or from Jadavpur station; give the para name and a landmark.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/salt-lake') }}">Salt Lake</a>:</strong> {!! $wbjA('salt-lake-sector-1', 'Sector I') !!}, the oldest part of the township and home to the entrance board's office, has City Centre and Central Park on the Green Line.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/lake-town-dum-dum-baguiati') }}">Lake Town, Dum Dum and Baguiati</a>:</strong> {!! $wbjA('bangur-avenue', 'Bangur Avenue') !!} is mostly low- and mid-rise flats between VIP Road and Jessore Road; tutors use Bidhannagar Road, Patipukur or the Blue Line.</li>
    <li><strong><a href="{{ url('/city/kolkata/zone/howrah') }}">Howrah</a>:</strong> {!! $wbjA('shibpur', 'Shibpur') !!} has a dense old core of narrow lanes; Howrah Maidan on the Green Line and Shalimar station bring tutors in, and a lane landmark saves time.</li>
  </ul>
  <p>
    See every neighbourhood on the <a href="{{ url('/city/kolkata') }}">Kolkata home tutors page</a>, or the zone pages
    for <a href="{{ url('/city/kolkata/zone/new-town-rajarhat') }}">New Town and Rajarhat</a>,
    <a href="{{ url('/city/kolkata/zone/ballygunge-gariahat-alipore') }}">Ballygunge, Gariahat and Alipore</a> and
    <a href="{{ url('/city/kolkata/zone/behala-new-alipore') }}">Behala and New Alipore</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-mode">Home or online for WBJEE?</h2>
  <p>
    Timed mocks and OMR practice work well at home, where the tutor can sit across the table with a stopwatch and
    watch how a student moves through a paper. Doubt-clearing between mocks, especially in board and JEE Main weeks,
    works just as well online in short sessions. Where no maths specialist can reach your neighbourhood reliably, an
    online tutor for Paper I and a home tutor for Paper II is a sensible split. Our
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> covers the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-demo">Questions to ask a WBJEE tutor at the demo</h2>
  <ol>
    <li><strong>How is Category 3 marked?</strong> The tutor should explain partial marks and the zero for any wrong option without looking it up.</li>
    <li><strong>When would you tell my child to leave a question?</strong> Listen for a rule tied to the negative marks, not "attempt everything".</li>
    <li><strong>How will you split time between WBJEE and the board?</strong> Ask for a month-by-month outline that names the semester or board exam dates.</li>
    <li><strong>Which bulletin topics are not in my child's board syllabus?</strong> A prepared tutor names a few at once.</li>
    <li><strong>Do you set full two-paper mocks?</strong> With OMR sheets and the real timings.</li>
    <li><strong>The route.</strong> Which line or station, and what changes in Puja weeks?</li>
  </ol>
  <p>
    You choose from two or three matched tutors, each fee is shown before the demo, the first class is free and
    switching tutor later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID
    check</a> before their profile goes live. See also the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="wbj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> explain what moves the figure.
  </p>
  <p>
    Send us the class, board, which papers your child will write, the subject that worries you most, your
    neighbourhood or nearest station and the slots that work. The first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>; you can also browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>. Subject pages for <a href="{{ url('/maths-home-tutor-kolkata') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-kolkata') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry</a> in Kolkata go deeper into each subject.
  </p>
  </section>

  </div>
</article>
