{{--
  Long-form guide for the "chemistry home tutor Dehradun" page (Classes 11 and
  12, NEET and JEE alongside coaching, ISC/IB/IGCSE, the Uttarakhand board in
  general terms). Byline in config: NXTutors Academic Team. Local facts come
  only from database/seo-content/areas/dehradun-research.json (zone_facts and
  area "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter-wise marks, branch totals 23/14/33, 33 questions in five sections,
  no calculators or log tables, recall share, topics out of the syllabus and
  assessed only in school, practical scheme 8/8/6/4/4, KMnO4 titration against
  oxalic acid or Mohr's salt with the standard solution weighed by the
  student, one main Class 12 exam), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern), jee-preparation-gurgaon-coaching-or-home-tutor (JEE
  Main 2026 pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge science
  tiers). IB chemistry themes as already stated on the Delhi, Faridabad and
  Patna pages. Uttarakhand Board of School Education: name, Intermediate
  examination, syllabus and question banks from https://ubse.uk.gov.in/
  (fetched 3 Oct 2026); no pattern given. No coaching institute, school,
  college, society or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Dehradun area page exists and is active.
--}}
@php
  $ddAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ddA = function (string $slug, string $label) use ($ddAreaSlugs) {
      return in_array($slug, $ddAreaSlugs, true)
          ? '<a href="' . e(url('/city/dehradun/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ddc-guide" aria-labelledby="ddcGuideTitle">
  <h2 id="ddcGuideTitle">Chemistry home tutor in Dehradun: three branches, two or three exams, and one weekly hour that ties them together</h2>

  <p class="nx-guide__lede">
    Chemistry is the subject where a Dehradun student in Class 11 or 12 most often feels that a lot is happening and
    not much is sticking. Coaching handouts pile up, the school runs at its own speed, and the board paper wants
    written reasons and balanced equations that nobody has time to rehearse. A home chemistry tutor can pull those
    strands into one session a week: what was taught, whether it was understood, and how each exam wants it written.
    NXTutors suggests two or three chemistry tutors who match the syllabus your child follows and can reach your
    locality. You compare their fees before meeting anyone, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ddc-exams">Three exams</a> ·
    <a href="#ddc-chapters">Chapter marks</a> ·
    <a href="#ddc-cut">Dropped topics</a> ·
    <a href="#ddc-hour">The weekly hour</a> ·
    <a href="#ddc-lab">Practical</a> ·
    <a href="#ddc-ubse">UBSE</a> ·
    <a href="#ddc-near">Six localities</a> ·
    <a href="#ddc-other">ISC, IB, IGCSE</a> ·
    <a href="#ddc-xi">Class 11 first</a> ·
    <a href="#ddc-fee">Fees</a> ·
    <a href="#ddc-match">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ddc-exams">What does each exam want from your child's chemistry?</h2>
  <p>
    In Class 12 a student may be preparing for the board paper and one or two entrance exams at once, and each counts
    chemistry in its own way:
  </p>
  <ul>
    <li><strong>CBSE Class 12 (043):</strong> 33 compulsory questions in a three-hour, 70-mark theory paper, with the practical exam supplying another 30. Marks go to written reasons, balanced equations and tidy numericals.</li>
    <li><strong>NEET (UG), as held in 2026:</strong> 45 of the 180 questions, worth 180 of 720 marks, answered on paper. It rewards quick, exact recall of NCERT statements.</li>
    <li><strong>JEE Main 2026, Paper 1:</strong> 25 of the 75 questions, twenty multiple-choice and five with a numerical answer. It rewards reaction mechanisms and multi-stage physical chemistry.</li>
    <li><strong>UBSE Intermediate:</strong> syllabus and paper set by the Uttarakhand Board of School Education; follow whatever its current scheme says on ubse.uk.gov.in.</li>
  </ul>
  <p>
    In 2026 both NTA exams gave four marks for a right answer and deducted one for a wrong one. NTA issues the pattern
    again every year, so check the newest bulletin. For more depth, read the
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a>, the
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry guide by branch</a> and our
    <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page; for the medical entrance as a
    whole, see the <a href="{{ url('/neet-home-tutor-dehradun') }}">NEET home tutor in Dehradun</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-chapters">How many marks does each CBSE Class 12 chemistry chapter carry?</h2>
  <p>
    CBSE assigns chemistry marks chapter by chapter, which makes a year plan straightforward. For 2026-27, with the
    design unchanged from last session, the ten chapters sort like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: chapters grouped by branch with their marks, and what to practise</caption>
    <thead>
      <tr><th scope="col">Branch (total)</th><th scope="col">Chapters and marks</th><th scope="col">What to practise</th></tr>
    </thead>
    <tbody>
      <tr><td>Physical (23)</td><td>Chemical Kinetics (7), Solutions (7), Electrochemistry (9)</td><td>Conductance, colligative and rate-law numericals with units on every line</td></tr>
      <tr><td>Inorganic (14)</td><td>Coordination Compounds (7), the d- and f-Block Elements (7)</td><td>One clear reason for each trend; naming, isomers and bonding sketches</td></tr>
      <tr><td>Organic (33)</td><td>Amines (6), Alcohols, Phenols and Ethers (6), Haloalkanes and Haloarenes (6), Biomolecules (7), Aldehydes, Ketones and Carboxylic Acids (8)</td><td>Conversion chains, distinguishing tests, substitution against elimination</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper runs three hours across five lettered sections, a few questions offer an internal choice, and neither
    calculators nor log tables are allowed. Roughly two-fifths of the marks test recall and understanding; the rest ask
    the student to apply, analyse or evaluate. A fuller treatment is in our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry
    guide</a>, and the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page sets out
    a board-year plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-cut">What has left the board paper, and what might an entrance exam still ask?</h2>
  <p>
    For 2026-27 the Class 12 syllabus has lost the solid state completely, along with the p-block groups numbered 15
    to 18. A second list stays in the classroom yet never reaches the board paper, because the school marks it:
    surface chemistry, the isolation of elements from ores, polymers, and chemistry in everyday life.
  </p>
  <p>
    Coaching students need care here. NTA publishes the entrance syllabi separately, and some content the board has
    removed, including parts of the p-block, may still be examined. Check the official entrance list before crossing
    anything out, and use the board's list only for board revision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-hour">How should the weekly home hour run beside a coaching batch?</h2>
  <p>
    The home session should trail the coaching chapter rather than overtake it. A steady hour has four parts:
  </p>
  <ol>
    <li><strong>Ten questions from this week's chapter.</strong> Short, oral, straight from NCERT, to show what was actually understood in the batch.</li>
    <li><strong>One slow numerical.</strong> In solutions, electrochemistry or kinetics, the student solves aloud while the tutor watches for the lost unit or the misplaced power of ten.</li>
    <li><strong>The organic map.</strong> One sheet linking each functional group to the next, from alcohols through carbonyl compounds and acids to amines, redrawn from memory and checked against the textbook. Conversions become routes rather than lists.</li>
    <li><strong>Two board-style "give reasons" answers,</strong> written and corrected before the tutor leaves, so the Class 12 paper keeps pace with entrance work.</li>
  </ol>
  <p>
    Inorganic chemistry lives inside step one: NEET especially pays for the exact NCERT wording, so quick-fire questions
    that also demand the reason behind each trend do more than long rereading.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-lab">The 30-mark practical: what can be prepared at home?</h2>
  <p>
    More than families tend to expect. Titration and salt analysis carry 8 marks each, an experiment based on theory
    content 6, and the project and the record with viva 4 each. This session's titration uses permanganate against
    oxalic acid or Mohr's salt (ferrous ammonium sulphate), and each student weighs and prepares the standard solution
    personally.
  </p>
  <p>
    The chemicals stay at school, but a tutor at home can rehearse how molarity follows from the mass your child
    weighed, a neat table of burette readings leading to the result, the logic of salt analysis from preliminary to confirmatory
    tests, a project topic the student can genuinely manage, and the viva questions examiners like, for instance why
    permanganate titrations get by without an added indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-ubse">Studying chemistry on the Uttarakhand board?</h2>
  <p>
    The Uttarakhand Board of School Education conducts the Intermediate examination and posts its syllabus, question
    banks and model answer sheets on ubse.uk.gov.in. Because it sets and updates its own scheme, we describe no paper
    here. Look for a tutor who teaches from the prescribed book, explains in the language your child answers in, and
    uses the board's own question banks; if NEET or JEE is also planned, the same tutor should add NCERT-level recall.
    The <a href="{{ url('/uttarakhand-board-tutor-dehradun') }}">Uttarakhand board tutor in Dehradun</a> page covers
    every subject on the board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-near">An evening chemistry class in six Dehradun localities</h2>
  <p>
    These six localities, on the north side of the city, along Sahastradhara Road and near Haridwar Road, show how
    much the practical arrangements vary. Browse tutors by locality on our
    <a href="{{ url('/city/dehradun') }}">Dehradun page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening chemistry tuition in six Dehradun localities: the homes, who can reach them easily, and a timing tip</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Easiest tutors to match</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $ddA('karanpur', 'Karanpur') !!}</td><td>Builder floors and flats above or behind shops in a lively student area</td><td>Many tutors already live in and around Karanpur</td><td>Start after the afternoon college traffic clears</td></tr>
      <tr><td>{!! $ddA('rajpur', 'Rajpur') !!}</td><td>Houses and villas on the slopes, flats in newer buildings</td><td>Tutors from Jakhan, Kishanpur or Malsi rather than the old centre</td><td>Earlier in winter, when the hillside gets dark and cold</td></tr>
      <tr><td>{!! $ddA('malsi', 'Malsi') !!}</td><td>Newer gated complexes with some houses and villas</td><td>Tutors coming up from Jakhan and the Rajpur Road side</td><td>Weekdays are easier than weekends, when traffic heads up the valley</td></tr>
      <tr><td>{!! $ddA('sahastradhara-road', 'Sahastradhara Road') !!}</td><td>Apartments in large numbers, plus builder floors and houses</td><td>Tutors from Kishanpur, Canal Road or Jakhan</td><td>Before or well after office-closing time on the lower stretch</td></tr>
      <tr><td>{!! $ddA('race-course', 'Race Course') !!}</td><td>Plots and independent homes, some two- and three-bedroom flats</td><td>Tutors from Dalanwala, Nehru Colony or Karanpur</td><td>Away from office hours at the junctions towards Haridwar Road</td></tr>
      <tr><td>{!! $ddA('nehru-colony', 'Nehru Colony') !!}</td><td>Houses, flats and villas around a busy market</td><td>Tutors from many parts of the city, as Tyagi Road links it with the ISBT</td><td>Share an exact lane landmark; market streets peak in the evening</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In the weeks before the pre-boards, if a route turns unreliable in monsoon rain, moving one weekly visit online
    protects the revision plan. The <a href="{{ url('/city/dehradun/zone/haridwar-road') }}">Haridwar Road zone
    guide</a> and the <a href="{{ url('/city/dehradun/zone/saharanpur-road-clement-town') }}">Saharanpur Road and
    Clement Town zone guide</a> cover the southern side of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-other">ISC, IB or IGCSE chemistry: can you find a specialist?</h2>
  <dl>
    <dt><strong>ISC</strong></dt>
    <dd>Besides the theory paper, CISCE marks practical and project work, and examiners look for a chain of reasoning, not one memorised sentence.</dd>
    <dt><strong>IB Diploma</strong></dt>
    <dd>Taught at SL or HL, with the whole course arranged around two ideas: structure, and reactivity. The internal investigation belongs to the student from question to conclusion; a tutor's part is limited to asking about it.</dd>
    <dt><strong>Cambridge IGCSE</strong></dt>
    <dd>Entries are made at Core or Extended tier, a choice the school confirms. How Cambridge differs from Edexcel is covered in our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">IGCSE board comparison</a>.</dd>
  </dl>
  <p>
    Fewer tutors teach these courses than CBSE, so raise the course in your first message. Where nobody suitable lives
    on your side of the valley, an online specialist for the course content plus a nearby tutor to check written work
    is a workable pair.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-xi">Why fix chemistry in Class 11 rather than Class 12?</h2>
  <p>
    Class 12 chemistry leans on three Class 11 ideas: moles, equilibrium and the opening organic chapters. They resurface
    in solutions, in electrochemistry and in every conversion, and NEET and JEE test them too. Securing them during
    Class 11 is generally cheaper than a rescue in the board year. Our
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page explains how we match for
    that year, and the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page covers
    other cities.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-fee">What does a chemistry home tutor in Dehradun cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names a rate,
    which usually climbs with the target exam and with how long the tutor has taught for it; the evening trip to your locality
    and the number of weekly sessions also matter. Online lessons with the same tutor may be priced lower, and every
    fee is visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ddc-match">What should your chemistry request include?</h2>
  <p>
    Send the class, the board, the main exam, the branch that costs your child marks, the coaching days, your locality
    with a landmark, and which evenings are open. You receive two or three chemistry tutors with fees and choose whom to meet
    at a free demo. If the first choice is wrong, a second demo follows, and changing tutor later costs nothing. When no
    suitable tutor can reach you, we propose an online or part-online plan. NXTutors is based in Sector 66, Gurugram,
    and its tutors also teach online nationwide. Students taking chemistry with physics can also see the
    <a href="{{ url('/physics-home-tutor-dehradun') }}">physics home tutor in Dehradun</a> page.
  </p>
  <p>
    Chemistry teachers living in Dehradun can look through current student requests on the
    <a href="{{ url('/tuition-jobs/dehradun') }}">Dehradun tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
