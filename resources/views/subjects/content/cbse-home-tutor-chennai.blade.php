{{--
  Board page "CBSE home tutor Chennai" (Classes 6-12). Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE
  and ICSE science). No anecdotes, years or results are claimed for either.
  No schools, societies or people are named.

  CBSE facts are only those stated in cbse-home-tutor-gurgaon, which cites
  (cbseacademic.nic.in and cbse.gov.in, read 1 Oct 2026): Curriculum 2026-27
  Secondary (80 + 20, 33% pass, about half competency-focused questions;
  common Class IX maths/science paper with optional Advanced, 25 marks,
  1 hour, not in the aggregate, 50% noted; Basic/Standard discontinued except
  the 2026-27 Class X batch; R3 internal), notification 14.02.2026 (two
  Class X board exams), Curriculum 2026-27 Senior Secondary (70 + 30 sciences,
  80 + 20 maths and commerce; whole Class XII syllabus in the board paper).
  Tamil Nadu State Board described only in general terms, as the Chennai hub
  does. Local detail only from database/seo-content/areas/
  chennai-research.json, chennai-zone-guides.json, zones/chennai.json and the
  Chennai city hub. Fee wording is the approved NXTutors sentence. FAQs
  render from faqs/cbse-home-tutor-chennai.php. Area links render only when
  that Chennai area page exists and is active.
--}}
@php
  $cbchSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cbchA = function (string $slug, string $label) use ($cbchSlugs) {
      return in_array($slug, $cbchSlugs, true)
          ? '<a href="' . e(url('/city/chennai/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cbch-guide" aria-labelledby="cbchGuideTitle">
  <h2 id="cbchGuideTitle">CBSE home tutors in Chennai: NCERT, the new papers and tutors who come by train</h2>

  <p class="nx-guide__lede">
    The Chennai city hub sorts the city's families into four broad kinds of board and notes that a large share of
    children study under the Tamil Nadu State Board. CBSE is one of the other three, and for a family on it the tutor
    question is specific: someone who teaches straight from NCERT, knows this year's sample papers, and can reach your
    street reliably by suburban train, MRTS or metro. This guide covers the 2026-27 CBSE changes from Class 6 to 12,
    the general differences from the state board, the subjects families raise, zone-by-zone travel, and a checklist
    for the free demo. Abhinandan Tiwary's subject is Class 10 CBSE and ICSE maths; Aaditya Kashyap's is CBSE and ICSE
    science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbch-where">CBSE in Chennai</a> ·
    <a href="#cbch-state">CBSE and the State Board</a> ·
    <a href="#cbch-ladder">Class by class</a> ·
    <a href="#cbch-middle">Classes 6 to 9</a> ·
    <a href="#cbch-ten">Class 10</a> ·
    <a href="#cbch-senior">Classes 11 and 12</a> ·
    <a href="#cbch-subjects">Subjects</a> ·
    <a href="#cbch-zones">Zones</a> ·
    <a href="#cbch-demo">Demo checklist</a> ·
    <a href="#cbch-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbch-where">CBSE's place in Chennai</h2>
  <p>
    Beyond the hub's remark about the State Board, we have no reliable figures for how Chennai's students divide across
    boards, and we do not invent them. What we can say is what a CBSE request needs from us: the class, the subjects,
    whether the child changed board recently, and whether entrance preparation runs alongside. Those four facts change
    the shortlist far more than the neighbourhood does.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-state">CBSE and the Tamil Nadu State Board, in general terms</h2>
  <p>
    The State Board holds a public examination at the end of Class 10 and runs the higher secondary course across
    Classes 11 and 12, from state textbooks, with schemes and dates announced in its own notices. CBSE differs in ways
    a family notices quickly. Its papers are written on NCERT books, so a tutor should not teach from state material.
    About half of each secondary board paper is competency-focused: case-based and source-based questions, data and
    real situations. Each major subject keeps 20 marks, or 30 in the sciences at senior level, for school assessment.
    And CBSE publishes sample papers with marking schemes ahead of the exams, which become the backbone of good
    tuition. A child moving from the State Board into CBSE usually needs a few weeks on NCERT wording and on the
    applied questions; the underlying maths and science travel well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-ladder">CBSE from Class 6 to Class 12</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Stages, examiners and tutoring priorities</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Examiner and marks</th><th scope="col">Priority for a tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>School; computational thinking and AI literacy run through subjects from 2026-27</td><td>Number sense, early algebra, and explaining what each experiment shows</td></tr>
      <tr><td>9</td><td>School exam on a common 80-mark paper, 20 internal; optional Advanced</td><td>Secure the common paper first; decide on Advanced with care</td></tr>
      <tr><td>10</td><td>Board paper (80) and school (20); 33% to pass; second exam optional</td><td>Board-style answers and a revision plan across subjects</td></tr>
      <tr><td>11</td><td>School</td><td>The step up in the stream subjects</td></tr>
      <tr><td>12</td><td>Board paper on the whole Class 12 syllabus, with practicals or internal marks</td><td>Complete answers, practical records and timed papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-middle">Classes 6 to 9: foundations and the Advanced option</h2>
  <p>
    The middle classes carry no board exam, which is exactly why gaps there go unnoticed until Class 9. Fractions,
    negative numbers, ratio and the first steps of algebra are where a tutor's time pays back most, along with reading
    a science chapter for meaning rather than memorising it.
  </p>
  <p>
    In Class 9, CBSE now sets a common maths and a common science paper, 80 marks and three hours each, for every
    student. A student may add the Advanced paper in maths, science or both: one hour, 25 marks, all higher-order
    questions on additional content, not counted in the aggregate, though 50% or more is noted on the marksheet. The
    former Basic and Standard split in maths is being withdrawn, except for the Class 10 batch of 2026-27. A third
    language is compulsory for the transition batches and assessed only in school, but it must be passed. Advanced suits
    a child who already finds the common paper comfortable; for anyone else, a solid common paper is worth more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-ten">Class 10: two board exams, one plan</h2>
  <p>
    Since 2026, CBSE Class 10 has had two board examinations. The first is compulsory. Having passed it, a student may
    sit the second to improve up to three subjects drawn from science, maths, social science and the languages; a
    student who missed three or more subjects in the first exam cannot take the second. Plan as though the first exam
    is the only one, and keep the second for a subject that genuinely went wrong. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board year plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> help with the month-by-month work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-senior">Classes 11 and 12: board marks and entrance preparation</h2>
  <p>
    In the senior curriculum, physics, chemistry and biology are each 70 theory and 30 practical; mathematics or
    applied mathematics (only one can be taken), accountancy, economics and business studies are 80 and 20. The Class
    12 paper spans the entire Class 12 syllabus, and CBSE says its papers will carry more application questions set in
    real contexts.
  </p>
  <p>
    Where a student also prepares for JEE or NEET, the board tutor's job is to protect board marks: full NCERT answers,
    labelled diagrams, numericals with units, a practical file that is up to date, and sample papers marked against
    the scheme. For entrance-focused help, see <a href="{{ url('/jee-home-tutor-chennai') }}">JEE home tutors in
    Chennai</a> and <a href="{{ url('/neet-home-tutor-chennai') }}">NEET home tutors in Chennai</a>. The
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 maths guide</a> covers calculus and algebra.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-week">What a week of CBSE tuition should contain</h2>
  <p>
    Two sessions a week suit most Classes 9 to 12 students. In each, expect the tutor to check what school covered,
    teach or repair one NCERT chapter, and finish with board-style questions written out in full and marked against
    the scheme. Once a fortnight, a short timed test on recent chapters shows whether the work is sticking. Keep a
    simple notebook of scores and repeated mistakes; a parent glancing at it monthly can tell at once whether progress
    is real. A tutor who never sets anything under time, or never uses the official marking scheme, is teaching the
    content but not the paper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-subjects">Subjects Chennai CBSE families ask about</h2>
  <p>
    Maths and science come first up to Class 10. Senior requests split by stream: physics, chemistry and maths for
    engineering, biology and chemistry for medicine, accountancy and economics for commerce. English help tends to
    follow a move between boards or into a new school.
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-chennai') }}">Maths home tutors in Chennai</a> and <a href="{{ url('/science-home-tutor-chennai') }}">Chennai science tutors</a>, Classes 6 to 10.</li>
    <li>Class 11 and 12 sciences: <a href="{{ url('/physics-home-tutor-chennai') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-chennai') }}">chemistry</a>, <a href="{{ url('/biology-home-tutor-chennai') }}">biology</a>.</li>
    <li><a href="{{ url('/english-home-tutor-chennai') }}">English tutors in Chennai</a> for CBSE language and literature.</li>
  </ul>
  <p>
    The reference page <a href="{{ url('/cbse-home-tutor-gurgaon') }}">how the CBSE board works</a> explains each
    stage's marking in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-zones">How CBSE tutors reach each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Rail lines and the last leg, zone by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Rail the tutor can use</th><th scope="col">Last leg</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/chennai/zone/adyar-besant-nagar-mylapore') }}">Adyar, Besant Nagar and Mylapore</a>, e.g. {!! $cbchA('adyar', 'Adyar') !!}</td><td>MRTS to Kasturba Nagar or Indira Nagar; Teynampet on the Blue Line</td><td>Auto, as Besant Nagar has no station</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/t-nagar-nungambakkam-kodambakkam') }}">T Nagar, Nungambakkam and Kodambakkam</a>, e.g. {!! $cbchA('t-nagar', 'T Nagar') !!}</td><td>South Line suburban trains to Mambalam, Kodambakkam or Nungambakkam</td><td>Walk; car parking is hard</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/velachery-guindy-tambaram') }}">Velachery, Guindy and Tambaram</a>, e.g. {!! $cbchA('velachery', 'Velachery') !!}</td><td>MRTS to Velachery; Blue Line along GST Road; suburban to Tambaram</td><td>Two-wheeler for Medavakkam and Pallikaranai</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/omr-ecr') }}">OMR and ECR</a></td><td>Perungudi MRTS only; metro lines under construction</td><td>Bus, cab or two-wheeler</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/anna-nagar-kilpauk-aminjikarai') }}">Anna Nagar, Kilpauk and Aminjikarai</a>, e.g. {!! $cbchA('anna-nagar', 'Anna Nagar') !!}</td><td>Green Line to Anna Nagar Tower, Anna Nagar East or Shenoy Nagar</td><td>A short walk on the avenue grid</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/vadapalani-kk-nagar-porur') }}">Vadapalani, KK Nagar and Porur</a>, e.g. {!! $cbchA('vadapalani', 'Vadapalani') !!}</td><td>Green Line to Vadapalani or Ashok Nagar</td><td>Bus or auto along Arcot Road beyond</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/mogappair-ambattur-avadi') }}">Mogappair, Ambattur and Avadi</a>, e.g. {!! $cbchA('ambattur', 'Ambattur') !!}</td><td>Arakkonam line to Ambattur, Annanur or Avadi</td><td>Short auto from the station</td></tr>
      <tr><td><a href="{{ url('/city/chennai/zone/perambur-kolathur-north-chennai') }}">Perambur, Kolathur and North Chennai</a></td><td>Suburban to Perambur or Villivakkam; Blue Line to Tondiarpet</td><td>Landmark and door number in old lanes</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    All areas are listed on our <a href="{{ url('/city/chennai') }}">Chennai home tuition page</a>, with local detail in
    the <a href="{{ url('/blog/south-chennai-tuition-guide') }}">south Chennai</a> and
    <a href="{{ url('/blog/west-and-north-chennai-tuition-guide') }}">west and north Chennai</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-mode">Home or online for CBSE in Chennai</h2>
  <p>
    Near a suburban, MRTS or metro station, a home tutor is usually easy to schedule and is the better choice for
    younger children and for maths. Along the OMR, around Porur and in Medavakkam, where the new metro lines are still
    being built, an hour's lesson can cost a tutor a long road trip; one home session plus one online session each week
    keeps things regular. Online maths and science only work when the tutor can watch the written working.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-demo">A CBSE demo checklist</h2>
  <ol>
    <li>Ask which sample paper and marking scheme they are using this session.</li>
    <li>Check they teach from NCERT, not state textbooks or a mixed guide.</li>
    <li>Hand over an unseen case-based question and watch how they unpack it.</li>
    <li>See whether they correct steps, units and diagrams rather than just ticking answers.</li>
    <li>For Class 9, ask their view on the Advanced paper for your child.</li>
    <li>For Classes 11 and 12, ask how they will keep the practical file and internal work on track.</li>
  </ol>
  <p>
    Expect two or three matched tutors, each fee visible before the demo, and a free change of tutor if needed later.
    Tutors joining NXTutors pass an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the Verified badge appears.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbch-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For a Chennai CBSE
    student, the class, subjects, weekly sessions and the tutor's route to your door decide the figure. Read the
    <a href="{{ url('/blog/home-tuition-fees-chennai') }}">Chennai home tuition fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Send the class, subjects, your area with the nearest station, and your free slots; the first class is a
    <a href="{{ url('/demo-class') }}">free demo</a>. You can browse <a href="{{ url('/tutors') }}">tutor profiles</a>,
    and CBSE teachers in Chennai can find requests on <a href="{{ url('/tuition-jobs/chennai') }}">Chennai tuition
    jobs</a>.
  </p>
  </section>

  </div>
</article>
