<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminars extends Model
{
    use HasFactory;
    protected $table = 'seminars';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'speaker',
        'description',
        'start_date',
        'end_date',
        'location',
        'type',
        'start_time',
        'end_time',
        'image',
        'status'
    ];

}