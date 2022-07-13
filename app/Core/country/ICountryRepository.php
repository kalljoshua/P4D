<?php

namespace App\Core\country;

interface ICountryRepository
{
    public function getCountries();
    public function getCountry($countryId);
    public function postCountry($request);
    public function editCountry($request, $countryId);
    public function deleteCountry($countryId);
}
