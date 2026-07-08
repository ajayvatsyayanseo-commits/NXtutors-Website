<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
     protected $fillable = ['pid', 'cid', 'slug', 'cat_title', 'cdesc','avatar','meta_title','meta_desc','status'];
     public $timestamps = false;

      public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'pid');
    }
     public function childCategory()
    {
        return $this->belongsTo(Category::class, 'cid');
    }
    public function childcatlist()
    {
        return $this->hasMany(Category::class, 'pid');
    }
    public function getFullSlugAttribute()
    {
        $segments = [];
        $category = $this;
        while ($category) {
            array_unshift($segments, $category->slug);
            $category = $category->parentCategory;
        }
        return implode('/', $segments);
    }
}
