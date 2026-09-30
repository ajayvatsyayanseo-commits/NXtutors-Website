{{--
  Long-form guide for the "chemistry home tutor Delhi" page (Classes 11 and
  12, NEET and JEE, ISC/IB/IGCSE). Byline in config: NXTutors Academic Team.
  Local facts come only from database/seo-content/areas/delhi-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  in database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter-wise marks, branch totals 23/14/33, 33 questions in five sections,
  no calculators or log tables, recall share, topics out of the syllabus and
  assessed only in school, practical scheme 8/8/6/4/4, KMnO4 titration against
  oxalic acid or Mohr's salt with the standard solution weighed by the
  student, one main Class 12 exam), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern), jee-preparation-gurgaon-coaching-or-home-tutor (JEE
  Main 2026 pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge science
  tiers). IB chemistry themes as already stated on the Faridabad page. No
  state board is described. No school, society, mall or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $dlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dlA = function (string $slug, string $label) use ($dlAreaSlugs) {
      return in_array($slug, $dlAreaSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide dlc-guide" aria-labelledby="dlcGuideTitle">
  <h2 id="dlcGuideTitle">Chemistry home tutor in Delhi: ten board chapters, three branches, and a tutor who can reach you after coaching</h2>

  <p class="nx-guide__lede">
    Chemistry in Classes 11 and 12 rewards steady, written practice, and it
    punishes gaps quietly: a weak mole concept in Class 11 shows up as lost electrochemistry marks a year later. A
    chemistry home tutor in Delhi should know which chapters carry the board marks, what NEET or JEE adds on top, and
    how to fit a session around school, coaching and the metro. NXTutors sends two or three chemistry tutors who fit
    your child's course and locality. Each fee is shown before you meet, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dlc-chapters">Marks by chapter</a> ·
    <a href="#dlc-off">Off the board syllabus</a> ·
    <a href="#dlc-session">Inside one session</a> ·
    <a href="#dlc-entrance">NEET and JEE</a> ·
    <a href="#dlc-local">Six localities</a> ·
    <a href="#dlc-lab">Titration and salt analysis</a> ·
    <a href="#dlc-other">ISC, IB and IGCSE</a> ·
    <a href="#dlc-notebook">The monthly check</a> ·
    <a href="#dlc-fees">Fees</a> ·
    <a href="#dlc-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dlc-chapters">Which chapters carry the marks in CBSE Class 12 chemistry?</h2>
  <p>
    Unlike maths and physics, the chemistry curriculum assigns marks chapter by chapter. The theory paper (043) is
    worth 70 marks over three hours, with 33 compulsory questions in Sections A to E and internal choice in some of
    them; calculators and log tables are not allowed. The 2026-27 sample paper keeps last session's design.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry theory, 2026-27: marks for each NCERT chapter, grouped by branch</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Chapter</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td rowspan="3">Physical (23)</td><td>Solutions</td><td>7</td></tr>
      <tr><td>Electrochemistry</td><td>9</td></tr>
      <tr><td>Chemical Kinetics</td><td>7</td></tr>
      <tr><td rowspan="2">Inorganic (14)</td><td>The d- and f-Block Elements</td><td>7</td></tr>
      <tr><td>Coordination Compounds</td><td>7</td></tr>
      <tr><td rowspan="5">Organic (33)</td><td>Haloalkanes and Haloarenes</td><td>6</td></tr>
      <tr><td>Alcohols, Phenols and Ethers</td><td>6</td></tr>
      <tr><td>Aldehydes, Ketones and Carboxylic Acids</td><td>8</td></tr>
      <tr><td>Amines</td><td>6</td></tr>
      <tr><td>Biomolecules</td><td>7</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two things follow. Organic chemistry is nearly half the theory paper, and aldehydes, ketones and carboxylic
    acids is its heaviest chapter, so conversions deserve weekly practice from the start. Electrochemistry is the
    single heaviest chapter overall, and most of its marks are numerical. About 40% of the paper rewards remembering
    and understanding; the rest asks the student to apply, analyse or evaluate. Our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry
    guide</a> takes each chapter in turn, and the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page maps the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-off">What has come off the board syllabus, and what stays for entrance tests?</h2>
  <p>
    Revision notes inherited from an older student can cost weeks if they include chapters that are no longer
    examined. Two areas have left the 2026-27 Class 12 syllabus completely: the solid state, and Groups 15 to 18 of
    the p-block. Four more stay in the syllabus but are marked only by the school and never reach the board paper:
    polymers, chemistry in everyday life, surface chemistry, and how elements are isolated from their ores.
  </p>
  <p>
    Entrance tests are a separate matter. NTA publishes the NEET and JEE Main syllabi on its own, and some dropped board
    material, p-block chemistry included, can still be examined there, so an entrance student should read the official
    list before cutting anything. Class 12 also builds directly on Class 11 work such as moles, equilibrium and the
    first organic chapters; see the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a>
    page for that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-session">What should happen inside a single chemistry session?</h2>
  <p>
    A good evening session has a shape your child can predict. One pattern that suits most Class 12 students:
  </p>
  <ol>
    <li><strong>Recall warm-up.</strong> Five one-mark items or a short conversion chain, written from memory, from last week's chapter.</li>
    <li><strong>Teaching block.</strong> The chapter the school is on, taught through the reason behind each reaction or trend, so facts can be worked out rather than memorised.</li>
    <li><strong>Numerical block.</strong> Two or three problems from solutions, electrochemistry or kinetics, with units carried through every line.</li>
    <li><strong>Written reasons.</strong> Two "give reasons" answers in board style, marked on the spot.</li>
  </ol>
  <p>
    On days without a session, a reaction map drawn from memory, then compared with the NCERT page, keeps
    organic chemistry fresh. Entrance students replace the written reasons with timed multiple-choice questions on the
    same chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-entrance">What does NEET or JEE add to chemistry tuition?</h2>
  <p>
    NEET (UG) in 2026 was a single pen-and-paper exam of 180 questions for 720 marks, a quarter of them chemistry:
    45 questions worth 180 marks. JEE Main's 2026 Paper 1 gave chemistry a third of its 75 questions, with 20
    multiple-choice items in Section A and 5 numerical-value items in Section B. Each exam gave +4 for a right answer
    and −1 for a wrong one. NTA sets the pattern afresh every year, so read the latest bulletin.
  </p>
  <p>
    For NEET, the premium is on quick, precise recall of NCERT lines, above all in inorganic and organic chemistry,
    so tutors test straight from the textbook. JEE asks for more: mechanisms followed step by step and physical
    chemistry problems with several stages. Either way, a chapter should reach board standard before the entrance
    questions on it begin, ideally within the same week. Worth reading: the <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET
    chemistry chapters</a>, the <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry
    guide</a> and our <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching or
    home tutor</a> comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-local">Where you live in Delhi: what does it change for a chemistry tutor?</h2>
  <p>
    Class 12 chemistry happens with a pen, usually after school or coaching. Six localities from south, west, north and
    east Delhi show how the arrangements differ. Compare tutors near you on our
    <a href="{{ url('/city/delhi') }}">Delhi page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>South: two older colonies</h3>
      <p>
        {!! $dlA('green-park', 'Green Park') !!}, established in the early 1960s, has two parts, Green Park Main and
        Green Park Extension, with builder floors and independent houses on quiet internal lanes. Most floors have
        their own entrance. Green Park station on the Yellow Line is at its edge, and the Hauz Khas interchange is one
        stop south. {!! $dlA('jangpura', 'Jangpura') !!}, which grew in 1950 and 1951, covers Jangpura A and B,
        Jangpura Extension and Bhogal. Homes are mainly builder floors, reached at the door, and Jangpura station on the
        Violet Line has served the area since October 2010.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>West and central: an interchange and a market area</h3>
      <p>
        {!! $dlA('rajouri-garden', 'Rajouri Garden') !!}, built on land of the former Basai Darapur village, mixes
        bungalows in lettered blocks with DDA pockets. Its station is a Blue and Pink Line interchange, so tutors can
        reach it from many directions. {!! $dlA('karol-bagh', 'Karol Bagh') !!} is one of central Delhi's busiest
        market areas, with residential pockets such as the WEA blocks. Homes are builder floors, older houses and
        low-rise flats; tutors usually come by the Blue Line and walk, and weekday slots are easier than weekends.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North and east: lettered blocks and society complexes</h3>
      <p>
        {!! $dlA('shalimar-bagh', 'Shalimar Bagh') !!} takes its name from a Mughal-era garden now protected by the
        Archaeological Survey of India. Homes are DDA flats, builder floors and low-rise apartment blocks; give the tutor
        the block letter, since numbering repeats. Its Pink Line station opened in March 2018.
        {!! $dlA('ip-extension', 'IP Extension') !!}, short for Indraprastha Extension, is a cluster of mid-rise
        cooperative apartment complexes. The Pink Line station there opened in October 2018; register the tutor with
        security to save time at the gate.
      </p>
    </div>
  </div>
  <p>
    Where a route is uncertain in the pre-board months, two home sessions and one online session a week keep the
    plan steady.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-lab">Titration and salt analysis: what can be prepared at home?</h2>
  <p>
    Of the 30 practical marks, titration (volumetric analysis) and salt analysis carry 8 apiece; the rest are 6 for a
    content-based experiment, 4 for the project and 4 for the class record together with the viva. In 2026-27 the titration is potassium permanganate against a standard
    solution of oxalic acid or ferrous ammonium sulphate (Mohr's salt), and students prepare the standard solution by
    weighing it themselves.
  </p>
  <p>
    Reagents and apparatus stay in the school laboratory, but a tutor can still prepare a great deal: the molarity
    calculation for the weighed solution, a clean layout for titration readings and the final result, the order of
    preliminary and confirmatory tests in salt analysis with the reason for each, a project topic the student can
    manage without help, and viva questions such as why no separate indicator is needed with permanganate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-other">Can you find ISC, IB or IGCSE chemistry tutors in Delhi?</h2>
  <p>
    Yes. They are fewer than CBSE chemistry tutors, which makes an early request worthwhile.
  </p>
  <ul>
    <li><strong>ISC:</strong> a CISCE theory paper with practical and project work, where answers are expected to explain more than a one-line NCERT-style reason.</li>
    <li><strong>IB Diploma:</strong> SL or HL, organised around two themes, structure and reactivity. The scientific investigation is the student's own; a tutor can question the plan but must not add to it.</li>
    <li><strong>Cambridge IGCSE:</strong> the sciences are tiered, Core or Extended. Students who move into CBSE Class 11 afterwards often need early work on moles, atomic structure and basic organic chemistry. Our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> comparison explains the tiers.</li>
  </ul>
  <p>
    If no specialist can travel to you, split the week: an online specialist for the course and a nearby tutor who
    checks written answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-notebook">What should a parent look for in the chemistry notebook each month?</h2>
  <p>
    You do not need to know chemistry to see whether tuition is working. Open the notebook once a month and look for
    four things:
  </p>
  <ul>
    <li><strong>Balanced equations with conditions.</strong> Reactions written with catalysts or temperatures where they matter, not bare arrows.</li>
    <li><strong>Units on every numerical line.</strong> Especially in solutions, electrochemistry and kinetics, where most physical chemistry marks sit.</li>
    <li><strong>A growing reaction map.</strong> One page that links alcohols, aldehydes, ketones, acids and amines, added to as each chapter is finished.</li>
    <li><strong>Marked sample-paper sections.</strong> At least one section a month scored against CBSE's official marking scheme, with the lost marks explained.</li>
  </ul>
  <p>
    If two of these are missing by the half-yearly exam, raise it with the tutor or with us.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-fees">How much do chemistry home tutors in Delhi charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor fixes their
    own rate, which tends to rise with the exam being prepared for and the tutor's record with it, and also reflects
    the trip to your locality in the evening and how many sessions you want each week. The same tutor may charge less
    online. Fees are shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlc-start">How do you get started?</h2>
  <p>
    Send us the class, the chemistry course, the exam that matters most and the branch where marks leak, plus your
    locality and your free evenings. A shortlist of two or three matched chemistry tutors follows, fees included,
    and you choose one for a free demo class. Should the fit be wrong, another demo is arranged, and changing tutor
    later costs nothing. Where no suitable tutor can reach you, we suggest an online or hybrid plan. NXTutors is based in Sector 66,
    Gurugram, and teaches online throughout India. The national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page explains how we work elsewhere.
  </p>
  <p>
    Chemistry teachers in Delhi who want students nearby can view open requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
