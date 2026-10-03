{{--
  Long-form guide for the Aizawl city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Aizawl parents
  arranging a home or online tutor. Purely practical and educational: no
  politics, no community matters, no tourism; rain appears only as timing
  advice. Every figure is either live from the database or a published
  NXTutors policy. Local facts come only from the cited research in
  database/seo-content/areas/aizawl-research.json; the MBSE description comes
  from the board's own site (https://mbse.edu.in/). No school, college,
  university, hospital, stadium, place of worship, society, developer or
  person is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $azlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $azlA = function (string $slug, string $label) use ($azlAreaSlugs) {
      return in_array($slug, $azlAreaSlugs, true)
          ? '<a href="' . e(url('/city/aizawl/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $azlTutors = (int) ($hubCounts['tutors'] ?? 0);
  $azlAreas = $allAreas->count();
@endphp

<article class="nx-guide azl-guide" aria-labelledby="azlGuideTitle">
  <h2 id="azlGuideTitle">Finding a home tutor in Aizawl: localities, boards and timing</h2>

  <p class="nx-guide__lede azl-lede">
    Aizawl is built along a ridge, and its localities, known locally as vengs, are stacked on steep slopes with deep
    valleys between them. Families mostly live in multi-storey buildings where the front door may be several floors
    above or below the road, and every journey across the city is made by road. Two localities that look close on a
    map can sit on opposite sides of a valley, so the useful question for tuition is not "how near is the tutor?" but
    "is the tutor on our side of the hill?". This guide groups the city into four clusters, explains how the Mizoram
    Board of School Education fits alongside CBSE and other boards, and sets out how families here arrange steady
    weekly lessons at home, online or both.
  </p>
  <nav class="nx-guide__toc azl-toc" aria-label="In this guide">
    <strong>Jump to:</strong>
    <a href="#azl-request">Sending a request</a> ·
    <a href="#azl-zones">Four clusters of vengs</a> ·
    <a href="#azl-boards">MBSE, CBSE and others</a> ·
    <a href="#azl-classes">Class by class</a> ·
    <a href="#azl-subjects">Subjects</a> ·
    <a href="#azl-entrance">JEE and NEET</a> ·
    <a href="#azl-mode">Home, online or mixed</a> ·
    <a href="#azl-fees">Fees</a> ·
    <a href="#azl-demo">The free demo</a> ·
    <a href="#azl-year">Across the year</a> ·
    <a href="#azl-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="azl-request">What should an Aizawl request include?</h2>
  <p>
    One short request is enough to start. Tell us the class, the board, the subjects that need help, your veng and
    a landmark near the building, the days and hours that are free, and whether you want lessons at home, on screen
    or a combination. Add the monthly amount you are comfortable spending. We reply with two or three suggested
    tutors, each showing a fee you can see before you meet. The first lesson with your chosen tutor is a free demo,
    and if the fit is wrong later, changing tutor costs nothing. In Aizawl, four details shape the shortlist more
    than anything else:
  </p>
  <ul>
    <li><strong>The exact veng, not just the area.</strong> Many localities come in parts, such as Zemabawk North and South, Tuikual North and South or Bethlehem and Bethlehem Vengthlang. The part you name decides which tutors can reach you.</li>
    <li><strong>The building and the floor.</strong> Say which entrance to use, whether the flat is above or below road level and how many flights of stairs lead to it. A first visit goes smoothly when the tutor knows this in advance.</li>
    <li><strong>Board and exam year.</strong> A Class 10 student preparing for the MBSE HSLC, a Class 12 student facing the HSSLC and a CBSE student in either year each need a tutor who knows that paper.</li>
    <li><strong>A plan for wet weeks.</strong> Heavy rain falls between April and October. Decide at the start whether a lesson moves online on a very wet evening rather than being cancelled.</li>
  </ul>
  <p>
    Ask the tutor to teach whatever the class is covering that week during the demo. An ordinary chapter, handled
    well, tells you far more than a prepared showpiece.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-zones">Aizawl in four clusters</h2>
  <p>
    @if($azlTutors > 0)
      Suggestions for Aizawl families come from {{ number_format($azlTutors) }} tutor profiles,
    @else
      Suggestions for Aizawl families come from our tutor profiles,
    @endif
    and @if($azlAreas > 0){{ number_format($azlAreas) }} Aizawl localities @else each Aizawl locality we list @endif
    have a page of their own. Each locality page shows tutors living in that veng first, then tutors in the same
    cluster, then the wider city, then online tutors from across India. We have grouped the vengs into four
    clusters, drawing on the municipal ward lists and the district's zonal list:
    <a href="#azl-durtlang">Durtlang, Chaltlang and Bawngkawn</a>, <a href="#azl-chanmari">Chanmari, Zarkawt and
    Dawrpui</a>, <a href="#azl-tuikual">Tuikual, Vaivakawn and Luangmual</a> and <a href="#azl-khatla">Khatla,
    Mission Veng and Kulikawn</a>. The clusters are ours, for planning tutor travel; they are not official
    boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="azl-durtlang">Durtlang, Chaltlang and Bawngkawn: the high northern belt</h3>
  <p>
    {!! $azlA('durtlang', 'Durtlang') !!} occupies the hilltop on the northern side of the city and is Aizawl's
    highest point. It and {!! $azlA('chaltlang', 'Chaltlang') !!} were once separate villages, absorbed into the
    growing city by the early 1960s. Chaltlang shares a municipal ward with
    {!! $azlA('bawngkawn', 'Bawngkawn') !!}, Bawngkawn South and Chaltlang Lily Veng, and the academic wing of the
    state Directorate of School Education has been based at Chaltlang since it was set up.
    {!! $azlA('ramhlun', 'Ramhlun') !!} is a group of localities, from Ramhlun North and Venglai to Vengthar and
    Ramhlun South, with Laipuitlang listed beside it. {!! $azlA('zemabawk', 'Zemabawk') !!} covers North, South, East
    and West, with Falkland and Thuampui in the same ward and Zuangtui, home to one of the state's two industrial
    estates, close by.
  </p>
  <p>
    This is the largest of our clusters, and tutors who live inside it can usually move between its vengs without
    entering the city centre. A Bawngkawn or Chaltlang tutor can cover Durtlang and Ramhlun; a Thuampui or Zemabawk
    tutor suits Zemabawk, Falkland and Zuangtui. The road up to Durtlang climbs to the top of the ridge, so give extra margin
    on rainy evenings. In Zemabawk, rental housing blocks and larger buildings may note visitors' details, so tell the
    tutor the block name and how to be let in.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="azl-chanmari">Chanmari, Zarkawt and Dawrpui: the central vengs</h3>
  <p>
    {!! $azlA('chanmari', 'Chanmari') !!} and {!! $azlA('zarkawt', 'Zarkawt') !!} share a municipal ward with Electric
    Veng, and the district places them in its central zone. Zarkawt includes McDonald Hill, where the state's
    Directorate of School Education has its office, and the first high school in the Mizo hills opened at Zarkawt in
    February 1944. {!! $azlA('dawrpui', 'Dawrpui') !!} Veng holds Bara Bazar, the city's main shopping centre, and
    forms a ward with Saron Veng, Chhinga Veng and Tuithang Veng. Dawrpui Vengthar, despite the similar name, is a
    separate locality in another ward.
  </p>
  <p>
    Central homes give families the widest pick, because tutors can come in from almost every side. The catch is the
    clock: the market roads stay busy for much of the day, and office hours crowd the junctions. Choose a lesson time
    outside shopping and office peaks, and expect the tutor to park a two-wheeler and walk the last stretch. Mention
    Dawrpui Vengthar or Dawrpui Veng in full so nobody heads to the wrong one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="azl-tuikual">Tuikual, Vaivakawn and Luangmual: from the centre's edge to Tanhril</h3>
  <p>
    {!! $azlA('tuikual', 'Tuikual') !!}, made up of Tuikual North and South, shares a ward with Dinthar, and the
    district groups it with Dawrpui Vengthar, Vaivakawn, Hunthar and Edenthar. {!! $azlA('vaivakawn', 'Vaivakawn') !!}
    sits where that group meets the next one, which runs through Kanan, Chawnpui, Zonuam and
    {!! $azlA('luangmual', 'Luangmual') !!}. Luangmual's ward stretches out to {!! $azlA('tanhril', 'Tanhril') !!} on
    the outskirts, home to the permanent campus of the state's central university on a large area of forested
    hillside.
  </p>
  <p>
    Valleys matter most here. A tutor in Dinthar or Vaivakawn is usually the practical choice for Tuikual, while
    Chawnpui, Zonuam and Luangmual tutors suit the Tanhril end. Families on the outskirts should expect a smaller
    pool of home tutors and may lean on online lessons for specialist subjects. Campus housing can have its own
    visitor rules, so check how a tutor is let in before the demo is booked.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="azl-khatla">Khatla, Mission Veng and Kulikawn: the southern residential cluster</h3>
  <p>
    {!! $azlA('khatla', 'Khatla') !!} forms a ward with Khatla South and Mission Venglang, while Khatla East joins
    Bungkawn, Maubawk, Lawipu and Nursery Veng in the next one; the district treats them all as one zone.
    {!! $azlA('mission-veng', 'Mission Veng and Mission Vengthlang') !!} are old localities that share a ward with Salem
    Veng, Dam Veng, Venghnuai and Thakthing Veng, and the city's large football stadium stands at Mualpui in Salem
    Veng. {!! $azlA('bethlehem', 'Bethlehem and Bethlehem Vengthlang') !!} form a ward with College Veng, and a
    national research centre for bamboo and rattan opened at Bethlehem Vengthlang in 2004.
    {!! $azlA('kulikawn', 'Kulikawn') !!} shares its ward with Tlangnuam, Saikhamakawn, Melthum and Hlimen.
  </p>
  <p>
    Most families here live in homes stepped into the hillside, and the strongest matches are tutors within the
    cluster: Bungkawn or Maubawk for Khatla, Republic or Venghlui for Bethlehem, Tlangnuam or Thakthing for Kulikawn.
    On match days the roads near the stadium fill up, so keep lesson times away from those hours. Give the floor and
    entrance in the first message, since stairs from the road are common.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-boards">Which boards do Aizawl students study?</h2>
  <p>
    Depending on the school, an Aizawl student may follow the Mizoram Board of School Education, CBSE, CISCE or an
    international programme. Always tell us the board and the class together, because a tutor who knows one board's
    papers well is not automatically the right person for another board in the same year.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Mizoram Board of School Education (MBSE)</h3>
  <p>
    MBSE, based in Aizawl, conducts the HSLC (High School Leaving Certificate) and HSSLC (Higher Secondary School
    Leaving Certificate) examinations. Its official website carries the syllabus, question design and examination
    schemes, textbook lists, exam routines, previous years' question papers, notifications and a link to results.
    Ask an MBSE tutor to plan around the board's own syllabus and past papers, and check every date against its
    notices rather than hearsay. Our page on <a href="{{ url('/mizoram-board-tutor-aizawl') }}">MBSE tutors in
    Aizawl</a> goes further.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers are built on NCERT textbooks, and a growing share of questions asks students to use a concept in an
    unfamiliar setting rather than repeat it. Since JEE and NEET draw on the same NCERT chapters, careful textbook
    work serves both. See <a href="{{ url('/cbse-home-tutor-aizawl') }}">CBSE home tutors in Aizawl</a> for details.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE, ISC, IB and IGCSE</h3>
  <p>
    CISCE papers are long and answer-heavy across a wide syllabus, so revision works well in rounds rather than one
    final push. For IB or Cambridge IGCSE, the right specialist is often found online. A tutor may guide IB
    coursework, but the writing has to remain the student's own.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-classes">What does each stage of school need?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Up to Class 8: habits first</h3>
  <p>
    For younger children, the tutor's real job is fluent reading, sure-footed sums and homework that gets finished.
    Three brief visits in a week usually achieve more than one marathon evening. If a foundation course for
    entrance exams is planned for later, check that fractions, ratios and simple equations are firm before it starts.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9–10: the HSLC and CBSE board year</h3>
  <p>
    Class 9 chapters lean on one another, so a shaky Class 9 shows up again in the Class 10 papers, whether MBSE's
    HSLC or CBSE. Ask the tutor to move in step with the school and to keep the last weeks free for revision. Our
    free <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 maths roadmap</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 science chapter notes</a> follow NCERT and work
    for many MBSE learners as well.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11–12: one subject at a time</h3>
  <p>
    Class 11 is where many good Class 10 students first struggle. With the HSSLC or CBSE Class 12 ahead, give the
    tutor the subject that is slipping most and keep the hours there. For the final year, read our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">approach to Class 12 physics</a> and the
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">notes on Class 12 calculus and algebra</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-subjects">Which subjects do Aizawl families ask for?</h2>
  <p>
    Secondary-school requests in Aizawl centre on Maths and Science, which split into Physics, Chemistry and Biology
    in the senior classes, while English is a frequent second subject. Social Science, Economics, Accountancy,
    Business Studies and Computer Science are taught by tutors on the platform too, and for primary children one
    all-rounder often handles the lot. Separate Aizawl pages cover
    <a href="{{ url('/maths-home-tutor-aizawl') }}">maths tuition at home</a>,
    <a href="{{ url('/science-home-tutor-aizawl') }}">school science</a>,
    <a href="{{ url('/physics-home-tutor-aizawl') }}">senior physics</a>,
    <a href="{{ url('/chemistry-home-tutor-aizawl') }}">senior chemistry</a> and
    <a href="{{ url('/english-home-tutor-aizawl') }}">English reading and writing</a>.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table azl-table">
    <thead><tr><th scope="col">Subject</th><th scope="col">A sign the tutor is helping</th></tr></thead>
    <tbody>
      <tr><td>Maths</td><td>Mistakes are traced to the missing step or earlier topic, not just corrected.</td></tr>
      <tr><td>Physics</td><td>Your child states which principle applies before substituting any value.</td></tr>
      <tr><td>Chemistry</td><td>Numericals, reaction types and memory work are practised as three different jobs; our <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">organic and inorganic chemistry notes</a> take the same line.</td></tr>
      <tr><td>English</td><td>Written answers sound like your child, not like a guidebook; the <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English exercises</a> help with confidence.</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Rarer electives tend to be quicker to fill with an online tutor than with someone who visits.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-entrance">Can a home tutor help with JEE or NEET from Aizawl?</h2>
  <p>
    A home tutor is most useful for entrance preparation when given a narrow brief. Typical briefs are: clear
    the problems a student got stuck on during the week; knit board revision and entrance practice into a single
    plan; or put extra time into one weak subject. The Class 11 and 12 NCERT texts sit underneath both the board
    papers and the entrance syllabus, so that single plan is realistic.
  </p>
  <p>
    JEE Main is conducted by NTA in two sessions in the first half of the year, and it is the route to JEE Advanced.
    NEET UG takes place once each year, with Biology worth half the paper. Take dates only from the official
    information bulletin. A pattern that works for many Aizawl students is a nearby tutor for routine work alongside
    an online subject expert for the toughest questions. Start with our
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">topic-by-topic JEE maths plan</a> or the
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET biology guide that starts from NCERT</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-mode">Is home or online tuition better in Aizawl?</h2>
  <p>
    Neither wins everywhere. Sitting beside a learner is hard to beat for primary classes, for children who lose
    focus on a laptop and for maths written out step by step. Screens widen the choice to subject experts in any
    city. In Aizawl the geography often settles it:
  </p>
  <ul>
    <li><strong>The valley test.</strong> If your preferred tutor lives across a valley, alternate: a visit one day, a video lesson the next.</li>
    <li><strong>April to October.</strong> On the heaviest rain evenings, switch that one lesson to a call instead of losing it.</li>
    <li><strong>Edges of the city.</strong> Around Tanhril or the top of Durtlang, the nearby pool may be smaller, so online fills the specialist gaps.</li>
    <li><strong>Specialist courses.</strong> IB, IGCSE and uncommon electives often need a tutor based outside Mizoram.</li>
  </ul>
  <p>
    A blended week with the same tutor is common and easy to arrange. Read the
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor comparison</a> for the pros and
    cons, and the page on <a href="{{ url('/online-tutor-aizawl') }}">online tuition for Aizawl students</a> for how
    sessions are set up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-fees">What do tutors charge in Aizawl?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Rates are
    the tutor's own decision, and gaps between two quotes usually come down to a handful of things worth asking
    about directly:
  </p>
  <ul>
    <li><strong>The level being taught.</strong> Help with junior homework is normally quoted below Class 11–12 or entrance teaching.</li>
    <li><strong>The journey.</strong> A tutor crossing from another cluster may factor that in; a tutor from your own veng often does not.</li>
    <li><strong>Online sessions.</strong> Agree in advance whether a lesson moved online in the rains costs the same.</li>
    <li><strong>Session length.</strong> A longer visit at a higher quote can work out the same as two short ones, so look at hours.</li>
  </ul>
  <p>
    Fees appear on your shortlist before the demo, and we keep to the budget you name. Hourly rates by class and
    subject are in the <a href="{{ url('/pricing-guide') }}">pricing guide</a>; the
    <a href="{{ url('/blog/home-tuition-fees-aizawl') }}">guide to home tuition fees in Aizawl</a> goes through what
    to agree before the first month.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-demo">How do you judge the free demo?</h2>
  <p>
    Use the demo hour as a test of fit, not of charm. Six things are worth watching:
  </p>
  <ol>
    <li><strong>Curiosity.</strong> The tutor wants to know about school tests, the weekly routine and rainy-day plans.</li>
    <li><strong>A baseline.</strong> A few quick questions establish where your child actually stands.</li>
    <li><strong>Understanding.</strong> At the end, your child can explain the topic back without notes.</li>
    <li><strong>Exam awareness.</strong> The tutor can talk through the MBSE or CBSE paper and knows to confirm details on the board's site.</li>
    <li><strong>Pen time.</strong> Your child writes and solves for most of the hour.</li>
    <li><strong>Reliability.</strong> The tutor can reach your veng at the agreed hour, week after week.</li>
  </ol>
  <p>
    Before the visit, send the locality, building, floor and a pin on the map. Keep lessons in a family room while a
    grown-up is in the house. Tutors who join go through an ID check, set out on
    <a href="{{ url('/how-we-verify-tutors') }}">our tutor ID check page</a>. For more, see the
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo class checklist</a> and the
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">article on choosing a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-year">How should tuition follow the Aizawl school year?</h2>
  <p>
    Each board sets its own calendar, so dates should come from your school and the board's notices; for MBSE
    students, the exam routine and notifications are posted on the board's website. Across a year, tuition tends
    to pass through these stages:
  </p>
  <ul>
    <li><strong>First weeks of the session:</strong> settle into new books and close the gaps carried over from last year.</li>
    <li><strong>Monsoon stretch:</strong> protect the weekly pattern, shifting only the worst-weather lessons online.</li>
    <li><strong>Mid-year:</strong> chapter-wise teaching, with a short check at the end of each chapter.</li>
    <li><strong>Exam run-up:</strong> full papers under time, using MBSE's previous years' papers or CBSE sample papers.</li>
  </ul>
  <p>
    Starting at the beginning of the session gives time for understanding. Joining in the final months is still
    worthwhile when the focus shifts to past papers and the way answers are written.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="azl-start">How does an Aizawl family get started?</h2>
  <p>
    Share five things: class and board, subjects, your veng with a landmark, the free hours, and home, online or
    mixed. Two or three tutors come back as suggestions, you meet one in a free demo, and the decision waits until
    after it. You can start from your own locality in the list on this page, look at
    <a href="{{ url('/tutors') }}">tutors on NXTutors</a>, or go straight to the
    <a href="{{ url('/demo-class') }}">free demo request</a>. Where nobody lives close enough for home visits yet,
    online lessons can start at once.
  </p>
  <p>
    For a locality-by-locality walk through all four clusters, from Durtlang and Zemabawk to Tanhril and Kulikawn,
    read the <a href="{{ url('/blog/aizawl-home-tuition-guide') }}">Aizawl home tuition guide</a>.
  </p>
  <p class="azl-note">
    Aizawl has no railway station within the city; the nearest is Sairang, the terminus of the Bairabi–Sairang line,
    which opened in September 2025. Elsewhere in the region and beyond, see tutors in
    <a href="{{ url('/city/guwahati') }}">Guwahati</a> and <a href="{{ url('/city/kolkata') }}">Kolkata</a>, or browse
    the <a href="{{ url('/city') }}">full list of NXTutors cities</a>.
  </p>
  <p class="azl-note">
    Teachers based in Aizawl can look at <a href="{{ url('/tuition-jobs/aizawl') }}">Aizawl tuition jobs</a>, which
    shows the localities where families are searching.
  </p>
  </section>

  </div>
</article>
