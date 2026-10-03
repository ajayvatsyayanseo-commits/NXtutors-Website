{{--
  Long-form guide for the "science home tutor Imphal" page (Classes 6 to 10:
  BOSEM HSLC in general terms, CBSE and ICSE). Byline in config: Aaditya
  Kashyap; role statement only, no anecdotes. Page writer (capitals wave 2,
  subjects), 3 Oct 2026. Local facts come only from
  database/seo-content/areas/imphal-research.json (zone_facts and area
  "about" texts).
  Manipur facts, read 3 Oct 2026 on the official sites:
  - https://bosem.in/ : Board of Secondary Education, Manipur; HSLC
    examination 2026 results and the HSLC compartmental/special examination
    2026; online migration certificate. No science paper design is published
    there, so none is described.
  - https://cohsem.nic.in/Curriculum_Syllabus_for_Classes_XI_XII.html :
    students who pass the BOSEM HSLC or an equivalent examination recognised by
    the council are eligible for Class XI; students from other boards need the
    council's Eligibility Certificate before admission.
  - https://cohsem.nic.in/exams.html : 52 subjects in the Arts, Science and
    Commerce groups, Physics, Chemistry, Biology and Mathematics among them.
  - https://cohsem.nic.in/docs/subjects/41_Physics.pdf,
    27_Chemistry.pdf : Class XI and XII physics and chemistry are one 70-mark
    theory paper of three hours plus a 30-mark practical; NCERT textbooks.
  CBSE facts reuse the checked statements in database/seo-content/blog:
  cbse-class-10-science-notes (80 + 20, internal 5/5/5/5, 39 questions,
  chemistry 25, biology 30, physics 25, 14 experiments) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams); Class 9
  Exploration, the school-assessed topics and ICSE three-paper science as
  already stated on the existing city science pages. No school, college,
  society or people's names, no distances or travel times, only the allowed
  fee sentence. Weather is timing advice only.

  Area links render only when that Imphal area page exists and is active.
--}}
@php
  $ipsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ipsA = function (string $slug, string $label) use ($ipsSlugs) {
      return in_array($slug, $ipsSlugs, true)
          ? '<a href="' . e(url('/city/imphal/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ips-guide" aria-labelledby="ipsGuideTitle">
  <h2 id="ipsGuideTitle">Science home tutor in Imphal, Classes 6 to 10: three sciences in one subject, written the way the paper is marked</h2>

  <p class="nx-guide__lede">
    Until Class 10, science is one subject on the timetable but three different ways of thinking: chemistry wants
    balanced equations, biology wants precise terms and labelled diagrams, physics wants a formula, a unit and a sign
    convention. A student who is strong in one can quietly fall behind in another, and the gap often shows only in the
    board year. In Imphal, Class 10 may end with the HSLC examination of the Board of Secondary Education,
    Manipur, or with CBSE or another board, and from Class 11 science runs under the council, CBSE or ISC. A good tutor
    keeps all three branches moving from Class 6 onwards. Tell us the class, board and leikai, and we send two or three
    tutors whose fees you can compare before a free first lesson.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ips-stages">Class by class</a> ·
    <a href="#ips-hslc">HSLC science</a> ·
    <a href="#ips-cbse">CBSE Class 10</a> ·
    <a href="#ips-nine">Class 9</a> ·
    <a href="#ips-icse">ICSE</a> ·
    <a href="#ips-next-stage">After Class 10</a> ·
    <a href="#ips-habits">Habits</a> ·
    <a href="#ips-where">Localities</a> ·
    <a href="#ips-fees">Fees</a> ·
    <a href="#ips-start">Start</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ips-stages">What should a science tutor do at each stage from Class 6 to 10?</h2>
  <p>
    Aaditya Kashyap, who teaches CBSE and ICSE science, writes for this page. The table below is how we brief a science
    tutor in Imphal, whatever the board:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition by class: the job of the tutor at each stage</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Main job</th><th scope="col">Sign it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Build vocabulary and curiosity; simple activities at home with the textbook open</td><td>Your child explains a chapter in their own words</td></tr>
      <tr><td>8</td><td>First real equations, circuits and cell diagrams; neat notebooks</td><td>Diagrams are labelled without being reminded</td></tr>
      <tr><td>9</td><td>The foundation year for the board: matter, motion and living systems taught properly</td><td>School tests improve in the weakest branch, not just overall</td></tr>
      <tr><td>10</td><td>Board-style answers, practicals and timed papers for the right board</td><td>Three-mark and five-mark answers have the right number of points</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Middle-school science rarely needs a specialist. It needs someone patient who visits on the same afternoons each week,
    checks the notebook and keeps all three branches in view.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-hslc">What if your child sits the HSLC examination?</h2>
  <p>
    The Board of Secondary Education, Manipur conducts the High School Leaving Certificate examination at the end of
    Class 10. Its website, bosem.in, works mainly as a portal for results, the compartmental and special examination and
    migration certificates; we could not find a published science paper design there, so we do not describe one. The
    practical step is simple: ask the school which question pattern and sample papers it is following this year, and hand
    them to the tutor in the first week.
  </p>
  <p>
    What a science tutor can do without the pattern is the part that matters most anyway: teach each chapter until your
    child can explain it, insist on equations and diagrams, and set short written answers every week. When the school's
    sample papers arrive, the tutor shifts to practising in that shape. Online sessions help when the right tutor lives on
    the other side of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-cbse">How are the CBSE Class 10 science marks divided?</h2>
  <p>
    CBSE publishes its science curriculum in detail, so a tutor can plan precisely. The board paper is worth 80 marks and
    the school adds 20 for internal assessment, split equally between periodic assessment, multiple assessment, portfolio
    and subject enrichment through practical work, five marks each.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 80-mark paper: where the marks sit and what a tutor drills</caption>
    <thead>
      <tr><th scope="col">Branch</th><th scope="col">Marks</th><th scope="col">What earns them</th></tr>
    </thead>
    <tbody>
      <tr><td>Biology (world of living and our environment)</td><td>30</td><td>Exact terms, labelled diagrams, process flow-charts</td></tr>
      <tr><td>Chemistry (chemical substances)</td><td>25</td><td>Balanced equations with state symbols; observations stated clearly</td></tr>
      <tr><td>Physics (natural phenomena and effects of current)</td><td>25</td><td>Formula, units, sign convention; ray and circuit diagrams with arrows</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The paper holds 39 questions in three hours, including multiple-choice and assertion-reason items, short answers,
    case-based questions and long answers; each subject section has its own case-based question and its own five-mark
    question. A few topics, among them the electric motor and generator, evolution and the arrangement of elements in the
    periodic table, are assessed by the school rather than in the board paper, but they still come back in Class 11.
    Every student sits the compulsory main examination, and an optional second sitting allows improvement in up to three
    subjects, science among them. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science
    notes</a> go branch by branch, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science
    tutor</a> page explains how a board-year match works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-nine">Why does Class 9 deserve a tutor?</h2>
  <p>
    Class 9 is where Class 10 marks are really made. On CBSE, the 2026-27 curriculum uses NCERT's newer Class 9 book,
    <em>Exploration</em>, with an 80-mark yearly examination and 20 internal marks across four units: matter (27), the
    world of living (25), motion, force, work and sound (23) and Earth as a system (5). Notes handed down from an older
    sibling follow the earlier book, so the tutor should plan from the current chapters. Whatever the board, Class 9 is
    the year to fix weak arithmetic in physics numericals and to make chemical formulae automatic.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-icse">What changes for ICSE science?</h2>
  <p>
    ICSE splits science into three papers at Class 10, Physics, Chemistry and Biology, each with its own internal
    assessment. Schools choose textbooks within the CISCE syllabus, so the tutor has to work from your child's books and
    CISCE specimen papers. ICSE-experienced science tutors can be harder to find; ask early, and accept that online
    lessons may widen the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-next-stage">What happens to science after Class 10 in Manipur?</h2>
  <p>
    A student who passes the HSLC, or an equivalent examination the council recognises, can join Class XI in a
    council-recognised school or college. Students coming from other boards, including CBSE, must first obtain the
    council's Eligibility Certificate, so plan that paperwork well before admission. In the council's science group,
    Physics, Chemistry and Biology are each a 70-mark theory paper of three hours plus a 30-mark practical, taught from
    NCERT textbooks.
  </p>
  <p>
    That is why a good Class 10 tutor looks ahead. Concepts skipped in Class 10 because the board left them out, such as
    electromagnetic induction, return in Class 11 physics. Our <a href="{{ url('/physics-home-tutor-imphal') }}">physics
    tutor in Imphal</a> and <a href="{{ url('/chemistry-home-tutor-imphal') }}">chemistry tutor in Imphal</a> pages
    cover the council and CBSE papers for Classes 11 and 12, and the
    <a href="{{ url('/manipur-board-tutor-imphal') }}">Manipur Board page</a> sets out BOSEM and COHSEM side by side.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-habits">Which science habits should a tutor drill until they are automatic?</h2>
  <ul>
    <li><strong>State symbols on every equation.</strong> (s), (l), (g) and (aq) carry marks when a question asks for a balanced equation.</li>
    <li><strong>Proper biology words.</strong> "Oesophagus", not "food pipe"; "alveoli", not "air sacs" written loosely.</li>
    <li><strong>Ray diagrams with arrows.</strong> Light travels in a direction; a diagram without arrows can lose the mark.</li>
    <li><strong>Units in the last line.</strong> A correct number with no unit is an incomplete answer.</li>
    <li><strong>Points matched to marks.</strong> A three-mark answer needs three distinct points; a five-mark answer usually needs a diagram or equation as well.</li>
    <li><strong>A practical file kept up to date.</strong> Experiments are part of internal marks and also appear as board questions.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-where">How does your locality shape the after-school slot?</h2>
  <p>
    Imphal localities are made up of many named leikais, and most tutors come by two-wheeler or auto. Give the leikai,
    a landmark and a phone number before the first visit. Five localities show the kind of detail that helps:
  </p>
  <ul>
    <li>{!! $ipsA('langol', 'Langol') !!}: the name covers several separate neighbourhoods, so say which part you live in. A tutor already teaching in Uripok, Thangmeiband or Lamphel is the natural match.</li>
    <li>{!! $ipsA('lamphel', 'Lamphel and Lamphelpat') !!}: the district headquarters of Imphal West, with government offices beside homes. After-school slots that begin once offices close usually run more smoothly.</li>
    <li>{!! $ipsA('keishampat', 'Keishampat') !!}: a compact cluster where tutors from Keishampat, Kwakeithel or Sagolband can reach most homes. Narrow lanes are easier on two wheels.</li>
    <li>{!! $ipsA('kwakeithel', 'Kwakeithel') !!}: spread over several leikais beside Keishampat and Sagolband. An early-evening class that starts once school traffic eases tends to run on time.</li>
    <li>{!! $ipsA('chingmeirong', 'Chingmeirong') !!}: in Imphal East, divided into Nongchup and Nongpok; say which. Traffic peaks when schools open and close, so set lessons outside those hours.</li>
  </ul>
  <p>
    In the monsoon, agree in advance that a lesson can move online on a day of heavy rain rather than being cancelled.
    The <a href="{{ url('/city/imphal') }}">Imphal page</a> lists all the localities we cover, and the zone pages for
    <a href="{{ url('/city/imphal/zone/uripok-thangmeiband-lamphel') }}">Uripok, Thangmeiband and Lamphel</a>,
    <a href="{{ url('/city/imphal/zone/sagolband-keishampat-singjamei') }}">Sagolband, Keishampat and Singjamei</a> and
    <a href="{{ url('/city/imphal/zone/wangkhei-khurai-porompat') }}">Wangkhei, Khurai and Porompat</a> go into more
    detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-fees">What does a science home tutor in Imphal cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. A tutor's rate
    also reflects the class, the board, the number of weekly
    visits and the ride to your leikai. Each shortlisted tutor's fee is shown before the demo; our
    <a href="{{ url('/blog/home-tuition-fees-imphal') }}">Imphal fee guide</a> and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> list sensible questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ips-start">What happens after you contact us?</h2>
  <p>
    Tell us the class, the board, your locality and leikai, the afternoons that are free and the branch that worries you
    most. We reply with two or three science tutors and their fees, and you choose one for the free demo. If it does not
    feel right, another tutor can take the next demo, and switching later is free. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, read the national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page or the
    <a href="{{ url('/blog/imphal-home-tuition-guide') }}">Imphal home tuition guide</a>. Science teachers in the city
    can find family requests on <a href="{{ url('/tuition-jobs/imphal') }}">Imphal tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
