<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Ajay Vatsyayan (user_id 1997), as he gave them on 28 Sep 2026:
 *  - fee: ₹3,000–5,000 per hour;
 *  - home classes all over Gurugram, listed as the premium areas parents
 *    search for, with at least one place in every zone of config/zones.php,
 *    so his profile shows "Home classes all over Gurugram" and area searches
 *    rank him as travelling there.
 * The fee is set as he asked; travel areas only if still empty. down() clears
 * exactly these values (the fee field was empty: "Shared after the demo").
 */
return new class extends Migration
{
    private const USER = '1997';

    public const BUDGET = '3000-5000 per hour';

    public const TRAVEL_AREAS = 'DLF Phase 1–5, Golf Course Road, Sushant Lok 1, Ardee City, Sector 42–43, Sector 53–54, '
        . 'MG Road, South City 1, Sector 45–46, Golf Course Extension Road, Sector 56–66, Sohna Road, South City 2, '
        . 'Nirvana Country, Malibu Towne, Vatika City, Sector 47–49, Southern Peripheral Road, Dwarka Expressway, '
        . 'New Gurugram, Palam Vihar';

    public function up(): void
    {
        if (! Schema::hasTable('register')) {
            return;
        }
        $tutor = DB::table('register')->where('user_id', self::USER)->first();
        if (! $tutor) {
            return;
        }

        $set = ['budget' => self::BUDGET]; // he asked for this fee explicitly
        if (Schema::hasColumn('register', 'travel_areas') && trim((string) ($tutor->travel_areas ?? '')) === '') {
            $set['travel_areas'] = self::TRAVEL_AREAS;
        }
        if ($set) {
            DB::table('register')->where('user_id', self::USER)->update($set);
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('register')) {
            return;
        }
        DB::table('register')->where('user_id', self::USER)->where('budget', self::BUDGET)->update(['budget' => null]);
        if (Schema::hasColumn('register', 'travel_areas')) {
            DB::table('register')->where('user_id', self::USER)->where('travel_areas', self::TRAVEL_AREAS)->update(['travel_areas' => null]);
        }
    }
};
