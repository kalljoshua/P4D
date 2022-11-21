<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Core\files\FilesServiceFactory;
use App\Core\sector\SectorServiceFactory;

class FilesController extends Controller
{
    //
    private $file_service;
    private $sector_service;

    public function __construct()
    {
        $this->file_service = FilesServiceFactory::create();
        $this->sector_service = SectorServiceFactory::create();
    }

    public function getFiles()
    {
        $files = $this->file_service->getPlanFiles();
        $sectors = $this->sector_service->getSectors();
        //dd($files);
        return view('user.files.files', compact('files', 'sectors'));
    }

    public function getPlanFiles()
    {
        $files = $this->file_service->getPlanFiles();
        $sectors = $this->sector_service->getSectors();
        //dd($files);
        return view('user.files.plan_files', compact('files', 'sectors'));
    }

    public function getBudgetFiles()
    {
        $files = $this->file_service->getPlanFiles();
        $sectors = $this->sector_service->getSectors();
        //dd($files);
        return view('user.files.budget_files', compact('files', 'sectors'));
    }

    public function getYearFiles()
    {
        $files = $this->file_service->getPlanFiles();
        $sectors = $this->sector_service->getSectors();
        //dd($files);
        return view('user.files.year_files', compact('files', 'sectors'));
    }

    public function getDistrictFiles()
    {
        $files = $this->file_service->getPlanFiles();
        $sectors = $this->sector_service->getSectors();
        //dd($files);
        return view('user.files.files', compact('files', 'sectors'));
    }

    public function getSectorFiles()
    {
        $files = $this->file_service->getPlanFiles();
        $sectors = $this->sector_service->getSectors();
        //dd($files);
        return view('user.files.files', compact('files', 'sectors'));
    }

    public function getFileDetails($file_id){
        
    }
}
