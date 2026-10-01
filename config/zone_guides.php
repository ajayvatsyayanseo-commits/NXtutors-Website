<?php

/*
|--------------------------------------------------------------------------
| Home tuition by zone: the local block on area pages
|--------------------------------------------------------------------------
|
| Each Gurugram area page shows the block for its zone (config/zones.php,
| App\Support\Zones): how home tuition works there in practice, and a link
| to the zone's long guide on the blog. Written from how tutoring runs in
| these parts of the city: housing, travel and timing. No school names, no
| figures, nothing that needs checking against a source that could change.
|
| 'guide' is a blog slug; the link is shown only once that post is live.
*/

return [
    'Gurugram' => [
        'Golf Course Road' => [
            'guide' => 'gurgaon-golf-course-road-dlf-tuition-guide',
            'intro' => [
                'Golf Course Road and the DLF phases are mostly gated high-rise societies and DLF independent floors, with many families whose children are in IB, IGCSE or CBSE schools across the city. Evenings are busy: school buses come back through the afternoon, and office traffic on Golf Course Road and around the Rapid Metro builds from about six.',
                'Tutors who live in the DLF phases, Sushant Lok 1 or the sectors around Golf Course Road can usually reach you in a short drive. Tutors from further out tend to prefer early-evening or weekend slots, or a mix of home and online classes on weekdays.',
            ],
            'tips' => [
                'Register the tutor with your society\'s visitor app or gate once, so the first class does not start late at the gate.',
                'For IB or IGCSE, ask the tutor which papers and command terms they have taught recently, not just the subject.',
                'A slot that starts before 5 pm or after 7:30 pm avoids the worst of the office traffic.',
            ],
        ],
        'MG Road & Cyber City' => [
            'guide' => 'gurgaon-golf-course-road-dlf-tuition-guide',
            'intro' => [
                'Around MG Road, Cyber City and the sectors between them, homes sit close to the city\'s busiest office district. Traffic at office hours is heavy in both directions, which affects when a tutor can realistically arrive.',
                'Tutors living in the DLF phases, Sikanderpur or the nearby sectors are the easiest to schedule. Online or hybrid classes on weekdays, with a home session at the weekend, work well for many families here.',
            ],
            'tips' => [
                'Ask whether the tutor is coming from home or from another class nearby: the second is often more punctual.',
                'Keep the weekday slot fixed; changing times at short notice is hard around the office peak.',
                'Tell us your society or block so we suggest tutors on your side of the city.',
            ],
        ],
        'Central Gurugram' => [
            'guide' => 'gurgaon-sohna-road-south-city-tuition-guide',
            'intro' => [
                'Central Gurugram, from South City 1 and Sushant Lok 2 and 3 to the sectors around the old HUDA City Centre, has a mix of independent houses, builder floors and older societies. Families here commonly look for CBSE and ICSE tutors, with IB and IGCSE tutors for children in international schools.',
                'Being central, these sectors are within reach of tutors from most of the city. That widens the choice, especially for Classes 11 and 12 and specialist subjects.',
            ],
            'tips' => [
                'In independent houses and builder floors, agree where the class will sit: a quiet table in a common room, not a bedroom.',
                'A central location means more tutors to choose from, so ask for a subject-specific demo rather than a general chat.',
                'Board-exam students can often fit two short weekday sessions instead of one long one.',
            ],
        ],
        'Golf Course Extension Road' => [
            'guide' => 'gurgaon-golf-course-extension-spr-tuition-guide',
            'intro' => [
                'Golf Course Extension Road is lined with large gated societies, many of them newer, with a lot of families whose children are in IB, IGCSE and CBSE schools along this road and across the city. NXTutors is based on this stretch, in Sector 66.',
                'Tutors living on the Extension Road or in the Sohna Road sectors can reach most societies here easily. For specialist subjects such as IB HL Maths or IGCSE Additional Maths, it can be worth taking a tutor from further away for weekend home sessions and online classes in between.',
            ],
            'tips' => [
                'Large societies can take ten minutes from the gate to the tower: build that into the start time.',
                'Ask the tutor for a short written plan after the demo: topics, frequency and how progress will be checked.',
                'If you want a specialist who lives across the city, a hybrid plan often makes them possible.',
            ],
        ],
        'Sohna Road' => [
            'guide' => 'gurgaon-sohna-road-south-city-tuition-guide',
            'intro' => [
                'Sohna Road and the sectors off it, including South City 2, Nirvana Country, Malibu Towne and Vatika City, have gated townships, independent floors and high-rise societies side by side. Most families here look for CBSE and ICSE tutors, with a growing number asking for IB and IGCSE.',
                'The road itself is slow at school and office hours, so a tutor on your side of it is easier than one crossing over. Tutors from Golf Course Extension Road and the sectors around Sohna Road cover this zone well.',
            ],
            'tips' => [
                'Townships such as Nirvana Country have several gates; tell the tutor which one is nearest your block.',
                'For Classes 9 to 12, a tutor who has taught your board\'s recent papers matters more than a short commute.',
                'Weekend mornings are a good slot here: the road is quieter and students are fresher.',
            ],
        ],
        'Southern Peripheral Road' => [
            'guide' => 'gurgaon-golf-course-extension-spr-tuition-guide',
            'intro' => [
                'The sectors along the Southern Peripheral Road are mostly newer high-rise societies, some still growing, with young families and a wide mix of boards. Distances between societies are longer than in older Gurugram.',
                'Tutors living on Golf Course Extension Road or Sohna Road are the most practical for home classes here. For Classes 11 and 12, many families use a hybrid plan: a weekly home session and online classes on the other days.',
            ],
            'tips' => [
                'Check how long the tutor\'s drive actually is at your slot time, not the distance on the map.',
                'For a newer society, share the exact tower and gate details before the first class.',
                'Online classes work well here for senior students: ask for a writing tablet or a camera on the notebook.',
            ],
        ],
        'New Gurugram' => [
            'guide' => 'new-gurgaon-dwarka-expressway-tuition-guide',
            'intro' => [
                'New Gurugram, Sectors 81 to 95, is made up largely of newer gated societies spread over a wide area, with longer drives between them than in the older city. Families here often need tutors across all boards and classes.',
                'Fewer tutors live in these sectors than in central Gurugram, so the nearest good tutor may be some distance away. This is where online and hybrid classes help most: they let you choose on quality, not only on distance.',
            ],
            'tips' => [
                'Ask for tutors in your zone first, and online tutors as a second option if the local choice is thin.',
                'Hybrid plans (home at the weekend, online on weekdays) keep a specialist tutor practical.',
                'Fix a regular slot: tutors travelling out here plan their week around it.',
            ],
        ],
        'Dwarka Expressway' => [
            'guide' => 'new-gurgaon-dwarka-expressway-tuition-guide',
            'intro' => [
                'The sectors along the Dwarka Expressway are mostly newer high-rise societies, many of them recently occupied, with families moving in from Delhi and other cities in the middle of a school year. Settling into a new board or a new school\'s pace is a common reason families here look for a tutor.',
                'Tutors living in the expressway sectors or in nearby Palam Vihar and the older sectors can reach many societies. For specialist subjects, online or hybrid classes widen the choice considerably.',
            ],
            'tips' => [
                'If your child has changed board or school, tell us: we look for a tutor who has handled that switch.',
                'Share the society, tower and gate details early; newer societies can be hard to find.',
                'An online demo first, then a home demo, is a quick way to test two tutors in a week.',
            ],
        ],
        'Old Gurugram' => [
            'guide' => 'old-gurgaon-palam-vihar-tuition-guide',
            'intro' => [
                'Old Gurugram, Sectors 1 to 23 and Palam Vihar, is the city\'s older residential core: independent houses, builder floors and established colonies, with busy local markets. Most families here look for CBSE tutors, and many for ICSE, from middle school up to Class 12.',
                'Many tutors live in these sectors, so home tuition is usually easy to arrange, and short distances make two or three sessions a week practical.',
            ],
            'tips' => [
                'Parking can be tight in older colonies: tell the tutor where they can leave a scooter or car.',
                'With plenty of local tutors, compare two demos before you decide.',
                'For JEE or NEET alongside the board, ask how the tutor will fit around coaching timings.',
            ],
        ],
    ],
    // Noida (30 Sep 2026), from database/seo-content/areas/noida-zone-guides.json.
    'Noida' => [
        'Old Noida' => [
            'guide' => 'old-and-central-noida-tuition-guide',
            'intro' => [
                'Old Noida, the first sectors at the Delhi end of the city from Sector 11 to Sector 33, is mostly independent houses and builder floors on Noida Authority plots, many allotted in the 1980s, with a few RWA colonies and gated societies. Sector 15A, where the DND Flyway lands, is low-density bungalows and villas. CBSE is the most common board in Noida, with ICSE, IB and IGCSE also taught.',
                'The Blue Line runs through the zone, with stations at Noida Sector 15, 16 and 18 and Botanical Garden, so tutors who travel by metro can reach many homes on foot. In houses and floors there is no gate pass to arrange. The main thing to plan around is evening traffic towards the DND and the Film City Flyover.',
            ],
            'tips' => [
                'A tutor coming from outside the zone is best booked before the evening rush towards the DND and the Mahamaya Flyover.',
                'Tell the tutor where to park: older lanes and the roads around busy sector markets fill up in the evening.',
                'If a tutor travels by metro, ask which station they will use, so you can give simple walking directions from it.',
            ],
        ],
        'Central Noida' => [
            'guide' => 'old-and-central-noida-tuition-guide',
            'intro' => [
                'Central Noida, from the Botanical Garden and Noida City Centre through Sectors 34 to 53, is largely plotted Noida Authority housing: Sectors 50 and 51 each have around a thousand houses in lettered blocks, alongside group-housing blocks, builder floors and urban villages such as Morna, Sadarpur and Baraula. Tutors can be matched for CBSE, ICSE and the international boards, from primary classes to Class 12.',
                'This is the best-connected zone for tutors who use the metro. The Blue Line stops at Noida Sector 34, Noida City Centre, Golf Course and Noida Sector 52, and the Aqua Line starts at Noida Sector 51, linked to Sector 52 by a walkway. Tutors who drive meet peak-hour congestion on Dadri Main Road and Amrapali Road.',
            ],
            'tips' => [
                'Ask tutors who live along the Blue or Aqua Line: they can reach most of this zone without driving.',
                'In the plotted blocks the tutor comes straight to your door; in a group-housing block, add them to the visitor list once.',
                'If the tutor drives in on Dadri Main Road or Amrapali Road, a slot before the evening peak keeps the class on time.',
            ],
        ],
        'Sector 62 Belt' => [
            'guide' => 'noida-sector-62-and-70s-tuition-guide',
            'intro' => [
                'The Sector 62 belt, Sectors 55, 56, 61 and 62, sits beside one of Noida\'s biggest office and institutional areas along NH-9. Housing ranges from cooperative group housing societies with two- and three-bedroom flats in Sector 62, to mixed societies, floors and houses in Sector 61, plotted houses in Sector 55 and Noida Authority Janta and LIG flats in Sector 56. Tutors can be matched for CBSE, ICSE and the international boards.',
                'The Blue Line extension serves the belt at Noida Sector 61, Sector 59, Sector 62 and Noida Electronic City, and Sector 52 links to the Aqua Line. Office traffic is the main constraint: residents report congestion on NH-9 at peak hours and near the office belts and stations, so timing matters more here than distance.',
            ],
            'tips' => [
                'Avoid starting a class at the office rush: an after-school slot or one after the evening peak is easier for tutors to keep.',
                'In Sectors 55 and 56 the nearest metro stations are outside the sector, so expect tutors to arrive by two-wheeler, auto or cab.',
                'In a CGHS society, register the tutor at the gate once so later visits start on time.',
            ],
        ],
        'Sectors 70–82' => [
            'guide' => 'noida-sector-62-and-70s-tuition-guide',
            'intro' => [
                'Sectors 70 to 82 have two halves. Sectors 74 to 79 are mainly high-rise gated group-housing societies built on large plots allotted to builders, while Sectors 70 to 73 are lower-rise, with builder floors, independent houses, smaller societies and Sarfabad village in Sector 73. Sector 82 is an older pocket-based sector with housing from EWS flats to HIG duplexes. Tutors can be matched for all boards and classes.',
                'The Aqua Line serves the belt from Noida Sector 50, Sector 76, Sector 101 and NSEZ, so tutors who live along it can ride in and walk to your tower. Vikas Marg is the main road, and residents report heavy congestion on it at office peak hours, with bottlenecks at the Sector 71/51 intersection and near Sector 101 station.',
            ],
            'tips' => [
                'In the tower sectors, pass the tutor\'s name to security and your block before the first class, and keep the same weekly slot.',
                'A tutor based inside the belt avoids the Vikas Marg and Sector 71/51 bottlenecks at peak hours.',
                'Ask tutors who live on the Aqua Line: a metro ride plus a short walk is often quicker than driving in the evening.',
            ],
        ],
        'Noida Expressway' => [
            'guide' => 'noida-expressway-and-extension-tuition-guide',
            'intro' => [
                'The sectors along the Noida–Greater Noida Expressway, from Sector 92 to Sector 168, are dominated by high-rise gated societies with two- to four-bedroom flats across affordable, mid and premium segments, with offices and business parks nearby. A few sectors near the start of the belt, such as 92, 99 and 108, are plotted with independent houses. Tutors can be matched for CBSE, ICSE, IB and IGCSE.',
                'The expressway carries heavy peak-hour traffic, with slow-moving traffic in both directions in the evening, so a tutor from a nearby sector who can use local roads is the most reliable choice. The Aqua Line runs along much of the expressway, with stations including Noida Sector 137 and Sectors 142 to 148, which helps tutors who come by metro.',
            ],
            'tips' => [
                'Ask for tutors in neighbouring sectors first; a tutor who has to drive along the expressway at peak hour will struggle to arrive on time.',
                'For specialist subjects, a hybrid plan with one home session a week and online classes in between makes a tutor from further away practical.',
                'Large societies can take several minutes from gate to tower: pre-approve the visit and build that into the start time.',
            ],
        ],
        'Near Noida Extension' => [
            'guide' => 'noida-expressway-and-extension-tuition-guide',
            'intro' => [
                'The sectors towards the Greater Noida West border, Sectors 115 to 122, mix large gated societies with plotted sectors and old villages. Sectors 119 to 121 are mainly group housing, Sector 121 has one society of about 2,600 flats, and some societies are still being completed. Sectors 116 and 122 are plotted Noida Authority sectors, and Sector 115 is centred on Sorkha village and the Harit Upvan urban forest.',
                'Getting here can be slow: Gaur Chowk, the junction towards Noida Extension, carries heavy daily traffic while an underpass is built, so allow extra time at peak hours. The nearest metro for Sectors 115 and 116 is Noida Sector 76 on the Aqua Line. A tutor who already teaches in the same cluster of sectors is usually the steadiest choice.',
            ],
            'tips' => [
                'In a big society, ask whether the tutor already teaches another family there: it makes a regular slot easier to keep.',
                'A tutor coming through Gaur Chowk in the evening should allow extra time, or teach online on busy days.',
                'Where few tutors live nearby, start with online classes and add a home session once you find the right tutor.',
            ],
        ],
    ],
    // Greater Noida (30 Sep 2026), from database/seo-content/areas/greater-noida-zone-guides.json.
    'Greater Noida' => [
        'Greater Noida West' => [
            'guide' => 'greater-noida-west-tuition-guide',
            'intro' => [
                'Greater Noida West, still widely called Noida Extension, takes in Sectors 1, 2, 3, 4, 10, 12, 16B and 16C, Techzone 4 and old villages such as Shahberi, Bisrakh, Patwari and Haibatpur. Unlike the Greek-letter sectors, it is overwhelmingly high-rise group housing: large townships, dense tower belts and newer societies still filling in, with builder floors mainly in village pockets such as Shahberi. Tutors can be matched for CBSE, ICSE and the other boards, from primary classes to Class 12.',
                'There is no working metro station in the belt: the nearest is Noida Sector 51 on the Aqua Line, and an extension ending in Sector 4 near Kisan Chowk is planned, not open. Tutors come by bike, car or shared auto, and Gaur Chowk, the busiest crossroad in Noida Extension, and Ek Murti Chowk slow down in the evening. The upside is density: a tutor teaching in one tower can often take another student nearby.',
            ],
            'tips' => [
                'Approve the tutor on your society\'s visitor app or gate register before the first class, and share the tower and flat number.',
                'If the tutor has to come through Gaur Chowk or Ek Murti Chowk, pick a slot that avoids the evening rush or leave some slack.',
                'In newer sectors where roads are still being finished, send a map pin and name the right gate to use.',
            ],
        ],
        'Alpha–Delta & Pari Chowk' => [
            'guide' => 'greater-noida-sectors-tuition-guide',
            'intro' => [
                'Alpha, Beta and Gamma are the oldest of Greater Noida\'s Greek-letter sectors, and with the Delta sectors and the plotted sectors near Pari Chowk they form the city\'s original core. Most families live in independent houses and builder floors on authority plots, with busy markets such as Jagat Farm in Gamma 1. Sector P-4, the Builders Area, is the main exception, with group-housing towers. Tutors can be matched for CBSE, ICSE and the international boards.',
                'This is the best-connected zone for tutors who use public transport. The Aqua Line stops at Pari Chowk, ALPHA 1, DELTA 1 and GNIDA Office, and residents rate autos and e-rickshaws well, so a tutor can ride in from Noida and finish the trip by e-rickshaw. In the plotted sectors there is no society gate. Pari Chowk, where the Noida–Greater Noida Expressway ends, backs up at peak hours.',
            ],
            'tips' => [
                'Ask tutors who live along the Aqua Line: ALPHA 1 and DELTA 1 stations sit inside the zone.',
                'Around Jagat Farm the roads fill up in the evening, so tell the tutor to park or be dropped on your block\'s inner road.',
                'A tutor from the Alpha, Beta, Gamma or Delta sectors avoids Pari Chowk at peak hour and keeps weekday timings more reliable.',
            ],
        ],
        'Pi, Sigma & Sectors 36–37' => [
            'guide' => 'greater-noida-sectors-tuition-guide',
            'intro' => [
                'South of Pari Chowk towards Kasna, this zone is mostly plotted and spacious. Sector 36 is privately owned independent houses on wide roads, plots dominate Sector 37, and Swarn Nagri mixes houses, floors and villas with a few apartment blocks. The Sigma sectors range from plots in gated colonies to newer premium towers in Sigma 3, while Pi 1 and Pi 2 are mostly apartment societies with villa enclaves and plotted colonies alongside. Tutors can be matched for all boards.',
                'Metro access is less direct than near Pari Chowk. DELTA 1 is the usual station, with ALPHA 1, Pari Chowk and GNIDA Office serving some pockets, and the last leg is by auto or e-rickshaw. The Surajpur–Kasna road slows down at busy hours, parking is tight in parts of Sector 37, and Pari Chowk is busy at peak hours, so a tutor on a two-wheeler from nearby is often easiest.',
            ],
            'tips' => [
                'In plotted streets that are still filling up, send the tutor a map pin and a landmark for the first visit.',
                'In the Pi societies and the new Sigma 3 projects, register the tutor with security before the first class.',
                'Afternoon or early-evening slots avoid the worst of Pari Chowk and the Surajpur–Kasna road at peak hours.',
            ],
        ],
        'Omega, Chi & Phi' => [
            'guide' => 'greater-noida-sectors-tuition-guide',
            'intro' => [
                'South-west of Pari Chowk, where the Noida–Greater Noida and Yamuna expressways meet, this zone mixes housing types. Omega 1 is largely gated communities with bungalows, villas and flats, and Omega 2 is mostly a large integrated township beside Pari Chowk. Chi 2 and Chi 5 are gated group housing, Chi 5 bordering Noida Sector 150, while Chi 3 and Phi 3 are mainly independent houses on authority plots and Phi 2 has mid-sized, more affordable societies. Tutors can be matched for all boards.',
                'Pari Chowk and Knowledge Park II are the Aqua Line stations this zone uses, and Omega 2 is easy for a tutor coming by metro. Deeper into the Chi and Phi sectors, residents say buses and shared autos are thin, so tutors mostly arrive by two-wheeler, or by metro and e-rickshaw. Most trips pass through Pari Chowk, which jams at office hours, and in Phi 3 many families prefer daytime or early-evening classes.',
            ],
            'tips' => [
                'In the gated communities and societies, give security the tutor\'s name, phone number and vehicle a day before the first class.',
                'Fix a slightly earlier evening slot: Pari Chowk congestion is what usually makes a tutor late here.',
                'If the tutor comes by metro, ask whether they will use Pari Chowk or Knowledge Park II, so you can arrange the last stretch.',
            ],
        ],
        'Zeta & Eta' => [
            'guide' => 'greater-noida-sectors-tuition-guide',
            'intro' => [
                'In the north-east of Greater Noida, beyond the Delta sectors, the Zeta and Eta sectors are greener, more open and away from the Pari Chowk corridor. Zeta 1 has wide roads and neat blocks, with society flats alongside villas, houses and builder floors; Zeta 2 is mostly ready apartments in societies; Eta 1 is largely independent houses on authority plots; and Eta 2 is an emerging sector of newer group-housing societies. Tutors can be matched for CBSE, ICSE and other boards.',
                'Residents like the low traffic; public transport is limited and markets are not on the doorstep, and in Eta 2 construction is still going on in places. GNIDA Office is the usual metro stop, with Depot and DELTA 1 serving some pockets, and Boraki and Dadri railway stations also serve the area. A tutor coming by metro usually needs an auto for the last leg.',
            ],
            'tips' => [
                'Tutors living in Zeta, Eta or the Delta sectors are the easiest to keep on a regular weekly slot.',
                'In the newer Eta 2 societies, plan the tutor\'s route and gate entry in advance, as the link from the station can be weak.',
                'For specialist subjects, pair a local tutor with online classes rather than waiting for someone to travel in.',
            ],
        ],
        'Omicron, Mu & Xu' => [
            'guide' => 'greater-noida-sectors-tuition-guide',
            'intro' => [
                'Towards the Surajpur and Ecotech side of the city, the Omicron, Mu and Xu sectors are mostly independent houses and villas on authority plots, and several are among the more affordable parts of Greater Noida. Omicron 1 is the exception, with high-rise societies making up most homes, Omicron 3 mixes societies with plotted houses, and Mu 2 is known for flats built under the authority\'s own housing scheme. Tutors can be matched for all boards and classes.',
                'Most homes need no gate pass, but getting there takes planning. GNIDA Office is the nearest Aqua Line stop for most of the zone, public transport inside Omicron 1A, Xu 1 and Xu 2 is limited, and connecting roads towards Pari Chowk get congested at peak hours. Mu 1 and Mu 2 are easier, with markets and autos closer at hand. A tutor with a two-wheeler is usually the most dependable choice.',
            ],
            'tips' => [
                'Ask at the demo how the tutor will travel: autos and buses rarely come inside some of these sectors.',
                'Tutors who live in the neighbouring Omicron, Mu, Xu or Sigma sectors are the easiest to keep on a fixed timetable.',
                'In Omicron 1 and the authority flat blocks, register the tutor at the gate; in plotted homes they can come straight to the door.',
            ],
        ],
    ],
    // Ghaziabad (30 Sep 2026), from database/seo-content/areas/ghaziabad-zone-guides.json.
    'Ghaziabad' => [
        'Indirapuram' => [
            'guide' => 'indirapuram-tuition-guide',
            'intro' => [
                'Indirapuram is a planned trans-Hindon township, founded in 1996 between NH-9 and the Noida border and organised into named khands such as Ahinsa, Nyay, Shakti, Gyan, Niti, Abhay and Vaibhav, most of them split into numbered pockets. Housing shifts pocket by pocket: the Ahinsa pockets and Abhay Khand 3 are largely apartment societies, Shakti Khand 3 and Niti Khand 2 are mostly independent houses and builder floors, and the rest mix both. Tutors can be matched for CBSE, ICSE and the international boards.',
                'Two Blue Line stations serve the township: Vaishali, nearest for the Nyay, Abhay and Gyan pockets, and Noida Electronic City, which has an exit on the Indirapuram side and suits the Ahinsa pockets and Vaibhav Khand. E-rickshaws and shared autos cover the last leg. Kala Pathar Road, Kaveri Marg, CISF Road and Dr Sushila Naiyar Marg are busiest at office hours, and Niti Khand 1 has little public transport inside it, so tutors with a two-wheeler manage it most easily.',
            ],
            'tips' => [
                'Check whether your pocket is society or builder floor: in a society, give security the tutor\'s name and phone number before the first class; in a builder floor, share the pocket number and a landmark.',
                'Tell the tutor which station to use: Vaishali for the Nyay, Abhay and Gyan pockets, Noida Electronic City for the Ahinsa pockets, Niti Khand 1 and Vaibhav Khand.',
                'Start weekday lessons once the office rush on Kala Pathar Road and CISF Road has passed, and keep an online session in reserve for a specialist senior subject.',
            ],
        ],
        'Vaishali & Kaushambi' => [
            'guide' => 'vaishali-vasundhara-sahibabad-tuition-guide',
            'intro' => [
                'Vaishali sits on the Delhi–UP border in numbered sectors along Madan Mohan Malviya Marg, with Kaushambi directly opposite Anand Vihar. The older Sectors 1, 2, 3 and 6 are mainly builder floors and apartments; Sector 4, developed by the Ghaziabad Development Authority, has parks and a range of homes; Sector 5 adds independent houses and plots; and Sectors 7 and 9 are mostly apartment complexes. Kaushambi is compact, with housing societies among shopping complexes, hotels and offices.',
                'This is the end of the Blue Line branch from Yamuna Bank: Vaishali station stands in Sector 4 and Kaushambi is one stop before it, both open since 2011. Across the border, Anand Vihar links the Blue and Pink Lines, the railway terminal, the interstate bus terminus and the underground Namo Bharat station. Tutors from East Delhi and Noida can come without a car and finish on foot or by e-rickshaw, which widens the choice for home classes.',
            ],
            'tips' => [
                'Name the right station: Kaushambi for Sector 3 and Kaushambi itself, Vaishali for Sectors 4, 5, 6, 7 and 9; Sectors 1 and 2 are close to both.',
                'In Sector 7, Sector 9 and Kaushambi, register the tutor at the society gate and share the tower and flat; in the builder-floor sectors, share the floor and a landmark.',
                'The roundabout near Vaishali station and the border roads are busiest at office hours, so a mid-afternoon, later-evening or weekend slot keeps lessons on time.',
            ],
        ],
        'Vasundhara' => [
            'guide' => 'vaishali-vasundhara-sahibabad-tuition-guide',
            'intro' => [
                'Vasundhara is a township of numbered sectors planned by the UP Awas Evam Vikas Parishad, the state housing board, between Vaishali, Indirapuram, Mohan Nagar and Sahibabad. The board released group-housing plots in sectors such as 2, 3, 5 and 10, so apartment blocks stand beside builder floors and houses. The northern sectors are mostly low-rise floors, middle sectors such as 11 and 13 mix flats, floors, houses and plots, and Sectors 15 to 18 lean to apartments.',
                'No metro station stands inside the township; stations ring it instead. Vaishali on the Blue Line serves Sectors 13 to 18, Mohan Nagar on the Red Line serves the northern sectors, Shyam Park helps Sectors 11 and 12, and the Sahibabad Namo Bharat station is on Madan Mohan Malviya Marg. Most homes are not a walk from any of them, so tutors take an e-rickshaw for the last stretch or ride in by scooter from Indirapuram and Vaishali.',
            ],
            'tips' => [
                'Match the station to your sector: Vaishali for Sectors 13 to 18, Mohan Nagar for the northern sectors, and Shyam Park or Vaishali for Sectors 11 and 12.',
                'The markets in Sectors 11 and 16 crowd the inner lanes in the evening, so ask the tutor to arrive after the rush or book a weekend morning.',
                'With no station inside Vasundhara, a tutor who rides a scooter from Indirapuram, Vaishali or a neighbouring sector is often the easiest to schedule.',
            ],
        ],
        'Sahibabad & Rajendra Nagar' => [
            'guide' => 'vaishali-vasundhara-sahibabad-tuition-guide',
            'intro' => [
                'Along GT Road, Sahibabad is a cluster of industrial, residential and commercial areas touching the Delhi and Noida borders. Its colonies are long settled and mostly plotted: Rajendra Nagar in numbered sectors of floors and houses, with Lajpat Nagar and Shyam Park beside it; Shalimar Garden and its Extensions north of GT Road, with low-rise flats often above shops; Shaheed Nagar at the Dilshad Garden border; the growing pocket of Pasonda; and Mohan Nagar, known for its large markets.',
                'The Red Line extension, opened in March 2019, runs above GT Road with stations at Shaheed Nagar, Raj Bagh, Major Mohit Sharma Rajendra Nagar, Shyam Park, Mohan Nagar and Arthala, so many homes are a short walk or e-rickshaw ride from a platform. Sahibabad also has a Namo Bharat station, open since October 2023, and Sahibabad Junction on the main railway. GT Road crowds at office and factory shift changes, and parking in the inner lanes is tight.',
            ],
            'tips' => [
                'Ask for a tutor who comes by Red Line: Shaheed Nagar, Raj Bagh, Rajendra Nagar, Shyam Park and Mohan Nagar stations sit close to most colonies, and a car is hard to park in the inner lanes.',
                'Avoid slots that clash with shift changes on GT Road; late-afternoon or weekend lessons usually start on time.',
                'Most homes open straight onto the lane with no gate, so put the block, floor and a nearby landmark in the booking, especially in Shalimar Garden and Pasonda.',
            ],
        ],
        'Surya Nagar & Ramprastha' => [
            'guide' => 'vaishali-vasundhara-sahibabad-tuition-guide',
            'intro' => [
                'On Ghaziabad\'s western edge against the East Delhi border, Surya Nagar, Ramprastha, Chander Nagar and Brij Vihar form a compact plotted pocket. Surya Nagar is mostly independent builder floors, many of them three-bedroom, around neighbourhood parks; Ramprastha Colony is long established, with wide roads and independent houses; Chander Nagar has floors with markets within walking distance; and Brij Vihar is a block-wise colony of two- and three-bedroom floors. Vivek Vihar and Dilshad Garden lie across the border.',
                'There is no station inside the pocket, so tutors connect from outside it: Dilshad Garden or Jhilmil on the Red Line on the Delhi side, Kaushambi or Vaishali on the Blue Line, or Anand Vihar railway station, followed by an auto for the last stretch. Local buses stop at Surya Nagar and Ramprastha. Link Road and Chaudhary Charan Singh Marg are the main roads through the colonies, and the border roads fill up at office hours.',
            ],
            'tips' => [
                'There is no society gate here, so give the block letter and house number when you book; in these lettered-block colonies that is usually enough to find you.',
                'Tutors living just across the border in East Delhi are worth considering; ask which station they will use, whether Dilshad Garden, Jhilmil, Kaushambi or Vaishali.',
                'Fix one regular after-school slot that avoids the office rush on the border roads, and add an online tutor for a niche or senior subject.',
            ],
        ],
        'Raj Nagar, Kavi Nagar & Old Ghaziabad' => [
            'guide' => 'raj-nagar-and-old-ghaziabad-tuition-guide',
            'intro' => [
                'East of the Hindon lies the older city. Raj Nagar is one of its first planned parts, numbered sectors around the busy Raj Nagar District Centre; Kavi Nagar, Shastri Nagar and Govindpuram are lettered-block colonies of floors, houses and some villas; Sanjay Nagar is widely known as Sector 23; and Nehru Nagar, Lohia Nagar and Patel Nagar sit near the old centre. Madhuban Bapudham is a large GDA township still filling up, and Nandgram offers affordable houses off Meerut Road.',
                'Almost every home here is plotted, so the tutor comes to the door. Rail reaches the zone at its edges: Shaheed Sthal, the Red Line terminus on GT Road, with Hindon River before it; the Ghaziabad Namo Bharat station in Patel Nagar 2nd, which interchanges with the Red Line; Guldhar Namo Bharat on Meerut Road for Raj Nagar and Sanjay Nagar; and Ghaziabad Junction, in service since 1864. Govindpuram and Madhuban Bapudham sit further from the metro.',
            ],
            'tips' => [
                'Tell the tutor your nearest stop: Shaheed Sthal or the Ghaziabad Namo Bharat station for Patel Nagar, Lohia Nagar and Nehru Nagar, and Guldhar for Raj Nagar and Sanjay Nagar, then an auto.',
                'Evening traffic on Hapur Road, around Meerut Mod and near the District Centre is the main delay, so fix a slot a little before or after the rush.',
                'In Govindpuram and Madhuban Bapudham, where the metro is not close, look for a tutor who lives in the same colony, with online sessions for specialist subjects.',
            ],
        ],
        'Raj Nagar Extension & NH-9 Corridor' => [
            'guide' => 'raj-nagar-and-old-ghaziabad-tuition-guide',
            'intro' => [
                'This zone holds Ghaziabad\'s newest housing. Raj Nagar Extension, north of old Raj Nagar, is mainly high-rise apartment societies with some villas and builder floors. Along NH-9, Siddharth Vihar is gated towers, many recently completed, and Crossings Republik is an integrated township of group housing built on land around Dundahera village. Vijay Nagar, spread across NH-9 and the expressway, is older and largely plotted, and Pratap Vihar beside it has numbered sectors of houses and some complexes.',
                'The Hindon Elevated Road, opened in March 2018, links Raj Nagar Extension with UP Gate on the Delhi border, and the Delhi–Meerut Expressway, open to Dasna since April 2021, runs along the NH-9 side. Guldhar Namo Bharat station serves Raj Nagar Extension, with Hindon River and Shaheed Sthal the nearest Red Line stops. Crossings Republik has no metro, so tutors arrive by road, though its size means some tutors already live inside it.',
            ],
            'tips' => [
                'In Raj Nagar Extension, Siddharth Vihar and Crossings Republik, add the tutor to the society visitor list before the demo and share the tower and flat number.',
                'Ask first for tutors who live in your own township; in Raj Nagar Extension, a tutor on the Namo Bharat line can use Guldhar station.',
                'Highway junctions on NH-9 slow down at office hours, so agree a slot away from the evening peak, and keep an online option for specialist subjects.',
            ],
        ],
    ],
    // Faridabad (30 Sep 2026), from database/seo-content/areas/faridabad-zone-guides.json.
    'Faridabad' => [
        'NIT & Old Faridabad' => [
            'guide' => 'nit-and-central-faridabad-tuition-guide',
            'intro' => [
                'This is Faridabad before the sectors: Old Faridabad, the core of a town founded in 1607, and NIT, the New Industrial Township that families displaced by Partition helped build from 1949. Homes are independent houses, builder floors and plots on old, narrow lanes, split into numbered parts such as NIT 1, 2, 3 and 5, with Jawahar Colony by the railway line and Dabua Colony in Sector 50 around its own sabzi mandi.',
                'There are almost no gated complexes, so a tutor comes straight to the door, but market lanes are crowded in the evening and parking is hard to find. Bata Chowk and Neelam Chowk Ajronda on the Violet Line sit at the edges of NIT, Old Faridabad station is in Sector 16A on Mathura Road, and Faridabad railway station is in Sector 20A, so the metro plus a short auto ride suits most tutors.',
            ],
            'tips' => [
                'No gate pass is needed, but NIT and Dabua lanes look alike to a newcomer: send the NIT part or block, the house number and a landmark such as the nearest market or mandi.',
                'Point the tutor to the right station: Bata Chowk or Neelam Chowk Ajronda for NIT, Jawahar Colony and Dabua, Old Faridabad for the old town, with an auto for the last leg.',
                'The railway crossing and market roads jam in the evening, so book a slot soon after school or on a weekend morning, and add an online specialist for a senior board subject.',
            ],
        ],
        'Central Sectors (Mathura Road)' => [
            'guide' => 'nit-and-central-faridabad-tuition-guide',
            'intro' => [
                'The central sectors are the planned HSVP (formerly HUDA) grid along Mathura Road, mostly independent houses and builder floors on wide internal roads, with a few apartment buildings and gated societies. Sector 16 has roomy houses and a busy market, Sector 17 leans upmarket with villas, Sector 19 is largely rented builder floors, and Sector 10 is mostly the Housing Board Colony in lettered blocks and pockets. Sectors 7, 8, 9 and 11 to the south are quieter and greener.',
                'Few parts of the city are as easy to reach by metro. Neelam Chowk Ajronda stands inside Sector 15A, Old Faridabad inside Sector 16A, Bata Chowk inside Sector 12 beside the state sports complex, and Badkhal Mor right next to Sector 19; Escorts Mujesar and Sihi serve the southern sectors. The Sector 21 pockets and 21C stretch towards Badkhal along the Surajkund–Badkhal road, where a two-wheeler helps.',
            ],
            'tips' => [
                'In Sector 10, give the block and pocket as well as the house number; in the apartment buildings of Sectors 12, 17 and 21C, pass the tutor\'s name to security before the demo.',
                'Tell the tutor which station is closest: Neelam Chowk Ajronda for 15 and 15A, Old Faridabad for 16 to 18, Badkhal Mor for 19 and 21, Escorts Mujesar for 7 to 11.',
                'Mathura Road, the Badkhal flyover and the Sector 15 and 16 markets are slowest at the evening peak, so choose a slot that starts before the rush or after it has cleared.',
            ],
        ],
        'Sectors 28–31 & 37' => [
            'guide' => 'nit-and-central-faridabad-tuition-guide',
            'intro' => [
                'The northern sectors lie between central Faridabad and the Delhi border, and each is close to a Violet Line station. Sector 28 has its own stop and plotted housing that has largely been rebuilt as three- and four-bedroom builder floors around a HUDA market. Sector 29 adds some flats in gated societies. Part of Sector 30 is the Faridabad Police Lines, with flats and floors around it, and Sector 37 is a green residential sector on the border edge.',
                'Mewla Maharajpur station stands inside Sector 31, where an old chhatri and well were declared state-protected monuments in 2018, and homes mix with shops and offices along Mathura Road. With Sarai, NHPC Chowk, Mewla Maharajpur, Sector 28 and Badkhal Mor all nearby, families here can draw on tutors from south Delhi as easily as from Faridabad, as the train avoids the Mathura Road queues at the border crossing.',
            ],
            'tips' => [
                'Builder floors in Sector 28 often share one entrance with an intercom, so give the floor number and which bell to ring; in Sector 29 societies, register the tutor at the gate.',
                'For Sector 37, suggest Sarai station (Badarpur Border is also close); for 28 to 31, the Sector 28 or Mewla Maharajpur stops, with an auto from the Sector 28/29 chowk if needed.',
                'Roads towards Mathura Road fill at office hours, so a late-afternoon slot or one after the evening rush is steadiest; consider a south Delhi tutor who comes by metro.',
            ],
        ],
        'Surajkund & Sainik Colony' => [
            'guide' => 'ballabhgarh-and-surajkund-tuition-guide',
            'intro' => [
                'On the western side the city meets the Aravalli hills. Surajkund, a tenth-century reservoir, hosts its international crafts mela every February, and the Gurugram–Faridabad road runs through the hills nearby. Sector 43 sits on the Surajkund–Badkhal Road with a university campus and large school campuses among floors and group-housing flats, while Sectors 45 and 46 are quieter mixes of apartment complexes, floors and plotted houses near the green belt.',
                'Sainik Colony in Sector 49, settled largely by ex-servicemen, and older Sector 48 are mostly houses, floors and plots near Badkhal Lake. Charmwood Village, a large township close to Surajkund and the Delhi border, has apartments and villas behind guarded gates. No station climbs the hill: tutors come from Sector 28, NHPC Chowk, Mewla Maharajpur, Badkhal Mor or Bata Chowk by auto, or from Badarpur Border for Charmwood, or ride their own two-wheeler.',
            ],
            'tips' => [
                'Charmwood Village and the Sector 43, 45 and 46 apartment complexes have guarded gates, so add the tutor to the visitor list before the first class; houses in Sainik Colony and Sector 48 need only the address.',
                'Plan the last leg, not the train: agree whether the tutor will take an auto from a Violet Line stop or come by two-wheeler, and share a map pin for the lane.',
                'The Surajkund–Badkhal Road is busy at school and college timings and around the February crafts mela, so pick a slightly later slot and switch to online on mela days.',
            ],
        ],
        'Ballabhgarh & Southern Sectors' => [
            'guide' => 'ballabhgarh-and-surajkund-tuition-guide',
            'intro' => [
                'Ballabhgarh, founded in 1739 and now a tehsil of the district, is the old market town at the southern end of Faridabad. Its older colonies around the main market, such as Adarsh Nagar and Chawla Colony, have houses and small floors on narrow plots, while the HSVP sectors on the bypass side have bigger plots and wider roads. Sectors 2, 3 and 4 are settled plotted sectors; Sectors 22, 23 and 57 sit beside industrial areas.',
                'The Violet Line was extended here in November 2018, adding Sihi and the Ballabhgarh terminus next to Ballabhgarh railway station, where EMU trains also stop. Along the Ballabhgarh–Sohna Road, Sectors 55 and 56 are affordable plotted sectors still developing, and Sectors 62, 64 and 65 on the Mohna Road side combine new builder floors with group housing and authority flats. Sanjay Colony in Sector 23 has narrow lanes and many rented floors.',
            ],
            'tips' => [
                'In the old-town lanes of Adarsh Nagar and Sanjay Colony, a car is awkward: prefer a tutor on a two-wheeler or agree a pickup point; in the group housing of Sectors 62 and 65, register the tutor at the gate.',
                'Tutors from further north can take the Violet Line to Sihi or the Ballabhgarh terminus, or an EMU train to Ballabhgarh station, and finish by auto or e-rickshaw.',
                'Factory shift changes load the Sohna Road and the roads round Sectors 22 and 57, so fix a weekend or early-evening slot and leave some buffer.',
            ],
        ],
        'Greater Faridabad (Sectors 75–80)' => [
            'guide' => 'greater-faridabad-neharpar-tuition-guide',
            'intro' => [
                'Across the Agra canal lies Greater Faridabad, known locally as Neharpar, planned with Sectors 66 to 74 for industry and Sectors 75 to 89 for housing. The southern half is Sectors 75 to 80: multi-storey societies and two- and three-bedroom builder floors in Sector 75, society flats and some plots in Sector 76 beside Neemka village, and large gated townships with one- to four-bedroom homes in Sector 77. Sector 78 is mostly society flats.',
                'Sector 79 is built around a large open-air street of shops, offices and restaurants that draws crowds in the evening and at weekends, and Sector 80, near Badauli village, sits on the line between the two halves of Neharpar. Tigaon Road, the Faridabad Bypass Road and NH-148NA carry the traffic, with the highway crossing the canal at Sehatpur bridge. The Violet Line stays on the old-city side, so metro riders need an auto across the canal.',
            ],
            'tips' => [
                'Almost every home here is in a society: add the tutor to the visitor list or gate app before the demo, and share the tower and flat number.',
                'Tutors coming by metro should use Escorts Mujesar or Sihi for Sectors 75 to 77 and Bata Chowk or Escorts Mujesar for 78 to 80, then take an auto over the canal.',
                'The canal crossings and the roads around the Sector 79 shopping street are busiest in the evening rush, so allow extra time for the first visits and keep an online session as a fallback.',
            ],
        ],
        'Greater Faridabad (Sectors 81–89)' => [
            'guide' => 'greater-faridabad-neharpar-tuition-guide',
            'intro' => [
                'The northern half of Neharpar, Sectors 81 to 89, is where much of Greater Faridabad\'s recent housing has gone up. Sectors 81, 82 and 83 are dominated by gated high-rise societies, including affordable-housing blocks in Sector 82, near villages such as Bathola, Kheri Khurd and Budena. Sector 84 stands apart, laid out in lettered blocks with block markets and a mix of plots, houses and apartments, and Sector 85 is mostly builder apartments and affordable societies.',
                'Kheri Road is the main link back across the canal, and Sector 87, still developing, lies close to that crossing, facing Sectors 16 to 18 on the other bank; Sector 86, near the bypass, is also among the nearer sectors. Sector 88 has a large hospital that opened in 2022, and Sector 89 has some of the newest societies. There is no metro inside Neharpar, and the planned FNG expressway crossing is not open.',
            ],
            'tips' => [
                'Large societies expect a visitor pass: pre-approve the tutor with security and call the gate before each early visit; in the lettered blocks of Sector 84 or the plots of Sector 87, share the block and house number.',
                'Metro riders should get off at Neelam Chowk Ajronda or Bata Chowk for Sectors 81 to 84, Old Faridabad or Neelam Chowk Ajronda for 85 to 87, and Bata Chowk or Badkhal Mor for 88 and 89.',
                'Kheri Road and the canal crossings clog in the evening, so a tutor who lives in Neharpar is easiest to schedule; otherwise pair one home lesson with online sessions.',
            ],
        ],
    ],
    // Delhi (30 Sep 2026), from database/seo-content/areas/delhi-zone-guides.json.
    'Delhi' => [
        'GK, Defence Colony & Lajpat Nagar' => [
            'guide' => 'south-delhi-tuition-guide',
            'intro' => [
                'Greater Kailash 1 and 2, Defence Colony, Lajpat Nagar, South Extension, East of Kailash and Pamposh Enclave form the older plotted heart of South Delhi. GK-1 was laid out from the early 1960s on Zamrudpur and Devli farmland, Defence Colony was set up in 1960 in blocks A to E, and Lajpat Nagar\'s four parts sit on both sides of the Ring Road. Most original houses have become builder floors, so one plot often holds several families.',
                'Rail links are strong. Lajpat Nagar is a Violet and Pink Line interchange, South Extension has been on the Pink Line since August 2018, Kailash Colony and Moolchand are on the Violet Line, and Greater Kailash has been on the Magenta Line since May 2018. East of Kailash mixes DDA pockets and CGHS flats with private floors, and block RWAs across the zone keep guards and visitor registers at their entrances.',
            ],
            'tips' => [
                'Give the block RWA guard the tutor\'s name and your floor before the demo; in GK and Defence Colony each floor often has its own bell, so say which one to ring.',
                'Match the station to the colony: Lajpat Nagar or Moolchand for Lajpat Nagar and Defence Colony, Greater Kailash for GK-1, GK-2 and Pamposh Enclave, South Extension for its two parts.',
                'Parking near the M Block and Central markets fills up in the evening, so favour a tutor who arrives by metro, and switch to an online session on the heaviest market evenings.',
            ],
        ],
        'Saket, Malviya Nagar & Hauz Khas' => [
            'guide' => 'south-delhi-tuition-guide',
            'intro' => [
                'This zone runs from Green Park and Safdarjung Enclave in the north, through Hauz Khas, Panchsheel Park, Sheikh Sarai and Malviya Nagar, to Saket, Sainik Farm, Chhatarpur and Mehrauli in the south. Housing varies widely: plotted floors in Hauz Khas and Green Park, DDA flats in Saket\'s lettered blocks and Sheikh Sarai\'s two phases, large plots in Panchsheel Park and Sainik Farm, and old village lanes in Mehrauli, one of Delhi\'s oldest continuously inhabited settlements.',
                'The Yellow Line is the backbone, with Green Park, Hauz Khas, Malviya Nagar and Saket open since September 2010, and Chhatarpur and Qutub Minar further south. Hauz Khas also meets the Magenta Line, which stops at Panchsheel Park and Chirag Delhi. The Outer Ring Road cuts across the zone, the Mehrauli-Badarpur Road serves Saket and Sainik Farm, and in Mehrauli\'s lanes a landmark is worth more than a house number.',
            ],
            'tips' => [
                'Use Hauz Khas, Green Park or Malviya Nagar for the northern colonies; for Sainik Farm and Chhatarpur, plan an auto from Saket, Chhatarpur or Qutub Minar station.',
                'Cross the Outer Ring Road junctions at Hauz Khas and Chirag Delhi before or after office hours, and keep clear of the Hauz Khas Village approach roads on weekend evenings.',
                'In Sainik Farm and in Saket\'s DDA blocks the guard checks visitors, so share the lane or block letter with the tutor\'s name; in Mehrauli, add a landmark and a map pin.',
            ],
        ],
        'Kalkaji, CR Park & Sarita Vihar' => [
            'guide' => 'south-delhi-tuition-guide',
            'intro' => [
                'Kalkaji, Chittaranjan Park, Alaknanda, Nehru Enclave, Sarita Vihar and Jasola Vihar sit between the Nehru Place office district and Mathura Road. CR Park began in the early 1960s as a colony for Bengali families from East Pakistan, on around 2,000 plots in lettered blocks, and Sarita Vihar was first planned for the 1982 Asian Games. Elsewhere the housing is mostly DDA and cooperative flats in pockets and complexes, each with its own gate.',
                'Kalkaji Mandir, where the Violet Line has run since October 2010 and the Magenta Line since December 2017, is the zone\'s hub. Govindpuri, Nehru Place, Jasola Apollo and Sarita Vihar are on the Violet Line; Nehru Enclave, Greater Kailash and Jasola Vihar Shaheen Bagh are on the Magenta Line. Alaknanda has no station of its own, and the temple and CR Park\'s Durga Puja draw very large crowds in festival weeks.',
            ],
            'tips' => [
                'Almost every pocket and complex keeps a visitor register: give the guard the tutor\'s name, pocket and flat number, and ask whether a regular-visitor pass is available.',
                'For Alaknanda, send the tutor to Nehru Enclave, Greater Kailash or Govindpuri and agree the auto leg; for Sarita Vihar and Jasola, Sarita Vihar and Jasola Apollo are the stops.',
                'Move to morning or online lessons during Durga Puja week in CR Park and on temple festival days, and keep tutors who drive off Mathura Road at office hours.',
            ],
        ],
        'Vasant Kunj, Vasant Vihar & Palam' => [
            'guide' => 'south-delhi-tuition-guide',
            'intro' => [
                'The zone stretches from the Ridge to the far side of the Cantonment. Vasant Kunj is lettered sectors of pockets and blocks with DDA flats, floors and newer towers; Vasant Vihar, grown from a 1959 house-building society, has six blocks and more than fifty diplomatic missions; Munirka pairs an old village with 1975 DDA walk-ups; and R K Puram is CPWD housing for central government officers. Palam, Mahavir Enclave, Dabri and Sagarpur are dense lanes of houses and floors.',
                'One line serves most of it: the Magenta Line from Janakpuri West to Botanical Garden, opened in May 2018, with stations at Dabri Mor–Janakpuri South, Dashrathpuri, Palam, Vasant Vihar, Munirka and R K Puram. Vasant Kunj itself has no station. Government quarters and the Palam-side lanes are usually open doorstep visits, while Vasant Kunj pockets and Vasant Vihar houses often have guards or house staff at the gate.',
            ],
            'tips' => [
                'For Vasant Kunj, give the sector letter, pocket and flat, and agree whether the tutor drives or takes an auto from Vasant Vihar station, since nothing inside the colony is on the metro.',
                'Palam, Dabri, Mahavir Enclave and Sagarpur have narrow lanes with little parking, so a tutor on a two-wheeler, or walking from Dashrathpuri, Palam or Dabri Mor, is the practical choice.',
                'Palam-Dabri Marg, Pankha Road and the Outer Ring Road near Munirka load up at office hours; fix a slot away from them, and use online sessions for IB or IGCSE specialists.',
            ],
        ],
        'Dwarka' => [
            'guide' => 'dwarka-and-west-delhi-tuition-guide',
            'intro' => [
                'Dwarka is the DDA\'s planned sub-city in South West Delhi: numbered sectors between wide arterial roads, with cooperative group housing societies as the main way to live. Sectors 4, 5, 11 and 12 are almost entirely society flats, Sectors 6 and 7 add DDA self-financing flats towards Palam, Sector 14 is mostly DDA flats at the Kakrola end, and Sector 19 wraps complexes around Ambrahi village. Sectors 22 and 23 lie towards the airport.',
                'The Blue Line runs through the middle, with stations at Sectors 8 to 14 and 21, then Dwarka and Dwarka Mor. Sector 21 is also on the Airport Express, which was extended to Yashobhoomi Dwarka Sector 25 in September 2023. The Magenta Line at Palam and Dashrathpuri helps the eastern sectors, and the Dwarka Expressway, fully open since June 2025, runs past Sectors 21 and 22 on its Delhi section.',
            ],
            'tips' => [
                'Register the tutor with the society as a regular visitor in the first week; many Dwarka gates call the flat or check a pre-approved list on every visit.',
                'Share the sector, tower and flat, and name the station: Sector 12 for Sectors 4 and 5, Sector 10 for 6, 7 and 19 (or Palam on the Magenta Line for 6 and 7), Sector 21 for 22 and 23.',
                'Evening crowds build around the Sector 10 and 12 markets and on roads towards the expressway, so start before the rush, and keep an online tutor for a subject no nearby sector covers.',
            ],
        ],
        'Janakpuri, Rajouri Garden & Punjabi Bagh' => [
            'guide' => 'dwarka-and-west-delhi-tuition-guide',
            'intro' => [
                'West Delhi\'s belt of post-Partition and planned colonies runs along Najafgarh Road and Rohtak Road. Janakpuri was planned in the late 1960s in lettered blocks and pockets; Vikaspuri, Uttam Nagar, Tilak Nagar, Subhash Nagar and Hari Nagar are mostly floors and DDA flats; Rajouri Garden and Kirti Nagar grew on Basai Darapur land; Moti Nagar dates from 1948 to 1950; and Punjabi Bagh, split by the Ring Road, is known for large bungalow plots.',
                'Four lines cross the zone. The Blue Line runs along Najafgarh Road from Kirti Nagar towards Dwarka Mor, Janakpuri West adds the Magenta Line, the Green Line serves Punjabi Bagh and Paschim Vihar, and the Pink Line stops at Rajouri Garden, Mayapuri, Naraina Vihar and Punjabi Bagh West. Plotted blocks are doorbell visits, while DDA pockets and the Paschim Vihar societies usually record visitors at the gate.',
            ],
            'tips' => [
                'In Punjabi Bagh, pick a tutor from your own side of the Ring Road, or one who rides the Green or Pink Line, since the crossing between East and West is slow in the evening.',
                'Around Tilak Nagar market, Rajouri Garden\'s main market and Kirti Nagar\'s furniture lanes parking is hard, so a metro rider walking from the nearest station arrives more reliably.',
                'In Paschim Vihar societies and DDA pockets, leave the tutor\'s name at the gate before the demo; builder floors in Vikaspuri and Uttam Nagar need only the floor and a landmark.',
            ],
        ],
        'Karol Bagh, Patel Nagar & Rajinder Nagar' => [
            'guide' => 'dwarka-and-west-delhi-tuition-guide',
            'intro' => [
                'This is Central Delhi\'s small, dense zone of markets and floors. Karol Bagh took in villagers moved from the Connaught Place site in the 1920s and refugees from West Punjab and Sindh after 1947, and its residential pockets, such as the WEA blocks, sit among busy shopping streets. Old and New Rajinder Nagar began as 1950s Punjabi refugee colonies; the old side is now a major civil services coaching hub, with hostels and libraries among family homes.',
                'East and West Patel Nagar, on land taken from Shadipur, Khampur and nearby villages, are mostly builder floors on residential plots. Everything lies close to the Blue Line section opened in December 2005, with stations at Karol Bagh, Rajendra Place, Patel Nagar and Shadipur. There are no society desks here, but lanes are narrow, street parking is scarce, and the coaching and market streets stay busy late into the evening.',
            ],
            'tips' => [
                'Send the exact floor and a landmark: many Rajinder Nagar floors are let to students, and a new tutor can easily ring the wrong bell on a first visit.',
                'Use Rajendra Place for New Rajinder Nagar and East Patel Nagar, Karol Bagh for the WEA blocks and Old Rajinder Nagar, and Patel Nagar or Shadipur for West Patel Nagar.',
                'Weekday lessons run better than weekend ones, when Karol Bagh\'s markets peak; if your lane faces the main coaching stretch, an online session sidesteps the evening crowd.',
            ],
        ],
        'Lodhi Colony, Jangpura & Nizamuddin' => [
            'guide' => 'south-delhi-tuition-guide',
            'intro' => [
                'A small, quieter band south of central New Delhi. Lodhi Colony was built in the 1940s for government employees, is run by the New Delhi Municipal Council and is known for murals that make it an open-air art district. Jangpura, on Mathura Road, takes in Jangpura A and B, Jangpura Extension and Bhogal, and is mostly builder floors today. Nizamuddin East has 286 houses and 32 public parks, and Nizamuddin West surrounds a historic dargah and its basti.',
                'Jawaharlal Nehru Stadium and Jangpura on the Violet Line, open since October 2010, serve most homes, with Jor Bagh on the Yellow Line close to Lodhi Colony. Since December 2018 the Pink Line has reached Hazrat Nizamuddin, beside the railway station, which brings tutors from East Delhi within one ride. Lodhi Colony\'s blocks are open and signposted, while both Nizamuddin colonies usually check visitors at an RWA gate.',
            ],
            'tips' => [
                'In Nizamuddin East and West, tell the RWA gate that a tutor is expected and say which entrance to use, since roads near the dargah fill with visitors.',
                'A trans-Yamuna tutor can come by Pink Line to Hazrat Nizamuddin; others use Jangpura or Jawaharlal Nehru Stadium on the Violet Line and walk the last stretch.',
                'Mathura Road and the station approach are heavy at the evening peak, so Jangpura and Bhogal families do better with a tutor who lives nearby or travels by metro.',
            ],
        ],
        'Rohini' => [
            'guide' => 'rohini-and-north-delhi-tuition-guide',
            'intro' => [
                'Rohini is the DDA sub-city begun in the 1980s in North West Delhi for a mix of income groups, laid out as numbered sectors with pockets inside each. Sectors 7, 8 and 15 are mostly DDA flats in LIG, MIG and HIG categories; Sectors 9 and 13 lean to RWA-run CGHS societies; Sector 3 runs in pockets 3A to 3G; Sector 5 has many larger floors; and outer Sector 24 is gated pockets of DDA flats and MIG societies.',
                'Three lines matter. The Red Line, here since March 2004, ends at Rithala in Sector 5; its old Rohini East station has been renamed Rohini, a change approved in May 2026. The Yellow Line stops at Rohini Sector 18, 19 and Samaypur Badli, and since 8 March 2026 the Magenta Line has run along the Outer Ring Road through Deepali Chowk and Madhuban Chowk, the former Pitampura station.',
            ],
            'tips' => [
                'Give the sector, pocket, block and flat together; block names repeat across Rohini, and the pocket tells a tutor whether Rithala, Rohini Sector 18, 19 or Deepali Chowk is closest.',
                'CGHS societies in Sectors 9, 13 and 16 register visitors at the gate, so add the tutor to the list; DDA pockets in Sectors 7, 8 and 15 are usually a straight walk to the door.',
                'Keep sessions clear of the evening rush on the Outer Ring Road, and for a senior specialist paper, pair a local tutor with an online one.',
            ],
        ],
        'Pitampura, Model Town & North Campus' => [
            'guide' => 'rohini-and-north-delhi-tuition-guide',
            'intro' => [
                'This zone joins DDA-planned Pitampura, with its HIG towers, enclaves and the Netaji Subhash Place business district, to older colonies further east. Kohat Enclave and Prashant Vihar are floors and houses, Shalimar Bagh is lettered blocks, Ashok Vihar has four phases, and Model Town, privately developed in the early 1950s, has three parts, with Naini Lake in the first. Near North Campus, GTB Nagar, Mukherjee Nagar and Kamla Nagar mix family homes with student hostels.',
                'The Yellow Line runs through Civil Lines, Vishwavidyalaya, GTB Nagar, Model Town, Azadpur and Adarsh Nagar. The Red Line serves Kohat Enclave, Netaji Subhash Place and Keshav Puram, the Pink Line stops at Shalimar Bagh, Azadpur and Majlis Park, and since March 2026 Uttari Pitampura-Prashant Vihar on the Magenta Line has served the Outer Ring Road side. Enclave floors are quiet doorstep visits, and Civil Lines keeps its colonial-era bungalows.',
            ],
            'tips' => [
                'Near Mukherjee Nagar and GTB Nagar, give the block and the easiest lane in, since main roads fill with students in the evening; from GTB Nagar station most homes are a walk.',
                'Ashok Vihar and Model Town are large, so name the phase or part: Keshav Puram or Shalimar Bagh suits Ashok Vihar, and Model Town station suits Model Town I to III.',
                'Kamla Nagar\'s market and Netaji Subhash Place are crowded at the evening peak, so afternoon slots work better; for a Civil Lines bungalow, tell the gatekeeper in advance.',
            ],
        ],
        'Mayur Vihar, Patparganj & IP Extension' => [
            'guide' => 'east-delhi-tuition-guide',
            'intro' => [
                'Mayur Vihar Phase 1, from the early 1980s, Phase 2, set up in 1984 with pockets A to F, and Phase 3 by the Noida border are DDA pocket colonies of LIG, MIG, HIG, SFS and Janta flats, with cooperative societies alongside. Patparganj, where 175 acres went to group housing, and IP Extension are mostly gated CGHS complexes, and Vasundhara Enclave has about forty-four societies. Pandav Nagar, Mandawali and Shakarpur are dense lanes of builder floors.',
                'Mayur Vihar-I is a Blue and Pink Line interchange; Mayur Vihar Extension and New Ashok Nagar are on the Blue Line, and East Vinod Nagar–Mayur Vihar-II, Mandawali–West Vinod Nagar and IP Extension are on the Pink Line, a single corridor since August 2021. New Ashok Nagar also has a Namo Bharat station. By road, the DND Flyway and the Noida Link Road reach Noida and South Delhi, and NH-9 carries the Delhi–Meerut Expressway.',
            ],
            'tips' => [
                'Society gates in Patparganj, IP Extension and Vasundhara Enclave log every visitor, so pre-register the tutor with security; DDA pockets usually let a tutor walk straight to the flat.',
                'Phase 3 has no station of its own: point the tutor to Mayur Vihar Extension or New Ashok Nagar and agree the auto leg, or choose a tutor who lives in the phase.',
                'The Noida Link Road and the expressway service lanes peak at office hours, so a late-afternoon start is safer; for specialist subjects, an online tutor widens the choice.',
            ],
        ],
        'Laxmi Nagar, Preet Vihar & Shahdara' => [
            'guide' => 'east-delhi-tuition-guide',
            'intro' => [
                'The older half of trans-Yamuna Delhi runs from Vikas Marg to GT Road. Laxmi Nagar is its busiest hub, known for accountancy and company secretary coaching; Nirman Vihar, Preet Vihar, Vivek Vihar and Surajmal Vihar are low-rise plotted colonies; Karkardooma mixes societies and houses; and Krishna Nagar and Geeta Colony are closely built. Shahdara, a grain-trading centre in the eighteenth century, now names a district, and Dilshad Garden and Yamuna Vihar are DDA-planned blocks.',
                'This is where Delhi Metro started: Shahdara, Welcome, Seelampur and Shastri Park opened on 25 December 2002. The Blue Line branch through Laxmi Nagar, Nirman Vihar, Preet Vihar, Karkarduma and Anand Vihar followed in January 2010, the Pink Line meets it at Karkarduma and Anand Vihar, and Anand Vihar\'s Namo Bharat station opened in January 2025. Since March 2026 the completed Pink Line ring has included Yamuna Vihar station.',
            ],
            'tips' => [
                'Most homes are separate buildings, so the tutor goes straight to the floor; in the Preet Vihar, Vivek Vihar and Surajmal Vihar blocks with RWA gates, give the guard the name first.',
                'Vikas Marg slows sharply at office hours and GT Road peaks in the evening, so set lessons before the rush, especially around Laxmi Nagar and Shahdara.',
                'Parking is scarce in the Krishna Nagar, Geeta Colony and Shahdara lanes, so favour a tutor who comes by metro and e-rickshaw or on a two-wheeler, and use online classes for specialist papers.',
            ],
        ],
    ],
    // Mumbai (1 Oct 2026), from database/seo-content/areas/mumbai-zone-guides.json.
    'Mumbai' => [
        'South Mumbai' => [
            'guide' => 'south-and-central-mumbai-tuition-guide',
            'intro' => [
                'South Mumbai covers the southern tip of the island city: Colaba, Cuffe Parade, Malabar Hill, Breach Candy and Tardeo. Colaba mixes preserved colonial-era buildings with later apartment blocks along its causeway, and its southern end is a military cantonment. Cuffe Parade, laid out in 1906, pairs residential towers with office high-rises, Malabar Hill keeps a few bungalows among its towers, and Tardeo stretches from Nana Chowk to Haji Ali Junction.',
                'The older rail gateways are Churchgate on the Western line, CSMT on the Central and Harbour lines, and Mumbai Central, right beside Tardeo. Since October 2025 the underground Line 3 has run through to Cuffe Parade, with stations at Churchgate, CSMT, Grant Road and Mahalaxmi, so tutors from Dadar and the airport side can come straight down. The Coastal Road, opened in March 2024, tunnels beneath Malabar Hill and follows the Breach Candy shore towards Worli.',
            ],
            'tips' => [
                'Most homes here are towers with a staffed lobby desk, so give the building staff the tutor\'s name and flat number before the demo; inside the defence area, ask about the visitor entry process first.',
                'Tell the tutor which station suits your address: Line 3 at Cuffe Parade or Churchgate for Colaba and Cuffe Parade, Mumbai Central for Tardeo and Breach Candy, and a taxi or bus up the hill for Malabar Hill.',
                'Office traffic around Nariman Point and the seafront builds at the start and end of the working day, so a late-afternoon or weekend slot is usually easier to hold each week.',
            ],
        ],
        'Worli, Dadar & Central Mumbai' => [
            'guide' => 'south-and-central-mumbai-tuition-guide',
            'intro' => [
                'This zone runs from Worli and Lower Parel up through Prabhadevi, Parel, Dadar, Matunga, Mahim and Sion. Worli, Lower Parel and Parel were once the textile-mill district, and many mill compounds are now offices and high-rise homes, though older chawls survive in Parel\'s lanes. Dadar, Matunga and Sion grew from the Bombay Improvement Trust\'s scheme of 1899–1900, so their older colonies keep regular streets of low and mid-rise buildings, while Mahim meets Bandra across an 1845 causeway.',
                'Rail links are unusually dense. Dadar is the only station on both the Central and Western lines, Matunga has a station on each of the three lines, and Mahim Junction serves the Western and Harbour lines. Line 3 added stations at Dadar, Siddhivinayak, Worli, Shitaladevi Mandir and Acharya Atre Chowk in 2025. Sion, on the Central line, is also where the Eastern Express Highway and the old Agra Road head north towards the eastern suburbs.',
            ],
            'tips' => [
                'In the older buildings of Dadar, Matunga and Sion a tutor usually walks straight up to the flat, but redeveloped towers in Worli and Lower Parel run strict visitor desks, so register the tutor there in advance.',
                'Pick the station by line: Dadar for tutors on either main line, Matunga or King\'s Circle depending on the tutor\'s line, Lower Parel or Line 3 for Worli, and Prabhadevi or Parel for Prabhadevi.',
                'Avoid timing a lesson just as office crowds pass through Dadar station, and near Prabhadevi choose a weekday other than Tuesday, when roads around the temple are crowded.',
            ],
        ],
        'Bandra, Khar & Santacruz' => [
            'guide' => 'mumbai-western-suburbs-tuition-guide',
            'intro' => [
                'Bandra, Khar and Santacruz are each split into West and East by the Western line. Bandra West runs from village enclaves such as Ranwar and the slopes of Pali Hill to cooperative buildings and new towers, while Bandra East holds Kherwadi, the Government Colony and Kalanagar beside the Bandra Kurla Complex offices. Khar grew around its station after 1924, and Santacruz West\'s older cooperative societies are steadily being rebuilt as towers, with Kalina and Vakola to the east.',
                'All three stations, Bandra, Khar Road and Santacruz, are served by both the Western and Harbour lines, so tutors can arrive from the western suburbs or from the harbour side. Line 3 has run underground here since October 2024, with stations at Bandra Colony, Bandra Kurla Complex and Santacruz on the highway at Vakola. The Western Express Highway starts in Bandra East, and the Bandra–Worli Sea Link carries road traffic south to the island city.',
            ],
            'tips' => [
                'Say which side of the tracks you live on: the west exits of Bandra, Khar Road and Santacruz serve the sea side, while the east exits and Line 3 suit Bandra East, Kalina and Vakola.',
                'In Ranwar and Khar Danda\'s village lanes a tutor usually walks to the door, while towers keep a watchman or gate register, so share the tutor\'s name and flat number in advance.',
                'Hill Road and Linking Road fill with shoppers on evenings and weekends, and office traffic around the business district peaks at day\'s start and end, so a slightly earlier class runs more smoothly.',
            ],
        ],
        'Vile Parle & Juhu' => [
            'guide' => 'mumbai-western-suburbs-tuition-guide',
            'intro' => [
                'Vile Parle West, Vile Parle East and Juhu sit between Santacruz and Andheri. Both halves of Vile Parle are settled residential suburbs with large Marathi and Gujarati communities and a long reputation as an education centre, so tutors for board and college subjects often live nearby. Housing is mostly cooperative societies and mid-rise buildings. Juhu faces the Arabian Sea and includes much of the planned JVPD Scheme, whose lanes run between the beach and the Western Express Highway.',
                'Vile Parle station, opened in 1906, serves both the Western and Harbour lines, with the west exit leading into Vile Parle West and the east exit into the older lanes towards the highway. Juhu has no railway station of its own, so tutors ride to Santacruz, Vile Parle or Andheri and finish by auto, or use the D N Nagar metro. Juhu Tara Road follows the coast, and Juhu\'s aerodrome sent off the country\'s first airmail flight in 1932.',
            ],
            'tips' => [
                'For Juhu, agree the drop-off point with the tutor: Vile Parle or Santacruz station plus an auto for the southern lanes, and D N Nagar metro for the northern side towards Versova.',
                'Standalone homes in Juhu usually mean the tutor goes straight to the door, while society buildings in Vile Parle keep a visitor register, so pass the tutor\'s details to the watchman before the first class.',
                'Roads near the colleges get crowded at college hours, and beach roads fill on weekend evenings, so weekday afternoons or mornings are easier slots to keep regular.',
            ],
        ],
        'Andheri & Jogeshwari' => [
            'guide' => 'mumbai-western-suburbs-tuition-guide',
            'intro' => [
                'Andheri and Jogeshwari make up the busiest stretch of the western suburbs. Andheri West takes in Four Bungalows, D N Nagar, Versova with Seven Bungalows and Yari Road, and Lokhandwala, built on once-marshy land and now a lively area of towers and societies. Andheri East runs past the highway to Chakala, Marol, Sahar and the MIDC estates, mixing homes with offices. Jogeshwari West includes Oshiwara and Behram Baug, and Jogeshwari East follows the link road towards Vikhroli.',
                'This is where the metro network meets. Andheri station, on the Western and Harbour lines, is the busiest on the Western Railway, and Line 1 has nine of its twelve stations in Andheri. Line 2A meets Line 1 at D N Nagar, Line 7 links to it at Gundavali, and Line 3 has served Marol Naka, MIDC Andheri and SEEPZ since October 2024. The Harbour line reached Jogeshwari and Goregaon in 2018, and Line 6 from Lokhandwala is under construction.',
            ],
            'tips' => [
                'Match the metro to your block: Versova or D N Nagar on Line 1 for Seven Bungalows and D N Nagar, Line 2A\'s Oshiwara stations for Oshiwara and Lokhandwala, and Marol Naka or Chakala for Andheri East.',
                'Most Lokhandwala and Oshiwara towers have a gate desk and tight parking, so register the tutor as a regular visitor and suggest they come by metro rather than car.',
                'The Andheri-Kurla Road and the Jogeshwari–Vikhroli Link Road carry heavy office traffic, so families along them often pick classes outside rush hours or move some sessions online.',
            ],
        ],
        'Goregaon & Malad' => [
            'guide' => 'mumbai-western-suburbs-tuition-guide',
            'intro' => [
                'Goregaon and Malad sit north of Jogeshwari, each divided by the Western line. Goregaon West is made of settled pockets such as Motilal Nagar, Jawahar Nagar, Unnat Nagar and Bangur Nagar, a planned neighbourhood of more than twenty cooperative societies from the mid-1970s. Goregaon East reaches towards Aarey and Film City, with office parks beside gated complexes. Malad West runs from Orlem and Evershine Nagar to the Marve and Madh shore, and Malad East covers Kurar Village, Dindoshi and Appa Pada.',
                'Goregaon station has served the Harbour line as well as the Western line since March 2018, and Ram Mandir, opened in December 2016, serves the Oshiwara side. Two metro lines run north to south: Line 2A along Link Road, with stations at Goregaon West, Bangur Nagar, Lower Malad, Malad West and Valnai–Meeth Chowky, and Line 7 along the Western Express Highway, with Aarey, Goregaon East, Dindoshi and Kurar. Malad station is on the Western line only.',
            ],
            'tips' => [
                'West of the tracks, Line 2A along Link Road reaches most societies; east of them, Line 7 on the highway is the easier route, so tell the tutor which side and which station.',
                'Inner lanes in Kurar Village and Appa Pada are narrow, so for the first visit send a landmark and clear directions; in gated complexes, add the tutor to the visitor app beforehand.',
                'Link Road, the highway and the roads to Film City are busiest at office hours, so evening lessons that start a little after the rush tend to begin on time.',
            ],
        ],
        'Kandivali, Borivali & Dahisar' => [
            'guide' => 'mumbai-western-suburbs-tuition-guide',
            'intro' => [
                'The northern end of the Western line covers Kandivali, Borivali and Dahisar. Kandivali West has high-rise towers in Mahavir Nagar and low-rise sector housing in Charkop, laid out by the state housing board, while Kandivali East holds large complexes including the Thakur Village township. Borivali West takes in IC Colony, Eksar and Shimpoli, and Borivali East is bounded by the national park. Dahisar, part of Thane district until 1956, is the city\'s northernmost suburb.',
                'Borivali is the busiest station on the Western suburban line and a terminus for slow, semi-fast and fast trains, and Kandivali station dates from 1907. Line 2A runs along New Link Road on the west side and Line 7 along the Western Express Highway on the east; both opened their first sections in April 2022 and meet at Dahisar East. From there, Line 9 has carried passengers north to Kashigaon in Mira-Bhayandar since April 2026.',
            ],
            'tips' => [
                'Charkop\'s numbered sectors make homes easy to find once the tutor has the sector and plot number, so share both with a landmark; row houses usually mean a knock on the door.',
                'Townships such as Thakur Village check visitors at the main gate and sometimes again in the lobby, so send the tutor\'s name and flat number to security in advance.',
                'Link Road and the highway slow down at school closing time and in the evening rush, so a slot just after the peak keeps lessons on time; Borivali\'s many train services widen the tutor pool.',
            ],
        ],
        'Chembur, Ghatkopar & Powai' => [
            'guide' => 'mumbai-central-suburbs-tuition-guide',
            'intro' => [
                'This eastern zone takes in Chembur, Ghatkopar, Vikhroli, Powai and Kanjurmarg. Chembur, on the old Trombay Island, grew after Partition and ranges from bungalows and planned colonies to modern buildings. Ghatkopar has large Marathi and Gujarati communities in older societies and redeveloped towers on both sides of the line. Vikhroli mixes Tagore Nagar and Kannamwar Nagar with industrial land by the mangroves, Powai surrounds its lake with high-rise gated complexes, and Kanjurmarg is mostly newer apartments.',
                'Chembur and Tilak Nagar are on the Harbour line; Ghatkopar, Vikhroli and Kanjurmarg are on the Central line. Ghatkopar is also the eastern end of Line 1, so tutors from Andheri can come across without changing at Dadar. Powai has no station, and Kanjurmarg, built in 1968, is its rail access. By road, the Eastern Express Highway, the Eastern Freeway, the Santacruz–Chembur Link Road and the Jogeshwari–Vikhroli Link Road all cross the zone.',
            ],
            'tips' => [
                'For Powai, a tutor usually comes to Kanjurmarg station and takes an auto, or drives along the link road, so check the route and whether the complex has guest parking.',
                'Chembur\'s bungalows and older buildings often mean doorstep entry, while Powai and Vikhroli complexes almost always need gate registration, so share the tutor\'s details in advance.',
                'The Jogeshwari–Vikhroli Link Road and the highway approaches are among the busiest roads at office hours, so avoid fixing lessons right at the start or end of the working day.',
            ],
        ],
        'Bhandup & Mulund' => [
            'guide' => 'mumbai-central-suburbs-tuition-guide',
            'intro' => [
                'Bhandup and Mulund are the last Central line suburbs before Thane. Bhandup is split into East and West: the West has the old Agra Road as its main road and an industrial estate, while the East runs along the Eastern Express Highway. Much former industrial land has become large housing complexes, so many families live in gated societies near older buildings around Shivaji Talao. Mulund was laid out from 1922 on a grid of streets at right angles.',
                'On the Central line the stations run Kanjur Marg, Bhandup, Nahur, Mulund and then Thane, so tutors from Thane, Ghatkopar and the rest of the line can arrive directly. The Mulund–Airoli Bridge links the Eastern Express Highway with Navi Mumbai, which brings tutors from Airoli within reach by road. Metro Line 4, from Wadala to Kasarvadavali, is under construction along the old Agra Road through both suburbs and is not yet carrying passengers.',
            ],
            'tips' => [
                'Mulund\'s grid streets make it easy to direct a tutor from the station on foot; give the street and building name, and for the east side say so, since both halves share one station.',
                'Newer complexes set back from the main road register visitors and have limited guest parking, while older buildings nearer the stations are simpler, so tell the tutor which applies.',
                'The main road through Bhandup West and the junctions near Mulund West are slow at peak hours, so an evening lesson is more reliable if it starts after the office rush.',
            ],
        ],
        'Thane' => [
            'guide' => 'thane-and-navi-mumbai-tuition-guide',
            'intro' => [
                'Thane, with its own municipal corporation since 1982, has two very different kinds of neighbourhood. Near the station are the older areas: Naupada, with mid-rise blocks and shops at street level, Thane East centred on Kopri across the tracks, and Vartak Nagar, built around a large state housing board colony. Further out along Ghodbunder Road, Majiwada, Kolshet Road, Manpada and Kasarvadavali have filled with high-rise gated townships over the past two decades.',
                'Thane station, the destination of India\'s first passenger train in April 1853, is on the Central line and is the starting point of the Trans-Harbour line to Vashi and Panvel, which has carried passengers since November 2004. The Eastern Express Highway runs past Thane East, and Ghodbunder Road leaves it at Kapurbawdi and Majiwada. Metro Lines 4 and 4A are under construction along that road, so for now tutors reach the townships by bus, auto or two-wheeler.',
            ],
            'tips' => [
                'Near the station, in Naupada and Kopri, a tutor can walk from the train and usually just signs in with the watchman; along Ghodbunder Road, register a regular tutor with township security once.',
                'With homes spread along a long road, choose a tutor from your own pocket of the corridor, such as Manpada or Kasarvadavali, rather than one crossing from the station side.',
                'Majiwada junction and Ghodbunder Road are slowest in the morning and evening rush, so weekend or mid-afternoon lessons are often steadier, with online sessions for specialist subjects.',
            ],
        ],
        'Navi Mumbai' => [
            'guide' => 'thane-and-navi-mumbai-tuition-guide',
            'intro' => [
                'Navi Mumbai was planned from 1971 as a new town across the harbour and built by CIDCO in nodes of numbered sectors. Vashi was the first, just over Thane Creek, followed by Sanpada, Nerul, Seawoods and CBD Belapur, which holds the civic headquarters beside the Parsik Hills. Airoli, Ghansoli and Kopar Khairane line the Thane–Belapur Road to the north, while Kharghar and Panvel, including New Panvel, come under the Panvel Municipal Corporation, formed in 2016.',
                'Two suburban lines serve the nodes. The Harbour line reached Vashi in May 1992 and Panvel in June 1998, and the Trans-Harbour line links Thane with Airoli, Ghansoli, Kopar Khairane, Turbhe, Vashi, Nerul and Panvel. Navi Mumbai Metro Line 1 has run since November 2023 from CBD Belapur through Kharghar to Pendhar. By road, the Sion–Panvel Highway and Palm Beach Road connect the southern nodes, and the Mulund–Airoli Bridge crosses to Mumbai.',
            ],
            'tips' => [
                'Give the node, sector and plot or building number with a landmark; CIDCO\'s sector grid makes almost any home easy to find once the tutor has those three.',
                'Match the line to the node: Trans-Harbour trains for Airoli, Ghansoli and Kopar Khairane, the Harbour line for Vashi to Panvel, and the Navi Mumbai metro for Kharghar sectors away from the station.',
                'Roads near Vashi station, the Thane–Belapur Road and Palm Beach Road fill up at office hours, so plan evening sessions a little later, and look first for a tutor from your own or a neighbouring node.',
            ],
        ],
    ],
    // Bengaluru (1 Oct 2026), from database/seo-content/areas/bengaluru-zone-guides.json.
    'Bengaluru' => [
        'Koramangala, HSR & Bellandur' => [
            'guide' => 'south-bengaluru-tuition-guide',
            'intro' => [
                'Koramangala, HSR Layout, Bellandur and Sarjapur Road make up the south-east office belt around the Outer Ring Road. Koramangala runs in eight numbered blocks split by the Inner Ring Road, with older houses on its cross roads. HSR Layout, begun by the Bangalore Development Authority in 1985, has seven sectors on a grid. Bellandur and the Sarjapur Road corridor, through Kasavanahalli, Carmelaram and Doddakannelli, grew later with the tech parks and are mostly gated apartment communities and villa townships.',
                'Central Silk Board station, at the zone\'s western corner, has been on the Yellow Line since August 2025, and it helps tutors reaching Koramangala and the HSR side. East of it, the Blue Line along the ORR is under construction, with HSR Layout, Agara and Ibbaluru stations planned but none open, so Bellandur and Sarjapur Road depend on tutors who come by road. In the towers, the security desk registers every visitor; in Koramangala\'s inner blocks the tutor usually rings the bell.',
            ],
            'tips' => [
                'Pre-register the tutor with your society\'s security desk and share the tower and flat number; on Sarjapur Road keep the same weekly slot so the guard recognises them.',
                'Ask for a tutor who lives on your side of the Outer Ring Road; crossing it at office opening or closing time makes a weekday lesson hard to keep on time.',
                'For HSR Layout give the sector, main and cross numbers; for Koramangala give the block number, since the Inner Ring Road separates blocks 1 to 4 from 5 to 8.',
            ],
        ],
        'Jayanagar, JP Nagar & Banashankari' => [
            'guide' => 'south-bengaluru-tuition-guide',
            'intro' => [
                'This is the planned south of the city. Jayanagar, founded in 1948 and long the city\'s southern edge at South End Circle, is independent houses in numbered blocks, with shops in the 3rd and 4th Blocks. Basavanagudi, beside Lalbagh, is older and named after the Bull Temple. JP Nagar\'s phases and Banashankari\'s six stages were laid out from the late 1970s, Kumaraswamy Layout sits between them, and Kanakapura Road carries newer apartment projects further south.',
                'The Green Line is the zone\'s backbone. Its stations from Lalbagh through South End Circle, Jayanagar, Banashankari, Jaya Prakash Nagar and Yelachenahalli opened on 18 June 2017, and the Kanakapura Road extension from Konanakunte Cross to Silk Institute followed on 15 January 2021. The Green and Yellow lines meet near Jayanagar, bringing BTM-side tutors within one change. Most homes are houses, so the tutor comes to the door with no gate list to arrange.',
            ],
            'tips' => [
                'Share the block, stage or phase with the cross and main road numbers; Banashankari has six stages and JP Nagar\'s phases stretch a long way south, so the number matters.',
                'Choose a tutor who comes by Green Line to the nearest station and walks or takes a short auto; parking near the Jayanagar 4th Block shops is tight in the evening.',
                'On the newer Kanakapura Road apartment projects, register the tutor at the gate, and in the farthest pockets consider one online session a week.',
            ],
        ],
        'BTM, Bannerghatta Road & Electronic City' => [
            'guide' => 'south-bengaluru-tuition-guide',
            'intro' => [
                'BTM Layout, named after Byrasandra, Tavarekere and Madiwala, sits between Hosur Road and Bannerghatta Road, with the Outer Ring Road splitting its 1st Stage from the later stages. Bannerghatta Road runs south past Arekere, Hulimavu and Gottigere through older layouts and gated towers. Bommanahalli and Begur lie off Hosur Road, and Begur holds the oldest known inscription naming Bengaluru. Electronic City, set up in 1978 as a state industrial township, is phases of IT campuses and large apartment communities.',
                'The Yellow Line, opened on 10 August 2025, runs sixteen stations from the Jayanagar end to Bommasandra, including BTM Layout, Central Silk Board, Bommanahalli, Hongasandra, Hosa Road and Electronic City. The elevated Hosur Road expressway has carried through traffic since January 2010. On Bannerghatta Road the Pink Line\'s elevated section is built but not yet open, so Arekere and Hulimavu families still rely on tutors travelling by road or taking the Yellow Line and an auto.',
            ],
            'tips' => [
                'Along Hosur Road, pick a tutor within a few Yellow Line stops of your station, and agree the exit and auto point so the last leg is simple.',
                'In Electronic City, office shift changes shape local traffic, so set the lesson away from shift times and register the tutor with the society gate beforehand.',
                'On Bannerghatta Road, older layout houses are a doorstep visit while towers need a gate entry; until the Pink Line opens, count on road travel for tutors.',
            ],
        ],
        'Indiranagar & Old Airport Road' => [
            'guide' => 'east-bengaluru-tuition-guide',
            'intro' => [
                'Indiranagar, Domlur and CV Raman Nagar form the compact eastern inner belt. Indiranagar began as a BDA layout of large houses in the late 1970s, and its independent homes now stand among apartment buildings off 100 Feet Road and 80 Feet Road. Domlur belonged to the Civil and Military Station until 1949 and keeps a Chola-era temple. CV Raman Nagar, sometimes called Greater Indiranagar, stretches towards Baiyappanahalli with a research staff township, houses and gated complexes.',
                'Old Airport Road takes its name from the HAL airport, which ended scheduled commercial flights on 24 May 2008. Namma Metro started here: the first Purple Line section, from the centre to Baiyappanahalli, opened on 20 October 2011 with two stations inside Indiranagar. Domlur has no station, but its bus terminus helps tutors on BMTC buses, and the Domlur flyover, open since July 2006, is where Old Airport Road, 100 Feet Road and the Inner Ring Road meet.',
            ],
            'tips' => [
                'In Indiranagar, start lessons before the evening crowd builds on 100 Feet Road, so a tutor arriving from the station keeps to time week after week.',
                'For Domlur, suggest the tutor take the Purple Line to Indiranagar and an auto, or a bus to the Domlur terminus, and avoid office closing time at the flyover.',
                'In CV Raman Nagar\'s township and gated complexes, give the tutor\'s name to the gate in advance; Baiyappanahalli is the nearest station for the last leg.',
            ],
        ],
        'Whitefield, Marathahalli & KR Puram' => [
            'guide' => 'east-bengaluru-tuition-guide',
            'intro' => [
                'The eastern tech belt runs from KR Puram, where Old Madras Road meets the Outer Ring Road, through Mahadevapura to Whitefield and Brookefield, with Marathahalli at the junction of the ORR and Old Airport Road. Whitefield began in 1882 as a settlement of the Eurasian and Anglo-Indian Association and stayed a village until an IT park came in the late 1990s. Today the zone is mostly apartment towers and gated villa communities, with builder floors and houses on older streets.',
                'The Purple Line reached Whitefield (Kadugodi) on 26 March 2023, and since the Baiyappanahalli to KR Puram gap closed on 9 October 2023 one line runs from the centre through Singayyanapalya, Hoodi, Kundalahalli and Hopefarm Channasandra. Marathahalli has no station yet: its Blue Line stop is under construction, and the nearest rail halt is Bellandur Road. KR Puram\'s railway station, on the Chennai line, is crossed by a cable-stayed bridge opened in 2003.',
            ],
            'tips' => [
                'Most homes have a security desk and some ask for photo ID on the first visit, so share the tutor\'s details with the society before the demo.',
                'Near a Purple Line station, a tutor coming by metro plus a short auto is steadier than one driving; around Marathahalli, choose a tutor from your side of the ORR.',
                'Time weekday lessons in the gap between school and the evening office rush on ITPL Road, Whitefield Main Road and the ORR, or keep one session online.',
            ],
        ],
        'Hennur, Kalyan Nagar & Banaswadi' => [
            'guide' => 'north-bengaluru-tuition-guide',
            'intro' => [
                'North-east of the centre, Hennur, Kalyan Nagar, HRBR Layout, Banaswadi and Thanisandra sit around the Outer Ring Road. Kalyan Nagar and HRBR Layout are settled colonies of independent houses and builder floors on numbered blocks and wide roads. Banaswadi, once a village on the city\'s edge, mixes bungalows, houses and flats. Hennur, just outside the ORR, has apartments and villa communities along Hennur Road, while Thanisandra, on the route north, is mainly gated apartment complexes.',
                'No metro runs through this zone yet. The Blue Line from KR Puram towards the airport, with stations planned at Horamavu, HRBR Layout, Kalyana Nagara, HBR Layout and Nagawara, is under construction. For now the nearest open stations are Baiyappanahalli and Benniganahalli on the Purple Line, and Banaswadi railway station in Maruthi Sevanagar sits on the Yesvantpur to Baiyappanahalli line. Most tutors therefore arrive by bus, two-wheeler or cab.',
            ],
            'tips' => [
                'Prefer a tutor who already lives in Hennur, Kalyan Nagar, Kothanur or Banaswadi; with no metro yet, a short road trip is what keeps weekday lessons regular.',
                'In HRBR Layout and Kalyan Nagar, the block and cross numbers make the house easy to find; mention where a two-wheeler can be parked near the cafe streets.',
                'In Thanisandra\'s gated complexes, give the tutor\'s name and phone number to the security desk before the demo, and favour after-school or weekend slots.',
            ],
        ],
        'Hebbal, RT Nagar & Yelahanka' => [
            'guide' => 'north-bengaluru-tuition-guide',
            'intro' => [
                'This zone follows Bellary Road (NH 44) north towards the airport at Devanahalli, which opened in May 2008. Hebbal, known for its lake, is where the Outer Ring Road meets NH 44 at a large flyover, and homes range from high-rise societies to older houses. RT Nagar, a long-settled locality of two blocks, is houses and builder floors, often with shops below. Yelahanka is older than Bengaluru itself, with an Old Town and a New Town planned in the early 1980s.',
                'The Blue Line stations at Hebbala, Kodigehalli, Jakkuru Cross and Yelahanka are under construction, so there is no metro in the zone yet. Yelahanka Junction is a railway junction and Hebbal has a station, but most tutors arrive by road. Yelahanka\'s Air Force Station hosts the biennial Aero India show. New Town houses are doorstep visits; the newer apartment societies register visitors at the gate.',
            ],
            'tips' => [
                'Choose a tutor who lives on your side of the Hebbal flyover; airport and office traffic funnels through it, and weekday evening lessons slip when it is crossed.',
                'In RT Nagar\'s market lanes, tell the tutor where a two-wheeler can safely be parked, and share a landmark along with the block number.',
                'In Yelahanka, a tutor from Yelahanka itself suits regular classes; give the New Town stage or the Old Town landmark with the address.',
            ],
        ],
        'Malleshwaram, Rajajinagar & Yeshwanthpur' => [
            'guide' => 'west-and-central-bengaluru-tuition-guide',
            'intro' => [
                'The north-west inner belt joins some of the city\'s oldest planned neighbourhoods. Malleshwaram was laid out in 1889 around Sampige Road and Margosa Road; Sadashivanagar was built in the 1960s and 1970s on former palace gardens once called Palace Orchards; and Rajajinagar was inaugurated on 3 July 1949 with separate housing and industrial areas. Mahalakshmi Layout, sometimes called Temple Layout, is houses and floors on layout plots, and Yeshwanthpur grew around a railway junction commissioned in 1881.',
                'The Green Line\'s Reach 3 opened on 1 March 2014, from Sampige Road through Srirampura, Rajajinagar, Mahalakshmi and Sandal Soap Factory to Yeshwanthpur, whose station faces the railway junction on Tumkur Road. Most homes are houses or small buildings, so there is rarely a society desk to clear. Sadashivanagar\'s larger houses often have a guard at the gate, and Yeshwanthpur\'s apartment complexes may keep visitor registers.',
            ],
            'tips' => [
                'Pick a tutor on the Green Line: Malleshwaram, Rajajinagar and Mahalakshmi Layout are each within a short walk or auto of a station.',
                'In Malleshwaram, give the cross and main road numbers; the market roads fill up in the evening, so a slightly earlier slot helps.',
                'Chord Road and Tumkur Road slow down at peak hours, so on weekdays a lesson a little later in the evening is easier to reach on time.',
            ],
        ],
        'Vijayanagar, RR Nagar & Kengeri' => [
            'guide' => 'west-and-central-bengaluru-tuition-guide',
            'intro' => [
                'West Bengaluru runs out along Mysore Road. Basaveshwaranagar, first called West of Chord Road, grew in the 1970s and 1980s on hilly streets; Vijayanagar, between Mysore Road and Magadi Road, takes in Hampinagar and Attiguppe; Nagarbhavi\'s 2nd Stage is a BDA layout in numbered blocks. RR Nagar, or Rajarajeshwari Nagar, is entered through an arch on Mysore Road, and Kengeri began as a BDA satellite town with access to the NICE Road and the Bengaluru–Mysuru Expressway.',
                'The Purple Line opened westward in three steps: Hosahalli, Vijayanagar, Attiguppe and Deepanjali Nagar on 16 November 2015; Rajarajeshwari Nagar, Pattanagere and the two Kengeri stations on 30 August 2021; and Challaghatta on 9 October 2023. Kengeri railway station on the Mysuru line stands near the metro. Most homes in the plotted layouts are houses with space to park a two-wheeler, while the newer apartment projects in RR Nagar and Kengeri keep a visitor list.',
            ],
            'tips' => [
                'Look for a tutor along the Purple Line: a ride between Vijayanagar, RR Nagar and Kengeri plus a short auto avoids Mysore Road at rush hour.',
                'For Basaveshwaranagar and Nagarbhavi, share the stage, block and a map pin; Basaveshwaranagar\'s streets are hilly and some are steep, so a pin saves a search.',
                'In RR Nagar and Kengeri apartment complexes, add the tutor to the visitor list before the demo, and in outlying layouts keep one session online.',
            ],
        ],
        'Frazer Town, Richmond Town & Ulsoor' => [
            'guide' => 'west-and-central-bengaluru-tuition-guide',
            'intro' => [
                'The old Cantonment side of central Bengaluru holds some of the city\'s oldest residential streets. Richmond Town was established in 1883, Cooke Town was laid out around 1900 and Frazer Town, officially Pulakeshi Nagar, was founded in 1906. Ulsoor, officially Halasuru, dates back further, with a British military station set up in 1807 beside Halasuru Lake, the only surviving tank built by the Gowda rulers. Heritage bungalows now share lanes with apartment buildings.',
                'Halasuru and Trinity stations came with the first Purple Line section on 20 October 2011, and the underground city-centre stretch followed on 30 April 2016, which suits Ulsoor and Richmond Town. Frazer Town and Cooke Town have no open station: the Pink Line\'s underground Pottery Town station is under construction, so tutors come by road or take the Purple Line and an auto. Bangalore East and Banaswadi railway stations are close to Frazer Town and Cooke Town.',
            ],
            'tips' => [
                'In Richmond Town and newer buildings in Cooke Town, a guard often stands at the entrance, so give the tutor\'s name and flat number in advance.',
                'Shopping streets in Frazer Town and near the central shopping district fill up in the evenings; an afternoon or early evening slot is easier to keep.',
                'For Ulsoor, a tutor on the Purple Line can walk from Halasuru or Trinity station; in Frazer Town, agree an auto point from the nearest open station.',
            ],
        ],
    ],
    // Pune (1 Oct 2026), from database/seo-content/areas/pune-zone-guides.json.
    'Pune' => [
        'Kothrud, Karve Nagar & Deccan' => [
            'guide' => 'west-pune-tuition-guide',
            'intro' => [
                'Kothrud, Karve Nagar, Erandwane, Deccan Gymkhana, Shivajinagar, Model Colony and Warje make up the settled residential belt on the west bank of the Mutha. Kothrud sits below the Vetal Tekdi hills with Paud Road running west through it, Karve Nagar was once called Hingne, and Warje, a farming village until about 1970, joined the city in 2001. Erandwane and Model Colony keep older bungalows on leafy lanes, while newer societies have replaced many older blocks.',
                'No other zone is as well served by the metro. The Aqua Line has run from Vanaz through Anand Nagar and Paud Phata since March 2022 and through Deccan Gymkhana to District Court since August 2023, when Shivaji Nagar opened on the Purple Line. District Court links the two lines, so a tutor from Pimpri or Swargate needs only one change. Karve Nagar and Warje have no station of their own, so tutors there usually come by two-wheeler.',
            ],
            'tips' => [
                'Pick the station first: Vanaz or Anand Nagar for most of Kothrud and Warje, Paud Phata for Erandwane, Deccan Gymkhana for Deccan and Model Colony, Shivaji Nagar for Shivajinagar.',
                'For a bungalow or small building in Erandwane or Model Colony, share the lane and a map pin; for a Kothrud or Warje complex, put the tutor on the gate register before the demo.',
                'Paud Road and the main road towards Deccan are slow in the early evening, so start the lesson before that rush or after it has cleared.',
            ],
        ],
        'Aundh, Baner & Pashan' => [
            'guide' => 'west-pune-tuition-guide',
            'intro' => [
                'Aundh, Baner, Balewadi, Pashan, Sus and Bavdhan line the Katraj–Dehu Road bypass on Pune\'s western edge. Aundh grew into an upmarket suburb from the mid-1990s along University Road, Baner was farmland until the IT boom of the 2000s, and Balewadi joined the municipal corporation in 1997 with twenty-two other villages. Pashan has a lake on the Ramnadi stream known for migratory birds, Sus sits in a valley between hills, and Bavdhan lies beside Chandani Chowk.',
                'This zone had no working metro station at the time of writing. Line 3, from Maan near Hinjewadi to Shivajinagar, is being built with stations planned at Balewadi High Street, Balewadi Phata, Baner Gaon, Baner Pashan Link Road and Aundh, and its first section has safety approval but had not opened to passengers. The Aqua Line\'s extension towards Chandani Chowk is also under construction. For now, nearly all tutors travel by road, usually from the next suburb.',
            ],
            'tips' => [
                'Ask for a tutor who lives in a neighbouring suburb, such as Baner for Balewadi or Pashan for Sus; with no metro yet, a short two-wheeler ride is what keeps lessons regular.',
                'Almost every home here is in a gated society, so share the tutor\'s name, tower and flat with the gate a day before the demo.',
                'Baner Road and University Road fill up at the end of the office day, so a later evening or weekend slot is easier to hold week after week.',
            ],
        ],
        'Wakad, Hinjewadi & Pimpri-Chinchwad' => [
            'guide' => 'west-pune-tuition-guide',
            'intro' => [
                'This zone joins the IT suburbs of Hinjewadi and Wakad with Pimpri-Chinchwad, whose municipal corporation was set up in 1982. Hinjewadi, also spelt Hinjawadi, is built around a large IT park developed in three phases, and Wakad next door is mostly apartment complexes. Pimple Saudagar and Pimple Nilakh are society neighbourhoods, Pimpri\'s industrial growth began in 1954, Chinchwad lies on the Pavana river, and Nigdi is largely the planned Pradhikaran sectors of the new-town development authority.',
                'The Purple Line runs from PCMC Bhavan in Pimpri to Swargate, opening in March 2022 and reaching Swargate in September 2024, and its extension through Chinchwad and Akurdi to Nigdi and Bhakti Shakti is under construction. Suburban trains on the Pune–Lonavala line stop at Pimpri, Chinchwad and Akurdi. Line 3\'s planned stops in Hinjewadi and at Wakad Chowk had not opened to passengers at the time of writing, so the IT suburbs still depend on road travel.',
            ],
            'tips' => [
                'For Pimpri and nearby, a tutor from the old city can come by Purple Line to PCMC Bhavan; for Chinchwad and Nigdi, a suburban train to Chinchwad or Akurdi is often simpler.',
                'Hinjewadi-bound traffic makes office hours slow near the bypass, so Wakad and Hinjewadi families find an early-evening or weekend slot easier.',
                'Row houses in the Nigdi sectors are doorstep visits, but the townships of Wakad, Hinjewadi and Pimple Saudagar need a gate entry before the first lesson.',
            ],
        ],
        'Viman Nagar, Kalyani Nagar & Kharadi' => [
            'guide' => 'east-pune-tuition-guide',
            'intro' => [
                'Viman Nagar, Kalyani Nagar, Yerawada, Vadgaon Sheri, Kharadi and Wagholi follow Nagar Road, the Pune to Ahmednagar road, from Yerawada out to the north-eastern edge. Viman Nagar, whose name means airport town, lies just south of the airport at Lohegaon, Kalyani Nagar faces Koregaon Park across the Mula-Mutha, and the central part of Vadgaon Sheri is widely called New Kalyani Nagar. Kharadi was a village until IT offices arrived around 2005, and Wagholi joined the municipal corporation in 2021.',
                'The Aqua Line\'s eastern section opened in March 2024 with stations at Bund Garden, Kalyani Nagar and Ramwadi, the terminus beside Viman Nagar, and Yerwada station followed in August 2024. That puts three localities on one line from Vanaz. Kharadi and Wagholi have no station yet; an extension from Ramwadi towards Wagholi has central government approval, but it is not yet built. Most homes are in gated societies, and Airport Road branches from Nagar Road at Yerawada.',
            ],
            'tips' => [
                'Use Kalyani Nagar station for Kalyani Nagar, Yerwada for Yerawada and Ramwadi for Viman Nagar and Vadgaon Sheri; Kharadi and Wagholi homes usually need a tutor who rides in from nearby.',
                'Nagar Road and Airport Road fill up at the start and end of the working day, so let the class begin after the evening wave has passed.',
                'Large Kharadi and Wagholi societies can limit visitor parking; sort out the gate pass and a parking spot, or a drop point, before the demo.',
            ],
        ],
        'Koregaon Park, Camp & Wanowrie' => [
            'guide' => 'east-pune-tuition-guide',
            'intro' => [
                'Koregaon Park, Camp, Wanowrie and Salunke Vihar sit south of the river around the old cantonment. Camp is the everyday name for the Pune Cantonment, established in 1817 over the villages of Mali, Munjeri, Wanowrie and Ghorpuri and still run by its cantonment board. Koregaon Park was laid out in the early 1920s on Ghorpuri land as Koregaon Road Estate, Wanowrie is now settled housing towards Hadapsar, and Salunke Vihar is a quieter pocket where many retired defence personnel live.',
                'Bund Garden station on the Aqua Line, open since March 2024, serves Koregaon Park, and the Pune Railway Station metro stop, open since August 2023, serves the Camp side alongside Pune Junction. Wanowrie and Salunke Vihar have no station close by, so tutors there come by two-wheeler, bus or auto. Housing ranges from British-era bungalows and older villas to builder floors and apartment societies, and some army areas have entry rules of their own.',
            ],
            'tips' => [
                'If you live near an army area, check the entry rules and any pass the tutor needs before the first visit, not on the day.',
                'Restaurant traffic fills lanes six and seven of Koregaon Park at night and Camp\'s shopping streets are busiest on weekend evenings, so weekday after-school slots are usually smoother.',
                'In a bungalow the tutor can usually park in the lane and come to the gate; in apartment buildings and Salunke Vihar societies, leave the name in the visitor log.',
            ],
        ],
        'Hadapsar, Kondhwa & NIBM' => [
            'guide' => 'south-pune-tuition-guide',
            'intro' => [
                'Hadapsar, Magarpatta, Kondhwa, NIBM Road and Undri form the south-east\'s belt of large societies and gated townships. Hadapsar, on Solapur Road, part of National Highway 65, was the site of the Battle of Poona in 1802 and grew fast after 1990 as industry and then IT offices arrived. Magarpatta is a 182-hectare gated township inside it, developed through land pooling from 2000. Kondhwa is made up of Kondhwa Budruk and Kondhwa Khurd, and Undri lies beyond NIBM Road.',
                'There is no metro in this zone. Hadapsar railway station runs local trains towards Daund, the Gadital bus station links Hadapsar with city and state buses, and Swargate, at the southern end of the Purple Line, is the closest metro stop for Kondhwa and NIBM Road. Most tutors therefore arrive by two-wheeler, bus or auto, and entry to the townships and larger societies is controlled at the gate, often down to the cluster and tower.',
            ],
            'tips' => [
                'With no metro nearby, ask first for a tutor already living in Hadapsar, Kondhwa or NIBM Road; a long cross-city ride is the most common reason a timetable slips.',
                'For Magarpatta and the townships, send the tutor\'s name with the cluster, tower and flat to the gate before the demo so the first visit is not held up.',
                'NIBM Road and Katraj to Kondhwa Road carry heavy school and office traffic, so a slot just after the school rush tends to be the easiest to keep.',
            ],
        ],
        'Katraj, Bibwewadi & Sinhagad Road' => [
            'guide' => 'south-pune-tuition-guide',
            'intro' => [
                'Katraj, Bibwewadi, Dhankawadi and Sinhagad Road cover south Pune as it climbs from Swargate towards the hills. Katraj lies at the foot of the Katraj Ghat on Satara Road, National Highway 48, known for its Peshwa-era lake and the zoo park beside it. Bibwewadi is an established area near Market Yard, Dhankawadi was a small village until it joined the city in 1995, and Sinhagad Road runs from near Sarasbaug to the base of Sinhagad fort.',
                'The Purple Line has reached Swargate, underground, since September 2024, and an underground extension to Katraj, approved in August 2024 but not yet built, has planned stations at Market Yard, Bibwewadi, Padmavati, Balaji Nagar and Katraj. Until it opens, tutors ride to Swargate and finish by bus or auto, or come by two-wheeler. Sinhagad Road has no metro, and housing across the zone mixes independent houses and builder floors with societies.',
            ],
            'tips' => [
                'A tutor coming by metro gets off at Swargate; for Katraj or Dhankawadi, check that the onward bus or auto fits the lesson time before fixing a weekly slot.',
                'Along Sinhagad Road, give the name of your neighbourhood as well, such as Vadgaon Budruk or Dhayari, because the road is long and the name alone does not pin down a home.',
                'Satara Road and Sinhagad Road are heavy at school and office hours; start before or after the rush, and use an online lesson on the heaviest rain days.',
            ],
        ],
    ],
    // Hyderabad (1 Oct 2026), from database/seo-content/areas/hyderabad-zone-guides.json.
    'Hyderabad' => [
        'Gachibowli, Kondapur & Madhapur' => [
            'guide' => 'west-hyderabad-tuition-guide',
            'intro' => [
                'Gachibowli, Kondapur, Madhapur and Nanakramguda make up the office heart of west Hyderabad. HITEC City, inaugurated in November 1998, grew around Madhapur, which was a small rocky village until the early 1990s, and the Financial District now runs along Gachibowli\'s southern side. Homes are mostly high-rise towers and gated communities set among office parks, with villa enclaves in Gachibowli and settled colonies such as Kavuri Hills and Patrika Nagar in Madhapur.',
                'The Blue Line opened from Ameerpet to HITEC City in March 2019 and reached Raidurg, its western terminus, that November, with Madhapur and Durgam Cheruvu stations on the way. The MMTS has Hi-Tech City and Hafizpet stations nearby. Gachibowli, Kondapur and Nanakramguda have no station inside them, so tutors usually ride to HITEC City or Raidurg and take an auto or cab, while the Outer Ring Road meets the zone at Gachibowli and Nanakramguda.',
            ],
            'tips' => [
                'Register the tutor with your tower\'s visitor app or security desk before the demo, and say whether the guard will call the flat before letting them up.',
                'Name the right station: HITEC City suits Kondapur and Madhapur, Raidurg suits Gachibowli and Nanakramguda, and Hafizpet on the MMTS helps a tutor coming from the Lingampalli line.',
                'Office traffic on the old Mumbai Highway and near the Outer Ring Road junctions builds up as offices close, so pick a slot that ends before then or move to a weekend morning.',
            ],
        ],
        'Kukatpally, Miyapur & Nizampet' => [
            'guide' => 'west-hyderabad-tuition-guide',
            'intro' => [
                'Kukatpally, KPHB Colony, Miyapur, Nizampet and Bachupally form the dense north-western end of Hyderabad along the Mumbai Highway, NH 65. Kukatpally began as an industrial corridor and grew from the early 1990s into one of the city\'s most populated suburbs. KPHB Colony is a planned housing board township laid out in numbered phases, while Miyapur has added high-rise communities beside older colonies. Nizampet and Bachupally, once villages, are now apartment blocks, gated colonies and independent houses.',
                'The Red Line opened from Miyapur to Ameerpet in November 2017, with eleven stations including Miyapur, KPHB Colony, Kukatpally, Balanagar and Moosapet, and the metro depot sits beside the Miyapur terminus. Tutors from Ameerpet or the city centre can ride straight up the line. Nizampet Road links Nizampet to Bachupally and the highway, and a flyover at Bachupally carries traffic between Miyapur X Roads and Gandimaisamma, so the northern colonies are reached by auto or bus from the Red Line.',
            ],
            'tips' => [
                'For KPHB and Kukatpally, choose a tutor who comes by Red Line and walks or takes a short auto; many homes sit close to a station.',
                'In Nizampet and Bachupally, share the colony name, a landmark and a map pin, since the last leg from the metro is along busy Nizampet Road or the Bachupally road.',
                'The highway and Miyapur X Roads are heavy in the evening peak, so start lessons before the rush or leave a margin after it.',
            ],
        ],
        'Manikonda, Narsingi & Kokapet' => [
            'guide' => 'west-hyderabad-tuition-guide',
            'intro' => [
                'Manikonda, Khajaguda, Narsingi and Kokapet sit south-west of the Financial District and have changed quickly in recent years. Manikonda is made up of two revenue villages, Manikonda and Puppalaguda, with high-rise townships beside independent houses. Narsingi is the headquarters of Gandipet mandal, Kokapet lies in the same mandal, and both have become areas of very tall residential towers, villa enclaves and gated communities. Khajaguda is known for its ancient granite hill and lake.',
                'The Outer Ring Road, an eight-lane expressway opened in stages between 2008 and 2016, has interchanges at Narsingi and Kokapet, and much of Kokapet is a planned layout with wide roads sold through public e-auctions. There is no metro station in the zone; Raidurg, at the western end of the Blue Line, is the nearest. Most tutors therefore come by road, via the ORR, Shaikpet Main Road or Khajaguda Main Road, and some finish from Raidurg by cab.',
            ],
            'tips' => [
                'Expect towers to register every visitor and sometimes call up for approval, so send the tutor\'s name and the tower and flat number a day ahead.',
                'Ask shortlisted tutors how they will travel: most come by two-wheeler or car via the ORR, and a tutor already teaching in the Financial District is often the steadiest choice.',
                'Because the local pool of tutors is still growing, consider one home lesson a week with an online session for specialist subjects or revision.',
            ],
        ],
        'Chandanagar, Lingampally & Tellapur' => [
            'guide' => 'west-hyderabad-tuition-guide',
            'intro' => [
                'Chandanagar, Hafeezpet, Serilingampally and Tellapur run along the north-western edge of the IT belt. Chandanagar is a mature suburb on the Mumbai Highway, widened to six lanes here, with builder floors, apartment blocks and independent houses in colonies off the main road. Hafeezpet splits into Old and New Hafeezpet. Serilingampally, usually called Lingampally, is its mandal\'s headquarters, and Tellapur, across the line in Sangareddy district, is one of the fastest-growing localities of gated communities and towers.',
                'This is the MMTS zone. The suburban line, whose first phase opened in August 2003, runs through Borabanda, Hi-Tech City, Hafizpet and Chandanagar to Lingampalli, the network\'s terminus and a starting point for long-distance trains. Miyapur on the Red Line is the nearest metro station for Chandanagar and Hafeezpet. Tellapur has no rail of its own, so tutors reach it by road or take the train to Lingampalli and finish by auto or cab.',
            ],
            'tips' => [
                'Ask tutors from further away whether they can use the MMTS; a train to Chandanagar, Hafizpet or Lingampalli and a short auto is often quicker than the highway.',
                'In Chandanagar and Hafeezpet, give the colony and house number for an independent home; in Tellapur, register the tutor at the community gate before the first visit.',
                'Tellapur journeys can be long for tutors from the city, so weekend slots or a mix of home and online lessons tend to hold up better.',
            ],
        ],
        'Banjara Hills, Jubilee Hills & Somajiguda' => [
            'guide' => 'central-hyderabad-tuition-guide',
            'intro' => [
                'Banjara Hills, Jubilee Hills, Film Nagar and Somajiguda are the established hillside neighbourhoods of central-west Hyderabad. Banjara Hills runs along Road No. 1 to Road No. 14, with hotels and offices on Roads 1 and 3. Jubilee Hills grew from a plan first proposed in 1963, and Road Nos. 36 and 37 form its commercial spine. Film Nagar began as a colony for the Telugu film industry, and Somajiguda, on Raj Bhavan Road, has become a business district.',
                'Homes range from large independent houses and villas on the slopes to newer apartment buildings, some gated, and in Somajiguda mostly flats in lanes such as Sangeet Nagar and Matha Nagar. The Blue Line section opened in March 2019 brought Road No. 5 Jubilee Hills, Yusufguda and Peddamma Gudi, and Jubilee Hills Check Post, opened in May 2019, is the highest metro station in Hyderabad. Punjagutta on the Red Line and the Necklace Road MMTS station serve the eastern side.',
            ],
            'tips' => [
                'Give the road number and house number together, since the numbered roads wind up the hill and a tutor coming from the station needs both.',
                'Pick the right stop: Jubilee Hills Check Post for Film Nagar and the western roads, Punjagutta or Khairatabad for Somajiguda and eastern Banjara Hills.',
                'Roads 1, 3 and 36 and Raj Bhavan Road carry heavy office traffic, so set weekday lessons before the evening rush or use weekend mornings.',
            ],
        ],
        'Ameerpet, Begumpet & Punjagutta' => [
            'guide' => 'central-hyderabad-tuition-guide',
            'intro' => [
                'Ameerpet, Begumpet and Punjagutta form the busy junction of the city\'s metro network, north and west of Hussain Sagar. Ameerpet is known across Hyderabad for software-training institutes, student hostels and paying-guest homes, with older houses and flats in the lanes behind. Begumpet began as a small suburb between Hyderabad and Secunderabad, and its airport now handles training and charter flights. Punjagutta is a shopping and office stretch whose twin flyovers carry traffic over the junction.',
                'Ameerpet station is the interchange between the Red and Blue Lines, so tutors living anywhere along either line can reach the zone without leaving the metro. The Blue Line from Nagole opened here in November 2017, with Rasoolpura, Prakash Nagar and Begumpet stations, and Begumpet\'s MMTS station sits beside its metro stop. Punjagutta has been on the Red Line since September 2018. Residential pockets such as Dwarakapuri and the Officers Colony lie behind Punjagutta\'s main road.',
            ],
            'tips' => [
                'Use the interchange: a tutor from Miyapur, LB Nagar, Nagole or HITEC City can reach Ameerpet directly, which widens the choice of tutors.',
                'Ameerpet\'s main road is crowded with students and shoppers in the evening, so fix a slot just before the rush or later in the evening.',
                'In the colony lanes behind the main roads, share a landmark and the floor, since many buildings hold several households and hostels.',
            ],
        ],
        'Khairatabad, Himayatnagar & Abids' => [
            'guide' => 'central-hyderabad-tuition-guide',
            'intro' => [
                'Khairatabad, Himayatnagar and Abids make up the old commercial centre on the southern and eastern sides of Hussain Sagar. Khairatabad, founded in the seventeenth century, grew around a five-road junction and is known citywide for its very large Ganesh idol each year. Himayatnagar developed from the mid-1960s and mixes shops and offices with homes. Abids is one of Hyderabad\'s oldest business areas, and Abids Road, lined with textile and jewellery shops, links the old and new city.',
                'Rail choices are wide. Khairatabad has a Red Line station and an MMTS station on the Falaknuma and Lingampalli routes, Assembly station sits near the Public Gardens and Nampally, and the Green Line, opened in February 2020, stops at RTC X Roads, Chikkadpally, Narayanguda and Sultan Bazaar. Homes are mostly flats and older houses in close lanes, where parking is scarce, so a tutor arriving by train or metro and walking is usually the more dependable choice.',
            ],
            'tips' => [
                'For Himayatnagar, Narayanguda or Chikkadpally on the Green Line are the easiest stops; for Abids, Assembly or Nampally; for Khairatabad, its own metro or MMTS station.',
                'Market streets in Abids and Sultan Bazaar are busiest in the evenings and at weekends, so weekday afternoon or early-evening lessons are simpler.',
                'Tell the building\'s watchman the tutor\'s name and regular days, since older multi-storey buildings often have no formal visitor desk.',
            ],
        ],
        'Secunderabad, Marredpally & Tarnaka' => [
            'guide' => 'secunderabad-tuition-guide',
            'intro' => [
                'Secunderabad, Marredpally, Tarnaka and Malkajgiri form the core of the twin city north-east of Hussain Sagar. Secunderabad was founded in 1806 as a British cantonment, and busy market roads around the railway station give way to quieter colonies. Marredpally divides into East and West, with builder floors and houses in colonies such as Aswini Colony. Tarnaka, on the Inner Ring Road, began with large bungalows and added apartments from around 2000. Malkajgiri takes in Neredmet, Moula Ali and Safilguda.',
                'Secunderabad Junction is the zonal headquarters of the South Central Railway and the main MMTS hub, with Secunderabad East on the Blue Line and Secunderabad West on the Green Line beside it. Parade Ground, next to the Jubilee Bus Station, is where the Blue and Green Lines meet. Tarnaka and Mettuguda are Blue Line stops, and Malkajgiri Junction is on the MMTS route to Bolarum. Most homes are houses and apartment buildings, with relatively few large gated communities in Malkajgiri.',
            ],
            'tips' => [
                'Parade Ground is the easiest meeting point for tutors from both the Blue and Green Lines, with a short auto to Marredpally.',
                'Roads around Secunderabad station and Tukaram Gate are heavy at office hours, so fix a lesson a little before or after the peak.',
                'In Tarnaka and Malkajgiri, share the colony name, such as Vijayapuri or Neredmet, with a map pin, since many inner lanes look alike.',
            ],
        ],
        'Sainikpuri, Alwal & Trimulgherry' => [
            'guide' => 'secunderabad-tuition-guide',
            'intro' => [
                'Sainikpuri, Alwal, Trimulgherry and Bowenpally lie in the green cantonment country north of Secunderabad. Sainikpuri began as a co-operative housing venture for retired army personnel, on large plots along numbered, tree-lined roads, with Kapra Lake on its eastern edge. Trimulgherry grew around a military base established in 1857, and Alwal, historically part of the cantonment, is known for its old temples. Bowenpally, Old and New, sits near Begumpet Airport where the highways to Nizamabad and Pune meet.',
                'The metro does not reach this far north, so the MMTS is the rail option. Alwal station lies between Cavalry Barracks and Bolarum Bazar on the Bolarum route, Ammuguda serves the Neredmet side close to Sainikpuri, and Fatehnagar is nearest for Bowenpally. MMTS services from Secunderabad through Bolarum to Medchal were inaugurated in April 2023. Homes are mostly independent houses, plotted colonies and apartment buildings, and most tutors arrive by two-wheeler, with room to park outside houses.',
            ],
            'tips' => [
                'Look first for tutors already living in the northern colonies, since a cross-city journey by road is long and rail links here are limited.',
                'Near defence areas, colony gates may check visitors, so give the tutor your house number and the gate to use before the first lesson.',
                'Main roads towards Secunderabad are busy at office hours; a lesson that starts after the evening rush keeps a regular timetable easier.',
            ],
        ],
        'Uppal, Habsiguda & Nacharam' => [
            'guide' => 'east-and-south-hyderabad-tuition-guide',
            'intro' => [
                'Uppal, Habsiguda, Nacharam, Ramanthapur, Boduppal and Nagole make up the eastern edge of the city around the Warangal highway and the Inner Ring Road. Uppal\'s international cricket stadium is the landmark most people give. Habsiguda grew from a hamlet and has research campuses along its main road. Nacharam pairs an industrial area of small units with residential colonies, Ramanthapur is older and settled, and Boduppal, between the Nacharam–Mallapur road and the Warangal highway, is largely independent houses.',
                'The first stage of the Blue Line, Nagole to Ameerpet with fourteen stations, opened in November 2017 and was later extended to HITEC City and Raidurg. Nagole, the eastern terminus beside the Uppal depot, Uppal, Stadium and Habsiguda serve this zone, so a tutor from the west can ride straight across the city. Nagole grew as a middle-class housing area in the early 1990s. Many homes are family houses, with apartment blocks on the main roads.',
            ],
            'tips' => [
                'Uppal X Roads and the Warangal highway are heavy at office hours, so evening lessons are steadier when they start after the rush.',
                'For Boduppal and Ramanthapur, which have no station inside, a tutor usually takes the Blue Line to Uppal, Nagole or Habsiguda and then an auto, so add a landmark to your address.',
                'In apartment buildings, tell the watchman the tutor\'s name and timing; in independent houses, a house number and colony name are enough.',
            ],
        ],
        'Dilsukhnagar, LB Nagar & Vanasthalipuram' => [
            'guide' => 'east-and-south-hyderabad-tuition-guide',
            'intro' => [
                'Dilsukhnagar, Kothapet, LB Nagar, Saroornagar, Malakpet and Vanasthalipuram run south-east along the Hyderabad–Vijayawada highway. Dilsukhnagar began as a suburb on farmland and is now a main commercial hub of the east, and Kothapet\'s fruit market moved here from Jambagh in 1980. Saroornagar grew around a lake built in the late sixteenth century, Malakpet has held the race course since 1886, and Vanasthalipuram, once forest and hunting ground, keeps a deer park on its edge.',
                'The Red Line from Ameerpet to LB Nagar opened in September 2018, with stations at Malakpet, New Market, Musarambagh, Dilsukhnagar, Chaitanyapuri and LB Nagar, the southern terminus. Malakpet also has an MMTS station. Housing is a mix of independent houses, builder floors and apartment buildings, with many families in their own homes on colony roads, especially in Saroornagar and Vanasthalipuram, where plotted colonies are common and tutors ride the metro to LB Nagar and take an auto.',
            ],
            'tips' => [
                'Dilsukhnagar Main Road, the Kothapet market stretch and LB Nagar crossroads are busy for much of the day, so a tutor arriving by metro is usually more punctual than one driving.',
                'Name the closest station: Chaitanyapuri for Kothapet, Dilsukhnagar or LB Nagar for Saroornagar, Malakpet for the old Malakpet lanes.',
                'For Vanasthalipuram, allow time for the auto ride along the highway from LB Nagar and prefer a slot after the evening peak.',
            ],
        ],
        'Mehdipatnam, Tolichowki & Attapur' => [
            'guide' => 'east-and-south-hyderabad-tuition-guide',
            'intro' => [
                'Mehdipatnam, Tolichowki, Attapur and Rajendranagar form the south-west of the city, north and south of the Musi. Mehdipatnam is a busy junction with a large bus depot and a well-known shopping market, and colonies such as Humayun Nagar, Murad Nagar and Rethibowli. Tolichowki, on the road to Gachibowli, has become home to many families working in IT. Attapur is mostly apartment buildings, and Rajendranagar\'s growing colonies include Budwel, Kismatpur and Bandlaguda.',
                'The elevated expressway to the airport starts at Mehdipatnam and passes over Attapur to Aramghar, where it joins NH 44; it opened in October 2009, and many Attapur addresses are given by its pillar numbers. A six-lane flyover from Tolichowki eases the way through Shaikpet to the IT district. There is no metro in this zone, so tutors come by bus or two-wheeler, and the nearest MMTS stations are Lakdikapool and Nampally.',
            ],
            'tips' => [
                'In Attapur, give the expressway pillar number along with your address; tutors use it to find the right side road.',
                'The Mehdipatnam junction and Tolichowki crossroads are crowded at office hours, so lessons that start after the evening rush run more reliably.',
                'Rajendranagar\'s colonies are spread out, so send an exact map pin and landmark, and consider online lessons when a specialist cannot travel that far.',
            ],
        ],
    ],
    // Chandigarh (1 Oct 2026), from database/seo-content/areas/chandigarh-zone-guides.json.
    'Chandigarh' => [
        'Chandigarh Sectors 1–30' => [
            'guide' => 'chandigarh-sectors-tuition-guide',
            'intro' => [
                'Sectors 1 to 30 are Chandigarh\'s first phase, laid out as low-rise plotted neighbourhoods around Sector 17, the central business district. Sector 22 was the first to be built, Sector 1 holds the Capitol Complex and Sukhna Lake, and the top row of Sectors 8, 9 and 10 is mostly independent houses, bungalows and government residences. Sector 15 sits beside the university campus in Sector 14, with paying-guest homes among family houses.',
                'Getting around depends on the grid\'s main roads, called Margs: Madhya Marg, Jan Marg, Dakshin Marg and Himalaya Marg, with Paths such as Sarovar Path and Sukhna Path around the sectors. The inter-state bus terminal in Sector 17 serves Sectors 16, 18, 21 and 22. Most homes open straight onto the street, though builder floors in Sectors 11, 21 and 27 share one entrance between several families.',
            ],
            'tips' => [
                'Send the sector, the block letter, the house number and, for a builder floor, which bell to ring; no gate register is usually involved in these sectors.',
                'Set evening lessons to start before the return rush on Madhya Marg and Dakshin Marg, especially if the tutor is coming from Panchkula, Mohali or Zirakpur.',
                'Near the Sector 16 stadium, the Sector 22 street market or Sadar Bazaar in 19-C, agree a parking spot at the first visit, or pick a tutor who comes by bus and auto.',
            ],
        ],
        'Chandigarh Sectors 31–56 & Manimajra' => [
            'guide' => 'chandigarh-sectors-tuition-guide',
            'intro' => [
                'The second-phase sectors south of Dakshin Marg were built at nearly four times the density of the north, with four-storey apartments for government employees in Sectors 31 to 47. Chandigarh Housing Board blocks run through Sectors 38 to 41, 44 to 47, 51, 52 and 55, while the cooperative group housing societies of Sectors 48 to 51 brought apartment living to the city. Houses and floors remain in Sectors 33, 35, 36 and 46.',
                'Manimajra, an old town with a fort from the early sixteenth century, was notified as Sector 13 in February 2020 and now mixes old lanes with planned complexes and an IT park. It sits at Housing Board Chowk, the key junction of the Panchkula commute on Madhya Marg. The Sector 43 inter-state bus terminal serves the south-western sectors, and Chandigarh Junction railway station lies on the eastern side.',
            ],
            'tips' => [
                'For housing-board flats in Sectors 38, 40, 44 or 46, share the sub-sector, block and flat number; numbering such as 44-A, 44-C and 44-D confuses first-time visitors.',
                'In the Sector 49 societies, give the guard the tutor\'s name before the demo so later visits go through without a stop at the gate.',
                'In Manimajra, avoid lesson times when Housing Board Chowk is at its busiest, and agree where the tutor can park in the narrow old-town lanes.',
            ],
        ],
        'Mohali' => [
            'guide' => 'mohali-and-panchkula-tuition-guide',
            'intro' => [
                'Mohali, officially Sahibzada Ajit Singh Nagar, grew from an industrial estate started in 1967, and its township was founded on 1 November 1975. It continues Chandigarh\'s grid on the Punjab side, but its first eleven sectors are called phases, so Phase 5 is Sector 59, Phase 7 is Sector 61 and Phase 10 is Sector 64. The early phases are mostly independent houses and villas; Phase 10 and Sector 70 add apartment complexes.',
                'The Greater Mohali master plan reaches Sector 128 and includes Aerocity, a newer township of plots beside the international airport, and IT City in Sectors 82, 82A and 83A. There is no metro. SAS Nagar Mohali railway station lies on the direct Chandigarh–Ludhiana line, National Highway 5 runs through Kharar and Mohali into Chandigarh, and Airport Road links Aerocity with Mohali\'s older phases and Zirakpur.',
            ],
            'tips' => [
                'Phase 7 borders Chandigarh\'s Sector 52, so for Phases 3B2, 5 and 7 a tutor from Chandigarh\'s southern sectors is as practical as one from Mohali.',
                'In Phase 10 and Sector 70 apartment complexes, register the tutor\'s name at the gate; houses and floors in the same sectors are reached at the door.',
                'Aerocity has fewer tutors living inside it so far, so consider tutors from the phases or Zirakpur, and plan around match days near the Phase 9 stadiums.',
            ],
        ],
        'Panchkula & Zirakpur' => [
            'guide' => 'mohali-and-panchkula-tuition-guide',
            'intro' => [
                'Panchkula was planned by Haryana in the 1970s on a sector system like Chandigarh\'s. Sectors 8 and 15 are largely plotted houses and builder floors, with Sector 15 running its own full market. Mansa Devi Complex spreads over Sectors 4, 5 and 6 and takes its name from the Mata Mansa Devi temple, which draws large crowds during Navratra. Chandimandir Cantonment, headquarters of the Army\'s Western Command, lies in the north.',
                'Zirakpur belongs to Mohali district in Punjab but works as Panchkula\'s southern neighbour: Peer Muchalla adjoins Panchkula\'s Sectors 20 and 21. It grew from villages such as Baltana and Dhakoli into a town of gated societies at the junction of the highways to Shimla, Ambala and Patiala. National Highway 5 enters Haryana here, and the redeveloped Chandigarh Junction has a station building on the Panchkula side.',
            ],
            'tips' => [
                'Panchkula Sector 20 and most of Zirakpur are gated societies, so register the tutor at the gate once and check where visitors can park inside.',
                'Tutors crossing between Panchkula and Chandigarh use Madhya Marg and Housing Board Chowk, so set evening lessons before the office rush or choose a tutor from your own side.',
                'In Mansa Devi Complex, move lessons earlier in the day or online during Navratra weeks, when temple crowds fill the roads around the sectors.',
            ],
        ],
    ],
    // Jaipur (1 Oct 2026), from database/seo-content/areas/jaipur-zone-guides.json.
    'Jaipur' => [
        'C-Scheme, Bani Park & Vidhyadhar Nagar' => [
            'guide' => 'central-and-north-jaipur-tuition-guide',
            'intro' => [
                'C-Scheme, Civil Lines, Bani Park, Shastri Nagar, Vidhyadhar Nagar, Jhotwara and Sikar Road make up central and north Jaipur. C-Scheme is the business district, with apartment buildings and older bungalows between offices and hotels, and Civil Lines keeps large government bungalows on wide avenues. Bani Park is mostly independent houses near the railway station, while Vidhyadhar Nagar was planned as a satellite town on the walled city\'s grid, in numbered sectors along a central spine.',
                'Only the southern edge has a metro. Civil Lines, Railway Station and Sindhi Camp are elevated Pink Line stations, open since 3 June 2015. North of them, Shastri Nagar, Vidhyadhar Nagar, Jhotwara and the Sikar Road corridor on National Highway 52 depend on roads, and tutors mostly come by scooter or auto. The planned Orange Line lists stops at Pani Pech, Ambabari, Vidhyadhar Nagar, Harmada and Todi Mod, but it is not open yet.',
            ],
            'tips' => [
                'In C-Scheme apartment buildings, give security the tutor\'s name and the lesson time before the first visit; in Bani Park and Vidhyadhar Nagar houses, the tutor usually comes straight to the door.',
                'Give the sector number with every Vidhyadhar Nagar address, and on Sikar Road say which end of the corridor you live on, since that decides which tutors can reach you.',
                'Parking in C-Scheme is scarce in office hours and roads near the station fill up in the evening, so weekend mornings or slightly later evening slots are easier for a visiting tutor.',
            ],
        ],
        'Raja Park, Jawahar Nagar & Bapu Nagar' => [
            'guide' => 'central-and-north-jaipur-tuition-guide',
            'intro' => [
                'Raja Park, Jawahar Nagar, Adarsh Nagar, Tilak Nagar, Bapu Nagar and Bajaj Nagar are established localities just outside the walled city, east and south-east of C-Scheme. Jawahar Nagar runs in Sectors 1 to 5 of independent homes on leafy streets, Raja Park pairs a busy market road with builder floors behind it, Tilak Nagar near the Moti Doongri temple has newer apartment projects, and Bapu Nagar sits between Tonk Road and C-Scheme with bungalows beside apartment blocks.',
                'No metro station lies inside this zone, so tutors travel by scooter, car or auto, and one who already lives here is worth asking for. Gandhinagar Jaipur railway station, in the Bajaj Nagar area and known as a station run entirely by women, mainly serves the southern side of the city. The planned Orange Line lists stops at Rambagh Circle and Gandhinagar Station. Most homes are houses or builder floors, so visits rarely involve a gate desk.',
            ],
            'tips' => [
                'Include the sector number with a Jawahar Nagar address, and in Raja Park or Bajaj Nagar share a landmark on your inner lane rather than the market road.',
                'Suggest a place where the tutor can park a two-wheeler, because market roads in Raja Park and Adarsh Nagar are crowded in the evening.',
                'Weekend mornings avoid the busiest shopping hours; on weekdays, an early after-school slot usually beats the evening peak around Tonk Road.',
            ],
        ],
        'Vaishali Nagar & West Jaipur' => [
            'guide' => 'south-and-west-jaipur-tuition-guide',
            'intro' => [
                'Vaishali Nagar, Chitrakoot, Nirman Nagar, Shyam Nagar, Sodala and the Ajmer Road corridor form west Jaipur. Vaishali Nagar is bounded by the Delhi Bypass, Ajmer Road and Sirsi Road and mixes gated communities, apartments, houses and builder floors. Chitrakoot has 12 sectors, ten mainly residential. Nirman Nagar runs from houses to high-rise apartments, Shyam Nagar has parks and homes across budgets, and Ajmer Road, part of National Highway 48, adds colonies and larger townships further out.',
                'This is where the Pink Line helps most. Mansarovar station, the western terminal, stands in Nirman Nagar; Shyam Nagar and Vivek Vihar stations are on New Sanganer Road; Ram Nagar station on Hawa Sadak is in Sodala; and Civil Lines station sits on the elevated Ajmer Road stretch, all open since June 2015. Vaishali Nagar and Chitrakoot have no station, so tutors there usually come by scooter or car.',
            ],
            'tips' => [
                'Near Shyam Nagar, Sodala or Nirman Nagar, ask whether the tutor travels by metro; a station close to your home widens the pool of tutors who can come.',
                'Always give the sector with a Chitrakoot address, and in Vaishali Nagar gated communities register the tutor at the gate before the demo.',
                'Ajmer Road and the 200 Feet Bypass are heavy in the evening, so leave slack in the lesson time or keep an online session for exam weeks.',
            ],
        ],
        'Mansarovar & Sanganer' => [
            'guide' => 'south-and-west-jaipur-tuition-guide',
            'intro' => [
                'Mansarovar, Gopalpura Bypass, Pratap Nagar and Sanganer make up the south-west and south of the city. Mansarovar was planned by the Jaipur Development Authority, with Rajasthan Housing Board schemes too, and until 2010 was often described as Asia\'s largest colony. Pratap Nagar, on Tonk Road, grew in numbered Housing Board sectors of flats. Sanganer, an old town known for hand-block printing and handmade paper, is home to the airport, and Gopalpura Bypass is a busy road lined with coaching institutes.',
                'The Pink Line begins at Mansarovar and runs east along New Sanganer Road through New Aatish Market and Vivek Vihar, all open since 3 June 2015. Beyond that the zone depends on roads and rail, with Durgapura, Gandhinagar and Sanganer stations as the nearest rail links. The planned Orange Line lists stops at Gopalpura, Jaipur Airport, Sanganer PS, Haldighati Gate and Sitapura, and it is still under construction.',
            ],
            'tips' => [
                'Housing board blocks in Mansarovar and Pratap Nagar are usually doorstep visits, but give the scheme or sector number as well as the flat, since similar addresses repeat.',
                'On Gopalpura Bypass the coaching crowd fills the road through the day, so late-evening or weekend lessons are easier for a visiting tutor.',
                'In Sanganer\'s older lanes a tutor on a two-wheeler finds the house more easily; in newer apartment projects, register the tutor at the gate first.',
            ],
        ],
        'Malviya Nagar, Jagatpura & Tonk Road' => [
            'guide' => 'south-and-west-jaipur-tuition-guide',
            'intro' => [
                'Malviya Nagar, Jagatpura, Durgapura and the Tonk Road corridor form south Jaipur\'s growth belt. Malviya Nagar has wide roads, a popular market and homes from builder floors to villas, with the main road to the airport running through it. Jagatpura is mid-segment and mostly apartments, many in gated complexes, with its long flyover as the landmark. Durgapura is an organised colony of houses and apartments, and Tonk Road, part of National Highway 52, carries offices and showrooms.',
                'Rail, not metro, serves this belt for now. Durgapura and Getor Jagatpura stations are on the North Western Railway, and Gandhinagar station stands close to Tonk Road. The Orange Line, planned and under construction, follows the north-south route with stops such as Gandhinagar Station, Gopalpura and Durgapura, and the foundation stone for Metro Phase 2 was laid on 4 July 2026. Until it opens, tutors come by scooter or car.',
            ],
            'tips' => [
                'Say which side of Tonk Road you live on; crossing it at peak hours is slow, so a tutor already on your side is easier to keep.',
                'In Jagatpura\'s gated complexes, register the tutor at the gate and share the tower and flat number before the first class.',
                'Malviya Nagar\'s market and restaurant roads fill up in the evening, so an earlier slot straight after school often works better.',
            ],
        ],
    ],
    // Indore (1 Oct 2026), from database/seo-content/areas/indore-zone-guides.json.
    'Indore' => [
        'Vijay Nagar & AB Road' => [
            'guide' => 'vijay-nagar-and-east-indore-tuition-guide',
            'intro' => [
                'Vijay Nagar, Scheme 54, Scheme 74, Scheme 78, Scheme 114, Sukhliya and the Super Corridor make up Indore\'s planned north-east. Vijay Nagar, developed by the Indore Development Authority between MR-9, MR-10 and the Eastern Ring Road, is now a commercial hub as well as a suburb. The numbered IDA schemes around it mix plotted independent houses, IDA housing and apartment buildings, while Sukhliya grew from a rural area into colonies of plotted homes.',
                'This is the only part of Indore the metro serves so far. The Yellow Line\'s first five stations, along the Super Corridor, opened on 31 May 2025, and regular service on the next eleven, from Super Corridor 2 to Malviya Nagar Chauraha, began on 6 September 2026, with stops at MR 10 Road, ISBT, Hira Nagar, Meghdoot Garden and Vijay Nagar Chauraha. Townships along the Super Corridor are still filling up, so many tutors travel out from Vijay Nagar or Sukhliya.',
            ],
            'tips' => [
                'Name the nearest Yellow Line station when you send a request: Vijay Nagar Chauraha or Meghdoot Garden for the schemes, Hira Nagar or MR 10 Road for Sukhliya, and the Super Corridor stations for the townships.',
                'In the IDA schemes, give the scheme, sector and plot number with a map pin; in a Super Corridor township, add the tutor\'s name to the gate register before the demo.',
                'The squares around Vijay Nagar get crowded in the evening shopping hours, so ask for a slot that starts before that rush rather than one that ends in it.',
            ],
        ],
        'Palasia & Central Indore' => [
            'guide' => 'central-and-south-indore-tuition-guide',
            'intro' => [
                'Old Palasia, New Palasia, Race Course Road, Manorama Ganj, Geeta Bhawan, LIG Colony, Saket Nagar and Tilak Nagar form the settled centre of Indore along and around AB Road. AB Road separates Old and New Palasia, where houses and apartment buildings sit among clinics, shops and offices. Geeta Bhawan combines IDA flats, cooperative housing societies and private houses, LIG Colony runs in lettered IDA sectors, and Manorama Ganj is known for its quiet, green lanes.',
                'Palasia is also an education hub full of coaching institutes, which shapes what families here ask for: a tutor who supports school work alongside coaching. No metro station is open in this zone yet; the Yellow Line is planned to continue through Bengali Square, Patrakar Colony and an underground station at Palasia Square towards the railway station. The old BRTS lanes on AB Road have been dismantled, so tutors arrive by city bus, auto or two-wheeler.',
            ],
            'tips' => [
                'Parking near Palasia and Geeta Bhawan squares is tight in the evening, so a tutor who comes by auto or two-wheeler is often easier to keep than one who drives.',
                'If the student already attends coaching in Palasia, share that timetable in the request, so the tutor\'s slot sits before or after coaching rather than squeezed between.',
                'In the IDA sectors of LIG Colony and in private houses the tutor comes straight to the door; in Geeta Bhawan\'s societies and larger apartment buildings, put the name on the register first.',
            ],
        ],
        'Nipania, Bicholi & Ring Road' => [
            'guide' => 'vijay-nagar-and-east-indore-tuition-guide',
            'intro' => [
                'Nipania, Mahalaxmi Nagar, Khajrana, Scheme 94, Scheme 140, Pipliyahana, Kanadia Road and Bicholi Mardana follow the six-lane Ring Road round the east of Indore. Mahalaxmi Nagar has become a cluster of high-rise buildings since the 2000s, and Nipania is filling with apartment societies and gated projects. Khajrana is older, with lanes around its Ganesh temple, while the IDA schemes, Pipliyahana and Kanadia Road are planned layouts of plots, houses and apartment buildings.',
                'The Ring Road, built by the Indore Development Authority, links the zone through junctions at Mahalaxmi, Malviya Nagar, Khajrana Ganesh Temple, Bengali Square and World Cup Square, with flyovers at Bengali Square, World Cup Square and Teen Imli Square. Malviya Nagar Chauraha is the eastern end of the working Yellow Line; Mumtaj Bag Colony, Khajrana Square, Bengali Square and Patrakar Colony are approved stations that have not opened. Bicholi Mardana, near the bypass, is still developing.',
            ],
            'tips' => [
                'For Mahalaxmi Nagar and Nipania, a tutor on the metro can come to Malviya Nagar Chauraha and finish by auto; elsewhere in the zone, look for someone who already works along the Ring Road.',
                'Ring Road junctions crowd at office closing time, and Khajrana\'s temple junction is busy on festival days and weekends, so fix weekday slots either side of those peaks.',
                'In Bicholi Mardana and the newer parts of Kanadia Road, fewer tutors live close by, so pair a tutor from Pipliyahana or Bengali Square with online sessions for specialist subjects.',
            ],
        ],
        'Bhawarkua, Rajendra Nagar & Rau' => [
            'guide' => 'central-and-south-indore-tuition-guide',
            'intro' => [
                'Bhawarkua, Navlakha, Sapna Sangeeta Road, Sudama Nagar, Rajendra Nagar, Bijalpur, Rau and Silicon City run south-west from the centre along AB Road. Bhawarkua, on AB Road and the Ujjain to Khandwa road, has hosted university campuses since the 1950s and is a busy student hub with coaching institutes and hostels. Navlakha is known for its temple and long-distance bus stand, while Sudama Nagar and Rajendra Nagar are mainly independent houses on quieter, greener roads.',
                'Further out, Bijalpur has grown from farmland into mid-income apartments and houses, and Rau, a nagar panchayat on AB Road between Rajendra Nagar and Mhow, is where the Pithampur road branches off; Silicon City is its newer residential quarter. There is no metro here. Rajendra Nagar and Rau stations are on the Akola to Ratlam line, Saifee Nagar is the halt nearest Bhawarkua, and city buses run along AB Road through the day.',
            ],
            'tips' => [
                'Around Bhawarkua the roads stay crowded with students for most of the day, so an early evening or later slot is steadier, and a landmark helps the tutor find the house.',
                'In Rau and Silicon City fewer tutors live locally, so expect one from Rajendra Nagar or Bijalpur, and register their name at the gate of any newer gated project.',
                'AB Road towards Rau gets heavier at school and office closing times; setting the class a little later in the evening keeps it on time week after week.',
            ],
        ],
    ],
    // Lucknow (1 Oct 2026), from database/seo-content/areas/lucknow-zone-guides.json.
    'Lucknow' => [
        'Gomti Nagar, Indira Nagar & Chinhat' => [
            'guide' => 'gomti-nagar-and-trans-gomti-tuition-guide',
            'intro' => [
                'Gomti Nagar, Gomti Nagar Extension, Indira Nagar and Chinhat make up the eastern side of Lucknow. Gomti Nagar is a planned township whose khands all begin with V, such as Vibhuti, Vishwas, Vivek and Vijay Khand; its first two phases are fully built, with plotted houses beside apartment blocks and offices. The Extension, in numbered sectors on Shaheed Path, mixes authority plots and flats with private towers, while Indira Nagar grew from four planned blocks to twenty-five.',
                'Indira Nagar holds the northern end of the Red Line: Lekhraj Market, Bhootnath Market, Indira Nagar and Munshi Pulia stations opened on 8 March 2019, and Gomti Nagar families use them too. Gomti Nagar railway station in Vivek Khand is on the suburban line. Chinhat, long known for pottery, sits where Shaheed Path meets Faizabad Road, and neither Chinhat nor the Extension has a metro station, so tutors there arrive by road.',
            ],
            'tips' => [
                'Pick the station by colony: Munshi Pulia or Indira Nagar for most Indira Nagar blocks, Bhootnath or Lekhraj Market for the market side and the older Gomti Nagar khands next to them.',
                'In Gomti Nagar Extension and the Faizabad Road townships, ask the gate for a standing entry pass in the first week so a regular tutor is not stopped at every visit.',
                'Office traffic builds on Gomti Nagar\'s commercial roads and on Shaheed Path in the evening, so a tutor living in the same khands or sectors keeps an early-evening slot most reliably.',
            ],
        ],
        'Mahanagar, Aliganj & Jankipuram' => [
            'guide' => 'gomti-nagar-and-trans-gomti-tuition-guide',
            'intro' => [
                'This is the Trans-Gomti zone north of the river: Mahanagar, Nirala Nagar, Nishatganj and Kapoorthala nearer the centre, then Aliganj, Vikas Nagar, Jankipuram and Jankipuram Extension further out. Most families live in independent houses on plotted lanes. Aliganj runs in lettered sectors from A and B through to K, L and N, Vikas Nagar in numbered ones, and Jankipuram and its Vistar are development authority schemes where plots, villas and newer apartment towers sit side by side.',
                'A metro station once planned for Mahanagar was dropped, so the southern colonies use Badshahnagar, IT College and Vishwavidyalaya, elevated Red Line stations opened on 8 March 2019; Badshahnagar also meets the railway station of that name. North of Aliganj the stations fall away, and Jankipuram and its extension depend on road travel along Sitapur Road, Kursi Road and the Ring Road near Tedhi Pulia, with some sectors of the extension still filling up.',
            ],
            'tips' => [
                'Give the sector letter and house number for Aliganj, the sector number for Vikas Nagar, and a map pin for Jankipuram Extension, where some lanes are still new.',
                'For Jankipuram and Vikas Nagar, a tutor living in Aliganj, Jankipuram or Kapoorthala is easier to keep than one crossing the Ring Road from the south every evening.',
                'On the Kapoorthala and Nishatganj market roads parking outside is hard, so suggest a side lane to a driving tutor, or choose one who comes by metro to IT College.',
            ],
        ],
        'Hazratganj, Lalbagh & Aminabad' => [
            'guide' => 'central-and-south-lucknow-tuition-guide',
            'intro' => [
                'The old centre covers Hazratganj, Lalbagh, Aminabad, Chowk, Aishbagh and Rajendra Nagar. Hazratganj\'s market began in 1827, took its name in 1842 and was rebuilt in a Victorian style after 1857; Aminabad is one of the city\'s oldest and busiest markets, and Chowk is the crowded historic core near the Imambaras. Homes are mostly flats above or behind shops and in older buildings, while Rajendra Nagar, on the site of the 1916 Congress session, is mid-rise flats near Charbagh.',
                'Hussainganj, Sachivalaya, which stands in Lalbagh, and Hazratganj are underground Red Line stations opened on 8 March 2019, and Charbagh is both the main railway station and a metro stop. Aishbagh has its own railway junction. On 12 August 2025 the Union Cabinet approved the Charbagh to Vasant Kunj Blue Line, now under construction and planned to serve Aminabad, Pandeyganj and Chowk; until it opens, the old-city lanes rely on autos, two-wheelers and walking.',
            ],
            'tips' => [
                'Car parking is scarce across this zone, so a tutor who rides the Red Line to Hazratganj, Sachivalaya or Charbagh and walks the last stretch is the steadiest choice.',
                'Older buildings often have no guard or lift, so send the floor number and a landmark near the entrance, and be ready to call down on the first visit.',
                'Market crowds in Aminabad and Chowk peak in the late afternoon and evening, so weekend mornings, weekday afternoons or online sessions are easier to keep regular.',
            ],
        ],
        'Alambagh, Ashiyana & Rajajipuram' => [
            'guide' => 'central-and-south-lucknow-tuition-guide',
            'intro' => [
                'The Kanpur Road side of south Lucknow takes in Alambagh, Rajajipuram, LDA Colony, Ashiyana, Krishna Nagar and Sarojini Nagar. Alambagh, named after a palace and garden that became a fort in 1857, is a busy mix of houses, floors and a few gated complexes around the city\'s biggest bus terminal. Rajajipuram runs in blocks A to F, LDA Colony is the authority\'s Kanpur Road scheme in lettered sectors, and Ashiyana and Krishna Nagar are mostly independent houses.',
                'The metro started here. The first Red Line section, eight stations from Transport Nagar to Charbagh, opened on 5 September 2017, bringing Alambagh, Alambagh ISBT, Singar Nagar and Krishna Nagar stations, and the line reached the airport through Amausi on 8 March 2019. Krishna Nagar station serves LDA Colony and Ashiyana too. Sarojini Nagar, on the airport side, adds housing board flats and an industrial pocket at Nadarganj, and Alamnagar railway station sits near Rajajipuram.',
            ],
            'tips' => [
                'Use Krishna Nagar station for LDA Colony and Ashiyana, Alambagh for Rajajipuram and Alambagh, and Transport Nagar or Amausi for Sarojini Nagar, then a short auto ride.',
                'In the plotted sectors the tutor parks at the door; in the gated complexes of Alambagh and Sarojini Nagar, register the tutor\'s name at the gate before the demo.',
                'Kanpur Road is heaviest at office hours in the morning and evening, so set a class time that avoids the peak rather than one that has to cross it.',
            ],
        ],
        'Sushant Golf City, Vrindavan Yojana & Telibagh' => [
            'guide' => 'central-and-south-lucknow-tuition-guide',
            'intro' => [
                'The south-eastern belt along Shaheed Path covers Sushant Golf City, Vrindavan Yojana and Telibagh. Shaheed Path, opened in 2012, curves from Transport Nagar on Kanpur Road across Raebareli Road and Sultanpur Road to Chinhat. Sushant Golf City is a large township built around an 18-hole golf course, mostly gated towers with villas and plots. Vrindavan Yojana is a UP Awas Vikas Parishad township on Raebareli Road in numbered sectors, and Telibagh beside it is mainly independent houses.',
                'No station serves this belt; the nearest Red Line stop is Transport Nagar on Kanpur Road, so every home visit here is by car, two-wheeler or cab along Shaheed Path or Raebareli Road. That makes the tutor pool mostly people who already live in these townships or close by. Gated towers expect visitor registration and often an approved entry pass for a regular teacher, while houses in Telibagh and much of Vrindavan Yojana open straight onto the lane.',
            ],
            'tips' => [
                'Arrange the entry pass for a regular tutor with the township gate before the demo, and share the tower and flat number with the tutor in advance.',
                'Raebareli Road is slow at school and office times, so for Telibagh and Vrindavan Yojana pick an after-school slot that starts a little later.',
                'For senior specialist subjects such as ISC Physics, IB Maths or JEE work, consider online lessons when the right tutor lives across the city in Gomti Nagar or Aliganj.',
            ],
        ],
    ],
    // Ahmedabad (1 Oct 2026), from database/seo-content/areas/ahmedabad-zone-guides.json.
    'Ahmedabad' => [
        'Navrangpura, Paldi & Ellisbridge' => [
            'guide' => 'west-ahmedabad-tuition-guide',
            'intro' => [
                'Navrangpura, Ellisbridge, Paldi, Ambawadi and Vasna form the older heart of West Ahmedabad, just across the Sabarmati from the walled city. Navrangpura was among the first areas to develop beyond the old walls, and Ellisbridge takes its name from the steel bridge completed in 1892. Housing mixes older low-rise blocks, independent houses, a few Art Deco era homes in Paldi and newer towers, with shops and offices along the main roads.',
                'This is the zone where Ahmedabad\'s two metro lines meet. Old High Court is the interchange between the Blue and Red Lines, both opened here on 30 September 2022, and the Red Line runs south through Ellisbridge, Paldi and Ambawadi to its terminus at APMC in Vasna. Tutors from the northern suburbs or from the east bank can therefore ride in by train and finish with a short auto trip or a walk.',
            ],
            'tips' => [
                'Name the nearest Red Line stop in your request, Paldi or APMC for example, so we can start with tutors who already ride that line.',
                'In apartment buildings tell the watchman the tutor\'s name before the first visit; for an independent house, share the lane and a nearby landmark instead.',
                'The roads towards the bridges are slowest at office hours, so a late-afternoon or weekend-morning slot is the easiest one to keep week after week.',
            ],
        ],
        'Satellite, Vastrapur & Bodakdev' => [
            'guide' => 'west-ahmedabad-tuition-guide',
            'intro' => [
                'Satellite, Jodhpur, Vastrapur, Bodakdev, Thaltej and Memnagar line SG Highway, the Sarkhej–Gandhinagar road that forms part of National Highway 147. Satellite is one of the long-established western areas, with apartment complexes and bungalows on plotted lanes, Vastrapur surrounds its lake, Bodakdev pairs gated towers with bungalows, Thaltej grew around an old village and its lake, and Memnagar is mostly two- and three-bedroom flats in mid-rise societies.',
                'The Blue Line serves only the northern half of this zone. Gurukul Road station is in Memnagar, Doordarshan Kendra and Thaltej opened on 30 September 2022, and Thaltej Gam became the western terminus on 8 December 2024. Satellite, Jodhpur and Vastrapur have no station of their own, so most tutors there arrive by two-wheeler, auto, BRTS or city bus, and gated towers along the highway often log a phone number for every visitor.',
            ],
            'tips' => [
                'For Thaltej, Bodakdev and Memnagar, a tutor living on the Blue Line can ride to Thaltej Gam, Thaltej or Gurukul Road and take an auto for the last part.',
                'Many towers here ask for a visitor\'s phone number at the gate, so register the tutor\'s details with security before the demo class.',
                'Highway service lanes thicken in the evening rush; a class that begins in the late afternoon, or on a weekend morning, starts on time more often.',
            ],
        ],
        'Prahlad Nagar, Bopal & Shela' => [
            'guide' => 'west-ahmedabad-tuition-guide',
            'intro' => [
                'Prahlad Nagar, Bopal, South Bopal and Shela make up the city\'s south-western growth corridor. Prahlad Nagar mixes premium gated flats with a large cluster of offices and shops beside SG Highway. Bopal grew from 18,553 people in 2001 to 55,068 in 2011, and joined Ghuma as a municipality in 2015 before coming under the municipal corporation. South Bopal is almost entirely modern gated complexes, and Shela, towards Sanand, is newer still.',
                'No metro station serves any locality in this zone. The outer ring road, opened in 2004, carries most traffic past the Bopal junction, and BRTS Route 17 runs to South Bopal from the Satellite side. Most tutors therefore travel by two-wheeler. Large complexes may register visitors at the main gate and again at the tower, and families here often pair a nearby home tutor for core subjects with online lessons for specialist ones.',
            ],
            'tips' => [
                'Look first at tutors who already live in Bopal, South Bopal or Shela; a tutor from the far side of the river may find the trip hard to repeat each week.',
                'In township-style complexes allow extra time for the first visit, since the tutor may be checked at the main gate and again at your tower.',
                'Ring-road junctions are busiest at office hours, so fix a late-afternoon slot, and add an online session for any subject without a local specialist.',
            ],
        ],
        'Naranpura, Gota & Chandkheda' => [
            'guide' => 'west-ahmedabad-tuition-guide',
            'intro' => [
                'Naranpura, Ghatlodia, Gota, Chandkheda and Sabarmati form the northern part of the west bank, reaching towards Gandhinagar. Naranpura mixes budget blocks, mid-segment societies and large bungalows around Vijay Char Rasta, Ghatlodia is densely built and largely low-rise, and Gota grew after SG Highway was built. Chandkheda, a panchayat until it joined the municipal corporation on 19 January 2008, holds housing board societies and company colonies, and Sabarmati includes older homes and railway colony areas.',
                'The Red Line runs the length of the zone, from Motera Stadium through Sabarmati and AEC to Vijay Nagar, which serves Naranpura; it opened to the public on 6 October 2022. From Motera Stadium the Gandhinagar line has run since 16 September 2024, and its final section into the capital opened on 11 January 2026. Gota and Ghatlodia have no station, so BRTS Route 9, which ends in Gota, and two-wheelers fill the gap.',
            ],
            'tips' => [
                'Families in Chandkheda and Sabarmati can widen their choice to tutors travelling in from Gandhinagar on the metro via Motera Stadium.',
                'In Gota and Ghatlodia, where there is no station, choose a tutor who already travels your side of SG Highway or the ring road by two-wheeler.',
                'Vijay Char Rasta and the roads around it crowd up in the evening, so a Naranpura class that starts before the rush is simpler to keep.',
            ],
        ],
        'Maninagar, Isanpur & Kankaria' => [
            'guide' => 'east-ahmedabad-tuition-guide',
            'intro' => [
                'Maninagar, Kankaria, Khokhra, Isanpur and Ghodasar sit in the south of the east bank. Maninagar is an established residential and market district divided by the railway line, with older houses on busy streets and newer flats towards New Maninagar. Kankaria surrounds the city\'s largest lake, completed in 1451, whose redeveloped lakefront opened on 25 December 2008. Khokhra grew around textile mills, while Isanpur and Ghodasar are mainly low-rise apartment buildings.',
                'Rail is the strength of this zone. Maninagar railway station on the main line to Mumbai has a footbridge to the BRTS bus station, Kankaria East opened to commuters as an underground Blue Line station on 5 March 2024, and Apparel Park and Amraiwadi stations are close to Khokhra. Low-rise blocks mean the tutor usually reaches the flat door after a quick call from the entrance, and independent houses open onto the street.',
            ],
            'tips' => [
                'Mention whether you are nearer Maninagar railway station, Kankaria East or Apparel Park, since tutors can arrive by train, metro or BRTS.',
                'Around Kankaria Lake, Sundays, holidays and the December carnival bring crowds, so weekday evenings or weekend mornings are the better lesson slots.',
                'Market roads near Maninagar station fill up in the evening; an earlier after-school slot keeps the tutor\'s arrival time steady.',
            ],
        ],
        'Nikol, Naroda & Bapunagar' => [
            'guide' => 'east-ahmedabad-tuition-guide',
            'intro' => [
                'Nikol, Naroda, Bapunagar, Vastral, Odhav and Amraiwadi make up the east of the city, where mill history meets the ring-road suburbs. Bapunagar was set up in the early 1960s for textile mill workers and later became a diamond-cutting centre. Amraiwadi still shows former mill chawls beside newer flats, Naroda has an old village core and a newer side, and Nikol and Vastral have grown quickly with new apartment buildings near the ring road.',
                'Ahmedabad\'s metro began here: the first section, Vastral Gam to Apparel Park, opened on 4 March 2019, with Nirant Cross Road, Vastral and Rabari Colony in between, and Amraiwadi station followed on 18 May 2019. Naroda has a railway station on the line to Udaipur but no metro. Odhav and Naroda also hold large industrial estates, so shift changes as well as office hours affect how quickly a tutor can cross the zone.',
            ],
            'tips' => [
                'Vastral, Amraiwadi and parts of Nikol are well placed for tutors riding the Blue Line; name the station nearest your home in the request.',
                'In Bapunagar and Juna Naroda most visits are to doorsteps in narrow lanes, where a tutor on a two-wheeler is far more practical than one in a car.',
                'Industrial shift times load the roads around Odhav and Naroda, so agree a mid-evening lesson that avoids them and keep it fixed.',
            ],
        ],
        'Shahibaug, Asarwa & Meghaninagar' => [
            'guide' => 'east-ahmedabad-tuition-guide',
            'intro' => [
                'Shahibaug, Asarwa and Meghaninagar form the north-central part of the east bank, just across the river from the western city. Shahibaug takes its name from a royal garden palace built in 1622 and is now mostly spacious three- and four-bedroom flats. Asarwa is an older neighbourhood where large medical and teaching campuses sit among independent homes and mid-income apartments, and Meghaninagar is an affordable to mid-budget area of houses and flats.',
                'Asarva railway station on the Udaipur line serves the zone, and the nearest metro stops are the Blue Line\'s underground stations at Shahpur, Gheekanta and Kalupur Railway Station, opened on 30 September 2022. Most tutors therefore arrive by road along Airport Road, Camp Road or Riverfront Road. Apartment buildings expect a name at the gate and a call to the flat, while older homes in Asarwa and Meghaninagar open directly onto the lane.',
            ],
            'tips' => [
                'Share the tutor\'s name with the gate in advance, since Shahibaug apartment buildings usually confirm each visitor with a call to the flat.',
                'Traffic near the medical campuses in Asarwa stays heavy through the day, so fix an evening lesson time in advance rather than an afternoon one.',
                'A tutor from elsewhere on the east bank usually has the simpler journey here; if you want a west-bank specialist, consider an online session.',
            ],
        ],
    ],
    // Chennai (1 Oct 2026), from database/seo-content/areas/chennai-zone-guides.json.
    'Chennai' => [
        'Adyar, Besant Nagar & Mylapore' => [
            'guide' => 'south-chennai-tuition-guide',
            'intro' => [
                'Mylapore, Alwarpet, Adyar, Besant Nagar and Thiruvanmiyur make up Chennai\'s older southern coast. Mylapore has settlement records going back to the first century BCE and centres on its temple and tank, with old houses on narrow lanes near apartment blocks. Alwarpet grew from garden estates north of the Adyar River. Adyar, part of the city since 1948, is a set of named nagars, and Besant Nagar was laid out by the Tamil Nadu Housing Board from the early 1970s.',
                'The MRTS is the main rail link. It reached Thirumayilai in October 1997 and was extended to Thiruvanmiyur in January 2004, with stops at Mandaveli, Kotturpuram, Kasturba Nagar and Indira Nagar. Teynampet on the Metro Blue Line, open since May 2018, is closest for Alwarpet. The Purple and Yellow metro lines are under construction through the zone. Besant Nagar has no station of its own, so tutors arriving by train finish the trip by auto.',
            ],
            'tips' => [
                'Name the MRTS station nearest your home when you send the request: Thirumayilai or Mandaveli for Mylapore, Kasturba Nagar or Indira Nagar for Adyar, Thiruvanmiyur for Besant Nagar and Thiruvanmiyur.',
                'On temple festival days around the Mylapore tank, move the lesson to a morning or switch it online for that day.',
                'Besant Nagar\'s numbered streets are easy to find, but beach evenings at weekends are crowded, so weekday or morning slots suit home visits better.',
            ],
        ],
        'T Nagar, Nungambakkam & Kodambakkam' => [
            'guide' => 'south-chennai-tuition-guide',
            'intro' => [
                'T Nagar, Nungambakkam, Kodambakkam, West Mambalam and Saidapet form the busy centre-west of the city. T Nagar was planned in 1923–25 after the Long Tank was drained, and shops have outnumbered houses there since the 1950s. Nungambakkam mixes offices along its High Road with flats behind it. Kodambakkam is home to the Tamil film industry, West Mambalam is dense and market-led, and Saidapet on the Adyar River mixes old streets with newer gated complexes.',
                'The South Line of the suburban railway, opened in 1931, stops at Nungambakkam, Kodambakkam, Mambalam and Saidapet, so tutors from as far as Tambaram can come by train. The Metro Blue Line serves AG–DMS, Teynampet, Nandanam and Saidapet, with Thousand Lights added in February 2019, and the Green Line stations at Ashok Nagar and Vadapalani lie just to the west. The Yellow Line is under construction through Nandanam and Kodambakkam.',
            ],
            'tips' => [
                'A tutor who comes by suburban train to Mambalam, Kodambakkam or Nungambakkam is usually more punctual here than one who drives.',
                'In West Mambalam and older T Nagar streets, send a landmark and the house number; parking a car is hard, so a two-wheeler or walk from the station is normal.',
                'Keep lessons away from shopping weekends and festival seasons near the T Nagar bazaar streets, when crowds slow every route in.',
            ],
        ],
        'Velachery, Guindy & Tambaram' => [
            'guide' => 'south-chennai-tuition-guide',
            'intro' => [
                'This southern zone runs from Guindy and Velachery through Madipakkam, Nanganallur, Pallikaranai and Medavakkam, then down GST Road to Chromepet and Tambaram. Guindy\'s homes sit in pockets between an industrial estate, a national park and campuses. Velachery grew quickly into apartment complexes beside houses, Madipakkam has its lake, Pallikaranai its protected marsh and Nanganallur its many temples. Tambaram has been a city corporation since November 2021, and Chromepet now falls within it.',
                'Rail arrives in three forms. The Blue Line has stopped at Little Mount, Guindy, Alandur, Nanganallur Road and Meenambakkam since September 2016. The MRTS has reached Velachery since November 2007 and, since March 2026, continues through Puzhuthivakkam and Adambakkam to St Thomas Mount. Suburban trains run along GST Road to Tambaram, one of the area\'s main terminals. Medavakkam and Pallikaranai still have no station, and the Red Line serving them is under construction.',
            ],
            'tips' => [
                'Along GST Road, look for a tutor who uses the suburban train to Chromepet or Tambaram and walks or takes an auto from the station.',
                'In Medavakkam and Pallikaranai, where there is no rail yet, a tutor from Velachery, Madipakkam or Medavakkam itself on a two-wheeler is the practical choice.',
                'Kathipara, Vijayanagar and GST Road are heavy at office hours, so set lessons just before or after the rush rather than inside it.',
            ],
        ],
        'OMR & ECR' => [
            'guide' => 'omr-and-ecr-tuition-guide',
            'intro' => [
                'The OMR IT corridor and the East Coast Road run side by side south of Thiruvanmiyur. On the OMR, Perungudi changed from a village into offices and homes, Thoraipakkam is mostly flats and gated communities beside the Pallikaranai marsh, and Sholinganallur, annexed in 2011 as ward 200, mixes a housing-board township with large gated campuses. Further south, Navalur was a village until around 2010 and Kelambakkam remains a village panchayat. On the ECR, Neelankarai is bungalows, villas and row houses by the sea.',
                'Rail is thin here. Perungudi has had an MRTS station since November 2007, but the rest of the corridor depends on roads. The Purple Line is under construction along the OMR through Thoraipakkam, Sholinganallur and Navallur, and the Red Line will meet it at Sholinganallur; neither is open. The Pallavaram–Thoraipakkam Radial Road links the OMR with GST Road. Most tutors here travel by two-wheeler, bus or cab from nearby localities.',
            ],
            'tips' => [
                'Gated communities on the OMR often want a resident to approve each visitor, so add the tutor as a regular guest in the society app before the demo.',
                'Set home lessons after the evening office rush on the OMR has eased, or on weekends, and keep one online session for doubts on the busiest days.',
                'For IB, IGCSE or senior specialist papers, consider an online tutor from elsewhere in India if no home tutor along the corridor fits your board.',
            ],
        ],
        'Anna Nagar, Kilpauk & Aminjikarai' => [
            'guide' => 'west-and-north-chennai-tuition-guide',
            'intro' => [
                'Anna Nagar, Anna Nagar West, Shenoy Nagar, Kilpauk, Aminjikarai, Arumbakkam and Purasawalkam form the central-west belt. Anna Nagar was laid out by the Tamil Nadu Housing Board in the early 1970s on a grid of numbered avenues with plots, flats and parks. Shenoy Nagar began as housing for middle-income families, Kilpauk was a cantonment before independence, Aminjikarai is a group of colonies beside a commercial belt, and Purasawalkam, granted to the East India Company in 1693, keeps old lanes and markets.',
                'Poonamallee High Road, built in the 1850s as the Grand Western Trunk Road, runs through Kilpauk, Aminjikarai and Arumbakkam to Koyambedu. The Green Line serves the zone well: Arumbakkam and Koyambedu opened in June 2015, and the underground section opened in May 2017 added Thirumangalam, Anna Nagar Tower, Anna Nagar East and Shenoy Nagar. Anna Nagar West has one of the city\'s largest bus terminals, and a Red Line station there is under construction.',
            ],
            'tips' => [
                'Give the avenue or street number and block; Anna Nagar\'s grid makes homes easy to find, so a tutor rarely loses time searching.',
                'A tutor on the Green Line can reach Anna Nagar, Shenoy Nagar or Arumbakkam by metro and walk the last few streets.',
                'Near the 2nd Avenue shops and Purasawalkam\'s market streets, parking is limited, so book a slot before the early-evening rush.',
            ],
        ],
        'Vadapalani, KK Nagar & Porur' => [
            'guide' => 'west-and-north-chennai-tuition-guide',
            'intro' => [
                'Vadapalani, Ashok Nagar, KK Nagar, Virugambakkam, Valasaravakkam and Porur run west from the film district along Arcot Road. Vadapalani grew around a late nineteenth-century Murugan temple and is densely built with flats and older houses. Ashok Nagar, founded in 1964, and KK Nagar, a 1970s grid of sectors each with a central park, share a housing-board history and numbered streets. Virugambakkam joined the city in 1973, Valasaravakkam in 2011, and Porur\'s Mount-Poonamallee Road stretch has become an IT corridor.',
                'Vadapalani and Ashok Nagar have been on the Green Line since June 2015, and the Inner Ring Road links Koyambedu, Vadapalani and Kathipara. West of Vadapalani the Yellow Line, with stations planned at Virugambakkam South, Alwarthirunagar, Valasaravakkam and Porur Junction, is under construction, so for now homes there are reached by bus along Arcot Road or by metro to Vadapalani and an auto. Porur Junction brings three main roads together.',
            ],
            'tips' => [
                'In Ashok Nagar and KK Nagar, give the sector or road number; the numbering makes homes easy to locate for a tutor coming from the metro.',
                'Beyond Vadapalani, choose a tutor who lives along Arcot Road or in Porur, since there is no working metro west of Vadapalani yet.',
                'Arcot Road and Porur Junction are busiest at office hours, so late-afternoon or weekend lessons keep to time more easily.',
            ],
        ],
        'Mogappair, Ambattur & Avadi' => [
            'guide' => 'west-and-north-chennai-tuition-guide',
            'intro' => [
                'Mogappair, Ambattur and Avadi form the western belt of the city. Mogappair, split into East and West, grew from a village on the state highway between Ambattur and Anna Nagar and mixes flats with plotted homes. Ambattur grew after the Second World War around an industrial estate commissioned in 1964, with established colonies of houses and flats. Avadi became Tamil Nadu\'s 15th municipal corporation in 2019 and is known for defence manufacturing and research establishments and housing-board estates.',
                'The suburban line from Chennai Central to Arakkonam is the backbone, with stations at Pattaravakkam, Ambattur, Thirumullaivoyal, Annanur and Avadi; its first stretch was electrified in November 1979 and the Villivakkam–Avadi section in October 1986. Mogappair has no station of its own and relies on Thirumangalam and Koyambedu on the Green Line or on buses. The Chennai-Tiruvallur High Road runs through Ambattur and Avadi, and the Outer Ring Road passes western Avadi.',
            ],
            'tips' => [
                'For Ambattur and Avadi, a tutor who takes the local train and finishes with a short auto ride is the steadiest option.',
                'Defence areas and gated estates in Avadi may need entry details in advance, so send the tutor the address, a contact number and gate instructions before the demo.',
                'In Mogappair, ask whether the tutor will come by bus, by metro to Thirumangalam or by two-wheeler, and fix the time to avoid the Inner Ring Road rush.',
            ],
        ],
        'Perambur, Kolathur & North Chennai' => [
            'guide' => 'west-and-north-chennai-tuition-guide',
            'intro' => [
                'Perambur, Villivakkam, Kolathur, Royapuram and Tondiarpet carry the city\'s railway history. Royapuram\'s station opened in June 1856 as South India\'s first terminus, and Perambur, where railway workshops were set up the same year, has the second oldest station in the city. Tondiarpet mixes trading and small factories with homes, Villivakkam is densely built on both sides of the railway, and Kolathur, one of the city\'s older housing colonies, is known for its ornamental fish trade.',
                'Suburban trains serve Perambur and Villivakkam on the line towards Avadi and Arakkonam, and Tondiarpet on the line towards Gummidipoondi. The Blue Line reached Washermanpet in February 2019, and its northern extension, including a Tondiarpet station, opened in February 2021. Red Line stations at Kolathur Junction and Villivakkam are under construction. The northern arm of the Inner Ring Road runs from Padi towards Madhavaram, and many older lanes are narrow.',
            ],
            'tips' => [
                'Parking near the market streets and the Kasimedu harbour is tight, so a tutor arriving by train, metro or auto is easier to keep.',
                'In old lanes, share a landmark and the door number; in newer apartment buildings, give the tutor\'s name at the gate before the first class.',
                'Market roads in Perambur and Royapuram are crowded in the evening, so a slightly earlier lesson slot usually works better.',
            ],
        ],
    ],
    // Bhopal (1 Oct 2026), from database/seo-content/areas/bhopal-zone-guides.json.
    'Bhopal' => [
        'Arera Colony, Shahpura & Kolar Road' => [
            'guide' => 'south-and-central-bhopal-tuition-guide',
            'intro' => [
                'Arera Colony, Shahpura, Kolar Road, Chuna Bhatti and Bawadiya Kalan make up Bhopal\'s southern residential belt. Arera Colony is laid out in eight sectors, E-1 to E-8: the older E-1 to E-5 are streets of bungalows and independent houses, E-6 and E-7 were built as housing board colonies and E-8 is a private extension, with Bittan Market for daily shopping. Shahpura surrounds Shahpura Lake with colonies, houses and small apartment buildings.',
                'Further south the character changes. Kolar Road is a long corridor of plotted colonies, newer gated projects and villa communities, with Chuna Bhatti at its city end, while Bawadiya Kalan, between the Kolar Road side and Hoshangabad Road, is growing fast and many of its families live in apartments. Link Road Number 3 joins Arera Colony to Rani Kamlapati railway station, a stop on the metro\'s operating section, but Kolar Road has no metro or rail stop.',
            ],
            'tips' => [
                'In Arera Colony, give the sector number, E-1 to E-8, with the house number; in the older sectors the tutor comes straight to the door, and Bittan Market makes a handy landmark.',
                'On Kolar Road, in Chuna Bhatti and in Bawadiya Kalan, register the tutor\'s name with the gate or society office before the demo, since many homes are in gated projects.',
                'The link roads and the Kolar Road stretch fill up at office hours, so an early-evening slot, fixed a little before or after the rush, is the one most likely to hold.',
            ],
        ],
        'MP Nagar, TT Nagar & Shivaji Nagar' => [
            'guide' => 'south-and-central-bhopal-tuition-guide',
            'intro' => [
                'MP Nagar, TT Nagar, Shivaji Nagar, Tulsi Nagar and Jahangirabad form the centre of the city south of the Upper Lake. MP Nagar, short for Maharana Pratap Nagar, is the main office and commercial district, divided into zones, with coaching centres on its main roads and flats on its residential streets. TT Nagar grew around New Market as government housing, and North TT Nagar now holds the smart city redevelopment on about 354 acres of government land.',
                'Shivaji Nagar and Tulsi Nagar are largely government-owned housing beside private houses and builder floors; the smart city plan was first proposed for them before moving to North TT Nagar. Jahangirabad, near the Lower Lake, is older and denser. MP Nagar and Board Office Square are stations on the Orange Line priority section, open to passengers since 21 December 2025, while Pul Bogda and Aishbagh, near Jahangirabad, are planned stations on the unopened northern part.',
            ],
            'tips' => [
                'For government quarters in TT Nagar, Shivaji Nagar and Tulsi Nagar, send the block and quarter number with a landmark, because many homes have no street address.',
                'A tutor can ride the Orange Line to MP Nagar or Board Office Square and finish by auto or on foot; parking in MP Nagar\'s commercial blocks is tight, so the metro often works better.',
                'In Jahangirabad\'s inner lanes the tutor usually parks at the lane mouth and walks in, so share a landmark, and prefer an afternoon or early-evening slot before market traffic peaks.',
            ],
        ],
        'Hoshangabad Road, Misrod & Katara Hills' => [
            'guide' => 'south-and-central-bhopal-tuition-guide',
            'intro' => [
                'Hoshangabad Road, also called Narmadapuram Road, Misrod, Katara Hills and Bagmugaliya form Bhopal\'s south-eastern growth belt. The main road leaves the city towards Misrod and Mandideep, with older colonies of houses beside apartment towers, gated townships and villa projects. Misrod, on the NH-46 stretch towards Nagpur, has grown into a large suburb of townships, apartments and plotted layouts, and some large plots are still available there.',
                'Katara Hills is newer, built up through planned communities, villas and residential plots, and reached by Hoshangabad Road and 200 Feet Road. Bagmugaliya, next to Katara Hills and Jatkhedi, mixes apartments, houses, villas and plots. The bus corridor that once ran down Hoshangabad Road was ordered shut in December 2023 and removed in stages from January 2024. Misrod has a station on the Bhopal–Itarsi line, though few trains stop there.',
            ],
            'tips' => [
                'Most homes here sit inside gated townships or apartment projects, so put the tutor\'s name on the gate list or visitor app before the demo, and share the tower and flat number.',
                'Public transport thins out away from the main road, so a tutor who lives on the same stretch of the corridor, in Misrod, Bagmugaliya or Katara Hills, is the easiest to keep.',
                'Hoshangabad Road is heavy at office hours in both directions, so set lessons after the evening rush has eased, or use an online session on the busiest weekdays.',
            ],
        ],
        'BHEL, Awadhpuri & Ayodhya Bypass' => [
            'guide' => 'bhel-and-old-bhopal-tuition-guide',
            'intro' => [
                'Piplani, Govindpura, Indrapuri, Awadhpuri, Ayodhya Bypass and Saket Nagar make up the eastern side of Bhopal, around the BHEL township. The township was planned around the public-sector engineering plant and divided into neighbourhoods of four to five sectors each, with parks, community halls, a library, shopping centres and banks. Piplani holds the factory and its offices, and Govindpura adds a large industrial estate of units supplying the plant, alongside quarters and private colonies.',
                'Indrapuri is a colony of independent houses known by its lettered sectors, Awadhpuri a settled area of two- and three-bedroom homes, and Saket Nagar, on the southern side, is home to many retired BHEL employees. The colonies along Ayodhya Bypass, such as Ayodhya Nagar, add apartments, villas and houses. The bypass is being widened up to Ratnagiri Tiraha, the planned eastern end of the metro\'s Blue Line, which is still under construction.',
            ],
            'tips' => [
                'Township quarters are identified by sector and quarter number rather than street name, so send both with a landmark before the first visit; parking is usually easy.',
                'Plant shift timings and the widening work on Ayodhya Bypass shape traffic, so check shift start and end times and prefer a tutor from the same side of the bypass.',
                'Saket Nagar lies close to Alkapuri station on the operating Orange Line section, so a tutor from the city side can arrive by metro; elsewhere in this zone tutors come by road.',
            ],
        ],
        'Old City, Lalghati & Bairagarh' => [
            'guide' => 'bhel-and-old-bhopal-tuition-guide',
            'intro' => [
                'The Old City, Idgah Hills, Kohefiza, Lalghati and Bairagarh lie north and west of the Upper Lake. The Old City grew under Bhopal\'s nawabs and begums, with narrow lanes, family houses above or behind shops, and bazaars such as Chowk Bazaar and Sarafa around the Jama Masjid of 1837. Idgah Hills rises above it on winding roads, while Kohefiza is a settled area of housing colonies and housing board homes near VIP Road.',
                'Lalghati, along the lake, adds apartments and villa projects around a busy junction. Bairagarh, officially Sant Hirdaram Nagar, began as one of the oldest camps for Sindhi families after Partition and grew into a market town; its station took the new name in 2018. Bhopal Junction and the Nadra Bus Stand are planned stations on the unopened northern part of the Orange Line, and VIP Road, four lanes along the lake, leads to the airport.',
            ],
            'tips' => [
                'In the Old City and Bairagarh, many doors cannot be reached by car, so the tutor parks a two-wheeler where the lane narrows; name a mosque, temple or market corner as the landmark.',
                'On Idgah Hills, share the house or building name as well as the number, since roads climb and wind and a first visit is easier with a clear reference point.',
                'Evening traffic at Lalghati Chouraha, on VIP Road and in the market streets is heavy, so an afternoon or early-evening slot, set before the busy hour, is easier to keep.',
            ],
        ],
    ],
    // Kolkata (1 Oct 2026), from database/seo-content/areas/kolkata-zone-guides.json.
    'Kolkata' => [
        'Ballygunge, Gariahat & Alipore' => [
            'guide' => 'south-kolkata-tuition-guide',
            'intro' => [
                'Ballygunge, Bhowanipore, Kalighat, Alipore, Dhakuria, Jodhpur Park and Lake Gardens make up the old heart of South Kolkata. Ballygunge\'s mansions date from the 1930s and 1940s, Bhowanipore was one of the villages the East India Company acquired in 1758, and Jodhpur Park was split into about 450 plots by a housing co-operative in 1947. Housing is mostly family houses and older buildings, with apartment blocks added on many streets, and Alipore keeps its colonial-era bungalows.',
                'This is where the Blue Line began: its first stretch opened on 24 October 1984, and Jatin Das Park, Kalighat and Rabindra Sarobar followed in April 1986. Ballygunge Junction, Dhakuria and Lake Gardens are stops on the Sealdah South suburban lines, while Alipore uses Majerhat and Kidderpore on the Circular section. Gariahat Market spreads around the crossing, which is the busiest point of the zone at weekends and in the festive season.',
            ],
            'tips' => [
                'Tell the tutor which Blue Line stop to use: Netaji Bhavan or Jatin Das Park for Bhowanipore, Kalighat for the temple area, Rabindra Sarobar for Lake Gardens and Jodhpur Park.',
                'Avoid weekend evenings near the Gariahat crossing and the weeks before Durga Puja; a weekday afternoon or an online session keeps the routine going.',
                'In older houses, say which floor and which bell; in apartment buildings with a staffed gate, give the tutor\'s name in advance.',
            ],
        ],
        'Tollygunge, Jadavpur & Garia' => [
            'guide' => 'south-kolkata-tuition-guide',
            'intro' => [
                'Tollygunge, Golf Green, Regent Park, Jadavpur, Bansdroni, Naktala, Baghajatin and Garia run south along the Adi Ganga. Much of the zone took shape after 1947, when families from East Pakistan settled here; by 1949 Jadavpur alone held about forty refugee colonies, Bijoygarh among them. Tollygunge is the centre of the Bengali film industry, Golf Green is low-rise flats among green spaces, Bansdroni is almost wholly residential, and Garia is split between two civic bodies.',
                'The Blue Line is the backbone. It reached Tollygunge in 1986, Garia Bazar on 22 August 2009 with Netaji, Masterda Surya Sen and Gitanjali, and New Garia on 7 October 2010. Jadavpur, Baghajatin and Garia also have stations on the Sealdah South lines, and Tollygunge has one on the Budge Budge line. Homes are family houses in the lanes and apartment buildings on the main roads, so most visits are straight to the door.',
            ],
            'tips' => [
                'Pick the stop nearest your home: Mahanayak Uttam Kumar for Tollygunge and Golf Green, Masterda Surya Sen for Bansdroni, Gitanjali for Naktala, Kavi Nazrul for Garia and Baghajatin.',
                'Keep lessons away from college and office hours around the 8B crossing in Jadavpur; weekend mornings are the calmest slot.',
                'The main road from Tollygunge to Garia slows in the evening peak, so a tutor using the metro keeps time better than one driving.',
            ],
        ],
        'Behala & New Alipore' => [
            'guide' => 'south-kolkata-tuition-guide',
            'intro' => [
                'Behala, New Alipore and Thakurpukur form the south-western side of the city along Diamond Harbour Road. Behala is one of Kolkata\'s oldest and largest residential areas, spread across wards 115 to 132 and taking in pockets such as Barisha, Sarsuna, Parnasree Pally and Haridevpur. New Alipore was laid out in the 1950s as a planned suburb of lettered blocks, and Thakurpukur, once part of the Barisha estate, is densely built along busy market streets.',
                'The Purple Line runs along Diamond Harbour Road. Joka to Taratala, with Thakurpukur, Sakherbazar, Behala Chowrasta and Behala Bazar, was inaugurated on 30 December 2022, and the extension to Majerhat on 6 March 2024. New Alipore has two suburban stations of its own, New Alipore and Majerhat, and Majerhat links the southern lines with the Circular Railway. Old family houses sit beside newer apartment buildings and builder floors.',
            ],
            'tips' => [
                'Name your Purple Line stop, such as Behala Chowrasta, Sakherbazar or Thakurpukur, so the tutor can plan the short auto ride from there.',
                'Diamond Harbour Road is slow in the evening peak; a tutor coming by road should aim for an afternoon or a weekend morning.',
                'For New Alipore, share the block letter as well as the house number, since the suburb is still organised by lettered blocks.',
            ],
        ],
        'Kasba & EM Bypass South' => [
            'guide' => 'south-kolkata-tuition-guide',
            'intro' => [
                'Kasba, Santoshpur, Mukundapur and Patuli line the southern stretch of the Eastern Metropolitan Bypass, which opened in 1982. Kasba was a small hamlet until a rail overbridge in 1978 and a connector road to the bypass brought offices and housing. Santoshpur was still largely marsh and fields in the 1970s, Mukundapur is mostly newer apartment projects, and Patuli grew around a planned township with about 4,500 serviced plots designed for some 55,000 people.',
                'The Orange Line runs along the bypass. Kavi Subhash to Hemanta Mukhopadhyay, with Satyajit Ray, Jyotirindra Nandi and Kavi Sukanta, opened on 6 March 2024, and the line reached Beleghata on 22 August 2025. On the railway side, Ballygunge Junction, Jadavpur and Baghajatin serve the western edge. Inner paras keep older houses, but many families here, especially close to the bypass, live in newer complexes that register visitors at the gate.',
            ],
            'tips' => [
                'Send the tutor\'s name and lesson time to the complex gate before the demo, and ask for a standing entry if the tutor will come every week.',
                'The bypass junctions are heavy in the evening rush, so book an afternoon or weekend slot, or pick a tutor who arrives on the Orange Line.',
                'In Patuli, give the block and plot number; in Santoshpur and Kasba, a para name and a landmark help a first-time tutor.',
            ],
        ],
        'Salt Lake' => [
            'guide' => 'salt-lake-and-new-town-tuition-guide',
            'intro' => [
                'Salt Lake, officially Bidhannagar, was built on reclaimed wetland east of the city. Reclamation of Sector I was finished in 1965, plots were handed out from 1966, and the first residents moved into a house in AB Block on 9 March 1970. Sectors II and III were reclaimed by 1969, and the township took the name Bidhannagar in 1973. Most homes are independent houses on plots, arranged in lettered blocks along numbered avenues and cross roads.',
                'The Green Line opened here in February 2020, from Salt Lake Sector V through Karunamoyee, Central Park, City Centre and Bengal Chemical to Salt Lake Stadium. On 22 August 2025 it was joined end to end, so it now runs to Sealdah, Esplanade and Howrah Maidan. Bidhannagar Road station serves the western side, and the Salt Lake to Kestopur bridge has linked the township with VIP Road since 2022.',
            ],
            'tips' => [
                'Write the address the Salt Lake way: block letters, house number and the nearest avenue, because tutors navigate by those.',
                'Houses open onto the street, so there is usually no gate register; just tell the tutor which bell to ring.',
                'Roads towards Sector V and the bypass fill at office hours, so early evenings and weekends are easier lesson times.',
            ],
        ],
        'New Town & Rajarhat' => [
            'guide' => 'salt-lake-and-new-town-tuition-guide',
            'intro' => [
                'New Town was begun in the late 1990s and is run today by the New Town Kolkata Development Authority, with HIDCO planning its projects. It is divided into Action Areas I, II and III, with a central business district between the first two. Action Area I mixes plotted blocks, housing estates and private complexes, Action Area II centres on Eco Park, and Action Area III is mostly two- and three-bedroom flats. Rajarhat, including Chinar Park and Teghoria, is the older area around it.',
                'Biswa Bangla Sarani, the Major Arterial Road, links the Action Areas and heads towards the airport, and Rajarhat Main Road runs from near Baguiati through Chinar Park. The Orange Line\'s New Town stations, including Nazrul Tirtha and Eco Park, are under construction, so today tutors arrive by bus, cab or two-wheeler, often after the Green Line to Salt Lake Sector V. Since June 2015 Rajarhat has been part of the Bidhannagar Municipal Corporation.',
            ],
            'tips' => [
                'Almost every home is in a gated complex, so give the security desk the tutor\'s name, phone number, tower and flat before the first class.',
                'A tutor who already lives in New Town, Rajarhat or Baguiati is the easiest match while the Orange Line stations are being built.',
                'Keep lessons clear of office-hour peaks at the Chinar Park crossing and Teghoria, and use online sessions for subjects with few local tutors.',
            ],
        ],
        'Lake Town, Dum Dum & Baguiati' => [
            'guide' => 'salt-lake-and-new-town-tuition-guide',
            'intro' => [
                'Lake Town, Bangur Avenue, Kestopur, Baguiati and Dum Dum sit along VIP Road and Jessore Road on the north-eastern side of the city. VIP Road, finished in 1962, runs from Ultadanga to the airport past most of the zone. Lake Town and Bangur Avenue belong to South Dum Dum Municipality, while Kestopur and Baguiati are in the Bidhannagar Municipal Corporation. Homes range from older houses and builder floors to mid-rise flats and some gated complexes.',
                'Dum Dum and Belgachia opened on the Blue Line on 12 November 1984, Dum Dum Junction is on the Sealdah to Ranaghat line and starts the Circular Railway, and since 22 August 2025 the Yellow Line has run from Noapara through Dum Dum Cantonment to the airport. The Ultadanga flyover opened in 2011 and the flyover over VIP Road at Baguiati in March 2015. Baguiati has no metro station of its own yet.',
            ],
            'tips' => [
                'For Baguiati and Kestopur, share an exact landmark off VIP Road, since addresses are spread over several sub-localities.',
                'VIP Road and Jessore Road carry airport traffic, so leave a margin around the evening peak when fixing the lesson time.',
                'Dum Dum is among the easiest places in the city to reach by train or metro, which widens the pool of tutors who can come.',
            ],
        ],
        'North Kolkata' => [
            'guide' => 'north-kolkata-and-howrah-tuition-guide',
            'intro' => [
                'Shyambazar, Bagbazar, Sovabazar, Maniktala, Belgachia and Sinthee make up the oldest part of the city. Bagbazar grew out of the historic village of Sutanuti beside the Hooghly, Sovabazar was a wealthy merchant quarter whose family mansions have held Durga Puja since 1757, and Maniktala joined the city under the 1923 Calcutta Municipal Act. Lanes of older family houses with verandahs and latticework remain, though many plots have been rebuilt as small apartment buildings.',
                'Belgachia has had a Blue Line station since 1984, Shyambazar and Sovabazar Sutanuti opened in February 1995 along with Girish Park, and the line was extended to Baranagar and Dakshineswar in February 2021. The Circular Railway stops at Bagbazar and Sovabazar Ahiritola, and ferries run from Bagbazar Ghat. Most visits are to a family house or a small building at street level, so there is rarely any gate formality.',
            ],
            'tips' => [
                'Public transport usually beats a car here: the last few steps are often on foot through narrow lanes from Shyambazar, Sovabazar Sutanuti or Girish Park.',
                'The Shyambazar five-point crossing and the market roads are crowded at school and office hours, so mid-afternoon or later evening works better.',
                'In Puja season the heritage lanes fill with visitors; move lessons earlier or online for those weeks.',
            ],
        ],
        'Howrah' => [
            'guide' => 'north-kolkata-and-howrah-tuition-guide',
            'intro' => [
                'Shibpur, Salkia and Santragachi lie on the west bank of the Hooghly. Shibpur covers Howrah Municipal Corporation wards 25 to 45 except 43, with a densely built old core and newer multi-storey complexes. Salkia in north Howrah is anchored by a market more than a century old and has mid-size apartment buildings and older houses. Santragachi, on the Kona Expressway, is known for its railway junction and for a lake that draws migratory birds each winter.',
                'On 6 March 2024 the Green Line began running under the Hooghly from Esplanade to Howrah and Howrah Maidan, and since 22 August 2025 it has continued without a break to Salt Lake Sector V. Santragachi Junction is on the South Eastern Railway, Liluah and Tikiapara serve Salkia, a central bus terminus opened on the Kona Expressway in 2015, and ferries cross from the Golabari and Bandhaghat ghats.',
            ],
            'tips' => [
                'Ask for a tutor who already teaches on the Howrah side, or one who can use the Green Line to Howrah or Howrah Maidan.',
                'In Santragachi\'s gated complexes, share the tower, flat number and gate rules with the tutor before the demo.',
                'Give an exact lane landmark in Salkia and old Shibpur, and allow extra time on the Kona Expressway at office hours.',
            ],
        ],
    ],
    // Patna (1 Oct 2026), from database/seo-content/areas/patna-zone-guides.json.
    'Patna' => [
        'Boring Road & Patliputra' => [
            'guide' => 'north-and-west-patna-tuition-guide',
            'intro' => [
                'Boring Road, Sri Krishna Puri, Kidwaipuri, Boring Canal Road, Shivpuri, Patliputra Colony, Shastri Nagar and Digha make up the settled colonies between central Patna and the Ganga. Boring Road itself is now mostly shops, offices and coaching classes, so families live a turn away in Nageshwar Colony, Sri Krishna Puri, Buddha Colony or Anandpuri. Patliputra Colony was formed in 1954 as a cooperative housing society for government officials, and Digha has grown from farmland into old houses and high-rise blocks.',
                'There is no metro station in this zone yet, so tutors come by two-wheeler, auto or car. Digha Bridge Halt, opened in November 2017 beside the Digha-Sonpur rail-road bridge, links the riverside with Patliputra Junction and Patna Junction, and the Ganga riverfront expressway starts at Digha. Most homes are houses or low-rise buildings, so a tutor arrives at a door or a single gate rather than a township desk, and a tutor from the next colony is often the easiest match.',
            ],
            'tips' => [
                'Give a colony name and lane landmark rather than just Boring Road, because most homes sit in Sri Krishna Puri, Nageshwar Colony, Kidwaipuri or Anandpuri off the main road.',
                'Avoid the evening rush at the Boring Road crossing: set lessons before it builds, or pick a tutor who lives in your own colony and can walk or ride over.',
                'For Digha\'s towers, register the tutor at the gate before the demo; a tutor coming from the Patliputra side can use the riverfront expressway to skip the inner roads.',
            ],
        ],
        'Bailey Road & Danapur' => [
            'guide' => 'north-and-west-patna-tuition-guide',
            'intro' => [
                'Bailey Road runs west from near the Income Tax roundabout, past the administrative quarter, into a long corridor of two- and three-bedroom flats that ends at Danapur. Raja Bazar has small complexes by local builders, Rukanpura holds Patliputra Junction, Saguna More mixes large gated townships with smaller buildings, and Danapur keeps its own municipal council and a cantonment established in 1765. Khagaul, next door, is an old town that holds Danapur railway station, headquarters of the Danapur division.',
                'The Red Line of Patna Metro is being built beneath Bailey Road, with planned stations at Danapur, Saguna Mor, RPS Mor, Patliputra, Raja Bazar, Patna Zoo, Vikas Bhawan and Vidyut Bhawan, but none is open yet. Until then tutors travel by two-wheeler, auto or car, and construction barriers can slow parts of the road. Apartment buildings and townships register visitors at the gate, and homes inside the cantonment follow their own entry rules, so the family should check how a tutor is admitted.',
            ],
            'tips' => [
                'Ask a township\'s main gate whether a standing visitor pass can be issued for a regular tutor, so each lesson does not start with fresh paperwork.',
                'Choose a tutor from the same stretch of Bailey Road, such as Saguna More with Danapur or Raja Bazar with Rukanpura, and keep lessons outside office hours.',
                'If the home is inside Danapur Cantonment, confirm the visitor procedure before the demo and share it with the tutor in advance.',
            ],
        ],
        'Kankarbagh & Rajendra Nagar' => [
            'guide' => 'south-and-old-patna-tuition-guide',
            'intro' => [
                'Kankarbagh, one of Patna\'s largest residential colonies, runs from Ashok Nagar to Kumhrar, where the remains of ancient Pataliputra include a Mauryan pillared hall. It mixes houses, builder floors and apartment buildings around markets on the main road and the 90 Feet road. Rajendra Nagar is a planned colony on numbered roads with parks between blocks, Kadamkuan is crowded and central near the station, and Bhootnath Road runs through Bahadurpur between the Old and New Bypass roads.',
                'This is the zone the metro already serves. The Blue Line opened to the public on 7 October 2025 between Bhootnath, Zero Mile and the Patliputra Bus Terminal, and on 2 July 2026 it reached Malahi Pakri on the 90 Feet road, with trains passing Khemnichak until that station is built. The underground section towards Rajendra Nagar and Patna Junction is under construction. Rajendra Nagar Terminal, opened in 2003, and Patna Junction give tutors rail links as well.',
            ],
            'tips' => [
                'Look for a tutor living near Bhootnath or Malahi Pakri station: they can come by metro and finish with a short auto ride instead of fighting main-road traffic.',
                'In Rajendra Nagar share the road number and house or building name; in Kadamkuan send a precise lane landmark, because parking and lanes are tight.',
                'Bhootnath Road and the market roads fill when coaching batches change over, so fix a lesson time that avoids those changeover hours.',
            ],
        ],
        'Gandhi Maidan, Ashok Rajpath & Old Patna' => [
            'guide' => 'south-and-old-patna-tuition-guide',
            'intro' => [
                'This is Patna\'s historic spine along the Ganga. Bankipur grew as the colonial civil station after 1765 around the ground now called Gandhi Maidan, with the Golghar granary of 1784 to 1786 nearby and flats among the shops of the commercial blocks to the south. Ashok Rajpath runs from near Golghar to Didarganj, with colleges on its northern side and old houses and markets on its southern side, and Patna City, the old eastern town, is a trading centre of close-built neighbourhoods.',
                'Patna Junction, opened in 1862 as Bankipore Junction, and Patna Sahib station on the old city side are the rail anchors. The Ganga riverfront expressway, complete from Digha to Didarganj since April 2025, meets Ashok Rajpath at nine points, which lets tutors from the north-west reach the zone quickly. Underground Blue Line stations at Gandhi Maidan and Akashvani are still under construction, so most tutors ride in, and in the old city\'s lanes a two-wheeler or e-rickshaw beats a car.',
            ],
            'tips' => [
                'Keep lessons away from college opening and closing times on Ashok Rajpath, and give the tutor a lane landmark rather than just the road name.',
                'In Patna City share a landmark such as a well-known shop or gali name, and a phone number, because house numbers are hard to follow in the older lanes.',
                'For flats near Gandhi Maidan, tell the building gate the tutor\'s name in advance, and plan online sessions on days when big events are held at the Maidan.',
            ],
        ],
        'Anisabad, Gardanibagh & Phulwari' => [
            'guide' => 'south-and-old-patna-tuition-guide',
            'intro' => [
                'The south-west of Patna is its growing edge. Anisabad is a developing neighbourhood around a busy roundabout, with apartment buildings of one to four bedrooms, plotted homes and builder floors. Gardanibagh is established housing near the Secretariat area, bordered by Kidwaipuri, Jakkanpur and Rajbanshi Nagar, where a state project of 752 flats for officers was taken up from 2020. Phulwari Sharif, known for its Sufi heritage, is among the fastest-growing parts of the metropolitan region, with new apartment buildings spreading beyond its old core.',
                'There is no metro in this zone yet. Phulwari Sharif has its own station on the Howrah-Delhi main line, Patna Junction is close to Gardanibagh, and National Highway 139 runs through Phulwari. An elevated four-lane road from the Anisabad roundabout through Phulwari has been planned, and the elevated corridor towards Digha already helps tutors travelling north. Government housing campuses and newer buildings check visitors at the gate, while plotted lanes allow a tutor to arrive at the door.',
            ],
            'tips' => [
                'Pick a tutor who lives on your side of the Anisabad roundabout, because crossing it at peak hours is the slowest part of most trips here.',
                'For a government housing campus in Gardanibagh, give the tutor the block and flat number and tell the gate before the first lesson.',
                'In Phulwari Sharif\'s newer buildings, register the tutor once with the guard; for specialist subjects taught by tutors in north Patna, add online sessions.',
            ],
        ],
    ],
    // Thiruvananthapuram (1 Oct 2026), from database/seo-content/areas/thiruvananthapuram-zone-guides.json.
    'Thiruvananthapuram' => [
        'Kowdiar & Pattom' => [
            'guide' => 'thiruvananthapuram-tuition-guide',
            'intro' => [
                'Kowdiar, Vellayambalam, Sasthamangalam, Pattom and Kesavadasapuram form the central-north belt of Thiruvananthapuram. Kowdiar is where the Rajapatha, the old royal road, begins before running down through Vellayambalam to East Fort. Housing leans towards large independent houses and villas on wide roads in Kowdiar and Sasthamangalam, with apartment buildings, many of them resale flats, filling in around Vellayambalam and the side streets off Pattom. Government offices and cultural venues sit close to the homes here.',
                'The zone is built around busy junctions. Vellayambalam is a roundabout where roads from Kowdiar, Sasthamangalam, East Fort, Thycaud and Thampanoor meet; Pattom brings four roads together, including NH 66 towards north Kerala, and is a major stop for buses to Thampanoor and East Fort; at Kesavadasapuram, MC Road begins and meets NH 66. That makes the area easy to reach by bus or auto, but every junction slows sharply at office hours.',
            ],
            'tips' => [
                'Book lessons to start after the evening office rush at Pattom, Vellayambalam and Kesavadasapuram; a slightly later slot usually keeps the tutor on time week after week.',
                'In an apartment building, give the tutor\'s name and visiting days to the security desk once; in a Kowdiar or Sasthamangalam house, say which gate to use and where a scooter can stand.',
                'Tell us the junction you live nearest to, since Pattom, Vellayambalam and Kesavadasapuram each draw on different bus routes and so on different tutors.',
            ],
        ],
        'Peroorkada & Vattiyoorkavu' => [
            'guide' => 'thiruvananthapuram-tuition-guide',
            'intro' => [
                'Peroorkada, Kudappanakunnu, Vattiyoorkavu and Nalanchira make up the northern suburbs, a zone of villas, independent houses and residential plots with fewer flats than the centre. Peroorkada is a corporation ward on the road towards Nedumangad and includes gated villa communities. Kudappanakunnu is home to the Civil Station and the District Collector\'s office, with villas and houses around them. Vattiyoorkavu is comparatively high-lying, crossed by the Killi and Karamana rivers, and has become popular with middle-class families.',
                'Nalanchira sits on MC Road between Mannanthala and Pananvila, in named residential nagars, and is known for its many schools and training institutes. Buses run from the Vattiyoorkavu stop to East Fort, MC Road carries services towards Kesavadasapuram, and the Sreekaryam–Peroorkada Road links the zone to NH 66. A flyover has been approved at the Peroorkada junction. Traffic peaks follow government office hours around the Civil Station and school hours along MC Road.',
            ],
            'tips' => [
                'In a gated villa community, register the tutor at the main gate before the first class so entry does not eat into the lesson; independent houses usually need only the house name and lane.',
                'Around Kudappanakunnu, plan after-school lessons to begin once the government offices have emptied; along MC Road in Nalanchira, wait until the school and institute crowd has cleared.',
                'Allow some buffer around the Peroorkada junction while the approved flyover work goes on, and send a map pin, since many homes here are known by house name rather than number.',
            ],
        ],
        'Ulloor & Kazhakkoottam' => [
            'guide' => 'thiruvananthapuram-tuition-guide',
            'intro' => [
                'Ulloor, Sreekaryam and Kazhakkoottam line the NH 66 corridor running north-east from the city towards the IT park. Ulloor sits between Kesavadasapuram and Sreekaryam and is known for its large medical campus and hospitals, with houses, apartment buildings and plots behind the main road. Sreekaryam, roughly midway between Kazhakkoottam and Palayam, is an education and research hub where apartment projects, rented houses and gated villa communities are popular with people working at the IT park.',
                'Kazhakkoottam is the city\'s IT suburb and one of its fastest-growing areas. The IT park, dedicated in November 1995, stands beside NH 66, and the junction where the highway meets the Kazhakkoottam–Kovalam bypass has had an elevated four-lane flyover since December 2022. Kazhakuttam railway station and frequent buses along NH 66 connect the area with the city. A metro route along this corridor has been proposed but is not built.',
            ],
            'tips' => [
                'With many parents on IT shifts, set lessons around shift-change times or move one session a week to the weekend, and ask for a tutor who can switch to online on long workdays.',
                'Apartment projects and villa communities along NH 66 register visitors, so arrange a standing entry for the tutor in the first week instead of a call from the gate each time.',
                'Near Ulloor, route the tutor around the hospital junction at peak hours, especially for homes on the Akkulam road or in the inner lanes behind the main road.',
            ],
        ],
        'Thycaud & Karamana' => [
            'guide' => 'thiruvananthapuram-tuition-guide',
            'intro' => [
                'Thycaud, Vazhuthacaud, Poojappura, Thirumala, Karamana and Nemom make up the south and west of the city. Thycaud is a residential locality of villas and houses next to Thampanoor, where Thiruvananthapuram Central railway station, opened in 1931, stands opposite the central bus station. Vazhuthacaud mixes homes, many in newer apartment buildings, with offices, the radio station and a theatre. Poojappura combines homes with state government offices, and Thirumala is a quiet hillside suburb of houses and villas.',
                'Karamana is green and densely lived in, with the river running through it and traditional theruvu, narrow streets of wall-sharing houses, in its older core. NH 66 passes through Karamana and Nemom on its way south towards Kanyakumari. Nemom\'s railway station was renamed Thiruvananthapuram South in 2024 and is being developed as a satellite to Central. With Thampanoor and the East Fort bus terminal close by, this is the easiest zone to reach by public transport.',
            ],
            'tips' => [
                'In Karamana\'s old streets, favour a tutor who comes on foot or by scooter, and agree where a two-wheeler can be parked before the first lesson.',
                'Around Thampanoor, Vazhuthacaud and Poojappura the roads are heaviest at office hours, so evening lessons that start after the rush are easier to keep on time.',
                'For Thirumala and Nemom, where most homes are independent houses, share the house name, the lane and a landmark; the tutor usually has doorstep access and room to park.',
            ],
        ],
    ],
    // Nagpur (1 Oct 2026), from database/seo-content/areas/nagpur-zone-guides.json.
    'Nagpur' => [
        'Central West Nagpur' => [
            'guide' => 'nagpur-tuition-guide',
            'intro' => [
                'Dharampeth, Gokulpeth, Shankar Nagar, Bajaj Nagar, Laxmi Nagar, Ramdaspeth, Dhantoli and Civil Lines make up the established centre-west of Nagpur, just west of Sitabuldi, the city\'s main market. Homes are a mix of apartment buildings and older family houses set among shops, cafés, clinics and offices. Ramdaspeth is known for larger apartments, Dhantoli for its many clinics, and Civil Lines, laid out in the British period, for wide avenues, bungalows and government colonies.',
                'The metro serves this zone well. Sitabuldi is the interchange between the Orange and Aqua Lines; the Aqua Line opened west from Sitabuldi in January 2020 with stops at Shankar Nagar Square and LAD Square on North Ambazari Road, Congress Nagar on the Orange Line sits in Dhantoli, and Zero Mile Freedom Park and Kasturchand Park serve Civil Lines. Street parking near markets and clinics is tight, so the metro and two-wheelers are the easier ways in.',
            ],
            'tips' => [
                'Ask for a tutor who comes by metro or two-wheeler; parking near the Dharampeth market lanes and Dhantoli\'s clinic streets is hard to find in the evening.',
                'Book after-school slots before the evening shopping rush on the main roads, and in Civil Lines allow extra time on days when legislative sessions or official events are on.',
                'In government colonies and apartment buildings, give the gate the tutor\'s name and timing before the first lesson; bungalows and older houses usually open straight onto the road.',
            ],
        ],
        'Hingna Road and Ring Road' => [
            'guide' => 'nagpur-tuition-guide',
            'intro' => [
                'Pratap Nagar, Trimurti Nagar and Jaitala form the planned south-west of Nagpur, between the Ring Road and Hingna Road. Pratap Nagar runs along the Ring Road with plotted-layout homes and apartment buildings in pockets such as Padole Layout and Gayatri Nagar. Trimurti Nagar is laid out on a regular plan with wide roads and shops around its square, and Jaitala, reached by Jaitala Road from Hingna Road near Parsodi, has many independent houses alongside newer flats.',
                'The Aqua Line runs along Hingna Road to its western terminus at Lokmanya Nagar, with Subhash Nagar station in Parsodi and Rachana Ring Road Junction north-west of Trimurti Nagar Square. Hingna Road continues as a state highway to the industrial estate at Hingna, and Phase II of the metro, under construction, includes an extension from Lokmanya Nagar towards Hingna. Wide streets make parking easy, but the Ring Road fills with office traffic in the evening.',
            ],
            'tips' => [
                'For a tutor coming from the centre, use Subhash Nagar or Rachana Ring Road Junction station plus an auto, and set the lesson to start after the Ring Road evening peak.',
                'Plotted-layout houses here usually let the tutor park at the door; say which lane and plot number in the layout, since many layouts look alike from the main road.',
                'Newer apartment buildings in Jaitala and Pratap Nagar may keep a visitor register, so share the tutor\'s name with the gate before the demo class.',
            ],
        ],
        'Wardha Road' => [
            'guide' => 'nagpur-tuition-guide',
            'intro' => [
                'Khamla, Sonegaon, Somalwada, Manish Nagar and Besa line Wardha Road on the airport side of south Nagpur. Housing is dominated by two- and three-bedroom apartment buildings, with independent homes in the older layouts and villas, houses and plots in Besa\'s newer layouts along Besa-Pipla Road. Manish Nagar is linked to Wardha Road by a railway underbridge, and the airport and the MIHAN area lie further south along the same corridor, reached by Wardha Road and the Outer Ring Road.',
                'The Orange Line first opened on 8 March 2019 between Sitabuldi and Khapri, running along Wardha Road, so this zone has a string of stations. Ujjwal Nagar, also known as Somalwada, serves Manish Nagar, Besa and Beltarodi, Airport station in New Manish Nagar is linked by feeder bus to the terminal, and Jaiprakash Nagar station is the usual link for Khamla. Wardha Road carries heavy traffic in the morning and evening peaks.',
            ],
            'tips' => [
                'Pick a tutor on the Orange Line where you can: most homes are an auto ride from a Wardha Road station, which is easier than driving the road at peak hours.',
                'Around Manish Nagar, allow a little extra time for the railway crossing and underpass at busy hours, especially for lessons that start in the early evening.',
                'Apartment gates along Wardha Road keep visitor registers, so give the tutor\'s name and visiting days in advance and ask the gate to note them for every week.',
            ],
        ],
        'North Nagpur' => [
            'guide' => 'nagpur-tuition-guide',
            'intro' => [
                'Sadar, Seminary Hills, Gittikhadan, Mankapur, Koradi Road and Zingabai Takli make up North Nagpur. Sadar is a busy mixed locality with a commercial high street on Mount Road and flats and older houses behind it. Seminary Hills, named after a seminary whose classes began in 1851, has wooded slopes, government offices, Air Force establishments and residential colonies. Further out, Gittikhadan on Katol Road and the Koradi Road belt have many plotted layouts of independent houses.',
                'Mankapur is crossed by Chhindwara Road and the Ring Road, and Zingabai Takli lies near Godhani Road and Godhani railway station. Metro coverage is thin: Kasturchand Park and Zero Mile Freedom Park on the Orange Line serve the southern edge near Sadar, and the line\'s northern section along Kamptee Road opened in December 2022, but most homes are reached by two-wheeler, car or auto along Katol, Koradi and Chhindwara Roads.',
            ],
            'tips' => [
                'Favour a tutor with a two-wheeler or one living in North Nagpur, since most of Koradi Road, Mankapur and Zingabai Takli is some way from a metro station.',
                'In Seminary Hills, government colonies have gated entrances, so inform security before the tutor arrives and ask the tutor to carry identification.',
                'Near Sadar\'s Mount Road the evening crowd makes parking hard; ask the tutor to come a little early, and on Katol and Chhindwara Roads plan lessons after the office peak.',
            ],
        ],
        'East and South-East Nagpur' => [
            'guide' => 'nagpur-tuition-guide',
            'intro' => [
                'Nandanvan, Wathoda, Wardhaman Nagar, Manewada and Hudkeshwar cover the east and south-east of Nagpur. Nandanvan is a large, densely populated residential area of flats and family homes along Taj Bagh Road and the Middle Ring Road. Wathoda is developing, with houses, new apartment complexes and plots near Kharbi. Wardhaman Nagar is mixed, with homes and apartment buildings among shops and businesses along Bhandara Road near Lakadganj, and Itwari and Kalamna are its nearest railway stations.',
                'Manewada, part of the Nagpur South area, has flats and plotted-layout houses along Besa Road, and Hudkeshwar, on the south-eastern edge, is mostly two- and three-bedroom apartments along Hudkeshwar Road. The Aqua Line\'s eastern section to Prajapati Nagar at Old Pardi Naka opened to the public in December 2022, with Vaishnodevi Square in Padole Nagar among its stations, but Manewada and Hudkeshwar have no metro and depend on road travel.',
            ],
            'tips' => [
                'Bhandara Road carries heavy goods traffic, so for Wardhaman Nagar book lessons outside peak hours and ask the tutor to allow extra time on the main road.',
                'For Manewada and Hudkeshwar, look first for tutors who live in the south-east or ride a two-wheeler, since the metro does not reach these localities.',
                'Large new complexes in Wathoda and Hudkeshwar register visitors at the gate; share the tutor\'s details before the demo, and for plotted houses give the layout name and a map pin.',
            ],
        ],
    ],
    // Surat (1 Oct 2026), from database/seo-content/areas/surat-zone-guides.json.
    'Surat' => [
        'Adajan, Pal & Rander' => [
            'guide' => 'surat-tuition-guide',
            'intro' => [
                'Adajan, Pal, Palanpur, Rander and Jahangirpura make up the western bank of the Tapi, all inside the municipal West Zone. Adajan faces Athwa across the river and mixes mid-segment flats with independent homes, Pal and Palanpur are mostly societies of ready 2 and 3 BHK apartments around Bhesan Road, and Jahangirpura, at the north-western edge near Variav and Dabholi, has flats alongside plotted houses on Hazira-Sayan Road.',
                'Rander is the old heart of this bank, a trading town long before Surat became a port, with narrow lanes of family houses now ringed by newer lift buildings. Buses do much of the work here: Phase 2 Sitilink BRTS corridors start at Adajan Patiya for Jahangirpura and Pal RTO, and another runs from Pal RTO across the city. The Green Line metro through Bhesan, Palanpur Road and Adajan Gam is under construction and not yet open.',
            ],
            'tips' => [
                'Look for a tutor who already lives on the western bank; crossing the Tapi bridges at office hours is the slowest part of any trip into Adajan or Pal.',
                'In Pal and Palanpur societies, give the tutor\'s name and flat number to the gate before the first class; in Rander\'s old lanes, send a landmark and say where a two-wheeler can be parked.',
                'If you live near Adajan Patiya or a Pal RTO corridor stop, mention it in the request, because tutors who travel by Sitilink bus can then be included.',
            ],
        ],
        'Central Surat, Athwa & Ghod Dod Road' => [
            'guide' => 'surat-tuition-guide',
            'intro' => [
                'Nanpura, Majura Gate, Athwa, Ghod Dod Road and Parle Point form the old centre south of the river. Nanpura has its own Central Zone ward office and keeps apartments, builder floors and older houses side by side; Majura Gate is a Ring Road junction ringed by offices, shops and mid-segment flats; and Athwa, which includes Athwalines and Athwa Gate, holds the South West Zone\'s administrative building facing Adajan across the Tapi.',
                'Ghod Dod Road, named after horse races held on it in the 1900s and rebuilt as a retail street in the 1980s, runs from Majura Gate to Parle Point, with premium 3 BHK apartments behind its shops. Surat railway station and Udhna Junction are the rail points and Sitilink buses cover the surrounding roads. Majura Gate is planned as the interchange of both metro lines, which are still under construction.',
            ],
            'tips' => [
                'On Ghod Dod Road and around Parle Point, fix the lesson straight after school, before the evening shopping crowd fills the road and the side streets.',
                'For a house in Nanpura\'s narrow lanes, a tutor on a two-wheeler or in an auto is easier to keep than one who drives a car and must hunt for parking.',
                'Because this zone sits in the middle of the city, you can widen the search to tutors from Adajan, Piplod and City Light without adding much travel.',
            ],
        ],
        'Piplod, Vesu & Dumas Road' => [
            'guide' => 'surat-tuition-guide',
            'intro' => [
                'Piplod, City Light, Vesu and Dumas Road are the newer, south-western side of the city, in the municipal South West Zone. Piplod is upmarket, with ready apartments and villas; City Light is mid-segment 2 and 3 BHK societies near Parle Point and Althan; Vesu is high-rise gated complexes, business parks and shopping centres along VIP Road; and Dumas Road carries gated societies towards Magdalla, the airport and the Arabian Sea coast.',
                'Gaurav Path, the expressway that links the city with its airport, Magdalla port and Dumas village, runs through Piplod with a dedicated BRTS lane, so tutors without a vehicle can arrive by Sitilink bus. The Red Line metro has stations planned at VIP Road, Bhimrad, Convention Center and Dream City; trial runs began in March 2026, but the line is not open to passengers, so autos and two-wheelers still finish most trips.',
            ],
            'tips' => [
                'Nearly every home here is in a gated society, so ask security for a standing visitor entry after the demo instead of registering the tutor afresh each week.',
                'VIP Road and Dumas Road peak at office hours and on weekend evenings; a fixed weekday slot outside those peaks is the one most likely to hold all year.',
                'If you are close to Gaurav Path, say so in the request, because the BRTS lane there brings in tutors who travel by bus.',
            ],
        ],
        'Udhna, Althan & Pandesara' => [
            'guide' => 'surat-tuition-guide',
            'intro' => [
                'Udhna, Althan, Bhatar and Pandesara make up the southern belt, where industrial estates sit beside affordable and mid-budget homes. Althan and Bhatar share one South West Zone ward area, Althan with 2 and 3 BHK societies and Bhatar with 1 and 2 BHK flats around Bhatar Char Rasta, while Udhna, along the Surat-Navsari highway, and Pandesara, a former village turned industrial hub with a housing board colony, fall in the South Zone.',
                'This side is well served by rail and bus. Udhna Junction is on the Delhi-Mumbai and Ahmedabad-Mumbai main lines and starts the line to Jalgaon, and the first Sitilink corridor, from Udhana Darwaja to Sachin GIDC Naka, has run here since January 2014. Metro trial runs use the elevated stretch from Dream City to Althan Tenement, but passengers cannot ride it yet, and Pandesara is outside the first phase.',
            ],
            'tips' => [
                'Industrial shift changes fill the highway and estate roads in Udhna and Pandesara, so agree a class time that falls after the shift traffic has cleared.',
                'In housing board blocks and small buildings the tutor usually comes straight to the flat; in Althan and Bhatar societies, register the name at the gate desk once.',
                'A tutor from Bhatar, City Light or Vesu can reach Althan without crossing the river, so include those neighbours when the nearest list is short.',
            ],
        ],
        'Katargam, Varachha & Sarthana' => [
            'guide' => 'surat-tuition-guide',
            'intro' => [
                'Katargam, Amroli, Varachha, Mota Varachha, Sarthana and Yogi Chowk lie north and east of the Tapi, in the North and East Zones. This is the diamond side of Surat: Katargam holds much of the trade and the North Zone office, Varachha is a hub of cutting and polishing, and many families here trace their roots to Saurashtra. Homes are mostly affordable 1 and 2 BHK flats, with newer multi-storey societies in Mota Varachha and Sarthana.',
                'Amroli joined the city in 2006 along with Chhaprabhatha and Kosad, and Katargam was a nagar panchayat before that. Utran, Kosad and Surat stations serve the zone, and Sitilink BRTS runs from Katargam Darwaja to Kosad and via Canal Road to Sarthana Jakat Naka. The Red Line will start at Sarthana and pass Nature Park, Varachha Chopati Garden and Kapodra, but it is still being built.',
            ],
            'tips' => [
                'Diamond-unit shift times shape traffic in Katargam and Varachha, so choose an evening slot that starts after the shift rush rather than during it.',
                'In the smaller apartment buildings the tutor usually walks straight up; in newer Mota Varachha and Sarthana societies, the gate notes visitors on the first day.',
                'Amroli and Mota Varachha sit on the northern edge, so many families pair a nearby tutor for regular subjects with an online specialist for senior papers.',
            ],
        ],
    ],
    // Ranchi (1 Oct 2026), from database/seo-content/areas/ranchi-zone-guides.json.
    'Ranchi' => [
        'Kanke Road, Morabadi & Bariatu' => [
            'guide' => 'ranchi-tuition-guide',
            'intro' => [
                'Kanke Road, Morabadi and Bariatu make up the residential north of Ranchi. Kanke Road forks off Circular Road beyond Kutchery and heads towards Kanke and the Kanke Dam reservoir, with colonies such as Jawahar Nagar, Hatma and Indrapuri Colony behind it. Morabadi, also written Morhabadi, surrounds its large maidan, and Bariatu takes in the housing colony, Rani Bagan, Jora Talab and Sarhul Nagar. Older independent houses sit alongside newer apartment buildings, many with three-bedroom flats.',
                'There is no rail line inside the zone, so tutors arrive by road. The Bajra–Bariatu Road and Joda Talab Road serve Bariatu, Morabadi Road and Karamtoli Road lead into Morabadi, and the Kanke–Patratu Road and the Ranchi Ring Road link the northern end of Kanke Road with the rest of the city. Autos and cabs are easy to find, and markets sit close to most homes. Tutors from Lalpur and the centre have several routes to choose between.',
            ],
            'tips' => [
                'On days when the Morabadi ground hosts a large event, the roads around it fill up; book a morning slot or move that evening\'s lesson online.',
                'Apartment buildings on Kanke Road and in Bariatu keep a gate register, so send the tutor\'s name and flat number to the guard before the demo.',
                'For homes towards Kanke, pick a tutor from the northern colonies themselves, since the stretch from the centre along Kanke Road is slow at office closing time.',
            ],
        ],
        'Lalpur, Kokar & Namkum' => [
            'guide' => 'ranchi-tuition-guide',
            'intro' => [
                'Lalpur, Kokar and Namkum run from the commercial centre of Ranchi out to its south-eastern edge. Lalpur Chowk, where Circular Road meets Old Hazaribagh Road, sits in one of the city\'s main business districts, with Burdwan Compound and Kantatoli close by. Kokar is an industrial area run by the state\'s industrial development authority, surrounded by flats in Tiril Basti, Bank Colony and Vasuki Nagar. Namkum, further out, mixes an industrial estate with plots, houses and new gated enclaves.',
                'Rail is closer here than anywhere else in the city. Ranchi Junction, opened in 1908 and headquarters of the railway\'s Ranchi division, is near Lalpur, and Namkon station on the Gomoh–Hatia line serves Namkum. The Kantatoli flyover, opened in October 2024, carries traffic from the Kokar side over the Kantatoli junction towards Bahu Bazar. Roads around Lalpur stay busy for much of the day, and parking near the chowk is limited, so the last leg is often an auto.',
            ],
            'tips' => [
                'For Lalpur and the compounds near the chowk, fix a slot slightly away from the office and market rush, and ask the tutor to finish the trip by auto or e-rickshaw rather than hunt for parking.',
                'Namkum homes are spread out: a tutor with their own two-wheeler is the practical choice, and a map pin with the enclave gate saves a missed demo.',
                'Kokar apartment blocks usually register visitors, so share the building name and the tutor\'s details with the gate before the first lesson.',
            ],
        ],
        'Harmu, Argora & Ratu Road' => [
            'guide' => 'ranchi-tuition-guide',
            'intro' => [
                'Harmu, Argora and Ratu Road form the planned residential west of Ranchi. Harmu Housing Colony, set up in the early 1960s along Bypass Road, is one of the largest residential areas in the city, and Ashok Nagar beside it began in 1975 as a cooperative colony of senior state government employees, laid out in plots. Kadru holds the A. G. Colony, Pundag has newer apartment enclaves towards Rishabh Nagar, and Ratu Road runs north-west from Kutchery past Piska More and Vikas Nagar.',
                'Argora has its own railway station on the South Eastern Railway, which serves most of the zone, while Ranchi Junction is reached via Station Road. Bypass Road, also called Harmu Road, is the main spine, with Argora Road, Pundag Road, AG Colony Road and the Kadru–Kumhartoli Road feeding it. The Ratu Road elevated corridor, opened in July 2025, lifts through traffic above the old road from near Raj Bhavan past Piska More, easing movement below.',
            ],
            'tips' => [
                'Bypass Road and Argora Chowk are congested at peak hours, so ask the tutor to leave a little buffer for evening slots or choose a time after the office rush.',
                'In Ashok Nagar and the older Harmu lanes the tutor can usually park at the door; in Pundag\'s enclaves, register the tutor\'s name at the gate first.',
                'Kadru\'s lanes are narrow, so a tutor on a two-wheeler is easier to keep than one travelling by car.',
            ],
        ],
        'Doranda, Hinoo & Hatia' => [
            'guide' => 'ranchi-tuition-guide',
            'intro' => [
                'Doranda, Hinoo and Hatia make up Ranchi\'s south, from an old business district to a planned township. Doranda has South Office Para, North Office Para and Shyamali Colony around its markets. Hinoo is where the city\'s airport stands, with Shukla Colony and Kilburn Colony nearby. Dhurwa grew around the sector township of the heavy engineering plant set up in 1958, where the international cricket stadium also stands. Hatia adjoins it, and Tupudana lies on the Ranchi–Khunti road.',
                'Hatia station, with three platforms, is both a terminus and a transit stop for the south, and Argora and Ranchi Junction serve Doranda and Hinoo. The Ranchi Ring Road, in use since 2008, passes close to Tupudana, where the state\'s industrial development authority developed an industrial area in two phases. Staff colonies and sector roads mean easy parking in Dhurwa and Hatia, while Doranda\'s market roads are busier. Homes further south are spread out and greener than the centre.',
            ],
            'tips' => [
                'On cricket match days the roads near the stadium in Dhurwa fill up, so move that evening\'s lesson online or to the morning.',
                'Some staff colonies in Dhurwa and Hatia ask visitors to sign in; give the tutor the sector or colony name and the gate to use.',
                'For Tupudana and the outer south, a tutor on their own two-wheeler from Hatia or Dhurwa is the practical match, with online classes for specialist subjects.',
            ],
        ],
    ],
    // Jamshedpur (1 Oct 2026), from database/seo-content/areas/tata-zone-guides.json.
    'Jamshedpur' => [
        'Central Jamshedpur' => [
            'guide' => 'jamshedpur-tuition-guide',
            'intro' => [
                'Central Jamshedpur is the old heart of the city: Sakchi, Bistupur, Circuit House Area, Golmuri and Sidhgora. Sakchi was the village chosen in 1904 as the site of the steel plant, and it has the city\'s oldest market and the busy Sakchi Golchakkar. Bistupur, one of the earliest planned settlements, is now the main business district. Circuit House Area is a compact pocket of houses, while Golmuri and Sidhgora mix older homes, newer buildings and quiet, green streets.',
                'Straight Mile Road, the longest arterial road in the city, and Kalimati Road carry much of the traffic through the zone. Tatanagar is the main station for most families here, and the small Salgajhari halt is used from the Golmuri side. Because the zone sits on the city bank rather than across a river, tutors from Kadma, Sonari, Agrico or Golmuri can reach it by auto or two-wheeler without a bridge. Housing is a blend of apartments and independent houses.',
            ],
            'tips' => [
                'Sakchi Market and the Bistupur shopping roads are crowded in the evening, so book a slot before the market rush or ask the tutor to park in a residential lane.',
                'Flats in Bistupur and Sakchi often keep a gate register; houses in Circuit House Area and Sidhgora are simple doorstep visits.',
                'Tutors living in Sakchi or Golmuri can also cover families across the Subarnarekha in Mango, since buses and autos run regularly between Sakchi and Mango.',
            ],
        ],
        'West Jamshedpur & Kharkai Side' => [
            'guide' => 'jamshedpur-tuition-guide',
            'intro' => [
                'West Jamshedpur and the Kharkai side take in Kadma and Sonari on the city bank and Adityapur and Gamharia across the Kharkai. Sonari is often described as the city\'s largest residential area, with many housing societies in its North, West, East and South layouts and the small airport. Kadma mixes older company quarters with private apartment buildings. Adityapur is a separate municipal corporation in Seraikela Kharsawan district, and Gamharia, beyond it on the Kandra road, is mostly plots and houses.',
                'Bridges define this zone. Two cross the Kharkai from Adityapur, one to Bistupur and one to Kadma, and the four-lane Domuhani bridge links Sonari with Dobo on the Chandil side. Marine Drive runs along the western corridor, joining Sonari, Kadma, Adityapur, Sakchi and Bistupur. Adityapur station and Gamharia Junction sit on the Howrah–Nagpur–Mumbai line, and NH 118 passes through Adityapur towards Kandra. Domuhani, at Sonari\'s northern tip, is where the Subarnarekha and Kharkai meet.',
            ],
            'tips' => [
                'Sonari and Adityapur societies usually register visitors and set parking rules, so send the tutor\'s name and vehicle number to the gate before the demo.',
                'Kharkai bridge traffic peaks at office hours; a tutor from the same bank, or a slot after the rush, keeps lessons regular.',
                'For Gamharia, a tutor from Adityapur is the practical home-visit match, with online classes for senior or specialist subjects.',
            ],
        ],
        'South Jamshedpur & Tatanagar' => [
            'guide' => 'jamshedpur-tuition-guide',
            'intro' => [
                'South Jamshedpur grows out of Tatanagar Junction, which opened in 1910 as Kalimati and took its present name in 1919. The station stands on the Howrah–Nagpur–Mumbai line, the Asansol–Tatanagar–Kharagpur line and the branch towards Badampahar. Jugsalai, right beside it, is a township with its own municipal council and the city\'s wholesale market. Parsudih lies on the far side of the station towards the Chaibasa highway, and Burmamines, often written Burma Mines, sits next to it.',
                'Housing here is mostly private houses and apartment buildings rather than large gated complexes. Jugsalai has many builder-built flats alongside older family homes in its market lanes, Parsudih takes in Pramatha Nagar, Haludbani and Khasmahal, and Burmamines is largely independent houses. The station roads are the main way in from the centre, and Salgajhari is a second rail option. Tutors from Jugsalai, Parsudih, Burmamines and Telco Colony can move around the zone without crossing a river.',
            ],
            'tips' => [
                'Jugsalai\'s market lanes crowd during trading hours, so early-morning or later-evening slots are easier, with parking just off the main lanes.',
                'Train times bring extra traffic to the Tatanagar station roads and crossing; allow a buffer for tutors coming to Parsudih or Burmamines from the centre.',
                'Write Burmamines as Burma Mines as well when sharing an address, since both spellings are in use.',
            ],
        ],
        'East Jamshedpur' => [
            'guide' => 'jamshedpur-tuition-guide',
            'intro' => [
                'East Jamshedpur is the city\'s belt of planned and plotted colonies: Telco Colony, Birsanagar, Baridih and Govindpur. Telco Colony is a township built for the workforce of a nearby vehicle works, with quarters and private flats. Birsanagar is divided into twelve zones, each split into smaller sections, and is mostly independent houses on plotted lanes. Baridih marks the eastern end of Straight Mile Road, and Govindpur, near Gadhra and Jojobera, is known for affordable plots and houses.',
                'Rail is light but useful. Salgajhari is the local station for Telco Colony and Birsanagar, and Govindpur has a passenger halt at Subhash Nagar in Khankripara on the Howrah–Nagpur–Mumbai line. Golmuri Road leads back towards the centre, and Straight Mile Road gives Baridih a direct run to Dhatkidih. Birsanagar Market, Plaza Market and Baridih Market are the local shopping points. Most homes allow parking at the door, which makes regular home lessons straightforward for tutors living in the zone.',
            ],
            'tips' => [
                'In Birsanagar, always give the zone number and a landmark when booking the demo, because the zones spread over a wide area.',
                'Around Telco Colony, set lesson times after factory shift traffic has cleared from the main roads.',
                'For Govindpur, a tutor from Telco Colony, Parsudih or Birsanagar is the most practical, with online sessions for specialist senior subjects.',
            ],
        ],
        'Mango & Dimna' => [
            'guide' => 'jamshedpur-tuition-guide',
            'intro' => [
                'Mango and Dimna lie across the Subarnarekha from the city centre. Mango is joined to Sakchi by three bridges built side by side and is run by its own civic body; it has grown from a small town into a large residential suburb of apartment complexes, builder buildings and independent houses around Jawahar Nagar, Jharkhand Colony, Azad Nagar and Pardih. Dimna, beside Ripit Colony, is residential too, with Dimna Lake, a drinking water reservoir, further out.',
                'NH 18 runs through the zone on its way from Dhanbad via Purulia to Baharagora, Baripada and Balasore, and Dimna Chowk is a key junction on it. An elevated corridor is under construction from Pardih Kali Mandir to Baliguma via Dimna Chowk, meant to take heavy vehicles off the local roads. Buses and autos run regularly between Sakchi and Mango, and residents mention easy auto and cab availability, but the bridge and the junctions slow down at busy hours.',
            ],
            'tips' => [
                'Choose a tutor who lives on the Mango side where possible; a daily crossing of the Subarnarekha bridges is the hardest part of any schedule here.',
                'While the NH 18 elevated corridor is being built, pick off-peak slots and keep online lessons for evenings when traffic at Dimna Chowk and Pardih is heaviest.',
                'Apartment complexes in Mango ask for a name at the gate, while independent houses in Dimna are doorstep visits; say which applies when booking.',
            ],
        ],
    ],
    // Kochi (1 Oct 2026), from database/seo-content/areas/kochi-zone-guides.json.
    'Kochi' => [
        'Central Ernakulam' => [
            'guide' => 'kochi-tuition-guide',
            'intro' => [
                'Central Ernakulam takes in Marine Drive, Kaloor, Pachalam, Kadavanthra, Panampilly Nagar and Thevara, the older heart of the mainland. Marine Drive was built from the 1980s on land reclaimed from the backwater, and the blocks behind its walkway are mostly high-rise apartments. Panampilly Nagar was laid out as a planned settlement from 1978, Kadavanthra mixes offices with residential colonies, and Pachalam and Thevara keep older houses on quieter roads close to the water.',
                'The Blue Line runs through the middle of the zone. Kaloor and Town Hall opened in October 2017, and Ernakulam South, Kadavanthra and Elamkulam followed in September 2019, with Town Hall and Ernakulam South connecting to the main railway stations. The High Court Water Metro terminal near Marine Drive has linked the centre with Fort Kochi and Vypin since April 2023. Kadavanthra Junction is one of the busiest crossings in the city, which matters for tutors who drive.',
            ],
            'tips' => [
                'In the towers along Marine Drive, give the tutor\'s name to the reception or security desk before the demo and ask the building where a visitor may park.',
                'Tutors coming from the north or south can use Kaloor, Town Hall, Ernakulam South or Kadavanthra station and finish by auto; Thevara has no station, so the auto leg is longer.',
                'Kadavanthra Junction and the Kaloor stadium area slow down at peak hours and on event days, so fix lesson times that avoid them or move that day\'s class online.',
            ],
        ],
        'Edappally & North Kochi' => [
            'guide' => 'kochi-tuition-guide',
            'intro' => [
                'Edappally and North Kochi follow the highway and the metro from Edappally, Elamakkara and Palarivattom up through Cheranallur and Kalamassery to Aluva on the Periyar. Edappally is one of the city\'s main road hubs, where the national highways meet the Kochi Bypass under a flyover opened in 2016. Kalamassery is a municipality long known for its factories and campuses, with housing growing around them, and Aluva has been a municipality since 1921, on the river where it divides in two.',
                'This is the oldest stretch of the Kochi Metro: the section from Aluva to Palarivattom, with stations including Kalamassery, Pathadipalam and Edapally, opened to the public in June 2017, and Kalamassery station connects with the railway. Cheranallur gained a Water Metro terminal in March 2024 on the route to Eloor. An extension from Aluva towards the airport and Angamaly is still only a proposal, so today\'s plans should rest on the line that is running.',
            ],
            'tips' => [
                'A tutor who lives near a Blue Line station between Aluva and Palarivattom can reach most homes in this zone with a short auto ride at the end, which beats driving through Edappally junction.',
                'In Kalamassery and Cheranallur, set class times away from shift changes at the industrial gates and heavy container traffic on the highway, when roads are at their slowest.',
                'In Aluva, move lessons near the riverbank earlier or online during the Sivarathri festival crowds; houses in the town usually have space to park at the gate.',
            ],
        ],
        'Kakkanad & East Kochi' => [
            'guide' => 'kochi-tuition-guide',
            'intro' => [
                'Kakkanad and East Kochi cover Kakkanad, Thrikkakara, Vazhakkala, Vennala and Thammanam. Kakkanad grew from villages among paddy fields into the headquarters of Ernakulam district, with the Civil Station, a special economic zone and several IT parks, and most homes there are apartment complexes and gated villa communities. It lies within Thrikkakara municipality, formed in November 2010, whose older parts near the temple are houses on plots, while Vennala and Thammanam mix older homes, housing colonies and newer apartments.',
                'There is no metro station in this zone yet. The Pink Line, planned to run from Kaloor through Palarivattom Junction, Vazhakkala and Kakkanad Junction to the IT parks, is under construction. For now the Seaport–Airport Road carries most traffic, and the Water Metro between Vyttila and a terminal at Chittethukara, open since April 2023, is the one link by water. Office-hour traffic towards the IT parks is heavy, so the timing of a lesson matters here more than anywhere.',
            ],
            'tips' => [
                'Book weekday classes for after the office rush towards the IT parks, or use weekend mornings, because the Seaport–Airport Road is slowest at the start and end of the working day.',
                'Gated communities in Kakkanad register every visitor, so add the tutor to the visitor list or app before the demo and ask where the tutor should park.',
                'Vennala and Thammanam families can draw on tutors who come via Vyttila or Palarivattom stations; in Thrikkakara, plan around the temple festival days, when roads near the temple are crowded.',
            ],
        ],
        'Vyttila & Tripunithura' => [
            'guide' => 'kochi-tuition-guide',
            'intro' => [
                'Vyttila and Tripunithura cover the southern approaches to the city: Vyttila, Elamkulam, Maradu and Tripunithura. Vyttila, a panchayat until 1967, is densely residential with towers, houses and villas around one of the largest junctions in Kerala. Elamkulam holds named residential colonies of independent houses, with newer apartments towards the Chilavannur backwater. Maradu, on river islands at the mouth of Vembanad Lake, is led by apartment towers, and Tripunithura, once capital of the Kingdom of Cochin, keeps palaces and older family houses.',
                'Vyttila is Kochi\'s main interchange, where the mobility hub for buses, the Blue Line station and the Water Metro to Kakkanad meet. Flyovers at Vyttila and at Kundannoor junction in Maradu opened in January 2021. The Blue Line runs on through Thaikoodam, opened in 2019, Pettah, opened in 2020, and Vadakkekotta, opened in 2022, to Thrippunithura Terminal, its southern end since March 2024. That gives this zone some of the widest choice of tutors who can arrive by train.',
            ],
            'tips' => [
                'Car trips through the Vyttila and Kundannoor junctions are slow at peak hours, so a tutor who comes by metro and takes a short auto keeps to time more reliably.',
                'In Maradu\'s high-rise complexes, gate registration is standard and visitor parking is usually inside the complex; confirm both with the security desk before the demo.',
                'During the temple festival in Tripunithura\'s old town, shift that week\'s lessons earlier in the day or hold them online, since the centre is crowded.',
            ],
        ],
        'West Kochi & Islands' => [
            'guide' => 'kochi-tuition-guide',
            'intro' => [
                'West Kochi and the islands lie across the harbour: Fort Kochi, Mattancherry, Palluruthy and Vypin. Fort Kochi, where the Portuguese built a fort in 1503, became a municipality in 1866, and its old houses and warehouses are now homes, guest houses and cafes. Mattancherry, long a centre of the spice trade, has close-packed trading streets. Palluruthy takes in Thoppumpady, Perumpadappu, Edakochi, Mundamveli and Kumbalangi, and Vypin is a long barrier island run by six gram panchayats.',
                'There is no metro on this side of the harbour, so boats and bridges set the routes. The High Court Water Metro routes to Fort Kochi and Vypin opened in April 2023, and Mattancherry was added in October 2025 via Willingdon Island. The Goshree bridges, built in 2004, join Vypin to the mainland through Vallarpadam and Mulavukad, and Thoppumpady is the road gateway to Palluruthy. Most families live in independent houses, so the tutor usually comes straight to the door.',
            ],
            'tips' => [
                'Ask first for a tutor who lives on your side of the harbour; for tutors coming from Ernakulam, the Water Metro and a short walk from the jetty is often steadier than the bridges.',
                'In the lanes of Fort Kochi and Mattancherry, parking is scarce and tourist streets fill later in the day, so earlier slots and a tutor on foot or on a two-wheeler work well.',
                'For specialist subjects in the northern villages of Vypin, or around Palluruthy when the bridge approaches are busy, pair a local home tutor with online classes.',
            ],
        ],
    ],
    // Coimbatore (1 Oct 2026), from database/seo-content/areas/coimbatore-zone-guides.json.
    'Coimbatore' => [
        'RS Puram, Race Course & Gandhipuram' => [
            'guide' => 'coimbatore-tuition-guide',
            'intro' => [
                'RS Puram, Tatabad, Saibaba Colony, Race Course and Gandhipuram form the centre of Coimbatore. RS Puram is a grid of straight roads between Mettupalayam Road and Thadagam Road, busy with shops on its main streets and residential on its cross roads. Tatabad runs in eleven numbered streets, Saibaba Colony is mostly independent houses with newer apartment buildings, and Race Course has tree-lined streets of apartments around a popular walking track.',
                'Gandhipuram, once known as Katoor, became a commercial centre after its central bus terminus opened in 1974, and town buses from there reach every part of the city. Rail is close too: Coimbatore Junction, open since 1873, is on the main line, and Coimbatore North Junction in Tatabad serves the Chennai line and the branch to Mettupalayam. Apartments here have a guard at the entrance; houses open straight onto the street.',
            ],
            'tips' => [
                'Book the class soon after school, before the evening shopping crowd fills the main streets of RS Puram and the roads around the Gandhipuram terminus.',
                'Share the road name and door number; in RS Puram and Tatabad\'s numbered streets that is usually enough for a tutor to find the house on the first visit.',
                'A tutor without a vehicle can arrive by town bus to Gandhipuram or by train to Coimbatore North Junction, so mention the nearest stop in your request.',
            ],
        ],
        'Saravanampatti, Ganapathy & Thudiyalur' => [
            'guide' => 'coimbatore-tuition-guide',
            'intro' => [
                'This northern zone follows two roads out of the city. Sathy Road runs through Ganapathy, described as the most densely populated area inside the corporation, and on to Saravanampatti, which has grown quickly around an IT special economic zone and other office parks. Mettupalayam Road leads to Thudiyalur, a settled area of independent houses and plotted layouts. Saravanampatti and Thudiyalur were both panchayat towns until they joined the corporation in 2011.',
                'Housing changes sharply across the zone: narrow streets of houses in Ganapathy, gated apartment complexes and villa communities in Saravanampatti, and houses with their own gates in Thudiyalur. Thudiyalur railway station, reopened in 2017, is served by local MEMU trains between Coimbatore Junction and Mettupalayam. Sathy Road has no railway, and a metro corridor along it has only been proposed, not sanctioned, so buses and two-wheelers carry most tutors.',
            ],
            'tips' => [
                'In Saravanampatti complexes, add the tutor to the visitor app or the gate list before the demo, and ask for a standing entry once the tutor is chosen.',
                'Sathy Road is heaviest when offices open and close, so a class after the evening office rush or on a weekend morning suits many working parents here.',
                'In Thudiyalur, a tutor from the city side can take a MEMU train to Thudiyalur station and walk or take an auto from there; in Ganapathy, add a landmark to the house number.',
            ],
        ],
        'Peelamedu, Kalapatti & Avinashi Road' => [
            'guide' => 'coimbatore-tuition-guide',
            'intro' => [
                'Avinashi Road is Coimbatore\'s main east-west arterial, running from the Uppilipalayam flyover near Grey Town past Peelamedu and the airport to the Neelambur junction on NH 544. Offices, IT parks and hotels line it, with apartments, villas and independent houses on the streets behind. Peelamedu, whose foundation stone was laid in 1711, is a large commercial and educational neighbourhood with every type of home, from plots to villa communities.',
                'Kalapatti, near the airport, was a panchayat town until 2011 and now sits in the corporation\'s east zone; plots and houses still make up most of it, with apartments growing. The elevated expressway on Avinashi Road carries traffic above the road from Uppilipalayam to the Goldwins junction in Peelamedu. Pilamedu railway station is on the main line, and a metro corridor along Avinashi Road has been proposed but is not sanctioned.',
            ],
            'tips' => [
                'For a home just off Avinashi Road, ask for a tutor who lives on the same side of the road, which saves U-turns and waits at the junctions.',
                'Some Kalapatti layouts are spread out and their streets are not widely known, so send the tutor a map pin before the first class.',
                'Office traffic peaks on Avinashi Road in the morning and early evening; a class that begins after the evening rush is easier for tutors coming from the city side.',
            ],
        ],
        'Ramanathapuram, Singanallur & Trichy Road' => [
            'guide' => 'coimbatore-tuition-guide',
            'intro' => [
                'Trichy Road, part of NH 81, leaves the centre near Coimbatore Junction and runs through Ramanathapuram, Singanallur and Ondipudur towards Sulur. Ramanathapuram has been inside the corporation since 1882 and mixes independent houses, apartments and a few villa projects. Sowripalayam, between Trichy Road and the Peelamedu side, grew from a village into a neighbourhood of mid-income apartment buildings put up by local builders, alongside older homes.',
                'Singanallur was a separate municipality until 1982; the Noyyal river runs to its south, and its lake was declared a biodiversity conservation zone in 2013. Ondipudur has been part of the city since 1981 and falls in the east zone. The Singanallur bus terminus serves routes to southern and central Tamil Nadu, and Singanallur railway station, at Neelikonampalayam, lies on the main line between Irugur and Pilamedu.',
            ],
            'tips' => [
                'If you live on the far side of Trichy Road from the city, ask for a tutor from your own side to avoid crossing the busy road at rush hour.',
                'In the smaller apartment buildings of Sowripalayam and Ramanathapuram, tell the watchman the class days so the tutor is let in without delay each week.',
                'The Singanallur junction is among the busiest points on Trichy Road, so start lessons before or after the evening rush rather than during it.',
            ],
        ],
        'Podanur, Kuniyamuthur & Vadavalli' => [
            'guide' => 'coimbatore-tuition-guide',
            'intro' => [
                'This zone wraps round the south and west of the city. Podanur grew around a railway junction opened in 1862, which now serves the main line and the line to Pollachi. Sundarapuram and Kurichi lie along Pollachi Road; Kurichi, north of its lake, became a municipality in 2004 before merging with the city. Selvapuram, on the Noyyal, has been part of Coimbatore since 1866, with Siruvani Road as its main road.',
                'West and south-west, the city meets the Western Ghats. Kuniyamuthur is on the road to Palakkad, where many families build their own houses; Kovaipudur is a township set up in the late 1970s at the foothills; and Vadavalli, on Marudamalai Road, is a former farming village that came into the corporation in 2011. Most homes across the zone are independent houses, and the Ukkadam bus terminus links them with the city.',
            ],
            'tips' => [
                'Most visits here are to houses, so the tutor parks at the gate; for villa communities and the gated part of Kovaipudur, add the tutor to the visitor list first.',
                'Kovaipudur and Vadavalli sit at the edge of the city, so pair a nearby home tutor with online lessons when a specialist subject is needed.',
                'Tutors coming by train can use Podanur Junction and finish by auto; in a big area such as Kurichi, share the street name and a landmark before the first class.',
            ],
        ],
    ],
    // Guwahati (1 Oct 2026), from database/seo-content/areas/guwahati-zone-guides.json.
    'Guwahati' => [
        'Old City & Riverfront' => [
            'guide' => 'guwahati-tuition-guide',
            'intro' => [
                'Pan Bazar, Paltan Bazaar, Uzan Bazar and Ulubari make up the old core of Guwahati on the south bank of the Brahmaputra. Pan Bazar is known for bookshops, printing presses and the medicine trade, with the Dighalipukhuri tank and Kachari Ghat nearby. Uzan Bazar is one of the oldest settlements and holds the historic Rajbari compound, while Ulubari sits between Paltan Bazaar and Bhangagarh where GS Road starts its run south.',
                'Guwahati railway station, the busiest in the city, stands in Paltan Bazaar with the state transport bus terminal at its rear, so this is the easiest zone for a tutor to reach by public transport. Homes are flats above or behind shops, older houses in the lanes and low-rise apartment buildings towards Ulubari. The market streets and the station area stay crowded through the working day, which shapes when a class can start on time.',
            ],
            'tips' => [
                'Share a lane landmark, such as the nearest tank, ghat or shop, and the floor number, because many homes sit above or behind market frontages.',
                'Book an early morning, later evening or weekend slot so the tutor is not caught in office and market hours around the station.',
                'Tutors from across the city can come by train or bus here, so it is worth asking for a subject specialist rather than settling for whoever lives closest.',
            ],
        ],
        'Chandmari & Zoo Road' => [
            'guide' => 'guwahati-tuition-guide',
            'intro' => [
                'Chandmari, Zoo Road, Lachit Nagar and Bhangagarh form a belt east of the old centre. Chandmari is one of the oldest localities, with the city\'s radio centre, many schools and coaching classes, and a playground that has hosted Bohag Bihu every year since 1961. Zoo Road runs from Chandmari to Ganeshguri past the state zoo, and the VIP Road links it with the eastern side of Guwahati.',
                'Lachit Nagar, near Zoo Tiniali and South Sarania, connects GS Road with the Zoo Road side through Rajgarh Road, and Bhangagarh is a busy market locality on GS Road. Housing mixes older independent houses, three-bedroom builder floors and multistorey apartments, with many flats rented by students and small families. Evening coaching fills the roads and the calendar, so home lessons here run most smoothly when the slot is fixed in advance.',
            ],
            'tips' => [
                'Agree a weekday slot that does not clash with your child\'s coaching batch, and keep it the same each week.',
                'In the narrower Lachit Nagar and Chandmari lanes, tell the tutor where a two-wheeler or car can be parked.',
                'Apartment buildings on Zoo Road often keep a visitor register, so give the guard the tutor\'s name before the demo class.',
            ],
        ],
        'GS Road & Dispur' => [
            'guide' => 'guwahati-tuition-guide',
            'intro' => [
                'Dispur has been the capital of Assam since 1973, and Ganeshguri, Rukminigaon, Hatigaon and Kahilipara grew up around its capital complex to form the southern sub-centre of the city. Dispur holds the Secretariat and the Legislative Assembly, with GS Road and the Assam Trunk Road passing through. Ganeshguri is the commercial heart of this side, where Zoo Road ends, and the tea auction centre sits close to the capital complex.',
                'Most families live in apartment buildings with two- and three-bedroom flats, while builder floors, independent houses and some larger villas fill the older lanes of Hatigaon and Kahilipara. Buses from every direction pass through Ganeshguri, which widens the choice of tutors for families on this stretch. Government office hours around the capital complex and the evening rush on GS Road are the two busy windows to plan class timings around.',
            ],
            'tips' => [
                'Avoid office opening and closing times near the capital complex; an after-school slot outside those hours is easier for a visiting tutor.',
                'Pass the building name, flat number and a phone number for the guard to the tutor before the first class.',
                'If your home is a short walk off GS Road, say so: a tutor coming by bus then has an easy last stretch on foot or by auto.',
            ],
        ],
        'Beltola & Khanapara' => [
            'guide' => 'guwahati-tuition-guide',
            'intro' => [
                'Beltola, Survey, Six Mile, Khanapara and Basistha make up the far south of Guwahati, running towards the Meghalaya border. Beltola was a small kingdom that lasted until 1947 and has grown quickly since the 1980s; its twice-weekly Beltola Bazar still meets in the middle of the locality. Six Mile sits on GS Road with a flyover up to the national highway, and Khanapara is a hub for regional road transport.',
                'Basistha, at the southern edge beside the Garbhanga forest, is known for its temple and ashram on the Basistha river, and the national highway passes through Basistha Chariali. Homes range from multistorey apartments and large complexes to traditional houses and plots in quieter lanes. Most tutors arrive by city bus or auto along GS Road or the highway, and Narangi station is an alternative rail point for the Six Mile side.',
            ],
            'tips' => [
                'Keep class times away from Beltola Bazar market days if you live close to it.',
                'For large complexes in Basistha or Khanapara, give the tower and flat number along with the gate you want the tutor to use.',
                'Where a specialist tutor lives far to the north of the city, pair a nearby tutor for school subjects with online classes for the specialist paper.',
            ],
        ],
        'Maligaon, Jalukbari & North Guwahati' => [
            'guide' => 'guwahati-tuition-guide',
            'intro' => [
                'Maligaon, Adabari and Jalukbari form Guwahati\'s western corridor, the main rail and road link out of the city. Maligaon, below the Nilachal hill, is the headquarters of the Northeast Frontier Railway and has Kamakhya Junction, the city\'s second-largest station. Adabari centres on its tiniali, where the Pandu Port Road meets the Assam Trunk Road, and on a bus depot for lower Assam. Jalukbari, on the river, has a large student population.',
                'North Guwahati, on the north bank of the Brahmaputra, is being gradually taken into the city limits. Three bridges now cross the river: the Saraighat bridge of 1962, the New Saraighat bridge of 2017 and the six-lane bridge to North Guwahati, opened in February 2026. South of the river, apartment gates are common; on the north bank, houses and plots are spread out, so tutors from the same side matter most.',
            ],
            'tips' => [
                'On the south bank, tell the tutor whether Kamakhya Junction or a city bus to Adabari Tiniali is the easier way in, and name a precise pick-up point.',
                'In North Guwahati, ask for a tutor who already lives on the north bank and share a clear landmark, since lanes can be hard to find.',
                'Plan around the busy junctions at Jalukbari and Adabari, and around Durga Puja in Maligaon, switching to an online class on those evenings.',
            ],
        ],
    ],
];
