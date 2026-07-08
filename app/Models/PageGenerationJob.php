<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageGenerationJob extends Model
{
    protected $fillable = ['payload','status','error','attempts','processed_at'];
    protected $casts = ['payload' => 'array'];
}