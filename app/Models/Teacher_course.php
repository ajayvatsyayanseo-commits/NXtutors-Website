<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;
use App\Models\Register;

class Teacher_course extends Model
{
    protected $table = "teacher_course_managment";

    protected $fillable = [
        'user_id',
        'pid',
        'cid',
        'cat_id',
        'sub_id',
    ];

    public $timestamps = false;

    // ✅ Actual board record from 'pid' foreign key
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

    public function teacher()
{
    return $this->belongsTo(Register::class, 'user_id', 'user_id');
}

  
    public function getSubjectsAttribute()
    {
        $ids = array_filter(explode(',', $this->sub_id ?? ''));
        return Product::whereIn('id', $ids)->get();
    }

 
    public function getBoardsAttribute()
    {
        return Category::where('pid', $this->cat_id)
                       ->where('status', 't')
                       ->get();
    }

    
    public function getClassesAttribute()
    {
        return Category::where('cid', $this->pid)
                       ->where('status', 't')
                       ->get();
    }

    public function subjectsRelation()
{
    $ids = array_filter(explode(',', $this->sub_id ?? ''));
    return Product::whereIn('id', $ids);
}
 

}
