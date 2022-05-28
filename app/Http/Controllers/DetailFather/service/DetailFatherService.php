<?php

namespace App\Http\Controllers\DetailFather\service;

use App\Http\Controllers\DetailFather\request\DetailFatherRequest;

interface DetailFatherService
{
    public function detailFatherInfoBasic(DetailFatherRequest $request);

}
