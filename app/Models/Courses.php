<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'price',
        'minPrice',
        'features',
        'description',
        'duration',
        'certificate',
        'students',
        'image',
        'status'
    ];

}
