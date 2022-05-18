<?php

namespace App\Http\Controllers\Sector\repository;

use App\Http\Controllers\Sector\service\SectorService;
use App\Models\Sector;
use App\Repositories\Repository;
use App\Services\Service;

class SectorRepository extends Repository implements Service, SectorService
{
    public function __construct()
    {
        $this->model = new Sector();
    }

    public function getAllSectors()
    {
        return $this->model->all();
    }
}
