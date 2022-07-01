<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\sector\SectorServiceFactory;

class SectorsController extends Controller
{
    //
    private $district_service;

    public function __construct()
    {
        $this->sector_service = SectorServiceFactory::create();
    }

    //
    public function getSectors($districtId){
        $sectors = $this->sector_service->getSectors($districtId);
        return view('admin.goals.goals', compact('sectors'));
    }
}
