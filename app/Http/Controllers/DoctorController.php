<?php

namespace App\Http\Controllers;

use App\Services\DoctorService;

class DoctorController extends Controller
{
    public function __construct(DoctorService $service)
    {
        parent::__construct($service);
    }

    /**
     * Define as regras de validação específicas para as operações.
     */
    protected function getValidationRules(string $method): array
    {
        $rules = [
            'store' => [
                'name' => 'required|string|max:255',
                'estado' => 'required|string|max:2',
            ],
            'update' => [
                'name' => 'sometimes|string|max:255',
                'estado' => 'sometimes|string|max:2',
            ],
        ];

        return $rules[$method] ?? [];
    }
}
