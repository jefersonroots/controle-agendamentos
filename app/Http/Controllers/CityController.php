<?php

namespace App\Http\Controllers;

use App\Services\CityService;

class CityController extends Controller
{
    public function __construct(CityService $service)
    {
        parent::__construct($service);
    }
}
