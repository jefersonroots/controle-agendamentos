<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserService
{
    public function __construct(
        protected Request $request,
        protected $resource = UserResource::class
    ) {}

}
