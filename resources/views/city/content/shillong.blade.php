{{--
  Long-form guide for the Shillong city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Shillong parents
  arranging a home or online tutor. Practical and educational only: no tourism,
  no politics, and hills or lakes appear only as place names. Every figure is
  either live from the database or a published NXTutors policy; local facts come
  only from the cited research in database/seo-content/areas/shillong-research.json;
  the MBOSE description comes from the board's own site (https://www.mbose.in/).
  No school, college, institute, hospital, society, developer or person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $shlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $shlA = function (string $slug, string $label) use ($shlAreaSlugs) {
      return in_array($slug, $shlAreaSlugs, true)
          ? '<a href="' . e(url('/city/shillong/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $shlTutors = (int) ($hubCounts['tutors'] ?? 0);
  $shlAreas = $allAreas->count();
@endphp

<article class="nx-guide shl-guide" aria-labelledby="shlGuideTitle">
  <h2 id="shlGuideTitle">Home tuition in Shillong: a hillside guide for parents, from Jaiaw and Laban to Laitumkhrah and Mawlai</h2>

  <p class="nx-guide__lede shl-lede">
    Shillong is a city of slopes. Houses sit above and below the road, lanes turn into flights of steps, and most
    neighbourhoods are known by Khasi names that cover several smaller parts, so "Mawlai" or "Laban" on its own rarely
    tells a newcomer where to stop. There is no railway in the city either: tutors get about by shared taxi, city bus,
    two-wheeler or car. Arranging a home tutor here therefore comes down to three practical things. Pick someone who
    lives on your side of town, give directions a stranger can follow on a wet evening, and choose a lesson hour that
    misses the school rush and the market crowds. This guide walks through each part of the city with that in mind,
    for MBOSE, CBSE and other boards alike.
  </p>
  <nav class="nx-guide__toc shl-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#shl-how">How matching works</a> ·
    <a href="#shl-zones">The zones</a> ·
    <a href="#shl-boards">MBOSE and other boards</a> ·
    <a href="#shl-classes">By class</a> ·
    <a href="#shl-subjects">By subject</a> ·
    <a href="#shl-jee-neet">Entrance exams</a> ·
    <a href="#shl-mode">Home, online or both</a> ·
    <a href="#shl-fees">Cost</a> ·
    <a href="#shl-choose">The first lesson</a> ·
    <a href="#shl-calendar">Through the year</a> ·
    <a href="#shl-start">Next steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="shl-how">How does NXTutors find a tutor for a Shillong family?</h2>
  <p>
    It starts with one short request. Tell us your child's class and board, the subject that needs the most help,
    your locality and the part of it you live in, the days and times that are genuinely free, a monthly budget, and
    whether you would like lessons at home, online or both. We reply with two or three suitable tutors, and each
    profile shows the tutor's fee before you meet anyone. The first lesson with the tutor you pick is a free demo, and
    changing tutor later does not cost anything. For Shillong, four details make the biggest difference to who appears
    on that list:
  </p>
  <ul>
    <li><strong>The sub-locality, not just the big name.</strong> Say Upper or Lower Mawprem, Lumparing or Rilbong in Laban, Jingkieng or Motinagar in Nongthymmai, or which Mawlai locality you are in. It tells us which tutors are truly close.</li>
    <li><strong>The last stretch to your door.</strong> Mention steps down from the road, a footpath with no parking, or a bylane number. A tutor who knows this in advance arrives on time.</li>
    <li><strong>The nearest bus stop or taxi point.</strong> Tutors who do not drive come by shared taxi or city bus, so a named stop is the most useful landmark you can give.</li>
    <li><strong>The board and the paper ahead.</strong> An SSLC candidate, an HSSLC Science student and a CBSE Class 12 student need tutors who know their particular exam.</li>
  </ul>
  <p>
    During the demo, ask the tutor to work on whatever your child is studying at school this week. A normal chapter
    shows how someone really teaches far better than a showpiece lesson.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-zones">Shillong in four zones</h2>
  <p>
    @if($shlTutors > 0)
      Our Shillong suggestions are drawn from {{ number_format($shlTutors) }} tutor profiles,
    @else
      Our Shillong suggestions are drawn from the tutor profiles on NXTutors,
    @endif
    and @if($shlAreas > 0){{ number_format($shlAreas) }} Shillong localities @else every Shillong locality we cover @endif
    have their own page. On a locality page you see tutors who live in that locality first, then tutors from the same
    zone, then the rest of Shillong, and finally online tutors from anywhere in India. We group the city into four
    zones by how tutors actually move between neighbourhoods:
    <a href="#shl-central">Police Bazar &amp; Jaiaw</a>, <a href="#shl-laban">Laban &amp; Upper Shillong</a>,
    <a href="#shl-laitumkhrah">Laitumkhrah &amp; Rynjah</a> and <a href="#shl-mawlai">Mawlai &amp; Pynthorumkhrah</a>.
    Several of these places are wards of the Shillong Municipal Board, which dates back to 1878; others are census
    towns that belong to the wider Shillong urban area.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="shl-central">Police Bazar &amp; Jaiaw: the old centre</h3>
  <p>
    {!! $shlA('police-bazar', 'Police Bazar') !!}, called Khyndailad in Khasi, is the main commercial hub of the city.
    Shops and offices crowd its core, while homes sit along the roads that branch away from it, such as Jail Road,
    Quinton Road and Thana Road. {!! $shlA('mawkhar', 'Mawkhar') !!} was one of the two villages brought into the
    municipality in 1878, and the old village then also covered {!! $shlA('jaiaw', 'Jaiaw') !!} and part of
    {!! $shlA('mawprem', 'Mawprem') !!}. Mawkhar lies beside the Iewduh (Bara Bazar) market and the Jhalupara bus stand
    on GS Road. Jaiaw is an older residential area of sloping lanes that runs up towards Mawlai, and Mawprem is split
    by local usage into Upper and Lower Mawprem, near Garikhana.
  </p>
  <p>
    Its central position makes this the easiest part of Shillong for a tutor to reach from most of the city. The catch is the daytime crowd. Around Police Bazar and the Bara Bazar market, a slot after trading hours is
    calmer than one in the middle of the afternoon. If you live in a flat above a shopfront, send the building name,
    the floor and a phone number. In Jaiaw and Mawprem, the lane name or a church or shop nearby works better than a
    postal address.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="shl-laban">Laban &amp; Upper Shillong: the old Laban wards and the high ground</h3>
  <p>
    {!! $shlA('laban', 'Laban') !!} was the other village taken into the municipality in 1878. Its old area took in
    Lumparing, Madan Laban, Kench's Trace and Rilbong, and those names are still how people describe where they live;
    Laban, Lumparing and Kenches Trace are municipal wards today. {!! $shlA('lawsohtun', 'Lawsohtun') !!}, a census
    town, is a quieter residential pocket on the Laban side. {!! $shlA('upper-shillong', 'Upper Shillong') !!} climbs
    towards Shillong Peak, the hill above the city, and takes in villages such as Nonglyer and Laitmynsaw, with homes
    spread across the hillside.
  </p>
  <p>
    Laban and Lawsohtun share tutors easily, and Rilbong and Bara Bazar connect them to the centre, so families here
    can also look at tutors from the central wards. Upper Shillong is different: it sits well above the main town and
    fewer tutors live nearby. Families there often keep a home tutor for younger children and use online lessons for
    senior subjects, and they agree an earlier slot in winter, when evenings are cold and mist can settle quickly.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="shl-laitumkhrah">Laitumkhrah &amp; Rynjah: the students' quarter and beyond</h3>
  <p>
    {!! $shlA('laitumkhrah', 'Laitumkhrah') !!} takes its name from the Khasi word for free and the Umkhrah river,
    which rises there. It is known as a centre of education, with many schools and colleges and a lively market, and
    three roads run from it to Happy Valley, Umpling and New Colony. {!! $shlA('malki', 'Malki') !!}, which includes
    Dhankheti and Risa Colony, lies between the centre and Laitumkhrah. {!! $shlA('nongthymmai', 'Nongthymmai') !!},
    literally "the new village", includes Jingkieng and Motinagar. Beyond them come
    {!! $shlA('rynjah', 'Rynjah') !!}, reached via Goraline and known for its numbered bylanes,
    {!! $shlA('umpling', 'Umpling') !!}, which shares Rynjah's post office, and
    {!! $shlA('madanrting', 'Madanrting') !!}, a census town with its own village durbar on the main road out of the
    city.
  </p>
  <p>
    With so many students living in this zone, demand for home tuition here is steady, and tutors
    can link several homes along one road: Malki to Laitumkhrah, Laitumkhrah to Rynjah and Umpling, Nongthymmai to
    Madanrting. Timing matters more than distance. School and college opening and closing hours fill Laitumkhrah's
    roads, so a later evening slot usually goes more smoothly. In Rynjah, give the bylane number; in Madanrting, where
    new lanes may not yet show on a map, a named bus stop makes a good meeting point.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="shl-mawlai">Mawlai &amp; Pynthorumkhrah: the northern localities</h3>
  <p>
    {!! $shlA('mawlai', 'Mawlai') !!} is one of Shillong's historic neighbourhoods and a large census town made up of
    several localities, among them Mawlai Mawiong, Mawlai Nongpdeng, Mawlai Mawdatbaki and Kynton Massar; it meets
    Jaiaw on the city side. {!! $shlA('pynthorumkhrah', 'Pynthorumkhrah') !!} includes Langkyrding and borders Mawpat,
    Nongmynsong and Shyiap. {!! $shlA('nongmynsong', 'Nongmynsong') !!}, once known as Lalchand Basti, lies between
    Pynthorumkhrah and Rynjah, with taxis and buses running to it from the city centre.
  </p>
  <p>
    Mawlai is spread out, so tell a tutor which locality you live in and the nearest stop, for example Mawiong,
    Nonglum or Mawlai Pump. Tutors from Jaiaw reach the nearer parts without trouble; further out, a tutor living in
    Mawlai itself is usually the better fit. In Pynthorumkhrah and Nongmynsong, families often prefer tutors from the
    same cluster because crossing the city at peak times is slow, and stops such as Umkdait or Laitlum help on a first
    visit. Mention any steps or narrow lanes, and say whether a car can reach your gate or only a two-wheeler.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-boards">Which boards do Shillong students follow?</h2>
  <p>
    Shillong schools follow the Meghalaya Board, CBSE, CISCE and, more rarely, an international curriculum. We match
    on board as well as class, since a tutor who knows one board's papers does not automatically know another's.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Meghalaya Board of School Education (MBOSE)</h3>
  <p>
    MBOSE conducts the SSLC examination at the end of Class 10 and the HSSLC examination at the end of Class 12, with
    HSSLC results announced for the Arts, Science, Commerce and Vocational streams. The board's website,
    <a href="https://www.mbose.in/" rel="noopener" target="_blank">mbose.in</a>, carries the syllabus, sample question
    papers, previous years' question papers, booklists, notices and results. A dependable tutor plans from that
    syllabus and those papers and takes every date from the board's own notices. Read more on our
    <a href="{{ url('/meghalaya-board-tutor-shillong') }}">Meghalaya Board tutors in Shillong</a> page.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers are built on the NCERT textbooks and reward students who can apply an idea to a question they have not
    seen before. JEE and NEET draw on the same NCERT chapters, so solid work here counts twice. See
    <a href="{{ url('/cbse-home-tutor-shillong') }}">CBSE home tutors in Shillong</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE, ISC, IB and IGCSE</h3>
  <p>
    CISCE syllabuses are wide and the answers long, so a plan needs more than one revision round. For IB or Cambridge
    IGCSE, a specialist is often easier to find online. A tutor may guide IB coursework but must never write it.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-classes">What does a tutor focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school</h3>
  <p>
    Fluent reading, sure arithmetic and the habit of doing homework without help come first. Two or three short
    sessions a week usually achieve more than one long one, and Class 6 to 8 maths should be secure before anyone
    talks about entrance coaching.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Gaps in Class 9 algebra, geometry and science tend to return in the SSLC or CBSE Class 10 year. A tutor's task is
    to keep pace with school so the exam year stays calm. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> follow the NCERT chapters and
    are useful on other boards as well.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Class 11 is a big step up. For HSSLC or CBSE Class 12, a strong tutor in the hardest subject is usually worth
    more than one person covering everything, and the stream your child chose decides which subject that is. See our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra guide</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-subjects">Which subjects do Shillong families ask about?</h2>
  <p>
    From Class 9 upwards most requests are for Maths, Science, Physics and Chemistry, with English close behind.
    Tutors here also take Economics, Accountancy, Business Studies, Computer Science and Social Science, and plenty of
    them teach every subject to children in the lower classes. Each of these has a Shillong page:
    <a href="{{ url('/maths-home-tutor-shillong') }}">Maths tutors in Shillong</a>,
    <a href="{{ url('/science-home-tutor-shillong') }}">Science tuition at home</a>,
    <a href="{{ url('/physics-home-tutor-shillong') }}">Physics tutors</a>,
    <a href="{{ url('/chemistry-home-tutor-shillong') }}">Chemistry tutors</a> and
    <a href="{{ url('/english-home-tutor-shillong') }}">English tuition</a>.
  </p>
  <p>
    A good Maths tutor traces a mistake back to the topic where it began, even if that was two years earlier. In
    Physics, the student should be able to say why a formula fits before using it. Chemistry mixes calculation,
    periodic trends and memory work, and our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Organic
    and Inorganic Chemistry guide</a> helps organise it. English gets better when a student writes answers in their own
    words; our <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide</a> adds daily speaking
    practice. For HSSLC Commerce subjects or senior Computer Science, an online specialist is often the simplest route.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-jee-neet">Can a Shillong tutor help with JEE or NEET?</h2>
  <p>
    Yes, as long as everyone agrees what the tutor is for. Families usually want one of three roles: clearing doubts
    from the week's practice, combining board chapters and entrance questions in a single timetable, or giving extra
    hours to the subject losing the most marks. Because the Class 11 and 12 NCERT chapters sit under both the board
    papers and the entrance syllabus, one revision plan can cover both.
  </p>
  <p>
    JEE Main is held by NTA in two sessions early in the year, and those who qualify can go on to JEE Advanced. NEET
    UG takes place once a year, and Biology carries half its marks. Check every date in that year's official
    information bulletin. Entrance specialists are often online, so many families combine a local home tutor with an
    online one. Share our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-wise JEE Maths plan</a> or the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first plan for NEET Biology</a> with the tutor you
    choose.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-mode">Home lessons or online in Shillong?</h2>
  <p>
    Young children, students whose attention wanders in front of a laptop, and long Maths or Physics working that a
    tutor must watch line by line are all better served face to face. Online lessons bring in specialists from across India. Shillong's
    geography makes a mix of the two especially sensible:
  </p>
  <ul>
    <li><strong>Monsoon evenings.</strong> Heavy rain slows the hill roads; allow extra time, or teach that evening online rather than cancelling.</li>
    <li><strong>Winter and mist.</strong> Dark, cold evenings suit an earlier slot, especially in Upper Shillong and the outer localities.</li>
    <li><strong>Opposite sides of town.</strong> A family in Laban and a tutor in Mawlai can manage one home visit and one online lesson each week.</li>
    <li><strong>Less common subjects and boards.</strong> For an unusual HSSLC elective or an international board, the right tutor may live in another city.</li>
  </ul>
  <p>
    A common Shillong pattern is a weekly home visit or two, with that tutor taking the lesson online whenever travel
    is awkward. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online
    tuition</a> sets out the trade-offs, and <a href="{{ url('/online-tutor-shillong') }}">online tuition for Shillong
    students</a> explains how lessons on screen work.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-fees">How much does home tuition cost in Shillong?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, so ask these questions when you compare the shortlist:
  </p>
  <ul>
    <li><strong>Which class and exam?</strong> Help with primary or middle-school work is usually charged below senior classes or entrance preparation.</li>
    <li><strong>How far is the trip?</strong> A tutor crossing from the far side of the city may price that in; one from your own zone often does not.</li>
    <li><strong>What happens on a rainy day?</strong> Ask whether a lesson moved online is charged the same as a home visit.</li>
    <li><strong>How many teaching hours?</strong> Compare hours of teaching per month, not the number of visits.</li>
  </ul>
  <p>
    You can read every shortlisted fee before the demo, and tutors priced above your stated budget are left off. The
    <a href="{{ url('/pricing-guide') }}">NXTutors pricing guide</a> breaks charges down by class and subject, while
    <a href="{{ url('/blog/home-tuition-fees-shillong') }}">our Shillong fees article</a> lists what to ask locally.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-choose">What should you look for in the demo class?</h2>
  <p>The profile earns a place on the shortlist; the demo decides whether the tutor keeps it. Notice whether the tutor:</p>
  <ol>
    <li><strong>Asked questions first.</strong> About school hours, upcoming tests and how they will reach your door.</li>
    <li><strong>Checked the level.</strong> With a few short questions instead of guesswork.</li>
    <li><strong>Explained clearly.</strong> Your child could repeat the idea in their own words at the end.</li>
    <li><strong>Knew the paper.</strong> They could describe how the SSLC, HSSLC or CBSE paper is set and where to check it.</li>
    <li><strong>Kept your child working.</strong> Questions were solved during the lesson, not only demonstrated.</li>
    <li><strong>Can hold the slot.</strong> They can reach your locality at that hour every week, rain or not.</li>
  </ol>
  <p>
    Before the tutor sets out, share the sub-locality, a landmark and your location on a map; keep lessons in a family
    room while a grown-up is in the house. Tutors who join go through an ID check, and
    <a href="{{ url('/how-we-verify-tutors') }}">our page on tutor checks</a> sets out exactly what it is. For more,
    read the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for the first lesson</a> and our
    advice on <a href="{{ url('/blog/how-to-choose-boardstream') }}">picking a board or stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-calendar">How should tuition fit the school year?</h2>
  <p>
    Each board keeps its own timetable, and schools add theirs, so rely on school circulars and the board's notices
    rather than word of mouth; MBOSE publishes its notifications on mbose.in. A year of tuition tends to run in four
    phases:
  </p>
  <ul>
    <li><strong>New session:</strong> new books and new teachers; find and fix the gaps left from last year.</li>
    <li><strong>Monsoon:</strong> keep the weekly rhythm, and move the wettest evenings online.</li>
    <li><strong>Festival and holiday weeks:</strong> plan ahead so the syllabus keeps moving through breaks.</li>
    <li><strong>Exam run-up:</strong> complete papers under a clock, marked against the board's sample and past question papers.</li>
  </ul>
  <p>
    An early start leaves time for understanding rather than catching up. Starting late still helps, with more of the
    time spent on practice papers and answer technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="shl-start">How do you get started in Shillong?</h2>
  <p>
    Tell us the class, board and subjects, where you live down to the part of the locality, one landmark and the hours
    your child has free. Two or three tutors come back to you; one of them teaches a free demo, and only then do you
    decide. Open your neighbourhood's page from the list here, look through the <a href="{{ url('/tutors') }}">tutor
    directory</a>, or go straight to <a href="{{ url('/demo-class') }}">booking a demo</a>. Where nobody is near enough
    for home visits yet, online lessons can start at once.
  </p>
  <p>
    For a closer look at each neighbourhood, our <a href="{{ url('/blog/shillong-home-tuition-guide') }}">Shillong home
    tuition guide</a> covers all four zones, from Police Bazar and Laban to Laitumkhrah and Mawlai, with every locality
    linked.
  </p>
  <p class="shl-note">
    Moving away from Meghalaya, or family elsewhere? Our <a href="{{ url('/city/guwahati') }}">Guwahati</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a> and <a href="{{ url('/city/delhi') }}">Delhi</a> pages work the
    same way, and the <a href="{{ url('/city') }}">full list of cities</a> covers the rest.
  </p>
  <p class="shl-note">
    Are you a teacher here? <a href="{{ url('/tuition-jobs/shillong') }}">Tuition jobs in Shillong</a> shows which
    neighbourhoods have families asking for a tutor.
  </p>
  </section>

  </div>
</article>
