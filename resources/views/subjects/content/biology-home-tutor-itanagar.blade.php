{{--
  Long-form guide for the "biology home tutor Itanagar" page, Classes 11 and 12 and
  NEET (state-capital wave 2, compact depth, subjects writer, 3 Oct 2026). Itanagar
  has no state-board page in this release, so biology takes that slot. Byline in
  config: NXTutors Academic Team.

  Board position: CBSE's affiliation overview lists the government schools of
  Arunachal Pradesh among CBSE-affiliated schools
  (https://saras.cbse.gov.in/saras/attach/CHAPTER_1_CBSE_AN_OVERVIEW.pdf, read
  3 Oct 2026). No state board is named or described.

  Exam facts reuse checked statements already on the site: CBSE Biology (044)
  70 + 30 and the 2026-27 unit marks for Classes 11 and 12 (Delhi, Mumbai and Patna
  biology pages, citing cbseacademic.nic.in); ISC (863) 70 theory with 15 practical,
  10 project and 5 file; NEET (UG) 2026 pattern from
  neet-preparation-gurgaon-coaching-or-home-tutor and -neet-biology-ncertfirst
  (180 questions, 180 minutes, 45/45/90, 720 marks, +4/-1, biology first in
  tie-breaks, syllabus notified by the National Medical Commission).

  Local facts only from database/seo-content/areas/itanagar-research.json. No
  school, college, hospital, society or people's names, no distances or travel
  times, only the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $itbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $itbA = function (string $slug, string $label) use ($itbSlugs) {
      return in_array($slug, $itbSlugs, true)
          ? '<a href="' . e(url('/city/itanagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide itb-guide" aria-labelledby="itbGuideTitle">
  <h2 id="itbGuideTitle">Biology home tutor in Itanagar: diagrams for the board, precision for NEET</h2>

  <p class="nx-guide__lede">
    Senior biology asks for two kinds of memory at once. The board paper wants explanations written in full, with
    clean labelled diagrams; NEET wants a fast, exact answer to a statement lifted almost word for word from NCERT,
    with a mark lost for every wrong guess. In the Itanagar capital region, where CBSE lists the state's government
    schools among its affiliated schools, many Class 11 and 12 students study CBSE Biology, and some add NEET. NXTutors
    asks for the class, the board, whether NEET is planned and where you live, then puts forward two or three biology tutors
    who suit, each fee listed. Your first lesson with whichever tutor you pick costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#itb-papers">The papers</a> ·
    <a href="#itb-units">CBSE unit marks</a> ·
    <a href="#itb-words">Vocabulary</a> ·
    <a href="#itb-neet">NEET biology</a> ·
    <a href="#itb-year">A two-track year</a> ·
    <a href="#itb-practical">Practical marks</a> ·
    <a href="#itb-local">Five localities</a> ·
    <a href="#itb-format">Home or online</a> ·
    <a href="#itb-demo">The demo</a> ·
    <a href="#itb-cost">Fees and request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="itb-papers">Which biology paper is your child preparing for?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Senior biology papers a student in the capital region may sit, and what each asks the tutor to build</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Shape</th><th scope="col">What the tutor builds</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Biology (044), Classes 11 and 12</td><td>70-mark, three-hour theory paper and 30 practical marks each year</td><td>NCERT depth, case-based reading, a complete practical record</td></tr>
      <tr><td>NEET (UG)</td><td>Biology is half of NTA's 180 questions</td><td>Exact recall under negative marking, timed practice</td></tr>
      <tr><td>ISC Biology (863)</td><td>Class 12: theory worth 70; practical 15, project 10 and file 5</td><td>Careful diagrams and exact terminology</td></tr>
      <tr><td>IB or IGCSE Biology</td><td>SL or HL; Core or Extended</td><td>Handling data, lab skills and, for the IB, guidance around an investigation the student owns</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10, biology is one strand of science; the
    <a href="{{ url('/science-home-tutor-itanagar') }}">science home tutors in Itanagar</a> page covers those years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-units">How are the CBSE theory marks spread over Classes 11 and 12?</h2>
  <p>
    Each year's theory paper carries 70 marks. CBSE's 2026-27 curriculum fixes the unit weights, which a tutor can
    turn straight into a term plan.
  </p>
  <ul>
    <li><strong>Class 11:</strong> Human Physiology 18; Diversity of Living Organisms 15; Cell: Structure and Function 15; Plant Physiology 12; Structural Organisation in Plants and Animals 10.</li>
    <li><strong>Class 12:</strong> Genetics and Evolution 20; Reproduction 16; Biology and Human Welfare 12; Biotechnology 12; Ecology and Environment 10.</li>
  </ul>
  <p>
    Two Class 11 units, Human Physiology and Cell, keep reappearing in Class 12 revision and in NEET, so a
    short second pass over both in the last weeks of Class 11 saves time later. In Class 12, inheritance problems
    should start the week Genetics is taught and continue to the end of the year; they are where students who
    "understood the chapter" still drop marks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-words">Why is vocabulary the hidden problem in biology?</h2>
  <p>
    Biology brings a heavy load of new words in every chapter, and many of them look alike. A student who
    mixes up two similar terms can lose a NEET question and a board mark in the same week. A tutor can make the words
    stick with a few habits:
  </p>
  <ol>
    <li><strong>Word, meaning, picture.</strong> Each new term is spoken, explained and then placed on a labelled diagram.</li>
    <li><strong>Roots and endings.</strong> Common prefixes and suffixes, so a strange word can be decoded rather than memorised alone.</li>
    <li><strong>A personal glossary.</strong> The term on one side, the student's own definition on the other, tested aloud each week.</li>
    <li><strong>Exact spelling in answers.</strong> A misspelt label can cost a mark, so diagrams are checked letter by letter.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-neet">What does NEET biology demand?</h2>
  <p>
    In 2026 NEET (UG) was a pen-and-paper test of 180 compulsory multiple-choice questions, three hours long and
    marked out of 720. Physics and chemistry had 45 questions apiece; biology, split into botany and zoology, had
    the other 90. Each correct response added four marks, each incorrect one took away a mark, and when candidates
    tied, the biology score was the first thing compared. The syllabus is notified by the
    National Medical Commission and NTA confirms the pattern each year; the 2027 bulletin had not been published when
    we wrote this, so watch neet.nta.nic.in.
  </p>
  <p>
    For a tutor that means line-by-line NCERT reading, including the tables, diagrams and boxed examples, timed
    objective sets on every finished chapter, and a log of every mock error. See the national
    <a href="{{ url('/neet-home-tutor') }}">NEET home tutor</a> page, the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology guide</a> and our comparison of
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a home tutor or both</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-year">How can Class 12 serve the board paper and NEET together?</h2>
  <p>
    School calendars differ, so take this as a shape rather than a timetable. It assumes the student writes the board
    paper and NEET in the same year.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 12 biology year in four phases for a student sitting the board paper and NEET</caption>
    <thead>
      <tr><th scope="col">Phase</th><th scope="col">For the board</th><th scope="col">For NEET</th></tr>
    </thead>
    <tbody>
      <tr><td>Opening months</td><td>Reproduction and Genetics with a written answer each week</td><td>An objective set on every chapter as it ends</td></tr>
      <tr><td>Mid-session</td><td>Human Welfare, Biotechnology and Ecology; record kept up to date</td><td>Class 11 Human Physiology and Cell revisited in short rounds</td></tr>
      <tr><td>Run-up to pre-boards</td><td>Full papers under time, marked against the scheme</td><td>A full-length mock every fortnight, with an error log</td></tr>
      <tr><td>After the boards</td><td>Nothing further</td><td>Both years of NCERT revised, with weekly mocks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The principle is that neither exam waits for the other to finish. An ISC student follows the same shape with
    CISCE papers in place of CBSE ones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-practical">The 30 practical marks each year</h2>
  <p>
    These marks are earned through experiments, identifying specimens and slides, the practical file, and a project
    discussed in a viva. Steady work through the year counts for more here than a burst of effort before the exam. At home a tutor can check that each record entry has its aim,
    a labelled diagram and a conclusion, rehearse spotting with clear photographs of specimens and slides, and run a
    short mock viva on the experiments your child has done at school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-local">Biology tuition in five localities of the capital</h2>
  <p>
    The <a href="{{ url('/city/itanagar') }}">Itanagar home tutors page</a> lists every locality; these five give a
    feel for the differences.
  </p>
  <ul>
    <li><strong>{!! $itbA('vivek-vihar-itanagar', 'Vivek Vihar') !!}:</strong> government quarters, officers' colonies and hillside houses in north Itanagar, with its own branch post office. Tell the colony gate the tutor's name and arrival time; hill roads are slower in rain.</li>
    <li><strong>{!! $itbA('ganga-market', 'Ganga Market') !!}:</strong> one of the main shopping areas on the highway, with a shared-taxi counter and an auto stand, so a tutor without a vehicle can still arrive easily. Earlier slots avoid the evening market traffic.</li>
    <li><strong>{!! $itbA('bank-tinali', 'Bank Tinali') !!}:</strong> a junction and market area in central Itanagar; tutors visiting houses walk in from the lane, while the official colonies may ask for a name at the gate.</li>
    <li><strong>{!! $itbA('papu-nallah', 'Papu Nallah') !!}:</strong> houses and small colonies on the hillside between the two towns; a tutor travelling by shared taxi can get down on the highway and walk in.</li>
    <li><strong>{!! $itbA('doimukh', 'Doimukh') !!}:</strong> a smaller town with fewer local tutors, where a regular weekly slot makes the trip worthwhile and online sessions often carry the rest of the plan.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/itanagar/zone/itanagar-north-chimpu-ganga') }}">Itanagar North</a> and
    <a href="{{ url('/city/itanagar/zone/nirjuli-banderdewa-doimukh') }}">Nirjuli, Banderdewa and Doimukh</a> zone pages
    give more local detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-format">Home, online or a mix?</h2>
  <p>
    Online lessons suit senior biology better than many parents expect. A tutor can sketch a nephron on a tablet,
    the student can hold a labelled flower diagram up to the camera, and going through a NEET mock question by question
    is easy on a shared screen. A visit has its own advantages: the student who drifts without an adult nearby stays
    on task, and the practical file can be checked page by page. Because a NEET or ISC specialist may be based
    elsewhere in the capital or outside the state, a common pattern is one visit and one screen session each week,
    with the visit itself moved online when monsoon rain makes the roads slow. The <a href="{{ url('/online-tutor-itanagar') }}">online tutors for Itanagar</a>
    page explains the set-up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-demo">Signs of a good biology demo</h2>
  <ul>
    <li>The tutor asks what your child already knows before explaining anything.</li>
    <li>Your child draws and labels at least one structure during the hour.</li>
    <li>New terms are explained plainly and then written correctly.</li>
    <li>Asked about marking, the tutor explains both the board scheme and NEET's negative marking.</li>
    <li>Old chapters have a place in the plan, alongside the new ones still to be taught.</li>
  </ul>
  <p>
    Not convinced? The next tutor on your list can give a demo instead, and switching at any later point is
    free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="itb-cost">What does a biology home tutor in Itanagar charge, and what should you send?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Class 11 and 12 biology and NEET
    work fall in the higher part of that range. Every tutor fixes their own fee and it is on screen before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-itanagar') }}">Itanagar home tuition fees</a> guide explains what to ask.
  </p>
  <p>
    Tell us the class and board, whether NEET is on the plan, which chapters are hurting, where you live and when your
    child is free. A shortlist of two or three biology tutors with fees comes back. Everyone who joins as a tutor
    passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is published. The other
    sciences: <a href="{{ url('/chemistry-home-tutor-itanagar') }}">chemistry</a> and
    <a href="{{ url('/physics-home-tutor-itanagar') }}">physics</a> tutors in Itanagar; IGCSE and IB biology are
    treated at length on the national <a href="{{ url('/biology-home-tutor') }}">biology home tutor</a> page. Biology
    teachers in the capital region can find open requests on
    <a href="{{ url('/tuition-jobs/itanagar') }}">Itanagar tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
