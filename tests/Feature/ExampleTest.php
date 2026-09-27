<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    /** The home page renders on an empty site. */
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->createLegacySchema();

        $this->get('/')->assertStatus(200);
    }
}
