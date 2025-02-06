<?php

namespace App\Services\Contracts;

use Illuminate\Http\JsonResponse;

interface AuthServiceInterface
{
    public function login(): JsonResponse;
}
