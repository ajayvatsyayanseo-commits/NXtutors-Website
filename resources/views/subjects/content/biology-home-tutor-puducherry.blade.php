{{--
  Long-form guide for the "biology home tutor Puducherry" subject page. Byline:
  NXTutors Academic Team. Covers Puducherry town only. No school, coaching
  institute, hospital, person or society is named.

  Exam facts reuse the checked statements on the national biology-home-tutor
  page, which cites (fetched 1 Oct 2026):
  - CBSE Biology (044), XI-XII 2026-27, cbseacademic.nic.in
    (web_material/CurriculumMain27/SecPart2/Biology_SecP2_2026-27.pdf):
    theory 3 h 70, practical 30; XI: Diversity 15, Structural Organisation 10,
    Cell 15, Plant Physiology 12, Human Physiology 18; XII: Reproduction 16,
    Genetics and Evolution 20, Human Welfare 12, Biotechnology 12, Ecology 10.
  - CISCE ISC Biology (863), cisce.org: theory 70, practical 15, project 10,
    practical file 5.
  - NTA NEET (UG) 2026 Information Bulletin via neet.nta.nic.in: 180 questions
    in 180 minutes, biology 90, 720 marks, +4/-1, biology first in tie-breaks;
    syllabus notified by NMC; 2027 bulletin not yet out.
  - Cambridge IGCSE 0610, Edexcel 4BI1, IB DP Biology (as on the national page).
  Board picture only from the top-level board_facts in
  database/seo-content/areas/puducherry-research.json
  (schooledn.py.gov.in/CBSE/cbsetrg.html, schooledn.py.gov.in/Exams/sslcResult.html,
  2026 state-board +2 result analysis PDF); the state board is not named and
  no pattern is given. Local facts only from puducherry-research.json. Only
  the allowed fee sentence. Area links render only when that Puducherry area
  page exists and is active.
--}}
@php
  $pdbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pdbA = function (string $slug, string $label) use ($pdbSlugs) {
      return in_array($slug, $pdbSlugs, true)
          ? '<a href="' . e(url('/city/puducherry/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pdb-guide" aria-labelledby="pdbGuideTitle">
  <h2 id="pdbGuideTitle">Biology home tutor in Puducherry: diagrams for the board, recall for NEET, and a plan that serves both</h2>

  <p class="nx-guide__lede">
    Senior biology in Puducherry often has two audiences. The Class 11 and 12 board paper wants full written answers,
    labelled diagrams and a careful practical record; NEET, for students aiming at medicine, wants fast and exact
    recall of the NCERT text with a penalty for every wrong guess. Many students also carry a third load: getting used
    to CBSE books after government schools moved from the state syllabus, or keeping up with the state-board +2 that
    some private schools still follow. NXTutors asks for the class, the syllabus, whether NEET is planned and your area,
    then shortlists two or three biology tutors with their fees shown. The first lesson with your chosen tutor is a
    free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pdb-which">Syllabus check</a> ·
    <a href="#pdb-weights">CBSE weights</a> ·
    <a href="#pdb-change">After the switch</a> ·
    <a href="#pdb-words">Learning the terms</a> ·
    <a href="#pdb-neet">NEET biology</a> ·
    <a href="#pdb-plan">A Class 12 plan</a> ·
    <a href="#pdb-areas">Six areas</a> ·
    <a href="#pdb-mode">Mode of teaching</a> ·
    <a href="#pdb-demo">Demo signs</a> ·
    <a href="#pdb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pdb-which">Which biology syllabus should the tutor prepare for?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Biology for Classes 11 and 12 on the courses Puducherry students follow, and the tutor's focus on each</caption>
    <thead>
      <tr><th scope="col">Course</th><th scope="col">How it is assessed</th><th scope="col">Tutor's focus</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Biology (044)</td><td>Each year: a three-hour theory paper of 70 marks and a practical worth 30</td><td>NCERT depth, case-based questions, an up-to-date practical record</td></tr>
      <tr><td>State-board +2 biology</td><td>Set by the state board whose syllabus the school follows</td><td>The prescribed textbook and that board's past papers; scheme confirmed with the school</td></tr>
      <tr><td>ISC Biology (863)</td><td>Class 12: theory 70, practical 15, project 10 and practical file 5</td><td>Detailed, well-labelled diagrams and precise terms</td></tr>
      <tr><td>NEET (UG)</td><td>Biology is 90 of the 180 questions, set by NTA</td><td>Exact recall, timed sets, care with negative marking</td></tr>
      <tr><td>IB; Cambridge IGCSE (0610) or Edexcel (4BI1)</td><td>IB Biology at SL or HL; IGCSE in Grades 9 and 10</td><td>Data handling, practical skills and, for the IB, the scientific investigation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Below Class 11, biology sits inside school science; for those years the
    <a href="{{ url('/science-home-tutor-puducherry') }}">science home tutor in Puducherry</a> page is the better
    starting point.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-weights">How does CBSE weight the biology units in Classes 11 and 12?</h2>
  <p>
    Both years have a 70-mark theory paper. The 2026-27 unit weights work as a ready-made timetable:
  </p>
  <ul>
    <li><strong>Class 11:</strong> Human Physiology 18; Diversity of Living Organisms 15; Cell: Structure and Function 15; Plant Physiology 12; Structural Organisation in Plants and Animals 10.</li>
    <li><strong>Class 12:</strong> Genetics and Evolution 20; Reproduction 16; Biology and Human Welfare 12; Biotechnology and its Applications 12; Ecology and Environment 10.</li>
  </ul>
  <p>
    Two units deserve extra time. Human Physiology returns in Class 12 revision and in NEET, so a short recap at the
    end of Class 11 pays off. Genetics needs inheritance problems worked every week from the day it begins, since
    crosses and pedigrees cannot be learned by reading alone. The 30 practical marks each year come from experiments,
    spotting, the record, and a project with viva, and they reward steady work through the session rather than a rush
    at the end.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-change">What does the move from the state syllabus to CBSE mean for biology?</h2>
  <p>
    Puducherry has no school board of its own. In 2024 the Directorate of School Education trained heads of schools,
    inspecting officers and teachers for a smooth swap from the state syllabus to CBSE, and since 2025 its Class 12
    results have been listed as CBSE 12 rather than +2. Separate state-board +2 analyses for private schools continue
    from 2026.
  </p>
  <p>
    For a biology student now on CBSE, the NCERT text becomes the centre of everything, which is good news if NEET is
    the goal, because NEET questions follow it closely. The tutor should check early that diagrams are drawn and
    labelled the NCERT way, that answers use the textbook's terms, and that the practical record follows the CBSE
    list. For a student still on the state-board +2, the tutor works from the prescribed textbook and that board's own
    papers; we do not describe that paper, so confirm the scheme with the school. The
    <a href="{{ url('/cbse-home-tutor-puducherry') }}">CBSE home tutor in Puducherry</a> page covers the switch
    across subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-words">How should a tutor teach the vocabulary of biology?</h2>
  <p>
    No school science has as many new words as biology, and a student who learned science in Tamil meets each one
    twice. A tutor can make the load lighter with a simple routine:
  </p>
  <ol>
    <li><strong>See it, say it, place it.</strong> Every new term is spoken aloud, explained (in Tamil if that helps), and written onto a labelled diagram.</li>
    <li><strong>Roots and endings.</strong> Common prefixes and suffixes are taught early, so an unfamiliar word can be worked out rather than memorised alone.</li>
    <li><strong>A personal glossary.</strong> The English term on one side and the student's own explanation on the other, quizzed aloud once a week.</li>
    <li><strong>English on paper.</strong> Whatever language the discussion uses, written answers stay in English from the first lesson.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-neet">What does NEET ask of a biology student?</h2>
  <p>
    Under the NEET (UG) 2026 bulletin, the paper had 180 compulsory multiple-choice questions in 180 minutes for 720
    marks: 45 each in physics and chemistry, and 90 in biology across botany and zoology. A right answer earned four
    marks and a wrong one cost one, and biology scores were the first tie-breaker. The syllabus is notified by the
    National Medical Commission, and NTA confirms the pattern each year; the 2027 bulletin had not appeared when this
    page was written, so check neet.nta.nic.in. For tuition, that means line-by-line NCERT reading, diagrams and tables
    included, timed objective sets, and an error log kept from every mock test. If your child also attends a coaching
    class, the home tutor should fill its gaps, not repeat its lectures. See our
    <a href="{{ url('/neet-home-tutor-puducherry') }}">NEET home tutor in Puducherry</a> page, the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology guide</a> and our article on
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a home tutor or both</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-plan">How can a Class 12 student balance the board paper and NEET?</h2>
  <p>
    School calendars differ, so read this as a sequence, not a set of dates. It assumes a student taking a board paper
    and NEET in the same year:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 12 biology sequence for a student sitting a board paper and NEET in the same year</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">For the board</th><th scope="col">For NEET</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening months</td><td>Reproduction, then Genetics and Evolution, with a written answer marked each week</td><td>A short objective set after each chapter closes</td></tr>
      <tr><td>Mid-session</td><td>Human Welfare, Biotechnology and Ecology; practical record kept current</td><td>Class 11 Human Physiology and Cell revisited in short rounds</td></tr>
      <tr><td>Pre-board stretch</td><td>Complete papers in exam time, marked against the scheme</td><td>A full mock every two weeks, with the error log updated</td></tr>
      <tr><td>After the board exam</td><td>Finished</td><td>All Class 11 and 12 chapters revised from NCERT, mocks weekly</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ISC and state-board +2 students can follow the same order with their own board's papers in place of CBSE's. The
    point is that neither exam waits for the other to finish.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-areas">How does a biology tutor reach six Puducherry areas?</h2>
  <p>
    Tutors in Puducherry mostly travel by two-wheeler or bus, so a tutor based on your side of town tends to keep an
    evening slot steadily. Every area is on our <a href="{{ url('/city/puducherry') }}">Puducherry tuition page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Puducherry areas: how a biology tutor gets there and what the family can arrange</caption>
    <thead>
      <tr><th scope="col">Area</th><th scope="col">Getting there</th><th scope="col">Family's part</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pdbA('tamil-quarter', 'Tamil Quarter') !!}</td><td>The railway station and main bus stand are both close to the old town</td><td>A phone call on arrival; a slot away from the evening shopping crowd</td></tr>
      <tr><td>{!! $pdbA('muthialpet', 'Muthialpet') !!}</td><td>From the old town, or along Karuvadikuppam Road from the Lawspet side</td><td>Flat number and phone shared before the first visit</td></tr>
      <tr><td>{!! $pdbA('mudaliarpet', 'Mudaliarpet') !!}</td><td>On the Cuddalore road, reachable from the town centre or from Ariyankuppam</td><td>Building name sent ahead where the gate asks visitors to sign in</td></tr>
      <tr><td>{!! $pdbA('nellithope', 'Nellithope and Anna Nagar') !!}</td><td>Close to the bus stand, with a short walk or auto ride for the last stretch</td><td>Guard told in advance for flats; a fixed weekday time</td></tr>
      <tr><td>{!! $pdbA('ariyankuppam', 'Ariyankuppam') !!}</td><td>Local buses towards Veerampattinam, Bahour and Cuddalore pass through</td><td>A cross-street name, since the streets follow a grid</td></tr>
      <tr><td>{!! $pdbA('thavalakuppam', 'Thavalakuppam') !!}</td><td>Buses to Bahour, Madukarai and Karaiyamputhur run along the highway</td><td>A highway landmark or the side road's name; a slot outside peak traffic</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/city/puducherry/zone/mudaliarpet-ariyankuppam') }}">Mudaliarpet and Ariyankuppam</a> and
    <a href="{{ url('/city/puducherry/zone/reddiarpalayam-villianur') }}">Reddiarpalayam and Villianur</a> zone guides
    give more local detail, and the <a href="{{ url('/blog/puducherry-home-tuition-guide') }}">Puducherry home tuition
    guide</a> compares all four zones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-mode">Should biology lessons be at home, online or both?</h2>
  <p>
    Senior biology adapts well to a screen: diagrams can be drawn on a tablet or held up to the camera, and NEET mock
    analysis is easy to share. Lessons at home suit a student who needs someone at the desk to stay focused, and a
    family who wants the tutor to check the practical record on paper. When the right specialist for ISC, the IB or
    NEET lives on the other side of town, one home lesson and one online lesson a week is a practical compromise; our
    <a href="{{ url('/online-tutor-puducherry') }}">online tutor in Puducherry</a> page explains how online lessons
    work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-demo">What are the good signs in a biology demo?</h2>
  <ul>
    <li>Before explaining, the tutor asks what your child already knows about the chapter.</li>
    <li>Your child draws and labels at least one structure during the lesson.</li>
    <li>New terms are made clear, in Tamil where useful, and written down in English.</li>
    <li>The tutor can describe how the CBSE, state-board or ISC paper is set and how NEET differs from it.</li>
    <li>There is a plan for revising old chapters, not only for finishing new ones.</li>
  </ul>
  <p>
    If the match is wrong, the next tutor on the shortlist gives a demo, and a change of tutor later is also free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pdb-fees">What does a biology home tutor in Puducherry charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Senior and NEET biology
    falls in that upper part. Tutors set their own fees, and each one is shown before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-puducherry') }}">Puducherry home tuition fees</a> article lists the
    questions to ask.
  </p>
  <p>
    Send us the class, the syllabus, whether NEET is planned, the chapters that worry your child, the language that
    helps most, your area and free times, and a budget. We return two or three biology tutors with fees, and tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
    For the other sciences, see the <a href="{{ url('/physics-home-tutor-puducherry') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-puducherry') }}">chemistry</a> pages for Puducherry; the national
    <a href="{{ url('/biology-home-tutor') }}">biology home tutor</a> guide covers IGCSE and the IB in depth. Biology
    teachers in the town can find open requests on <a href="{{ url('/tuition-jobs/puducherry') }}">Puducherry tuition
    jobs</a>.
  </p>
  </section>

  </div>
</article>
