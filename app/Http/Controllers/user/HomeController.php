<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Core\files\FilesServiceFactory;
use App\Core\sector\SectorServiceFactory;
use SNMP;

class HomeController extends Controller
{

    private $file_service;
    private $sector_service;

    public function __construct()
    {
        $this->file_service = FilesServiceFactory::create();
        $this->sector_service = SectorServiceFactory::create();
    }

    public function home()
    {
        $files = $this->file_service->getPlanFiles();
        $sectors = $this->sector_service->getSectors();
        //dd($sectors);
        return view('user.home.home', compact('files', 'sectors'));
    }

    public function contact(){
        return view('user.home.contact');
    }
}
