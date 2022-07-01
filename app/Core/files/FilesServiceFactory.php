<?php

namespace App\Core\files;

use App\Utils\GuzzelClientUtil;

class FilesServiceFactory
{
    public static function create(){
        $client = GuzzelClientUtil::create();
        $repository = new FilesRepository($client);
        return new FilesService($repository);
    }
}