<?php

namespace App\Utils;

use GuzzleHttp\Client;

class GuzzelClientUtil
{
    
    public static function create(): Client
    {
        return new Client([
            'base_uri' => 'http://admin.servicehunt.ug'
        ]);
    }
    
}