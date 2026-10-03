{{--
  Board page "CBSE home tutor Bengaluru" (Classes 6-12). Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE
  and ICSE science). No anecdotes, years or results are claimed for either.
  No schools, societies or people are named.

  CBSE facts are only those stated in cbse-home-tutor-gurgaon, which cites
  (cbseacademic.nic.in and cbse.gov.in, read 1 Oct 2026):
  - Curriculum 2026-27, Secondary (Classes IX-X), Curriculum_SecP1_2026-27.pdf:
    80 + 20 internal in major subjects, 33% to pass, about half the questions
    competency-focused, common 80-mark maths/science paper with optional
    Advanced (25 marks, 1 hour) from 2026-27, not added to the aggregate;
    R3 compulsory in the transition, internally assessed.
  - Notification 14.02.2026, two Class X board examinations from 2026.
  - Curriculum 2026-27, Senior Secondary, Curriculum_SecP2_2026-27.pdf:
    subject-wise theory / practical or internal splits.
  Karnataka SSLC and PUC described only in general terms, as the Bengaluru
  hub does. Local detail only from database/seo-content/areas/
  bengaluru-research.json, bengaluru-zone-guides.json, zones/bengaluru.json
  and the Bengaluru city hub. Fee wording is the approved NXTutors sentence.
  FAQs render from faqs/cbse-home-tutor-bengaluru.php. Area links render only
  when that Bengaluru area page exists and is active.
--}}
@php
  $cbblSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cbblA = function (string $slug, string $label) use ($cbblSlugs) {
      return in_array($slug, $cbblSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cbbl-guide" aria-labelledby="cbblGuideTitle">
  <h2 id="cbblGuideTitle">CBSE home tutors in Bengaluru: what the board asks, class by class, and who can reach you</h2>

  <p class="nx-guide__lede">
    Bengaluru families sit four kinds of school examination, and CBSE is one of the main ones beside the Karnataka
    state board, ICSE and the international programmes. A CBSE tutor here has two jobs: teach the NCERT chapters in the
    way the board now marks them, and turn up on time across a city where the Outer Ring Road can swallow an hour. This
    page covers the CBSE changes that matter from 2026-27, how CBSE differs from SSLC and PUC study, the subjects
    parents most often want help with, and how tutors reach each zone. Abhinandan Tiwary writes on Class 10 CBSE and
    ICSE maths and Aaditya Kashyap on CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbbl-mix">CBSE among Bengaluru's boards</a> ·
    <a href="#cbbl-state">CBSE or SSLC and PUC</a> ·
    <a href="#cbbl-stages">Class by class</a> ·
    <a href="#cbbl-nine">Classes 9 and 10 now</a> ·
    <a href="#cbbl-senior">Classes 11 and 12</a> ·
    <a href="#cbbl-subjects">Subjects and pages</a> ·
    <a href="#cbbl-zones">Reaching each zone</a> ·
    <a href="#cbbl-mode">Home or online</a> ·
    <a href="#cbbl-demo">Demo checklist</a> ·
    <a href="#cbbl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbbl-mix">Where CBSE sits among Bengaluru's boards</h2>
  <p>
    Our Bengaluru requests come from four examination routes: the Karnataka state board with its SSLC and PUC, CBSE,
    CISCE's ICSE and ISC, and the IB or Cambridge IGCSE. We do not quote a share for each board, because we have no
    reliable count, and the mix changes from one neighbourhood and one school to the next. What is clear is that a
    CBSE request can mean very different things: a Class 7 child who needs number sense, a Class 10 student facing the
    first board exam, or a Class 11 student who has just moved over from the state board and finds NCERT physics
    written in an unfamiliar way.
  </p>
  <p>
    That mix shapes what we ask first. A tutor who has spent years on state textbooks may know the maths perfectly
    and still teach the wrong question styles for a CBSE paper, so we match class and board together.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-state">How CBSE differs from SSLC and PUC study</h2>
  <p>
    The Karnataka state board runs the SSLC examination at the end of Class 10 and the two-year pre-university course
    after it, with its own textbooks and its own notices for each year's scheme. CBSE works from the NCERT books and
    publishes a sample paper and marking scheme for each subject before the exams. In general terms, the differences a
    family feels are these:
  </p>
  <ul>
    <li><strong>The textbook.</strong> A CBSE tutor should teach from NCERT and its exemplar problems, not from a state guide that covers similar topics in a different order.</li>
    <li><strong>The question style.</strong> CBSE says about half of each secondary board paper is competency-focused: case-based, source-based, data and application questions. Practising only end-of-chapter exercises leaves a gap.</li>
    <li><strong>Internal marks.</strong> In major CBSE subjects, 20 of every 100 marks are assessed by the school, so steady work through the year counts.</li>
    <li><strong>After Class 10.</strong> PUC is a separate two-year course under the state; CBSE students stay with the same board for Classes 11 and 12, with practical or internal marks in every subject.</li>
  </ul>
  <p>
    When a child moves from the state board into CBSE, the maths and science content transfers well.
    What needs a few weeks of work is the NCERT language and the longer, applied questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-stages">What a CBSE tutor does at each stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE from Class 6 to Class 12 for a Bengaluru family</caption>
    <thead>
      <tr><th scope="col">Classes</th><th scope="col">Who examines</th><th scope="col">Where help pays off</th></tr>
    </thead>
    <tbody>
      <tr><td>6 to 8</td><td>The school only</td><td>Fractions, integers, early algebra and the idea behind each science activity; computational thinking now sits inside these classes too</td></tr>
      <tr><td>9</td><td>The school, on an 80 + 20 pattern</td><td>A secure common maths and science paper, and a calm decision on the optional Advanced level</td></tr>
      <tr><td>10</td><td>CBSE board (80) with school marks (20)</td><td>Board-style answers in every subject, with the first exam treated as the real one</td></tr>
      <tr><td>11</td><td>The school</td><td>Closing the jump in physics, chemistry and maths, or in accountancy and economics, before Class 12 begins</td></tr>
      <tr><td>12</td><td>CBSE board, with practicals or internal work</td><td>The full Class 12 syllabus, practical files and timed papers</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-nine">Classes 9 and 10 under the 2026-27 curriculum</h2>
  <p>
    From 2026-27, every Class 9 student takes one common maths paper and one common science paper, each 80 marks and
    three hours. On top of that, a student may opt for Mathematics Advanced, Science Advanced, both or neither. An
    Advanced paper is a one-hour, 25-mark test made entirely of higher-order questions on extra content; CBSE does not
    add it to the aggregate, but a score of 50% or more is recorded on the marksheet. A student who already enjoys
    the subject and finishes school work comfortably is a fair candidate. A student still shaky on the common paper
    gains more from making that secure.
  </p>
  <p>
    Class 10 has had two board exams since 2026. Everyone sits the first. A student who passes may use the second to
    improve up to three subjects from science, maths, social science and the languages; missing three or more subjects
    in the first rules out the second. In each major subject, the board paper carries 80 marks and the school's internal
    assessment 20, and 33% is needed to pass. The transition batches also study a compulsory third language, assessed
    by the school with no board paper, which still has to be passed. The
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 maths preparation</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> posts go chapter by chapter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-senior">Classes 11 and 12: theory, practicals and coaching hours</h2>
  <p>
    In the senior classes, physics, chemistry and biology each carry a 70-mark theory paper and 30 marks of practical
    work; maths or applied maths (a student takes only one) and the commerce subjects carry 80 and 20. The Class 12
    board paper covers the whole Class 12 syllabus, and CBSE says its papers will lean further toward questions set in
    real situations.
  </p>
  <p>
    For a student who also attends entrance coaching, a board tutor earns their place by working around that
    timetable: complete NCERT answers with every step written, diagrams and units in science, the practical
    file kept current, and sample papers marked against CBSE's scheme. If entrance preparation is the main goal, see
    <a href="{{ url('/jee-home-tutor-bengaluru') }}">JEE home tutors in Bengaluru</a> or
    <a href="{{ url('/neet-home-tutor-bengaluru') }}">NEET home tutors in Bengaluru</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-subjects">Which CBSE subjects Bengaluru parents ask about</h2>
  <p>
    Up to Class 10, maths and science lead by a distance, because each year builds on the one before. In Classes 11
    and 12, physics, chemistry and maths dominate for science students, with biology for those aiming at medicine;
    commerce families ask for accountancy and economics. English comes up most when a child has changed board or
    school. Each subject has its own Bengaluru page:
  </p>
  <ul>
    <li><a href="{{ url('/maths-home-tutor-bengaluru') }}">Maths home tutors in Bengaluru</a> and <a href="{{ url('/science-home-tutor-bengaluru') }}">science home tutors</a> for Classes 6 to 10.</li>
    <li><a href="{{ url('/physics-home-tutor-bengaluru') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-bengaluru') }}">biology</a> tutors for Classes 11 and 12.</li>
    <li><a href="{{ url('/english-home-tutor-bengaluru') }}">English home tutors in Bengaluru</a> for CBSE language and literature.</li>
  </ul>
  <p>
    For a fuller account of how CBSE marks each paper, read our reference page on
    <a href="{{ url('/cbse-home-tutor-gurgaon') }}">how the CBSE board works, Classes 6 to 12</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-zones">How CBSE tutors reach each part of Bengaluru</h2>
  <p>
    A tutor who can keep the same weekly slot all term is worth more than a slightly stronger one who is late every
    other week. The metro now decides much of that.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Travel for a home tutor, zone by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">How tutors usually arrive</th><th scope="col">For a CBSE request, mention</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>, e.g. {!! $cbblA('hsr-layout', 'HSR Layout') !!}</td><td>Yellow Line to Central Silk Board, then an auto into the sectors; Bellandur only by road</td><td>Sector, main and cross numbers</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>, e.g. {!! $cbblA('jp-nagar', 'JP Nagar') !!}</td><td>Green Line stations from Lalbagh south, with the Yellow Line one change away</td><td>Which phase, since the phases run far south</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a>, e.g. {!! $cbblA('btm-layout', 'BTM Layout') !!}</td><td>Yellow Line along Hosur Road</td><td>Your station and the exit you use</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>, e.g. {!! $cbblA('indiranagar', 'Indiranagar') !!}</td><td>Purple Line, two stations inside Indiranagar</td><td>A slot before the 100 Feet Road evening rush</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a></td><td>Purple Line to Whitefield (Kadugodi) and the stops before it</td><td>Society desk rules for visitors</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>, e.g. {!! $cbblA('kalyan-nagar', 'Kalyan Nagar') !!}</td><td>Road only for now; the Blue Line here is under construction</td><td>Whether a tutor from the zone itself is preferred</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a></td><td>Road; no metro station open in the zone</td><td>Which side of the Hebbal flyover you live</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a>, e.g. {!! $cbblA('rajajinagar', 'Rajajinagar') !!}</td><td>Green Line, with most homes near a station</td><td>Cross and main road numbers</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a></td><td>Purple Line west to Kengeri</td><td>A map pin for the hilly streets</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a></td><td>Purple Line to Halasuru or Trinity; Frazer Town by road</td><td>An afternoon or early-evening slot</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/city/bengaluru') }}">Bengaluru home tuition page</a> lists every area. The
    <a href="{{ url('/blog/south-bengaluru-tuition-guide') }}">south Bengaluru</a> and
    <a href="{{ url('/blog/east-bengaluru-tuition-guide') }}">east Bengaluru</a> tuition guides add local timing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-mode">Home or online for CBSE?</h2>
  <p>
    Because CBSE is one of the main boards in Bengaluru, a home tutor nearby is usually the first thing to try, particularly up to Class 10 and for any child who drifts during screen lessons. Online
    sessions earn their place in two cases: where the commute crosses the Outer Ring Road or the Hebbal flyover at
    office hours, and in Classes 11 and 12, when a strong physics or chemistry specialist may live across town. A mix
    works well for many families: one home session at the weekend, one online on a weekday. For online maths and
    science, insist that the tutor sees the written working live.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-demo">Demo checklist for a CBSE tutor</h2>
  <ol>
    <li><strong>This year's papers.</strong> Ask which sample paper and marking scheme they are teaching from. The answer should be the current one.</li>
    <li><strong>An unseen case.</strong> Give them a case-based question from a sample paper and see whether they teach how to read it, not just the formula.</li>
    <li><strong>NCERT language.</strong> For a child arriving from SSLC, check that the tutor connects state-book topics to the NCERT chapter names and terms.</li>
    <li><strong>Steps and units.</strong> Watch whether they mark the working, not only the final answer, since CBSE marking schemes award marks by step.</li>
    <li><strong>The Class 9 choice.</strong> Ask whether they would advise an Advanced paper for your child, and why.</li>
    <li><strong>Internal work.</strong> Ask how they support the 20 school marks or the practical file without doing them for your child.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each one's fee before the demo, and switching tutor later is free.
    Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbbl-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For CBSE in Bengaluru,
    the class, how many subjects, sessions a week and the tutor's journey to your area set the figure. The
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">Bengaluru home tuition fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> have more.
  </p>
  <p>
    Send the class, subjects, your area with its block, stage or sector, and the slots you can offer. The first class
    is a <a href="{{ url('/demo-class') }}">free demo</a>, and you can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> meanwhile. CBSE teachers living in the city can see open requests on
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
