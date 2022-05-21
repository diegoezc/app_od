<?php

namespace App\Http\Controllers\User\controller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\request\StoreUserRequest;
use App\Http\Controllers\User\service\UserService;

class StoreUserController extends Controller
{

    protected $userService;
    public function __construct( UserService $userService)
    {
        $this->userService = $userService;
    }
    public function storeUser( $request){
        return $this->responseWithData($request->all());

    }
}
