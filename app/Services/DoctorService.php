<?php

namespace App\Services;

use App\Repositories\DoctorRepository;

class DoctorService extends Service
{
    public function __construct(DoctorRepository $repository)
    {
        parent::__construct($repository);
    }

    public function getByCity(int|string $id_cidade)
    {
        return response()->json($this->repository->getByCity($id_cidade));
    }
}
