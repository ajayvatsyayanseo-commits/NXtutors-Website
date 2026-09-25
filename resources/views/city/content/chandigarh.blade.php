{{--
  Long-form guide for the Chandigarh city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents across the
  Chandigarh tricity (Chandigarh, Mohali and Panchkula) choosing a home tutor.
  Every figure is either live from the database or a published NXTutors policy;
  no schools or coaching institutes are named.

  Area links render only when that area page exists and is active, so adding,
  renaming or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $cAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $cA = function (string $slug, string $label) use ($cAreaSlugs) {
      return in_array($slug, $cAreaSlugs, true)
          ? '<a href="' . e(url('/city/chandigarh/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $cAreas = $allAreas->count();
@endphp

<article class="ch-guide" aria-labelledby="chGuideTitle">
  <h2 id="chGuideTitle">Home tuition in Chandigarh, Mohali and Panchkula: a parent's guide to the tricity</h2>

  <p class="ch-lede">
    Few Indian cities make it as easy to find a tutor nearby as Chandigarh does. The sector grid means a tutor in
    Sector 21 knows exactly how far Sector 35 is, and a family in Mohali can tell at a glance whether a tutor from
    Panchkula is realistic on a weekday evening. What makes the tricity unusual is everything else: three
    administrations sharing one urban area, three different school boards in common use, a deep-rooted habit of
    preparing for JEE, NEET and government exams, and a steady stream of students getting ready to study abroad.
    This guide explains how NXTutors finds tutors for tricity families, how those differences affect the choice, and
    what to look for before you commit.
  </p>

  <nav class="ch-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ch-how">How matching works</a> ·
    <a href="#ch-where">Where tutors teach</a> ·
    <a href="#ch-boards">Boards in the tricity</a> ·
    <a href="#ch-classes">Class by class</a> ·
    <a href="#ch-jee-neet">JEE &amp; NEET</a> ·
    <a href="#ch-abroad">IELTS, TOEFL &amp; SAT</a> ·
    <a href="#ch-languages">Languages</a> ·
    <a href="#ch-mode">Home or online</a> ·
    <a href="#ch-fees">Fees</a> ·
    <a href="#ch-choose">Choosing a tutor</a> ·
    <a href="#ch-transfers">Transfers mid-year</a> ·
    <a href="#ch-safety">Safety</a> ·
    <a href="#ch-calendar">The school year</a> ·
    <a href="#ch-start">Getting started</a>
  </nav>

  <h2 id="ch-how">How we find a tutor for your family</h2>
  <p>
    You fill in one short request: the student's class and board, the subjects, your sector or locality, the days
    and times that suit you, whether you want the tutor at home or online, and roughly what you want to spend. We
    read it as a whole, not as a keyword search, and come back with two or three tutors who fit every part of it.
  </p>
  <p>In the tricity, a few things carry more weight than they would elsewhere:</p>
  <ul>
    <li><strong>Which side of the border you live on.</strong> A student in a Mohali school may be on the Punjab board, and one in Panchkula on the Haryana board, even if the family lives a few kilometres from the Chandigarh boundary. We match to the board the student actually sits, because the textbooks and paper patterns differ.</li>
    <li><strong>Sector distance, honestly measured.</strong> The grid makes distances easy to read, but crossing from one city to another at peak hours is a different matter. We look at the tutor's starting point and your time slot, not just the kilometres.</li>
    <li><strong>A realistic time slot.</strong> After-school hours are the busiest, especially for students who also attend coaching. If your preferred slot is crowded, we tell you and suggest tutors with a genuine opening.</li>
    <li><strong>Budget.</strong> We only put forward tutors within the range you give us, and you see each fee before any lesson.</li>
    <li><strong>How the tutor has done so far.</strong> Reviews from families, reliability and how long students stay with a tutor all count.</li>
  </ul>
  <p>
    The next step is a <strong>free demo class</strong>. It is an ordinary lesson on whatever the student is studying
    that week, so you judge real teaching. If it does not click, say so and we arrange the next tutor. Switching is
    free, and there is no lock-in.
  </p>

  <h2 id="ch-where">Where our tutors teach across the tricity</h2>
  <p>
    @if($hubCounts['tutors'] > 0)
      {{ number_format($hubCounts['tutors']) }} verified tutors are
    @else
      Our tutors are
    @endif
    currently available to families in the Chandigarh area,
    @if($cAreas > 0) with {{ number_format($cAreas) }} localities listed on their own pages above. @else and we are adding locality pages as the network grows. @endif
    Here is how the tricity breaks down from a tuition point of view.
  </p>

  <h3>Chandigarh: the sectors and Manimajra</h3>
  <p>
    The northern sectors near the Capitol Complex and Sukhna Lake, such as {!! $cA('sector-8', 'Sector 8') !!},
    {!! $cA('sector-9', 'Sector 9') !!}, {!! $cA('sector-10', 'Sector 10') !!} and {!! $cA('sector-11', 'Sector 11') !!},
    are older, quieter and mostly made up of houses, and many families here work at PGI or Panjab University nearby.
    The central sectors around {!! $cA('sector-22', 'Sector 22') !!} and Sector 17 are well connected in every
    direction, which makes them a natural meeting point for tutors. The southern sectors in the 30s and 40s, including
    {!! $cA('sector-35', 'Sector 35') !!}, {!! $cA('sector-38', 'Sector 38') !!} and {!! $cA('sector-44', 'Sector 44') !!},
    are densely populated and home to many experienced tutors, so evening slots are easier to fill here.
    {!! $cA('manimajra', 'Manimajra') !!}, on the eastern edge, sits between Chandigarh and Panchkula and often draws
    tutors from both.
  </p>

  <h3>Mohali: phases, sectors and Aerocity</h3>
  <p>
    Mohali's older phases, such as {!! $cA('phase-3b2-mohali', 'Phase 3B2') !!}, {!! $cA('phase-7-mohali', 'Phase 7') !!}
    and {!! $cA('phase-10-mohali', 'Phase 10') !!}, sit close to the Chandigarh border, and tutors move between them
    and the southern Chandigarh sectors easily. The newer numbered sectors to the south and west, and the
    {!! $cA('aerocity-mohali', 'Aerocity') !!} area off Airport Road, have grown quickly with high-rise societies and
    young families. Here the number of tutors living close by is still catching up, so weekend mornings and hybrid
    arrangements help.
  </p>

  <h3>Panchkula and Chandimandir</h3>
  <p>
    Panchkula's sectors, from the older ones like {!! $cA('sector-7-panchkula', 'Sector 7') !!} and
    {!! $cA('sector-11-panchkula', 'Sector 11') !!} to the newer ones further out, are well planned and calm, and have
    a strong base of home tutors who have taught for many years. Families in and around Chandimandir Cantonment usually look to Panchkula-based tutors.
  </p>

  <h3>Zirakpur, Kharar and New Chandigarh</h3>
  <p>
    The growing suburbs of {!! $cA('zirakpur', 'Zirakpur') !!}, {!! $cA('kharar', 'Kharar') !!} and
    {!! $cA('new-chandigarh', 'New Chandigarh') !!} have filled with new apartment societies in recent years. Roads
    into Chandigarh from these towns can be slow in the evening, so we prefer tutors who live in the suburb itself or
    on the same side of it. Where the choice nearby is thin, online sessions with a stronger specialist are often the
    better answer.
  </p>

  <h2 id="ch-boards">Three boards in one urban area</h2>
  <p>
    Because Chandigarh is a Union Territory with Punjab on one side and Haryana on the other, parents here meet more
    school boards than in most cities. A tutor who knows one board well may not know another, so we always ask which
    one the student is on.
  </p>

  <h3>CBSE</h3>
  <p>
    CBSE is the most common board across the tricity, and it follows the NCERT textbooks closely. Board papers draw
    on NCERT examples and exercises and include a large share of competency-based items such as case studies and
    assertion–reason questions. A good CBSE tutor starts from the NCERT chapter, then uses sample papers and previous
    years' questions, and teaches the student to set out answers step by step the way the marking scheme rewards.
  </p>

  <h3>Punjab School Education Board (PSEB)</h3>
  <p>
    Many schools in Mohali and the wider Punjab side follow the Punjab board. The syllabus covers much of the same
    ground as CBSE, but the textbooks, question styles and the weight given to certain chapters differ, and some
    students study partly in Punjabi. Tutors should work from the board's own textbooks and past papers rather than
    assume CBSE material will fit.
  </p>

  <h3>Haryana Board (HBSE)</h3>
  <p>
    In Panchkula, a good number of students are on the Board of School Education Haryana. The same principle applies:
    the tutor needs the board's prescribed books and a feel for how its papers are set. Families who move between
    Panchkula and Chandigarh sometimes switch between HBSE and CBSE, and a tutor who knows both makes that much
    easier.
  </p>

  <h3>ICSE and international curricula</h3>
  <p>
    A smaller group of tricity schools follow ICSE and ISC, which expect longer, more detailed written answers, and a
    few offer international programmes such as IB or Cambridge. Specialist tutors for these are fewer, so we often
    widen the search to online tutors for Higher Level or A Level subjects.
  </p>

  <h2 id="ch-classes">What tuition looks like class by class</h2>

  <h3>Primary and middle school (Classes 1 to 8)</h3>
  <p>
    The goal here is steady habits and secure basics: reading with understanding, number sense and neat written work. One or two sessions a week is plenty. For many tricity families, middle school is
    also when Punjabi or Hindi as a second or third language starts to need attention at home.
  </p>

  <h3>Classes 9 and 10</h3>
  <p>
    Maths and Science get noticeably harder in Class 9, and Class 10 board exams follow straight after. A sensible
    plan covers Class 9 thoroughly, then in Class 10 moves from teaching to chapter tests and full papers during the
    second half of the year. This is also where many students begin a foundation course for JEE or NEET, and a tutor
    can make sure school marks do not slip while that happens.
  </p>

  <h3>Classes 11 and 12</h3>
  <p>
    Stream choice shapes everything after Class 10. Science students most often need help with Physics and Maths;
    commerce students with Accountancy and Economics; humanities students with Political Science, History and
    English writing, which also matter for those with an eye on civil services later. At this level we usually
    suggest a separate specialist for each subject. Our guide on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> may help if that decision
    is still open.
  </p>

  <h2 id="ch-jee-neet">JEE, NEET and the tricity's exam culture</h2>
  <p>
    The tricity has a long tradition of students preparing for engineering and medical entrance exams, and of
    families encouraging careers in government and the defence services. Most JEE and NEET aspirants here join a
    coaching programme. A home or online tutor adds the most value alongside it:
  </p>
  <ul>
    <li><strong>Working through the coaching material.</strong> Large batches leave questions unanswered. A tutor who goes through the student's own sheets and test papers each week keeps small doubts from piling up.</li>
    <li><strong>Balancing boards and entrance exams.</strong> Class 12 students need both. Much of the NCERT content overlaps, and a tutor can plan revision so each supports the other.</li>
    <li><strong>Rescuing one subject.</strong> A student strong in two subjects and weak in the third often gains more from focused one-to-one time on that subject than from longer hours in all three.</li>
  </ul>
  <p>
    JEE Main is held in two sessions in the first half of the year, followed by JEE Advanced for those who qualify;
    NEET UG is held once a year in spring. For NEET, careful study of the NCERT Biology books is the backbone of
    preparation. For JEE Maths, see our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise preparation
    guide</a>.
  </p>

  <h2 id="ch-abroad">Preparing to study abroad: IELTS, TOEFL and SAT</h2>
  <p>
    Chandigarh and the surrounding region of Punjab have a strong tradition of students going overseas for
    undergraduate and postgraduate study, and many families start planning while the student is still in school.
    Tutoring helps most with the tests that stand between a student and an application.
  </p>
  <ul>
    <li><strong>IELTS.</strong> Most students find Writing and Speaking the hardest parts. A tutor who gives detailed feedback on essays and runs mock speaking interviews is worth more than any volume of practice tests. See our guides to <a href="{{ url('/blog/ielts-writing-preparation-2025') }}">IELTS Writing</a> and <a href="{{ url('/blog/ielts-speaking-preparation') }}">IELTS Speaking</a>.</li>
    <li><strong>TOEFL.</strong> Required by some universities, particularly in North America. It is computer-based and leans on academic reading and listening, so practice on screen with timed tasks matters.</li>
    <li><strong>SAT.</strong> For students aiming at US undergraduate courses, the digital SAT tests reading, writing and maths in adaptive modules. Students strong in CBSE maths still need practice with its question style; our <a href="{{ url('/blog/sat-math-modules--dsat') }}">SAT Maths guide</a> explains the format.</li>
  </ul>
  <p>
    These tests are held many times a year, so start a few months before the intended test date and well before application deadlines. Online sessions suit this work, since much of the practice is on screen anyway.
  </p>

  <h2 id="ch-languages">Punjabi, Hindi and English</h2>
  <p>
    Language needs in the tricity vary with where the student goes to school. In Punjab, including Mohali, Punjabi is
    a compulsory subject in schools, so families who have moved from other states often need help for a child
    starting Punjabi late, beginning with the Gurmukhi script. In Chandigarh and Panchkula, Punjabi is widely offered
    as a second or third language alongside Hindi and, in some schools, Sanskrit.
  </p>
  <p>
    Hindi tutoring is most often about grammar and written expression in the board classes. English tutoring covers
    everything from reading and spoken confidence for younger children to literature and essay writing in the senior
    classes, and naturally overlaps with IELTS and TOEFL preparation for older students.
  </p>

  <h2 id="ch-mode">Home tuition or online tuition?</h2>
  <p>
    Home tuition remains popular here, and the compact sectors make it practical.
    It suits younger children, students who lose focus on a screen, and subjects where handwritten working matters.
    Online tuition widens the field to specialists for IB, A Levels, IELTS or JEE Advanced, and saves travel in the
    suburbs.
  </p>
  <p>
    The weather plays a part too. Dense fog on winter mornings and evenings, and the heat of May and June, can make
    travel unpleasant or unreliable. Many families switch to online sessions for those weeks and return to home
    visits afterwards. We can arrange home, online or hybrid tuition with the same tutor, so that change does not
    mean starting over. For a longer comparison, read <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online
    versus offline tutoring</a>.
  </p>

  <h2 id="ch-fees">What tuition costs in the tricity</h2>
  <p>
    Across NXTutors, most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>. Where a particular tutor
    sits depends on a handful of things:
  </p>
  <ul>
    <li><strong>Level.</strong> Senior classes cost more than primary and middle school.</li>
    <li><strong>What is being prepared.</strong> JEE Advanced problem-solving, NEET Biology depth, IB or A Level subjects, and test preparation such as IELTS or SAT sit towards the upper end.</li>
    <li><strong>Experience.</strong> Tutors with long board-exam experience and good reviews charge more.</li>
    <li><strong>Crossing city lines.</strong> A tutor travelling from Panchkula to Mohali in the evening may price the journey in; one in your own sector usually will not.</li>
    <li><strong>How often.</strong> Many tutors offer a lower hourly rate for three or more sessions a week, or for a monthly plan.</li>
  </ul>
  <p>
    You see every shortlisted tutor's fee before the demo. Our <a href="{{ url('/pricing-guide') }}">pricing guide</a>
    has a fuller breakdown by class and subject.
  </p>

  <h2 id="ch-choose">A checklist for picking the right tutor</h2>
  <p>Use the demo class to answer these questions:</p>
  <ol>
    <li><strong>Does the tutor know your board?</strong> Ask which textbook they teach from and how that board's papers are set. The answer for PSEB or HBSE should not be the same as for CBSE.</li>
    <li><strong>Did they check what the student already knows</strong> before explaining anything new?</li>
    <li><strong>Was the student working</strong>, solving and answering, for most of the lesson?</li>
    <li><strong>Can they fit around coaching?</strong> If the student attends a coaching programme, ask how the tutor would use its sheets and tests rather than repeat them.</li>
    <li><strong>Is there a plan?</strong> A good tutor will say what they intend to cover in the next four weeks and how they will check it.</li>
    <li><strong>Are the practicalities clear?</strong> Travel time, what happens in fog or heavy rain, and how missed sessions are made up.</li>
    <li><strong>Was the student comfortable?</strong> For younger children especially, this matters more than any degree.</li>
  </ol>
  <p>If several answers are no, tell us and we will arrange a demo with the next tutor on the list.</p>

  <h2 id="ch-transfers">Families who transfer mid-year</h2>
  <p>
    The tricity has many families whose work moves them on a schedule that ignores the school calendar: defence
    families posted to or from Chandimandir, doctors and staff at PGI, faculty at Panjab University, and officers in
    central and state government. A mid-year move often means a change of school and board at the same time.
  </p>
  <ul>
    <li><strong>Coming in from another state board.</strong> The content is often familiar but the order of chapters differs. A tutor can map what the new school has already covered and fill the gaps in a few weeks.</li>
    <li><strong>Moving between CBSE, PSEB and HBSE within the tricity.</strong> Textbooks, languages and question styles change. Language requirements, especially Punjabi on the Punjab side, often need the most attention.</li>
    <li><strong>Arriving in Class 9 or Class 11.</strong> These years feed directly into the board exams, so we look for tutors who can start within days, not weeks.</li>
  </ul>
  <p>
    Online sessions can begin before the move itself.
  </p>

  <h2 id="ch-safety">Safety and verification</h2>
  <p>
    Every tutor on NXTutors is ID-verified and goes through a profile check before being shortlisted to a family, and
    we keep tracking reviews and reliability after that. For home sessions, simple habits help: schedule lessons when
    an adult is at home, use a shared room rather than a bedroom, and let your society's security desk know the
    tutor's name and timing if you live in a gated complex. If anything about a tutor's conduct worries you, contact
    us straight away and we will act on it.
  </p>

  <h2 id="ch-calendar">Planning around the tricity school year</h2>
  <p>
    Most schools here begin their session in April. A typical year for a student in a board class looks like this:
  </p>
  <ul>
    <li><strong>April and May:</strong> a good time to begin with a tutor, while the new syllabus is just starting.</li>
    <li><strong>Summer vacation:</strong> the hottest weeks, useful for fixing gaps from the year before, often online.</li>
    <li><strong>July to September:</strong> regular teaching, chapter tests and the first term exams.</li>
    <li><strong>October to December:</strong> finish the syllabus; pre-board exams often start in December or January.</li>
    <li><strong>Winter break and fog season:</strong> many schools close for part of late December and January. It is valuable revision time, and online sessions avoid foggy roads.</li>
    <li><strong>February and March:</strong> board exams, with JEE Main's first session early in the year.</li>
    <li><strong>April and May:</strong> JEE Main's second session, JEE Advanced and NEET UG.</li>
  </ul>
  <p>
    Starting early gives a tutor a full year; starting later still helps, but the focus shifts to practising papers.
  </p>

  <h2 id="ch-start">Getting started</h2>
  <p>
    Tell us the student's class, board and subjects, your sector, phase or town, and the times that suit you. We
    will come back with two or three matched tutors, you choose one for a free demo, and you decide after that.
    Browse <a href="{{ url('/tutors') }}">our tutors</a> or book a <a href="{{ url('/demo-class') }}">free demo
    class</a> to begin.
  </p>
  <p class="ch-note">
    Looking outside the tricity? We also have tutors in <a href="{{ url('/city/gurugram') }}">Gurugram</a>,
    <a href="{{ url('/city/delhi-ncr') }}">Delhi NCR</a> and <a href="{{ url('/city') }}">other cities across
    India</a>.
  </p>
</article>

<style>
  .ch-guide{margin-top:40px;color:#fff;line-height:1.7;max-width:860px}
  .ch-guide h2{font-size:24px;font-weight:900;margin:36px 0 12px;scroll-margin-top:90px}
  .ch-guide h3{font-size:18px;font-weight:800;margin:22px 0 8px}
  .ch-guide p,.ch-guide li{opacity:.9}
  .ch-guide ul,.ch-guide ol{padding-left:20px}
  .ch-guide li{margin:6px 0}
  .ch-guide a{color:#c9d6ff}
  .ch-lede{font-size:17px}
  .ch-toc{margin:18px 0;padding:14px 16px;border:1px solid rgba(255,255,255,.14);border-radius:14px;font-size:14px;line-height:2}
  .ch-note{margin-top:20px;font-size:14px;opacity:.8}
</style>
