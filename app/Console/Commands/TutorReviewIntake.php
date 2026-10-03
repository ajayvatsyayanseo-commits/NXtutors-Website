<?php

namespace App\Console\Commands;

use App\Services\TutorIntake;
use Illuminate\Console\Command;

/**
 * New real tutors written straight into `register` by the WhatsApp onboarding
 * agent: apply the publish rule (config tutors.publish_before_review) and
 * send the reviewer one "New tutor to check" email each. Scheduled every
 * minute (routes/console.php). Safe to run any time; each tutor once.
 */
class TutorReviewIntake extends Command
{
    protected $signature = 'tutors:review-intake {--limit=50}';

    protected $description = 'Publish-before-review rule and the reviewer email for new WhatsApp tutors';

    public function handle(TutorIntake $intake): int
    {
        $n = $intake->sweep(max(1, (int) $this->option('limit')));
        $this->line("New tutors handled: $n");

        return self::SUCCESS;
    }
}
