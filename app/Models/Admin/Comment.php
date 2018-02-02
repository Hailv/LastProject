<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'customer_id',
        'admin_id',
        'content',
    ];
    protected $dates = ['deleted_at'];

    public function customer()
    {
        return $this->belongsTo(\App\Models\Admin\Customer::class, 'customer_id', 'id');
    }
    public function admin()
    {
        return $this->belongsTo(\App\User::class, 'admin_id', 'id');
    }
}
