<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends AuthenticatableUser
{
    use HasFactory;

    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'userTypeId',
        'username',
        'password',
        'pass',
        'email',
        'mobile',
        'address',
        'email_verified',
        'mobile_verified',
        'status',
        'date',
    ];

    protected $hidden = [
        'password',
        'pass',
    ];
}
