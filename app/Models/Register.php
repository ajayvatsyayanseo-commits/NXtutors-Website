<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
        'user_type',
        'phone',
        'dob',
        'avatar',
        'gender',
        'date',
        'address',
        'city',
        'district',
        'state',
        'pincode',
        'c_password',
        'otp',
        'class_type',
        'otp_status',
        'status',
        'join_as',
        'for_class',
        'frount_image',
        'back_image',
        'degree',
        'experience',
        'education',
          'budget',
         'other_education',
         'document_type',
         'document_number',
         'profile',
         'profile_desc',
         'pro_desc'
    ];
 public $timestamps = false;

 public function reviews()
{
    
    return $this->hasMany(Teacher_review::class, 'user_id', 'user_id');
}

public function courses()
{
    return $this->hasMany(Teacher_course::class, 'user_id', 'user_id');
}

public function coursess()
{
    return $this->hasMany(Teacher_courses::class, 'user_id', 'user_id');
}

public function getEffectiveCoursesAttribute()
{
    if ($this->relationLoaded('courses') && $this->courses && $this->courses->count()) {
        return $this->courses;
    }

    if ($this->relationLoaded('coursess') && $this->coursess && $this->coursess->count()) {
        return $this->coursess;
    }

    // fallback queries if not eager loaded
    $a = $this->courses()->get();
    return $a->count() ? $a : $this->coursess()->get();
}
    
}
