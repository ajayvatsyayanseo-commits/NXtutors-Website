{{--
  Long-form guide for the "English home tutor Jamshedpur" subject page (city
  slug tata; the text says Jamshedpur and names no company). Byline: NXTutors
  Academic Team. No school, company, person or society is named.

  Exam facts reuse the checked statements on the national english-home-tutor
  page, which cites (fetched 1 Oct 2026):
  - CBSE English Language and Literature (184), Class X 2026-27,
    cbseacademic.nic.in/web_material/CurriculumMain27/SecPart1/English_LL_SecP1_2026-27.pdf
    (80: reading 20, writing and grammar 20, literature 40; internal 20 incl.
    listening and speaking 5).
  - CBSE English Core (301), XI-XII 2026-27, cbseacademic.nic.in.
  - CISCE ICSE English, exam year 2028, cisce.org/wp-content/uploads/2026/01/2.-English.pdf.
  - CISCE ISC English (801), cisce.org/wp-content/uploads/2025/04/2.-ISC-English-XI-XII_2025.pdf
    (language and literature, each 3 h and 80 marks + 20 project; composition
    400-450 words from six topics; directed writing; proposal; grammar;
    comprehension; literature tests drama, short stories and poetry incl. style).
  - Cambridge IGCSE 0500/0510 (2027-2029) and IB Language A (as on the national page).
  JAC is described generally only, as on the Jamshedpur city hub. Local facts
  only from database/seo-content/areas/tata-research.json and
  tata-zone-guides.json. Only the allowed fee sentence.
  Area links render only when that Jamshedpur area page exists and is active.
--}}
@php
  $tenSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $tenA = function (string $slug, string $label) use ($tenSlugs) {
      return in_array($slug, $tenSlugs, true)
          ? '<a href="' . e(url('/city/tata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ten-guide" aria-labelledby="tenGuideTitle">
  <h2 id="tenGuideTitle">English home tutor in Jamshedpur: the right paper, a steady term plan and a tutor on your bank of the river</h2>

  <p class="nx-guide__lede">
    Jamshedpur students sit English under JAC, CBSE and CISCE, with a few on IB or IGCSE courses, and the city is cut
    into sections by two rivers. Both facts shape the search for an English tutor. The paper decides what the tutor
    must know; the river decides who can come twice a week without losing an hour on a bridge. NXTutors asks for the
    board, class, the skill that is weakest and your locality, then shortlists two or three English tutors with their
    fees. The first class with the tutor you choose is a free demo.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ten-boards">Boards</a> ·
    <a href="#ten-jac">JAC</a> ·
    <a href="#ten-isc">ISC English</a> ·
    <a href="#ten-icse">ICSE</a> ·
    <a href="#ten-cbse">CBSE Class 10</a> ·
    <a href="#ten-plan">A board-year plan</a> ·
    <a href="#ten-reading">Reading habits</a> ·
    <a href="#ten-where">Six localities</a> ·
    <a href="#ten-mode">Home or online</a> ·
    <a href="#ten-demo">Demo</a> ·
    <a href="#ten-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ten-boards">Which board's English does your child study?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>English on the boards Jamshedpur students follow, and where a tutor usually finds lost marks</caption>
    <thead>
      <tr><th scope="col">Board and classes</th><th scope="col">How English is assessed</th><th scope="col">Where marks usually go</th></tr>
    </thead>
    <tbody>
      <tr><td>JAC, Classes 10 and 12</td><td>A paper set by the Jharkhand Academic Council; pattern in its notices</td><td>Formats and answer length, judged against the board's own past papers</td></tr>
      <tr><td>CBSE, Classes 9 and 10</td><td>Board paper of 80 (reading 20, writing and grammar 20, literature 40) and 20 in school</td><td>Literature answers that ramble or miss the question</td></tr>
      <tr><td>CBSE, Classes 11 and 12</td><td>English Core, 80 in the paper and 20 for listening, speaking and a project</td><td>Longer literature answers and creative-writing formats</td></tr>
      <tr><td>ICSE, Classes 9 and 10</td><td>Language and literature as two papers of 80, each with internal marks</td><td>Compositions that run out of time; the summary</td></tr>
      <tr><td>ISC, Classes 11 and 12</td><td>Two three-hour papers of 80, each with 20 marks of project work</td><td>The 400 to 450 word composition and the proposal</td></tr>
      <tr><td>IB or IGCSE</td><td>Unseen-text analysis, extended writing and an oral or speaking test</td><td>Analysis that describes rather than explains effect</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Students on IB or Cambridge IGCSE courses usually work with an online specialist from elsewhere in India; the
    national <a href="{{ url('/english-home-tutor') }}">English home tutor</a> guide explains how IGCSE First Language
    and Second Language English differ and how the IB oral works.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-jac">What should a JAC student look for in an English tutor?</h2>
  <p>
    The Jharkhand Academic Council is the state's board and holds the Class 10 and Class 12 examinations for its
    affiliated schools. We keep our notes on its English paper general. A JAC student needs a tutor who teaches from
    the prescribed textbooks and practises the question style the council uses, and who takes the syllabus, timetable
    and pattern from the council's own notices each year. If your child reads more easily in Hindi, a tutor can explain
    in Hindi while keeping every written answer in English.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-isc">ISC English: how does a tutor prepare a student for two three-hour papers?</h2>
  <p>
    ISC treats English as two subjects. The language paper asks for a composition of 400 to 450 words chosen from six
    types (narrative, descriptive, reflective, argumentative, discursive or a short story), then directed writing, a
    proposal in CISCE's format, grammar and comprehension. The literature paper tests drama, short stories and poetry,
    including how a poem is written as well as what it says. Each paper adds 20 marks of project work.
  </p>
  <p>
    Three hours is long, and marks are often lost through poor planning rather than lack of knowledge. A tutor should teach one
    composition type at a time, set a timed piece every fortnight, and mark it for structure first, then argument, then
    language. For literature, a bank of short quotations for each set text, learned by heart, makes answers sharper.
    Our guide to <a href="{{ url('/blog/isc-class-12-english-literaturelanguage') }}">ISC Class 12 English</a> covers
    the papers in detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-icse">ICSE Classes 9 and 10: which parts of the language paper need practice?</h2>
  <p>
    The ICSE language paper runs for two hours and packs in a composition of about 300 to 350 words, a letter, a notice
    paired with an e-mail, an unseen passage of about 500 words and a grammar question. Two parts reward drilling more
    than any others. The summary, at the end of the passage question, needs the student to pick out points, drop
    examples and rewrite in their own words within a limit, which is a technique rather than a talent. The composition
    needs a plan made in a few minutes, so that the middle does not wander. A tutor who alternates these two, week by
    week, alongside the literature texts, gives the student a far better chance of finishing on time. Our
    <a href="{{ url('/blog/icse-class-10-english-papers') }}">ICSE Class 10 English papers</a> notes add detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-cbse">CBSE Class 10: how should the 80 marks shape lessons?</h2>
  <p>
    Literature from First Flight and Footprints without Feet is worth 40 marks, half the paper, so the largest share of
    lesson time belongs there. Reading carries 20, through a discursive passage and a case-based factual passage with a
    chart or data. Writing and grammar carry the last 20: grammar 10, a formal letter 5 and an analytical paragraph on a
    chart, map or graph 5. The school's 20 internal marks include 5 for listening and speaking. A student who knows the
    formats but writes thin literature answers is the most common case, and the fix is regular planned answers checked
    for relevance and length.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-plan">What does a board-year English plan look like?</h2>
  <p>
    This outline suits a Class 10 or Class 12 student on any board. Adjust the stages to the school calendar; JAC and
    CISCE schools publish their own dates.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A board-year English plan in four stages</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Focus</th><th scope="col">Evidence of progress</th></tr>
    </thead>
    <tbody>
      <tr><td>First term</td><td>Formats mastered; literature chapters covered as the school teaches them</td><td>One correct example of every writing task in the notebook</td></tr>
      <tr><td>Before the half-yearly</td><td>Timed reading passages; planned literature answers</td><td>Answers that finish on time and stay within the word limit</td></tr>
      <tr><td>Second term</td><td>Weak chapters repaired; grammar errors drawn from the student's own writing</td><td>A shrinking list of repeated mistakes</td></tr>
      <tr><td>Pre-board months</td><td>Full papers under time, marked against the board's scheme</td><td>Marks lost mainly on content, not on format or time</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-reading">Why does reading at home matter so much?</h2>
  <p>
    Every English paper in this city has unseen material: passages, poems or texts the student has never met. The only
    preparation that really helps is wide reading over months. A tutor should ask what your child reads, suggest the
    next book, and spend a few minutes of each lesson talking about it. For younger children, reading aloud to an adult
    every day matters more than any worksheet, and a child who guesses at words or avoids books needs a tutor who works
    on sounding out and fluency, in short sessions, before anything else. Families who want spoken confidence as well
    can read our <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-where">How does an English tutor reach six Jamshedpur localities?</h2>
  <p>
    The Subarnarekha and the Kharkai split the city, and bridge traffic at office hours decides many timetables. We
    start with tutors on your side of the water. The <a href="{{ url('/city/tata') }}">Jamshedpur home tuition page</a>
    lists every locality.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Six Jamshedpur localities: the homes, the crossing (if any) and what to tell the tutor</caption>
    <thead>
      <tr><th scope="col">Locality</th><th scope="col">Homes</th><th scope="col">River crossing</th><th scope="col">Tell the tutor</th></tr>
    </thead>
    <tbody>
      <tr><td>{!! $tenA('bistupur', 'Bistupur') !!}</td><td>Flats in the main business district</td><td>None from the city bank</td><td>Book before the evening shopping rush; flats may keep a gate register</td></tr>
      <tr><td>{!! $tenA('sakchi', 'Sakchi') !!}</td><td>Flats and houses around the city's oldest market</td><td>None from the city bank</td><td>Park in a residential lane away from the Golchakkar</td></tr>
      <tr><td>{!! $tenA('sonari', 'Sonari') !!}</td><td>Housing societies across its North, West, East and South layouts</td><td>None from the city bank; the Domuhani bridge leads out</td><td>Send name and vehicle number to the society gate</td></tr>
      <tr><td>{!! $tenA('jugsalai', 'Jugsalai') !!}</td><td>Builder-built flats and older family homes in market lanes</td><td>None</td><td>Early-morning or later-evening slots avoid trading hours</td></tr>
      <tr><td>{!! $tenA('birsanagar', 'Birsanagar') !!}</td><td>Independent houses in twelve numbered zones</td><td>None</td><td>The zone number and a landmark</td></tr>
      <tr><td>{!! $tenA('mango', 'Mango') !!}</td><td>Apartment complexes, builder buildings and houses</td><td>The Subarnarekha bridges from Sakchi</td><td>A tutor living on the Mango side, if one is available</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    The zone guides for <a href="{{ url('/city/tata/zone/central-jamshedpur') }}">Central Jamshedpur</a>,
    <a href="{{ url('/city/tata/zone/west-jamshedpur-kharkai-side') }}">West Jamshedpur and the Kharkai side</a> and
    <a href="{{ url('/city/tata/zone/south-jamshedpur-tatanagar') }}">South Jamshedpur</a> have more on routes and quiet hours, and our
    <a href="{{ url('/blog/jamshedpur-tuition-guide') }}">Jamshedpur tuition guide</a> covers the whole city.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-mode">Home or online English lessons in Jamshedpur?</h2>
  <p>
    Once a student reads fluently, English moves online easily: writing goes into a shared document or as notebook
    photos and comes back marked. That opens up ISC, IB and IGCSE specialists who may live elsewhere. Home lessons suit
    young readers and students who need someone at the table to keep writing. The rivers add a practical reason to mix
    the two: a family in Mango or Adityapur whose closest-matched tutor lives on the other bank can keep one home visit a
    week and move the second session online, avoiding a second bridge crossing at the busy hour. Our article on
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home or online tutoring</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-demo">How to judge the demo class</h2>
  <ul>
    <li><strong>Paper sense:</strong> a clear answer on how the JAC, CBSE or CISCE English paper is set for that class.</li>
    <li><strong>Diagnosis:</strong> the tutor reads a recent marked answer before teaching.</li>
    <li><strong>Student output:</strong> your child writes or speaks for much of the hour.</li>
    <li><strong>Focused feedback:</strong> two or three priorities, not a page of corrections.</li>
    <li><strong>A reading suggestion:</strong> the tutor asks what your child reads and proposes something next.</li>
  </ul>
  <p>
    If the fit is wrong, tell us; we set up a demo with the next shortlisted tutor, and switching later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-fees">What does an English home tutor in Jamshedpur charge?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors decide their own
    fees, which depend on the class, the board, experience with its paper, the journey at your hour and how many
    sessions you book. You see each shortlisted fee before the demo; our
    <a href="{{ url('/blog/home-tuition-fees-jamshedpur') }}">Jamshedpur home tuition fees</a> article explains more.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ten-send">What to include in your request</h2>
  <p>
    Send the class and board, the skill you are worried about, your locality with a landmark (and zone number in
    Birsanagar), your days and times, home or online, and a budget. We reply with two or three matched English tutors
    and their fees. Tutors who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before
    their profile goes live. Our <a href="{{ url('/maths-home-tutor-tata') }}">maths</a> and
    <a href="{{ url('/science-home-tutor-tata') }}">science</a> pages cover other subjects in Jamshedpur, and English
    teachers in the city can see open requests on <a href="{{ url('/tuition-jobs/tata') }}">Jamshedpur tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
