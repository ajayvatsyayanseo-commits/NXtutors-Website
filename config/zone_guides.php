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
];
