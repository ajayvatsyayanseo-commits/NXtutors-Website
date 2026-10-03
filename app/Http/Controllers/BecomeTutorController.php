<?php

namespace App\Http\Controllers;

use App\Support\JobsPage;
use App\Support\LearningAreas;

/**
 * /become-a-tutor: recruitment page for tutors and professionals ("home
 * tuition jobs", "online tutor jobs"). Lists every learning area, and marks
 * the ones parents ask for where tutors are short as "Tutors needed".
 */
class BecomeTutorController extends Controller
{
    public function show()
    {
        $areas = LearningAreas::areas();

        $faqs = [
            ['Who can join NXTutors?', 'School teachers, subject tutors, exam coaches, language teachers, music, dance and fitness teachers, coding instructors, and working professionals who teach college or professional subjects. You need a valid ID for verification and a clear idea of what, and whom, you teach.'],
            ['How do I get students?', 'Parents tell us the subject, class, board, area and budget. We match two or three tutors who fit and share them with the family. The first class is a demo, so the family can decide.'],
            ['Can I teach at home, online or both?', 'Any of the three. Add the sectors, societies or areas you can travel to for home classes, so home requests near you reach you first. Online classes can come from anywhere in India.'],
            ['How is the Verified badge given?', 'After you confirm your account with a one-time code and upload a government photo ID, our team reviews it. Real tutors who pass carry the Verified badge. It is an identity check, not a police or background check.'],
            ['Who sets my fee?', 'You do. Put your fee per class on your profile; families see it before the demo.'],
            ['I teach something that is not listed. Can I still join?', 'Yes. Add it to your profile subjects; if parents ask for it, we match you.'],
        ];

        // Joining intent only: the job queries ("home tuition jobs near me") belong to /tuition-jobs.
        $metatitle = 'Become a Tutor on NXTutors – Join, Plans & ID Check';
        $metadesc = 'How to join NXTutors as a home or online tutor: what you can teach, the ID check behind the Verified badge, and tutor plans listed on our pricing page.';
        $canonical = url('/become-a-tutor');
        // The same storyboard and women-tutor components as the jobs pages, plus the step list.
        $jobs = TuitionJobsController::skeleton(null, [], false, null);
        $steps = JobsPage::JOIN_STEPS;

        return view('pages.become-tutor', compact('areas', 'faqs', 'jobs', 'steps', 'metatitle', 'metadesc', 'canonical'));
    }
}
