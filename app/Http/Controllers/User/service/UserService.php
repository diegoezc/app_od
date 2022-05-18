<?php

namespace App\Http\Controllers\User\service;

interface UserService
{
    public function getAllUsers(string $orderBy,string $type,int $perPage, string $search = '');

}
