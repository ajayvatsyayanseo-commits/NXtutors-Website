{{--
  Board hub for "CBSE home tutor Delhi" (Classes 6-12). Authors: Abhinandan
  Tiwary (role: Class 10 CBSE and ICSE maths) and Aaditya Kashyap (role: CBSE
  and ICSE science). No anecdotes, years or results are claimed for either. No
  schools, coaching institutes, societies or people are named.

  Board facts are reworded from the Gurgaon CBSE hub (cbse-home-tutor-gurgaon),
  which cites these official sources (cbseacademic.nic.in and cbse.gov.in, read
  1 Oct 2026):
  - Curriculum 2026-27, Secondary (Classes IX-X), Curriculum_SecP1_2026-27.pdf:
    80 marks board / school annual exam + 20 internal assessment in major
    subjects; 33% to pass; about 50% competency-focused questions; sample
    papers and marking schemes on cbseacademic.nic.in; Class IX maths and
    science at a common standard (80 marks) plus optional Advanced (25 marks,
    1 hour, all HOTS) from 2026-27, board-examined in Class X from 2027-28, not
    added to the aggregate; Basic/Standard discontinued from 2026-27 except for
    the 2026-27 Class X batch; R3 mandatory in the transitional phase, assessed
    internally, no board exam; CT & AI for Classes III-VIII from 2026-27.
  - Notification 14.02.2026, Two Board Examinations in Class X from 2026: first
    exam mandatory; improvement in up to three subjects among science, maths,
    social science and languages in the second exam.
  - Curriculum 2026-27, Senior Secondary (Classes XI-XII),
    Curriculum_SecP2_2026-27.pdf: Physics 042, Chemistry 043, Biology 044 are
    70 theory + 30 practical; Mathematics 041 or Applied Mathematics 241 (any
    one) 80 + 20 IA; Economics 030, Business Studies 054, Accountancy 055
    80 + 20; more real-life application questions; Class XII board covers the
    entire syllabus.
  Delhi detail only from the Delhi city hub view (CBSE for most students,
  ICSE/ISC sizeable, a smaller IB/IGCSE group; no state board described),
  database/seo-content/areas/delhi-research.json and delhi-zone-guides.json.
  No board is said to concentrate in any area. Fee wording is the approved
  NXTutors sentence. FAQs render from faqs/cbse-home-tutor-delhi.php. Area links
  render only for active Delhi areas.
--}}
@php
  $cbdSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cbdA = function (string $slug, string $label) use ($cbdSlugs) {
      return in_array($slug, $cbdSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide cbd-guide" aria-labelledby="cbdGuideTitle">
  <h2 id="cbdGuideTitle">CBSE home tutors in Delhi: a stage-by-stage plan for Classes 6 to 12</h2>

  <p class="nx-guide__lede">
    In Delhi most home-tutor requests are CBSE, so the real question is which tutor fits this class, this subject
    and this metro line. CBSE is also mid-way through a set of
    changes that affect what a tutor should be doing each week: an optional harder paper in Class 9 maths and science,
    a third language in the transition years, and a second board exam in Class 10. This guide explains those changes,
    the subjects parents most often want help with, a useful session, a revealing demo and how tutors reach homes
    across the city. Abhinandan Tiwary covers
    Class 10 CBSE and ICSE maths on NXTutors, and Aaditya Kashyap covers CBSE and ICSE science.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#cbd-mix">CBSE in Delhi</a> ·
    <a href="#cbd-stages">Stage by stage</a> ·
    <a href="#cbd-nine-ten">Classes 9 and 10 now</a> ·
    <a href="#cbd-senior">Senior marks</a> ·
    <a href="#cbd-subjects">Subjects</a> ·
    <a href="#cbd-session">A useful session</a> ·
    <a href="#cbd-travel">Reaching your home</a> ·
    <a href="#cbd-mode">Home or online</a> ·
    <a href="#cbd-demo">The demo</a> ·
    <a href="#cbd-fees">Fees and next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="cbd-mix">Where CBSE sits among Delhi's boards</h2>
  <p>
    Our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> puts it simply: CBSE is the board most Delhi students
    sit, ICSE and ISC have a sizeable following, and a smaller group study for the IB or Cambridge IGCSE. The CBSE pool is
    therefore the widest in the city, so you can be choosy about subject depth and travel. But because so many tutors
    say "CBSE", the label alone tells you little; what separates them is whether they work from the current
    curriculum, sample papers and marking schemes.
  </p>
  <p>
    Some families arrive in Delhi from a state board in another part of India. The adjustment is often less about
    content and more about style: CBSE papers lean on application and
    unfamiliar contexts, and marks follow the published scheme step by step. A tutor's first month should go on question
    style and presentation, not on chapters the child already knows.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-stages">What each CBSE stage asks of a student</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>CBSE Classes 6 to 12: who examines, where students slip, and the tutor's first job</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Who examines</th><th scope="col">Where students commonly slip</th><th scope="col">The tutor's first job</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 6 to 8</td><td>The school alone; computational thinking and AI literacy now sit inside existing subjects</td><td>Fractions, negative numbers, the first algebra; reading a science diagram</td><td>Find the gap that will hurt in Class 9 and close it calmly</td></tr>
      <tr><td>Class 9</td><td>The school: an 80-mark annual paper plus 20 internal marks</td><td>Treating it as a "light" year; skipping NCERT exercises</td><td>Decide whether an Advanced paper suits the child, then keep the core syllabus secure</td></tr>
      <tr><td>Class 10</td><td>CBSE: an 80-mark board paper plus 20 marks assessed by the school</td><td>Knowing the chapter but losing marks on case-based questions</td><td>Sample-paper practice checked line by line against the marking scheme</td></tr>
      <tr><td>Class 11</td><td>The school</td><td>The step up in physics, chemistry and maths, or a new commerce subject</td><td>Rebuild the basics of the new subjects before the first unit test</td></tr>
      <tr><td>Class 12</td><td>CBSE, on the full Class 12 syllabus, with theory and practical or internal marks per subject</td><td>Running out of time for revision; weak practical files</td><td>A written revision calendar and full-paper practice well before pre-boards</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-nine-ten">Classes 9 and 10 under the current CBSE scheme</h2>
  <p>
    <strong>A common paper, with an optional harder one.</strong> CBSE's secondary curriculum for 2026-27 puts every
    Class 9 student on one maths syllabus and one science syllabus, each with an 80-mark, three-hour paper. Beyond
    that, a student can opt for Mathematics Advanced, Science Advanced, both or neither. Each Advanced paper carries 25
    marks, lasts an hour and consists only of higher-order questions on extra content. Those marks do not count in the
    aggregate; a student who reaches 50% gets a line on the marksheet saying the Advanced level was cleared. The board
    plans to examine the common paper in Class 10 from 2027-28. The old Basic and Standard split in maths is being
    phased out, although the Class 10 batch of 2026-27 finishes under the earlier scheme.
  </p>
  <p>
    Take Advanced only in a subject the child already enjoys; the common paper must not suffer for it.
  </p>
  <p>
    <strong>A third language.</strong> In the transition batches a third language (R3) is compulsory. The school
    assesses it and there is no board paper, but the Class 10 certificate depends on passing it. It needs a fixed slot
    in the week more than it needs a tutor.
  </p>
  <p>
    <strong>Two board exams in Class 10.</strong> Since 2026 the first board exam is compulsory for all. After passing
    it, a student may sit a second exam to raise marks in up to three subjects drawn from science, maths, social
    science and the languages. A student who did not appear in three or more subjects the first time cannot take the
    second. In each major subject the 80-mark board paper is combined with 20 internal marks, and 33% is needed to
    pass. Plan as if the first exam is the only one; the second is for repairing one subject that went badly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-senior">Classes 11 and 12: where the marks are decided</h2>
  <p>
    The 2026-27 senior curriculum gives each subject its own split. Physics (042), Chemistry (043) and Biology (044)
    are 70 marks of theory and 30 of practical work, so a neat, complete practical file and a confident viva are worth
    real marks. Mathematics (041) and Applied Mathematics (241), of which a student takes only one, are 80 marks of
    theory with 20 internal. Accountancy (055), Economics (030) and Business Studies (054) follow the same 80 and 20
    pattern. CBSE also says board papers will carry more questions set in real-life situations, within the prescribed
    syllabus and textbooks, and the Class 12 paper covers the whole Class 12 syllabus.
  </p>
  <p>
    Each year's sample question paper sets out the detail, so a senior tutor should open the current one first. If your child is still choosing a stream, read the
    <a href="{{ url('/blog/class-11-stream-choice-gurgaon') }}">Class 11 stream choice guide</a>; for a deeper look at
    how the board works, see our <a href="{{ url('/cbse-home-tutor-gurgaon') }}">CBSE home tutors in Gurgaon</a> guide.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-subjects">The subjects Delhi parents most often ask about</h2>
  <p>
    Up to Class 10 the requests are mostly maths and science, which build on earlier years and carry
    competency-style questions. In Classes 11 and
    12 the list splits by stream: physics, chemistry, maths and biology for science students; accountancy and economics
    for commerce. Social science and Hindi are more often a matter of a weekly routine than of tuition.
  </p>
  <ul>
    <li><strong>Maths:</strong> <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors in Delhi</a>, with board-year detail on <a href="{{ url('/maths-home-tutor/class-10') }}">Class 10 maths</a> and <a href="{{ url('/maths-home-tutor/class-12') }}">Class 12 maths</a>.</li>
    <li><strong>Science, Classes 6 to 10:</strong> <a href="{{ url('/science-home-tutor-delhi') }}">science home tutors in Delhi</a> and <a href="{{ url('/science-home-tutor/class-10') }}">Class 10 science</a>.</li>
    <li><strong>Senior sciences:</strong> <a href="{{ url('/physics-home-tutor-delhi') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-delhi') }}">biology</a> tutors in Delhi, plus <a href="{{ url('/physics-home-tutor/class-12') }}">Class 12 physics</a> and <a href="{{ url('/chemistry-home-tutor/class-12') }}">Class 12 chemistry</a>.</li>
    <li><strong>English:</strong> <a href="{{ url('/english-home-tutor-delhi') }}">English home tutors in Delhi</a> for writing, grammar and literature.</li>
    <li><strong>Entrance alongside the board:</strong> <a href="{{ url('/jee-home-tutor-delhi') }}">JEE</a> or <a href="{{ url('/neet-home-tutor-delhi') }}">NEET</a> home tutors in Delhi.</li>
    <li><strong>Accountancy, economics and business studies:</strong> matched on request; mention the class and the chapters your child finds hardest.</li>
  </ul>
  <p>
    Further reading: <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">preparing for CBSE Class 10 maths</a>,
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science notes</a> and
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">strategies for Class 12 physics</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-session">What a useful CBSE hour looks like</h2>
  <ol>
    <li><strong>Ten minutes on the school week.</strong> Which NCERT exercises were set, which were attempted, and one question the child could not do.</li>
    <li><strong>Thirty minutes on one idea.</strong> Taught from the NCERT explanation, then stretched with exemplar questions and one unseen passage, table or situation that uses the same idea.</li>
    <li><strong>Fifteen minutes of written answers.</strong> Two board-style questions done in full, then marked against the scheme: steps in maths, units and labelled diagrams in science, correct formats in accountancy.</li>
    <li><strong>Five minutes to close.</strong> A short, specific task for the week and a one-line note to the parent.</li>
  </ol>
  <p>
    Ask for a running log of chapters, scores and repeated mistakes, and read it monthly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-travel">How CBSE tutors reach homes across Delhi</h2>
  <p>
    Travel depends on the metro line, the gate and evening traffic, not the board. CBSE tutors live all over the city,
    so look for one whose own route is short. A few examples from our zone research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a></strong>, for instance {!! $cbdA('rohini-sector-7', 'Rohini Sector 7') !!}: DDA pockets are usually a straight walk to the door. Send sector, pocket, block and flat together, since block names repeat, and the pocket tells the tutor which station is nearest.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></strong>, for instance {!! $cbdA('dwarka-sector-12', 'Dwarka Sector 12') !!}: Blue Line riders reach most societies with a short e-rickshaw leg. Register the tutor as a regular visitor in the first week so the gate does not eat into the lesson.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/janakpuri-rajouri-garden-punjabi-bagh') }}">Janakpuri and West Delhi</a></strong>, for instance {!! $cbdA('janakpuri', 'Janakpuri') !!}: four metro lines cross the belt, so the choice of metro-riding tutors is wide; market parking is the hard part for anyone who drives.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar and Patparganj</a></strong>, for instance {!! $cbdA('mayur-vihar-phase-1', 'Mayur Vihar Phase 1') !!}: Mayur Vihar-I is a Blue and Pink Line interchange; start before the Noida Link Road gets busy at office hours.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar and Shahdara</a></strong>, for instance {!! $cbdA('laxmi-nagar', 'Laxmi Nagar') !!}: most homes are separate buildings, so the tutor goes straight to the floor; Vikas Marg slows sharply when offices open and close.</li>
    <li><strong><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket and Malviya Nagar</a></strong>, for instance {!! $cbdA('malviya-nagar', 'Malviya Nagar') !!}: the Yellow Line is the backbone; cross the Outer Ring Road junctions outside office hours.</li>
  </ul>
  <p>
    The zone guides for <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a>,
    <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi</a>,
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a> and
    <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a> go colony by colony.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-mode">Home or online for CBSE?</h2>
  <p>
    For Classes 6 to 10, and for any subject where the working matters, a tutor in the room is hard to beat: they see
    every line in the notebook and every slip in a diagram. Online classes earn their place for a short doubt
    session on a school night, a senior specialist who lives across the Yamuna or the Ring Road, and weeks when travel
    is unreliable. Many Delhi families settle on
    one fixed home lesson a week with the same tutor teaching a shorter online session in between. If you go online
    for maths or science, insist that the tutor can see written working live, on a tablet, a shared board or a camera
    above the page. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor versus online tutor</a>
    article weighs the two in more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-demo">A CBSE demo checklist</h2>
  <ol>
    <li><strong>Which documents?</strong> Ask which year's sample paper and marking scheme the tutor works from.</li>
    <li><strong>An unseen case-based question.</strong> Hand one over and watch whether the tutor teaches your child how to read it, not only which formula applies.</li>
    <li><strong>Internal marks and practicals.</strong> Ask how they would help with the 20 internal marks or the practical file while leaving the work to the student.</li>
    <li><strong>The Class 9 choice.</strong> For a Class 9 child, ask for a view on the Advanced paper, with reasons.</li>
    <li><strong>The route.</strong> Ask how they will travel, which station they use and what they do on a day the roads are blocked.</li>
  </ol>
  <p>
    You receive two or three matched tutors, see each fee before the demo, and can switch later for free. Tutors who
    join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> has more
    questions to ask.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="cbd-fees">CBSE tuition fees in Delhi and how to begin</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    For CBSE, the class, the number of subjects, sessions per week and the tutor's journey decide where in that range a
    fee lands. Read the <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi home tuition fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Send the class, subjects, your colony with its block or pocket, the nearest metro station and the slots you can
    offer. We shortlist two or three CBSE tutors and the first class is a <a href="{{ url('/demo-class') }}">free
    demo</a>. You can also browse <a href="{{ url('/tutors') }}">tutor profiles</a> first. Tutors looking for Delhi
    students can see open requests on <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>. Families
    weighing other boards can read our <a href="{{ url('/icse-home-tutor-delhi') }}">ICSE and ISC</a>,
    <a href="{{ url('/ib-tutor-delhi') }}">IB</a> and <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE</a> pages for Delhi.
  </p>
  </section>

  </div>
</article>
