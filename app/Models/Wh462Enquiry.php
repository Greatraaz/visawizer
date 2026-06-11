<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wh462Enquiry extends Model
{
    protected $fillable = [
        'form_id',
        'name',
        'phone',
        'email',
        'residence_country',
        'passport_country',
        'age',
        'education',
        'english_evidence',
        'previous_wh_visa',
        'travel_month',
        'preferred_action',
        'message',
    ];
}
