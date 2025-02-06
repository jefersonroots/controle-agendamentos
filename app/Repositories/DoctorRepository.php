<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\Contracts\RepositoryInterface;

class DoctorRepository extends Repository implements RepositoryInterface
{
    public function __construct(Doctor $model)
    {
        parent::__construct($model);
    }
}
