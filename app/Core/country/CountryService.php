<?php

namespace App\Core\country;

class CountryService
{
    private ICountryRepository $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getCountries()
    {
        return $this->repository->getCountries();
    }

    public function postCountry($request)
    {
        return $this->repository->postCountry($request);
    }

    public function editCountry($request, $countryId)
    {
        return $this->repository->editCountry($request, $countryId);
    }

    public function deleteCountry($countryId)
    {
        return $this->repository->deleteCountry($countryId);
    }
}