<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagegenImport extends Model
{
    protected $fillable = [
        'file_path',
        'status',
        'created_by',
    ];

    public function rows()
    {
        return $this->hasMany(PagegenImportRow::class, 'import_id');
    }
}