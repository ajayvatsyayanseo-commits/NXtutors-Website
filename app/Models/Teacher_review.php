<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Teacher_review extends Model
{
    protected $table = "teacher_review";
     protected $fillable = [
        'name',
        'user_id',
        'rating',
        'expertise',
        'patience',
        'reliability',
        'communication',
        'date', 
        'message',
        'status',
    ];
    public $timestamps = false;

    public function user()
{
     return $this->belongsTo(Register::class, 'user_id', 'user_id');
}

   
}
