<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 01/02/2018
 * Time: 10:25
 */

namespace App\Repositories\Eloquents;
use App\Models\Admin\Products;
use App\Repositories\ProductsRepositoryInterface;

class ProductsRepositoriy extends BaseRepository implements ProductsRepositoryInterface
{
    public function getBlankModel()
    {
        return new Products();
    }

    public function __construct(Products $products)
    {
        $this->model = $products;
    }
}