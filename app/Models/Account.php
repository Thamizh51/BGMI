<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'email_or_phone',
        'password',
        'account_type',
    ];

    protected $hidden = [
        'password',
    ];
}