{{--
  Long-form guide for the Patna city page (included by city/show.blade.php
  when a file named after the city slug exists). Written for Patna parents
  choosing a home tutor, not for search engines: every figure here is either
  live from the database or a published NXTutors policy, local facts come from
  the cited research in database/seo-content/areas/patna-research.json, and no
  school, college, coaching institute, society, developer, hospital or mall is
  named.

  Area links render only when that area page exists and is active, so renaming
  or disabling an area in Super Admin cannot leave a broken link here.
--}}
@php
  $ptAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $ptA = function (string $slug, string $label) use ($ptAreaSlugs) {
      return in_array($slug, $ptAreaSlugs, true)
          ? '<a href="' . e(url('/city/patna/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
  $ptTutors = (int) ($hubCounts['tutors'] ?? 0);
  $ptAreas = $allAreas->count();
@endphp

<article class="nx-guide pt-guide" aria-labelledby="ptGuideTitle">
  <h2 id="ptGuideTitle">Home tuition in Patna: a parent's guide from Digha to Patna City</h2>

  <p class="nx-guide__lede pt-lede">
    Patna is a long city laid along the south bank of the Ganga. At its western end sit Danapur and its cantonment;
    Bailey Road carries the apartment belt east towards the old civil station at Bankipur and Gandhi Maidan; the colonies
    of Boring Road and Patliputra fill the ground between Bailey Road and the river; Kankarbagh and Rajendra Nagar
    spread south-east of the railway; and Ashok Rajpath runs on to the lanes of Patna City. It is also a city where
    school and entrance preparation run side by side, so for many teenagers the tutor's hour has to fit between a
    school day and a coaching batch. Where you live, and when your child is actually free, decide which tutor can
    keep coming.
  </p>
  <nav class="nx-guide__toc pt-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#pt-how">How matching works</a> ·
    <a href="#pt-zones">The five zones</a> ·
    <a href="#pt-boards">Boards</a> ·
    <a href="#pt-classes">Classes</a> ·
    <a href="#pt-subjects">Subjects</a> ·
    <a href="#pt-jee-neet">JEE &amp; NEET</a> ·
    <a href="#pt-mode">Home or online</a> ·
    <a href="#pt-fees">Fees</a> ·
    <a href="#pt-choose">The demo class</a> ·
    <a href="#pt-calendar">The school year</a> ·
    <a href="#pt-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="pt-how">How does NXTutors match a Patna family with a tutor?</h2>
  <p>
    It starts with a single request. Write down the class and board, the subjects that need help, your locality with a
    landmark, the free slots once school and any coaching are over, and whether you want lessons at home, online or a
    mix of the two, plus a monthly budget. From that we suggest two or three tutors. Each tutor's fee is visible before
    you meet, and the opening lesson with whichever one you pick is a free demo. For Patna, the shortlist turns on
    four questions:
  </p>
  <ul>
    <li><strong>Which side of the city?</strong> Patna stretches a long way east to west, so a tutor already teaching along your stretch of Bailey Road, or in your part of Kankarbagh, is easier to keep than one crossing from the far end.</li>
    <li><strong>When is the student truly free?</strong> If a coaching batch fills the afternoon, the realistic slot may be early morning or late evening; we only suggest tutors who can take that hour.</li>
    <li><strong>Which board, and in which language?</strong> BSEB, CBSE, ICSE and ISC, and IB or IGCSE each ask for different preparation, and some students are comfortable in Hindi, some in English, many in a mix.</li>
    <li><strong>House, flat or township?</strong> A house in a colony lane means a doorbell; an apartment building or gated township means a guard who wants the tutor's name first.</li>
  </ul>
  <p>
    Treat the demo as an ordinary lesson on whatever the class is doing that week. If the fit is wrong, another tutor
    from the shortlist is arranged, and changing tutor later is free as well.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-zones">Patna, zone by zone</h2>
  <p>
    @if($ptTutors > 0)
      Tutors shown for Patna come from {{ number_format($ptTutors) }} tutor profiles,
    @else
      Tutors shown for Patna come from our tutor profiles,
    @endif
    and @if($ptAreas > 0){{ number_format($ptAreas) }} Patna localities @else each Patna locality @endif
    have a page of their own. On each, tutors who live in that locality are listed first, then tutors from the same
    zone, then tutors across the city, then online tutors. To plan home lessons we split the city into five zones,
    working from the north-west round to the south-west:
    <a href="#pt-boring">Boring Road and Patliputra</a>, <a href="#pt-bailey">Bailey Road and Danapur</a>,
    <a href="#pt-kankarbagh">Kankarbagh and Rajendra Nagar</a>, <a href="#pt-old">Gandhi Maidan, Ashok Rajpath and Old
    Patna</a> and <a href="#pt-south">Anisabad, Gardanibagh and Phulwari</a>. These are our own planning groups, not
    municipal wards.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pt-boring">Boring Road and Patliputra: colonies between the city centre and the river</h3>
  <p>
    {!! $ptA('boring-road', 'Boring Road') !!} was once lined with officials' houses and became the city's
    fashionable address before shops, offices and coaching classes took over the frontage; most homes now lie in the
    colonies a turn off it. {!! $ptA('sri-krishna-puri', 'Sri Krishna Puri') !!} and North Sri Krishna Puri are
    mostly flats with older houses in the inner lanes, and {!! $ptA('kidwaipuri', 'Kidwaipuri') !!}, also called P&amp;T
    Colony, is small and well planned. {!! $ptA('boring-canal-road', 'Boring Canal Road') !!} runs east and west
    through Buddha Colony and Anandpuri, and {!! $ptA('shivpuri', 'Shivpuri') !!} is named after the Shiv temple at its
    entrance. {!! $ptA('patliputra-colony', 'Patliputra Colony') !!} was formed in 1954 as a cooperative housing
    society for government officials and is still run by it; {!! $ptA('shastri-nagar', 'Shastri Nagar') !!} is flats
    and builder floors near Bailey Road; and {!! $ptA('digha', 'Digha') !!}, once farmland on the Ganga, now mixes old
    houses with high-rise blocks.
  </p>
  <p>
    No metro reaches this zone yet. Rail comes in at Digha Bridge Halt, opened in November 2017 beside the Digha-Sonpur
    rail-road bridge, and the Ganga riverfront expressway, whose first phase opened from Digha on 24 June 2022, lets
    tutors skirt the inner roads. Most visits are to a house or a low-rise building, so arrival is at the door or at a
    single gate. The Boring Road crossing fills up in the evening, which makes a tutor from the next colony the
    simplest match.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pt-bailey">Bailey Road and Danapur: the apartment corridor to the cantonment</h3>
  <p>
    {!! $ptA('bailey-road', 'Bailey Road') !!} runs from near the Income Tax roundabout through the administrative
    quarter and then past a long belt of two- and three-bedroom flats all the way to Danapur.
    {!! $ptA('raja-bazar', 'Raja Bazar') !!} is small complexes by local builders.
    {!! $ptA('rukanpura', 'Rukanpura') !!}, in the West End, holds Patliputra Junction, the fourth terminal of the
    Danapur railway division. {!! $ptA('saguna-more', 'Saguna More') !!} has grown into a hub of three-bedroom flats,
    with large gated townships beside smaller buildings. {!! $ptA('danapur', 'Danapur') !!} keeps its own municipal
    council and a cantonment set up in 1765, and next door {!! $ptA('khagaul', 'Khagaul') !!} is an old town whose
    station, confusingly, is Danapur railway station, headquarters of the division on the Delhi-Kolkata main line.
  </p>
  <p>
    The Red Line of Patna Metro is being built beneath Bailey Road, with planned stations at Danapur, Saguna Mor, RPS
    Mor, Patliputra, Raja Bazar, Patna Zoo, Vikas Bhawan and Vidyut Bhawan; none is open yet, so for now tutors ride or
    take an auto. Townships and larger buildings register visitors, so ask about a standing pass. Cantonment homes have
    their own entry rules. Office hours are the slowest on this road; later evening slots, or a tutor from the same
    stretch, work better.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pt-kankarbagh">Kankarbagh and Rajendra Nagar: the metro side of the city</h3>
  <p>
    {!! $ptA('kankarbagh', 'Kankarbagh') !!} is one of Patna's largest residential colonies, running from Ashok Nagar
    to Kumhrar, where the excavated remains of ancient Pataliputra include a Mauryan hall of eighty pillars. It mixes
    houses, builder floors and newer apartment buildings around busy markets on the main road and the 90 Feet road.
    {!! $ptA('rajendra-nagar', 'Rajendra Nagar') !!} is a planned colony set out on numbered roads with parks between
    the blocks, served by Rajendra Nagar Terminal, opened in 2003 to take load off Patna Junction.
    {!! $ptA('kadamkuan', 'Kadamkuan') !!} is central and crowded, with flats, floors and shops close to the station,
    and {!! $ptA('bhootnath-road', 'Bhootnath Road') !!} runs through the Bahadurpur colony between the Old and
    New Bypass roads.
  </p>
  <p>
    This is the only zone with a working metro. The Blue Line's first section, Bhootnath to Zero Mile and the
    Patliputra Bus Terminal, opened to the public on 7 October 2025, and on 2 July 2026 trains were extended to Malahi
    Pakri, at the roundabout on the 90 Feet road; they pass Khemnichak without stopping until that station is
    finished. The underground section towards Rajendra Nagar and Patna Junction is still under construction. Road
    numbers make Rajendra Nagar easy to find; in Kadamkuan, send a lane landmark.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pt-old">Gandhi Maidan, Ashok Rajpath and Old Patna: the historic spine along the Ganga</h3>
  <p>
    {!! $ptA('bankipur', 'Bankipur') !!} grew as the colonial civil station after 1765 around the ground now called
    Gandhi Maidan, with Golghar, the granary of 1784 to 1786, close by; the commercial blocks to its south hold flats
    among the hotels and shops. {!! $ptA('ashok-rajpath', 'Ashok Rajpath') !!} runs from near Golghar parallel to the
    river as far as Didarganj, colleges and institutions on its northern side and old houses, markets and places of
    worship on its southern side. At its far end, {!! $ptA('patna-city', 'Patna City') !!}, the old eastern town, is a
    trading centre of neighbourhoods such as Jhauganj, Marufganj and Hajiganj, and a sacred city for Sikhs.
  </p>
  <p>
    Patna Junction, opened in 1862 as Bankipore Junction, anchors the west of the zone, and Patna Sahib station serves
    the old city. The Ganga riverfront expressway, complete from Digha to Didarganj since April 2025, meets Ashok
    Rajpath at nine points, so tutors from the north-west can cross quickly. Underground Blue Line stations at Gandhi
    Maidan and Akashvani are under construction. Ashok Rajpath is busiest when colleges open and close; in the old
    city's lanes a two-wheeler or e-rickshaw beats a car.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h3 id="pt-south">Anisabad, Gardanibagh and Phulwari: the growing south-west</h3>
  <p>
    {!! $ptA('anisabad', 'Anisabad') !!} is a developing neighbourhood around a busy roundabout, with apartment
    buildings of one to four bedrooms, plotted homes and builder floors. {!! $ptA('gardanibagh', 'Gardanibagh') !!},
    close to the Secretariat area and bordered by Kidwaipuri, Jakkanpur and Rajbanshi Nagar, is established housing
    where a state project of 752 flats for officers was taken up from 2020. {!! $ptA('phulwari-sharif', 'Phulwari
    Sharif') !!}, known for its Sufi heritage and historic shrines, is among the fastest-growing parts of the
    metropolitan region, with National Highway 139 running through it and new apartment buildings spreading well
    beyond the old core.
  </p>
  <p>
    Phulwari Sharif has its own station on the Howrah-Delhi main line, and Patna Junction is close to Gardanibagh.
    There is no metro here yet. An elevated four-lane road from the Anisabad roundabout through Phulwari has been
    planned, and the elevated corridor towards Digha already helps tutors travelling north. Government housing
    campuses and newer buildings check visitors at the gate; plotted lanes allow doorstep arrival. The roundabout is
    slowest at peak hours, so a tutor from the same side of it is the steadiest choice.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-boards">Which boards do Patna tutors teach?</h2>
  <p>
    Patna students sit the Bihar board, CBSE, CISCE's ICSE and ISC, and a smaller number follow IB or Cambridge IGCSE.
    A tutor who is strong on one board is not automatically right for another, so board and class are matched
    together.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Bihar School Examination Board (BSEB)</h3>
  <p>
    The Bihar School Examination Board conducts the state's Class 10 (matric) and Class 12 (intermediate)
    examinations. A tutor for a BSEB student should work from the board's prescribed textbooks and its own model and
    past papers, and should be comfortable teaching in the language the student reads most easily. Formats and dates
    change, so take them only from the board's official website.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    CBSE papers are rooted in the NCERT textbooks, and a growing share of each paper tests whether a student can apply
    an idea to an unfamiliar situation. For a Patna teenager also preparing for JEE or NEET this is useful: careful
    NCERT work serves both goals. The gap entrance students usually show is in writing: full, stepwise board answers
    after months of objective practice.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    ICSE at Class 10 and ISC at Class 12 set long written papers over a wide syllabus, with literature texts in
    English. The challenge is covering every chapter and keeping answers precise, so a tutor should plan revision in
    rounds, set timed writing and keep an eye on each subject's project work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and IGCSE</h3>
  <p>
    Families following the IB Diploma or Cambridge IGCSE, often after a move from another city, usually find the
    closest specialist online. IB assesses coursework as well as final papers, and a tutor may guide an Internal
    Assessment or Extended Essay but never write it; IGCSE rewards past-paper practice against the official mark
    scheme.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-classes">What should a tutor focus on, class by class?</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Classes 1 to 8</h3>
  <p>
    The early years are about fluent reading, secure arithmetic and neat, complete written work. For a child who
    speaks Hindi, Bhojpuri, Magahi or Maithili at home and studies in English, a few minutes of reading aloud in each
    lesson helps more than extra worksheets. Before any foundation course for entrance exams, make sure school maths
    up to Class 8 is genuinely understood.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10</h3>
  <p>
    Class 9 is often when a Patna student first joins a coaching batch, and the same year school Maths and Science get
    harder. The tutor's job is to keep the school syllabus moving so the matric or Class 10 board year is not squeezed.
    Our <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">Class 10 Maths preparation plan</a> and
    <a href="{{ url('/blog/cbse-class-10-science-notes') }}">Class 10 Science notes</a> follow the NCERT chapters.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12</h3>
  <p>
    Class 11 is the hardest step: the syllabus jumps, and much of the entrance syllabus is taught in it. A student who
    loses Class 11 Physics or Maths rarely recovers it in Class 12, so pick one specialist per difficult subject. See
    our <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12 Physics strategies</a> for the board
    year.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-subjects">Which subjects can a Patna tutor cover?</h2>
  <p>
    Physics, Chemistry, Mathematics and Biology are what most Patna parents ask about first, especially from Class 9.
    Tutors on NXTutors also teach English, Hindi, Sanskrit, Social Science, Computer Science, Accountancy, Economics
    and Business Studies, and many cover every subject for primary classes. Patna has its own pages for
    <a href="{{ url('/maths-home-tutor-patna') }}">maths home tutors</a>,
    <a href="{{ url('/science-home-tutor-patna') }}">science home tutors</a>,
    <a href="{{ url('/physics-home-tutor-patna') }}">physics home tutors</a> and
    <a href="{{ url('/chemistry-home-tutor-patna') }}">chemistry home tutors</a>.
  </p>
  <p>
    In Maths, find where understanding first broke, even if that is two classes back. In Physics, reason from the idea
    rather than a formula sheet. Chemistry needs three habits at once, numericals for Physical, reaction patterns for
    Organic and close reading for Inorganic, as our
    <a href="{{ url('/blog/cbse-class-12-chemistry-organicinorganic') }}">guide to Class 12 Organic and Inorganic
    Chemistry</a> explains. A student moving from Hindi-medium study into English-medium books needs a tutor who
    teaches technical words in both languages and then lets the Hindi fall away; our
    <a href="{{ url('/blog/spoken-english-for-students') }}">spoken English guide for students</a> adds practice at
    home.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-jee-neet">Can a home tutor help with JEE or NEET in Patna?</h2>
  <p>
    Yes, and in Patna that usually means working next to a coaching batch rather than instead of it. Many families
    weigh sending a sixteen-year-old to another city against keeping them at home with local coaching and a tutor.
    Staying home works when the tutor has a defined job:
  </p>
  <ul>
    <li><strong>A weekly clean-up.</strong> Go through the coaching sheets and the last test, and clear every question left half-understood before the next batch moves on.</li>
    <li><strong>One plan for boards and entrance.</strong> Class 12 NCERT sits under both the board papers and the entrance syllabus, so revision can be planned to serve the two together.</li>
    <li><strong>Hours where the marks are lost.</strong> Concentrated time on the single weakest subject is worth more than extra hours spread across all three.</li>
    <li><strong>A fixed slot around the batch.</strong> Early mornings, late evenings or a weekend block, agreed once and kept.</li>
  </ul>
  <p>
    NTA holds JEE Main in two sessions in the first half of the year, and candidates who qualify may go on to JEE
    Advanced. NEET UG is held once a year, and Biology makes up half of its marks, so NCERT Biology deserves line-by-line
    reading. Dates come only from that year's official information bulletin. Our topic plans for
    <a href="{{ url('/blog/jee-maths-topicwise-prep') }}">JEE Maths</a>,
    <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">JEE Physics</a> and
    <a href="{{ url('/blog/jee-chemistry-physicalorganicinorganic') }}">JEE Chemistry</a>, and our
    <a href="{{ url('/blog/-neet-biology-ncertfirst') }}">NCERT-first approach to NEET Biology</a>, are good to share
    with a tutor. Our comparison of
    <a href="{{ url('/blog/jee-preparation-gurgaon-coaching-or-home-tutor') }}">coaching and a home tutor for JEE</a>
    was written for Gurugram, but its reasoning holds in Patna.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-mode">Home or online tuition in Patna?</h2>
  <p>
    A tutor at the table suits younger children, students who drift on a screen, and subjects where the written
    working is the point, such as Maths and Physics numericals. Online lessons bring in specialists from across India,
    which matters most for IB, IGCSE, ISC electives and advanced entrance problems. In Patna, transport shapes the
    choice:
  </p>
  <ul>
    <li><strong>A young metro.</strong> The open Blue Line stations are Bhootnath, Zero Mile, the Patliputra Bus Terminal and Malahi Pakri; a tutor living near one of them can reach Kankarbagh without a vehicle.</li>
    <li><strong>Lines still being built.</strong> The Red Line under Bailey Road and the underground Blue Line section towards Patna Junction are under construction, so most tutors still travel by two-wheeler or auto.</li>
    <li><strong>The riverfront road.</strong> The Ganga riverfront expressway links Digha with Gandhi Maidan and Didarganj, which shortens trips between the north-west and the old city.</li>
    <li><strong>Heat, rain and festivals.</strong> On the hottest afternoons, the heaviest monsoon days and around Chhath, a planned online lesson keeps the week intact.</li>
  </ul>
  <p>
    Many families settle on two or three home lessons a week and a short online session before tests, all with the same
    tutor. Our <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home tutor or online tutor comparison</a> sets
    out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-fees">How much does a home tutor cost in Patna?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between <strong>₹800 and ₹2,500 an hour</strong>; Classes 11–12,
    IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Each tutor
    sets their own fee, and in practice it moves with:
  </p>
  <ul>
    <li><strong>The class.</strong> Primary and middle-school lessons usually cost less than senior-school ones.</li>
    <li><strong>The goal.</strong> Entrance-level Physics or Maths is priced above school-level help in the same subject.</li>
    <li><strong>The distance.</strong> A tutor coming from the far end of the city may factor in the ride; one from your own zone often does not.</li>
    <li><strong>The pattern.</strong> Fewer, longer lessons often give better value than many short ones on a fixed monthly budget.</li>
  </ul>
  <p>
    Spend where the difficulty is: one strong tutor for the weakest subject usually does more than cheaper help in four.
    Every shortlisted fee is shown before the demo, and nobody above your budget is suggested. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks fees down by class and subject, and our post on
    <a href="{{ url('/blog/home-tuition-fees-patna') }}">home tuition fees in Patna</a> looks at the local picture.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-choose">How do you judge a tutor at the demo class?</h2>
  <p>A profile earns a place on the shortlist; the demo shows whether the tutor should stay. Watch for these:</p>
  <ol>
    <li><strong>The whole timetable.</strong> Did the tutor ask about school, coaching and tests before planning anything?</li>
    <li><strong>A quick check first.</strong> Did they test what the student already knows instead of starting the chapter from page one?</li>
    <li><strong>The right language.</strong> Could the student follow easily, whether the lesson ran in Hindi, English or both?</li>
    <li><strong>Board knowledge.</strong> Could they say how your board's paper for this year is set, without guessing?</li>
    <li><strong>Work by the student.</strong> Did your child solve problems during the hour, or only watch?</li>
    <li><strong>A realistic slot.</strong> Can they come at that time every week, from where they live?</li>
  </ol>
  <p>
    For a township or apartment building, give the guard the tutor's name before the demo; for a house, send the lane,
    a landmark and a map pin. Hold lessons in a shared room with an adult at home. Our
    <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist for parents</a> and our guide to
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a> go further.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-calendar">When should tuition begin in the school year?</h2>
  <p>CBSE's session opens in April, and a Patna board or entrance year tends to fall into five parts:</p>
  <ul>
    <li><strong>April to June:</strong> new books, and the summer break to repair old gaps; morning or evening slots avoid the worst afternoon heat.</li>
    <li><strong>July to September:</strong> steady weekly lessons through the monsoon, with online as the agreed back-up on the wettest days.</li>
    <li><strong>October to November:</strong> Durga Puja, Diwali and Chhath; plan lighter weeks and make up the hours either side.</li>
    <li><strong>December to February:</strong> finish the syllabus, move to full papers and pre-boards, and check the board's own notices for exam dates.</li>
    <li><strong>March to May:</strong> board papers finish, the second JEE Main session and JEE Advanced follow, and NEET UG comes round.</li>
  </ul>
  <p>
    Confirm every date from official notices. An April start gives a full year; a later start still helps, with more
    weight on papers and technique.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="pt-start">How do you get started in Patna?</h2>
  <p>
    Send the class, board, subjects, your locality with a landmark, and the hours that work around school and coaching.
    We suggest two or three tutors; you choose one for a free demo and decide after it. Choose your locality from the
    list on this page, browse <a href="{{ url('/tutors') }}">all tutors</a> or book a
    <a href="{{ url('/demo-class') }}">free demo class</a>. If no home tutor is near enough yet, an online tutor from
    elsewhere in India can begin straight away.
  </p>
  <p>
    Planning for one side of the city? Our local guides cover
    <a href="{{ url('/blog/north-and-west-patna-tuition-guide') }}">north and west Patna</a>, from Digha and Boring
    Road to Danapur, and <a href="{{ url('/blog/south-and-old-patna-tuition-guide') }}">south and old Patna</a>, from
    Kankarbagh and Phulwari to Patna City.
  </p>
  <p class="pt-note">
    Looking beyond Patna? See home tutors in <a href="{{ url('/city/ranchi') }}">Ranchi</a>,
    <a href="{{ url('/city/kolkata') }}">Kolkata</a> and <a href="{{ url('/city/lucknow') }}">Lucknow</a>, or
    <a href="{{ url('/city') }}">cities across India</a>.
  </p>
  <p class="pt-note">
    Teaching in Patna? See <a href="{{ url('/tuition-jobs/patna') }}">home tuition jobs in Patna</a> and the
    localities where families are asking for tutors.
  </p>
  </section>

  </div>
</article>
