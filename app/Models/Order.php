<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $table = "order_managment";
     protected $fillable = [
        'user_id',
        'order_id',
        'fname',
        'lname',
         'copmany',
        'region',
        'street_address',
        'city',
         'state',
        'zip',
        'phone',
        'email',
         'note',
        'payment_method',
        'transation_id',
        'totle',
         'date',
        'otp',
        'payment_status',
        'order_status',
        'reason',
    ];
    public $timestamps = false;

public function user()
{
     return $this->belongsTo(Register::class, 'user_id', 'user_id');
}
public function orderitem()
    {
        return $this->hasMany(Order_detail::class, 'order_id', 'order_id');
    }
 }