<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 01/02/2018
 * Time: 10:33
 */

namespace App\Repositories\Eloquents;
use App\Models\Admin\Images;
use App\Repositories\ImagesRepositoryInterface;

class ImagesRepository extends BaseRepository implements ImagesRepositoryInterface
{
    public function getBlankModel()
    {
        return new Images();
    }

    public function __construct(Images $images)
    {
        $this->model = $images;
    }
}