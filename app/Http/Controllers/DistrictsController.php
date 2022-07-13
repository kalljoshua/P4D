<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\district\DistrictServiceFactory;
use App\Core\country\CountryServiceFactory;
use Whoops\Run;

class DistrictsController extends Controller
{
    //
    private $district_service;
    private $country_service;


    public function __construct()
    {
        $this->district_service = DistrictServiceFactory::create();
        $this->country_service = CountryServiceFactory::create();
    }

    //
    public function getDistricts()
    {
        $districts = $this->district_service->getDistricts();
        return view('districts.districts', compact('districts'));
    }

    public function getCountryDistricts($countryId)
    {
        $countries = $this->district_service->getDistricts($countryId);
        return view('admin.goals.goals', compact('countries'));
    }

    public function addDistrict()
    {
        $countries = $this->country_service->getCountries();
        //dd($countries);
        return view("districts.add_district", compact('countries'));
    }

    public function postDistrict(Request $request)
    {
        $district = $this->district_service->postDistricts($request);
        if ($district) {
            flash()->success('District saved successfully!');
        } else {
            flash()->error('Failed to Save District, please try again!');
        }
        return redirect()->route('districts');
    }
}
