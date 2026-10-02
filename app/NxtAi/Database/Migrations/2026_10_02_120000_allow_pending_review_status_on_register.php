<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * register.status gains 'p' (pending review): a tutor who signed up on
 * WhatsApp and whose ID the team has not checked yet (Register::STATUS_LABELS).
 *
 * The legacy table was not created by a migration, and its siblings declare
 * status as ENUM('t','f'). On such a column MySQL rejects 'p' in strict mode
 * and stores '' otherwise, which would leave every new WhatsApp tutor unable
 * to sign in. So: only when the column is a MySQL ENUM without 'p', add 'p' to
 * it, keeping the existing values, NULL rule and default. A VARCHAR column, or
 * SQLite in tests, is left alone.
 *
 * down() does nothing: removing 'p' while rows hold it would corrupt them.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('register') || DB::getDriverName() !== 'mysql') {
            return;
        }

        $col = DB::selectOne("SHOW COLUMNS FROM `register` LIKE 'status'");
        if (! $col) {
            return;
        }
        $type = (string) ($col->Type ?? '');
        if (! preg_match("/^enum\((.*)\)$/i", $type, $m)) {
            return; // VARCHAR/CHAR already accepts 'p'
        }
        $values = str_getcsv($m[1], ',', "'", '');
        if (in_array('p', $values, true)) {
            return;
        }
        $values[] = 'p';

        $quoted = implode(',', array_map(fn ($v) => DB::getPdo()->quote($v), $values));
        $null = ($col->Null ?? 'YES') === 'NO' ? 'NOT NULL' : 'NULL';
        $default = $col->Default === null ? '' : ' DEFAULT '.DB::getPdo()->quote((string) $col->Default);

        DB::statement("ALTER TABLE `register` MODIFY `status` ENUM($quoted) $null$default");
    }

    public function down(): void
    {
        // Intentionally empty, see above.
    }
};
