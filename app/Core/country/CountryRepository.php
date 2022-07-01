<?php

namespace App\Core\country;

use GuzzleHttp\Client;

class CountryRepository implements ICountryRepository
{

    private Client $client;

    /**
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getCountries()
    {
        $response = $this->client->get('/country/get');
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        //dd($assoc);
        return $assoc;
    }
}
