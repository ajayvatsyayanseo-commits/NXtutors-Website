{{--
  Hub guide for the Delhi NCR region page (included by city/show.blade.php
  when a file named after the city slug exists). Delhi NCR is six city pages:
  Delhi, Gurugram, Noida, Greater Noida, Ghaziabad and Faridabad. This file
  summarises each one and sends parents to it; zone names come from
  config/zones.php, transport facts from the six city hubs and the research
  files in database/seo-content/areas. Every figure is either live from the
  database or a published NXTutors policy, and no school is named.

  $dA is kept for any area link on this page: it renders a link only when that
  area page exists and is active, so renaming or disabling an area in Super
  Admin cannot leave a broken link here.
--}}
@php
  $dAreaSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dA = function (string $slug, string $label) use ($dAreaSlugs) {
      return in_array($slug, $dAreaSlugs, true)
          ? '<a href="' . e(url('/city/delhi-ncr/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide dl-guide" aria-labelledby="dlGuideTitle">
  <h2 id="dlGuideTitle">Home tuition across Delhi NCR: one region, six cities</h2>

  <p class="nx-guide__lede dl-lede">
    Delhi NCR is six cities, each with its own street plan, transport and evening rush: Delhi, Gurugram, Noida, Greater Noida, Ghaziabad and Faridabad. Every one of
    them has a full NXTutors city page with zones, locality pages, subject pages and local guides. This page is the
    map that joins them: find your city below, then read on for what every NCR family shares, from boards and fees to
    the demo class and the school year.
  </p>

  <nav class="nx-guide__toc dl-toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dl-how">How matching works</a> ·
    <a href="#dl-delhi">Delhi</a> ·
    <a href="#dl-gurugram">Gurugram</a> ·
    <a href="#dl-noida">Noida</a> ·
    <a href="#dl-greater-noida">Greater Noida</a> ·
    <a href="#dl-ghaziabad">Ghaziabad</a> ·
    <a href="#dl-faridabad">Faridabad</a> ·
    <a href="#dl-travel">Travelling across NCR</a> ·
    <a href="#dl-boards">Boards</a> ·
    <a href="#dl-classes">Stage by stage</a> ·
    <a href="#dl-fees">Fees</a> ·
    <a href="#dl-choose">The demo class</a> ·
    <a href="#dl-safety">Safety at home</a> ·
    <a href="#dl-calendar">The school year</a> ·
    <a href="#dl-start">Getting started</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dl-how">How matching works across NCR</h2>
  <p>
    Send one request: class, board, subjects, your locality down to the block, pocket, sector or tower, free days and
    hours, home or online or both, and a rough budget. We come back with two or three matched tutors. Each one's fee is visible
    before the demo, the first class with the tutor you pick is a free demo, and if you want to change tutor later,
    that switch is free as well.
  </p>
  <p>
    On every locality page in the region, tutors appear in the same order. It is a cascade that starts at your door
    and widens only when it has to:
  </p>
  <ol>
    <li><strong>Your own locality.</strong> Tutors who are based in your sector, colony, khand or pocket come first, followed by tutors who have told us they already travel there.</li>
    <li><strong>Your zone.</strong> Next are home tutors from neighbouring localities in the same zone. Zones follow the way people get around, so a zone is a sensible evening trip, not an administrative boundary.</li>
    <li><strong>The rest of your city.</strong> Then home tutors from elsewhere in the same city.</li>
    <li><strong>Nearby NCR cities.</strong> Then come home tutors based in another NCR city, marked "Nearby in NCR". State lines are not travel lines: a tutor in Kaushambi can be nearer to a family in East Delhi than a tutor in Dwarka is.</li>
    <li><strong>Online.</strong> Last are online tutors, first from your own state and then from across India.</li>
  </ol>
  <p>
    Each tutor card carries its label, so you know whether the person can come to the house.
    @if($hubCounts['tutors'] > 0)
      The Delhi NCR list on this page draws on {{ number_format($hubCounts['tutors']) }} tutor profiles,
    @else
      The Delhi NCR list on this page draws on our tutor profiles,
    @endif
    and each city page below shows its own list with the same labels.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-delhi">Delhi: twelve zones, joined by the metro</h2>
  <p>
    Delhi holds the widest range of homes in the region. Much of the south and west grew as colonies laid out after
    Partition, and many of those plots have since been rebuilt as builder floors with a different family on each
    level, so a tutor usually just rings the bell. The two DDA sub-cities, Dwarka in the south-west and Rohini in the
    north-west, run on sectors and pockets, and cooperative group housing there means a guard who wants the tutor's
    name before the first lesson. Across the Yamuna, East Delhi moves from planned DDA pockets to the crowded lanes
    around Shahdara, and around North Campus and Rajinder Nagar family homes share streets with coaching centres and
    student lets that stay busy late.
  </p>
  <p>
    Here the nearest station often decides the shortlist more than distance: a tutor on your line, or one change
    away, is easier to keep through a school year than one driving across the city. East
    Delhi families usually do better starting with tutors who already teach on the trans-Yamuna side. CBSE is the
    board most Delhi students sit, ICSE and ISC have a solid following, and a smaller group study for the IB or
    Cambridge IGCSE.
  </p>
  <p>
    <strong>Zones:</strong> GK, Defence Colony &amp; Lajpat Nagar · Saket, Malviya Nagar &amp; Hauz Khas · Kalkaji,
    CR Park &amp; Sarita Vihar · Vasant Kunj, Vasant Vihar &amp; Palam · Dwarka · Janakpuri, Rajouri Garden &amp;
    Punjabi Bagh · Karol Bagh, Patel Nagar &amp; Rajinder Nagar · Lodhi Colony, Jangpura &amp; Nizamuddin · Rohini ·
    Pitampura, Model Town &amp; North Campus · Mayur Vihar, Patparganj &amp; IP Extension · Laxmi Nagar, Preet Vihar
    &amp; Shahdara.
  </p>
  <p>
    Open the <a href="{{ url('/city/delhi') }}">Delhi city page</a> for every colony and sector, or read the local
    guides to <a href="{{ url('/blog/south-delhi-tuition-guide') }}">South Delhi</a> and
    <a href="{{ url('/blog/east-delhi-tuition-guide') }}">East Delhi</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-gurugram">Gurugram: nine zones and a long evening peak</h2>
  <p>
    Gurugram stretches from the old town and the plotted HUDA sectors in the north-west to the high-rise belts along
    Golf Course Extension Road, Sohna Road and the newer sectors off NH-48 and the Dwarka Expressway. The older city
    has plenty of experienced tutors living close by, and it is also where tutors for Hindi and Sanskrit are easiest to
    find. In the newest sectors many families moved in recently and the local pool of tutors is still growing, so
    weekend mornings and a mix of home visits and online lessons are the usual way to bridge the gap.
  </p>
  <p>
    International boards feature strongly here, particularly around Golf Course Road and its extension, where parents often want help with one piece of the course, such as an IB internal
    assessment or IGCSE practical questions, rather than general homework support. Road distance is misleading in this
    city: a short hop in the afternoon can take far longer at six, so where the tutor sets out from and the time of the
    lesson count more than the map. NXTutors' own office is in Sector 66, on Golf Course Extension Road.
  </p>
  <p>
    <strong>Zones:</strong> Golf Course Road · MG Road &amp; Cyber City · Central Gurugram · Golf Course Extension
    Road · Sohna Road · Southern Peripheral Road · New Gurugram · Dwarka Expressway · Old Gurugram.
  </p>
  <p>
    Open the <a href="{{ url('/city/gurugram') }}">Gurugram city page</a>, or read the guides to
    <a href="{{ url('/blog/gurgaon-golf-course-road-dlf-tuition-guide') }}">Golf Course Road and the DLF phases</a> and
    <a href="{{ url('/blog/new-gurgaon-dwarka-expressway-tuition-guide') }}">New Gurugram and Dwarka Expressway</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-noida">Noida: six zones on a numbered grid</h2>
  <p>
    Noida was planned as a grid of numbered sectors, and the number on your address says a good deal about the kind of
    home a tutor will walk into. The earliest sectors, at the Delhi end, are mostly independent houses and builder
    floors on authority plots, where a tutor comes straight to the door. The belts along the expressway and towards
    the Greater Noida West border are mostly towers, where the tutor needs clearing at a security desk. Plenty of
    sectors mix the two, and several still contain old urban villages.
  </p>
  <p>
    Two metro lines carry many tutors. The Blue Line crosses Old and Central Noida out to Noida Electronic City, and
    the Aqua Line begins at Sector 51 and heads south towards Greater Noida, joined to Sector 52 on the Blue Line by a
    walkway. The slow points at peak hours are the expressway, Vikas Marg, NH-9 near the office belts, and the
    approaches to the DND and Gaur Chowk. Noida is in Uttar Pradesh, so UP Board schools sit alongside CBSE, ICSE and
    the international boards.
  </p>
  <p>
    <strong>Zones:</strong> Old Noida · Central Noida · Sector 62 Belt · Sectors 70–82 · Noida Expressway · Near
    Noida Extension.
  </p>
  <p>
    Open the <a href="{{ url('/city/noida') }}">Noida city page</a>, or read the guides to
    <a href="{{ url('/blog/old-and-central-noida-tuition-guide') }}">Old and Central Noida</a> and
    <a href="{{ url('/blog/noida-expressway-and-extension-tuition-guide') }}">the Noida Expressway and Extension sectors</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-greater-noida">Greater Noida: towers in the west, plots in the Greek-letter sectors</h2>
  <p>
    Greater Noida behaves like two separate towns. Greater Noida West, still widely called Noida Extension, is an
    almost unbroken run of high-rise townships: nearly every lesson begins at a gate, but density helps, because a
    tutor who already teaches in one complex can often fit in a second student the same evening. The older city to
    the south-east names its sectors after Greek letters, and much of it is plotted housing where the tutor simply
    arrives at the front door.
  </p>
  <p>
    How a tutor reaches you depends on which half you live in. The Aqua Line serves the older core, with stations
    such as Pari Chowk, Alpha 1, Delta 1 and GNIDA Office before it ends at Depot, but Greater Noida West has no
    working station of its own; the nearest is Noida Sector 51, and the extension towards it is still only planned.
    In several plotted sectors buses and shared autos are scarce, so a tutor with a two-wheeler reaches far more homes.
    As in Noida, the UP Board is part of the mix.
  </p>
  <p>
    <strong>Zones:</strong> Greater Noida West · Alpha–Delta &amp; Pari Chowk · Pi, Sigma &amp; Sectors 36–37 ·
    Omega, Chi &amp; Phi · Zeta &amp; Eta · Omicron, Mu &amp; Xu.
  </p>
  <p>
    Open the <a href="{{ url('/city/greater-noida') }}">Greater Noida city page</a>, or read the guides to
    <a href="{{ url('/blog/greater-noida-west-tuition-guide') }}">Greater Noida West</a> and
    <a href="{{ url('/blog/greater-noida-sectors-tuition-guide') }}">the Greek-letter sectors</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-ghaziabad">Ghaziabad: seven zones on two banks of the Hindon</h2>
  <p>
    The Hindon runs through the middle of Ghaziabad and shapes tuition on each side. To the west, Indirapuram, Vaishali,
    Vasundhara, Kaushambi and Sahibabad sit hard against the Delhi and Noida borders, a patchwork of khands, pockets
    and numbered sectors where towers and builder floors stand next to each other. To the east is the older, mostly
    plotted city around Raj Nagar and Kavi Nagar, with the newer high-rise belt of Raj Nagar Extension and the NH-9
    corridor beyond it.
  </p>
  <p>
    Three rail networks reach the city: the Blue Line branch that finishes at Vaishali, the Red Line along GT Road to
    Shaheed Sthal, and Namo Bharat trains calling at Sahibabad, Ghaziabad, Guldhar and Duhai. Many tutors stay on one
    bank of the river, so a shortlist begins with those already teaching on yours. Ghaziabad is in Uttar Pradesh, and
    for UP Board students the medium of instruction, Hindi or English, matters as much as the subject.
  </p>
  <p>
    <strong>Zones:</strong> Indirapuram · Vaishali &amp; Kaushambi · Vasundhara · Sahibabad &amp; Rajendra Nagar ·
    Surya Nagar &amp; Ramprastha · Raj Nagar, Kavi Nagar &amp; Old Ghaziabad · Raj Nagar Extension &amp; NH-9
    Corridor.
  </p>
  <p>
    Open the <a href="{{ url('/city/ghaziabad') }}">Ghaziabad city page</a>, or read the guides to
    <a href="{{ url('/blog/indirapuram-tuition-guide') }}">Indirapuram</a> and
    <a href="{{ url('/blog/raj-nagar-and-old-ghaziabad-tuition-guide') }}">Raj Nagar and old Ghaziabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-faridabad">Faridabad: seven zones from Mathura Road to Neharpar</h2>
  <p>
    Faridabad falls into four quite different parts. The old town and NIT, the industrial township built after
    Partition, are close-packed lanes of houses and floors: no gate to clear, but very little parking. The planned HSVP
    sectors on either side of Mathura Road are largely plotted, with wider roads and parks. To the west the land climbs
    into the Aravalli around Surajkund, and east of the Agra canal lies Greater Faridabad, known locally as Neharpar, a
    newer belt of gated towers.
  </p>
  <p>
    The Violet Line is the city's backbone, running down Mathura Road from the Delhi border to Ballabhgarh, so a tutor
    living near it can reach much of the older city without a vehicle, and the northern sectors can draw on tutors from
    South Delhi as easily as on local ones. Neharpar has no metro, so tutors cross the canal by road. Faridabad is in
    Haryana, so HBSE schools are common alongside CBSE and the other boards, and the medium of teaching is worth
    stating when you ask.
  </p>
  <p>
    <strong>Zones:</strong> NIT &amp; Old Faridabad · Central Sectors (Mathura Road) · Sectors 28–31 &amp; 37 ·
    Surajkund &amp; Sainik Colony · Ballabhgarh &amp; Southern Sectors · Greater Faridabad (Sectors 75–80) · Greater
    Faridabad (Sectors 81–89).
  </p>
  <p>
    Open the <a href="{{ url('/city/faridabad') }}">Faridabad city page</a>, or read the guides to
    <a href="{{ url('/blog/nit-and-central-faridabad-tuition-guide') }}">NIT and central Faridabad</a> and
    <a href="{{ url('/blog/greater-faridabad-neharpar-tuition-guide') }}">Greater Faridabad and Neharpar</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-travel">Travelling between NCR cities</h2>
  <p>
    Sometimes the right tutor lives on the other side of a state line. Whether that works depends on the route at your
    slot, not on the border. These are the cross-city links our city pages describe:
  </p>
  <ul>
    <li><strong>Delhi and Noida.</strong> The Blue Line runs from Dwarka through central Delhi into Noida. The Magenta Line links Janakpuri West and South Delhi with Botanical Garden, where it meets the Blue Line. By road, the DND Flyway connects the Nizamuddin side and Mayur Vihar with Noida.</li>
    <li><strong>Delhi and Ghaziabad.</strong> The Blue Line branch from Yamuna Bank ends at Vaishali. The Red Line crosses from Rithala in the north-west, through Shahdara, to Shaheed Sthal. Namo Bharat trains leave Anand Vihar, where the Blue and Pink Lines, the railway terminal and the interstate bus terminus meet, for Sahibabad, Ghaziabad, Guldhar and Duhai. The Hindon Elevated Road joins Raj Nagar Extension to UP Gate on the Delhi border.</li>
    <li><strong>Noida and Ghaziabad.</strong> Noida Electronic City station on the Blue Line has an exit on the Indirapuram side.</li>
    <li><strong>Noida and Greater Noida.</strong> The Aqua Line runs from Noida Sector 51 to Depot, and the Noida–Greater Noida Expressway runs from the Mahamaya Flyover to Pari Chowk. Greater Noida West is reached from Noida Sector 121 by a road across the Hindon.</li>
    <li><strong>Delhi and Faridabad.</strong> The Violet Line continues past Sarita Vihar and Badarpur Border into Faridabad and down Mathura Road to Ballabhgarh.</li>
    <li><strong>Delhi, Gurugram and Faridabad.</strong> The Dwarka Expressway passes Dwarka's Sectors 21 and 22 on its way into Gurugram's newer sectors, and the Gurugram–Faridabad road crosses the Aravalli near Surajkund.</li>
  </ul>
  <p>
    Treat traffic as a timing question. Bridges, border crossings and big junctions are where evening trips stretch
    most, so a tutor from another city arrives on time more often if the lesson starts before the office rush, runs
    later, or moves to a weekend morning. Where a slot means a long drive both ways, one home lesson a week plus online
    sessions is easier to sustain. Poor winter air has at times moved school classes online across the region, so agree
    an online fallback with the tutor before pre-board season.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-boards">Boards across Delhi NCR</h2>
  <p>
    The national boards run through all six cities, and each state adds its own. Name the board with every request,
    and for a state board the medium too.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>CBSE</h3>
  <p>
    The most widely taught board in every NCR city. Papers are rooted in the NCERT books, and a large share now tests
    whether a student can apply an idea: case passages, assertion and reason, data and source questions. Look for a
    tutor who teaches from the textbook outward, works through the board's sample papers and makes the student show
    each step so method marks are kept.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>ICSE and ISC</h3>
  <p>
    CISCE schools appear across the region in smaller numbers. The syllabus is broad and answers run long, especially
    in English, History and the sciences. The tutor's real job is coverage and pace: a revision cycle that reaches
    every chapter, timed writing, and knowledge of the prescribed texts and project work.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>IB and Cambridge IGCSE</h3>
  <p>
    Offered in parts of every city and concentrated in a few. IB grades combine exams with internal assessment, which
    a tutor may guide but never write. IGCSE rewards exam craft: command words, the right tier, past papers marked
    against the official scheme. Specialists are fewer, so online lessons often widen the choice.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>HBSE in Haryana</h3>
  <p>
    In Gurugram and Faridabad some schools follow the Board of School Education Haryana, which sets its own papers
    for Classes 10 and 12. Lessons may be in Hindi or English, so name the board and the medium when you ask for a
    tutor.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>UP Board in Uttar Pradesh</h3>
  <p>
    Noida, Greater Noida and Ghaziabad have schools under UPMSP, whose students sit the High School and Intermediate
    exams. Much of the content overlaps with NCERT, but question style and medium can differ, so we match on both.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-classes">What each stage of school needs</h2>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>Nursery to Class 5: habits first</h3>
  <p>
    Young children gain most from calm, regular help rather than drilling: reading with understanding in English and
    Hindi, a feel for numbers, neat handwriting and the ability to stay with a task for twenty minutes. Two or three
    short lessons a week with a patient tutor at home do more than one long weekend session.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 6 to 8: closing gaps early</h3>
  <p>
    These are the years when later trouble starts quietly: fractions, negative numbers and the first algebra in Maths,
    reading a labelled diagram in Science, and grammar in English, Hindi and a third language such as Sanskrit. A good
    tutor spots the weak chapter now, while fixing it takes weeks rather than a whole term.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 9 and 10: the first board cycle</h3>
  <p>
    Treat Class 9 as a real year, not a warm-up, because much of the Class 10 paper leans on it. In Class 10 the rhythm
    shifts from teaching to chapter tests to full papers, with the last months kept for revision. Our
    <a href="{{ url('/blog/cbse-class-10-maths-preparation') }}">CBSE Class 10 Maths preparation</a> guide lays out one
    such plan.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Classes 11 and 12: streams, coaching and entrance exams</h3>
  <p>
    The stream decision often comes within weeks of the Class 10 result; see
    <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board and stream</a>. Class 11 is the year most
    often underrated, though Class 12 and much of the JEE and NEET syllabi stand on it; one specialist per subject
    usually beats an all-rounder. Alongside coaching, a home tutor helps most by clearing doubts from the coaching
    sheets, lifting the one weak subject and keeping boards in the plan. Students aiming at central universities,
    several of them in Delhi, also sit CUET UG, conducted by NTA. Useful reading: <a href="{{ url('/blog/cbse-class-12-physics-strategies') }}">Class 12
    Physics strategies</a>, the <a href="{{ url('/blog/jee-physics-topicwise-prep') }}">topic-wise JEE Physics
    guide</a> and our
    <a href="{{ url('/blog/cuet-preparation-2025-complete-ug-subject-strategies-syllabus-tips-pyqs-and-checklist') }}">CUET
    preparation guide</a>.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-fees">What tuition costs in NCR, and why</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and
    JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more. Tutors set their own fee,
    and you see each tutor's fee before the demo. Within that range, a quote moves with:
  </p>
  <ul>
    <li><strong>Stage.</strong> Primary and middle-school lessons cost less than senior-class work.</li>
    <li><strong>Board.</strong> International-board specialists are scarcer and usually charge more for the same class.</li>
    <li><strong>Goal.</strong> Homework support is a different job from entrance-exam problem sets.</li>
    <li><strong>Journey.</strong> A tutor crossing a river, a canal or a state border at peak hour may build that time into the fee; one from your own sector often will not.</li>
    <li><strong>Frequency and mode.</strong> Some tutors quote less per hour for three or more lessons a week, and online lessons remove travel from the equation.</li>
  </ul>
  <p>
    The <a href="{{ url('/pricing-guide') }}">pricing guide</a> breaks this down by class and subject, and each city
    has its own fee guide:
    <a href="{{ url('/blog/home-tuition-fees-delhi') }}">Delhi</a>,
    <a href="{{ url('/blog/home-tuition-fees-gurgaon') }}">Gurugram</a>,
    <a href="{{ url('/blog/home-tuition-fees-noida') }}">Noida</a>,
    <a href="{{ url('/blog/home-tuition-fees-greater-noida') }}">Greater Noida</a>,
    <a href="{{ url('/blog/home-tuition-fees-ghaziabad') }}">Ghaziabad</a> and
    <a href="{{ url('/blog/home-tuition-fees-faridabad') }}">Faridabad</a>.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-choose">Choosing a tutor at the demo</h2>
  <p>A profile shows qualifications; the free demo shows teaching. While it runs, and afterwards, notice:</p>
  <ol>
    <li><strong>Questions before explanations.</strong> Did the tutor find out what the student already knows before starting to teach?</li>
    <li><strong>Who did the work.</strong> Was the student writing, solving and talking for much of the hour, or mainly listening?</li>
    <li><strong>The current paper.</strong> Can the tutor describe how this year's board or entrance paper is set and marked?</li>
    <li><strong>The journey.</strong> For home lessons, ask where the tutor will set out from and how they travel at that hour. A tutor who cannot keep the slot in week three is no help.</li>
    <li><strong>A plan.</strong> Did they say what the next four weeks will cover and how you will see progress?</li>
    <li><strong>Your child's view.</strong> Ask privately whether they would feel comfortable asking this person a basic question.</li>
  </ol>
  <p>
    If several answers are no, tell us and the next tutor on your list gets a demo. Once you choose, allow six to eight
    weeks before judging results. Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class
    checklist</a> has more to look for.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-safety">Safety at home</h2>
  <p>
    Whichever tutor you choose, a few household habits keep home lessons safe, calm and on time:
  </p>
  <ul>
    <li>Plan lessons for times when an adult is at home, particularly with younger children.</li>
    <li>Hold the class in a shared room, such as the living or dining area, rather than a bedroom, with the door open.</li>
    <li>In a gated society, add the tutor to the visitor app or the gate register once, so every entry is logged and the first lesson does not start with a phone call from the guard.</li>
    <li>Before the first visit, send the tower and flat, or the block, house number and a landmark, and check any evening visitor limits your society sets.</li>
    <li>For online lessons, let the child join from a shared space and keep the meeting link with a parent.</li>
    <li>Talk to your child after the first few lessons about how they felt. If anything about a tutor's conduct worries you, stop the lessons and contact us.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-calendar">Planning around the NCR school year</h2>
  <p>Most schools across the six cities start their session in April. For a student facing boards, a typical year runs:</p>
  <ul>
    <li><strong>April to June:</strong> a strong time to begin. The new syllabus is only starting, and the long, hot summer break leaves room to repair old gaps.</li>
    <li><strong>July to September:</strong> steady teaching alongside school, with chapter tests before the mid-term exams.</li>
    <li><strong>October to December:</strong> completing the syllabus. Many schools hold pre-boards around the turn of the year, and winter air can disrupt school, so keep the online fallback ready.</li>
    <li><strong>January to March:</strong> full papers and revision. CBSE and CISCE board exams begin in February, state boards publish their own timetables, and JEE Main's first session usually falls early in the year.</li>
    <li><strong>April to June:</strong> JEE Main's second session, JEE Advanced, NEET UG, CUET UG and the May sessions for IB and Cambridge students.</li>
  </ul>
  <p>
    Dates change each year, so check the official notices. Starting in April gives a tutor the whole year; starting in
    November shifts the work towards practice papers.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dl-start">Getting started</h2>
  <p>
    Pick your city page and send one request; we reply with two or three matched tutors, and you choose one for a free
    demo class. You can also browse <a href="{{ url('/tutors') }}">all tutors</a> or book a <a href="{{ url('/demo-class') }}">free demo
    class</a> straight away. Our office is in Sector 66, Gurugram, and home tutoring covers the NCR cities where our
    tutors live, with online tutoring available across India.
  </p>
  <p>
    City pages: <a href="{{ url('/city/delhi') }}">Delhi</a> ·
    <a href="{{ url('/city/gurugram') }}">Gurugram</a> ·
    <a href="{{ url('/city/noida') }}">Noida</a> ·
    <a href="{{ url('/city/greater-noida') }}">Greater Noida</a> ·
    <a href="{{ url('/city/ghaziabad') }}">Ghaziabad</a> ·
    <a href="{{ url('/city/faridabad') }}">Faridabad</a>.
  </p>
  <p class="dl-note">
    Are you a tutor? See home tuition jobs in <a href="{{ url('/tuition-jobs/state/delhi') }}">Delhi</a>,
    <a href="{{ url('/tuition-jobs/state/haryana') }}">Haryana</a> (Gurugram and Faridabad) and
    <a href="{{ url('/tuition-jobs/state/uttar-pradesh') }}">Uttar Pradesh</a> (Noida, Greater Noida and Ghaziabad).
  </p>
  </section>

  </div>
</article>
