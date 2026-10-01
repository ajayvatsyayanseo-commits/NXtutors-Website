{{--
  Board hub for "IGCSE tutor Indore" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools are named.

  Board facts restate only what igcse-tutor-gurgaon states, which cites
  cambridgeinternational.org and qualifications.pearson.com (read 1 Oct 2026):
  0580 maths Core (Papers 1 non-calculator, 3 calculator; grades C-G),
  Extended (Papers 2 and 4; A*-E), scientific calculator on calculator
  papers, graphical not permitted; 0625/0620/0610 Core (C-G) or Extended
  with Supplement (A*-G); multiple choice 40 questions, 45 min, 30%; theory
  80 marks, 1 h 15 min, 50%; practical test or alternative to practical, 40
  marks, 20%; about 130 guided learning hours; June and November series,
  March also in India; 0606 Additional Mathematics; Edexcel 4MA1 Foundation
  (5-1) and Higher (9-4), calculator allowed in both papers, January and June;
  4PH1/4CH1/4BI1 untiered, two written papers, no separate practical exam.
  No exam dates.

  Local detail only from the city hub (indore.blade.php: "a smaller group
  following the IB or Cambridge IGCSE"; for Cambridge IGCSE, command words,
  the correct tier and marking against past schemes matter most; Yellow Line;
  Ring Road; AB Road) and database/seo-content/zones/indore.json (Nipania
  zone: online tutors used for international-board subjects). No share of
  IGCSE schools is claimed. Fee wording is the approved sentence. FAQs render
  from faqs/igcse-tutor-indore.php. Area links render only when that Indore
  area page exists and is active.
--}}
@php
  $inAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $inA = function (string $slug, string $label) use ($inAreaSlugs) {
      return in_array($slug, $inAreaSlugs, true)
          ? '<a href="' . e(url('/city/indore/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide igi-guide" aria-labelledby="igiGuideTitle">
  <h2 id="igiGuideTitle">IGCSE tutors in Indore: the right code, the right tier, the right practice</h2>

  <p class="nx-guide__lede">
    For Cambridge IGCSE, three things matter most: command words, the correct tier, and marking practice answers
    against past mark schemes. Indore has only a smaller international group next to its CBSE, MP Board and CISCE
    families, so a tutor who knows these exams closely may be on the far side of the Ring Road or AB
    Road, or online. This page explains what to find out before the first lesson, how grades and tiers work, how the
    Cambridge science papers are weighted, the subjects Indore families raise most, travel in each zone, and a demo
    checklist. Ajay Vatsyayan wrote it; on NXTutors he teaches maths for IB, IGCSE and ISC.
    The board's papers are covered in more depth in our <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE guide</a>.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igi-city">IGCSE in Indore</a> ·
    <a href="#igi-diff">Against the Indian boards</a> ·
    <a href="#igi-sheet">The entry sheet</a> ·
    <a href="#igi-tiers">Grades and tiers</a> ·
    <a href="#igi-calc">Calculator rules</a> ·
    <a href="#igi-sci">Science papers</a> ·
    <a href="#igi-plan">Grade 9 and 10 plan</a> ·
    <a href="#igi-cmd">Command words</a> ·
    <a href="#igi-lesson">Each lesson</a> ·
    <a href="#igi-subjects">Subjects</a> ·
    <a href="#igi-zones">Zones</a> ·
    <a href="#igi-demo">Demo</a> ·
    <a href="#igi-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igi-city">IGCSE among Indore's boards</h2>
  <p>
    The <a href="{{ url('/city/indore') }}">Indore tutors page</a> lists CBSE schools across the city, the MP Board,
    CISCE schools and a smaller group following the IB or Cambridge IGCSE. We do not estimate the size of any group.
    Our zone research does note that families along the Ring Road often use online tutors for international-board
    subjects, which matches what IGCSE needs: a tutor who has taught the exact syllabus code recently, wherever they
    live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-diff">IGCSE compared with CBSE and the MP Board</h2>
  <p>
    In general terms, CBSE and the MP Board set a group of subjects from prescribed textbooks, the MP Board in Hindi or
    English medium, and give one result. IGCSE treats each subject separately, with its own code, tier, papers and
    grade, and the school may enter subjects at different tiers. IGCSE mark schemes look for particular points and
    respond to command words, so "explain" without a reason, or "describe" padded with theory, loses marks. A student
    arriving from CBSE usually knows the content; the work is in technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-sheet">Before the first lesson: get the entry sheet</h2>
  <p>
    Ask the school office for your child's entry details, subject by subject, and send them with your request:
  </p>
  <ul>
    <li><strong>Awarding body:</strong> Cambridge or Pearson Edexcel, decided by the school and not always the same for every subject.</li>
    <li><strong>Syllabus code:</strong> for example 0580 for Cambridge maths or 4PH1 for Edexcel physics.</li>
    <li><strong>Tier:</strong> Cambridge uses Core and Extended, Edexcel maths uses Foundation and Higher; find out the date the school settles it.</li>
    <li><strong>Practical route:</strong> for Cambridge sciences, practical test or alternative-to-practical paper.</li>
    <li><strong>Series:</strong> for Cambridge, June, November or the March series offered in India; for Edexcel Maths A, January or June.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-tiers">Grades and tiers</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Which grades each entry allows</caption>
    <thead>
      <tr><th scope="col">Entry</th><th scope="col">Papers</th><th scope="col">Grades available</th></tr>
    </thead>
    <tbody>
      <tr><td>Cambridge 0580 Core</td><td>Papers 1 and 3</td><td>C to G</td></tr>
      <tr><td>Cambridge 0580 Extended</td><td>Papers 2 and 4</td><td>A* to E</td></tr>
      <tr><td>Cambridge science, Core</td><td>Core multiple-choice and theory papers, plus practical</td><td>C to G</td></tr>
      <tr><td>Cambridge science, Extended (Core plus Supplement)</td><td>Extended multiple-choice and theory papers, plus practical</td><td>A* to G</td></tr>
      <tr><td>Edexcel 4MA1 Foundation</td><td>Two papers</td><td>Targets 5 to 1</td></tr>
      <tr><td>Edexcel 4MA1 Higher</td><td>Two papers</td><td>Targets 9 to 4</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Schools usually fix tiers during Grade 10. For a borderline student, tutoring before that point should focus on
    the higher tier's content and harder problems, so the evidence the school sees supports the higher entry.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-calc">Calculator rules shape the practice</h2>
  <p>
    Cambridge maths has one paper without a calculator and one with a scientific calculator; graphical calculators are
    not permitted. That makes hand methods, fractions, standard form and estimation worth regular drill. Edexcel
    4MA1 allows a calculator in both papers, so its marks are won on longer multi-step problems and algebra that no
    calculator does for you. A tutor who uses the same practice for both is not preparing either properly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-sci">How the Cambridge sciences are weighted</h2>
  <p>
    Cambridge Physics (0625), Chemistry (0620) and Biology (0610) each have three papers per candidate. The
    multiple-choice paper, 40 questions in 45 minutes, is 30% of the grade. Half the grade comes from the theory paper,
    worth 80 marks and lasting 75 minutes. The practical paper, 40 marks, is the last 20%, as either a practical test or an
    alternative-to-practical written paper, at the school's choice. Edexcel's sciences (4PH1, 4CH1, 4BI1) are untiered
    and test practical skills inside two written papers. Ask the tutor to show how they practise each paper type.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-plan">A plan for Grade 9 and Grade 10</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How tuition shifts over the two IGCSE years</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th></tr>
    </thead>
    <tbody>
      <tr><td>Grade 9, start</td><td>New question styles; non-calculator habits; an error log from week one</td></tr>
      <tr><td>Grade 9, through the year</td><td>Past-paper questions by topic, one step ahead or behind the school</td></tr>
      <tr><td>Grade 10, before mocks</td><td>Finish content; higher-tier work for borderline students; command words</td></tr>
      <tr><td>Grade 10, after mocks</td><td>Whole papers against the clock, checked with the published scheme, each dropped mark noted by cause</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Cambridge sizes a syllabus at about 130 guided learning hours. Families with a March entry have a shorter
    run after mocks than June candidates, so count the weeks from the actual series date the school confirms.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-cmd">Command words: the skill most students arrive without</h2>
  <p>
    IGCSE questions open with a verb that tells the student what kind of answer earns marks, and much of a tutor's
    value lies in teaching students to obey it. "State" wants a short fact with no explanation. "Describe" wants what
    happens or what is seen, often from a graph or an experiment, without a reason. "Explain" wants the reason, linked
    clearly to the effect. "Suggest" asks the student to apply what they know to a situation they have not met, and
    accepts more than one sensible answer. "Calculate" wants working as well as the result, with units. A useful drill
    is to take a single past-paper diagram and ask four questions about it with four different command words, then
    compare the answers with the mark scheme. Students who come from CBSE or the MP Board often know the science
    perfectly well and lose marks only because the answer is the wrong shape for the verb.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-lesson">What to expect in each lesson</h2>
  <p>
    Each session should open with the error log, move to one topic taught in the papers' own phrasing, and close with
    timed past-paper questions marked together against the scheme. You should hear afterwards, in a line or two, what
    was covered and what comes next, and the homework should target one weakness rather than a whole chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-subjects">IGCSE subjects and our Indore pages</h2>
  <ul>
    <li><strong>Maths:</strong> the <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths</a> page, plus local <a href="{{ url('/maths-home-tutor-indore') }}">Indore maths tutors</a>; Additional Maths (0606) for students already secure in the main course.</li>
    <li><strong>Sciences:</strong> <a href="{{ url('/physics-home-tutor-indore') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-indore') }}">chemistry</a>, <a href="{{ url('/biology-home-tutor-indore') }}">biology</a>, or <a href="{{ url('/science-home-tutor-indore') }}">science home tutors</a> in Grade 9.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-indore') }}">English tutors in Indore</a>; tell us whether it is English as a first or a second language, since the courses differ.</li>
  </ul>
  <p>
    Next steps after Grade 10: <a href="{{ url('/ib-tutor-indore') }}">IB tutors in Indore</a>, or the
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">CBSE, IB and IGCSE switching guide</a> for a
    bridge back to CBSE or ISC. The <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus
    Edexcel comparison</a> covers the two boards paper by paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-zones">IGCSE tutors across Indore</h2>
  <ul>
    <li><strong><a href="{{ url('/city/indore/zone/vijay-nagar-ab-road') }}">Vijay Nagar and AB Road</a>.</strong> {!! $inA('scheme-54', 'Scheme 54') !!} and {!! $inA('sukhliya', 'Sukhliya') !!} are near Yellow Line stations (Vijay Nagar Chauraha, Hira Nagar, MR 10 Road), which widens the pool of tutors who can come.</li>
    <li><strong><a href="{{ url('/city/indore/zone/palasia-central-indore') }}">Palasia and Central Indore</a>.</strong> {!! $inA('saket-nagar', 'Saket Nagar') !!} has quiet residential streets; tutors come by auto, bus or two-wheeler, as no metro station is open here yet.</li>
    <li><strong><a href="{{ url('/city/indore/zone/nipania-bicholi-ring-road') }}">Nipania, Bicholi and Ring Road</a>.</strong> In {!! $inA('scheme-140', 'Scheme 140') !!} and along {!! $inA('kanadia-road', 'Kanadia Road') !!}, a tutor who already works along the Ring Road is easiest to keep; in newer colonies, pair them with online sessions.</li>
    <li><strong><a href="{{ url('/city/indore/zone/bhawarkua-rajendra-nagar-rau') }}">Bhawarkua, Rajendra Nagar and Rau</a>.</strong> {!! $inA('bijalpur', 'Bijalpur') !!} has mid-income flats and houses; register a tutor at any gated project and set the class a little later than the AB Road rush.</li>
  </ul>
  <p>
    Home lessons suit Grade 9 and the Cambridge non-calculator paper, where each line needs checking. Online sessions
    suit a specialist who lives far off, as long as the tutor sees the working live. In the centre and south, where
    the metro has not opened yet, a tutor on your own stretch of AB Road or the Ring Road is the easiest to keep
    for weekly home lessons. Many families use one of each with
    the same tutor; see the <a href="{{ url('/blog/vijay-nagar-and-east-indore-tuition-guide') }}">Vijay Nagar and east
    Indore guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-demo">Testing an IGCSE tutor in the demo</h2>
  <ol>
    <li>State the code and tier and ask the tutor to describe the papers from memory.</li>
    <li>Ask for one past-paper answer to be marked live against the published scheme.</li>
    <li>For Cambridge 0580, give them a Paper 1 or 2 question and see how they work it without a calculator.</li>
    <li>For sciences, ask how they prepare the practical route your school uses.</li>
    <li>Ask for an outline plan to the series your child is entered for.</li>
  </ol>
  <p>
    The shortlist brings two or three tutors, each fee on view before the demo, and a later switch is free of
    charge. Every tutor who joins goes through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igi-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IGCSE in Indore, the fee
    moves with the subject, the tier, the weeks left to the exam and the tutor's journey. Read the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-indore') }}">Indore tuition fees</a>.
  </p>
  <p>
    Send the entry sheet details, the grade, your scheme or colony and the hours you can offer. Your first session
    is a <a href="{{ url('/demo-class') }}">free demo</a>. Look through <a href="{{ url('/tutors') }}">tutor profiles</a>; IGCSE
    teachers can see <a href="{{ url('/tuition-jobs/indore') }}">tuition jobs in Indore</a>.
  </p>
  </section>

  </div>
</article>
