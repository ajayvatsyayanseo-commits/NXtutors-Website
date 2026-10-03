{{--
  Board page for "IGCSE tutor Faridabad" (Cambridge IGCSE and Pearson Edexcel
  International GCSE). Author: Ajay Vatsyayan (role: IB, IGCSE and ISC maths).
  No anecdotes, years or results are claimed for him. No schools, coaching
  institutes, societies, developers or people are named.

  Board facts reworded from the Gurgaon board hub (igcse-tutor-gurgaon), which
  cites (syllabus PDFs from cambridgeinternational.org and
  qualifications.pearson.com, read 1 Oct 2026):
  - Cambridge IGCSE Mathematics 0580 syllabus for 2025–2027: Core Papers 1
    (non-calculator) and 3 (calculator), grades C–G; Extended Papers 2 and 4,
    grades A*–E; scientific calculator on calculator papers, graphical not
    permitted; about 130 guided learning hours per subject.
  - Cambridge IGCSE Chemistry 0620, Physics 0625, Biology 0610 syllabuses for
    2026–2028: Core (Papers 1 and 3, grades C–G) or Extended (Papers 2 and 4,
    grades A*–G, Core plus Supplement content); MCQ 40 questions, 45 min, 30%;
    theory 80 marks, 1 h 15 min, 50%; practical test or alternative to
    practical, 40 marks, 20%.
  - Cambridge IGCSE Additional Mathematics 0606.
  - Pearson Edexcel International GCSE Mathematics A (4MA1): Foundation and
    Higher tiers, grades 9–1; 4PH1/4CH1/4BI1 untiered, two written papers, no
    separate practical exam; Further Pure Mathematics 4PM1.
  No exam-series months are stated on this page. Board mix and HBSE wording
  only as the Faridabad hub view states them (a smaller group study for the IB
  or Cambridge IGCSE; HBSE conducts Haryana's Class 10 and 12 exams, own
  pattern, Hindi or English medium). HBSE in general terms only. No claim that
  IGCSE families live in any particular area. Local detail only from
  database/seo-content/areas/faridabad-research.json, faridabad-zone-guides.json,
  zones/faridabad.json and the Faridabad hub. Fee wording is the approved
  NXTutors sentence. FAQs: faqs/igcse-tutor-faridabad.php. Area links render
  only for active Faridabad areas.
--}}
@php
  $figSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $figA = function (string $slug, string $label) use ($figSlugs) {
      return in_array($slug, $figSlugs, true)
          ? '<a href="' . e(url('/city/faridabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide fig-guide" aria-labelledby="figGuideTitle">
  <h2 id="figGuideTitle">IGCSE tutors in Faridabad: syllabus codes, tiers and a tutor who can reach you</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE is taken by a smaller group of Faridabad students than the Indian boards, and that makes the
    first conversation with a tutor unusually specific. "Grade 10 IGCSE" is not enough. The tutor needs the awarding
    body, Cambridge or Pearson Edexcel, the syllabus code, the tier and, for Cambridge sciences, which practical paper
    the school enters. This page explains how those choices work, how the IGCSE differs from CBSE and the Haryana
    board, where students most often drop marks, how a good session runs, what to test in the free demo, and how a
    specialist gets to you from across the city. It is written by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths
    on NXTutors.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#fig-local">IGCSE, CBSE and HBSE</a> ·
    <a href="#fig-bodies">Cambridge or Edexcel</a> ·
    <a href="#fig-tiers">Tiers</a> ·
    <a href="#fig-science">Science papers</a> ·
    <a href="#fig-years">Grades 9 and 10</a> ·
    <a href="#fig-session">A good session</a> ·
    <a href="#fig-subjects">Subjects</a> ·
    <a href="#fig-reach">Tutors by area</a> ·
    <a href="#fig-demo">The demo</a> ·
    <a href="#fig-after">After Grade 10</a> ·
    <a href="#fig-start">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="fig-local">How IGCSE differs from CBSE and the Haryana board</h2>
  <p>
    Most students in the city follow CBSE, ICSE and ISC have a loyal following, and the Board of School Education
    Haryana runs the state's Class 10 and Class 12 exams to its own pattern, in Hindi or English medium. Next to these,
    the IGCSE is built differently. There is no single board result: each subject is a separate qualification with
    its own code, papers and grade, and Cambridge designs each syllabus around roughly 130 guided learning hours. The
    school, not the family, chooses the awarding body and often the tier, subject by subject.
  </p>
  <p>
    The style of question is different too. CBSE papers are built on the NCERT textbooks, and the state board sets
    papers to its own pattern. IGCSE papers reward reading the command word, applying a method to an unfamiliar context and
    knowing exactly what the mark scheme credits. A student who joins from CBSE or a state-board school usually knows
    much of the maths and science already and still loses marks on the format, which is the gap a tutor should close.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-bodies">Cambridge or Edexcel: the differences that change tuition</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE and Pearson Edexcel International GCSE compared</caption>
    <thead>
      <tr><th scope="col">Feature</th><th scope="col">Cambridge IGCSE</th><th scope="col">Edexcel International GCSE</th><th scope="col">What a tutor practises</th></tr>
    </thead>
    <tbody>
      <tr><td>Grades</td><td>A* to G on the main codes</td><td>9 to 1</td><td>Know which grade boundary your child is aiming at</td></tr>
      <tr><td>Maths tiers</td><td>Core or Extended (0580)</td><td>Foundation or Higher (4MA1)</td><td>Work at the higher tier's level early</td></tr>
      <tr><td>Calculator in maths</td><td>One paper without, one with a scientific calculator; graphic calculators not allowed</td><td>Allowed in both papers</td><td>Hand methods for Cambridge; harder algebra for Edexcel</td></tr>
      <tr><td>Sciences</td><td>Tiered in 0625, 0620 and 0610, with a practical paper</td><td>Untiered 4PH1, 4CH1 and 4BI1; two written papers</td><td>Practical write-ups for Cambridge; long answers for Edexcel</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Some schools mix the two bodies across subjects, so ask the school office for the exact codes on your child's
    entry before the first class. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge vs
    Edexcel comparison</a> goes paper by paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-tiers">Why the tier decides the ceiling</h2>
  <p>
    In Cambridge 0580 maths, Core candidates take Papers 1 and 3 and their grades run from C to G; Extended candidates
    take Papers 2 and 4 and can reach A* down to E. In the Cambridge sciences, the Extended route adds Supplement
    content to the Core and opens A* to G, while Core alone stops at C. Edexcel's Foundation maths tier is aimed at
    grades 5 to 1 and the Higher tier at 9 to 4.
  </p>
  <p>
    Put plainly, a student entered for Core maths cannot earn an A, however good the paper. Schools generally settle
    tiers during Grade 10 using test evidence, so for a borderline student the tutor's most valuable work comes before
    that decision: Supplement topics, harder algebra and full Extended papers under time. For a student already secure
    on Extended or Higher and chasing the highest grade, the work shifts to multi-step problems and exact command-word
    answers. Ask the school when the tier is fixed and on what evidence.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-science">The three Cambridge science papers</h2>
  <p>
    Cambridge Physics, Chemistry and Biology share a structure. Every candidate sits three papers, and the tier
    decides which versions of the first two:
  </p>
  <ul>
    <li><strong>Multiple choice, 30%:</strong> 40 questions in 45 minutes. Practise in timed sets and study why each wrong option is wrong.</li>
    <li><strong>Theory, 50%:</strong> structured and short-answer questions worth 80 marks over an hour and a quarter. Mark answers against the key words in the mark scheme.</li>
    <li><strong>Practical test or alternative to practical, 20%:</strong> 40 marks, with the school choosing which. Practise planning methods, naming variables, drawing results tables with units, plotting graphs and judging reliability.</li>
  </ul>
  <p>
    Edexcel sciences have no separate practical exam; practical skills are tested inside the two written papers, and
    those papers reward well-organised extended answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-years">Grade 9 and Grade 10 with a tutor</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A workable shape for the two IGCSE years</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Risk</th><th scope="col">What the tutor does</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of Grade 9</td><td>Familiar-looking content lulls students who came from CBSE or ICSE</td><td>Introduce IGCSE question styles and calculator rules from the first weeks</td></tr>
      <tr><td>Rest of Grade 9</td><td>Topics pile up without exam practice</td><td>Stay a topic ahead of school; past-paper questions by topic</td></tr>
      <tr><td>Grade 10 before mocks</td><td>Tier decisions; unfinished content</td><td>Finish the syllabus; push borderline students to the higher tier's level</td></tr>
      <tr><td>Grade 10 after mocks</td><td>Marks lost to technique, not knowledge</td><td>Full timed papers, official mark schemes, every lost mark logged by cause</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Ask the school which exam series your child is entered for and count backwards from it, because the time left
    after the mocks varies with the series.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-session">What a good IGCSE session looks like</h2>
  <p>
    An hour with a tutor who knows the syllabus has three clear parts. It starts from the student's error log, not
    from memory: the two or three mistakes that cost marks last week, retried until they are right. Then one topic is
    taught or repaired, using worked examples phrased the way the real papers phrase them, command words included.
    The final stretch is exam practice: a few past-paper questions on that topic, done against the clock and marked
    together with the published mark scheme so the student sees where each mark lives. Homework is short and named,
    and the parent hears in a sentence what was covered. Mostly tutor talk, or the same worksheet each week, is a
    reason to ask for a change.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-subjects">Which subjects, and where to start</h2>
  <p>
    Maths and the three sciences are where IGCSE students most often drop marks, through non-calculator technique,
    long multi-step problems, practical questions and command words. English, economics and business usually need help
    with written answers instead.
  </p>
  <ul>
    <li><strong>Maths, 0580 or 4MA1:</strong> our <a href="{{ url('/igcse-maths-tutor') }}">IGCSE maths tutor</a> page, plus <a href="{{ url('/maths-home-tutor-faridabad') }}">maths home tutors in Faridabad</a>. Additional Maths (Cambridge 0606) and Further Pure Maths (Edexcel 4PM1) suit students whose main maths is already secure.</li>
    <li><strong>Physics, chemistry and biology:</strong> <a href="{{ url('/physics-home-tutor-faridabad') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-faridabad') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-faridabad') }}">biology</a> tutors in Faridabad; give the code and tier in your request.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-faridabad') }}">English home tutors in Faridabad</a>; say whether it is English as a first or a second language, as they are different courses.</li>
  </ul>
  <p>
    For more on how the IGCSE works, see <a href="{{ url('/igcse-tutor-gurgaon') }}">IGCSE tutors in Gurgaon</a> and
    our <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE guide for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-reach">How an IGCSE tutor reaches six Faridabad areas</h2>
  <p>
    A tutor who knows your child's exact code and tier is worth a longer journey, so it helps to know the route.
    Six examples, from six different zones:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Typical routes and arrangements by area</caption>
    <thead>
      <tr><th scope="col">Area</th><th scope="col">Getting there</th><th scope="col">Plan for</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $figA('sector-14', 'Sector 14') !!}, <a href="{{ url('/city/faridabad/zone/central-sectors-mathura-road') }}">central sectors</a></td><td>Neelam Chowk Ajronda or Bata Chowk station, then a short auto; wide roads for parking</td><td>A slot soon after school, before the market and Mathura Road get busy</td></tr>
      <tr><td>{!! $figA('sector-37', 'Sector 37') !!}, <a href="{{ url('/city/faridabad/zone/sectors-28-31-37') }}">Sectors 28–31 and 37</a></td><td>Violet Line to Sarai and a short auto; a tutor from south Delhi skips the border queues</td><td>Gate registration in apartment blocks</td></tr>
      <tr><td>{!! $figA('sainik-colony', 'Sainik Colony') !!}, <a href="{{ url('/city/faridabad/zone/surajkund-sainik-colony') }}">Surajkund and Sainik Colony</a></td><td>Badkhal Mor and Bata Chowk are some way off, so most tutors use an auto or their own vehicle</td><td>Afternoon or later-evening slots that miss the Gurugram–Faridabad road rush</td></tr>
      <tr><td>{!! $figA('sector-55', 'Sector 55') !!}, <a href="{{ url('/city/faridabad/zone/ballabhgarh-southern-sectors') }}">Ballabhgarh and southern sectors</a></td><td>Metro to the Ballabhgarh terminus, then an auto along the Sohna Road; local tutors ride in</td><td>A regular late-afternoon or weekend slot</td></tr>
      <tr><td>{!! $figA('sector-79', 'Sector 79') !!}, <a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-75-80') }}">Greater Faridabad, Sectors 75–80</a></td><td>Across the canal: two-wheeler, cab, or metro plus auto from the old-city side</td><td>Crowds around the shopping street in the evening and at weekends; arrive a little early</td></tr>
      <tr><td>{!! $figA('sector-88', 'Sector 88') !!}, <a href="{{ url('/city/faridabad/zone/greater-faridabad-sectors-81-89') }}">Greater Faridabad, Sectors 81–89</a></td><td>Kheri Road back across the canal; Bata Chowk or Badkhal Mor station, then an auto or cab</td><td>Society gate registration; evening queues on the canal bridges</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    When the right specialist lives far off, a hybrid week keeps it workable: a home class at the weekend, an online
    class midweek with the same tutor. Online maths and science need the tutor to watch working as it is written. The
    NIT and Old Faridabad side has its own <a href="{{ url('/city/faridabad/zone/nit-old-faridabad') }}">zone page</a>,
    and our <a href="{{ url('/blog/greater-faridabad-neharpar-tuition-guide') }}">Neharpar tuition guide</a> covers
    canal-side timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-demo">What to test in the free demo</h2>
  <ol>
    <li><strong>Name the code and tier.</strong> Say "0620 Extended" or "4MA1 Higher" and listen for the paper structure without notes.</li>
    <li><strong>Mark a real attempt.</strong> Ask the tutor to mark one of your child's past-paper answers against the official mark scheme and show where the method marks went.</li>
    <li><strong>Calculator habits.</strong> For Cambridge maths, check they drill the non-calculator paper by hand.</li>
    <li><strong>Practical route.</strong> For Cambridge sciences, ask how they prepare the practical test compared with the alternative-to-practical paper.</li>
    <li><strong>Command words.</strong> What separates "describe" from "explain" and "suggest" in a science answer?</li>
  </ol>
  <p>
    You receive two or three matched tutors, each fee is shown before the demo, and a later change of tutor is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more ideas.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-after">After Grade 10: IB, or an Indian board for Class 11</h2>
  <p>
    The next step should shape the IGCSE years. A student heading into the IB Diploma gains from Extended maths and an
    early graphic-calculator habit; read our <a href="{{ url('/ib-tutor-faridabad') }}">IB tutors in Faridabad</a> page.
    One moving to CBSE or ISC for Class 11 needs quick hand calculation, radian trigonometry and full textbook-style
    working, which IGCSE does not drill in the same way. See <a href="{{ url('/cbse-home-tutor-faridabad') }}">CBSE</a>
    and <a href="{{ url('/icse-home-tutor-faridabad') }}">ICSE and ISC</a> tutors in Faridabad, and our guide to
    <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">switching between CBSE and IB or IGCSE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="fig-start">Fees and next steps</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IGCSE, the subject,
    the tier, how close the exams are and the tutor's journey to your sector move the figure. See our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and the
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">Faridabad fees post</a>.
  </p>
  <p>
    Tell us the awarding body, code and tier (for example "Cambridge 0625 Extended"), the grade, your sector or colony
    and your free slots. We shortlist two or three tutors, and the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. Browse <a href="{{ url('/tutors') }}">tutor profiles</a> or every
    area on our <a href="{{ url('/city/faridabad') }}">Faridabad tutors page</a>. Tutors who teach IGCSE can see open
    requests on <a href="{{ url('/tuition-jobs/faridabad') }}">Faridabad tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
