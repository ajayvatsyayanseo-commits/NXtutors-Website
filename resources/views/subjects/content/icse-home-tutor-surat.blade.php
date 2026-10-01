{{--
  Board page for "ICSE home tutor Surat" (CISCE: ICSE Class 10, ISC Class 12).
  Authors: Abhinandan Tiwary (role: Class 10 CBSE and ICSE maths), Aaditya
  Kashyap (role: CBSE and ICSE science) and Ajay Vatsyayan (role: IB, IGCSE and
  ISC maths). No anecdotes, years or results are claimed for any of them. No
  schools or societies are named.

  Board facts are reworded from the Gurgaon board hub (icse-home-tutor-gurgaon),
  which cites cisce.org (read 1 Oct 2026): ICSE Regulations (Group I
  compulsory; Group II two or three subjects; 80% external / 20% internal;
  Group III one subject, 50/50), ICSE Mathematics (one 3-hour 80-mark paper +
  20 internal, at least two assignments, teacher and external examiner), ICSE
  Physics, Chemistry and Biology (each a 2-hour 80-mark paper + 20 practical
  internal), Analysis of Pupil Performance, ISC Regulations (English + three to
  five electives, up to six subjects; no change after 15 September of Class
  XI; Class XII subjects must be studied in XI; promotion 35% in four subjects
  incl. English, 75% attendance; grades 1-9; practicals compulsory; Physics not
  with Engineering Science) and ISC Mathematics (80 theory + 20 project). No
  exam dates.
  Local detail only from the Surat city hub view (four boards; GSEB and its
  media; ICSE/ISC long answers, wide syllabus, prescribed literature, getting
  through everything in time, cycling back, timed answers, project work;
  Navratri and Diwali), surat-research.json, surat-zone-guides.json and
  zones/surat.json. Area links render only for active Surat areas. Fee wording
  is the approved sentence. FAQs render from faqs/icse-home-tutor-surat.php.
--}}
@php
  $icsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $icsA = function (string $slug, string $label) use ($icsSlugs) {
      return in_array($slug, $icsSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="icsGuideTitle">
  <h2 id="icsGuideTitle">ICSE and ISC home tutors in Surat: getting through a wide syllabus in time</h2>

  <p class="nx-guide__lede">
    In Surat, ICSE is one of four boards families ask us about, and its particular struggle is time. Answers are long,
    the syllabus is wide, English carries prescribed literature, and project work runs alongside everything else, so
    the student who falls behind in October rarely catches up by February without help. A good ICSE tutor cycles back
    over earlier chapters, sets timed written answers and keeps project deadlines visible. This page explains how
    CISCE's two examinations, the ICSE in Class 10 and the ISC in Class 12, are organised, how they compare with GSEB,
    which subjects need the most help and how tutors reach each zone of the city. The ICSE sections are by Abhinandan
    Tiwary, who writes on Class 10 CBSE and ICSE maths, and Aaditya Kashyap, who writes on CBSE and ICSE science; the
    ISC sections are by Ajay Vatsyayan, who teaches IB, IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ics-groups">Groups and weighting</a> ·
    <a href="#ics-papers">Maths and science</a> ·
    <a href="#ics-time">A year in time</a> ·
    <a href="#ics-gseb">ICSE and GSEB</a> ·
    <a href="#ics-isc">ISC rules</a> ·
    <a href="#ics-subjects">Subjects</a> ·
    <a href="#ics-zones">Zones</a> ·
    <a href="#ics-demo">The demo</a> ·
    <a href="#ics-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ics-groups">Subject groups and what they mean for planning</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>ICSE (Class 10) groups under the CISCE regulations</caption>
    <thead>
      <tr><th scope="col">Group</th><th scope="col">Subjects</th><th scope="col">Split</th><th scope="col">Planning implication</th></tr>
    </thead>
    <tbody>
      <tr><td>I, all compulsory</td><td>English; a second language; History, Civics and Geography</td><td>80 exam, 20 internal</td><td>Regular written practice all year</td></tr>
      <tr><td>II, two or three</td><td>Such as Mathematics, Science, Economics, Commercial Studies, Environmental Science, a modern foreign or classical language</td><td>80 exam, 20 internal</td><td>Method and practice built week by week</td></tr>
      <tr><td>III, one</td><td>An applied subject, Computer Applications or Art for example</td><td>Half exam, half internal</td><td>Project work kept on schedule</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-papers">The maths and science papers</h2>
  <p>
    ICSE Mathematics is a single paper of three hours worth 80 marks; another 20 come from at least two internal
    assignments, which the subject teacher and an external examiner mark independently. The syllabus runs from algebra,
    geometry and trigonometry to commercial topics such as banking and shares. Each step of working earns marks, so a
    tutor must insist on it.
  </p>
  <p>
    Science is three separate papers: Physics, Chemistry and Biology, two hours and 80 marks each, plus 20 internal
    marks apiece for practical work. A science tutor needs to teach all three with equal confidence, or the family
    needs a plan for the weakest. CISCE also publishes, subject by subject, an Analysis of Pupil Performance after
    each exam session, listing the errors examiners saw; a tutor who uses it alongside specimen papers knows where
    marks are really lost.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-time">An ICSE year, planned against the clock</h2>
  <p>
    CISCE lays each subject's syllabus across Classes 9 and 10, so a chapter from Class 9 can return in the board
    paper. Planning the board year backwards keeps everything in reach:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 10 ICSE year in Surat</caption>
    <thead>
      <tr><th scope="col">Months</th><th scope="col">Focus</th><th scope="col">Watch out for</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of the session to summer</td><td>Close Class 9 gaps; set up a chapter list with revision dates</td><td>Leaving older chapters off the list</td></tr>
      <tr><td>The first term</td><td>New chapters, one older chapter revisited each week, a timed answer each session</td><td>Project and internal work slipping behind</td></tr>
      <tr><td>Navratri and Diwali</td><td>Fewer but fixed sessions; online if evenings are disrupted</td><td>Losing two or three weeks entirely</td></tr>
      <tr><td>Winter</td><td>Finish content, then specimen papers paper by paper</td><td>Spending all the time on one favourite subject</td></tr>
      <tr><td>Final stretch</td><td>Full papers under time, examiner-report errors, short corrections</td><td>New material instead of revision</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Within each session, the same pattern helps: the student's own attempt at a few questions marked first, then new
    teaching, then one answer written to time. English and history answers should be written and marked at least
    every fortnight, because they are the papers that most reward practice and are most often left until late.
  </p>
  <p>
    The prescribed literature deserves its own word. Students need to know the set texts well enough to quote and
    refer to them from memory, and to write a structured answer about character, theme or language under time. That
    is a reading habit as much as a writing one, so a tutor should agree a reading schedule for the texts early in
    Class 9 rather than leaving them to the last term. For a student who studied in Gujarati medium in earlier
    classes, steady work on English expression pays off well beyond the English paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-gseb">ICSE beside GSEB, and switching after Class 10</h2>
  <p>
    Many Surat students study under GSEB, in Gujarati, English or another medium. In general terms, GSEB leads to one
    public examination at each stage from the state's prescribed textbooks, while ICSE spreads the marks across more
    separate papers, builds internal assessment into each, and asks for fuller written answers. A tutor whose students
    are mostly GSEB may teach the content well yet be new to CISCE's papers, so ask which ICSE papers they have taught.
  </p>
  <p>
    After Class 10, a student can continue to ISC, move to GSEB for Classes 11 and 12, or move to CBSE. Content carries
    over in every direction; textbooks, wording and paper style do not, so give the first month of tuition to the new
    board's books. Our <a href="{{ url('/cbse-home-tutor-surat') }}">CBSE home tutors in Surat</a> page covers that
    route.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-isc">ISC rules worth knowing early</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Rules from the ISC regulations and what they mean for families</caption>
    <thead>
      <tr><th scope="col">Rule</th><th scope="col">What it means</th></tr>
    </thead>
    <tbody>
      <tr><td>English plus three to five electives, six subjects at most</td><td>Choose electives with the stream and later plans in mind</td></tr>
      <tr><td>No change of subject after 15 September of the Class 11 registration year</td><td>If a subject is going badly, get help in the first term</td></tr>
      <tr><td>Class 12 subjects must have been studied in Class 11</td><td>No adding a subject in the final year</td></tr>
      <tr><td>Promotion needs 35% in four subjects including English, and 75% attendance</td><td>Class 11 counts; it is not a rest year</td></tr>
      <tr><td>Practical exams are compulsory where a subject has them; grades run 1 to 9</td><td>Practical files and skills need regular time</td></tr>
      <tr><td>Some pairings are barred, such as Physics with Engineering Science</td><td>Check combinations before registering</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ISC Mathematics has an 80-mark theory paper of three hours and 20 marks of project work in each year; see our
    <a href="{{ url('/isc-maths-tutor') }}">ISC maths tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-subjects">Subjects and our Surat pages</h2>
  <ul>
    <li><strong>ICSE and ISC maths:</strong> <a href="{{ url('/maths-home-tutor-surat') }}">maths home tutors in Surat</a>, and our <a href="{{ url('/blog/icse-class-10-maths-boards') }}">ICSE Class 10 maths guide</a>.</li>
    <li><strong>ICSE Physics, Chemistry and Biology:</strong> <a href="{{ url('/science-home-tutor-surat') }}">science home tutors in Surat</a>.</li>
    <li><strong>ISC sciences:</strong> <a href="{{ url('/physics-home-tutor-surat') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-surat') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-surat') }}">biology</a>; with entrance exams, <a href="{{ url('/jee-home-tutor-surat') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-surat') }}">NEET</a> home tutors.</li>
    <li><strong>English language and literature:</strong> <a href="{{ url('/english-home-tutor-surat') }}">English home tutors in Surat</a>, particularly useful for students who studied in Gujarati medium earlier.</li>
    <li><strong>History, Civics and Geography, Commercial Studies, Economics:</strong> matched on request.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-zones">Bringing an ICSE tutor to your home</h2>
  <p>
    Surat has fewer ICSE specialists than GSEB or CBSE teachers, so the route to your door narrows the list quickly.
    The metro is not yet open, which leaves two-wheelers, autos and Sitilink buses. On the western
    bank, <a href="{{ url('/city/surat/zone/adajan-pal-rander') }}">Adajan, Pal and Rander</a> is best served by a
    tutor who already lives west of the Tapi; {!! $icsA('pal', 'Pal') !!} societies want the tutor's name at the gate,
    while {!! $icsA('rander', 'Rander') !!}'s old lanes need a landmark and a place to park a two-wheeler.
    <a href="{{ url('/city/surat/zone/central-surat-athwa-ghod-dod-road') }}">Central Surat, Athwa and Ghod Dod
    Road</a> sits in the middle of the city; in {!! $icsA('nanpura', 'Nanpura') !!}'s narrow lanes a tutor on a
    two-wheeler or in an auto is easier than one in a car.
  </p>
  <p>
    To the south-west, <a href="{{ url('/city/surat/zone/piplod-vesu-dumas-road') }}">Piplod, Vesu and Dumas Road</a>
    has Gaurav Path's BRTS lane through {!! $icsA('piplod', 'Piplod') !!}, which lets bus-travelling tutors reach you.
    In <a href="{{ url('/city/surat/zone/udhna-althan-pandesara') }}">Udhna, Althan and Pandesara</a>, register the
    tutor once at the gate desk in {!! $icsA('bhatar', 'Bhatar') !!} societies, and time lessons after shift traffic.
    In <a href="{{ url('/city/surat/zone/katargam-varachha-sarthana') }}">Katargam, Varachha and Sarthana</a>,
    {!! $icsA('mota-varachha', 'Mota Varachha') !!} sits on the northern edge, where families often pair a nearby tutor
    with an online specialist for senior papers. If you take that route for ICSE, make sure the online tutor can read
    your child's handwriting as it happens, through a camera angled at the notebook or a writing tablet, because so
    many marks depend on how the answer is set out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-demo">What to ask in the free demo</h2>
  <ol>
    <li><strong>Correct a real answer:</strong> hand over a marked school test; a tutor suited to ICSE fixes the missing steps, the absent units, the unlabelled diagram and the vague sentence.</li>
    <li><strong>Which papers?</strong> Ask which ICSE or ISC papers they have taught recently, and whether they use the Analysis of Pupil Performance.</li>
    <li><strong>How will older chapters come back?</strong> Look for a written revision plan with dates.</li>
    <li><strong>Range across the sciences:</strong> ask them to explain a short physics idea, then draw and label a biology diagram.</li>
    <li><strong>Projects:</strong> how will they keep internal work on schedule while your child does it?</li>
    <li><strong>Festival weeks:</strong> what is the plan for Navratri and Diwali evenings?</li>
  </ol>
  <p>
    The shortlist has two or three tutors, every fee is visible before the demo, and moving to another tutor later
    costs nothing. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their
    profile goes live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ics-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For ICSE and ISC, the
    class, the number of papers and whether the tutor must cross the river move the fee. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-surat') }}">home
    tuition fees in Surat</a>.
  </p>
  <p>
    Send us the examination (ICSE or ISC), class, subjects, your locality and the evenings that suit you, and we
    arrange a <a href="{{ url('/demo-class') }}">free demo</a> as the first class. For a fuller look at how CISCE runs both exams, see our
    <a href="{{ url('/icse-home-tutor-gurgaon') }}">ICSE and ISC guide for Gurgaon</a>. Browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, every area on the <a href="{{ url('/city/surat') }}">Surat tutors
    page</a>, or <a href="{{ url('/tuition-jobs/surat') }}">tuition jobs in Surat</a>.
  </p>
  </section>

  </div>
</article>
