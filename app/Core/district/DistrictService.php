<?php

namespace App\Core\district;

class DistrictService
{
    private IDistrictRepository $repository;

    public function __construct(DistrictRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getDistricts($countryId)
    {
        return $this->repository->getDistricts($countryId);
    }

    public function postDistricts($request)
    {
        return $this->repository->postDistricts($request);
    }
}