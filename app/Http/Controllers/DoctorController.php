<?php

namespace App\Http\Controllers;

use App\Services\DoctorService;

class DoctorController extends Controller
{
    public function __construct(DoctorService $service)
    {
        parent::__construct($service);
    }

}
