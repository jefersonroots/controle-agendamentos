<?php

namespace App\DTO\Contracts;

interface DTOInterface
{
    public function toArray(): array;

    public function toFillable(): array;
}
