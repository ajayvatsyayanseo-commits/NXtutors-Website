<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Proof that the tutor was where they said they were.
 *
 * Brief 6.4 makes a class attended when a parent OTP or a geo-fence says so.
 * Both were recorded and neither was checked: `method` was a string the tutor's
 * own device chose, so "parent_otp" meant nothing more than that the app had
 * typed those letters. The evidence trail was right and the proof behind it was
 * missing.
 *
 * The code is stored hashed. A four-digit code is not a secret worth much, but
 * it is read out loud in somebody's front room, and a leaked table should not
 * let anybody mark tomorrow's classes attended.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nxt_check_in_codes', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->ulid('session_id')->index();
            $table->string('code_hash');
            $table->timestamp('issued_at');
            $table->timestamp('expires_at')->index();
            $table->timestamp('used_at')->nullable();
            $table->unsignedTinyInteger('attempts')->default(0);
            $table->timestamps();

            // One live code per class: re-issuing replaces rather than adds, so
            // an old code can never still be valid.
            $table->unique('session_id');
        });

        Schema::table('nxt_sessions', function (Blueprint $table): void {
            // Where the class is, so a geo-fence has something to compare
            // against. Null means the address was never geocoded, and an
            // unverifiable geofence is downgraded rather than trusted.
            $table->decimal('address_lat', 10, 7)->nullable()->after('address');
            $table->decimal('address_lng', 10, 7)->nullable()->after('address_lat');
        });
    }

    public function down(): void
    {
        Schema::table('nxt_sessions', function (Blueprint $table): void {
            $table->dropColumn(['address_lat', 'address_lng']);
        });

        Schema::dropIfExists('nxt_check_in_codes');
    }
};
