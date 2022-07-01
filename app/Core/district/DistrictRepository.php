<?php

namespace App\Core\district;

use GuzzleHttp\Client;

class DistrictRepository implements IDistrictRepository
{

    private Client $client;

    /**
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getDistricts($countryId)
    {
        $response = $this->client->get('/district/get/all/' . $countryId);
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd(count($assoc[0]['sectors']));
        dd($assoc);
        return $assoc;
    }

    public function postDistricts($request)
    {
        $userToken = $request->session()->get('userToken');
        $countryId = $request->countryId;
        $response = $this->client->post(
            '/district/add/' . $countryId,
            [
                'headers' => ['Authorization' => 'Bearer ' . $userToken],
                'json' => [
                    ['name' => $request->name,]
                ]
            ]
        );
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc['sectors']);
        return $assoc;
    }
}
