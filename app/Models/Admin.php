<?php

namespace App\Models;

use App\Interfaces\Admin\AdminInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends BaseModel implements AdminInterface
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    public function Roles(){
        return $this->belongsToMany(Rol::class,'rol_admins');
    }
}
