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
];
