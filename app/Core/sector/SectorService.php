<?php

namespace App\Core\sector;

class SectorService
{
    private ISectorRepository $repository;

    public function __construct(SectorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getSectors()
    {
        return $this->repository->getSectors();
    }

    public function getDistrictSectors($districtId)
    {
        return $this->repository->getDistrictSectors($districtId);
    }

    public function postSector($request)
    {
        return $this->repository->postSector($request);
    }

    public function deleteSector($sectorId)
    {
        return $this->repository->deleteSector($sectorId);
    }
}