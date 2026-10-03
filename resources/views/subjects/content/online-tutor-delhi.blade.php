{{--
  Long-form guide for the "online tutor Delhi" page. Byline: NXTutors Academic
  Team. For Delhi families deciding when live one-to-one online tuition beats a
  home tutor, and how to set it up. Kept distinct from online-tutor-gurgaon and
  online-tutor-mumbai.

  NXTutors facts are limited to published policies (two or three matched tutors,
  free first demo, free switching, fee shown before the demo, home tutoring where
  tutors exist and online across India). Site behaviour checked in code on
  2 Oct 2026: the home-page search has an Either / Home tutor / Online switch
  (home.blade.php; home = tutors who can reach your area, online = best fit
  anywhere); SearchQuery::parse reads online / virtual / zoom as online mode;
  /tutors accepts mode=online with subject, board, class, fee, experience,
  rating and gender; the demo request sends a Mode field on WhatsApp. No claim
  is made that NXTutors provides its own video classroom or whiteboard: the
  tutor and family agree the tool. TutorTwin is described only as our WhatsApp
  AI tutor (see blog/tutortwin-whatsapp-homework-help-guide). No exam facts are
  stated beyond the Delhi hub's board mix; no schools are named.

  Local detail only from database/seo-content/zones/delhi.json,
  database/seo-content/areas/delhi-zone-guides.json, delhi-research.json and
  the Delhi city hub view: metro lines, interchanges, the Yamuna crossing,
  outer sectors and colonies without a station (Vasant Kunj, Alaknanda, Mayur
  Vihar Phase 3), Durga Puja week in CR Park, evening market and coaching
  crowds. Fee range is the approved sentence.
  FAQs render from faqs/online-tutor-delhi.php.
  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $donSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $donA = function (string $slug, string $label) use ($donSlugs) {
      return in_array($slug, $donSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="donGuideTitle">
  <h2 id="donGuideTitle">Online tuition for Delhi students: when the metro map should not choose the teacher</h2>

  <p class="nx-guide__lede">
    Delhi's metro has brought a station within reach of most colonies, yet distance still shapes home tuition. A tutor
    in Dwarka will think twice about an evening trip to Mayur Vihar; a specialist in North Campus may not reach Vasant
    Kunj before your child is tired. Online lessons remove that limit. This page explains when live one-to-one online
    tuition works better than a home tutor for a Delhi student, when it does not, how to arrange it through NXTutors,
    what your child needs on the desk, and how to tell within a month whether it is working.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#don-when">When online wins</a> ·
    <a href="#don-home">When home wins</a> ·
    <a href="#don-fit">Which fits</a> ·
    <a href="#don-stage">By stage</a> ·
    <a href="#don-how">How it is arranged</a> ·
    <a href="#don-desk">The desk</a> ·
    <a href="#don-working">Is it working?</a> ·
    <a href="#don-mix">Hybrid</a> ·
    <a href="#don-safe">Safety</a> ·
    <a href="#don-cost">Cost</a> ·
    <a href="#don-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="don-when">When does online tuition work better in Delhi?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>The right tutor is across the Yamuna</h3>
  <p>
    A river crossing at rush hour lengthens every trip, which is why our <a href="{{ url('/city/delhi') }}">Delhi
    page</a> suggests trans-Yamuna homes, from <a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur
    Vihar and Patparganj</a> to <a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar
    and Shahdara</a>, often do better with a tutor from their own side, or online. Online makes the
    whole city, and the whole country, your shortlist.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>You need one particular programme</h3>
  <p>
    CBSE tutors are found in every zone. IB Higher Level, IGCSE Extended, ISC electives or JEE-level problem solving
    narrow the field sharply, and the closest match may live at the far end of another line. See our
    <a href="{{ url('/ib-tutor-delhi') }}">IB</a> and <a href="{{ url('/igcse-tutor-delhi') }}">IGCSE</a> pages for Delhi.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Your home is off the metro</h3>
  <p>
    Vasant Kunj, Alaknanda and Mayur Vihar Phase 3 have no station of their own, and outer sectors in
    <a href="{{ url('/city/delhi/zone/rohini') }}">Rohini</a> and <a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a>
    need an e-rickshaw from the platform. An online tutor turns a long trip into a lesson that starts on time.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Coaching ends late</h3>
  <p>
    A student back from JEE or NEET coaching at night has no time for a tutor's journey. A 30-minute online doubt
    session fits where a home visit cannot. See <a href="{{ url('/jee-home-tutor-delhi') }}">JEE</a> and
    <a href="{{ url('/neet-home-tutor-delhi') }}">NEET</a> tutors in Delhi.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-home">When should a Delhi child stay with a home tutor?</h2>
  <ul>
    <li><strong>Young children.</strong> Up to about Class 3, a tutor beside the child for handwriting, reading and attention is hard to replace. See our <a href="{{ url('/primary-home-tutor-delhi') }}">primary tutors in Delhi</a> page.</li>
    <li><strong>Students who drift at a screen.</strong> If your child switches tabs or stops writing when nobody is in the room, a tutor at the table keeps the work going.</li>
    <li><strong>Heavy written maths and chemistry</strong> for a student who has not yet learned to show working on camera; this can be taught, but it takes a few weeks.</li>
    <li><strong>A family that wants someone in the house</strong> at a set time each week, as part of the routine.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-fit">Which format fits which Delhi student?</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Home, online or both: common situations for Delhi families</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">Suggested format</th><th scope="col">Why</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 2 child who needs reading support, home in a Dwarka society</td><td>Home</td><td>Hands-on reading and writing; a local tutor registered at the gate</td></tr>
      <tr><td>Class 10 CBSE student in Laxmi Nagar, weak in maths only</td><td>Home, with an online midweek check</td><td>Written working seen at the table; doubts cleared between visits</td></tr>
      <tr><td>IB Diploma student in Vasant Vihar needing Physics HL</td><td>Online</td><td>The specialist may live anywhere; IA support works well on screen</td></tr>
      <tr><td>Class 12 student in Rohini with coaching four evenings a week</td><td>Online, short sessions</td><td>No travel time; sessions fit around coaching</td></tr>
      <tr><td>ISC commerce student in Mayur Vihar Phase 3</td><td>Hybrid</td><td>A weekend visit from a nearby tutor plus online lessons with an accounts specialist</td></tr>
      <tr><td>Family moving to Delhi mid-year</td><td>Online first, home later</td><td>Lessons start before the new address and routine settle</td></tr>
    </tbody>
  </table>
  </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-stage">What online tuition looks like at each stage</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Online lessons for Delhi students, from primary to the entrance years</caption>
    <thead>
      <tr><th scope="col">Stage</th><th scope="col">Session length and rhythm</th><th scope="col">What to insist on</th></tr>
    </thead>
    <tbody>
      <tr><td>Classes 1 to 5</td><td>20 to 30 minutes, for one focused need such as reading or a language</td><td>An adult beside the child; most other work at home with a tutor in the room</td></tr>
      <tr><td>Classes 6 to 8</td><td>40 to 45 minutes, once or twice a week per subject</td><td>The notebook on camera; a short written task between sessions</td></tr>
      <tr><td>Classes 9 and 10</td><td>About an hour; a midweek online session alongside a home visit works well</td><td>Board-style written answers marked step by step on screen; see <a href="{{ url('/class-10-home-tutor-delhi') }}">Class 10 tutors in Delhi</a></td></tr>
      <tr><td>Classes 11 and 12</td><td>60 to 90 minutes for teaching; 30-minute slots for doubts after coaching</td><td>A shared problem set each week and a record of errors</td></tr>
      <tr><td>IB and IGCSE</td><td>Usually online by choice, to reach the right specialist</td><td>Guidance on internal assessment without the tutor writing any of it</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Whatever the stage, ask the tutor to send a two-line note after each lesson: what was covered and what to
    practise. That small habit makes online tuition easy for a busy parent to follow.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-how">How are online lessons arranged through NXTutors?</h2>
  <ol>
    <li><strong>Choose Online on the search.</strong> The home page search has an Either, Home tutor and Online switch. Home looks for tutors who can reach your area; Online looks for the best fit anywhere. You can also type <em>online</em> into the search, or start from <a href="{{ url('/tutors?mode=online&city=Delhi') }}">the tutor list with online selected</a> and add subject, board, class, fee limit, experience, rating or gender.</li>
    <li><strong>Send a request.</strong> The demo form has a Mode field; choose online and add the board, class and goal in the message.</li>
    <li><strong>Get two or three matched tutors,</strong> each with a fee shown before the demo.</li>
    <li><strong>Take the free demo online,</strong> using the video tool you and the tutor agree on; NXTutors does not require a particular app.</li>
    <li><strong>Continue or switch.</strong> If the fit is wrong, the next tutor on the shortlist can take a demo, and changing later is free.</li>
  </ol>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-desk">What does your child need on the desk?</h2>
  <ul>
    <li><strong>A laptop or tablet,</strong> not a phone, for anything beyond a quick doubt; a phone screen is too small for diagrams.</li>
    <li><strong>A way to show written work:</strong> a writing tablet, a shared whiteboard, or a second phone on a stand pointing at the notebook.</li>
    <li><strong>Headphones with a microphone,</strong> especially in a busy flat.</li>
    <li><strong>A steady connection</strong> and a charger within reach; agree with the tutor what happens if the call drops.</li>
    <li><strong>A quiet, visible spot,</strong> ideally a shared room rather than a closed bedroom.</li>
  </ul>
  <p>
    Between lessons, some students use <a href="{{ url('/blog/tutortwin-whatsapp-homework-help-guide') }}">TutorTwin</a>,
    our WhatsApp AI tutor, for quick homework questions; the real teacher still does the teaching. Our article on
    <a href="{{ url('/blog/how-nxtutors-uses-ai') }}">how NXTutors uses AI</a> explains where it fits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-working">How can you tell if online lessons are working?</h2>
  <p>
    Give it four weeks, then check:
  </p>
  <ul>
    <li>Is your child writing during lessons, with the tutor correcting on screen, or only listening?</li>
    <li>Does the tutor share a short written note or task after each session?</li>
    <li>Are school test marks or homework quality moving, even slightly, in the subject?</li>
    <li>Does your child turn up on time and stay engaged for the whole session?</li>
  </ul>
  <p>
    If two of these are "no", talk to the tutor, try a hybrid pattern, or ask for the next tutor on the shortlist. Our
    comparison of <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online and offline tutoring</a> goes deeper.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-mix">Mixing home and online with one tutor</h2>
  <p>
    Hybrid is often the most practical Delhi answer. A tutor who lives within reach comes once a week, usually at the weekend when
    roads are calmer, and teaches online on one or two weekday evenings. This keeps a personal connection and a
    regular look at the notebook, while cutting the evening trips that make tutors cancel. It also gives a ready
    fallback for festival weeks, such as Durga Puja week in
    <a href="{{ url('/city/delhi/zone/kalkaji-cr-park-sarita-vihar') }}">CR Park</a>, or any evening when crossing the city is not
    worth it. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor</a> article compares
    the two in detail.
  </p>
  <p>
    Hybrid also works with two different tutors. A family in an outer sector might keep a local tutor at home for
    maths and science, and add an online specialist for one demanding paper, such as ISC accounts or IB chemistry.
    Tell us at the start if you want this split, so the two shortlists are matched with each other in mind.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-safe">How do you keep online tuition safe?</h2>
  <ul>
    <li>Keep lessons in a shared room, with an adult at home who can look in.</li>
    <li>Use the meeting link the family controls or one you have confirmed, and keep the camera on for both sides.</li>
    <li>Keep all messages to the parent's number for younger students.</li>
    <li>Know what the ID check covers: tutors who join confirm a one-time code and upload a government photo ID that our team reviews before the profile is marked Verified. It is not a police or background check. See <a href="{{ url('/how-we-verify-tutors') }}">how we verify tutors</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-cost">Is an online tutor cheaper than a home tutor in Delhi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Tutors set their own fees for online lessons too. A tutor may quote less online because there is no travel, while specialists
    may charge the same wherever they teach. What usually changes is value: no trip across the river means shorter,
    more frequent sessions become practical. Each fee is visible before the demo; see the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi
    fees</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="don-start">Getting started</h2>
  <p>
    Even for online lessons, your locality page is a useful start, because it shows tutors near you who can also teach
    in person. {!! $donA('nizamuddin-west', 'Nizamuddin West') !!}, in the
    <a href="{{ url('/city/delhi/zone/lodhi-colony-jangpura-nizamuddin') }}">Lodhi Colony, Jangpura and Nizamuddin</a>
    zone, has quiet residential blocks, but roads near the dargah
    get very crowded, which makes online sessions useful on busy days. {!! $donA('sainik-farm', 'Sainik Farm') !!} has no
    metro inside it and needs an auto from Saket or Qutub Minar. {!! $donA('dwarka', 'Dwarka') !!} and
    {!! $donA('rohini', 'Rohini') !!}, the two DDA sub-cities, put the sector and pocket ahead of everything when a tutor
    plans a route. {!! $donA('mukherjee-nagar', 'Mukherjee Nagar') !!} has evening roads crowded with students, and
    {!! $donA('shahdara', 'Shahdara') !!} has tight lanes where online lessons help families looking for a specialist.
  </p>
  <p>
    Tell us the class, board, subjects, goal and the hours that suit you, and choose online or either. We send two or
    three tutors with fees shown; the first class is a free demo. <a href="{{ url('/tutors?mode=online&city=Delhi') }}">Browse
    online tutors</a>, <a href="{{ url('/demo-class') }}">book a free demo</a> or see local options on the
    <a href="{{ url('/city/delhi') }}">Delhi home tutors page</a>. For a Gurgaon address, see
    <a href="{{ url('/online-tutor-gurgaon') }}">online tutors for Gurgaon</a>. Tutors who teach online from Delhi can
    find students through <a href="{{ url('/tuition-jobs/delhi') }}">Delhi tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
