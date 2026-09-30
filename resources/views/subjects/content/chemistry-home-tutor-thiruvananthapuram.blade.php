{{--
  Long-form guide for the "chemistry home tutor Thiruvananthapuram" page
  (Classes 11 and 12, NEET and JEE, ISC/IB/IGCSE, Kerala State Board in
  general terms). Byline in config: NXTutors Academic Team. Local facts come
  only from database/seo-content/areas/thiruvananthapuram-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  already used on the Delhi chemistry page (CBSE Class 12 chapter marks,
  branch totals 23/14/33, 33 questions in five sections, no calculators or
  log tables, recall share, deleted and school-assessed topics, practical
  scheme 8/8/6/4/4, KMnO4 titration against oxalic acid or Mohr's salt with a
  student-weighed standard; NEET UG and JEE Main 2026 patterns; IB chemistry
  themes; IGCSE tiers). The Kerala State Board and KEAM are named only, with
  no pattern stated. No school, society, hospital, campus or people's names,
  no distances or travel times, only the allowed fee sentence.

  Area links render only when that Thiruvananthapuram area page exists and is
  active.
--}}
@php
  $tvmcAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tvmcA = function (string $slug, string $label) use ($tvmcAreaSlugs) {
      return in_array($slug, $tvmcAreaSlugs, true)
          ? '<a href="' . e(url('/city/thiruvananthapuram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide tvmc-guide" aria-labelledby="tvmcGuideTitle">
  <h2 id="tvmcGuideTitle">Chemistry home tutor in Thiruvananthapuram: know where the marks are, clear out old notes, then fix the weekly slot</h2>

  <p class="nx-guide__lede">
    Senior chemistry is unforgiving in a quiet way. Weak mole calculations in the first senior year stay hidden
    for months, then surface a year later as lost marks in solutions and electrochemistry. A chemistry tutor in
    Thiruvananthapuram has to know which chapters carry the board marks, what NEET, JEE or KEAM add beyond them, and how to
    slot a session between school, coaching and a bus ride home. NXTutors suggests two or three chemistry tutors who
    match your child's course and neighbourhood. Fees are listed up front, and the opening
    lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tvmc-map">Ten chapters, three branches</a> ·
    <a href="#tvmc-old">Old notes to set aside</a> ·
    <a href="#tvmc-week">Board, NEET or JEE week</a> ·
    <a href="#tvmc-state">State Board and KEAM</a> ·
    <a href="#tvmc-lab">The practical exam</a> ·
    <a href="#tvmc-near">Four neighbourhoods</a> ·
    <a href="#tvmc-other">ISC, IB and IGCSE</a> ·
    <a href="#tvmc-fees">Fees</a> ·
    <a href="#tvmc-go">Getting going</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tvmc-map">Where do the 70 theory marks sit in CBSE Class 12 chemistry?</h2>
  <p>
    Chemistry is the one senior science where CBSE fixes marks for every chapter, which makes planning easier. The
    three-hour theory paper sets 33 compulsory questions across five sections, lettered A to E, with internal choice
    in a few; students may not use a calculator or log tables. This session's sample paper keeps the earlier design.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry theory, 2026-27: branch totals and the chapters behind them</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Total</th><th scope="col">Chapters and their marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Organic</td><td>33</td><td>Aldehydes, Ketones and Carboxylic Acids 8; Biomolecules 7; Haloalkanes and Haloarenes 6; Alcohols, Phenols and Ethers 6; Amines 6</td></tr>
      <tr><td>Physical</td><td>23</td><td>Electrochemistry 9; Solutions 7; Chemical Kinetics 7</td></tr>
      <tr><td>Inorganic</td><td>14</td><td>The d- and f-Block Elements 7; Coordination Compounds 7</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Start with the first row. Nearly half the paper is organic, so conversion chains need practice
    every week from the first month, not in a rush before the pre-boards. Electrochemistry, at 9 marks, is the
    heaviest single chapter, and most of its marks come from numericals. Roughly two marks in five reward recall and
    understanding; the rest need application, analysis or evaluation. See our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry
    guide</a> for each chapter, and the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-old">Which old notes should go straight into the cupboard?</h2>
  <p>
    Revision notes handed down from a cousin can waste weeks. Two areas have been deleted outright from
    the 2026-27 Class 12 course: the solid state, and p-block Groups 15 to 18. Another four topics are still taught
    and marked by the school but never reach the board paper, namely polymers, everyday-life chemistry, surface
    chemistry, and how elements are extracted from ores.
  </p>
  <p>
    Entrance exams keep their own lists, issued by NTA, and a chapter the board has cut, including parts of the
    p-block, may still be tested there; read the official NEET or JEE Main syllabus before binning any notes. Class 12
    work also leans on Class 11 topics like mole calculations, equilibrium and early organic reactions; the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page deals with that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-week">How does a board week differ from a NEET or JEE week?</h2>
  <p>
    Chemistry made up a quarter of NEET (UG) 2026, a written exam on OMR sheets: 45 of the 180 questions and 180 of
    the 720 marks. JEE Main 2026 Paper 1 gave it a third, 25 questions, split into 20 with options and 5 needing a
    numerical answer. In both, a right response earned four marks and a wrong one cost a mark. Patterns are
    reissued every year, so work from the latest NTA bulletin.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a weekly chemistry session shifts with the target exam</caption>
    <thead>
      <tr><th scope="col">Target</th><th scope="col">Opening task</th><th scope="col">Main work</th><th scope="col">Closing check</th></tr>
    </thead>
    <tbody>
      <tr><td>Board only</td><td>A conversion chain written from memory</td><td>The school's current chapter, reasons before facts</td><td>Two "give reasons" answers marked in board style</td></tr>
      <tr><td>Board plus NEET</td><td>Quick recall of NCERT lines on last week's chapter</td><td>Inorganic and organic facts tested straight from the textbook</td><td>A short timed set of multiple-choice questions</td></tr>
      <tr><td>Board plus JEE</td><td>One multi-stage physical chemistry problem</td><td>Mechanisms followed step by step</td><td>Numerical-value questions without options</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Whatever the target, a chapter should reach board standard before its entrance questions begin, ideally in the
    same week. Worth reading: <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET chemistry's
    important chapters</a>, the <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry
    guide</a> and <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">NEET: coaching or a
    home tutor?</a>
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-state">What about Kerala State Board chemistry and KEAM?</h2>
  <p>
    Plenty of Plus One and Plus Two students in the city take chemistry on the Kerala State Board, learning from
    SCERT Kerala textbooks. We do not set out the Higher Secondary chemistry paper here; the state publishes it, and
    the school will have the current scheme. When you ask for a tutor, say which board, so we look for someone who
    teaches from the state book rather than NCERT alone. For KEAM, the state's engineering entrance, the
    Commissioner for Entrance Examinations publishes the scheme at cee.kerala.gov.in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-lab">What can be prepared at home for the practical exam?</h2>
  <p>
    Thirty marks come from the CBSE practical. Volumetric analysis and salt analysis are worth 8 apiece; a
    content-based experiment adds 6, and the project and the record-plus-viva add 4 each. This session's titration
    has KMnO<sub>4</sub> as the titrant, standardised against oxalic acid or Mohr's salt (ferrous ammonium sulphate)
    that the student personally weighs and dissolves.
  </p>
  <ul>
    <li><strong>Before the lab:</strong> the molarity calculation for the weighed sample, and a clean table for burette readings and the result.</li>
    <li><strong>Salt analysis:</strong> the order of preliminary and confirmatory tests, with the reason each one comes where it does.</li>
    <li><strong>Viva:</strong> rehearse aloud, for example: what tells you the end point when no indicator is added?</li>
    <li><strong>Project:</strong> a topic small enough for the student to explain without help.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-near">What does the neighbourhood change for a chemistry tutor?</h2>
  <p>
    Senior chemistry is done on paper at a desk, usually after school or coaching, and without a metro the
    tutor's bus or scooter route decides whether a slot lasts the year. Four neighbourhoods show the range; the
    <a href="{{ url('/city/thiruvananthapuram') }}">Thiruvananthapuram page</a> lists them all.
  </p>
  <ul>
    <li><strong>{!! $tvmcA('vellayambalam', 'Vellayambalam') !!}.</strong> Roads from Kowdiar, Sasthamangalam, East Fort, Thycaud and Thampanoor meet at its roundabout, so tutors arrive easily by bus or auto from any side. The junction is crowded when offices open and close; late afternoon or early evening suits. Apartments are common, so give the gate the tutor's name and mention scooter parking.</li>
    <li><strong>{!! $tvmcA('kudappanakunnu', 'Kudappanakunnu') !!}.</strong> Home to the Civil Station and the District Collector's office, with villas and houses around them. Traffic peaks as government offices open and close, so an after-school tutor should arrive after that rush. Villa communities may ask visitors to sign in.</li>
    <li><strong>{!! $tvmcA('vazhuthacaud', 'Vazhuthacaud') !!}.</strong> A central mix of flats, houses and offices between East Fort, Thycaud and Vellayambalam. Main roads link it to Thycaud, Chalai and Palayam, but school-time traffic is heavy; book after the school rush and leave the tutor's name at the security desk.</li>
    <li><strong>{!! $tvmcA('thirumala', 'Thirumala') !!}.</strong> A quiet hillside suburb of houses and villas on the road towards Kattakkada, with buses from Thampanoor and East Fort. Doorstep visits and easy parking are the norm; evening and weekend slots run most smoothly.</li>
  </ul>
  <p>
    When a route is shaky close to the pre-boards, swap one weekly visit for an online hour with the same tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-other">Are there ISC, IB and IGCSE chemistry tutors in the city?</h2>
  <p>
    Yes, though fewer than CBSE tutors, so ask early. In ISC, CISCE's theory paper sits alongside practicals and a
    project, and examiners look for reasoning spelled out rather than a one-line reason. IB chemistry, SL or HL, is
    built on two linked themes, structure and reactivity; the investigation is the student's alone, and a tutor can
    only ask questions about it. IGCSE sciences come as Core or Extended papers, and anyone joining CBSE Class 11
    afterwards usually needs to firm up mole work and atomic structure first; read the
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> comparison for
    how the tiers work. If no specialist can travel to you, combine an online specialist with a local tutor who
    marks written answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-fees">What do chemistry home tutors in Thiruvananthapuram charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor fixes their
    own rate, which tends to rise for entrance work and for longer experience, and
    depends too on the evening journey and on sessions per week. The same tutor may charge less online. All fees are
    shown before the demo; see the <a href="{{ url('/blog/home-tuition-fees-thiruvananthapuram') }}">Thiruvananthapuram
    fees guide</a> for more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tvmc-go">How do you get going?</h2>
  <p>
    Share the class and board, the exam with the highest stakes, the branch costing most marks, your neighbourhood
    and the evenings you have free. You get two or three chemistry tutors, each with a fee, and one gives a free
    demo class; a poor fit gets a second demo, and changing tutor later costs nothing. When no one suitable can
    travel to you, an online or mixed plan is the fallback. Our office is in Sector 66, Gurugram, and lessons run
    online India-wide; the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a>
    page and the <a href="{{ url('/blog/thiruvananthapuram-tuition-guide') }}">Thiruvananthapuram tuition guide</a>
    add more.
  </p>
  <p>
    City-based chemistry teachers looking for local students can check the
    <a href="{{ url('/tuition-jobs/thiruvananthapuram') }}">Thiruvananthapuram tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
