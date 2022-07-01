<?php

namespace App\Core\district;

interface IDistrictRepository
{
    public function getDistricts($countryId);
    public function postDistricts($request);

}