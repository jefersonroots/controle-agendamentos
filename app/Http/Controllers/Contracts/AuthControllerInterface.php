<?php

namespace App\Http\Controllers\Contracts;

use App\Http\Requests\Auth\LoginRequest;

interface AuthControllerInterface
{
    public function login(LoginRequest $loginRequest);

}
