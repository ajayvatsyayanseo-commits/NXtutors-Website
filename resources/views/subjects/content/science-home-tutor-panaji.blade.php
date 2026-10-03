{{--
  Long-form guide for the "science home tutor Panaji" page (Classes 6 to 10,
  CBSE, ICSE and the Goa Board in general terms). Byline in config: Aaditya
  Kashyap; role statement only, no anecdotes. Local facts come only from
  database/seo-content/areas/panaji-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog/cbse-class-10-science-notes (80 + 20, 39
  questions by type, 30/25/25 split, unit marks, internal 5/5/5/5) and
  cbse-class-10-board-year-plan-gurgaon (two Class 10 exams), plus the
  50/30/20 competency split, school-assessed topics, 14 listed experiments,
  Class 9 Exploration unit marks, Curiosity for Classes 6 and 7, and ICSE
  three-paper science as already stated on the Delhi, Patna and Srinagar
  science pages.
  Goa Board of Secondary and Higher Secondary Education, only from
  https://www.gbshse.in/ (fetched 3 Oct 2026):
  - /aboutus : prepares detailed syllabi; prescribes and prepares textbooks.
  - /exams (examination notices): "Instructional Material pertaining to
    Science Practical February 2026 Examination", "Clubbing of schools for
    conduct of Science Practical February 2026 Exam", and the distribution of
    science stationery with the approved list of science teachers for the
    appointment of internal/external examiners (27 Jan 2026), listed with
    SSC-only subjects such as History & Political Science (CWSN).
  - /exams : Grade 9 Science English Medium (1031) answer keys for Semester
    I October 2025 and Semester II March 2026.
  - /circulars : No 59 (Grade 9 Semester-I and Semester-II examinations:
    question papers collected from Board centres, conducted by schools), No 79 (Grade 10 March 2027 examination).
  - /privious-year-question-papers : Class X and XII papers.
  No GBSHSE paper pattern or marks are given. No tourism; no school,
  college, university, hospital, society or people's names; no distances or
  travel times; only the allowed fee sentence.
  Area links render only when that Panaji area page exists and is active.
--}}
@php
  $pnsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pnsA = function (string $slug, string $label) use ($pnsSlugs) {
      return in_array($slug, $pnsSlugs, true)
          ? '<a href="' . e(url('/city/panaji/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pns-guide" aria-labelledby="pnsGuideTitle">
  <h2 id="pnsGuideTitle">Science home tutor in Panaji for Classes 6 to 10: one book, one steady slot, and answers a Goa or CBSE examiner can mark</h2>

  <p class="nx-guide__lede">
    Somewhere between Class 6 and Class 10, school science stops being one friendly subject and becomes three: physics
    with its numericals, chemistry with its equations, biology with its labelled figures. In Panaji a child meets that
    change through whichever book the school uses, whether the Goa Board's prescribed text, NCERT for CBSE, or the
    books an ICSE school chooses. A useful science tutor teaches from that exact book, arrives at the same hour every
    week, and starts exam-style answer writing well before the board year. NXTutors sends two or three science tutors
    who can do this, each with the fee shown in advance, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pns-stages">Class by class</a> ·
    <a href="#pns-goa">Goa Board science</a> ·
    <a href="#pns-cbse">CBSE Class 10</a> ·
    <a href="#pns-types">Question types</a> ·
    <a href="#pns-nine">Class 9</a> ·
    <a href="#pns-icse">ICSE</a> ·
    <a href="#pns-areas">Localities</a> ·
    <a href="#pns-fees">Fees</a> ·
    <a href="#pns-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pns-stages">How does a science tutor's job change from Class 6 to Class 10?</h2>
  <p>
    Aaditya Kashyap, whose role covers CBSE and ICSE science, is the named author for the board guidance here. Each
    stage asks for something different, and one check per stage tells a parent whether lessons are working:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>School science in Panaji, stage by stage, with one check for parents</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What the tutor builds</th><th scope="col">Parent's check</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Activities turned into accurate sentences and neat sketches; CBSE pupils use NCERT's Curiosity books</td><td>Is the scientific term used instead of an everyday word?</td></tr>
      <tr><td>8</td><td>First numericals and word equations as the three sciences separate</td><td>Does every number carry its unit?</td></tr>
      <tr><td>9</td><td>Motion graphs, matter and the cell, all arriving in one year</td><td>Is each gap closed within the month it appears?</td></tr>
      <tr><td>10</td><td>Board-style answers against a marking scheme</td><td>Has a timed section been written under exam conditions?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10 one tutor for all three sciences usually suits a child, because the same person can see whether a
    physics numerical fails on the arithmetic or on the idea. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains our approach, and there are
    separate pages for <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> science.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-goa">Your child studies on the Goa Board: what should the science tutor do?</h2>
  <p>
    The Goa Board of Secondary and Higher Secondary Education prepares the syllabi and prescribes the textbooks for
    its secondary classes. Two things on its website, gbshse.in, shape science tuition. First, the board sends out the
    papers for the Grade 9 semester examinations, which schools conduct in their own halls, and science is one of
    them: answer keys for Grade 9 science appear on the site after both the October 2025 and March 2026 papers. Those
    keys are free practice material. Second, its
    examination notices for 2026 include a science practical examination, with instructional material sent to schools
    and internal and external examiners appointed. Practical work therefore counts, and the practical notebook deserves
    as much care as the theory.
  </p>
  <p>
    We give no GBSHSE marks or paper pattern here, because the board can change them; take the current scheme from its
    site. For matching, ask three things. Will the tutor teach from the prescribed book rather than a guide written for
    another board? Will practice include the board's previous years' Class X papers, which it posts online? And will
    diagrams, units and balanced equations get the same daily attention a CBSE tutor gives them? A tutor who says yes to all
    three suits a Goa Board student from Class 6 to Class 10. More on the <a href="{{ url('/goa-board-tutor-panaji') }}">Goa Board tutor in
    Panaji</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-cbse">CBSE Class 10 science: how are the 80 board marks divided?</h2>
  <p>
    The written board paper lasts three hours and carries 80 marks. The school holds the other 20, five each for
    periodic tests, multiple assessment, the portfolio and practical-based subject enrichment. By discipline, biology
    takes 30 of the 80 and chemistry and physics 25 apiece.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: units, marks and a weekly habit for each</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly habit</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances: reactions, acids, bases and salts, metals and non-metals, carbon compounds</td><td>25</td><td>Ten equations balanced and named, starting in the first term</td></tr>
      <tr><td>World of Living: life processes, control and coordination, reproduction, heredity</td><td>25</td><td>Two figures drawn from memory with every label</td></tr>
      <tr><td>Effects of Current</td><td>13</td><td>Circuit numericals with the unit on each line</td></tr>
      <tr><td>Natural Phenomena: light, the human eye, the colourful world</td><td>12</td><td>Ray diagrams with arrowheads, checked by the tutor</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A quick recap so these marks are never left behind</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By skill, half the paper checks knowledge and understanding, 30% checks application and 20% asks for analysis
    and evaluation. In 2026-27 three topics are examined by the school, not the board paper: electromagnetic induction
    with motors and generators, evolution, and the periodic arrangement of elements. They still return in Class 11, so
    a tutor should teach them properly. CBSE also lists 14 experiments on which board questions can be based, which
    makes revising the practical file part of revising for the paper.
  </p>
  <p>
    Every CBSE Class 10 student sits a compulsory main exam; an eligible student may take an optional second exam to
    raise up to three subjects, science included. The 2027 dates will appear on cbse.gov.in. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go chapter by chapter, and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page covers the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-types">Which question types appear, and how should each be practised?</h2>
  <p>
    The CBSE sample paper for 2026-27 has 39 questions. A tutor should drill each type on its own terms:
  </p>
  <ul>
    <li><strong>Twenty one-mark items,</strong> multiple choice plus assertion and reason: read both statements fully before choosing.</li>
    <li><strong>Six two-mark answers:</strong> as many distinct points as there are marks, no more.</li>
    <li><strong>Seven three-mark answers:</strong> one idea per mark, with a figure or equation where it saves words.</li>
    <li><strong>Three four-mark case questions:</strong> read the passage or data first, then answer from it.</li>
    <li><strong>Three five-mark answers:</strong> a labelled diagram or balanced equation plus four or five clear points.</li>
  </ul>
  <p>
    The same habits serve a Goa Board student, whose examiner also rewards complete, well-labelled answers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-nine">Why does Class 9 science need a fresh start this year?</h2>
  <p>
    CBSE Class 9 students now use NCERT's new textbook, Exploration. The year-end exam keeps the 80 plus 20 shape, with
    27 marks for matter and its behaviour, 25 for the living world, 23 for motion, force, work and sound, and 5 for
    Earth as a system. Notes handed down from older siblings follow the previous book, so the plan should start from the new chapter
    list. A Goa Board Class 9 student has a different reason for care: two board-set semester papers, the first in
    October. See the <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-icse">What changes with ICSE science?</h2>
  <p>
    At ICSE Class 10, CISCE sets physics, chemistry and biology as three separate papers, each with internal
    assessment of its own. Schools choose textbooks within the CISCE syllabus, so the tutor should work from your
    child's books and the specimen papers rather than NCERT. Exact definitions and numericals worked to the last line
    are what score. Families often want help in just one of the three, usually from Class 9. ICSE science tutors are fewer, so
    ask early; online lessons widen the choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-areas">Five Panaji localities and the after-school science hour</h2>
  <p>
    Younger students usually take tuition between school and dinner, so the tutor's journey has to be short and the
    same each week. Five localities show what to arrange; the <a href="{{ url('/city/panaji') }}">Panaji page</a>
    lists the rest.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Panaji localities: homes, timing and what to tell the science tutor</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">Timing</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $pnsA('altinho', 'Altinho') !!}</td><td>Government quarters, official residences and older houses on the hill</td><td>After offices close, when the hill roads calm down</td><td>The block or quarter number, and where to park</td></tr>
      <tr><td>{!! $pnsA('campal', 'Campal') !!}</td><td>Flats and houses beside the city's main cultural and sports venues</td><td>Avoid big event days for the first demo</td><td>A clear landmark, and whether it is a flat or a house</td></tr>
      <tr><td>{!! $pnsA('miramar', 'Miramar') !!}</td><td>Apartment buildings where visitors sign in at the gate</td><td>A regular weekday slot, using the inner residential roads</td><td>Building name, flat number and the guard's phone</td></tr>
      <tr><td>{!! $pnsA('merces', 'Merces') !!}</td><td>Village homes, villas and newer apartments</td><td>A weekday slot outside office travel times</td><td>Ward name and a landmark; flat number for a building</td></tr>
      <tr><td>{!! $pnsA('socorro', 'Socorro') !!}</td><td>Old village homes, newer bungalows and apartment buildings on the north bank</td><td>A fixed early-evening slot, with online as a monsoon backup</td><td>Ward name, a landmark such as the church, any gate contact</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-fees">How much does a science home tutor in Panaji cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names their own
    rate. Class 10 board work tends to cost more than help in Classes 6 to 8, and the trip to your locality and the
    number of lessons a week matter too. All fees appear before the demo; our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> sets out the factors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pns-start">How do you get a science shortlist?</h2>
  <p>
    Send the class, the board, the science that gives most trouble, your locality plus a landmark, and the free
    afternoons. Two or three science tutors come back with fees; pick one for a free demo. If that tutor does not suit,
    the next on the list gives a demo, and changing later is free too. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. If no suitable tutor can travel at your hour, we suggest lessons that are partly or wholly <a href="{{ url('/online-tutor-panaji') }}">online</a>.
    NXTutors is based in Sector 66, Gurugram, and teaches online nationwide. For the next subjects up, see the
    <a href="{{ url('/maths-home-tutor-panaji') }}">maths</a>, <a href="{{ url('/physics-home-tutor-panaji') }}">physics</a>
    and <a href="{{ url('/chemistry-home-tutor-panaji') }}">chemistry</a> pages for Panaji.
  </p>
  <p>
    Science teachers in Panaji who want students close to home can see open requests on the
    <a href="{{ url('/tuition-jobs/panaji') }}">Panaji tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
