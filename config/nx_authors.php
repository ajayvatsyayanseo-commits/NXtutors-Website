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
        'names' => ['ajay vatsyayan', 'ajay vatsyan', 'ajay'],
        'role' => 'Maths tutor · IB, IGCSE and ISC specialist',
        'subjects' => ['Mathematics'],
    ],
    'abhinandan' => [
        'user_id' => 'NXT-2026-W7PBUU',
        'name' => 'Abhinandan Tiwary',
        'names' => ['abhinandan tiwary', 'abhinandan tiwari', 'abhinandan'],
        'role' => 'Maths tutor · Class 10 CBSE and ICSE specialist',
        'subjects' => ['Mathematics'],
    ],
    // Pages without a named tutor are credited to the team.
    'nxtutors' => [
        'user_id' => null,
        'name' => 'NXTutors Academic Team',
        'names' => ['nxtutors', 'nxtutors academic team', 'nxtutors team'],
        'role' => 'Subject tutors and editors at NXTutors, Gurugram',
        'subjects' => ['Mathematics', 'Science', 'Physics', 'Chemistry'],
    ],
    'aaditya' => [
        'user_id' => 'NXT-2026-3FULEA',
        'name' => 'Aaditya Kashyap',
        'names' => ['aaditya kashyap', 'aditya kashyap', 'aaditya'],
        'role' => 'Science tutor · CBSE and ICSE',
        'subjects' => ['Science', 'Chemistry'],
    ],
];
