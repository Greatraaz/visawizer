<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = [
        'productName',
        'slug',
        'categoryId',
        'subcategoryId',
        'mrp',
        'hsnCode',
        'sku',
        'image',
        'galleryImages',
        'description',
        'features',
        'status',
        'date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function subcategory()
    {
        return $this->belongsTo(Category::class, 'subcategoryId');
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class, 'productId');
    }

    public function getDisplayPriceAttribute()
    {
        if (Auth::guard('web')->check()) {
            $userTypeId = Auth::user()->userTypeId;
            $price = $this->prices()->where('userTypeId', $userTypeId)->first();
            return $price ? $price->price : $this->mrp;
        }
        return $this->mrp;
    }

}
