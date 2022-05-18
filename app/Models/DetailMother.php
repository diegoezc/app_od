<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMother extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ocupation_id',
        'business'
    ];
    public function UserDetail(){
        return $this->hasOne(UserDetail::class,'detail_mother_id','id');
    }
    public function Occupation(){
        return $this->hasOne(Occupation::class, 'id','occupation_id');
    }
}
