<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RepositoryInterface 
{
    /**
     * Retorna todos os registros.
     *
     * @return EloquentCollection|Collection
     */
    public function findAll(): EloquentCollection;

    /**
     * Retorna um registro específico pelo ID.
     *
     * @param int|string $id
     * @return Model|null
     */
    public function findById(int|string $id): ?Model;

    /**
     * Cria um novo registro com os dados fornecidos.
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model;

    /**
     * Atualiza um registro existente com os dados fornecidos.
     *
     * @param array $data
     * @param int|string $id
     * @return Model|null
     */
    public function update(array $data, int|string $id): ?Model;

    /**
     * Exclui um registro pelo ID.
     *
     * @param int|string $id
     * @return bool
     */
    public function delete(int|string $id): bool;
}
