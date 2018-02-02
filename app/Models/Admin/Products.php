<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'shop_id',
        'category_id',
        'product_code',
        'serial',
        'detail',
        'description',
        'import_date',
        'quantity',
        'price',
        'views',
        'buys',
        'img'
    ];
    protected $dates = ['deleted_at'];
//    public function shop()
//    {
//        return $this->belongsTo(\App\Models\Admin\Shops::class, 'shop_id', 'id');
//    }
    public function category()
    {
        return $this->belongsTo(\App\Models\Admin\Categories::class, 'category_id', 'id');
    }

    public function photo()
    {
        return $this->hasMany(\App\Models\Admin\Images::class,'product_id','id');
    }
}
