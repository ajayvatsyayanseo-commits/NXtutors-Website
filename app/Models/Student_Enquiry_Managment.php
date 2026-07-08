<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student_Enquiry_Course;

class Student_Enquiry_Managment extends Model
{
    protected $table = "student_enquiry_managment";

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'date',
        'city',
        'district',
        'state',
        'pincode',  
        'message',
        'budget',
        'status',
        'for_class',
        'eotp',
        'otp_status',
         
    ];
 public $timestamps = false;
public function course()
{
    return $this->hasMany(Student_Enquiry_Course::class, 'enquiry_id');
}
    
}
