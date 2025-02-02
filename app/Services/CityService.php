<?php

namespace App\Services;

use App\Repositories\CityRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;


class CityService extends Service
{
    public function __construct(CityRepository $repository)
    {
        parent::__construct($repository);
    }

    // Adicione métodos personalizados se necessário
}
