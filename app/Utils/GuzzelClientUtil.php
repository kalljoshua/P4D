<?php

namespace App\Utils;

use GuzzleHttp\Client;

class GuzzelClientUtil
{
    
    public static function create(): Client
    {
        $userToken = $request->session()->get('userToken');
        return new Client([
            'base_uri' => 'http://admin.servicehunt.ug',
            'Authorization' => 'Bearer ' . $userToken, 
        ]);
    }
    
}