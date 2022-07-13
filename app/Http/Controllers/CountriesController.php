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
    public function getCountries()
    {
        $countries = $this->country_service->getCountries();
        return view('countries.countries', compact('countries'));
    }

    public function addCountry()
    {
        return view('countries.add_country');
    }

    public function postCountry(Request $request)
    {
        $country = $this->country_service->postCountry($request);
        if ($country) {
            flash()->success('Country saved successfully!');
        } else {
            flash()->error('Failed to Save Country, please try again!');
        }
        return redirect()->route('countries');
    }

    public function deleteCountry($countryId)
    {
        $country = $this->country_service->deleteCountry($countryId);
        if ($country) {
            flash()->success('Country deleted successfully!');
        } else {
            flash()->error('Failed to delete Country, please try again!');
        }
        return redirect()->route('countries');
    }
}
