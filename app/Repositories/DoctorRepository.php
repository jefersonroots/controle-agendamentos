<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class DoctorRepository extends Repository implements RepositoryInterface
{
    public function __construct(Doctor $model)
    {
        parent::__construct($model);
    }
    
    public function getByCity(int|string $id_cidade): Collection
    {
        return Doctor::where('cidade_id', $id_cidade)->get();
    }
}
