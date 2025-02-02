<?php

namespace App\Services;

use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\Services\Contracts\ServiceInterface;
use App\DTO\Contracts\DTOInterface;

abstract class Service implements ServiceInterface
{
    protected RepositoryInterface $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function findById(int|string $id): ?Model
    {
        return $this->repository->findById($id);
    }

    public function create(array|DTOInterface $data): Model
    {
        return $this->repository->create($data);
    }

    public function update(array|DTOInterface $data, int|string $id): Model
    {
        return $this->repository->update($data, $id);
    }

    public function delete(int|string $id): bool
    {
        return $this->repository->delete($id);
    }

    public function getRepository(): RepositoryInterface
    {
        return $this->repository;
    }
}
