{{--
  Board hub: "Telangana Board SSC & Intermediate tutor Hyderabad". Author:
  nxtutors (NXTutors Academic Team). No school, college, coaching, society or
  people names. No candidate numbers, no results, no exam dates beyond the
  official documents named below.

  Official sources (all read 2 Oct 2026):
  SSC, Directorate of Government Examinations, Telangana (bse.telangana.gov.in):
  - Home and About Us pages: the DGE's office conducts the SSC/OSSC examinations
    twice a year (links for SSC Public Examinations March 2026 and SSC ASE June
    2026 results); re-verification web note Rc.No.55/J-1/2026 dt 25-05-2026
    (photostat copies of valued answer scripts and re-verification, results via
    school-wise logins and the headmaster).
  - G.O.s page (ssc_gos.htm) and the orders it links:
    G.O.Ms.No.33 dt 28.12.2022 (Class IX final and SSC with 6 papers instead of
    11 from 2022-23: First Language, Second Language, Third Language English,
    Mathematics, Science, Social Studies; 100 marks each, 20 formative (four
    FAs) and 80 summative; Science in two parts, Physical Science and
    Biological Science, 40 marks each with separate question papers and answer
    scripts, FA 10 + 10; 3 hours including reading time; OSSC and composite
    course rules); G.O.Ms.No.23 dt 04.10.2024 (Physical Science and Biological
    Science on two separate days, 1 h 30 min each); Proceedings of the Director
    of School Education Rc.No.276/Genl/2024 dt 11.08.2025 (80% external and
    20% internal continued for SSC from 2025-26); G.O.Ms.No.17 dt 14.05.2014
    (images/Gov_GO.pdf: four formative assessments averaged; FA items such as
    experiments and record, written work in notebooks without copying from
    guides, project work, slip test; open-ended, application-oriented
    questions; textbook exercise questions not to be given as such; questions
    from earlier public papers not repeated; objective, very short, short and
    essay items; internal choice for essay questions only); G.O.Ms.No.2 dt
    26.08.2014 (35% pass; at least 28 of 80 in the written paper; only
    recounting and re-verification, no revaluation); G.O.Ms.No.10 dt 26.11.2014
    (second-language pass mark reduced from 35% to 20%); G.O.Ms.No.15 dt
    01.06.2018 (Telangana (Compulsory Teaching and Learning of Telugu in
    Schools) Act, 2018: Telugu compulsory in Classes I-X in all schools,
    whatever the board or medium); Memo No.14572 dt 07.12.2024 (phasing of
    compulsory Telugu for Classes IX and X); Memo No.10047 dt 08.11.2023
    (Permanent Education Number on the SSC hall ticket and memo from 2023-24).
  Intermediate, Telangana Board of Intermediate Education (tgbie.cgg.gov.in,
  which redirects to tgbienew.cgg.gov.in):
  - Home and About Us: the board regulates Intermediate education and
    specifies courses of study; IPE and IPASE memos, recounting and
    re-verification, first- and second-year and bridge course hall tickets.
  - Circular File No.TGBIE-ERTW/REVS/1/2024-ERTW dt 01-10-2026: revised first
    year textbooks from 2026-27; internal assessment 20% and theory 80%
    wherever applicable; sciences (Physics, Chemistry, Botany, Zoology) theory
    60 + external practical 15 in first year; MPC Mathematics IA and IB each
    theory 60 + IA 15; MEC Mathematics one 100-mark paper, 80 + 20, syllabus
    same as MPC; humanities 80 + 20; ACE group subjects 100 each, 80 + 20; CEC
    Commerce and Accountancy 50 each, 40 + 10; languages 80 + 20; English first
    year textbook and practical handbook merged.
  - "Revised First Year Subjects Validation Rules, Guidelines & FAQs (w.e.f.
    2026-27)": science practical 15 marks, 2 hours, external examiner,
    certified record, viva voce, usually first week of February, no
    improvement exam for practicals; maths IA = best two of four unit tests (5)
    + record of at least ten activities (5) + activity-based problem solving
    and viva (5, compulsory); pass 21/60 and 5/15 separately; English theory 80
    + practical 20 (16 for test items, 4 for record), first-year test items
    Communicative Functions, Just a Minute, Role Play, Listening Comprehension.
  - eapcet.tgche.ac.in (TG EAPCET 2026 notification and syllabus) is cited only
    for the line that its syllabus follows the TGBIE Intermediate syllabus.
  Local detail only from areas/hyderabad-research.json, hyderabad-zone-guides
  .json and zones/hyderabad.json. Fee wording is the approved sentence. FAQs
  render from faqs/telangana-board-tutor-hyderabad.php.
--}}
@php
  $tgbSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tgbA = function (string $slug, string $label) use ($tgbSlugs) {
      return in_array($slug, $tgbSlugs, true)
          ? '<a href="' . e(url('/city/hyderabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="tgbGuideTitle">
  <h2 id="tgbGuideTitle">Telangana Board tutors in Hyderabad: the SSC in Class 10, Intermediate in Classes 11 and 12</h2>

  <p class="nx-guide__lede">
    A Telangana State Board student deals with two separate bodies. The SSC examination at the end of Class 10 is run
    by the state's Directorate of Government Examinations, and the two-year Intermediate course that follows is run by
    the Telangana Board of Intermediate Education, usually in a junior college. Both have changed their papers in
    recent years: the SSC moved to six papers, and from the 2026-27 academic year first-year Intermediate students
    have revised textbooks and an internal-assessment share in almost every subject. This page sets out what the two
    bodies' own orders and circulars say, how a home tutor in Hyderabad can work with each stage, and how to choose
    one. Every detail of papers and marks below comes from the official websites; check them there before planning
    your child's year around them.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#tgb-who">Who runs what</a> ·
    <a href="#tgb-ssc">The six SSC papers</a> ·
    <a href="#tgb-style">How SSC questions are set</a> ·
    <a href="#tgb-lang">Telugu and other languages</a> ·
    <a href="#tgb-inter">Intermediate groups</a> ·
    <a href="#tgb-ia">Internal assessment from 2026-27</a> ·
    <a href="#tgb-plan">A tutor's plan</a> ·
    <a href="#tgb-zones">Zones and travel</a> ·
    <a href="#tgb-demo">The demo</a> ·
    <a href="#tgb-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="tgb-who">Two state bodies, one route from Class 9 to Class 12</h2>
  <p>
    Families often say "Telangana Board" for both stages, but the paperwork comes from different offices:
  </p>
  <ul>
    <li><strong>Class 10, the SSC.</strong> The Directorate of Government Examinations (its website is bse.telangana.gov.in) conducts the SSC twice a year; its 2026 results pages are for the public examinations of March and the "ASE" round of June. After results it offers photocopies of valued answer scripts and re-verification, which schools pass on to students. The SSC rules have long allowed recounting and re-verification only, not a full revaluation. Since 2023-24 a student's Permanent Education Number is printed on the SSC hall ticket and memo.</li>
    <li><strong>Classes 11 and 12, Intermediate.</strong> The Telangana Board of Intermediate Education regulates the course and sets its subjects. Its public examinations are called IPE, with a supplementary round called IPASE, and its website carries hall tickets for both years, marks memos, recounting and re-verification.</li>
  </ul>
  <p>
    The practical upshot for a parent: a tutor for Class 10 should know the DGE's six-paper SSC, and a tutor for
    Intermediate should know the TGBIE scheme for your child's year and group. They are not the same skill, and a
    good SSC maths teacher is not automatically ready for Mathematics IA and IB.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-ssc">The SSC today: six papers, 80 written marks and 20 internal</h2>
  <p>
    A 2022 government order replaced the older eleven-paper SSC with six papers from the 2022-23 academic year, and a
    2025 order from the Director of School Education kept the 80:20 split between the written examination and
    internal marks from 2025-26 onwards.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>SSC papers under G.O.Ms.No.33 (2022) and its 2024 amendment</caption>
    <thead>
      <tr><th scope="col">Paper</th><th scope="col">Written (SSC public exam)</th><th scope="col">Formative assessment</th><th scope="col">Notes</th></tr>
    </thead>
    <tbody>
      <tr><td>First language</td><td>80</td><td>20</td><td>Telugu, Urdu, Hindi and others</td></tr>
      <tr><td>Second language</td><td>80</td><td>20</td><td>Pass mark lowered to 20% by a 2014 order</td></tr>
      <tr><td>Third language, English</td><td>80</td><td>20</td><td>One paper</td></tr>
      <tr><td>Mathematics</td><td>80</td><td>20</td><td>One paper</td></tr>
      <tr><td>Science</td><td>40 Physical Science + 40 Biological Science</td><td>10 + 10</td><td>Separate question papers and answer scripts, 1 hour 30 minutes each, on two different days</td></tr>
      <tr><td>Social Studies</td><td>80</td><td>20</td><td>One paper</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Each paper runs for three hours including reading time, apart from science, which is split across two days. Under
    the 2014 rules still cited in later orders, a subject needs 35% overall and at least 28 of the 80 written marks.
    The formative marks are the average of four formative assessments across the year, so a child who coasts through
    the school's internal work starts the public examination with less in hand than they should.
  </p>
  <p>
    For a tutor, the science split matters most. Physical Science and Biological Science are now distinct
    90-minute papers sat on separate days, so a student needs to be ready for two short, dense papers rather than one
    long one, and a weakness in either cannot be hidden by the other. Our
    <a href="{{ url('/science-home-tutor-hyderabad') }}">science home tutors in Hyderabad</a> page and
    <a href="{{ url('/maths-home-tutor-hyderabad') }}">maths home tutors in Hyderabad</a> page go further into the
    subjects themselves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-style">How SSC questions are set, and what that means for practice</h2>
  <p>
    The 2014 reform order behind the current SSC describes the kind of paper the state wants, and it is still the
    clearest statement of intent on the DGE's site:
  </p>
  <ul>
    <li><strong>Open-ended, application-led questions.</strong> Papers are meant to test thinking, analysis and self-expression rather than memory, and the order discourages learning answers from guides.</li>
    <li><strong>Not the textbook exercise, word for word.</strong> Questions from the exercises in each lesson are not to be set as they are, and questions that have appeared in earlier public papers are not to be repeated.</li>
    <li><strong>A mix of item types.</strong> Objective multiple-choice, very short, short and essay-type questions in the non-language subjects, with internal choice offered for essay questions only.</li>
    <li><strong>Formative work that counts.</strong> The formative items include experiments written up in a record for science, a student's own written work in notebooks, project work and slip tests.</li>
  </ul>
  <p>
    That last point shapes good tutoring. A tutor who supplies ready answers for the notebook or does the project
    work defeats the purpose and puts the internal marks at risk, because headmasters must verify these marks against
    the records. The better approach is to teach a chapter, then ask the student to explain a new situation in their
    own words, which is the skill both the written paper and the internal assessment are trying to reward. Past
    question papers help with format, but a tutor who only drills repeated questions is preparing for an exam the
    state has said it will not set.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-lang">Telugu, the other languages, and families who move in</h2>
  <p>
    Hyderabad has many families who have moved from other states, and the language rules affect them first. Under
    the Telangana (Compulsory Teaching and Learning of Telugu in Schools) Act, 2018, Telugu is a compulsory language in
    Classes I to X in every school in the state, whatever its board or medium of instruction; later government memos
    set out how this applies to Classes IX and X year by year, so ask the school how it affects your child's batch.
  </p>
  <ul>
    <li><strong>For SSC students</strong> the language papers carry the same 80 + 20 weight as maths or science, which makes them worth planning for rather than leaving to the final weeks. The second-language pass mark is 20%, but marks above the pass line still count in the overall grade.</li>
    <li><strong>For CBSE, ICSE and IB students</strong> in Hyderabad, Telugu is still part of school life up to Class 10. A tutor who can support Telugu reading and writing alongside the main subjects is a practical ask; tell us at the start if you need one.</li>
    <li><strong>English</strong> is a full third-language paper at SSC level, and at Intermediate it carries a practical component, described below. Our <a href="{{ url('/english-home-tutor-hyderabad') }}">English home tutors in Hyderabad</a> page covers both.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-inter">Intermediate groups and what changed for first year in 2026-27</h2>
  <p>
    After the SSC, students choose an Intermediate group. The TGBIE's circular of 1 October 2026 on the revised first
    year names the MPC, MEC, CEC and ACE groups and covers the science subjects Physics, Chemistry, Botany and Zoology;
    the biology-side science group appears as BiPC in the TG EAPCET notification. The circular introduces revised
    first-year textbooks from 2026-27 and an internal-assessment share of 20% wherever it applies.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>First-year Intermediate assessment from 2026-27, as set out in the TGBIE circular</caption>
    <thead>
      <tr><th scope="col">Subject or group</th><th scope="col">Theory</th><th scope="col">Internal or practical</th></tr>
    </thead>
    <tbody>
      <tr><td>Physics, Chemistry, Botany, Zoology</td><td>60 marks</td><td>15-mark external practical in the first year</td></tr>
      <tr><td>MPC: Mathematics IA and Mathematics IB</td><td>60 marks each</td><td>15 marks of internal assessment each</td></tr>
      <tr><td>MEC: Mathematics (IA and IB as one paper)</td><td>80 marks</td><td>20 marks internal; same syllabus as MPC</td></tr>
      <tr><td>Commerce, Accountancy, Economics, Political Science, History, Geography, Public Administration</td><td>80 marks</td><td>20 marks internal</td></tr>
      <tr><td>CEC: Commerce and Accountancy</td><td>40 marks each</td><td>10 marks internal each</td></tr>
      <tr><td>English and second languages</td><td>80 marks</td><td>20 marks internal or practical</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The circular deals with the first year only. For second-year papers, follow the scheme the board publishes for
    your child's batch, and treat any older pattern you find online with caution. The TG EAPCET syllabus, published on
    the entrance test's own website, says it is framed in line with the TGBIE Intermediate syllabus, which is why MPC
    and BiPC students so often prepare for the board and the state entrance together. For subject help in these years,
    see <a href="{{ url('/physics-home-tutor-hyderabad') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-hyderabad') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-hyderabad') }}">biology</a>,
    <a href="{{ url('/accountancy-home-tutor-hyderabad') }}">accountancy</a> and
    <a href="{{ url('/economics-home-tutor-hyderabad') }}">economics</a> home tutors in Hyderabad.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-ia">Internal assessment in the first year: what students actually do</h2>
  <p>
    The board's validation rules and FAQs for 2026-27 spell out each component. Three are worth knowing before you hire
    a tutor, because each needs the student's own work across the year, not last-minute help.
  </p>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>Mathematics IA and IB (MPC)</h3>
  <p>
    Fifteen internal marks per paper: the average of the best two of four unit tests (5), a record of at least ten
    mathematical activities, with at least one from each chapter (5), and an activity-based problem-solving test with a
    viva (5). The last one is compulsory. Theory and internal marks are passed separately: 21 of 60 and 5 of 15.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Science practicals</h3>
  <p>
    A 15-mark practical in each science, two hours long, run by an external examiner the board appoints, ordinarily in
    the first week of February. Marks come from the experiment, observations and calculations, the certified record
    book and a viva. There is no improvement examination for practicals.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>English</h3>
  <p>
    An 80-mark theory paper and 20 marks from practical tests and the record book. In the first year the tests are
    communicative functions, "Just a Minute", role play and listening comprehension. Theory and practical must be
    passed separately.
  </p>
    </div>
  </div>
  <p>
    A home tutor can help with every one of these honestly: rehearsing a viva, talking through an activity before the
    student writes it up, practising a one-minute talk. What a tutor must not do is fill in the activity record or the
    science record book. The rules require the lecturer to certify records, and a record that is not the student's
    own work is a risk to the student, not a shortcut.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-plan">How a home tutor carries a student from Class 9 to second-year Intermediate</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A State Board tuition plan in Hyderabad, stage by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What the tutor concentrates on</th><th scope="col">Typical rhythm</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 9</td><td>The same six-paper layout as the SSC, so habits start here: own-words answers, formative work done properly, Physical and Biological Science treated as two papers</td><td>Two sessions a week</td></tr>
      <tr><td>Class 10 (SSC)</td><td>Application questions rather than repeated ones, timed three-hour and 90-minute papers, language papers kept steady</td><td>Two or three a week</td></tr>
      <tr><td>First-year Intermediate</td><td>New group subjects; unit tests, the maths activity record and science practicals spread across the year</td><td>One per core subject, often two for maths</td></tr>
      <tr><td>Second-year Intermediate</td><td>Board papers on the current scheme, practical and viva preparation, and for MPC or BiPC students a plan that also covers TG EAPCET, JEE or NEET</td><td>Two per core subject in the final months</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    If your child is aiming at engineering, agriculture or pharmacy in Telangana, read our
    <a href="{{ url('/ts-eapcet-tutor-hyderabad') }}">TG EAPCET tutors in Hyderabad</a> page; for the national
    entrances, see <a href="{{ url('/jee-home-tutor-hyderabad') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-hyderabad') }}">NEET</a> home tutors in Hyderabad. If you are weighing a move to
    another board, our <a href="{{ url('/cbse-home-tutor-hyderabad') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-hyderabad') }}">ICSE and ISC</a>, <a href="{{ url('/ib-tutor-hyderabad') }}">IB</a>
    and <a href="{{ url('/igcse-tutor-hyderabad') }}">IGCSE</a> pages for Hyderabad describe those papers, and our guide
    on <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-zones">Getting a State Board tutor to your door, zone by zone</h2>
  <p>
    A weekly tutor needs a journey they can repeat in any weather, so we match along metro and MMTS lines first and
    then by road. Notes from our area research:
  </p>
  <ul>
    <li><strong><a href="{{ url('/city/hyderabad/zone/kukatpally-miyapur-nizampet') }}">Kukatpally, Miyapur and Nizampet</a>:</strong> {!! $tgbA('kphb-colony', 'KPHB Colony') !!} is a planned township in numbered phases with its own Red Line stations, so a tutor can usually walk or take a short auto from the platform.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/chandanagar-lingampally-tellapur') }}">Chandanagar, Lingampally and Tellapur</a>:</strong> {!! $tgbA('chandanagar', 'Chandanagar') !!} has its own MMTS station on the Lingampalli line, with Miyapur the nearest metro; many homes here are independent houses and builder floors, so the tutor comes straight to the door.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/secunderabad-marredpally-tarnaka') }}">Secunderabad, Marredpally and Tarnaka</a>:</strong> in {!! $tgbA('malkajgiri', 'Malkajgiri') !!}, rail is the strength, with Malkajgiri Junction on the Bolarum MMTS route and Mettuguda the nearest Blue Line stop.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/uppal-habsiguda-nacharam') }}">Uppal, Habsiguda and Nacharam</a>:</strong> {!! $tgbA('ramanthapur', 'Ramanthapur') !!} has no station inside it, so tutors ride the Blue Line to Uppal or Habsiguda and finish by auto; a slightly later evening slot avoids the Uppal–Amberpet road at its worst.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/dilsukhnagar-lb-nagar-vanasthalipuram') }}">Dilsukhnagar, LB Nagar and Vanasthalipuram</a>:</strong> {!! $tgbA('saroornagar', 'Saroornagar') !!} grew around its old lake, many families live in their own houses on colony roads, and the Red Line stations at its edges plus a short auto bring the tutor in.</li>
    <li><strong><a href="{{ url('/city/hyderabad/zone/mehdipatnam-tolichowki-attapur') }}">Mehdipatnam, Tolichowki and Attapur</a>:</strong> in {!! $tgbA('attapur', 'Attapur') !!}, give the expressway pillar number with your address; most tutors come by bus or two-wheeler from Mehdipatnam.</li>
  </ul>
  <p>
    In the west, the <a href="{{ url('/city/hyderabad/zone/gachibowli-kondapur-madhapur') }}">Gachibowli, Kondapur and
    Madhapur</a> and <a href="{{ url('/city/hyderabad/zone/manikonda-narsingi-kokapet') }}">Manikonda, Narsingi and
    Kokapet</a> zones are mostly gated towers, so visitor registration comes first. In the centre,
    <a href="{{ url('/city/hyderabad/zone/ameerpet-begumpet-punjagutta') }}">Ameerpet, Begumpet and Punjagutta</a> sits
    on the Red and Blue Line interchange, and
    <a href="{{ url('/city/hyderabad/zone/khairatabad-himayatnagar-abids') }}">Khairatabad, Himayatnagar and Abids</a>
    has the Green Line too. Further out, <a href="{{ url('/city/hyderabad/zone/sainikpuri-alwal-trimulgherry') }}">Sainikpuri,
    Alwal and Trimulgherry</a> relies on the MMTS and two-wheelers, and
    <a href="{{ url('/city/hyderabad/zone/banjara-hills-jubilee-hills-somajiguda') }}">Banjara Hills, Jubilee Hills and
    Somajiguda</a> is easiest when you give the road number with the house number. Our guides to
    <a href="{{ url('/blog/west-hyderabad-tuition-guide') }}">west Hyderabad</a>,
    <a href="{{ url('/blog/central-hyderabad-tuition-guide') }}">central Hyderabad</a> and
    <a href="{{ url('/blog/east-and-south-hyderabad-tuition-guide') }}">east and south Hyderabad</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-mode">Home tuition, online, or a mix?</h2>
  <p>
    For SSC maths and the two science papers, a tutor at the table can watch a student work through an unfamiliar
    application question and stop a wrong step before it becomes a habit, which suits the open-ended style the state
    asks for. In Intermediate, students often spend long days at junior college, so one home session plus one shorter
    online session a week is easier to sustain. Online also helps when a specialist, such as a tutor for Mathematics IB
    or for Telugu as a language, lives on the other side of the city. Our comparison of
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring</a> weighs the two.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-demo">Questions to ask at a Telangana Board demo</h2>
  <ol>
    <li><strong>Which scheme are you teaching to?</strong> A tutor for the SSC should mention six papers and the separate science days; for first-year Intermediate, the 2026-27 internal assessment.</li>
    <li><strong>Teach me a question that is not in the textbook exercise.</strong> Ask the tutor to set and teach an application question on the chapter your child is on.</li>
    <li><strong>How will internal work be handled?</strong> Listen for guidance on formative tasks, activity records and practical records, never for writing them.</li>
    <li><strong>What about languages?</strong> If Telugu, Hindi or English is the weak paper, ask who will cover it.</li>
    <li><strong>What is the plan for entrances?</strong> For MPC or BiPC, ask how board work and TG EAPCET or JEE/NEET practice will share the week.</li>
    <li><strong>How will you reach us?</strong> Which metro line or MMTS station, and what is the fallback on a bad-traffic day?</li>
  </ol>
  <p>
    We send two or three matched tutors and show each fee before the demo; the first class is free and switching tutor
    later is free. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified. The <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has
    more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="tgb-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. See the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-hyderabad') }}">home
    tuition fees in Hyderabad</a>.
  </p>
  <p>
    Tell us the class, the board stage (SSC or Intermediate), the group, the medium, your colony and nearest station,
    and the slots that work; the first class is a <a href="{{ url('/demo-class') }}">free demo</a>. You can also browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, see every area on our
    <a href="{{ url('/city/hyderabad') }}">Hyderabad tutors page</a>, or, if you teach State Board subjects, look at
    <a href="{{ url('/tuition-jobs/hyderabad') }}">tuition jobs in Hyderabad</a>.
  </p>
  </section>

  </div>
</article>
