<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referred extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'name',
        'number',
        'email'
    ];
    public function UserDetail(){
        return $this->hasOne(UserDetail::class,'referred_id','id');
    }

}
