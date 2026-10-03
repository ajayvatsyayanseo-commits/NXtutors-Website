{{--
  Long-form guide for the "online tutor Port Blair" page (Sri Vijaya Puram,
  Andaman and Nicobar Islands). Byline: NXTutors Academic Team. For island
  families deciding when live one-to-one online tuition beats, or supports, a
  home tutor in a city where the pool of specialists for any one paper is
  naturally limited, and how to set lessons up well.

  NXTutors facts limited to published policies (two or three matched tutors,
  free first demo, free switching, fee shown before the demo, home tutoring
  where tutors exist and online across India). Site behaviour as stated on the
  live online-tutor-mumbai / online-tutor-srinagar pages: the hero search has
  a Home tutor / Online / Either switch; typing "online" sets online mode;
  /tutors accepts mode=online plus subject, board, class, fee, experience,
  rating and gender filters; the demo request has a Mode field; the tutor
  cascade widens from area to zone, city, state/UT (online) and India
  (online), every card labelled. No claim that NXTutors runs its own video
  classroom: the tutor and family agree the tool.
  Board position only from the research file's board_facts
  (southandaman.nic.in/education: secondary and senior secondary schools
  affiliated to CBSE; five mediums). Local detail only from
  database/seo-content/areas/port-blair-research.json (inter-island ships from
  Phoenix Bay; families moving between islands for work; monsoon months;
  expansion villages where tutors from the centre may come on fixed days).
  No tourism, no schools named, no distances or travel times, no claims about
  connectivity. Only the allowed fee sentence. Area links render only for
  active areas.
--}}
@php
  $pboSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pboA = function (string $slug, string $label) use ($pboSlugs) {
      return in_array($slug, $pboSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide pbo-guide" aria-labelledby="pboGuideTitle">
  <h2 id="pboGuideTitle">Online tutors for Sri Vijaya Puram (Port Blair): the whole country's teachers, at your child's desk on the island</h2>

  <p class="nx-guide__lede">
    On the mainland, a family that cannot find the right tutor nearby can usually look one neighbourhood further. In
    Sri Vijaya Puram, the island capital long known as Port Blair, the next neighbourhood is soon the sea. The city has
    its own teachers, and a home tutor suits a great many children, but for a particular paper, a
    senior specialist or an unusual hour, the local pool is naturally smaller than in a large mainland city. Online
    tuition removes that limit: the tutor can be anywhere in India, and the lesson starts at your table at the agreed
    time. This page covers when online is the better choice, when to stay with a home tutor, how to mix the two, how to
    arrange lessons through NXTutors, what the desk needs and how to keep lessons safe.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pbo-when">When online wins</a> ·
    <a href="#pbo-home">When home is better</a> ·
    <a href="#pbo-mix">Mixing the two</a> ·
    <a href="#pbo-who">Who it suits</a> ·
    <a href="#pbo-arrange">Arranging lessons</a> ·
    <a href="#pbo-desk">The desk</a> ·
    <a href="#pbo-lesson">A good lesson</a> ·
    <a href="#pbo-review">Is it working?</a> ·
    <a href="#pbo-safe">Safety</a> ·
    <a href="#pbo-areas">Five localities</a> ·
    <a href="#pbo-cost">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbo-when">When is online the better choice for an island family?</h2>
  <div class="nx-guide__cards">
    <div class="nx-guide__card">
  <h3>A specialist the island may not have</h3>
  <p>
    JEE Advanced problem solving, NEET biology at speed, accountancy, computer science, or an ICSE, IB or IGCSE paper:
    for any one of these, there may be no free specialist near you at the right hour. Online, the search covers
    the whole country.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>Travel between islands</h3>
  <p>
    Families who travel for work, and children who go with them, lose weeks of lessons. With an online tutor the
    timetable travels too, so the lesson happens at the usual hour wherever your child is studying that week.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>The monsoon months</h3>
  <p>
    Heavy-rain evenings make a tutor's trip slower and less certain. An online lesson at the same hour keeps the
    week intact, with no cancelled sessions to make up.
  </p>
    </div>
    <div class="nx-guide__card">
  <h3>The edge of the city</h3>
  <p>
    In the expansion villages a tutor from the centre may come only on set days. Online lessons fill the other days
    without anyone having to travel.
  </p>
    </div>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-home">When should a child stay with a home tutor?</h2>
  <ul>
    <li><strong>Young children.</strong> Early reading, handwriting and number work need someone beside the child.</li>
    <li><strong>A child who drifts on screens.</strong> If attention fades with a laptop open, the lesson fades too.</li>
    <li><strong>A change of medium.</strong> A student moving from Hindi, Tamil, Telugu or Bengali medium into English often settles faster with a tutor at the table for the first weeks.</li>
    <li><strong>Working that must be watched.</strong> In maths and physics, a tutor who sees only the final answer cannot find where marks are lost; this is fixable online with a camera on the notebook, but some students need the real thing first.</li>
  </ul>
  <p>
    None of this is permanent. Once habits are set, part of the week can move online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-mix">How can home and online lessons be combined?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>A practical split of home and online lessons through the year</caption>
    <thead>
      <tr><th scope="col">Period</th><th scope="col">At home</th><th scope="col">Online</th></tr>
    </thead>
    <tbody>
      <tr><td>Ordinary school weeks</td><td>The main lesson in the subject that needs watched working</td><td>A second subject, or a short midweek doubt session</td></tr>
      <tr><td>Monsoon months</td><td>Kept on dry evenings</td><td>Same tutor, same hour, whenever rain makes travel slow</td></tr>
      <tr><td>Travel weeks</td><td>Paused</td><td>Every lesson at the usual time</td></tr>
      <tr><td>Board season</td><td>Timed papers with the tutor present, where possible</td><td>Marking and discussion of papers done at home; entrance mocks reviewed on screen</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Agree the rules on the first day, so a rainy evening means "same time, on screen" rather than a lost week. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor</a> comparison sets out the
    general trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-who">Which students does online suit, and in which subjects?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Home, online or both: common situations in Sri Vijaya Puram</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">Usually suits</th><th scope="col">Why</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary child, tutor nearby</td><td>Home</td><td>Close supervision matters most</td></tr>
      <tr><td>Class 9 or 10 CBSE student, focused</td><td>Both</td><td>Maths at the table; science and revision on screen</td></tr>
      <tr><td>Class 11 or 12 science with JEE or NEET</td><td>Mostly online, one home visit</td><td>Specialists and mocks online; written answers checked in person</td></tr>
      <tr><td>Commerce: accountancy or economics</td><td>Online</td><td>A specialist may be easier to find beyond the island</td></tr>
      <tr><td>ICSE, ISC, IB or IGCSE course</td><td>Online</td><td>Specialists are few in any one city</td></tr>
      <tr><td>Family that travels between islands</td><td>Online, with home lessons when in town</td><td>The timetable moves with the family</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Subject pages for the city give more detail: <a href="{{ url('/maths-home-tutor-port-blair') }}">maths</a>,
    <a href="{{ url('/physics-home-tutor-port-blair') }}">physics</a>,
    <a href="{{ url('/chemistry-home-tutor-port-blair') }}">chemistry</a>,
    <a href="{{ url('/biology-home-tutor-port-blair') }}">biology</a>,
    <a href="{{ url('/english-home-tutor-port-blair') }}">English</a> and the
    <a href="{{ url('/cbse-home-tutor-port-blair') }}">CBSE board page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-arrange">How do you arrange online lessons through NXTutors?</h2>
  <ol>
    <li><strong>Switch the search to Online.</strong> The home-page search offers Home tutor, Online or Either; typing the word <em>online</em> along with a subject and class does the same.</li>
    <li><strong>Narrow the list yourself.</strong> The <a href="{{ url('/tutors?mode=online') }}">online tutor list</a> takes filters for subject, board, class, the most you want to pay, experience, rating and the tutor's gender.</li>
    <li><strong>Not sure yet? Pick Either.</strong> Then the shortlist may mix a tutor close enough to visit with online tutors based elsewhere.</li>
    <li><strong>Send a demo request.</strong> Set its Mode field to online and give the class, board, the school's medium and your free hours. Two or three matched tutors come back, each with a fee.</li>
    <li><strong>Treat the free first lesson as a real one.</strong> Settle with the tutor which video tool you will use and how your child will show written work.</li>
    <li><strong>Move on if it is not right.</strong> Another tutor can give the next demo, and a change later costs nothing.</li>
  </ol>
  <p>
    Searching for home tuition does not hide online tutors. If too few tutors near you fit, the results reach out step
    by step: your locality, its zone, the rest of the city, and then online tutors in other places, with every card
    showing the tutor's base. Anyone who joins as a tutor goes through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile is published. That check is not a
    police or background check, so the demo is where you judge the teaching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-desk">What does your child need at the desk?</h2>
  <ul>
    <li><strong>A screen bigger than a phone,</strong> a laptop or tablet, so long working and graphs stay legible.</li>
    <li><strong>A camera on the notebook:</strong> a second phone on a small stand aimed at the page works, as does a tablet with a stylus.</li>
    <li><strong>One shared page for notes</strong> that tutor and student can both write on and keep.</li>
    <li><strong>Earphones with a built-in microphone,</strong> which cut out echo and household noise.</li>
    <li><strong>A quiet, well-lit corner of a shared room,</strong> comfortable enough to sit in for a full lesson.</li>
    <li><strong>A back-up for a dropped call:</strong> agree in advance that the tutor phones a parent and the lesson continues by voice with the notebook photographed.</li>
</ul>
  <p>
    Test everything during the free demo, including a full lesson's length on your connection. The
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a> article has more tips.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-lesson">What does a good online lesson look like?</h2>
  <p>
    A well-run online lesson has a clear order, because nobody is at the table to notice drift. It opens with a quick
    check of last time's homework held up to the camera; one idea is taught while the student writes on the shared
    board; the student then solves two or three problems aloud while the tutor watches the pen; and it closes with a
    task written into the shared notes. For a student who learnt in another medium, the tutor should pause to check
    new English terms rather than assume they landed. Recording lessons is for the family and tutor to agree; if you
    do, keep recordings for revision only.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-review">How can you tell whether online tuition is working?</h2>
  <p>
    Sit in on a lesson in the first fortnight and ask yourself five questions. Did your child talk and write more than
    they listened? Did the tutor look at the working, not just the answer? Was last week's work tested at the start?
    Did the lesson end with a clear task? Is the practice in the CBSE format your child will sit, with sample-paper
    style questions? Mostly yes means the format suits your child; mostly no means it is time to try another tutor or
    bring back a home session.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-safe">How do you keep online tuition safe?</h2>
  <ul>
    <li>Set up lessons on a device the family shares, placed where other people pass by.</li>
    <li>Have the tutor send every link and message to a parent, never only to the child.</li>
    <li>Keep both cameras switched on, and keep contact on the agreed channel rather than moving to personal chats.</li>
    <li>For younger children, stay close enough to hear the lesson, at least for the first month.</li>
    <li>Share no addresses, photographs or personal details that the lesson itself does not need.</li>
</ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-areas">Home visits alongside online: notes for five localities</h2>
  <p>
    If you keep a weekly home lesson as well, these notes from our locality research help:
  </p>
  <ul>
    <li><strong>{!! $pboA('phoenix-bay', 'Phoenix Bay') !!}:</strong> the departure point for inter-island ships; avoid home visits when passengers are gathering, and use online lessons in travel weeks.</li>
    <li><strong>{!! $pboA('dollygunj', 'Dollygunj') !!}:</strong> newer lanes inside the expanded city limits; a map pin for the home visit, online for the rest.</li>
    <li><strong>{!! $pboA('garacharma', 'Garacharma') !!}:</strong> a census town just outside the city; a weekend home lesson with weekday online sessions is a common pattern.</li>
    <li><strong>{!! $pboA('brookshabad', 'Brookshabad') !!}:</strong> partly within the city and partly outside; online fills gaps in subjects with fewer local teachers.</li>
    <li><strong>{!! $pboA('austinabad', 'Austinabad') !!}:</strong> on the edge of the city; online avoids long evening journeys in the monsoon months.</li>
  </ul>
  <p>
    Zones: <a href="{{ url('/city/port-blair/zone/aberdeen-old-town') }}">Aberdeen and the old town</a>,
    <a href="{{ url('/city/port-blair/zone/junglighat-central-localities') }}">Junglighat and the central
    localities</a> and the <a href="{{ url('/city/port-blair/zone/expansion-villages') }}">expansion villages</a>.
    Every locality is on the <a href="{{ url('/city/port-blair') }}">Sri Vijaya Puram (Port Blair) page</a>, and the
    <a href="{{ url('/blog/port-blair-home-tuition-guide') }}">Port Blair home tuition guide</a> covers each zone.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbo-cost">What does an online tutor cost, and how do you start?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Online tutors set their
    own fees in the same way, and with no travel involved, ask each tutor whether their online rate differs from their
    home rate. Every fee on your shortlist is visible before the demo. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and
    <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in Port Blair</a> explain what to ask.
  </p>
  <p>
    Send the class, the subject, the school's medium, any exam plan and the times that suit, choose Online or Either,
    and book a <a href="{{ url('/demo-class') }}">free demo class</a>. You can browse <a href="{{ url('/tutors') }}">tutor
    profiles</a> at any time. Teachers on the islands can find requests on
    <a href="{{ url('/tuition-jobs/port-blair') }}">Port Blair tuition jobs</a>. Our office is in Sector 66, Gurugram.
  </p>
  </section>

  </div>
</article>
