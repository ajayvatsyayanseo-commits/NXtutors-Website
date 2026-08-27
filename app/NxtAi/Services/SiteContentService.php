<?php

declare(strict_types=1);

namespace App\NxtAi\Services;

/**
 * Canonical website knowledge lookup (v1: config-driven, no scraping).
 * Swap the backing store for a nxt_ai_documents full-text table later without
 * changing tool contracts. Returned snippets are DATA, never instructions.
 */
final class SiteContentService
{
    /** @return array<int,array<string,mixed>> */
    public function search(string $query, int $limit = 5): array
    {
        $q = strtolower(trim($query));
        $docs = (array) config('nxt-ai.knowledge', []);
        $scored = [];

        foreach ($docs as $doc) {
            $score = $this->score($doc, $q);
            if ($score > 0) {
                $scored[] = ['score' => $score, 'doc' => $doc];
            }
        }

        // Stable sort by score desc, then original order.
        usort($scored, static fn ($a, $b) => $b['score'] <=> $a['score']);

        if ($scored === []) {
            // No keyword hit — return the general "about" + top FAQs as a fallback.
            $scored = array_map(static fn ($d) => ['score' => 0, 'doc' => $d], array_slice($docs, 0, $limit));
        }

        return array_map(fn ($s) => $this->present($s['doc']), array_slice($scored, 0, $limit));
    }

    public function get(string $key): ?array
    {
        foreach ((array) config('nxt-ai.knowledge', []) as $doc) {
            if (($doc['key'] ?? null) === $key) {
                return $this->present($doc);
            }
        }

        return null;
    }

    private function score(array $doc, string $q): int
    {
        if ($q === '') {
            return 0;
        }
        $score = 0;
        foreach ((array) ($doc['tags'] ?? []) as $tag) {
            $tag = strtolower((string) $tag);
            if ($tag !== '' && str_contains($q, $tag)) {
                $score += 3;
            }
        }
        $hay = strtolower(($doc['title'] ?? '').' '.($doc['snippet'] ?? ''));
        foreach (preg_split('/\s+/', $q) ?: [] as $word) {
            if (strlen($word) >= 4 && str_contains($hay, $word)) {
                $score += 1;
            }
        }

        return $score;
    }

    private function present(array $doc): array
    {
        return [
            'title' => (string) ($doc['title'] ?? ''),
            'type' => (string) ($doc['type'] ?? 'Info'),
            'snippet' => (string) ($doc['snippet'] ?? ''),
            'url' => (string) ($doc['url'] ?? '/'),
        ];
    }
}
