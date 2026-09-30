{{--
  Long-form guide for the "chemistry home tutor Jaipur" page (Classes 11 and
  12, NEET and JEE, ISC/IB/IGCSE, Rajasthan board described generally). Byline
  in config: NXTutors Academic Team. Main theme: how a home tutor works beside
  NEET/JEE coaching (no institute names). Local facts come only from
  database/seo-content/areas/jaipur-research.json (zone_facts and area "about"
  texts, including students, colleges and coaching institutes near Pratap
  Nagar). Exam facts reuse the checked statements already used on the Delhi
  chemistry page and in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (chapter-wise marks, branch totals
  23/14/33, 33 questions in five sections, no calculators or log tables,
  recall share, topics out of the syllabus and assessed only in school,
  practical scheme 8/8/6/4/4, KMnO4 titration against oxalic acid or Mohr's
  salt with the standard solution weighed by the student),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern, 13
  languages), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026
  pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge science tiers).
  IB chemistry themes as already stated on the Delhi page. No RBSE pattern is
  given. No school, college, coaching institute, society, mall or people's
  names, no distances or travel times, only the allowed fee sentence.

  Area links render only when that Jaipur area page exists and is active.
--}}
@php
  $jpAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jpA = function (string $slug, string $label) use ($jpAreaSlugs) {
      return in_array($slug, $jpAreaSlugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide jpc-guide" aria-labelledby="jpcGuideTitle">
  <h2 id="jpcGuideTitle">Chemistry home tutor in Jaipur: keep school, coaching and the board paper moving in step</h2>

  <p class="nx-guide__lede">
    A Class 12 chemistry student with a coaching batch is usually following two different orders at once. School may
    be halfway through solutions while the batch has jumped to organic chemistry, and the board's written style drifts
    further away with every multiple-choice test. A chemistry home tutor in Jaipur is most useful as the person who
    joins those threads: filling what the batch skipped, checking what the student can actually write, and keeping
    the practical file on track. NXTutors sends two or three chemistry tutors who fit your child's course and
    locality, with every fee shown before you meet. The first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jpc-marks">Marks by chapter</a> ·
    <a href="#jpc-lists">Board list, entrance list</a> ·
    <a href="#jpc-tests">NEET and JEE</a> ·
    <a href="#jpc-branches">Branch by branch</a> ·
    <a href="#jpc-order">Two orders at once</a> ·
    <a href="#jpc-lab">The practical exam</a> ·
    <a href="#jpc-near">Six localities</a> ·
    <a href="#jpc-boards">RBSE, ISC, IB, IGCSE</a> ·
    <a href="#jpc-fees">Fees</a> ·
    <a href="#jpc-go">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jpc-marks">Where do the 70 theory marks sit in CBSE Class 12 chemistry?</h2>
  <p>
    In chemistry, CBSE fixes marks chapter by chapter rather than unit by unit. The theory paper (043) runs three
    hours for 70 marks, with 33 compulsory questions across Sections A to E and internal choice in some; calculators
    and log tables are not permitted. The 2026-27 sample paper keeps the previous design. Sorted from heaviest to
    lightest:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry chapters for 2026-27, ordered by theory marks, with the branch each belongs to</caption>
    <thead>
      <tr><th scope="col">Marks</th><th scope="col">Chapter</th><th scope="col">Branch</th></tr>
    </thead>
    <tbody>
      <tr><td>9</td><td>Electrochemistry</td><td>Physical</td></tr>
      <tr><td>8</td><td>Aldehydes, Ketones and Carboxylic Acids</td><td>Organic</td></tr>
      <tr><td>7 each</td><td>Solutions; Chemical Kinetics</td><td>Physical</td></tr>
      <tr><td>7 each</td><td>The d- and f-Block Elements; Coordination Compounds</td><td>Inorganic</td></tr>
      <tr><td>7</td><td>Biomolecules</td><td>Organic</td></tr>
      <tr><td>6 each</td><td>Haloalkanes and Haloarenes; Alcohols, Phenols and Ethers; Amines</td><td>Organic</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Added up, organic chemistry holds 33 marks, physical 23 and inorganic 14. Almost half the paper is therefore
    organic, and the single heaviest chapter, electrochemistry, is mostly numerical. About 40% of marks reward
    remembering and understanding; the rest ask for application, analysis or evaluation. The
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide for
    Class 12</a> works through each chapter, and the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-lists">Why do the board list and the entrance list differ?</h2>
  <p>
    For 2026-27, the solid state and Groups 15 to 18 of the p-block are out of the Class 12 syllabus altogether.
    Four more topics remain in the syllabus but are assessed only in school, never in the board paper: polymers,
    chemistry in everyday life, surface chemistry, and the isolation of elements from their ores.
  </p>
  <p>
    A coaching student should not read that list as permission to drop those chapters. NTA publishes the NEET and
    JEE Main syllabi separately, and material the board has removed, p-block chemistry among it, can still appear
    there. A tutor working beside coaching keeps a simple two-column list, board and entrance, so the student knows
    which chapters need written answers, which need only quick recall, and which need both. Class 12 also leans on
    Class 11 ideas such as the mole, equilibrium and the first organic chapters; the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page covers that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-tests">How much chemistry do NEET and JEE Main carry?</h2>
  <p>
    In 2026, NEET (UG) was a single pen-and-paper paper of 180 questions and 720 marks; chemistry had 45 questions,
    worth 180 marks. It was offered in 13 languages, Hindi and English among them, so a student who studied chemistry
    in Hindi could sit it in Hindi. JEE Main 2026 Paper 1 gave chemistry 25 of its 75 questions, 20 multiple-choice in
    Section A and 5 numerical-value in Section B. Both tests gave +4 for a correct response and −1 for a wrong one,
    and NTA confirms the pattern each year, so read the new bulletin.
  </p>
  <p>
    The two exams pull in different directions. NEET chemistry rewards fast, exact recall of NCERT statements,
    especially in inorganic and organic, while JEE asks for mechanisms traced step by step and multi-stage physical
    chemistry problems. See the <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET chemistry
    chapters that matter most</a>, the <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE
    chemistry guide</a>, the <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page and our
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or home tutor for NEET</a>
    comparison.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-branches">What should a home tutor add to coaching in each branch?</h2>
  <p>
    Batch lectures move through a chapter once, at one speed. The tutor's contribution differs by branch:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How a chemistry home tutor complements a NEET or JEE coaching batch, branch by branch</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Where coaching students usually struggle</th><th scope="col">What the tutor adds</th></tr>
    </thead>
    <tbody>
      <tr><td>Physical</td><td>Numericals solved by pattern, units dropped halfway</td><td>Slow, unit-by-unit solutions in solutions, electrochemistry and kinetics, then a timed set</td></tr>
      <tr><td>Organic</td><td>Reactions memorised as a list, conversions forgotten within weeks</td><td>One growing reaction map, redrawn from memory every fortnight</td></tr>
      <tr><td>Inorganic</td><td>NCERT lines skimmed, exceptions mixed up</td><td>Short oral quizzes straight from the textbook, with the reason behind each trend</td></tr>
      <tr><td>All three</td><td>Board answers written like entrance answers: a result with no reasoning</td><td>Two "give reasons" answers per session, marked the board's way</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Bring the latest coaching test and the school notebook to the demo. A tutor who reads both before teaching is
    already doing the job described here.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-order">What if school and coaching are teaching different chapters?</h2>
  <p>
    It happens every term. A workable rule is that the coaching chapter sets the week's teaching, while the school
    chapter sets the week's written practice. In practice that means:
  </p>
  <ol>
    <li><strong>Teach ahead of the test.</strong> The tutor rebuilds the coaching chapter's key ideas before the batch test on it, not after.</li>
    <li><strong>Write for the school.</strong> Each session still ends with a board-style answer on whatever chapter the school is on, so unit tests and the half-yearly exam are covered.</li>
    <li><strong>Mark the gaps.</strong> Any chapter neither school nor coaching has reached goes on a short list for the holidays, so nothing is discovered in January.</li>
  </ol>
  <p>
    Two sessions a week is enough for most coaching students. On the heaviest weeks, one can move online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-lab">How much of the practical exam can be prepared away from the lab?</h2>
  <p>
    The 30 practical marks break down as 8 for volumetric analysis, 8 for salt analysis, 6 for a content-based
    experiment, 4 for the project and 4 for the record and viva together. In 2026-27 the titration uses potassium
    permanganate against a standard solution of oxalic acid or of ferrous ammonium sulphate (Mohr's salt), which the
    student weighs out personally.
  </p>
  <p>
    Coaching students tend to leave this until the last month, which is a waste of easy marks. At the table, a tutor
    can drill the molarity calculation for the weighed solution, the layout of titre readings, the sequence of
    preliminary and confirmatory tests in salt analysis with the reason for each, a project the student can carry
    alone, and viva questions such as why permanganate needs no separate indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-near">What does your locality change for an evening chemistry class?</h2>
  <p>
    Senior chemistry sessions often begin after school or coaching, so a tutor's route decides whether a slot holds
    through the year. Six localities from Jaipur's five zones show the range; compare tutors near you on our
    <a href="{{ url('/city/jaipur') }}">Jaipur page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Two southern student areas</h3>
      <p>
        {!! $jpA('pratap-nagar', 'Pratap Nagar') !!}, one of the city's largest residential areas, was developed largely
        by the Rajasthan Housing Board in numbered sectors, and colleges and coaching institutes nearby make it popular
        with students. Housing board blocks usually allow a doorstep visit; gated complexes want the tutor's name and
        sector in advance. On {!! $jpA('tonk-road', 'Tonk Road') !!} itself, part of National Highway 52, the useful
        question is which side you live on, since a tutor already on your side is easier to schedule at peak hours.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>West, beside the Pink Line</h3>
      <p>
        {!! $jpA('nirman-nagar', 'Nirman Nagar') !!} holds Mansarovar station, the western end of the Pink Line, in its
        Padmavati Colony part, with New Aatish Market station also close. Tutors from Shyam Nagar, Sodala or the
        station side can ride in and walk or take an auto. Homes range from independent houses to high-rise
        apartments, and Ajmer Road and the bypass roads are heavy in the evening, so leave spare time.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Centre and north: markets and settled lanes</h3>
      <p>
        {!! $jpA('raja-park', 'Raja Park') !!} has a crowded market road with quieter lanes of builder floors and older
        houses behind it; share a landmark and a spot for a two-wheeler, and prefer weekend mornings for extra
        sessions. {!! $jpA('bajaj-nagar', 'Bajaj Nagar') !!}, near Tonk Road, includes Gandhinagar railway station,
        which mainly serves the southern side of the city; market roads fill up in the evening. {!! $jpA('shastri-nagar', 'Shastri Nagar') !!}, next to Bani
        Park and Vidhyadhar Nagar, has no metro, so tutors arrive by scooter or auto.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-boards">Can you find RBSE, ISC, IB or IGCSE chemistry tutors in Jaipur?</h2>
  <ul>
    <li><strong>Rajasthan board:</strong> the Board of Secondary Education, Rajasthan examines chemistry at Senior Secondary level and publishes its scheme on rajeduboard.rajasthan.gov.in; we do not restate it. Name the medium so the tutor teaches from the state textbook in Hindi or English.</li>
    <li><strong>ISC:</strong> a CISCE theory paper plus practical and project work, with answers expected to explain more than a short NCERT-style reason.</li>
    <li><strong>IB Diploma:</strong> SL or HL, built around two themes, structure and reactivity. The scientific investigation belongs to the student; a tutor may question the plan but not add to it.</li>
    <li><strong>Cambridge IGCSE:</strong> sciences are tiered Core or Extended. Students moving into Class 11 afterwards often need early work on moles and atomic structure; the <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> comparison explains the tiers.</li>
  </ul>
  <p>
    Specialists for the international courses are fewer, so ask early; an online specialist paired with a nearby
    tutor who checks written work is a sound fallback.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-fees">What do chemistry home tutors in Jaipur charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor decides
    their own rate, which moves with the exam in view and their record with it, the evening trip to your locality
    and how many sessions you book. The same tutor may charge less online. Every fee is visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpc-go">How do you get matched with a chemistry tutor?</h2>
  <p>
    Tell us the class, the board and medium, the entrance exam if any, the coaching days, the branch where marks
    slip, your locality with a landmark and your free evenings. We send two or three matched chemistry tutors with
    their fees, and you pick one for a free demo class. If the fit is wrong, another demo follows, and switching
    tutor later costs nothing. Where nobody suitable can travel at your hour, we suggest an online or mixed plan.
    NXTutors is based in Sector 66, Gurugram, and teaches online throughout India. The national
    <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page explains how we work elsewhere, and
    younger siblings can see our <a href="{{ url('/science-home-tutor-jaipur') }}">science tutors in Jaipur</a>.
  </p>
  <p>
    Chemistry teachers in Jaipur who want students close to home can view open requests on the
    <a href="{{ url('/tuition-jobs/jaipur') }}">Jaipur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
