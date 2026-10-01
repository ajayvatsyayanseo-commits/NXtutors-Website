{{--
  Surat page for JEE home tutors (maths, physics, chemistry). The exam itself is
  covered on the national hub (/jee-home-tutor); this page is about JEE tuition in
  Surat: a city where the metro is not yet carrying passengers, so the Tapi bridges,
  Sitilink BRTS, two-wheelers and shift timings decide tutor travel; slotting around
  coaching; GSEB students in Gujarati or English medium; plans by stage.

  Exam facts (brief recap, reworded) from the NTA JEE (Main) 2026 Information
  Bulletin (jeemain.nta.nic.in: Paper 1 computer-based, maths/physics/chemistry,
  75 questions, 300 marks, 3 hours, +4/-1 including numerical-value questions, two
  sessions, 13 languages with English alongside; ties broken by maths, then physics,
  then chemistry) and the JEE (Advanced) 2026 Information Brochure (jeeadv.ac.in:
  two compulsory 3-hour papers, English and Hindi, at most two attempts in two
  consecutive years). The Surat hub names no state entrance test, so none is named.
  Local detail only from database/seo-content/areas/surat-research.json,
  surat-zone-guides.json, database/seo-content/zones/surat.json and the Surat city
  hub view. No schools, colleges, coaching institutes or societies named. Area
  links render only for active Surat areas. Fee wording is the approved sentence.
  FAQs render from faqs/jee-home-tutor-surat.php.
--}}
@php
  $jsrSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $jsrA = function (string $slug, string $label) use ($jsrSlugs) {
      return in_array($slug, $jsrSlugs, true)
          ? '<a href="' . e(url('/city/surat/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="jsrGuideTitle">
  <h2 id="jsrGuideTitle">JEE home tutor in Surat: bridges, shift times and a weekly plan that holds</h2>

  <p class="nx-guide__lede">
    Surat's metro is being built, with trial runs on its first stretch, but it is not yet carrying passengers. Until it
    does, a maths, physics or chemistry tutor reaches your home by two-wheeler, auto or Sitilink bus, and for a JEE
    student that makes two questions central: which side of the Tapi does the tutor live on, and does the session time
    clash with the shift changes at the diamond units and industrial estates? This page covers how Surat families
    set up JEE tuition around those facts and around coaching, how to divide the three subjects between home and
    online, what a GSEB student in Gujarati or English medium should plan for, and how to judge a tutor in the free demo.
    The exams and syllabus in full are on our national <a href="{{ url('/jee-home-tutor') }}">JEE home tutor</a> page.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#jsr-exams">The exams</a> ·
    <a href="#jsr-travel">How tutors travel</a> ·
    <a href="#jsr-zones">Zone by zone</a> ·
    <a href="#jsr-slots">Slots around coaching</a> ·
    <a href="#jsr-example">An example</a> ·
    <a href="#jsr-subjects">Subjects at home and online</a> ·
    <a href="#jsr-board">GSEB and medium</a> ·
    <a href="#jsr-stages">By stage</a> ·
    <a href="#jsr-demo">The demo</a> ·
    <a href="#jsr-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="jsr-exams">JEE Main and Advanced, as the 2026 documents set them</h2>
  <p>
    Under the NTA's 2026 bulletin, JEE (Main) Paper 1 gave candidates three hours at a computer for 75 questions,
    25 in each of mathematics, physics and chemistry, worth 300 marks. Every wrong answer, including a wrong numerical
    entry, cost one mark. The test ran in two sessions, and the NTA separated tied candidates by their mathematics score,
    then physics, then chemistry. Students ranked high enough could take JEE (Advanced), two compulsory papers of three
    hours each run by the IITs. Each year's bulletin (jeemain.nta.nic.in) and brochure (jeeadv.ac.in) replace the last,
    so check the current ones.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-travel">How tutors move around Surat today</h2>
  <ul>
    <li><strong>The river.</strong> Crossing the Tapi bridges at office hours is the slowest part of many trips; a tutor on your own bank is usually the steadier choice.</li>
    <li><strong>Sitilink BRTS.</strong> Corridors run from Adajan Patiya, along Gaurav Path through Piplod, from Udhana Darwaja south to Sachin GIDC Naka, and from Katargam Darwaja to Kosad. If you live near a stop, say so: tutors who travel by bus can then be included.</li>
    <li><strong>Shift traffic.</strong> Diamond-unit shifts in Katargam and Varachha, and industrial shifts in Udhna and Pandesara, fill the roads at set hours. Sessions should start after those waves, not during them.</li>
    <li><strong>The metro.</strong> Trial runs began in March 2026 on the elevated stretch from Dream City towards Althan, but passengers cannot ride it yet. Plan around buses and two-wheelers for now.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-zones">Zone by zone</h2>
  <p>
    We plan Surat in five zones. Every locality has its own page on the
    <a href="{{ url('/city/surat') }}">Surat home tuition</a> page.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>JEE tutor travel in each Surat zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Examples</th><th scope="col">What tends to work</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/surat/zone/adajan-pal-rander') }}">Adajan, Pal and Rander</a></td><td>{!! $jsrA('adajan', 'Adajan') !!}</td><td>A tutor already living on the western bank; the bridges are the bottleneck at office hours</td></tr>
      <tr><td><a href="{{ url('/city/surat/zone/central-surat-athwa-ghod-dod-road') }}">Central Surat, Athwa and Ghod Dod Road</a></td><td>{!! $jsrA('athwa', 'Athwa') !!}</td><td>The middle of the city: tutors from Adajan, Piplod and City Light can reach it without much extra travel; book straight after school, before the evening shopping crowd</td></tr>
      <tr><td><a href="{{ url('/city/surat/zone/piplod-vesu-dumas-road') }}">Piplod, Vesu and Dumas Road</a></td><td>{!! $jsrA('vesu', 'Vesu') !!}</td><td>Gated societies throughout; ask for a standing visitor entry after the demo. VIP Road peaks at office hours and on weekend evenings</td></tr>
      <tr><td><a href="{{ url('/city/surat/zone/udhna-althan-pandesara') }}">Udhna, Althan and Pandesara</a></td><td>{!! $jsrA('althan', 'Althan') !!}</td><td>Tutors from Bhatar, City Light or Vesu reach Althan without crossing the river; time sessions after shift traffic clears</td></tr>
      <tr><td><a href="{{ url('/city/surat/zone/katargam-varachha-sarthana') }}">Katargam, Varachha and Sarthana</a></td><td>{!! $jsrA('katargam', 'Katargam') !!}, {!! $jsrA('amroli', 'Amroli') !!}</td><td>Evening slots after the diamond-unit shift rush; on the northern edge, a nearby tutor for regular work plus an online specialist for senior papers</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our <a href="{{ url('/blog/surat-tuition-guide') }}">Surat tuition guide</a> has more on each part of the city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-slots">Slotting a tutor around coaching</h2>
  <p>
    The Surat hub's view is that a home tutor works alongside a coaching programme, going through unfinished sheets
    and the test questions that went wrong each week. When coaching runs into the evening, a short online doubt session
    can replace a trip across town. Put together with the travel picture, a workable week for a student in coaching
    often looks like this:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A typical JEE tutoring week in Surat</caption>
    <thead>
      <tr><th scope="col">Day</th><th scope="col">Session</th></tr>
    </thead>
    <tbody>
      <tr><td>Free weekday, straight after school</td><td>At home, 90 minutes: the weakest subject, one topic rebuilt, timed problems</td></tr>
      <tr><td>Coaching day, after the batch</td><td>Online, 30 to 40 minutes: doubts from that day's class</td></tr>
      <tr><td>Weekend morning</td><td>At home or online: the latest coaching test, question by question</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Keep the home slot the same each week. A tutor who crosses a bridge or works around shift times can plan for a
    fixed hour far more easily than for one that moves.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-example">An example: a Pal student with coaching south of the river</h2>
  <p>
    Imagine a Class 12 student in a Pal society whose coaching meets on four evenings on the far side of the Tapi, and
    whose chemistry has fallen behind. Every coaching day already means two bridge crossings. Adding a tutor who also has
    to cross at office hours would put the plan at risk from the first week. What tends to work instead:
  </p>
  <ul>
    <li>A chemistry tutor who lives on the western bank, perhaps in Adajan or Palanpur, for one home session on the free weekday, straight after school.</li>
    <li>A short online check on Sunday for inorganic recall, which needs no travel at all.</li>
    <li>Coaching test reviews folded into the home session, so the student brings the paper rather than starting from a blank page.</li>
  </ul>
  <p>
    Had the same student lived in Athwa, in the middle of the city, tutors from three zones could reach the home
    easily, and two shorter home sessions would be just as practical.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-subjects">Which subject goes home and which goes online</h2>
  <p>
    <strong>Mathematics</strong> gains most from a tutor at the table, where every line of a calculus or coordinate
    geometry solution is visible. <strong>Physics</strong> needs both: concepts rebuilt with diagrams in person, tests
    reviewed on a shared screen. <strong>Chemistry</strong> divides by branch, with physical chemistry numericals at
    home and inorganic recall in short online quizzes. Many Surat families already pair a weekly home lesson with a short
    online session from the same tutor; for JEE, that pairing fits the three subjects well. If a specialist for JEE
    Advanced lives far across the city, an online-first plan with occasional weekend visits beats settling for whoever is
    nearest. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring comparison</a> explains why.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-board">GSEB students and the medium of instruction</h2>
  <p>
    Many Surat students study under the Gujarat Secondary and Higher Secondary Education Board, in Gujarati, English or
    another medium, and the hub matches board and medium as one choice. For JEE, plan for both:
  </p>
  <ul>
    <li><strong>Syllabus mapping.</strong> The JEE syllabus sits close to the NCERT books, and each board has its own textbooks and chapter order. In the first weeks of Class 11, the tutor should set the NTA units beside the school plan and flag anything taught late or lightly. CBSE students begin nearest NCERT; ICSE and ISC students need the same mapping.</li>
    <li><strong>Language.</strong> The 2026 JEE Main bulletin offered 13 languages, with English alongside the chosen one; JEE Advanced was offered in English and Hindi. Check the current list. A Gujarati-medium student should still learn English technical terms early, because coaching modules and most practice books use them.</li>
    <li><strong>The board itself.</strong> Board papers still count; the tutor should switch to board-style answers before preliminary exams.</li>
  </ul>
  <p>
    For school-side help, see our <a href="{{ url('/maths-home-tutor-surat') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-surat') }}">physics</a> and
    <a href="{{ url('/chemistry-home-tutor-surat') }}">chemistry</a> home tutor pages for Surat.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-stages">Class 11, Class 12 and a repeat year</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Priorities by stage</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">What the tutor works on</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 11</td><td>The unit map against the board, English terms for Gujarati-medium students, foundations in mechanics, calculus and the mole concept, and an error log from the first test</td></tr>
      <tr><td>Class 12</td><td>New chapters with Class 11 revision; full timed papers before the first JEE session, which usually falls in the January to March stretch alongside preliminary exams and boards</td></tr>
      <tr><td>Repeat year</td><td>Last year's tests diagnosed first, costly chapters rebuilt, many full papers; daytime sessions avoid shift and office traffic. Check the attempt rules first</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For subject depth, see the <a href="{{ url('/physics-home-tutor/jee') }}">JEE physics tutor</a> page and our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE maths</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE chemistry</a> guides.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-demo">What to check in the free demo</h2>
  <ul>
    <li>Does the tutor begin with your child's own wrong answers from coaching?</li>
    <li>Does the student solve while the tutor asks questions, rather than watch?</li>
    <li>Can the tutor say how the GSEB, CBSE or ICSE paper differs from JEE on this topic, and teach in your child's medium?</li>
    <li>Is the route clear: which bank, bus or two-wheeler, and how long at your hour?</li>
    <li>Do you leave with a written plan for the next month?</li>
  </ul>
  <p>
    In a gated society, give the tutor's name to the security desk or visitor app; for a house in the old lanes, send
    the house number, a landmark and a map pin. See our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo class checklist</a>. If the fit is wrong,
    the next tutor is arranged, and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="jsr-fees">JEE tutor fees in Surat and how to start</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Each tutor sets their own fee and you see it before the demo; a tutor crossing the river at peak hours may quote
    more for home than for online. The <a href="{{ url('/blog/home-tuition-fees-surat') }}">Surat home tuition fees</a>
    guide and our <a href="{{ url('/pricing-guide') }}">pricing guide</a> say more.
  </p>
  <p>
    Send the class, board and medium, target exam, subjects, coaching days, your locality with the nearest junction or
    BRTS stop, and the times that suit. Book a <a href="{{ url('/demo-class') }}">free demo class</a> or browse
    <a href="{{ url('/tutors') }}">tutor profiles</a>. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. For medicine, see
    <a href="{{ url('/neet-home-tutor-surat') }}">NEET home tutor in Surat</a>; teachers can find students on
    <a href="{{ url('/tuition-jobs/surat') }}">Surat tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
