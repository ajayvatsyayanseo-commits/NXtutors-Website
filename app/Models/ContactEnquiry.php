<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** A message from the /contact form (HomeController::storeenquiry). */
class ContactEnquiry extends Model
{
    protected $table = 'contact_enquiries';

    protected $fillable = ['name', 'email', 'phone', 'message', 'source_page', 'referrer', 'utm', 'device'];
}
