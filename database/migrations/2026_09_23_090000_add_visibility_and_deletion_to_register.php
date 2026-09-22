<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Hide profile and delete account (DPDP Act: a person can withdraw consent
 * and have their data erased).
 *
 *   hidden_until           the profile is off every public surface until this
 *                          time. Null = visible. Register::HIDDEN_INDEFINITELY
 *                          = until the tutor turns it back on.
 *   deletion_requested_at  when the person asked for their account to go
 *   delete_after           when the purge command erases it (24h / 3d / 7d
 *                          later, their choice). Cleared if they cancel.
 *   deleted_at             when it was erased. The row stays, anonymised, so
 *                          payment and ledger records keep a valid reference.
 *
 * `register` has no migration of its own (it lives only in the production
 * dump), so every step checks before it acts.
 */
return new class extends Migration
{
    private const COLUMNS = ['hidden_until', 'deletion_requested_at', 'delete_after', 'deleted_at'];

    public function up(): void
    {
        if (! Schema::hasTable('register')) {
            return;
        }

        Schema::table('register', function (Blueprint $table): void {
            foreach (self::COLUMNS as $column) {
                if (! Schema::hasColumn('register', $column)) {
                    $table->dateTime($column)->nullable();
                }
            }
        });

        // The purge command looks rows up by this every few minutes.
        if (Schema::hasColumn('register', 'delete_after') && ! $this->hasIndex('register_delete_after_index')) {
            Schema::table('register', fn (Blueprint $table) => $table->index('delete_after'));
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('register')) {
            return;
        }

        if ($this->hasIndex('register_delete_after_index')) {
            Schema::table('register', fn (Blueprint $table) => $table->dropIndex('register_delete_after_index'));
        }

        $existing = array_values(array_filter(self::COLUMNS, fn ($c) => Schema::hasColumn('register', $c)));
        if ($existing) {
            Schema::table('register', fn (Blueprint $table) => $table->dropColumn($existing));
        }
    }

    private function hasIndex(string $name): bool
    {
        return collect(Schema::getIndexes('register'))->contains(fn ($i) => $i['name'] === $name);
    }
};
