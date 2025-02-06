<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Contracts\RepositoryInterface;

abstract class Repository implements RepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Retorna todos os registros.
     */
    public function findAll(): Collection
    {
        return $this->model->all();
    }

    /**
     * Retorna um registro específico pelo ID.
     */
    public function findById(int|string $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Cria um novo registro.
     */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * Atualiza um registro existente pelo ID.
     */
    public function update(array $data, int|string $id): Model
    {
        $record = $this->findById($id);
        $record->update($data);
        return $record;
    }

    /**
     * Exclui um registro pelo ID.
     */
    public function delete(int|string $id): bool
    {
        $record = $this->findById($id);
        return $record->delete();
    }
}
