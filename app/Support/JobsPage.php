<?php

namespace App\Support;

/**
 * The shared skeleton of every tutor-side page (spec "Tutor-jobs experience"
 * v2, 2 Oct 2026): /tuition-jobs, /tuition-jobs/state/{state},
 * /tuition-jobs/{city}, the flat topic pages and /become-a-tutor.
 *
 * Written text comes from App\Support\JobsContent; this class supplies the
 * defaults the components fall back to when a file has none, plus the
 * board-card links and the HowTo schema. Every default sentence is something
 * the product actually does (RegisterController, the tutor dashboard,
 * /how-we-verify-tutors, /safeguarding-policy): no employment wording, no salaries, no
 * prices, no demand figures, no safety guarantees.
 */
class JobsPage
{
    /** The promise line: tutors are independent, so no employment wording. */
    public const PROMISE = 'Now taking on home, online and hybrid tutors';

    /**
     * The six storyboard panels: fixed titles, default captions (JSON
     * "story" captions replace them panel by panel).
     */
    public const STORY = [
        ['Sign up with a one-time code', 'Apply on WhatsApp and our team sets up your tutor account with you. The first time you log in, a one-time code sent to your email confirms the account is yours.'],
        ['Upload your ID; our team reviews it', 'In your dashboard, add a government photo ID: Aadhaar, voter ID, passport or driving licence. A document number can belong to one account only, and our team reviews it.'],
        ['Your profile carries the Verified badge', 'After the review your profile carries the Verified badge and shows what families need: your subjects, classes, boards, fee per class and the areas you teach in.'],
        ['A family nearby sends a request', 'Families tell us the class, board, subject and area. We shortlist two or three tutors who fit, nearest first, instead of sending the request to everyone.'],
        ['Free demo; the family sees your fee first', 'The first class is a free demo, so the family decides after meeting you. Your fee per class is on your profile, so they have seen it before the demo.'],
        ['Teach at home, online or both', 'Teach at home in the areas you chose, online from wherever you are, or a mix of the two. Change your areas and hours from your dashboard whenever your week changes.'],
    ];

    /** Women-tutor section defaults: only real controls and the safeguarding habits. */
    public const WOMEN_INTRO = 'Women tutors are welcome on NXTutors, for home classes, online classes or both. You decide how, where and when you teach. These are the controls the product gives you, and the habits our safeguarding policy asks of tutors and families.';

    public const WOMEN_POINTS = [
        'Choose home, online or hybrid teaching on your profile, and change it whenever you like.',
        'List the areas you travel to: home requests come only from those areas.',
        'Set your own days and timings; requests are matched to the hours you give.',
        'Every match starts with a demo class, and our safeguarding policy asks the parent to be at home for it.',
        'Teach where a parent or another adult is at home; in gated societies the family adds you to the gate or visitor register.',
        'Keep messages with the parent or a family group, never a child\'s private chat.',
        'Every tutor who joins goes through the same ID check. It confirms identity; it is not a police check.',
        'Stop any time. If anything worries you, stop the classes and tell us on WhatsApp or through the contact page.',
    ];

    /** "Why tutors choose NXTutors": true differentiators only. */
    public const WHY = [
        ['You set your fee', 'Your fee per class is on your profile, and families see it before the demo, so there is no haggling after a good class.'],
        ['Matched, nearest first', 'Each request goes to two or three tutors who fit it, nearest first, not to a long list of people chasing the same family.'],
        ['Demo first', 'The first class is a free demo. Families decide after meeting you, not from a phone call or a price list.'],
        ['No made-up leads', 'We never show invented requests. The only request details on these pages are real and anonymised, and only once there are three or more.'],
        ['An ID check for everyone', 'Every tutor who joins goes through the same ID check. Real tutors who pass carry the Verified badge; sample profiles are always labelled.'],
        ['AI-first, with real teachers', 'Parents can ask NXT AI about your profile and compare tutors side by side. The teaching is always yours.'],
    ];

    /**
     * The step list on /become-a-tutor, in the order the site works today:
     * WhatsApp application (self sign-up is switched off on /login), the
     * one-time code at first login (RegisterController::userlogin), the
     * dashboard profile and Documents sections, team review, matching, demo.
     */
    public const JOIN_STEPS = [
        ['Apply on WhatsApp', 'Send your name, subjects, classes, city and the areas you can reach. The Apply form writes the message for you; our team replies and sets up your tutor account with you.'],
        ['Confirm with a one-time code', 'The first time you log in, we email you a one-time code. Entering it confirms the account is yours.'],
        ['Complete your profile', 'In your dashboard, add your subjects, classes and boards, your fee per class, whether you teach at home, online or both, and the areas you travel to.'],
        ['Upload your ID', 'In the Documents section, choose Aadhaar, voter ID, passport or driving licence, enter the number and upload the front and back. A document number can be linked to one account only.'],
        ['Team review, then Verified', 'Our team reviews your ID before your profile is marked Verified. It is an identity check, not a police or background check.'],
        ['Requests and the free demo', 'When a family near you (or online) asks for what you teach, you can be one of the two or three tutors we share. The first class is a free demo, and the family has seen your fee.'],
    ];

