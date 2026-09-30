{{--
  Long-form guide for the "chemistry home tutor Surat" page (Classes 11 and
  12, NEET and JEE, ISC/IB/IGCSE, GSEB HSC in general terms). Byline in
  config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/surat-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements used on the Delhi chemistry
  page, from database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter-wise marks, branch totals 23/14/33, 33 questions in five sections,
  no calculators or log tables, recall share, topics out of the syllabus and
  assessed only in school, practical scheme 8/8/6/4/4, KMnO4 titration against
  oxalic acid or Mohr's salt with the standard solution weighed by the
  student, one main Class 12 exam), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern), jee-preparation-gurgaon-coaching-or-home-tutor (JEE
  Main 2026 pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge science
  tiers). IB chemistry themes as stated on the Delhi page. GSEB is described
  generally only; no GSEB pattern is given. The Surat Metro is described as
  under construction, with no dates. No school, society, mall or people's
  names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Surat area page exists and is active.
--}}
@php
  $srAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $srA = function (string $slug, string $label) use ($srAreaSlugs) {
      return in_array($slug, $srAreaSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide src-guide" aria-labelledby="srcGuideTitle">
  <h2 id="srcGuideTitle">Chemistry home tutor in Surat: know where the marks are, clear out the stale notes, and keep one steady evening</h2>

  <p class="nx-guide__lede">
    Senior chemistry is cumulative in an unforgiving way. A shaky grasp of moles in Class 11 turns into dropped marks
    in solutions and electrochemistry the following year, and a student who memorises reactions without the reasons
    behind them stalls when a board question changes one reagent. A good chemistry tutor in Surat knows which chapters
    the board weights, what NEET or JEE adds beyond the board, and how to fit around school and coaching. NXTutors proposes two
    or three who match your child's course and locality, each with a visible fee, and the lesson that starts it all is
    a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#src-paper">The board paper</a> ·
    <a href="#src-weights">Ten chapters by weight</a> ·
    <a href="#src-stale">Stale notes</a> ·
    <a href="#src-entrance">NEET and JEE Main</a> ·
    <a href="#src-boards">GSEB, ISC, IB, IGCSE</a> ·
    <a href="#src-practical">Practical exam</a> ·
    <a href="#src-where">Six localities</a> ·
    <a href="#src-week">A working week</a> ·
    <a href="#src-fees">Fees</a> ·
    <a href="#src-next">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="src-paper">What does the CBSE Class 12 chemistry paper look like this session?</h2>
  <p>
    Chemistry (043) is examined in a three-hour theory paper worth 70, with the remaining 30 from practical work.
    All 33 questions are compulsory, spread over Sections A to E, and a few offer an internal choice. Calculators and log tables are banned from the hall, so arithmetic in physical chemistry has to be clean by hand. CBSE's
    2026-27 sample paper repeats last session's design. About 40% of the marks reward recall and understanding;
    the other 60% go to applying, analysing or evaluating, so a tutor who only drills definitions is preparing for
    the smaller share.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-weights">Which of the ten chapters carry the most?</h2>
  <p>
    Uniquely among the Class 12 sciences, CBSE fixes chemistry marks chapter by chapter.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: the ten theory chapters from heaviest to lightest, with the kind of work each rewards</caption>
    <thead>
      <tr><th scope="col">Chapter</th><th scope="col">Branch</th><th scope="col">Marks</th><th scope="col">Mostly rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrochemistry</td><td>Physical</td><td>9</td><td>Multi-step numericals</td></tr>
      <tr><td>Aldehydes, Ketones and Carboxylic Acids</td><td>Organic</td><td>8</td><td>Conversions and named reactions</td></tr>
      <tr><td>Solutions</td><td>Physical</td><td>7</td><td>Colligative-property numericals</td></tr>
      <tr><td>Chemical Kinetics</td><td>Physical</td><td>7</td><td>Rate calculations and graphs</td></tr>
      <tr><td>The d- and f-Block Elements</td><td>Inorganic</td><td>7</td><td>Explained trends</td></tr>
      <tr><td>Coordination Compounds</td><td>Inorganic</td><td>7</td><td>Naming, isomers and bonding</td></tr>
      <tr><td>Biomolecules</td><td>Organic</td><td>7</td><td>Precise recall of structures and terms</td></tr>
      <tr><td>Haloalkanes and Haloarenes</td><td>Organic</td><td>6</td><td>Mechanisms and reasoning</td></tr>
      <tr><td>Alcohols, Phenols and Ethers</td><td>Organic</td><td>6</td><td>Tests and conversions</td></tr>
      <tr><td>Amines</td><td>Organic</td><td>6</td><td>Basicity order and conversions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Add the branches up and organic chemistry holds 33 of the 70 theory marks, physical 23 and inorganic 14. Organic
    conversions therefore need practice every week from the first month, while electrochemistry, the single heaviest
    chapter, needs numerical fluency. The
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry
    guide</a> takes each chapter in turn; for how we plan the months, see the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry
    tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-stale">Which old notes should you put aside?</h2>
  <p>
    Hand-me-down notes are often the costliest resource a student uses. For 2026-27 the solid state and the p-block
    Groups 15 to 18 are no longer in the Class 12 syllabus at all. Four more topics stay in the syllabus but are
    tested only in school, never on the board paper: surface chemistry, polymers, chemistry in everyday life, and
    the isolation of elements from ores. A tutor should flag every page that belongs to these before revision starts.
  </p>
  <p>
    Entrance exams are a separate list. NTA publishes the NEET and JEE Main syllabi itself, and chapters the board no longer examines, p-block chemistry included, may still be asked. Class 12 also leans on Class 11 moles,
    equilibrium and early organic chemistry; the <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11
    chemistry tutor</a> page deals with that foundation year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-entrance">How does NEET or JEE Main change the tuition?</h2>
  <p>
    In NEET (UG) 2026, a single pen-and-paper sitting of 180 questions for 720 marks, chemistry supplied 45 questions
    and 180 marks. JEE Main's 2026 Paper 1 had 75 questions, of which chemistry took 25: twenty with options in
    Section A and five needing a numerical answer in Section B. Both exams awarded four marks for a correct answer and
    took one away for a wrong one. NTA can revise the pattern each year, so the latest bulletin is the one to follow.
  </p>
  <p>
    NEET chemistry rewards fast, exact recall of NCERT statements, especially in inorganic and organic chapters, so
    tutors quiz straight from the textbook. JEE puts more weight on following a mechanism line by line and on multi-stage physical chemistry calculations. Either way, a chapter should reach board level before its entrance problems begin, ideally in the same week. Further reading: <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET
    chemistry chapters that matter most</a>, our <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE
    chemistry guide</a>, the <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET coaching
    versus home tutor</a> comparison and the <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a>
    page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-boards">GSEB, ISC, IB or IGCSE: can a Surat family find the right tutor?</h2>
  <p>
    Yes, though for every course except CBSE the pool is smaller, so it pays to ask early.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Other chemistry courses taught in Surat and what to tell or ask a tutor</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">What to know</th><th scope="col">Tell or ask the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>GSEB HSC, science stream</td><td>The Gujarat board sets its own chemistry syllabus and paper; details are on gseb.org</td><td>The medium, Gujarati or English, and the board's prescribed textbook</td></tr>
      <tr><td>ISC</td><td>CISCE sets theory plus practical and project components</td><td>Can they coach answers that explain more than a one-line reason?</td></tr>
      <tr><td>IB Diploma, SL or HL</td><td>Organised under two themes, structure and reactivity; the investigation must be written by the student alone</td><td>How will they question the plan without contributing to it?</td></tr>
      <tr><td>Cambridge IGCSE</td><td>Sciences are tiered, Core or Extended</td><td>Which tier they recommend, and how they would bridge to Class 11 moles and organic chemistry</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> article
    explains the tiers. When no specialist is within reach, split the week between an online specialist and a nearby
    tutor who checks written work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-practical">What can be prepared at home for the practical exam?</h2>
  <p>
    The 30 practical marks break down as 8 for volumetric analysis, 8 for salt analysis, 6 for a content-based
    experiment, 4 for the project, and 4 for the record and viva together. This session the titration pairs potassium permanganate with a standard made from oxalic acid or ferrous ammonium sulphate (Mohr's salt), and every student weighs and dissolves that standard themselves. At the kitchen table a tutor can still:
  </p>
  <ol>
    <li>Work through the molarity calculation for the weighed solution until it is automatic.</li>
    <li>Set out a tidy table for burette readings and the final result.</li>
    <li>Walk through salt analysis in order, preliminary tests before confirmatory ones, with the reason for each step.</li>
    <li>Help choose a project topic the student can genuinely manage alone.</li>
    <li>Rehearse the viva, for instance why no extra indicator is added when permanganate is the titrant.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-where">How does the locality change a chemistry tutor's visit in Surat?</h2>
  <p>
    Chemistry practice is pen-on-paper work, usually fitted in after school or coaching. With the Surat Metro still
    under construction and closed to passengers, tutors come by two-wheeler, auto or Sitilink bus. Browse any locality
    on our <a href="{{ url('/city/surat') }}">Surat page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry tuition in six Surat localities: the setting, getting in, and the timing that works</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Setting</th><th scope="col">Getting in</th><th scope="col">Timing</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $srA('jahangirpura', 'Jahangirpura') !!}</td><td>North-western edge; flats and self-built houses on plots</td><td>Gate registration in societies, doorstep for plotted houses; two BRTS corridors end here</td><td>Pair with online lessons for specialist courses</td></tr>
      <tr><td>{!! $srA('ghod-dod-road', 'Ghod Dod Road') !!}</td><td>A shopping street with three-bedroom flats behind the shopfronts</td><td>Watchman notes the tutor on the first day</td><td>Arrive soon after school, before evening shoppers</td></tr>
      <tr><td>{!! $srA('parle-point', 'Parle Point') !!}</td><td>Junction at the southern end of Ghod Dod Road; mostly flats, some villas</td><td>Flat number given at the entrance once</td><td>A slightly earlier slot, ahead of the restaurant crowd</td></tr>
      <tr><td>{!! $srA('dumas-road', 'Dumas Road') !!}</td><td>Gated societies along the road towards Magdalla and the airport</td><td>Gate registration and visitor entry are normal</td><td>Weekdays, away from office hours and weekend evenings</td></tr>
      <tr><td>{!! $srA('pandesara', 'Pandesara') !!}</td><td>Industrial hub with a housing board colony and small buildings</td><td>Tutor usually goes straight to the flat</td><td>Avoid shift-change hours on industrial roads</td></tr>
      <tr><td>{!! $srA('yogi-chowk', 'Yogi Chowk') !!}</td><td>Apartments around busy local shopping streets in the east</td><td>Flat number at the entrance on the first visit</td><td>Straight after school, or later once the shops quieten</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-week">What does a sensible chemistry week look like?</h2>
  <p>
    For a Class 12 student with two tutored sessions, a pattern like this keeps all three branches moving:
  </p>
  <ul>
    <li><strong>Session one:</strong> a short written recall check on last week's chapter, then new teaching built on why each reaction or trend happens.</li>
    <li><strong>Session two:</strong> two or three physical chemistry numericals with units on every line, and two board-style "give reasons" answers marked on the spot.</li>
    <li><strong>On the student's own:</strong> redraw the organic reaction map from memory, check it against NCERT, and add any new links.</li>
    <li><strong>Monthly:</strong> mark one section of a sample paper with CBSE's own scheme and explain every lost mark.</li>
  </ul>
  <p>
    For an entrance student, the reasoning answers give way to timed objective questions from the chapter just finished. If the
    notebook shows none of this by the half-yearly exam, talk to the tutor or to us.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-fees">What do chemistry tutors in Surat charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor prices their own lessons, usually higher for entrance-level work and for long experience of it; the evening trip to your
    locality and the number of weekly sessions matter too. Online lessons with the same tutor can cost less. You see
    every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="src-next">What happens after you get in touch?</h2>
  <p>
    Tell us the class, the chemistry course and medium, the main exam target, the branch that loses most marks, your locality and your free evenings. We come back with two or three matched chemistry tutors and their
    fees, and you choose one for a free demo class. If the match is off, another demo follows, and a later change of
    tutor is free. If no suitable tutor can make the trip, an online or mixed plan is the fallback. Our office is in Sector 66, Gurugram, and online lessons reach every part of India; the national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page covers the service in other cities.
  </p>
  <p>
    Chemistry teachers living in Surat who would like students nearby can check open requests on the
    <a href="{{ url('/tuition-jobs/surat') }}">Surat tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
