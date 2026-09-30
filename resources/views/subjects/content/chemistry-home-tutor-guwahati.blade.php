{{--
  Long-form guide for the "chemistry home tutor Guwahati" page (Classes 11 and
  12, NEET and JEE, ISC/IB/IGCSE, with the Assam Higher Secondary course named
  generally). Byline in config: NXTutors Academic Team. Local facts come only
  from database/seo-content/areas/guwahati-research.json (zone_facts and area
  "about" texts). Exam facts reuse the checked statements in
  database/seo-content/blog: cbse-class-12-chemistry-organicinorganic
  (chapter-wise marks, branch totals 23/14/33, 33 questions in five sections,
  no calculators or log tables, recall share about 40%, topics removed and
  school-assessed, practical scheme 8/8/6/4/4, KMnO4 titration against oxalic
  acid or Mohr's salt with the standard solution weighed by the student),
  neet-preparation-gurgaon-coaching-or-home-tutor (NEET UG 2026 pattern),
  jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern) and
  cambridge-vs-edexcel-igcse-gurgaon (Cambridge tiers). IB chemistry themes as
  already stated on the Delhi page. The state board's Higher Secondary
  chemistry (formerly AHSEC) is named only, with no paper pattern. No school,
  society, hospital or people's names, no distances or travel times, only the
  allowed fee sentence.

  Area links render only when that Guwahati area page exists and is active.
--}}
@php
  $ghAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ghA = function (string $slug, string $label) use ($ghAreaSlugs) {
      return in_array($slug, $ghAreaSlugs, true)
          ? '<a href="' . e(url('/city/guwahati/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ghc-guide" aria-labelledby="ghcGuideTitle">
  <h2 id="ghcGuideTitle">Chemistry home tutor in Guwahati: know where the marks are, keep the reactions written, and hold one steady weekly hour</h2>

  <p class="nx-guide__lede">
    Senior chemistry is a subject where small gaps grow. A shaky grasp of moles in Class 11 turns into dropped marks
    in solutions and electrochemistry a year later, and organic chemistry that is read but never written fades within
    weeks. A chemistry home tutor in Guwahati should know how the board paper is weighted, what NEET or JEE asks
    beyond it, and how to keep a regular hour alongside school and coaching. NXTutors shortlists two or three
    chemistry tutors who suit your child's course and neighbourhood. You see each fee before meeting, and the first
    class is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="Sections of this page">
    <strong>Sections:</strong>
    <a href="#ghc-weights">Chapter weights</a> ·
    <a href="#ghc-out">What left the paper</a> ·
    <a href="#ghc-branches">Studying each branch</a> ·
    <a href="#ghc-entrance">NEET and JEE</a> ·
    <a href="#ghc-lab">Practical marks</a> ·
    <a href="#ghc-boards">Other boards</a> ·
    <a href="#ghc-near">Five localities</a> ·
    <a href="#ghc-eleven">Starting in Class 11</a> ·
    <a href="#ghc-fees">Fees</a> ·
    <a href="#ghc-go">Getting matched</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ghc-weights">How is CBSE Class 12 chemistry weighted, chapter by chapter?</h2>
  <p>
    Unlike physics, whose marks come in blocks, chemistry has marks fixed chapter by chapter. Theory (043) is a three-hour, 70-mark
    paper of 33 compulsory questions in Sections A to E, with internal choice in places; calculators and log tables
    stay outside the hall. This session keeps the earlier question design.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Class 12 chemistry, 2026-27: the ten examined chapters ranked by marks, with their branch</caption>
    <thead>
      <tr><th scope="col">Chapter</th><th scope="col">Branch</th><th scope="col">Marks</th></tr>
    </thead>
    <tbody>
      <tr><td>Electrochemistry</td><td>Physical</td><td>9</td></tr>
      <tr><td>Aldehydes, Ketones and Carboxylic Acids</td><td>Organic</td><td>8</td></tr>
      <tr><td>Solutions; Chemical Kinetics</td><td>Physical</td><td>7 each</td></tr>
      <tr><td>The d- and f-Block Elements; Coordination Compounds</td><td>Inorganic</td><td>7 each</td></tr>
      <tr><td>Biomolecules</td><td>Organic</td><td>7</td></tr>
      <tr><td>Haloalkanes and Haloarenes; Alcohols, Phenols and Ethers; Amines</td><td>Organic</td><td>6 each</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Added up, organic chemistry carries 33 marks, physical 23 and inorganic 14. Organic is therefore close to half the
    paper, and electrochemistry, the heaviest single chapter, is largely numerical. Around 40% of marks go to recall
    and understanding; the remainder asks for application, analysis or evaluation. Chapter notes are in our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 organic and inorganic
    chemistry</a>, and the <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry tutor</a> page
    lays out the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-out">Which chapters are gone, and which are marked only in school?</h2>
  <p>
    For 2026-27, the solid state and the Group 15 to 18 elements of the p-block are no longer in the Class 12
    syllabus. Four further topics stay on the syllabus but are marked in school only: surface chemistry, the
    isolation of elements, polymers, and chemistry in everyday life. Notes passed down from a senior may still
    carry the removed chapters, which wastes revision weeks.
  </p>
  <p>
    Entrance exams follow their own syllabi, published by NTA, and some material the board has dropped, p-block
    chemistry among it, can still appear there. A NEET or JEE aspirant should check the official list before
    cutting anything. The <a href="{{ url('/chemistry-home-tutor/class-11') }}">Class 11 chemistry tutor</a> page
    covers the foundation year that Class 12 leans on.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-branches">Does each branch need a different way of studying?</h2>
  <p>
    Yes, and a tutor who treats all three alike wastes sessions:
  </p>
  <ul>
    <li><strong>Physical chemistry</strong> is practised, not read: two or three problems a session from solutions, electrochemistry or kinetics, with units written on every line.</li>
    <li><strong>Organic chemistry</strong> is written: one page that connects alcohols, aldehydes, ketones, acids and amines, redrawn from memory each week and checked against NCERT.</li>
    <li><strong>Inorganic chemistry</strong> is reasoned: trends in the d-block and naming and bonding in coordination compounds explained, then asked back as "give reasons" answers.</li>
  </ul>
  <p>
    A weekly rhythm that holds: a five-question recall start on last week's chapter, teaching the school's current
    chapter, a short numerical block, and two board-style written reasons marked on the spot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-entrance">How much chemistry sits in NEET and JEE Main?</h2>
  <p>
    NEET (UG) 2026 was one pen-and-paper test of 180 questions for 720 marks, and chemistry made up a quarter: 45
    questions, 180 marks. In JEE Main 2026 Paper 1, chemistry had 25 of the 75 questions, 20 multiple-choice in
    Section A and 5 numerical-value in Section B. Both used +4 for a right answer and −1 for a wrong one; NTA can
    change the pattern, so check each year's bulletin.
  </p>
  <p>
    For NEET, speed and precision with the NCERT text matter most, above all in the inorganic and organic
    chapters. JEE leans harder on reaction mechanisms and on physical chemistry problems that run over several steps. In both cases, bring a chapter to
    board standard before its entrance questions begin. See
    <a href="{{ url('/blog/-neet-chemistry-important-chapters-') }}">NEET chemistry chapters worth most</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry, branch by branch</a> and
    <a href="{{ url('/blog/neet-preparation-gurgaon-coaching-or-home-tutor') }}">coaching or a home tutor for NEET</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-lab">How much of the practical exam can be prepared at home?</h2>
  <p>
    Of the 30 practical marks, titration and salt analysis earn 8 each; a content-based experiment is worth 6,
    the project 4, and the class record together with the viva 4. This session's titration uses potassium permanganate against oxalic acid
    or Mohr's salt (ferrous ammonium sulphate), and each student weighs out the standard solution. Reagents stay in
    the school lab, yet a tutor can drill the molarity working, a tidy readings table, why salt analysis runs from
    preliminary to confirmatory tests, a project small enough to finish without help, and
    viva favourites such as why permanganate needs no separate indicator.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-boards">Higher Secondary, ISC, IB or IGCSE chemistry: can you find a tutor?</h2>
  <ul>
    <li><strong>Assam Higher Secondary:</strong> the state board's course for Classes 11 and 12, long run by AHSEC. It sets its own syllabus and scheme, so take them from its official notices, and ask for a tutor who teaches from the prescribed books in your child's medium.</li>
    <li><strong>ISC:</strong> CISCE theory with practical and project work; answers need more explanation than a one-line reason.</li>
    <li><strong>IB Diploma:</strong> SL or HL, built on two themes, structure and reactivity. The investigation is the student's; a tutor may question the plan, not add to it.</li>
    <li><strong>Cambridge IGCSE:</strong> Core or Extended tiers; students moving to CBSE Class 11 often need early work on moles and atomic structure. The tiers are explained in our <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge versus Edexcel IGCSE</a> article.</li>
  </ul>
  <p>
    Specialists beyond CBSE are fewer, so ask early; an online specialist plus a nearby tutor who marks written
    answers is a sound fallback.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-near">Which evening hour can a chemistry tutor keep in your locality?</h2>
  <p>
    Chemistry is written work, usually done after school or coaching, and Guwahati's tutors travel by road, so the
    evening traffic on your stretch matters. Five localities show the range; compare tutors on our
    <a href="{{ url('/city/guwahati') }}">Guwahati page</a>.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
      <h3>Central, on GS Road</h3>
      <p>
        {!! $ghA('ulubari', 'Ulubari') !!} sits between Paltan Bazaar and Bhangagarh, with GS Road and its flyover
        running through and mostly low- and mid-rise apartments; tell the guard to expect the tutor, and nudge the
        class earlier or later than the evening peak. Match-day crowds near the stadiums are worth checking too.
        {!! $ghA('bhangagarh', 'Bhangagarh') !!}, a busy central market locality, is served by GS Road buses from the
        old city and the south; agree a time outside the heaviest evening traffic and share the floor and a gate
        phone number.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>The south and the far south</h3>
      <p>
        {!! $ghA('kahilipara', 'Kahilipara') !!} mixes houses, villas and apartment buildings beside large
        government compounds, so arrangements vary lane by lane; office hours crowd some roads, which makes evening or
        weekend slots easier. {!! $ghA('khanapara', 'Khanapara') !!}, towards the Meghalaya border and a hub for
        regional transport, is reachable by tutors from Beltola, Six Mile or Jayanagar; plan around main-road peaks
        and share the flat number for the gate.
      </p>
    </div>
    <div class="nx-guide__card">
      <h3>Across the river</h3>
      <p>
        {!! $ghA('north-guwahati', 'North Guwahati') !!}, on the north bank, has more houses and plots than
        apartments. Three bridges now link it with the city, the newest a six-lane road bridge opened in February
        2026, yet a south-bank tutor still faces a long ride. Ask for a nearby tutor, share a clear landmark, and
        consider online lessons for ISC or IB chemistry.
      </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-eleven">Is Class 11 the right time to bring in a chemistry tutor?</h2>
  <p>
    For many students it is the cheaper year to act. Class 12 builds directly on the mole concept, equilibrium and
    the first organic chapters of Class 11, and weaknesses there surface later as lost marks in solutions,
    electrochemistry and organic conversions. A tutor who makes stoichiometry automatic and gets a student writing
    reaction mechanisms early leaves the board year, and any entrance preparation, with far less catching up to do.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-fees">What do chemistry home tutors in Guwahati charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Every tutor sets a
    rate, which tends to rise with the exam targeted and the tutor's record in it, and reflects the evening trip to
    your area and the sessions booked each week. The same tutor may quote less for online lessons. You see all
    fees ahead of the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ghc-go">What should you send us for a chemistry shortlist?</h2>
  <p>
    Tell us the class and course, the exam that matters most, the branch that is losing marks, your locality with a
    landmark, and your free evenings. A shortlist of two or three chemistry tutors follows with fees, and you choose
    one for a free demo class. A wrong fit gets another demo, and switching tutor later is free. If no suitable
    tutor can travel to you, the plan moves wholly or partly online. NXTutors is based in Sector 66, Gurugram, and runs
    online classes across India; the national <a href="{{ url('/chemistry-home-tutor') }}">chemistry home tutor</a>
    page describes how we work in other cities.
  </p>
  <p>
    Chemistry teachers who live in Guwahati can browse current student requests on the
    <a href="{{ url('/tuition-jobs/guwahati') }}">Guwahati tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
