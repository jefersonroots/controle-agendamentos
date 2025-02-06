<?php

namespace App\Services\Contracts;

use App\DTO\Contracts\DTOInterface;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

interface ServiceInterface
{
    /**
     * Retorna todos os registros.
     *
     * @return Collection
     */
    public function findAll(): Collection;

    public function findById(int|string $id): ?Model;

    public function create(array|DTOInterface $data): Model;

    public function update(array|DTOInterface $data, int|string $id): Model;

    public function delete(int|string $id): bool;

    public function getByCity(int|string $id);
    
}