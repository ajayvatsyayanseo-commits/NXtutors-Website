<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A GST invoice for a package purchase or a subscription charge.
 */
class Invoice extends NxtModel
{
    protected $table = 'nxt_invoices';

    protected $casts = [
        'amount_paise' => 'integer',
        'gst_paise' => 'integer',
        'issued_at' => 'datetime',
    ];
}
