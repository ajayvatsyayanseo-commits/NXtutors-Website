{{--
  Long-form guide for the Delhi city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Delhi, not for search engines: every figure here is either
  live from the database or a published NXTutors policy, local facts come from
  the cited research in database/seo-content/areas/delhi-research.json, and
  no school, college, society, developer, hospital or mall is named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $dlAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dlA = function (string $slug, string $label) use ($dlAreaSlugs) {
      return in_array($slug, $dlAreaSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $dlTutors = (int) ($hubCounts['tutors'] ?? 0);
  $dlAreas = $allAreas->count();
@endphp

<article class="nx-guide dl-guide" aria-labelledby="dlGuideTitle">
  <h2 id="dlGuideTitle">Home tuition in Delhi: a parent's guide from Dwarka to Dilshad Garden</h2>

  <p class="nx-guide__lede dl-lede">
    For a tutor, Delhi is several cities stitched together by the metro. In the south and west lie the older colonies,
    many laid out after Partition, where one plot often holds several families on separate floors. Two planned DDA sub-cities, Dwarka in the south-west and Rohini in the north-west, organise life by sector and pocket, and
    most homes sit behind a society gate. The North Campus belt mixes family blocks with student lanes, and across the
    Yamuna, East Delhi runs from the DDA pockets of Mayur Vihar to the old lanes of Shahdara. Which line stops near
    your home decides who can reach you, and at what hour.
  </p>
  <nav class="nx-guide__toc dl-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dl-how">How matching works</a> ·
    <a href="#dl-zones">The twelve zones</a> ·
    <a href="#dl-boards">Boards</a> ·
    <a href="#dl-classes">Classes</a> ·
    <a href="#dl-subjects">Subjects</a> ·
    <a href="#dl-jee-neet">JEE &amp; NEET</a> ·
    <a href="#dl-mode">Home or online</a> ·
    <a href="#dl-fees">Fees</a> ·
    <a href="#dl-choose">The demo class</a> ·
    <a href="#dl-calendar">The school year</a> ·
    <a href="#dl-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dl-how">How does NXTutors match a Delhi family with a tutor?</h2>
  <p>
    Send one request: the class, the board, the subjects, your colony or sector with its block or pocket, the days
    that are free, whether lessons should be at home, online or both, and a budget. We reply with two or three tutors
    who suit it. Each shows a fee up front, and the first class with the tutor you pick is a
    free demo. Four questions shape a Delhi shortlist:
  </p>
  <ul>
    <li><strong>Which metro line is yours?</strong> A tutor on your line, or one change away, is easier to keep than one driving across town, so we start from your station.</li>
    <li><strong>Pocket, plot or society?</strong> In DDA pockets and plotted colonies the tutor usually walks up to the door; in cooperative group housing (CGHS) societies and RWA-gated blocks, the guard wants a name first.</li>
    <li><strong>Which bank of the Yamuna?</strong> For East Delhi we begin with tutors already teaching on the trans-Yamuna side.</li>
    <li><strong>Which exam, exactly?</strong> Class and board are matched as a pair: CBSE Class 8 Science and IB Physics HL need very different people.</li>
  </ul>
  <p>
    The demo is a real lesson on this week's chapter; if it does not
    fit, the next tutor is arranged, and a switch later on costs nothing.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-zones">Delhi, zone by zone</h2>
  <p>
    @if($dlTutors > 0)
      Delhi's tutor list on this page is drawn from {{ number_format($dlTutors) }} tutor profiles,
    @else
      Delhi's tutor list on this page is drawn from our tutor profiles,
    @endif
    and @if($dlAreas > 0){{ number_format($dlAreas) }} colonies and sectors @else each colony and sector @endif
    have pages of their own. Each one lists tutors in that locality first, then tutors from elsewhere in its zone,
    then those who teach online. We group the city into twelve zones for planning home lessons, from the south round to the far bank of the Yamuna:
    <a href="#dl-gk">GK, Defence Colony and Lajpat Nagar</a>, <a href="#dl-saket">Saket, Malviya Nagar and Hauz
    Khas</a>, <a href="#dl-kalkaji">Kalkaji, CR Park and Sarita Vihar</a>, <a href="#dl-vasant">Vasant Kunj, Vasant
    Vihar and Palam</a>, <a href="#dl-dwarka">Dwarka</a>, <a href="#dl-west">Janakpuri, Rajouri Garden and Punjabi
    Bagh</a>, <a href="#dl-central">Karol Bagh, Patel Nagar and Rajinder Nagar</a>, <a href="#dl-lodhi">Lodhi Colony,
    Jangpura and Nizamuddin</a>, <a href="#dl-rohini">Rohini</a>, <a href="#dl-north">Pitampura, Model Town and North
    Campus</a>, <a href="#dl-mayur">Mayur Vihar, Patparganj and IP Extension</a> and <a href="#dl-east">Laxmi Nagar,
    Preet Vihar and Shahdara</a>. The groupings are ours, not ward lines.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-gk">GK, Defence Colony and Lajpat Nagar: rebuilt plots along the Ring Road</h3>
  <p>
    This is the heart of the older South Delhi colonies. {!! $dlA('greater-kailash-1', 'Greater Kailash 1') !!} was
    developed from the early 1960s on Zamrudpur and Devli farmland, and {!! $dlA('greater-kailash-2', 'Greater Kailash 2') !!}
    followed on a fan-shaped plan; in both, most first bungalows are now builder floors around M Block markets.
    {!! $dlA('defence-colony', 'Defence Colony') !!} was set up in 1960 for military officers displaced by Partition, in
    blocks A to E. {!! $dlA('lajpat-nagar', 'Lajpat Nagar') !!} has four parts, I to III north of the Ring Road and IV
    south of it. {!! $dlA('south-extension', 'South Extension') !!} faces the Ring Road,
    {!! $dlA('east-of-kailash', 'East of Kailash') !!} puts DDA pockets and CGHS flats beside private floors, and
    {!! $dlA('pamposh-enclave', 'Pamposh Enclave') !!} is small and green.
  </p>
  <p>
    Lajpat Nagar is a Violet and Pink Line interchange: Violet from 3 October 2010, Pink from 6 August 2018, the day
    South Extension opened too. Greater Kailash on the Magenta Line has run since 29 May 2018. Block RWAs post guards,
    so the tutor's name goes to the gate first, and on market evenings a tutor walking from the station beats one
    hunting for parking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-saket">Saket, Malviya Nagar and Hauz Khas: the Yellow Line colonies</h3>
  <p>
    {!! $dlA('saket', 'Saket') !!} was built by the DDA on the land of three villages, in blocks A to N that mix row
    houses, DDA flats and taller apartments. {!! $dlA('malviya-nagar', 'Malviya Nagar') !!}, grown on Shahpur Jat land
    in the 1950s, takes in {!! $dlA('shivalik', 'Shivalik') !!} and {!! $dlA('sarvodaya-enclave', 'Sarvodaya Enclave') !!}.
    {!! $dlA('hauz-khas', 'Hauz Khas') !!} Enclave circles the medieval tank beside {!! $dlA('green-park', 'Green Park') !!}
    and {!! $dlA('safdarjung-enclave', 'Safdarjung Enclave') !!}; {!! $dlA('panchsheel-park', 'Panchsheel Park') !!} has
    large plots and {!! $dlA('sheikh-sarai', 'Sheikh Sarai') !!} two phases of DDA flats. To the south,
    {!! $dlA('sainik-farm', 'Sainik Farm') !!}, {!! $dlA('chhatarpur', 'Chhatarpur') !!} and
    {!! $dlA('mehrauli', 'Mehrauli') !!}, one of Delhi's oldest continuously inhabited settlements, mix big plots,
    floors and village lanes.
  </p>
  <p>
    The Yellow Line through Green Park, Hauz Khas, Malviya Nagar and Saket opened on 3 September 2010, and Hauz Khas,
    the network's deepest station, added the Magenta Line on 29 May 2018; Panchsheel Park and Chirag Delhi opened that
    month. Most blocks have RWA guards. In Mehrauli a landmark helps more than an address, and the Outer Ring Road
    junctions are easier to cross outside office hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-kalkaji">Kalkaji, CR Park and Sarita Vihar: pockets towards Mathura Road</h3>
  <p>
    {!! $dlA('kalkaji', 'Kalkaji') !!} surrounds its historic temple opposite Nehru Place, with DDA and janta flats
    beside plotted floors. {!! $dlA('chittaranjan-park', 'Chittaranjan Park') !!}, or CR Park, began in the early 1960s
    as a colony for Bengali families displaced from East Pakistan, on around 2,000 plots in lettered blocks.
    {!! $dlA('alaknanda', 'Alaknanda') !!} and {!! $dlA('nehru-enclave', 'Nehru Enclave') !!} are DDA and cooperative
    complexes, while by Mathura Road {!! $dlA('sarita-vihar', 'Sarita Vihar') !!}, first planned for the 1982 Asian
    Games, and {!! $dlA('jasola-vihar', 'Jasola Vihar') !!} are lettered pockets beside an office district.
  </p>
  <p>
    Kalkaji Mandir joins the Violet Line, open since 3 October 2010, and the Magenta Line, open since 25 December 2017,
    when Jasola Vihar Shaheen Bagh opened too. Sarita Vihar station stands in Pocket C, and the Violet Line was carried
    on to Badarpur Border on 14 January 2011. Nearly every pocket keeps a gate register, and in Durga Puja week or on
    temple festival days lessons are better moved to a morning or online.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-vasant">Vasant Kunj, Vasant Vihar and Palam: from embassy streets to village lanes</h3>
  <p>
    {!! $dlA('vasant-kunj', 'Vasant Kunj') !!} sits on the Ridge in lettered sectors of pockets and blocks.
    {!! $dlA('vasant-vihar', 'Vasant Vihar') !!}, grown from a 1959 government servants' housing society, has six
    blocks and more than fifty diplomatic missions. {!! $dlA('munirka', 'Munirka') !!} pairs an old village with DDA
    walk-ups from 1975, and {!! $dlA('r-k-puram', 'R K Puram') !!} was built from the late 1950s for central government
    officers. West of the Cantonment, {!! $dlA('palam', 'Palam') !!}, {!! $dlA('mahavir-enclave', 'Mahavir Enclave') !!},
    {!! $dlA('dabri', 'Dabri') !!} and {!! $dlA('sagarpur', 'Sagarpur') !!} are dense lanes of houses and floors.
  </p>
  <p>
    The Magenta Line stretch from Janakpuri West to Botanical Garden, opened on 29 May 2018, links them, with stations
    at Dabri Mor–Janakpuri South, Dashrathpuri, Palam, Vasant Vihar, Munirka and R K Puram. Vasant Kunj has none inside
    it, so tutors finish by auto. Government quarters and village lanes are doorstep visits, Vasant Kunj pockets have
    guards, and Palam's market lanes are easiest outside evening shopping hours.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-dwarka">Dwarka: the south-west sub-city of societies</h3>
  <p>
    {!! $dlA('dwarka', 'Dwarka') !!} is the DDA's south-west sub-city, a grid of numbered sectors where cooperative
    group housing societies are the norm. Central {!! $dlA('dwarka-sector-4', 'Sector 4') !!},
    {!! $dlA('dwarka-sector-5', 'Sector 5') !!}, {!! $dlA('dwarka-sector-11', 'Sector 11') !!} and
    {!! $dlA('dwarka-sector-12', 'Sector 12') !!} are almost all society flats; {!! $dlA('dwarka-sector-6', 'Sector 6') !!}
    and {!! $dlA('dwarka-sector-7', 'Sector 7') !!}, on the Palam side, add DDA self-financing flats;
    {!! $dlA('dwarka-sector-9', 'Sector 9') !!} and {!! $dlA('dwarka-sector-13', 'Sector 13') !!} mix CGHS towers with
    DDA blocks; {!! $dlA('dwarka-sector-10', 'Sector 10') !!} is the busy one, with a bus terminal;
    {!! $dlA('dwarka-sector-14', 'Sector 14') !!} is mainly DDA flats; {!! $dlA('dwarka-sector-19', 'Sector 19') !!}
    wraps complexes around Ambrahi village; and {!! $dlA('dwarka-sector-22', 'Sector 22') !!} and
    {!! $dlA('dwarka-sector-23', 'Sector 23') !!} sit towards the airport.
  </p>
  <p>
    The Blue Line reached Dwarka on 31 December 2005 and Sector 21 on 30 October 2010, with stations at Sectors 8 to 14
    and 21. Sector 21 has met the Airport Express since 23 February 2011, a line extended to Yashobhoomi Dwarka Sector 25
    on 17 September 2023, and the Dwarka Expressway, fully open since June 2025, passes Sectors 21 and 22. Nearly every
    home is behind a society gate, so arrange a standing pass in week one.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-west">Janakpuri, Rajouri Garden and Punjabi Bagh: West Delhi's resettlement colonies</h3>
  <p>
    {!! $dlA('janakpuri', 'Janakpuri') !!}, planned in the late 1960s as Asia's largest residential colony, anchors a
    belt of post-Partition colonies. {!! $dlA('vikaspuri', 'Vikaspuri') !!} is mostly builder floors and
    {!! $dlA('uttam-nagar', 'Uttam Nagar') !!} grew fast once the metro came. {!! $dlA('tilak-nagar', 'Tilak Nagar') !!},
    {!! $dlA('subhash-nagar', 'Subhash Nagar') !!} and {!! $dlA('hari-nagar', 'Hari Nagar') !!} mix DDA flats with
    floors; {!! $dlA('rajouri-garden', 'Rajouri Garden') !!} and {!! $dlA('kirti-nagar', 'Kirti Nagar') !!}, with its
    furniture market, rose on Basai Darapur land; {!! $dlA('moti-nagar', 'Moti Nagar') !!} dates from 1948 to 1950;
    {!! $dlA('punjabi-bagh', 'Punjabi Bagh') !!}, once Refugees Colony, is split by the Ring Road; and
    {!! $dlA('paschim-vihar', 'Paschim Vihar') !!} and {!! $dlA('naraina-vihar', 'Naraina Vihar') !!} complete the zone.
  </p>
  <p>
    The Blue Line along Najafgarh Road opened on 31 December 2005, and Janakpuri West added the Magenta Line on 29 May
    2018. The Green Line, running since 3 April 2010, serves Punjabi Bagh and Paschim Vihar; Naraina Vihar came with the
    Pink Line on 14 March 2018, and Punjabi Bagh West joined Green and Pink on 29 March 2022. Plotted blocks mean a
    doorbell; DDA pockets mean a gate.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-central">Karol Bagh, Patel Nagar and Rajinder Nagar: markets, coaching lanes and floors</h3>
  <p>
    {!! $dlA('karol-bagh', 'Karol Bagh') !!} took in villagers moved from the Connaught Place site in the 1920s and
    refugees after 1947; family pockets such as the WEA blocks sit among very busy shopping streets.
    {!! $dlA('old-rajinder-nagar', 'Old Rajinder Nagar') !!} and {!! $dlA('new-rajinder-nagar', 'New Rajinder Nagar') !!}
    began as 1950s refugee colonies; the old side is now one of Delhi's two main civil services coaching hubs, the new
    side quieter and greener. {!! $dlA('east-patel-nagar', 'East Patel Nagar') !!} and
    {!! $dlA('west-patel-nagar', 'West Patel Nagar') !!} are builder floors on residential plots.
  </p>
  <p>
    All of it lies on the Blue Line section opened on 31 December 2005: Karol Bagh, Rajendra Place, Patel Nagar and
    Shadipur. There is no society desk to clear, but lanes are narrow and the market and coaching streets stay crowded
    late. Send the exact floor and a landmark, since many Rajinder Nagar floors are let to students, and prefer weekdays
    to shopping-heavy weekends.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-lodhi">Lodhi Colony, Jangpura and Nizamuddin: the quiet band south of the centre</h3>
  <p>
    {!! $dlA('lodhi-colony', 'Lodhi Colony') !!}, built in the 1940s for government employees and run by the New Delhi
    Municipal Council, is known as India's first open-air public art district for its murals.
    {!! $dlA('jangpura', 'Jangpura') !!}, on Mathura Road, grew sharply in 1950 and 1951 and is now mostly builder
    floors. {!! $dlA('nizamuddin-east', 'Nizamuddin East') !!} has 286 houses and 32 public parks beside the railway
    station, and {!! $dlA('nizamuddin-west', 'Nizamuddin West') !!} is bungalows and floors around a historic dargah.
  </p>
  <p>
    Jawaharlal Nehru Stadium and Jangpura opened on the Violet Line on 3 October 2010, and on 31 December 2018 the Pink
    Line was extended from Lajpat Nagar through Hazrat Nizamuddin to Mayur Vihar, so a trans-Yamuna tutor can arrive by
    train. Lodhi Colony blocks are open; the Nizamuddin colonies check visitors at RWA gates, and near the dargah the
    block and the gate to use matter.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-rohini">Rohini: the north-west sub-city of sectors and pockets</h3>
  <p>
    {!! $dlA('rohini', 'Rohini') !!}, begun by the DDA in the 1980s for a mix of income groups, is Delhi's north-west
    sub-city of numbered sectors and pockets. {!! $dlA('rohini-sector-3', 'Sector 3') !!} runs in pockets 3A to 3G;
    {!! $dlA('rohini-sector-5', 'Sector 5') !!} holds Rithala station; {!! $dlA('rohini-sector-7', 'Sector 7') !!},
    {!! $dlA('rohini-sector-8', 'Sector 8') !!} and {!! $dlA('rohini-sector-15', 'Sector 15') !!} are mostly DDA flats;
    {!! $dlA('rohini-sector-9', 'Sector 9') !!} and {!! $dlA('rohini-sector-13', 'Sector 13') !!} lean to CGHS
    societies; {!! $dlA('rohini-sector-11', 'Sector 11') !!} is quiet and green;
    {!! $dlA('rohini-sector-16', 'Sector 16') !!} is densely built; and {!! $dlA('rohini-sector-24', 'Sector 24') !!} is
    gated pockets at the outer edge.
  </p>
  <p>
    The Red Line reached Rithala on 31 March 2004. Its Rohini East station, at the Sector 8/14 edge, has been renamed
    Rohini, a change approved by Delhi's State Names Authority in May 2026, and the old Pitampura station is now Madhuban
    Chowk. Rohini Sector 18, 19 on the Yellow Line opened on 10 November 2015, and on 8 March 2026 the Magenta Line
    opened from Deepali Chowk to Majlis Park, making Madhuban Chowk an interchange. Your sector and pocket decide the line.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-north">Pitampura, Model Town and North Campus: enclaves, lakes and student lanes</h3>
  <p>
    {!! $dlA('pitampura', 'Pitampura') !!}, a DDA area of the 1980s, has HIG towers, enclaves of floors and the Netaji
    Subhash Place business district. {!! $dlA('kohat-enclave', 'Kohat Enclave') !!} and
    {!! $dlA('prashant-vihar', 'Prashant Vihar') !!} are floors and houses, {!! $dlA('shalimar-bagh', 'Shalimar Bagh') !!}
    and {!! $dlA('ashok-vihar', 'Ashok Vihar') !!} are block-and-phase colonies, and {!! $dlA('model-town', 'Model Town') !!},
    privately developed in the early 1950s, keeps Naini Lake in its first part. {!! $dlA('adarsh-nagar', 'Adarsh Nagar') !!}
    mixes bungalows and DDA flats. Around North Campus, {!! $dlA('gtb-nagar', 'GTB Nagar') !!},
    {!! $dlA('mukherjee-nagar', 'Mukherjee Nagar') !!}, a civil-services coaching hub, and
    {!! $dlA('kamla-nagar', 'Kamla Nagar') !!} mix families with students, and {!! $dlA('civil-lines', 'Civil Lines') !!}
    keeps its colonial-era bungalows.
  </p>
  <p>
    The Yellow Line is the spine, from Vishwavidyalaya and Civil Lines, opened on 20 December 2004, to Model Town,
    Azadpur and Adarsh Nagar, opened on 4 February 2009. The Red Line serves Kohat Enclave and Netaji Subhash Place, the
    Pink Line has stopped at Shalimar Bagh and Azadpur since 14 March 2018, and Uttari Pitampura-Prashant Vihar on the
    Magenta Line opened on 8 March 2026. Student lanes stay crowded in the evening; enclave floors are quiet.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-mayur">Mayur Vihar, Patparganj and IP Extension: trans-Yamuna pockets and societies</h3>
  <p>
    Across the Yamuna the DDA pocket colonies begin. {!! $dlA('mayur-vihar-phase-1', 'Mayur Vihar Phase 1') !!} dates
    from the early 1980s, {!! $dlA('mayur-vihar-phase-2', 'Mayur Vihar Phase 2') !!} from 1984 with pockets A to F, and
    {!! $dlA('mayur-vihar-phase-3', 'Mayur Vihar Phase 3') !!}, by the Noida border, is almost all DDA flats.
    {!! $dlA('patparganj', 'Patparganj') !!} had 175 acres allotted to group housing, and
    {!! $dlA('ip-extension', 'IP Extension') !!} is its quarter of CGHS complexes.
    {!! $dlA('vasundhara-enclave', 'Vasundhara Enclave') !!}, not the township across the border, has about forty-four
    societies, while {!! $dlA('pandav-nagar', 'Pandav Nagar') !!}, {!! $dlA('mandawali', 'Mandawali') !!} and
    {!! $dlA('shakarpur', 'Shakarpur') !!} are dense lanes of builder floors.
  </p>
  <p>
    Mayur Vihar-I, Mayur Vihar Extension and New Ashok Nagar opened on the Blue Line on 12 November 2009. The Pink Line
    added East Vinod Nagar–Mayur Vihar-II, Mandawali–West Vinod Nagar and IP Extension on 31 October 2018 and closed its
    last gap on 6 August 2021. By road, the DND Flyway, open since 2001, and the Delhi–Meerut Expressway, whose first
    phase opened on 27 May 2018, carry road traffic over the river. Society gates dominate; Pandav Nagar and Mandawali are doorbells.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="dl-east">Laxmi Nagar, Preet Vihar and Shahdara: where the metro began</h3>
  <p>
    Older East Delhi runs from Vikas Marg up to GT Road. {!! $dlA('laxmi-nagar', 'Laxmi Nagar') !!} is the busiest hub,
    known for accountancy and company secretary coaching; {!! $dlA('nirman-vihar', 'Nirman Vihar') !!} and
    {!! $dlA('preet-vihar', 'Preet Vihar') !!} are low-rise plotted colonies, {!! $dlA('karkardooma', 'Karkardooma') !!}
    mixes societies and houses, and {!! $dlA('anand-vihar', 'Anand Vihar') !!} surrounds a rail, bus and Namo Bharat
    hub. {!! $dlA('vivek-vihar', 'Vivek Vihar') !!} and {!! $dlA('surajmal-vihar', 'Surajmal Vihar') !!} have wider
    roads, {!! $dlA('krishna-nagar', 'Krishna Nagar') !!} and {!! $dlA('geeta-colony', 'Geeta Colony') !!} are closely
    built, {!! $dlA('shahdara', 'Shahdara') !!} gave its name to a district formed in 2012,
    {!! $dlA('dilshad-garden', 'Dilshad Garden') !!} is DDA flats from the late 1970s and early 1980s, and
    {!! $dlA('yamuna-vihar', 'Yamuna Vihar') !!} runs in blocks B-1 to C-12.
  </p>
  <p>
    Shahdara, Welcome, Seelampur and Shastri Park opened on 25 December 2002 with the first Delhi Metro section. The Blue
    Line branch through Laxmi Nagar to Anand Vihar followed on 6 January 2010, Anand Vihar's underground Namo Bharat
    station on 5 January 2025, and on 8 March 2026 the Pink Line closed its ring, adding Yamuna Vihar. Lanes are tight,
    so a train and an e-rickshaw beat a car.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-boards">Which boards do Delhi tutors teach?</h2>
  <p>
    CBSE is the board most Delhi students sit, CISCE's ICSE and ISC have a sizeable following, and a smaller group
    study for the IB or Cambridge IGCSE. Almost every request we see from Delhi families falls under one of the
    three below. 
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    Every CBSE paper is built on the NCERT books, and a large part now checks application rather than memory:
    case-study passages, assertion–reason pairs and questions set in unfamiliar contexts. A strong CBSE tutor teaches
    from the textbook outwards, drills with the board's sample papers and marking scheme, and makes the student write
    each step so that method marks are never thrown away.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE's ICSE at Class 10 and ISC at Class 12 are long-answer examinations across a broad syllabus, and English
    carries prescribed literature texts. Students tend to struggle with coverage more than difficulty, so the tutor's
    job is a revision cycle that returns to every chapter, regular timed writing, and attention to the internal
    assessment and project work in each subject.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    The IB Diploma combines final examinations with internally assessed work, and its Mathematics runs as two courses,
    Analysis and Approaches or Applications and Interpretation, each at Standard or Higher Level. A tutor can discuss an
    Internal Assessment or Extended Essay but must never write any of it. Cambridge IGCSE rewards exam craft: command
    words, the right tier, and past papers checked against the official scheme. 
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-classes">What should a tutor focus on, class by class?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    Early years build habits as much as content: reading for meaning, mental arithmetic, fractions, first steps in algebra and tidy written work. Children of this age usually settle betterwith a tutor sitting beside them for one or two lessons a week.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 brings the first real step up in Maths and Science, and Class 10 builds straight on it, so gaps left in
    Class 9 show up in the board year. A sensible Class 10 routine is chapter, test, then full papers from winter
    onwards. Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">plan for Class 10 Maths</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Science notes for Class 10</a> map it out.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    From Class 11 each subject deepens, so specialists beat an all-rounder. Science students most often stumble on
    Physics and Maths, commerce students on Accountancy. Class 11 carries the weight of what follows; see our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">calculus and algebra for Class 12</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-subjects">Which subjects can a Delhi tutor cover?</h2>
  <p>
    Tutors on NXTutors teach Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy,
    Economics, Business Studies, Hindi and Sanskrit, and many take all subjects for primary classes.  Delhi has its own pages for
    <a href="{{ url('/maths-home-tutor-delhi') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-delhi') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-delhi') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-delhi') }}">chemistry home tutors</a>. Class 12 Chemistry behaves like three
    subjects at once, numerical Physical, reaction-heavy Organic and fact-dense Inorganic, as our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 Organic and Inorganic Chemistry
    guide</a> sets out.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-jee-neet">Can a home tutor help with JEE or NEET in Delhi?</h2>
  <p>Yes, as a partner to coaching rather than a replacement. The tutor adds most value in three places:</p>
  <ul>
    <li><strong>Sorting the backlog.</strong> A weekly pass through unfinished coaching sheets and wrong test answers.</li>
    <li><strong>Using NCERT twice.</strong> Class 12 NCERT content underpins both the boards and the entrance papers, so one revision plan serves the two.</li>
    <li><strong>Fixing the weakest subject.</strong> Focused hours on the subject dragging the score down beat spreading time evenly.</li>
  </ul>
  <p>
    NTA conducts JEE Main in two sessions during the first half of the year, and those who qualify can go on to JEE
    Advanced; NEET UG is held once a year, and Biology carries half of its marks, so the NCERT Biology books need close
    reading. Take dates only from that year's official information bulletin. Our subject plans cover
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths by topic</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology with NCERT first</a>, and our piece on
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">choosing coaching or a home tutor for
    JEE</a>, written for Gurugram, applies in Delhi as well. When coaching ends late, online doubt-clearing fills the gap.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-mode">Home or online tuition in Delhi?</h2>
  <p>
    A tutor in the room suits younger children and any subject where the working matters as much as the answer, such
    as Maths and Chemistry numericals. Online lessons open up tutors nationwide, which helps most with IB, IGCSE and senior specialist papers. In Delhi, the metro settles much of the balance:
  </p>
  <ul>
    <li><strong>The first line, 2002.</strong> The first section, Tis Hazari to Shahdara, opened on 25 December 2002; since then a station has come within reach of almost every locality in this guide.</li>
    <li><strong>Interchanges widen the pool.</strong> Hauz Khas, Kalkaji Mandir, Janakpuri West, Kirti Nagar, Mayur Vihar-I and Karkarduma each sit on two lines, so a family near one can draw on two corridors of tutors.</li>
    <li><strong>The March 2026 openings.</strong> On 8 March 2026 the Pink Line became a complete ring and the Magenta Line opened from Deepali Chowk to Majlis Park, linking Rohini and Pitampura in new ways.</li>
    <li><strong>The Yamuna.</strong> A river crossing lengthens every trip, so trans-Yamuna homes often do better with a tutor from their own side, or online.</li>
  </ul>
  <p>
    A common pattern is a weekly home lesson plus a short online session for doubts, with one tutor throughout. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online tutor comparison</a> weighs
    the two approaches.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-fees">How much does a home tutor cost in Delhi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors fix
    their own fee, and three things tend to move it:
  </p>
  <ul>
    <li><strong>Stage and board.</strong> Primary lessons generally sit lower than senior-school, IB or IGCSE work.</li>
    <li><strong>Depth of specialism.</strong> JEE Advanced-level problem solving, IB Higher Level, and IA or Extended Essay guidance command the most.</li>
    <li><strong>The trip.</strong> A tutor crossing the Yamuna or changing lines at rush hour may price that in; one from your own colony or sector usually does not.</li>
  </ul>
  <p>
    You see every shortlisted fee before the demo, and nobody above your budget is suggested. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">home tuition fees in Delhi</a> covers the local picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-choose">How do you judge a tutor at the demo class?</h2>
  <p>The profile gets a tutor onto your list; the demo decides whether they stay. Five things are worth watching:</p>
  <ol>
    <li><strong>Diagnosis first.</strong> Did they find out what the student already knows before teaching?</li>
    <li><strong>The pen in the student's hand.</strong> Was your child solving problems, or mostly watching?</li>
    <li><strong>Board awareness.</strong> Can they explain how this year's paper is set for your board?</li>
    <li><strong>A short plan.</strong> What happens over the next month, and how will you see progress?</li>
    <li><strong>A commute that holds.</strong> Which station or route, and at what time, week after week?</li>
  </ol>
  <p>
    For a CGHS society or a gated DDA pocket, give the tutor's name to the guard or add it to the visitor app before
    the demo; for a plotted colony, share the block, house number, floor and a map pin. Keep lessons in a common room
    with an adult at home.  Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">checklist for parents at the demo</a> and guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-calendar">When should tuition begin in the school year?</h2>
  <p>CBSE's session opens in April, and a board year usually unfolds in five stretches:</p>
  <ul>
    <li><strong>April to June:</strong> the cleanest start, with new books and the summer break to repair last year's gaps.</li>
    <li><strong>July to September:</strong> steady weekly teaching alongside school, chapter tests, and first-term exams in many schools by September.</li>
    <li><strong>October to December:</strong> syllabus completion, with pre-boards in many schools around the turn of the year.</li>
    <li><strong>January to March:</strong> board exams after a run of sample papers; the first JEE Main session usually lands here too.</li>
    <li><strong>April to May:</strong> the second JEE Main session, then JEE Advanced and NEET UG, while IB and Cambridge candidates face their May papers.</li>
  </ul>
  <p>
    Confirm every date from official notices. A spring start gives a full year; a winter start still pays, with the weight on papers and technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-start">How do you get started in Delhi?</h2>
  <p>
    Tell us the class, board, subjects, your colony or sector with its pocket, and the times that suit you. We send two
    or three matched tutors; you choose one for a free demo class and decide afterwards. Pick your locality from the list above, look through
    <a href="{{ url('/tutors') }}">all tutors</a> or go straight to a <a href="{{ url('/demo-class') }}">free demo
    class</a>. Where no home tutor is near enough yet, an online tutor from anywhere in India can start straight away.
  </p>
  <p>
    Working on one part of the city? Our local guides cover
    <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a>,
    <a href="{{ url('/blog/dwarka-and-west-delhi-tuition-guide') }}">Dwarka and West Delhi</a>,
    <a href="{{ url('/blog/rohini-and-north-delhi-tuition-guide') }}">Rohini and North Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a>.
  </p>
  <p class="dl-note">
    Looking beyond Delhi? See home tutors in <a href="{{ url('/city/gurugram') }}">Gurugram</a>,
    <a href="{{ url('/city/noida') }}">Noida</a>, <a href="{{ url('/city/ghaziabad') }}">Ghaziabad</a> and
    <a href="{{ url('/city/faridabad') }}">Faridabad</a>, the <a href="{{ url('/city/delhi-ncr') }}">Delhi NCR</a>
    hub, or <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="dl-note">
    Teaching in Delhi? See <a href="{{ url('/tuition-jobs/delhi') }}">home tuition jobs in Delhi</a> and the colonies
    where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