    /** @return list<array{n:int, title:string, text:string}> */
    public static function story(array $captions = []): array
    {
        $out = [];
        foreach (self::STORY as $i => [$title, $text]) {
            $out[] = ['n' => $i + 1, 'title' => $title, 'text' => ($captions[$i] ?? '') !== '' ? $captions[$i] : $text];
        }

        return $out;
    }

    /** @return array{intro:string, points: list<string>} */
    public static function women(?array $w): array
    {
        return [
            'intro' => ($w['intro'] ?? '') !== '' ? $w['intro'] : self::WOMEN_INTRO,
            'points' => ! empty($w['points']) ? $w['points'] : self::WOMEN_POINTS,
        ];
    }

    /** @return list<array{title:string, text:string}> */
    public static function why(array $why = []): array
    {
        return $why !== [] ? $why : array_map(fn ($w) => ['title' => $w[0], 'text' => $w[1]], self::WHY);
    }

    /**
     * Board cards with links to our own board pages in the given cities
     * (cbse-home-tutor-{city}, icse-home-tutor-{city}, ib-tutor-{city},
     * igcse-tutor-{city}, {state}-board-tutor-{city}); live pages only.
     *
     * @param  list<array>  $cards  JobsContent board_cards
     * @param  list<string>  $citySlugs
     * @return list<array{key:string,name:string,site:string,classes:string,note:string,mark:string,pages:list<array{url:string,label:string}>}>
     */
    public static function boardCards(array $cards, array $citySlugs = []): array
    {
        $pages = self::boardPages($citySlugs);

        return array_map(fn ($c) => $c + [
            'mark' => self::mark($c),
            'pages' => array_slice($pages[$c['key']] ?? [], 0, 4),
        ], $cards);
    }

    /** @return array<string, list<array{url:string,label:string}>> board key => pages */
    public static function boardPages(array $citySlugs): array
    {
        $map = ['CBSE' => 'cbse', 'ICSE' => 'cisce', 'IB' => 'ib', 'IGCSE' => 'igcse'];
        $out = [];
        foreach ($citySlugs as $slug) {
            foreach (SubjectLinks::cityPages($slug) as $p) {
                if ($p['kind'] !== 'board' || $p['boards'] === []) {
                    continue;
                }
                $key = $map[$p['boards'][0]] ?? 'state';
                $out[$key][] = ['url' => $p['url'], 'label' => $p['anchor']];
            }
        }

        return $out;
    }

    /** The short mark on a board card: CBSE, CISCE, IB, IGCSE, or the state board's initials. */
    public static function mark(array $c): string
    {
        if ($c['key'] !== 'state') {
            return strtoupper($c['key']);
        }
        if (preg_match('/\(([A-Z]{2,6})\)/', $c['name'], $m)) {
            return $m[1];
        }
        preg_match_all('/\b([A-Z])[a-z]*/u', preg_replace('/\b(of|and|the|for)\b/i', '', $c['name']) ?? '', $m);

        return mb_substr(implode('', $m[1]), 0, 5) ?: 'SB';
    }

    /** HowTo for the storyboard; only call when the storyboard is on the page. */
    public static function howTo(array $panels, string $canonical): array
    {
        return [
            '@type' => 'HowTo',
            'name' => 'How tutors get tuition work on NXTutors',
            'step' => array_map(fn ($p) => [
                '@type' => 'HowToStep',
                'position' => $p['n'],
                'name' => $p['title'],
                'text' => $p['text'],
                'url' => $canonical . '#step-' . $p['n'],
            ], $panels),
        ];
    }

    /** Direct WhatsApp link with a tutor's application message (as the Apply form sends). */
    public static function applyWa(?string $place = null): string
    {
        $num = preg_replace('/\D+/', '', (string) config('nxt-ai.whatsapp_number')) ?: '917836034313';
        $text = 'Hi NXTutors, I would like to apply as a tutor' . ($place ? ' in ' . $place : '') . '.';

        return 'https://wa.me/' . $num . '?text=' . rawurlencode($text);
    }

    /** The women-tutor topic page when it is live, else the section anchor on this page. */
    public static function womenLink(): string
    {
        return JobsContent::topic('female-tutor-jobs') !== null ? url('/female-tutor-jobs') : '#women-tutors';
    }
}
