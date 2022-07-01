<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\files\FilesServiceFactory;
use App\Core\sector\SectorServiceFactory;

class FilesController extends Controller
{
    private $file_service;

    public function __construct()
    {
        $this->file_service = FilesServiceFactory::create();
        $this->sector_service = SectorServiceFactory::create();
    }

    
    public function getFiles(){
        $files = $this->file_service->getFiles();
        return view('files.files', compact('files'));
    }

    public function getBudgetFiles(){
        $files = $this->file_service->getFiles();
        return view('files.files', compact('files'));
    }

    public function getPlanFiles(){
        $files = $this->file_service->getFiles();
        return view('files.files', compact('files'));
    }

    public function createPlan(Request $request)
    {
        $create_file = $this->file_service->getFiles();
    }
}
