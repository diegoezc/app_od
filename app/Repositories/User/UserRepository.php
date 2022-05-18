<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Repository;
use App\Services\Service;
use App\Services\User\UserService;

class UserRepository extends Repository implements Service, UserService
{
   public function __construct()
   {
       $this->model = new User();
   }

}
