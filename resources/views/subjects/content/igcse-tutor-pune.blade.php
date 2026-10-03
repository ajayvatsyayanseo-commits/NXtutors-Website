{{--
  Board page for "IGCSE tutor Pune" (Cambridge IGCSE and Pearson Edexcel
  International GCSE) across Pune and Pimpri-Chinchwad. Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools or societies are named.

  Syllabus facts are reworded from the Gurgaon board hub (igcse-tutor-gurgaon),
  which cites cambridgeinternational.org and qualifications.pearson.com
  syllabus PDFs (read 1 Oct 2026): about 130 guided learning hours; 0580 Core
  (Papers 1 and 3, C-G) and Extended (Papers 2 and 4, A*-E), non-calculator
  and calculator papers; 0625/0620/0610 Core or Extended (Extended A*-G, Core
  C-G), multiple choice 40 questions 45 min 30%, theory 80 marks 1 h 15 min
  50%, practical test or alternative to practical 40 marks 20%; June and
  November series, March also in India; Edexcel 4MA1 Foundation (5-1) and
  Higher (9-4), calculator allowed; 4PH1/4CH1/4BI1 untiered, two written
  papers, no separate practical exam; 0606 and 4PM1. No exam dates.
  Local detail only from the Pune city hub view ("a smaller group of Pune
  students take the IB Diploma or Cambridge IGCSE"; for IGCSE the tier and
  command words decide how an answer is built; international schools keep their
  own dates), zones/pune.json (Koregaon Park zone: home tutor plus online
  specialist common for IB or IGCSE; Viman Nagar zone: online suits IGCSE
  specialists) and pune-zone-guides.json. Area links render only for active
  Pune areas. Fee wording is the approved sentence.
  FAQs render from faqs/igcse-tutor-pune.php.
--}}
@php
  $igpSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $igpA = function (string $slug, string $label) use ($igpSlugs) {
      return in_array($slug, $igpSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="igpGuideTitle">
  <h2 id="igpGuideTitle">IGCSE tutors in Pune: Cambridge and Edexcel, tier by tier, zone by zone</h2>

  <p class="nx-guide__lede">
    IGCSE students are a smaller group in Pune than SSC or CBSE students, and that has two effects. Tutors who know a
    particular syllabus well are fewer in any one locality, and parents often meet tutors who say "IGCSE" but mean
    something quite general. The way through is to be precise. This page lists the details to have ready, explains
    how the Cambridge and Edexcel courses are examined, compares IGCSE with the board route most neighbours follow,
    and sets out how home and online tuition work across Pune and Pimpri-Chinchwad. It is written by Ajay Vatsyayan,
    who teaches IB, IGCSE and ISC maths on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#igp-ready">Details to have ready</a> ·
    <a href="#igp-grades">Grades and tiers</a> ·
    <a href="#igp-science">Science papers</a> ·
    <a href="#igp-boards">IGCSE and the boards</a> ·
    <a href="#igp-years">The two years</a> ·
    <a href="#igp-subjects">Subjects</a> ·
    <a href="#igp-zones">Zones</a> ·
    <a href="#igp-demo">The demo</a> ·
    <a href="#igp-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="igp-ready">Five details to have ready before you search</h2>
  <ol>
    <li><strong>Awarding body.</strong> Cambridge or Pearson Edexcel; some schools use both for different subjects.</li>
    <li><strong>Syllabus code.</strong> For example 0580 for Cambridge maths or 4MA1 for Edexcel maths. The school office will have it.</li>
    <li><strong>Tier.</strong> Core or Extended for Cambridge maths and sciences; Foundation or Higher for Edexcel maths.</li>
    <li><strong>Exam series.</strong> Cambridge runs June and November series, and a March series is available in India.</li>
    <li><strong>Practical route.</strong> For Cambridge sciences, whether the school enters the practical test or the alternative paper.</li>
  </ol>
  <p>
    With those five, a tutor can tell you in minutes whether they have taught your child's papers. Without them, a
    first month can go on the wrong material. Most schools teach IGCSE over Grades 9 and 10, and Cambridge designs
    each syllabus for about 130 guided learning hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-grades">Grades and tiers: what is reachable</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Tiers and the grades they allow</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">Lower tier</th><th scope="col">Higher tier</th></tr>
    </thead>
    <tbody>
      <tr><td>Cambridge maths 0580</td><td>Core: Papers 1 (no calculator) and 3 (calculator), grades C to G</td><td>Extended: Papers 2 (no calculator) and 4 (calculator), grades A* to E</td></tr>
      <tr><td>Cambridge sciences 0625, 0620, 0610</td><td>Core: grades C to G</td><td>Extended, adding Supplement content: grades A* to G</td></tr>
      <tr><td>Edexcel maths 4MA1</td><td>Foundation: aimed at grades 5 to 1</td><td>Higher: aimed at grades 9 to 4; calculator on both papers</td></tr>
      <tr><td>Edexcel sciences 4PH1, 4CH1, 4BI1</td><td colspan="2">Untiered: two written papers, grades 9 to 1</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The tier caps the grade. A student entered for Core maths cannot earn an A whatever they score, so the tier
    decision, usually taken by the school during Grade 10 on the basis of tests, matters a great deal. For a student
    on the border, a tutor's most useful work in Grade 9 is to make the case for the higher tier obvious before the
    school decides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-science">How Cambridge science is examined</h2>
  <p>
    Cambridge physics, chemistry and biology each have three components, and they reward different practice:
  </p>
  <ul>
    <li><strong>A multiple-choice paper</strong> of 40 questions in 45 minutes, worth 30%. Practise in timed sets of 40 and review the reason behind every wrong choice.</li>
    <li><strong>A theory paper</strong> of 80 marks in an hour and a quarter, worth 50%. Mark past questions against the key words the scheme looks for.</li>
    <li><strong>A practical test or an alternative-to-practical paper</strong>, 40 marks and 20%, chosen by the school. Practise planning experiments, results tables with units, graphs and comments on reliability.</li>
  </ul>
  <p>
    Edexcel's sciences have no separate practical exam; practical skills are tested inside two written papers, which
    gives more weight to clear extended answers. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge
    vs Edexcel comparison</a> lays the two side by side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-boards">IGCSE beside the State Board and CBSE</h2>
  <p>
    Most Pune neighbours sit the Maharashtra State Board's SSC or CBSE's Class 10 board exam. Broadly, both lead to a
    single board result built on prescribed textbooks. IGCSE gives a separate grade per subject, each earned on papers
    written to a published syllabus, and marks depend heavily on command words: "describe" wants what happens,
    "explain" wants why, "suggest" wants a reasoned idea applied to something new. The maths and science content
    overlaps a lot; the way answers are built does not. That is why a tutor who mainly teaches SSC or CBSE should be
    asked to describe your child's IGCSE papers before you book.
  </p>
  <p>
    The overlap also matters after Grade 10. Moving to CBSE, ISC or a junior college for the HSC means more hand
    calculation and textbook-style working; moving to the IB Diploma rewards Extended maths and graphic-calculator
    habits. Our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching guide</a> covers bridging
    in both directions, and the <a href="{{ url('/ib-tutor-pune') }}">IB tutors in Pune</a> page explains the Diploma.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-years">Grade 9 and Grade 10, planned backwards</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A two-year IGCSE tutoring plan</caption>
    <thead>
      <tr><th scope="col">Stretch</th><th scope="col">Main aim</th><th scope="col">Sign it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of Grade 9</td><td>Command words, calculator discipline, topic-wise past questions</td><td>An error log the student keeps</td></tr>
      <tr><td>Rest of Grade 9</td><td>Higher-tier topics for anyone near the line</td><td>School tests at the higher tier's level</td></tr>
      <tr><td>Grade 10 to the mocks</td><td>Finish the content; practical skills in the sciences</td><td>Topic tests marked with the official scheme</td></tr>
      <tr><td>After the mocks</td><td>Full timed papers, every lost mark logged by cause</td><td>Fewer repeat errors week on week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Count back from the series your child is entered for; a March entry leaves less time after the mocks than June.
    International schools keep their own calendars, so plan from your school's dates rather than the April and June
    starts that board schools use.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-session">What a session with a good IGCSE tutor contains</h2>
  <p>
    The first few minutes go on last week's mistakes, taken from the student's own error log rather than from
    anyone's memory. Then comes one topic, taught or repaired with examples written the way the real questions are
    written, command words included. The final stretch is exam practice: two or three past-paper questions on that
    topic, done against the clock and then marked with the official scheme open, so the student sees exactly which
    line earned each mark and which phrase the examiner was looking for. Homework should be short and specific, and
    you should get a line or two after each session saying what was covered and what comes next.
  </p>
  <p>
    For Cambridge science students, roughly one session in four should be given to practical skills: identifying
    variables, drawing a results table with units in the headings, choosing scales for a graph and commenting on
    whether results are reliable. The practical component carries a fifth of the subject's marks, the skills repeat
    from one paper to the next, and they are easy to neglect when the theory syllabus feels more urgent, so a fixed
    slot in the rota keeps them from being squeezed out. For Edexcel students, the equivalent is longer written explanations inside the two
    papers, practised until they are clear and complete without being long-winded.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-subjects">Subjects and our Pune pages</h2>
  <ul>
    <li><strong>Maths 0580 or 4MA1:</strong> <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutors</a> or <a href="{{ url('/maths-home-tutor-pune') }}">maths home tutors in Pune</a>; Additional Maths 0606 and Further Pure 4PM1 on request, for students whose main maths is secure.</li>
    <li><strong>Physics, chemistry, biology:</strong> <a href="{{ url('/physics-home-tutor-pune') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-pune') }}">biology</a> home tutors in Pune; or one tutor across all three in Grade 9 through <a href="{{ url('/science-home-tutor-pune') }}">science home tutors</a>.</li>
    <li><strong>English:</strong> first-language and second-language courses differ; see <a href="{{ url('/english-home-tutor-pune') }}">English home tutors in Pune</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-zones">Home tutors, online tutors and Pune's zones</h2>
  <p>
    Our zone notes describe a pattern that suits IGCSE families: a nearby home tutor for regular work and an online
    specialist for a particular code. Travel decides how much of the week can be at home.
  </p>
  <p>
    East of the river, <a href="{{ url('/city/pune/zone/koregaon-park-camp-wanowrie') }}">Koregaon Park, Camp and
    Wanowrie</a> mixes bungalows with societies; {!! $igpA('salunke-vihar', 'Salunke Vihar') !!} has no station close
    by, so tutors arrive by two-wheeler or auto and sign the visitor log. In
    <a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>,
    {!! $igpA('yerawada', 'Yerawada') !!} has its own Aqua Line station. Further south,
    <a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a> has no metro and heavy
    school traffic, so a tutor already living near {!! $igpA('undri', 'Undri') !!} keeps the slot best.
  </p>
  <p>
    West, <a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a> still has no working
    metro; for {!! $igpA('bavdhan', 'Bavdhan') !!}, a tutor from the next suburb is the practical choice.
    <a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a> is the
    easiest zone to reach by metro, though {!! $igpA('karve-nagar', 'Karve Nagar') !!} itself has no station and
    tutors there usually ride in. In <a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad,
    Hinjewadi and Pimpri-Chinchwad</a>, a suburban train to {!! $igpA('chinchwad', 'Chinchwad') !!} or Akurdi is often
    simpler than the road, and <a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi
    and Sinhagad Road</a> relies on Swargate plus a bus or auto. On the heaviest rain days, switch the session online
    rather than lose the week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-demo">Questions for the free demo</h2>
  <ol>
    <li><strong>"Walk me through 0580 Extended"</strong> (or your code): the tutor should name the papers without checking.</li>
    <li><strong>Live marking.</strong> Ask them to mark one past-paper answer against the official scheme.</li>
    <li><strong>The non-calculator paper.</strong> How do they build hand-calculation speed for Cambridge maths?</li>
    <li><strong>Practical skills.</strong> How would they prepare a practical-test candidate differently from an alternative-paper one?</li>
    <li><strong>Command words.</strong> What separates a "describe" answer from an "explain" answer?</li>
  </ol>
  <p>
    You receive two or three matched tutors, see every fee before the demo, and switching later is free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="igp-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. The subject, tier,
    nearness of the exam and the tutor's ride across Pune move the figure; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-pune') }}">home
    tuition fees in Pune</a>.
  </p>
  <p>
    Send the awarding body, code, tier, grade, locality and slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. For more on how IGCSE works, read our
    <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE guide for Gurgaon</a>. Browse <a href="{{ url('/tutors') }}">tutor
    profiles</a>, every locality on the <a href="{{ url('/city/pune') }}">Pune tutors page</a>, or
    <a href="{{ url('/tuition-jobs/pune') }}">tuition jobs in Pune</a>.
  </p>
  </section>

  </div>
</article>
