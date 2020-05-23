<?php

namespace App\Repositories\Interfaces;

use App\User;

interface ContactRepositoryInterface
{
    public function all();
    public function insert($data);
    public function getById($id);
    public function updateData($data, $id);
    public function getDataByWhere($where);
}