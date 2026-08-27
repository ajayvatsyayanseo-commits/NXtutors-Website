<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\Support\CityNormalizer;
use Tests\TestCase;

class CityNormalizerTest extends TestCase
{
    public function test_gurgaon_and_gurugram_normalize_to_gurugram(): void
    {
        $this->assertSame('Gurugram', CityNormalizer::normalize('Gurgaon'));
        $this->assertSame('Gurugram', CityNormalizer::normalize('gurugram'));
        $this->assertSame('Gurugram', CityNormalizer::normalize('  GURGAON  '));
    }

    public function test_aliases_for_gurugram_contains_both_spellings(): void
    {
        $aliases = CityNormalizer::aliasesFor('Gurugram');
        $this->assertContains('gurgaon', $aliases);
        $this->assertContains('gurugram', $aliases);
    }

    public function test_bangalore_variants_normalize_to_bengaluru(): void
    {
        $this->assertSame('Bengaluru', CityNormalizer::normalize('Bangalore'));
        $this->assertSame('Bengaluru', CityNormalizer::normalize('Bengaluru'));
    }

    public function test_unknown_city_is_tidied_not_mapped(): void
    {
        $this->assertSame('Jaipur', CityNormalizer::normalize('Jaipur'));
        $this->assertSame('Jaipur', CityNormalizer::normalize('jaipur'));
    }

    public function test_null_and_empty_return_null(): void
    {
        $this->assertNull(CityNormalizer::normalize(null));
        $this->assertNull(CityNormalizer::normalize('   '));
    }
}
