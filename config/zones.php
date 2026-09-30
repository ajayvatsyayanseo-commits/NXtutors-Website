<?php

/*
|--------------------------------------------------------------------------
| Zones within a city, for home-tutor matching
|--------------------------------------------------------------------------
|
| Home tutoring is about whether a tutor can reach the house. There are no
| map coordinates on profiles, so areas are grouped into zones and a tutor in
| the same zone ranks just below one in the same area (App\Support\Zones).
|
| Zones are approximate neighbourhood groupings, matched by sector number
| and by name. They are a starting point to correct as the team sees real
| travel patterns, not survey boundaries. Add a city by adding its block.
|
*/

return [
    'Gurugram' => [
        'Golf Course Road' => [
            'sectors' => [27, 28, 42, 43, 52, 53, 54],
            'names' => ['dlf phase', 'golf course road', 'sushant lok 1', 'sushant lok i', 'wazirabad', 'dlf city', 'ardee city'],
        ],
        'MG Road & Cyber City' => [
            'sectors' => [24, 25, 26, 29],
            'names' => ['mg road', 'cyber city', 'cyber hub', 'udyog vihar', 'nathupur', 'sikanderpur', 'dlf qe'],
        ],
        'Central Gurugram' => [
            'sectors' => [30, 31, 32, 33, 38, 39, 40, 41, 44, 45, 46],
            'names' => ['huda city centre', 'south city 1','sushant lok 2', 'sushant lok ii', 'sushant lok 3', 'kanhai', 'jharsa'],
        ],
        'Golf Course Extension Road' => [
            'sectors' => [55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66],
            'names' => ['golf course extension', 'gcer', 'huda plots'],
        ],
        'Sohna Road' => [
            'sectors' => [47, 48, 49, 50, 51, 67, 68, 69, 70, 71, 72],
            'names' => ['sohna road', 'south city 2', 'south city ii', 'nirvana', 'malibu', 'badshahpur', 'vatika city'],
        ],
        'Southern Peripheral Road' => [
            'sectors' => [73, 74, 75, 76, 77, 78, 79, 80],
            'names' => ['southern peripheral', 'spr'],
        ],
        'New Gurugram' => [
            'sectors' => [81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95],
            'names' => ['new gurgaon', 'new gurugram', 'manesar'],
        ],
        'Dwarka Expressway' => [
            'sectors' => [34, 35, 36, 37, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115],
            'names' => ['dwarka expressway', 'sector 37c', 'sector 37d', 'sector 36a'],
        ],
        'Old Gurugram' => [
            'sectors' => range(1, 23),
            'names' => ['palam vihar', 'old gurgaon', 'old gurugram', 'sadar bazar', 'shivaji nagar', 'new colony', 'laxman vihar', 'krishna colony'],
        ],
    ],
    // Noida (30 Sep 2026): from the sector research in database/seo-content/areas/noida-research.json.
    'Noida' => [
        'Old Noida' => [
            'sectors' => [11, 12, 14, 15, 17, 19, 20, 21, 22, 23, 25, 26, 27, 28, 29, 30, 31, 33],
            'names' => ['old noida', 'atta market', 'film city'],
        ],
        'Central Noida' => [
            'sectors' => [34, 35, 36, 37, 39, 40, 41, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53],
            'names' => ['botanical garden', 'city centre', 'central noida'],
        ],
        'Sector 62 Belt' => [
            'sectors' => [55, 56, 61, 62],
            'names' => ['sector 62', 'electronic city'],
        ],
        'Sectors 70–82' => [
            'sectors' => [70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 82],
            'names' => ['nsez'],
        ],
        'Noida Expressway' => [
            'sectors' => [92, 93, 99, 100, 104, 105, 107, 108, 110, 128, 134, 137, 143, 144, 150, 151, 168],
            'names' => ['noida expressway', 'expressway'],
        ],
        'Near Noida Extension' => [
            'sectors' => [115, 116, 117, 118, 119, 120, 121, 122],
            'names' => ['gaur chowk', 'noida extension border'],
        ],
    ],
    // Greater Noida incl. Greater Noida West (30 Sep 2026), from database/seo-content/areas/greater-noida-research.json.
    // Greek-letter sectors are matched by full name ("pi 1", "mu 2"), never bare "pi"/"mu".
    'Greater Noida' => [
        'Greater Noida West' => [
            'sectors' => [1, 2, 3, 4, 10, 12, 16],
            'names' => ['techzone 4', 'gaur city 1', 'gaur city 2', 'shahberi', 'greater noida west', 'noida extension', 'gaur chowk', 'ek murti'],
        ],
        'Alpha–Delta & Pari Chowk' => [
            'sectors' => [],
            'names' => ['alpha 1', 'alpha 2', 'beta 1', 'beta 2', 'gamma 1', 'gamma 2', 'delta 1', 'delta 2', 'delta 3', 'sector p 3', 'sector p 4', 'jagat farm', 'alpha', 'beta', 'gamma', 'delta'],
        ],
        'Omega, Chi & Phi' => [
            'sectors' => [],
            'names' => ['omega 1', 'omega 2', 'chi 2', 'chi 3', 'chi 4', 'chi 5', 'phi 2', 'phi 3', 'pari chowk'],
        ],
        'Pi, Sigma & Sectors 36–37' => [
            'sectors' => [36, 37],
            'names' => ['swarn nagri', 'pi 1', 'pi 2', 'sigma 1', 'sigma 2', 'sigma 3', 'sigma 4', 'kasna'],
        ],
        'Zeta & Eta' => [
            'sectors' => [],
            'names' => ['zeta 1', 'zeta 2', 'eta 1', 'eta 2'],
        ],
        'Omicron, Mu & Xu' => [
            'sectors' => [],
            'names' => ['omicron 1', 'omicron 1a', 'omicron 2', 'omicron 3', 'mu 1', 'mu 2', 'xu 1', 'xu 2', 'xu 3', 'surajpur'],
        ],
    ],
    // Ghaziabad (30 Sep 2026), from database/seo-content/areas/ghaziabad-research.json.
    // Order matters: "raj nagar extension" is matched before "raj nagar".
    'Ghaziabad' => [
        'Indirapuram' => [
            'sectors' => [],
            'names' => ['indirapuram', 'ahinsa khand', 'nyay khand', 'shakti khand', 'gyan khand', 'niti khand', 'abhay khand', 'vaibhav khand', 'kanawani', 'makanpur'],
        ],
        'Vaishali & Kaushambi' => [
            'sectors' => [],
            'names' => ['vaishali', 'kaushambi'],
        ],
        'Vasundhara' => [
            'sectors' => [],
            'names' => ['vasundhara'],
        ],
        'Sahibabad & Rajendra Nagar' => [
            'sectors' => [],
            'names' => ['rajendra nagar', 'shalimar garden', 'sahibabad', 'shyam park', 'pasonda', 'shaheed nagar', 'mohan nagar', 'garima garden', 'arthala', 'karhera'],
        ],
        'Surya Nagar & Ramprastha' => [
            'sectors' => [],
            'names' => ['surya nagar', 'ramprastha', 'brij vihar', 'chander nagar'],
        ],
        'Raj Nagar Extension & NH-9 Corridor' => [
            'sectors' => [],
            'names' => ['raj nagar extension', 'rajnagar extension', 'vijay nagar', 'pratap vihar', 'siddharth vihar', 'crossings republik', 'crossing republik'],
        ],
        'Raj Nagar, Kavi Nagar & Old Ghaziabad' => [
            'sectors' => [],
            'names' => ['raj nagar', 'rajnagar', 'kavi nagar', 'shastri nagar', 'nehru nagar', 'lohia nagar', 'patel nagar', 'sanjay nagar', 'govindpuram', 'nandgram', 'madhuban bapudham', 'ambedkar road'],
        ],
    ],
    // Faridabad (30 Sep 2026), from database/seo-content/areas/faridabad-research.json.
    // Named places first, then HSVP sector numbers ("sector 21c" counts as 21).
    'Faridabad' => [
        'NIT & Old Faridabad' => [
            'sectors' => [],
            'names' => ['nit', 'new industrial township', 'old faridabad', 'jawahar colony', 'dabua colony'],
        ],
        'Central Sectors (Mathura Road)' => [
            'sectors' => [7, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18, 19, 21],
            'names' => [],
        ],
        'Sectors 28–31 & 37' => [
            'sectors' => [28, 29, 30, 31, 37],
            'names' => [],
        ],
        'Surajkund & Sainik Colony' => [
            'sectors' => [43, 45, 46, 48, 49],
            'names' => ['sainik colony', 'charmwood', 'surajkund'],
        ],
        'Ballabhgarh & Southern Sectors' => [
            'sectors' => [2, 3, 4, 5, 22, 23, 55, 56, 57, 62, 64, 65],
            'names' => ['ballabhgarh', 'ballabgarh', 'sanjay colony'],
        ],
        'Greater Faridabad (Sectors 75–80)' => [
            'sectors' => [75, 76, 77, 78, 79, 80],
            'names' => [],
        ],
        'Greater Faridabad (Sectors 81–89)' => [
            'sectors' => [81, 82, 83, 84, 85, 86, 87, 88, 89],
            'names' => ['neharpar', 'greater faridabad'],
        ],
    ],
    // Delhi (30 Sep 2026), from database/seo-content/areas/delhi-research.json.
    'Delhi' => [
        'Dwarka' => [
            'sectors' => [],
            'names' => ['dwarka'],
        ],
        'Vasant Kunj, Vasant Vihar & Palam' => [
            'sectors' => [],
            'names' => ['vasant kunj', 'vasant vihar', 'munirka', 'r k puram', 'palam', 'mahavir enclave', 'dabri', 'sagarpur'],
        ],
        'GK, Defence Colony & Lajpat Nagar' => [
            'sectors' => [],
            'names' => ['greater kailash 1', 'greater kailash 2', 'defence colony', 'lajpat nagar', 'south extension', 'east of kailash', 'pamposh enclave', 'greater kailash', 'gk 1', 'gk 2'],
        ],
        'Saket, Malviya Nagar & Hauz Khas' => [
            'sectors' => [],
            'names' => ['saket', 'malviya nagar', 'hauz khas', 'green park', 'safdarjung enclave', 'sheikh sarai', 'panchsheel park', 'sarvodaya enclave', 'shivalik', 'sainik farm', 'chhatarpur', 'mehrauli'],
        ],
        'Kalkaji, CR Park & Sarita Vihar' => [
            'sectors' => [],
            'names' => ['kalkaji', 'chittaranjan park', 'alaknanda', 'nehru enclave', 'sarita vihar', 'jasola vihar', 'cr park', 'c r park'],
        ],
        'Janakpuri, Rajouri Garden & Punjabi Bagh' => [
            'sectors' => [],
            'names' => ['janakpuri', 'vikaspuri', 'uttam nagar', 'tilak nagar', 'subhash nagar', 'hari nagar', 'rajouri garden', 'punjabi bagh', 'paschim vihar', 'kirti nagar', 'moti nagar', 'naraina vihar'],
        ],
        'Karol Bagh, Patel Nagar & Rajinder Nagar' => [
            'sectors' => [],
            'names' => ['karol bagh', 'old rajinder nagar', 'new rajinder nagar', 'east patel nagar', 'west patel nagar', 'rajinder nagar', 'rajendra nagar', 'patel nagar'],
        ],
        'Lodhi Colony, Jangpura & Nizamuddin' => [
            'sectors' => [],
            'names' => ['lodhi colony', 'jangpura', 'nizamuddin east', 'nizamuddin west', 'nizamuddin'],
        ],
        'Rohini' => [
            'sectors' => [],
            'names' => ['rohini'],
        ],
        'Pitampura, Model Town & North Campus' => [
            'sectors' => [],
            'names' => ['pitampura', 'kohat enclave', 'prashant vihar', 'shalimar bagh', 'ashok vihar', 'model town', 'adarsh nagar', 'gtb nagar', 'mukherjee nagar', 'kamla nagar', 'civil lines', 'north campus', 'kingsway camp'],
        ],
        'Mayur Vihar, Patparganj & IP Extension' => [
            'sectors' => [],
            'names' => ['mayur vihar', 'patparganj', 'ip extension', 'pandav nagar', 'vasundhara enclave', 'mandawali', 'shakarpur'],
        ],
        'Laxmi Nagar, Preet Vihar & Shahdara' => [
            'sectors' => [],
            'names' => ['laxmi nagar', 'preet vihar', 'nirman vihar', 'karkardooma', 'anand vihar', 'vivek vihar', 'surajmal vihar', 'krishna nagar', 'geeta colony', 'shahdara', 'dilshad garden', 'yamuna vihar'],
        ],
    ],
    // Mumbai (1 Oct 2026), from database/seo-content/areas/mumbai-research.json.
    'Mumbai' => [
        'South Mumbai' => [
            'sectors' => [],
            'names' => ['colaba', 'cuffe parade', 'malabar hill', 'breach candy', 'tardeo'],
        ],
        'Worli, Dadar & Central Mumbai' => [
            'sectors' => [],
            'names' => ['worli', 'prabhadevi', 'lower parel', 'parel', 'dadar', 'matunga', 'mahim', 'sion'],
        ],
        'Bandra, Khar & Santacruz' => [
            'sectors' => [],
            'names' => ['bandra west', 'bandra east', 'khar west and east', 'santacruz west', 'santacruz east kalina vakola'],
        ],
        'Vile Parle & Juhu' => [
            'sectors' => [],
            'names' => ['vile parle west', 'vile parle east', 'juhu'],
        ],
        'Andheri & Jogeshwari' => [
            'sectors' => [],
            'names' => ['andheri west', 'versova seven bungalows yari road', 'lokhandwala', 'andheri east', 'jogeshwari west incl oshiwara', 'jogeshwari east', 'oshiwara'],
        ],
        'Goregaon & Malad' => [
            'sectors' => [],
            'names' => ['goregaon west', 'bangur nagar', 'goregaon east', 'malad west', 'malad east'],
        ],
        'Kandivali, Borivali & Dahisar' => [
            'sectors' => [],
            'names' => ['kandivali west', 'charkop', 'mahavir nagar', 'kandivali east', 'thakur village', 'borivali west', 'borivali east', 'dahisar west', 'dahisar east'],
        ],
        'Chembur, Ghatkopar & Powai' => [
            'sectors' => [],
            'names' => ['chembur', 'ghatkopar', 'vikhroli', 'powai', 'kanjurmarg'],
        ],
        'Bhandup & Mulund' => [
            'sectors' => [],
            'names' => ['bhandup', 'mulund'],
        ],
        'Thane' => [
            'sectors' => [],
            'names' => ['naupada', 'thane east kopri', 'vartak nagar', 'majiwada', 'kolshet road', 'manpada', 'ghodbunder road', 'kasarvadavali', 'kopri', 'thane west'],
        ],
        'Navi Mumbai' => [
            'sectors' => [],
            'names' => ['vashi', 'sanpada', 'nerul', 'seawoods', 'cbd belapur', 'kharghar', 'airoli', 'ghansoli', 'kopar khairane', 'panvel', 'navi mumbai'],
        ],
    ],
    // Bengaluru (1 Oct 2026), from database/seo-content/areas/bengaluru-research.json.
    'Bengaluru' => [
        'Koramangala, HSR & Bellandur' => [
            'sectors' => [],
            'names' => ['koramangala', 'hsr layout', 'bellandur', 'sarjapur road'],
        ],
        'Jayanagar, JP Nagar & Banashankari' => [
            'sectors' => [],
            'names' => ['jayanagar', 'basavanagudi', 'jp nagar', 'banashankari', 'kumaraswamy layout', 'kanakapura road'],
        ],
        'BTM, Bannerghatta Road & Electronic City' => [
            'sectors' => [],
            'names' => ['btm layout', 'bannerghatta road', 'arekere', 'bommanahalli', 'begur', 'electronic city'],
        ],
        'Indiranagar & Old Airport Road' => [
            'sectors' => [],
            'names' => ['indiranagar', 'domlur', 'cv raman nagar', 'old airport road'],
        ],
        'Whitefield, Marathahalli & KR Puram' => [
            'sectors' => [],
            'names' => ['whitefield', 'marathahalli', 'kr puram', 'mahadevapura', 'brookefield'],
        ],
        'Hennur, Kalyan Nagar & Banaswadi' => [
            'sectors' => [],
            'names' => ['hennur', 'kalyan nagar', 'hrbr layout', 'banaswadi', 'thanisandra'],
        ],
        'Hebbal, RT Nagar & Yelahanka' => [
            'sectors' => [],
            'names' => ['hebbal', 'rt nagar', 'yelahanka'],
        ],
        'Malleshwaram, Rajajinagar & Yeshwanthpur' => [
            'sectors' => [],
            'names' => ['malleshwaram', 'sadashivanagar', 'rajajinagar', 'mahalakshmi layout', 'yeshwanthpur'],
        ],
        'Vijayanagar, RR Nagar & Kengeri' => [
            'sectors' => [],
            'names' => ['basaveshwaranagar', 'vijayanagar', 'nagarbhavi', 'rr nagar rajarajeshwari nagar', 'kengeri', 'rajarajeshwari nagar'],
        ],
        'Frazer Town, Richmond Town & Ulsoor' => [
            'sectors' => [],
            'names' => ['frazer town', 'cooke town', 'richmond town', 'ulsoor halasuru'],
        ],
    ],
    // Hyderabad (1 Oct 2026), from database/seo-content/areas/hyderabad-research.json.
    'Hyderabad' => [
        'Gachibowli, Kondapur & Madhapur' => [
            'sectors' => [],
            'names' => ['gachibowli', 'kondapur', 'madhapur', 'nanakramguda', 'hitec city', 'financial district'],
        ],
        'Kukatpally, Miyapur & Nizampet' => [
            'sectors' => [],
            'names' => ['kukatpally', 'kphb colony', 'miyapur', 'nizampet', 'bachupally'],
        ],
        'Manikonda, Narsingi & Kokapet' => [
            'sectors' => [],
            'names' => ['manikonda', 'khajaguda', 'narsingi', 'kokapet'],
        ],
        'Chandanagar, Lingampally & Tellapur' => [
            'sectors' => [],
            'names' => ['chandanagar', 'hafeezpet', 'serilingampally lingampally', 'tellapur', 'lingampally', 'lingampalli'],
        ],
        'Banjara Hills, Jubilee Hills & Somajiguda' => [
            'sectors' => [],
            'names' => ['jubilee hills', 'banjara hills', 'film nagar', 'somajiguda'],
        ],
        'Ameerpet, Begumpet & Punjagutta' => [
            'sectors' => [],
            'names' => ['ameerpet', 'begumpet', 'punjagutta'],
        ],
        'Khairatabad, Himayatnagar & Abids' => [
            'sectors' => [],
            'names' => ['khairatabad', 'himayatnagar', 'abids'],
        ],
        'Secunderabad, Marredpally & Tarnaka' => [
            'sectors' => [],
            'names' => ['secunderabad', 'marredpally', 'tarnaka', 'malkajgiri'],
        ],
        'Sainikpuri, Alwal & Trimulgherry' => [
            'sectors' => [],
            'names' => ['sainikpuri', 'alwal', 'trimulgherry', 'bowenpally'],
        ],
        'Uppal, Habsiguda & Nacharam' => [
            'sectors' => [],
            'names' => ['uppal', 'habsiguda', 'nacharam', 'ramanthapur', 'boduppal', 'nagole'],
        ],
        'Dilsukhnagar, LB Nagar & Vanasthalipuram' => [
            'sectors' => [],
            'names' => ['dilsukhnagar', 'lb nagar', 'kothapet', 'vanasthalipuram', 'saroornagar', 'malakpet', 'chaitanyapuri'],
        ],
        'Mehdipatnam, Tolichowki & Attapur' => [
            'sectors' => [],
            'names' => ['mehdipatnam', 'tolichowki', 'attapur', 'rajendranagar'],
        ],
    ],
    // Pune (1 Oct 2026), from database/seo-content/areas/pune-research.json.
    'Pune' => [
        'Kothrud, Karve Nagar & Deccan' => [
            'sectors' => [],
            'names' => ['kothrud', 'karve nagar', 'erandwane', 'deccan gymkhana', 'shivajinagar', 'model colony', 'warje', 'prabhat road', 'deccan'],
        ],
        'Aundh, Baner & Pashan' => [
            'sectors' => [],
            'names' => ['bavdhan', 'aundh', 'baner', 'balewadi', 'pashan', 'sus'],
        ],
        'Wakad, Hinjewadi & Pimpri-Chinchwad' => [
            'sectors' => [],
            'names' => ['wakad', 'hinjewadi', 'pimple saudagar', 'pimple nilakh', 'pimpri', 'chinchwad', 'nigdi and pradhikaran', 'pimpri chinchwad', 'pcmc', 'pradhikaran', 'akurdi'],
        ],
        'Viman Nagar, Kalyani Nagar & Kharadi' => [
            'sectors' => [],
            'names' => ['viman nagar', 'kalyani nagar', 'kharadi', 'wagholi', 'yerawada', 'vadgaon sheri'],
        ],
        'Koregaon Park, Camp & Wanowrie' => [
            'sectors' => [],
            'names' => ['koregaon park', 'camp', 'wanowrie', 'salunke vihar'],
        ],
        'Hadapsar, Kondhwa & NIBM' => [
            'sectors' => [],
            'names' => ['hadapsar', 'magarpatta', 'kondhwa', 'nibm road', 'undri'],
        ],
        'Katraj, Bibwewadi & Sinhagad Road' => [
            'sectors' => [],
            'names' => ['katraj', 'bibwewadi', 'dhankawadi', 'sinhagad road'],
        ],
    ],
    // Indore (1 Oct 2026), from database/seo-content/areas/indore-research.json.
    'Indore' => [
        'Vijay Nagar & AB Road' => [
            'sectors' => [],
            'names' => ['vijay nagar', 'scheme no 54', 'scheme no 74', 'scheme no 78', 'scheme no 114', 'sukhliya', 'super corridor'],
        ],
        'Palasia & Central Indore' => [
            'sectors' => [],
            'names' => ['old palasia', 'new palasia', 'race course road', 'manorama ganj', 'geeta bhawan', 'lig colony', 'saket nagar', 'tilak nagar'],
        ],
        'Nipania, Bicholi & Ring Road' => [
            'sectors' => [],
            'names' => ['nipania', 'mahalaxmi nagar', 'bicholi mardana', 'scheme no 140', 'pipliyahana', 'scheme no 94', 'khajrana', 'kanadia road'],
        ],
        'Bhawarkua, Rajendra Nagar & Rau' => [
            'sectors' => [],
            'names' => ['bhawarkua', 'sapna sangeeta road', 'navlakha', 'sudama nagar', 'rajendra nagar', 'bijalpur', 'rau', 'silicon city'],
        ],
    ],
    // Chandigarh (1 Oct 2026), from database/seo-content/areas/chandigarh-research.json.
    'Chandigarh' => [
        'Panchkula & Zirakpur' => [
            'sectors' => [],
            'names' => ['panchkula', 'mansa devi complex panchkula', 'zirakpur'],
        ],
        'Chandigarh Sectors 1–30' => [
            'sectors' => [],
            'names' => ['sector 8', 'sector 9', 'sector 10', 'sector 11', 'sector 15', 'sector 16', 'sector 18', 'sector 19', 'sector 21', 'sector 22', 'sector 27'],
        ],
        'Chandigarh Sectors 31–56 & Manimajra' => [
            'sectors' => [],
            'names' => ['sector 33', 'sector 35', 'sector 36', 'sector 38', 'sector 40', 'sector 44', 'sector 46', 'sector 49', 'manimajra'],
        ],
        'Mohali' => [
            'sectors' => [],
            'names' => ['mohali', 'aerocity mohali', 'sas nagar'],
        ],
    ],
    // Jaipur (1 Oct 2026), from database/seo-content/areas/jaipur-research.json.
    'Jaipur' => [
        'C-Scheme, Bani Park & Vidhyadhar Nagar' => [
            'sectors' => [],
            'names' => ['c scheme', 'civil lines', 'bani park', 'shastri nagar', 'vidhyadhar nagar', 'jhotwara', 'sikar road'],
        ],
        'Raja Park, Jawahar Nagar & Bapu Nagar' => [
            'sectors' => [],
            'names' => ['raja park', 'jawahar nagar', 'adarsh nagar', 'tilak nagar', 'bapu nagar', 'bajaj nagar'],
        ],
        'Vaishali Nagar & West Jaipur' => [
            'sectors' => [],
            'names' => ['vaishali nagar', 'chitrakoot', 'nirman nagar', 'shyam nagar', 'sodala', 'ajmer road'],
        ],
        'Mansarovar & Sanganer' => [
            'sectors' => [],
            'names' => ['mansarovar', 'gopalpura bypass', 'sanganer', 'pratap nagar'],
        ],
        'Malviya Nagar, Jagatpura & Tonk Road' => [
            'sectors' => [],
            'names' => ['malviya nagar', 'jagatpura', 'tonk road', 'durgapura'],
        ],
    ],
    // Lucknow (1 Oct 2026), from database/seo-content/areas/lucknow-research.json.
    'Lucknow' => [
        'Gomti Nagar, Indira Nagar & Chinhat' => [
            'sectors' => [],
            'names' => ['gomti nagar', 'gomti nagar extension', 'indira nagar', 'chinhat'],
        ],
        'Mahanagar, Aliganj & Jankipuram' => [
            'sectors' => [],
            'names' => ['mahanagar', 'nishatganj', 'nirala nagar', 'kapoorthala', 'aliganj', 'vikas nagar', 'jankipuram', 'jankipuram extension jankipuram vistar', 'jankipuram vistar'],
        ],
        'Hazratganj, Lalbagh & Aminabad' => [
            'sectors' => [],
            'names' => ['hazratganj', 'lalbagh', 'aminabad', 'aishbagh', 'chowk', 'rajendra nagar'],
        ],
        'Alambagh, Ashiyana & Rajajipuram' => [
            'sectors' => [],
            'names' => ['alambagh', 'ashiyana', 'rajajipuram', 'lda colony kanpur road scheme', 'krishna nagar', 'sarojini nagar'],
        ],
        'Sushant Golf City, Vrindavan Yojana & Telibagh' => [
            'sectors' => [],
            'names' => ['sushant golf city', 'vrindavan yojana', 'telibagh'],
        ],
    ],
    // Chennai (1 Oct 2026), from database/seo-content/areas/chennai-research.json.
    'Chennai' => [
        'Adyar, Besant Nagar & Mylapore' => [
            'sectors' => [],
            'names' => ['adyar', 'besant nagar', 'thiruvanmiyur', 'mylapore', 'alwarpet'],
        ],
        'T Nagar, Nungambakkam & Kodambakkam' => [
            'sectors' => [],
            'names' => ['t nagar', 'nungambakkam', 'kodambakkam', 'west mambalam', 'saidapet'],
        ],
        'Velachery, Guindy & Tambaram' => [
            'sectors' => [],
            'names' => ['guindy', 'velachery', 'madipakkam', 'nanganallur', 'pallikaranai', 'medavakkam', 'chromepet', 'tambaram'],
        ],
        'OMR & ECR' => [
            'sectors' => [],
            'names' => ['perungudi', 'thoraipakkam', 'sholinganallur', 'navalur', 'kelambakkam', 'neelankarai', 'omr', 'ecr', 'karapakkam'],
        ],
        'Anna Nagar, Kilpauk & Aminjikarai' => [
            'sectors' => [],
            'names' => ['anna nagar', 'anna nagar west', 'shenoy nagar', 'kilpauk', 'aminjikarai', 'arumbakkam', 'purasawalkam'],
        ],
        'Vadapalani, KK Nagar & Porur' => [
            'sectors' => [],
            'names' => ['vadapalani', 'kk nagar', 'ashok nagar', 'virugambakkam', 'valasaravakkam', 'porur'],
        ],
        'Mogappair, Ambattur & Avadi' => [
            'sectors' => [],
            'names' => ['mogappair', 'ambattur', 'avadi'],
        ],
        'Perambur, Kolathur & North Chennai' => [
            'sectors' => [],
            'names' => ['perambur', 'villivakkam', 'kolathur', 'royapuram', 'tondiarpet'],
        ],
    ],
    // Ahmedabad (1 Oct 2026), from database/seo-content/areas/ahmedabad-research.json.
    'Ahmedabad' => [
        'Navrangpura, Paldi & Ellisbridge' => [
            'sectors' => [],
            'names' => ['navrangpura', 'ellisbridge', 'paldi', 'ambawadi', 'vasna'],
        ],
        'Satellite, Vastrapur & Bodakdev' => [
            'sectors' => [],
            'names' => ['satellite', 'jodhpur', 'vastrapur', 'bodakdev', 'thaltej', 'memnagar'],
        ],
        'Prahlad Nagar, Bopal & Shela' => [
            'sectors' => [],
            'names' => ['prahlad nagar', 'bopal', 'south bopal', 'shela'],
        ],
        'Naranpura, Gota & Chandkheda' => [
            'sectors' => [],
            'names' => ['naranpura', 'ghatlodia', 'gota', 'chandkheda', 'sabarmati'],
        ],
        'Maninagar, Isanpur & Kankaria' => [
            'sectors' => [],
            'names' => ['maninagar', 'kankaria', 'khokhra', 'isanpur', 'ghodasar'],
        ],
        'Nikol, Naroda & Bapunagar' => [
            'sectors' => [],
            'names' => ['nikol', 'naroda', 'bapunagar', 'vastral', 'odhav', 'amraiwadi'],
        ],
        'Shahibaug, Asarwa & Meghaninagar' => [
            'sectors' => [],
            'names' => ['shahibaug', 'asarwa', 'meghaninagar'],
        ],
    ],
    // Kolkata (1 Oct 2026), from database/seo-content/areas/kolkata-research.json.
    'Kolkata' => [
        'Behala & New Alipore' => [
            'sectors' => [],
            'names' => ['behala', 'new alipore', 'thakurpukur'],
        ],
        'Ballygunge, Gariahat & Alipore' => [
            'sectors' => [],
            'names' => ['ballygunge', 'bhowanipore', 'kalighat', 'alipore', 'dhakuria', 'jodhpur park', 'lake gardens', 'gariahat', 'elgin'],
        ],
        'Tollygunge, Jadavpur & Garia' => [
            'sectors' => [],
            'names' => ['tollygunge', 'golf green', 'regent park', 'jadavpur', 'bansdroni', 'naktala', 'baghajatin', 'garia'],
        ],
        'Kasba & EM Bypass South' => [
            'sectors' => [],
            'names' => ['kasba', 'santoshpur', 'mukundapur', 'patuli'],
        ],
        'Salt Lake' => [
            'sectors' => [],
            'names' => ['salt lake', 'bidhannagar'],
        ],
        'New Town & Rajarhat' => [
            'sectors' => [],
            'names' => ['new town action area i', 'new town action area ii', 'new town action area iii', 'rajarhat chinar park teghoria', 'new town', 'newtown'],
        ],
        'Lake Town, Dum Dum & Baguiati' => [
            'sectors' => [],
            'names' => ['lake town', 'bangur avenue', 'kestopur', 'baguiati', 'dum dum incl nagerbazar'],
        ],
        'North Kolkata' => [
            'sectors' => [],
            'names' => ['shyambazar', 'bagbazar', 'sovabazar', 'maniktala', 'belgachia', 'sinthee'],
        ],
        'Howrah' => [
            'sectors' => [],
            'names' => ['shibpur', 'salkia', 'santragachi', 'howrah'],
        ],
    ],
    // Bhopal (1 Oct 2026), from database/seo-content/areas/bhopal-research.json.
    'Bhopal' => [
        'Arera Colony, Shahpura & Kolar Road' => [
            'sectors' => [],
            'names' => ['arera colony', 'shahpura', 'kolar road', 'chuna bhatti', 'bawadiya kalan'],
        ],
        'MP Nagar, TT Nagar & Shivaji Nagar' => [
            'sectors' => [],
            'names' => ['mp nagar', 'tt nagar', 'shivaji nagar', 'tulsi nagar', 'jahangirabad'],
        ],
        'Hoshangabad Road, Misrod & Katara Hills' => [
            'sectors' => [],
            'names' => ['hoshangabad road', 'misrod', 'katara hills', 'bagmugaliya'],
        ],
        'BHEL, Awadhpuri & Ayodhya Bypass' => [
            'sectors' => [],
            'names' => ['piplani', 'govindpura', 'indrapuri', 'awadhpuri', 'ayodhya bypass', 'saket nagar', 'bhel'],
        ],
        'Old City, Lalghati & Bairagarh' => [
            'sectors' => [],
            'names' => ['old city', 'idgah hills', 'kohefiza', 'lalghati', 'bairagarh'],
        ],
    ],
    // Patna (1 Oct 2026), from database/seo-content/areas/patna-research.json.
    'Patna' => [
        'Boring Road & Patliputra' => [
            'sectors' => [],
            'names' => ['boring road', 'sri krishna puri', 'boring canal road', 'kidwaipuri', 'patliputra colony', 'digha', 'shastri nagar', 'shivpuri'],
        ],
        'Bailey Road & Danapur' => [
            'sectors' => [],
            'names' => ['bailey road', 'raja bazar', 'rukanpura', 'saguna more', 'danapur', 'khagaul'],
        ],
        'Kankarbagh & Rajendra Nagar' => [
            'sectors' => [],
            'names' => ['kankarbagh', 'rajendra nagar', 'kadamkuan', 'bhootnath road'],
        ],
        'Gandhi Maidan, Ashok Rajpath & Old Patna' => [
            'sectors' => [],
            'names' => ['bankipur and gandhi maidan', 'ashok rajpath', 'patna city old city', 'gandhi maidan', 'bankipore'],
        ],
        'Anisabad, Gardanibagh & Phulwari' => [
            'sectors' => [],
            'names' => ['anisabad', 'gardanibagh', 'phulwari sharif'],
        ],
    ],
];
