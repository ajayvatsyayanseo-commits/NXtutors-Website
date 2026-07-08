<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class City extends Model
{
    protected $table = "city_managment";
     protected $fillable = [
        'city_name',
        'city_desc',
        'slug',
        'meta_title',
        'meta_key',
         'meta_desc',
        'avatar',
        'status',
    ];
    public $timestamps = false;
}
