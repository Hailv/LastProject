<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'total'
    ];
    protected $dates = ['deleted_at'];
    public function product()
    {
        return $this->belongsTo(\App\Models\Admin\Products::class,'product_id','id');
    }
    public function order()
    {
        return $this->belongsTo(\App\Models\Admin\Order::class,'order_id','id');
    }
}
