{{--
  Long-form guide for the Sri Vijaya Puram (Port Blair) city page (included by
  city/show.blade.php when a file named after the city slug exists). Written for
  island parents choosing a home tutor: every figure is either live from the
  database or a published NXTutors policy; local facts come only from the cited
  research in database/seo-content/areas/port-blair-research.json, and the board
  description comes only from its top-level "board_facts" (South Andaman district
  administration education page; the Directorate of Education's CASIAN list).
  The renaming to Sri Vijaya Puram is taken from the PIB release of 13 Sep 2024.
  No school, college, hospital, society, developer or person is named. Kept
  practical and educational: no tourism, no holiday sights; landmarks are used
  only to find a home, and the monsoon appears only as timing advice.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $pblAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $pblA = function (string $slug, string $label) use ($pblAreaSlugs) {
      return in_array($slug, $pblAreaSlugs, true)
          ? '<a href="' . e(url('/city/port-blair/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $pblTutors = (int) ($hubCounts['tutors'] ?? 0);
  $pblAreas = $allAreas->count();
@endphp

<article class="nx-guide pbl-guide" aria-labelledby="pblGuideTitle">
  <h2 id="pblGuideTitle">Home tuition in Sri Vijaya Puram (Port Blair): a practical guide for island families</h2>

  <p class="nx-guide__lede pbl-lede">
    Sri Vijaya Puram (Port Blair) is the capital of the Andaman and Nicobar Islands, and in September 2024 the
    Government of India decided that the city formerly called Port Blair would carry its new name. Most local families
    still use both, and so do we on this page. For a parent, the place is easy to picture: an old core around
    Aberdeen Bazaar, Haddo and Phoenix Bay; a ring of settled localities such as Junglighat, Delanipur, School Line,
    Dairy Farm and Bathubasti; and villages like Garacharma, Dollygunj and Prothrapur that were brought into the city's
    orbit as housing spread outwards. Nearly every child here sits CBSE exams. What is harder is the number of
    tutors. The island pool of teachers who take private pupils is small, so the useful questions are practical ones:
    who teaches near you, which evenings they can give, and which subject is better covered by an online specialist
    from the mainland.
  </p>
  <nav class="nx-guide__toc pbl-toc" aria-label="In this guide">
    <strong>On this page:</strong>
    <a href="#pbl-request">Making a request</a> ·
    <a href="#pbl-zones">Three parts of the city</a> ·
    <a href="#pbl-boards">CBSE and school mediums</a> ·
    <a href="#pbl-mode">Home and online</a> ·
    <a href="#pbl-stages">Stage by stage</a> ·
    <a href="#pbl-subjects">Subjects</a> ·
    <a href="#pbl-entrance">Entrance exams</a> ·
    <a href="#pbl-fees">Fees</a> ·
    <a href="#pbl-demo">The demo class</a> ·
    <a href="#pbl-calendar">Through the year</a> ·
    <a href="#pbl-start">First steps</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pbl-request">How does a request for a tutor work here?</h2>
  <p>
    You fill in one short request. Tell us the class, the subjects, and the medium your child is taught in, which
    matters more in this city than in most. Add the locality and a landmark a first-time visitor would recognise, the
    evenings or weekend hours that are free, and whether you want the tutor at home, online, or some of each. A
    rough budget is useful. We then put forward two or three tutors who match. You see each tutor's fee before any
    lesson is booked, and your first class with whichever tutor you choose is a free demo.
  </p>
  <p>What decides a good shortlist in Sri Vijaya Puram:</p>
  <ul>
    <li><strong>The language of explanation.</strong> Schools teach in English, Hindi, Tamil, Telugu and Bengali mediums, so a tutor who can explain a Class 8 science idea in your child's language can be worth more than one with a longer CV.</li>
    <li><strong>Your part of the city.</strong> The old core, the central localities and the expansion villages are three different trips for a tutor; someone already teaching on your side can keep a weekly slot.</li>
    <li><strong>A way to find you.</strong> Lanes, quarters blocks and newer plots are often hard to find by number alone, so a map pin and a landmark come with every request.</li>
    <li><strong>The subject at senior level.</strong> For Class 11 and 12 Physics, Chemistry, Maths, Accountancy or Computer Science, the right teacher may be online, and we say so plainly.</li>
  </ul>
  <p>
    Treat the demo as an ordinary lesson on this week's chapter. If it does not suit, a second tutor on the list can take over, and switching tutor later on is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-zones">The city in three parts</h2>
  <p>
    @if($pblTutors > 0)
      Our Sri Vijaya Puram list holds {{ number_format($pblTutors) }} tutor profiles at the moment,
    @else
      Our Sri Vijaya Puram list is short for now and will lengthen as tutors register,
    @endif
    and @if($pblAreas > 0){{ number_format($pblAreas) }} localities @else each locality we cover @endif each get a separate page. Each one lists tutors from that locality first, then those in the same part of the city, then the rest of the city, and online tutors after that. To be honest about scale: this is a small city on
    an island, the number of home tutors is limited, and for some subjects nobody suitable may live close by. In that
    case an online tutor is the sensible answer, and we would rather tell you than promise visits that will not happen.
  </p>
  <p>
    The three groups below are groupings we use for planning; they are not official divisions:
    <a href="#pbl-old">Aberdeen and the old town</a>, <a href="#pbl-central">Junglighat and the central
    localities</a>, and <a href="#pbl-outer">the expansion villages</a>. The civic body, now styled Sri Vijaya Puram
    Municipal Council, dates from 1957 and has 24 wards since the city limits grew in 2015.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pbl-old">Aberdeen and the old town: bazaar, jetty and Haddo</h3>
  <p>
    {!! $pblA('aberdeen-bazaar', 'Aberdeen Bazaar') !!} is the city's shopping centre, and its clock tower is the
    long-standing landmark that helps with directions. Aberdeen was already one of the stations of the settlement by 1871,
    and the civil administration set up its headquarters near the bazaar in 1944. Homes here are often above shops or
    in lanes running off the market. {!! $pblA('phoenix-bay', 'Phoenix Bay') !!} is the bay-side locality from which
    inter-island ships sail, including the weekly ship to Campbell Bay in Great Nicobar; government offices such as
    Transport Bhawan sit beside family homes. {!! $pblA('haddo', 'Haddo') !!}, another of the oldest named places,
    is mainly residential, with government quarters and family houses.
  </p>
  <p>
    This is the most language-mixed part of the city for schooling. The Directorate of Education lists English- and
    Telugu-medium primary schools at Haddo, Hindi- and Telugu-medium government senior secondary schools there, and a
    Tamil-medium primary school on the Aberdeen side. All follow CBSE at the board stage, but a child taught in Telugu
    or Hindi may still need explanations in that language.
  </p>
  <p>
    For visits, timing is the main thing. The bazaar fills up in the evening, so a slot before the shopping crowd, or
    a weekend morning, starts more reliably. Near the Phoenix Bay jetty, check ship days and avoid hours when
    passengers and vehicles gather. In a Haddo quarters block, give the block and quarter number and the nearest gate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pbl-central">Junglighat and the central localities: settled homes and nearby schools</h3>
  <p>
    {!! $pblA('junglighat', 'Junglighat') !!} is a long-established residential locality, one of the revenue villages
    of the Port Blair tehsil. {!! $pblA('delanipur', 'Delanipur') !!} and {!! $pblA('dairy-farm', 'Dairy Farm') !!}
    are quieter residential areas, each with a government secondary school on the CBSE-affiliated list.
    {!! $pblA('school-line', 'School Line') !!} has a government senior secondary school, so a child here can usually
    stay in one school through Class 12. {!! $pblA('bathubasti', 'Bathubasti') !!}, also written Bathu Basti, has its
    own bazaar and a mix of houses and multi-storey apartment buildings.
  </p>
  <p>
    The pattern of need follows the schools. Where secondary classes end at Class 10, the step into Class 11 is the
    moment families look hardest for science and maths help. Where senior secondary classes are close by, as at School
    Line, requests are more often for Physics, Chemistry, Biology, Maths and Accountancy in Classes 11 and 12.
  </p>
  <p>
    Because these localities sit close together, a tutor based here can often see two families in an evening. In a
    house the tutor usually comes to the door; in an apartment building, share the floor, flat number and where a
    visitor can park. Around the Bathubasti bazaar, start before the evening market gets busy.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pbl-outer">The expansion villages: Garacharma to Austinabad</h3>
  <p>
    In 2011 the island administration planned to bring ten villages next to the town into municipal limits, citing a
    substantial rise in housing and commercial activity there, and the limits were expanded in 2015. Our zone covers
    five of them. {!! $pblA('garacharma', 'Garacharma') !!} is a census town just outside the old limits, with
    residential plots on the market. {!! $pblA('dollygunj', 'Dollygunj') !!} has plots and family houses.
    {!! $pblA('prothrapur', 'Prothrapur') !!} is one of the larger settlements of South Andaman Island and has a
    government senior secondary school, so children can study to Class 12 without moving to a school in the centre.
    Parts of {!! $pblA('brookshabad', 'Brookshabad') !!} (also spelt Brooksabad) and
    {!! $pblA('austinabad', 'Austinabad') !!} were in the same plan, so some homes there fall inside the city and some
    just outside.
  </p>
  <p>
    For tutors this zone works differently. Newer homes on plotted land are hard to find from a house number, so a
    map pin and a landmark matter before the first visit. Tutors who live in the centre may travel out only on set
    days, which is why families here often fix two weekday slots in advance, or combine a weekend home class with
    online lessons in the week. National Highway 4, which runs north towards Diglipur, is the main road out of the
    city; on wet evenings in the monsoon, an online lesson saves the journey.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-boards">CBSE, and the medium your child learns in</h2>
  <p>
    The board question is simple in Sri Vijaya Puram. The South Andaman district administration states that all
    secondary and senior secondary schools are affiliated to CBSE, and its official pages name no separate school
    board for the islands. There is no state board to choose between, and we name no school counts because we have
    no current official figure to quote.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE at the board stage</h3>
  <p>
    The Directorate of Education runs CASIAN, a common portal for its CBSE-affiliated government schools. In and
    around the city its list includes secondary or senior secondary schools at Aberdeen, Haddo, School Line,
    Junglighat, Delanipur, Dairy Farm, South Point and Prothrapur. NCERT textbooks and CBSE's sample question papers are the core material; more on <a href="{{ url('/cbse-home-tutor-port-blair') }}">the CBSE tutor page for Sri Vijaya Puram</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Five mediums of teaching</h3>
  <p>
    The district's education page lists English, Hindi, Tamil, Telugu and Bengali as mediums of instruction (its
    figures are older, so check with your school). When you ask for a tutor, say which medium your child is taught in
    and whether explanations at home should be in that language or in English.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE, ISC, IB or IGCSE</h3>
  <p>
    Families who arrive on a transfer from another board, or whose child is still on ICSE, ISC, IB or Cambridge
    IGCSE, will almost always find that support online. Tell us the syllabus and the
    exam session so the tutor plans around it.
  </p>
      </div>
    </div>
  <p>
    For anything about your own child's exams, go by the school and by cbse.gov.in rather than any tutor's memory.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-mode">Home tutor or online tutor in an island city?</h2>
  <p>
    On the islands, online tuition is not a fallback. It is often the only way to reach a subject
    specialist, because the local pool of tutors is small and the mainland is a long way off. Having the tutor in the room still helps small children, and any student whose working on paper needs checking line by line. A practical way to
    split it:
  </p>
  <ul>
    <li><strong>A suitable tutor lives in your part of the city:</strong> hold most classes in your home and settle early which weeks switch to online.</li>
    <li><strong>You live in the expansion villages:</strong> one weekend home class with a weekday online hour or two is a common pattern.</li>
    <li><strong>Senior secondary or specialist subjects:</strong> Class 12 Physics, Chemistry, Maths, Accountancy, Computer Science and entrance work are often easier to staff online from anywhere in India.</li>
    <li><strong>Your work moves you between islands:</strong> a tutor who teaches both at home and online keeps the routine going when you are away.</li>
  </ul>
  <p>
    A laptop or tablet, a phone camera over the notebook or a pen tablet, and a quiet room are enough. Ask the tutor
    to share notes after every class in case the connection drops. See
    <a href="{{ url('/online-tutor-port-blair') }}">online tutors for Sri Vijaya Puram</a> and our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutoring comparison</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-stages">What should tuition focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Primary and middle school</h3>
  <p>
    Reading, written answers and number sense come first. A child moving from a Tamil-, Telugu-, Hindi- or
    Bengali-medium primary class into English textbooks often needs help with how to set out an answer, not only with
    the content. Small gaps in fractions or tables are far easier to fix now than in Class 9.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    This is where most island families first look for a tutor, mostly for Maths and Science. Beginning in Class 9
    gives time to rebuild algebra and basic science before the board year. For the board year, our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths plan</a> and the <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> are organised chapter by chapter on the CBSE syllabus.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    The jump into senior secondary is steep, and a child changing school after Class 10 also has a new timetable to
    learn. Use a separate specialist per subject where you can. For Class 12, read our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Physics strategies</a> and the <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Organic and Inorganic Chemistry</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-subjects">Which subjects can you get help with?</h2>
  <p>
    Maths and Science lead the requests in the middle classes; in Classes 11 and 12 Science divides into Physics,
    Chemistry and Biology, and commerce students ask for Accountancy and Economics. Tutors also teach English, Hindi,
    Social Science and Computer Science, while a single tutor commonly handles every subject for a young child. Separate city pages cover tutors for <a href="{{ url('/maths-home-tutor-port-blair') }}">maths</a>, <a href="{{ url('/physics-home-tutor-port-blair') }}">physics</a>, <a href="{{ url('/chemistry-home-tutor-port-blair') }}">chemistry</a>, <a href="{{ url('/science-home-tutor-port-blair') }}">science</a>, <a href="{{ url('/english-home-tutor-port-blair') }}">English</a> and <a href="{{ url('/biology-home-tutor-port-blair') }}">biology</a>.
  </p>
  <p>
    Some habits pay off in any subject. In Maths, trace a low mark back to the earlier topic that drags the rest down. In Physics, get the idea clear before the formula. In Biology, CBSE answers reward NCERT's exact terms, so
    practise labelled diagrams and definitions word for word. In English, regular writing with corrections does more
    than grammar exercises, and for speaking practice at home, try the ideas in our <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-entrance">Is JEE or NEET preparation possible from the islands?</h2>
  <p>
    Yes, and for most students here a large part of it happens online. A tutor helps most with a clear role:
  </p>
  <ul>
    <li><strong>One base for two exams.</strong> NCERT's Class 11 and 12 books carry both the CBSE paper and the entrance syllabus.</li>
    <li><strong>Errors before new work.</strong> Each week, begin with the mistakes from the latest test.</li>
    <li><strong>Time where it is needed.</strong> Give extra hours to the weakest subject rather than spreading them evenly.</li>
    <li><strong>Online for the hardest part.</strong> Advanced problem sets and full NEET Biology revision are where a mainland specialist earns their fee.</li>
  </ul>
  <p>
    JEE Main is conducted by NTA in two sessions at the start of the year, and those who qualify may attempt JEE Advanced. NEET UG comes once a year, and half of its marks are for Biology. For dates, trust only that year's official bulletin. For reading, see
    our <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic plan</a> and our note on <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">why NEET Biology starts with NCERT</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-fees">What do tutors charge in Sri Vijaya Puram?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set
    their own fees, and a few things usually explain the differences:
  </p>
  <ul>
    <li><strong>The class.</strong> Senior secondary lessons generally cost more than junior-class support.</li>
    <li><strong>The goal.</strong> Entrance preparation is priced above school support in the same subject.</li>
    <li><strong>The trip.</strong> A tutor travelling from the centre to Prothrapur or Garacharma may factor in the journey.</li>
    <li><strong>Mode and length.</strong> Online classes cut out the journey, and two longer lessons a week can cover more than several short ones.</li>
  </ul>
  <p>
    Every tutor's fee on your shortlist is shown to you before the demo, and we do not put forward anyone above the
    budget you set. The <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject; our post on <a href="{{ url('/blog/home-tuition-fees-port-blair') }}">home tuition fees in Sri Vijaya Puram</a> suggests what to ask a tutor before you settle on one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-demo">What should you watch for in the free demo?</h2>
  <p>A profile only tells you so much; the demo shows how the tutor actually teaches. Watch whether the tutor:</p>
  <ol>
    <li>asks about recent school tests and the medium of teaching before starting;</li>
    <li>checks what your child can already do instead of beginning at page one;</li>
    <li>explains in words your child can repeat back, in the language that works for them;</li>
    <li>knows how CBSE sets questions for this class;</li>
    <li>gets your child writing and solving rather than only listening;</li>
    <li>can commit to a fixed slot, and say what happens on weeks they cannot come.</li>
  </ol>
  <p>
    Share the lane, a landmark and a map pin beforehand. We ask a parent to be at home for the demo, and a shared
    room works well for lessons. For more, read the <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">parents' demo checklist</a> and <a href="{{ url('/blog/how-to-choose-boardstream') }}">how to choose a board and stream</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-calendar">How does tuition fit around the year?</h2>
  <p>School calendars vary, so check yours, but a pattern that works for many families looks like this:</p>
  <ul>
    <li><strong>Start of the session:</strong> the easiest time to begin, before tests pile up, leaving time to mend last year's weak spots.</li>
    <li><strong>Monsoon months:</strong> heavy rain can make evening travel slow, so agree in advance that some sessions move online rather than being cancelled.</li>
    <li><strong>Mid-year:</strong> fix a steady weekly rhythm before the board year, especially in Classes 10 and 12.</li>
    <li><strong>Exam season:</strong> timed CBSE papers in full, followed by the entrance exams for students taking them.</li>
  </ul>
  <p>Rely on official notices for exam dates. Starting early is ideal, yet past-paper practice pays off whenever you begin.</p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pbl-start">First steps with a tutor in Sri Vijaya Puram</h2>
  <p>
    Send the class, the subjects, the medium, your locality with a landmark, and your child's free hours. We reply with two or three tutors, and you try one in a free demo before committing. You can also open your locality's page below, look through <a href="{{ url('/tutors') }}">tutor profiles</a>, or <a href="{{ url('/demo-class') }}">book a free demo class</a> directly; where no nearby tutor fits, online lessons can begin without waiting. Tutors who join go through an ID check; <a href="{{ url('/how-we-verify-tutors') }}">how we check tutors</a> explains what that covers.
  </p>
  <p>
    The <a href="{{ url('/blog/port-blair-home-tuition-guide') }}">Sri Vijaya Puram home tuition guide</a> goes
    through every locality, from Aberdeen Bazaar and Haddo to Junglighat, School Line and Prothrapur.
  </p>
  <p class="pbl-note">
    Other cities on NXTutors: home tutors in <a href="{{ url('/city/chennai') }}">Chennai</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a>, <a href="{{ url('/city/bhubaneswar') }}">Bhubaneswar</a> and
    <a href="{{ url('/city') }}">all cities</a>.
  </p>
  <p class="pbl-note">
    Teaching in the islands? See <a href="{{ url('/tuition-jobs/port-blair') }}">tuition jobs in Sri Vijaya Puram
    (Port Blair)</a> to see which localities families are asking about.
  </p>
  </section>

  </div>
</article>
