<?php

namespace App\Core\authentication;

use GuzzleHttp\Client;

class AuthRepository implements IAuthRepository
{

    private Client $client;

    /**
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function login($request)
    {
        $response = $this->client->post('/authenticate/getToken', [
            'json' => [
                'userName' => $request->userName,
                'password' => $request->password,
            ]
        ]);
        return $response;
    }
}
