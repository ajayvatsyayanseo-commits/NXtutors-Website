<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;
class Product_review extends Model
{
    protected $table = "product_review";
     protected $fillable = [
        'product_id',
        'username',
        'rating',
        'date',
        'message',
        'location',
        'review_status',
         
    ];
    public $timestamps = false;

    
}
