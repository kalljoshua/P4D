<?php

namespace App\Core\files;

use GuzzleHttp\Client;

class FilesRepository implements IFilesRepository
{

    private Client $client;

    /**
     * @param $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getFiles()
    {
        $response = $this->client->get('/files/get/all/');
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }

    public function getBudgetFiles()
    {
        $response = $this->client->get('/files/get/all/');
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }

    public function getPlanFiles()
    {
        $response = $this->client->get('/files/get/all/');
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }

    public function createFile($request)
    {
        $userToken = $request->session()->get('userToken');
        if ($request->file_type == 'plan') {
            $response = $this->client->post(
                '/plan/add',
                [
                    'headers' => ['Authorization' => 'Bearer ' . $userToken],
                    'multipart' => [
                        'name'     => 'file',
                        'contents' => fopen($request->file, 'r'),
                        'headers'  => ['Content-Type' => 'pdf']
                    ],
                    'json' => [
                        [
                        'sectorId' => $request->sectorId,
                        'title' => $request->title,
                        'year' => $request->year,
                        ]

                    ]
                ]
            );
        } else if ($request->file_type == 'budget') {
            $response = $this->client->post(
                '/budget/add',
                [
                    'headers' => ['Authorization' => 'Bearer ' . $userToken],
                    'multipart' => [
                        'name'     => 'file',
                        'contents' => fopen($request->file, 'r'),
                        'headers'  => ['Content-Type' => 'pdf']
                    ],
                    'json' => [
                        [
                        'sectorId' => $request->sectorId,
                        'title' => $request->title,
                        'year' => $request->year,
                        ]

                    ]
                ]
            );
        }

        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }
}
