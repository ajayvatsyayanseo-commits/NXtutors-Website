{{--
  Long-form guide for the "science home tutor Bhopal" page (Classes 6 to 10,
  CBSE and ICSE, MP Board in general terms). Byline in config: Aaditya
  Kashyap; role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/bhopal-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi and Faridabad science
  pages. The MP Board (Board of Secondary Education, Madhya Pradesh) is
  described in general terms only, with no exam pattern. No school,
  hospital, society, mall or people's names, no distances or travel times,
  only the allowed fee sentence.

  Area links render only when that Bhopal area page exists and is active.
--}}
@php
  $bpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $bpA = function (string $slug, string $label) use ($bpAreaSlugs) {
      return in_array($slug, $bpAreaSlugs, true)
          ? '<a href="' . e(url('/city/bhopal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide bhs-guide" aria-labelledby="bhsGuideTitle">
  <h2 id="bhsGuideTitle">Science home tutor in Bhopal for Classes 6 to 10: three sciences, one tutor, and a weekday slot that holds</h2>

  <p class="nx-guide__lede">
    Up to Class 10, science is really three subjects sharing one timetable slot. A child who can recite a biology
    definition may still freeze at a physics numerical, and one who balances equations easily may lose marks on an
    unlabelled diagram. A good science tutor in Bhopal notices which strand is slipping, teaches from the book your
    child's board prescribes, and turns up at the same after-school hour whether you live in a BHEL sector or on the
    slopes of Idgah Hills. NXTutors sends two or three science tutors who fit, with each fee shown in advance, and the
    first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bhs-stage">Stage by stage</a> ·
    <a href="#bhs-units">Class 10 units</a> ·
    <a href="#bhs-school">School-only topics</a> ·
    <a href="#bhs-nine">The new Class 9 book</a> ·
    <a href="#bhs-boards">MP Board and ICSE</a> ·
    <a href="#bhs-where">Six localities</a> ·
    <a href="#bhs-year">The board year</a> ·
    <a href="#bhs-demo">During the demo</a> ·
    <a href="#bhs-fees">Fees</a> ·
    <a href="#bhs-go">First step</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bhs-stage">What should a science tutor build at each stage from Class 6?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. The table shows how the tutor's job shifts
    from year to year, and the sign that tells a parent it is going well.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition in Bhopal from Class 6 to Class 10: the book in use, the tutor's main job, and a sign of progress</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Book or board</th><th scope="col">The tutor's main job</th><th scope="col">A sign it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 and 7</td><td>NCERT <em>Curiosity</em> (CBSE)</td><td>Turn each activity into a correct sentence and a labelled sketch</td><td>Your child uses the scientific word unprompted</td></tr>
      <tr><td>Class 8</td><td>CBSE or ICSE school books</td><td>Introduce units, word equations and the first numericals</td><td>No numerical answer is left without its unit</td></tr>
      <tr><td>Class 9</td><td>NCERT <em>Exploration</em> (CBSE)</td><td>Close gaps in motion, matter and the cell before they widen</td><td>Motion graphs read without help</td></tr>
      <tr><td>Class 10</td><td>CBSE board paper</td><td>Practise application questions and answer length</td><td>Timed sections finished with answers matched to marks</td></tr>
      <tr><td>ICSE Classes 9 and 10</td><td>CISCE; school-chosen books</td><td>Prepare three separate papers</td><td>Definitions written word-perfect</td></tr>
      <tr><td>MP Board</td><td>Board of Secondary Education, Madhya Pradesh</td><td>Teach from the prescribed book, in the medium of the exam</td><td>Practice set in the style of the board's own papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until Class 10, one tutor for all three sciences is usually right, because a single person can spot when a physics
    mark is really being lost to weak algebra. See the national <a href="{{ url('/science-home-tutor') }}">science home
    tutor</a> page, and the class pages for <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-units">Where are the marks in the CBSE Class 10 science paper?</h2>
  <p>
    The written board exam is three hours long and out of 80. The school adds 20 internal marks in four equal parts:
    periodic assessment, multiple assessment, portfolio, and subject enrichment through practical work. By unit, the
    80 break down like this:
  </p>
  <ul>
    <li><strong>Chemical Substances, 25 marks.</strong> Reactions, acids, bases and salts, metals and carbon compounds: balanced equations every week.</li>
    <li><strong>World of Living, 25 marks.</strong> Life processes, control, reproduction and heredity: labelled diagrams and precise terms.</li>
    <li><strong>Effects of Current, 13 marks.</strong> Circuits and numericals with units on every line.</li>
    <li><strong>Natural Phenomena, 12 marks.</strong> Light and the eye, where every ray diagram needs its arrows.</li>
    <li><strong>Our Environment, 5 marks.</strong> Short, factual answers.</li>
  </ul>
  <p>
    Looked at by strand, biology is worth 30 marks and physics and chemistry 25 each. The 2026-27 sample paper has 39
    questions: 20 of one mark, including assertion–reason items; six of two marks; seven of three; three case- or
    source-based questions of four; and three long answers of five. Half the paper tests knowledge and understanding,
    30% application, and 20% analysis and evaluation, so a child who only memorises notes is ready for half the
    questions at most. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> work
    through every chapter, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page
    describes how a tutor plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-school">Which Class 10 science topics does only the school assess?</h2>
  <p>
    For 2026-27, three topics are left to formative assessment in school and do not appear on the board paper: the
    electric motor, electromagnetic induction and the generator; evolution; and the periodic classification of
    elements. They still deserve proper teaching, since internal marks depend on them and Class 11 returns to them, but
    not during the weeks of board revision. The curriculum lists 14 experiments, and board questions are built around
    them, which makes the practical file worth revising too.
  </p>
  <p>
    Every CBSE Class 10 student sits the main exam. A second, optional sitting allows eligible students to try to
    improve their result in up to three subjects, and science is allowed. No 2027 dates are out yet, so keep an eye on
    cbse.gov.in and plan for the main exam. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> sets out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-nine">Why does Class 9 science need its own plan this session?</h2>
  <p>
    CBSE's 2026-27 curriculum for Class 9 follows NCERT's new textbook, <em>Exploration</em>. The year's exam stays at 80
    marks with 20 internal, spread over four units: Matter: its nature and behaviour carries 27; World of living 25;
    Motion, force, work and sound 23; and Earth as a system 5. Hand-me-down notes from an older sibling follow the
    previous book, so a tutor should plan from the new chapters. The
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page goes into more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-boards">What changes for MP Board and ICSE science students?</h2>
  <h3>MP Board</h3>
  <p>
    Many Bhopal children study under the Board of Secondary Education, Madhya Pradesh, which sets its own syllabus and
    Class 10 examination. We keep our advice about it general and point families to the board's own website for any
    exam detail. In practice, tell us the class and the medium of instruction. A child who writes science in Hindi
    needs a tutor who uses the same terms in Hindi that the textbook uses, so that answers in the exam match what was
    practised. A CBSE plan applied without change to a state-board student usually wastes time.
  </p>
  <h3>ICSE</h3>
  <p>
    CISCE examines ICSE Class 10 science as three separate papers, Physics, Chemistry and Biology, each with internal
    assessment as well as theory. ICSE schools choose their own textbooks within the CISCE syllabus, so the tutor
    should work from the books your child brings home and from CISCE specimen papers rather than an NCERT plan.
    ICSE-experienced science tutors are fewer than CBSE ones, so ask early, and consider online lessons if nobody close
    by is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-where">How does an after-school science slot work in six Bhopal localities?</h2>
  <p>
    For a younger child the lesson usually falls between school and dinner, so a short and predictable trip matters
    most. These six localities, from five parts of the city, show how the arrangements vary. Find tutors near you on
    our <a href="{{ url('/city/bhopal') }}">Bhopal page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>After-school science tuition in six Bhopal localities: the homes and what to arrange for the tutor</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Arranging the visit</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $bpA('shahpura', 'Shahpura') !!}</td><td>Colonies of independent houses and smaller apartment buildings around Shahpura Lake</td><td>Doorstep visits or a single building gate; tutors from Arera Colony, Kolar Road and Bawadiya Kalan can come, and the evening rush towards Hoshangabad Road is worth avoiding</td></tr>
      <tr><td>{!! $bpA('tt-nagar', 'TT Nagar') !!}</td><td>Government quarters, independent houses and flats around New Market, south of the Upper Lake</td><td>Quarters go by number rather than street, so send clear directions; parking near the market is limited, and most tutors come by two-wheeler</td></tr>
      <tr><td>{!! $bpA('saket-nagar', 'Saket Nagar') !!}</td><td>Independent houses and apartments beside the BHEL township</td><td>Alkapuri station on the Orange Line and Rani Kamlapati station are close, so a tutor can come by metro and finish on foot or by auto</td></tr>
      <tr><td>{!! $bpA('katara-hills', 'Katara Hills') !!}</td><td>Planned communities, apartments, villas and new plotted colonies</td><td>Gate registration is common; public transport is thin, so tutors from Katara Hills, Bagmugaliya or Awadhpuri are easiest to schedule</td></tr>
      <tr><td>{!! $bpA('indrapuri', 'Indrapuri') !!}</td><td>Mostly independent houses, with two-bedroom flats and newer apartments, in well-known sectors</td><td>Doorstep visits with easy parking; tutors from Piplani, Govindpura and Sonagiri are close</td></tr>
      <tr><td>{!! $bpA('idgah-hills', 'Idgah Hills') !!}</td><td>Houses, apartments and builder floors on a hill above the old city</td><td>Roads climb and wind, so tutors ride or drive; share the building name and a landmark before the first class</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-year">How should a science tutor pace the Class 10 year?</h2>
  <ol>
    <li><strong>First term.</strong> Each chapter as the school teaches it, closed with a short section from the official sample paper and marked against CBSE's scheme.</li>
    <li><strong>Second term.</strong> Mixed-chapter practice, with the heavier units, Chemical Substances and World of Living, revisited every fortnight.</li>
    <li><strong>Winter.</strong> Full three-hour papers, one strand reviewed closely each week.</li>
    <li><strong>Pre-boards onward.</strong> Older board papers for volume, while remembering that recent sample papers carry more competency-based questions, and a short list of repeated errors read every few days.</li>
  </ol>
  <p>
    CBSE publishes sample papers with marking schemes on cbseacademic ahead of the exam; they remain the surest guide
    to the current design.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-demo">What should you look for during the free science demo?</h2>
  <ul>
    <li><strong>Exact words.</strong> Does the tutor correct "food pipe" to "oesophagus"?</li>
    <li><strong>State symbols.</strong> Are (s), (aq) and (g) added to equations where a question asks for them?</li>
    <li><strong>Arrows on rays.</strong> Does every ray diagram have them, with virtual rays dotted?</li>
    <li><strong>Heredity shown in full.</strong> Is the Punnett square drawn rather than the ratio simply stated?</li>
    <li><strong>Length matched to marks.</strong> Three distinct points for a three-mark answer, and a diagram or equation with four or five points for a five-mark one.</li>
  </ul>
  <p>
    Ask for an ordinary lesson on the current chapter, not a showcase. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> has more
    questions. If the match is wrong, we set up a demo with another tutor from the shortlist, and a later change of
    tutor is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-fees">What does a science home tutor in Bhopal charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee. For Classes 6 to 10, board-year help usually costs more than middle-school support, and the trip to your
    locality and the number of weekly lessons also count. You see every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bhs-go">What is the first step?</h2>
  <p>
    Send us the class, board and medium, the strand that is causing trouble, your locality with a sector, quarter or
    landmark, and the afternoons that work. We reply with two or three science tutors and their fees, and you choose
    one for a free demo class. Where no one suitable can travel at your time, we suggest online or mixed lessons.
    NXTutors is based in Sector 66, Gurugram, and also teaches online across India.
  </p>
  <p>
    Science teachers who live in Bhopal and want students nearby can browse open requests on the
    <a href="{{ url('/tuition-jobs/bhopal') }}">Bhopal tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
