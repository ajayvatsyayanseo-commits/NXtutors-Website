{{--
  Long-form guide for "nursery and KG home tutor in Delhi" (Nursery, LKG and
  UKG; roughly ages 3 to 6). Written by the NXTutors Academic Team. Kept
  distinct from primary-home-tutor-delhi (Classes 1 to 5) and from the Gurgaon
  and Mumbai early-years pages: same structure, Delhi-only sentences.

  Official sources (reused from the verified Gurgaon early-years page, fetched
  1 Oct 2026):
  - IB PYP in the early years, ibo.org/primary-years-programme-in-the-early-years/
    (inquiry-based learning through play for children aged 3 to 5).
  - Cambridge Early Years, cambridgeinternational.org/programmes-and-qualifications/cambridge-early-years/
    (programme for 3 to 6 year olds, child-centred and play-based; six
    curriculum areas: communication and literacy; creative expression;
    mathematics; personal, social and emotional development; physical
    development; understanding the world).
  No state board is described for Delhi; the Delhi hub view says CBSE is the
  board most Delhi students sit, ICSE/ISC has a sizeable following and a
  smaller group study IB or Cambridge. No pre-primary rules are claimed for any
  board. No school, society, developer or people names. No admission-interview
  promises, no medical claims. Local detail only from
  database/seo-content/zones/delhi.json, database/seo-content/areas/delhi-research.json,
  delhi-zone-guides.json and the Delhi city hub view. Fee range is the approved
  sentence. FAQs: faqs/nursery-kg-home-tutor-delhi.php.

  Area links render only when that Delhi area page exists and is active.
--}}
@php
  $dnkSlugs = $allAreas->pluck('slug')->map(fn ($s) => (string) $s)->all();
  $dnkA = function (string $slug, string $label) use ($dnkSlugs) {
      return in_array($slug, $dnkSlugs, true)
          ? '<a href="' . e(url('/city/delhi/' . $slug)) . '">' . e($label) . '</a>'
          : e($label);
  };
@endphp

