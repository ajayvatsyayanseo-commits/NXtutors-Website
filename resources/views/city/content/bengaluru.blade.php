{{--
  Long-form guide for the Bengaluru city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for parents choosing a
  home tutor in Bengaluru: every figure is either live from the database or a
  published NXTutors policy, local facts come from the cited research in
  database/seo-content/areas/bengaluru-research.json, and no school, college,
  hospital, mall, housing society or developer is named. Station names that
  carry an institution's or a person's name are described, not named.

  Metro status (1 Oct 2026): Purple, Green and Yellow lines are open; the Pink
  and Blue lines are under construction and must never be described as open.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $blAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $blA = function (string $slug, string $label) use ($blAreaSlugs) {
      return in_array($slug, $blAreaSlugs, true)
          ? '<a href="' . e(url('/city/bengaluru/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $blTutors = (int) ($hubCounts['tutors'] ?? 0);
  $blAreas = $allAreas->count();
@endphp

<article class="nx-guide bl-guide" aria-labelledby="blGuideTitle">
  <h2 id="blGuideTitle">Home tuition in Bengaluru: a parent's guide from Kengeri to Whitefield</h2>

  <p class="nx-guide__lede bl-lede">
    Bengaluru grew outwards in rings, and a tutor's journey to your door depends on which ring you live in. At the
    centre are the old Cantonment streets and the planned extensions of the pre-independence city, such as Malleshwaram
    and Basavanagudi. Around them sit the layouts of the 1940s to the 1980s, Jayanagar, Rajajinagar, JP Nagar and
    Indiranagar, mostly independent houses on numbered blocks and cross roads. Beyond the Outer Ring Road lies the newer
    city of tech parks and gated apartment towers, from Bellandur and Sarjapur Road to Whitefield and Thanisandra. Three
    metro lines now run, two more are being built, and whether your home is a house with a doorbell or a flat behind a
    security desk changes how the first visit is arranged.
  </p>
  <nav class="nx-guide__toc bl-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#bl-how">How matching works</a> ·
    <a href="#bl-zones">The ten zones</a> ·
    <a href="#bl-boards">Boards</a> ·
    <a href="#bl-classes">Classes</a> ·
    <a href="#bl-subjects">Subjects</a> ·
    <a href="#bl-jee-neet">JEE &amp; NEET</a> ·
    <a href="#bl-mode">Home or online</a> ·
    <a href="#bl-fees">Fees</a> ·
    <a href="#bl-choose">The demo class</a> ·
    <a href="#bl-calendar">The school year</a> ·
    <a href="#bl-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="bl-how">How does NXTutors find a tutor for a Bengaluru family?</h2>
  <p>
    You fill in one short request: class and board, subjects, your layout or road with its block, stage or phase, the
    free weekdays, and whether lessons should be at home, online or both. We come back with two or three tutors who fit. Every profile shows the tutor's own fee before
    you commit to anything, and the first lesson with the one you choose is a free demo. In Bengaluru, four things
    decide who makes the shortlist:
  </p>
  <ul>
    <li><strong>Which side of the Outer Ring Road?</strong> Crossing the ORR at office hours can undo a short journey, so we look first at tutors living on your side of it.</li>
    <li><strong>Is a metro line close?</strong> A family near a Purple, Green or Yellow Line station can draw on tutors from further along that line; where the nearest line is still being built, we lean on tutors who come by road from next door.</li>
    <li><strong>House or tower?</strong> In the older layouts the tutor rings the bell; in the apartment belt along the ORR, Sarjapur Road and Whitefield, the security desk needs the tutor's details before the first visit.</li>
    <li><strong>Which paper, at which level?</strong> We match class and board together, because a Karnataka SSLC student and an IB Diploma student in Chemistry need very different teachers.</li>
  </ul>
  <p>
    The demo is an ordinary lesson on this week's chapter. If the fit is wrong, we line up the next tutor, and changing
    tutor later is free.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-zones">Bengaluru, zone by zone</h2>
  <p>
    @if($blTutors > 0)
      The tutors on this page come from {{ number_format($blTutors) }} tutor profiles,
    @else
      The tutors on this page come from our tutor profiles,
    @endif
    and @if($blAreas > 0){{ number_format($blAreas) }} Bengaluru localities @else every Bengaluru locality we cover @endif
    have their own page, listing tutors in that locality first, then tutors from the rest of its zone, then online
    tutors. For planning home lessons we split the city into ten zones, starting in the south-east and ending in the
    old Cantonment:
    <a href="#bl-koramangala">Koramangala, HSR and Bellandur</a>, <a href="#bl-jayanagar">Jayanagar, JP Nagar and
    Banashankari</a>, <a href="#bl-btm">BTM, Bannerghatta Road and Electronic City</a>, <a href="#bl-indiranagar">Indiranagar
    and Old Airport Road</a>, <a href="#bl-whitefield">Whitefield, Marathahalli and KR Puram</a>, <a href="#bl-hennur">Hennur,
    Kalyan Nagar and Banaswadi</a>, <a href="#bl-hebbal">Hebbal, RT Nagar and Yelahanka</a>, <a href="#bl-malleshwaram">Malleshwaram,
    Rajajinagar and Yeshwanthpur</a>, <a href="#bl-vijayanagar">Vijayanagar, RR Nagar and Kengeri</a> and
    <a href="#bl-frazer">Frazer Town, Richmond Town and Ulsoor</a>. The groupings are ours, not corporation wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-koramangala">Koramangala, HSR and Bellandur: blocks, sectors and the ORR office belt</h3>
  <p>
    {!! $blA('koramangala', 'Koramangala') !!} was planned after independence and filled up from the late 1970s. It runs
    in eight numbered blocks, with the Inner Ring Road splitting blocks 1 to 4 from blocks 5 to 8; its inner cross roads
    keep bungalows and independent houses while 80 Feet Road carries cafes and start-up offices.
    {!! $blA('hsr-layout', 'HSR Layout') !!}, short for Hosur Sarjapur Road Layout, was begun by the Bangalore
    Development Authority in 1985 and is split into seven sectors on a grid of mains and crosses.
    {!! $blA('bellandur', 'Bellandur') !!}, between HSR Layout and its lake, was largely rural until offices spread along
    the Outer Ring Road; it is now mostly apartment complexes. {!! $blA('sarjapur-road', 'Sarjapur Road') !!} runs
    south-east from the Agara, Ibbaluru and Bellandur junction through Kasavanahalli, Carmelaram and Doddakannelli,
    lined with gated communities and villa townships.
  </p>
  <p>
    The Outer Ring Road, built by the BDA in sections between 1996 and 2002, ties the zone together. Central Silk Board,
    at its western corner, has been on the Yellow Line since August 2025. A Blue Line along the ORR, with stations planned
    at HSR Layout, Agara and Ibbaluru, is under construction and not open, so Bellandur and Sarjapur Road families rely
    on tutors who come by road. Towers need the tutor's name at the desk; Koramangala houses do not.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-jayanagar">Jayanagar, JP Nagar and Banashankari: the planned south along the Green Line</h3>
  <p>
    {!! $blA('jayanagar', 'Jayanagar') !!}, founded in 1948 and laid out by the City Improvement Trust Board that came
    before the BDA, was one of Bengaluru's first planned neighbourhoods and long marked its southern edge at South End
    Circle. Its 3rd and 4th Blocks hold the shops; the rest is independent houses on shaded streets.
    {!! $blA('basavanagudi', 'Basavanagudi') !!}, beside Lalbagh, is older still and takes its name from the Bull Temple.
    {!! $blA('jp-nagar', 'JP Nagar') !!} was developed by the BDA from the late 1970s in numbered phases, the early ones
    inside the ORR. {!! $blA('banashankari', 'Banashankari') !!} spreads across six stages from Mysore Road to Kanakapura
    Road, {!! $blA('kumaraswamy-layout', 'Kumaraswamy Layout') !!} is a BDA layout of two stages beside it, and
    {!! $blA('kanakapura-road', 'Kanakapura Road') !!} carries newer apartment projects south towards Thalaghattapura.
  </p>
  <p>
    The Green Line through Lalbagh, South End Circle, Jayanagar, Banashankari, Jaya Prakash Nagar and Yelachenahalli
    opened on 18 June 2017, and its extension along Kanakapura Road, from Konanakunte Cross to Silk Institute, followed on
    15 January 2021. The Green and Yellow lines meet at the northern end of the Yellow Line, near Jayanagar. With so many
    independent houses, the tutor usually comes straight to the door, and the metro spares them a search for parking.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-btm">BTM, Bannerghatta Road and Electronic City: the Yellow Line corridor</h3>
  <p>
    {!! $blA('btm-layout', 'BTM Layout') !!} is named after the villages of Byrasandra, Tavarekere and Madiwala, and the ORR
    separates its 1st Stage from the later ones; houses, low-rise flats and a large population of students and young
    professionals share its streets. {!! $blA('bannerghatta-road', 'Bannerghatta Road') !!} leaves Hosur Road near Adugodi and heads south past
    {!! $blA('arekere', 'Arekere') !!}, Hulimavu and Gottigere, mixing older layouts with gated towers.
    {!! $blA('bommanahalli', 'Bommanahalli') !!} lines Hosur Road between Silk Board and Electronic City;
    {!! $blA('begur', 'Begur') !!}, off Hosur Road, holds a temple inscription that is the oldest known reference to a place
    called Bengaluru; and {!! $blA('electronic-city', 'Electronic City') !!} began in 1978 as a state-run industrial
    township, now organised in phases around IT campuses and large apartment communities.
  </p>
  <p>
    The Yellow Line opened on 10 August 2025, with passengers from the next day, and runs sixteen stations to Bommasandra,
    among them BTM Layout, Central Silk Board, Bommanahalli, Hongasandra, Hosa Road and Electronic City. Above Hosur Road,
    the elevated expressway to Electronic City has carried through traffic since 22 January 2010. The Pink Line's
    elevated stretch on Bannerghatta Road is built but not yet open, so for now Arekere families use road tutors or the
    Yellow Line plus an auto.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-indiranagar">Indiranagar and Old Airport Road: where the metro began</h3>
  <p>
    {!! $blA('indiranagar', 'Indiranagar') !!} was formed as a BDA layout in the late 1970s, a quiet suburb of large houses
    that has since gathered busy commercial streets along 100 Feet Road and 80 Feet Road; independent houses still stand
    among apartment buildings and builder floors. {!! $blA('domlur', 'Domlur') !!} is older: it belonged to the Civil and
    Military Station until 1949 and keeps a Chola-era temple. Its flyover, where Old Airport Road, 100 Feet Road and the
    Inner Ring Road meet, opened on 12 July 2006. {!! $blA('cv-raman-nagar', 'CV Raman Nagar') !!}, sometimes called
    Greater Indiranagar, lies east towards Baiyappanahalli and mixes a research staff township with houses and gated
    complexes.
  </p>
  <p>
    Old Airport Road is named for the HAL airport, which stopped scheduled commercial flights on 24 May 2008. Namma
    Metro's first section, the Purple Line from the city centre to Baiyappanahalli, opened here on 20 October 2011, with
    two stations inside Indiranagar. Domlur has none of its own, so metro tutors finish by auto or use the Domlur bus
    terminus. Apartment gates may keep a visitor log; houses are a doorstep call.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-whitefield">Whitefield, Marathahalli and KR Puram: the eastern tech belt</h3>
  <p>
    {!! $blA('whitefield', 'Whitefield') !!} began in 1882 as a settlement of the Eurasian and Anglo-Indian Association
    and stayed a village until an IT park arrived in the late 1990s; today it is apartment towers, villa communities and
    houses. {!! $blA('brookefield', 'Brookefield') !!}, another late-nineteenth-century settlement, grew with the offices
    on ITPL Road. {!! $blA('marathahalli', 'Marathahalli') !!} sits where the ORR crosses Old Airport Road, dense with
    flats and builder floors. {!! $blA('mahadevapura', 'Mahadevapura') !!}, once a separate municipal council, lies
    between KR Puram and Hoodi, and {!! $blA('kr-puram', 'KR Puram') !!}, headquarters of Bengaluru East taluk, is where
    Old Madras Road meets the ORR beside a railway station spanned by a cable-stayed bridge opened in 2003.
  </p>
  <p>
    The Purple Line reached Whitefield (Kadugodi) on 26 March 2023, and the Baiyappanahalli to KR Puram gap closed on 9
    October 2023, giving one line from the centre through Singayyanapalya, Hoodi, Kundalahalli and Hopefarm Channasandra.
    Marathahalli has no station yet: its Blue Line stop is under construction. Nearly every home here has a security
    desk, and some ask for photo ID on the first visit, so share it in advance.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-hennur">Hennur, Kalyan Nagar and Banaswadi: north-east layouts awaiting the metro</h3>
  <p>
    {!! $blA('hennur', 'Hennur') !!}, just outside the ORR, has grown from a quiet suburb into apartments and villa
    communities along Hennur Road, with houses and plots in the layouts behind. {!! $blA('kalyan-nagar', 'Kalyan Nagar') !!}
    is a settled colony of independent houses and builder floors, often taken to include Chelekere and
    {!! $blA('hrbr-layout', 'HRBR Layout') !!}, whose numbered blocks and wide roads make addresses easy to find.
    {!! $blA('banaswadi', 'Banaswadi') !!}, once a village on the city's edge, is now houses, bungalows and flats around
    busier main streets. {!! $blA('thanisandra', 'Thanisandra') !!}, next to Hebbal, Nagawara and Kammanahalli on the route
    north, has filled with gated apartment complexes.
  </p>
  <p>
    Banaswadi railway station, in Maruthi Sevanagar, sits on the line linking Yesvantpur and Baiyappanahalli, and the
    nearest open metro stations are Baiyappanahalli and Benniganahalli on the Purple Line. The Blue Line from KR Puram
    towards the airport, with stops planned at Horamavu, HRBR Layout, Kalyana Nagara and Nagawara, is still being built,
    so tutors here come by bus, two-wheeler or cab. Houses are a doorbell; Thanisandra towers want a name at the desk.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-hebbal">Hebbal, RT Nagar and Yelahanka: the airport road north</h3>
  <p>
    {!! $blA('hebbal', 'Hebbal') !!} is known for its lake and its flyover, where the Outer Ring Road meets Bellary Road
    (NH 44); every main road to the airport passes through it, and homes range from high-rise societies to older houses.
    {!! $blA('rt-nagar', 'RT Nagar') !!} is a long-settled locality of two blocks, with houses and builder floors, often
    shops below and families above. {!! $blA('yelahanka', 'Yelahanka') !!} is older than Bengaluru itself: its Old Town
    sits beside Yelahanka New Town, planned by the Karnataka Housing Board in the early 1980s, and its Air Force Station
    hosts the biennial Aero India show.
  </p>
  <p>
    The airport at Devanahalli opened in May 2008 and is reached along NH 44 through Hebbal and Yelahanka. No metro runs
    in this zone yet: the Blue Line stations at Hebbala, Kodigehalli, Jakkuru Cross and Yelahanka are under construction.
    Yelahanka Junction is a railway junction and Hebbal has a station too, but most tutors arrive by road. Because
    airport traffic funnels through the flyover, a tutor who lives on your side of it is the steadier weekday choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-malleshwaram">Malleshwaram, Rajajinagar and Yeshwanthpur: the north-west on the Green Line</h3>
  <p>
    {!! $blA('malleshwaram', 'Malleshwaram') !!} was laid out in 1889 around Sampige Road and Margosa Road, and its older
    houses are slowly giving way to small apartment blocks. {!! $blA('sadashivanagar', 'Sadashivanagar') !!}, built in
    the 1960s and 1970s on former palace gardens once called Palace Orchards, is large houses on wide, quiet roads.
    {!! $blA('rajajinagar', 'Rajajinagar') !!} was inaugurated on 3 July 1949 as a planned suburb with separate housing
    and industrial areas, in numbered blocks along Chord Road. {!! $blA('mahalakshmi-layout', 'Mahalakshmi Layout') !!},
    sometimes called Temple Layout, is mostly houses and floors on layout plots, and
    {!! $blA('yeshwanthpur', 'Yeshwanthpur') !!} grew around a railway junction commissioned in 1881 and a large wholesale
    produce market on Tumkur Road.
  </p>
  <p>
    The Green Line's Reach 3, from Sampige Road through Srirampura, Rajajinagar, Mahalakshmi and Sandal Soap Factory to
    Yeshwanthpur, opened on 1 March 2014, linking the Tumkur Road suburbs with the centre and, later, the south. Most
    visits here are to a house or small building with no desk to clear; Sadashivanagar homes often have their own guard,
    and Yeshwanthpur complexes may register visitors.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-vijayanagar">Vijayanagar, RR Nagar and Kengeri: west along Mysore Road</h3>
  <p>
    {!! $blA('basaveshwaranagar', 'Basaveshwaranagar') !!} grew in the 1970s and 1980s as an extension first called West of
    Chord Road, and its hilly streets hold houses and small apartment buildings. {!! $blA('vijayanagar', 'Vijayanagar') !!},
    between Mysore Road and Magadi Road, takes in Hampinagar and Attiguppe, and {!! $blA('nagarbhavi', 'Nagarbhavi') !!}
    has a 2nd Stage laid out by the BDA in numbered blocks. {!! $blA('rr-nagar', 'RR Nagar') !!}, or Rajarajeshwari Nagar,
    is entered through an arch on Mysore Road and mixes older layouts with newer apartment projects.
    {!! $blA('kengeri', 'Kengeri') !!} began as a BDA satellite town and reaches the NICE Road and the Bengaluru–Mysuru
    Expressway.
  </p>
  <p>
    The Purple Line's western run opened in stages: Hosahalli, Vijayanagar, Attiguppe and Deepanjali Nagar on 16 November
    2015; Rajarajeshwari Nagar, Pattanagere and the two Kengeri stations on 30 August 2021; and the Challaghatta terminus
    on 9 October 2023. Mysore Road has been part of NH-275 since the NHAI took it over in 2014. Plotted layouts mean a doorbell and easy two-wheeler
    parking; the newer RR Nagar and Kengeri complexes add a gate list.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="bl-frazer">Frazer Town, Richmond Town and Ulsoor: the old Cantonment</h3>
  <p>
    {!! $blA('frazer-town', 'Frazer Town') !!}, officially Pulakeshi Nagar, was founded in 1906, and Bangalore East railway
    station lies on its edge. {!! $blA('cooke-town', 'Cooke Town') !!}, laid out around 1900, keeps parks and quiet lanes,
    though many bungalows have become apartment buildings. {!! $blA('richmond-town', 'Richmond Town') !!} was established in
    1883 as part of the Bangalore Cantonment and now mixes older houses with guarded apartment blocks close to the central
    shopping streets. {!! $blA('ulsoor', 'Ulsoor') !!}, officially Halasuru, is one of the city's oldest neighbourhoods; a
    British military station was set up there in 1807, and Halasuru Lake is the only surviving tank built by the Gowda
    rulers.
  </p>
  <p>
    Halasuru and Trinity stations came with the first Purple Line section on 20 October 2011, and the underground
    city-centre stretch followed on 30 April 2016, which puts Richmond Town within an auto ride of an open station. The
    Pink Line's underground Pottery Town station, meant to serve Frazer Town and Cooke Town, is under construction, so
    tutors come by road or by Purple Line and auto. Evening shopping streets fill up, so an afternoon slot helps.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-boards">Which boards do Bengaluru tutors teach?</h2>
  <p>
    Bengaluru families sit four kinds of examination, and a tutor who knows one board well beats one who claims all four.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Karnataka state board</h3>
  <p>
    Many children in the city study under the Karnataka state board, which holds the SSLC examination at the end of
    Class 10, and then the PUC, or pre-university course, across Classes 11 and 12. A tutor for these years should work
    from the state textbooks, know how the board frames its questions and plan revision around the school's own
    timetable. Take the scheme and dates only from the board's official notices.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers rest on the NCERT textbooks, and a growing share of each paper tests whether a student can apply a
    concept: case-based passages, assertion and reason items, and problems in unfamiliar settings. A good CBSE tutor
    teaches the chapter thoroughly first, practises with the board's sample papers and marking schemes, and trains
    students to show each step of their working.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    The CISCE examinations, ICSE after Class 10 and ISC after Class 12, cover a wide syllabus and reward long,
    well-organised written answers, with prescribed texts in English. The hard part is usually breadth, so the tutor
    keeps a revision loop that returns to every chapter and sets regular timed answers, while keeping an eye on each
    subject's project work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    The IB Diploma mixes final exams with internal assessment, and its Mathematics is offered as Analysis and
    Approaches or Applications and Interpretation, at Standard or Higher Level. A tutor may discuss a student's
    Internal Assessment or Extended Essay but must not write it. For Cambridge IGCSE, command words, the correct tier and
    marking against official schemes matter as much as content.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-classes">What does each stage of school need from a tutor?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    Younger children need routines as much as syllabus: reading with understanding, quick mental sums, fractions,
    early algebra and neat written work, usually in one or two lessons a week.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is where Maths and Science first get harder, and whatever is left shaky there resurfaces in the Class 10
    board year, whether that is CBSE, ICSE or the SSLC. Work chapter by chapter, test each one, then move to full papers
    in the last months. See our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths
    preparation plan</a> and <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a>.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Senior years, including the two PUC years, call for a subject specialist rather than a generalist. Physics and Maths
    trouble science students most, Accountancy trouble commerce students. Our
    <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> and
    <a href="{{ url('/blog/cbse-class-12-maths-calculusalgebra') }}">guide to Class 12 calculus and algebra</a> set out
    the senior-year work.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-subjects">Which subjects can a Bengaluru tutor take on?</h2>
  <p>
    NXTutors tutors teach Mathematics, Physics, Chemistry, Biology, English, Computer Science, Accountancy, Economics,
    Business Studies and Hindi, and many take every subject at primary level. For the senior sciences, Bengaluru has
    dedicated pages for <a href="{{ url('/maths-home-tutor-bengaluru') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-bengaluru') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-bengaluru') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-bengaluru') }}">chemistry home tutors</a>. Senior
    Chemistry splits into numerical physical chemistry, reaction-led organic and memory-heavy inorganic, a split our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">Class 12 organic and inorganic chemistry guide</a>
    works through. IB families may find our <a href="{{ url('/blog/-ib-math-aaai-slhl') }}">IB Maths AA and AI guide</a>
    and <a href="{{ url('/blog/-ib-physics-slhl-iaee') }}">IB Physics SL and HL guide</a> useful.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-jee-neet">Can a home tutor help with JEE or NEET in Bengaluru?</h2>
  <p>
    Yes, alongside coaching rather than instead of it. A home tutor earns their place in three ways:
  </p>
  <ul>
    <li><strong>Clearing what coaching leaves behind.</strong> Each week, go through the unfinished sheets and the questions got wrong in the last test.</li>
    <li><strong>One revision plan for two exams.</strong> Board papers and entrance tests both lean on the Class 11 and 12 NCERT content, so one plan can serve both, whether the board is CBSE or the state PUC.</li>
    <li><strong>Time where marks are lost.</strong> Extra hours on the weakest subject do more than an even split across three.</li>
  </ul>
  <p>
    JEE Main is run by NTA in two sessions in the first half of the year, and qualifiers can sit JEE Advanced; NEET UG is
    held once a year, with Biology worth half the paper. Rely only on that year's official information bulletin for
    dates. Our topic plans cover <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a>,
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a> and
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NEET Biology from NCERT</a>, and our comparison of
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor for JEE</a>,
    written for Gurugram, applies here too.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-mode">Home or online tuition in Bengaluru?</h2>
  <p>
    A tutor at the table helps young children most, and any subject where the working counts as much as the answer.
    Online lessons open up tutors across India, useful for IB, IGCSE and advanced senior papers. Here, the metro map
    decides a lot:
  </p>
  <ul>
    <li><strong>Purple Line, east to west.</strong> Open from 20 October 2011 in its first section and continuous from Whitefield (Kadugodi) to Challaghatta since 9 October 2023, it links Whitefield, KR Puram, Indiranagar, Ulsoor, Vijayanagar, RR Nagar and Kengeri.</li>
    <li><strong>Green Line, north-west to south.</strong> Yeshwanthpur, Rajajinagar and Malleshwaram since 1 March 2014; Jayanagar, Banashankari and JP Nagar since 18 June 2017; Kanakapura Road since 15 January 2021.</li>
    <li><strong>Yellow Line, south-east.</strong> Open since August 2025, it serves BTM Layout, Silk Board, Bommanahalli and Electronic City.</li>
    <li><strong>Pink and Blue lines, still being built.</strong> Bannerghatta Road, the Cantonment, the ORR from Silk Board to KR Puram and the airport corridor through Hebbal wait for these, so homes there depend on tutors nearby, or online.</li>
  </ul>
  <p>
    Many families keep one tutor for a weekly home visit plus a short online doubt session. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home and online tutor comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-fees">What does a home tutor cost in Bengaluru?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor sets their own
    fee, and in practice it moves with three things:
  </p>
  <ul>
    <li><strong>The class and board.</strong> Primary work generally costs less than senior-school, PUC, IB or IGCSE teaching.</li>
    <li><strong>How specialised the work is.</strong> JEE Advanced problem solving, IB Higher Level and help with an IA or Extended Essay sit highest.</li>
    <li><strong>The journey.</strong> A tutor crossing the ORR or the Hebbal flyover at peak time may allow for it; one from your own layout usually will not.</li>
  </ul>
  <p>
    You see each shortlisted tutor's fee before the demo, and we do not suggest anyone above the budget you give. Our
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> sets out fees by class and subject, and
    <a href="{{ url('/blog/home-tuition-fees-bengaluru') }}">home tuition fees in Bengaluru</a> looks at the city in
    detail.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-choose">What should you look for in the demo class?</h2>
  <p>A profile earns a tutor a place on the shortlist; the demo shows whether they should keep it. Watch for five things:</p>
  <ol>
    <li><strong>Questions before teaching.</strong> Did the tutor check what your child already knew?</li>
    <li><strong>Who did the work.</strong> Was your child writing and solving, or mostly listening?</li>
    <li><strong>Knowledge of the paper.</strong> Could the tutor explain how your board sets and marks this year's exam?</li>
    <li><strong>A plan you can follow.</strong> What will the next four weeks cover, and how will you see progress?</li>
    <li><strong>A journey that lasts.</strong> Which route and which time, and will it still work in the monsoon months?</li>
  </ol>
  <p>
    For an apartment complex, add the tutor to the visitor app or give the name to security before the demo; for a
    house in a layout, send the stage or block, the cross and main road numbers, and a map pin. Keep lessons in a shared
    room with an adult at home. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist
    for parents</a> and guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>
    may help.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-calendar">When in the school year should tuition start?</h2>
  <p>The CBSE session begins in April, and most board years in the city pass through five phases:</p>
  <ul>
    <li><strong>April to June:</strong> new books and the summer break, the easiest time to close last year's gaps.</li>
    <li><strong>July to September:</strong> regular weekly lessons beside school, chapter tests, and first-term exams in many schools.</li>
    <li><strong>October to December:</strong> finishing the syllabus, with preliminary or pre-board exams in many schools around the new year.</li>
    <li><strong>January to March:</strong> sample papers and board exams; the first JEE Main session usually falls here.</li>
    <li><strong>April to May:</strong> the second JEE Main session, JEE Advanced and NEET UG, and the May papers for IB and Cambridge students.</li>
  </ul>
  <p>
    The Karnataka board sets its own SSLC and PUC timetables each year; confirm every date from official notices. A
    spring start gives a full year; a winter start still helps, with the focus on papers and technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="bl-start">How do you get started in Bengaluru?</h2>
  <p>
    Send us the class, board and subjects, your layout or road with its block, stage or phase, and the times that work.
    We send two or three matched tutors; you pick one for a free demo and decide after it. Open your locality from the
    zones above, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a <a href="{{ url('/demo-class') }}">free
    demo class</a> directly. If no home tutor is close enough yet, an online tutor from anywhere in India can begin
    straight away.
  </p>
  <p>
    Focusing on one part of the city? Our area guides cover
    <a href="{{ url('/blog/south-bengaluru-tuition-guide') }}">South Bengaluru</a>,
    <a href="{{ url('/blog/east-bengaluru-tuition-guide') }}">East Bengaluru</a>,
    <a href="{{ url('/blog/north-bengaluru-tuition-guide') }}">North Bengaluru</a> and
    <a href="{{ url('/blog/west-and-central-bengaluru-tuition-guide') }}">West and Central Bengaluru</a>.
  </p>
  <p class="bl-note">
    Elsewhere in the south? See home tutors in <a href="{{ url('/city/chennai') }}">Chennai</a>,
    <a href="{{ url('/city/hyderabad') }}">Hyderabad</a>, <a href="{{ url('/city/coimbatore') }}">Coimbatore</a> and
    <a href="{{ url('/city/kochi') }}">Kochi</a>, or browse <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="bl-note">
    Teaching in Bengaluru? See <a href="{{ url('/tuition-jobs/bengaluru') }}">home tuition jobs in Bengaluru</a> and the
    localities where families are looking for tutors.
  </p>
  </section>

  </div>
</article>
