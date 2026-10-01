<?php

namespace App\Http\Controllers;

use App\Models\Page;

/**
 * The policy pages, written as repo-versioned Blade (resources/views/legal)
 * so every change is reviewed and dated. Facts that only the owner can confirm
 * (entity name, Grievance Officer, CIN, GSTIN) come from config/legal.php.
 *
 * /terms-conditions and /privacy-policy keep their URLs. Their meta title and
 * description are still read from the `pages` table when an admin has set
 * them there; the body now always comes from the Blade file.
 */
class LegalController extends Controller
{
    /** slug => [nav label, H1, meta title (<=65), meta description (140-160)] */
    public const PAGES = [
        'terms-conditions' => [
            'label' => 'Terms of Use',
            'h1' => 'Terms of Use',
            'title' => 'Terms of Use | NXTutors Home & Online Tuition',
            'desc' => 'The terms for using NXTutors: how tutor matching and the free demo work, what we do and do not promise, payments, liability, disputes and Gurugram courts.',
        ],
        'privacy-policy' => [
            'label' => 'Privacy Policy',
            'h1' => 'Privacy Policy',
            'title' => 'Privacy Policy | NXTutors',
            'desc' => 'What personal data NXTutors collects from parents, students and tutors, why, who sees it, how long we keep it, and how to use your rights under the DPDP Act.',
        ],
        'refund-policy' => [
            'label' => 'Refund & Cancellation',
            'h1' => 'Refund and Cancellation Policy',
            'title' => 'Refund & Cancellation Policy | NXTutors',
            'desc' => 'When NXTutors plan payments are refunded: the free demo, failed or duplicate charges, plans that never started, tuition fees paid to tutors, and timelines.',
        ],
        'tutor-terms' => [
            'label' => 'Tutor Terms',
            'h1' => 'Tutor Terms',
            'title' => 'Tutor Terms: Plans, ID Check & Conduct | NXTutors',
            'desc' => 'The agreement for tutors on NXTutors: paid plans and lead views, profile accuracy, the ID check, conduct with students, independent status, fees and suspension.',
        ],
        'cookie-policy' => [
            'label' => 'Cookie Policy',
            'h1' => 'Cookie Policy',
            'title' => 'Cookie Policy | NXTutors',
            'desc' => 'The cookies and browser storage NXTutors uses: the essential session cookie, saved location, Google Analytics and Google Ads tags, and how to switch them off.',
        ],
        'safeguarding-policy' => [
            'label' => 'Child Safety',
            'h1' => 'Child Safety and Safeguarding Policy',
            'title' => 'Child Safety & Safeguarding Policy | NXTutors',
            'desc' => 'How NXTutors protects children in home and online tuition: the tutor ID check and its limits, rules for tutors, safety habits for parents and how to report.',
        ],
        'disclaimer' => [
            'label' => 'Disclaimer',
            'h1' => 'Disclaimer',
            'title' => 'Disclaimer: Results, NXT AI & Sample Profiles | NXTutors',
            'desc' => 'What NXTutors does not promise: exam results, NXT AI answers, sample tutor profiles, fee ranges, reviews and third-party links. Check before relying on them.',
        ],
        'grievance-redressal' => [
            'label' => 'Grievance Redressal',
            'h1' => 'Grievance Redressal',
            'title' => 'Grievance Redressal & Grievance Officer | NXTutors',
            'desc' => 'How to raise a complaint with NXTutors: Grievance Officer contact, what to include, acknowledgement within 24 hours, resolution timelines and escalation.',
        ],
        'community-guidelines' => [
            'label' => 'Community Guidelines',
            'h1' => 'Community Guidelines and Acceptable Use',
            'title' => 'Community Guidelines & Acceptable Use | NXTutors',
            'desc' => 'The rules for everyone on NXTutors: respectful contact, honest profiles and reviews, no misuse of contact details, safe use of NXT AI, and how we enforce them.',
        ],
    ];

    public function show(string $slug)
    {
        abort_unless(isset(self::PAGES[$slug]), 404);

        $meta = self::PAGES[$slug];

        // The two original URLs may still carry admin-set meta in `pages`.
        $metatitle = $meta['title'];
        $metadesc = $meta['desc'];
        $metakey = null;
        if (in_array($slug, ['terms-conditions', 'privacy-policy'], true)) {
            try {
                $row = Page::where('status', 't')->where('slug', $slug)->first();
            } catch (\Throwable $e) {
                $row = null;
            }
            $metakey = $row->meta_keywords ?? null;
            // Only keep DB meta that still fits the length rules.
            if ($row && ($t = trim((string) $row->meta_title)) !== '' && mb_strlen($t) <= 65) {
                $metatitle = $t;
            }
            if ($row && ($d = trim((string) $row->meta_description)) !== '' && mb_strlen($d) >= 140 && mb_strlen($d) <= 160) {
                $metadesc = $d;
            }
        }

        return view('legal.' . $slug, [
            'slug' => $slug,
            'h1' => $meta['h1'],
            'metatitle' => $metatitle,
            'metadesc' => $metadesc,
            'metakey' => $metakey,
            'canonical' => url('/' . $slug),
            'legal' => config('legal'),
            'legalPages' => self::PAGES,
        ]);
    }
}
