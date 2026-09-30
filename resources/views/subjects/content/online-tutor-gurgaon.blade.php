{{--
  Long-form guide for the "online tutor Gurgaon" page. Written by the NXTutors
  Academic Team for Gurugram families deciding when live one-to-one online
  tuition beats a home tutor, when it does not, and how to set it up. No exam
  facts are stated; no schools are named. NXTutors facts are limited to
  published policies (two or three matched tutors, free demo, free switching,
  fee shown before the demo, home tutoring across Gurugram and online across
  India, office in Sector 66). Fee range is the approved wording.
  FAQs render from faqs/online-tutor-gurgaon.php.

  Area links render only when that Gurugram area page exists and is active.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide on-guide" aria-labelledby="onGuideTitle">
  <h2 id="onGuideTitle">Online tutors for Gurgaon (Gurugram) students: when it works and how to set it up</h2>

  <p class="nx-guide__lede">
    Online tuition works best for Gurgaon students who need a specialist who does not live nearby, who live far from
    most tutors in New Gurgaon or along Dwarka Expressway, or who are in the senior classes and can concentrate on a
    screen. It works less well for young children in Classes 1 to 5, who usually learn better with a tutor beside them.
    Set up properly, with a way for the tutor to see written working, a live online class is a full lesson, not a
    compromise. This guide from the NXTutors Academic Team, based in Sector 66, Gurugram, covers when to choose online,
    when not to, the equipment and room that make it work, hybrid plans that mix home and online with one tutor, and
    how to keep online classes safe.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#on-when">When online is the better choice</a> ·
    <a href="#on-not">When it is not</a> ·
    <a href="#on-decide">Quick decision table</a> ·
    <a href="#on-setup">The setup</a> ·
    <a href="#on-lesson">A good online lesson</a> ·
    <a href="#on-hybrid">Hybrid plans</a> ·
    <a href="#on-safety">Online safety</a> ·
    <a href="#on-fees">Fees</a> ·
    <a href="#on-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="on-when">When is an online tutor better than a home tutor in Gurgaon?</h2>
  <p>
    Online is not a cheaper version of home tuition. In several common Gurgaon situations it is simply the better
    option.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>You need a specialist</h3>
  <p>
    Tutors who know one course in real depth, such as IB Maths Analysis and Approaches HL, IGCSE Physics Extended,
    ISC maths or JEE Advanced-level physics, are few in any single part of the city. Limiting the search to tutors who
    can drive to your society at 6 pm shrinks the choice sharply. Online opens it up to tutors across Gurgaon and
    beyond. Our <a href="{{ url('/ib-maths-tutor-gurgaon') }}">IB maths tutors in Gurgaon</a> page is one example of
    where this matters most.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>You live far from most tutors</h3>
  <p>
    In the newer sectors of New Gurgaon, such as {!! $ggA('-sector-81', 'Sector 81') !!}, and along Dwarka Expressway,
    in sectors such as {!! $ggA('sector-37d', 'Sector 37D') !!}, {!! $ggA('sector-99a', 'Sector 99A') !!} and
    {!! $ggA('sector-113-', 'Sector 113') !!}, distances between societies are long and fewer tutors live close by. A tutor
    who would spend an hour on the expressway each way either will not take the slot or will not keep it through the
    monsoon and exam season. Our
    <a href="{{ url('/blog/new-gurgaon-dwarka-expressway-tuition-guide') }}">New Gurgaon and Dwarka Expressway tuition
    guide</a> covers the zone in detail.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Your child is in a senior class</h3>
  <p>
    From about Class 9, and especially in Classes 11 and 12, most students can manage a screen lesson, and their
    subjects are specialised enough that the wider choice of tutor matters more than having someone in the room.
    Online also fits around coaching: a 45-minute doubt session at 8.30 pm is realistic online and rarely possible at
    home. See our <a href="{{ url('/class-12-home-tutor-gurgaon') }}">Class 12 home tutors in Gurgaon</a> page for how
    this fits the final school year.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Your week is already full</h3>
  <p>
    School buses, evening traffic at office hours and activities leave little room for a fixed home slot. Online
    removes travel for everyone, makes short sessions before a test practical, and keeps tuition going when the
    family travels or a tutor is unwell.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-not">When is online tuition the wrong choice?</h2>
  <p>
    Be honest about these, because the wrong format wastes months.
  </p>
  <ul>
    <li><strong>Young children.</strong> In Classes 1 to 5, a tutor beside the child watches pencil grip, letter formation and finger-pointing while reading, and keeps attention on track. Online rarely replaces that. Our <a href="{{ url('/primary-home-tutor-gurgaon') }}">primary home tutors in Gurgaon</a> page explains what works at this age.</li>
    <li><strong>Children who drift on screens.</strong> If your child switches tabs or checks the phone during online school, the same will happen in tuition.</li>
    <li><strong>Maths and science without a writing setup.</strong> If the tutor can see only the final answer, they cannot correct working, which is where most marks are lost.</li>
    <li><strong>A student who has just changed board or school.</strong> The first few weeks of diagnosing gaps often go faster in person, even if you move online later.</li>
    <li><strong>Unreliable internet with no backup.</strong> A lesson that drops every ten minutes teaches nothing.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-decide">Home, online or hybrid: a quick decision table</h2>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Which format suits which Gurgaon student</caption>
    <thead>
      <tr><th scope="col">Situation</th><th scope="col">Usually works best</th><th scope="col">Why</th></tr>
    </thead>
    <tbody>
      <tr><td>Class 1 to 5, any subject</td><td>Home</td><td>Young children need someone beside them</td></tr>
      <tr><td>Class 6 to 8, easily distracted</td><td>Home, or hybrid with a parent nearby</td><td>Focus and handwriting habits still forming</td></tr>
      <tr><td>Class 9 or 10, focused student</td><td>Online or hybrid</td><td>Wider choice; saves evening travel</td></tr>
      <tr><td>Class 11 or 12 with coaching</td><td>Online on weekdays, home at the weekend</td><td>Fits around coaching; no extra travel</td></tr>
      <tr><td>IB, IGCSE, ISC or a rare subject</td><td>Online</td><td>Specialists are few in any one area</td></tr>
      <tr><td>New Gurgaon or Dwarka Expressway, no tutor nearby</td><td>Hybrid</td><td>One home class a week, the rest online</td></tr>
      <tr><td>Just changed school or board</td><td>Home first, then hybrid</td><td>Gaps are easier to diagnose in person</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    For the full comparison, factor by factor, read our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor vs online tutor guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-setup">What equipment and room does online tuition need?</h2>
  <p>
    The setup decides the quality of an online lesson more than anything else. For maths and science in particular,
    the tutor must see the student write, live. A checklist:
  </p>
  <ol>
    <li><strong>A laptop or tablet, not a phone.</strong> A phone screen is too small to read diagrams and working.</li>
    <li><strong>A way to show written work.</strong> Either a writing tablet with a stylus, or a phone on a stand pointed down at the notebook as a second camera. The notebook camera is the cheapest and often the most natural option, because the student keeps writing on paper as they will in the exam.</li>
    <li><strong>A shared digital whiteboard.</strong> The tutor and student write on the same page, and the board can be saved as notes after the class.</li>
    <li><strong>Headphones with a microphone,</strong> so neither side hears echo or household noise.</li>
    <li><strong>A quiet desk in a common room.</strong> A table with good light, not a bed or sofa, and the door open.</li>
    <li><strong>A backup connection,</strong> such as a phone hotspot, for the days the society internet drops.</li>
    <li><strong>Books and past papers within reach,</strong> or shared as files before the class.</li>
  </ol>
  <p>
    Test the setup in the free demo. If the tutor cannot see your child's working clearly, fix that before paying for
    a single session. Our <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online vs offline tutoring</a> article
    has more on making online classes work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-lesson">What does a good online lesson look like?</h2>
  <p>
    A good online lesson feels like a good home lesson with a screen in the middle. Watch for this structure in the
    demo:
  </p>
  <ul>
    <li><strong>A quick check-in</strong> on homework and anything that went wrong in school tests.</li>
    <li><strong>Teaching with the student doing the work.</strong> The tutor explains briefly, then the student solves on paper or on the whiteboard while the tutor watches.</li>
    <li><strong>Live correction of working,</strong> not just "the answer is wrong".</li>
    <li><strong>Cameras on for both,</strong> so the tutor sees confusion before the student says anything.</li>
    <li><strong>A short summary and homework,</strong> shared in writing with the parent or student after the class.</li>
  </ul>
  <p>
    A tutor who talks over slides for an hour while the student listens is running a lecture, not tuition. Judge the
    demo with our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-hybrid">Hybrid plans: home and online with the same tutor</h2>
  <p>
    Many Gurgaon families do not choose one format. Hybrid plans that work well:
  </p>
  <ul>
    <li><strong>One home class, one or two online.</strong> The home class covers new topics and handwritten practice; online sessions handle doubts, homework review and tests.</li>
    <li><strong>Home during term, online in exam weeks.</strong> Short online sessions before each paper, with no travel.</li>
    <li><strong>Online on weekdays, home at the weekend.</strong> Useful for senior students with coaching, and in sectors where weekday traffic makes home visits unreliable.</li>
    <li><strong>Online while travelling.</strong> Tuition continues through holidays and family trips without a break.</li>
  </ul>
  <p>
    Keep the same tutor for both formats where you can. Continuity matters more than the format. We arrange home
    tutoring across Gurugram and online tutoring across India, so a hybrid plan with one tutor is straightforward.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-safety">How do I keep online tuition safe?</h2>
  <p>
    Online removes the question of who comes to your door, but it raises others. We check each tutor's identity
    before shortlisting, and we recommend:
  </p>
  <ul>
    <li><strong>A shared family device in a common room,</strong> not a phone behind a closed door.</li>
    <li><strong>Class links and messages on a channel a parent can see,</strong> such as a parent's number or a group the parent has added.</li>
    <li><strong>Cameras on for both tutor and student,</strong> and no move to private chats or new apps.</li>
    <li><strong>A parent nearby for younger students,</strong> at least for the first part of each class.</li>
    <li><strong>No personal details or photos</strong> shared beyond what the lesson needs.</li>
  </ul>
  <p>
    Our <a href="{{ url('/blog/choose-home-tutor-gurgaon-safety-checklist') }}">tutor safety checklist for Gurgaon
    parents</a> has a section on online classes, plus warning signs to take seriously.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-fees">Is online tuition cheaper than home tuition?</h2>
  <p>
    Sometimes, not always. Across NXTutors most home-tuition sessions fall between <strong>₹800 and ₹2,500 an
    hour</strong>; Classes 11 and 12, IB and IGCSE and JEE and NEET sit toward the upper end, and specialists for IB HL or
    JEE Advanced can charge more. Online removes the tutor's travel, which can lower the fee for the same tutor, but an
    experienced specialist may charge similar rates in either format. Class, board, subject, experience and frequency
    move the fee more than the format does. You see each shortlisted tutor's fee before the demo, so compare actual
    quotes and include your own costs, such as a stylus or a phone stand.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="on-start">Getting started with an online tutor</h2>
  <p>
    Tell us the class, board and subject, whether you want online only or a hybrid plan, your sector or society if
    home visits are part of it, and the slots that work. We shortlist two or three tutors, the first class is a free
    demo, and switching tutor later is free. For IB and IGCSE families weighing formats, our
    <a href="{{ url('/blog/ib-igcse-tutoring-gurgaon-parents-guide') }}">IB and IGCSE tutoring guide for Gurgaon
    parents</a> adds course-specific advice. To browse local and online options by area, start from our
    <a href="{{ url('/city/gurugram') }}">Gurugram tutors page</a>.
  </p>
  </section>

  </div>
</article>
