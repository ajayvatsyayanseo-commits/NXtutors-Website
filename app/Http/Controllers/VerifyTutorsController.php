<?php

namespace App\Http\Controllers;

/**
 * /how-we-verify-tutors: what the tutor ID check is (and is not), in the
 * words of what the site actually does: one-time code at sign-up, a
 * government photo ID uploaded from the tutor dashboard (the document
 * number can belong to only one account), review by the team before the
 * profile is made active, and the Verified badge on real tutors' cards.
 * Sample profiles are labelled and never carry the badge.
 */
class VerifyTutorsController extends Controller
{
    public function show()
    {
        $faqs = [
            ['What does the Verified badge mean?', 'It means the tutor has confirmed their phone or email with a one-time code and uploaded a government photo ID that our team has reviewed. It confirms who the tutor is. It is not a rating of their teaching, which you judge yourself in the free demo class.'],
            ['Is the ID check a police or background verification?', 'No. The check confirms the tutor\'s identity from a government photo ID. It is not a police verification or a criminal background check, so the everyday safety habits on this page still matter, especially for younger children.'],
            ['What is a sample profile?', 'Some profiles on the site are examples that show what a tutor profile looks like. They carry a "Sample profile" label, never show a Verified badge, rating, fee or Compare button, and are not tutors you can book.'],
            ['Can a tutor share an ID with another account?', 'No. Each ID document number can be linked to only one tutor account on NXTutors, so the same document cannot be used to set up a second profile.'],
            ['What if something about a tutor worries me?', 'Stop the classes and tell us straight away through WhatsApp or the contact page. Switching to another tutor is free, and you can ask for a new match at any point.'],
        ];

        $metatitle = 'How We Verify Tutors: ID Check & Verified Badge | NXTutors';
        $metadesc = 'How NXTutors checks tutors: one-time code at sign-up, a government photo ID reviewed by our team, the Verified badge, sample profiles, and safety tips for parents.';
        $canonical = url('/how-we-verify-tutors');

        return view('pages.how-we-verify-tutors', compact('faqs', 'metatitle', 'metadesc', 'canonical'));
    }
}
