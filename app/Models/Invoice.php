<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';  
    public $timestamps = false;
    protected $fillable = [
        'userId',
        'invoiceNo',
        'username',
        'email',
        'mobile',
        'orderId',
        'discount',
        'cgst',
        'sgst',
        'igst',
        'gstno',
        'subTotal',
        'totalAmount',
        'productDetail',
        'state',
        'status',
        'date',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'userId');
    }
}
