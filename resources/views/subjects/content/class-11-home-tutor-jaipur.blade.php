{{--
  Long-form guide for the "Class 11 home tutor Jaipur" page. Authors: Ajay
  Vatsyayan (IB, IGCSE and ISC maths; Class 11-12 maths) with the NXTutors
  Academic Team. Role statements only. No schools, colleges or coaching
  institutes named. Structure follows class-11-home-tutor-mumbai / -pune; no
  sentences reused.

  Official sources (read 2 Oct 2026):
  - Board of Secondary Education, Rajasthan, https://rajeduboard.rajasthan.gov.in/2.htm
    (Senior Secondary Examination (10+2) in Arts, Science and Commerce).
  - RBSE Class 11 Examination 2026 vivranika (amended),
    https://rajeduboard.rajasthan.gov.in/anudeshika-etc/vivranika_cls11_2026.pdf :
    compulsory Hindi, English, "Azadi ke baad ka Swarnim Bharat" Part 1 and
    Jeevan Kaushal Shiksha (life skills); optional groups: Science = Physics,
    Chemistry and one of Biology, Geology, Mathematics, Computer Science /
    Informatics Practices; Commerce = Accountancy (30), Business Studies (31)
    and one of Economics, Mathematics, typewriting, shorthand, Computer
    Science / Informatics Practices / Multimedia and Web Technology;
    Agriculture group. 48 periods a week: Hindi 6, English 6, the two other
    compulsory subjects 3 each, optional subjects 30 (10 each).
  - RBSE Syllabus 2026-27, Class 11,
    https://rajeduboard.rajasthan.gov.in/anudeshika-etc/11_2027.pdf :
    Mathematics (15) one paper, 3:15 hours, 100 marks, opening with Sets,
    NCERT textbook; Physics (40) theory 3:15 hours 70 marks + practical 4
    hours 30 marks; Accountancy (30) one paper 3:15 hours 100 marks;
    Economics Section A Statistics for Economics (NCERT).
  - CBSE Senior Secondary Curriculum 2026-27, Part 2,
    https://cbseacademic.nic.in/web_material/CurriculumMain27/SecPart2/Curriculum_SecP2_2026-27.pdf
    (XI-XII composite; at least five subjects; 041 and 241 not together;
    maths 80 + 20, physics and chemistry 70 + 30), as cited on
    class-11-home-tutor-pune.
  - CISCE ISC Regulations, https://cisce.org/ (English plus three to five
    electives, at most six; no change after 15 September of Class XI; pass
    mark 35%).
  - IB Diploma, https://www.ibo.org/ (six groups, three or four HL, TOK,
    4,000-word EE, CAS over at least 18 months).
  - NTA: JEE (Main) in two sessions, NEET (UG) once a year with biology half
    the marks (https://jeemain.nta.nic.in, https://neet.nta.nic.in), as
    stated on the Jaipur hub and jee/neet-home-tutor-jaipur. No dates.
  Local detail only from the Jaipur hub view, database/seo-content/zones/jaipur.json,
  jaipur-zone-guides.json and jaipur-research.json. No state entrance test is
  described. Fee range is the approved sentence. FAQs:
  faqs/class-11-home-tutor-jaipur.php.
  Area links render only when that Jaipur area page exists and is active.
--}}
@php
  $jp11Slugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jp11 = function (string $slug, string $label) use ($jp11Slugs) {
      return in_array($slug, $jp11Slugs, true)
          ? '<a href="' . e(url('/city/jaipur/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jp11GuideTitle">
  <h2 id="jp11GuideTitle">Class 11 home tutors in Jaipur: a new stream, a new syllabus and an entrance test on the horizon</h2>

  <p class="nx-guide__lede">
    Class 11 is the first year of senior school, and in Jaipur it often starts with three changes at once: a stream
    chosen after the Class 10 result, a syllabus far denser than anything before, and, for many science students,
    an entrance-test coaching timetable layered on top. This page, written with Ajay Vatsyayan (IB, IGCSE and ISC
    maths) and the NXTutors Academic Team, sets out how the Rajasthan board builds the Class 11 year, how CBSE, ISC
    and the IB compare, which subjects tend to need a tutor in each stream, and how to plan the first term around
    school, coaching and Jaipur's roads.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jp11-jump">The jump</a> ·
    <a href="#jp11-rbse">RBSE subjects</a> ·
    <a href="#jp11-papers">RBSE papers</a> ·
    <a href="#jp11-boards">CBSE, ISC, IB</a> ·
    <a href="#jp11-tests">JEE and NEET</a> ·
    <a href="#jp11-need">Who needs a tutor</a> ·
    <a href="#jp11-move">Changing board</a> ·
    <a href="#jp11-term">First term</a> ·
    <a href="#jp11-zones">Zones</a> ·
    <a href="#jp11-demo">Demo</a> ·
    <a href="#jp11-fees">Fees</a> ·
    <a href="#jp11-where">Localities</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jp11-jump">Why does Class 11 feel like such a jump?</h2>
  <p>
    In maths, Class 10 algebra gives way to sets, functions, trigonometry, sequences and the first ideas of limits.
    Physics turns from description to vectors and calculus-flavoured kinematics. Chemistry introduces mole
    calculations and the start of organic chemistry. Each subject now runs on its own textbook pace, and the gaps
    that a student carried through Class 10 suddenly have consequences. Students who scored well in Class 10 are
    often surprised by their first Class 11 unit test; that is normal, and it is the right moment to bring in help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-rbse">Which subjects make up the Rajasthan board's Class 11?</h2>
  <p>
    The Board of Secondary Education, Rajasthan examines Senior Secondary students in Arts, Science and Commerce. Its
    Class 11 scheme for the 2026 examination lists four compulsory subjects for everyone, Hindi, English, a course
    titled <em>Azadi ke baad ka Swarnim Bharat</em> (Part 1) and life-skills education, and then three optional
    subjects grouped by stream:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>RBSE Class 11 optional subjects by stream, from the board's 2026 scheme</caption>
    <thead>
      <tr><th scope="col">Stream</th><th scope="col">Fixed subjects</th><th scope="col">Plus one of</th></tr>
    </thead>
    <tbody>
      <tr><td>Science</td><td>Physics, Chemistry</td><td>Biology, Geology, Mathematics, or Computer Science / Informatics Practices</td></tr>
      <tr><td>Commerce</td><td>Accountancy, Business Studies</td><td>Economics, Mathematics, typewriting or shorthand, or a computer subject</td></tr>
      <tr><td>Arts</td><td colspan="2">Three subjects from a long list that includes economics, political science, history, geography, mathematics, literatures in several languages and psychology</td></tr>
      <tr><td>Agriculture</td><td colspan="2">Agriculture science and agriculture biology, with one further science or computer subject</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The same scheme allots ten periods a week to each optional subject. Note the science row carefully: as printed,
    a student takes physics and chemistry with <em>one</em> of biology or mathematics, so a family that wants both
    should ask the school what it allows before admission. See our
    <a href="{{ url('/rajasthan-board-tutor-jaipur') }}">Rajasthan Board tutors in Jaipur</a> page for the board as a
    whole, and <a href="{{ url('/commerce-home-tutor-jaipur') }}">commerce home tutors in Jaipur</a> for that stream.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-papers">How are RBSE Class 11 papers set?</h2>
  <p>
    The 2026–27 Class 11 syllabus sets mathematics as a single 100-mark paper of 3 hours 15 minutes, starting from
    sets and following the NCERT textbook. Physics is split into a 70-mark theory paper of the same length and a
    30-mark practical lasting four hours. Accountancy is one 100-mark paper, and economics opens with statistics for
    economics. The practical share in the sciences is worth taking seriously from the first month: experiments
    need a record, and a tutor can check that the record is being kept, not just the theory.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-boards">How does Class 11 work on CBSE, ISC and the IB?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11 outside the Rajasthan board</caption>
    <thead>
      <tr><th scope="col">Board</th><th scope="col">Structure</th><th scope="col">Rule worth knowing</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>Classes 11 and 12 form one course of at least five subjects; maths is 80 + 20, physics and chemistry 70 theory + 30 practical</td><td>Mathematics and Applied Mathematics cannot be taken together</td></tr>
      <tr><td>ISC</td><td>English plus three to five electives, six subjects at most</td><td>Subjects cannot change after 15 September of Class 11; pass mark 35%</td></tr>
      <tr><td>IB Diploma</td><td>Six subject groups, three or four at Higher Level, with TOK, a 4,000-word Extended Essay and CAS</td><td>CAS runs for at least 18 months, so it starts in the first year</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    City pages by board: <a href="{{ url('/cbse-home-tutor-jaipur') }}">CBSE</a>,
    <a href="{{ url('/icse-home-tutor-jaipur') }}">ICSE and ISC</a> and <a href="{{ url('/ib-tutor-jaipur') }}">IB tutors
    in Jaipur</a>. For choosing among boards and streams, see our
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">guide to board and stream choice</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-tests">Why do Class 11 chapters matter for JEE and NEET?</h2>
  <p>
    The National Testing Agency holds JEE Main in two sessions in the first half of the year and NEET UG once a year,
    with biology carrying half of NEET's marks. Both draw on Class 11 as well as Class 12, so mechanics, mole concept,
    organic basics, trigonometry and coordinate geometry learnt badly now return as lost marks in Class 12. Use only
    the current official bulletins for patterns and dates. Our <a href="{{ url('/jee-home-tutor-jaipur') }}">JEE home
    tutors in Jaipur</a> and <a href="{{ url('/neet-home-tutor-jaipur') }}">NEET home tutors in Jaipur</a> pages cover
    those tests, and the topic plans for <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology from NCERT</a> help with sequencing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-need">Which subjects need a tutor in each stream?</h2>
  <ul>
    <li><strong>Science with maths:</strong> maths first, then physics. Calculus-style reasoning and vectors are where self-study usually stalls. See <a href="{{ url('/maths-home-tutor-jaipur') }}">maths</a> and <a href="{{ url('/physics-home-tutor-jaipur') }}">physics home tutors in Jaipur</a>.</li>
    <li><strong>Science with biology:</strong> chemistry is the usual weak link, especially mole calculations and early organic. See <a href="{{ url('/chemistry-home-tutor-jaipur') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-jaipur') }}">biology home tutors in Jaipur</a>.</li>
    <li><strong>Commerce:</strong> accountancy, because the double-entry habit has to be built from scratch. See <a href="{{ url('/accountancy-home-tutor-jaipur') }}">accountancy home tutors in Jaipur</a>.</li>
    <li><strong>Arts:</strong> usually the subject with long written answers the student finds hardest, or mathematics if chosen.</li>
  </ul>
  <p>
    From Class 11, a specialist for each difficult subject usually beats one tutor for everything.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-move">Moving between CBSE and the Rajasthan board at Class 11?</h2>
  <p>
    Some Jaipur students change board after Class 10. The textbook content in maths and the sciences is close, since
    the Rajasthan board lists NCERT books, but three things change: the compulsory subjects, the paper format and,
    for some students, the medium. A student coming from an English-medium CBSE school into a Hindi-medium class, or
    the other way round, can lose marks on terminology alone. Ask the tutor to spend the first fortnight on the new
    board's syllabus document and model papers, not on fresh chapters.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-session">What should a Class 11 session contain?</h2>
  <p>
    A useful senior-school session is mostly the student working. Start with the questions that went wrong since the
    last visit, from school or coaching. Then one concept, taught properly, with the derivation or the reasoning
    written out rather than just stated. Then a set of unseen problems at rising difficulty, attempted without help
    first. End with a short list of what to practise before the next visit. In maths and physics, the tutor should
    insist on full working even when the answer is right, because both the board paper and the habits needed for
    entrance tests depend on it. In accountancy, every entry should be posted and balanced, not just described. If
    a session is an hour of the tutor talking, it is a lecture your child could watch for free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-term">A plan for the first term</h2>
  <ol>
    <li><strong>Weeks 1–3:</strong> a diagnostic on Class 10 algebra and science; settle the weekly slot around school and any coaching.</li>
    <li><strong>Weeks 4–10:</strong> keep pace with school chapter by chapter; one timed test a fortnight in each tutored subject.</li>
    <li><strong>Before the first term exam:</strong> revise from a corrections notebook and complete practical records.</li>
    <li><strong>After the result:</strong> decide whether the tutor stays for every subject or narrows to the weakest one.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-zones">How tutors reach Class 11 students in each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Class 11 lessons around school, coaching and Jaipur's corridors</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">What shapes the slot</th><th scope="col">Common pattern</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/jaipur/zone/c-scheme-bani-park-vidhyadhar-nagar') }}">C-Scheme, Bani Park &amp; Vidhyadhar Nagar</a></td><td>Sikar Road traffic at peak hours; no metro north of the station</td><td>A tutor living in the north, plus online for a specialist</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/raja-park-jawahar-nagar-bapu-nagar') }}">Raja Park, Jawahar Nagar &amp; Bapu Nagar</a></td><td>Central position; tutors come by road from several sides</td><td>Home lessons for most subjects</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/vaishali-nagar-west-jaipur') }}">Vaishali Nagar &amp; West Jaipur</a></td><td>Pink Line access in the east of the zone, none in Vaishali Nagar</td><td>Metro-riding tutors near stations; online deeper in</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/mansarovar-sanganer') }}">Mansarovar &amp; Sanganer</a></td><td>The coaching crowd on Gopalpura Bypass into the early evening</td><td>Late-evening or weekend home lessons around coaching</td></tr>
      <tr><td><a href="{{ url('/city/jaipur/zone/malviya-nagar-jagatpura-tonk-road') }}">Malviya Nagar, Jagatpura &amp; Tonk Road</a></td><td>Crossing Tonk Road at peak hours</td><td>A tutor from your side of the road, with online doubt sessions</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Home lessons suit the subjects where working matters, such as maths, physics numericals and accountancy.
    Online lessons widen the field for ISC and IB specialists and keep a routine going on days when coaching runs
    late. One tutor for both, at home on the weekend and online midweek, is a common Jaipur arrangement.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-demo">How to judge a Class 11 tutor in the demo</h2>
  <ol>
    <li>Ask how the tutor will link this year's chapters to the Class 12 paper and, if relevant, to JEE or NEET.</li>
    <li>Give an unseen problem from the current chapter and watch whether your child or the tutor does the work.</li>
    <li>For RBSE, confirm the tutor knows the stream's subject combination and teaches in your child's medium.</li>
    <li>Ask how the tutor will fit around coaching without duplicating it.</li>
    <li>Request a written plan to the first term exam.</li>
  </ol>
  <p>
    The first lesson is free, and switching later costs nothing. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a>; read our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> before the visit.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-fees">What does a Class 11 home tutor cost in Jaipur?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Subject, board, entrance-test depth and the tutor's journey all move the figure. Each tutor sets a rate, and it
    appears on the shortlist before the demo. See the <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-jaipur') }}">home tuition fees in Jaipur</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jp11-where">Where we match Class 11 tutors in Jaipur</h2>
  <p>
    {!! $jp11('vidhyadhar-nagar', 'Vidhyadhar Nagar') !!} was planned in numbered sectors off a central spine, so a
    sector and plot number is all a tutor needs; Sikar Road traffic is the thing to plan around.
    {!! $jp11('tilak-nagar', 'Tilak Nagar') !!}, near the Moti Doongri temple, has newer apartment projects that
    register visitors at the gate. {!! $jp11('bajaj-nagar', 'Bajaj Nagar') !!}, between Tonk Road and the airport
    road, can be reached by tutors from Malviya Nagar and Durgapura without crossing the old city.
  </p>
  <p>
    {!! $jp11('nirman-nagar', 'Nirman Nagar') !!} holds the Pink Line's Mansarovar station in its Padmavati Colony
    part, which helps tutors who travel by metro. Behind {!! $jp11('gopalpura-bypass', 'Gopalpura Bypass') !!}, where
    many senior students live, lessons are easier after the daytime crowd thins. And
    {!! $jp11('malviya-nagar', 'Malviya Nagar') !!}, with its wide roads and busy market, suits an earlier slot
    straight after school.
  </p>
  <p>
    The year ahead is covered on <a href="{{ url('/class-12-home-tutor-jaipur') }}">Class 12 home tutors in
    Jaipur</a>. Send the board, stream, subjects, medium, coaching timetable and your colony, and two or three tutors
    come back with fees. Or <a href="{{ url('/demo-class') }}">book a free demo</a>, browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>, or see all localities on
    <a href="{{ url('/city/jaipur') }}">home tutors in Jaipur</a>.
  </p>
  </section>

  </div>
</article>
