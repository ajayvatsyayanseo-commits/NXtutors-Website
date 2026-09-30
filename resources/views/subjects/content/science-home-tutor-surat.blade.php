{{--
  Long-form guide for the "science home tutor Surat" page (Classes 6 to 10,
  CBSE and ICSE, GSEB in general terms). Byline in config: Aaditya Kashyap;
  role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/surat-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements used on the Delhi science
  page, from database/seo-content/blog/cbse-class-10-science-notes (80 + 20,
  39 questions by type, 30/25/25 sections, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, formative-only topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science. GSEB is described generally only; no GSEB pattern is
  given. The Surat Metro is described as under construction, with no dates.
  No school, society, mall or people's names, no distances or travel times,
  only the allowed fee sentence.

  Area links render only when that Surat area page exists and is active.
--}}
@php
  $srAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $srA = function (string $slug, string $label) use ($srAreaSlugs) {
      return in_array($slug, $srAreaSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide srs-guide" aria-labelledby="srsGuideTitle">
  <h2 id="srsGuideTitle">Science home tutor in Surat, Classes 6 to 10: one tutor for three strands, taught from the book your child is examined on</h2>

  <p class="nx-guide__lede">
    School science asks a child to do three unlike things in one week: solve a physics numerical, balance a chemical
    equation and label a biology diagram with the exact term. Weakness in one of them can stay hidden until the Class
    10 paper. In Surat the first question is which book sits on the desk, NCERT, an ICSE text or a GSEB textbook,
    and in which language. NXTutors finds two or three science tutors who teach that book and can reach your locality
    after school. Their fees are on the shortlist before you meet, and the opening lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#srs-book">Which book</a> ·
    <a href="#srs-years">The five years</a> ·
    <a href="#srs-weights">Class 10 weights</a> ·
    <a href="#srs-kinds">Question kinds</a> ·
    <a href="#srs-school">School-assessed topics</a> ·
    <a href="#srs-nine">Class 9</a> ·
    <a href="#srs-local">Six localities</a> ·
    <a href="#srs-demo">Watching the demo</a> ·
    <a href="#srs-fees">Fees</a> ·
    <a href="#srs-go">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="srs-book">Which science syllabus is your child following?</h2>
  <p>
    Aaditya Kashyap is responsible for the CBSE and ICSE science guidance on this page. The syllabus decides the
    tutor, so we ask for it before the class number.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Three science syllabuses taught in Surat and what each asks of a home tutor</caption>
    <thead>
      <tr><th scope="col">Syllabus</th><th scope="col">Books</th><th scope="col">What the tutor must do</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>NCERT: <em>Curiosity</em> in Classes 6 and 7, <em>Exploration</em> in Class 9 this session</td><td>Prepare for one combined Class 10 paper with biology, chemistry and physics sections</td></tr>
      <tr><td>ICSE</td><td>Chosen by each school within the CISCE syllabus</td><td>Teach from your child's own books and CISCE specimen papers; Class 10 has separate Physics, Chemistry and Biology papers</td></tr>
      <tr><td>GSEB</td><td>Prescribed by the Gujarat Secondary and Higher Secondary Education Board</td><td>Explain in the medium your child studies in, Gujarati or English, and follow gseb.org for exam details</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a GSEB student, the language point matters more than it first appears. A child who reads science in Gujarati
    and hears it explained in English has to translate every term twice, so tell us the medium when you ask. This
    page does not restate the Gujarat board's paper pattern; its own website is the reliable source each year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-years">What changes from Class 6 to Class 10?</h2>
  <ul>
    <li><strong>Classes 6 and 7.</strong> Activities come first in the <em>Curiosity</em> books. A tutor turns each one into a clear sentence using the correct word, plus a labelled sketch.</li>
    <li><strong>Class 8.</strong> The three strands begin to separate. Numericals and word equations appear, and a number without its unit stops earning credit.</li>
    <li><strong>Class 9.</strong> A heavier year: motion graphs, particles of matter and the cell arrive close together, and gaps widen quickly.</li>
    <li><strong>Class 10.</strong> One board paper of 80 marks, half of it built on application and analysis rather than recall.</li>
  </ul>
  <p>
    Until Class 10, one tutor for all three strands is usually the right call. That tutor can spot when a physics
    answer fails because of weak algebra, something two separate tutors may both miss. See the national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page and the
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page for the middle years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-weights">How are the CBSE Class 10 science marks divided?</h2>
  <p>
    The board paper runs for three hours and is worth 80. Schools add 20 internal marks in four parts of 5 each:
    periodic assessment, multiple assessment, portfolio, and subject enrichment through practicals. By strand, biology
    is worth 30 and chemistry and physics 25 apiece. By unit:
  </p>
  <ol>
    <li>Chemical Substances: Nature and Behaviour, 25 marks.</li>
    <li>World of Living, 25 marks.</li>
    <li>Effects of Current, 13 marks.</li>
    <li>Natural Phenomena, 12 marks.</li>
    <li>Our Environment, 5 marks.</li>
  </ol>
  <p>
    Measured by thinking skill, half the paper tests knowledge and understanding, 30% application, and 20% analysis and
    evaluation. The <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> go
    through every chapter, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page
    shows how a board year is planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-kinds">What kinds of questions does the 2026-27 sample paper use?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science sample paper, 2026-27: 39 questions by kind, and the answer shape each one rewards</caption>
    <thead>
      <tr><th scope="col">Kind of question</th><th scope="col">Count and marks</th><th scope="col">Answer shape that earns the marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple-choice, including assertion–reason</td><td>20 × 1 = 20</td><td>Read every option; eliminate before choosing</td></tr>
      <tr><td>Very short answer</td><td>6 × 2 = 12</td><td>A precise definition and one example</td></tr>
      <tr><td>Short answer</td><td>7 × 3 = 21</td><td>Three distinct points, or an equation with two lines of reasoning</td></tr>
      <tr><td>Case- or source-based</td><td>3 × 4 = 12</td><td>Use the passage or data before recalled theory</td></tr>
      <tr><td>Long answer</td><td>3 × 5 = 15</td><td>A labelled diagram or balanced equation, then four or five points</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Official sample papers and marking schemes on cbseacademic are the safest practice material. Older board papers
    help too, but they hold fewer case-based questions than the current design, so recent samples need the most time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-school">Which Class 10 topics stay out of the board paper?</h2>
  <p>
    For 2026-27, three areas are assessed by the school only: the electric motor, electromagnetic induction and the
    generator; evolution; and periodic classification of elements. They still feed internal marks and return in
    Class 11, so a tutor teaches them, just not in the board-revision months. The curriculum also names 14
    experiments that board questions draw on, which makes the practical file worth revising.
  </p>
  <p>
    Every Class 10 student sits the compulsory main exam. A second, optional sitting lets eligible students improve up
    to three subjects, science among them. No 2027 dates are out yet, so follow cbse.gov.in and plan for the main exam.
    The <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> sets out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-nine">Why does Class 9 need a fresh plan this session?</h2>
  <p>
    CBSE's 2026-27 curriculum follows NCERT's new Class 9 book, <em>Exploration</em>. The yearly exam stays at 80 marks
    with 20 internal. Matter: its nature and behaviour carries 27; World of living 25; Motion, force, work and sound
    23; and Earth as a system 5. Notes passed down from an older sibling were written for the old book. The
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page has more.
  </p>
  <p>
    ICSE students face a different task in both years: three subjects with their own internal work, taught from
    school-chosen books. ICSE-experienced science tutors are scarcer than CBSE ones in Surat, as anywhere, so ask early
    and keep online lessons in mind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-local">How does an after-school science slot work in six Surat localities?</h2>
  <p>
    For a younger child the lesson sits between school and dinner, so a short, repeatable trip matters most. The Surat
    Metro is still under construction and not open to passengers, so tutors come by two-wheeler, auto or Sitilink bus.
    Compare every locality on our <a href="{{ url('/city/surat') }}">Surat page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition in six Surat localities: homes, how a tutor arrives, and one thing to arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">How a tutor arrives</th><th scope="col">Arrange this</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $srA('pal', 'Pal') !!}</td><td>Apartment buildings and residential societies</td><td>BRTS corridors from Adajan Patiya to Pal RTO and onward</td><td>Give the gate your name and flat number for the first visit</td></tr>
      <tr><td>{!! $srA('nanpura', 'Nanpura') !!}</td><td>Older houses, builder floors and flats in the old centre</td><td>Two-wheeler or auto; lanes are narrow for cars</td><td>An afternoon or early evening slot, before shopping hours peak</td></tr>
      <tr><td>{!! $srA('piplod', 'Piplod') !!}</td><td>Apartments and villas</td><td>Sitilink bus in the BRTS lane on Gaurav Path, or auto</td><td>Register the tutor at society gates; villa lanes are doorstep visits</td></tr>
      <tr><td>{!! $srA('althan', 'Althan') !!}</td><td>Two- and three-bedroom flats in societies</td><td>Bus, auto or two-wheeler; Udhna Junction is the nearest station</td><td>A one-time gate registration, then regular entry</td></tr>
      <tr><td>{!! $srA('varachha', 'Varachha') !!}</td><td>Compact flats in closely built neighbourhoods</td><td>Sitilink buses and autos; Surat and Utran stations nearby</td><td>A class after the evening rush from diamond-unit shifts</td></tr>
      <tr><td>{!! $srA('amroli', 'Amroli') !!}</td><td>Smaller apartments and some houses</td><td>BRTS from Katargam Darwaja to Kosad; Utran and Kosad stations</td><td>Online lessons for any strand no nearby tutor covers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-demo">What should you watch for in the free demo?</h2>
  <p>
    Ask for an ordinary lesson on the chapter your child is doing at school, then listen for these habits:
  </p>
  <ul>
    <li><strong>The exact term.</strong> The tutor corrects "food pipe" to "oesophagus" and does not let a vague word pass.</li>
    <li><strong>Complete equations.</strong> Balanced, with state symbols where the question asks for them.</li>
    <li><strong>Careful diagrams.</strong> Arrows on every ray, virtual rays dotted, parts labelled with straight pointer lines.</li>
    <li><strong>Marks decide length.</strong> Three separate points for a three-mark answer, not one long sentence.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more.
    If the match is wrong, we set up a demo with another tutor from your list, and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-fees">What does a science home tutor in Surat cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors name their own
    fee. Board-year teaching in Class 10 usually costs more than middle-school support, and the trip to your locality
    and the number of weekly lessons also count. You see every fee before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="srs-go">How do you get started?</h2>
  <p>
    Send the class, the board and medium, the strand that worries you, your locality and the afternoons that suit.
    We return two or three science tutors with their fees, and you choose one for a free demo class. If nobody
    suitable can reach you at that time, we suggest online or mixed lessons. NXTutors, based in Sector 66, Gurugram,
    also teaches online across India.
  </p>
  <p>
    Science teachers living in Surat who want students close by can browse open requests on the
    <a href="{{ url('/tuition-jobs/surat') }}">Surat tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
