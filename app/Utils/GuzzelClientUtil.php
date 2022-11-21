<?php

namespace App\Utils;

use Illuminate\Support\Facades\Session as Session;
use GuzzleHttp\Client;

class GuzzelClientUtil
{
    
    public static function create(): Client
    {
        $userToken = Session::get('userToken');
        return new Client([
            'base_uri' => 'http://admin.servicehunt.ug',
            'Authorization' => 'Bearer ' . $userToken, 
        ]);
    }
    
}