<?php

namespace App\Core\authentication;

class AuthService
{
    private IAuthRepository $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function login($request)
    {
        return $this->repository->login($request);
    }
}