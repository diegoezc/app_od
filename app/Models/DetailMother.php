<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMother extends Model
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
}
