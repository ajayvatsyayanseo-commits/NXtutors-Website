<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model
{
    protected $table = "blog_managment";
     protected $fillable = [
        'title',
        'slug',
        'bdesc',
        'avatar',
        'meta_title',
        'meta_key',
        'meta_desc',
        'author',
        'date',
        'status',
    ];
    public $timestamps = false;
}
