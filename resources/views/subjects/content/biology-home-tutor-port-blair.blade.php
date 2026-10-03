{{--
  Long-form guide for the "biology home tutor Port Blair" page (Sri Vijaya
  Puram, Andaman and Nicobar Islands; Classes 11 and 12 on CBSE, with NEET).
  The islands have no board of their own, so biology takes the state-board
  slot in this release. Byline in config: NXTutors Academic Team.

  Board position only from the research file's board_facts
  (southandaman.nic.in/education: "All the Sr. Secondary and Secondary schools
  are affiliated to CBSE"; five mediums; archived CASIAN list naming senior
  secondary schools at School Line, Haddo and Prothrapur). No school counts or
  names.
  Exam facts reuse checked statements already on the site: CBSE Biology (044)
  70 + 30 and the 2026-27 unit marks for Classes 11 and 12 (Delhi, Mumbai,
  Patna and Itanagar biology pages, citing cbseacademic.nic.in); NEET (UG)
  2026 pattern from neet-preparation-gurgaon-coaching-or-home-tutor and
  -neet-biology-ncertfirst (180 questions, 45/45/90, 720 marks, +4/-1,
  biology first in tie-breaks, syllabus notified by the National Medical
  Commission, pattern confirmed by NTA). No tourism; no school, college,
  hospital, society or people's names; no distances or travel times; only the
  allowed fee sentence. Area links render only for active areas.
--}}
@php
  $pbbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pbbA = function (string $slug, string $label) use ($pbbSlugs) {
      return in_array($slug, $pbbSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbb-guide" aria-labelledby="pbbGuideTitle">
  <h2 id="pbbGuideTitle">Biology home tutor in Sri Vijaya Puram (Port Blair): NCERT line by line, diagrams by hand and NEET in view</h2>

  <p class="nx-guide__lede">
    Biology is the senior subject where reading carefully pays most directly. The CBSE paper rewards complete
    written answers and clean labelled diagrams; NEET rewards exact recall of NCERT statements, with a mark taken away
    for every wrong guess. In Sri Vijaya Puram, the island capital known for long as Port Blair, the district states
    that its senior secondary schools are affiliated to CBSE, so CBSE Biology is the usual paper, and some students
    add NEET. NXTutors asks for the class, any NEET plan, the school's medium and your locality, then suggests two or
    three biology tutors with fees shown. The first lesson with your chosen tutor is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbb-marks">Unit marks</a> ·
    <a href="#pbb-read">Reading NCERT</a> ·
    <a href="#pbb-draw">Diagrams</a> ·
    <a href="#pbb-neet">NEET biology</a> ·
    <a href="#pbb-plan">A Class 12 plan</a> ·
    <a href="#pbb-lab">Practical marks</a> ·
    <a href="#pbb-medium">Terms and medium</a> ·
    <a href="#pbb-where">Five localities</a> ·
    <a href="#pbb-mode">Home or online</a> ·
    <a href="#pbb-demo">The demo</a> ·
    <a href="#pbb-fee">Fees and request</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbb-marks">Where are the marks in CBSE Biology?</h2>
  <p>
    Biology (044) has a three-hour theory paper of 70 marks and 30 practical marks in each of Classes 11 and 12. The
    2026-27 curriculum weights the units like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Biology theory marks by unit, 2026-27</caption>
    <thead>
      <tr><th scope="col">Class 11 unit</th><th scope="col">Marks</th><th scope="col">Class 12 unit</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Human Physiology</td><td>18</td><td>Genetics and Evolution</td><td>20</td></tr>
      <tr><td>Diversity of Living Organisms</td><td>15</td><td>Reproduction</td><td>16</td></tr>
      <tr><td>Cell: Structure and Function</td><td>15</td><td>Biology and Human Welfare</td><td>12</td></tr>
      <tr><td>Plant Physiology</td><td>12</td><td>Biotechnology</td><td>12</td></tr>
      <tr><td>Structural Organisation in Plants and Animals</td><td>10</td><td>Ecology and Environment</td><td>10</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Genetics and Evolution is the largest Class 12 unit, and inheritance problems are where students who "know the
    chapter" still lose marks, so crosses should be practised weekly from the day the chapter starts. In Class 11,
    Human Physiology and Cell matter twice: they carry heavy marks and they return in NEET.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-read">How should a student read NCERT biology?</h2>
  <p>
    Both the board and NEET lean on NCERT, but most students read it too fast. A tutor can teach a slower method:
  </p>
  <ol>
    <li><strong>One section at a time,</strong> with the student explaining it back before moving on.</li>
    <li><strong>Every table, figure caption and boxed example read,</strong> since objective questions often come from them.</li>
    <li><strong>Margin questions written by the student,</strong> two or three per page, used later for self-testing.</li>
    <li><strong>A short recall test the next lesson</strong> on what was read, before anything new is taught.</li>
  </ol>
  <p>
    It feels slow for a month and then saves revision time for the rest of the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-draw">Why do diagrams deserve their own practice?</h2>
  <p>
    Diagrams earn marks in written answers and help memory for objective questions. The habit to build is simple:
    draw, label, check, redraw. The tutor names a structure, the student draws it from memory and labels it, the
    two compare it with the textbook figure, and the student redraws only the parts that were wrong. A short burst of
    this in every lesson, kept up over a year, covers every important figure in both classes. Spelling of labels counts;
    a careless label can cost a mark.
  </p>
    <p>
    A good routine is to draw one labelled diagram from memory at the start of each class, then check it against the NCERT figure and correct the labels in a second colour. Over a term, the corrections show exactly which structures a student keeps confusing, and those become the focus of revision.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-neet">What does NEET biology ask for?</h2>
  <p>
    In 2026 NEET (UG) was a pen-and-paper test of 180 compulsory multiple-choice questions, marked out of 720. Physics
    and chemistry had 45 questions each, and biology, split into botany and zoology, had 90. A correct answer earned
    four marks, a wrong one lost one, and in a tie the biology score was compared first. The syllabus is notified by
    the National Medical Commission and NTA confirms the pattern each year on neet.nta.nic.in.
  </p>
  <p>
    For biology that means exact NCERT recall at speed, timed objective sets after each chapter, and an error log that
    records why each wrong answer was wrong. See the national <a href="{{ url('/neet-home-tutor') }}">NEET home
    tutor</a> page, our <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first NEET biology guide</a> and
    the comparison of <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching, a home
    tutor or both</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-plan">How can Class 12 serve the board and NEET together?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A Class 12 biology year for a student sitting the CBSE paper and NEET</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Board work</th><th scope="col">NEET work</th></tr>
    </thead>
    <tbody>
      <tr><td>Start of the session</td><td>Reproduction and Genetics, one written answer a week</td><td>Objective set at the end of each chapter</td></tr>
      <tr><td>Middle of the session</td><td>Human Welfare, Biotechnology, Ecology; practical record kept current</td><td>Class 11 Human Physiology and Cell revised in short rounds</td></tr>
      <tr><td>Winter months</td><td>Full timed papers, marked against the scheme</td><td>A full mock every fortnight with an error log</td></tr>
      <tr><td>After the board papers</td><td>Done</td><td>Both years of NCERT revised; weekly mocks</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    In 2026 CBSE's Class 12 theory papers began on 17 February, so the winter months carry the timed board practice;
    later dates belong to cbse.gov.in. Neither exam should wait for the other.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-lab">How are the 30 practical marks earned?</h2>
  <p>
    The practical marks come from experiments, spotting specimens and slides, the practical record, and a project
    discussed in a viva. They reward steady work. At home a tutor can check that each record entry has an aim, a
    labelled diagram and a conclusion, rehearse spotting with clear photographs, and hold a short mock viva on the
    experiments done at school.
  </p>
  <p>
    The project deserves an early start. A topic chosen in the first term, with a simple plan for what will be read,
    observed or recorded, can be finished calmly; one started in the winter months competes with the theory revision
    and with any NEET mocks. A tutor can help the student pick a topic that fits the syllabus, keep notes in order and
    rehearse explaining the project aloud, which is exactly what the viva asks for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-medium">How should a tutor handle biology terms and the medium of instruction?</h2>
  <p>
    The district's education page lists five mediums of instruction: English, Hindi, Tamil, Telugu and Bengali. A
    student who learnt science in one of these languages up to Class 10 meets a heavy load of technical English terms in
    Class 11 biology, many of them alike. Useful habits: break long terms into roots and endings, keep a personal
    glossary with the student's own definitions, say new words aloud, and check spelling in every labelled diagram.
    Mention the earlier medium in your request; we look for a tutor who can explain in it where that helps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-where">What helps a biology tutor in five localities?</h2>
  <p>
    Every locality we cover is on the <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair) page</a>.
  </p>
  <ul>
    <li><strong>{!! $pbbA('school-line', 'School Line') !!}:</strong> senior secondary classes close by, so biology and NEET requests for Classes 11 and 12 are common. Give the lane and a landmark, and agree where the tutor parks.</li>
    <li><strong>{!! $pbbA('prothrapur', 'Prothrapur') !!}:</strong> one of the larger settlements of South Andaman, with senior secondary classes of its own. A home tutor for regular work and an online specialist for NEET is a practical mix.</li>
    <li><strong>{!! $pbbA('dairy-farm', 'Dairy Farm') !!}:</strong> a residential locality where children mostly follow CBSE from the early classes; in a house, the tutor can usually come to the door.</li>
    <li><strong>{!! $pbbA('garacharma', 'Garacharma') !!}:</strong> a census town just outside the city. Two fixed weekday slots, or a weekend home class plus online weekdays, keep the timetable steady.</li>
    <li><strong>{!! $pbbA('brookshabad', 'Brookshabad') !!}:</strong> partly within the city and partly outside it. Share a map pin and landmark before the first visit.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-mode">Does biology work online?</h2>
  <p>
    Senior biology suits online lessons well. A tutor can sketch on a tablet, your child can hold a diagram up to the
    camera, and a NEET mock can be reviewed question by question on a shared screen. A visit is better for checking
    the practical record and for students who drift without an adult nearby. On an island, a NEET specialist may live
    across the city or on the mainland, so one home lesson and one online lesson a week is a common pattern, and the
    online slot can absorb heavy-rain evenings in the monsoon months. See
    <a href="{{ url('/online-tutor-port-blair') }}">online tutors for Port Blair</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-demo">What marks out a good biology demo?</h2>
  <ul>
    <li>The tutor asks what your child already knows before teaching.</li>
    <li>Your child draws and labels at least one structure during the lesson.</li>
    <li>New terms are explained in plain words and then written correctly.</li>
    <li>The tutor can explain both the board's written marking and NEET's negative marking.</li>
    <li>Older chapters have a place in the weekly plan.</li>
  </ul>
  <p>
    If you are not convinced, the next tutor on your shortlist can give a demo, and switching later is free. See the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbb-fee">What does a biology home tutor cost, and what should you send?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, shown before the demo. The <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in
    Port Blair</a> guide explains what to ask.
  </p>
  <p>
    Send the class, whether NEET is planned, the chapters that worry you, the school's medium, your locality and the
    free evenings. Two or three biology tutors come back with fees. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>. See also
    <a href="{{ url('/chemistry-home-tutor-port-blair') }}">chemistry</a> and
    <a href="{{ url('/science-home-tutor-port-blair') }}">science (Classes 6 to 10)</a> in Port Blair, and the national
    <a href="{{ url('/biology-home-tutor') }}">biology home tutor</a> page for ISC, IB and IGCSE biology. Biology
    teachers can find requests on <a href="{{ url('/tuition-jobs/port-blair') }}">Port Blair tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
