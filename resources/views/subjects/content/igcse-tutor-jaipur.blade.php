{{--
  Board hub for "IGCSE tutor Jaipur" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools are named.

  Board facts restate only what igcse-tutor-gurgaon states, which cites
  cambridgeinternational.org and qualifications.pearson.com (read 1 Oct 2026):
  0580 maths Core (Papers 1 non-calculator, 3 calculator; C-G) and Extended
  (Papers 2 and 4; A*-E), scientific calculator only; 0625/0620/0610 Core
  C-G, Extended (Core + Supplement) A*-G, multiple choice 40 questions 45 min
  30%, theory 80 marks 1 h 15 min 50%, practical test or alternative to
  practical 40 marks 20%; about 130 guided learning hours; June and November
  series, March also in India; 0606 Additional Mathematics; Edexcel 4MA1
  Foundation (5-1) and Higher (9-4), calculator on both papers, January and
  June; 4PH1/4CH1/4BI1 untiered, two written papers, no separate practical
  exam; 4PM1 Further Pure Mathematics. No exam dates.

  Local detail only from the city hub (jaipur.blade.php: "in a smaller group,
  the IB or Cambridge IGCSE"; IB/IGCSE card on command words, tiers and past
  papers; online reach matters most for IB and IGCSE; Pink Line; Orange Line
  under construction) and database/seo-content/zones/jaipur.json. No share of
  IGCSE schools is claimed. Fee wording is the approved sentence. FAQs render
  from faqs/igcse-tutor-jaipur.php. Area links render only when that Jaipur
  area page exists and is active.
--}}
@php
  $jpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jpA = function (string $slug, string $label) use ($jpAreaSlugs) {
      return in_array($slug, $jpAreaSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igj-guide" aria-labelledby="igjGuideTitle">
  <h2 id="igjGuideTitle">IGCSE tutors in Jaipur: Cambridge and Edexcel, code by code</h2>

  <p class="nx-guide__lede">
    IGCSE is exam craft as much as content: command words, the right tier and past papers marked against the official
    scheme. In Jaipur, IGCSE students are part of a smaller international group beside the CBSE, RBSE and CISCE
    majority, so a tutor who really knows these papers may not live round the corner. This page helps you ask for the
    right person. It covers the questions to settle with the school first, how Cambridge and Edexcel differ subject by
    subject, what tiers mean for grades, which subjects Jaipur parents usually ask about, how tutors reach each zone,
    and what to test in a free demo. Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors, wrote it; for a
    fuller treatment of the papers see our <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE board guide</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igj-school">Ask the school first</a> ·
    <a href="#igj-boards">IGCSE beside CBSE and RBSE</a> ·
    <a href="#igj-codes">Subject codes</a> ·
    <a href="#igj-tier">Tiers and grades</a> ·
    <a href="#igj-sci">Science papers</a> ·
    <a href="#igj-years">Two-year plan</a> ·
    <a href="#igj-lesson">A good lesson</a> ·
    <a href="#igj-mode">Home or online</a> ·
    <a href="#igj-subjects">Subjects</a> ·
    <a href="#igj-zones">Zones</a> ·
    <a href="#igj-demo">Demo</a> ·
    <a href="#igj-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igj-school">Three questions to settle with the school first</h2>
  <ol>
    <li><strong>Which awarding body, subject by subject?</strong> Cambridge or Pearson Edexcel. Schools choose, and some mix the two.</li>
    <li><strong>Which tier?</strong> Core or Extended for Cambridge; Foundation or Higher for Edexcel maths. Ask when the school fixes it.</li>
    <li><strong>Which exam series?</strong> Cambridge offers June and November, and March in India; Edexcel Maths A lists January and June. The series sets the length of the final run-in.</li>
  </ol>
  <p>
    Send these with your request and we can match a tutor who has taught the same code recently, not just "IGCSE".
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-boards">How IGCSE differs from CBSE and RBSE</h2>
  <p>
    Our <a href="{{ url('/city/jaipur') }}">Jaipur tutors page</a> lists CBSE, RBSE, CISCE and a smaller IB and
    Cambridge group. We do not estimate their sizes. In general terms, CBSE and the Rajasthan board award one result
    across subjects studied from prescribed books, with RBSE also offering Hindi or English medium. IGCSE subjects are
    separate qualifications, each with its own code, papers, tier and grade, marked against
    mark schemes that reward particular key points and command words. A student arriving from CBSE often finds the
    content familiar and still loses marks on "explain" and "suggest" questions until the style is taught.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-codes">The common subjects, code by code</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge and Edexcel codes for the subjects most often tutored</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Cambridge</th><th scope="col">Edexcel</th><th scope="col">Key difference</th></tr>
    </thead>
    <tbody>
      <tr><td>Mathematics</td><td>0580: Core or Extended, one paper without a calculator</td><td>4MA1: Foundation or Higher, calculator on both papers</td><td>Non-calculator technique matters far more for Cambridge</td></tr>
      <tr><td>Physics</td><td>0625: tiered, with a practical paper</td><td>4PH1: untiered, two written papers</td><td>Practical skills sit inside Edexcel's written papers</td></tr>
      <tr><td>Chemistry</td><td>0620: tiered, with a practical paper</td><td>4CH1: untiered, two written papers</td><td>Same pattern as physics</td></tr>
      <tr><td>Biology</td><td>0610: tiered, with a practical paper</td><td>4BI1: untiered, two written papers</td><td>Same pattern as physics</td></tr>
      <tr><td>Further maths</td><td>0606 Additional Mathematics</td><td>4PM1 Further Pure Mathematics</td><td>For students whose main maths grade is already secure</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge grades its common codes A* to G; Edexcel grades 9 to 1. The
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel comparison</a> goes paper by
    paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-tier">Tiers: the ceiling on your child's grade</h2>
  <p>
    The tier sets the highest grade available. In Cambridge 0580, Core students sit Papers 1 and 3 with grades C to G
    available; Extended students sit Papers 2 and 4 with A* to E. In the Cambridge sciences, Extended means Core plus
    Supplement content, with A* to G possible; Core allows C to G. Edexcel Foundation maths targets 5 to 1 and Higher
    targets 9 to 4. Because schools usually decide during Grade 10, tutoring in Grade 9 and early Grade 10 should aim
    to put a borderline student plainly at the higher tier's standard before the decision. If your child is entered
    for Core or Foundation, the tutor's job changes: secure every reachable method mark, unit and careful reading.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-sci">How the Cambridge sciences are examined</h2>
  <p>
    Each Cambridge science has three papers for every candidate. A multiple-choice paper of 40 questions in 45 minutes
    gives 30% of the grade. A theory paper, 80 marks over an hour and a quarter, gives 50%. A practical paper of 40
    marks gives the last 20%, either as a practical test or as an alternative-to-practical written paper, depending on
    the school. Practise each differently: forty-question sets against the clock with every wrong option reviewed;
    structured answers checked against mark-scheme key words; and for the practical, planning a method, naming
    variables, drawing tables with units, plotting graphs and commenting on reliability.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-years">A two-year plan for Grades 9 and 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How IGCSE tuition should change across the course</caption>
    <thead>
      <tr><th scope="col">When</th><th scope="col">Tutor's focus</th><th scope="col">Parent's check</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, early</td><td>Unfamiliar question styles; calculator and non-calculator habits</td><td>Is an error log started?</td></tr>
      <tr><td>Grade 9, later</td><td>Topic-wise past-paper questions alongside the school scheme</td><td>Are past papers used every week?</td></tr>
      <tr><td>Grade 10, before mocks</td><td>Finishing content; higher-tier work for borderline students</td><td>When is the tier fixed?</td></tr>
      <tr><td>Grade 10, after mocks</td><td>Full papers under time, marked with the official scheme</td><td>Is every lost mark logged by cause?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge plans each syllabus around roughly 130 guided learning hours. A March entry leaves less time after mocks
    than a June entry, so count backwards from the actual series.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-lesson">What happens in a productive IGCSE lesson</h2>
  <p>
    Watch a lesson from across the room and you should be able to tell three phases apart. The opening few minutes
    deal with last week's mistakes, taken from the error log, not from memory. The long middle teaches or repairs a
    single topic, with examples written the way the papers phrase them: a "calculate" question set out with every
    working line, a "describe" answer kept to observations, an "explain" answer that gives a reason. The last part is
    exam work: two or three past-paper questions on the same topic, done under time and then marked together with the
    official scheme, so your child sees which word or step earned each mark. Homework should be short and aimed at one
    weakness. A parent should get a sentence or two afterwards on what was covered and what comes next. Lessons that
    are mostly the tutor talking, or that recycle one worksheet, are a reason to try the next tutor on the shortlist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-mode">Home or online for an IGCSE student in Jaipur</h2>
  <p>
    A tutor at the table helps most in Grade 9 and on the Cambridge non-calculator paper, where every line of working
    needs checking as it is written. Online sessions help most when the right specialist lives far away. In Jaipur
    that is often a question of roads: only the Pink Line corridor from Mansarovar to the old city has a metro today,
    the Orange Line is under construction, and the evening rush on Tonk Road and Ajmer Road adds real time to a
    crossing. Many families settle on one home lesson and one online session a week with the same tutor. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online comparison</a> lays out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-subjects">IGCSE subjects and our Jaipur pages</h2>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutors</a> and <a href="{{ url('/maths-home-tutor-jaipur') }}">maths home tutors in Jaipur</a>.</li>
    <li><strong>Sciences:</strong> <a href="{{ url('/physics-home-tutor-jaipur') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-jaipur') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-jaipur') }}">biology</a>, or <a href="{{ url('/science-home-tutor-jaipur') }}">science home tutors</a> for all three in Grade 9.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-jaipur') }}">English home tutors in Jaipur</a>; first-language and second-language English are separate courses, so send the code.</li>
  </ul>
  <p>
    Thinking about Grade 11? See <a href="{{ url('/ib-tutor-jaipur') }}">IB tutors in Jaipur</a>, or
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">moving between CBSE and IB or IGCSE</a> for a
    bridging plan back to CBSE or ISC.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-zones">IGCSE tutors by zone, and when online helps</h2>
  <ul>
    <li><strong><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park and Vidhyadhar Nagar</a>.</strong> North of the Pink Line, homes in {!! $jpA('shastri-nagar', 'Shastri Nagar') !!} rely on tutors who come by scooter or auto.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar and Bapu Nagar</a>.</strong> {!! $jpA('bapu-nagar', 'Bapu Nagar') !!} sits between Tonk Road and the airport road, so tutors from Malviya Nagar and Durgapura arrive without crossing the old city.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar and West Jaipur</a>.</strong> {!! $jpA('shyam-nagar', 'Shyam Nagar') !!} is near the Pink Line; along {!! $jpA('ajmer-road', 'Ajmer Road') !!}, evening traffic argues for an online session in exam weeks.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar and Sanganer</a>.</strong> In {!! $jpA('sanganer', 'Sanganer') !!}, old lanes suit a tutor on a two-wheeler; newer apartment projects need gate registration first.</li>
    <li><strong><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura and Tonk Road</a>.</strong> On {!! $jpA('tonk-road', 'Tonk Road') !!}, say which side you live on; a tutor already on your side avoids a slow crossing.</li>
  </ul>
  <p>
    For the Cambridge practical route or Additional Maths, the right specialist may be across the city. A weekend home
    lesson with weekday online sessions keeps that tutor practical, as long as the tutor sees written working live.
    Local timing advice: <a href="{{ url('/blog/south-and-west-jaipur-tuition-guide') }}">south and west Jaipur
    guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-demo">What to test in the free demo</h2>
  <ol>
    <li>Say the code and tier, for example "0625 Extended", and ask the tutor to outline the papers.</li>
    <li>Hand over a past-paper answer and ask for live marking against the published scheme.</li>
    <li>For Cambridge maths, watch a non-calculator method done by hand.</li>
    <li>Ask how they would prepare your child for the practical test or the alternative paper.</li>
    <li>Ask what "describe", "explain" and "suggest" each require.</li>
  </ol>
  <p>
    The shortlist has two or three tutors with fees on show before the demo, and changing later costs nothing. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igj-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The subject, tier, time
    to the exam and travel at your slot set the fee. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">Jaipur tuition fees</a>.
  </p>
  <p>
    Send the board, code, tier, grade, locality and free slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a>, and
    IGCSE teachers can see <a href="{{ url('/tuition-jobs/jaipur') }}">tuition jobs in Jaipur</a>.
  </p>
  </section>

  </div>
</article>
