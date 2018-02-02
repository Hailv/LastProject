<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'customer_id',
        'order_no',
        'total',
        'is_delivered',
        'is_cancel',
        'cancel_description'
    ];
    protected $dates = ['deleted_at'];

    public function customer()
    {
        return $this->belongsTo(\App\Models\Admin\Customer::class,'customer_id','id');
    }
}
