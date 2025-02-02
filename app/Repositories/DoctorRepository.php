<?php

namespace App\Repositories;

use App\Models\Doctor;

class DoctorRepository extends Repository
{
    public function __construct(Doctor $model)
    {
        parent::__construct($model);
    }
}
