<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'parent_id',
    ];
    protected $dates = ['deleted_at'];

    public function parent()
    {
        return $this->belongsTo(\App\Models\Admin\Categories::class , 'parent_id', 'id');
    }
    public function children()
    {
        return $this->hasMany(\App\Models\Admin\Categories::class, 'parent_id', 'id');
    }
}
