<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutorImportRow extends Model
{
    protected $fillable = [
        'tutor_import_id',
        'payload',
        'status',
        'error',
        'register_id'
    ];

    protected $casts = [
        'payload' => 'array'
    ];

    public function import()
    {
        return $this->belongsTo(TutorImport::class, 'tutor_import_id');
    }
}
