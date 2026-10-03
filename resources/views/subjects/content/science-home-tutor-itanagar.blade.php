{{--
  Long-form guide for the "science home tutor Itanagar" page, Classes 6 to 10
  (state-capital wave 2, compact depth, subjects writer, 3 Oct 2026). Byline in
  config: Aaditya Kashyap (role: CBSE and ICSE science); role statement only.

  Board position: CBSE's affiliation overview lists the government schools of
  Arunachal Pradesh among CBSE-affiliated schools
  (https://saras.cbse.gov.in/saras/attach/CHAPTER_1_CBSE_AN_OVERVIEW.pdf, read
  3 Oct 2026). No state board is named or described.

  Exam facts reuse checked statements already on the site:
  cbse-class-10-science-notes (80 + 20, internal 5/5/5/5, 39 questions by type,
  biology 30 / chemistry 25 / physics 25, unit marks), the 50/30/20 thinking-skill
  split, the three school-assessed areas, 14 listed experiments, the Class 9
  Exploration unit marks and Curiosity for Classes 6 and 7 as stated on the Delhi,
  Faridabad and Patna science pages; cbse-class-10-board-year-plan-gurgaon (two
  Class 10 exams); ICSE three-paper science as on those pages.

  Local facts only from database/seo-content/areas/itanagar-research.json. No
  school, college, society or people's names, no distances or travel times, only
  the allowed fee sentence. Area links render only for active areas.
--}}
@php
  $itsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $itsA = function (string $slug, string $label) use ($itsSlugs) {
      return in_array($slug, $itsSlugs, true)
          ? '<a href="' . e(url('/city/itanagar/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide its-guide" aria-labelledby="itsGuideTitle">
  <h2 id="itsGuideTitle">Science home tutor in Itanagar, Classes 6 to 10: NCERT done properly, at an hour that survives the weather</h2>

  <p class="nx-guide__lede">
    Between Class 6 and Class 10, school science grows from observing and describing into three disciplines with
    numericals, equations and labelled diagrams. In the Itanagar capital region many children meet that change through
    NCERT books, since CBSE lists the government schools of Arunachal Pradesh among its affiliated schools. What a
    family needs is a tutor who teaches from those books, writes answers the way CBSE marks them, and can reach the
    house after school without the trip turning into a gamble on a wet afternoon. We put forward two or
    three science tutors who can do that, each with a fee you see in advance, and the opening lesson costs nothing.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#its-stage">Stage by stage</a> ·
    <a href="#its-units">Class 10 marks</a> ·
    <a href="#its-paper">The question paper</a> ·
    <a href="#its-school">School-marked topics</a> ·
    <a href="#its-nine">Class 9</a> ·
    <a href="#its-habits">Habits to drill</a> ·
    <a href="#its-icse">Another board</a> ·
    <a href="#its-local">Five localities</a> ·
    <a href="#its-fees">Fees</a> ·
    <a href="#its-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="its-stage">What changes in science from one class to the next?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE notes on this page. The tutor's job is not the same in every year, and a
    family that knows the shift can judge whether the lessons are aimed correctly.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition from Class 6 to Class 10 in Itanagar: the focus each year and a sign that it is working</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">What the tutor should focus on</th><th scope="col">Sign it is working</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Turning each activity in NCERT's Curiosity books into a clear written sentence and a neat sketch</td><td>Your child uses the science word, not the everyday one</td></tr>
      <tr><td>8</td><td>Pulling physics, chemistry and biology apart; first numericals and word equations</td><td>Units appear after numbers without reminders</td></tr>
      <tr><td>9</td><td>A denser book in which matter, cells and motion all arrive at once</td><td>Doubts from one chapter are cleared before the next begins</td></tr>
      <tr><td>10</td><td>Every chapter pointed at the board paper and its marking scheme</td><td>A timed section has been written and marked at home</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Up to Class 10 a single tutor across physics, chemistry and biology tends to suit, since one person sees whether a
    numerical went wrong in the arithmetic or in the concept. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page explains our approach, and the
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6 science tutor</a> page covers the first year of middle school.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-units">Where do the Class 10 science marks come from?</h2>
  <p>
    The board's written paper lasts three hours and is worth 80 marks. The school adds 20 more, split evenly at 5 apiece
    across periodic tests, multiple assessment, the portfolio and subject enrichment through practical work. Of the 80, biology
    takes 30, while chemistry and physics take 25 each. By unit:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science units, 2026-27, with the weekly habit each one rewards</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Marks</th><th scope="col">Weekly habit</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical Substances (reactions and equations; acids, bases, salts; metals and non-metals; carbon compounds)</td><td>25</td><td>Balancing and naming practice every week</td></tr>
      <tr><td>World of Living (life processes; control and coordination; how organisms reproduce; heredity)</td><td>25</td><td>One labelled diagram redrawn from memory</td></tr>
      <tr><td>Effects of Current: circuits, resistance, magnetic effect</td><td>13</td><td>Numericals with a unit on every line</td></tr>
      <tr><td>Natural Phenomena (reflection and refraction; the human eye; dispersion)</td><td>12</td><td>Every ray drawn with its arrow</td></tr>
      <tr><td>Our Environment</td><td>5</td><td>A quick revision so it is not skipped</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    By skill, half of the paper checks knowledge and understanding, 30% asks for application and 20% for analysis and
    evaluation. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> go chapter
    by chapter, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows how the
    board year is planned.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-paper">What does the Class 10 science paper look like?</h2>
  <p>
    There are 39 questions in the 2026-27 sample paper. Twenty single-mark items come first, a mix of multiple-choice and
    assertion–reason. Then come six short answers worth two marks, seven answers worth three, three case- or
    source-based questions worth four, and three long answers worth five. Each block needs its own kind of practice:
    fast, accurate recall for the one-mark items; exactly as many separate points as the marks for short answers;
    reading the passage or data before writing anything in the case questions; and a diagram or equation supported by
    four or five clear points in the long answers. The sample papers and marking schemes that CBSE posts on
    cbseacademic before each exam are still the most trustworthy practice.
  </p>
  <p>
    There are two Class 10 board exams. The main one is compulsory; eligible students may sit an optional second exam
    to raise up to three subjects, science among them. The 2027 dates had not been published when we wrote this, so
    watch cbse.gov.in and prepare as if only the main exam matters. The
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">board-year planner</a> sets out the months.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-school">Which topics are marked by the school rather than the board?</h2>
  <p>
    Three topics sit outside the 2026-27 board paper and are marked internally by the school: electromagnetic
    induction with the motor and generator, evolution, and how the periodic table arranges elements. Because they feed
    internal marks and reappear in Class 11, they deserve proper teaching, just not a slot in board revision. Board
    questions also draw on the fourteen experiments listed in the curriculum, which makes the practical notebook a
    revision tool as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-nine">What is different about Class 9 science now?</h2>
  <p>
    Class 9 now uses NCERT's new textbook, Exploration, under CBSE's 2026-27 curriculum. The yearly exam is still
    80 marks plus 20 internal, divided over four units, the biggest being Matter, its nature and behaviour (27),
    followed by World of living (25), then Motion, force, work and sound (23), with Earth as a system (5) the
    smallest. Hand-me-down notes were written for the previous book, so build the plan from the new chapters. An optional Advanced science paper (one hour, 25 marks,
    not counted in the aggregate) is also open to Class 9 students; it is worth trying only when the common paper is already comfortable. See
    the <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-habits">Five habits a science tutor should drill until they are automatic</h2>
  <p>
    Careful children gain marks on these and hurried children lose them. Whatever the class, a tutor should return to
    them every few weeks:
  </p>
  <ol>
    <li><strong>Ray diagrams</strong> for mirrors and lenses, arrows on every ray and virtual rays dotted.</li>
    <li><strong>Circuit diagrams</strong> using the standard symbols, with the voltmeter across a component and the ammeter in line with it.</li>
    <li><strong>Biology diagrams</strong> such as the nephron, the human heart and the alimentary canal, every label correctly spelt.</li>
    <li><strong>Balanced equations</strong> with state symbols whenever the question asks for them.</li>
    <li><strong>Heredity crosses</strong> drawn out in full, never just a ratio.</li>
  </ol>
  <p>
    During the free demo, ask for a lesson on whatever chapter the school is on now, and see whether these habits
    come up without being asked for. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more to watch for. If the first tutor does not suit, the next demo is with another shortlisted
    tutor, and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-icse">What if your child's school follows a different board?</h2>
  <p>
    Some children in the capital study under another course through their school. ICSE Class 10 examines
    physics, chemistry and biology as three papers, each carrying its own internal marks, and every school chooses
    its own textbooks inside the CISCE syllabus, so the tutor must teach from your child's books and CISCE specimen papers.
    Tutors for such courses are fewer here; an online specialist can cover them, with a local tutor for the rest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-local">Getting a science tutor to the door in five localities</h2>
  <p>
    Middle-school lessons normally fall in the gap between school and the evening meal, so what counts most is a
    tutor whose trip is short and reliable. The <a href="{{ url('/city/itanagar') }}">Itanagar home tutors page</a> lists every
    locality.
  </p>
  <ul>
    <li><strong>{!! $itsA('chandranagar', 'Chandranagar') !!}:</strong> where the municipal area begins on the northern side, with colonies above the highway and houses on lanes towards the Senki River. Government colonies may ask visitors to sign in; a late-afternoon or weekend slot avoids the busy market end at school closing time.</li>
    <li><strong>{!! $itsA('bank-tinali', 'Bank Tinali') !!}:</strong> a junction and market area with flats above shops, older houses on side lanes and quarters in C-II Sector. The junction is among the busiest stretches at closing time, so tutors often come after the evening rush.</li>
    <li><strong>{!! $itsA('papu-nallah', 'Papu Nallah') !!}:</strong> midway between Itanagar and Naharlagun, mostly independent houses and small colonies, so tutors from either town can cover it and most visits are doorstep arrivals.</li>
    <li><strong>{!! $itsA('polo-colony', 'Polo Colony') !!}:</strong> government quarters and houses on roads climbing from central Naharlagun; a tutor on foot may take an auto for the last stretch, and weekend mornings suit many families.</li>
    <li><strong>{!! $itsA('banderdewa', 'Banderdewa') !!}:</strong> a smaller town at the Assam border with staff quarters and houses; many families combine a home tutor for the core subjects with online classes for the rest.</li>
  </ul>
  <p>
    The <a href="{{ url('/city/itanagar/zone/central-itanagar') }}">Central Itanagar</a> and
    <a href="{{ url('/city/itanagar/zone/naharlagun-papu-nallah') }}">Naharlagun and Papu Nallah</a> zone pages, and the
    <a href="{{ url('/blog/itanagar-home-tuition-guide') }}">Itanagar home tuition guide</a>, add timing advice for each
    part of the capital. In the monsoon, agreeing in advance that a very wet day's class runs online at the usual time
    keeps the routine intact.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-fees">How much does a science home tutor in Itanagar cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix their own
    rates. Between Class 6 and Class 10, board-year teaching is usually priced above the middle years, and the journey to your
    locality and the sessions per week also count. Every fee is visible before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-itanagar') }}">Itanagar fees guide</a> lists questions worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="its-start">How do you start?</h2>
  <p>
    Share the class and board, the science your child finds hardest, a landmark near home, whether you live in an
    official colony, and the free afternoons. A shortlist of two or three science tutors with fees follows, and you
    choose whom to meet for the free demo. Where nobody suitable can come at your hour, we propose online or blended
    lessons. Every tutor who joins completes an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is marked Verified. Senior classes:
    <a href="{{ url('/physics-home-tutor-itanagar') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-itanagar') }}">chemistry</a> and
    <a href="{{ url('/biology-home-tutor-itanagar') }}">biology</a> tutors in the capital.
  </p>
  <p>
    Science teachers living in the capital region can find open requests on
    <a href="{{ url('/tuition-jobs/itanagar') }}">Itanagar tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
