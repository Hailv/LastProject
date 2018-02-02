<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'email',
        'address',
        'cmt',
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
    protected $dates = ['deleted_at'];

}

