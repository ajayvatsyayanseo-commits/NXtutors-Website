<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class City_area_faqs extends Model
{
    protected $table = "city_area_related_faqs_managment";
     protected $fillable = [
        'area_id',
        'question',
        'answer',
     
         
    ];
    public $timestamps = false;
}
