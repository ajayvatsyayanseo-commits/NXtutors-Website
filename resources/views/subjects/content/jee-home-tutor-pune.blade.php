{{--
  Pune page for JEE home tutors (maths, physics, chemistry). The exam itself is
  covered on the national hub (/jee-home-tutor); this page is about JEE tuition
  across Pune and Pimpri-Chinchwad: which zones the metro serves and which depend on
  road travel, an illustrative coaching week, home versus online by subject, and
  Class 11, Class 12 and repeat-year plans for State Board (HSC), CBSE and ISC students.

  Exam facts (brief recap, reworded) from the NTA JEE (Main) 2026 Information
  Bulletin (jeemain.nta.nic.in: Paper 1 computer-based, maths/physics/chemistry,
  20 MCQ + 5 numerical per subject, 300 marks, 3 hours, +4/-1 in both sections, two
  sessions; JEE Advanced eligibility by rank in Paper 1) and the JEE (Advanced)
  2026 Information Brochure (jeeadv.ac.in: two compulsory 3-hour papers, at most two
  attempts in two consecutive years). MHT-CET named only because the Pune city hub
  names it (State CET Cell); no pattern or dates given.
  Local detail only from database/seo-content/areas/pune-research.json,
  pune-zone-guides.json, database/seo-content/zones/pune.json and the Pune city hub
  view. No schools, colleges, coaching institutes or societies named. Area links
  render only for active Pune areas. Fee wording is the approved sentence.
  FAQs render from faqs/jee-home-tutor-pune.php.
--}}
@php
  $jpnSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jpnA = function (string $slug, string $label) use ($jpnSlugs) {
      return in_array($slug, $jpnSlugs, true)
          ? '<a href="' . e(url('/city/pune/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jpnGuideTitle">
  <h2 id="jpnGuideTitle">JEE home tutor in Pune: metro zones, road zones and a coaching week that still has room</h2>

  <p class="nx-guide__lede">
    Pune splits neatly in two for a JEE family. Some neighbourhoods sit on a working metro line, so a strong physics
    or maths tutor from across the city can arrive in one ride. Others, including several of the IT suburbs, still
    depend entirely on the road, and there the tutor's own address decides whether a weekly slot survives. This page
    covers how JEE tuition works in both kinds of zone, how to slot a tutor around a coaching timetable, which subject
    suits a home visit and which suits a screen, and how plans differ for a State Board junior college student, a CBSE
    or ISC student, and a student taking a repeat year. For the exams and the syllabus in full, start with our national
    <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jpn-exams">JEE and MHT-CET</a> ·
    <a href="#jpn-zones">Metro and road zones</a> ·
    <a href="#jpn-week">An example week</a> ·
    <a href="#jpn-subjects">Subject by subject</a> ·
    <a href="#jpn-boards">State Board, CBSE, ISC</a> ·
    <a href="#jpn-stages">By stage</a> ·
    <a href="#jpn-cases">Situations</a> ·
    <a href="#jpn-demo">Demo checklist</a> ·
    <a href="#jpn-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jpn-exams">JEE Main, JEE Advanced and the state's MHT-CET</h2>
  <p>
    The NTA's 2026 bulletin set JEE (Main) Paper 1 as a computer-based test lasting three hours. Each of mathematics,
    physics and chemistry had 20 multiple-choice questions and five that needed a numerical answer, 300 marks in all,
    and wrong answers lost a mark in both sections. There were two sessions, and the strongest performers became
    eligible for JEE (Advanced): two compulsory three-hour papers set by the IITs.
  </p>
  <p>
    The Pune city hub notes that many State Board students also take MHT-CET, Maharashtra's own entrance test. Use only
    the State CET Cell's notices for its syllabus and dates, and only the current NTA bulletin and JEE Advanced brochure
    (jeemain.nta.nic.in, jeeadv.ac.in) for JEE. Tell us which tests your child is sitting so the tutor plans for all of them.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-zones">Metro zones and road zones</h2>
  <p>
    The table sorts Pune's zones by how a tutor gets there. Each zone page lists its localities and tutors, and the
    <a href="{{ url('/city/pune') }}">Pune home tuition</a> page has the full map.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How JEE tutors reach each Pune zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Getting there</th><th scope="col">What it means for JEE tuition</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/pune/zone/kothrud-karve-nagar-deccan') }}">Kothrud, Karve Nagar and Deccan</a>, e.g. {!! $jpnA('kothrud', 'Kothrud') !!}</td><td>Aqua Line from Vanaz to District Court, linking to the Purple Line</td><td>The widest choice of specialists; start before Paud Road's early-evening slowdown or after it clears</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/aundh-baner-pashan') }}">Aundh, Baner and Pashan</a>, e.g. {!! $jpnA('aundh', 'Aundh') !!}</td><td>No working metro station yet; Line 3 is still being built</td><td>Look for a tutor from the next suburb; a later evening or weekend slot avoids University Road's office traffic</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/wakad-hinjewadi-pimpri-chinchwad') }}">Wakad, Hinjewadi and Pimpri-Chinchwad</a>, e.g. {!! $jpnA('wakad', 'Wakad') !!}</td><td>Purple Line to PCMC Bhavan for Pimpri; road only for Wakad and Hinjewadi</td><td>Office traffic near the bypass is heavy; hybrid plans help the IT suburbs most</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/viman-nagar-kalyani-nagar-kharadi') }}">Viman Nagar, Kalyani Nagar and Kharadi</a>, e.g. {!! $jpnA('kalyani-nagar', 'Kalyani Nagar') !!}</td><td>Aqua Line stations at Kalyani Nagar, Yerwada and Ramwadi; Kharadi has none</td><td>Let the session begin after Nagar Road's evening wave has passed</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/hadapsar-kondhwa-nibm') }}">Hadapsar, Kondhwa and NIBM</a>, e.g. {!! $jpnA('hadapsar', 'Hadapsar') !!}</td><td>No metro; local trains from Hadapsar and buses from Gadital</td><td>Start with tutors already living in the zone; long cross-city rides are where timetables slip</td></tr>
      <tr><td><a href="{{ url('/city/pune/zone/katraj-bibwewadi-sinhagad-road') }}">Katraj, Bibwewadi and Sinhagad Road</a>, e.g. {!! $jpnA('bibwewadi', 'Bibwewadi') !!}</td><td>Purple Line to Swargate, then bus or auto</td><td>Check the onward leg fits the lesson time before fixing it weekly</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The <a href="{{ url('/blog/west-pune-tuition-guide') }}">west Pune</a>,
    <a href="{{ url('/blog/east-pune-tuition-guide') }}">east Pune</a> and
    <a href="{{ url('/blog/south-pune-tuition-guide') }}">south Pune</a> guides go into more local detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-week">An illustrative week: Class 12, Wakad, coaching across the city</h2>
  <p>
    Picture a Class 12 student in a Wakad society with coaching on Tuesday, Thursday and Saturday evenings in another
    zone, and a stubborn gap in mechanics. A tutor driving in on weekday evenings would meet the IT traffic both ways.
    A week built around the geography looks different:
  </p>
  <ul>
    <li><strong>Monday, 4:30 pm, at home, 90 minutes:</strong> physics, one mechanics topic rebuilt and timed problems from the coaching module.</li>
    <li><strong>Wednesday, online, 40 minutes after dinner:</strong> doubts left over from Tuesday's batch.</li>
    <li><strong>Sunday morning, at home or online:</strong> the latest coaching test reviewed question by question, with an error log updated.</li>
  </ul>
  <p>
    In Kothrud or Deccan, with the metro on the doorstep, the same student could simply take two shorter home sessions.
    When you request tutors, give us the coaching days; we shortlist tutors whose own week fits yours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-subjects">Which subject belongs at home and which online</h2>
  <p>
    <strong>Mathematics</strong> rewards a tutor who sees the working line by line, so the longest home session usually
    goes here, particularly through Class 11 calculus and coordinate geometry. <strong>Physics</strong> mixes both:
    concept rebuilding at the table, test review on a shared screen. <strong>Chemistry</strong> splits by branch,
    with physical chemistry numericals at home and inorganic recall in short online quizzes. The Pune hub's own advice
    agrees: a tutor in the room for numericals, online lessons to open up specialists from elsewhere. On the heaviest
    monsoon days, the online fallback agreed in June keeps the week intact.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-boards">Starting JEE from the State Board, CBSE or ISC</h2>
  <p>
    Many Pune and Pimpri-Chinchwad students spend Classes 11 and 12 in a junior college under the Maharashtra State
    Board, learning from the state's prescribed textbooks. The JEE syllabus sits close to the NCERT books instead, and
    some topics are ordered or weighted differently. A tutor should handle this deliberately:
  </p>
  <ol>
    <li><strong>Map the units in the first fortnight.</strong> Each NTA unit set against the junior college's term plan, with late or lightly covered topics flagged.</li>
    <li><strong>Teach ahead only where it helps.</strong> If a flagged topic arrives late in college, the tutor covers it early so coaching tests do not catch the student out.</li>
    <li><strong>Keep the board in view.</strong> HSC answers are written in the board's own style, and practical journals still need finishing.</li>
    <li><strong>CBSE students</strong> follow NCERT already, so the tutor's job is depth and speed. <strong>ISC students</strong> should have the NTA units mapped against their school order, as with the State Board.</li>
  </ol>
  <p>
    Board-side help in the same subjects is on our <a href="{{ url('/maths-home-tutor-pune') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-pune') }}">physics</a> and <a href="{{ url('/chemistry-home-tutor-pune') }}">chemistry</a>
    pages for Pune.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-stages">What changes from Class 11 to a repeat year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>JEE tutoring by stage in Pune</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Pune timing note</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>Foundations in all three subjects, an error log from the first month, and the unit map against the board</td><td>Set it up before the first college term gets busy; State Board schools usually begin in June, CBSE in April</td></tr>
      <tr><td>Class 12</td><td>New chapters, Class 11 revision, full papers before the first JEE session, board answers before pre-boards</td><td>The first JEE Main session usually falls between January and March, the same stretch as board papers</td></tr>
      <tr><td>Repeat year</td><td>Diagnosis from last year's papers, weak chapters rebuilt, then many full papers</td><td>Daytime sessions avoid the evening traffic altogether; check the current attempt rules first</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the subject-level detail, see the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE maths</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-cases">Common Pune situations and the set-up that fits</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Matching the tutoring plan to the student</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">What usually works</th></tr>
    </thead>
    <tbody>
      <tr><td>In coaching, one subject far behind the other two</td><td>A single subject tutor, home session on a free afternoon plus a short online doubt slot</td></tr>
      <tr><td>Scores flat across all three subjects</td><td>Start with a test-analysis tutor to find where marks go, then add a subject only if the analysis points to it</td></tr>
      <tr><td>Preparing without coaching</td><td>A tutor per subject, a written weekly plan from the NTA syllabus, and a separate series of full-length papers</td></tr>
      <tr><td>Living in a road-only zone with few local specialists</td><td>An online specialist with occasional weekend home sessions, rather than the nearest generalist</td></tr>
      <tr><td>Moved to Pune mid-year</td><td>A diagnostic first session, because gaps from a previous board show in the first months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A practical point for home sessions: the townships and larger societies in Magarpatta, Kharadi or Wakad check
    visitors at the gate, sometimes down to cluster and tower, and some army areas near Camp have their own entry
    rules. Sort out the gate pass, parking or a drop point before the first visit, because JEE sessions are long and a
    late start costs real teaching time. For a bungalow in Erandwane or Model Colony, a lane name and map pin are enough.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-demo">Demo checklist for a Pune JEE family</h2>
  <ul>
    <li>Bring the questions your child got wrong in the latest coaching test.</li>
    <li>Ask the tutor how they would map the NTA syllabus against your junior college or school.</li>
    <li>Watch whether the student does the solving while the tutor questions and corrects.</li>
    <li>Settle the route: which metro station or road, how long at your slot, and the rain-day fallback.</li>
    <li>For a gated society, give the guard the tutor's name, tower and flat a day early.</li>
    <li>Leave with a written plan for the next four weeks.</li>
  </ul>
  <p>
    The first class is a free demo, and if the tutor is not right we line up the next one. See also our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jpn-fees">JEE tutor fees in Pune and the next step</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee, visible before you book. A tutor riding in from a distant zone may quote differently
    for home and online. The <a href="{{ url('/blog/home-tuition-fees-pune') }}">Pune home tuition fees</a> guide and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> explain how fees vary.
  </p>
  <p>
    Send the class, board, target exams, subjects, coaching days, locality and society, and the slots that work; we come
    back with two or three matched tutors. Book a <a href="{{ url('/demo-class') }}">free demo class</a> or look through
    <a href="{{ url('/tutors') }}">tutor profiles</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. Preparing for medicine?
    Read <a href="{{ url('/neet-home-tutor-pune') }}">NEET home tutor in Pune</a>. Teachers can find students on
    <a href="{{ url('/tuition-jobs/pune') }}">Pune tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
