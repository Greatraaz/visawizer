<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'userAddress';
    public $timestamps = false;
    protected $fillable = [
        'userId',
        'name',
        'mobile',
        'country',
        'state',
        'city',
        'pincode',
        'address'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'userId');
    }

}
