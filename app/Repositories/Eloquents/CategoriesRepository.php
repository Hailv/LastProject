<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 01/02/2018
 * Time: 10:18
 */

namespace App\Repositories\Eloquents;
use App\Models\Admin\Categories;
use App\Repositories\CategoriesRepositoryInterface;

class CategoriesRepository extends BaseRepository implements CategoriesRepositoryInterface
{
    public function getBlankModel()
    {
        return new Categories();
    }

    public function __construct(Categories $categories)
    {
        $this->model = $categories;
    }
}