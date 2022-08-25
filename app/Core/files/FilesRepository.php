<?php

namespace App\Core\files;

use Illuminate\Support\Facades\Session;
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
        $userToken = Session::get('userToken');
        $response = $this->client->get('/budget/get/all', [
            'headers' => ['Authorization' => 'Bearer ' . $userToken],
        ]);
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        return $assoc;
    }

    public function getBudgetFiles()
    {
        $response = $this->client->get('/budget/get/all/');
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }

    public function getPlanFiles()
    {
        $response = $this->client->get('/plan/get/all/');
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        dd($assoc);
        return $assoc;
    }

    public function createFile($request)
    { 
        $userToken = $request->session()->get('userToken');
        if ($request->file_type == 'plan') {
            $data = $this->upload_files($userToken, 'plan', $request);
        } else if ($request->file_type == 'budget') {
            $data = $this->upload_files($userToken, 'budget', $request);
        }

        $assoc = json_decode($data, true);
        dd($assoc);
        return $assoc;
    }

    private function upload_files($userToken, $type, $request)
    {
        $name = $request->file('file')->getClientOriginalName();
        //dd($name);
        $fileinfo = array(
            'name'          =>  $name,
            'type'          =>  'pdf',
        );
        $response = $this->client->post(
            '/' . $type . '/add',
            [
                'headers' => ['Authorization' => 'Bearer ' . $userToken, 'Content-Type' => 'text/plain',],
                'multipart' => [
                    [
                        'name'     => $name,
                        'contents' => fopen($request->file, 'r'),
                        'headers' => ['Content-Type' => 'pdf'],
                    ]
                ],
                'json' => [
                    [
                        'file' => [
                            'name'     => [$name],
                            'contents' => [json_encode($fileinfo)],
                        ],
                        'sectorId' => [$request->sectorId],
                        'title' => [$request->title],
                        'year' => [90, 90],
                    ]

                ]
            ]
        );
        return $response->getBody();
    }
}
