<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = false;
    protected $fillable = [
        'userId',
        'razorpay_order_id',
        'razorpay_payment_id',
        'orderId',
        'productDetail',
        'schemeApplied',
        'discount',
        'netAmount',
        'paymentMethod',
        'message',
        'date',
        'status',
        'view'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'userId');
    }
}
