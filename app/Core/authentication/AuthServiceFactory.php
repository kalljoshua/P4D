<?php

namespace App\Core\authentication;

use App\Utils\GuzzelClientUtil;

class AuthServiceFactory
{
    public static function create(){
        $client = GuzzelClientUtil::create();
        $repository = new AuthRepository($client);
        return new AuthService($repository);
    }
}