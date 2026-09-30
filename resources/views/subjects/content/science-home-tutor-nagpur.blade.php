{{--
  Long-form guide for the "science home tutor Nagpur" page (Classes 6 to 10).
  Byline in config: Aaditya Kashyap; role statement only, no anecdotes. Local
  facts come only from database/seo-content/areas/nagpur-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  already used on the Delhi science page (CBSE Class 10: 80 + 20 with internal
  5/5/5/5, 39 questions by type, 30/25/25 by subject, unit marks, 50/30/20
  competency split, formative-only topics, 14 listed experiments, two Class 10
  exams; Class 9 Exploration unit marks; Curiosity for Classes 6 and 7; ICSE
  three science papers with internal assessment). The Maharashtra State Board
  is described in general terms only (SSC, state textbooks); no exam pattern
  is stated for it. No school, society, hospital, campus or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Nagpur area page exists and is active.
--}}
@php
  $ngpsAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ngpsA = function (string $slug, string $label) use ($ngpsAreaSlugs) {
      return in_array($slug, $ngpsAreaSlugs, true)
          ? '<a href="' . e(url('/city/nagpur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ngps-guide" aria-labelledby="ngpsGuideTitle">
  <h2 id="ngpsGuideTitle">Science home tutor in Nagpur, Classes 6 to 10: teach from the right book, then build habits the board paper rewards</h2>

  <p class="nx-guide__lede">
    A child who writes "food pipe" instead of "oesophagus", forgets the arrow on a ray, or leaves the unit off an
    answer loses marks in Class 10 for habits that set in around Class 7. The right science tutor in Nagpur fixes
    those habits early, teaches from the textbook your child's board actually uses, and reaches your home in the
    same after-school window every week, whether that is near a metro station in Laxmi Nagar or off a busy road in
    Mankapur. NXTutors shortlists two or three science tutors who fit. Each fee is shown before any visit, and the
    first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ngps-books">Which textbook</a> ·
    <a href="#ngps-ladder">Year by year</a> ·
    <a href="#ngps-paper">The Class 10 board paper</a> ·
    <a href="#ngps-internal">Internal marks</a> ·
    <a href="#ngps-icse">ICSE</a> ·
    <a href="#ngps-homes">Six neighbourhoods</a> ·
    <a href="#ngps-demo">What to watch in the demo</a> ·
    <a href="#ngps-fees">Fees</a> ·
    <a href="#ngps-begin">Beginning</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ngps-books">State Board, CBSE or ICSE: which textbook should the tutor open?</h2>
  <p>
    Aaditya Kashyap writes the CBSE and ICSE guidance on this page. The first thing to settle is the
    book, because the three boards taught in Nagpur present science quite differently.
  </p>
  <p>
    <strong>Maharashtra State Board</strong> students learn from state-prescribed textbooks and sit the SSC
    examination, conducted by the Maharashtra State Board of Secondary and Higher Secondary Education, after Class
    10. A tutor should work from those books and the board's own papers. We leave the SSC science scheme to the
    board's official site and the school. <strong>CBSE</strong> uses NCERT books and one combined science paper in
    Class 10. <strong>ICSE</strong> schools choose textbooks within the CISCE syllabus, and Class 10 science is examined
    as three separate papers. The national <a href="{{ url('/science-home-tutor') }}">science home tutor</a> page
    explains how we match in every city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-ladder">How should science tuition change from Class 6 to Class 10?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A CBSE science ladder for Nagpur families, Classes 6 to 10: the book, and where a tutor should put the effort</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Book</th><th scope="col">Where the tutor's effort goes</th></tr>
    </thead>
    <tbody>
      <tr><td>6 and 7</td><td>NCERT <em>Curiosity</em>, built around activities</td><td>One precise sentence and one labelled sketch for every activity</td></tr>
      <tr><td>8</td><td>NCERT's current Class 8 book</td><td>Units on every number; word equations; the three strands pulling apart</td></tr>
      <tr><td>9</td><td>NCERT <em>Exploration</em>, new this session</td><td>Motion graphs, the particle picture of matter and the cell, all at once</td></tr>
      <tr><td>10</td><td>NCERT science, board year</td><td>Application-heavy answers for the 80-mark paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Class 9 deserves a closer look. The yearly exam is marked out of 80, with 20 internal. Matter, its nature and
    behaviour carries the most, 27; World of living 25; Motion, force, work and sound 23; and Earth as a system 5.
    Notes inherited from an elder sibling were written for the previous book, so a Class 9 plan should start from
    the new chapters. Until Class 10, one tutor for all three strands is usually enough, and has an edge: the same
    person can see that a physics numerical is failing on its algebra. The
    <a href="{{ url('/science-home-tutor/class-7') }}">Class 7 science tutor</a> and
    <a href="{{ url('/science-home-tutor/class-9') }}">Class 9 science tutor</a> pages go deeper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-paper">What is in the CBSE Class 10 science paper for 2026-27?</h2>
  <p>
    It is a three-hour paper of 80 marks. Seen by strand, the units line up like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 10 science, 2026-27: strand totals and the units inside each</caption>
    <thead>
      <tr><th scope="col">Strand</th><th scope="col">Strand total</th><th scope="col">Units and their marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Biology</td><td>30</td><td>World of Living 25; Our Environment 5</td></tr>
      <tr><td>Chemistry</td><td>25</td><td>Chemical Substances: Nature and Behaviour 25</td></tr>
      <tr><td>Physics</td><td>25</td><td>Effects of Current 13; Natural Phenomena 12</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The session's sample paper sets 39 questions. Twenty are worth a mark each, a mix of multiple-choice and
    assertion–reason. Thirteen are short answers, six at two marks and seven at three. Three are case- or
    source-based items at four marks, and the last three are five-mark long answers. On thinking skills, 50% of the
    marks go to knowledge and understanding, 30% to application and 20% to analysis and evaluation.
  </p>
  <p>
    All Class 10 candidates now take a main board exam, and a second, optional exam lets eligible students try to
    better their marks in as many as three subjects, science among them. The 2027 dates are not announced, so check
    cbse.gov.in. Our <a href="{{ url('/blog/cbse-class-10-science-notes') }}">CBSE Class 10 science notes</a> take the
    chapters in order, and the <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science tutor</a> page
    plans the board year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-internal">Which Class 10 marks does the school control?</h2>
  <p>
    The 20 internal marks come in four fives: periodic assessment, multiple assessment, a portfolio, and subject
    enrichment through practical work. In 2026-27 three topics are assessed only by the school and are left out of
    the board paper: the generator with electromagnetic induction and the motor, evolution, and the periodic
    classification of elements. They still need teaching, for school marks and for Class 11, just not in the last
    revision weeks. The curriculum also names 14 experiments that board questions draw on, so a practical file that
    the student can explain is revision in disguise.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-icse">What should ICSE families in Nagpur look for?</h2>
  <p>
    With physics, chemistry and biology examined separately in ICSE Class 10, each paper carrying its own internal
    assessment, some families bring in a tutor for one weak paper only, often from Class 9. Whatever the arrangement,
    the tutor must teach from the textbooks your school uses and from CISCE specimen papers rather than an NCERT
    plan. Definitions stated loosely and numericals left half set out are where ICSE science marks usually go.
    ICSE-experienced science tutors are fewer than CBSE ones, so an early request, or an online specialist, helps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-homes">How does a science tutor reach six Nagpur neighbourhoods?</h2>
  <p>
    Younger children study between school and dinner, so a short, repeatable trip matters most. Some neighbourhoods
    sit near the Orange or Aqua Line; others rely on two-wheelers and autos. See every zone on the
    <a href="{{ url('/city/nagpur') }}">Nagpur page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Near the metro</h3>
      <p>
        {!! $ngpsA('gokulpeth', 'Gokulpeth') !!}, a compact locality in the Dharampeth part of the city, is served by
        Aqua Line stops on North Ambazari Road such as Shankar Nagar Square; tutors walk or take an auto from there.
        Straight-after-school slots are calmer than late evening, when the shopping streets fill.
        {!! $ngpsA('laxmi-nagar', 'Laxmi Nagar') !!} is mostly three-bedroom apartments and family homes; Rahate Colony
        on the Orange Line is the usual link. Buildings commonly register visitors, so share the tutor's name and time
        with the gate.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Wardha Road and the Ring Road</h3>
      <p>
        {!! $ngpsA('manish-nagar', 'Manish Nagar') !!} is served by Ujjwal Nagar station on the Orange Line, with city
        buses to Wardha Road; many families live in gated apartment buildings, and the railway crossing slows peak-hour
        trips. {!! $ngpsA('pratap-nagar', 'Pratap Nagar') !!} lies along the Ring Road with plotted-layout homes and
        apartments; the nearest metro is Rachana Ring Road Junction on the Aqua Line, then an auto. Avoid the office
        peak on the Ring Road.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Road-served north and east</h3>
      <p>
        {!! $ngpsA('mankapur', 'Mankapur') !!}, crossed by Chhindwara Road, the Katol bypass and the Ring Road, has no
        metro nearby, so tutors come by two-wheeler, car or auto; highway traffic is heavy at peak hours.
        {!! $ngpsA('nandanvan', 'Nandanvan') !!} is a large east Nagpur locality of apartments and older family homes,
        with Ambedkar Square on the Aqua Line as the usual metro link. Older houses mean doorstep visits.
      </p>
    </div>
  </div>
  <p>
    In all six, the window straight after school tends to hold better than the evening peak on Wardha Road, the Ring
    Road or Chhindwara Road. A tutor living along the same metro line, or on your side of the Ring Road, is usually
    the most dependable weekday choice, and where an ICSE or specialist need cannot be met nearby, one online lesson a
    week fills the gap.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-demo">What should you watch for during the free demo?</h2>
  <p>
    Ask the tutor to teach an ordinary lesson on the chapter your child is doing at school, and notice whether they
    insist on these four things without being prompted:
  </p>
  <ol>
    <li><strong>The exact term.</strong> "Alveoli", not "air sacs"; "oesophagus", not "food pipe".</li>
    <li><strong>A balanced equation.</strong> With state symbols wherever the question asks for them.</li>
    <li><strong>A complete diagram.</strong> Arrows on rays, labels on parts, a Punnett square behind any ratio.</li>
    <li><strong>Points to match the marks.</strong> Three distinct points for a three-mark answer; a diagram or equation plus four or five points for five.</li>
  </ol>
  <p>
    The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> lists more.
    If the fit is wrong, we book a demo with the next tutor on your shortlist, and a later change of tutor is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-fees">What does a science home tutor in Nagpur cost?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors choose their own
    fee. Between Classes 6 and 10, board-year help usually costs more than middle-school support, and the trip to
    your zone and the number of weekly lessons also shape the figure. All fees are visible before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-nagpur') }}">Nagpur tuition fees guide</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngps-begin">How do you begin?</h2>
  <p>
    Send the class and board, the strand that is causing trouble, your neighbourhood with the nearest square or
    station, and the afternoons that suit you. We come back with two or three science tutors and their fees, and you
    pick one for a free demo class. Where no suitable tutor can travel at that time, we propose online or mixed
    lessons. NXTutors is based in Sector 66, Gurugram, and teaches online across India; the
    <a href="{{ url('/blog/nagpur-tuition-guide') }}">Nagpur tuition guide</a> covers the city's zones.
  </p>
  <p>
    Science teachers living in Nagpur can view open student requests on the
    <a href="{{ url('/tuition-jobs/nagpur') }}">Nagpur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
