<?php

namespace App\Core\authentication;

interface IAuthRepository
{
    public function login($request);

}