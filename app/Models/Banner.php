<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Banner extends Model
{
    protected $table = "banner_manager";
     protected $fillable = [
        'title',
        'sub_title',
        'banner_desc',
        'avatar',
        'status',
    ];
    public $timestamps = false;
}
