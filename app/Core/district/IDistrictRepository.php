<?php

namespace App\Core\district;

interface IDistrictRepository
{
    public function getDistricts();
    public function getCountryDistricts($countryId);
    public function postDistricts($request);

}