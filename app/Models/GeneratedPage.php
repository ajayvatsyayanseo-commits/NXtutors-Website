<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneratedPage extends Model
{
    protected $fillable = [
        'slug','title','meta_title','meta_description',
        'country','state','city','location','hyper_location',
        'page_type','service_mode','is_premium','primary_keyword',
        'subjects','boards','classes_tracks',

     
        'sections','faqs','interlinks',

     
        'html',

     
        'schemas',

 
        'payload', 'local_reviews','local_schools','local_institutes',

        'status','created_by'
    ];

 
  
  protected $casts = [
  'subjects' => 'array',
  'boards' => 'array',
  'classes_tracks' => 'array',
  'schemas' => 'array',
  'payload' => 'array',
  'sections' => 'array',
  'faqs' => 'array',
  'interlinks' => 'array',
  'is_premium' => 'boolean',
  'local_reviews'  => 'array',
  'local_schools' => 'array',
  'local_institutes' => 'array', 
];

}
