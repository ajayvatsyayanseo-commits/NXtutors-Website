<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Page extends Model
{
     protected $table = "pages";

     protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'main_title',
        'avatar',
        'status',
    ];
}
