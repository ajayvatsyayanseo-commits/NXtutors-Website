{{--
  Long-form guide for the "biology home tutor Patna" subject page. Byline:
  NXTutors Academic Team. No school, coaching institute, hospital, person or
  society is named.

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
  BSEB intermediate biology is described generally only, as on the Patna city
  hub. Local facts only from database/seo-content/areas/patna-research.json and
  patna-zone-guides.json. Only the allowed fee sentence.
  Area links render only when that Patna area page exists and is active.
--}}
@php
  $pbiSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbiA = function (string $slug, string $label) use ($pbiSlugs) {
      return in_array($slug, $pbiSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbi-guide" aria-labelledby="pbiGuideTitle">
  <h2 id="pbiGuideTitle">Biology home tutor in Patna: board answers, NEET recall and the words in between</h2>

  <p class="nx-guide__lede">
    For a Patna student in Class 11 or 12, biology usually has two jobs at once: a board paper that wants full written
    answers with diagrams, and, for many, NEET, where biology is half the paper and every wrong answer costs a mark.
    Add a switch from Hindi-medium books to English technical terms, and a student can understand a chapter perfectly
    well yet lose marks on both fronts. NXTutors asks for the board, the class, whether NEET is in the plan and where
    you live, then sends two or three biology tutors who fit, with fees shown. The first class with the one you choose
    is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbi-boards">Boards</a> ·
    <a href="#pbi-units">CBSE unit weights</a> ·
    <a href="#pbi-bseb">BSEB intermediate</a> ·
    <a href="#pbi-terms">Technical terms</a> ·
    <a href="#pbi-neet">NEET</a> ·
    <a href="#pbi-coaching">With coaching</a> ·
    <a href="#pbi-where">Six localities</a> ·
    <a href="#pbi-mode">Home or online</a> ·
    <a href="#pbi-demo">Demo</a> ·
    <a href="#pbi-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbi-boards">Which board's biology is your child studying?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior biology on the boards Patna students take, and what the tutor should prepare for</caption>
    <thead>
      <tr><th scope="col">Board or exam</th><th scope="col">Classes 11 and 12</th><th scope="col">What the tutor prepares for</th></tr>
    </thead>
    <tbody>
      <tr><td>BSEB</td><td>Biology in the intermediate course, set by the Bihar board</td><td>The prescribed textbooks and the board's own model and past papers</td></tr>
      <tr><td>CBSE (044)</td><td>A three-hour, 70-mark theory paper and 30 practical marks each year</td><td>NCERT depth, case-based questions and the practical record</td></tr>
      <tr><td>ISC (863)</td><td>70 theory marks in Class 12, with 15 practical, 10 project and 5 for the file</td><td>Detailed diagrams and exact terms</td></tr>
      <tr><td>NEET (UG)</td><td>90 biology questions out of 180, set by NTA</td><td>Fast, exact recall with negative marking in mind</td></tr>
      <tr><td>IB; Cambridge or Edexcel IGCSE</td><td>Biology SL or HL; 0610 or 4BI1 at Grades 9 and 10</td><td>Data questions, practical skills and, in the IB, the scientific investigation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Before Class 11, biology is part of science. For those years, our
    <a href="{{ url('/science-home-tutor-patna') }}">science home tutor in Patna</a> page is the place to start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-units">Where do the CBSE biology marks sit across the two years?</h2>
  <p>
    Each year's theory paper is out of 70. The unit weights in CBSE's 2026-27 curriculum are a ready-made timetable
    for a tutor:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Biology unit marks for Class 11 and Class 12, 2026-27, with a note on how to teach each</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Teaching note</th></tr>
    </thead>
    <tbody>
      <tr><td>11</td><td>Human Physiology</td><td>18</td><td>Organ systems drawn and explained as processes, not lists</td></tr>
      <tr><td>11</td><td>Diversity of Living Organisms; Cell</td><td>15 each</td><td>Classification tables and cell diagrams revised monthly</td></tr>
      <tr><td>11</td><td>Plant Physiology; Structural Organisation</td><td>12; 10</td><td>Photosynthesis and respiration as step sequences</td></tr>
      <tr><td>12</td><td>Genetics and Evolution</td><td>20</td><td>Inheritance problems every week from the day it starts</td></tr>
      <tr><td>12</td><td>Reproduction</td><td>16</td><td>Labelled diagrams and the order of events</td></tr>
      <tr><td>12</td><td>Human Welfare; Biotechnology; Ecology</td><td>12; 12; 10</td><td>Precise definitions, named examples and data questions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Human Physiology and Cell are also the Class 11 chapters that come back most in Class 12 revision and in NEET,
    so a short re-run of both at the end of Class 11 is time well spent. The 30 practical marks each year come from
    experiments, spotting, the record and a project with a viva, and they reward a student who keeps up through the
    year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-bseb">Biology on the Bihar board</h2>
  <p>
    The Bihar School Examination Board conducts the Class 12 intermediate examination and sets its own biology
    syllabus and paper. We describe it only in general terms: a tutor for a BSEB student should work from the board's
    prescribed textbooks and its own model and past papers, and take the pattern and dates only from the board's
    official website. Many intermediate students study in Hindi or in a mix, so ask for a tutor who can teach in the
    language your child reads most easily.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-terms">How should a tutor handle technical terms for a Hindi-medium student?</h2>
  <p>
    Biology has more new vocabulary than any other school science, and a student switching languages meets it twice.
    A tutor who teaches technical words in both languages and then lets the Hindi fall away usually follows a pattern
    like this:
  </p>
  <ol>
    <li><strong>Term, meaning, picture.</strong> Each new word is said, explained in Hindi if needed, and placed on a labelled diagram.</li>
    <li><strong>Word roots.</strong> Common prefixes and suffixes, so that unfamiliar terms can be worked out rather than memorised one by one.</li>
    <li><strong>A two-column glossary.</strong> English term on the left, the student's own explanation on the right, tested orally each week.</li>
    <li><strong>English-only answers.</strong> From the start, written answers stay in English, even when the discussion is in Hindi.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-neet">What does NEET biology demand?</h2>
  <p>
    The NEET (UG) 2026 bulletin set 180 compulsory multiple-choice questions for 180 minutes: 45 each in physics and
    chemistry and 90 in biology, split between botany and zoology, for 720 marks. A correct answer earned four marks and
    a wrong one lost a mark, and biology scores were the first used to break ties. NTA confirms the pattern and the
    syllabus, notified by the National Medical Commission, every year, and the 2027 bulletin had not appeared at the
    time of writing; watch neet.nta.nic.in. For tuition, this means line-by-line NCERT recall, diagrams and tables
    included, timed objective practice, and an error log from every mock. See our
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page and the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-coaching">Can a home tutor work alongside a coaching batch?</h2>
  <p>
    Yes. Coaching classes line Boring Road and the Bhootnath Road area, and a home tutor can sit alongside one. The tutor's
    job then is not to repeat the batch but to fill its gaps: going back over the week's hardest chapter, correcting
    board-style written answers the batch does not mark, and analysing mock results one question at a time. Fix the
    home slot so it never clashes with the batch timetable, and avoid the hours when batches change over and the roads
    fill. Our article on <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a
    home tutor or both for NEET</a> sets out the options.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-year">How can the Class 12 year be split between boards and NEET?</h2>
  <p>
    Every school calendar is different, so treat this as a shape to adjust rather than fixed dates. It assumes the
    student sits a board paper and NEET in the same year.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A four-stage Class 12 biology plan for a student taking a board paper and NEET</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Board work</th><th scope="col">NEET work</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of the session</td><td>Reproduction and Genetics taught with weekly written answers</td><td>Objective sets on each chapter as it finishes</td></tr>
      <tr><td>Middle of the session</td><td>Human Welfare, Biotechnology and Ecology; practical record kept current</td><td>Class 11 Human Physiology and Cell revised in short cycles</td></tr>
      <tr><td>Before the pre-boards</td><td>Full board papers under time, marked against the scheme</td><td>One full-length mock a fortnight with an error log</td></tr>
      <tr><td>After the boards</td><td>None</td><td>All Class 11 and 12 chapters revised from NCERT, with mocks each week</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A BSEB or ISC student follows the same shape, swapping in the board's own papers for the CBSE ones. The point is
    that neither exam is left until the other is over.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-where">How does a biology tutor reach six Patna localities?</h2>
  <p>
    The Blue Line now runs from Bhootnath and Malahi Pakri towards Zero Mile and the Patliputra bus terminal, but most
    of the city still depends on two-wheelers, autos and cars. The <a href="{{ url('/city/patna') }}">Patna tuition
    page</a> lists every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Patna localities: how a biology tutor arrives and what the family should arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">How the tutor arrives</th><th scope="col">Family's part</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pbiA('digha', 'Digha') !!}</td><td>By road; the riverfront expressway and elevated corridor skip older inner roads</td><td>Confirm the tower and gate process before the first class</td></tr>
      <tr><td>{!! $pbiA('saguna-more', 'Saguna More') !!}</td><td>By two-wheeler, car or auto; the Red Line is still being built</td><td>Ask the township gate about a regular visitor pass</td></tr>
      <tr><td>{!! $pbiA('kankarbagh', 'Kankarbagh') !!}</td><td>Malahi Pakri station on the Blue Line, then an auto</td><td>Leave margin for the evening markets on the main road</td></tr>
      <tr><td>{!! $pbiA('bhootnath-road', 'Bhootnath Road') !!}</td><td>Bhootnath station on the Blue Line, or by two-wheeler</td><td>Set the slot away from coaching changeover hours</td></tr>
      <tr><td>{!! $pbiA('ashok-rajpath', 'Ashok Rajpath') !!}</td><td>By two-wheeler; the riverfront expressway joins the road at several points</td><td>Avoid college opening and closing times; share a lane landmark</td></tr>
      <tr><td>{!! $pbiA('phulwari-sharif', 'Phulwari Sharif') !!}</td><td>By road on NH 139; the area has its own railway station</td><td>Register the tutor once with the building guard</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/city/patna/zone/kankarbagh-rajendra-nagar') }}">Kankarbagh and Rajendra Nagar</a> and
    <a href="{{ url('/city/patna/zone/bailey-road-danapur') }}">Bailey Road and Danapur</a> zone guides give more
    local detail, including how to handle townships and the cantonment.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-mode">Home, online or both?</h2>
  <p>
    For senior biology, online lessons work well: diagrams can be drawn on a tablet or shown to a camera, and NEET mock
    analysis suits a shared screen. Home lessons help a student who needs someone at the desk to stay on task, and a
    family that wants the tutor to see the practical record on paper. Because a specialist for ISC, IB or NEET may live
    on the far side of the city, many Patna families take one home session and one online session a week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-demo">What to watch for in the demo class</h2>
  <ul>
    <li>The tutor finds out what your child already knows before explaining.</li>
    <li>Your child draws and labels a structure during the class.</li>
    <li>Terms are explained clearly, in Hindi where it helps, and written in English.</li>
    <li>The tutor can say how the BSEB, CBSE or ISC paper is set, and how NEET differs.</li>
    <li>You hear a plan for revising earlier chapters, not just finishing new ones.</li>
  </ul>
  <p>
    If the fit is wrong, we arrange a demo with the next shortlisted tutor, and changing tutor later costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-fees">What does a biology home tutor in Patna charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Class 11 and 12 and NEET
    biology fall in that upper part. Tutors set their own fees, shown to you before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbi-send">Your request</h2>
  <p>
    Tell us the class, board, whether NEET is planned, the chapters causing trouble, your language preference, your
    locality and times, and a budget. We send two or three matched biology tutors and their fees. Tutors who join go
    through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. For the other
    sciences, see <a href="{{ url('/physics-home-tutor-patna') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-patna') }}">chemistry</a> tutors in Patna; the national
    <a href="{{ url('/biology-home-tutor') }}">biology home tutor</a> guide covers IGCSE and IB in depth. Biology
    teachers in Patna can find open requests on <a href="{{ url('/tuition-jobs/patna') }}">Patna tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
