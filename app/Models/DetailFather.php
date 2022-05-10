<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFather extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ocupation_id',
        'business'
    ];
    public function UserDetail(){
        return $this->hasOne(UserDetail::class,'detail_father_id','id');
    }
}
