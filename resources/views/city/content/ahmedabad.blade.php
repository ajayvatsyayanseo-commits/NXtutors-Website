{{--
  Long-form guide for the Ahmedabad city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Ahmedabad: every figure here is either live from the database or
  a published NXTutors policy, local facts come from the cited research in
  database/seo-content/areas/ahmedabad-research.json, and no school, college,
  university, society, developer, hospital or mall is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ahAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ahA = function (string $slug, string $label) use ($ahAreaSlugs) {
      return in_array($slug, $ahAreaSlugs, true)
          ? '<a href="' . e(url('/city/ahmedabad/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ahTutors = (int) ($hubCounts['tutors'] ?? 0);
  $ahAreas = $allAreas->count();
@endphp

<article class="nx-guide ah-guide" aria-labelledby="ahGuideTitle">
  <h2 id="ahGuideTitle">Home tuition in Ahmedabad: a parent's guide from Thaltej to Vastral</h2>

  <p class="nx-guide__lede ah-lede">
    Ahmedabad is split by the Sabarmati. On the west bank, Navrangpura and Paldi grew first beyond the walled city,
    and the newer suburbs spread out along SG Highway to Bopal, Shela and Gota. On the east bank lie the old mill
    districts, the lakeside streets of Kankaria and Maninagar, and the fast-growing ring-road suburbs of Nikol and
    Vastral. Since 2019 the metro has stitched the two banks together: the Blue Line runs east to west across the
    river, the Red Line runs north to south along the western side, and since January 2026 a line from Motera
    Stadium reaches right into Gandhinagar. For a family looking for a tutor, the bank you live on and the nearest
    station decide more than the postcode.
  </p>
  <nav class="nx-guide__toc ah-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#ah-how">How matching works</a> ·
    <a href="#ah-zones">The seven zones</a> ·
    <a href="#ah-boards">Boards</a> ·
    <a href="#ah-classes">Classes</a> ·
    <a href="#ah-subjects">Subjects</a> ·
    <a href="#ah-jee-neet">JEE &amp; NEET</a> ·
    <a href="#ah-mode">Home or online</a> ·
    <a href="#ah-fees">Fees</a> ·
    <a href="#ah-choose">The demo class</a> ·
    <a href="#ah-calendar">The school year</a> ·
    <a href="#ah-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="ah-how">How does NXTutors find a tutor for an Ahmedabad family?</h2>
  <p>
    You fill in a single request: the student's class and board, the subjects, your locality and the name of the
    nearest crossroads or station, the days and hours that are free, whether you want lessons at home, online or a
    mix, and a budget. In return you receive two or three tutors who fit. Each tutor's fee is visible before anything
    is booked, and the first lesson with the one you choose is a free demo. For Ahmedabad we weigh four things:
  </p>
  <ul>
    <li><strong>West bank or east bank?</strong> Crossing the Sabarmati at the evening peak adds real time to a visit, so we look first at tutors already on your side of the river.</li>
    <li><strong>Blue Line, Red Line or neither?</strong> A tutor who can ride straight to Thaltej, Vastral or Vasna keeps a timetable more easily; where there is no station, as in Satellite, Bopal or Gota, we look for tutors who already travel those roads.</li>
    <li><strong>Gated society or open lane?</strong> Towers along SG Highway and the ring road log every visitor; older houses in Paldi, Bapunagar or Khokhra open straight onto the street.</li>
    <li><strong>Which paper, which medium?</strong> A GSEB Class 10 student taught in Gujarati and a Cambridge IGCSE student need very different tutors, so board, class and language of instruction are matched together.</li>
  </ul>
  <p>
    The demo is an ordinary lesson on whatever chapter the school is teaching that week. If the fit is wrong, the
    next tutor on the list is arranged, and changing tutor later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-zones">Ahmedabad, zone by zone</h2>
  <p>
    @if($ahTutors > 0)
      The Ahmedabad tutor list on this page draws on {{ number_format($ahTutors) }} tutor profiles,
    @else
      The Ahmedabad tutor list on this page draws on our tutor profiles,
    @endif
    and @if($ahAreas > 0){{ number_format($ahAreas) }} localities @else each locality @endif
    have a page of their own. On every locality page, tutors based in that neighbourhood come first, then tutors
    from the rest of its zone, then the wider city, then online tutors. For planning home lessons we group the city
    into seven zones, four on the west bank and three on the east:
    <a href="#ah-navrangpura">Navrangpura, Paldi and Ellisbridge</a>, <a href="#ah-satellite">Satellite, Vastrapur
    and Bodakdev</a>, <a href="#ah-bopal">Prahlad Nagar, Bopal and Shela</a>, <a href="#ah-gota">Naranpura, Gota and
    Chandkheda</a>, <a href="#ah-maninagar">Maninagar, Isanpur and Kankaria</a>, <a href="#ah-nikol">Nikol, Naroda
    and Bapunagar</a> and <a href="#ah-shahibaug">Shahibaug, Asarwa and Meghaninagar</a>. These groupings are our
    own and do not follow municipal zone or ward boundaries.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ah-navrangpura">Navrangpura, Paldi and Ellisbridge: the first neighbourhoods across the river</h3>
  <p>
    When Ahmedabad first grew past its old walls onto the west bank, {!! $ahA('navrangpura', 'Navrangpura') !!} was
    among the earliest areas to develop, and it still blends older low-rise blocks and independent houses with newer
    towers and busy shopping streets. {!! $ahA('ellisbridge', 'Ellisbridge') !!} takes its name from the steel bridge
    finished in 1892 and protected as a heritage structure since 1989; the locality near its western end has
    apartment buildings, independent homes and the Law Garden area. {!! $ahA('paldi', 'Paldi') !!} keeps several Art
    Deco era houses beside apartment complexes and builder floors, {!! $ahA('ambawadi', 'Ambawadi') !!} is mostly
    apartments with villas in its quieter pockets, and {!! $ahA('vasna', 'Vasna') !!}, at the south-western end, is a
    district of multi-storey societies.
  </p>
  <p>
    This is where the two metro lines meet. Old High Court is the Blue and Red Line interchange, and both western
    sections opened on 30 September 2022. The Red Line then runs south through Ellisbridge, Paldi and Ambawadi to
    its terminus at APMC in Vasna. Beyond Old High Court the Blue Line crosses the river and goes underground at
    Shahpur. A tutor living anywhere along either line can arrive by train. Apartment watchmen note visitors,
    independent houses mean a knock on the door, and the approaches to the bridges are slowest at office hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ah-satellite">Satellite, Vastrapur and Bodakdev: towers and bungalows along SG Highway</h3>
  <p>
    The Sarkhej–Gandhinagar road, known to everyone as SG Highway and part of National Highway 147, is the spine of
    this zone. {!! $ahA('satellite', 'Satellite') !!} is one of the long-established western areas, with apartment
    complexes of every age and bungalows on plotted lanes. {!! $ahA('jodhpur', 'Jodhpur') !!} beside it is mainly
    flats and builder floors around the Shivranjani crossroads. {!! $ahA('vastrapur', 'Vastrapur') !!} surrounds a
    lake that has long hosted music performances, {!! $ahA('bodakdev', 'Bodakdev') !!} pairs gated towers with a
    notable share of bungalows, {!! $ahA('thaltej', 'Thaltej') !!} grew around an old village and its lake, and
    {!! $ahA('memnagar', 'Memnagar') !!} is mostly two- and three-bedroom flats in mid-rise societies.
  </p>
  <p>
    The Blue Line serves the northern half of the zone. Gurukul Road station is in Memnagar, with Doordarshan Kendra
    and Thaltej following; the section opened on 30 September 2022, and Thaltej Gam became the western terminus on
    8 December 2024. Satellite, Jodhpur and Vastrapur have no station of their own, so tutors come by two-wheeler,
    auto, BRTS or city bus. Towers here often ask for a phone number at the gate, and the highway service lanes
    thicken in the evening, so a late-afternoon or weekend slot is easiest to keep.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ah-bopal">Prahlad Nagar, Bopal and Shela: the south-western growth corridor</h3>
  <p>
    {!! $ahA('prahlad-nagar', 'Prahlad Nagar') !!}, right on SG Highway, combines premium gated flats with a large
    cluster of offices and shops; spare land is scarce, so few new large projects appear.
    {!! $ahA('bopal', 'Bopal') !!} is the story of the city's rapid growth: its population rose from 18,553 in 2001
    to 55,068 in 2011, and it was merged with Ghuma into a municipality in 2015 before coming under the Ahmedabad
    Municipal Corporation. {!! $ahA('south-bopal', 'South Bopal') !!}, often called SoBo, is almost entirely modern
    gated complexes, and {!! $ahA('shela', 'Shela') !!}, further out towards Sanand, is dominated by new towers and
    township-style projects alongside villas and residential plots.
  </p>
  <p>
    None of these localities has a metro station. The outer ring road, built by the Ahmedabad Urban Development
    Authority and opened in 2004, carries most traffic past the Bopal junction, and BRTS Route 17 runs to South
    Bopal from the Satellite side. Most tutors therefore ride two-wheelers. Big complexes may register a visitor at
    the main gate and again at the tower, so send the tutor's details ahead, and for specialist senior subjects
    families here often add online lessons to a home tutor.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ah-gota">Naranpura, Gota and Chandkheda: the northern stretch towards Gandhinagar</h3>
  <p>
    {!! $ahA('naranpura', 'Naranpura') !!} is a settled neighbourhood of budget blocks, mid-segment societies and
    large bungalows, with busy shopping around Vijay Char Rasta and Ankur Road. {!! $ahA('ghatlodia', 'Ghatlodia') !!},
    also spelt Ghatlodiya, is densely built and largely low-rise. {!! $ahA('gota', 'Gota') !!} grew up after SG
    Highway was built and is known for mid-range apartment societies. {!! $ahA('chandkheda', 'Chandkheda') !!}, once
    a separate panchayat, joined the municipal corporation on 19 January 2008 and holds housing board societies,
    company colonies and apartment complexes along a wide main road that leads north towards Gandhinagar. {!! $ahA('sabarmati', 'Sabarmati') !!},
    named after the river it borders, mixes apartments, older houses and railway colony areas.
  </p>
  <p>
    The Red Line runs the length of this zone, from Motera Stadium in the north through Sabarmati and AEC down to
    Vijay Nagar, which serves Naranpura; it opened to the public on 6 October 2022. From Motera Stadium the
    Gandhinagar line has run since 16 September 2024, and its last section into Gandhinagar opened on 11 January
    2026, so a tutor living in the state capital can now reach Chandkheda by train. Gota and Ghatlodia have no
    station; BRTS Route 9 ends in Gota, and two-wheelers do the rest.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ah-maninagar">Maninagar, Isanpur and Kankaria: the lake and the south on the east bank</h3>
  <p>
    Across the river in the south, {!! $ahA('maninagar', 'Maninagar') !!} is an established residential and market
    district split in two by the railway line, with older houses on busy streets and newer flats towards New
    Maninagar; it is also the city's entrance to the Ahmedabad–Vadodara Expressway.
    {!! $ahA('kankaria', 'Kankaria') !!} surrounds the city's largest lake, completed in 1451, whose redeveloped
    lakefront opened on 25 December 2008. {!! $ahA('khokhra', 'Khokhra') !!} grew around textile mills whose land
    has since become housing, {!! $ahA('isanpur', 'Isanpur') !!} began as a village beside the city and is now mostly
    low-rise apartments in the South Zone, and {!! $ahA('ghodasar', 'Ghodasar') !!} is a quiet pocket of flats and a
    few independent houses nearby.
  </p>
  <p>
    Maninagar railway station, on the main line to Mumbai, has a footbridge to the BRTS bus station, so a tutor can
    arrive by train or bus. Kankaria East, an underground Blue Line station, opened to commuters on 5 March 2024, and
    Apparel Park is within reach of Khokhra. Low-rise blocks rarely need more than a call from the entrance. Around
    the lake, Sundays, holidays and the December carnival bring crowds, so weekday evenings suit lessons better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ah-nikol">Nikol, Naroda and Bapunagar: mill history and the eastern ring road</h3>
  <p>
    The east of the city holds its industrial past and some of its fastest-growing suburbs.
    {!! $ahA('bapunagar', 'Bapunagar') !!} was set up in the early 1960s to house textile mill workers and later
    became a major diamond-cutting centre; its lanes are dense, with a busy market. {!! $ahA('amraiwadi', 'Amraiwadi') !!}
    traces its story to a 15th-century royal garden and still shows former mill chawls beside newer flats.
    {!! $ahA('naroda', 'Naroda') !!} has two halves, Juna Naroda around the old village and Nava Naroda with its
    societies, beside a large industrial estate. {!! $ahA('odhav', 'Odhav') !!} mixes factories with homes,
    {!! $ahA('nikol', 'Nikol') !!} has new high-rises near the ring road, and {!! $ahA('vastral', 'Vastral') !!}
    has grown from a village into a residential suburb.
  </p>
  <p>
    This is where Ahmedabad's metro began. On 4 March 2019 the first section opened, Vastral Gam to Apparel Park, with
    Nirant Cross Road, Vastral and Rabari Colony between them, and Amraiwadi station followed on 18 May 2019. Naroda
    has a station on the line to Udaipur but no metro. In Bapunagar and Juna Naroda a two-wheeler beats a car, and
    industrial shift changes make a mid-evening lesson smoother.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="ah-shahibaug">Shahibaug, Asarwa and Meghaninagar: the north-central east bank</h3>
  <p>
    {!! $ahA('shahibaug', 'Shahibaug') !!} sits on the east bank of the Sabarmati and takes its name from a royal
    garden palace built in 1622; long one of the city's well-off districts, it is now mostly spacious three- and
    four-bedroom flats. {!! $ahA('asarwa', 'Asarwa') !!} beside it is an older neighbourhood where large medical and
    teaching campuses sit among independent homes and mid-income apartments, and
    {!! $ahA('meghaninagar', 'Meghaninagar') !!} is an affordable to mid-budget area of houses and flats, popular
    with owners and tenants alike.
  </p>
  <p>
    Rail here means Asarva railway station on the Udaipur line, and the nearest metro stops are the Blue Line's
    underground stations at Shahpur, Gheekanta and Kalupur Railway Station, all opened on 30 September 2022. Most
    tutors therefore arrive by road, using Airport Road, Camp Road or Riverfront Road. Apartment gates expect a name
    and a call to the flat; traffic near the medical campuses stays heavy through the day, so an evening time agreed
    in advance is usually easier.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-boards">Which boards do Ahmedabad tutors teach?</h2>
  <p>
    Ahmedabad families sit four kinds of examination, and the request form asks which one first, because the board
    shapes what a good lesson looks like.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>GSEB, the Gujarat board</h3>
  <p>
    The Gujarat Secondary and Higher Secondary Education Board runs the state's Class 10 and Class 12 public
    examinations, and a large share of the city's students study under it. Schools on this board teach in Gujarati,
    English and other media, so tell us the medium: a tutor needs to use the same terms as the textbook. Take the
    exam pattern and timetable only from the board's own notices.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers rest on the NCERT books and increasingly test whether a student can apply an idea: case-based
    questions, assertion and reason, unfamiliar settings. The tutor who helps most starts from the textbook, works
    through the board's sample papers against its marking scheme, and insists on written steps so that no method
    mark is lost.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE sets ICSE at Class 10 and ISC at Class 12. Both reward full, well-organised written answers across a wide
    syllabus, and English includes set literature. Breadth is the usual difficulty, so the tutor's job is a revision
    loop that reaches every chapter, timed answer practice, and steady progress on internal assessment and project
    work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    The IB Diploma mixes final exams with internally assessed coursework, and Mathematics is offered as Analysis and
    Approaches or Applications and Interpretation, at Standard or Higher Level. A tutor may discuss an Internal
    Assessment or Extended Essay but never write it. Cambridge IGCSE rewards reading command words closely, choosing
    the right tier and marking past papers against the official scheme.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-classes">What should a tutor focus on at each stage?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    Younger children need reading with understanding, quick mental maths, confident fractions, a gentle start on
    algebra and neat written work. One or two lessons a week with the tutor beside them at the table is usually
    plenty, and the same tutor can often take every subject.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    The jump in Maths and Science comes in Class 9, and whatever is left shaky there resurfaces in the board year.
    For Class 10, finish chapters and chapter tests by early winter, then move to full timed papers. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> lay out that sequence.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Each subject becomes a specialism in Class 11, so one tutor per difficult subject usually works better than a
    single all-rounder. Physics and Maths trouble science students most, and Accountancy troubles commerce students.
    See our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">strategies for Class 12 Physics</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">Class 12 calculus and algebra</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-subjects">Which subjects can an Ahmedabad tutor take?</h2>
  <p>
    Tutors on NXTutors cover Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies, Hindi and Sanskrit, and many teach every subject at primary level. For Gujarati,
    mention it in the request so that we look for it specifically. Ahmedabad has dedicated pages for
    <a href="{{ url('/maths-home-tutor-ahmedabad') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-ahmedabad') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-ahmedabad') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-ahmedabad') }}">chemistry home tutors</a>. Senior Chemistry is really
    three subjects in one, with numerical physical chemistry, reaction-based organic and memory-heavy inorganic; our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 organic and inorganic
    chemistry</a> explains how to divide the time.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-jee-neet">Does a home tutor help with JEE or NEET?</h2>
  <p>
    It can, as long as the tutor works alongside coaching rather than in place of it. The useful jobs are specific:
  </p>
  <ul>
    <li><strong>Clearing the pile.</strong> Each week, go through unsolved coaching sheets and every question marked wrong in the last test.</li>
    <li><strong>One revision for two exams.</strong> The NCERT books for Classes 11 and 12 carry both the board papers and much of the entrance syllabus, so a single plan can serve both.</li>
    <li><strong>The weakest subject first.</strong> Extra hours on the subject pulling the total down pay back more than equal time for all three.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, and qualifiers may then attempt JEE Advanced.
    NEET UG is held once a year, and Biology accounts for half of its marks, so the NCERT Biology books repay careful
    reading. Rely only on each year's official information bulletin for dates. For subject detail see
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths topic by topic</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology from NCERT</a>. If coaching runs late in the
    evening, a short online session is often the only practical time for doubts.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-mode">Home or online tuition in Ahmedabad?</h2>
  <p>
    A tutor at the table suits younger children and for subjects where the working counts, such as Maths
    and Chemistry numericals. Online lessons open up teachers from across India, which matters most for IB, IGCSE
    and advanced senior papers. In Ahmedabad the geography tips the balance:
  </p>
  <ul>
    <li><strong>The river.</strong> Bridge approaches slow at office hours, so a tutor from your own bank of the Sabarmati is usually the steadier choice.</li>
    <li><strong>Two main lines and an interchange.</strong> The Blue Line links Vastral in the east with Thaltej Gam in the west, the Red Line links Motera Stadium with APMC, and Old High Court joins them, so homes near a station can draw on tutors from two corridors.</li>
    <li><strong>The Gandhinagar extension.</strong> Since the final section opened in January 2026, northern suburbs such as Chandkheda and Sabarmati can also draw on tutors from the capital.</li>
    <li><strong>The unconnected west.</strong> Satellite, Prahlad Nagar, Bopal, Shela and Gota have no station, and BRTS, which opened its first corridor on 14 October 2009, fills only part of the gap, so local tutors or online lessons matter more there.</li>
  </ul>
  <p>
    Many families settle on one weekly home lesson plus a short online session for doubts, with the same tutor for
    both. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">comparison of home and online tutoring</a> goes
    through the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-fees">What does a home tutor cost in Ahmedabad?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own rate, and three factors usually explain the difference:
  </p>
  <ul>
    <li><strong>Class and board.</strong> Primary lessons usually cost less than senior-school, IB or IGCSE teaching.</li>
    <li><strong>How specialised the work is.</strong> Advanced entrance problem solving, IB Higher Level and coursework guidance cost the most.</li>
    <li><strong>The journey.</strong> A tutor crossing the river or driving out to Shela may build that into the fee; one from your own neighbourhood seldom does.</li>
  </ul>
  <p>
    You see the fee of every shortlisted tutor before the demo, and no one above your stated budget is put forward.
    Our <a href="{{ url('/pricing-guide') }}">pricing guide</a> sets out fees by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-ahmedabad') }}">home tuition fees in Ahmedabad</a> looks at the city in
    more detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-choose">What should you watch for in the demo class?</h2>
  <p>A profile earns a tutor a place on the shortlist; the demo shows whether they belong there. Look for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor check what your child already understands?</li>
    <li><strong>Who did the work?</strong> Was your child writing and solving, or mostly listening?</li>
    <li><strong>Knowledge of the paper.</strong> Can the tutor explain how your board sets this year's exam, and in which medium?</li>
    <li><strong>A plan for the month.</strong> What will be covered in the next four weeks, and how will you know it is working?</li>
    <li><strong>A route that lasts.</strong> Which line, bus or road, and at what hour, every week?</li>
  </ol>
  <p>
    If you live in a gated society, give the tutor's name and number to the gate or enter it in the visitor app
    before the demo; for an independent house, share the house number, lane, nearest crossroads and a map pin. Hold
    lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and advice on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-calendar">When is the right time to start?</h2>
  <p>
    CBSE's session begins in April, while GSEB and other schools follow their own calendars, so check your school's
    dates. A typical board year falls into five stretches:
  </p>
  <ul>
    <li><strong>April to June:</strong> new books and the summer break, the natural window to close gaps from the previous year.</li>
    <li><strong>July to September:</strong> regular weekly teaching alongside school, with chapter tests and first-term exams.</li>
    <li><strong>October to December:</strong> finishing the syllabus. Navratri evenings and the Diwali break change family routines, so agree lesson times for those weeks early.</li>
    <li><strong>January to March:</strong> pre-boards, sample papers and the board exams themselves; Uttarayan, the kite festival in mid-January, is worth planning around.</li>
    <li><strong>April to May:</strong> the second JEE Main session, JEE Advanced and NEET UG, and the May examinations for IB and Cambridge students.</li>
  </ul>
  <p>
    Confirm every date from official notices. Starting in spring gives a full year; starting in winter still helps,
    with the emphasis on past papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="ah-start">How do you get started in Ahmedabad?</h2>
  <p>
    Send us the class, board and medium, the subjects, your locality and nearest crossroads or station, and the
    times that work. We come back with two or three matched tutors; you pick one for a free demo class and decide
    after it. Choose your locality from the zones above, browse <a href="{{ url('/tutors') }}">all tutors</a> or book
    a <a href="{{ url('/demo-class') }}">free demo class</a> directly. If no home tutor is close enough yet, an
    online tutor from anywhere in India can begin at once.
  </p>
  <p>
    For a closer look at one side of the river, read our
    <a href="{{ url('/blog/west-ahmedabad-tuition-guide') }}">West Ahmedabad tuition guide</a> or the
    <a href="{{ url('/blog/east-ahmedabad-tuition-guide') }}">East Ahmedabad tuition guide</a>.
  </p>
  <p class="ah-note">
    Elsewhere in Gujarat, see home tutors in <a href="{{ url('/city/surat') }}">Surat</a>, or browse
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="ah-note">
    Teaching in Ahmedabad? See <a href="{{ url('/tuition-jobs/ahmedabad') }}">home tuition jobs in Ahmedabad</a>
    and the localities where families are looking for tutors.
  </p>
  </section>

  </div>
</article>
