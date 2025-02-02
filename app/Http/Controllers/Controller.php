<?php

namespace App\Http\Controllers;

use App\Enums\General;
use App\Http\Controllers\Contracts\ControllerInterface;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\Request;
use App\Services\Contracts\ServiceInterface;
use App\Traits\Http\Response\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class Controller implements ControllerInterface
{
    use ApiResponse;

    public function __construct(private ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return $this->service->findAll($request);
    }

    public function get(int|string $id, Request $request)
    {
        return $this->service->findById($id, $request);
    }

    public function create(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function update(Request $request, int|string $id): JsonResource
    {
        return $this->service->update($request->all(), $id);
    }

    public function delete(int|string $id)
    {
        return $this->service->delete($id);
    }
}