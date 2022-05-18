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
    public function scopeSearch($query, $target){
        if ($target != '')
        {
            return $query
                ->where('admins.name','LIKE','%'.$target.'%')
                ->orWhere(function ($query) use ($target) {
                    return $query
                        ->where('admins.email','LIKE','%'.$target.'%');
                });

        }
    }
}
