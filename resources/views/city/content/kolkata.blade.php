{{--
  Long-form guide for the Kolkata city page (included by city/show.blade.php
  when a file named after the city slug exists). The page also covers Salt
  Lake, New Town and Howrah. Every figure is live from the database or a
  published NXTutors policy; local facts come from the cited research in
  database/seo-content/areas/kolkata-research.json; exam facts come from the
  repo's existing ICSE/ISC posts. No school, college, society, developer,
  hospital or mall is named, and no road named after a person is used.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $klAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $klA = function (string $slug, string $label) use ($klAreaSlugs) {
      return in_array($slug, $klAreaSlugs, true)
          ? '<a href="' . e(url('/city/kolkata/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $klTutors = (int) ($hubCounts['tutors'] ?? 0);
  $klAreas = $allAreas->count();
@endphp

<article class="nx-guide kl-guide" aria-labelledby="klGuideTitle">
  <h2 id="klGuideTitle">Home tuition in Kolkata: a parent's guide from Behala to Salt Lake and across the river to Howrah</h2>

  <p class="nx-guide__lede kl-lede">
    Kolkata asks a tutor to cross very different kinds of neighbourhood in one week. North of the centre, riverside
    quarters such as Bagbazar and Sovabazar keep old family houses along narrow lanes. The south grew in waves: mansions
    in Ballygunge in the 1930s and 1940s, then, after 1947, the refugee colonies of Jadavpur and Tollygunge and planned
    plots in Jodhpur Park and New Alipore. To the east, Salt Lake rose on reclaimed wetland in the 1960s, and New Town
    has been built as a planned township since the late 1990s. Howrah faces the city across the Hooghly. Whether a
    lesson happens on time usually depends on one question: which metro line or suburban station is closest to your door?
  </p>
  <nav class="nx-guide__toc kl-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#kl-how">How matching works</a> ·
    <a href="#kl-zones">The nine zones</a> ·
    <a href="#kl-boards">Boards</a> ·
    <a href="#kl-classes">Classes</a> ·
    <a href="#kl-subjects">Subjects</a> ·
    <a href="#kl-jee-neet">JEE &amp; NEET</a> ·
    <a href="#kl-mode">Home or online</a> ·
    <a href="#kl-fees">Fees</a> ·
    <a href="#kl-choose">The demo class</a> ·
    <a href="#kl-calendar">The school year</a> ·
    <a href="#kl-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="kl-how">How does NXTutors find a tutor for a Kolkata family?</h2>
  <p>
    You fill in one request covering your child's class and board, the subjects, your locality with its block, para or
    tower, the free evenings, and whether you want lessons at home, online or a mix, plus a budget. In return you get
    two or three tutors who fit. Every profile shows the tutor's own fee, and the first lesson with whoever you choose
    is a free demo. The shortlist begins with tutors closest to you, then the rest of your zone, then the wider city,
    and online tutors fill any gap. Four details shape a Kolkata shortlist more than anything else:
  </p>
  <ul>
    <li><strong>Your nearest station.</strong> The Blue, Green, Purple, Orange and Yellow metro lines, the suburban railway and the Circular Railway each open a different pool of tutors, so name the stop you use.</li>
    <li><strong>House, para lane or gated complex?</strong> In the older lanes a tutor rings the bell; in Salt Lake the block letter and house number are the address; in New Town and Rajarhat towers the security desk wants a name first.</li>
    <li><strong>Which bank of the Hooghly?</strong> Families in Howrah are usually better served by a tutor who already teaches on the west bank, or by one who travels on the Green Line.</li>
    <li><strong>Board and medium together.</strong> A CBSE Class 9 student, an ISC Class 12 candidate and a Higher Secondary student on the West Bengal board need different people, and the teaching language matters too.</li>
  </ul>
  <p>
    Treat the demo as an ordinary lesson on whatever chapter school is teaching now. If the fit is wrong, another
    tutor from the shortlist is lined up, and changing tutor later is also free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-zones">Kolkata, zone by zone</h2>
  <p>
    @if($klTutors > 0)
      The tutors shown for Kolkata come from {{ number_format($klTutors) }} tutor profiles,
    @else
      The tutors shown for Kolkata come from our tutor profiles,
    @endif
    and @if($klAreas > 0){{ number_format($klAreas) }} neighbourhoods @else every neighbourhood @endif
    in and around the city have a page of their own, listing tutors in that neighbourhood before tutors from the rest of
    its zone and then online tutors. For planning home visits we split greater Kolkata into nine zones, working from the
    old south round through the east and north and over the river:
    <a href="#kl-ballygunge">Ballygunge, Gariahat and Alipore</a>, <a href="#kl-tolly">Tollygunge, Jadavpur and
    Garia</a>, <a href="#kl-behala">Behala and New Alipore</a>, <a href="#kl-kasba">Kasba and the southern EM
    Bypass</a>, <a href="#kl-saltlake">Salt Lake</a>, <a href="#kl-newtown">New Town and Rajarhat</a>,
    <a href="#kl-laketown">Lake Town, Dum Dum and Baguiati</a>, <a href="#kl-north">North Kolkata</a> and
    <a href="#kl-howrah">Howrah</a>. These groupings are practical ones of our own, not municipal wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-ballygunge">Ballygunge, Gariahat and Alipore: the old south around the lake</h3>
  <p>
    {!! $klA('ballygunge', 'Ballygunge') !!} is where wealthy families moving south from north Calcutta built large
    mansions in the 1930s and 1940s; many streets now pair those houses with apartment blocks, and Gariahat Market
    spreads around the crossing. {!! $klA('bhowanipore', 'Bhowanipore') !!}, just south of the Maidan, was one of the
    villages the East India Company acquired in 1758 and today mixes older buildings with shops and offices.
    {!! $klA('kalighat', 'Kalighat') !!} grew up around its temple beside the Adi Ganga. {!! $klA('alipore', 'Alipore') !!}
    keeps colonial-era bungalows and government residences, with much of its land in institutional use. Further south,
    {!! $klA('dhakuria', 'Dhakuria') !!} is a denser middle-class area of family houses, {!! $klA('jodhpur-park', 'Jodhpur Park') !!}
    was divided into about 450 plots by a co-operative housing society in 1947, and
    {!! $klA('lake-gardens', 'Lake Gardens') !!} lies just south of the Rabindra Sarobar lake.
  </p>
  <p>
    Kolkata's metro started here: the Blue Line's first stretch, Esplanade to Netaji Bhavan, opened on 24 October 1984,
    and Jatin Das Park, Kalighat and Rabindra Sarobar followed on 29 April 1986. Ballygunge Junction, Dhakuria and Lake
    Gardens are stations on the Sealdah South suburban lines, while Alipore relies on Majerhat and Kidderpore on the
    Circular section. Plot houses mean a doorstep visit. Apartment buildings often note visitors at the gate. The
    Gariahat crossing is packed on weekend evenings and through the festive season, so choose times away from those.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-tolly">Tollygunge, Jadavpur and Garia: film studios, refugee colonies and the Adi Ganga</h3>
  <p>
    {!! $klA('tollygunge', 'Tollygunge') !!} is the home of the Bengali film industry, and families from East Pakistan
    who settled here after 1947 shaped much of its present character. Beside it,
    {!! $klA('golf-green', 'Golf Green') !!} is mostly low-rise flats among green spaces and
    {!! $klA('regent-park', 'Regent Park') !!} is largely compact family flats. By 1949
    {!! $klA('jadavpur', 'Jadavpur') !!} held about forty refugee colonies, Bijoygarh among them; it is now a busy mixed
    area with a large university campus and the 8B bus terminus. Along the main road towards Garia,
    {!! $klA('bansdroni', 'Bansdroni') !!} is almost wholly residential, {!! $klA('naktala', 'Naktala') !!} is known for
    its Durga Puja, {!! $klA('baghajatin', 'Baghajatin') !!} has little room left to build, and
    {!! $klA('garia', 'Garia') !!}, on the banks of the Adi Ganga, is split between the municipal corporation and the
    Rajpur Sonarpur Municipality.
  </p>
  <p>
    The Blue Line runs the length of this zone. It reached Tollygunge in 1986, Garia Bazar (Kavi Nazrul) on 22 August 2009,
    with Netaji, Masterda Surya Sen and Gitanjali on the way, and New Garia on 7 October 2010. Jadavpur, Baghajatin and
    Garia are also stops on the Sealdah South lines, and Tollygunge has a station on the Budge Budge line. The 8B crossing
    fills at college and office hours, and the main road to Garia slows in the evening peak, so afternoons and weekend
    mornings are the reliable slots.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-behala">Behala and New Alipore: the Purple Line along Diamond Harbour Road</h3>
  <p>
    {!! $klA('behala', 'Behala') !!} is among the oldest and largest residential areas of the city, spread across wards 115
    to 132 and taking in former villages such as Barisha, Sarsuna and Haridevpur. Old family houses stand next to newer
    apartment buildings and builder floors, and Diamond Harbour Road is the spine. {!! $klA('new-alipore', 'New Alipore') !!}
    was laid out in the 1950s as a planned suburb and is still organised in lettered blocks of plot houses and apartment
    buildings. Further out, {!! $klA('thakurpukur', 'Thakurpukur') !!}, once part of the Barisha estate, is densely built
    along busy market streets.
  </p>
  <p>
    The Purple Line changed how this zone connects. Joka to Taratala, with Thakurpukur, Sakherbazar, Behala Chowrasta and
    Behala Bazar, was inaugurated on 30 December 2022, and the extension to Majerhat on 6 March 2024. Behala Chowrasta
    station stands right above the crossing. New Alipore also has two stations of its own, New Alipore and Majerhat, on
    the Budge Budge section, and Majerhat is where the southern suburban lines meet the Circular Railway. Diamond Harbour
    Road is slow in the evening peak, so a tutor coming by road should aim for an afternoon or weekend slot.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-kasba">Kasba and the southern EM Bypass: the Orange Line corridor</h3>
  <p>
    The Eastern Metropolitan Bypass opened in 1982, and the south-eastern neighbourhoods grew along it.
    {!! $klA('kasba', 'Kasba') !!} was a small hamlet until a rail overbridge in 1978 and a connector road to the bypass
    brought offices and housing; inner paras of older buildings now sit beside newer complexes.
    {!! $klA('santoshpur', 'Santoshpur') !!} was still largely marsh and fields in the 1970s, although its first homes date
    from the 1950s and 1960s, and its lake is a favourite walking spot. {!! $klA('mukundapur', 'Mukundapur') !!} sits on
    the south-eastern fringe, mostly newer apartment projects. {!! $klA('patuli', 'Patuli') !!} grew around the
    Baishnabghata Patuli township, planned by the state's metropolitan development authority with about 4,500 serviced
    plots for some 55,000 people.
  </p>
  <p>
    Since 6 March 2024 the Orange Line has run along the bypass from Kavi Subhash to Hemanta Mukhopadhyay, with stops at
    Satyajit Ray, Jyotirindra Nandi and Kavi Sukanta; on 22 August 2025 it reached Beleghata by way of VIP Bazar. Ballygunge
    Junction, Jadavpur and Baghajatin cover the railway side. Complexes register visitors at the gate, so send the tutor's
    name and timing ahead, and keep clear of the bypass junctions in the evening rush.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-saltlake">Salt Lake: lettered blocks on reclaimed wetland</h3>
  <p>
    Salt Lake, or Bidhannagar, was built on reclaimed wetland east of the city. Reclamation of
    {!! $klA('salt-lake-sector-1', 'Sector I') !!} finished in 1965, plots were handed out from 1966, and the first
    residents moved into a house in AB Block on 9 March 1970. {!! $klA('salt-lake-sector-2', 'Sector II') !!} and
    {!! $klA('salt-lake-sector-3', 'Sector III') !!} were reclaimed by 1969, and the township took the name Bidhannagar in
    1973. Blocks carry letter codes such as AA, BD, DL, EE, FD and IB, set along numbered avenues and cross roads, and most
    homes are independent houses on plots. Sector V is the IT and office district.
  </p>
  <p>
    The Green Line opened its first stretch here in February 2020, from Salt Lake Sector V through Karunamoyee, Central Park,
    City Centre and Bengal Chemical to Salt Lake Stadium, and on 22 August 2025 it was joined end to end, running straight
    through to Howrah Maidan. Bidhannagar Road station serves the western edge. Houses open onto the street, so there is
    rarely a gate register; share the block letter, house number and nearest avenue instead. Office-hour traffic heads for
    Sector V and the bypass, so early-evening and weekend slots are easier.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-newtown">New Town and Rajarhat: a planned township with its metro still being built</h3>
  <p>
    New Town was begun in the late 1990s and is run today by the New Town Kolkata Development Authority, with HIDCO
    planning its projects. It is divided into three Action Areas, with a central business district between the first two.
    {!! $klA('new-town-action-area-1', 'Action Area I') !!} mixes plotted blocks, government housing estates and private
    complexes near Biswa Bangla Gate. {!! $klA('new-town-action-area-2', 'Action Area II') !!} is dominated by apartment
    complexes around Eco Park, and {!! $klA('new-town-action-area-3', 'Action Area III') !!} is mostly two- and
    three-bedroom flats in complexes and sub-townships. {!! $klA('rajarhat', 'Rajarhat') !!}, the older area the township
    was planned around, takes in Chinar Park and Teghoria and has been part of the Bidhannagar Municipal Corporation since
    June 2015.
  </p>
  <p>
    Biswa Bangla Sarani, the Major Arterial Road, ties the Action Areas together and heads towards the airport. The Orange
    Line's New Town stations, including Nazrul Tirtha and Eco Park, are still under construction, so for now tutors come by
    bus, app cab or two-wheeler, or change from the Green Line at Salt Lake Sector V. Nearly every home is in a gated
    complex: give the desk the tutor's name and phone number, plus the tower and flat, before the first class. A tutor who
    already lives nearby is the easiest match, and online lessons fill thin subjects.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-laketown">Lake Town, Dum Dum and Baguiati: along VIP Road and Jessore Road</h3>
  <p>
    VIP Road, finished in 1962, runs from Ultadanga to the airport and strings this zone together.
    {!! $klA('lake-town', 'Lake Town') !!} is a planned area of parks and a lake between VIP Road and Jessore Road, and
    {!! $klA('bangur-avenue', 'Bangur Avenue') !!}, its neighbour, is mostly low- and mid-rise flats; both fall under South
    Dum Dum Municipality. {!! $klA('kestopur', 'Kestopur') !!} and {!! $klA('baguiati', 'Baguiati') !!} belong to the
    Bidhannagar Municipal Corporation, with an affordable mix of flats, houses and builder floors spread over several
    sub-localities. {!! $klA('dum-dum', 'Dum Dum') !!}, including Nagerbazar, is split between three municipalities and
    is one of the city's main transit hubs.
  </p>
  <p>
    Dum Dum and Belgachia opened on the Blue Line on 12 November 1984, Dum Dum Junction lies on the Sealdah–Ranaghat line
    and starts the Circular Railway, and since 22 August 2025 the Yellow Line has run from Noapara through Dum Dum
    Cantonment to the airport. The Ultadanga flyover opened in 2011, the flyover over VIP Road at Baguiati in March 2015,
    and the Salt Lake–Kestopur bridge in 2022. Baguiati has no metro stop, so give a first-time tutor an exact landmark,
    and plan classes around the airport-road peaks.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-north">North Kolkata: heritage lanes from Bagbazar to Sinthee</h3>
  <p>
    This is the oldest part of the city. {!! $klA('bagbazar', 'Bagbazar') !!} grew from the historic village of Sutanuti
    beside the Hooghly, and {!! $klA('sovabazar', 'Sovabazar') !!} was a wealthy merchant quarter whose family mansions have
    held Durga Puja celebrations since 1757. {!! $klA('shyambazar', 'Shyambazar') !!} centres on its five-point crossing,
    with verandahed houses in the lanes behind. {!! $klA('maniktala', 'Maniktala') !!} was a separate municipality until the
    1923 Calcutta Municipal Act brought it into the city. {!! $klA('belgachia', 'Belgachia') !!} mixes ready two-bedroom
    flats with older houses, and {!! $klA('sinthee', 'Sinthee') !!}, around Sinthee More on BT Road, is mostly flats.
  </p>
  <p>
    Belgachia has had a Blue Line station since 1984; Shyambazar and Sovabazar Sutanuti opened on 15 February 1995 and
    Girish Park four days later, and the line was carried north to Baranagar and Dakshineswar on 22 February 2021. The
    Circular Railway stops at Bagbazar and Sovabazar Ahiritola. Homes here are family houses or small buildings, so the
    tutor simply knocks, often after a short walk from the station. The crossings are crowded at school and office hours,
    and the lanes fill in Puja season.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="kl-howrah">Howrah: the west bank of the Hooghly</h3>
  <p>
    {!! $klA('shibpur', 'Shibpur') !!} is a large riverside neighbourhood covering Howrah Municipal Corporation wards 25 to
    45 bar 43, with a densely built old core of houses in narrow lanes and newer multi-storey complexes on its main roads.
    {!! $klA('salkia', 'Salkia') !!}, in north Howrah, is anchored by a market more than a century old and has mid-size
    apartment buildings and older houses. {!! $klA('santragachi', 'Santragachi') !!}, on the Kona Expressway, is known for
    its railway junction and for a lake that draws migratory birds in winter, and most homes there are flats in gated
    complexes.
  </p>
  <p>
    On 6 March 2024 the Green Line began running under the Hooghly from Esplanade to Howrah and Howrah Maidan, and since 22
    August 2025 it has run without a break to Salt Lake Sector V, so a Salt Lake or Sealdah tutor can now reach Howrah by
    metro. Santragachi Junction is on the South Eastern Railway, Liluah and Tikiapara serve Salkia, a central bus terminus
    opened on the Kona Expressway in 2015, and ferries still cross from the ghats. Allow extra time on the expressway at
    office hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-boards">Which boards do Kolkata tutors teach?</h2>
  <p>
    In Kolkata four kinds of board sit side by side. CISCE's ICSE and ISC have a long and strong following here, CBSE is
    widely taken, the West Bengal boards are the state's own, and a smaller group follow the IB or Cambridge IGCSE. Say which one in your request, and mention
    the medium of teaching too.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    ICSE is the CISCE examination at Class 10 and ISC at Class 12, and both expect long written answers across a wide
    syllabus. In Mathematics, for example, the ICSE Class 10 paper is a three-hour, 80-mark paper with 20 marks of
    internal assessment, while ISC Mathematics pairs an 80-mark theory paper with 20 marks of project work, and in Class
    12 a visiting examiner holds the viva on the project. Our
    <a href="{{ url('/blog/icse-isc-maths-gurgaon-guide') }}">ICSE and ISC maths guide</a> covers the papers in detail.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers rest on the NCERT textbooks, and a growing share of questions test application: case-based passages,
    assertion and reason, and familiar ideas in new settings. A good CBSE tutor works from the textbook outwards, uses
    the board's own sample papers and marking schemes, and trains students to write every step so method marks are kept.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>West Bengal boards</h3>
  <p>
    The West Bengal Board of Secondary Education (WBBSE) conducts the Madhyamik examination at Class 10, and the West
    Bengal Council of Higher Secondary Education (WBCHSE) runs the Higher Secondary course for Classes 11 and 12. State-board
    schools teach in Bengali, English and other media, so ask for a tutor who can teach in your child's medium, and take syllabus and
    exam details only from the boards' own notices.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    The IB Diploma blends final exams with internal assessment, and its Mathematics comes as Analysis and Approaches or
    Applications and Interpretation, each at SL or HL. A tutor may discuss an IA or Extended Essay but never write it.
    Cambridge IGCSE rewards command words, tier choice and past-paper practice. See our
    <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB Maths AA and AI guide</a> and
    <a href="{{ url('/blog/cambridge-vs-edexcel-igcse-gurgaon') }}">Cambridge and Edexcel IGCSE comparison</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-classes">What matters most at each stage of school?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    The junior years are about habits: reading with understanding, quick mental arithmetic, fractions and decimals,
    first algebra, and neat written work. One or two lessons a week with a patient tutor at the table usually does more
    than a long daily session.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where Mathematics and Science step up, and Class 10, whether ICSE, CBSE or Madhyamik, leans on it, so a
    gap left in Class 9 resurfaces in the board year. Aim for chapter work and tests through the autumn, then full papers.
    Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> help.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    In ISC, CBSE and Higher Secondary alike, each subject deepens sharply after Class 10, so a subject specialist is
    worth more than a generalist. Physics and Mathematics trouble science students most; commerce students often need
    help with Accountancy. See our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics
    strategies</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-subjects">Which subjects can a Kolkata tutor cover?</h2>
  <p>
    Tutors on NXTutors teach Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies and languages, and many take every subject for primary children. Kolkata has its own
    pages for <a href="{{ url('/maths-home-tutor-kolkata') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-kolkata') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-kolkata') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-kolkata') }}">chemistry home tutors</a>. Senior Chemistry is three different
    skills at once, calculation in Physical, mechanisms in Organic and recall in Inorganic, which our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 Chemistry guide</a> breaks down.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-jee-neet">Can a home tutor help with JEE or NEET in Kolkata?</h2>
  <p>Yes, alongside coaching rather than instead of it. A home tutor earns their fee in three ways:</p>
  <ul>
    <li><strong>Clearing the pile.</strong> Each week, work through the coaching sheets left unfinished and the test questions answered wrongly.</li>
    <li><strong>One plan for two exams.</strong> Class 12 NCERT content underlies both the board papers and the national entrance tests, so revision can serve both.</li>
    <li><strong>Lifting the weakest subject.</strong> Extra hours on the subject pulling the total down pay back faster than equal time for all three.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, with JEE Advanced open to those who qualify, and
    NEET UG once a year, where Biology makes up half the marks. Read dates only in that year's official bulletin. Our
    topic plans cover <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology from NCERT</a>. If coaching runs late, a short
    online session for doubts can replace a home visit on those days.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-mode">Home or online tuition in Kolkata?</h2>
  <p>
    Having the tutor in the room helps younger children and any subject where the written working counts, such as
    Mathematics or Chemistry numericals. Online lessons reach tutors across India, which matters most for IB, IGCSE and
    specialist senior papers. In Kolkata, the rail map tips the balance neighbourhood by neighbourhood:
  </p>
  <ul>
    <li><strong>The Blue Line spine.</strong> From Dum Dum in the north, through the centre and down to Garia, the city's oldest line puts much of north and south Kolkata within reach of one another.</li>
    <li><strong>Under the river.</strong> Since March 2024 the Green Line has crossed beneath the Hooghly, and since August 2025 it has run from Howrah Maidan to Salt Lake Sector V in one ride.</li>
    <li><strong>The newer lines.</strong> The Purple Line serves Behala, the Orange Line the southern bypass, and the Yellow Line Dum Dum Cantonment and the airport.</li>
    <li><strong>Gaps still open.</strong> New Town's Orange Line stations are under construction and Baguiati has no stop yet, so these homes often suit a nearby tutor or online lessons.</li>
  </ul>
  <p>
    A common arrangement is one home lesson a week and a short online session for doubts, with the same tutor for both.
    Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutoring comparison</a> sets out the
    trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-fees">How much does a home tutor cost in Kolkata?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, and three things usually push it up or down:
  </p>
  <ul>
    <li><strong>The class and board.</strong> Primary lessons tend to cost less than ISC, CBSE senior, IB or IGCSE work.</li>
    <li><strong>How specialised the need is.</strong> IB Higher Level, JEE Advanced problem-solving and IA guidance cost the most.</li>
    <li><strong>The journey.</strong> A tutor crossing the river or the city at peak hour may build that in; one from your own para or block usually will not.</li>
  </ul>
  <p>
    Every shortlisted fee is on view before the demo, and tutors above your stated budget are left out. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and our guide to
    <a href="{{ url('/blog/home-tuition-fees-kolkata') }}">home tuition fees in Kolkata</a> looks at the local picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-choose">What should you watch for in the demo class?</h2>
  <p>A profile earns a tutor a place on your list; the demo decides whether they keep it. Watch for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor check what your child already knows?</li>
    <li><strong>Who held the pen.</strong> Was your child working problems, or mainly listening?</li>
    <li><strong>Knowledge of your board.</strong> Can the tutor explain how your child's paper, ICSE, CBSE, Madhyamik or IB, is marked?</li>
    <li><strong>A plan for the month.</strong> What will be covered, and how will you see it working?</li>
    <li><strong>A journey that lasts.</strong> Which line, station or bus, at what time, every week, including in the Puja season?</li>
  </ol>
  <p>
    For a gated complex in New Town, Rajarhat or Santragachi, leave the tutor's name at the desk before the demo; for a
    house in Salt Lake, send the block letter and house number; in the older lanes, send a landmark and a map pin. Keep
    lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and advice on
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> can help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-calendar">When in the school year should tuition start?</h2>
  <p>CBSE and CISCE sessions begin in April, and a board year tends to run in five phases:</p>
  <ul>
    <li><strong>April to June:</strong> the easiest start, with fresh books and the summer break to mend last year's gaps.</li>
    <li><strong>July to September:</strong> regular weekly lessons, chapter tests and, in many schools, first-term exams.</li>
    <li><strong>October to December:</strong> the autumn Puja holidays break the routine, so plan revision or online sessions around them, then finish the syllabus before pre-boards.</li>
    <li><strong>January to March:</strong> board exams after a run of timed papers; the first JEE Main session usually falls in this stretch.</li>
    <li><strong>April and May:</strong> the second JEE Main session, then JEE Advanced and NEET UG, while IB and Cambridge candidates sit their May papers.</li>
  </ul>
  <p>
    West Bengal board calendars are set by WBBSE and WBCHSE, so follow your school's notices, and confirm every exam
    date from the official source. An April start gives a full year; starting in winter still helps, with the focus on
    papers and exam technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="kl-start">How do you get started in Kolkata?</h2>
  <p>
    Send us the class, board, subjects, your neighbourhood with its block, para or tower, and the times that work. You
    receive two or three matched tutors, pick one for a free demo class, and decide after it. Choose your neighbourhood
    from the zones above, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a> directly. If no home tutor is close enough yet, an online
    tutor from anywhere in India can begin at once.
  </p>
  <p>
    Focusing on one side of the city? Our local guides cover
    <a href="{{ url('/blog/south-kolkata-tuition-guide') }}">South Kolkata</a>,
    <a href="{{ url('/blog/salt-lake-and-new-town-tuition-guide') }}">Salt Lake and New Town</a> and
    <a href="{{ url('/blog/north-kolkata-and-howrah-tuition-guide') }}">North Kolkata and Howrah</a>.
  </p>
  <p class="kl-note">
    Looking further afield? See home tutors in <a href="{{ url('/city/guwahati') }}">Guwahati</a>,
    <a href="{{ url('/city/patna') }}">Patna</a> and <a href="{{ url('/city/ranchi') }}">Ranchi</a>, or
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="kl-note">
    Teaching in Kolkata? See <a href="{{ url('/tuition-jobs/kolkata') }}">home tuition jobs in Kolkata</a> and the
    neighbourhoods where families are looking for tutors.
  </p>
  </section>

  </div>
</article>
