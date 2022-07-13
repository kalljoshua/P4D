<?php

namespace App\Core\sector;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

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

    public function getSectors()
    {
        $response = $this->client->get('/sector/get/all');
        $data = $response->getBody();
        $assoc = json_decode($data, true);
        return $assoc;
    }

    public function getDistrictSectors($districtId)
    {
        $response = $this->client->get('/sector/get/all/'.$districtId);
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }

    public function postSector($request)
    {
        $userToken = Session::get('userToken');
        $districtId = $request->districtId;
        
        $response = $this->client->post(
            '/sector/add/' . $districtId,
            [
                'headers' => ['Authorization' => 'Bearer ' . $userToken],
                'json' => [
                    ['name' => $request->name,]
                ]
            ]
        );
        $data = $response->getBody();
        $assoc = json_decode($data, true);
        return $assoc;
    }

    public function deleteSector($sectorId)
    {
        $response = $this->client->delete('/sector/delete/' . $sectorId);
        $data = $response->getBody();
        $assoc = json_decode($data, true);
        return $assoc;
    }
}
