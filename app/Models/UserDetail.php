<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'born-date',
        'location_id',
        'sector_id',
        'user_id',
        'referred_id',
        'detail_mother_id',
        'detail_father_id',
    ];
    public function Location(){
        return $this->hasOne(Location::class,'location_id','id');
    }
    public function Sector(){
        return $this->hasOne(Sector::class,'sector_id','id');
    }
    public function Referred(){
        return $this->hasOne(Referred::class,'referred_id','id');
    }
    public function DetailMother(){
        return $this->hasOne(DetailMother::class,'detail_mother_id','id');
    }
    public function DetailFather(){
        return $this->hasOne(DetailFather::class,'detail_father_id','id');
    }
}


