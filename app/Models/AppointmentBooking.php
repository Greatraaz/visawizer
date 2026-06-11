<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentBooking extends Model
{
    protected $fillable = [
        'appointment_title',
        'appointment_duration',
        'appointment_price',
        'appointment_date',
        'appointment_time',
        'appointment_slots',
        'timezone',
        'first_name',
        'last_name',
        'phone',
        'email',
        'status',
    ];

    protected $casts = [
        'appointment_date' => 'date',
        'appointment_slots' => 'array',
    ];
}
