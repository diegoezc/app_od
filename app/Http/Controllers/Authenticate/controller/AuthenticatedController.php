<?php

namespace App\Http\Controllers\Authenticate\controller;

use App\Http\Controllers\Authenticate\service\AuthenticatedService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CredentialRequest;
use http\Env\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AunthenticatedController extends Controller
{
    protected $service;
    public function __construct(AuthenticatedService $authenticateService)
    {
        $this->authenticateService = $authenticateService;
    }
    public function login(CredentialRequest $request)
    {
        $credentials = $request->only('email','password');
        try {
            if (! $token = JWTAuth::attempt($credentials)){
                return $this->sendErrorPopup('invalid_credentials',400);
            }
        }catch (JWTException $e){
            return $this->sendErrorPopup('could_not_create_token',50);
        }
        return $this->responseWithData('token');
    }



}
