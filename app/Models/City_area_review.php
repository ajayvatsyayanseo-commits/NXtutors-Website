<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;
class City_area_review extends Model
{
    protected $table = "city_area_review_managment";
     protected $fillable = [
        'area_id',
        'username',
        'rating',
        'date',
        'message',
        'location',
        'review_status',
         
    ];
    public $timestamps = false;

    
}
