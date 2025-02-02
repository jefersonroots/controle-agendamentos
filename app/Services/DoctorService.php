<?php

namespace App\Services;

use App\Repositories\DoctorRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;


class DoctorService extends Service
{
    public function __construct(DoctorRepository $repository)
    {
        parent::__construct($repository);
    }

}
