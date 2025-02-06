<?php

namespace App\Http\Controllers\Contracts;

use App\Http\Requests\Request;
use Illuminate\Http\JsonResponse;

interface ControllerInterface
{
    public function index(Request $request);

    public function get(int|string $id, Request $request);

    public function create(Request $request);

    public function update(Request $request, int|string $id);

    public function delete(int|string $id);
    

}
