<?php

namespace App\Core\country;
use Illuminate\Support\Facades\Session;

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

    public function postCountry($request)
    {
        $userToken = Session::get('userToken');
        $response = $this->client->post('/country/add', [
            'headers' => ['Authorization' => 'Bearer ' . $userToken],
            'json' => [
                ['name' => $request->name,]
            ]
        ]);
        $data = $response->getBody();
        $assoc = json_decode($data, true);
        return $assoc;
    }

    public function editCountry($request, $countryId)
    {
        $userToken = Session::get('userToken');

        $response = $this->client->post('/country/add/'.$countryId, [
            'headers' => ['Authorization' => 'Bearer ' . $userToken],
            'json' => [
                ['name' => $request->name,]
            ]
        ]);
        $data = $response->getBody();
        $assoc = json_decode($data, true);
        return $assoc;
    }

    public function deleteCountry($countryId)
    {
        $response = $this->client->delete('/country/delete/' . $countryId);
        $data = $response->getBody();
        $assoc = json_decode($data, true);
        return $assoc;
    }
}
