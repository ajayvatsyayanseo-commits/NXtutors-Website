<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order_detail extends Model
{
    protected $table = "order_details";
     protected $fillable = [
        'user_id',
        'product_id',
        'order_id',
        'price',
        'qty',
    ];
    public $timestamps = false;

     public function productname()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

 }