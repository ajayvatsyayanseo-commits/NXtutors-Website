<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\Models\Register;
use App\NxtAi\Support\PublicTutorFieldMapper;
use Tests\TestCase;

class PublicTutorFieldMapperTest extends TestCase
{
    private function tutor(): Register
    {
        $t = new Register();
        $t->forceFill([
            'user_id' => '1000',
            'name' => 'Anita Sharma',
            'gender' => 'female',
            'city' => 'Gurugram',
            'address' => 'Sector 30',
            'pincode' => '122001',
            'experience' => '8 years',
            'budget' => '1200',
            'avatar' => '1752927252-project-1.webp',
            'profile_desc' => 'CBSE Maths specialist',
            // Private — must never appear in output:
            'email' => 'anita.secret@example.com',
            'phone' => '9876543210',
            'password' => 'bcrypt-hash-secret',
            'c_password' => 'plain-secret',
            'otp' => '123456',
            'document_number' => 'DOC-SECRET-42',
            'document_type' => 'aadhaar',
            'frount_image' => 'front-kyc.jpg',
            'dob' => '1990-01-01',
        ]);
        // Attach aggregates the way the search subquery would.
        $t->rating_avg = 4.8;
        $t->reviews_count = 32;

        return $t;
    }

    public function test_output_never_contains_private_data(): void
    {
        $out = (new PublicTutorFieldMapper())->toPublicArray($this->tutor());
        $json = json_encode($out);

        foreach (['anita.secret@example.com', '9876543210', 'bcrypt-hash-secret', 'plain-secret', '123456', 'DOC-SECRET-42', 'front-kyc.jpg', '1990-01-01'] as $secret) {
            $this->assertStringNotContainsString($secret, $json, "Private value leaked: {$secret}");
        }

        foreach (PublicTutorFieldMapper::PRIVATE_COLUMNS as $col) {
            $this->assertArrayNotHasKey($col, $out, "Private column leaked: {$col}");
        }
    }

    public function test_public_fields_are_present_and_correct(): void
    {
        $out = (new PublicTutorFieldMapper())->toPublicArray($this->tutor());

        $this->assertSame('Anita Sharma', $out['name']);
        $this->assertSame('Female', $out['gender']);
        $this->assertSame('Gurugram', $out['city']);
        $this->assertSame(8, $out['experience_years']);
        $this->assertSame(4.8, $out['rating']);
        $this->assertSame(32, $out['review_count']);
        $this->assertSame('₹1,200', $out['fee_label']);
        $this->assertStringContainsString('project-1.webp', $out['image_url']);
    }

    public function test_profile_ref_round_trips(): void
    {
        $mapper = new PublicTutorFieldMapper();
        $token = $mapper->publicToken('2915');
        $decoded = base64_decode(strtr($token, '-_', '+/'), true);

        $this->assertSame('2915-nxt', $decoded);
    }

    public function test_fee_without_unit_is_never_labelled_per_hour(): void
    {
        $mapper = new PublicTutorFieldMapper();
        $fee = $mapper->parseFee('₹800 - ₹1000');

        $this->assertSame(800, $fee['min']);
        $this->assertSame(1000, $fee['max']);
        $this->assertStringNotContainsStringIgnoringCase('hour', (string) $fee['label']);
    }
}
