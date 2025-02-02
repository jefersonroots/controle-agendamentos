<?php

namespace App\Services\Contracts;

use App\DTO\Contracts\DTOInterface;
use App\Repositories\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ServiceInterface
{
    /**
     * Retorna todos os registros.
     *
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * Retorna o registro com base no ID informado.
     *
     * @param int|string $id
     * @return Model|null
     */
    public function findById(int|string $id): ?Model;

    /**
     * Cria um novo registro.
     *
     * @param array|DTOInterface $data
     * @return Model
     */
    public function create(array|DTOInterface $data): Model;

    /**
     * Atualiza o registro com base no ID informado.
     *
     * @param array|DTOInterface $data
     * @param int|string $id
     * @return Model
     */
    public function update(array|DTOInterface $data, int|string $id): Model;

    /**
     * Remove o registro com base no ID informado.
     *
     * @param int|string $id
     * @return bool
     */
    public function delete(int|string $id): bool;

    /**
     * Retorna o repositório utilizado pelo serviço.
     *
     * @return RepositoryInterface
     */
    public function getRepository(): RepositoryInterface;
}