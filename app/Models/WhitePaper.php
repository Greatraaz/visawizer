<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhitePaper extends Model
{
    use HasFactory;
    protected $table = 'white_papers';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'status'
    ];

}
