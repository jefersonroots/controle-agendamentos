<?php

namespace App\Traits\Http\Response;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponse
{
    /**
     * Return a successful response.
     *
     * @param  mixed  $data
     */
    public function successResponse($data = null, int $code = Response::HTTP_OK): JsonResponse
    {

        if (is_array($data)) {
            return response()->json([
                'status' => 'success',
                'data' => $data,
            ], $code);
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'message' => $data,
            ],
        ], $code);
    }

    /**
     * Return an error response.
     *
     * @param  string  $message
     */
    public function errorResponse(string|array $message, int $code, int $errorCode = 0, array $errors = []): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $errors,
            'code' => $errorCode,
        ], $code);
    }
}
