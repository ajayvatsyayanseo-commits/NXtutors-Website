{{--
  Long-form guide for the Gurugram city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Gurugram, not for search engines: every figure here is either
  live from the database or a published NXTutors policy, and schools are named
  only as places our students study, never as partners.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ggAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ggA = function (string $slug, string $label) use ($ggAreaSlugs) {
      return in_array($slug, $ggAreaSlugs, true)
          ? '<a href="' . e(url('/city/gurugram/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ggTutors = (int) ($hubCounts['tutors'] ?? 0);
  $ggAreas = $allAreas->count();
@endphp

<article class="gg-guide" aria-labelledby="ggGuideTitle">
  <h2 id="ggGuideTitle">Home tuition in Gurugram (Gurgaon): a complete guide for parents</h2>

  <p class="gg-lede">
    Gurugram has some of the most demanding school years in the country. A Class 10 student in DLF Phase 5 may be
    juggling CBSE board preparation with a JEE foundation course; an IB Diploma student on Golf Course Extension Road
    may have an Extended Essay deadline in the same month as mock exams; a Class 7 student in a new sector off
    Dwarka Expressway may simply need someone patient to rebuild confidence in maths. NXTutors is based in Sector 66,
    Gurugram, and this guide sets out how home tuition here works: how we match tutors, which parts of the city our
    tutors cover, what each board demands, what it costs, and how to judge a tutor before you commit.
  </p>

  <nav class="gg-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#gg-how">How matching works</a> ·
    <a href="#gg-where">Where our tutors teach</a> ·
    <a href="#gg-boards">Boards</a> ·
    <a href="#gg-classes">Class by class</a> ·
    <a href="#gg-jee-neet">JEE &amp; NEET</a> ·
    <a href="#gg-subjects">Subjects</a> ·
    <a href="#gg-mode">Home or online</a> ·
    <a href="#gg-fees">Fees</a> ·
    <a href="#gg-choose">Choosing a tutor</a> ·
    <a href="#gg-switch">Switching boards</a> ·
    <a href="#gg-parents">Working parents</a> ·
    <a href="#gg-progress">Tracking progress</a> ·
    <a href="#gg-safety">Safety</a> ·
    <a href="#gg-calendar">The school year</a> ·
    <a href="#gg-start">Getting started</a>
  </nav>

  <h2 id="gg-how">How NXTutors matches a home tutor in Gurugram</h2>
  <p>
    Most tutor directories hand you a long list and leave the sorting to you. We do the opposite: you tell us the
    student's class, board, subjects, locality, the days and times that work, whether you want home or online
    sessions, and a budget range. We then shortlist two or three tutors who fit all of it, not just the subject.
  </p>
  <p>The shortlist weighs the things that decide whether tuition actually works:</p>
  <ul>
    <li><strong>Board and class fit.</strong> A tutor who is excellent at CBSE Class 12 Physics is not automatically the right person for IB Physics HL, where internal assessments and data-based questions carry real weight. We match on the board and level the student is sitting, not on the subject name alone.</li>
    <li><strong>Distance and traffic.</strong> In Gurugram a tutor's distance in kilometres matters less than the road between you. A tutor ten minutes away along Golf Course Road can be forty minutes away at 6 pm. We look at where the tutor starts from and the time of your slot.</li>
    <li><strong>Availability overlap.</strong> Evening slots between 5 pm and 8 pm are the most requested in the city. If your preferred slot is crowded, we say so and suggest tutors with a genuine opening rather than one who will cancel in week three.</li>
    <li><strong>Budget.</strong> We only shortlist tutors inside the range you give us, and you see each tutor's fee before the first class.</li>
    <li><strong>Track record.</strong> Verified reviews from other families, how reliably the tutor turns up, and how long their students stay with them.</li>
  </ul>
  <p>
    You then book a <strong>free demo class</strong> with the tutor you like best. The demo is a normal lesson on the
    student's current topic, so you see the tutor's actual teaching rather than a sales pitch. If it is not right, tell
    us and we suggest someone else. There is no fee for switching, and no long contract to get out of.
  </p>

  <h2 id="gg-where">Where our tutors teach in Gurugram</h2>
  <p>
    @if($ggTutors > 0)
      {{ number_format($ggTutors) }} verified tutors
    @else
      Our tutors
    @endif
    currently cover @if($ggAreas > 0){{ number_format($ggAreas) }} sectors, societies and neighbourhoods @else the whole city @endif
    across Gurugram. Every area has its own page listing the tutors nearest to it; the full list is further up this page.
    Broadly, the city splits into zones that each have their own school mix and their own travel patterns.
  </p>

  <h3>DLF Phases 1 to 5 and MG Road</h3>
  <p>
    The older DLF phases ({!! $ggA('dlf-phase-1', 'DLF Phase 1') !!}, {!! $ggA('dlf-phase-2', 'Phase 2') !!},
    {!! $ggA('dlf-phase-3', 'Phase 3') !!}, {!! $ggA('dlf-phase-4', 'Phase 4') !!} and {!! $ggA('dlf-phase-5', 'Phase 5') !!})
    are dense with families whose children attend a wide spread of schools, from CBSE schools in the sectors nearby to
    IB and IGCSE programmes along Golf Course Road. Because houses and condominiums here are close together, tutors
    often teach two or three students in the same phase on one evening, which makes it easier to find a strong tutor
    with an early-evening slot. Parents here ask us most often for Class 9 to 12 Maths and Science, and for IB and IGCSE
    specialists.
  </p>

  <h3>Golf Course Road and Golf Course Extension Road</h3>
  <p>
    The high-rise societies on and around Golf Course Road, and further south along
    {!! $ggA('-golf-course-extn', 'Golf Course Extension Road') !!} in Sectors 58 to 66, have the highest share of
    international-curriculum students in our Gurugram requests. Families here often want a tutor for one specific
    component, such as IB Maths Analysis and Approaches HL, IGCSE Chemistry practical questions or the IB Extended Essay,
    rather than general homework help. Many societies restrict visitor entry after a set hour, so we confirm gate
    timings when we arrange the slot. Our own office is at M3M Cosmopolitan in Sector 66, on this stretch.
  </p>

  <h3>Sohna Road, South City and Sushant Lok</h3>
  <p>
    Along Sohna Road and the older colonies of South City and Sushant Lok, the mix leans towards CBSE and ICSE schools,
    with steady demand for board-exam preparation in Classes 10 and 12 and for JEE and NEET foundation from Class 9.
    Sohna Road traffic is heavy in the evening, so tutors who live on the same side of the road are worth waiting a
    day for. Societies in this zone such as {!! $ggA('ardee-city', 'Ardee City') !!} and
    {!! $ggA('vatika-city-sector-49-gurugram', 'Vatika City in Sector 49') !!} each have their own area page.
  </p>

  <h3>New Gurugram: Sectors 76 to 95 and Dwarka Expressway</h3>
  <p>
    The newer sectors off NH-48 and along Dwarka Expressway are where Gurugram is growing fastest, in societies such as
    {!! $ggA('m3m-urbana-residences-sector-67-gurugram', 'M3M Urbana') !!}, {!! $ggA('emaar-palm-drive', 'Emaar Palm Drive') !!},
    {!! $ggA('emaar-palm-hills', 'Emaar Palm Hills') !!} and {!! $ggA('bestech-park-view-city-1', 'Bestech Park View City') !!}.
    Many families moved in recently and the number of tutors living nearby is still catching up with demand. Two things
    help here: flexible timing (weekend mornings are often easier to fill than weekday evenings), and hybrid
    arrangements where the tutor visits once or twice a week and teaches online on the other days.
  </p>

  <h3>Old Gurgaon, Palam Vihar and the HUDA sectors</h3>
  <p>
    The older city around Sadar Bazaar, Palam Vihar and the {!! $ggA('huda-plots', 'HUDA plotted sectors') !!} has some
    of the most experienced tutors in Gurugram, many of whom have taught board classes for over a decade. Demand here is
    strongest for CBSE Maths, Science and Accountancy, and for Hindi and Sanskrit, which are harder to find tutors for in
    the newer parts of the city.
  </p>

  <h2 id="gg-boards">Tutoring for each board in Gurugram</h2>
  <p>
    Gurugram's schools follow four main curricula, and each one asks different things of a student. We match tutors to
    the board, because a tutor's experience with one does not always carry over to another.
  </p>

  <h3>CBSE</h3>
  <p>
    Most Gurugram students are in CBSE schools. CBSE rewards a close reading of the NCERT textbooks: board papers draw
    heavily on NCERT examples and in-text questions, and competency-based questions (case studies, assertion–reason and
    source-based items) now make up a large part of every paper. A good CBSE tutor works from NCERT first, then from
    previous years' papers and the board's sample papers, and trains the student to write answers in the step-by-step
    form the marking scheme gives credit for. From Class 10, CBSE also runs a second board exam window for students who
    want to improve their score, which changes how some families plan the final months.
  </p>

  <h3>ICSE and ISC</h3>
  <p>
    ICSE (Class 10) and ISC (Class 12), set by CISCE, cover more content per subject than CBSE and expect longer, more
    precise written answers, especially in English Language, English Literature, History and the sciences. Students
    often need help with the volume: planning revision so that nothing is left unread, and practising timed answers.
    ICSE tutors should know the prescribed Literature texts and the internal assessment (project) requirements for each
    subject.
  </p>

  <h3>IB (PYP, MYP and Diploma)</h3>
  <p>
    Several of Gurugram's best-known international schools run the IB Diploma Programme, and some also offer the Primary
    and Middle Years Programmes. IB tutoring is different in kind: grades depend on internal assessments (IAs) as well
    as final exams, and the core (Theory of Knowledge, the Extended Essay and CAS) runs through both years. In Maths, the
    student must be on the right course (Analysis and Approaches or Applications and Interpretation, at SL or HL), and
    in the sciences the IA investigation carries real weight. We look for tutors who have taught the current IB syllabus
    and can guide an IA or Extended Essay without writing it for the student, which IB academic-integrity rules forbid.
  </p>

  <h3>Cambridge IGCSE and A Levels</h3>
  <p>
    IGCSE students in Gurugram usually sit the Cambridge exams in Class 10, and some continue to AS and A Levels.
    Cambridge papers reward exam technique: knowing the command words, the difference between Core and Extended papers,
    and how marks are awarded in structured questions. Practice with past papers and mark schemes from the same exam
    series is central, and a good IGCSE tutor will build lessons around them from early in the course.
  </p>

  <h2 id="gg-classes">What tuition looks like class by class</h2>

  <h3>Classes 6 to 8: foundations</h3>
  <p>
    In the middle-school years the aim is understanding, not marks. The concepts that trip students up later, such as
    fractions and ratios, negative numbers, the start of algebra, and reading a science diagram carefully, are all laid
    down here. One or two sessions a week with a patient tutor who finds the gaps and fills them is usually enough. For
    students heading towards JEE or NEET, this is also when a light foundation in logical reasoning and problem-solving
    pays off, without the pressure of a coaching schedule.
  </p>

  <h3>Classes 9 and 10: the first board years</h3>
  <p>
    Class 9 is when many Gurugram families first look for a tutor, because the jump in Maths and Science is steep and
    Class 10 boards are one year away. A good plan covers the Class 9 syllabus properly (much of the Class 10 paper
    builds on it), then moves in Class 10 to a cycle of teaching, chapter tests and full-length papers from about
    November. Two to three sessions a week per core subject is typical in Class 10.
  </p>

  <h3>Classes 11 and 12: streams and specialisation</h3>
  <p>
    After Class 10 the subjects deepen sharply. In the science stream, Physics and Maths in Class 11 are the most common
    reason families ask us for help; in commerce, it is Accountancy and Economics. Class 11 matters more than many
    students expect: roughly half of JEE and NEET syllabi comes from it, and Class 12 builds directly on it. We often
    recommend a separate tutor per subject at this stage, each a specialist, rather than one tutor for all subjects.
  </p>

  <h2 id="gg-jee-neet">JEE and NEET preparation at home</h2>
  <p>
    Most JEE and NEET aspirants in Gurugram attend a coaching institute. Home tutoring works best alongside coaching,
    not instead of it, in three situations:
  </p>
  <ul>
    <li><strong>Doubt clearing.</strong> Coaching batches move fast and large classes leave little time for individual questions. A home tutor who works through the student's own coaching sheets and marked tests closes those gaps every week.</li>
    <li><strong>Board and entrance together.</strong> Students in Class 12 have to score well in their boards and in the entrance exam. A tutor can plan the months so the two support each other, because most of the NCERT content is common to both.</li>
    <li><strong>One weak subject.</strong> Many students are strong in two JEE subjects and struggling in the third (often Physics, or Organic Chemistry). One-to-one sessions on that subject alone can move a rank more than extra hours in all three.</li>
  </ul>
  <p>
    JEE Main runs in two sessions in the early part of the year, followed by JEE Advanced for those who qualify; NEET UG
    is held once a year, usually in May. For NEET, Biology carries half the marks and is almost entirely NCERT-based, so a
    tutor who works line by line through the NCERT Biology textbooks is worth more than any number of extra question banks.
  </p>

  <h2 id="gg-subjects">Subjects our Gurugram tutors teach</h2>
  <p>
    The most requested subjects in Gurugram are Mathematics, Physics, Chemistry and Biology, followed by English,
    Computer Science and the commerce subjects (Accountancy, Economics and Business Studies). We also match tutors for
    Hindi and Sanskrit, and for foreign languages taught in Gurugram's international schools. For each subject we look
    for tutors who have taught that subject at the student's level and board, which is why a tutor's profile lists
    specific classes and boards rather than a single subject.
  </p>
  <p>
    <strong>Maths</strong> is the subject where one-to-one help changes results fastest: it is cumulative, so a single
    shaky chapter (trigonometry in Class 10, calculus in Class 12) drags down everything after it.
    <strong>Physics</strong> needs a tutor who can make the student reason from first principles rather than memorise
    formula lists. <strong>Chemistry</strong> splits into three parts that need different handling: Physical Chemistry is
    numerical, Organic is about mechanisms and patterns, and Inorganic is largely NCERT-based recall.
    <strong>English</strong> tutoring in Gurugram is most often for ICSE and IB Literature, and for writing skills
    in the higher classes.
  </p>

  <h2 id="gg-mode">Home tuition or online tuition in Gurugram?</h2>
  <p>
    Both work, and many Gurugram families use a mix. Home tuition suits younger students, students who find it hard to
    concentrate on a screen, and subjects where writing out working by hand matters, such as Maths and Chemistry
    numericals. Online tuition widens the choice of tutor (useful for IB Higher Level subjects, where specialists are
    few), removes travel time on congested roads, and makes late-evening or weekend-morning sessions easier to arrange.
  </p>
  <p>
    A common pattern in Gurugram is one home session a week, for the relationship and the hand-written practice, plus
    one or two online sessions for doubt clearing and tests. We can arrange home, online or hybrid tuition with the same
    tutor.
  </p>

  <h2 id="gg-fees">What home tuition costs in Gurugram</h2>
  <p>
    Across NXTutors, most sessions fall between <strong>₹800 and ₹2,500 an hour</strong>. Where a tutor sits in that
    range depends on:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Classes 11 and 12, and IB and IGCSE, sit towards the upper end; middle-school tuition towards the lower end.</li>
    <li><strong>Subject specialisation.</strong> JEE Advanced-level Maths and Physics, IB HL subjects and IA or Extended Essay guidance command higher fees.</li>
    <li><strong>Experience and results.</strong> Tutors with long board-exam track records and verified reviews charge more.</li>
    <li><strong>Travel.</strong> A tutor crossing the city in peak traffic will price that in; a tutor in your own sector often will not.</li>
    <li><strong>Frequency.</strong> Many tutors offer a lower hourly rate for three or more sessions a week, or for a monthly arrangement.</li>
  </ul>
  <p>
    You see each shortlisted tutor's fee before the demo, and we only shortlist tutors inside the budget you give us.
    For a fuller breakdown by class and subject, see our <a href="{{ url('/pricing-guide') }}">pricing guide</a>.
  </p>

  <h2 id="gg-choose">How to choose the right tutor</h2>
  <p>A demo class tells you more than any profile. During and after it, ask yourself:</p>
  <ol>
    <li><strong>Did the tutor find out what the student already knows</strong> before starting to teach? A good first lesson begins with questions, not a lecture.</li>
    <li><strong>Did the student do most of the talking and problem-solving</strong>, or mostly listen? Learning happens when the student works.</li>
    <li><strong>Can the tutor explain the same idea two different ways?</strong> Ask them to re-explain something the student found hard.</li>
    <li><strong>Do they know the board's exam pattern?</strong> Ask how they would prepare the student for the current year's paper.</li>
    <li><strong>Did they suggest a plan</strong>: what to cover in the next month, and how progress will be checked?</li>
    <li><strong>How did the student feel afterwards?</strong> Comfort with the tutor matters more than any qualification, particularly for younger children.</li>
  </ol>
  <p>
    If the answer to several of these is no, tell us and we will set up a demo with the next tutor on the shortlist.
    You can also read <a href="{{ url('/blog/online-vs-offline-tutoring') }}">our guide to online and offline tutoring</a>
    and <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a>.
  </p>

  <h2 id="gg-switch">Families moving to Gurugram or switching boards</h2>
  <p>
    Gurugram has a large share of families who have moved for work, from other Indian cities or from abroad, and a
    mid-year move often means a change of board as well. The most common switches we see, and what helps with each:
  </p>
  <ul>
    <li><strong>From a state board or CBSE school elsewhere into a Gurugram CBSE school.</strong> The syllabus is similar, but the pace and the proportion of competency-based questions may be higher. A few weeks of targeted work on the chapters the new school has already finished is usually enough.</li>
    <li><strong>From CBSE into IB or IGCSE.</strong> This is the hardest switch. The content is often familiar, but the way students are assessed is not: extended written answers, investigations, and in the IB, internal assessments that count towards the final grade. A tutor who has taught both systems can bridge the gap quickly, starting with how answers are marked.</li>
    <li><strong>From an international school abroad into an Indian board.</strong> Students often find the volume of content and the emphasis on exact textbook answers unfamiliar, and may need to pick up Hindi or a second language at the school's level. Here we usually suggest a subject tutor plus a separate language tutor.</li>
    <li><strong>Mid-year transfers in Class 9 or Class 11.</strong> These are the years where missing a term costs the most, because Class 10 and Class 12 build directly on them. We prioritise tutors who can start within the week.</li>
  </ul>

  <h2 id="gg-parents">Tuition that fits around working parents</h2>
  <p>
    In many Gurugram households both parents work long hours, and school, coaching and activities already fill the
    child's week. Tuition only helps if it fits, so a few practical points:
  </p>
  <ul>
    <li><strong>Fix the slot, then protect it.</strong> Two regular sessions a week at the same time get more done than four irregular ones. Tutors plan better, and students arrive ready.</li>
    <li><strong>Use weekend mornings.</strong> Saturday and Sunday mornings are easier to fill with strong tutors than weekday evenings, and students are fresher.</li>
    <li><strong>Ask for a short written update.</strong> A two-line note after each session (what was covered, what homework was set, anything to watch) keeps parents informed without needing to be at home for every class.</li>
    <li><strong>Keep coaching and tuition from overlapping.</strong> If the student attends a coaching institute, share its timetable and test calendar with the tutor so sessions support coaching rather than repeat it.</li>
  </ul>

  <h2 id="gg-progress">How progress is tracked</h2>
  <p>
    Tuition is an investment, and you should be able to see what it is buying. With the tutors we work with in Gurugram,
    progress is normally tracked in three ways:
  </p>
  <ol>
    <li><strong>A starting point.</strong> In the first two or three sessions the tutor works out where the student is: which chapters are secure, which are shaky and which were never really learned. This becomes the plan.</li>
    <li><strong>Regular short tests.</strong> A chapter test every two to four weeks, marked the way the board marks, shows whether understanding is actually improving rather than just homework getting done.</li>
    <li><strong>School results in context.</strong> Unit tests and term exams are the clearest outside measure. We suggest a quick review with the tutor after each one to adjust the plan.</li>
  </ol>
  <p>
    If after six to eight weeks you are not seeing progress on any of these, talk to the tutor first, then to us. Sometimes
    the plan needs to change; sometimes the fit is wrong and a different tutor will do better. Either is normal, and
    switching is free.
  </p>

  <h2 id="gg-safety">Safety and verification</h2>
  <p>
    Every tutor on NXTutors goes through identity verification and a profile check before being shortlisted to a family,
    and we keep tracking reviews and reliability afterwards. For home sessions we recommend a few simple practices that
    most Gurugram families already follow: schedule sessions when an adult is at home, hold them in a common area rather
    than a bedroom, and register the tutor with your society's visitor-management app so entry is logged. If anything
    about a tutor's conduct concerns you, contact us directly and we act on it the same day.
  </p>

  <h2 id="gg-calendar">Planning around the Gurugram school year</h2>
  <p>
    Most Gurugram schools start their session in April. A rough year for a board-exam student looks like this:
  </p>
  <ul>
    <li><strong>April to June:</strong> the best time to start with a tutor. The new syllabus is just beginning, and the summer break gives time to fix gaps from the previous year.</li>
    <li><strong>July to September:</strong> steady teaching alongside school, with chapter tests. The first term's exams usually fall in September.</li>
    <li><strong>October to December:</strong> finish the syllabus. Pre-board exams in many schools run from December to January.</li>
    <li><strong>January to March:</strong> full-length papers, revision and the board exams themselves (CBSE, ICSE and ISC boards are held from February). JEE Main's first session also falls here.</li>
    <li><strong>April to May:</strong> JEE Main's second session, JEE Advanced, NEET UG, and the IB and Cambridge May examinations.</li>
  </ul>
  <p>
    Starting in April or May gives a tutor a full year to work with. Starting in November still helps, but the focus
    shifts from understanding to exam practice.
  </p>

  <h2 id="gg-start">Getting started</h2>
  <p>
    Tell us the student's class, board, subjects, your sector or society, and the slots that suit you. We come back
    with two or three matched tutors, you choose one for a free demo class, and you decide after that. Start by picking
    your area in the list above, browsing <a href="{{ url('/tutors') }}">all tutors</a>, or booking a
    <a href="{{ url('/demo-class') }}">free demo class</a>.
  </p>
  <p class="gg-note">
    Looking outside Gurugram? We also have home tutors in
    <a href="{{ url('/city/delhi-ncr') }}">Delhi NCR</a> and <a href="{{ url('/city/faridabad') }}">Faridabad</a>, and
    in <a href="{{ url('/city') }}">cities across India</a>.
  </p>
</article>

<style>
  .gg-guide{margin-top:40px;color:#fff;line-height:1.7;max-width:860px}
  .gg-guide h2{font-size:24px;font-weight:900;margin:36px 0 12px;scroll-margin-top:90px}
  .gg-guide h3{font-size:18px;font-weight:800;margin:22px 0 8px}
  .gg-guide p,.gg-guide li{opacity:.9}
  .gg-guide ul,.gg-guide ol{padding-left:20px}
  .gg-guide li{margin:6px 0}
  .gg-guide a{color:#c9d6ff}
  .gg-lede{font-size:17px}
  .gg-toc{margin:18px 0;padding:14px 16px;border:1px solid rgba(255,255,255,.14);border-radius:14px;font-size:14px;line-height:2}
  .gg-note{margin-top:20px;font-size:14px;opacity:.8}
</style>
