<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\files\FilesServiceFactory;
use App\Core\sector\SectorServiceFactory;

class FilesController extends Controller
{
    private $file_service;
    private $sector_service;

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

    public function addFile(Request $request){
        $create_file = $this->file_service->createFile($request);
        if ($create_file) {
            flash()->success('File added successfully!');
        } else {
            flash()->error('Failed to Save File, please try again!');
        }
        return redirect()->route('files');
    }

    public function createFile(){
        $sectors = $this->sector_service->getSectors();
        return view('files.create_file', compact('sectors'));
    }
}
