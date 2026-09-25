{{--
  Long-form guide for the Delhi NCR city page (included by city/show.blade.php
  when a file named after the city slug exists). Covers Delhi, Noida, Greater
  Noida and Ghaziabad; Gurugram and Faridabad have their own city pages and are
  linked, not covered. Every figure here is either live from the database or a
  published NXTutors policy, and no school is named as a partner.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $dAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dA = function (string $slug, string $label) use ($dAreaSlugs) {
      return in_array($slug, $dAreaSlugs, true)
          ? '<a href="' . e(url('/city/delhi-ncr/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="dl-guide" aria-labelledby="dlGuideTitle">
  <h2 id="dlGuideTitle">Home tuition in Delhi NCR: a parent's guide to Delhi, Noida, Greater Noida and Ghaziabad</h2>

  <p class="dl-lede">
    Ask ten Delhi parents about tuition and you will hear ten versions of the same worry: the board result, the
    coaching timetable, the Class 11 stream decision, and whether there is any time left for the child to breathe.
    The region is also spread across Delhi and Uttar Pradesh, joined by the Metro and divided by traffic. This guide
    explains how NXTutors finds the right tutor in Delhi, Noida, Greater Noida and Ghaziabad, what each stage of
    school needs, what tuition costs and how to judge a tutor in the first week.
  </p>

  <nav class="dl-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dl-how">How matching works</a> ·
    <a href="#dl-where">Where our tutors teach</a> ·
    <a href="#dl-boards">Boards</a> ·
    <a href="#dl-classes">Class by class</a> ·
    <a href="#dl-entrance">JEE, NEET &amp; CUET</a> ·
    <a href="#dl-subjects">Subjects</a> ·
    <a href="#dl-mode">Home or online</a> ·
    <a href="#dl-fees">Fees</a> ·
    <a href="#dl-choose">Choosing a tutor</a> ·
    <a href="#dl-safety">Safety</a> ·
    <a href="#dl-calendar">The school year</a> ·
    <a href="#dl-start">Getting started</a>
  </nav>

  <h2 id="dl-how">How we find a tutor for your child</h2>
  <p>
    You do not have to scroll through hundreds of profiles. You give us seven pieces of information: the student's
    class, board, the subjects that need help, your locality, the days and times you can manage, whether you want the
    tutor at home, online or a mix of both, and what you are comfortable spending. From that, we put forward two or
    three tutors, and each of them fits the whole brief, not only the subject.
  </p>
  <p>In Delhi NCR, a few details in that brief tend to decide the match:</p>
  <ul>
    <li><strong>Which side of the river, and which state.</strong> A tutor in Laxmi Nagar and a family in Indirapuram are close on a map but separated by the Yamuna, a state border and some of the busiest crossings in the region. We look at where the tutor actually travels from.</li>
    <li><strong>The school's own pace.</strong> Two CBSE schools in the same colony can be months apart in the syllabus, and one may test far more often than the other. We ask what the school has covered so the tutor starts in the right place.</li>
    <li><strong>Coaching commitments.</strong> If the student already goes to a coaching centre three evenings a week, the tutor has to fit the other days, and ideally work from the same material.</li>
    <li><strong>Language comfort.</strong> Some students learn best when a tutor can also explain in Hindi; others want English only. Tell us which.</li>
  </ul>
  <p>
    Once you have the shortlist, you pick one tutor for a <strong>free demo class</strong>. It is a real lesson on
    whatever the student is studying that week. If it does not click, say so and we arrange the next tutor. Switching
    costs nothing, and you are not tied into a package.
  </p>

  <h2 id="dl-where">Where our tutors teach across Delhi NCR</h2>
  <p>
    @if($hubCounts['tutors'] > 0)
      {{ number_format($hubCounts['tutors']) }} verified tutors are
    @else
      Our tutors are
    @endif
    available across Delhi and the neighbouring cities of Uttar Pradesh. Each part of the region has its own school
    mix, its own commute and its own busiest hours, so it helps to think in zones.
  </p>

  <h3>South Delhi</h3>
  <p>
    Colonies such as {!! $dA('greater-kailash', 'Greater Kailash') !!}, {!! $dA('saket', 'Saket') !!},
    {!! $dA('malviya-nagar', 'Malviya Nagar') !!}, {!! $dA('hauz-khas', 'Hauz Khas') !!} and
    {!! $dA('vasant-kunj', 'Vasant Kunj') !!} have a wide spread of schools, from long-established CBSE schools to a
    handful offering IB or Cambridge programmes. Requests here often come for senior-class Maths and Science, for
    English writing, and for students who already attend a coaching centre and need someone to clear doubts at home.  </p>

  <h3>West Delhi, Dwarka and Janakpuri</h3>
  <p>
    {!! $dA('dwarka', 'Dwarka') !!} is a city in its own right, with numbered sectors, group housing societies and a
    large number of CBSE schools. {!! $dA('janakpuri', 'Janakpuri') !!}, {!! $dA('rajouri-garden', 'Rajouri Garden') !!},
    {!! $dA('punjabi-bagh', 'Punjabi Bagh') !!} and {!! $dA('paschim-vihar', 'Paschim Vihar') !!} have settled family
    neighbourhoods where tutors have often taught for years. Within Dwarka it makes sense to match inside the
    sub-city, because crossing to the far side of it at 6 pm takes longer than it should.
  </p>

  <h3>North Delhi</h3>
  <p>
    {!! $dA('rohini', 'Rohini') !!}, {!! $dA('pitampura', 'Pitampura') !!}, {!! $dA('shalimar-bagh', 'Shalimar Bagh') !!}
    and {!! $dA('model-town', 'Model Town') !!} are dense, school-focused neighbourhoods with strong demand for CBSE
    board classes and for commerce subjects. The areas around the university's North Campus, including Mukherjee Nagar
    and GTB Nagar, are known for coaching centres and a large student population, including many postgraduates
    who teach school students alongside their own studies.
  </p>

  <h3>East Delhi and Mayur Vihar</h3>
  <p>
    Across the Yamuna, {!! $dA('mayur-vihar', 'Mayur Vihar') !!}, {!! $dA('patparganj', 'Patparganj') !!},
    {!! $dA('preet-vihar', 'Preet Vihar') !!} and {!! $dA('laxmi-nagar', 'Laxmi Nagar') !!} are full of cooperative group
    housing societies. Families here often compare Delhi-based tutors with ones from Noida, since the border is minutes
    away; we consider both, as long as the actual evening route is reasonable.
  </p>

  <h3>Central Delhi</h3>
  <p>
    {!! $dA('karol-bagh', 'Karol Bagh') !!}, {!! $dA('rajinder-nagar', 'Rajinder Nagar') !!} and
    {!! $dA('patel-nagar', 'Patel Nagar') !!} sit close to several Metro lines, which widens the pool of tutors who
    can reach you.
  </p>

  <h3>Noida and Greater Noida</h3>
  <p>
    Noida's sectors and high-rise societies, from the older sectors near the Delhi border to
    {!! $dA('sector-62-noida', 'Sector 62') !!}, the Expressway sectors such as
    {!! $dA('sector-137-noida', 'Sector 137') !!}, and {!! $dA('greater-noida-west', 'Greater Noida West') !!}
    (Noida Extension), house many young families who moved for work. In newer societies, hybrid arrangements help
    while the local tutor pool catches up. In {!! $dA('greater-noida', 'Greater Noida') !!} proper, distances are
    longer and weekend mornings are often easier to fill than weekday evenings.
  </p>

  <h3>Ghaziabad</h3>
  <p>
    {!! $dA('indirapuram', 'Indirapuram') !!}, {!! $dA('vaishali', 'Vaishali') !!},
    {!! $dA('vasundhara', 'Vasundhara') !!}, {!! $dA('raj-nagar-extension', 'Raj Nagar Extension') !!} and
    {!! $dA('crossings-republik', 'Crossings Republik') !!} are dominated by large societies with CBSE-affiliated
    schools close by. Indirapuram and Vaishali are compact and well connected, so tutors can usually reach them easily; the
    newer townships further out lean more on online sessions.
  </p>

  <h2 id="dl-boards">Boards: mostly CBSE, with ICSE, IB and IGCSE too</h2>
  <p>
    Delhi is CBSE country. The board's headquarters is in the city, and most students in Delhi, Noida and Ghaziabad
    sit CBSE exams, with some Noida and Ghaziabad schools following the UP Board.
  </p>

  <h3>CBSE</h3>
  <p>
    The NCERT textbook is the backbone of every CBSE paper, and board questions follow its language and examples
    closely. Papers now carry a large share of competency-based questions: case-based items, assertion and reason,
    and source or data-based questions. A CBSE tutor should work NCERT line by line first, then move to sample papers
    and previous years' papers, and teach the student to lay out answers the way the marking scheme rewards: formula,
    substitution, units, final answer. A tutor who skips NCERT for harder books is not helping before the boards.
  </p>

  <h3>ICSE and ISC</h3>
  <p>
    A smaller number of Delhi NCR schools follow the CISCE board. ICSE and ISC students carry more content per subject
    and write longer answers, and English (both Language and Literature) is weighed more heavily than in CBSE. Tutors
    need to know the prescribed texts and the project work each subject requires.
  </p>

  <h3>IB and Cambridge IGCSE</h3>
  <p>
    International schools in South Delhi, Noida and elsewhere in the region offer the IB Diploma or Cambridge IGCSE
    and A Levels. These students need tutors who understand internal assessments, command words and mark schemes.
    Such specialists are fewer, so we often match them online rather than settle for a near-miss in person.
  </p>

  <h2 id="dl-classes">What each stage of school needs</h2>

  <h3>Nursery to Class 5: early foundations</h3>
  <p>
    Delhi's nursery and entry-level admissions put many families through a stressful season before the child has
    even started school. Once they are in, what young children need is not drilling but steady foundations: reading
    fluency in English and Hindi, number sense, handwriting and the habit of sitting with a task. A short, regular
    session two or three times a week with a warm, patient tutor does more than long weekend marathons.
  </p>

  <h3>Classes 6 to 8: building the base</h3>
  <p>
    These years set up everything that follows. Fractions, integers, early algebra and basic geometry in Maths;
    reading a diagram and explaining a process in Science; and grammar in English, Hindi and Sanskrit, which many
    Delhi schools teach as a third language. A tutor's job here is to catch shaky topics before they become gaps.
  </p>

  <h3>Classes 9 and 10: the board years begin</h3>
  <p>
    Board results carry real weight in Delhi homes. Relatives ask, schools publish toppers, and the Class 10 score
    affects which stream a student gets in Class 11 in some schools. That pressure is best handled with a plan: finish
    Class 9 properly, since much of Class 10 builds on it, then in Class 10 move from teaching to chapter tests to full
    papers, leaving the last months for revision. Our guide to
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 Maths preparation</a> sets out one
    such plan.
  </p>

  <h3>Classes 11 and 12: stream choice and dual goals</h3>
  <p>
    The stream decision (Science with Maths or Biology, Commerce, or Humanities) is often made within weeks of the
    Class 10 result. A tutor can help by showing the student what Class 11 Physics or Accountancy actually feels like
    first; see <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>. Class 11 is then
    the year students most often underestimate, and much of the JEE and NEET syllabus comes from it. In Class 12 the
    student is aiming at the board result and an entrance exam at once, so subject specialists work better than one
    all-rounder. For Physics, see our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">CBSE Class 12
    Physics strategies</a>.
  </p>

  <h2 id="dl-entrance">JEE, NEET and CUET alongside coaching</h2>
  <p>
    Delhi has long been one of India's coaching capitals. Whole neighbourhoods, such as the belt around Kalu Sarai in
    South Delhi, are known for entrance-exam institutes, and many students in Noida and Ghaziabad travel to coaching
    centres or join their local branches. A home tutor does not replace that. Where a tutor helps is in the gaps
    coaching leaves:
  </p>
  <ul>
    <li><strong>Doubts that never get asked.</strong> In a batch of a hundred, a quiet student rarely raises a hand. A tutor working through the student's own coaching sheets and marked tests catches what was skipped and separates careless errors from real gaps.</li>
    <li><strong>The weak subject.</strong> Many aspirants are comfortable in two subjects and losing marks in the third. Focused one-to-one time on that subject is often the best use of a limited budget. Our <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">topic-wise JEE Physics guide</a> may help you plan.</li>
    <li><strong>Boards and entrance together.</strong> Much of the NCERT content serves both, and a tutor can plan the year so that board preparation is not squeezed out.</li>
  </ul>
  <p>
    JEE Main is held in two sessions early in the year, with JEE Advanced later for those who qualify. NEET UG is
    usually held in May, and its Biology section rewards very close NCERT reading.
  </p>
  <p>
    <strong>CUET</strong> matters especially in Delhi, because admission to Delhi University's undergraduate courses
    runs through it. CUET UG is usually held in May and June, just after the boards. Students need to choose their
    domain subjects to match the courses they want, keep up practice in the language and general test sections, and
    revise Class 12 content quickly in a multiple-choice format. A tutor can help with the subjects and the timing.
    Our <a href="{{ url('/blog/cuet-preparation-2025-complete-ug-subject-strategies-syllabus-tips-pyqs-and-checklist') }}">CUET
    preparation guide</a> covers subject choice and practice in detail.
  </p>

  <h2 id="dl-subjects">Subjects Delhi NCR families ask for</h2>
  <p>
    Maths and Science lead in every zone, followed by the commerce subjects (Accountancy, Economics and Business
    Studies), English, and Computer Science. A few Delhi-specific patterns:
  </p>
  <ul>
    <li><strong>Hindi and Sanskrit.</strong> Both are widely taught in Delhi schools, and Sanskrit in particular is a subject where parents cannot always help at home. We have tutors for grammar, literature and board-paper practice.</li>
    <li><strong>Commerce with Maths.</strong> Many Delhi students take Maths alongside Commerce, often with an eye on economics or finance courses through CUET. Applied Maths and Class 11 Accountancy are frequent requests.</li>
    <li><strong>Humanities.</strong> Political Science, History, Geography and Psychology are popular in Delhi, and CUET makes them count for university admission. Writing structured answers is the main skill tutors work on.</li>
  </ul>

  <h2 id="dl-mode">Home tuition or online in Delhi NCR?</h2>
  <p>
    Both work, and the right answer often changes with the season. Home tuition suits younger children and
    hand-written working; online widens the choice of tutor and removes travel.
  </p>
  <p>Two things push many Delhi NCR families towards a mix:</p>
  <ul>
    <li><strong>Winter smog.</strong> In recent winters, air quality in Delhi NCR has at times turned severe enough for schools to close or move classes online, often during the weeks before pre-boards. An arrangement where the tutor can move online without losing the slot means those days are not wasted, and nobody has to travel through the haze.</li>
    <li><strong>Distance and the Metro.</strong> Many tutors travel by Metro. The Blue Line runs from Dwarka through central Delhi to Noida and Vaishali, and the Aqua Line continues into Greater Noida, so a tutor near a station on your line may reach you faster than one closer by road. Where the trip is still long, one home visit a week plus online sessions often works best.</li>
  </ul>
  <p>
    We can set up home, online or hybrid tuition with the same tutor. For a fuller comparison, read
    <a href="{{ url('/blog/online-vs-offline-tutoring') }}">online versus offline tutoring</a>.
  </p>

  <h2 id="dl-fees">What tuition costs, and why</h2>
  <p>
    Across NXTutors, most sessions cost between <strong>₹800 and ₹2,500 an hour</strong>. In Delhi NCR, these are
    the things that move a quote up or down:
  </p>
  <ul>
    <li><strong>The stage.</strong> Primary and middle-school sessions sit at the lower end; Class 11 and 12 and entrance-focused sessions sit higher.</li>
    <li><strong>The board.</strong> IB and IGCSE specialists are fewer and usually charge more than CBSE tutors at the same level.</li>
    <li><strong>The goal.</strong> Helping with homework costs less than a tutor who is building a JEE Advanced problem set or planning a CUET subject strategy.</li>
    <li><strong>The commute.</strong> A tutor crossing the Yamuna or a state border in the evening rush builds that time into the fee. One in your own block or sector often will not.</li>
    <li><strong>How often.</strong> Many tutors reduce the hourly rate for three or more sessions a week, and online sessions can cost less because there is no travel.</li>
  </ul>
  <p>
    You see each tutor's fee before the demo, and we only shortlist within your budget. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks this down further by class and subject.
  </p>

  <h2 id="dl-choose">How to judge a tutor in the first week</h2>
  <p>Qualifications on a profile tell you a little. The demo and the first few sessions tell you much more. Watch for:</p>
  <ol>
    <li><strong>Diagnosis before teaching.</strong> Did the tutor check what the student already knows, perhaps with a few quick questions, before explaining anything?</li>
    <li><strong>Hands on the pencil.</strong> Was the student solving and speaking for a good part of the hour, or just nodding along?</li>
    <li><strong>Knowledge of the paper.</strong> Can the tutor tell you how this year's board or entrance paper is structured and how marks are given?</li>
    <li><strong>Respect for the coaching schedule.</strong> If your child has coaching, did the tutor ask about it and offer to work with it?</li>
    <li><strong>A plan you can check.</strong> Did the tutor say what they will cover in the next four weeks and how you will know it is working?</li>
    <li><strong>Your child's verdict.</strong> Ask them privately whether they could ask this person a "silly" question. If not, keep looking.</li>
  </ol>
  <p>
    If several answers are no, tell us and we arrange a demo with the next tutor. Give a new tutor six to eight weeks
    before judging results.
  </p>

  <h2 id="dl-safety">Safety and verification</h2>
  <p>
    Every tutor on NXTutors is ID-verified and goes through a profile check before being shortlisted, and we keep
    tracking reviews and reliability for as long as they teach with us. In Delhi NCR's gated societies and RWA-managed
    colonies, a few habits make home tuition smoother and safer:
  </p>
  <ul>
    <li>Register the tutor at the society gate or in your visitor-management app, so every entry is logged and the guard is not calling you at the start of every session.</li>
    <li>If your society limits evening visitor hours, tell us when you book so the slot fits.</li>
    <li>Keep an adult at home during sessions with younger children, and use a common room.</li>
    <li>If anything about a tutor's conduct worries you, contact us directly. We act on it the same day.</li>
  </ul>

  <h2 id="dl-calendar">Planning around the Delhi NCR school year</h2>
  <p>Most schools in the region begin their session in April. For a student facing boards, the year usually runs like this:</p>
  <ul>
    <li><strong>April to June:</strong> the best time to start. The new syllabus is only beginning, and the long summer break, which Delhi's heat makes a stay-at-home season anyway, is ideal for fixing old gaps.</li>
    <li><strong>July to September:</strong> steady teaching alongside school, with chapter tests before mid-term exams.</li>
    <li><strong>October to December:</strong> finishing the syllabus. This is also when smog can disrupt school, so it helps to have online sessions ready. Many schools hold pre-boards from December into January.</li>
    <li><strong>January to March:</strong> full papers and revision, with CBSE board exams from February and JEE Main's first session early in the year.</li>
    <li><strong>April to June:</strong> JEE Main's second session, JEE Advanced, NEET UG usually in May, and CUET UG usually in May and June.</li>
  </ul>
  <p>
    Starting in April gives a tutor the whole year; starting in November shifts the work towards practice.
  </p>

  <h2 id="dl-start">Getting started</h2>
  <p>
    Tell us the student's class, board and subjects, your colony, sector or society, and the times that suit you. We
    reply with two or three matched tutors, you pick one for a free demo class, and you decide after that. You can
    browse <a href="{{ url('/tutors') }}">all tutors</a> or go straight to a
    <a href="{{ url('/demo-class') }}">free demo class</a>. Our office is in Sector 66, Gurugram, so the whole of NCR
    is home ground for us.
  </p>
  <p class="dl-note">
    Living in Haryana's side of NCR? We have separate guides for
    <a href="{{ url('/city/gurugram') }}">Gurugram</a> and <a href="{{ url('/city/faridabad') }}">Faridabad</a>, and
    tutors in <a href="{{ url('/city') }}">cities across India</a>.
  </p>
</article>

<style>
  .dl-guide{margin-top:40px;color:#fff;line-height:1.7;max-width:860px}
  .dl-guide h2{font-size:24px;font-weight:900;margin:36px 0 12px;scroll-margin-top:90px}
  .dl-guide h3{font-size:18px;font-weight:800;margin:22px 0 8px}
  .dl-guide p,.dl-guide li{opacity:.9}
  .dl-guide ul,.dl-guide ol{padding-left:20px}
  .dl-guide li{margin:6px 0}
  .dl-guide a{color:#c9d6ff}
  .dl-lede{font-size:17px}
  .dl-toc{margin:18px 0;padding:14px 16px;border:1px solid rgba(255,255,255,.14);border-radius:14px;font-size:14px;line-height:2}
  .dl-note{margin-top:20px;font-size:14px;opacity:.8}
</style>
