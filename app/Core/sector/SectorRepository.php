<?php

namespace App\Core\sector;

use GuzzleHttp\Client;

class SectorRepository implements ISectorRepository
{

    private Client $client;

    /**
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getSectors($districtId)
    {
        $response = $this->client->get('/sector/get/all/'.$districtId);
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }
}
