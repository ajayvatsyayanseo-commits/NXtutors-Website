{{--
  Long-form guide for the "science home tutor Kohima" page (Classes 6 to 10:
  NBSE, CBSE and ICSE). Byline in config: Aaditya Kashyap; role statement
  only, no anecdotes. Local facts come only from
  database/seo-content/areas/kohima-research.json (zone_facts and area "about"
  texts).

  Nagaland Board of School Education facts, read 3 Oct 2026 on nbsenl.edu.in:
  - https://nbsenl.edu.in/cms/document/50/syllabi (Blueprint of HSLC 2026,
    Science): 36 questions, 80 marks; 15 x 1 MCQ, 6 x 2, 11 x 3, 4 x 5; all
    one-, two- and three-mark questions compulsory; general choice in the
    five-mark questions (attempt four); 13 chapters from Chemical Reactions and
    Equations to Our Environment (chapter list as printed).
  - https://nbsenl.edu.in/cms/document/49/syllabi (secondary textbooks 2025):
    NCERT Science for Classes IX and X with a Science Lab Manual;
    Environmental Education textbook for Class 9.
  - https://nbsenl.edu.in/curriculum-and-syllabus : "Science TLM Class X";
    question-paper design for Class VIII; phase-wise division of chapters for
    Class IX (phase I and phase II examinations).
  - https://nbsenl.edu.in/ : notice "Re-introduction of Environmental Education
    as a subject under NBSE" (12-08-2024).
  - https://nbsenl.edu.in/cms/document/15/calendars (2026 secondary calendar):
    internal/practical mark list and grades for HSLC 2026 submitted 2-13
    February 2026; HSLC examination conducted February 2026; regular classes
    from January.
  CBSE facts reuse the checked statements in database/seo-content/blog
  cbse-class-10-science-notes (80 + 20 with 5/5/5/5 internal, unit marks,
  50/30/20 competency split) and cbse-class-10-board-year-plan-gurgaon (two
  Class 10 exams); Class 9 Exploration unit marks and Curiosity for Classes 6
  and 7, and ICSE three-paper science, as already stated on the Delhi and
  Patna science pages. Purely practical and educational; weather only as
  timing advice. No school, college, hospital, society or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Kohima area page exists and is active.
--}}
@php
  $kmsSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $kmsA = function (string $slug, string $label) use ($kmsSlugs) {
      return in_array($slug, $kmsSlugs, true)
          ? '<a href="' . e(url('/city/kohima/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide kms-guide" aria-labelledby="kmsGuideTitle">
  <h2 id="kmsGuideTitle">Science home tutor in Kohima: thirteen chapters, one lab manual and a weekly slot that holds through the rains</h2>

  <p class="nx-guide__lede">
    Science in Classes 6 to 10 is where many Kohima children first meet equations, circuit diagrams and labelled
    figures of the body, all in the same school year. Whether your child is on the Nagaland Board of School Education
    or on CBSE, the book on the desk in Classes 9 and 10 is NCERT Science; the difference lies in how the paper is
    built and when it is sat. A good science tutor works from that book, practises to the right paper, and turns up at
    the same hour each week even when the June-to-September rain makes the hill roads slow. NXTutors suggests two or
    three science tutors who can do that, shows every fee before you meet them, and the first lesson is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kms-stage">Class by class</a> ·
    <a href="#kms-hslc">The HSLC science paper</a> ·
    <a href="#kms-cbse">CBSE Class 10 science</a> ·
    <a href="#kms-lab">Lab manual and internal marks</a> ·
    <a href="#kms-89">Classes 8 and 9</a> ·
    <a href="#kms-icse">ICSE</a> ·
    <a href="#kms-rain">Rainy months</a> ·
    <a href="#kms-wards">Five wards</a> ·
    <a href="#kms-fees">Fees</a> ·
    <a href="#kms-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kms-stage">What should a science tutor be doing at each stage?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE science guidance on this page. Nagaland board details come from the
    board's own website. The job of a science tutor changes sharply between Class 6 and Class 10, so a parent can
    check progress with one question per stage:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Science tuition from Class 6 to Class 10 in Kohima: the focus and the parent's check</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Where the hour goes</th><th scope="col">The parent's check</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>Activities turned into clear sentences and tidy sketches; CBSE students use NCERT's Curiosity books</td><td>Does your child use the scientific word, not an everyday one?</td></tr>
      <tr><td>8</td><td>Physics, chemistry and biology begin to separate; first numericals and word equations</td><td>Is a unit written after every number?</td></tr>
      <tr><td>9</td><td>Motion, matter and the cell arrive together; on NBSE, school examinations run in two phases</td><td>Are gaps closed in the month they appear?</td></tr>
      <tr><td>10</td><td>Thirteen board chapters, the lab manual and timed answers</td><td>Has your child written a full section under exam conditions?</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Until Class 10 most children are well served by one tutor for all three sciences, because one person can tell
    whether a physics numerical fails on the arithmetic or on the idea. The national
    <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page sets out our approach, and the
    <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a> and
    <a href="{{ url('/science-home-tutor/class-8') }}">Class 8</a> science pages cover the earlier years.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-hslc">How is the NBSE HSLC science paper put together?</h2>
  <p>
    The board's textbook list names NCERT Science for Classes 9 and 10, with a science lab manual. Its blueprint for
    the 2026 HSLC science paper covers thirteen chapters, from chemical reactions and equations through acids, bases
    and salts, metals and non-metals, carbon compounds, life processes, control and coordination, reproduction,
    heredity, light, the human eye, electricity and magnetic effects of current, to our environment. The paper carries
    80 marks:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>NBSE HSLC 2026 science blueprint by question type, with the habit each type rewards</caption>
    <thead>
      <tr><th scope="col">Type</th><th scope="col">Number and marks</th><th scope="col">Habit to train</th></tr>
    </thead>
    <tbody>
      <tr><td>Multiple choice</td><td>15 questions of 1 mark</td><td>Reading every option before choosing; quick recall of terms and formulae</td></tr>
      <tr><td>Short answer I</td><td>6 questions of 2 marks</td><td>Two distinct points, not one point stretched</td></tr>
      <tr><td>Short answer II</td><td>11 questions of 3 marks</td><td>One point per mark, with a diagram or balanced equation where it saves words</td></tr>
      <tr><td>Long answer</td><td>4 questions of 5 marks, attempted from a general choice</td><td>A labelled figure or worked numerical, then the explanation</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two details from the blueprint shape the tutoring. Every one-, two- and three-mark question is compulsory, so no
    chapter can be skipped. And eleven three-mark questions make 33 marks, the largest block on the paper, so a weekly
    set of three-mark answers, timed and marked, is the single most useful routine. The board also posts a question
    bank and past papers on nbsenl.edu.in; a tutor should be using them from the middle of Class 10.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-cbse">What is different about CBSE Class 10 science?</h2>
  <p>
    The chapters are the same NCERT chapters, but CBSE groups and weighs them its own way. Its board paper is out of
    80, with another 20 kept by the school: five each for periodic tests, multiple assessment, the portfolio and
    subject enrichment through practical work. The 80 board marks fall like this:
  </p>
  <ul>
    <li><strong>Chemical substances, 25.</strong> Reactions, acids and bases, metals and carbon compounds; balancing and naming practised every week.</li>
    <li><strong>The world of living, 25.</strong> Life processes to heredity; figures drawn from memory and labelled completely.</li>
    <li><strong>Effects of current, 13.</strong> Circuits, resistance and magnetism; a unit on every line of a numerical.</li>
    <li><strong>Natural phenomena, 12.</strong> Light and the eye; ray diagrams with arrows on every ray.</li>
    <li><strong>Our environment, 5.</strong> Short, but never worth leaving out.</li>
  </ul>
  <p>
    By competency, half of CBSE's paper tests knowing and understanding, 30% tests applying, and 20% tests analysing
    and evaluating. CBSE Class 10 students also sit a compulsory main examination with an optional second sitting to
    improve up to three subjects, science among them. Our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> go chapter by chapter, and the
    <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page shows how we plan the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-lab">Why do the lab manual and internal marks deserve tutor time?</h2>
  <p>
    The board lists a science lab manual alongside the NCERT textbook, and its 2026 calendar had schools submitting
    internal and practical marks for HSLC candidates in February, before the written examination. So practical work is
    part of the assessment, not a side activity. Apparatus never comes home, but a tutor at the table can still:
  </p>
  <ol>
    <li>Go through each experiment in the manual for its aim, the figure and the observation table.</li>
    <li>Rehearse precautions and likely sources of error, the questions a teacher most often asks.</li>
    <li>Turn each experiment into a three-mark written answer, since the same ideas return in the board paper.</li>
    <li>Check that the practical notebook is complete well before the school collects it.</li>
  </ol>
  <p>
    The board's curriculum page also lists teaching-learning material for Class 10 science, worth asking the school
    about. CBSE students have their own listed experiments and school-marked topics, which the
    <a href="{{ url('/blog/cbse-class-10-board-year-plan-gurgaon') }}">Class 10 board-year planner</a> explains.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-89">Classes 8 and 9: what does the board publish for these years?</h2>
  <p>
    On the Nagaland board, the years before HSLC are not unstructured. The curriculum page carries a question-paper
    design for Class 8 and a phase-wise division of chapters for Class 9, whose school examinations run in a first and
    a second phase. A tutor who knows which chapters fall in which phase can revise the right half of the book at the
    right time instead of the whole of it. The board has also reintroduced Environmental Education as a subject and
    lists a Class 9 textbook for it, which some students may need help with alongside science.
  </p>
  <p>
    CBSE Class 9 students moved to NCERT's new book, Exploration, in 2026-27. Its year-end examination keeps the 80 plus
    20 shape, with units of 27 marks on matter, 25 on the living world, 23 on motion, force, work and sound, and 5 on
    Earth as a system. Old notes from older siblings were written for the previous book, so plans should start from
    the new chapter list. The <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-icse">What if your child is on ICSE?</h2>
  <p>
    CISCE sets three separate science papers at ICSE Class 10, physics, chemistry and biology, each with internal
    assessment, and schools choose textbooks within the CISCE syllabus. The tutor should teach from your child's books
    and CISCE's specimen papers rather than NCERT. Exact definitions and fully worked numericals earn the marks. Tutors
    who know ICSE science well are fewer, so mention it in your first message; online lessons widen the search.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-rain">How should science lessons run through the rainy months?</h2>
  <p>
    In Kohima the rain is heaviest from June to September, and hill roads are slower on wet evenings. For NBSE
    families those months also sit in the middle of a school year that began in January, so they are too important
    to lose. A simple pattern works:
  </p>
  <ul>
    <li><strong>Keep the home visit as the anchor.</strong> One fixed visit a week for numericals and diagrams, where the tutor watches the pen.</li>
    <li><strong>Hold a standby online slot.</strong> If the evening is too wet for the journey, the same lesson runs on screen at the same hour.</li>
    <li><strong>Send work ahead.</strong> A photographed page of answers before an online lesson lets the tutor mark it first.</li>
    <li><strong>Use the drier months for full papers.</strong> From October, timed HSLC-style sections fit naturally into home visits.</li>
  </ul>
  <p>
    The <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> comparison sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-wards">How does your ward shape the after-school science slot?</h2>
  <p>
    Younger students usually have tuition between school and dinner, so a short, repeatable journey for the tutor
    matters more than anything. Five wards show what to arrange; the <a href="{{ url('/city/kohima') }}">Kohima
    page</a> covers the rest.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Five Kohima wards: the setting, who can reach it easily, and what to tell the science tutor</caption>
    <thead>
      <tr><th scope="col">Ward</th><th scope="col">Setting</th><th scope="col">Nearby tutors</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $kmsA('peraciezie', 'Peraciezie') !!}</td><td>The first municipal ward, at the northern end, with neighbourhood schools of its own</td><td>Bayavü Hill, Naga Bazaar</td><td>A pin and a landmark; many homes sit above or below the road on stepped paths</td></tr>
      <tr><td>{!! $kmsA('kitsubozou', 'Kitsübozou') !!}</td><td>East of the centre, right beside Kohima Village</td><td>Kohima Village, Daklane</td><td>The nearest road point for a taxi</td></tr>
      <tr><td>{!! $kmsA('daklane', 'Daklane') !!}</td><td>Central, between Naga Bazaar and New Market</td><td>Most of the city, since routes pass nearby</td><td>A start time after the evening peak around the central market</td></tr>
      <tr><td>{!! $kmsA('lower-chandmari', 'Lower Chandmari') !!}</td><td>South of central Kohima, with Midland to the north</td><td>Upper Chandmari, Midland, New Market</td><td>Whether a scooter can be parked</td></tr>
      <tr><td>{!! $kmsA('agri-farm', 'Agri Farm') !!}</td><td>South-west; the ward also takes in Upper Mediezie (Upper Agri), Electrical and Forest</td><td>PR Hill, Lerie</td><td>The name of your smaller neighbourhood as well as Agri Farm</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-fees">How much does a science home tutor in Kohima cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are set by tutors
    themselves. A Class 10 board year usually asks more of a tutor than Class 6 homework help, and the journey to your
    ward and the number of weekly lessons count too. All fees are on view before the demo; the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our
    <a href="{{ url('/blog/home-tuition-fees-kohima') }}">Kohima fees guide</a> explain what to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kms-start">How do you get a science shortlist?</h2>
  <p>
    Tell us the class, the board, the branch of science that worries your child, the ward with a landmark, and the
    afternoons that are free. Two or three science tutors come back with fees attached; choose one for the free demo.
    If that tutor does not suit, another from the list gives the next demo, and changing tutor later is free too.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. If nobody suitable can come at your hour, we propose lessons that are partly or wholly online. For the next
    subject, see our <a href="{{ url('/maths-home-tutor-kohima') }}">maths home tutor in Kohima</a> page, and for the
    board itself the <a href="{{ url('/nagaland-board-tutor-kohima') }}">Nagaland Board tutor</a> page.
  </p>
  <p>
    Science teachers in Kohima who want students near home can view open requests on the
    <a href="{{ url('/tuition-jobs/kohima') }}">Kohima tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
