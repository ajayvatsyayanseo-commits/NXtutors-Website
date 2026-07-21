<?php

declare(strict_types=1);

/*
 * Standalone (no-DB) test for class-range tutor matching. Run:
 *   php packages/nxtutors/demo-command-center-adapter/tests/class_range_match_test.php
 *
 * Regression guard: the agent requests "Class 7", but teacher_courses stores
 * grade ranges like "6-12". Normalized-string equality ("7" === "6") always
 * failed, filtering out every real tutor. This exercises the full private
 * coursesFor() + matchesCourseFilters() path (incl. reading for_class).
 */

require __DIR__ . '/../app/Legacy/LegacySchema.php';
require __DIR__ . '/../app/Legacy/TutorProjectionRepository.php';

use NxTutors\DemoCommandCenterAdapter\Legacy\LegacySchema;
use NxTutors\DemoCommandCenterAdapter\Legacy\TutorProjectionRepository;

$repo = new TutorProjectionRepository(new LegacySchema());
$ref = new ReflectionClass($repo);
$coursesFor = $ref->getMethod('coursesFor');
$coursesFor->setAccessible(true);
$matches = $ref->getMethod('matchesCourseFilters');
$matches->setAccessible(true);

// Real row shape from the production dump (teacher_courses, tutor 2915).
$register = ['id' => '999', 'user_id' => '2915'];
$courseRow = [
    '_source' => 'teacher_courses', 'id' => 1, 'user_id' => '2915',
    'subject' => 'Maths', 'board' => 'CBSC', 'for_class' => '6-12',
    'class_type' => 'Home', 'mode' => 'Tutoring', 'status' => 't',
];
$courses = $coursesFor->invoke($repo, $register, [$courseRow]);

$fail = 0;
$check = static function (bool $c, string $l) use (&$fail): void {
    echo ($c ? '  ok  ' : '  FAIL ') . "$l\n";
    $fail += $c ? 0 : 1;
};

$check(in_array('6-12', $courses[0]['classes'], true), 'for_class "6-12" is read into course classes');
$check($matches->invoke($repo, $courses, ['subject' => 'Mathematics', 'class' => 'Class 7']) === true,
    'Class 7 matches range "6-12" (screenshot lead)');
$check($matches->invoke($repo, $courses, ['class' => 'Class 12']) === true, 'Class 12 matches upper bound of "6-12"');
$check($matches->invoke($repo, $courses, ['class' => 'Class 6']) === true, 'Class 6 matches lower bound of "6-12"');
$check($matches->invoke($repo, $courses, ['class' => 'Class 3']) === false, 'Class 3 correctly excluded (below 6-12)');
$check($matches->invoke($repo, $courses, ['class' => 'Class 13']) === false, 'Class 13 correctly excluded (above 6-12)');

// Single-grade stored value still works.
$single = $coursesFor->invoke($repo, $register, [array_merge($courseRow, ['for_class' => '10'])]);
$check($matches->invoke($repo, $single, ['class' => 'Class 10']) === true, 'Class 10 matches single grade "10"');
$check($matches->invoke($repo, $single, ['class' => 'Class 7']) === false, 'Class 7 does not match single grade "10"');

echo $fail === 0 ? "\nALL PASSED\n" : "\n$fail FAILED\n";
exit($fail === 0 ? 0 : 1);
