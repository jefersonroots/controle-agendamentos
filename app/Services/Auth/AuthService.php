<?php

namespace App\Services\Auth;

use App\Services\Contracts\AuthServiceInterface;
use App\Services\UserService;
use App\Traits\Http\Response\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthService implements AuthServiceInterface
{
    use ApiResponse;

    public function __construct(
        protected UserService $userService,
        protected Request $request
    ) {
    }

    public function login(): JsonResponse
    {
        $email = $this->request->input('email');
        $password = $this->request->input('password');

        return $this->handleNormalLogin($email, $password);
    }

    public function handleNormalLogin(string $email, string $password): JsonResponse
    {
        $credentials = ['email' => $email, 'password' => $password];
    
        // Tenta autenticar usando o guard 'api' (JWT)
        if (!$token = auth('api')->attempt($credentials)) {
            return $this->errorResponse(__('auth.failed'), 401);
        }
    
        // Para incorporar os dados do usuário como claims personalizadas,
        // você pode refazer o token com claims. Porém, observe que o método
        // attempt() já gera o token e não permite adicionar claims diretamente.
        // Uma abordagem é gerar o token separadamente:
        
        $user = auth('api')->user();
        
        // Gera um novo token com claims personalizadas:
        // Nota: Nem todas as implementações do JWTAuth permitem alterar claims
        // depois do token ter sido gerado. Uma estratégia pode ser gerar o token
        // manualmente utilizando JWTAuth::claims(...)->fromUser($user).
        $user = auth('api')->user();
        $token = JWTAuth::claims(['user' => $user->toArray()])->fromUser($user);
        
        return $this->generateSuccessResponse($token);
    }
    

    private function generateSuccessResponse(string $token): JsonResponse
    {
        $data = [
            'token' => 'Bearer ' . $token,
        ];

        return $this->successResponse($data);
    }

    public function refreshToken(): JsonResponse
    {
        return $this->errorResponse('Refresh token não suportado', 400);
    }
}