<article class="nx-guide" aria-labelledby="dnkGuideTitle">
  <h2 id="dnkGuideTitle">Nursery, LKG and UKG tutors in Delhi: small steps, short sessions, lots of talk</h2>

  <p class="nx-guide__lede">
    A three-year-old in a Lajpat Nagar floor and a five-year-old in a Dwarka society flat need the same things from a
    tutor: someone patient who turns sounds, shapes and numbers into games, and who knows when a session should stop.
    What differs across Delhi is the practical side: which metro line reaches you, whether the guard at your gate wants
    a name first, and which hour of the day your child is still fresh. This guide covers when an early-years tutor
    helps, what the sessions should build, the language question many Delhi homes face, how the IB and Cambridge
    early-years programmes describe this stage, and how to judge a demo with a very young child.
  </p>

  <nav class="nx-guide__toc" aria-label="In this guide">
    <strong>In this guide:</strong>
    <a href="#dnk-when">When it helps</a> ·
    <a href="#dnk-build">What to build</a> ·
    <a href="#dnk-lang">Languages</a> ·
    <a href="#dnk-prog">IB and Cambridge</a> ·
    <a href="#dnk-day">The Delhi day</a> ·
    <a href="#dnk-mode">Home or online</a> ·
    <a href="#dnk-demo">The demo</a> ·
    <a href="#dnk-safe">Safety at home</a> ·
    <a href="#dnk-fees">Fees</a> ·
    <a href="#dnk-where">Where we match</a>
  </nav>
  <div class="nx-guide__body">

  <section class="nx-guide__sec">
  <h2 id="dnk-when">Does a child in nursery or KG really need a tutor?</h2>
  <p>
    Often not, and an honest tutor will say so. Children of this age learn mainly through play, talk and routine,
    and a parent reading aloud each evening does more than any worksheet. A tutor earns a place in a few specific
    situations:
  </p>
  <ul>
    <li><strong>Both parents work long hours</strong> and want a calm, structured half hour of stories, counting and drawing that the child looks forward to, instead of a screen.</li>
    <li><strong>The school's language is new at home.</strong> A child who hears Hindi, Punjabi, Bengali or another language at home may need gentle extra exposure to the English the classroom uses, or the other way round.</li>
    <li><strong>Pencil control is lagging.</strong> Some children find gripping a crayon, colouring inside a shape or forming a line tiring; short, playful practice helps before Class 1 asks for real writing.</li>
    <li><strong>The family has just moved to Delhi</strong> and the child is settling into a new school, a new routine and sometimes a new language all at once.</li>
  </ul>
  <p>
    If a teacher raises a concern about speech, hearing, movement or attention, the first conversation belongs with
    your family doctor, not a tutor. A tutor can then follow whatever plan the specialist suggests.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-build">What should early-years sessions actually build?</h2>
  <p>
    The goal at this stage is readiness, not results. Sessions should be 30 to 45 minutes, broken into small
    activities of a few minutes each, with movement in between. Here is what a good tutor works on, and how you can
    tell it is happening without any test.
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>Early-years skills a Delhi tutor should build, and signs of progress at home</caption>
    <thead>
      <tr><th scope="col">Skill</th><th scope="col">What sessions look like</th><th scope="col">What you may notice</th></tr>
    </thead>
    <tbody>
      <tr><td>Listening and talk</td><td>Picture books, "what happens next?", retelling a story with toys</td><td>Longer sentences at dinner; questions about the story the next day</td></tr>
      <tr><td>Sounds before letters</td><td>Rhymes, clapping syllables, finding things that start with the same sound</td><td>Your child points out signs in the metro or the market that "start like my name"</td></tr>
      <tr><td>Number sense</td><td>Counting steps, sharing biscuits fairly, sorting buttons by colour and size</td><td>Counting objects correctly rather than reciting numbers in a sing-song</td></tr>
      <tr><td>Hand strength and control</td><td>Clay, tearing paper, threading beads, big crayon strokes before small ones</td><td>A steadier grip and less frustration when colouring</td></tr>
      <tr><td>Attention and turn-taking</td><td>Simple board games, waiting for a turn, finishing one activity before the next</td><td>Sitting with one activity for a little longer each month</td></tr>
      <tr><td>Independence</td><td>Packing away, opening a bag, following two-step instructions</td><td>Fewer reminders in the morning routine</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Be wary of a tutor who arrives with a stack of tracing books and keeps a four-year-old writing alphabets for half
    an hour. Early pressure tends to make children dislike the table; play builds the same skills without that cost.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-lang">Languages at home, languages at school</h2>
  <p>
    Delhi homes are often bilingual or trilingual, and that is a strength, not a problem to fix. A good early-years
    tutor uses the child's home language to explain, then brings in the classroom language through songs and stories.
    Tell the tutor which language is spoken at home, which one the school uses in class, and which one your child
    answers in when tired; that last detail usually tells you which language is strongest.
  </p>
  <p>
    Looking ahead, most Delhi children move into CBSE schooling, a sizeable group into ICSE, and a smaller group into
    IB or Cambridge programmes, according to our <a href="{{ url('/city/delhi') }}">Delhi tutors page</a>. None of
    that needs deciding at three, but it is worth knowing which route your school follows so the tutor can mirror its
    vocabulary and approach. Our guide to <a href="{{ url('/blog/how-to-choose-boardstream') }}">choosing a board</a>
    is useful when that question comes up.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-prog">What do the IB and Cambridge early-years programmes say?</h2>
  <p>
    Two international programmes publish clear descriptions of this stage, and both put play at the centre. They are
    worth reading even if your child's school follows neither.
  </p>
    <div class="nx-guide__cards">
      <div class="nx-guide__card">
  <h3>IB Primary Years Programme, early years</h3>
  <p>
    The IB describes its early-years PYP for children aged 3 to 5 as inquiry-based learning through play: children
    explore, ask questions and build understanding, with teachers acting as partners. A tutor working with a PYP
    family should follow the child's questions rather than a fixed worksheet.
  </p>
      </div>
      <div class="nx-guide__card">
  <h3>Cambridge Early Years</h3>
  <p>
    Cambridge describes its programme for 3 to 6 year olds as child-centred and play-based, across six areas:
    communication and literacy, creative expression, mathematics, personal, social and emotional development,
    physical development, and understanding the world. That list is a fair checklist for any early-years tutor.
  </p>
      </div>
    </div>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-day">Fitting short sessions into the Delhi day</h2>
  <p>
    Small children tire quickly, so the slot matters more than at any other age. Many nursery and KG children finish
    school around midday, nap or rest, and are at their best in the late afternoon; that is also when tutors can
    travel before the evening office rush. How the tutor gets to you varies by zone:
  </p>
  <div class="nx-table-wrap">
  <table class="nx-table">
    <caption>How tutors reach early-years families in six Delhi zones</caption>
    <thead>
      <tr><th scope="col">Zone</th><th scope="col">Typical way in</th><th scope="col">Tip for a small child's session</th></tr>
    </thead>
    <tbody>
      <tr><td><a href="{{ url('/city/delhi/zone/gk-defence-colony-lajpat-nagar') }}">GK, Defence Colony &amp; Lajpat Nagar</a></td><td>Greater Kailash on the Magenta Line, or the Lajpat Nagar interchange</td><td>Builder floors often have one bell per floor; tell the tutor which to ring so a sleeping sibling is not woken</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/saket-malviya-nagar-hauz-khas') }}">Saket, Malviya Nagar &amp; Hauz Khas</a></td><td>Yellow Line to Malviya Nagar or Hauz Khas, then an e-rickshaw</td><td>Plan around the Outer Ring Road junctions at office hours</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/dwarka') }}">Dwarka</a></td><td>Blue Line sector stations; most homes behind a society gate</td><td>Register the tutor as a regular visitor so the gate call does not eat into a 30-minute session</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/pitampura-model-town-north-campus') }}">Pitampura, Model Town &amp; North Campus</a></td><td>Red Line at Kohat Enclave or Netaji Subhash Place; Yellow Line further east</td><td>Afternoon slots avoid the evening crowd at the business district</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/mayur-vihar-patparganj-ip-extension') }}">Mayur Vihar, Patparganj &amp; IP Extension</a></td><td>Blue or Pink Line, then an auto into the pockets</td><td>A tutor already on the trans-Yamuna side avoids a river crossing</td></tr>
      <tr><td><a href="{{ url('/city/delhi/zone/laxmi-nagar-preet-vihar-shahdara') }}">Laxmi Nagar, Preet Vihar &amp; Shahdara</a></td><td>Blue Line, or the Karkarduma and Anand Vihar interchanges</td><td>Lanes are tight; a tutor on foot from the station is usually on time</td></tr>
    </tbody>
  </table>
  </div>
  <p>
    Two sessions a week is plenty at this age. A short, regular routine, the same days and the same time, matters more
    to a small child than the length of any one lesson.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-mode">Home or online for a three- to six-year-old?</h2>
  <p>
    For this age, home is almost always better. Young children learn with their hands, and a tutor in the room can
    pass the clay, steady the crayon and read the child's mood. Online can still help in narrow cases: a short story or
    rhyme session with a grandparent-style tutor, or a weekly phonics slot when no suitable tutor can travel to your
    sector. Keep any screen session to 15 or 20 minutes, with an adult beside the child. Our
    <a href="{{ url('/blog/home-tutor-vs-online-tutor') }}">home versus online comparison</a> sets out the trade-offs.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-demo">How to judge an early-years demo</h2>
  <p>
    The first class with the tutor you choose is a free demo. With a small child, watch the child more than the
    tutor:
  </p>
  <ol>
    <li><strong>The first five minutes.</strong> Does the tutor sit at the child's level and start with something the child chose, a toy or a book, rather than a worksheet?</li>
    <li><strong>Changes of activity.</strong> When attention drifts, does the tutor switch smoothly to something active, or keep pushing?</li>
    <li><strong>Talk.</strong> Is your child talking more than the tutor by the end?</li>
    <li><strong>The goodbye.</strong> Does your child want to show you what they made, or look relieved it is over?</li>
    <li><strong>The plan.</strong> Ask what the tutor would do over the next month and how you will see progress.</li>
  </ol>
  <p>
    If it does not feel right, the next tutor on your shortlist can come for a demo, and changing tutor later is free.
    Our <a href="{{ url('/blog/demo-class-checklist-for-parents') }}">demo class checklist</a> has more questions.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-safe">Practical safety for home visits with young children</h2>
  <ul>
    <li><strong>An adult at home, always.</strong> Hold sessions in a shared room, a dining table or a corner of the living room, with the door open.</li>
    <li><strong>The gate first.</strong> In CGHS societies and RWA-gated blocks, give the guard the tutor's name before the first visit; in plotted colonies, share the block, house number, floor and a map pin.</li>
    <li><strong>Check the face against the profile.</strong> The person who arrives should match the name and photo on the profile we shared.</li>
    <li><strong>Know what the ID check covers.</strong> Tutors who join go through an ID check: a one-time code and a government photo ID reviewed by our team before the profile is marked Verified. It is not a police or background check. See <a href="{{ url('/how-we-verify-tutors') }}">how we verify tutors</a>.</li>
  </ul>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-fees">What does a nursery or KG tutor cost in Delhi?</h2>
  <p>
    Across NXTutors, most home-tuition sessions fall between ₹800 and ₹2,500 an hour; Classes 11–12, IB/IGCSE and JEE/NEET sit toward the upper end; specialists for IB HL or JEE Advanced can charge more.
    Early-years sessions are short and generally sit toward the lower end of that range, though a long trip across the
    Yamuna or between lines can raise a quote. Tutors set their own fees and you see each one before the demo. The
    <a href="{{ url('/pricing-guide') }}">pricing guide</a> and our <a href="{{ url('/blog/home-tuition-fees-delhi') }}">home
    tuition fees in Delhi</a> article help with budgeting.
  </p>
  </section>

  <section class="nx-guide__sec">
  <h2 id="dnk-where">Where we match early-years tutors across Delhi</h2>
  <p>
    Each locality page lists tutors who teach there, nearest first. In the south, {!! $dnkA('pamposh-enclave', 'Pamposh Enclave') !!}
    is a small, quiet colony of houses and floors near Greater Kailash station, and
    {!! $dnkA('sarvodaya-enclave', 'Sarvodaya Enclave') !!}, beside Malviya Nagar, has guarded entrances and many houses split
    into floors, so share the floor and gate before the first visit. {!! $dnkA('dwarka-sector-9', 'Dwarka Sector 9') !!}
    has its own Blue Line station, so tutors can usually walk to the society gate.
  </p>
  <p>
    In the north-west, {!! $dnkA('kohat-enclave', 'Kohat Enclave') !!} has a Red Line station within the colony, which
    makes regular short visits easy to keep. Across the river, {!! $dnkA('vasundhara-enclave', 'Vasundhara Enclave') !!}
    is a compact group of society blocks near New Ashok Nagar, and {!! $dnkA('surajmal-vihar', 'Surajmal Vihar') !!} is a
    low-rise plotted colony close to Karkarduma, where late-afternoon slots avoid the busy main roads.
  </p>
  <p>
    When your child starts Class 1, our <a href="{{ url('/primary-home-tutor-delhi') }}">primary home tutors in
    Delhi</a> page takes over. Send us your child's age, school year, home language, your colony or sector and the
    afternoons that suit you; we come back with two or three tutors and their fees.
    <a href="{{ url('/demo-class') }}">Book a free demo</a>, browse <a href="{{ url('/tutors') }}">tutor profiles</a>, or
    see every locality on the <a href="{{ url('/city/delhi') }}">home tutors in Delhi</a> page. Tutors who want to teach
    young children in the city can see <a href="{{ url('/tuition-jobs/delhi') }}">tuition jobs in Delhi</a>.
  </p>
  </section>

  </div>
</article>
