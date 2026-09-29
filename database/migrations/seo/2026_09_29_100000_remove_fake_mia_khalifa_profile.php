<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * A fake tutor sign-up under an adult performer's name (user_id 1062,
 * /tutor/gurgaon/MTA2Mi1ueHQ/mia-khalifa) was live and drawing searches for
 * that name. Ajay asked for it to be deleted on 29 Sep 2026.
 *
 * Deleted the way the site deletes accounts: deleted_at is set, so the
 * profile 404s and leaves every listing (Register::scopePubliclyVisible).
 * The row is kept, so down() can restore it. Matched on id and name, so a
 * reused id can never take someone else's profile down.
 */
return new class extends Migration
{
    private const USER = '1062';
    private const AT = '2026-09-29 00:00:00';

    public function up(): void
    {
        if (! Schema::hasTable('register') || ! Schema::hasColumn('register', 'deleted_at')) {
            return;
        }
        DB::table('register')
            ->where('user_id', self::USER)
            ->whereRaw('LOWER(name) LIKE ?', ['%mia%khalifa%'])
            ->whereNull('deleted_at')
            ->update(['deleted_at' => self::AT]);
    }

    public function down(): void
    {
        if (! Schema::hasTable('register') || ! Schema::hasColumn('register', 'deleted_at')) {
            return;
        }
        DB::table('register')
            ->where('user_id', self::USER)
            ->where('deleted_at', self::AT)
            ->update(['deleted_at' => null]);
    }
};
