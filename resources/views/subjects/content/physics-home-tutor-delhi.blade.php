{{--
  Long-form guide for the "physics home tutor Delhi" page (Classes 11 and 12,
  JEE and NEET, ISC/IB/IGCSE). Byline in config: NXTutors Academic Team.
  Local facts come only from database/seo-content/areas/delhi-research.json
  (zone_facts and area "about" texts). Exam facts reuse the checked statements
  in database/seo-content/blog: cbse-class-12-physics-strategies (70 + 30, 33
  questions in sections A to E, blocks 33/18/12/7, recall share, practical
  scheme and record requirements, no calculators, transistors and logic gates
  out), jee-preparation-gurgaon-coaching-or-home-tutor (JEE Main 2026 pattern,
  JEE Advanced 2026 eligibility), neet-preparation-gurgaon-coaching-or-home-tutor
  (NEET UG 2026 pattern) and -ib-physics-slhl-iaee (new guide first assessed
  May 2025, teaching hours, five themes, two papers 80%, investigation 20%).
  No state board is described. No school, society, mall or people's names, no
  distances or travel times, only the allowed fee sentence.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $dlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dlA = function (string $slug, string $label) use ($dlAreaSlugs) {
      return in_array($slug, $dlAreaSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide dlp-guide" aria-labelledby="dlpGuideTitle">
  <h2 id="dlpGuideTitle">Physics home tutor in Delhi: name the target exam, then fit the tutor to your evening</h2>

  <p class="nx-guide__lede">
    Senior physics is taught for several quite different exams. A student in Class 12 may be writing a CBSE or ISC
    board paper, sitting JEE or NEET a few months later, or working through an IB or IGCSE course with its own
    rules. Each target asks for different practice, and a Delhi student's evenings are often split between school,
    coaching and a metro ride home. NXTutors shortlists two or three physics tutors who teach your child's target and
    can reach your locality at the hour you have free. Fees are shown before you meet, and the first class is a free
    demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dlp-target">Targets compared</a> ·
    <a href="#dlp-marks">The 70 theory marks</a> ·
    <a href="#dlp-record">Practical and record</a> ·
    <a href="#dlp-routine">A routine for numericals</a> ·
    <a href="#dlp-late">Late slots by locality</a> ·
    <a href="#dlp-ib">IB, ISC and IGCSE</a> ·
    <a href="#dlp-eleven">Beginning in Class 11</a> ·
    <a href="#dlp-fees">Fees</a> ·
    <a href="#dlp-demo">Booking a demo</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dlp-target">Which exam is the physics tuition really for?</h2>
  <p>
    The chapters overlap, but the scoring does not. Settle the main target before the first session, because it
    decides what the tutor sets each week:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Physics targets for Delhi students in Classes 11 and 12: how each is assessed and what tuition should stress</caption>
    <thead>
      <tr><th scope="col">Target</th><th scope="col">How it is assessed</th><th scope="col">What tuition should stress</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE Class 12 (042)</td><td>Three-hour theory paper of 70 with 33 compulsory questions, no calculator; 30 practical marks</td><td>Derivations from a diagram, labelled ray and circuit diagrams, case-based reading</td></tr>
      <tr><td>ISC Class 12</td><td>CISCE theory paper with practical and project work</td><td>Numericals set out in full, as the paper expects</td></tr>
      <tr><td>JEE Main (2026 pattern)</td><td>Computer-based; physics was 25 of 75 questions, 20 multiple-choice and 5 numerical-value, +4 and −1</td><td>Speed on multi-step problems and honest mock-test review</td></tr>
      <tr><td>JEE Advanced</td><td>Open in 2026 only to the top 2,50,000 JEE Main candidates</td><td>Depth: several concepts in a single problem, past Advanced papers</td></tr>
      <tr><td>NEET (UG) (2026 pattern)</td><td>Pen and paper; physics was 45 of 180 questions and 180 of 720 marks, +4 and −1</td><td>Accuracy on NCERT concepts, fewer risky attempts</td></tr>
      <tr><td>IB Diploma Physics</td><td>Two exam papers worth 80% together, plus a scientific investigation worth 20%</td><td>Data handling, uncertainties and the current five-theme syllabus</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Entrance syllabi are published by the conducting body, not by CBSE, and can include topics the board has dropped,
    so check the current bulletin at nta.ac.in before trimming anything. For priorities, see the
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE physics topic-wise guide</a>, the
    <a href="{{ url('/blog/-neet-physics-highyield') }}">high-yield NEET physics chapters</a> and our comparison of
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor for JEE</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-marks">How are the 70 theory marks spread in CBSE Class 12 physics?</h2>
  <p>
    The 2026-27 sample paper keeps last session's design. Fourteen NCERT chapters fall into four mark blocks.
    Electricity and magnetism, from electrostatics through to alternating current, together carry 33 marks, close to
    half the paper. Optics with electromagnetic waves is the largest single block at 18. Dual nature, atoms and
    nuclei add 12, usually as short numericals, and semiconductor electronics adds 7. Transistors and logic gates are
    no longer in the syllabus, so notes that still teach them are out of date.
  </p>
  <p>
    Question by question, Section A holds 16 one-mark items, 12 multiple-choice and 4 assertion–reason; Section B
    five two-mark questions; Section C seven three-mark questions; Section D two four-mark case studies; and Section E
    three five-mark long answers. Only about 38% of marks reward recall, so a tutor who simply dictates notes is
    preparing for a smaller share of the paper than it seems. Values of physical constants are supplied, and no
    calculator is allowed. Class 12 has one main board exam; the 2027 date sheet is not out, so follow cbse.gov.in.
    Our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 physics strategies</a> article lists the
    derivations that return year after year, and the
    <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics tutor</a> page maps the year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-record">What must the practical record contain, and where does a tutor help?</h2>
  <p>
    The 30 practical marks are among the most controllable in the subject. Two experiments, one from each section,
    carry 7 marks each; the practical record 5; one activity 3; the investigatory project 3; and a viva on all of
    them 5. The record itself must include at least eight experiments, four from each section, at least six
    activities, three from each section, and the project report.
  </p>
  <p>
    The apparatus is in the school laboratory, but much of the preparation can happen at a table at home. A tutor can
    check that each experiment in the record states its aim, diagram and observation table correctly, go through
    sources of error and precautions, and hold a mock viva that asks the question behind the reading: why take
    several readings, what the slope of the graph stands for, what would change with a different wire. A
    student who can answer those walks into the viva prepared.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-routine">What routine should every physics numerical follow?</h2>
  <p>
    Most lost physics marks come from how a numerical is written, not from the concept. A tutor should make the same
    four steps automatic in every session, for every target:
  </p>
  <ol>
    <li><strong>Draw it.</strong> A free-body diagram, a ray diagram or a circuit, with directions marked, before any equation.</li>
    <li><strong>Name the law.</strong> One line saying which principle applies, which is where board examiners start giving marks.</li>
    <li><strong>Carry the units.</strong> Substitute with units on every line, so a wrong power of ten shows up at once.</li>
    <li><strong>Check the answer.</strong> Is the sign sensible, is the size believable, and does the unit match the quantity asked for?</li>
  </ol>
  <p>
    Bring your child's last two test papers to the free demo. A capable tutor will read them and tell you which of
    these steps is missing before teaching anything new.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-late">Can a physics tutor keep a late slot in your part of Delhi?</h2>
  <p>
    Senior students often reach home after coaching, so physics tuition tends to start late. Whether a tutor can keep
    that hour depends on the route. Six localities across south, west, north and east Delhi show the range; browse
    tutors near you on our <a href="{{ url('/city/delhi') }}">Delhi page</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Evening physics tuition in six Delhi localities: homes, the rail link and what to arrange</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Part of Delhi</th><th scope="col">Homes</th><th scope="col">Rail link and what to arrange</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $dlA('hauz-khas', 'Hauz Khas') !!}</td><td>South</td><td>A plotted enclave of lettered blocks around the medieval tank</td><td>Hauz Khas is a Yellow and Magenta Line interchange, the deepest station on the network; Green Park serves the northern blocks. Give the RWA guard the tutor's name.</td></tr>
      <tr><td>{!! $dlA('vasant-kunj', 'Vasant Kunj') !!}</td><td>South-west</td><td>DDA flats, builder floors and newer towers in lettered sectors, pockets and blocks</td><td>No station inside; Vasant Vihar on the Magenta Line, then an auto. Share sector, pocket and flat number clearly.</td></tr>
      <tr><td>{!! $dlA('dwarka-sector-6', 'Dwarka Sector 6') !!}</td><td>West</td><td>Society apartments and DDA self-financing flats</td><td>Blue Line at Sector 10 or Magenta Line at Palam; two lines help tutors from either side. Gate registers apply.</td></tr>
      <tr><td>{!! $dlA('rohini-sector-16', 'Rohini Sector 16') !!}</td><td>North</td><td>RWA-run societies and builder floors, mostly two and three bedrooms</td><td>Rithala on the Red Line, or Rohini Sector 18, 19 or Samaypur Badli on the Yellow Line, depending on the pocket; name your pocket when booking.</td></tr>
      <tr><td>{!! $dlA('model-town', 'Model Town') !!}</td><td>North</td><td>Builder floors and independent houses in Model Town I, II and III</td><td>Model Town and Azadpur on the Yellow Line; mostly doorstep visits, with some RWA gates at night.</td></tr>
      <tr><td>{!! $dlA('karkardooma', 'Karkardooma') !!}</td><td>East</td><td>Cooperative societies and apartments, with some houses</td><td>Karkarduma is a Blue and Pink Line interchange; expect a gate entry and a call to the flat on the first visit.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    On the evenings when coaching runs late, one online session a week with the same tutor keeps the plan intact
    without asking anyone to travel at the end of the day.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-ib">What should IB, ISC and IGCSE families check?</h2>
  <ul>
    <li><strong>IB Diploma.</strong> A new physics guide was first assessed in May 2025. The old core-plus-options structure and Paper 3 have gone, and the syllabus now runs in five themes, A to E. The IB recommends 150 teaching hours at SL and 240 at HL. The scientific investigation must be the student's own; a tutor may discuss the plan but writes none of it. Revision notes for the previous course still circulate, so check any book's date. Our <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL and HL guide</a> covers the change.</li>
    <li><strong>ISC.</strong> CISCE sets theory, practical and project work, and answers are expected in more detail than a short CBSE line. Confirm that the tutor knows your exam year's syllabus.</li>
    <li><strong>Cambridge IGCSE.</strong> Core or Extended tier. Students moving into CBSE Class 11 afterwards often need early work on vectors, graphs and derivations.</li>
  </ul>
  <p>
    Specialists for these courses are fewer than CBSE tutors, so name the course when you first ask. If none can reach
    you, pair an online specialist with a nearby tutor who checks written practice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-eleven">Is Class 11 too early for a physics tutor?</h2>
  <p>
    Usually it is the cheapest point at which to start. Class 11 races from measurement and motion into Newton's
    laws, energy, rotation and gravitation, and each chapter assumes comfort with vectors, graphs and rates of change,
    sometimes before maths lessons have reached them. Class 12 then reuses those tools with charges in place of
    masses. A term spent making components, slopes and areas under graphs routine saves a great deal of repair work
    in the board year. Families still deciding on a stream can read our
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a>; the
    <a href="{{ url('/physics-home-tutor/class-11') }}">Class 11 physics tutor</a> page goes chapter by chapter, and
    the national <a href="{{ url('/physics-home-tutor') }}">physics home tutor</a> page gives the wider picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-fees">What should you budget for a physics tutor in Delhi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor quotes their
    own fee, reflecting the target, from the board paper to JEE Advanced, their experience at that level, the evening trip to your locality and the number of weekly sessions. Online sessions with
    the same tutor may cost less. All fees are visible before the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dlp-demo">How do you book a physics demo in Delhi?</h2>
  <p>
    Share the class and course, whether the aim is the board, JEE or NEET, your locality with its block, pocket or
    sector, and the evenings left after school and coaching. We reply with two or three matched physics tutors and
    their fees, and you choose one for a free demo class. If the fit is wrong, we arrange another demo, and switching
    tutor later is also free. Where nobody suitable can travel at your hour, we suggest online or mixed sessions.
    NXTutors works from Sector 66, Gurugram, and teaches online across India.
  </p>
  <p>
    Physics teachers living in Delhi can look through open student requests on the
    <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a> page.
  </p>
  </section>

  </div>
</article>
