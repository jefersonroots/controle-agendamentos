<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Contracts\AuthControllerInterface;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\AuthService;

class AuthController implements AuthControllerInterface
{
    public function __construct(protected AuthService $service)
    {

    }
    public function login(LoginRequest $loginRequest)
    {
        return $this->service->login();
    }
}
