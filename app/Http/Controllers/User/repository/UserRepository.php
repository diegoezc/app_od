<?php

namespace App\Http\Controllers\User\repository;

use App\Models\User;
use App\Repositories\Repository;
use App\Services\Service;
use App\Http\Controllers\User\service\UserService;


class UserRepository extends Repository implements Service, UserService
{
    public function __construct()
    {
        $this->model = new User();
    }

    public function getAllUsers(string $orderBy,string $type,int $perPage, string $search='')
    {
        $users=$this->model->query()
            ->search($search)
            ->orderBy($orderBy,$type)
            ->paginate($perPage);

        return $users;
    }

}
