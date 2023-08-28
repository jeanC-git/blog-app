<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseCode;

trait ApiResponse
{

    public function success(mixed $data = [], string $message = '', int $http_code = ResponseCode::HTTP_OK): JsonResponse
    {
        return $this->json(data: $data, message: $message, type: 'success', http_code: $http_code);
    }

    public function error(string $message = '', int $http_code = ResponseCode::HTTP_BAD_REQUEST, $errors = []): JsonResponse
    {
        return $this->json(message: $message, type: 'error', http_code: $http_code, errors: $errors);
    }

    public function json(mixed $data = [], string $message = '', string $type = 'info', mixed $http_code = ResponseCode::HTTP_OK, $errors = []): JsonResponse
    {
        return response()->json(get_defined_vars(), $http_code);
    }
}
