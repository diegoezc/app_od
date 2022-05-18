<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFather extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'name',
        'occupation_id',
        'business'
    ];
    public function UserDetail(){
        return $this->hasOne(UserDetail::class,'detail_father_id','id');
    }
    public function Occupation(){
        return $this->hasOne(Occupation::class, 'id','occupation_id');
    }
}
