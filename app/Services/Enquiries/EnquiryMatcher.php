<?php

namespace App\Services\Enquiries;

use App\Models\EnquiryLead;
use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Services\TutorSearchService;
use App\NxtAi\Support\ClassNormalizer;

/**
 * "Suggested tutors" on an enquiry: the site's own tutor search (the one the
 * NXT AI chat uses: city → zone/area → state → online cascade, real tutors
 * ranked before sample profiles) asked with the enquiry's request.
 *
 * Each card says whether it is a sample profile; the Verified seal is shown
 * only where the search marks id_verified (App\Support\TutorBadge).
 */
final class EnquiryMatcher
{
    public function __construct(private readonly TutorSearchService $search)
    {
    }

    /** @return array{cards:list<array<string,mixed>>, note:?string} */
    public function suggest(EnquiryLead $lead, int $limit = 5): array
    {
        $board = $lead->board && ! str_starts_with($lead->board, 'State') ? $lead->board : null;
        $mode = match ($lead->mode) {
            'online' => 'online',
            'home' => 'home',
            'hybrid' => 'either',
            default => null,
        };
        try {
            $criteria = new TutorSearchCriteria(
                city: $lead->city,
                area: $lead->area,
                subject: $lead->subjectList()[0] ?? null,
                classLevel: ClassNormalizer::normalize($lead->class_label),
                board: $board,
                teachingMode: $mode,
                gender: in_array($lead->tutor_gender, ['male', 'female'], true) ? $lead->tutor_gender : null,
                limit: max(1, min($limit * 2, 10)),
            );
            $result = $this->search->search($criteria);
        } catch (\Throwable $e) {
            return ['cards' => [], 'note' => 'Tutor search is not available right now.'];
        }

        $cards = array_values((array) ($result['cards'] ?? []));
        // Real tutors first; the search already ranks, this only keeps that promise.
        usort($cards, fn ($a, $b) => (int) ! empty($a['is_sample']) <=> (int) ! empty($b['is_sample']));
        $cards = array_slice($cards, 0, $limit);
        foreach ($cards as &$c) {
            $c['user_id'] = isset($c['ref']) ? $this->search->decodeRef((string) $c['ref']) : null;
            $c['verified'] = ! empty($c['id_verified']) && empty($c['is_sample']);
        }
        unset($c);

        $note = null;
        if (! empty($result['relaxed'])) {
            $note = 'No tutor in this place lists the subject; showing tutors near the place instead.';
        } elseif (! empty($result['widened'])) {
            $note = 'Few tutors in the city fit, so the search widened to the ' . ($result['widened'] === 'state' ? 'state' : 'whole country (online)') . '.';
        }

        return ['cards' => $cards, 'note' => $note];
    }
}
