<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\country\CountryServiceFactory;

class CountriesController extends Controller
{
    private $country_service;

    public function __construct()
    {
        $this->country_service = CountryServiceFactory::create();
    }

    //
    public function getCountries(){
        $countries = $this->country_service->getCountries();
        return view('admin.goals.goals', compact('countries'));
    }
}
