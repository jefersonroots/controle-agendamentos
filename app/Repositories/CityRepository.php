<?php

namespace App\Repositories;

use App\Models\Address\City;
use App\Repositories\Contracts\RepositoryInterface;

class CityRepository extends Repository implements RepositoryInterface
{
    public function __construct(City $model)
    {
        parent::__construct($model);
    }
}
