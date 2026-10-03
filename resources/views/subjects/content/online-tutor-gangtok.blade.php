{{--
  Long-form guide for the "online tutor Gangtok" page. Byline in config:
  NXTutors Academic Team. Page writer (capitals wave 2, subjects), 3 Oct 2026.
  For Gangtok families deciding when live one-to-one online tuition beats a
  home tutor, and how to set it up.
  NXTutors facts are limited to published policies (two or three matched
  tutors, free first demo, free switching, fee shown before the demo, home
  tutoring where tutors exist and online across India) and site behaviour as
  stated on online-tutor-mumbai (checked in code 1 Oct 2026: SearchQuery
  reads online / virtual / zoom as online mode; the hero search has a Home
  tutor / Online / Either switch; /tutors accepts mode=online plus subject,
  board, class, fee, experience, rating and gender; the demo request sends a
  Mode field; the tutor cascade widens from area to zone, city, state and
  India, online only beyond the city). No claim that NXTutors provides its
  own video classroom or whiteboard. No exam patterns are stated.
  Local detail only from gangtok-research.json (zone_facts, area "about"
  texts and board_facts: Gangtok's schools follow CBSE or CISCE): linear
  city along the main roads, homes above and below the road, no railway or
  metro, shared taxis, monsoon rain as timing advice. No school, society or
  people's names, no roads named after people, no distances or travel times,
  only the allowed fee sentence.
  Area links render only when that Gangtok area page exists and is active.
--}}
@php
  $gkoAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $gkoA = function (string $slug, string $label) use ($gkoAreaSlugs) {
      return in_array($slug, $gkoAreaSlugs, true)
          ? '<a href="' . e(url('/city/gangtok/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide gtko-guide" aria-labelledby="gtkoGuideTitle">
  <h2 id="gtkoGuideTitle">Online tutors for Gangtok students: a wider choice without the climb</h2>

  <p class="nx-guide__lede">
    Gangtok stretches along its main roads, and most homes sit on the slopes above or below them. Tutors get about by
    shared taxi, two-wheeler or on foot, and a wet monsoon evening slows all three. Meanwhile, the teacher who knows
    your child's exact paper most thoroughly may live on the far side of the ridge, or in another state. Live one-to-one lessons
    on a screen can solve both problems. They are not right for every child, though, and they work only when the desk
    at home is set up properly. This page, from the NXTutors Academic Team, helps you decide, explains how to request
    online tutors through NXTutors, and shows how to combine screen lessons with home visits from the same person.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gtko-decide">Three questions</a> ·
    <a href="#gtko-fit">Situations</a> ·
    <a href="#gtko-request">Requesting tutors</a> ·
    <a href="#gtko-corner">The study corner</a> ·
    <a href="#gtko-first">First three lessons</a> ·
    <a href="#gtko-rhythm">Mixed rhythms</a> ·
    <a href="#gtko-rules">Ground rules</a> ·
    <a href="#gtko-fees">Fees</a> ·
    <a href="#gtko-start">Starting</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="gtko-decide">Three questions that settle home or online</h2>
  <dl>
    <dt><strong>1. Is the right specialist within reach?</strong></dt>
    <dd>Schools in Gangtok follow CBSE or CISCE, and tutors for mainstream CBSE maths or science are the easiest to find close to home. ISC maths, ICSE literature, or an IB or IGCSE course brought from another city narrows the field sharply. If the teacher who fits lives elsewhere, online is the honest answer; the <a href="{{ url('/maths-home-tutor-gangtok') }}">maths</a> and <a href="{{ url('/physics-home-tutor-gangtok') }}">physics</a> pages for Gangtok describe what such a specialist should know.</dd>
    <dt><strong>2. How hard is the last stretch to your door?</strong></dt>
    <dd>A flight of steps down from the road, or a footpath from the taxi stop, is fine once or twice a week. Asking a tutor to do it four evenings running, in the dark and the rain, is where regular lessons tend to fray. Online lessons keep the week steady.</dd>
    <dt><strong>3. Can your child learn through a screen?</strong></dt>
    <dd>This one decides more than the other two. Children below about Class 5, students who drift to other tabs, and anyone who has just changed board usually learn better with a person beside them, at least for the first month. A student who already manages online school work well is a good candidate.</dd>
  </dl>
  <p>
    A poor connection with no backup is the remaining deal-breaker; sort that out first, or keep lessons at home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-fit">Typical Gangtok situations and the format that tends to fit</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Situations Gangtok families describe to us, the format that tends to work, and the reason</caption>
    <thead>
      <tr><th scope="col">The situation</th><th scope="col">Format that tends to work</th><th scope="col">The reason</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 3 child learning to read fluently</td><td>At home</td><td>Reading aloud and handwriting need a person at the table</td></tr>
      <tr><td>Class 10 CBSE student, organised and motivated</td><td>Online, or one home visit plus online</td><td>More tutors to choose from; no evening journey on wet days</td></tr>
      <tr><td>Class 12 student studying late most nights</td><td>Online on school nights, a visit at the weekend</td><td>A late screen session is practical; a late visit rarely is</td></tr>
      <tr><td>ISC, IB or IGCSE paper</td><td>Online</td><td>The specialist is more likely to be elsewhere in India</td></tr>
      <tr><td>Home reached by a long stairway or footpath</td><td>A mix</td><td>The tutor climbs once a week; the other lessons happen on screen</td></tr>
      <tr><td>Home tutor already in place, monsoon months</td><td>At home, with a screen backup</td><td>Downpour evenings switch to the screen at the usual hour</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For a fuller weighing of the two formats, read <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor
    or online tutor</a> and <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline
    tutoring</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-request">Requesting online tutors through NXTutors</h2>
  <ul>
    <li><strong>From the home page:</strong> set the switch under the search box to Online, or simply include the word "online" in your search with the subject and class, for example "online ICSE English Class 9". Location no longer limits who appears.</li>
    <li><strong>From Find Tutors:</strong> <a href="{{ url('/tutors?mode=online') }}">filter to online</a> and narrow by subject, board, class, fee ceiling, experience, rating or the tutor's gender.</li>
    <li><strong>Not sure yet?</strong> Pick Either, and the list can mix a nearby tutor who could visit with online tutors based elsewhere.</li>
    <li><strong>Ask for a demo:</strong> the request form includes a Mode choice. Select online, add class, board and the hours that suit, and we reply with two or three tutors and their fees.</li>
    <li><strong>The demo itself</strong> is a full lesson on screen and costs nothing. The family and the tutor agree which video tool to use and how written work will be shared. If it does not fit, the next tutor on the list is arranged, and changing later is free too.</li>
  </ul>
  <p>
    Online names can also turn up when you asked for home tuition. If few tutors near you fit the request, the list
    widens step by step, from your locality to its zone, then the whole city, then tutors in the rest of the state and
    across India who teach online, and each card shows where the tutor lives. Tutors who join go through an
    <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before their profile goes live. It is an identity check,
    not a police or background check, so the demo remains the real test of the teaching.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-corner">Setting up the study corner</h2>
  <p>
    For subjects with written working, the set-up decides whether online tuition succeeds. The tutor must see the
    working as it is written; a photo sent afterwards hides the step where things went wrong.
  </p>
  <ol>
    <li><strong>A proper screen.</strong> A laptop or tablet; a phone screen is too cramped for graphs, diagrams and long solutions.</li>
    <li><strong>A downward camera.</strong> A spare phone on a cheap stand aimed at the notebook, or a tablet with a stylus.</li>
    <li><strong>A shared page.</strong> An online whiteboard or document both sides can write on, saved afterwards as notes.</li>
    <li><strong>Sound.</strong> A headset with a microphone, so neither side has to repeat itself.</li>
    <li><strong>The right room.</strong> A table in a family room, good light, door open.</li>
    <li><strong>A backup.</strong> A mobile hotspot and a charged device for the evening the connection or power fails.</li>
  </ol>
  <p>
    Use the free demo as a rehearsal. If the tutor struggles to follow your child's writing, fix the camera angle
    before paying for anything.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-first">The first three lessons: signs it is working</h2>
  <p>
    By the third lesson you should be able to say yes to most of these. Your child is doing most of the talking and
    writing. When an error appears, the tutor asks a question that leads your child to find it. Cameras stay on at both
    ends. The material is your child's own school tests and board sample papers rather than a generic worksheet pack.
    Each lesson closes with a short written note: what was covered and what to practise before the next one. If the
    tutor mostly presents slides while your child watches, that is a lecture, not tuition. The
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> adds more
    questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-rhythm">Rhythms that mix home visits and screen lessons</h2>
  <p>
    Plenty of families settle on a blend rather than one format. If your tutor can visit some of the time, these
    rhythms work well:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Four ways to blend home and online lessons with one Gangtok tutor</caption>
    <thead>
      <tr><th scope="col">Rhythm</th><th scope="col">At home</th><th scope="col">On screen</th></tr>
    </thead>
    <tbody>
      <tr><td>Weekly split</td><td>Saturday: new topics and long handwritten practice</td><td>Weekdays: homework review and doubts</td></tr>
      <tr><td>Term and exams</td><td>Through the school term</td><td>Short check-ins on the evenings before each paper</td></tr>
      <tr><td>Weather</td><td>Dry weeks</td><td>Heavy-rain evenings, same tutor, same hour</td></tr>
      <tr><td>Travel</td><td>When the family is in Gangtok</td><td>During trips away, so the routine continues</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Whatever the rhythm, keep the same tutor for both parts if you can. A teacher who knows your child is worth more
    than the choice of room.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-rules">Ground rules for safe online lessons</h2>
  <p>
    Agree these in the first week. Lessons happen on a family device in a shared room, never on a phone behind a
    closed door. Lesson links and messages go to a parent's number, or to a group that includes a parent. Both cameras
    stay on, and the conversation stays on the agreed platform rather than moving to private chat apps. For younger
    children, a parent stays within earshot, at least at the start. Nobody shares photos or personal details beyond
    what the lesson needs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-fees">Does online tuition cost less in Gangtok?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Without a journey to
    make, some tutors quote less for online lessons; a senior specialist may not. The class, board, subject and number
    of weekly lessons usually matter more than the format. Every fee is on your shortlist before the demo; the
    <a href="{{ url('/blog/home-tuition-fees-gangtok') }}">Gangtok home tuition fees</a> article and the
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> list the questions worth asking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="gtko-start">Starting with an online tutor</h2>
  <p>
    Send us the class, board and subject, whether you want lessons only on screen or a blend with visits, your
    locality if visits are in the plan, and the evenings you can offer. If you would like to see who lives close by
    before choosing, open your locality page, for example {!! $gkoA('development-area', 'Development Area') !!},
    {!! $gkoA('tadong', 'Tadong') !!}, {!! $gkoA('ranipool', 'Ranipool') !!},
    {!! $gkoA('tathangchen', 'Tathangchen') !!} or {!! $gkoA('sichey', 'Sichey') !!}. Each one shows nearby tutors
    first and online tutors after them.
  </p>
  <p>
    You can <a href="{{ url('/demo-class') }}">book a free demo class</a>,
    <a href="{{ url('/tutors?mode=online') }}">browse online tutors</a>, or begin at the
    <a href="{{ url('/city/gangtok') }}">Gangtok home tutors page</a>, which covers the city's four zones, and the
    <a href="{{ url('/blog/gangtok-home-tuition-guide') }}">Gangtok home tuition guide</a>. The
    <a href="{{ url('/cbse-home-tutor-gangtok') }}">CBSE home tutor in Gangtok</a> page covers the board most families
    ask about, and the <a href="{{ url('/english-home-tutor-gangtok') }}">English</a> and
    <a href="{{ url('/biology-home-tutor-gangtok') }}">biology</a> pages explain how those subjects work on screen.
    Teachers living in Gangtok can see open requests on <a href="{{ url('/tuition-jobs/gangtok') }}">Gangtok tuition
    jobs</a>.
  </p>
  </section>

  </div>
</article>
