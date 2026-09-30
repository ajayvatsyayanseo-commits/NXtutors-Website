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
];
