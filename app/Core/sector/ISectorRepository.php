<?php

namespace App\Core\sector;

use App\Core\district\DistrictService;

interface ISectorRepository
{
    public function getSectors($districtId);

}