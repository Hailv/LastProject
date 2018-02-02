<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 01/02/2018
 * Time: 10:31
 */

namespace App\Repositories\Eloquents;
use App\Models\Admin\Sales;
use App\Repositories\SalesRepositoryInterface;
class SalesRepository extends BaseRepository implements SalesRepositoryInterface
{
    public function getBlankModel()
    {
        return new Sales();
    }

    public function __construct(Sales $sales)
    {
        $this->model = $sales;
    }
}