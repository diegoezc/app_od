<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function Admins(){
        return $this->belongsToMany(Admin::class,'role_admins');
    }
}
