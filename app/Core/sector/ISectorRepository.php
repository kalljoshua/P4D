<?php

namespace App\Core\sector;

use App\Core\district\DistrictService;

interface ISectorRepository
{
    public function getSectors();
    public function getDistrictSectors($districtId);
    public function postSector($request);
    public function deleteSector($sectorId);

}