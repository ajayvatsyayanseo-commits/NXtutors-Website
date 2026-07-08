<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TutorImport extends Model
{
    protected $fillable = [
        'file_path',
        'status',
        'error'
    ];

    public function rows()
    {
        return $this->hasMany(TutorImportRow::class);
    }
}
