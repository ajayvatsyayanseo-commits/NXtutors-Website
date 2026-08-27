<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\Support\AgentPseudonymiser;
use PHPUnit\Framework\TestCase;

/**
 * The phone pseudonymisation, pinned against the agents' implementation.
 *
 * The expected digests below were produced by the **Python** side —
 * `security/pii.py::Pseudonymiser.phone` in the Demo Command Center agent —
 * not by the code under test. That is the entire point: a test that asserts
 * this implementation against itself would pass while silently disagreeing
 * with the agents.
 *
 * And a disagreement raises nothing. The agent asks for `ph_<hash>`, this site
 * finds no row, the agent reads that as an unknown contact, and unknown
 * contacts fail closed as opted-out — so every message to that person is
 * suppressed, with no error anywhere.
 */
final class AgentPseudonymiserTest extends TestCase
{
    /**
     * The pepper the vectors were generated under. Not a real secret; the real
     * one lives in AGENT_HASH_PEPPER and must equal TMM_HASH_PEPPER.
     */
    private const PEPPER = 'test-pepper-for-vectors';

    private function pseudonymiser(): AgentPseudonymiser
    {
        return new AgentPseudonymiser(self::PEPPER);
    }

    /**
     * Vectors computed by the Python implementation under self::PEPPER.
     *
     * @return array<string,array{string,string}>
     */
    public static function vectors(): array
    {
        return [
            'plain ten digits' => ['9876543210', 'ph_e7ece5448cdb932c'],
            'spaced with country code' => ['+91 98765 43210', 'ph_e7ece5448cdb932c'],
            'country code, no plus' => ['919876543210', 'ph_e7ece5448cdb932c'],
            'dashes and parens' => ['(098765)-43210', 'ph_e7ece5448cdb932c'],
        ];
    }

    /**
     * @dataProvider vectors
     */
    public function test_it_matches_the_python_implementation(string $phone, string $expected): void
    {
        $this->assertSame($expected, $this->pseudonymiser()->phone($phone));
    }

    /**
     * The normalisation is not cosmetic. `+91 98765 43210` and `9876543210`
     * are one person, and two refs for one person means two conversations, two
     * demos and a parent messaged twice.
     */
    public function test_every_format_of_one_number_collides(): void
    {
        $p = $this->pseudonymiser();
        $refs = array_map(
            static fn (string $n): string => $p->phone($n),
            ['9876543210', '+91 98765 43210', '919876543210', '0091-98765-43210']
        );

        $this->assertCount(1, array_unique($refs));
    }

    public function test_different_numbers_do_not_collide(): void
    {
        $p = $this->pseudonymiser();
        $this->assertNotSame($p->phone('9876543210'), $p->phone('9876543211'));
    }

    public function test_the_digest_is_sixteen_hex_characters(): void
    {
        // The agents store and compare exactly this width. A full 64-char
        // digest here would never match a single one of them.
        $this->assertMatchesRegularExpression(
            '/^[0-9a-f]{16}$/',
            $this->pseudonymiser()->phoneHash('9876543210')
        );
    }

    public function test_the_pepper_actually_changes_the_output(): void
    {
        $this->assertNotSame(
            (new AgentPseudonymiser('one'))->phone('9876543210'),
            (new AgentPseudonymiser('two'))->phone('9876543210')
        );
    }

    public function test_a_short_number_is_hashed_rather_than_padded(): void
    {
        // Fewer than ten digits is bad data, not a different person. It still
        // hashes, so the row is findable rather than throwing at signup.
        $this->assertMatchesRegularExpression('/^ph_[0-9a-f]{16}$/', $this->pseudonymiser()->phone('12345'));
    }

    public function test_the_prefix_is_stripped_for_column_lookups(): void
    {
        $this->assertSame('abc123', AgentPseudonymiser::stripPrefix('ph_abc123'));
        $this->assertSame('abc123', AgentPseudonymiser::stripPrefix('abc123'));
    }

    public function test_a_phone_ref_is_told_apart_from_a_tutor_ref(): void
    {
        // The contacts route serves both, and picking the wrong branch means
        // looking a parent up in the tutor table and finding nobody.
        $this->assertTrue(AgentPseudonymiser::looksLikePhoneRef('ph_e7ece5448cdb932c'));
        $this->assertTrue(AgentPseudonymiser::looksLikePhoneRef('1f4bcd3d3a4f8b06'));
        $this->assertFalse(AgentPseudonymiser::looksLikePhoneRef('2928'));
        $this->assertFalse(AgentPseudonymiser::looksLikePhoneRef('NXT10006'));
    }
}
