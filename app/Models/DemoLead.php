<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoLead extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'service',
        'subject',
        'child_class',
        'preferred_time',
        'mode',
        'location',
        'message',
        'source_page',
    ];
}