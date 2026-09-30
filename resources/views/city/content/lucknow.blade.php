{{--
  Long-form guide for the Lucknow city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Lucknow: every figure is either live from the database or a
  published NXTutors policy, local facts come from the cited research in
  database/seo-content/areas/lucknow-research.json, and no school, college,
  institute, society, developer, hospital or mall is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $lkAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $lkA = function (string $slug, string $label) use ($lkAreaSlugs) {
      return in_array($slug, $lkAreaSlugs, true)
          ? '<a href="' . e(url('/city/lucknow/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $lkTutors = (int) ($hubCounts['tutors'] ?? 0);
  $lkAreas = $allAreas->count();
@endphp

<article class="nx-guide lk-guide" aria-labelledby="lkGuideTitle">
  <h2 id="lkGuideTitle">Home tuition in Lucknow: a parent's guide from Jankipuram to Telibagh</h2>

  <p class="nx-guide__lede lk-lede">
    Lucknow grew outwards from a crowded old core. The market streets of Hazratganj, Aminabad and Chowk still sit at
    its centre, with flats stacked above shopfronts and lanes too narrow for a car. North of the Gomti, the Trans-Gomti
    colonies of Mahanagar, Aliganj and Jankipuram are mostly independent houses in lettered sectors. To the east,
    Gomti Nagar is a planned township of khands, and Indira Nagar one of the biggest planned colonies in the city.
    Down Kanpur Road the south has its own authority schemes, and beyond Shaheed Path a newer ring of gated towers and
    townships is still filling up. One Red Line metro runs north to south through much of this, and whether your home
    is near it shapes which tutors can come, and when.
  </p>
  <nav class="nx-guide__toc lk-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#lk-how">How matching works</a> ·
    <a href="#lk-zones">The five zones</a> ·
    <a href="#lk-boards">Boards</a> ·
    <a href="#lk-classes">Classes</a> ·
    <a href="#lk-subjects">Subjects</a> ·
    <a href="#lk-jee-neet">JEE &amp; NEET</a> ·
    <a href="#lk-mode">Home or online</a> ·
    <a href="#lk-fees">Fees</a> ·
    <a href="#lk-choose">The demo class</a> ·
    <a href="#lk-calendar">The school year</a> ·
    <a href="#lk-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="lk-how">How does NXTutors find a tutor for a Lucknow family?</h2>
  <p>
    You fill in a single request: the class and board (with the medium of teaching, if it is UP Board), the subjects,
    your locality with its khand, sector or block, the days and hours that are free, whether you want lessons at home,
    online or a mix, and the budget you have in mind. We come back with two or three tutors who fit that brief. Every
    one of them shows a fee before anything is agreed, and the first class with the tutor you choose is a free demo.
    In Lucknow, four details change the shortlist most:
  </p>
  <ul>
    <li><strong>How close is the Red Line?</strong> Homes near a station, from Munshi Pulia down to Amausi, can draw on tutors from the whole length of the line. Where there is no station nearby, we look first at tutors living in the same part of the city.</li>
    <li><strong>Khand, sector or tower?</strong> A house on a plotted lane means the tutor rings your bell; a flat in a gated township means a name at the gate and, for regular visits, often a pass.</li>
    <li><strong>Old city or new?</strong> In the market lanes around Aminabad and Chowk a two-wheeler or the metro works better than a car, so we favour tutors who travel that way.</li>
    <li><strong>Which board, and in which language?</strong> A UP Board student taught in Hindi, an ISC student and an IGCSE student need different tutors even in the same subject, so board, class and medium are matched together.</li>
  </ul>
  <p>
    The demo is an ordinary lesson on whatever your child is studying that week. If it does not click, we line up the
    next tutor on the list, and changing tutor later, at any point, is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-zones">Lucknow, zone by zone</h2>
  <p>
    @if($lkTutors > 0)
      The tutors shown on this page come from {{ number_format($lkTutors) }} tutor profiles,
    @else
      The tutors shown on this page come from our tutor profiles,
    @endif
    and @if($lkAreas > 0){{ number_format($lkAreas) }} Lucknow localities @else every Lucknow locality @endif
    have a page of their own. On each of those pages, tutors living in the locality come first, then tutors from
    elsewhere in the same zone, then online tutors. For planning home lessons we divide the city into five zones, from
    the east round through the north and centre to the south:
    <a href="#lk-gomti">Gomti Nagar, Indira Nagar and Chinhat</a>,
    <a href="#lk-transgomti">Mahanagar, Aliganj and Jankipuram</a>,
    <a href="#lk-old">Hazratganj, Lalbagh and Aminabad</a>,
    <a href="#lk-alambagh">Alambagh, Ashiyana and Rajajipuram</a> and
    <a href="#lk-shaheed">Sushant Golf City, Vrindavan Yojana and Telibagh</a>. These groupings are our own and do not
    follow municipal wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="lk-gomti">Gomti Nagar, Indira Nagar and Chinhat: khands, blocks and the Faizabad Road</h3>
  <p>
    {!! $lkA('gomti-nagar', 'Gomti Nagar') !!} is a large planned township beside the river, and every one of its
    khands has a name starting with V: Vibhuti, Vishwas, Vivek, Vijay and the rest. Its first two phases are fully
    built, with plotted houses on wide roads next to apartment blocks, offices, hotels and shopping strips.
    {!! $lkA('gomti-nagar-extension', 'Gomti Nagar Extension') !!}, in numbered sectors along Shaheed Path, is the
    newer phase, where authority flats and plots share the ground with private high-rise towers and gated townships.
    {!! $lkA('indira-nagar', 'Indira Nagar') !!} is a UP Housing and Development Board colony that grew from four
    blocks to twenty-five, mostly houses and builder floors on plotted lanes around the Bhootnath and Lekhraj markets.
    Out on the Faizabad Road towards Ayodhya, {!! $lkA('chinhat', 'Chinhat') !!}, long known for its pottery, has
    independent homes in its older pockets and townships along the highway.
  </p>
  <p>
    Indira Nagar is the metro end of the zone: Lekhraj Market, Bhootnath Market, Indira Nagar and Munshi Pulia
    stations opened on 8 March 2019, and Munshi Pulia is where the Red Line ends in the north. Gomti Nagar has no
    station of its own and is reached from those, while Gomti Nagar railway station in Vivek Khand serves the suburban
    line. The Extension and Chinhat have no metro at all, so tutors drive or ride in. Houses in the khands and blocks
    are doorstep visits; towers along Shaheed Path register visitors and often issue a pass for a regular teacher.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="lk-transgomti">Mahanagar, Aliganj and Jankipuram: the Trans-Gomti sectors</h3>
  <p>
    North of the river, the Trans-Gomti side is a long run of settled family colonies.
    {!! $lkA('mahanagar', 'Mahanagar') !!} is an established mix of houses, villas and older apartment buildings, with
    little new construction, so most homes change hands as resale. {!! $lkA('nirala-nagar', 'Nirala Nagar') !!} is
    known for its parks and broad roads, {!! $lkA('nishatganj', 'Nishatganj') !!} has a busy market with older lanes
    behind the shops, and {!! $lkA('kapoorthala', 'Kapoorthala') !!} is a commercial road with houses and flats in the
    streets behind it. {!! $lkA('aliganj', 'Aliganj') !!}, often called the second-largest colony after Indira Nagar,
    runs in lettered sectors of plotted houses, and {!! $lkA('vikas-nagar', 'Vikas Nagar') !!} lies between it and
    Kalyanpur in numbered sectors. Further north, {!! $lkA('jankipuram', 'Jankipuram') !!} and
    {!! $lkA('jankipuram-extension', 'Jankipuram Extension') !!}, also called Jankipuram Vistar, are authority schemes
    where plotted houses sit beside newer towers, and parts of the extension are still being built on.
  </p>
  <p>
    A Mahanagar metro station was planned but dropped from the final route, so the southern half of this zone uses
    Badshahnagar, IT College and Vishwavidyalaya, elevated Red Line stations opened on 8 March 2019; Badshahnagar also
    connects with the railway station of the same name. From Aliganj northwards the stations fall behind, and
    Jankipuram families rely on tutors who come by road, ideally from Aliganj, Vikas Nagar or Jankipuram itself. Sector
    letters and house numbers find most homes; in the newer sectors, send a map pin as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="lk-old">Hazratganj, Lalbagh and Aminabad: the old centre and its markets</h3>
  <p>
    {!! $lkA('hazratganj', 'Hazratganj') !!} is the city's central business district, a market that began in 1827,
    took its present name in 1842 and was rebuilt in a Victorian style after 1857. People here mostly live in flats over
    the shops or in older buildings on side streets. {!! $lkA('lalbagh', 'Lalbagh') !!} next door is similar, with
    banks and hotels among the homes. {!! $lkA('aminabad', 'Aminabad') !!} is among the oldest and busiest markets in
    Lucknow, wholesale lanes with families living above and behind them, and {!! $lkA('chowk', 'Chowk') !!}, near the
    Imambaras, is the dense heart of the old city. {!! $lkA('aishbagh', 'Aishbagh') !!} mixes historic and newer
    buildings around a railway junction, and {!! $lkA('rajendra-nagar', 'Rajendra Nagar') !!} was built on the ground of
    the 1916 Lucknow Session of the Congress and is now mostly mid-rise flats close to Charbagh.
  </p>
  <p>
    Hussainganj, Sachivalaya (in Lalbagh) and Hazratganj are underground Red Line stations opened on 8 March 2019, with
    Charbagh, the main railway station, to the south. The planned Blue Line from Charbagh to Vasant Kunj, approved by
    the Union Cabinet on 12 August 2025 and now under construction, is meant to reach Aminabad, Pandeyganj and Chowk,
    but until it opens those lanes depend on autos and two-wheelers. Parking is scarce everywhere here, so a tutor who
    rides the metro is easier to keep. Share the floor and a landmark, since many older buildings have no guard.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="lk-alambagh">Alambagh, Ashiyana and Rajajipuram: the Kanpur Road side</h3>
  <p>
    {!! $lkA('alambagh', 'Alambagh') !!} takes its name from a palace and garden that became a fort in 1857; today it
    is a busy mix of houses, builder floors and some gated complexes, with a large morning vegetable market and the
    city's biggest bus terminal. {!! $lkA('rajajipuram', 'Rajajipuram') !!} to its west is laid out in blocks A to F,
    with wide roads, parks, houses and taller flats. To the south, {!! $lkA('lda-colony', 'LDA Colony') !!} is the
    development authority's Kanpur Road scheme in lettered sectors, {!! $lkA('ashiyana', 'Ashiyana') !!} is better
    known for independent houses than towers, and {!! $lkA('krishna-nagar', 'Krishna Nagar') !!} is mainly houses
    with some villas. {!! $lkA('sarojini-nagar', 'Sarojini Nagar') !!}, on the airport side, adds housing board flats
    and an industrial pocket at Nadarganj.
  </p>
  <p>
    This is where the metro began: the Red Line's first section, eight stations from Transport Nagar to Charbagh,
    opened on 5 September 2017, including Alambagh, Alambagh ISBT, Singar Nagar and Krishna Nagar, and it was carried
    on through Amausi to the airport on 8 March 2019. Most homes are a short auto ride from a station. Plotted sectors
    mean parking at the door and no gate; the complexes in Alambagh and Sarojini Nagar keep a register. Kanpur Road is
    the thing to plan around at office hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="lk-shaheed">Sushant Golf City, Vrindavan Yojana and Telibagh: the Shaheed Path belt</h3>
  <p>
    Shaheed Path, a four-lane road opened in 2012, curves from Transport Nagar on Kanpur Road across Raebareli Road and
    Sultanpur Road to Chinhat, and the south-eastern townships have grown along it.
    {!! $lkA('sushant-golf-city', 'Sushant Golf City') !!} is a large township on Shaheed Path and the Sultanpur
    highway, built around an 18-hole golf course, and most families there live in gated towers, with some villas and
    plots. {!! $lkA('vrindavan-yojana', 'Vrindavan Yojana') !!} is a UP Awas Vikas Parishad township on Raebareli Road
    in numbered sectors across several schemes, mixing flats, houses and plots, and
    {!! $lkA('telibagh', 'Telibagh') !!} beside it is a quieter neighbourhood where independent houses are the norm.
  </p>
  <p>
    None of the three has a metro station; the nearest, Transport Nagar, is over on Kanpur Road. Tutors therefore come
    by car, two-wheeler or cab, and the practical pool is the people who already live in this belt. Towers in the golf
    city township expect visitor registration and, for a regular tutor, an approved pass, so sort it out before the
    demo. Houses in Telibagh and much of Vrindavan Yojana are simple doorstep visits. Raebareli Road is slow at school
    and office times, and for specialist senior subjects an online tutor is often the sensible answer here.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-boards">Which boards do Lucknow tutors teach?</h2>
  <p>
    Lucknow's school system is more mixed than most. CBSE is widely followed, CISCE's ICSE and ISC have a strong,
    long-standing presence in the city, a smaller number of students take the IB or Cambridge IGCSE, and many families
    are in UP Board schools. Please state the board on every request, because a tutor at home in one often needs time
    to adjust to another.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers rest on the NCERT textbooks, and a good share of each paper now tests whether a student can apply an
    idea, through case-based passages and assertion–reason items, rather than recall it. The right tutor starts from
    the chapter, practises with the board's own sample papers and marking scheme, and insists on complete working so
    that step marks are earned.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    With so many Lucknow students on CISCE, tutors who know ICSE (Class 10) and ISC (Class 12) well are easier to find
    here than in many cities. Both exams expect long written answers over a wide syllabus, English includes set
    literature texts, and each subject has internal assessment or project work. Covering everything, then revising it,
    matters more than any single hard chapter.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    The IB Diploma mixes final exams with internally assessed work, and its Mathematics comes as Analysis and
    Approaches or Applications and Interpretation, at Standard or Higher Level. A tutor may talk through an Internal
    Assessment or Extended Essay but never write it. Cambridge IGCSE is about exam technique: command words, the
    correct tier, and marking past papers against the official scheme.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>UP Board</h3>
  <p>
    The Uttar Pradesh Madhyamik Shiksha Parishad (UPMSP) conducts the High School (Class 10) and Intermediate
    (Class 12) examinations. Much of the syllabus follows NCERT, but the question paper is the board's own, and schools
    may teach in Hindi or English. Tell us both the board and the medium so the tutor can teach in the language your
    child will write the exam in.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-classes">What should tuition cover at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    In the junior years the aim is sound foundations: reading with understanding, quick number sense, fractions and
    decimals, the first algebra, and neat, complete written work. One or two lessons a week with the tutor at the same
    table usually suit this age well, and one tutor can often take all subjects.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where Maths and Science first get properly harder, and the Class 10 board year leans on it, so an
    unfixed gap from Class 9 costs marks later. For CBSE, see our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a>; for ICSE or UP Board, the
    same rhythm of chapter, test and full paper applies.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Senior classes reward a specialist in each subject over one tutor for everything. Physics and Maths trouble most
    science students, Accountancy most commerce students, and Class 11 decides how Class 12 goes. Useful reading:
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">strategies for Class 12 Physics</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-subjects">Which subjects can you find a Lucknow tutor for?</h2>
  <p>
    Tutors on NXTutors cover Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies, Hindi and Sanskrit, and many teach every subject at primary level. For UP Board
    students taught in Hindi, ask for a tutor who teaches Science and Maths in Hindi, since the terms differ. Lucknow
    has dedicated pages for
    <a href="{{ url('/maths-home-tutor-lucknow') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-lucknow') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-lucknow') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-lucknow') }}">chemistry home tutors</a>. Class 12 Chemistry is really three
    subjects in one, calculation-heavy Physical, mechanism-driven Organic and memory-heavy Inorganic, which our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 Organic and Inorganic
    Chemistry</a> takes apart.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-jee-neet">Can a home tutor help with JEE or NEET in Lucknow?</h2>
  <p>
    Yes, working alongside coaching rather than instead of it. Coaching sets the pace; a home tutor makes sure the
    student keeps up with it. The time pays off most in three ways:
  </p>
  <ul>
    <li><strong>Clearing what piled up.</strong> Each week, the tutor works through the coaching problems left unsolved and the test questions that went wrong.</li>
    <li><strong>One revision for two exams.</strong> The NCERT content of Classes 11 and 12 sits under the board papers and the entrance tests alike, so a single plan can serve both.</li>
    <li><strong>The weakest subject first.</strong> Extra hours on the subject pulling the total down do more than equal time for all three.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, and qualifiers may go on to JEE Advanced. NEET UG
    is held once a year, and Biology is half of its marks, which makes careful reading of the NCERT Biology books
    essential. Always take dates from that year's official information bulletin. Our subject plans cover
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic by topic</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology from NCERT</a>. Our article on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching versus a home tutor for
    JEE</a> was written for Gurugram, but the reasoning holds in Lucknow. When coaching runs late into the evening, a
    short online doubt session can replace a home visit on those days.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-mode">Home or online tuition in Lucknow?</h2>
  <p>
    Younger children, and any subject where the working on paper counts as much as the answer, gain most from a tutor
    at the table. Online lessons bring in tutors from across India, which matters most for IB, IGCSE and senior
    specialist papers. In Lucknow, geography tips the balance one way or the other:
  </p>
  <ul>
    <li><strong>Along the Red Line.</strong> From Munshi Pulia through Hazratganj and Charbagh to Amausi, one line links the Trans-Gomti stations, the old centre and the Kanpur Road side, so a tutor anywhere on it can reach a home near another station.</li>
    <li><strong>Off the line.</strong> Gomti Nagar Extension, Chinhat, Jankipuram and the Shaheed Path townships have no station, so home lessons there depend on tutors living nearby.</li>
    <li><strong>The old-city lanes.</strong> Chowk and much of Aminabad wait for the Blue Line; until then, weekend mornings or online sessions are the easier routine for many families.</li>
    <li><strong>The specialist gap.</strong> If the right IB, ISC or JEE teacher lives on the far side of the city, an online lesson avoids a long cross-town trip.</li>
  </ul>
  <p>
    Many families settle on one home lesson a week and a shorter online session for doubts, with the same tutor for
    both. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutors</a> sets
    out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-fees">How much does a home tutor cost in Lucknow?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, and in Lucknow three things usually explain the difference between two quotes:
  </p>
  <ul>
    <li><strong>The class and the board.</strong> Junior classes generally cost less than senior classes, ISC, IB or IGCSE.</li>
    <li><strong>How specialised the help is.</strong> Advanced problem-solving for JEE, IB Higher Level work, and guidance on an IA or Extended Essay sit at the top.</li>
    <li><strong>The journey.</strong> A tutor driving out to a Shaheed Path township or into the old-city lanes may allow for the trip; one living in your own sector usually will not.</li>
  </ul>
  <p>
    You see the fee of every shortlisted tutor before the demo, and we do not suggest anyone above the budget you set.
    The <a href="{{ url('/pricing-guide') }}">pricing guide</a> gives a breakdown by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-lucknow') }}">home tuition fees in Lucknow</a> looks at the city in more
    detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-choose">What should you look for in the demo class?</h2>
  <p>A profile explains why a tutor made the shortlist. The demo shows whether they should stay. Watch for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor check what your child already understands before starting?</li>
    <li><strong>Who did the work.</strong> Was your child writing and solving, or mostly listening?</li>
    <li><strong>Knowledge of your board.</strong> Could the tutor say how this year's paper is set for CBSE, ICSE, ISC, UP Board or IB, as the case may be?</li>
    <li><strong>A plan for the month.</strong> What comes next, and how will you know it is working?</li>
    <li><strong>A route that lasts.</strong> Which station or road, at what time, in every season?</li>
  </ol>
  <p>
    For a gated township, give the guard the tutor's name, or add it to the visitor app, before the demo; for a house,
    send the khand or sector, house number and a map pin; for an old-city flat, add the floor and a landmark. Keep
    lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-calendar">When in the school year should tuition start?</h2>
  <p>The CBSE session begins in April, and for most board students the year falls into five parts:</p>
  <ul>
    <li><strong>April to June:</strong> new books, a quieter start and the summer holidays, the easiest window for fixing last year's weak chapters.</li>
    <li><strong>July to September:</strong> regular weekly lessons next to school, chapter tests, and in many schools the first term exams.</li>
    <li><strong>October to December:</strong> finishing the syllabus, with many schools holding pre-boards around the new year.</li>
    <li><strong>January to March:</strong> sample papers and then the board exams, with the first JEE Main session usually in this stretch as well.</li>
    <li><strong>April to May:</strong> the second JEE Main session, JEE Advanced and NEET UG, and the May papers for IB and Cambridge students.</li>
  </ul>
  <p>
    ICSE, ISC and UP Board calendars run on their own schedules, so check each date against the board's official
    notice. Starting in spring gives a full year; starting in winter still helps, with more of the time on papers and
    exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="lk-start">How do you get started in Lucknow?</h2>
  <p>
    Send us the class, board and medium, the subjects, your locality with its khand, sector or block, and the times
    that work. We reply with two or three matched tutors, you pick one for a free demo class, and you decide after it.
    Open your locality from the zones above, browse <a href="{{ url('/tutors') }}">all tutors</a>, or book a
    <a href="{{ url('/demo-class') }}">free demo class</a> straight away. If no home tutor lives close enough yet, an
    online tutor from elsewhere in India can begin at once.
  </p>
  <p>
    Planning for one side of the city? Our local guides cover
    <a href="{{ url('/blog/gomti-nagar-and-trans-gomti-tuition-guide') }}">Gomti Nagar and the Trans-Gomti
    colonies</a> and <a href="{{ url('/blog/central-and-south-lucknow-tuition-guide') }}">central and south
    Lucknow</a>.
  </p>
  <p class="lk-note">
    Elsewhere in Uttar Pradesh, see home tutors in <a href="{{ url('/city/noida') }}">Noida</a>,
    <a href="{{ url('/city/greater-noida') }}">Greater Noida</a> and
    <a href="{{ url('/city/ghaziabad') }}">Ghaziabad</a>, or browse <a href="{{ url('/city') }}">cities across
    India</a>.
  </p>
  <p class="lk-note">
    Teaching in Lucknow? See <a href="{{ url('/tuition-jobs/lucknow') }}">home tuition jobs in Lucknow</a> and the
    localities where families are looking for tutors.
  </p>
  </section>

  </div>
</article>
