<?php

namespace App\Repositories\Auth;

use App\Models\User;

class UserRepository 
{
    public function __construct(protected User $model)
    {
        // parent::__construct($model);
    }
}
