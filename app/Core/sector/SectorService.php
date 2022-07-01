<?php

namespace App\Core\sector;

class SectorService
{
    private ISectorRepository $repository;

    public function __construct(SectorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getSectors($districtId)
    {
        return $this->repository->getSectors($districtId);
    }
}