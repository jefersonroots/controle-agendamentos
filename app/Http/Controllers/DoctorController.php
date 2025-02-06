<?php

namespace App\Http\Controllers;

use App\Services\DoctorService;

class DoctorController extends Controller
{
    protected DoctorService $service;

    public function __construct(DoctorService $service)
    {
        $this->service = $service;
    }

    public function getByCity(int|string $id_cidade)
    {
        return response()->json($this->service->getByCity($id_cidade));
    }
}
