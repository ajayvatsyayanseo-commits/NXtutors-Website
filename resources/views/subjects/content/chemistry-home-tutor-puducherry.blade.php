{{--
  Long-form guide for the "chemistry home tutor Puducherry" page (Classes 11
  and 12; CBSE in depth, NEET and JEE, ISC/IB/IGCSE briefly, the state-board
  +2 syllabus in general terms only). Byline in config: NXTutors Academic
  Team. Covers Puducherry town only.

  Local facts come only from database/seo-content/areas/puducherry-research.json
  (area "about" texts and zone_facts). Board picture only from its top-level
  board_facts (schooledn.py.gov.in/CBSE/cbsetrg.html,
  schooledn.py.gov.in/Exams/sslcResult.html and the 2026 state-board +2 result
  analysis PDF on schooledn.py.gov.in); the state board is not named and no
  pattern is given.

  Exam facts reuse checked statements in database/seo-content/blog:
  cbse-class-12-chemistry-organicinorganic (chapter marks, branch totals
  organic 33 / physical 23 / inorganic 14, 33 questions in five sections, no
  calculator or log tables, recall share, topics removed and topics assessed
  only in school, practical scheme 8/8/6/4/4, permanganate titration against
  oxalic acid or Mohr's salt with the standard solution made by the student,
  one main Class 12 exam), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern), jee-preparation-gurgaon-coaching-or-home-tutor (JEE
  Main 2026 pattern) and cambridge-vs-edexcel-igcse-gurgaon (Cambridge
  science tiers). IB chemistry structure as already stated on the existing
  city chemistry pages (ibo.org). Official homes: cbseacademic.nic.in,
  nta.ac.in, cisce.org, ibo.org, cambridgeinternational.org.

  No coaching institute, school, college, society or people's names, no
  distances or travel times, only the allowed fee sentence. Area links render
  only when that Puducherry area page exists and is active.
--}}
@php
  $pdcSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pdcA = function (string $slug, string $label) use ($pdcSlugs) {
      return in_array($slug, $pdcSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pdc-guide" aria-labelledby="pdcGuideTitle">
  <h2 id="pdcGuideTitle">Chemistry home tutor in Puducherry: equations, reactions and numericals put in order for Class 11 and 12</h2>

  <p class="nx-guide__lede">
    Chemistry in Classes 11 and 12 is three subjects sharing one name. Physical chemistry is numericals, organic is a
    web of reactions, and inorganic rewards exact statements. A student in Puducherry may also be adjusting to new
    books, since government schools have moved from the state syllabus to CBSE, while some private schools still teach
    the state-board +2. Add NEET or JEE for many students and the weekly load gets heavy. A home chemistry tutor brings
    it into one plan: what was taught this week, whether it was understood, and how each exam wants it written.
    From your request, NXTutors puts forward two or three chemistry tutors who fit the syllabus and can reach your part
    of town, lists each fee before you meet anyone, and keeps the first lesson free.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pdc-exams">Chemistry in each exam</a> ·
    <a href="#pdc-board">CBSE or state board</a> ·
    <a href="#pdc-marks">Chapter marks</a> ·
    <a href="#pdc-dropped">Dropped topics</a> ·
    <a href="#pdc-branches">Three branches</a> ·
    <a href="#pdc-lab">Practical exam</a> ·
    <a href="#pdc-areas">Six areas</a> ·
    <a href="#pdc-courses">ISC, IB, IGCSE</a> ·
    <a href="#pdc-eleven">Class 11</a> ·
    <a href="#pdc-fees">Fees</a> ·
    <a href="#pdc-send">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pdc-exams">How much chemistry is in each exam a Class 12 student faces?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry in the Class 12 board paper and the national entrance tests, with what each rewards most</caption>
    <thead>
      <tr><th scope="col">Exam</th><th scope="col">Size and format</th><th scope="col">What it rewards</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 chemistry (043)</td><td>A three-hour, 70-mark theory paper of 33 compulsory questions, and a 30-mark practical</td><td>Reasons in writing, balanced equations, tidy numericals</td></tr>
      <tr><td>State-board +2 chemistry</td><td>Set by the state board whose syllabus the school follows; confirm the scheme with the school</td><td>The prescribed textbook and that board's past papers</td></tr>
      <tr><td>NEET (UG), 2026 paper</td><td>45 of 180 questions, carrying 180 of the 720 marks, on pen and paper</td><td>Quick, exact recall of NCERT lines</td></tr>
      <tr><td>JEE Main 2026, Paper 1</td><td>One third of the paper: twenty option-based questions plus five numerical ones</td><td>Mechanisms and multi-step physical chemistry</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In 2026 both NTA exams gave four marks for a right answer and took one away for a wrong one; NTA publishes each
    year's pattern afresh. For more depth, read our list of
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a>, our
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">physical, organic and inorganic chemistry for JEE</a>
    article, and the page on matching a <a href="{{ url('/chemistry-home-tutor/neet') }}">chemistry tutor for NEET</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-board">CBSE or the state-board +2: which chemistry book is your child using?</h2>
  <p>
    Puducherry has no school board of its own. The Directorate of School Education held orientation sessions in 2024
    on a smooth swap from the state syllabus to CBSE, and it now lists Class 12 results as CBSE 12 from 2025 where it
    used +2 up to 2024. It still publishes state-board +2 result analyses for private schools from 2026.
  </p>
  <p>
    So ask the school which book your child has. On CBSE, the tutor teaches from the NCERT text, whose exact sentences
    also matter for NEET, and practises from CBSE sample papers and marking schemes. On the state-board +2, the tutor
    teaches from the prescribed textbook and that board's own past papers; we do not describe that paper here. A
    student who changed syllabus recently may need extra time on organic chemistry, where the order of chapters and
    the style of conversion questions can feel unfamiliar. Our
    <a href="{{ url('/cbse-home-tutor-puducherry') }}">CBSE home tutor in Puducherry</a> page covers the switch.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-marks">Where are the marks in CBSE Class 12 chemistry?</h2>
  <p>
    Every chapter has its own fixed weight in the CBSE curriculum, so a tutor can plan the year around the numbers. The 2026-27 curriculum
    keeps last session's paper design; here are the ten chapters grouped by branch:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry chapters by branch with their 2026-27 marks and the practice each needs</caption>
    <thead>
      <tr><th scope="col">Branch (total)</th><th scope="col">Chapter and marks</th><th scope="col">Practice that pays</th></tr>
    </thead>
    <tbody>
      <tr><td>Organic, 33 marks</td><td>Haloalkanes and Haloarenes (6), Alcohols, Phenols and Ethers (6), Aldehydes, Ketones and Carboxylic Acids (8), Amines (6), Biomolecules (7)</td><td>Conversions written as chains; distinguishing tests; mechanisms one step at a time</td></tr>
      <tr><td>Physical, 23 marks</td><td>Solutions (7), Electrochemistry (9), Chemical Kinetics (7)</td><td>Numericals with units on each line; rate laws and half-life; colligative properties</td></tr>
      <tr><td>Inorganic, 14 marks</td><td>Coordination Compounds (7), d- and f-Block Elements (7)</td><td>One clear reason for each trend; naming, isomers and bonding</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Candidates get three hours. The questions sit in sections A to E, internal choice is offered in only a few of
    them, and calculators and log tables stay outside the hall. Only about 40% of the marks reward recall and
    understanding; the larger part wants application, analysis or evaluation, so learning answers by heart is not
    enough. Class 12 has one main board exam. Each chapter is treated in our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry guide for
    Class 12</a>, and a month-by-month board plan is on the
    <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-dropped">Which topics are out of the board paper, and which still matter for NEET or JEE?</h2>
  <p>
    Two chapters have left the 2026-27 Class 12 syllabus completely: the solid state, and the part of the p-block
    covering Groups 15 to 18. Four further topics remain in the teaching but are marked inside school only: surface
    chemistry; how elements are isolated from their ores; polymers; and chemistry in everyday life. None of the four
    will appear in the board paper.
  </p>
  <p>
    Entrance students need a second check. NTA releases the NEET and JEE syllabi on its own, and a topic the board
    no longer examines, such as some p-block chemistry, can still turn up in an entrance paper. Plan board revision
    from the CBSE list, and entrance revision from the NTA list.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-branches">How should a home tutor handle each branch?</h2>
  <ul>
    <li><strong>Physical chemistry: watch the working.</strong> Students often know the formula and lose the mark on a unit or a power of ten. The tutor watches one or two problems solved line by line each week, rather than checking only the final answer.</li>
    <li><strong>Organic chemistry: one map, redrawn weekly.</strong> A single sheet linking each functional group to the next, from alcohols through carbonyl compounds and acids to amines, drawn from memory and checked against NCERT. Conversion questions then become routes rather than lists.</li>
    <li><strong>Inorganic chemistry: short, exact quizzes.</strong> Quick rounds straight from the textbook, with the reason behind each trend asked aloud. This pays twice for a NEET student.</li>
  </ul>
  <p>
    End each session with two board-style "give reasons" questions, corrected before the tutor leaves. If your child
    attends a coaching class, the home session should follow its chapter rather than race ahead.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-lab">How much of the 30-mark chemistry practical can be prepared at home?</h2>
  <p>
    More than families expect. The 30 split as follows: 8 for the titration, 8 for salt analysis, 6 for an
    experiment drawn from the theory chapters, 4 for the project, and 4 for the record together with the viva. In the
    current session, the titration is potassium permanganate run against either oxalic acid or Mohr's salt, and
    every candidate weighs out and makes up the standard solution alone.
  </p>
  <p>
    At a desk at home, a tutor can rehearse the molarity sum for the mass weighed out, the layout of the burette
    table and the final calculation, the sequence of salt analysis from the first observations to the confirming
    test, a project the student can realistically complete, and the viva questions that come up again and again, for
    example why a titration with permanganate is run without an added indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-areas">What do six Puducherry areas mean for an evening chemistry class?</h2>
  <p>
    Senior students usually study chemistry in the evening, so the tutor's route at that hour matters. Six areas from
    the old town, the bus-stand side and the south show what to arrange; the
    <a href="{{ url('/city/puducherry') }}">Puducherry page</a> lists every area.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Both halves of the old town</h3>
      <p>
        {!! $pdcA('white-town', 'White Town') !!}, the former French Quarter by the sea, is mostly independent houses
        and heritage buildings, so a house number usually does the job; the seafront streets fill with visitors in the
        evening, so weekday slots are easier. Across the Grand Canal, the {!! $pdcA('tamil-quarter', 'Tamil Quarter') !!}
        has street-facing houses near the busiest shopping streets; a phone call on arrival and a fixed slot keep things
        simple.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Near the bus stand</h3>
      <p>
        {!! $pdcA('nellithope', 'Nellithope and Anna Nagar') !!} lie close to the Pondicherry bus stand and a major
        signal junction, which helps tutors who come by bus. Houses mean the tutor comes to the door; for a flat, give
        the building name and floor and tell the guard. A two-wheeler is the easiest way through roads that stay busy
        much of the day.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South along the Cuddalore road</h3>
      <p>
        {!! $pdcA('ariyankuppam', 'Ariyankuppam') !!} has grid streets, so a cross-street name finds the house. In
        {!! $pdcA('veerampattinam', 'Veerampattinam') !!}, share a landmark near the temple or the main road, and plan
        the festival weeks online. {!! $pdcA('thavalakuppam', 'Thavalakuppam') !!} sits on the highway beyond
        Ariyankuppam, where homes on plotted roads have their own gates; a slot outside peak hours helps.
      </p>
    </div>
  </div>
  <p>
    Near the pre-boards, if a route becomes unreliable, moving one weekly visit online protects the revision plan. The
    <a href="{{ url('/city/puducherry/zone/heritage-town') }}">Heritage Town</a> and
    <a href="{{ url('/city/puducherry/zone/mudaliarpet-ariyankuppam') }}">Mudaliarpet and Ariyankuppam</a> zone
    guides add local detail, and the <a href="{{ url('/city/puducherry/zone/lawspet-ecr') }}">Lawspet and ECR</a>
    guide covers the north.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-courses">Can you find a tutor for ISC, IB or IGCSE chemistry?</h2>
  <ul>
    <li><strong>ISC:</strong> alongside the written theory, CISCE marks practical work and a project. Examiners look for an explanation, not just a single line.</li>
    <li><strong>IB Diploma:</strong> available at SL and HL and organised under the two themes of structure and reactivity. The scientific investigation belongs to the student alone; a tutor can question the plan but must not write or design it.</li>
    <li><strong>Cambridge IGCSE:</strong> the science papers are entered at Core or at Extended level. How Cambridge compares with Edexcel is set out in our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">IGCSE board comparison</a>.</li>
  </ul>
  <p>
    Since teachers of these courses are scarcer than CBSE teachers, put the course in your first message. If no
    specialist can come to the house, an online one can take the course-specific work while a nearby tutor marks
    written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-eleven">Why fix chemistry in Class 11?</h2>
  <p>
    Because Class 12 stands on it. Mole calculations feed every solutions and electrochemistry numerical, equilibrium
    ideas come back in Class 12 physical chemistry, and the opening organic chapters of Class 11 decide whether
    conversion questions make sense later. Weak foundations show up twelve months on, in the board paper and the
    entrance tests alike, and repairing them then is harder and dearer. More on the
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">tutor for Class 11 chemistry</a> page, or the
    national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page for how we match elsewhere.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-fees">How much does a chemistry home tutor in Puducherry cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names their
    own rate, which rises with the exam targeted and the tutor's record with it; the evening trip to your area and the
    lessons booked each week matter as well. Every fee is visible before the demo, and the
    <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">Puducherry home tuition fees</a> article lists the
    questions to ask before you agree a schedule.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdc-send">How do you ask for chemistry tutors in Puducherry?</h2>
  <p>
    Tell us the class, the syllabus (CBSE, state-board +2, ISC, IB or IGCSE), the main exam, the branch that loses marks,
    any coaching days, your area and a landmark, and the evenings that are free. A shortlist of two or three chemistry
    tutors comes back with their fees, and you choose whom to meet at a free demo. If the first choice is wrong, a second demo follows, and a
    later change of tutor costs nothing. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. If no suitable tutor can
    reach you, we propose online lessons or a mix of home and online. Our office is in Sector 66, Gurugram, and
    our online tutoring reaches every part of India. For the other sciences, see the <a href="{{ url('/physics-home-tutor-puducherry') }}">physics</a>
    and <a href="{{ url('/biology-home-tutor-puducherry') }}">biology</a> tutor pages for Puducherry, or the
    <a href="{{ url('/neet-home-tutor-puducherry') }}">NEET home tutor in Puducherry</a> page.
  </p>
  <p>
    Chemistry teachers who live in Puducherry and would like students close by will find current requests on the
    <a href="{{ url('/tuition-jobs/puducherry') }}">Puducherry tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
