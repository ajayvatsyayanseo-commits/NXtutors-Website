<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagegenImportRow extends Model
{
    protected $fillable = [
        'import_id',
        'payload',
        'status',
        'error',
        'generated_page_id',
        'created_by',
    ];

    protected $casts = [
        'payload' => 'array',
    ];

    public function import()
    {
        return $this->belongsTo(PagegenImport::class, 'import_id');
    }
}