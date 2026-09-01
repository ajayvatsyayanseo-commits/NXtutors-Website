<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Support\Collection;

/**
 * Editorial copy for the "What we teach" cards.
 *
 * WHY THIS EXISTS
 * The category table carries titles and a parent/child tree and nothing else —
 * every `cdesc` is empty. Copy built purely from that produced 37-word cards
 * that all said the same sentence, which is thin content: near-duplicate blocks
 * repeated 24 times is the shape Google discounts, not rewards.
 *
 * So this class writes real copy, chosen by what a category IS (a board, a class
 * level, an entrance exam, a language, and so on). Every line is a general truth
 * about that subject plus the service NXTutors actually sells — one-to-one
 * tutoring, at home or online, background-verified tutors, a free demo class.
 * Nothing here asserts a number, a price, a result or a guarantee, because none
 * of that can be verified from the data.
 *
 * PRECEDENCE
 * An admin-written `cdesc` always wins over anything in this file. Filling
 * `cdesc` in the admin is the better long-term answer; this is the floor, not
 * the ceiling.
 */
final class SubjectCopy
{
    /**
     * Body copy for one card, as paragraphs.
     *
     * @param  Collection<int,string>  $subjects  de-duplicated child subject names
     * @return array<int,string>
     */
    public static function paragraphs(string $title, ?string $parent, Collection $subjects): array
    {
        $type = self::classify($title, $parent);
        $named = $subjects->take(4)->implode(', ');

        return array_values(array_filter(match ($type) {
            'board' => [
                "{$title} tuition on NXTutors follows the board's own syllabus and marking scheme, "
                    ."so lessons match what the school is teaching rather than running beside it.",
                'Tutors work through the prescribed textbook chapter by chapter, set practice from '
                    .'past papers and sample papers, and use the wording the examiner expects. Weak '
                    .'chapters get revisited before the next unit test instead of being carried forward.',
                'Answer writing gets its own attention, because marks are lost on presentation as often ' 
                    .'as on understanding: structure, steps shown, diagrams labelled and the keywords the ' 
                    .'marking scheme rewards.',
                'Sessions are one-to-one, at home or online, so the pace follows one student rather '
                    .'than a class average. Book a free demo class to see the teaching style before you decide.',
            ],
            'class' => [
                "{$title} tutoring is pitched at the level the student is actually at, which is not "
                    .'always the level the syllabus assumes.',
                'The tutor starts by finding the gaps left from earlier years, closes those, and only '
                    .'then moves on to the current chapters. Homework support, revision before school '
                    .'exams and steady practice keep the improvement measurable rather than felt.',
                'Parents get told what was covered and what still needs work, so progress is visible '
                    .'between report cards rather than only on them.',
                'Available for CBSE, ICSE and other boards, one-to-one at home or online, at times that '
                    .'fit around school. The first demo class is free, so you can judge the teaching before '
                    .'committing to anything.',
            ],
            'exam' => [
                "{$title} preparation is built around the exam pattern: the syllabus it draws from, "
                    .'the question types it favours and the time pressure it applies.',
                'Tutors cover the concepts, then drill application through previous years\' papers and '
                    .'timed mock tests, reviewing every attempt so mistakes turn into corrections '
                    .'instead of repeating. Board study and exam study run together rather than competing.',
                'Because the tutor works with one student, the plan is rebuilt around whatever the last ' 
                    .'mock exposed rather than following a fixed batch schedule. Topics already secure are ' 
                    .'left alone; the ones costing marks get the time.',
                'One-to-one coaching at home or online, matched to the student\'s target exam and current '
                    .'level. The first demo class is free.',
            ],
            'exam_parent' => [
                'Entrance exam coaching on NXTutors covers the competitive papers students sit alongside '
                    .'their board exams'.($named ? ", including {$named}" : '').'.',
                'Each is prepared on its own pattern — syllabus, question types and time limits differ, '
                    .'and a plan that works for one wastes effort on another. Tutors teach the concepts, '
                    .'then build speed and accuracy through past papers and timed mocks, reviewing every '
                    .'attempt so the same mistake is not repeated.',
                'Which papers a student should sit is part of the conversation too, because spreading ' 
                    .'effort across every exam on offer usually costs more marks than it wins.',
                'One-to-one at home or online, scheduled around school and coaching commitments, starting '
                    .'with a free demo class.',
            ],
            'academic_parent' => [
                'School tutoring on NXTutors spans the boards and class levels students actually study'
                    .($named ? ", including {$named}" : '').'.',
                'Lessons follow the school\'s own syllabus and exam calendar: the tutor covers current '
                    .'chapters, repairs gaps left from earlier years, and revises ahead of unit tests and '
                    .'finals. Because teaching is one-to-one, the pace follows the student instead of a '
                    .'class average, and a chapter that has not landed gets taught again rather than left behind.',
                'Tutors are background-verified and teach at home or online across India. Every match '
                    .'starts with a free demo class.',
            ],
            'language' => [
                "{$title} on NXTutors are taught for use, not just for marks — speaking and listening "
                    .'get the same attention as grammar and vocabulary.',
                'Lessons are one-to-one, which is what a language most needs: the student speaks for most '
                    .'of the session instead of waiting a turn in a class of thirty. Tutors correct '
                    .'pronunciation as it happens and build up to the reading, writing and conversation '
                    .'a proficiency exam or a move abroad will ask for.',
                'Vocabulary is built around what the learner will actually need to say, and the tutor ' 
                    .'keeps the session in the target language as soon as the student can hold it, which is ' 
                    .'where fluency starts rather than ends.',
                'Beginners and exam candidates are both taken from where they are. Book a free demo class '
                    .'to check the fit.',
            ],
            'study_abroad' => [
                "{$title} on NXTutors covers the language and admissions tests universities ask for"
                    .($named ? ", including {$named}" : '').'.',
                'Preparation is section by section against the real test format, with timed practice and '
                    .'a review of every attempt, so the score improves where it is actually being lost. '
                    .'Tutors also work on the academic English the course itself will demand, not only the '
                    .'test.',
                'Tutors set a realistic target band or score from a first assessment, then work backwards '
                    .'from the deadline so preparation is paced rather than crammed.',
                'One-to-one at home or online, planned around application dates and school commitments. '
                    .'The first demo class is free.',
            ],
            'it' => [
                "{$title} on NXTutors is taught hands-on: the student writes code and builds something, "
                    .'rather than watching slides.',
                'Tutors start from the fundamentals — syntax, logic and problem-solving — then move to '
                    .'projects that make those concepts stick. Sessions suit school and college students '
                    .'taking computer science, and working professionals reskilling, because the plan is '
                    .'built per learner rather than run as a fixed batch.',
                'Code is written during the session with the tutor watching, so mistakes are caught as ' 
                    .'they happen and debugging becomes a skill rather than a frustration. Each project is ' 
                    .'chosen to be something worth showing.',
                'One-to-one at home or online, at whatever hours suit. Start with a free demo class.',
            ],
            'professional' => [
                "{$title} on NXTutors is practical training for work, taught on the software itself with "
                    .'the tasks a job actually involves.',
                'Lessons are paced for adults returning to study: no assumed background, and the schedule '
                    .'bends around office hours. Tutors cover the features that matter day to day and drill '
                    .'them until they are quick, so the skill shows up in the work rather than only in a '
                    .'certificate.',
                'Progress is checked against real tasks rather than a syllabus, so you can see the point ' 
                    .'at which the software stops slowing the work down.',
                'Common tasks are taught as repeatable routines rather than one-off clicks, so the same ' 
                    .'job takes minutes next week instead of an afternoon, and shortcuts are built in from the ' 
                    .'start rather than bolted on later.',
                'One-to-one at home or online, with a free demo class before you commit.',
            ],
            'creative' => [
                "{$title} on NXTutors are taught around a portfolio: the student produces real work, and "
                    .'the work is critiqued.',
                'Tutors cover the tools and the principles behind them — composition, colour, typography '
                    .'and layout — so the output holds up beyond a single brief. Beginners building a first '
                    .'portfolio and students preparing for design entrance tests are both taken from their '
                    .'current level.',
                'Feedback is specific and given while the work is still in progress, which is where it '
                    .'changes the outcome, and each finished piece is chosen to add something the portfolio '
                    .'does not already show.',
                'One-to-one at home or online, at hours that suit study or work, starting with a free '
                    .'demo class.',
            ],
            'health' => [
                "{$title} coaching on NXTutors is one-to-one, which is what makes it safe as well as effective.",
                'A programme is set to the individual — current fitness, any limitations, and what they '
                    .'are actually training for — and the trainer corrects form in the moment rather than '
                    .'across a crowded floor. Progress is reviewed and the plan adjusted as it changes.',
                'Nutrition and recovery are covered alongside the training itself, because neither works '
                    .'on its own, and the plan is adjusted as fitness and schedules change.',
                'Sessions run at home or online, at hours that fit around work or school. Book a free demo '
                    .'session to start.',
            ],
            default => [
                $subjects->count()
                    ? "{$title} on NXTutors covers {$named}"
                        .($subjects->count() > 4 ? ' and more' : '').', taught one-to-one.'
                    : "{$title} on NXTutors is taught one-to-one, planned around the student rather than a batch.",
                'Lessons are built for one learner: the tutor sets the starting point from what the '
                    .'student already knows, moves at their pace, and revisits anything that has not '
                    .'landed instead of moving on regardless.',
                'Tutors are background-verified and teach at home or online across India, and every match '
                    .'begins with a free demo class so you can judge the teaching before committing.',
            ],
        }));
    }

