<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\UserService;

class UserController extends Controller
{

    protected $service;
    public function __construct(UserService $service)
    {
        $this->service= $service;

    }
    public function index(){

    }

}
