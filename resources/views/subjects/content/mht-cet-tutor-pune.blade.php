{{--
  Exam page: "MHT-CET tutor Pune" (PCM and PCB groups), Pune and
  Pimpri-Chinchwad. Author: nxtutors (NXTutors Academic Team). No school,
  college, coaching, society or people names. No candidate numbers, no topper
  names (the press notes list some; none used), no exam dates.

  Official sources (State Common Entrance Test Cell, Maharashtra; read 1-2 Oct 2026):
  - cetcell.mahacet.org/wp-content/uploads/2023/12/MHT-CET-2026-Information-
    Brochure-Updated-on-11.04.2026.pdf: CET Cell set up under Mah. Act XXVIII
    of 2015, office at Fort, Mumbai; courses (B.E./B.Tech, pharmacy, B.Planning,
    integrated M.E./M.Tech, Pharm.D, integrated M.Planning; AY 2026-27);
    online CBT at "almost all the district headquarters" depending on nodes;
    candidates choose exam cities in the form; the Cell tries to allot a centre
    in the candidate's district, otherwise a nearby one; centre not changeable;
    different groups or attempts may get different centres; PCM/PCB/both,
    option not alterable, marks not transferred; English/Marathi/Urdu for
    Physics, Chemistry and Biology (Marathi/Urdu only if opted in the form,
    English final in disputes); MCQs, four options, one correct; PCM Physics
    and Chemistry 1 mark, Mathematics 2 marks, 150 questions in 180 min; PCB
    1 mark each, 200 questions in 180 min; no negative marking; one question on
    screen at a time, advice not to spend too long on one; first 90 min Physics
    and Chemistry then auto-submit and 90 min Mathematics or Biology; mock link
    on mahacet.org; no extra time; cell phones, calculators, watch calculators,
    digital and smart watches not allowed in the hall; no leaving before the
    end; Aadhaar authentication and APAAR ID verification via DigiLocker at
    registration; scribe/compensatory time of 20 min per hour where applicable
    (PwD table); percentile not percentage; two attempts in 2026, best Total
    percentile counted, not subject percentiles; Physics/Chemistry percentiles
    not interchanged between groups; eligibility: passed/appearing HSC or
    equivalent, Indian nationality, no age limit; Maharashtra State candidature
    Types A to E (A: SSC and HSC/Diploma from Maharashtra with domicile or
    birth in Maharashtra; B: candidate or parent domiciled with certificate;
    C: parent a Government of India / GoI undertaking employee posted in
    Maharashtra before the CAP form deadline; D: parent a serving or retired
    Government of Maharashtra / undertaking employee; E: Maharashtra-Karnataka
    border area with Marathi mother tongue); All India; Minority; children of
    NRI / Gulf workers, OCI/PIO and foreign nationals exempt; State and
    Minority candidature must take MHT-CET for B.E./B.Tech and B.Pharm/Pharm.D;
    All India: JEE (Main) preferred for engineering, NEET for pharmacy.
  - cetcell.mahacet.org/wp-content/uploads/2023/12/Syllabus-Technical-2026.pdf
    (as recorded in mht-cet-tutor-mumbai): SCERT Maharashtra syllabus; about
    20% Std XI and 80% Std XII; level of JEE (Main) for PCM and NEET for
    Biology; mainly application based; Paper I Mathematics 10 + 40 at 2 marks;
    Paper II Physics 10 + 40 and Chemistry 10 + 40 at 1 mark; Paper III Biology
    20 + 80 at 1 mark; the listed Std XI chapters below.
  - cetcell.mahacet.org MHT-CET-2026-Result-Processing-Methodology.pdf:
    percentiles per session, 7 decimals, Total percentile from total raw score.
  - CET Registration Notice (13/04/2026) for the second attempt: candidates
    without an APAAR ID must create one through DigiLocker.
  HSC facts from mahahsscboard.in as cited in maharashtra-board-tutor-pune.
  Local detail only from zones/pune.json, areas/pune-research.json,
  pune-zone-guides.json and the Pune hub view. Fee wording is the approved
  sentence. FAQs render from faqs/mht-cet-tutor-pune.php.
--}}
@php
  $pctSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pctA = function (string $slug, string $label) use ($pctSlugs) {
      return in_array($slug, $pctSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="pctGuideTitle">
  <h2 id="pctGuideTitle">MHT-CET home tutors in Pune: starting from the CET Cell's own rulebook</h2>

  <p class="nx-guide__lede">
    Most advice about MHT-CET starts with tips. This page starts with the rules, because in Maharashtra's state
    entrance test the rules decide a surprising amount of the preparation: who has to sit it at all, what a student may
    carry into the hall, how the three hours are split, and how two attempts are compared. Everything below comes from
    the State Common Entrance Test Cell's 2026 information brochure, syllabus and result-processing note. From there
    we explain how a home tutor in Pune or Pimpri-Chinchwad turns those rules into a weekly plan that also protects
    the HSC and, where it applies, JEE or NEET. The Cell publishes fresh documents for every year's test, so check
    cetcell.mahacet.org for the current ones before relying on a detail here.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pct-who">Who must sit it</a> ·
    <a href="#pct-numbers">The test in numbers</a> ·
    <a href="#pct-hall">Hall rules</a> ·
    <a href="#pct-form">The form and the centre</a> ·
    <a href="#pct-xi">Class 11 chapters</a> ·
    <a href="#pct-pcmpcb">PCM, PCB or both</a> ·
    <a href="#pct-rank">Percentiles and attempts</a> ·
    <a href="#pct-year">A Pune study year</a> ·
    <a href="#pct-zones">Tutors by zone</a> ·
    <a href="#pct-demo">The demo</a> ·
    <a href="#pct-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pct-who">First question: does your child have to take MHT-CET?</h2>
  <p>
    The test is open to any Indian national who has passed, or is appearing for, the HSC or an equivalent Class 12
    examination, with no age limit, so CBSE and ISC students in Pune sit it as well as State Board students. Whether it
    is compulsory depends on the candidature a student will claim at admission. The brochure sets out three broad kinds:
  </p>
  <ul>
    <li><strong>Maharashtra State candidature</strong>, in five types. Type A broadly covers students who passed the SSC and HSC (or a diploma) in Maharashtra, with a further condition on domicile or birthplace. Type B covers a student, or a parent, domiciled in Maharashtra with a domicile certificate. Type C covers a student whose parent is a Government of India or central undertaking employee posted to Maharashtra before the admission form deadline. Type D covers children of serving or retired Government of Maharashtra employees. Type E covers the Maharashtra–Karnataka border area for students whose mother tongue is Marathi.</li>
    <li><strong>All India candidature</strong>, for any Indian national.</li>
    <li><strong>Minority candidature</strong>, for linguistic or religious minority communities from Maharashtra as notified by the government.</li>
  </ul>
  <p>
    State and Minority candidates must sit MHT-CET to be considered for B.E./B.Tech and for B.Pharm or Pharm.D. All
    India candidates may skip it, because a JEE (Main) score is preferred for engineering and a NEET score for pharmacy
    in that category. Children of NRIs and of Indian workers in the Gulf, OCI and PIO cardholders and foreign nationals
    are exempt. For families who have moved to Pune from other states, the difference between Types A, B and C is worth
    reading in the brochure itself before deciding how much weight the test deserves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-numbers">The test in numbers</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How each group's 180 minutes are used, per the 2026 brochure and syllabus</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Minutes 1–90</th><th scope="col">Minutes 91–180</th><th scope="col">Questions</th><th scope="col">Maximum marks</th></tr>
    </thead>
    <tbody>
      <tr><td>PCM</td><td>Physics and chemistry: 50 + 50 questions, 1 mark each</td><td>Mathematics: 50 questions, 2 marks each</td><td>150</td><td>200</td></tr>
      <tr><td>PCB</td><td>Physics and chemistry: 50 + 50 questions, 1 mark each</td><td>Biology: 100 questions, 1 mark each</td><td>200</td><td>200</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The physics-and-chemistry half closes itself at the 90-minute mark and only then does the maths or biology half
    open; unused time cannot be carried across. Every question has four options with one correct answer, there is no
    negative marking, and the CET Cell describes the questions as mainly application based, pitched at JEE (Main) level
    for maths, physics and chemistry and at NEET level for biology. In practice that means a PCM student has about 54
    seconds per question in the first half and roughly a minute and three quarters per maths question in the second,
    while a PCB student faces the same tight first half and then 100 biology questions in 90 minutes.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-hall">Hall rules that should shape practice at home</h2>
  <ul>
    <li><strong>No calculator of any kind.</strong> Calculators, watch calculators, digital and smart watches and phones are all barred. Every number in physics and chemistry, and every step in maths, is worked by hand, so practice at home should be calculator-free from the first week.</li>
    <li><strong>One question on the screen at a time.</strong> The brochure advises candidates not to spend too long on any single question. Practice has to include moving on and coming back, which a printed paper does not teach.</li>
    <li><strong>No extra time and no early exit.</strong> The test closes at the time on the admit card, and candidates may not leave the hall before the end.</li>
    <li><strong>The mock comes from the Cell.</strong> A mock link is placed on mahacet.org before the test; it is the closest thing to the real screen, and a tutor should build at least a few sessions around it.</li>
    <li><strong>Support for disability.</strong> Where the brochure's table allows a scribe, compensatory time of 20 minutes per hour applies; families should read that table early.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-form">The application form, the exam city and the paperwork</h2>
  <p>
    Three decisions in the form are final: the group (PCM, PCB or both), the language of the paper, and, once allotted,
    the centre. Physics, chemistry and biology can be answered in English, Marathi or Urdu, but the Marathi or Urdu
    version is shown only to candidates who chose it in the form, and in any dispute the English version is final. A
    student taught in English at a Pune junior college but more confident in Marathi technical terms should settle
    this with the tutor before applying, not after.
  </p>
  <p>
    The brochure says the test runs at almost all district headquarters, depending on available computer centres,
    that candidates list preferred exam cities in the form, and that the Cell tries to allot a centre within the
    candidate's district and otherwise nearby. A student sitting both groups, or both attempts, may be sent to
    different centres for each. Registration also involves Aadhaar authentication and APAAR ID verification through
    DigiLocker, and the details must match; the Cell's notice for the second attempt asked candidates without an APAAR
    ID to create one there. Sorting this out in Class 11 saves a scramble later.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-xi">The Class 11 chapters that come back</h2>
  <p>
    Questions follow the State Council of Educational Research and Training, Maharashtra syllabus. All of Class 12 is
    included, but only a named list from Class 11, which supplies about a fifth of the questions: 10 of 50 in each of
    maths, physics and chemistry, and 20 of 100 in biology. Here is that list, grouped by subject:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Std XI chapters named in the 2026 syllabus</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Chapters</th><th scope="col">Questions from Std XI</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>Complex Numbers; Permutations and Combinations; Functions; Limits; Continuity; Straight Line; Circle; Conic Section; Trigonometry II; Probability</td><td>10 of 50</td></tr>
      <tr><td>Physics</td><td>Vectors; Motion in a Plane; Laws of Motion; Gravitation; Error Analysis; Thermal Properties of Matter; Sound; Optics; Electrostatics; Semiconductors</td><td>10 of 50</td></tr>
      <tr><td>Chemistry</td><td>Some Basic Concepts of Chemistry; Structure of Atom; Chemical Bonding; States of Matter; Redox Reactions; Elements of Group 1 and 2; Adsorption and Colloids; Basic Principles of Organic Chemistry; Hydrocarbons; Chemistry in Everyday Life</td><td>10 of 50</td></tr>
      <tr><td>Biology</td><td>Biomolecules; Human Nutrition; Respiration and Energy Transfer; Excretion and Osmoregulation</td><td>20 of 100</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a Class 11 student this list is a ready-made priority order: teach these chapters properly the first time and
    they never need re-learning. For a Class 12 student, or a CBSE or ISC student whose books are arranged differently,
    it shows exactly which gaps to close. The list can change, so compare it with the syllabus for your child's year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-pcmpcb">PCM, PCB or both?</h2>
  <p>
    A student may register for one group or both, and the choice cannot be altered once made. Marks in one group are
    never transferred to the other, and physics or chemistry percentiles are not swapped between groups either, so a
    student sitting both takes the shared physics-and-chemistry half twice and is ranked separately each time. Sitting
    both makes sense for a student keeping engineering and pharmacy open, but it costs preparation time in the second
    half: maths and biology together are a heavy load in Class 12. A tutor should help the family make this decision
    with the student's real marks in front of them, well before the form opens.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-rank">Percentiles, sessions and two attempts</h2>
  <p>
    Because the test runs in several shifts with different questions, raw marks are turned into percentiles within each
    session: the top scorer of a session gets 100, values run to seven decimal places, and the total percentile comes
    from the total raw score, not from averaging subject percentiles. A percentile is a rank, not a percentage of marks.
    In 2026 the Cell held two attempts for each group and counted the better total percentile of the two; subject
    percentiles were not mixed across attempts. Whether a second attempt is offered, and how it is counted, is set out
    afresh in each year's brochure.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-year">How a Pune student's two years can be planned</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A two-year outline a tutor can adapt</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Board side</th><th scope="col">CET side</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11, first term</td><td>Junior-college unit tests; settling into new subjects</td><td>The listed chapters taught for understanding; calculator-free arithmetic every session</td></tr>
      <tr><td>Class 11, second term</td><td>College exams and practical work</td><td>Short timed MCQ sets after each listed chapter; decide PCM, PCB or both</td></tr>
      <tr><td>Class 12, until the prelims</td><td>Written HSC answers, derivations, the journal</td><td>A weekly on-screen set from the same chapters; Aadhaar and APAAR details checked</td></tr>
      <tr><td>Prelims to HSC</td><td>Full board papers and practicals take priority</td><td>Short, regular MCQ practice so speed is kept</td></tr>
      <tr><td>After the HSC</td><td>—</td><td>Full 180-minute mocks with the hard switch at 90 minutes; the Cell's mock link; review by time spent</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The HSC side of this is covered on our <a href="{{ url('/maharashtra-board-tutor-pune') }}">Maharashtra Board tutors
    in Pune</a> page. Students also preparing for national tests should see <a href="{{ url('/jee-home-tutor-pune') }}">JEE
    home tutors in Pune</a> and <a href="{{ url('/neet-home-tutor-pune') }}">NEET home tutors in Pune</a>: a student who
    prepares well for those is usually well placed for MHT-CET once the state syllabus has been checked chapter by
    chapter, but not the other way round. Subject tutors are on our <a href="{{ url('/maths-home-tutor-pune') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-pune') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a>
    and <a href="{{ url('/biology-home-tutor-pune') }}">biology</a> pages for Pune, and our topic guides on
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology</a> cover much shared ground.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-zones">Keeping a senior student's tutor on time, zone by zone</h2>
  <p>
    A Class 12 student already loses evenings to junior college and often coaching, so the tutor's journey must be
    predictable. From our zone guides:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>:</strong> {!! $pctA('model-colony', 'Model Colony') !!} is within reach of Shivaji Nagar on the Purple Line and two Aqua Line stations, so a tutor from Kothrud or Pimpri can come by metro.</li>
    <li><strong><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>:</strong> {!! $pctA('sus', 'Sus') !!} is reached along a single main road with no station, so a tutor from Pashan, Baner or Bavdhan and a slot outside the office peak work best.</li>
    <li><strong><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>:</strong> in {!! $pctA('nigdi', 'Nigdi') !!}, Akurdi station has suburban trains, and row houses in the sectors mean the tutor comes straight to the door.</li>
    <li><strong><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>:</strong> {!! $pctA('wagholi', 'Wagholi') !!} has no metro yet, so tutors come from Kharadi and the Nagar Road side; a later evening or weekend slot avoids the highway peak.</li>
    <li><strong><a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a>:</strong> Bund Garden and the Pune Railway Station metro stops serve the northern half; plan entry in advance near army areas.</li>
    <li><strong><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>:</strong> {!! $pctA('magarpatta', 'Magarpatta') !!} controls entry, so send the tutor's name, cluster and tower to the gate before the demo.</li>
    <li><strong><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>:</strong> along {!! $pctA('sinhagad-road', 'Sinhagad Road') !!}, give your neighbourhood as well as the road, since the road is long; the nearest metro is Swargate.</li>
  </ul>
  <p>
    When coaching runs late or the monsoon closes roads, a short online session with the same tutor keeps the week
    intact.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-demo">Six checks for an MHT-CET demo</h2>
  <ol>
    <li><strong>The current documents.</strong> Ask the tutor what this year's brochure says about marks per question and the Class 11 list.</li>
    <li><strong>Calculator-free working.</strong> Watch whether the tutor solves numericals by hand and teaches shortcuts for estimation.</li>
    <li><strong>Ten questions on the clock.</strong> Ask for a short timed set, then listen to how the tutor reviews the slow ones.</li>
    <li><strong>The board answer too.</strong> Ask how HSC written answers and the journal will be kept on track.</li>
    <li><strong>Language.</strong> If your child will answer in Marathi, the tutor should know the Marathi terms.</li>
    <li><strong>The route and a backup.</strong> Which road or metro line, and an agreed online fallback.</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more
    ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pct-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Tell us the class, board, group, medium, your area and your free slots, and book a
    <a href="{{ url('/demo-class') }}">free demo</a>. You can browse <a href="{{ url('/tutors') }}">tutor profiles</a>, see
    every locality on our <a href="{{ url('/city/pune') }}">Pune tutors page</a>, or, if you teach, look at
    <a href="{{ url('/tuition-jobs/pune') }}">tuition jobs in Pune</a>.
  </p>
  </section>

  </div>
</article>
