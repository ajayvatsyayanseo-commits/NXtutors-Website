<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product_managment";
     protected $fillable = ['cat_id', 'pid', 'cid','product_id','slug', 'title', 'price','sale_price', 'discount', 'qty', 'product_type','sku', 'color_code', 'pdesc', 'short_desc', 'avatar','status','video','duration','video_lectures','live_class','quizzes','level','language','meta_title','meta_key','meta_desc'];
     public $timestamps = false;

      public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'pid');
    }
     public function mainCategory()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
     public function childCategory()
    {
        return $this->belongsTo(Category::class, 'cid');
    }
    public function relatedimage()
    {
        return $this->hasMany(Product_image::class, 'product_id', 'product_id');
    }
    public function relatedcurriculum()
    {
        return $this->hasMany(Product_curriculum::class, 'product_id', 'product_id');
    }
    public function relatedreview()
    {
        return $this->hasMany(Product_review::class, 'product_id', 'product_id');
    }
    public function teacherAssignments()
{
    return $this->hasMany(Teacher_course::class, 'cat_id', 'cat_id');
}

 }