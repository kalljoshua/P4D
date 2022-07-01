<?php

namespace App\Core\country;

use App\Utils\GuzzelClientUtil;

class CountryServiceFactory
{
    public static function create(){
        $client = GuzzelClientUtil::create();
        $repository = new CountryRepository($client);
        return new CountryService($repository);
    }
}