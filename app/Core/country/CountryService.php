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
}