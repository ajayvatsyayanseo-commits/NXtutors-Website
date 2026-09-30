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
                'Getting here can be slow: Gaur Chowk, the junction towards Noida Extension, carries heavy daily traffic while an underpass is built, and residents report stray cattle on some roads. The nearest metro for Sectors 115 and 116 is Noida Sector 76 on the Aqua Line. A tutor who already teaches in the same cluster of sectors is usually the steadiest choice.',
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
                'Metro access is less direct than near Pari Chowk. DELTA 1 is the usual station, with ALPHA 1, Pari Chowk and GNIDA Office serving some pockets, and the last leg is by auto or e-rickshaw. The Surajpur–Kasna road is known for potholes and roadside encroachment, parking is tight in parts of Sector 37, and residents of Pi mention Pari Chowk jams at peak hours, so a tutor on a two-wheeler from nearby is often easiest.',
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
                'Residents like the low traffic but note that public transport is limited and markets are not on the doorstep, and in Eta 2 they mention construction dust and roadside parking. GNIDA Office is the usual metro stop, with Depot and DELTA 1 serving some pockets, and Boraki and Dadri railway stations also serve the area. A tutor coming by metro usually needs an auto for the last leg.',
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
];
