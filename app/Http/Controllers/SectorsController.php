<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\sector\SectorServiceFactory;
use App\Core\district\DistrictServiceFactory;

class SectorsController extends Controller
{
    //
    private $sector_service;
    private $district_service;

    public function __construct()
    {
        $this->sector_service = SectorServiceFactory::create();
        $this->district_service = DistrictServiceFactory::create();
    }

    //
    public function getSectors(){
        $sectors = $this->sector_service->getSectors();
        return view('sectors.sectors', compact('sectors'));
    }

    public function getDistrictSectors($districtId){
        $sectors = $this->sector_service->getDistrictSectors($districtId);
        return view('sectors.sectors', compact('sectors'));
    }

    public function addSector()
    {
        $districts = $this->district_service->getDistricts();
        return view("sectors.add_sector", compact('districts'));
    }

    public function postSector(Request $request)
    {
        $district = $this->sector_service->postSector($request);
        if ($district) {
            flash()->success('Sector saved successfully!');
        } else {
            flash()->error('Failed to Save Sector, please try again!');
        }
        return redirect()->route('sectors');
    }
}
