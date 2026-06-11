<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;
    protected $table = 'case_study';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'industry',
        'description',
        'result',
        'image',
        'status'
    ];

}
