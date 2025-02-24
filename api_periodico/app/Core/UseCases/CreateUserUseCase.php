<?php

namespace App\Core\UseCases;

use App\Core\Entities\User;

class CreateUserUseCase
{
    public function execute(array $data)
    {
        return User::create($data);
    }
}