    /**
     * What kind of thing this category is, decided from its own title and its
     * parent's. Order matters: the most specific test wins.
     */
    private static function classify(string $title, ?string $parent): string
    {
        $t = mb_strtolower($title);
        $p = mb_strtolower((string) $parent);
        $both = $t.' '.$p;

        return match (true) {
            (bool) preg_match('/^class\b|^class[\s\-]/i', $title)         => 'class',
            in_array($t, ['cbse', 'icse', 'igcse', 'ib', 'isc', 'state board', 'nios'], true) => 'board',
            str_contains($t, 'health') || str_contains($t, 'fitness')     => 'health',
            str_contains($t, 'study abroad')                              => 'study_abroad',
            str_contains($t, 'language')                                  => 'language',
            str_contains($t, 'proficiency')                               => 'study_abroad',
            str_contains($t, 'design') || str_contains($t, 'creative')    => 'creative',
            str_contains($both, 'software') || str_contains($both, 'programming')
                || str_contains($t, 'it &')                               => 'it',
            str_contains($t, 'ms office') || str_contains($t, 'professional') => 'professional',
            str_contains($t, 'entrance exam')                             => 'exam_parent',
            str_contains($t, 'academic')                                  => 'academic_parent',
            str_contains($p, 'entrance')                                  => 'exam',
            in_array($t, ['engineering', 'medical', 'cuet', 'university entrance'], true) => 'exam',
            default                                                       => 'default',
        };
    }
}
