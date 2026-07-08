<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher_courses extends Model
{
    protected $table = "teacher_courses";

    protected $fillable = [
        'user_id',
        'subject',
        'board',
        'for_class',
        'class_type',
        'mode',
        'status',
        'date',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(Register::class, 'user_id', 'user_id');
    }
}
