<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;

    protected $fillable = [
        'parentId',
        'category',
        'slug',
        'image',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'categoryId');
    }

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parentId');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parentId');
    }
}
