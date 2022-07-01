<?php

namespace App\Core\district;

use App\Utils\GuzzelClientUtil;

class DistrictServiceFactory
{
    public static function create(){
        $client = GuzzelClientUtil::create();
        $repository = new DistrictRepository($client);
        return new DistrictService($repository);
    }
}