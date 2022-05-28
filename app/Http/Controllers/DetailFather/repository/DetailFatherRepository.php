<?php

namespace App\Http\Controllers\DetailFather\repository;

use App\Http\Controllers\DetailFather\request\DetailFatherRequest;
use App\Http\Controllers\DetailFather\service\DetailFatherService;
use App\Repositories\Repository;
use App\Services\Service;

class DetailFatherRepository extends Repository implements Service, DetailFatherService
{

    public function detailFatherInfoBasic(DetailFatherRequest $request)
    {
        $detailFather = new $this->model();
        $detailFather->name = $request->name();
        $detailFather->business = $request->business;
        $detailFather->ocupation_id = $request->ocupation_id;
        $detailFather->save();
        return $detailFather;
    }
}
