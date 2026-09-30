{{--
  Long-form guide for the "chemistry home tutor Bengaluru" page (Classes 11 and
  12, NEET and JEE, ISC/IB/IGCSE, with Karnataka PUC named in general terms
  only). Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/bengaluru-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter-wise marks, branch totals 23/14/33, 33 questions in five sections,
  no calculators or log tables, recall share, topics out of the syllabus and
  assessed only in school, practical scheme 8/8/6/4/4, KMnO4 titration against
  oxalic acid or Mohr's salt with the standard solution weighed by the
  student), neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026
  pattern), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026
  pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge science tiers).
  IB chemistry themes as already stated on the Delhi and Faridabad pages. No
  state-board exam pattern. Pink and Blue Lines only as under construction. No
  school, society, mall or people's names, no distances or travel times, only
  the allowed fee sentence.

  Area links render only when that Bengaluru area page exists and is active.
--}}
@php
  $blAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $blA = function (string $slug, string $label) use ($blAreaSlugs) {
      return in_array($slug, $blAreaSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide blc-guide" aria-labelledby="blcGuideTitle">
  <h2 id="blcGuideTitle">Chemistry home tutor in Bengaluru: organic, physical and inorganic, taught for the paper your child sits</h2>

  <p class="nx-guide__lede">
    Chemistry in Classes 11 and 12 is three subjects sharing one name. Organic asks for reaction maps, physical
    chemistry for careful numericals, and inorganic for precise recall, and a gap in any one of them tends to stay
    hidden until the pre-boards. In Bengaluru the paper at the end may be CBSE, ISC, second PUC, IB or IGCSE, and
    NEET or JEE may be layered over it. NXTutors shortlists two or three chemistry tutors who know that paper and can reach your
    neighbourhood after school or coaching. You see each fee before meeting anyone, and the first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#blc-branches">Three branches</a> ·
    <a href="#blc-paper">The theory paper</a> ·
    <a href="#blc-out">What is not examined</a> ·
    <a href="#blc-lab">The practical</a> ·
    <a href="#blc-tests">NEET and JEE</a> ·
    <a href="#blc-puc">Second PUC</a> ·
    <a href="#blc-intl">ISC, IB, IGCSE</a> ·
    <a href="#blc-near">Six neighbourhoods</a> ·
    <a href="#blc-parents">For parents</a> ·
    <a href="#blc-fees">Fees</a> ·
    <a href="#blc-match">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="blc-branches">How much is each branch worth in CBSE Class 12 chemistry?</h2>
  <p>
    Chemistry is the one science where the curriculum gives marks chapter by chapter, which makes planning easier.
    For 2026-27 the ten examined chapters group like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: branches, chapter marks and the weekly work each one needs</caption>
    <thead>
      <tr><th scope="col">Branch and total</th><th scope="col">Chapters (marks)</th><th scope="col">Weekly work</th></tr>
    </thead>
    <tbody>
      <tr><td>Organic, 33</td><td>Aldehydes, ketones and acids (8); Biomolecules (7); Amines (6); Alcohols, phenols and ethers (6); Halogen derivatives, haloalkanes and haloarenes (6)</td><td>Conversion chains written from memory, and one mechanism explained aloud</td></tr>
      <tr><td>Physical, 23</td><td>Electrochemistry (9); Solutions (7); Kinetics (7)</td><td>Two or three numericals with units on every line</td></tr>
      <tr><td>Inorganic, 14</td><td>Coordination compounds (7); transition and inner-transition (d- and f-block) elements (7)</td><td>Trends explained by reason, and naming practice for complexes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Organic is close to half the theory marks, and aldehydes, ketones and carboxylic acids is its largest chapter.
    Electrochemistry is the heaviest chapter overall, and most of it is numerical. For a chapter-by-chapter
    walk-through, read our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12
    organic and inorganic chemistry</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-paper">How is the theory paper set out?</h2>
  <p>
    The theory paper (043) is 70 marks in three hours. It has 33 compulsory questions across Sections A to E, with
    internal choice in some, and neither calculators nor log tables are allowed, so arithmetic has to be practised by
    hand. The 2026-27 sample paper keeps last year's design. Around 40% of the marks are for remembering and
    understanding; the other 60% ask a student to apply, analyse or evaluate, which is why reasons matter more
    than lists. The <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page sets out
    how a tutor plans the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-out">What is no longer on the board paper?</h2>
  <p>
    Old notes can waste weeks. For 2026-27, the solid state is gone from Class 12, and so is the p-block from Group
    15 onwards. A further four topics are still taught but marked only inside school: polymers, chemistry in
    everyday life, surface chemistry, and the isolation of elements from their ores. A tutor should cover them
    lightly for internal assessment and spend board-revision time elsewhere.
  </p>
  <p>
    The entrance exams are another matter. Their syllabi come from NTA, not CBSE, and a topic removed from the
    board list, such as the later p-block groups, may still be tested for NEET or JEE Main. Read NTA's current
    syllabus before striking anything off. Class 12 also leans on Class 11 moles, equilibrium and early organic chemistry; the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page covers that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-lab">What can a home tutor do for the 30 practical marks?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry practical, 2026-27: marks and home preparation</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">Prepared at home</th></tr>
    </thead>
    <tbody>
      <tr><td>Volumetric analysis (titration)</td><td>8</td><td>Molarity of the weighed standard solution; a clean table of readings</td></tr>
      <tr><td>Salt analysis</td><td>8</td><td>The order of preliminary and confirmatory tests, with the reason for each</td></tr>
      <tr><td>Content-based experiment</td><td>6</td><td>Aim, principle and precautions, rehearsed aloud</td></tr>
      <tr><td>Project</td><td>4</td><td>A topic the student can manage alone</td></tr>
      <tr><td>Class record and viva</td><td>4</td><td>Mock viva questions on every experiment in the record</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In 2026-27 the volumetric task uses KMnO<sub>4</sub>, titrated against oxalic acid or Mohr's salt (ferrous
    ammonium sulphate); each student weighs out and makes up that standard solution in the lab. A classic viva question is why the
    titration needs no separate indicator; a student who can explain it has understood the experiment.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-tests">How does NEET or JEE change chemistry tuition?</h2>
  <p>
    Chemistry made up a quarter of NEET (UG) 2026: 45 of the 180 questions in the pen-and-paper test, and 180 of the 720
    marks. JEE Main 2026 Paper 1 had a third of its 75 questions in chemistry, twenty of them multiple-choice and
    five asking for a numerical value. Right answers earned four marks in both exams and wrong ones cost one. NTA
    fixes the pattern afresh for every session, so the newest bulletin is the one to plan from.
  </p>
  <p>
    NEET rewards fast, exact recall of NCERT lines, especially in inorganic and organic chemistry, so a tutor should
    quiz directly from the textbook. JEE wants mechanisms followed step by step and physical chemistry problems in
    several stages. Whichever the target, the tutor should bring a chapter up to board level before setting
    entrance questions on it, ideally inside the same week, so the two never drift apart. Read the <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry
    chapters</a>, the <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide</a> and
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching or a home tutor</a>;
    the <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page explains how we match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-puc">Can you find a tutor for second PUC chemistry?</h2>
  <p>
    Yes, when you ask for one by name. Karnataka state-board students take Classes 11 and 12 as first and second PUC,
    and the second PUC examination is conducted by the Karnataka School Examination and Assessment Board. We describe
    it only in general terms here; the board posts its current syllabus and notices on kseab.karnataka.gov.in. Ask
    any candidate tutor which textbooks they teach from and whether they have prepared a second PUC student recently,
    and do not assume that a CBSE plan fits unchanged.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-intl">What about ISC, IB and IGCSE chemistry?</h2>
  <ul>
    <li><strong>ISC:</strong> CISCE sets a theory paper with practical and project work, and answers are expected to explain more fully than a one-line reason.</li>
    <li><strong>IB Diploma:</strong> SL or HL, built around two themes, structure and reactivity. The scientific investigation is the student's own work; a tutor may question the plan but adds nothing to it.</li>
    <li><strong>Cambridge IGCSE:</strong> Core or Extended tier. A student switching to another board for Class 11 usually needs a quick grounding in the mole concept, atomic structure and first-step organic chemistry. The <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> comparison explains the tiers.</li>
  </ul>
  <p>
    These specialists are fewer than CBSE chemistry tutors, so ask early. If none can travel to you, split the week
    between an online specialist and a nearby tutor who checks written answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-near">What does your neighbourhood change for an evening chemistry class?</h2>
  <p>
    Senior chemistry is written work, usually fitted in after school or coaching. These six neighbourhoods from
    different parts of the city show how arrangements vary; compare tutors near you on our
    <a href="{{ url('/city/bengaluru') }}">Bengaluru page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening chemistry tuition in six Bengaluru neighbourhoods</caption>
    <thead>
      <tr><th scope="col">Neighbourhood</th><th scope="col">Part of the city</th><th scope="col">Homes and entry</th><th scope="col">How tutors arrive</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $blA('kanakapura-road', 'Kanakapura Road') !!}</td><td>South</td><td>Mostly gated apartment projects; give the tower and flat number at the gate</td><td>Green Line stations along the road since January 2021, then a short walk or auto</td></tr>
      <tr><td>{!! $blA('arekere', 'Arekere') !!}</td><td>South, on Bannerghatta Road</td><td>Older layouts with doorstep visits, and apartment complexes with gate registration</td><td>By road, or the Yellow Line and an auto; the Pink Line here is not yet open</td></tr>
      <tr><td>{!! $blA('brookefield', 'Brookefield') !!}</td><td>East</td><td>Mostly gated complexes; add the tutor to the visitor list before the demo</td><td>Kundalahalli on the Purple Line, then on foot or by auto; aim between school and the evening rush</td></tr>
      <tr><td>{!! $blA('thanisandra', 'Thanisandra') !!}</td><td>North-east</td><td>Flats in gated societies; share the tutor's name and phone number with security</td><td>No metro yet; the Blue Line at Nagawara is under construction, so bus, two-wheeler or cab</td></tr>
      <tr><td>{!! $blA('yeshwanthpur', 'Yeshwanthpur') !!}</td><td>North-west</td><td>Older houses and gated apartment complexes; check your building's visitor rules</td><td>Green Line station on Tumkur Road, then an auto; a slightly later evening start avoids peak traffic</td></tr>
      <tr><td>{!! $blA('ulsoor', 'Ulsoor') !!}</td><td>Central-east</td><td>Old houses near the temples, standalone buildings and some gated societies</td><td>Trinity and Halasuru stations on the Purple Line, open since 2011</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In the pre-board months, two home sessions and one online session a week can keep the plan steady when a
    route becomes unreliable.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-parents">How can a parent tell whether chemistry tuition is working?</h2>
  <p>
    You do not need to know chemistry. Once a month, open the notebook and look for these:
  </p>
  <ol>
    <li><strong>Reactions with conditions.</strong> Catalysts and temperatures written where they matter, not bare arrows.</li>
    <li><strong>Units throughout numericals.</strong> Especially in solutions, electrochemistry and kinetics.</li>
    <li><strong>A reaction map that grows.</strong> One page linking alcohols, aldehydes, ketones, acids and amines, extended chapter by chapter.</li>
    <li><strong>Marked sample-paper sections.</strong> At least one a month, scored against CBSE's official scheme, with each lost mark explained.</li>
  </ol>
  <p>
    If two are missing by the half-yearly exam, tell the tutor or tell us. We can set up a demo with another tutor
    from your shortlist, and switching costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-fees">What do chemistry home tutors in Bengaluru charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor decides
    their own fee. Expect it to climb with the level of the exam and the tutor's record in it, and to reflect the
    evening journey to your neighbourhood and how many sessions a week you book. Online lessons with the same tutor may cost less.
    Every fee is shown before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="blc-match">How do you get matched?</h2>
  <p>
    Tell us the class and chemistry course, which exam counts most, which of the three branches is weakest,
    where you live and which evenings are free. We reply with two or three matched chemistry tutors and their fees, and
    you choose one for a free demo class. If the fit is wrong, another demo follows. Where nobody suitable can reach
    you, we suggest an online or hybrid plan. NXTutors is based in Sector 66, Gurugram, and teaches online across
    India; our national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page describes matching
    outside Bengaluru.
  </p>
  <p>
    Chemistry teachers living in Bengaluru can look through open requests on the
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
