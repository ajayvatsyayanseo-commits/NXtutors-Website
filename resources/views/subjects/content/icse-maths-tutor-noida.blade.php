{{--
  Long-form guide for the "ICSE maths tutor Noida" page. Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Ajay Vatsyayan (role: IB,
  IGCSE and ISC maths, for the ISC section). No anecdotes, years or results are
  claimed for either. No schools, societies or other people are named.

  CISCE facts are reworded from icse-maths-tutor-gurgaon, which cites the CISCE
  ICSE Mathematics syllabus (80 theory + 20 internal assessment; Class 10
  units: commercial mathematics with GST, banking/recurring deposits, shares
  and dividends; algebra with linear inequations, quadratics, ratio and
  proportion, factor and remainder theorems, matrices, AP and GP; coordinate
  geometry with reflection, section and mid-point formulae, equation of a
  line; geometry with similarity, loci, circles, constructions; mensuration;
  trigonometry; statistics and probability) and the ICSE 2026 Mathematics
  specimen paper (Section A compulsory, 40 marks, including multiple-choice
  items; Section B any four questions, 40 marks; essential working required;
  rough work on the same sheet), and the CISCE ISC Mathematics syllabus 2027
  and 2028 (from the 2027 exam, seven compulsory units and no Section B/C
  choice; 80 theory + 20 project; ISC Applied Mathematics a separate
  subject). Schools choose their own textbooks from publishers following the
  CISCE syllabus. No other dates.

  Local detail only from database/seo-content/zones/noida.json,
  areas/noida-research.json, noida-zone-guides.json and the Noida hub (CBSE
  most common, ICSE widely taught, UP Board schools present; Sector 23 houses
  and floors, Kamal Marg and Noida Bypass Flyover; Sector 25 housing-board
  colony of flats with gate entry; Sector 40 plotted Blocks A-F, Golf Course
  station, Dadri Main Road and Amrapali Road congestion; Sector 55 plotted
  houses, Sector 59 / 15 stations; Sector 72 low-rise, Sector 51 Aqua Line;
  Sector 99 plotted, Aqua Line Sector 101). No request data is claimed. Area
  links render only for active Noida areas. Fee wording is the approved
  sentence. FAQs render from faqs/icse-maths-tutor-noida.php.
--}}
@php
  $icmnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icmnA = function (string $slug, string $label) use ($icmnSlugs) {
      return in_array($slug, $icmnSlugs, true)
          ? '<a href="' . e(url('/city/noida/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icmnGuideTitle">
  <h2 id="icmnGuideTitle">ICSE maths tutor in Noida: Classes 6 to 10, the Class 10 paper, and ISC beyond it</h2>

  <p class="nx-guide__lede">
    In a city where CBSE is the most common board, an ICSE student's maths can feel like a different subject. The
    syllabus reaches into commercial arithmetic and matrices, there is no single prescribed textbook, and the examiner
    gives credit for each step a student writes rather than for the final number alone. This page is written by
    Abhinandan Tiwary, who teaches Class 10 CBSE and ICSE maths on NXTutors, with the ISC section by Ajay Vatsyayan, who
    teaches IB, IGCSE and ISC maths. It sits under our <a href="{{ url('/maths-home-tutor-noida') }}">maths home tutors
    in Noida</a> page and the <a href="{{ url('/icse-home-tutor-noida') }}">ICSE home tutors in Noida</a> hub, and it
    covers what a tutor should be doing in each class, how the Class 10 paper is built, and how to find someone who
    can reach your sector week after week.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#icmn-diff">How ICSE maths differs</a> ·
    <a href="#icmn-units">Class 10 units</a> ·
    <a href="#icmn-paper">The board paper</a> ·
    <a href="#icmn-steps">Writing steps</a> ·
    <a href="#icmn-lower">Classes 6 to 9</a> ·
    <a href="#icmn-year">The Class 10 year</a> ·
    <a href="#icmn-switch">Switching boards in Noida</a> ·
    <a href="#icmn-isc">ISC maths</a> ·
    <a href="#icmn-zones">Tutors by zone</a> ·
    <a href="#icmn-demo">The demo</a> ·
    <a href="#icmn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="icmn-diff">Where ICSE maths parts company with CBSE</h2>
  <p>
    Quadratics, trigonometry, circles, mensuration and statistics appear on both boards. The differences that matter
    to a tutor are elsewhere:
  </p>
  <ul>
    <li><strong>Topics CBSE students never meet.</strong> GST, recurring deposit accounts, shares and dividends, matrices, loci and reflection in the axes are all examinable in ICSE Class 10. A tutor who has only taught NCERT chapters is usually thinnest here.</li>
    <li><strong>Books chosen by the school.</strong> CISCE sets the syllabus but not the textbook; schools pick from publishers who follow it. A tutor should work from the syllabus and your child's own book, not from a different series.</li>
    <li><strong>Marks for the method.</strong> The specimen paper reminds candidates that omitting essential working loses marks. A correct answer reached by an unseen route is not safe.</li>
  </ul>
  <p>
    For these reasons we match ICSE students with tutors who teach the board regularly. The blog post on
    <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths for the boards</a> goes into exam
    technique in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-units">The Class 10 syllabus, unit by unit</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE Class 10 Mathematics: units and what a student must be able to do</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Main content</th><th scope="col">What the student must be able to do</th></tr>
    </thead>
    <tbody>
      <tr><td>Commercial mathematics</td><td>GST; recurring deposit accounts; shares and dividends</td><td>Set out a bill or account clearly and keep face value and market value apart</td></tr>
      <tr><td>Algebra</td><td>Linear inequations, quadratic equations, ratio and proportion, factor and remainder theorems, matrices, arithmetic and geometric progressions</td><td>Show solution sets on a number line; multiply matrices in the right order</td></tr>
      <tr><td>Coordinate geometry</td><td>Reflection; section and mid-point formulae; equation of a line</td><td>Reflect in the correct axis or line and check with a sketch</td></tr>
      <tr><td>Geometry</td><td>Similarity; loci; circles; constructions</td><td>Give a reason for every step; keep construction arcs visible</td></tr>
      <tr><td>Mensuration</td><td>Cylinder, cone, sphere and combined solids; melting and recasting</td><td>Track radius against diameter and carry units to the end</td></tr>
      <tr><td>Trigonometry</td><td>Identities; heights and distances</td><td>Prove identities line by line; draw a labelled diagram first</td></tr>
      <tr><td>Statistics and probability</td><td>Mean, median, mode; histograms and ogives; simple probability</td><td>Draw an ogive to scale and read the median and quartiles accurately</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-paper">How the Class 10 paper is put together</h2>
  <p>
    The written examination is worth 80 marks and internal assessment adds 20, built from assignments during the year.
    The CISCE specimen paper for 2026 splits the 80 evenly. Section A, compulsory and worth 40 marks, is a spread of
    short questions, multiple-choice items among them, touching every part of the syllabus. Section B, also 40 marks,
    offers longer multi-part questions of which the student answers any four.
  </p>
  <p>
    That shape has two consequences for preparation. Section A means no unit can be skipped. Section B means choosing is
    a skill: a student should scan the whole section, decide on four within the first few minutes, and finish each one
    rather than abandoning a question half done. Mock papers should be timed with that choice included. ICSE past papers
    and the specimen paper should be the main practice material; papers from other boards help with individual topics
    but not with the ICSE style.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-steps">Writing steps the examiner can credit</h2>
  <p>
    Rough work goes on the same sheet as the answer, beside it, not on a separate page. That rule turns layout into a
    habit worth training from Class 8 or 9. Four practices make the difference:
  </p>
  <ol>
    <li><strong>Formula, substitution, answer.</strong> Three visible lines, even when the calculation feels obvious.</li>
    <li><strong>Reasons in geometry.</strong> Every statement followed by its reason in brackets.</li>
    <li><strong>Units and rounding.</strong> State the unit and round only where the question asks.</li>
    <li><strong>Neat diagrams.</strong> A ruler, a sharp pencil and labels, especially for heights and distances and for constructions.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-lower">Classes 6 to 9: building the habits early</h2>
  <p>
    In Classes 6 to 8, the aim is fluency with fractions, integers, simple equations and basic geometry, written out in
    full. Class 9 is the step up: algebra becomes denser, proofs appear in geometry, and some topics that Class 10
    assumes are taught for the first time. Students who drift through Class 9 tend to spend the first months of Class 10
    repairing it. A tutor at this stage should check notebooks weekly, insist on complete working and keep a short list
    of recurring errors. For the junior classes, one or two sessions a week is usually enough; the point is a steady
    routine of checked homework rather than racing ahead of the school. Our
    <a href="{{ url('/icse-maths-tutor-gurgaon') }}">ICSE maths tutor guide for Gurgaon</a> sets out the same board in
    another city's context.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-year">Pacing the Class 10 year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How ICSE Class 10 maths sessions are often spread</caption>
    <thead>
      <tr><th scope="col">Part of the year</th><th scope="col">Focus</th><th scope="col">Sessions a week</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening months</td><td>Commercial mathematics and algebra alongside school; Class 9 gaps closed</td><td>Two</td></tr>
      <tr><td>Mid-year</td><td>Coordinate geometry, geometry and mensuration; chapter tests marked for working</td><td>Two</td></tr>
      <tr><td>Second term</td><td>Trigonometry, statistics and probability; syllabus finished; internal assessment work completed</td><td>Two or three</td></tr>
      <tr><td>Pre-boards to the exam</td><td>Full timed papers with the Section B choice; error review</td><td>Three</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-switch">Switching between CBSE, the UP Board and ICSE</h2>
  <p>
    Noida has schools on all three boards, and families do move between them. A student joining ICSE in Class 9 from
    CBSE or the <a href="{{ url('/up-board-tutor-noida') }}">UP Board</a> needs commercial mathematics, matrices,
    reflection and loci taught almost from scratch, and has to adjust to step marking. A student leaving ICSE for CBSE
    at Class 11 usually finds the content familiar but should check the NCERT order of chapters. In both directions,
    a few weeks with a tutor focused on the gaps saves a difficult first term. The
    <a href="{{ url('/cbse-home-tutor-noida') }}">CBSE home tutors in Noida</a> page covers the other side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-isc">ISC maths in Classes 11 and 12</h2>
  <p>
    Students who stay with CISCE move to the ISC. Class 12 maths is an 80-mark theory paper with 20 marks of project
    work. From the 2027 examination the old choice between Section B and Section C ends: all candidates study the same
    seven units, from relations and functions, algebra and calculus to vectors, three-dimensional geometry, linear
    programming and probability. ISC Applied Mathematics, for students who want applied and commerce-oriented content,
    is a separate subject.
  </p>
  <p>
    Class 11 lays the base for Class 12, especially functions, limits and the start of calculus, so it is the year not
    to coast. Many ISC science students also prepare for JEE; our <a href="{{ url('/jee-home-tutor-noida') }}">JEE home
    tutors in Noida</a> page explains how the two can share a week, and the national
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> guide sets out the paper in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-zones">ICSE maths tutors across Noida, zone by zone</h2>
  <ul>
    <li><strong><a href="{{ url('/city/noida/zone/old-noida') }}">Old Noida</a>:</strong> in {!! $icmnA('sector-23', 'Sector 23') !!}, houses and floors mean no gate pass, but Kamal Marg and the bypass flyover jam at peak hours, so a tutor from Sector 22 or 24 is more reliable. {!! $icmnA('sector-25', 'Sector 25') !!} is a managed colony of flats; give security the tutor's name before the first class.</li>
    <li><strong><a href="{{ url('/city/noida/zone/central-noida') }}">Central Noida</a>:</strong> {!! $icmnA('sector-40', 'Sector 40') !!} is plotted in Blocks A to F opposite the Golf Course station; tutors who drive should avoid the evening build-up on Dadri Main Road and Amrapali Road.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sector-62-belt') }}">Sector 62 belt</a>:</strong> {!! $icmnA('sector-55', 'Sector 55') !!} is mostly plotted houses with no station inside; tutors use Noida Sector 59 or Sector 15 and finish by auto or cab.</li>
    <li><strong><a href="{{ url('/city/noida/zone/sectors-70-82') }}">Sectors 70 to 82</a>:</strong> {!! $icmnA('sector-72', 'Sector 72') !!} is low-rise and close to the Aqua Line's Sector 51 station; the junction there jams at peak hours, but internal lanes stay manageable.</li>
    <li><strong><a href="{{ url('/city/noida/zone/noida-expressway') }}">Noida Expressway</a>:</strong> {!! $icmnA('sector-99', 'Sector 99') !!} is a plotted sector of independent houses near Sectors 100, 45 and 46, so tutors from the central sectors can reach it on local roads.</li>
  </ul>
  <p>
    For <a href="{{ url('/city/noida/zone/near-noida-extension') }}">Near Noida Extension</a>, our zone notes suggest
    starting online where few tutors live close by and adding a home session once the right tutor is found. Every locality is on the <a href="{{ url('/city/noida') }}">Noida home tutors
    page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-mode">Home or online for ICSE maths</h2>
  <p>
    Step marking is easiest to coach in person, where a tutor sees each line as it is written, so home tuition suits
    Classes 8 to 10 well. Online works when the student's notebook is visible on a second camera and work is
    photographed and marked after each session. Families on the expressway often mix the two. See
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> for the general trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-demo">A checklist for the ICSE maths demo</h2>
  <ol>
    <li><strong>Board experience.</strong> Has the tutor taught ICSE Class 10 recently, and with which textbooks?</li>
    <li><strong>A commercial maths question.</strong> Ask them to teach one shares and dividends problem.</li>
    <li><strong>Marking.</strong> Hand over a school test and ask where marks for working were lost.</li>
    <li><strong>Section B strategy.</strong> How would they train the choice of four questions?</li>
    <li><strong>Internal assessment.</strong> Assignments should be guided, never written for the student.</li>
    <li><strong>The journey.</strong> Which road or line, and how they handle peak-hour jams.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="icmn-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing
    guide</a> and <a href="{{ url('/blog/home-tuition-fees-noida') }}">home tuition fees in Noida</a>.
  </p>
  <p>
    Tell us the class, the textbook, what is going wrong, your sector and block, and the slots that work. We send two or
    three matched tutors, the first class is a <a href="{{ url('/demo-class') }}">free demo</a>, and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified; you can also browse <a href="{{ url('/tutors') }}">tutor profiles</a>.
  </p>
  </section>

  </div>
</article>
