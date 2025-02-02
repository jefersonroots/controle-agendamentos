<?php

namespace App\Repositories\Contracts;

use App\DTO\Repository\Filter\FilterDTO;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface RepositoryInterface 
{

    public function findAll();
    public function findById(int|string $id);
    public function create(array $data): Model;
    public function update(array $data, int|string $id): ?Model;
    public function delete(int|string $id): bool;

}
