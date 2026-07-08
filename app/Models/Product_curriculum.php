<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product_curriculum extends Model
{
    protected $table = "product_curriculum_managment";
     protected $fillable = [
        'product_id',
        'curriculum_title',
        'curriculum_desc',
     
         
    ];
    public $timestamps = false;
}
