<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** One line of an enquiry's timeline: a note, a stage change, an assignment… */
class EnquiryActivity extends Model
{
    protected $table = 'enquiry_activities';

    public const UPDATED_AT = null;

    protected $guarded = ['id'];
}
