<?php

namespace App\Services\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenService
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Gera um token de acesso para o usuário autenticado usando Sanctum.
     *
     * @return array
     */
    public function passwordToken(): array
    {
        // Valida os dados de entrada (você pode personalizar as regras conforme necessário)
        $credentials = $this->request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        // Tenta autenticar o usuário com as credenciais fornecidas
        if (!Auth::attempt($credentials)) {
            return ['error' => 'Credenciais inválidas'];
        }

        $user = Auth::user();
        // Cria o token utilizando o Sanctum e retorna o token em texto plano
        $token = $user->$this->createToken('API Token')->plainTextToken;

        return [
            'token' => $token,
            'user'  => $user,
        ];
    }

    public function createToken($user): string
    {
        return $user->createToken('authToken')->accessToken;
    }

}
