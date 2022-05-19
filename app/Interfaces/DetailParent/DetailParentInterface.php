<?php

namespace App\Interfaces\DetailParent;

interface DetailParentInterface
{
    const NAME = 'name';
    const OCCUPATION_ID = 'occupation_id';
    const BUSINESS = 'business';
    const FILLABLE =[
        self::NAME,
        self::OCCUPATION_ID,
        self::BUSINESS
    ];
}
