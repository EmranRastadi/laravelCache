<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function orderUser($order);

    public function getById($id);

    public function delCache($order);
}
