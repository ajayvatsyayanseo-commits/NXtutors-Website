{{--
  Long-form guide for the "chemistry home tutor Nagpur" page (Classes 11 and
  12, NEET and JEE, ISC/IB/IGCSE, Maharashtra State Board HSC in general
  terms). Byline in config: NXTutors Academic Team. Local facts come only from
  database/seo-content/areas/nagpur-research.json (zone_facts and area "about"
  texts). Exam facts reuse the checked statements already used on the Delhi
  chemistry page (CBSE Class 12 chapter marks, branch totals 23/14/33, 33
  questions in five sections, no calculators or log tables, recall share,
  deleted and school-assessed topics, practical scheme 8/8/6/4/4, KMnO4
  titration against oxalic acid or Mohr's salt with a student-weighed
  standard; NEET UG and JEE Main 2026 patterns; IB chemistry themes; IGCSE
  tiers). HSC and MHT CET are named only, with no pattern stated. No school,
  society, hospital, campus or people's names, no distances or travel times,
  only the allowed fee sentence.

  Area links render only when that Nagpur area page exists and is active.
--}}
@php
  $ngpcAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ngpcA = function (string $slug, string $label) use ($ngpcAreaSlugs) {
      return in_array($slug, $ngpcAreaSlugs, true)
          ? '<a href="' . e(url('/city/nagpur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ngpc-guide" aria-labelledby="ngpcGuideTitle">
  <h2 id="ngpcGuideTitle">Chemistry home tutor in Nagpur: rank the chapters by marks, prune the old notes, and protect the weekly slot</h2>

  <p class="nx-guide__lede">
    Chemistry is the senior subject where steady written practice pays most and gaps cost most, often a year after
    they open. A Nagpur student may be writing the HSC or a CBSE or ISC board paper, with NEET, JEE Main or MHT CET
    alongside, and fitting it all between school, coaching and the trip home. A useful chemistry tutor knows which
    chapters carry the marks, what each entrance exam adds, and how to keep a session going through the pre-board
    months. NXTutors sends two or three chemistry tutors who suit your child's course and neighbourhood, with fees
    visible before you meet. The first class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ngpc-rank">Chapters ranked</a> ·
    <a href="#ngpc-cuts">Syllabus cuts</a> ·
    <a href="#ngpc-hsc">HSC and MHT CET</a> ·
    <a href="#ngpc-entrance">NEET and JEE chemistry</a> ·
    <a href="#ngpc-prac">The practical</a> ·
    <a href="#ngpc-places">Six neighbourhoods</a> ·
    <a href="#ngpc-courses">ISC, IB and IGCSE</a> ·
    <a href="#ngpc-halfyear">The half-yearly check</a> ·
    <a href="#ngpc-fees">Fees</a> ·
    <a href="#ngpc-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ngpc-rank">Which CBSE Class 12 chemistry chapters are worth the most?</h2>
  <p>
    The 70-mark theory paper lasts three hours and holds 33 compulsory questions across Sections A to E, some with
    internal choice. There are no calculators and no log tables. For 2026-27 the design is the same as last year, and
    unusually for a science, marks are fixed chapter by chapter. Ranked from heaviest:
  </p>
  <ol>
    <li><strong>Electrochemistry, 9.</strong> Mostly numerical; the single heaviest chapter.</li>
    <li><strong>Aldehydes, Ketones and Carboxylic Acids, 8.</strong> The largest organic chapter and the hub of most conversions.</li>
    <li><strong>Solutions, Chemical Kinetics, the d- and f-Block Elements, Coordination Compounds and Biomolecules, 7 each.</strong></li>
    <li><strong>Haloalkanes and Haloarenes; Alcohols, Phenols and Ethers; Amines, 6 each.</strong></li>
  </ol>
  <p>
    Grouped by branch, organic totals 33, physical 23 and inorganic 14. So nearly half the theory paper is organic,
    and a weekly conversion drill from the first month beats a late rush. About 40% of the paper checks remembering
    and understanding; 60% asks for application, analysis or evaluation. The
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry
    guide</a> handles each chapter, and the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry
    tutor</a> page plans the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-cuts">What has been cut from the board syllabus?</h2>
  <p>
    Old notes can steer a student into chapters that no longer count. In 2026-27 the solid state and the p-block's
    Groups 15 to 18 are gone from the Class 12 syllabus. Polymers, chemistry in everyday life, surface chemistry and
    the extraction of elements from ores are still taught, but only the school assesses them; they never appear on
    the board paper.
  </p>
  <p>
    NEET and JEE Main are another matter. NTA publishes their syllabi separately, and some material the board has
    dropped, p-block chemistry included, may still be examined, so an entrance student should read the official list
    first. Class 12 also depends on Class 11 foundations: moles, equilibrium and the opening organic chapters. The
    <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page covers that year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-hsc">What about HSC chemistry and MHT CET?</h2>
  <p>
    Many Nagpur students in Classes 11 and 12 study chemistry on the Maharashtra State Board, from
    state-prescribed textbooks, towards the HSC. We do not describe the HSC chemistry paper here; the board publishes
    it and your school has the current version. When you ask for a tutor, tell us the board, so the shortlist leans
    towards people who teach from the state books and the board's own past papers. MHT CET is run by the State Common
    Entrance Test Cell, which publishes its scheme on its official site; a student sitting it with the HSC needs a
    tutor who can show where the entrance asks for more than the textbook.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-entrance">How much chemistry do NEET and JEE Main carry?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Chemistry in NEET (UG) and JEE Main, 2026 pattern, and what a tutor should test</caption>
    <thead>
      <tr><th scope="col">Exam, 2026</th><th scope="col">Chemistry questions</th><th scope="col">Marks and scoring</th><th scope="col">What the tutor should test</th></tr>
    </thead>
    <tbody>
      <tr><td>NEET (UG), pen and paper</td><td>45 of 180</td><td>180 of 720; +4 right, −1 wrong</td><td>Fast, exact recall of NCERT lines, especially inorganic and organic</td></tr>
      <tr><td>JEE Main Paper 1</td><td>25 of 75: 20 multiple-choice (Section A), 5 numerical-value (Section B)</td><td>+4 right, −1 wrong</td><td>Mechanisms step by step; physical chemistry problems in several stages</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    NTA revises the pattern each year, so work from the latest bulletin. Whichever exam applies, bring each chapter to
    board standard before starting its entrance questions, ideally in the same week. See the
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">important NEET chemistry chapters</a>, the
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">physical, organic and inorganic JEE chemistry
    guide</a>, and <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or a home
    tutor for NEET</a>; the <a href="{{ url('/chemistry-home-tutor/neet') }}">NEET chemistry tutor</a> page explains how
    we match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-prac">What happens in the practical, and what can be prepared at home?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry practical, 30 marks, 2026-27: components and home preparation</caption>
    <thead>
      <tr><th scope="col">Component</th><th scope="col">Marks</th><th scope="col">Home preparation</th></tr>
    </thead>
    <tbody>
      <tr><td>Volumetric analysis (titration)</td><td>8</td><td>Molarity of the weighed standard; a neat readings table</td></tr>
      <tr><td>Salt analysis</td><td>8</td><td>The order of preliminary and confirmatory tests, and why</td></tr>
      <tr><td>Content-based experiment</td><td>6</td><td>The idea behind the set-up, explained aloud</td></tr>
      <tr><td>Project</td><td>4</td><td>A topic the student can defend alone</td></tr>
      <tr><td>Class record and viva</td><td>4</td><td>Mock viva questions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    This session's titration pits potassium permanganate against oxalic acid or Mohr's salt (ferrous ammonium
    sulphate), and students weigh and prepare the standard solution themselves. A typical viva question: why does a
    permanganate titration need no added indicator?
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-places">What does your neighbourhood change for a chemistry tutor?</h2>
  <p>
    Senior chemistry is done with a pen, usually after school or coaching, and a slot that survives the whole year
    depends on the route in. Six neighbourhoods across the city show the differences; see every zone on the
    <a href="{{ url('/city/nagpur') }}">Nagpur page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Central and south-west</h3>
      <p>
        {!! $ngpcA('ramdaspeth', 'Ramdaspeth') !!} is a central locality of larger three- and four-bedroom apartments
        among offices and restaurants; expect a gate entry, and note that Congress Nagar on the Orange Line is next
        door in Dhantoli. Earlier weekday slots avoid the evening build-up. {!! $ngpcA('khamla', 'Khamla') !!}, mostly
        two- and three-bedroom apartments, is reached from Orange Line stations on Wardha Road such as Jaiprakash
        Nagar, then by auto; traffic round Khamla Square thickens in the evening.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>South and south-east</h3>
      <p>
        {!! $ngpcA('besa', 'Besa') !!}, a growing area along Besa-Pipla Road, has no station of its own; Ujjwal Nagar on
        the Orange Line and an auto are the usual link. Independent homes mean doorstep visits.
        {!! $ngpcA('hudkeshwar', 'Hudkeshwar') !!}, on the south-eastern edge along Hudkeshwar Road, has no metro, so
        tutors come by two-wheeler, car or auto; newer apartment buildings register visitors.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>North</h3>
      <p>
        {!! $ngpcA('koradi-road', 'Koradi Road') !!} is a belt of plotted layouts, houses and newer apartments beyond
        the metro's reach; commuter traffic on the main road peaks morning and evening. In
        {!! $ngpcA('gittikhadan', 'Gittikhadan') !!}, along Katol Road, tutors usually ride in; Gaddi Godam Square on the
        Orange Line is the nearest metro stop, and independent homes have parking outside.
      </p>
    </div>
  </div>
  <p>
    If a route looks shaky in the pre-board months, run two sessions at home and one online each week.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-courses">Can you find ISC, IB or IGCSE chemistry tutors in Nagpur?</h2>
  <p>
    Yes, though fewer than for CBSE or the State Board, so ask early. ISC chemistry combines a CISCE theory paper
    with practical and project work and wants reasons argued in full. IB Diploma chemistry, at SL or HL, is built
    around two themes, structure and reactivity, and the scientific investigation belongs to the student; a tutor can
    challenge the plan but not add to it. IGCSE sciences are tiered Core or Extended, and students switching to Class
    11 on an Indian board often need early work on moles and atomic structure; our
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge or Edexcel IGCSE</a> comparison
    explains the tiers. Where no specialist can travel, pair one online with a nearby tutor who marks written work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-halfyear">What should be in place by the half-yearly exam?</h2>
  <p>
    Parents do not need to follow the chemistry to judge the tuition. By the half-yearly exam, ask to see three
    things: a single reaction map linking alcohols, carbonyl compounds, acids and amines, extended as each chapter
    ends; physical chemistry numericals with units written on every line; and at least two sample-paper sections
    scored against CBSE's official marking scheme, with each lost mark explained in the margin. If one of these is
    missing, raise it with the tutor; if two are missing, raise it with us, and we set up a demo with another tutor
    from your shortlist.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-fees">How much do chemistry home tutors in Nagpur charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor names a
    rate, which usually rises with the exam and the tutor's experience of it and also reflects the evening journey
    and how many sessions you book. Online sessions with the same tutor may cost less. Fees are shown before the
    demo; the <a href="{{ url('/blog/home-tuition-fees-nagpur') }}">Nagpur tuition fees guide</a> has more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ngpc-start">How do you start?</h2>
  <p>
    Send the class, the board, the exam with most at stake, the branch where marks go missing, your neighbourhood and
    your free evenings. We reply with two or three matched chemistry tutors and their fees, and you choose one for a
    free demo class. Another demo follows if the fit is wrong, and changing tutor later is free. If nobody suitable
    can reach you, we suggest online or mixed sessions. NXTutors works from Sector 66, Gurugram, and teaches online
    across India; the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a> page and the
    <a href="{{ url('/blog/nagpur-tuition-guide') }}">Nagpur tuition guide</a> add more.
  </p>
  <p>
    Chemistry teachers in Nagpur who want students near home can browse open requests on the
    <a href="{{ url('/tuition-jobs/nagpur') }}">Nagpur tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
