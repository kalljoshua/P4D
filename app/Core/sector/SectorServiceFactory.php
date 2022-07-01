<?php

namespace App\Core\sector;

use App\Utils\GuzzelClientUtil;

class SectorServiceFactory
{
    public static function create(){
        $client = GuzzelClientUtil::create();
        $repository = new SectorRepository($client);
        return new SectorService($repository);
    }
}