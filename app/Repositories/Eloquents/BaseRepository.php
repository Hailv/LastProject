<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 01/02/2018
 * Time: 10:04
 */

namespace App\Repositories\Eloquents;


use App\Repositories\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->boot();
    }

    abstract public function getBlankModel();

    public function gets()
    {
        return $this->model->paginate(10);
    }
    public function store($data)
    {
        return $this->model->create($data);
    }
    public function show($id)
    {
        return $this->model->find($id);
    }
    public function update($data,$id)
    {
        return $this->model->find($id)->update($data);
    }
    public function destroy($id)
    {
//        return $this->destroy($id);
        return $this->model->find($id)->delete();
    }
}