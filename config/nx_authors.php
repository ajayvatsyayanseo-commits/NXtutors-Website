<?php

/*
|--------------------------------------------------------------------------
| Named authors for subject pages and blog posts
|--------------------------------------------------------------------------
|
| Each author is a real tutor on NXTutors. Their photo, qualification and
| experience are read live from their tutor profile (register.user_id), so
| editing the profile updates every page they sign. What lives here is only
| what the profile cannot say: the specialism the owner assigned them.
|
| `names` are the spellings used in the blog "author" field, so a post by
| "Abhinandan Tiwary" gets his author box.
*/

return [
    'ajay' => [
        'user_id' => '1997',
        'name' => 'Ajay Vatsyayan',
        'slug' => 'ajay-vatsyayan',
        'page_title' => 'Ajay Vatsyayan – IB, IGCSE & ISC Maths Tutor | NXTutors',
        'bio' => 'Ajay Vatsyayan teaches maths on NXTutors and specialises in the international and senior boards: IB Diploma Mathematics (Analysis and Approaches and Applications and Interpretation, SL and HL), Cambridge and Edexcel IGCSE Mathematics, and ISC Mathematics for Classes 11 and 12. He writes and reviews our guides for these boards and for senior-school maths.',
        'knows' => ['IB Mathematics: Analysis and Approaches', 'IB Mathematics: Applications and Interpretation', 'IGCSE Mathematics', 'ISC Mathematics', 'Class 11 and 12 Mathematics', 'Calculus'],
        'names' => ['ajay vatsyayan', 'ajay vatsyan', 'ajay'],
        'role' => 'Maths tutor · IB, IGCSE and ISC specialist',
        'subjects' => ['Mathematics'],
    ],
    'abhinandan' => [
        'user_id' => 'NXT-2026-W7PBUU',
        'name' => 'Abhinandan Tiwary',
        'slug' => 'abhinandan-tiwary',
        'page_title' => 'Abhinandan Tiwary – Class 10 CBSE & ICSE Maths Tutor | NXTutors',
        'bio' => 'Abhinandan Tiwary teaches maths on NXTutors and specialises in Class 10 CBSE and ICSE maths, along with the middle-school years that lead up to it. He writes and reviews our guides for Classes 5 to 10.',
        'knows' => ['CBSE Class 10 Mathematics', 'ICSE Class 10 Mathematics', 'Middle-school Mathematics', 'Board exam preparation'],
        'names' => ['abhinandan tiwary', 'abhinandan tiwari', 'abhinandan'],
        'role' => 'Maths tutor · Class 10 CBSE and ICSE specialist',
        'subjects' => ['Mathematics'],
    ],
    // Pages without a named tutor are credited to the team.
    'nxtutors' => [
        'user_id' => null,
        'name' => 'NXTutors Academic Team',
        'slug' => 'nxtutors-academic-team',
        'page_title' => 'NXTutors Academic Team – Subject Tutors & Editors | NXTutors',
        'bio' => 'Guides without a single named author are written and reviewed by the NXTutors academic team: subject tutors and editors who check every syllabus, weightage and exam fact against the published documents of each board.',
        'knows' => ['Physics', 'Chemistry', 'NEET', 'JEE', 'CBSE', 'ICSE', 'IB', 'IGCSE'],
        'names' => ['nxtutors', 'nxtutors academic team', 'nxtutors team'],
        'role' => 'Subject tutors and editors at NXTutors',
        'subjects' => ['Mathematics', 'Science', 'Physics', 'Chemistry'],
    ],
    'aaditya' => [
        'user_id' => 'NXT-2026-3FULEA',
        'name' => 'Aaditya Kashyap',
        'slug' => 'aaditya-kashyap',
        'page_title' => 'Aaditya Kashyap – CBSE & ICSE Science Tutor | NXTutors',
        'bio' => 'Aaditya Kashyap teaches science on NXTutors for the CBSE and ICSE boards, from Class 6 up to the Class 10 board exam. He writes and reviews our science guides.',
        'knows' => ['CBSE Science', 'ICSE Physics, Chemistry and Biology', 'Class 10 Science', 'Middle-school Science'],
        'names' => ['aaditya kashyap', 'aditya kashyap', 'aaditya'],
        'role' => 'Science tutor · CBSE and ICSE',
        'subjects' => ['Science', 'Chemistry'],
    ],
];
