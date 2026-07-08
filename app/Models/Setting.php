<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Setting extends Model
{
     use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'address', 'facebook', 'twitter', 'instagram','logo','offer_text'
    ];
}
