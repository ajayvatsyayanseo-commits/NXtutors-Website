{{--
  Board page "IB tutor Bengaluru" (PYP, MYP, DP). Author: Ajay Vatsyayan
  (role: IB, IGCSE and ISC maths). No anecdotes, years or results are claimed
  for him. No schools, societies or people are named.

  IB facts are only those stated in ib-tutor-gurgaon, which cites (ibo.org
  pages and IB PDFs, read 1 Oct 2026): PYP ages 3-12, six transdisciplinary
  themes, exhibition; MYP ages 11-16, five years (shorter versions allowed),
  eight subject groups, personal project of about 25 hours, optional
  two-hour on-screen exams; DP ages 16-19, six subjects, normally three (not
  more than four) HL, 240 h HL / 150 h SL, grades 1-7, EE + TOK up to three
  points, maximum 45, 24 points among passing conditions, IA in every
  subject; Extended essay subject brief, first assessment 2027 (4,000-word
  limit, three reflection sessions ending in a viva voce, 500-word reflective
  statement); TOK exhibition of three objects and a 1,600-word essay on one
  of six prescribed titles; IB maths revision, first teaching August 2027.
  The Bengaluru city hub names IB and IGCSE among the city's four kinds of
  examination, so this page exists. Local detail only from
  database/seo-content/areas/bengaluru-research.json,
  bengaluru-zone-guides.json, zones/bengaluru.json and the Bengaluru city hub.
  Fee wording is the approved NXTutors sentence. FAQs render from
  faqs/ib-tutor-bengaluru.php. Area links render only when that Bengaluru
  area page exists and is active.
--}}
@php
  $ibblSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ibblA = function (string $slug, string $label) use ($ibblSlugs) {
      return in_array($slug, $ibblSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide ibbl-guide" aria-labelledby="ibblGuideTitle">
  <h2 id="ibblGuideTitle">IB tutors in Bengaluru: matching the programme, the subject and the level</h2>

  <p class="nx-guide__lede">
    The Bengaluru city hub counts the IB among the four kinds of examination families here sit, alongside the
    Karnataka state board, CBSE and CISCE. An IB request is never just "IB", though. It might be a Grade 4 child in the
    Primary Years Programme, an MYP student struggling to write against criteria, or a Diploma student in Physics HL
    with an internal assessment due. Each needs a different tutor. This page explains how the three programmes work,
    what a tutor may and may not do with coursework, which subjects Bengaluru families ask about, how tutors reach each
    zone, and how to judge the free demo. Its author is Ajay Vatsyayan; on NXTutors his own teaching covers IB,
    IGCSE and ISC maths.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ibbl-local">The IB in Bengaluru</a> ·
    <a href="#ibbl-state">IB and the state board</a> ·
    <a href="#ibbl-programmes">Three programmes</a> ·
    <a href="#ibbl-dp">The Diploma</a> ·
    <a href="#ibbl-core">Coursework rules</a> ·
    <a href="#ibbl-subjects">Subjects</a> ·
    <a href="#ibbl-zones">Zones and timing</a> ·
    <a href="#ibbl-mode">Home or online</a> ·
    <a href="#ibbl-demo">Demo checklist</a> ·
    <a href="#ibbl-fees">Fees</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ibbl-local">Where the IB sits in Bengaluru</h2>
  <p>
    IB schools are one strand among the city's boards, beside the state board, CBSE and ICSE. We will not put
    a figure on how many families follow the IB, because we have no reliable one. What matters for finding a tutor is
    that IB specialists, especially for a single Higher Level subject, are spread thinly across a large city. A
    Diploma student in Whitefield and the closest-matched Chemistry HL tutor in Basaveshwaranagar sit on opposite sides
    of the city, and the wrong hour of the day makes that gap far longer, which is why the zone and the slot are part of every IB match we make.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-state">How IB study differs from the state board, in general</h2>
  <p>
    The Karnataka state board examines through the SSLC after Class 10 and then the pre-university course, from state
    textbooks with a scheme set out in the board's notices. The IB works differently at almost every point. Learning in
    the PYP and MYP is judged by inquiry tasks and published criteria rather than chapter tests; the Diploma combines
    final exams with coursework marked by teachers and moderated by the IB. Students moving into the IB often find the
    content manageable and the format strange: open questions, command terms such as "evaluate" and "justify", and
    long written explanations even in maths and science. A good tutor teaches that format explicitly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-programmes">PYP, MYP and DP at a glance</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>The three IB programmes and what a tutor does in each</caption>
    <thead>
      <tr><th scope="col">Programme</th><th scope="col">Ages, as the IB states</th><th scope="col">How it is judged</th><th scope="col">Useful tutoring</th></tr>
    </thead>
    <tbody>
      <tr><td>Primary Years</td><td>3 to 12</td><td>Inquiry units built on six transdisciplinary themes, closing with an exhibition; no external exams</td><td>Number facts, reading stamina and writing a clear paragraph</td></tr>
      <tr><td>Middle Years</td><td>11 to 16, over five years (some schools run fewer)</td><td>Published criteria across eight subject groups, a personal project (roughly 25 hours) and, if the school opts in, two-hour on-screen exams</td><td>Algebra and science content, and writing against criteria</td></tr>
      <tr><td>Diploma</td><td>16 to 19, over two years</td><td>Six subjects, each with internal assessment and a 1–7 grade, plus final exams, the Extended Essay, TOK and CAS</td><td>HL maths and sciences, economics, and planning coursework within the rules</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    A PYP tutor should never turn inquiry into worksheets; an MYP tutor should read the task sheet and criteria before
    teaching anything; a DP tutor needs to know the subject guide for your child's exam session. For MYP maths, our
    <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths home tutors in Bengaluru</a> page shows how we match by
    class and board.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-dp">The Diploma in numbers</h2>
  <p>
    A Diploma student takes six subjects across the IB's academic areas. Usually three, and at most four, are at Higher
    Level, for which the IB recommends 240 teaching hours, against 150 at Standard Level. Subjects are graded 1 to 7;
    up to three further points come from the Extended Essay and Theory of Knowledge combined, so the ceiling is 45. At least 24 points is one of several passing conditions. Every subject includes an internally assessed piece:
    an exploration in maths, an investigation in the sciences, other formats elsewhere.
  </p>
  <p>
    The pressure points are predictable. The first term of DP1 is a jump from Grade 10; DP1 to early DP2 crowds IA,
    EE and TOK deadlines on top of teaching; school mocks then decide predicted grades for university applications.
    A tutor who keeps a written plan across these phases protects the content that coursework tends to push aside.
    IB maths is also being revised, with new courses first taught from August 2027, so ask which version applies.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-core">IA, Extended Essay and TOK: the tutor's limits</h2>
  <p>
    The Extended Essay is an independent research piece of up to 4,000 words, supervised at school. For essays assessed
    from 2027, the student meets the supervisor for three reflection sessions, the final one a brief viva voce, and
    writes a reflective statement of 500 words. In TOK, students curate an exhibition around three objects and write a
    1,600-word essay answering one of the six titles set for their exam session.
  </p>
  <p>
    All of this must be the student's own work. Teaching the chemistry, economics or maths that
    underpins a topic is fine, as is explaining the criteria and pushing a student to tighten a research question.
    Picking the topic, drafting or editing any text, or running the analysis is not. The viva exists partly to confirm the student understands their
    own essay, so outside "polishing" puts the diploma at risk.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-subjects">IB subjects Bengaluru families ask for</h2>
  <p>
    Most requests start with one Diploma subject at HL: Mathematics (Analysis and Approaches or Applications and
    Interpretation), Physics, Chemistry or Biology, followed by Economics and the English courses. MYP families usually
    ask for maths or the sciences in the last two years, when Diploma choices loom.
  </p>
  <ul>
    <li><a href="{{ url('/ib-maths-tutor') }}">IB maths tutors</a> for AA and AI, with the <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">AA vs AI guide</a>.</li>
    <li><a href="{{ url('/physics-home-tutor-bengaluru') }}">Physics</a>, <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry</a> and <a href="{{ url('/biology-home-tutor-bengaluru') }}">biology</a> tutors in Bengaluru; say the level when you ask. The <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB physics SL/HL guide</a> covers the IA and EE.</li>
    <li><a href="{{ url('/english-home-tutor-bengaluru') }}">English home tutors in Bengaluru</a> for Language A, including the oral.</li>
  </ul>
  <p>
    For the board in depth, see our reference page on <a href="{{ url('/ib-tutor-gurgaon') }}">how the IB programmes
    work</a> and the <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">parent's guide to IB and IGCSE
    tutoring</a>. Changing from CBSE? Our <a href="{{ url('/blog/switching-cbse-to-ib-or-igcse-gurgaon') }}">CBSE to IB or
    IGCSE switching guide</a> has a bridging plan.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-zones">Zones and timing for an IB tutor</h2>
  <p>
    With specialists thin on the ground, timing decides whether a cross-city tutor is workable. These notes come from
    our Bengaluru zone guides.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>When a visiting IB tutor can keep time, by zone</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Timing and access</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/bengaluru/zone/koramangala-hsr-bellandur') }}">Koramangala, HSR and Bellandur</a>, e.g. {!! $ibblA('bellandur', 'Bellandur') !!}</td><td>Crossing the ORR at office opening or closing time makes weekday lessons slip; on Sarjapur Road a fixed weekly slot helps the guard recognise the tutor</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/jayanagar-jp-nagar-banashankari') }}">Jayanagar, JP Nagar and Banashankari</a>, e.g. {!! $ibblA('kanakapura-road', 'Kanakapura Road') !!}</td><td>Kanakapura Road apartments need gate registration; in the farthest pockets one online session a week is sensible</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/btm-bannerghatta-road-electronic-city') }}">BTM, Bannerghatta Road and Electronic City</a></td><td>Plan around office shift changes in Electronic City</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/indiranagar-old-airport-road') }}">Indiranagar and Old Airport Road</a>, e.g. {!! $ibblA('domlur', 'Domlur') !!}</td><td>Avoid office closing time at the Domlur flyover; metro to Indiranagar plus an auto, or a bus to the Domlur terminus</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/whitefield-marathahalli-kr-puram') }}">Whitefield, Marathahalli and KR Puram</a>, e.g. {!! $ibblA('brookefield', 'Brookefield') !!}</td><td>The gap between school and the evening rush on ITPL Road and Whitefield Main Road, or one session online</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hennur-kalyan-nagar-banaswadi') }}">Hennur, Kalyan Nagar and Banaswadi</a>, e.g. {!! $ibblA('thanisandra', 'Thanisandra') !!}</td><td>After-school or weekend slots; register the tutor with the complex first</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/hebbal-rt-nagar-yelahanka') }}">Hebbal, RT Nagar and Yelahanka</a>, e.g. {!! $ibblA('yelahanka', 'Yelahanka') !!}</td><td>Airport and office traffic funnels through the Hebbal flyover; a tutor from your side of it is steadier</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/malleshwaram-rajajinagar-yeshwanthpur') }}">Malleshwaram, Rajajinagar and Yeshwanthpur</a></td><td>Chord Road and Tumkur Road slow at peak; a slightly later weekday lesson is easier</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/vijayanagar-rr-nagar-kengeri') }}">Vijayanagar, RR Nagar and Kengeri</a></td><td>A Purple Line ride avoids Mysore Road at rush hour</td></tr>
      <tr><td><a href="{{ url('/city/bengaluru/zone/frazer-town-richmond-town-ulsoor') }}">Frazer Town, Richmond Town and Ulsoor</a></td><td>Afternoon or early evening, before the shopping streets fill</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    All areas are on our <a href="{{ url('/city/bengaluru') }}">Bengaluru home tuition page</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-mode">Home, online or hybrid for IB</h2>
  <p>
    The Bengaluru hub notes that online lessons open up tutors across India, which matters most for IB. For PYP and
    early MYP, a home tutor nearby is usually better; younger children focus more easily with someone at the table.
    For a Diploma HL subject, choose the right specialist first and then decide the format: a weekend home session plus
    a weekday online one is a common compromise. In online maths and sciences the tutor must see written working live
    and use the same approved calculator your child uses in exams.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-demo">Demo checklist for an IB tutor</h2>
  <ol>
    <li><strong>A marked school test.</strong> Hand it over and see whether the tutor reads the markscheme notation and pinpoints the lost method marks.</li>
    <li><strong>The syllabus version.</strong> Do they know which guide applies to your child's exam session, including the maths revision from 2027?</li>
    <li><strong>Command terms.</strong> Ask what "show that", "hence" and "evaluate" demand.</li>
    <li><strong>The coursework line.</strong> Listen for a clear statement that the tutor explains ideas and criteria while every word of the IA or EE stays your child's.</li>
    <li><strong>Programme fit.</strong> For MYP, do they ask for the criteria and task sheet before teaching?</li>
    <li><strong>A plan.</strong> By the end, you should hear the next month in outline, tied to the school calendar.</li>
  </ol>
  <p>
    Your shortlist has two or three tutors, each fee is visible before the demo, and a later change of tutor costs
    nothing. Every tutor who joins passes an <a href="{{ url('/how-we-verify-tutors') }}">ID check</a> before the profile
    is shown.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ibbl-fees">Fees and getting started</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. For IB, the programme,
    the level, the number of subjects and the tutor's journey at your slot move the figure. See the
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">Bengaluru fees guide</a> and our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>
  <p>
    Write to us with the programme and year, then subject and level ("MYP 5 sciences" or "DP2, Maths AA HL"), plus
    your area and the hours that suit; we arrange a <a href="{{ url('/demo-class') }}">free demo</a> first. Meanwhile
    you can look through <a href="{{ url('/tutors') }}">tutor profiles</a>. IB teachers living here can pick up requests on
    <a href="{{ url('/tuition-jobs/bengaluru') }}">Bengaluru tuition jobs</a>.
  </p>
  </section>

  </div>
</article>
