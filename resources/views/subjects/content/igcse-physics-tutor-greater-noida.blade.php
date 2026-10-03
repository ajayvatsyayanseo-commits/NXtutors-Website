{{--
  Long-form guide for the "IGCSE physics tutor Greater Noida" page. Byline:
  NXTutors Academic Team. No schools, societies, developers or people are
  named.

  Syllabus facts are reworded from igcse-physics-tutor-gurgaon, which cites the
  Cambridge IGCSE Physics 0625 syllabus for 2026, 2027 and 2028 (version 2,
  December 2025, no significant changes affecting teaching;
  cambridgeinternational.org): Paper 1 (Core) / Paper 2 (Extended) multiple
  choice, 40 questions, 45 min, 30%; Paper 3 (Core) / Paper 4 (Extended)
  theory, 80 marks, 1 h 15 min, 50%; Paper 5 Practical Test (1 h 15 min) or
  Paper 6 Alternative to Practical (1 h), 40 marks, 20%, chosen by the school,
  same skills and contexts; AO weightings 50/30/20; calculators in all parts;
  Core C-G, Extended A*-G; candidates expected to reach C or above entered for
  Extended; six topics (motion, forces and energy; thermal physics; waves;
  electricity and magnetism; nuclear physics; space physics); "recall and
  use" equations; practical contexts and skills listed in the syllabus;
  command words published in the syllabus. June, November and (India) March
  series as stated in igcse-maths-tutor-gurgaon. No other dates.

  Local detail only from database/seo-content/zones/greater-noida.json,
  areas/greater-noida-research.json, greater-noida-zone-guides.json and the
  Greater Noida hub (IB/IGCSE a smaller group; Cambridge IGCSE turns on exam
  technique; Sector 2 newer societies around Patwari village, Ek Murti Chowk,
  unfinished approaches, link road slow at evening rush; Shahberi builder
  floors, narrow lanes, weekend market crowds, no metro; Delta 3 plotted with
  wide roads, DELTA 1 / GNIDA Office stations; Gamma 1 houses around Jagat
  Farm market, ALPHA 1 station, drop on inner road; Phi 2 mid-sized societies,
  Pari Chowk station, autos easy; Xu 2 plotted houses, autos and buses rarely
  inside, ALPHA 1 / DELTA 1 stations). No request data is claimed. Fee wording
  is the approved sentence. FAQs render from
  faqs/igcse-physics-tutor-greater-noida.php. Area links render only for
  active areas.
--}}
@php
  $cpgSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cpgA = function (string $slug, string $label) use ($cpgSlugs) {
      return in_array($slug, $cpgSlugs, true)
          ? '<a href="' . e(url('/city/greater-noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="cpgGuideTitle">
  <h2 id="cpgGuideTitle">IGCSE physics tutor in Greater Noida: tier, practical paper and precise answers</h2>

  <p class="nx-guide__lede">
    Cambridge IGCSE physics is not hard in the way JEE physics is hard. Its difficulty is precision: the right equation
    recalled exactly, a definition written in the examiner's words, a practical method described step by step, and
    every answer given with its unit. Students who understand the physics still lose marks on wording. Cambridge families form a smaller group in Greater Noida, which makes a tutor fluent in the 0625 papers a find worth travelling for, or worth meeting partly on screen. The NXTutors Academic Team wrote this guide to the papers, the practical component and the journeys involved. Related pages: our
    <a href="{{ url('/physics-home-tutor-greater-noida') }}">physics home tutors in Greater Noida</a> page and the
    <a href="{{ url('/igcse-tutor-greater-noida') }}">IGCSE tutors in Greater Noida</a> hub.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cpg-papers">The papers</a> ·
    <a href="#cpg-tier">Choosing the tier</a> ·
    <a href="#cpg-topics">The six topics</a> ·
    <a href="#cpg-practical">Paper 5 or Paper 6</a> ·
    <a href="#cpg-words">Wording and equations</a> ·
    <a href="#cpg-next">Beyond Class 10</a> ·
    <a href="#cpg-session">A session</a> ·
    <a href="#cpg-zones">Journeys</a> ·
    <a href="#cpg-mode">Mode</a> ·
    <a href="#cpg-plan">Year by year</a> ·
    <a href="#cpg-demo">The demo</a> ·
    <a href="#cpg-fees">Cost</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cpg-papers">The three papers every candidate sits</h2>
  <p>
    The 0625 syllabus for 2026 to 2028 (version 2, which Cambridge says brings no significant changes for teaching)
    gives every candidate a multiple-choice paper, a theory paper and a practical paper. The tier decides which
    multiple-choice and theory papers they sit; the school decides which practical paper.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Cambridge IGCSE Physics 0625, 2026 to 2028</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Core</th><th scope="col">Extended</th><th scope="col">Weight</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice: 40 questions, 45 minutes</td><td>Paper 1</td><td>Paper 2</td><td>30%</td></tr>
      <tr><td>Theory: 80 marks, 1 h 15 min</td><td>Paper 3</td><td>Paper 4</td><td>50%</td></tr>
      <tr><td>Practical: 40 marks</td><td colspan="2">Paper 5, a practical test (1 h 15 min), or Paper 6, an alternative to practical (1 h)</td><td>20%</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Calculators are allowed in every part. Cambridge weights the assessment objectives at about half for knowledge
    with understanding, under a third for handling information and solving problems, and a fifth for experimental
    skills, so recall alone is never enough.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-tier">Core or Extended</h2>
  <p>
    Core candidates can achieve grades C to G; Extended candidates can achieve A* to G. Cambridge advises that
    candidates expected to reach grade C or above should be entered for Extended. The school makes the entry, but a
    tutor can tell you after a few weeks whether your child is working at an Extended level and what would close the
    gap. A student who is borderline benefits most from Extended content taught slowly and well, rather than from a
    Core entry that caps the grade. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">guide to
    Cambridge and Edexcel IGCSE</a> explains how the boards differ if your school uses another awarding body.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-topics">The six topics, and where marks are usually lost</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>0625 topic areas and what a tutor should watch for</caption>
    <thead>
      <tr><th scope="col">Topic</th><th scope="col">What to watch</th></tr>
    </thead>
    <tbody>
      <tr><td>Motion, forces and energy</td><td>Reading speed-time graphs, moments, energy transfers stated in the right terms</td></tr>
      <tr><td>Thermal physics</td><td>Explaining with the particle model, specific heat capacity calculations with units</td></tr>
      <tr><td>Waves</td><td>Ray diagrams drawn accurately, wave equation used confidently, the electromagnetic spectrum in order</td></tr>
      <tr><td>Electricity and magnetism</td><td>Circuit rules, resistance calculations, motor and generator effects described precisely</td></tr>
      <tr><td>Nuclear physics</td><td>Decay equations, half-life from data, safety explanations</td></tr>
      <tr><td>Space physics</td><td>Often left until last and lightly revised; worth steady attention because the marks are accessible</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The topics are not equal in difficulty for every student, so the first sessions should include a short diagnostic
    across all six. The national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page covers other
    boards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-practical">Paper 5 or Paper 6: preparing for the practical</h2>
  <p>
    The school chooses whether candidates sit Paper 5, a practical test in a laboratory, or Paper 6, a written
    alternative to practical. Both carry 40 marks and test the same skills in the same contexts: planning, taking
    readings, recording them in a table, drawing graphs, and drawing and evaluating conclusions. The syllabus lists
    the practical contexts students should know.
  </p>
  <p>For Paper 6 especially, a home tutor can do a lot at a desk:</p>
  <ul>
    <li>Tables with correct headings and units, and readings to a consistent precision.</li>
    <li>Graphs with sensible scales, a smooth line or curve through the points, and gradients worked from large triangles.</li>
    <li>Describing a method clearly enough that someone else could repeat it.</li>
    <li>Suggesting realistic improvements and naming sources of error.</li>
  </ul>
  <p>
    These skills carry straight into IB or A Level physics, so the work is not wasted after the exam.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-words">Wording, command words and equations</h2>
  <p>
    The syllabus publishes the command words it uses, and each one asks for something specific: "state" wants a short
    fact, "describe" wants what happens, "explain" wants why. Students who explain when asked to state waste time, and
    those who state when asked to explain lose marks. The syllabus also marks certain equations as ones students must
    "recall and use". A tutor should test these regularly until recall is instant, and insist that every numerical
    answer carries a unit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-next">After IGCSE physics</h2>
  <p>
    Students going on to the IB Diploma will find the practical and data habits from Paper 5 or 6 useful in Paper 1B
    and the internal assessment; our <a href="{{ url('/ib-physics-tutor-greater-noida') }}">IB physics tutors in
    Greater Noida</a> page covers that course. Students moving to CBSE, ISC or the UP Board for Class 11 meet a more
    mathematical style of physics, so a bridging block on algebra and graphs over the summer is worth considering.
    Those aiming for engineering entrances can see our <a href="{{ url('/jee-home-tutor-greater-noida') }}">JEE home
    tutors in Greater Noida</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-session">What a 75-minute IGCSE physics session covers</h2>
  <p>
    A well-run session has a rhythm the student can predict, which matters more than any single explanation. One
    pattern that works for 0625:
  </p>
  <ol>
    <li><strong>Ten minutes of recall.</strong> Five equations from the "recall and use" list and two definitions, written from memory, checked against the syllabus wording.</li>
    <li><strong>Thirty minutes on the week's topic.</strong> The school's current chapter, taught through past-paper questions rather than notes, so the student sees how Cambridge asks about it.</li>
    <li><strong>Fifteen minutes of practical skills.</strong> One table, one graph or one method description, in the style of Paper 5 or Paper 6.</li>
    <li><strong>Ten minutes of multiple choice.</strong> A timed set, then a look at why each wrong option was tempting.</li>
    <li><strong>Ten minutes to close.</strong> What went wrong today goes into an error log, and the homework is chosen from it.</li>
  </ol>
  <p>
    Parents can ask to see the error log at any time; it is the clearest record of progress.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-zones">Journeys into each zone for an IGCSE physics tutor</h2>
  <ul>
    <li><strong><a href="{{ url('/city/greater-noida/zone/greater-noida-west') }}">Greater Noida West</a>.</strong> {!! $cpgA('sector-2', 'Sector 2') !!} has newer societies around Patwari village, where some approaches are still unfinished; send a map pin and name the right gate. {!! $cpgA('shahberi', 'Shahberi') !!} is builder floors with no gate formalities, but the lanes are narrow and weekend crowds at the furniture market make weekday slots easier.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/alpha-delta-pari-chowk') }}">Alpha–Delta and Pari Chowk</a>.</strong> {!! $cpgA('delta-3', 'Delta 3') !!} is spread-out plots and houses with wide roads, near DELTA 1 and GNIDA Office stations. In {!! $cpgA('gamma-1', 'Gamma 1') !!}, ask the tutor to park on your block's inner road rather than at the Jagat Farm market front.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omega-chi-phi') }}">Omega, Chi and Phi</a>.</strong> {!! $cpgA('phi-2', 'Phi 2') !!} is mid-sized societies with easy autos from Pari Chowk station; put the tutor on the visitor list first.</li>
    <li><strong><a href="{{ url('/city/greater-noida/zone/omicron-mu-xu') }}">Omicron, Mu and Xu</a>.</strong> {!! $cpgA('xu-2', 'Xu 2') !!} is calm streets of houses where autos and buses rarely come in, so a tutor who rides a two-wheeler is the practical choice.</li>
  </ul>
  <p>
    For the remaining zones, read our <a href="{{ url('/blog/greater-noida-west-tuition-guide') }}">Greater Noida West guide</a> or open the
    <a href="{{ url('/city/greater-noida') }}">Greater Noida home tutors page</a>, which also covers
    <a href="{{ url('/city/greater-noida/zone/zeta-eta') }}">Zeta and Eta</a> and
    <a href="{{ url('/city/greater-noida/zone/pi-sigma-sectors-36-37') }}">Pi, Sigma and Sectors 36–37</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-mode">Home or online for IGCSE physics</h2>
  <p>
    Home sessions suit younger IGCSE students and the practical-paper skills, where a tutor beside the student can
    check a table or graph as it is drawn. Screen sessions handle past-paper review, multiple-choice drills and topic revision well, so long as a phone or webcam points at the student's working. Where the nearest 0625 specialist would have to
    cross Ek Murti Chowk or Pari Chowk in the evening, one home and one online session a week is a common
    compromise. Our <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline guide</a> weighs it up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-plan">Two IGCSE years, planned</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How IGCSE physics tutoring is usually spread</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">Focus</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>First year</td><td>Keeping pace with school; equations to recall; units and definitions</td><td>One a week</td></tr>
      <tr><td>Second year, first term</td><td>Remaining topics; practical-paper skills; tier decision</td><td>One or two a week</td></tr>
      <tr><td>Before the mocks</td><td>Topic papers; multiple-choice speed; command-word practice</td><td>Two a week</td></tr>
      <tr><td>Last month or so</td><td>Full timed papers for the chosen tier and practical paper</td><td>Up to three a week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Tell us the series your child is entered for: besides June and November, Cambridge offers schools in India a March series.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-demo">What to check in the demo</h2>
  <ol>
    <li><strong>Code and tier.</strong> Has the tutor taught 0625 at your child's tier?</li>
    <li><strong>Practical paper.</strong> Do they know whether Paper 5 or 6 applies, and how to prepare for it?</li>
    <li><strong>Command words.</strong> Ask the difference between "state", "describe" and "explain".</li>
    <li><strong>Marking.</strong> Give the tutor one of your child's theory answers and see whether they can show where each mark was won or lost.</li>
    <li><strong>Units and equations.</strong> Does the tutor insist on both, every time?</li>
    <li><strong>The journey.</strong> Which road or station, and how reliable the evening is.</li>
  </ol>
  <p>
    Should the demo disappoint, we line up the next tutor on your shortlist for a free demo. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for demo classes</a> suggests further questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cpg-fees">What it costs and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    The figure for IGCSE physics turns on the tier, the distance the tutor covers and how often you meet. Tutors decide
    their own rates, and you see them before booking anything; the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and our <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">Greater Noida fees article</a> go
    into the detail.
  </p>
  <p>
    Send the tier, Paper 5 or Paper 6, the exam series and the school year, along with your sector or society and a
    few possible slots. Two or three tutors will be suggested, the opening session is a
    <a href="{{ url('/demo-class') }}">free demo</a>, and a later change of tutor carries no charge. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>, done before any profile is marked Verified. Scan
    <a href="{{ url('/tutors') }}">tutor profiles</a> now if you like, or visit our <a href="{{ url('/igcse-maths-tutor-greater-noida') }}">IGCSE
    maths</a> and <a href="{{ url('/ib-igcse-chemistry-tutor-greater-noida') }}">IGCSE chemistry</a> pages for Greater
    Noida.
  </p>
  </section>

  </div>
</article>
