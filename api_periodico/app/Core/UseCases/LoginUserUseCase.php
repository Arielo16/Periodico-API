<?php

namespace App\Core\UseCases;

use Illuminate\Support\Facades\Auth;

class LoginUserUseCase
{
    public function execute(array $data)
    {
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return ['success' => 'Login successful', 'user' => Auth::user()];
        } else {
            return ['error' => 'Invalid email or password'];
        }
    }
}
