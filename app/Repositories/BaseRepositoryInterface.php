<?php
/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 01/02/2018
 * Time: 10:02
 */
namespace App\Repositories;
interface BaseRepositoryInterface
{
    public function getBlankModel();
    public function gets();
    public function store($data);
    public function show($id);
    public function update($data,$id);
    public function destroy($id);
}