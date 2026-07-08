<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City_area_course;
use App\Models\City_area_faqs;
use App\Models\City;
use App\Models\City_area_review;
class City_area extends Model
{
    protected $table = "city_area_list_managment";
     protected $fillable = [
        'city_id',
        'areapid',
        'name',
        'main_title',
        'slug',
        'area_desc',
         'teacher_approch',
        'area_map',
        'pincode',
        'why_choose',
        'short_desc',
        'package',
        'tutor_types',
        'subjects_covered_desc',
        'meta_title',
        'meta_desc',
        'page_schema',
        'status',
    ];
    public $timestamps = false;
    public function city()
{
    return $this->belongsTo(City::class, 'city_id');
}
public function parentArea()
{
    return $this->belongsTo(City_area::class, 'areapid');
}

    public function courses()
{
    return $this->hasMany(City_area_course::class, 'area_id');
}

public function faqs()
{
    return $this->hasMany(City_area_faqs::class, 'area_id');
}
public function review()
{
    return $this->hasMany(City_area_review::class, 'area_id');
}

 // 🔹 Dynamic total reviews
    public function getTotalReviewsAttribute()
    {
        return $this->review()->count();
    }

    // 🔹 Dynamic average rating
    public function getAverageRatingAttribute()
    {
        return round($this->review()->avg('rating'), 1) ?? 0;
    }
}
