<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Resource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            ...parent::toArray($request),

        ];
    }

    public function additional(array $data)
    {
        return parent::additional($data);
    }
}
