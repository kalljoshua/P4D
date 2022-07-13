<?php

namespace App\Core\district;

class DistrictService
{
    private IDistrictRepository $repository;

    public function __construct(DistrictRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getDistricts()
    {
        return $this->repository->getDistricts();
    }

    public function getCountryDistricts($countryId)
    {
        return $this->repository->getCountryDistricts($countryId);
    }

    public function postDistricts($request)
    {
        return $this->repository->postDistricts($request);
    }
}