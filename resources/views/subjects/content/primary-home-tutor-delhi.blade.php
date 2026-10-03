{{--
  Long-form guide for the "primary home tutor Delhi" page (Classes 1 to 5, all
  subjects). Written by the NXTutors Academic Team. Kept distinct from
  primary-home-tutor-gurgaon and primary-home-tutor-mumbai: same structure,
  Delhi-only sentences.

  Official sources:
  - IB PYP, ibo.org/programmes/primary-years-programme/ (ages 3 to 12,
    transdisciplinary framework with six themes, the Exhibition in the final
    year), as on the verified Gurgaon primary page (fetched 1 Oct 2026).
  - Cambridge Primary, cambridgeinternational.org (typically ages 5 to 11;
    optional assessments including Cambridge Primary Checkpoint).
  - CISCE ICSE Examination Year 2028 Regulations
    (cisce.org/wp-content/uploads/2026/01/1.-Regulations.pdf): Classes I-VIII
    taught through school-chosen books.
  - CBSE Curriculum 2026-27 (cbseacademic.nic.in, Curriculum_SecP1_2026-27.pdf,
    as cited on cbse-home-tutor-delhi): computational thinking and AI literacy
    for Classes III-VIII from 2026-27, inside existing subjects.
  No Delhi state board is described. The board mix (CBSE for most students,
  ICSE sizeable, smaller IB/IGCSE group) is from the Delhi city hub view. Local
  detail only from database/seo-content/zones/delhi.json,
  database/seo-content/areas/delhi-research.json, delhi-zone-guides.json and
  the hub view. No school, society or people names. Fee range is the approved
  sentence. FAQs: faqs/primary-home-tutor-delhi.php.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $dprSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dprA = function (string $slug, string $label) use ($dprSlugs) {
      return in_array($slug, $dprSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dprGuideTitle">
  <h2 id="dprGuideTitle">Home tutors for Class 1 to 5 in Delhi: reading, number sense and calmer evenings</h2>

  <p class="nx-guide__lede">
    In the primary years the subjects are simple on paper, yet this is where reading speed, times tables and the habit
    of sitting down to work are either built or left shaky. A primary tutor is usually wanted for one
    of three reasons: homework has turned into a nightly argument, reading or maths has slipped behind the class, or
    both parents get home after the metro rush and want the after-school hours used well. This guide explains what a
    primary tutor should focus on in each class, how the boards Delhi children follow differ at this stage, how to
    handle homework and Hindi, and how to choose a tutor who can reach your colony or sector every week.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dpr-signs">Signs</a> ·
    <a href="#dpr-class">Class by class</a> ·
    <a href="#dpr-boards">Boards</a> ·
    <a href="#dpr-homework">Homework</a> ·
    <a href="#dpr-hindi">Hindi and English</a> ·
    <a href="#dpr-zones">Reaching you</a> ·
    <a href="#dpr-mode">Home or online</a> ·
    <a href="#dpr-demo">The demo</a> ·
    <a href="#dpr-fees">Fees</a> ·
    <a href="#dpr-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dpr-signs">Which signs suggest a primary child would gain from a tutor?</h2>
  <p>
    A tutor is not a reward for good marks or a punishment for poor ones. Look instead for patterns that last more
    than a few weeks:
  </p>
  <ul>
    <li><strong>Reading aloud is slow and halting</strong> by Class 2 or 3, or your child reads the words but cannot tell you what the passage said.</li>
    <li><strong>Counting on fingers persists</strong> for simple addition by Class 3, or times tables are recited but not used.</li>
    <li><strong>Word problems cause panic,</strong> even when the sums inside them are easy; this is usually a reading problem dressed up as a maths one.</li>
    <li><strong>Homework takes two hours</strong> and ends in tears, for you or for the child.</li>
    <li><strong>A recent move or change of school</strong> has left gaps, for example from a different board or another city.</li>
  </ul>
  <p>
    If two or more of these sound familiar, a tutor two or three times a week can help. If only one does, a few weeks
    of focused help on that one thing may be enough.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-class">What should the tutor focus on in each class?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Priorities for a primary tutor in Delhi, Classes 1 to 5</caption>
    <thead>
      <tr><th scope="col">Class</th><th scope="col">Reading and English</th><th scope="col">Maths</th><th scope="col">Habits</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 1</td><td>Letter sounds, blending short words, listening to stories</td><td>Counting objects, number bonds to 10, shapes</td><td>Sitting for 20 minutes, holding a pencil well</td></tr>
      <tr><td>Class 2</td><td>Reading simple books alone, writing a sentence with a capital and full stop</td><td>Place value to 100, adding and taking away with carrying</td><td>Keeping a bag and notebook in order</td></tr>
      <tr><td>Class 3</td><td>Reading for meaning, answering "why" questions, short paragraphs</td><td>Multiplication as repeated addition, tables up to 10, simple fractions</td><td>Starting homework without being asked</td></tr>
      <tr><td>Class 4</td><td>Comprehension, grammar in context, writing a short story</td><td>Long multiplication, division, measurement, word problems</td><td>Checking own work before handing it in</td></tr>
      <tr><td>Class 5</td><td>Longer texts, summaries, letters and notices</td><td>Fractions and decimals, area and perimeter, early data handling</td><td>Planning a week's homework; revising before a test</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    EVS, or science and social studies where the school separates them, needs less tutoring than reading and maths at
    this age. A child who reads well usually manages EVS with a little help from home. Our national page on
    <a href="{{ url('/maths-home-tutor/class-5') }}">Class 5 maths tutoring</a> goes deeper into the last primary year.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-boards">How do the boards Delhi children follow differ in the primary years?</h2>
  <p>
    Our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a> notes that CBSE is the board most Delhi students sit,
    with a sizeable ICSE following and a smaller group on IB or Cambridge. In the primary years the differences are
    mostly in books and style, not in hard exams:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Primary years by board in Delhi, and what a tutor should adapt</caption>
    <thead>
      <tr><th scope="col">Board or programme</th><th scope="col">What is distinctive</th><th scope="col">What the tutor should do</th></tr>
    </thead>
    <tbody>
      <tr><td>CBSE</td><td>NCERT or other books chosen by the school; from 2026-27, computational thinking and AI literacy sit inside existing subjects from Class 3</td><td>Use the school's textbook and worksheets; build reading and arithmetic so later application-style questions come easily</td></tr>
      <tr><td>ICSE (CISCE)</td><td>Schools choose their own books up to Class 8; English tends to be read and written at length</td><td>Follow the school's books exactly; give extra weight to reading, spelling and handwriting</td></tr>
      <tr><td>IB PYP</td><td>Ages 3 to 12; units built around six transdisciplinary themes; an Exhibition in the final year</td><td>Support inquiry and research skills; help plan, but never do, the Exhibition work</td></tr>
      <tr><td>Cambridge Primary</td><td>Typically ages 5 to 11; optional assessments including Cambridge Primary Checkpoint</td><td>Work from the school's scheme; use Checkpoint-style questions only if the school uses them</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A child who changes board, for example on moving to Delhi from another state, usually needs a few weeks on the new
    style of question rather than new content. Tell the tutor about any switch at the start.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-homework">Should the tutor finish homework or teach?</h2>
  <p>
    Both, in the right order. A primary tutor who only completes homework leaves the child dependent; one who ignores
    homework leaves the family with a backlog at bedtime. A workable split for an hour-long session:
  </p>
  <ol>
    <li><strong>Ten minutes of reading aloud,</strong> with the tutor asking what happened and why.</li>
    <li><strong>Twenty minutes on the weak area,</strong> such as tables, place value or sentence writing, with fresh practice rather than the school sheet.</li>
    <li><strong>Twenty minutes of homework,</strong> done by the child, with the tutor guiding rather than writing.</li>
    <li><strong>Ten minutes to wrap up,</strong> a quick game, and a note for you on what to practise before the next visit.</li>
  </ol>
  <p>
    Projects and craft work are where tutors are most tempted to take over. The work should look like a child made it.
    For quick questions between visits, some families use <a href="{{ url('/blog/tutortwin-whatsapp-homework-help-guide') }}">TutorTwin
    homework help on WhatsApp</a>, our AI tutor, while the real teacher handles the teaching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-hindi">What about Hindi, English and the third language?</h2>
  <p>
    Many Delhi children learn English and Hindi from Class 1, and some schools add another language later. Languages
    are where primary marks often slip quietly, because parents focus on maths. A tutor can help in two ways: regular
    reading in both languages, and dictation that builds spelling and the matra system in Hindi. If one tutor is
    strong in maths and English but not in Hindi, a separate short weekly session for Hindi is often better than
    stretching one tutor too far. Ask about language strength directly at the demo.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-zones">How tutors reach primary families in each zone</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Getting a tutor to an after-school primary session in six zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Route a tutor usually takes</th><th scope="col">Timing tip</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony &amp; Lajpat Nagar</a></td><td>Kailash Colony or Nehru Place on the Violet Line, then an auto</td><td>Weekday evenings near Nehru Place are busy; an earlier slot helps</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar &amp; Hauz Khas</a></td><td>Malviya Nagar on the Yellow Line and an e-rickshaw</td><td>RWA guards expect a name; share it before the first visit</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Palam on the Magenta Line or Sector 10 on the Blue Line for the eastern sectors</td><td>Ask where a visiting tutor may park inside the society</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a></td><td>Rithala on the Red Line or Rohini Sector 18, 19 on the Yellow Line, depending on the pocket</td><td>Give the pocket as well as the block; block names repeat across sectors</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj &amp; IP Extension</a></td><td>Akshardham on the Blue Line or IP Extension on the Pink Line</td><td>Avoid expressway rush hours; builder-floor lanes have little parking</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar &amp; Shahdara</a></td><td>Nirman Vihar or Preet Vihar on the Blue Line, often a short walk</td><td>Vikas Marg peaks at office hours; book before the evening rush</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Our area guides for <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a> add more on timing and travel.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-mode">Home or online tuition for Classes 1 to 5?</h2>
  <p>
    Home works better for most primary children: the tutor can see handwriting, sit beside the child during reading and
    keep a restless eight-year-old on task. Online becomes useful from about Class 4 for a specific need, such as a
    reading programme or a language, or when the right tutor lives on the far side of the city. Keep online sessions
    shorter, 30 to 40 minutes, and make sure the tutor can see the notebook through a camera. Many families settle on a
    mix: home visits for maths and reading, and a short online session for a language.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-demo">What should a demo with a primary child look like?</h2>
  <p>
    The first class with your chosen tutor is a free demo. In that hour, look for a tutor who:
  </p>
  <ul>
    <li>asks your child to read a little and do a few sums before teaching anything, to see where the gaps are;</li>
    <li>lets the child do the writing and talking, and corrects gently;</li>
    <li>uses examples a child knows, such as metro stops, market prices or cricket scores;</li>
    <li>tells you clearly what to work on over the next month and how you will see progress.</li>
  </ul>
  <p>
    If the fit is wrong, the next tutor on the shortlist can come for a demo, and switching later costs nothing. Tutors
    who join go through an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile is marked Verified; keep
    lessons in a shared room with an adult at home. See our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo
    class checklist</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-fees">What does a primary home tutor cost in Delhi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Primary tuition generally sits in the lower part of that range. The number of subjects, sessions a week, the
    tutor's experience and the journey at your hour all move it. You see each tutor's fee before the demo; our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi
    fees article</a> have more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dpr-where">Where we match primary tutors in Delhi</h2>
  <p>
    In {!! $dprA('east-of-kailash', 'East of Kailash') !!}, one street may be private floors and the next a DDA pocket
    with its own gate, so tell the tutor which kind of entrance to expect. {!! $dprA('shivalik', 'Shivalik') !!}, part
    of Malviya Nagar, is mostly houses and floors with separate entrances, which makes regular weekday sessions easy to
    fit in. {!! $dprA('dwarka-sector-7', 'Dwarka Sector 7') !!} sits near the Palam side and can be reached on either
    the Blue or the Magenta Line.
  </p>
  <p>
    {!! $dprA('rohini-sector-11', 'Rohini Sector 11') !!} is a quiet, green sector where the nearest station depends on
    your pocket. Across the Yamuna, {!! $dprA('pandav-nagar', 'Pandav Nagar') !!} is mainly builder floors near
    Akshardham, and {!! $dprA('nirman-vihar', 'Nirman Vihar') !!} has its own Blue Line station, so tutors can usually
    walk to the door.
  </p>
  <p>
    Before Class 1, see <a href="{{ url('/nursery-kg-home-tutor-delhi') }}">nursery and KG tutors in Delhi</a>; after
    Class 5, <a href="{{ url('/class-6-8-home-tutor-delhi') }}">Class 6 to 8 tutors</a>. Tell us the class, board,
    subjects, your colony or sector with its block or pocket, and the afternoons that suit you; we send two or three
    tutors with fees shown. <a href="{{ url('/demo-class') }}">Book a free demo</a>, look through
    <a href="{{ url('/tutors') }}">tutor profiles</a> or start from the <a href="{{ url('/city/delhi') }}">Delhi home tutors
    page</a>. Teachers looking for primary students can see <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
