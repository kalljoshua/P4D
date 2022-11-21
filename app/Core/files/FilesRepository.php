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

        return $assoc;
    }

    public function getPlanFiles()
    {
        $response = $this->client->get('/plan/get/all/');
        $data = $response->getBody();
        $assoc = json_decode($data, true);

        //dd($assoc);
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
        if($request->file('file')){
            $file= $request->file('file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $path = public_path('public/files/');
            $file-> move(public_path('public/files'), $filename);
        }
        $sectorId = $request->sectorId;
        $title = $request->title;
        $year = $request->year;

        $response = $this->client->request(
            'POST',
            '/' . $type . '/add/' . $sectorId . '/' . $year . '/' . $title,
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $userToken,
                    'Content-Type' => 'application/pdf',
                    'Content-Length' => ''
                ],
                'multipart' => [
                    [
                        'name'     => 'file',
                        'contents' => file_get_contents($path . $filename),
                        'filename' => $filename
                    ],
                ],
            ]
        );

        return $response->getBody();
    }
}
