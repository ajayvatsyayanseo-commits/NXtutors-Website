{{--
  Long-form guide for the "science home tutor Gurgaon" page (Classes 6 to 10,
  CBSE and ICSE). Byline: Aaditya Kashyap (CBSE/ICSE science).
  Sources checked September 2026: CBSE Secondary Curriculum 2026-27, Science
  (086), Class IX and Class X (cbseacademic.nic.in); NCERT's Curiosity series
  for Classes 6 to 8 and the new Class 9 science textbook (Exploration) for
  2026-27; ICSE science as three papers (Physics, Chemistry, Biology), each 80
  marks theory plus 20 internal assessment. Schools are the same verified list
  used on maths-home-tutor-gurgaon, named only as schools students attend.
  Area links render only when the Gurugram area page exists and is active.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="sgGuideTitle">
  <h2 id="sgGuideTitle">Science home tutor in Gurgaon (Gurugram): Classes 6 to 10, CBSE and ICSE</h2>

  <p class="nx-guide__lede">
    Science is where a lot of Gurugram students first feel school getting hard. The subject quietly splits into
    three, chemistry, biology and physics, somewhere between Class 7 and Class 9, and each part asks for a different
    skill: balanced equations, labelled diagrams, numericals. On top of that, the NCERT books themselves have changed
    in the last few years, so the science a Class 8 child studies today is not the science an older sibling studied.
    This guide explains how science home tuition works across Gurugram: where our tutors travel, what each class from
    6 to 10 actually involves in 2026-27, how CBSE and ICSE science differ in the schools families come from, what it
    costs, and how to judge a science tutor in one demo class.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#sg-how">How we match</a> ·
    <a href="#sg-where">Zones and travel</a> ·
    <a href="#sg-68">Classes 6 to 8</a> ·
    <a href="#sg-9">Class 9</a> ·
    <a href="#sg-10">Class 10</a> ·
    <a href="#sg-boards">CBSE and ICSE science</a> ·
    <a href="#sg-schools">Schools students attend</a> ·
    <a href="#sg-one">One tutor or three</a> ·
    <a href="#sg-mode">Home or online</a> ·
    <a href="#sg-fees">Fees</a> ·
    <a href="#sg-choose">Choosing a tutor</a> ·
    <a href="#sg-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="sg-how">How we find a science home tutor for your child in Gurugram</h2>
  <p>
    Start by telling us four things: the class, the board (CBSE or ICSE, or another if your child is moving), which part
    of science is the problem, and where you live. "Science" on its own is too broad to match on. A Class 9 student who
    is lost in motion numericals needs a different tutor from a Class 9 student who cannot remember the parts of a cell,
    and a Class 6 child who has gone off science altogether needs someone else again.
  </p>
  <p>
    From that we shortlist two or three science tutors. Each is ID-verified, fits your budget, teaches your board at your
    child's level, and can realistically reach you at the time you want. You pick one for a <strong>free demo
    class</strong>, which is a normal lesson on whatever chapter school is on that week. If the fit is wrong, we arrange
    the next tutor; switching costs nothing.
  </p>
  <p>
    Aaditya Kashyap writes our CBSE and ICSE science guidance. For science tuition in general, beyond Gurugram, see the
    main <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-where">Science tutors across Gurugram: zones, traffic and slot times</h2>
  <p>
    Science tuition usually runs two or three evenings a week, often squeezed between school, a sport and a maths
    session. In Gurugram that means the drive matters as much as the tutor. A tutor who is twenty minutes away at 3 pm
    can be fifty minutes away at 6 pm. Here is how the main zones work for science, and you can see tutors by locality
    on our <a href="{{ url('/city/gurugram') }}">Gurugram page</a>.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>DLF Phases and MG Road</h3>
  <p>
    {!! $ggA('dlf-phase-1', 'DLF Phase 1') !!}, {!! $ggA('dlf-phase-2', 'Phase 2') !!}, {!! $ggA('dlf-phase-3', 'Phase 3') !!},
    {!! $ggA('dlf-phase-4', 'Phase 4') !!} and {!! $ggA('dlf-phase-5', 'Phase 5') !!} have a dense mix of CBSE and ICSE
    families. Tutors here often teach two students in the same phase back to back, so a 5 pm or 6 pm science slot is
    easier to fill than in newer sectors.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Golf Course Road and Extension</h3>
  <p>
    Along {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!} many younger students are in CBSE or ICSE
    middle school while older siblings are in IB or IGCSE. Societies often restrict visitor entry late in the evening,
    so we confirm gate rules before fixing a slot. Our office is in Sector 66, on this side of the city.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Sohna Road, South City, Sushant Lok</h3>
  <p>
    {!! $ggA('south-city-2', 'South City 2') !!}, {!! $ggA('sushant-lok-phase-i', 'Sushant Lok Phase I') !!},
    {!! $ggA('nirvana-country', 'Nirvana Country') !!}, {!! $ggA('ardee-city', 'Ardee City') !!},
    {!! $ggA('vatika-city-sector-49-gurugram', 'Vatika City') !!} and sectors such as {!! $ggA('sector-43', 'Sector 43') !!},
    {!! $ggA('sector-56', '56') !!} and {!! $ggA('sector-57', '57') !!} see steady demand for Class 9 and 10 science.
    Crossing Sohna Road in the evening is slow, so we prefer tutors already on your side of it.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>New Gurugram and Dwarka Expressway</h3>
  <p>
    In {!! $ggA('m3m-urbana-residences-sector-67-gurugram', 'M3M Urbana') !!}, {!! $ggA('emaar-palm-drive', 'Emaar Palm Drive') !!},
    {!! $ggA('emaar-palm-hills', 'Emaar Palm Hills') !!} and the sectors off NH-48, fewer science tutors live close by.
    Weekend mornings fill faster than weekday evenings, and one home visit plus one online session a week often gets
    a better tutor than insisting on all visits.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Old Gurgaon and Palam Vihar</h3>
  <p>
    {!! $ggA('palam-vihar', 'Palam Vihar') !!}, {!! $ggA('greenwood-city', 'Greenwood City') !!} and the older colonies
    have experienced tutors who have taught CBSE science for years, often strongest in the NCERT-and-past-papers style
    that Class 10 needs.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-68">Science tuition in Gurgaon for Classes 6, 7 and 8</h2>
  <p>
    CBSE schools now teach Classes 6 to 8 from NCERT's newer science textbooks, the <em>Curiosity</em> series. These books
    are built around activities, questions and observation rather than long passages to memorise. That is good news for
    curious children, and a challenge for parents who expect a chapter to end in a neat list of question-and-answer
    notes. The chapters ask a child to predict, test and explain, and school tests increasingly do the same.
  </p>
  <p>
    What a middle-school science tutor should be doing in these years:
  </p>
  <ul>
    <li><strong>Keeping activities alive.</strong> Many <em>Curiosity</em> activities can be done at a dining table with safe household materials. A tutor who does them with your child, rather than just reading about them, builds the observation habit that Class 9 relies on.</li>
    <li><strong>Building science vocabulary.</strong> Words such as solute, conductor, respiration and force have exact meanings. Students who use them loosely in Class 7 write vague answers in Class 10.</li>
    <li><strong>Starting simple numericals early.</strong> Speed, measurement and units appear in middle school. Getting comfortable with units now makes the Class 9 motion chapter far less frightening.</li>
    <li><strong>Class 8 as a bridge.</strong> <strong>Science tuition for Class 8</strong> in Gurgaon is often about preparing for the jump: the chemistry, biology and physics strands start to feel like separate subjects, and Class 9 arrives fast. See our <a href="{{ url('/science-home-tutor/class-8') }}">Class 8 science tutor</a> page.</li>
  </ul>
  <p>
    For Classes 6 and 7, one or two sessions a week is plenty. See the <a href="{{ url('/science-home-tutor/class-6') }}">Class 6</a>
    and <a href="{{ url('/science-home-tutor/class-7') }}">Class 7 science</a> pages for chapter-level detail. ICSE schools
    use their own prescribed books in these years, and a good tutor will work from what the school actually uses.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-9">Science tuition in Gurgaon for Class 9: a new textbook in 2026-27</h2>
  <p>
    Class 9 is the year most Gurugram families first ask us for a science tutor, and in 2026-27 it has changed. NCERT
    has introduced a new Class 9 science textbook, <em>Exploration</em>, and CBSE's 2026-27 Class 9 science curriculum
    is reorganised to match it. The annual paper is still 80 marks in three hours, with 20 marks of internal
    assessment, but the units are now:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 9 Science (086), 2026-27: annual examination units</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Theory marks</th></tr>
    </thead>
    <tbody>
      <tr><td>I. Matter: its nature and behaviour</td><td>27</td></tr>
      <tr><td>II. World of living</td><td>25</td></tr>
      <tr><td>III. Motion, force, work and sound</td><td>23</td></tr>
      <tr><td>IV. Earth as a system</td><td>5</td></tr>
      <tr><td><strong>Theory total</strong></td><td><strong>80</strong></td></tr>
      <tr><td>Internal assessment (periodic, multiple assessment, portfolio, practical work: 5 each)</td><td>20</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two things follow for tuition. First, older guides, question banks and even a sibling's notes may not match the
    new book's chapter order or content, so a tutor should work from the current NCERT textbook and CBSE's 2026-27
    curriculum, not from last year's material. Second, the practical list for Class 9 is concrete and assessed in
    school: stained mounts of onion peel and cheek cells, separating mixtures, verifying conservation of mass,
    distance-time and velocity-time graphs, and checking Newton's second law with a trolley and hanging masses, among
    others. Students who understand why each experiment is set up the way it is score better in both practical work
    and theory.
  </p>
  <p>
    Where Class 9 students usually struggle: motion graphs and equations, the mole-free but still fiddly atomic
    structure and valency work, and the sheer amount of biology vocabulary. Our
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> page goes chapter by chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-10">Science tuition in Gurgaon for Class 10: the board year</h2>
  <p>
    Class 10 science in CBSE is still taught from the existing NCERT textbook and examined in one 80-mark board paper,
    plus 20 marks of internal assessment. The 2026-27 weightage is:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 Science (086), 2026-27: board paper units</caption>
    <thead>
      <tr><th scope="col">Unit</th><th scope="col">Main chapters</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Chemical substances: nature and behaviour</td><td>Reactions and equations; acids, bases and salts; metals and non-metals; carbon compounds</td><td>25</td></tr>
      <tr><td>World of living</td><td>Life processes; control and coordination; reproduction; heredity</td><td>25</td></tr>
      <tr><td>Natural phenomena</td><td>Light; the human eye</td><td>12</td></tr>
      <tr><td>Effects of current</td><td>Electricity; magnetic effects of current</td><td>13</td></tr>
      <tr><td>Natural resources</td><td>Our environment</td><td>5</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Half the paper is chemistry and biology, but it is usually the 25 marks of light and electricity, with ray diagrams
    and circuit numericals, that separate a good score from a very good one. CBSE also now holds a second, optional
    Class 10 board exam for students who want to improve in a limited number of subjects; check the current CBSE
    circular with your school before planning around it.
  </p>
  <p>
    A Class 10 science tutor in Gurugram typically works in three phases: teach and consolidate from April to about
    October, chapter tests and mixed revision through the pre-boards, then timed full papers. Two or three sessions a
    week is normal. See our <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page and our
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-boards">CBSE and ICSE science in Gurugram schools</h2>
  <p>
    Most Gurugram students in Classes 6 to 10 are in CBSE or ICSE schools, and the two boards handle science quite
    differently. Knowing which one your child sits changes what a tutor should do.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How science tuition differs between CBSE and ICSE</caption>
    <thead>
      <tr><th scope="col"></th><th scope="col">CBSE</th><th scope="col">ICSE</th></tr>
    </thead>
    <tbody>
      <tr><td>How science is examined in Class 10</td><td>One integrated Science paper (80 + 20 internal)</td><td>Three separate papers: Physics, Chemistry, Biology (each 80 + 20 internal)</td></tr>
      <tr><td>Books</td><td>NCERT: <em>Curiosity</em> (6 to 8), new Class 9 book, existing Class 10 book</td><td>Books prescribed or chosen by the school, following the CISCE syllabus</td></tr>
      <tr><td>What costs marks</td><td>Competency and case-based questions, assertion–reason, diagrams</td><td>Volume of content, precise definitions, full working in numericals</td></tr>
      <tr><td>What a tutor should do</td><td>Line-by-line NCERT, then sample papers</td><td>Cover each science properly as its own subject, with regular timed papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    ICSE students effectively prepare for three science exams, which is why ICSE families more often ask for separate
    tutors for physics and chemistry by Class 9. CBSE students can usually manage with one strong science tutor until
    Class 10, adding help in one weak strand if needed.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-schools">Gurugram schools our science students attend</h2>
  <p>
    Parents sometimes ask whether a tutor "knows" their school. The board and the class matter more, but it helps to
    know where families come from. These are examples of Gurugram schools that students we help with science attend.
    NXTutors has no link with any of them, and boards are as stated on each school's own website.
  </p>
  <ul>
    <li><strong>CBSE.</strong> Delhi Public School, Sector 45; Amity International School, Sector 46; Lotus Valley International School; Heritage Xperiential Learning School; Shiv Nadar School Gurgaon; Suncity School.</li>
    <li><strong>ICSE.</strong> The Shri Ram School, Aravali; Scottish High International School.</li>
  </ul>
  <p>
    Several Gurugram schools run more than one board, and some students switch to IGCSE or IB at Grade 9 or 11. If that
    is your child, see our <a href="{{ url('/igcse-physics-tutor-gurgaon') }}">IGCSE physics</a> and
    <a href="{{ url('/ib-igcse-chemistry-tutor-gurgaon') }}">IB and IGCSE chemistry</a> pages for Gurugram.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-one">One science tutor or separate physics, chemistry and biology tutors?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>One tutor usually works for Classes 6 to 9</h3>
  <p>
    A single science tutor sees the whole picture, keeps one timetable, and costs less in travel. For most CBSE
    students up to Class 9, and many in Class 10, this is the sensible choice.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Split when one strand is clearly weak</h3>
  <p>
    If physics numericals are the problem and biology is fine, a physics-strong tutor for one session a week often does
    more than general science help. From Class 11, science becomes three subjects anyway: see our
    <a href="{{ url('/physics-home-tutor-gurgaon') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-gurgaon') }}">chemistry home tutor in Gurgaon</a> pages.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Pair with maths where needed</h3>
  <p>
    Class 9 and 10 physics leans on algebra. If numericals keep going wrong at the rearranging stage, the gap may be in
    maths; our <a href="{{ url('/maths-home-tutor-gurgaon') }}">maths home tutor in Gurgaon</a> page covers that side.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-mode">Home or online science tuition in Gurugram?</h2>
  <p>
    Science is one of the subjects where a home tutor has a real edge for younger students. Diagrams are drawn by
    hand, notebooks can be checked at the table, and simple, safe activities (an indicator from red cabbage, a circuit
    with a cell and a bulb, germinating seeds on wet cotton) are easy to do together. Anything with flames, strong
    acids or mains electricity stays in the school lab.
  </p>
  <p>
    Online works well from Class 9 onwards, especially for doubt-clearing and timed tests, and it removes the evening
    drive entirely. Many Gurugram families settle on one home session a week plus one online, with the same tutor. Our
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring guide</a> weighs up both.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-fees">Science home tutor fees in Gurugram</h2>
  <p>
    Across NXTutors, most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>. For science in Gurugram, the
    main things that move a fee within that range are:
  </p>
  <ul>
    <li><strong>Class.</strong> Classes 6 to 8 sit towards the lower end; Class 10 board preparation and ICSE subject-specialist teaching towards the higher end.</li>
    <li><strong>Single tutor or specialist.</strong> A general science tutor usually costs less per hour than a physics or chemistry specialist.</li>
    <li><strong>Travel and slot.</strong> A peak-hour drive across Sohna Road or Golf Course Extension Road is priced in; a tutor in your own sector often is not. Online sessions can cost less.</li>
    <li><strong>Frequency.</strong> Three or more sessions a week, or a monthly arrangement, often brings the hourly rate down.</li>
  </ul>
  <p>
    You see each shortlisted tutor's fee before the demo. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> has
    more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-choose">Choosing a science tutor in Gurgaon: what to watch in the demo</h2>
  <ol>
    <li><strong>Did they ask what school is on right now?</strong> A good science tutor teaches the chapter your child faces this week and checks older gaps along the way.</li>
    <li><strong>Did they draw?</strong> Science marks depend on diagrams: ray diagrams, the heart, a cell, an electrolysis set-up. Watch whether the tutor makes your child draw and label, not just look.</li>
    <li><strong>Did they handle a numerical step by step?</strong> Formula, substitution with units, answer with units. That is how CBSE and ICSE both give marks.</li>
    <li><strong>Did they use the right book?</strong> For CBSE, the current NCERT textbook, including the new Class 9 book this year. For ICSE, the school's prescribed book and CISCE papers.</li>
    <li><strong>Did they ask "why"?</strong> Competency-based questions reward reasoning. A tutor who asks your child to predict and explain is preparing them for the paper that exists now.</li>
    <li><strong>Was there a plan?</strong> Which chapters next, how progress will be checked, when tests start.</li>
  </ol>
  <p>
    If the answers are mostly no, tell us and we arrange the next demo at no charge. You can also browse
    <a href="{{ url('/tutors') }}">tutors</a> yourself.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="sg-start">Getting started with a science tutor in Gurugram</h2>
  <p>
    Send us your child's class, board, the part of science that worries you, your sector or society, and the slots
    that suit. We come back with two or three matched tutors; you choose one for a free demo and decide afterwards.
    Book a <a href="{{ url('/demo-class') }}">free demo class</a> or start from our
    <a href="{{ url('/city/gurugram') }}">Gurugram page</a>. Home, online and hybrid tuition are all available.
  </p>
  </section>

  </div>
</article>
