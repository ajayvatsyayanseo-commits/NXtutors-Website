{{--
  Ghaziabad board page for "IGCSE tutor Ghaziabad" (Cambridge IGCSE and
  Pearson Edexcel International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE
  and ISC maths). No anecdotes, years or results are claimed for him. No
  schools, societies, developers or people are named.

  Board facts reworded from the Gurgaon IGCSE hub (igcse-tutor-gurgaon), which
  cites (syllabus PDFs from cambridgeinternational.org and
  qualifications.pearson.com, read 1 Oct 2026):
  - Cambridge IGCSE Mathematics 0580 syllabus for 2025-2027: Core Papers 1
    (non-calculator) and 3 (calculator), grades C-G; Extended Papers 2 and 4,
    grades A*-E; about 130 guided learning hours per subject.
  - Cambridge IGCSE Chemistry 0620, Physics 0625, Biology 0610 syllabuses for
    2026-2028: Core (grades C-G) or Extended (A*-G, Core plus Supplement);
    MCQ 40 questions, 45 min, 30%; theory 80 marks, 1 h 15 min, 50%;
    practical test or alternative to practical, 40 marks, 20%.
  - Cambridge IGCSE Additional Mathematics 0606.
  - Pearson Edexcel International GCSE Mathematics A (4MA1): Foundation and
    Higher tiers, grades 9-1; 4PH1/4CH1/4BI1 untiered, two written papers, no
    separate practical exam; Further Pure Mathematics 4PM1.
  No exam series months are given on this page. The city's board mix and UP
  Board (UPMSP) wording only as the Ghaziabad hub view states it ("the IB and
  Cambridge IGCSE serve a smaller group"); nothing here says where IGCSE
  families live. Local detail only from
  database/seo-content/areas/ghaziabad-research.json,
  ghaziabad-zone-guides.json, zones/ghaziabad.json and the hub. Fee wording is
  the approved NXTutors sentence. FAQs: faqs/igcse-tutor-ghaziabad.php. Area
  links render only for active Ghaziabad areas.
--}}
@php
  $iggzSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $iggz = function (string $slug, string $label) use ($iggzSlugs) {
      return in_array($slug, $iggzSlugs, true)
          ? '<a href="' . e(url('/city/ghaziabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide iggz-guide" aria-labelledby="iggzGuideTitle">
  <h2 id="iggzGuideTitle">IGCSE tutors in Ghaziabad: start with the syllabus code, then find someone who can reach you</h2>

  <p class="nx-guide__lede">
    An IGCSE request that says only "Grade 9 maths" leaves a tutor guessing. Is it Cambridge or Pearson Edexcel? Which
    syllabus code? Core or Extended, Foundation or Higher? Those answers decide the papers, the reachable grades and
    the kind of practice that helps, so they matter more than anything else on the request. In Ghaziabad, where
    IGCSE families are a smaller group than CBSE or ICSE ones, they also decide how widely we need to look for a
    tutor. This page explains the two awarding bodies, tiers, the science papers, how IGCSE differs from the Indian
    boards, what to test in the demo and how tutors travel across the city. It is written by Ajay Vatsyayan, who
    teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igz-city">IGCSE in Ghaziabad</a> ·
    <a href="#igz-boards">Cambridge and Edexcel</a> ·
    <a href="#igz-indian">Next to Indian boards</a> ·
    <a href="#igz-tier">Tier decisions</a> ·
    <a href="#igz-sci">Science papers</a> ·
    <a href="#igz-grades">Grades 9 and 10</a> ·
    <a href="#igz-need">Subjects in demand</a> ·
    <a href="#igz-session">Session plan</a> ·
    <a href="#igz-travel">Tutor travel</a> ·
    <a href="#igz-mode">Home or online</a> ·
    <a href="#igz-check">Demo checks</a> ·
    <a href="#igz-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igz-city">Where IGCSE sits among Ghaziabad's boards</h2>
  <p>
    As our <a href="{{ url('/city/ghaziabad') }}">Ghaziabad city guide</a> puts it, CBSE is the most common board in
    the city, ICSE and ISC have a steady following, UP Board schools matter in Uttar Pradesh, and the IB and
    Cambridge IGCSE serve a smaller group. The useful conclusion for an IGCSE parent: specialists for your exact
    syllabus exist, but not on every street, so precision in the request and openness to a hybrid plan widen the
    choice considerably.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-boards">Cambridge IGCSE and Edexcel International GCSE side by side</h2>
  <p>
    Schools usually teach IGCSE across Grades 9 and 10, and Cambridge designs each syllabus around roughly 130 guided
    learning hours. Every subject has its own code, papers and grade; there is no single combined result.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The two awarding bodies compared, for the subjects families tutor most</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">Cambridge IGCSE</th><th scope="col">Edexcel International GCSE</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade scale</td><td>A* to G on the codes below</td><td>9 to 1</td></tr>
      <tr><td>Maths entry levels</td><td>Core or Extended (0580)</td><td>Foundation or Higher (4MA1)</td></tr>
      <tr><td>Calculator in maths</td><td>One paper without, one with</td><td>Allowed on both papers</td></tr>
      <tr><td>Sciences</td><td>Physics 0625, Chemistry 0620, Biology 0610, each Core or Extended</td><td>4PH1, 4CH1, 4BI1, untiered, two written papers</td></tr>
      <tr><td>Practical skills</td><td>A practical test or an alternative-to-practical paper</td><td>Assessed inside the written papers</td></tr>
      <tr><td>Beyond the main maths</td><td>Additional Mathematics 0606</td><td>Further Pure Mathematics 4PM1</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The school picks the awarding body, sometimes subject by subject. Ask the school for the codes on your child's
    entry before you request a tutor. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge
    versus Edexcel comparison</a> goes paper by paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-indian">How IGCSE differs from CBSE, ICSE and the UP Board</h2>
  <p>
    Indian boards examine a fixed set of subjects at Class 10 against a national textbook or syllabus: CBSE through
    NCERT books and sample papers, ICSE through many long-answer papers, and the UP Board, under UPMSP, through its
    own papers in Hindi or English medium. IGCSE asks for a different set of habits: past papers and mark schemes,
    exact command words such as "describe", "explain" and "suggest", calculator discipline, and practical skills
    tested on paper. A student moving in from an Indian board usually finds the content familiar and the questions
    unfamiliar. The reverse move, back to CBSE or ISC for Class 11, needs fast hand calculation and full textbook-style
    working; our guide to <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching between CBSE and
    IB or IGCSE</a> covers both directions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-tier">Tier decisions, and why a tutor should plan around them</h2>
  <p>
    The tier caps the grade. In Cambridge 0580, Core students sit Papers 1 and 3 and cannot go above C; Extended
    students sit Papers 2 and 4 and can reach A*, with E the lowest grade. In the Cambridge sciences, Extended adds
    Supplement content and runs from A* to G, while Core runs from C to G. In Edexcel 4MA1, Foundation aims at grades
    5 to 1 and Higher at 9 to 4. Schools commonly fix the tier during Grade 10 on the evidence of test results.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Where your child stands, and what the tutor should prioritise</caption>
    <thead>
      <tr><th scope="col">Position</th><th scope="col">Priority for the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>On the edge of Extended or Higher</td><td>Supplement topics and harder algebra early, so the school's evidence points upward</td></tr>
      <tr><td>Safely on the higher tier, aiming for A* or 9</td><td>Long multi-step questions, exact wording, an error log by topic</td></tr>
      <tr><td>Entered for Core or Foundation</td><td>Every reachable mark: method, units, reading the whole question</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-sci">The Cambridge science papers and their weights</h2>
  <p>
    Physics, Chemistry and Biology share a three-paper shape. A multiple-choice paper of 40 questions in 45 minutes
    carries 30%. A theory paper of short and structured questions, 80 marks over an hour and a quarter, carries 50%.
    The remaining 20% is a 40-mark practical test or, if the school chooses, an alternative-to-practical paper on
    planning, tables, graphs and evaluation. Each needs its own practice: timed sets for the multiple choice, mark
    scheme key words for theory, and written method and data handling for the practical. Edexcel's untiered
    sciences, by contrast, rest on two written papers with practical skills folded into the questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-grades">Grade 9 and Grade 10: shaping the two years</h2>
  <p>
    Grade 9 sets habits. Much of the content feels familiar to children who studied CBSE or ICSE earlier, and that is
    exactly when marks start leaking on calculator papers, unfamiliar question styles and "explain" answers. A tutor
    should run alongside the school's scheme and bring in topic-wise past-paper questions early. Grade 10 has two
    halves: until the mocks, finishing content and building technique; after them, full papers under time, marked
    with the official scheme, every lost mark logged by cause. Ask the school which exam series your child is
    entered for and plan back from it.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-need">IGCSE subjects families usually need help with</h2>
  <p>
    Maths and the three sciences lead, because method marks, non-calculator technique and practical-skills questions
    are where most marks go. English, economics and business usually need targeted help with written answers;
    remember that English as a first language and English as a second language are different courses. Additional
    Maths or Further Pure Maths suits students whose main maths grade is already secure.
  </p>
  <ul>
    <li>Maths: the national <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page, and <a href="{{ url('/maths-home-tutor-ghaziabad') }}">maths home tutors in Ghaziabad</a> who teach IGCSE.</li>
    <li>Sciences: <a href="{{ url('/physics-home-tutor-ghaziabad') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-ghaziabad') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-ghaziabad') }}">biology</a> tutors in Ghaziabad; give the syllabus code.</li>
    <li>English: <a href="{{ url('/english-home-tutor-ghaziabad') }}">English home tutors in Ghaziabad</a>, stating first or second language.</li>
  </ul>
  <p>
    The <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE tutors in Gurgaon</a> page explains the syllabuses in more
    depth, and our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE parents'
    guide</a> covers command words and mark schemes across both systems.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-session">How an IGCSE session should run</h2>
  <p>
    Look for structure you can see. The session opens with the error log, not memory: which question types went
    wrong last week. Then one topic is taught or repaired using examples in the style of the real papers, command
    words included. The final stretch is two or three past-paper questions under time, marked together against the
    published mark scheme so your child sees exactly where each mark lands. Homework is short and specific, and you
    get a line or two on what was covered and what comes next. A session that is mostly the tutor talking, or the
    same worksheet each week, is a reason to ask for a change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-travel">How IGCSE tutors travel to different parts of Ghaziabad</h2>
  <p>
    {!! $iggz('vaishali-sector-6', 'Vaishali Sector 6') !!} is mostly builder floors, which means a doorstep visit;
    metro tutors get off at Vaishali and take an e-rickshaw along Harshvardhan Marg. In
    {!! $iggz('indirapuram-ahinsa-khand-1', 'Ahinsa Khand 1') !!}, almost every family lives in a high-rise society,
    so give security the tutor's name and number before the demo; Noida Electronic City is the nearest station.
    {!! $iggz('vasundhara-sector-16', 'Vasundhara Sector 16') !!} is largely apartments around a busy main market;
    tutors come from Vaishali by e-rickshaw or ride in from Indirapuram, and the chowk crowds in the evening, so time
    the slot around it.
  </p>
  <p>
    On the western edge, {!! $iggz('surya-nagar', 'Surya Nagar') !!} is lettered blocks of builder floors with no
    station of its own; tutors living just across the border in East Delhi, using Jhilmil or Dilshad Garden on the
    Red Line, are worth considering. East of the Hindon, {!! $iggz('shastri-nagar', 'Shastri Nagar') !!} on the Hapur
    Road side is plotted, with Shaheed Sthal the nearest metro, and the block letters make the house easy to find.
    {!! $iggz('pratap-vihar', 'Pratap Vihar') !!}, beside Vijay Nagar on the expressway corridor, is mainly houses
    with some complexes; Ghaziabad Junction and Shaheed Sthal are the nearest rail points. See the
    <a href="{{ url('/city/ghaziabad/zone/surya-nagar-ramprastha') }}">Surya Nagar and Ramprastha</a>,
    <a href="{{ url('/city/ghaziabad/zone/indirapuram') }}">Indirapuram</a> and
    <a href="{{ url('/city/ghaziabad/zone/raj-nagar-kavi-nagar-old-ghaziabad') }}">old Ghaziabad</a> zone pages for
    more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-mode">Home or online for IGCSE in Ghaziabad</h2>
  <p>
    If a tutor who teaches your child's exact syllabus lives within easy reach, home lessons are the simplest
    arrangement. For Additional Maths, a Cambridge science on the practical route, or a Grade 10 student close to the
    exam, the right specialist may be far away, and a hybrid plan keeps them: a home session at the weekend and an
    online one midweek. Online maths and science need the tutor to watch the working as it is written. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor versus online tutor</a> post covers the setup.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-check">What to check in an IGCSE demo class</h2>
  <ol>
    <li><strong>Code and tier.</strong> Say "0620 Extended" or "4MA1 Higher" and see whether the tutor describes the papers without looking them up.</li>
    <li><strong>Live marking.</strong> Ask them to mark one of your child's past-paper answers against the published scheme and point out where method marks went.</li>
    <li><strong>The calculator question.</strong> For Cambridge maths, how do they train the non-calculator paper? For Edexcel, the algebra a calculator cannot do?</li>
    <li><strong>Practical route.</strong> For a Cambridge science, ask whether your child sits the practical test or the alternative paper, and how they would prepare it.</li>
    <li><strong>A plan to the exam.</strong> The tutor should sketch the months ahead against your child's exam series.</li>
  </ol>
  <p>
    You get two or three matched tutors, each fee is visible before the demo, and switching later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. More prompts are in our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igz-fees">IGCSE fees and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For IGCSE the subject, the tier, how near the exam is and the tutor's travel at your slot move the figure. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our post on
    <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">home tuition fees in Ghaziabad</a>.
  </p>
  <p>
    Tell us the awarding body, syllabus code and tier, the grade, your locality or society and your free times. The
    first class with your chosen tutor is a <a href="{{ url('/demo-class') }}">free demo</a>, and you can browse
    <a href="{{ url('/tutors') }}">tutor profiles</a> in the meantime. Other boards in the city:
    <a href="{{ url('/cbse-home-tutor-ghaziabad') }}">CBSE</a>, <a href="{{ url('/icse-home-tutor-ghaziabad') }}">ICSE
    and ISC</a> and <a href="{{ url('/ib-tutor-ghaziabad') }}">IB</a> tutors in Ghaziabad. IGCSE teachers can look for
    students on <a href="{{ url('/tuition-jobs/ghaziabad') }}">Ghaziabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
