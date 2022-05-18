<?php

namespace App\Http\Controllers\Sector\controller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Sector\service\SectorService;

class SectorController extends Controller
{
    protected $sectorService;

    public function __construct(SectorService $sectorService)
    {
        $this->sectorService = $sectorService;
    }
    public function index(){
        $sectors = $this->sectorService->getAllSectors();
        return $this->responseWithData($sectors);

    }


}
