<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;

class UserResource extends Resource
{
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
