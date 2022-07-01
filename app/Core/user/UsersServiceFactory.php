<?php

namespace App\Core\user;

use App\Utils\GuzzelClientUtil;

class UserServiceFactory
{
    public static function create(){
        $client = GuzzelClientUtil::create();
        $repository = new UsersRepository($client);
        return new UsersService($repository);
    }
}