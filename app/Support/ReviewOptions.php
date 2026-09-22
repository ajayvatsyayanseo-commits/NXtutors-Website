<?php

namespace App\Support;

/**
 * The fixed choices on the tutor review form.
 *
 * One list for the form, the validation and the display, so a value can never
 * be accepted by one and unknown to another. Keys are what is stored; labels
 * are what people see.
 */
final class ReviewOptions
{
    public const ROLES = [
        'student' => 'Student',
        'parent' => 'Parent',
    ];

    public const BOARDS = [
        'CBSE' => 'CBSE',
        'ICSE' => 'ICSE',
        'ISC' => 'ISC',
        'IB' => 'IB (DP / MYP)',
        'IGCSE' => 'IGCSE / Cambridge',
        'STATE' => 'State board',
        'JEE' => 'JEE (Main / Advanced)',
        'NEET' => 'NEET',
        'OTHER' => 'Other',
    ];

    public const MODES = [
        'home' => 'Home tuition',
        'online' => 'Online',
        'both' => 'Home and online',
    ];

    public const DURATIONS = [
        'lt1m' => 'Less than a month',
        '1to3m' => '1–3 months',
        '3to6m' => '3–6 months',
        '6to12m' => '6–12 months',
        'gt1y' => 'More than a year',
    ];

    public const CLASSES = [
        '6' => 'Class 6', '7' => 'Class 7', '8' => 'Class 8', '9' => 'Class 9',
        '10' => 'Class 10', '11' => 'Class 11', '12' => 'Class 12',
        'dropper' => 'Dropper / repeater', 'college' => 'College', 'other' => 'Other',
    ];

    public const TAGS = [
        'clear_explanations' => 'Clear explanations',
        'patient' => 'Patient',
        'punctual' => 'Punctual',
        'regular_tests' => 'Regular tests',
        'doubt_solving' => 'Great at doubt solving',
        'improved_marks' => 'Improved my marks',
        'exam_focused' => 'Exam focused',
        'builds_confidence' => 'Builds confidence',
        'parent_updates' => 'Keeps parents updated',
        'strong_concepts' => 'Strong concepts',
        'jee_ready' => 'Great for JEE',
        'neet_ready' => 'Great for NEET',
        'friendly' => 'Friendly',
        'well_prepared' => 'Well prepared',
    ];

    public const MAX_TAGS = 6;

    /** The four scores every review carries, in display order. */
    public const SCORES = [
        'expertise' => 'Expertise',
        'patience' => 'Patience',
        'reliability' => 'Reliability',
        'communication' => 'Communication',
    ];

    public static function label(array $options, ?string $key): ?string
    {
        return $key === null ? null : ($options[$key] ?? null);
    }
}
