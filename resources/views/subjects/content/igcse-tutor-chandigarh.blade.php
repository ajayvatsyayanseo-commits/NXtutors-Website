{{--
  Board hub for "IGCSE tutor Chandigarh" (Cambridge IGCSE and Pearson Edexcel
  International GCSE) across the tricity. Author: Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths). No anecdotes, years or results are claimed for him.
  No schools are named.

  Board facts restate only what igcse-tutor-gurgaon states, which cites
  cambridgeinternational.org and qualifications.pearson.com (read 1 Oct 2026):
  Cambridge 0580 maths (Core Papers 1 non-calculator and 3 calculator, grades
  C-G; Extended Papers 2 and 4, A*-E; no graphical calculator); sciences 0625,
  0620, 0610 (Core C-G, Extended with Supplement A*-G; multiple choice 40
  questions 45 min 30%, theory 80 marks 1 h 15 min 50%, practical test or
  alternative to practical 40 marks 20%); about 130 guided learning hours;
  June and November series, March also in India; Additional Mathematics 0606;
  Edexcel 4MA1 Foundation and Higher, grades 9-1; 4PH1/4CH1/4BI1 untiered,
  two written papers, no separate practical exam. No exam dates.

  Local detail only from the city hub (chandigarh.blade.php: Cambridge among
  the international programmes; IGCSE card; online reach for IB and IGCSE; no
  metro) and database/seo-content/zones/chandigarh.json (local tutor plus
  online specialist for IB, IGCSE or senior science). No share of IGCSE
  schools is claimed. Fee wording is the approved sentence. FAQs render from
  faqs/igcse-tutor-chandigarh.php. Area links render only when that tricity
  area page exists and is active.
--}}
@php
  $cgAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cgA = function (string $slug, string $label) use ($cgAreaSlugs) {
      return in_array($slug, $cgAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igc-guide" aria-labelledby="igcGuideTitle">
  <h2 id="igcGuideTitle">IGCSE tutors in Chandigarh and the tricity: syllabus code, tier and exam series first</h2>

  <p class="nx-guide__lede">
    For a tricity family, "IGCSE" is only the start of a tutor request. The tutor also needs the awarding body
    (Cambridge or Pearson Edexcel), the syllabus code, the tier and the exam series, because those decide which papers
    your child sits and which grades are within reach. This page explains how the IGCSE years run, how the tiers and
    science papers work, which subjects tricity parents usually ask about, how tutors get to each zone, and what to
    check in the free demo. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths on NXTutors. The
    <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE board guide</a> goes further into each paper.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igc-place">IGCSE in the tricity</a> ·
    <a href="#igc-diff">Against the school boards</a> ·
    <a href="#igc-two">Cambridge or Edexcel</a> ·
    <a href="#igc-tier">Tiers</a> ·
    <a href="#igc-sci">Science papers</a> ·
    <a href="#igc-years">Grades 9 and 10</a> ·
    <a href="#igc-session">A good lesson</a> ·
    <a href="#igc-subjects">Subjects</a> ·
    <a href="#igc-zones">Tutors by zone</a> ·
    <a href="#igc-demo">Demo checklist</a> ·
    <a href="#igc-start">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igc-place">Where Cambridge and Edexcel sit in the tricity</h2>
  <p>
    The <a href="{{ url('/city/chandigarh') }}">tricity hub</a> names up to five boards in use: CBSE, CISCE, the
    international programmes, and the Punjab and Haryana boards. IGCSE belongs to the international group with the IB.
    We give no count of IGCSE families, since we have none we would stand behind. The planning point from our zone
    research is that IGCSE requests, like IB and senior science, often suit a local tutor for weekly work plus an
    online specialist for the subject that needs one, especially in newer townships with few resident tutors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-diff">How IGCSE differs from CBSE, ICSE and the state boards</h2>
  <p>
    In general terms, the Indian boards give one result for a set of subjects studied from prescribed textbooks. An
    IGCSE student takes separate subjects, each with its own code, papers and grade, and the school may enter
    different subjects at different tiers. Marks depend heavily on command words such as "describe", "explain" and
    "suggest", and on answers matching the mark scheme's key points. A tutor who teaches CBSE or the Punjab board well
    may know the content but not the exam craft, so ask about recent IGCSE teaching specifically.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-two">Cambridge IGCSE and Edexcel International GCSE side by side</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two IGCSE awarding bodies, in the features that change tutoring</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">Cambridge IGCSE</th><th scope="col">Edexcel International GCSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade scale</td><td>A* to G on the common codes</td><td>9 to 1</td></tr>
      <tr><td>Maths entry</td><td>0580, Core or Extended</td><td>4MA1, Foundation or Higher</td></tr>
      <tr><td>Calculator</td><td>A non-calculator paper and a calculator paper</td><td>Allowed on both papers</td></tr>
      <tr><td>Sciences</td><td>0625, 0620, 0610, tiered, with a practical paper</td><td>4PH1, 4CH1, 4BI1, untiered, two written papers</td></tr>
      <tr><td>Exam sessions</td><td>June and November, with March also offered in India</td><td>Maths A lists January and June</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The school, not the parent, chooses the board, and some schools mix the two by subject. Ask the school office for
    the exact codes on your child's entry before the first tutoring session. The
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel comparison</a> sets out the
    differences paper by paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-tier">Why the tier decides what a tutor should do</h2>
  <p>
    In Cambridge maths, Core students sit Papers 1 and 3 and can reach grades C to G, while Extended students sit
    Papers 2 and 4 and can reach A* to E. In the Cambridge sciences, Extended adds Supplement content and allows A* to
    G; Core allows C to G. Edexcel maths Foundation targets grades 5 to 1 and Higher 9 to 4. So a child entered for
    Core maths cannot score an A however well the paper goes. Schools usually fix the tier during Grade 10 from test
    results, which makes Grade 9 and the first half of Grade 10 the time for a tutor to push a borderline student
    clearly into higher-tier work. Ask the school when the decision is made and on what evidence.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-sci">The three Cambridge science papers</h2>
  <p>
    Cambridge Physics, Chemistry and Biology share one design. Every candidate sits a multiple-choice paper of 40
    questions in 45 minutes, worth 30%; a theory paper of 80 marks in an hour and a quarter, worth 50%; and one
    practical paper, either a practical test or an alternative to practical, of 40 marks and worth 20%. The tier picks
    which multiple-choice and theory papers; the school picks the practical route. Each paper needs its own practice:
    timed sets of forty questions, structured answers marked against key words, and planning, tables, graphs and
    evaluation for the practical. Edexcel sciences have no separate practical exam; practical skills are tested inside
    two written papers that reward clear longer answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-years">Grade 9 and Grade 10 at a glance</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The IGCSE years and a tutor's priorities</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">What is happening</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, first term</td><td>New content, much of it familiar from CBSE or ICSE</td><td>Unfamiliar question styles, calculator and non-calculator habits</td></tr>
      <tr><td>Grade 9, rest of year</td><td>Topic tests at school</td><td>Past-paper questions by topic, an error log started</td></tr>
      <tr><td>Grade 10, to mocks</td><td>Content finishing; tier decisions</td><td>Higher-tier work for borderline students, command words</td></tr>
      <tr><td>Grade 10, after mocks</td><td>Exam series approaching</td><td>Full timed papers, marked with the official scheme, every lost mark logged</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge designs each syllabus around roughly 130 guided learning hours. A March entry in India shortens the
    final stretch compared with June, so plan backwards from the series your child is sitting, and agree with the
    tutor which weeks will move online when travel across the tricity gets harder.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-session">Inside a good IGCSE lesson</h2>
  <p>
    Sixty to ninety minutes with a tutor who knows the course should follow a pattern you can recognise from the side
    of the room. The first few minutes go to last week's errors, read from the student's error log rather than
    remembered. The middle part teaches or repairs one topic with worked examples written in the style of the real
    papers, command words included, so "state" gets a short answer and "explain" gets a reason. The final part is two
    or three past-paper questions on that topic, done against the clock and then marked together with the official
    mark scheme, so the student sees exactly which phrase or step earned each mark. Homework should be short and
    specific: five questions on the weak skill, not a whole chapter. If most of the hour is the tutor talking, or the
    same worksheet returns each week, ask for a change; the shortlist has other tutors for exactly that reason.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-subjects">Which IGCSE subjects tricity families ask about</h2>
  <ul>
    <li><strong>Maths, 0580 or 4MA1:</strong> the most common request, with non-calculator technique for Cambridge. See <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutors</a> and local <a href="{{ url('/maths-home-tutor-chandigarh') }}">maths home tutors in Chandigarh</a>. Additional Maths (0606) suits students whose main maths grade is already secure.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/physics-home-tutor-chandigarh') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-chandigarh') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-chandigarh') }}">biology</a> tutors; say whether the school enters the practical test or the alternative paper. For a younger student, <a href="{{ url('/science-home-tutor-chandigarh') }}">science home tutors</a> cover all three.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-chandigarh') }}">English home tutors</a>; first-language and second-language English are different courses, so give the code.</li>
  </ul>
  <p>
    Planning the step after Grade 10? Our <a href="{{ url('/ib-tutor-chandigarh') }}">IB tutors in the tricity</a> page
    covers the Diploma, and <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching between CBSE
    and IB or IGCSE</a> has a bridging plan for a move to CBSE or ISC in Class 11.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-zones">IGCSE tutors by zone, and the case for online</h2>
  <ul>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-1-30') }}">Sectors 1 to 30</a>.</strong> {!! $cgA('sector-21', 'Sector 21') !!} is divided into blocks A to D with builder floors on many plots, so send the block and the bell to ring.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/chandigarh-sectors-31-56-manimajra') }}">Sectors 31 to 56 and Manimajra</a>.</strong> {!! $cgA('sector-40', 'Sector 40') !!} sits on the Mohali side, so a tutor from Mohali may be nearer in practice; the cooperative societies of {!! $cgA('sector-49', 'Sector 49') !!} keep a visitor list at the gate.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/mohali') }}">Mohali</a>.</strong> {!! $cgA('mohali-phase-3b2', 'Phase 3B2') !!} is houses reached at the door; {!! $cgA('mohali-sector-70', 'Sector 70') !!} mixes houses with complexes that need gate registration.</li>
    <li><strong><a href="{{ url('/city/chandigarh/zone/panchkula-zirakpur') }}">Panchkula and Zirakpur</a>.</strong> {!! $cgA('zirakpur', 'Zirakpur') !!} is mostly gated societies; Peer Muchalla lies beside Panchkula's Sectors 20 and 21, so one tutor can cover both towns.</li>
  </ul>
  <p>
    For a practical-route science or Additional Maths, the right specialist may live elsewhere in the tricity or
    beyond it. A weekend home lesson with weekday online sessions keeps that tutor practical, provided the tutor sees
    written working live. Younger IGCSE students, and anyone weak on the non-calculator paper, usually do better
    with the tutor at the table, where every line of working is visible. Match days near the Phase 9 stadiums and
    Navratra weeks around Mansa Devi are good weeks to move a lesson online. Local timing tips are in the <a href="{{ url('/blog/chandigarh-sectors-tuition-guide') }}">Chandigarh
    sectors guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-demo">IGCSE demo checklist</h2>
  <ol>
    <li><strong>Code and tier.</strong> Say "0580 Extended" or "4PH1" and see whether the tutor knows the papers without looking them up.</li>
    <li><strong>Live marking.</strong> Ask them to mark your child's past-paper answer against the published mark scheme.</li>
    <li><strong>Calculator discipline.</strong> Non-calculator practice by hand for Cambridge maths; harder algebra for Edexcel.</li>
    <li><strong>The practical route.</strong> For Cambridge sciences, how they would prepare a practical test versus the alternative paper.</li>
    <li><strong>A plan to the series.</strong> Months to March, June or November in outline.</li>
  </ol>
  <p>
    You get two or three matched tutors, see each fee first, and switching later is free. Tutors who join go through
    an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igc-start">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The subject, tier, how
    near the exam is and the tutor's travel decide the figure. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-chandigarh') }}">tricity tuition fees</a>.
  </p>
  <p>
    Tell us the board, code and tier (for example "Cambridge 0620 Extended"), the grade, your sector or phase and your
    slots; the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or teachers can see <a href="{{ url('/tuition-jobs/chandigarh') }}">tuition
    jobs in the tricity</a>.
  </p>
  </section>

  </div>
</article>
