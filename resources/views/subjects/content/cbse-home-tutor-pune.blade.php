{{--
  Board page for "CBSE home tutor Pune" (Pune and Pimpri-Chinchwad). Authors:
  Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths) and Aaditya Kashyap
  (role: CBSE and ICSE science). No anecdotes, years or results are claimed for
  either. No schools, colleges or societies are named.

  Board facts are reworded from the Gurgaon board hub (cbse-home-tutor-gurgaon),
  which cites cbseacademic.nic.in and cbse.gov.in (read 1 Oct 2026):
  Curriculum 2026-27 Secondary (80 + 20 in major subjects, 33% pass, about half
  the questions competency-focused, common Class IX maths and science paper with
  optional 25-mark one-hour Advanced papers, not added to the aggregate, a note
  on the marksheet at 50%+, R3 internally assessed), the 14.02.2026 notification
  on two Class X board exams, and Curriculum 2026-27 Senior Secondary
  (Physics/Chemistry/Biology 70 + 30, Mathematics 041 or Applied Mathematics
  241 80 + 20, Accountancy/Economics/Business Studies 80 + 20, Computer
  Science / Informatics Practices 70 + 30). No exam dates.
  Local detail only from the Pune city hub view (CBSE schools common across the
  city and its IT suburbs; MSBSHSE SSC/HSC sat by many students across Pune and
  Pimpri-Chinchwad, Classes 11-12 usually in a junior college; CBSE session
  opens in April, many State Board schools in June; MHT-CET named),
  pune-research.json, pune-zone-guides.json and zones/pune.json. Area links
  render only for active Pune areas. Fee wording is the approved sentence.
  FAQs render from faqs/cbse-home-tutor-pune.php.
--}}
@php
  $cbpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cbpA = function (string $slug, string $label) use ($cbpSlugs) {
      return in_array($slug, $cbpSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cbpGuideTitle">
  <h2 id="cbpGuideTitle">CBSE home tutors in Pune and Pimpri-Chinchwad: the board, the stages and the metro map</h2>

  <p class="nx-guide__lede">
    CBSE schools are common right across Pune and its IT suburbs, which makes CBSE tutors relatively easy to find; the harder part is finding one who teaches to this year's papers and lives close enough to keep a weekly
    slot through the rains. This page sets out how CBSE differs from the State Board most Pune neighbours follow,
    what changes in Classes 9 and 10 under the 2026-27 curriculum, where tuition matters most from Class 6 to Class
    12, and how tutors reach each zone. Abhinandan Tiwary writes on Class 10 CBSE and ICSE maths, and Aaditya Kashyap
    on CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbp-state">CBSE and the State Board</a> ·
    <a href="#cbp-ladder">The class ladder</a> ·
    <a href="#cbp-new">New rules in 9 and 10</a> ·
    <a href="#cbp-senior">Senior subjects</a> ·
    <a href="#cbp-session">A good session</a> ·
    <a href="#cbp-help">Subjects</a> ·
    <a href="#cbp-zones">Zones</a> ·
    <a href="#cbp-mode">Home or online</a> ·
    <a href="#cbp-demo">Demo checklist</a> ·
    <a href="#cbp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbp-state">CBSE beside the Maharashtra State Board</h2>
  <p>
    Many students across Pune and Pimpri-Chinchwad sit the State Board's SSC at the end of Class 10 and its HSC at the
    end of Class 12, usually moving to a junior college for the last two years. CBSE students more often stay in one
    school throughout. In broad terms the two differ in four ways that matter to a tutor:
  </p>
  <ul>
    <li><strong>The books.</strong> CBSE builds its papers on NCERT textbooks; the State Board writes its own.</li>
    <li><strong>The questions.</strong> About half of each CBSE secondary paper is competency-focused, testing whether a student can use an idea in an unfamiliar setting.</li>
    <li><strong>The marking.</strong> CBSE publishes sample papers with marking schemes each year, and marks are given step by step.</li>
    <li><strong>The calendar.</strong> CBSE's session opens in April; many State Board schools begin in June.</li>
  </ul>
  <p>
    A tutor with mostly SSC students can be a fine teacher of the subject and still need time to adjust to NCERT
    phrasing and CBSE's application questions. The reverse also holds: a student moving from a State Board school to
    CBSE mid-way needs a few weeks on NCERT language before the content feels familiar. For any State Board detail,
    rely on the board's own website.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-ladder">The class ladder: what each stage asks</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE stages and the help that fits each one</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Assessment</th><th scope="col">Where a tutor helps</th></tr>
    </thead>
    <tbody>
      <tr><td>6–8</td><td>School exams; from 2026-27, computational thinking and AI ideas enter the existing subjects up to Class 8</td><td>Number sense, fractions and early algebra; reading a science explanation properly</td></tr>
      <tr><td>9</td><td>School annual exam, 80 marks plus 20 internal</td><td>The secondary syllabus starts; the choice of optional Advanced papers</td></tr>
      <tr><td>10</td><td>Board paper 80 plus school internal 20; pass mark 33%</td><td>Maths and science above all; a timetable that keeps social science and languages moving</td></tr>
      <tr><td>11</td><td>School exams</td><td>The jump in physics, chemistry and maths; settling commerce subjects</td></tr>
      <tr><td>12</td><td>Board papers on the whole Class 12 syllabus, plus practicals or internal marks</td><td>Full answers, practical files, sample papers under time</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-new">What is new in Classes 9 and 10</h2>
  <p>
    <strong>A common paper and an optional Advanced one.</strong> From 2026-27 every Class 9 student takes the same
    maths and science syllabus and the same 80-mark paper. Students who want more can add Mathematics Advanced,
    Science Advanced or both: 25 marks each, one hour, entirely higher-order questions. These marks stay out of the
    aggregate, and a score of 50% or more is recorded on the marksheet. Advanced suits a child who already enjoys the
    subject; it is not a cosmetic extra. Basic and Standard maths are being withdrawn, apart from the Class 10 batch of
    2026-27.
  </p>
  <p>
    <strong>A compulsory third language.</strong> Students in the transition batches must study a third language,
    assessed by the school with no board paper; passing it is needed for the Class 10 certificate.
  </p>
  <p>
    <strong>Two Class 10 board exams.</strong> The first is compulsory. A student who passes can sit the second to
    improve up to three subjects among science, maths, social science and the languages. A student who missed three or
    more subjects in the first cannot take the second. Our <a href="{{ url('/maths-home-tutor/class-9') }}">Class 9
    maths</a> and <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> pages show how a tutor should pace
    these years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-senior">Senior subjects and how their marks divide</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Theory and practical or internal marks, CBSE Classes 11–12 (2026-27)</caption>
    <thead>
      <tr><th scope="col">Subject</th><th scope="col">Theory</th><th scope="col">Other</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics, Chemistry, Biology</td><td>70</td><td>30 practical</td></tr>
      <tr><td>Mathematics or Applied Mathematics (one only)</td><td>80</td><td>20 internal</td></tr>
      <tr><td>Accountancy, Economics, Business Studies</td><td>80</td><td>20 internal</td></tr>
      <tr><td>Computer Science or Informatics Practices</td><td>70</td><td>30 practical</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    CBSE says senior papers will include more questions set in real-life situations, within the textbooks. In Pune,
    many Class 11 and 12 science students also prepare for JEE, NEET or the state's MHT-CET; the board tutor then keeps
    written answers and practicals on track while coaching handles speed. See <a href="{{ url('/jee-home-tutor-pune') }}">JEE
    home tutors in Pune</a> and <a href="{{ url('/neet-home-tutor-pune') }}">NEET home tutors in Pune</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-session">What a CBSE session should contain</h2>
  <p>
    Because roughly half of a secondary paper now asks students to apply ideas to cases, sources, data or unfamiliar
    situations, a session that only finishes NCERT exercises leaves marks on the table. A sensible hour has three
    parts. It begins with the week's school work: which exercises were done, which were skipped, and one or two
    questions the student found hard. The middle is teaching or repair of a single chapter, starting from the NCERT
    explanation and moving to exemplar-style problems and a competency question on the same idea. The last part is
    written practice: a few board-style answers set out in full and checked line by line against the marking scheme,
    with diagrams labelled and units in place. Over a month the tutor should keep a short record of chapters
    covered, test scores and repeated mistakes, and share it with you; from Class 9 onwards, that record is the
    clearest sign that tuition is working.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-help">Subjects Pune parents ask for most</h2>
  <p>
    Up to Class 10 the requests are mostly maths and science, because both build on every earlier year. After Class
    10 they split by stream: physics, chemistry and maths or biology for science, and accountancy and economics for
    commerce. Our Pune pages for each:
    <a href="{{ url('/maths-home-tutor-pune') }}">maths</a>,
    <a href="{{ url('/science-home-tutor-pune') }}">science</a>,
    <a href="{{ url('/physics-home-tutor-pune') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-pune') }}">biology</a> and
    <a href="{{ url('/english-home-tutor-pune') }}">English</a>. Commerce subjects are matched on request.
  </p>
  <p>
    Background reading: <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths preparation</a>,
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-zones">Reaching a CBSE tutor in each zone</h2>
  <p>
    Pune's metro reaches some zones well and others not yet, and that shapes the shortlist more than anything else.
  </p>
  <ul>
    <li><strong>On the Aqua Line.</strong> <a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a> is the best-served zone: Vanaz and Anand Nagar cover most of {!! $cbpA('kothrud', 'Kothrud') !!}, and District Court links to the Purple Line. In <a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>, Ramwadi and Kalyani Nagar stations help, but {!! $cbpA('kharadi', 'Kharadi') !!} needs a tutor who rides in from nearby.</li>
    <li><strong>On the Purple Line.</strong> <a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a> has PCMC Bhavan and suburban stations at Pimpri and Chinchwad; {!! $cbpA('wakad', 'Wakad') !!} itself still depends on the road. <a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a> families draw on tutors who ride to Swargate and finish by bus or auto, which works for {!! $cbpA('bibwewadi', 'Bibwewadi') !!}.</li>
    <li><strong>No metro yet.</strong> <a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a> relies on two-wheelers from the next suburb, so a {!! $cbpA('baner', 'Baner') !!} family should look for a tutor from Baner itself or close by. <a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a> has no metro either; in {!! $cbpA('hadapsar', 'Hadapsar') !!}, a tutor who already lives in the zone keeps the timetable steady.</li>
    <li><strong>Camp and around.</strong> <a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and Wanowrie</a> has Bund Garden and Pune Railway Station stops; near army areas, check entry rules before the first visit.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-mode">Home or online for CBSE in Pune</h2>
  <p>
    For a Class 6 to 10 student, home sessions are usually worth the effort: the tutor watches the working, checks
    the notebook and sees which NCERT exercises were skipped. Because CBSE tutors are plentiful, most zones can find a
    home tutor nearby. Online earns its place for senior specialists who live across the city, for short doubt
    sessions in the board months, and on the heaviest rain days, when Satara Road, Sinhagad Road and Nagar Road are at
    their slowest. Agree that fallback in the first week. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor</a> comparison sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-demo">Demo checklist for a CBSE tutor</h2>
  <ol>
    <li><strong>Which sample paper?</strong> A tutor working from this year's paper and marking scheme has done their homework.</li>
    <li><strong>A case-based question, cold.</strong> Watch whether they teach your child to read the situation before reaching for the formula.</li>
    <li><strong>Steps and presentation.</strong> In maths and numericals, do they correct the working as well as the answer?</li>
    <li><strong>Internal marks.</strong> How would they support the practical file or projects without doing them?</li>
    <li><strong>Class 9 Advanced.</strong> Would they recommend it for your child, and why?</li>
    <li><strong>The journey.</strong> Metro, two-wheeler or bus, and how long at your lesson time?</li>
  </ol>
  <p>
    You get two or three matched tutors, see every fee before the demo, and switching tutor later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live; see also
    our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. In Pune, the class, the
    number of subjects and the tutor's ride to your zone move the figure. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Tell us the class, subjects, your locality and free slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For a fuller walk through the board, stage by stage, read our
    <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE guide for Gurgaon</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, every locality on our <a href="{{ url('/city/pune') }}">Pune tutors
    page</a>, or, if you teach, <a href="{{ url('/tuition-jobs/pune') }}">tuition jobs in Pune</a>.
  </p>
  </section>

  </div>
</article>
