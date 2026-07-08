<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;
class City_area_course extends Model
{
    protected $table = "city_area_related_course_managment";
     protected $fillable = [
        'area_id',
        'cat_id',
        'pid',
        'cid',
        'sub_id',
         
    ];
    public $timestamps = false;

    public function board()
    {
        return $this->belongsTo(Category::class, 'pid');
    }

    // ✅ Actual class record from 'cid' foreign key
    public function classCategory()
    {
        return $this->belongsTo(Category::class, 'cid');
    }

    // ✅ Main course category
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    // ✅ Subject collection accessor (comma-separated product IDs)
    public function getSubjectsAttribute()
    {
        $ids = array_filter(explode(',', $this->sub_id ?? ''));
        return Product::whereIn('id', $ids)->get();
    }

    // ✅ Boards based on current cat_id
    public function getBoardsAttribute()
    {
        return Category::where('pid', $this->cat_id)
                       ->where('status', 't')
                       ->get();
    }

    // ✅ Classes based on current pid
    public function getClassesAttribute()
    {
        return Category::where('cid', $this->pid)
                       ->where('status', 't')
                       ->get();
    }
}
